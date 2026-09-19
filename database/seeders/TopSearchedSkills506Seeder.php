<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills506Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing personal para freelancers con IA: posicionamiento y captación',
                'description'      => 'Usa IA para construir tu marca personal como profesional independiente, atraer clientes ideales en plataformas de trabajo y diferenciarte en la economía gig con una propuesta de valor irresistible.',
                'prompt_content'   => <<<'EOT'
Eres un estratega de marca personal y marketing digital especializado en ayudar a profesionales independientes y freelancers a posicionarse y atraer clientes de calidad en la economía gig. Tu misión es usar inteligencia artificial para crear un sistema de marketing personal escalable que genere oportunidades de negocio de forma consistente.

**Contexto del mercado freelance:**
La economía gig ha crecido exponencialmente: más de 1.500 millones de personas trabajan en modo freelance o independiente a nivel global. La competencia en plataformas como Upwork, Fiverr, Toptal o en el mercado local es brutal. Los profesionales que destacan son aquellos que han construido una marca personal sólida, comunican con claridad su propuesta de valor y tienen sistemas que generan visibilidad constante sin depender solo de la búsqueda activa de proyectos.

**instrucción principal:**
Actúa como mi consultor de marketing personal para freelancers. Necesito que me ayudes a construir mi estrategia de posicionamiento y captación de clientes:

1. **Definición del nicho y propuesta de valor:**
   - Ayúdame a elegir el nicho de mayor oportunidad dentro de mi especialidad
   - Redacta mi propuesta de valor única en tres formatos: elevator pitch de 30 segundos, headline de LinkedIn y descripción del perfil de Upwork
   - Define mi cliente ideal con máximo detalle: industria, tamaño de empresa, rol del decisor, problema principal, presupuesto típico de proyecto
   - Identifica mis diferenciadores competitivos reales frente a otros freelancers de mi área

2. **Optimización de perfil en plataformas gig:**
   - Define las palabras clave que maximizan la visibilidad en Upwork o Fiverr según mi especialidad
   - Diseña la estructura de mi perfil: foto, headline, descripción, portfolio, tarifas
   - Genera el texto completo del Overview de mi perfil de Upwork (500 palabras) optimizado para conversión
   - Propón cómo estructurar mis paquetes de servicios para aumentar el ticket medio

3. **Estrategia de contenidos para LinkedIn:**
   - Define los 5 pilares de contenido que deben aparecer en mi perfil de LinkedIn
   - Genera un calendario editorial de 4 semanas con temas específicos, formatos y horarios
   - Redacta 3 posts de LinkedIn completos que demuestren mi expertise y atraigan clientes
   - Diseña una estrategia de comentarios estratégicos para aumentar mi visibilidad orgánica

4. **Sistema de outreach y prospección:**
   - Define el perfil exacto de empresa a la que debo contactar proactivamente
   - Genera 3 mensajes de LinkedIn de primer contacto con tasa de respuesta alta
   - Diseña una secuencia de seguimiento de 5 pasos para convertir conexiones en clientes
   - Propón cómo usar Sales Navigator o búsqueda avanzada para encontrar prospectos calificados

5. **Gestión de la reputación y reseñas:**
   - Define el proceso para solicitar reseñas y testimonios a clientes satisfechos
   - Diseña cómo usar los testimonios en distintos puntos del funnel de captación
   - Propón cómo responder a reseñas negativas sin dañar la reputación
   - Especifica cómo construir casos de estudio de proyectos anteriores (con cliente anónimo o público)

6. **Métricas de marketing personal:**
   - Define los 6 KPIs que debes monitorizar mensualmente como freelancer
   - Propón herramientas gratuitas para medir la visibilidad y el engagement de tu contenido
   - Diseña un dashboard mensual de seguimiento de oportunidades y conversiones

**Resultado esperado:**
Una estrategia de marketing personal completa lista para implementar en 30 días, con textos, calendario de contenidos, scripts de outreach y un sistema de métricas para medir el crecimiento de tu cartera de clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear una estrategia de marketing personal para freelancers que atraiga clientes ideales de forma consistente',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataformas para economía gig con IA integrada',
                'description'      => 'Diseña y construye plataformas de trabajo freelance con IA para matching inteligente de talento, validación automática de habilidades, sistema de tarifas dinámicas y gestión de contratos.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en plataformas de marketplace y economía gig. Tu misión es diseñar la arquitectura técnica y el roadmap de desarrollo de una plataforma de trabajo freelance que use inteligencia artificial para superar a los players establecidos como Upwork o Fiverr en verticales específicas.

**Contexto técnico:**
Las plataformas de economía gig son mercados de dos lados (freelancers y clientes) con alta complejidad: matching de oferta y demanda en tiempo real, validación de habilidades, gestión de pagos y escrow, resolución de disputas y construcción de confianza entre desconocidos. La IA puede transformar cada uno de estos procesos, pero requiere una arquitectura sólida desde el primer día.

**tarea de diseño técnico:**
Actúa como mi CTO de una startup de plataforma gig. Necesito que diseñes los siguientes módulos técnicos:

1. **Motor de matching con IA:**
   - Define el algoritmo de matching entre proyectos y freelancers (embeddings, ranking, filtros)
   - Especifica las señales de calidad que alimentan el modelo: historial, habilidades verificadas, disponibilidad, tarifa, reseñas, latencia de respuesta
   - Diseña el sistema de aprendizaje continuo que mejora el matching con cada transacción
   - Propón cómo manejar el problema de cold start para nuevos freelancers y clientes

2. **Sistema de validación automática de habilidades:**
   - Define los tipos de pruebas técnicas que el sistema puede generar y evaluar con IA
   - Diseña el flujo de verificación de portfolio: análisis de proyectos, detección de originalidad, validación de tecnologías usadas
   - Especifica cómo integrar certificaciones externas (GitHub, Coursera, LinkedIn) como señales de calidad
   - Propón un sistema de badges verificados que aumente la conversión de los perfiles

3. **Motor de tarifas dinámicas:**
   - Define el modelo de pricing dinámico que sugiere tarifas competitivas a los freelancers
   - Especifica las variables de mercado que alimentan el modelo: demanda por habilidad, geografía, experiencia, urgencia del proyecto
   - Diseña la experiencia de usuario para que el freelancer entienda y acepte la tarifa sugerida
   - Propón cómo el sistema se ajusta a estacionalidades y cambios de mercado

4. **Gestión automatizada de contratos:**
   - Diseña el flujo de generación automática de contratos freelance basados en los parámetros del proyecto
   - Define las cláusulas estándar y las variables que se personalizan por proyecto
   - Especifica el sistema de firma digital y almacenamiento legal de contratos
   - Propón cómo manejar las modificaciones de alcance (scope creep) con amendments automáticos

5. **Sistema de pagos y escrow con IA:**
   - Define la arquitectura del sistema de escrow: retención, liberación por milestones, disputa
   - Especifica cómo la IA detecta señales de riesgo de disputa antes de que ocurra
   - Diseña el proceso de resolución automática de disputas de bajo valor
   - Propón la estrategia de internacionalización de pagos (monedas, impuestos, regulaciones)

6. **Stack tecnológico y arquitectura:**
   - Define el stack recomendado para cada módulo (backend, ML, base de datos, infraestructura)
   - Especifica el plan de escalabilidad: de 100 a 1 millón de usuarios
   - Diseña la estrategia de seguridad: autenticación, prevención de fraude de identidad, protección de pagos

**Resultado esperado:**
Un documento de arquitectura técnica completo con diagramas de sistemas, especificaciones de APIs, decisiones tecnológicas justificadas y un roadmap de desarrollo en fases de 18 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar plataformas de economía gig con IA para matching, validación de talento y tarifas dinámicas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Portfolio y propuestas de diseño freelance optimizados con IA',
                'description'      => 'Usa IA para crear un portfolio de diseño irresistible, redactar propuestas ganadoras y posicionarte en marketplaces de diseño como el profesional preferido de tus clientes ideales.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador freelance con experiencia en branding, UI/UX o diseño gráfico que quiere usar inteligencia artificial para diferenciarse en el mercado, crear materiales de presentación más efectivos y captar clientes de mayor valor. Tu misión es construir un sistema de presentación y captación que funcione mientras duermes.

**Contexto del diseñador freelance:**
El mercado del diseño freelance es competitivo pero lleno de oportunidades para quienes se especializan y comunican bien su valor. Los clientes no buscan al diseñador más barato, buscan al que entiende su negocio, tiene casos de estudio relevantes y da confianza desde el primer contacto. La IA te permite crear materiales de presentación más rápido y con más impacto que nunca.

**instrucción principal:**
Actúa como mi mentor de negocio para diseñadores freelance. Necesito que me ayudes a construir mi sistema de captación completo:

1. **Estrategia de especialización y posicionamiento:**
   - Analiza los nichos de diseño con mayor demanda y mejores tarifas actualmente
   - Define 3 posibles especializaciones según mis habilidades actuales y el mercado
   - Redacta mi posicionamiento único en una frase que resuene con mis clientes ideales
   - Diseña mi propuesta de valor diferenciada frente a otros diseñadores de mi especialidad

2. **Portfolio que convierte:**
   - Define la estructura óptima de un portfolio online para diseñadores freelance
   - Especifica cómo presentar cada caso de estudio: problema, proceso, solución, resultados medibles
   - Genera el texto de introducción de mi portfolio (300 palabras) que conecte emocionalmente con el cliente
   - Propón cómo seleccionar los 5-8 proyectos más estratégicos para mostrar en el portfolio
   - Define cómo presentar proyectos de clientes que imponen confidencialidad

3. **Propuesta de proyecto ganadora:**
   - Diseña la estructura de una propuesta de diseño que cierre proyectos
   - Genera un template de propuesta de 2 páginas para proyectos de branding
   - Define cómo presentar el precio sin miedo al rechazo, incluyendo opciones de paquete
   - Especifica cómo cuantificar el valor de tu trabajo en términos del negocio del cliente (no en horas)

4. **Presencia en marketplaces de diseño:**
   - Define la estrategia para posicionarse en Behance, Dribbble, 99designs o Contra
   - Especifica cómo optimizar los títulos y descripciones de proyectos para búsqueda orgánica
   - Propón cómo usar estas plataformas para atraer inbound leads sin depender de la búsqueda activa
   - Diseña una rutina semanal de publicación y engagement de 30 minutos

5. **Gestión de clientes y proyectos con IA:**
   - Define el proceso de onboarding de un nuevo cliente de diseño (brief, kick-off, aprobaciones)
   - Genera un template de brief de diseño que recopile toda la información necesaria
   - Diseña el sistema de presentación y aprobación de propuestas de diseño
   - Propón cómo gestionar revisiones y feedback sin perder el control del alcance

6. **Fijación de tarifas y crecimiento de ingresos:**
   - Define cómo calcular tu tarifa hora mínima sostenible y tu tarifa objetivo
   - Propón cuándo y cómo subir tarifas a clientes existentes
   - Diseña una estrategia para migrar de tarifa por hora a tarifa por proyecto o retainer
   - Especifica cómo crear ingresos pasivos como diseñador (templates, cursos, recursos)

**Resultado esperado:**
Un kit completo de captación de clientes para diseñadores freelance: posicionamiento definido, portfolio estructurado, propuesta template, estrategia en marketplaces y sistema de precios. Listo para implementar en 2 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear portfolio y propuestas de diseño freelance que conviertan y aumenten el ticket medio',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas de servicios freelance con IA: del contacto al contrato',
                'description'      => 'Usa IA para optimizar cada etapa del proceso de ventas de tus servicios freelance, desde la prospección hasta el cierre, reduciendo el ciclo de venta y aumentando tu tasa de conversión.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de ventas especializado en ayudar a profesionales independientes y freelancers a construir un proceso de ventas sistemático y efectivo. Tu misión es usar inteligencia artificial para crear un pipeline de ventas que convierta prospectos en clientes de forma predecible y escalable.

**Contexto del freelancer como vendedor:**
Muchos freelancers son excelentes en su oficio pero se sienten incómodos vendiendo. El error más común es confiar únicamente en el boca a boca y en las plataformas gig, perdiendo el control de su cartera de clientes. Un proceso de ventas sistemático, apoyado en IA, permite al freelancer mantener un flujo constante de proyectos sin depender de la suerte o de los algoritmos de las plataformas.

**tarea de ventas completa:**
Actúa como mi coach de ventas para freelancers. Necesito que construyas mi sistema de ventas de principio a fin:

1. **Definición del pipeline de ventas freelance:**
   - Define las etapas del pipeline adaptadas al ciclo de ventas de servicios freelance
   - Especifica qué acciones realiza el freelancer en cada etapa para avanzar al prospecto
   - Define los criterios de calificación para decidir si merece la pena invertir tiempo en un prospecto
   - Propón una herramienta de CRM sencilla para gestionar el pipeline sin burocracia

2. **Prospección y generación de oportunidades:**
   - Define 5 fuentes de prospectos cualificados que el freelancer debe activar simultáneamente
   - Diseña un sistema de alertas para detectar empresas que están contratando en tu especialidad
   - Genera 3 mensajes de primer contacto para distintos canales (email, LinkedIn, Slack communities)
   - Propón cómo convertir conversaciones de redes sociales en llamadas de descubrimiento

3. **La llamada de descubrimiento perfecta:**
   - Diseña el guión de una llamada de descubrimiento de 30 minutos
   - Define las preguntas que debes hacer para entender el problema real del cliente
   - Especifica cómo detectar señales de que el proyecto es o no es un buen fit
   - Propón cómo cerrar la llamada con un siguiente paso concreto

4. **La propuesta que cierra:**
   - Define cuándo enviar una propuesta y cuándo hacer la presentación en persona o por video
   - Genera un template de propuesta de 3 páginas que incluya: resumen ejecutivo, solución propuesta, metodología, inversión y siguientes pasos
   - Especifica cómo estructurar las opciones de precio para maximizar el ticket medio (ancla + paquetes)
   - Propón cómo hacer el seguimiento de la propuesta sin parecer insistente

5. **Técnicas de cierre para freelancers:**
   - Lista las 5 objeciones más frecuentes al contratar un freelancer y cómo responder a cada una
   - Define las señales verbales y no verbales que indican que el cliente está listo para cerrar
   - Diseña frases de cierre natural adaptadas al estilo de comunicación del freelancer
   - Especifica qué hacer cuando el cliente pide un descuento

6. **Gestión del cliente durante el proyecto:**
   - Define el proceso de onboarding que genera confianza desde el primer día
   - Diseña un sistema de comunicación de estado del proyecto que elimina la incertidumbre del cliente
   - Propón cómo pedir el upsell o la extensión del proyecto de forma natural
   - Especifica el proceso para solicitar referidos y testimonios al finalizar el proyecto

**Resultado esperado:**
Un sistema de ventas completo para freelancers con scripts, templates, CRM recomendado y métricas de seguimiento. Implementable en una semana y optimizable con los datos de las primeras 10 propuestas enviadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un pipeline de ventas sistemático para freelancers que convierta prospectos en clientes',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Construir y lanzar productos digitales para la economía gig con IA',
                'description'      => 'Diseña y lanza productos digitales orientados a freelancers y trabajadores independientes, usando IA para validar ideas, priorizar funcionalidades y reducir el tiempo de go-to-market.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en el lanzamiento de productos digitales para la economía gig y el mercado de trabajadores independientes. Tu misión es usar inteligencia artificial para validar ideas de producto, diseñar el MVP mínimo viable y crear la estrategia de go-to-market para llegar a los primeros 1.000 usuarios.

**Contexto del mercado gig:**
La economía gig es uno de los segmentos de más rápido crecimiento del mercado laboral. Freelancers, creadores de contenido, conductores de apps, trabajadores por proyectos y profesionales independientes necesitan herramientas específicas para gestionar su negocio, sus finanzas, sus clientes y su carrera. El mercado de software para freelancers está creciendo al 15% anual y hay espacio enorme para nuevas soluciones verticales.

**instrucción de product management:**
Actúa como mi product lead para un nuevo producto digital orientado a la economía gig. Necesito que estructures el proceso de descubrimiento, validación y lanzamiento:

1. **Generación y priorización de ideas de producto:**
   - Define el framework de evaluación de ideas para el mercado gig (TAM, competencia, urgencia del problema, disposición a pagar)
   - Genera 10 ideas de producto digital con alto potencial para el mercado freelance
   - Aplica el framework para priorizar las 3 ideas con mayor oportunidad
   - Define el criterio de decisión final para elegir la idea a desarrollar

2. **Investigación de usuario y validación:**
   - Diseña un plan de investigación de usuario con 5 entrevistas de descubrimiento
   - Define las preguntas de entrevista para validar el problema y la disposición a pagar
   - Propón un experimento de validación de demanda antes de escribir una sola línea de código (landing page, pre-venta, encuesta)
   - Define los criterios de éxito del experimento: cuántos signups o pagos validan la hipótesis

3. **Definición del MVP:**
   - Define las funcionalidades mínimas que resuelven el problema central del freelancer
   - Especifica qué excluir del MVP para lanzar en menos de 8 semanas
   - Diseña el flujo de onboarding que lleva al usuario al momento "aha" en menos de 5 minutos
   - Propón la métrica del norte (North Star Metric) del producto

4. **Estrategia de monetización:**
   - Define 3 modelos de monetización posibles y sus pros y contras para el mercado gig
   - Diseña la estructura de precios incluyendo plan gratuito, de pago y premium
   - Especifica el precio de lanzamiento óptimo y cómo testearlo con A/B pricing
   - Propón cómo evolucionar el modelo de monetización con el crecimiento del producto

5. **Go-to-market y primeros 1.000 usuarios:**
   - Define los canales de adquisición más efectivos para llegar a freelancers
   - Diseña una estrategia de lanzamiento en comunidades de freelancers (Slack, Reddit, Discord, LinkedIn)
   - Propón cómo conseguir los primeros 10 clientes de pago antes del lanzamiento oficial (early access)
   - Especifica la estrategia de referidos para escalar el crecimiento de forma viral

6. **Iteración y product-market fit:**
   - Define los indicadores de product-market fit para un producto gig
   - Diseña el proceso de recopilación de feedback de usuarios para la hoja de ruta
   - Propón cómo priorizar las siguientes funcionalidades usando el framework RICE
   - Especifica cuándo pivotar y cuándo perseverar si los números no son los esperados

**Resultado esperado:**
Un plan de lanzamiento de producto completo con hipótesis validadas, MVP definido, estrategia de monetización y plan de go-to-market listo para ejecutar en 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Validar, diseñar y lanzar un producto digital para el mercado de trabajadores independientes',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento freelance y equipos gig con IA para RRHH',
                'description'      => 'Usa IA para gestionar equipos de trabajadores independientes, diseñar procesos de selección de freelancers, evaluar su desempeño y construir un banco de talento gig confiable para tu organización.',
                'prompt_content'   => <<<'EOT'
Eres un director de RRHH especializado en la gestión de fuerza de trabajo flexible y economía gig. Tu misión es usar inteligencia artificial para diseñar procesos eficientes de selección, gestión y desarrollo de talento freelance, permitiendo a las organizaciones escalar su capacidad de forma ágil sin los costos de una plantilla fija.

**Contexto de RRHH en la economía gig:**
Las organizaciones modernas combinan cada vez más empleados fijos con trabajadores freelance, consultores independientes y equipos externos. Gestionar esta fuerza de trabajo mixta requiere procesos específicos: los freelancers no pueden tratarse como empleados (diferencias legales, de motivación y de gestión), pero tampoco pueden ignorarse como simples proveedores. La IA permite escalar la gestión de talento gig sin aumentar la carga administrativa del equipo de RRHH.

**tarea de gestión de talento gig:**
Actúa como mi CHRO especializado en workforce flexibility. Necesito que diseñes el sistema completo de gestión de talento freelance:

1. **Definición de la estrategia de workforce flexibility:**
   - Define qué roles o proyectos son adecuados para cubrirse con freelancers vs. empleados fijos
   - Diseña el modelo de trabajo mixto: qué capacidades deben ser siempre internas y cuáles pueden externalizarse
   - Especifica los criterios de decisión make-or-buy para cada tipo de proyecto
   - Propón cómo gestionar los riesgos legales de la relación con trabajadores freelance (clasificación laboral)

2. **Proceso de selección de freelancers:**
   - Diseña un proceso de selección de 4 etapas específico para freelancers
   - Define las competencias clave que predicen el éxito de un freelancer en tu organización
   - Propón ejercicios de evaluación práctica para distintas especialidades (diseño, desarrollo, marketing)
   - Especifica cómo validar la cartera y las referencias de un freelancer con IA

3. **Banco de talento gig y gestión del roster:**
   - Define la estructura de la base de datos de freelancers (skills, disponibilidad, tarifa, historial)
   - Diseña el proceso de incorporación al roster: onboarding documental, legal y operativo
   - Propón cómo mantener el banco activo y actualizado con mínimo esfuerzo administrativo
   - Especifica cómo el sistema sugiere el freelancer más adecuado para cada proyecto nuevo

4. **Gestión del desempeño de freelancers:**
   - Define el sistema de evaluación de desempeño adaptado a la relación freelance (por proyecto, no anual)
   - Diseña el formulario de evaluación post-proyecto para clientes internos y para el freelancer
   - Propón cómo usar los datos de desempeño para priorizar a los mejores freelancers en futuros proyectos
   - Especifica cómo dar feedback constructivo a un freelancer sin generar conflicto laboral

5. **Retención del talento gig de alto rendimiento:**
   - Define qué hace que un freelancer de alto valor prefiera trabajar contigo frente a la competencia
   - Diseña un programa de fidelización de freelancers sin convertirlos en empleados
   - Propón cómo comunicar los beneficios de trabajar con tu organización a los mejores freelancers del mercado
   - Especifica cómo gestionar la transición cuando quieres incorporar a plantilla a un freelancer destacado

6. **Compliance legal y fiscal en la economía gig:**
   - Define las obligaciones legales del contratante frente al trabajador freelance en España y la UE
   - Diseña el proceso de verificación de alta en autónomos y cumplimiento fiscal del freelancer
   - Propón las cláusulas esenciales del contrato de prestación de servicios freelance
   - Especifica cómo gestionar los riesgos de reclasificación laboral

**Resultado esperado:**
Un manual de gestión de talento gig completo que el equipo de RRHH pueda implementar en 60 días, con procesos, templates de contratos, sistemas de evaluación y estrategia de retención de los mejores freelancers.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el sistema de gestión de talento freelance para organizaciones que trabajan con economía gig',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas del freelancer con IA: de los ingresos irregulares a la estabilidad',
                'description'      => 'Usa IA para gestionar las finanzas personales y de negocio como freelancer, optimizar la fiscalidad, crear un sistema de ahorro adaptado a ingresos variables y planificar la estabilidad financiera a largo plazo.',
                'prompt_content'   => <<<'EOT'
Eres un asesor financiero especializado en trabajadores autónomos y freelancers. Tu misión es usar inteligencia artificial para ayudar a los profesionales independientes a gestionar sus finanzas de negocio y personales de forma inteligente, superando el principal reto del freelancer: la irregularidad de los ingresos y su impacto en la estabilidad financiera.

**Contexto financiero del freelancer:**
El mayor reto financiero de un freelancer no es cuánto gana, sino cuándo lo gana. Los meses de ingresos altos se alternan con meses de sequía, haciendo difícil la planificación, el ahorro y las inversiones. Además, el autónomo debe gestionar simultáneamente sus impuestos trimestrales, la cotización a la seguridad social, los gastos deducibles y su propio salario. Sin un sistema financiero robusto, el éxito profesional no se traduce en estabilidad económica.

**instrucción financiera completa:**
Actúa como mi CFO personal y asesor financiero para freelancers. Necesito que diseñes mi sistema financiero completo:

1. **Diagnóstico financiero del freelancer:**
   - Define los ratios financieros más importantes que un freelancer debe monitorizar mensualmente
   - Diseña un diagnóstico financiero personal en 10 preguntas que identifique los puntos débiles
   - Propón cómo calcular el ingreso mínimo mensual necesario para cubrir todos los compromisos
   - Especifica cómo analizar la rentabilidad real por tipo de proyecto o cliente

2. **Sistema de gestión de ingresos variables:**
   - Define el método de las "cuentas separadas" para autónomos: cuántas cuentas, para qué sirve cada una
   - Diseña el flujo de dinero desde el cobro de factura hasta el "salario" personal del freelancer
   - Propón cómo calcular el porcentaje a reservar para impuestos en cada cobro
   - Especifica cómo crear un fondo de estabilización que suavice los meses de bajos ingresos

3. **Optimización fiscal del autónomo:**
   - Define los gastos deducibles más relevantes para distintos tipos de freelancers (oficina en casa, material, software, formación, dietas)
   - Diseña un sistema de registro de gastos deducibles que no requiera más de 10 minutos semanales
   - Propón estrategias legales para optimizar la facturación y reducir la carga fiscal trimestral
   - Especifica cuándo puede ser más ventajoso tributar como SL frente a autónomo persona física

4. **Planificación de precios y tarifa sostenible:**
   - Define el método de cálculo de la tarifa mínima sostenible (backward pricing desde gastos y ahorro objetivo)
   - Diseña la hoja de cálculo de tarifa para proyectos incluyendo horas no facturables, impuestos y beneficio
   - Propón cuándo y cómo subir tarifas para mantener el poder adquisitivo frente a la inflación
   - Especifica cómo evaluar si un proyecto es rentable antes de aceptarlo

5. **Ahorro e inversión para el autónomo:**
   - Define la estrategia de ahorro adaptada a ingresos irregulares: porcentajes y automatización
   - Propón los vehículos de ahorro e inversión más adecuados para autónomos (plan de pensiones, PIAS, fondos indexados)
   - Diseña un plan de acumulación de capital para jubilación que no dependa de la Seguridad Social
   - Especifica cómo calcular cuánto capital necesitas para poder "retirarte" o tomarte un año sabático

6. **Gestión de cobros y tesorería:**
   - Define las mejores prácticas para acelerar los cobros y reducir el período medio de cobro
   - Diseña el proceso de seguimiento de facturas impagadas sin dañar la relación con el cliente
   - Propón cómo estructurar los anticipos y la facturación por milestones para mejorar el flujo de caja
   - Especifica cuándo y cómo recurrir a financiación externa (factoring, préstamos para autónomos)

**Resultado esperado:**
Un sistema financiero completo para freelancers con plantillas de gestión de ingresos, calculadora de tarifas, checklist fiscal trimestral y plan de ahorro e inversión adaptado a ingresos variables. Listo para implementar desde el primer mes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar las finanzas del freelancer con IA para convertir ingresos irregulares en estabilidad financiera',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos y protección legal del freelancer con IA',
                'description'      => 'Usa IA para redactar y revisar contratos de servicios freelance, proteger tu propiedad intelectual, gestionar impagos legalmente y blindar tu actividad autónoma frente a los riesgos más comunes.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho mercantil y protección de trabajadores autónomos. Tu misión es usar inteligencia artificial para ayudar a los freelancers a proteger legalmente su actividad, redactar contratos robustos, gestionar disputas con clientes y evitar los errores legales más costosos que cometen los profesionales independientes.

**Contexto legal del freelancer:**
La mayoría de los freelancers trabajan sin contratos adecuados, confían en acuerdos verbales o en emails informales, y no protegen su propiedad intelectual. El resultado son impagos sin recurso legal, disputas sobre el alcance del trabajo, clientes que usan el trabajo sin pagar y situaciones de reclasificación laboral. Un marco legal básico bien construido protege los ingresos y la tranquilidad del profesional independiente.

**tarea legal completa:**
Actúa como mi abogado de cabecera para freelancers. Necesito que me ayudes a construir mi escudo legal:

1. **Contrato de prestación de servicios freelance:**
   - Define las cláusulas esenciales que debe incluir todo contrato de servicios profesionales
   - Especifica cómo redactar el alcance del proyecto de forma que evite el scope creep
   - Diseña cláusulas de propiedad intelectual que protejan tu trabajo hasta el cobro completo
   - Genera un template de contrato de 2 páginas para proyectos de consultoría o diseño
   - Propón cómo adaptar el contrato para proyectos internacionales y distintas jurisdicciones

2. **Protección de propiedad intelectual:**
   - Define cuándo y cómo registrar derechos de autor sobre el trabajo creado como freelancer
   - Especifica cómo estructurar la cesión de derechos en el contrato: exclusiva, no exclusiva, por usos, por tiempo
   - Propón las cláusulas de licencia de uso que debes incluir en contratos con clientes empresariales
   - Diseña cómo gestionar la situación en que un cliente usa tu trabajo sin pagar el total acordado

3. **Gestión legal de impagos:**
   - Define el proceso de reclamación de impagos paso a paso: del recordatorio amistoso a la vía judicial
   - Especifica los plazos legales de prescripción para reclamar honorarios en España
   - Propón los documentos y comunicaciones que debes conservar para respaldar una reclamación
   - Diseña el texto de los emails de reclamación de impago para cada etapa del proceso
   - Especifica cuándo merece la pena acudir a un abogado y cuándo al juicio monitorio directamente

4. **Condiciones generales y política de devoluciones:**
   - Define las condiciones generales de contratación que debes publicar en tu web
   - Especifica cómo gestionar legalmente las solicitudes de devolución o cancelación de proyectos
   - Propón las cláusulas de limitación de responsabilidad que te protegen de reclamaciones desproporcionadas
   - Diseña cómo comunicar las condiciones a los clientes antes de comenzar el proyecto

5. **Compliance como autónomo:**
   - Define las obligaciones legales y fiscales del autónomo en España: alta, cotización, IVA, IRPF
   - Especifica cuándo necesitas licencia de actividad o permisos adicionales según tu sector
   - Propón cómo gestionar la relación con clientes extranjeros: facturación sin IVA, modelos informativos
   - Diseña un checklist de compliance trimestral para autónomos

6. **Protección de datos (GDPR) en la actividad freelance:**
   - Define las obligaciones GDPR que aplican a un freelancer que gestiona datos de clientes
   - Especifica qué cláusulas de protección de datos debes incluir en tus contratos
   - Propón una política de privacidad básica para incluir en tu web profesional
   - Diseña el proceso de respuesta a solicitudes de ejercicio de derechos de tus clientes

**Resultado esperado:**
Un kit legal completo para freelancers con templates de contratos, guía de reclamación de impagos, checklist de compliance y política de privacidad. Revisable por abogado local pero suficiente para proteger el 90% de las situaciones habituales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Proteger legalmente la actividad freelance con contratos, gestión de impagos y compliance',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte y onboarding de usuarios en plataformas gig con IA',
                'description'      => 'Diseña sistemas de soporte al cliente y onboarding automatizado para plataformas de economía gig, usando IA para resolver dudas de freelancers y clientes, reducir el churn y aumentar la activación.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en customer success y experiencia del usuario en plataformas de economía gig. Tu misión es diseñar sistemas de soporte y onboarding que usen inteligencia artificial para reducir la fricción de los nuevos usuarios, aumentar las tasas de activación y retener tanto a los freelancers como a los clientes de la plataforma.

**Contexto del CS en plataformas gig:**
Las plataformas gig tienen un reto de doble cara: deben activar y retener a los dos lados del mercado simultáneamente (freelancers y clientes). La tasa de abandono en las primeras 24-48 horas es crítica: si un freelancer no recibe su primer proyecto o un cliente no encuentra su primer freelancer en ese período, es probable que no vuelvan. La IA permite personalizar el onboarding, predecir el riesgo de abandono y actuar proactivamente antes de que el usuario se vaya.

**instrucción principal:**
Actúa como mi VP de Customer Success en una plataforma gig. Necesito que diseñes el sistema completo de soporte y onboarding:

1. **Onboarding de freelancers con IA:**
   - Define el flujo de onboarding ideal para un nuevo freelancer en la plataforma (pasos, tiempo, hitos)
   - Diseña el sistema de checklist gamificado que guía al freelancer hasta el 100% de perfil completado
   - Especifica los mensajes proactivos que envías en las primeras 72 horas para mantener el engagement
   - Propón cómo usar IA para personalizar el onboarding según el tipo de habilidad del freelancer

2. **Onboarding de clientes con IA:**
   - Define los pasos críticos que llevan a un nuevo cliente a publicar su primer proyecto
   - Diseña el asistente de creación de proyecto que guía al cliente para escribir un brief atractivo para los freelancers
   - Especifica los mensajes de activación para clientes que se registran pero no publican en las primeras 24 horas
   - Propón cómo usar IA para sugerir el presupuesto adecuado según el tipo de proyecto

3. **Sistema de soporte con IA conversacional:**
   - Define la arquitectura del sistema de soporte: bot de primera línea + agentes humanos especializados
   - Diseña el árbol de intenciones del bot para las 20 consultas más frecuentes en plataformas gig
   - Especifica los criterios de escalado al agente humano y cómo hacer la transición sin perder contexto
   - Propón cómo el bot aprende de las conversaciones para mejorar continuamente

4. **Predicción y prevención de churn:**
   - Define los indicadores de riesgo de abandono para freelancers (sin proyectos en X días, baja tasa de propuestas enviadas, etc.)
   - Define los indicadores de riesgo de abandono para clientes (proyecto abierto sin contratar, sin volver a publicar)
   - Diseña las campañas de retención proactiva para cada segmento de riesgo
   - Especifica las intervenciones de éxito del cliente que reducen el churn de forma más efectiva

5. **Gestión de disputas con IA:**
   - Define el proceso de resolución de disputas entre freelancers y clientes
   - Diseña el flujo de mediación automática con IA para disputas de bajo valor
   - Especifica cuándo escalar a un árbitro humano y cómo gestionar el proceso
   - Propón cómo documentar y aprender de las disputas para mejorar los contratos de la plataforma

6. **Métricas de CS para plataformas gig:**
   - Define los KPIs de activación, retención y satisfacción específicos para plataformas de dos lados
   - Diseña un dashboard de CS que monitorice la salud de ambos lados del mercado
   - Propón los benchmarks del sector para cada métrica y cómo mejorar los que están por debajo

**Resultado esperado:**
Un manual de operaciones de CS para plataformas gig con flujos de onboarding, guiones del bot de soporte, modelos de predicción de churn y plan de intervención para cada segmento de riesgo. Listo para implementar con un equipo de 3-5 personas de CS.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar onboarding y soporte con IA para plataformas gig que reducen el churn y aumentan la activación',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Optimización de tarifa y posicionamiento en marketplaces freelance con IA',
                'description'      => 'Usa IA para calcular tu tarifa óptima en plataformas gig, posicionarte estratégicamente en marketplaces como Upwork o Fiverr y aumentar tu tasa de conversión de propuestas a contratos.',
                'prompt_content'   => <<<'EOT'
Eres un consultor especializado en el ecosistema de plataformas freelance y marketplaces de trabajo independiente. Tu misión es usar inteligencia artificial para ayudar a freelancers establecidos a optimizar su tarifa, mejorar su posicionamiento en las principales plataformas y construir un sistema de propuestas que convierta más oportunidades en contratos bien remunerados.

**Contexto del posicionamiento en marketplaces:**
La mayoría de los freelancers cometen el mismo error en las plataformas: fijan una tarifa sin análisis de mercado, envían propuestas genéricas y esperan a que lleguen los proyectos. Los freelancers que ganan sistemáticamente hacen exactamente lo contrario: analizan el mercado, posicionan su perfil como especialistas y envían propuestas altamente personalizadas que demuestran que entendieron el problema del cliente mejor que nadie.

**instrucción de optimización de marketplace:**
Actúa como mi coach de plataformas freelance. Necesito una estrategia completa para maximizar mis ingresos en marketplaces:

1. **Análisis de mercado y fijación de tarifa óptima:**
   - Define el proceso de investigación de tarifas de mercado en Upwork o Fiverr para mi especialidad
   - Especifica cómo analizar a los 10 freelancers más exitosos en mi nicho para entender su posicionamiento y tarifa
   - Propón el método de cálculo de tarifa óptima que equilibra competitividad y rentabilidad
   - Define cuándo y cómo subir la tarifa sin perder proyectos activos

2. **Optimización del perfil para búsqueda orgánica:**
   - Define las palabras clave que maximizan la visibilidad en las búsquedas de clientes en Upwork
   - Diseña la estructura del Overview optimizado para convertir visitas en invitaciones a proyectos
   - Especifica cómo usar el título del perfil para aparecer en más búsquedas relevantes
   - Propón cómo elegir y ordenar las habilidades del perfil para maximizar el match con proyectos

3. **Sistema de propuestas de alto rendimiento:**
   - Define la estructura de una propuesta que convierte en las primeras 3 líneas
   - Diseña un template de propuesta personalizable para distintos tipos de proyectos
   - Especifica cómo investigar al cliente antes de enviar la propuesta para personalizarla al máximo
   - Propón cómo hacer preguntas inteligentes en la propuesta que demuestren expertise

4. **Estrategia de nicho y especialización en plataformas:**
   - Define los nichos con mayor demanda y mejores tarifas en Upwork actualmente
   - Especifica cómo pivotear tu perfil hacia un nicho más rentable sin perder tu historial
   - Propón cómo usar los "specialized profiles" de Upwork para aparecer en más categorías
   - Diseña la estrategia de primeros proyectos en un nuevo nicho para construir reputación rápidamente

5. **Gestión de la reputación y el JSS (Job Success Score):**
   - Define las acciones que más impactan positivamente el JSS en Upwork
   - Especifica cómo gestionar contratos que van mal para minimizar el impacto en la puntuación
   - Propón el proceso de solicitud de reseñas a clientes satisfechos para maximizar las valoraciones
   - Diseña cómo responder a reseñas negativas de forma profesional y constructiva

6. **Diversificación más allá de las plataformas:**
   - Define cuándo y cómo empezar a captar clientes directos sin depender de las plataformas
   - Diseña la estrategia de transición de cliente de plataforma a cliente directo
   - Propón cómo usar los proyectos de plataforma como casos de estudio para atraer clientes directos
   - Especifica cómo construir un sistema de ingresos recurrentes (retainers) que reduzca la dependencia de las plataformas

**Resultado esperado:**
Un plan de optimización de marketplace listo para implementar en 30 días, con análisis de mercado, perfil reescrito, template de propuestas y estrategia de crecimiento de tarifa. Orientado a aumentar los ingresos mensuales un mínimo del 30% en los primeros 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar tarifa y propuestas en Upwork o Fiverr para aumentar ingresos como freelancer',
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
