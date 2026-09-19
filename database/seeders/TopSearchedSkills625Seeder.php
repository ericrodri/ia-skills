<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills625Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de clínicas veterinarias para ganadería con IA',
                'description'      => 'Usa IA para crear campañas de marketing dirigidas a ganaderos y explotaciones pecuarias, destacando servicios de sanidad animal para bovino, porcino y ovino.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing especializado en el sector veterinario rural y de ganadería. Tu objetivo es ayudarme a crear una estrategia de marketing efectiva para una clínica veterinaria que atiende grandes animales: bovino de carne y leche, porcino, ovino y caprino, así como équidos en explotaciones ganaderas.

Contexto de la clínica:
- Área de influencia: zona rural con explotaciones ganaderas medianas y grandes
- Servicios principales: sanidad preventiva, reproducción asistida, cirugía de campo, diagnóstico laboratorial, asesoría nutricional
- Clientes objetivo: ganaderos profesionales, cooperativas agropecuarias, explotaciones intensivas y extensivas
- Presupuesto de marketing: limitado, enfoque en retorno de inversión medible

Tarea principal: Desarrolla una estrategia de marketing completa de 90 días adaptada a la realidad del sector ganadero.

Para cada elemento estratégico, incluye:

1. Análisis del cliente ganadero típico:
   - Motivaciones de compra (reducir mortalidad, mejorar índices productivos, cumplimiento normativo)
   - Canales de información que usa (ferias, asociaciones, grupos WhatsApp de ganaderos, redes sociales agropecuarias)
   - Estacionalidad de necesidades (pariciones, destetes, campañas de saneamiento)
   - Objeciones más comunes ante servicios veterinarios

2. Propuesta de valor diferenciada:
   - Cómo comunicar el ROI de la sanidad preventiva frente al coste de bajas y pérdidas productivas
   - Argumentario económico: coste-beneficio de un plan sanitario anual
   - Diferenciación frente a la competencia (veterinarios generalistas, cooperativas con servicio propio)

3. Plan de contenidos para redes sociales y WhatsApp:
   - 12 ideas de publicaciones mensuales adaptadas al calendario ganadero
   - Tipos de contenido: casos de éxito, consejos preventivos, alertas sanitarias estacionales
   - Tono adecuado: técnico pero accesible, respetando la cultura del ganadero

4. Acciones de marketing relacional:
   - Programa de fidelización para explotaciones recurrentes
   - Jornadas de campo y demostraciones técnicas
   - Colaboración con cooperativas y asociaciones de ganaderos
   - Presencia en ferias agropecuarias locales y nacionales

5. Marketing digital específico para el sector:
   - SEO local: palabras clave que busca un ganadero en Google
   - Google Ads: campañas estacionales (periodo de partos, campañas de saneamiento)
   - WhatsApp Business: protocolos de comunicación con clientes

6. Métricas clave a monitorizar:
   - Número de explotaciones gestionadas mes a mes
   - Facturación media por explotación
   - Tasa de renovación de contratos de sanidad
   - Nuevas explotaciones captadas por canal

7. Calendario de acciones:
   - Mes 1: posicionamiento y base de datos
   - Mes 2: generación de leads y visitas comerciales
   - Mes 3: fidelización y análisis de resultados

Redacta el plan con un lenguaje profesional pero directo, orientado a resultados medibles en términos de animales atendidos, explotaciones captadas y facturación generada. Incluye ejemplos concretos de mensajes y llamadas a la acción adaptadas al perfil del ganadero español o latinoamericano.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear estrategias de marketing para clínicas veterinarias rurales orientadas a ganaderos profesionales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de software de gestión clínica veterinaria para ganadería con IA',
                'description'      => 'Diseña y documenta módulos de software para clínicas veterinarias especializadas en grandes animales, incluyendo historia clínica, trazabilidad y alertas sanitarias.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software con experiencia en aplicaciones para el sector agropecuario y veterinario. Necesito diseñar un sistema de gestión clínica especializado para veterinarios de grandes animales que trabajan en explotaciones ganaderas.

Requisitos del sistema:
- Usuarios principales: veterinarios de campo, técnicos auxiliares, administración de clínica
- Entorno de uso: campo (móvil con conectividad limitada) y oficina (web completa)
- Integraciones necesarias: REGA (Registro General de Explotaciones Ganaderas en España), ADSG, laboratorios veterinarios
- Volumen estimado: gestión de 200-500 explotaciones, 10.000-50.000 animales

Tarea principal: Diseña la arquitectura y especificaciones funcionales de los módulos principales del sistema.

Desarrolla con detalle cada uno de los siguientes módulos:

1. Módulo de explotaciones y censo animal:
   - Ficha de explotación (REGA, especie, orientación productiva, censo)
   - Inventario de animales con identificación (crotal, chip, tatuaje)
   - Trazabilidad individual y por lote
   - Historial de movimientos (altas, bajas, traslados)

2. Módulo de historia clínica:
   - Registro de visitas a campo con geolocalización
   'diagnosis por animal y por lote
   - Prescripciones y recetas veterinarias electrónicas
   - Control de tiempos de supresión de medicamentos
   - Fotografías y vídeos adjuntos desde móvil

3. Módulo de planes sanitarios:
   - Protocolos de vacunación por especie y zona geográfica
   - Alertas de actuaciones pendientes (vacunaciones, saneamientos, revisiones)
   - Integración con calendario de campañas oficiales de saneamiento
   - Notificaciones automáticas al ganadero

4. Módulo de reproducción:
   - Control de cubriciones, partos y abortos
   - Seguimiento de gestaciones
   - Índices reproductivos por explotación (tasa de fertilidad, intervalo entre partos)
   - Alertas de revisiones postparto

5. Módulo de recetas y medicamentos:
   - Libro de prescripciones veterinarias digital
   - Control de stock de medicamentos en botiquín de campo
   - Alertas de caducidad
   - Cumplimiento del Reglamento (UE) 2019/6

6. Módulo de facturación y reporting:
   - Generación de facturas por visita o por contrato de sanidad
   - Informes de rentabilidad por explotación
   - Dashboard con KPIs de la clínica
   - Exportación a formatos contables

7. Especificaciones técnicas:
   - Stack tecnológico recomendado (backend, frontend, móvil)
   - Estrategia offline-first para uso en campo sin cobertura
   - API REST para integraciones con terceros
   - Seguridad y cumplimiento RGPD para datos de explotaciones

Para cada módulo, proporciona: descripción funcional, casos de uso principales, modelo de datos simplificado (entidades y relaciones clave) y consideraciones de UX para uso en campo con guantes o condiciones adversas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar sistemas de software especializados en gestión veterinaria para explotaciones ganaderas',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de materiales educativos para ganaderos sobre sanidad animal con IA',
                'description'      => 'Crea guías visuales, infografías y materiales formativos para ganaderos sobre buenas prácticas en sanidad animal y uso correcto de medicamentos veterinarios.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador especializado en comunicación técnica para el sector agropecuario. Mi objetivo es crear materiales educativos visualmente efectivos para ganaderos que deben aplicar protocolos sanitarios en sus explotaciones de bovino, ovino y porcino.

Perfil del público objetivo:
- Ganaderos con experiencia práctica pero formación técnica variable
- Habituados a materiales impresos y a comunicación directa
- Edad media 45-60 años, no siempre familiarizados con tecnología
- Necesitan información clara, visual y práctica aplicable en el momento

Tarea principal: Define la estrategia de contenido y especificaciones de diseño para una serie completa de materiales formativos.

Desarrolla las siguientes piezas de comunicación:

1. Guía de identificación y registro animal:
   - Protocolo visual paso a paso para la colocación de crotales
   - Explicación simplificada de obligaciones legales de registro en REGA
   - Diagrama de flujo para notificación de bajas y movimientos
   - Formato: tríptico A4 plastificado resistente al agua

2. Infografía de calendario sanitario anual por especie:
   - Bovino de leche: vacunaciones, revisiones reproductivas, saneamientos
   - Ovino-caprino: esquema de actuaciones estacionales ligadas a parición
   - Porcino: plan vacunal y controles PRRS, PPC, según zona
   - Diseño: póster A2 para colgar en la nave o cuadra

3. Protocolo visual de administración de medicamentos:
   - Vías de administración (IM, IV, SC, oral) con ilustraciones anatómicas simplificadas
   - Cálculo de dosis según peso vivo (tabla de referencia rápida)
   - Normas de conservación de vacunas en cadena de frío
   - Tiempos de supresión: cómo evitar residuos en leche y carne

4. Manual de primeros auxilios ganaderos:
   - Reconocimiento de signos de enfermedad urgente por especie
   - Actuaciones inmediatas antes de llamar al veterinario
   - Botiquín básico recomendado con fotografías de productos
   - Cuándo NO actuar sin prescripción veterinaria

5. Guía de bioseguridad en la explotación:
   - Medidas de entrada y salida de personas y vehículos
   - Cuarentena de animales nuevos: protocolo visual
   - Limpieza y desinfección: productos, diluciones y frecuencias
   - Notificación de sospechas de enfermedades de declaración obligatoria

Para cada pieza, especifica:
- Estructura de contenidos y jerarquía visual
- Paleta de colores y tipografía recomendada (alta legibilidad en campo)
- Tipo de ilustraciones (fotografías reales vs. ilustraciones técnicas simplificadas)
- Formato de entrega y soporte físico más adecuado
- Consideraciones de accesibilidad para personas mayores o con baja visión

Incluye también recomendaciones sobre cómo distribuir estos materiales a través de veterinarios, cooperativas y asociaciones ganaderas para maximizar su impacto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear materiales visuales educativos sobre sanidad animal para ganaderos con distintos niveles de formación',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de servicios veterinarios a explotaciones ganaderas con IA',
                'description'      => 'Desarrolla argumentarios de venta, propuestas económicas y estrategias de captación para vender contratos de sanidad veterinaria a ganaderos profesionales.',
                'prompt_content'   => <<<'EOT'
Actúa como un comercial veterinario especializado en la venta consultiva de servicios de sanidad animal a explotaciones ganaderas. Necesito desarrollar un sistema completo de ventas para captar nuevos clientes y fidelizar a los existentes en el sector bovino, ovino y porcino.

Contexto de ventas:
- Servicio principal: contratos anuales de sanidad integral (visitas programadas, urgencias incluidas, planes vacunales)
- Precio medio del contrato: entre 3.000 y 15.000 € anuales según tamaño de explotación
- Ciclo de venta: largo (3-6 meses desde primer contacto hasta firma)
- Principal competencia: veterinarios de cooperativa, servicios propios de integraciones

Tarea principal: Crea un sistema de ventas completo para contratos de sanidad veterinaria ganadera.

Desarrolla los siguientes elementos:

1. Argumentario de prospección inicial:
   - Script de llamada telefónica fría a ganaderos (duración máxima 3 minutos)
   - Mensajes de presentación para WhatsApp (texto breve y directo)
   - Email de introducción con propuesta de visita sin compromiso
   - Cómo abordar al ganadero en ferias y eventos del sector

2. Metodología de diagnóstico en la primera visita:
   - Preguntas clave para entender la situación sanitaria actual de la explotación
   - Cómo detectar dolores ocultos (mortalidad, problemas reproductivos, costes de medicamentos)
   - Hoja de recogida de datos para elaborar una propuesta personalizada
   - Cómo hablar de dinero sin incomodar al ganadero

3. Propuesta económica personalizada:
   - Estructura de la propuesta: situación actual, problemas detectados, solución propuesta, inversión
   - Cómo calcular el ROI de un plan sanitario (bajas evitadas, mejora productiva, ahorro en medicamentos)
   - Tres opciones de contrato (básico, estándar, premium) con sus diferenciales
   - Presentación de la propuesta en persona vs. por correo

4. Manejo de objeciones frecuentes:
   - "Ya tengo veterinario" → cómo sondear el nivel de satisfacción real
   - "Es muy caro" → herramienta de cálculo coste-beneficio para el ganadero
   - "Ya lo hago yo mismo" → riesgos legales y productivos del auto-tratamiento
   - "Lo tengo que pensar" → estrategia de seguimiento sin presionar

5. Cierre y fidelización:
   - Técnicas de cierre adaptadas al carácter directo del ganadero
   - Onboarding del nuevo cliente: primeras visitas y creación de confianza
   - Programa de referidos: incentivos para que el ganadero recomiende la clínica
   - Revisión anual del contrato: cómo vender upsell de servicios adicionales

6. Gestión del pipeline de ventas:
   - CRM básico adaptado al sector: categorías de seguimiento de prospectos
   - Métricas clave: tasa de conversión de visitas a contratos, tiempo medio de cierre
   - Gestión del tiempo del veterinario entre clientes actuales y prospección

Incluye ejemplos concretos de scripts, frases de apertura y respuestas a objeciones adaptadas al vocabulario y cultura del ganadero español o latinoamericano.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar estrategias y argumentarios de venta para servicios veterinarios dirigidos a ganaderos profesionales',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto digital para plataformas de veterinaria bovina con IA',
                'description'      => 'Define roadmap, user stories y métricas de producto para aplicaciones digitales orientadas a veterinarios y ganaderos de bovino de leche y carne.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager con experiencia en aplicaciones para el sector agropecuario y veterinario. Trabajo en el desarrollo de una plataforma digital para veterinarios especializados en bovino de leche y carne, y necesito estructurar la visión de producto y el roadmap de los próximos 12 meses.

Contexto del producto:
- Fase actual: beta con 50 clínicas piloto en España y México
- Usuarios activos: veterinarios de campo, auxiliares técnicos, gestores de clínica
- Usuarios indirectos (no logueados): ganaderos que reciben informes y alertas
- Modelo de negocio: SaaS B2B con suscripción mensual por clínica

Tarea principal: Define la estrategia de producto para los próximos 12 meses con foco en retención y expansión de ingresos.

Desarrolla los siguientes entregables de producto:

1. North Star Metric y árbol de métricas:
   - Define la métrica estrella del producto (qué comportamiento indica que el usuario realmente obtiene valor)
   - Árbol de métricas secundarias: adquisición, activación, retención, expansión, referidos
   - Benchmarks del sector SaaS para veterinaria y agrtech
   - Dashboard de métricas prioritarias para el equipo

2. Mapa de usuario journey completo:
   - Journey del veterinario de campo: desde la agenda de visitas hasta el cierre de expediente
   - Journey del gestor de clínica: facturación, reporting, gestión del equipo
   - Pain points actuales detectados en entrevistas con usuarios beta
   - Oportunidades de mejora priorizadas por impacto y esfuerzo

3. Roadmap de producto (12 meses):
   - Trimestre 1: estabilización y mejora de la experiencia core (historia clínica, prescripciones)
   - Trimestre 2: módulo de reproducción y KPIs ganaderos avanzados
   - Trimestre 3: portal del ganadero (informes automatizados, alertas proactivas)
   - Trimestre 4: integraciones con laboratorios y organismos oficiales (REGA, ADSG)

4. User stories de las features críticas:
   - Historia clínica offline con sincronización diferida
   - Prescripción electrónica con control de tiempos de supresión
   - Alertas automatizadas de actuaciones pendientes por explotación
   - Dashboard de rentabilidad de clínica

5. Estrategia de feedback y discovery continuo:
   - Proceso de entrevistas mensuales con veterinarios de campo
   - Análisis de comportamiento in-app (heatmaps, funnels de abandono)
   - Gestión de feature requests: criterios de priorización
   - Early access program para nuevas funcionalidades

6. Go-to-market para nuevas features:
   - Comunicación de lanzamientos dentro de la app y por email
   - Formación y onboarding de nuevas funcionalidades
   - Métricas de adopción de features a 30/60/90 días

Para cada entregable, incluye ejemplos concretos y plantillas listas para usar en herramientas como Notion, Jira o Linear.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir roadmap y estrategia de producto para plataformas digitales veterinarias orientadas al sector bovino',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos veterinarios rurales y bienestar laboral con IA',
                'description'      => 'Diseña políticas de RRHH, planes de bienestar y estrategias de retención para equipos de veterinarios de campo en zonas rurales con alta rotación.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en recursos humanos con experiencia en la gestión de equipos técnicos en entornos rurales y sanitarios. Necesito desarrollar un plan integral de gestión de personas para una clínica veterinaria de grandes animales con 8 veterinarios de campo y 4 personas en administración y apoyo técnico.

Desafíos específicos del sector:
- Alta rotación: los veterinarios de grandes animales tienen gran demanda y pocas clínicas competitivas
- Trabajo físico exigente: exposición a riesgos laborales, horarios irregulares, guardias de fin de semana
- Aislamiento geográfico: equipos dispersos en zona rural con poco contacto entre compañeros
- Burn-out veterinario: fenómeno documentado con alta prevalencia en la profesión
- Dificultad de conciliación: urgencias nocturnas y fines de semana

Tarea principal: Desarrolla un sistema integral de gestión de personas adaptado a la realidad del veterinario de campo.

Desarrolla los siguientes pilares:

1. Reclutamiento y selección especializada:
   - Perfil ideal del veterinario de grandes animales (competencias técnicas y soft skills)
   - Canales de reclutamiento efectivos (universidades veterinarias, colegios profesionales, redes especializadas)
   - Proceso de selección: pruebas técnicas de campo, entrevista de valores
   - Propuesta de valor del empleador (EVP) diferenciada frente a la competencia

2. Onboarding para veterinarios de campo:
   - Plan de acogida de 90 días: técnico, administrativo y relacional
   - Buddy system: emparejamiento con veterinario senior experimentado
   - Checklists de competencias a adquirir en el primer trimestre
   - Reuniones de seguimiento y puntos de control

3. Plan de desarrollo profesional:
   - Mapa de carrera para veterinarios de campo (especialización técnica vs. gestión)
   - Formación continua: cursos, congresos, prácticas en hospitales de referencia
   - Mentoring interno y externo
   - Política de financiación de formación especializada

4. Bienestar y prevención del burn-out:
   - Protocolo de gestión de guardias y urgencias (reparto equitativo, rotación)
   - Política de desconexión digital fuera del horario laboral
   - Recursos de apoyo psicológico accesibles para el equipo
   - Indicadores de alerta temprana de burn-out y protocolo de intervención

5. Retención y reconocimiento:
   - Sistema de retribución variable ligado a resultados de explotaciones gestionadas
   - Plan de retribución flexible adaptado a necesidades del personal rural
   - Reconocimiento informal: cómo crear cultura de aprecio en equipos dispersos
   - Encuestas de clima laboral y planes de acción derivados

6. Gestión del rendimiento:
   - Indicadores de desempeño para veterinarios de campo (explotaciones gestionadas, satisfacción del ganadero, cumplimiento de protocolos)
   - Reuniones one-to-one: frecuencia y estructura para equipos en campo
   - Feedback constructivo en entornos técnicos donde el ego profesional es alto

Incluye plantillas, checklists y ejemplos de políticas adaptadas al tamaño y cultura de una clínica veterinaria rural.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar políticas de RRHH y bienestar laboral para equipos de veterinarios de campo en zonas rurales',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de explotaciones ganaderas con IA',
                'description'      => 'Utiliza IA para analizar la rentabilidad de explotaciones ganaderas, calcular el coste de las bajas animales y cuantificar el retorno de inversión de los planes sanitarios.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor financiero especializado en el sector ganadero. Necesito construir un modelo de análisis financiero que permita a los ganaderos y a sus veterinarios cuantificar el impacto económico de la sanidad animal y tomar decisiones basadas en datos sobre sus explotaciones.

Tipos de explotaciones a analizar:
- Vacuno de leche: 150 vacas en producción, sistema intensivo en establo
- Vacuno de carne: 300 madres en régimen extensivo de ciclo completo
- Ovino de carne: 800 ovejas en producción con una parición anual
- Porcino ibérico: 100 cerdas madres en montanera con dos partos año

Tarea principal: Desarrolla un modelo de análisis financiero ganadero orientado a cuantificar el impacto de las decisiones sanitarias.

Construye los siguientes componentes del modelo:

1. Costes directos de producción por especie:
   - Alimentación: coste por animal y día según fase productiva
   - Sanidad: coste veterinario, medicamentos, vacunas, análisis
   - Mano de obra: horas por animal año
   - Instalaciones y maquinaria: amortización por animal
   - Costes financieros: intereses de financiación del ganado

2. Cálculo del coste de las bajas animales:
   - Coste directo de la baja: valor del animal (reposición o producción perdida)
   - Costes indirectos: gastos veterinarios durante la enfermedad, trabajo extra
   - Coste de oportunidad: producción que hubiera generado ese animal
   - Fórmula: coste total de bajas = tasa de mortalidad × valor unitario × número de animales
   - Benchmark de tasas de mortalidad aceptables por especie y sistema productivo

3. ROI de los planes sanitarios preventivos:
   - Coste anual del plan sanitario por animal
   - Reducción esperada de bajas con el plan (porcentaje basado en literatura)
   - Mejora de índices productivos (fertilidad, producción láctea, GMD)
   - Cálculo del ahorro anual generado por el plan sanitario
   - Período de recuperación de la inversión sanitaria

4. Análisis de rentabilidad de la explotación:
   - Margen bruto por animal producido
   - Punto de equilibrio: precio mínimo de venta para cubrir costes
   - Análisis de sensibilidad: impacto de variaciones en precios de pienso, leche o carne
   - Comparativa con benchmarks del sector por zona y sistema productivo

5. Modelo de presupuesto sanitario anual:
   - Planificación de costes veterinarios por actuación y momento del año
   - Fondo de contingencia para enfermedades imprevistas
   - Optimización del gasto: qué actuaciones dan mayor retorno por euro invertido
   - Plantilla Excel del presupuesto sanitario anual con fórmulas

6. Dashboard de indicadores financiero-sanitarios:
   - Coste sanitario por kilo producido / por litro de leche
   - Ratio coste-beneficio de la sanidad preventiva
   - Evolución mensual de la tasa de mortalidad y su impacto económico
   - Alerta: cuándo el gasto sanitario supera el umbral de rentabilidad

Desarrolla el modelo con ejemplos numéricos concretos para cada tipo de explotación y proporciona fórmulas aplicables en una hoja de cálculo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modelar el impacto financiero de la sanidad animal y calcular el ROI de los planes sanitarios ganaderos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance veterinario y normativa ganadera con IA',
                'description'      => 'Analiza y aplica la normativa europea y nacional sobre medicamentos veterinarios, bienestar animal y trazabilidad en explotaciones ganaderas para garantizar el cumplimiento legal.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor jurídico especializado en derecho veterinario y normativa agropecuaria. Necesito un análisis completo del marco normativo aplicable a una clínica veterinaria que atiende explotaciones ganaderas de bovino, ovino y porcino en España, con exportación de productos a la UE.

Marco normativo principal a analizar:
- Reglamento (UE) 2019/6 sobre medicamentos veterinarios
- Reglamento (UE) 2016/429 de sanidad animal (Ley de Sanidad Animal de la UE)
- Real Decreto 666/2023 sobre uso sostenible de plaguicidas y biocidas veterinarios
- Normativa de bienestar animal: Directivas 98/58/CE, 2008/119/CE, 2008/120/CE
- REGA: Registro General de Explotaciones Ganaderas
- ADSG: Agrupaciones de Defensa Sanitaria Ganadera

Tarea principal: Desarrolla un sistema de compliance veterinario-ganadero que garantice el cumplimiento normativo en todos los ámbitos de la actividad clínica.

Analiza en detalle cada área de cumplimiento:

1. Normativa de medicamentos veterinarios (Reg. UE 2019/6):
   - Obligaciones del veterinario prescriptor: registro, trazabilidad, receta electrónica
   - Restricciones al uso de antibióticos: principio de prudencia, prohibiciones específicas
   - Normas de uso en cascada: cuándo y cómo prescribir medicamentos off-label
   - Tiempos de supresión: obligaciones de registro y comunicación al ganadero
   - Sanciones por incumplimiento y responsabilidad civil del veterinario

2. Trazabilidad animal y sistema REGA:
   - Obligaciones de identificación por especie (crotales, chips)
   - Plazos de notificación de nacimientos, muertes y movimientos
   - Responsabilidades compartidas entre ganadero y veterinario
   - Infracciones más frecuentes detectadas en inspecciones

3. Bienestar animal en explotaciones:
   - Estándares mínimos por especie (bovino estabulado, porcino, ovino)
   - Obligaciones del veterinario respecto al bienestar en las explotaciones que atiende
   - Denuncia de malas prácticas: obligaciones legales del veterinario
   - Protocolos de inspección de bienestar que debe conocer el veterinario

4. Resistencia antimicrobiana (RAM):
   - Plan Nacional de Resistencia a los Antibióticos (PRAN): obligaciones para veterinarios
   - Registro de uso de antibióticos críticos
   - Pruebas de sensibilidad previas a la prescripción: cuándo son obligatorias
   - Informes anuales de consumo de antibióticos

5. Responsabilidad civil y penal veterinaria:
   - Mala praxis veterinaria: elementos constitutivos y jurisprudencia reciente
   - Seguros de responsabilidad civil profesional: coberturas mínimas recomendadas
   - Gestión de reclamaciones de ganaderos: protocolo ante una queja formal
   - Secreto veterinario vs. obligaciones de denuncia

6. Checklist de compliance para auditoría interna:
   - Lista de verificación mensual de cumplimiento normativo en la clínica
   - Documentos obligatorios que debe mantener el veterinario
   - Plan de formación continua en normativa para el equipo clínico
   - Procedimiento ante una inspección de la autoridad competente

Incluye referencias normativas exactas, plazos legales y ejemplos de situaciones de incumplimiento frecuentes con sus consecuencias.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Garantizar el cumplimiento normativo en clínicas veterinarias de grandes animales según la legislación europea y española',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al ganadero: soporte y comunicación en sanidad animal con IA',
                'description'      => 'Diseña protocolos de atención y comunicación para el soporte a ganaderos en situaciones de emergencia sanitaria, brotes de enfermedad y consultas técnicas recurrentes.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en atención al cliente y comunicación técnica para el sector veterinario-ganadero. Mi objetivo es diseñar un sistema de soporte al ganadero que combine la disponibilidad de urgencias con la gestión eficiente de consultas técnicas recurrentes, aprovechando herramientas digitales como WhatsApp Business y sistemas de ticketing adaptados al sector.

Tipos de interacciones a gestionar:
- Urgencias: animal caído, parto distócico, brote de enfermedad aguda
- Consultas técnicas: dudas sobre medicación, resultados de análisis, interpretación de datos
- Administrativas: facturas, citas programadas, renovación de contratos
- Preventivas: recordatorios de actuaciones sanitarias pendientes, alertas climáticas de riesgo

Tarea principal: Diseña un sistema integral de soporte al ganadero con protocolos, plantillas y métricas de calidad.

Desarrolla los siguientes componentes del sistema:

1. Clasificación y triaje de consultas:
   - Matriz urgencia/impacto para priorizar la respuesta
   - Protocolo de triaje para urgencias telefónicas: preguntas clave para evaluar la gravedad
   - Tiempos de respuesta objetivo por tipo de consulta
   - Derivación: cuándo resolver por teléfono vs. cuándo visitar la explotación

2. Protocolos de comunicación en emergencias sanitarias:
   - Script de llamada de urgencia: cómo guiar al ganadero mientras llega el veterinario
   - Instrucciones básicas de primeros auxilios que el ganadero puede aplicar
   - Protocolo de sospecha de enfermedad de declaración obligatoria (EDO): pasos inmediatos
   - Comunicación a la autoridad competente: quién informa y en qué plazo

3. Sistema de WhatsApp Business para ganaderos:
   - Mensajes automáticos de bienvenida y horario de guardia
   - Plantillas para respuestas rápidas a las 10 consultas más frecuentes
   - Protocolo para compartir fotografías de animales para diagnóstico remoto
   - Límites del soporte digital: qué no se puede resolver por WhatsApp

4. Comunicación de resultados y diagnósticos:
   - Cómo explicar un diagnóstico complejo al ganadero en lenguaje accesible
   - Informe de visita: estructura clara con hallazgos, tratamientos y seguimiento
   - Comunicación de malas noticias (alta mortalidad, enfermedad grave, prognosis reservada)
   - Seguimiento post-visita: llamada de control a las 48-72 horas

5. Gestión de la insatisfacción del ganadero:
   - Protocolo ante una queja por resultado clínico adverso
   - Cómo reconocer un error sin asumir responsabilidad legal innecesaria
   - Protocolo de escalado a dirección de clínica
   - Documentación del incidente para protección legal

6. Métricas de calidad del servicio:
   - NPS (Net Promoter Score) adaptado al sector ganadero
   - Tiempo medio de respuesta a urgencias y consultas
   - Tasa de resolución en primer contacto
   - Satisfacción del ganadero: encuesta trimestral post-visita

Incluye ejemplos de guiones de llamada, plantillas de WhatsApp y formularios de recogida de información para cada tipo de interacción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar sistemas de soporte y comunicación efectivos entre clínicas veterinarias y ganaderos en situaciones de emergencia y consultas técnicas',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría veterinaria freelance para explotaciones ganaderas con IA',
                'description'      => 'Estructura tu actividad como veterinario freelance de grandes animales: define tus servicios, tarifas, contratos y estrategia de captación de clientes ganaderos.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocios especializado en profesionales del sector veterinario que trabajan de forma independiente. Soy veterinario especializado en grandes animales y quiero establecer mi actividad como freelance o autónomo, ofreciendo servicios de consultoría sanitaria y técnica a explotaciones ganaderas sin depender de una clínica establecida.

Mi perfil:
- 8 años de experiencia como veterinario asalariado en clínica de bovino y ovino
- Especialización en reproducción y patología del aparato locomotor en bovino
- Red de contactos: 40 ganaderos de la zona con quienes he trabajado
- Zona de actuación: radio de 150 km
- Objetivo: ingresos mínimos de 4.500 € netos mensuales en el primer año

Tarea principal: Diseña el plan de negocio y la estructura operativa de mi actividad veterinaria freelance.

Desarrolla los siguientes apartados del plan:

1. Definición del modelo de servicio:
   - Cartera de servicios a ofrecer (consultoría técnica, planes sanitarios, reproducción, formación a ganaderos)
   - Formato de prestación: visitas periódicas, contratos de asesoría, consultas remotas, cursos
   - Qué NO hacer como freelance (emergencias 24h que no puedo gestionar solo, cirugías de alta complejidad)
   - Colaboraciones con clínicas y laboratorios para derivar lo que no puedo atender

2. Estructura de tarifas y propuestas económicas:
   - Tarifa hora de consultoría técnica en campo
   - Precio de contrato de asesoría técnica anual (sin prescripción médica) por tamaño de explotación
   - Precio de seminarios y jornadas formativas para grupos de ganaderos
   - Política de desplazamiento: cómo cobrar los kilómetros y el tiempo de viaje

3. Marco legal y administrativo del veterinario autónomo:
   - Alta en Hacienda: epígrafe IAE más adecuado para actividad veterinaria autónoma
   - Facturación: IVA aplicable a servicios veterinarios (exención parcial según tipo de actividad)
   - Colegiación y habilitación para prescribir: obligaciones del veterinario autónomo
   - Seguro de responsabilidad civil: coberturas mínimas recomendadas

4. Captación de los primeros clientes:
   - Cómo abordar a los 40 ganaderos de la red existente sin quemar puentes con la clínica anterior
   - Propuesta de piloto: ofrecer los primeros 3 meses a tarifa reducida a cambio de referidos
   - Presencia digital mínima viable: perfil LinkedIn, Google Business, grupo de WhatsApp sectorial
   - Colaboración con proveedores (casas de piensos, laboratorios, casas veterinarias) como fuente de referidos

5. Gestión operativa del día a día:
   - Herramientas digitales básicas: facturación (Holded, Billin), agenda, historia clínica portátil
   - Gestión del tiempo: cómo equilibrar visitas, administración y prospección de nuevos clientes
   - Vehículo y equipamiento mínimo de campo para trabajar de forma autónoma
   - Gestión contable simplificada para autónomos

6. Plan de crecimiento a 3 años:
   - Año 1: consolidar 15 explotaciones recurrentes que cubran los costes fijos
   - Año 2: especialización y diferenciación (certificaciones, formación avanzada)
   - Año 3: escala (asociarse con otro veterinario, crear academia online para ganaderos)
   - Indicadores de éxito trimestrales para tomar decisiones de pivote si es necesario

Incluye una hoja de ruta de los primeros 90 días con acciones concretas para lanzar la actividad y los primeros clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estructurar y lanzar una actividad veterinaria freelance especializada en grandes animales y ganadería',
                'vote_score'       => 37,
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
