<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills627Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing ético para servicios funerarios con IA',
                'description'      => 'Desarrolla estrategias de marketing empáticas y respetuosas para funerarias y tanatorios, captando familias en el momento más sensible con comunicación honesta y humanizada.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing para servicios de alta sensibilidad emocional, con experiencia específica en el sector funerario. Necesito desarrollar una estrategia de marketing ética y efectiva para una funeraria familiar con tres tanatorios en una ciudad de 200.000 habitantes, en un mercado con cuatro competidores directos.

Contexto del negocio:
- Empresa familiar con 35 años de historia y reputación sólida en la zona
- Servicios: funerales tradicionales, cremaciones, servicios de previsión funeraria (seguros), traslados nacionales e internacionales
- Ticket medio: 4.200 € por servicio de funeral
- Desafío principal: modernizar la captación sin perder la dignidad y el respeto que el sector exige

Tarea principal: Desarrolla una estrategia de marketing que combine la presencia digital moderna con la sensibilidad que el sector funerario exige.

Desarrolla los siguientes componentes estratégicos:

1. Posicionamiento ético y propuesta de valor:
   - Cómo diferenciarse en dignidad, acompañamiento y transparencia de precios
   - Qué mensajes están estrictamente prohibidos en comunicación funeraria (aprovechamiento del dolor, urgencia artificial, comparaciones de precio agresivas)
   - Narrativa de marca: herencia familiar, compromiso con la comunidad, acompañamiento integral
   - Cómo hablar de muerte en comunicación de marketing sin resultar morboso ni frío

2. Presencia digital respetuosa:
   - Sitio web funerario: contenidos mínimos indispensables (servicios, precios orientativos, directorio de cementerios, contacto 24h)
   - SEO local para funerarias: palabras clave de búsqueda urgente (cómo gestionar el fallecimiento de un familiar) vs. búsqueda de previsión
   - Google Business: gestión de fichas, horario especial 24h, respuesta a reseñas con máxima sensibilidad
   - Redes sociales para funerarias: qué publicar en LinkedIn e Instagram sin resultar inapropiado

3. Marketing de previsión funeraria (el menos urgente y más rentable):
   - Público objetivo de previsión: personas mayores de 55 años que planifican con antelación
   - Canales para llegar a este segmento: clubs de mayores, mutualidades, asociaciones de jubilados
   - Argumentario de previsión: tranquilidad familiar, ahorro económico, decisiones en calma
   - Taller de previsión funeraria: evento presencial como estrategia de captación

4. Gestión de reseñas y reputación online:
   - Cómo solicitar una reseña a una familia que acaba de pasar por un duelo
   - Protocolos de respuesta a reseñas positivas y negativas en Google y Facebook
   - Gestión de críticas infundadas: cuándo responder públicamente y cuándo no
   - El NPS en el sector funerario: cómo medir la satisfacción sin parecer insensible

5. Comunicación en medios locales y relaciones comunitarias:
   - Relación con medios locales: artículos de opinión sobre duelo, previsión y normativa
   - Colaboración con asociaciones de duelo y apoyo al luto en la comunidad
   - Presencia en eventos de salud y mayores: ferias, jornadas, talleres
   - Patrocinio de actividades locales: cómo hacerlo con dignidad y sin resultar oportunista

6. Métricas adaptadas al sector funerario:
   - Tasa de captación de servicios de previsión nuevos por mes
   - Coste de adquisición por servicio funeral (CAC en el sector)
   - Tasa de reactivación: familias que vuelven para un segundo servicio en la misma funeraria
   - Share of voice local en búsquedas de Google frente a la competencia

Incluye ejemplos concretos de textos de comunicación, estructura de la web funeraria y protocolos de respuesta a reseñas adaptados al tono del sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear estrategias de marketing éticas y empáticas para funerarias y tanatorios que conecten con familias en situación de duelo',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Software de gestión integral para funerarias con IA',
                'description'      => 'Diseña la arquitectura y los módulos de un sistema de gestión para funerarias que cubra desde la recepción del fallecimiento hasta la facturación, con integración en registros civiles y cementerios.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software con experiencia en aplicaciones para servicios de alto impacto emocional y regulación administrativa estricta. Necesito diseñar un sistema de gestión integral para una empresa funeraria con tres tanatorios, servicios de traslado y una agencia de seguros de previsión funeraria.

Contexto del sistema:
- Usuarios: directores funerarios, agentes comerciales, conductores de traslado, personal de tanatorio, administración
- Volumen: 1.200 servicios anuales (funerales y cremaciones)
- Integraciones necesarias: Registro Civil digital, ADSL (Agencia de Defunciones Sanitarias Local), cementerios municipales, compañías de seguros
- Requisito crítico: disponibilidad 24/7 y operatividad en situaciones de urgencia (el sistema nunca puede caerse en el momento en que una familia llama)

Tarea principal: Diseña la arquitectura y especificaciones funcionales del sistema de gestión funeraria.

Desarrolla con detalle cada módulo del sistema:

1. Módulo de gestión del expediente funerario:
   - Apertura del expediente: datos del fallecido, datos del solicitante del servicio, circunstancias del fallecimiento
   - Integración con certificado médico de defunción digital
   - Gestión de la licencia de enterramiento o cremación
   - Estado del expediente: flujo desde recepción hasta cierre con trazabilidad completa
   - Acceso por rol: qué ve cada perfil de usuario en el expediente

2. Módulo de gestión del tanatorio:
   - Calendario de salas de velatorio: disponibilidad, reservas, cambios de última hora
   - Control de acceso a las salas (familias, visitantes)
   - Gestión de servicios adicionales: floristería, catering, música, streaming del funeral
   - Preparación del fallecido: checklist de tanatopráxis y registro de actuaciones
   - Coordinación con el cementerio: horarios de inhumación o cremación

3. Módulo de traslados y logística:
   - Gestión de vehículos: flota de coches fúnebres, furgonetas de traslado
   - Partes de servicio para cada traslado: origen, destino, conductor, hora
   - Traslados internacionales: documentación específica (passport mortuorio, gestión de aduanas)
   - Geolocalización de vehículos en tiempo real para coordinación de urgencias

4. Módulo de previsión funeraria y seguros:
   - Gestión de contratos de previsión: datos del asegurado, servicios contratados, póliza asociada
   - Integración con compañías de seguros para verificación de cobertura en tiempo real
   - Alertas de renovación de contratos y pólizas próximas a vencer
   - Gestión de reclamaciones a aseguradoras: documentación y seguimiento

5. Módulo de facturación y contabilidad:
   - Generación de presupuestos desglosados: servicios propios, proveedores externos, tasas
   - Gestión de cobros: efectivo, tarjeta, transferencia, cargo a aseguradora
   - Facturas electrónicas según Ley Crea y Crece
   - Reporting financiero: facturación por tipo de servicio, margen por expediente, previsión de ingresos

6. Especificaciones técnicas y de seguridad:
   - Stack tecnológico recomendado: prioridad en fiabilidad y facilidad de uso en situaciones de estrés
   - Arquitectura de alta disponibilidad: sin puntos únicos de fallo, failover automático
   - Protección de datos sensibles: fallecidos, familias, causas de muerte (RGPD aplicado al sector funerario)
   - Auditoría completa: cada acción queda registrada con usuario, fecha y hora

Para cada módulo, incluye el modelo de datos simplificado, los casos de uso principales y consideraciones de UX para personal que usa el sistema en situaciones de alta presión emocional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar sistemas de gestión integral para empresas funerarias con alta disponibilidad y cumplimiento normativo',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de memoriales digitales y recordatorios con IA',
                'description'      => 'Crea páginas de memorial digital, obituarios visuales y álbumes de recuerdos para honrar a los fallecidos, con diseño empático y accesible para familias en duelo.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador especializado en experiencias digitales de alto contenido emocional. Necesito definir la identidad visual, los flujos de usuario y los componentes de diseño para una plataforma de memoriales digitales que permite a las familias crear páginas conmemorativas para sus seres queridos fallecidos.

Contexto de la plataforma:
- Producto: plataforma SaaS para funerarias que ofrecen el memorial digital como servicio adicional
- Usuarios finales: familiares y amigos del fallecido (rango de edad muy amplio: 15-85 años)
- Contenidos del memorial: foto principal, galería de imágenes, textos biográficos, mensajes de condolencia, música, vídeos
- Modelos de negocio: básico gratuito (ofrecido por la funeraria) y premium con funcionalidades avanzadas

Tarea principal: Diseña el sistema de diseño y los componentes UX/UI de la plataforma de memoriales digitales.

Desarrolla los siguientes componentes de diseño:

1. Identidad visual y sistema de diseño:
   - Paleta de colores: equilibrio entre calidez (homenaje) y dignidad (recogimiento), evitando colores excesivamente oscuros que resulten opresivos
   - Tipografía: fuentes que transmitan elegancia atemporal y alta legibilidad para adultos mayores
   - Iconografía: elementos visuales neutros y universales que eviten simbolismos religiosos o culturales excluyentes
   - Fotografías e ilustraciones: guía de estilo para imágenes de la plataforma (naturaleza, luz, calidez)

2. Página del memorial individual:
   - Hero section: foto principal del fallecido, nombre, fechas de vida
   - Sección biográfica: texto libre con formato enriquecido (negrita, listas, citas)
   - Galería de imágenes y vídeos: diseño respetuoso y emotivo, no comercial
   - Libro de condolencias: mensajes de familiares y amigos con foto de perfil opcional
   - Mapa de vida: línea de tiempo visual de los momentos clave de la vida del fallecido

3. Experiencia de creación del memorial (onboarding para la familia):
   - Flujo paso a paso para crear el memorial en el momento del duelo (usuario en estado emocional frágil)
   - Ayudas contextuales: sugerencias de texto, preguntas guía para redactar la biografía
   - Asistente de escritura con IA: cómo ayudar a redactar la descripción del fallecido con delicadeza
   - Edición progresiva: la familia puede completar el memorial durante las primeras semanas

4. Componentes de accesibilidad prioritaria:
   - Tamaño mínimo de texto: 16px, con opción de aumentar a 20px sin romper el diseño
   - Alto contraste: versión de alto contraste para adultos mayores o con baja visión
   - Navegación simplificada: máximo 3 niveles de profundidad, sin menús complejos
   - Compatibilidad con lectores de pantalla: todo el contenido accesible por voz

5. Funcionalidades premium de diseño avanzado:
   - Temas visuales personalizados: selección de paleta y tipografía según estilo del fallecido
   - Memorial de aniversario: recordatorio anual con email automático a los suscriptores del memorial
   - Libro de memorias imprimible: generación de PDF de alta calidad con todos los recuerdos del memorial
   - Vídeo de homenaje automático: generación de slideshow con fotos y música elegida por la familia

6. Consideraciones éticas de diseño:
   - Cómo evitar patrones de diseño manipuladores (dark patterns) en un contexto de duelo
   - Privacidad del memorial: opciones de acceso (público, solo con enlace, privado para la familia)
   - Gestión del memorial a largo plazo: ¿qué pasa con el memorial si la funeraria cierra?
   - Comunicación de la eliminación o archivado de memoriales inactivos

Incluye wireframes descritos en texto, especificaciones de componentes y recomendaciones sobre herramientas de prototipado para este tipo de plataforma sensible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar plataformas de memorial digital con experiencia de usuario empática para familias en proceso de duelo',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de servicios de previsión funeraria con IA',
                'description'      => 'Desarrolla argumentarios, guiones y estrategias de venta ética para contratos de previsión funeraria, dirigidos a personas mayores de 55 años que planifican con anticipación.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas consultivas de alta sensibilidad, especializado en la comercialización de servicios de previsión funeraria. Necesito desarrollar un sistema de ventas ético y efectivo para una funeraria que quiere aumentar su cartera de contratos de previsión funeraria, dirigiéndose a personas mayores de 55 años y a hijos adultos que quieren planificar el futuro de sus padres.

Contexto del producto de previsión:
- Contrato de previsión funeraria: pago único o a plazos que cubre el coste del funeral al precio actual
- Precio medio del contrato: 3.500 € (servicio completo, sin cremación) o 2.200 € (solo cremación)
- Ventaja principal para el cliente: fija el precio actual, elimina la carga económica y emocional a los familiares
- Canal de venta actual: visitas presenciales, eventos de mayores, recomendaciones de clientes actuales

Tarea principal: Diseña el sistema completo de ventas éticas para contratos de previsión funeraria.

Desarrolla los siguientes componentes del proceso comercial:

1. Principios éticos de la venta de previsión funeraria:
   - Qué está prohibido en la comercialización de seguros y servicios funerarios (presión, miedo, urgencia falsa)
   - Código de conducta para el equipo comercial: cómo vender respetando la autonomía del cliente
   - Diferencia entre venta consultiva (que informa y acompaña) y venta agresiva (que presiona)
   - Manejo del conflicto de interés: el vendedor trabaja para la funeraria pero el interés del cliente debe ser prioritario

2. Perfil del cliente de previsión y sus motivaciones:
   - Personas mayores de 65 años que quieren gestionar su propio funeral con sus preferencias
   - Hijos adultos (45-60 años) que quieren evitar la carga de tomar decisiones en el momento del duelo
   - Personas con diagnóstico de enfermedad grave que quieren organizar sus asuntos
   - Cómo identificar qué motivación tiene cada cliente y adaptar el discurso

3. Canales de captación para previsión funeraria:
   - Eventos de previsión: talleres informativos en centros de mayores y mutualidades
   - Colaboración con notarías, gestorías y asesores financieros que tratan con clientes mayores
   - Programa de referidos: incentivos éticos para clientes que recomiendan el servicio a familiares
   - Publicidad en medios de la tercera edad: revistas, radio local, programas de mayores

4. Proceso de la visita comercial de previsión:
   - Apertura: cómo iniciar la conversación sobre un tema tabú sin incomodar al cliente
   - Preguntas de diagnóstico: qué situación familiar tiene, cuáles son sus preferencias, qué le preocupa
   - Presentación del servicio: enfoque en tranquilidad familiar y planificación, no en la muerte en sí
   - Demostración del ahorro: cómo mostrar la ventaja económica de contratar hoy vs. en el momento del fallecimiento

5. Manejo de objeciones específicas de la previsión funeraria:
   - "No me gusta hablar de estas cosas" → cómo normalizar la conversación con empatía
   - "Tengo un seguro de vida" → diferencia entre seguro de vida y previsión funeraria
   - "Lo dejaré en herencia y que mis hijos decidan" → impacto emocional y económico de no prever
   - "Es muy caro" → cálculo del ahorro real y opciones de pago fraccionado

6. Cierre y fidelización del cliente de previsión:
   - Cierre sin presión: dar tiempo para decidir sin perder el seguimiento
   - Onboarding del contrato: entrega del documento, explicación de qué incluye, contacto futuro
   - Revisión periódica del contrato: contacto anual para actualizar preferencias y mantener la relación
   - Referidos post-venta: cómo pedir recomendaciones a un cliente satisfecho con sensibilidad

Incluye guiones de llamada, estructura de la visita comercial y argumentarios adaptados a cada perfil de cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar estrategias y argumentarios de venta ética para contratos de previsión funeraria',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Desarrollo de productos digitales para el sector funerario con IA',
                'description'      => 'Define roadmap y estrategia de producto para plataformas digitales del sector funerario: memoriales online, gestión de duelo y servicios de previsión digital.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager con experiencia en sectores de alta sensibilidad y regulación estricta. Trabajo en el desarrollo de una plataforma digital para el sector funerario que combina gestión operativa para funerarias, portal de familias y servicios de apoyo al duelo. Necesito estructurar la visión de producto y el roadmap para los próximos 18 meses.

Contexto del producto:
- Estado actual: MVP funcional con 30 funerarias piloto en España y México
- Usuarios activos: directores funerarios, agentes de previsión, familias en duelo
- Modelo de negocio: SaaS B2B para funerarias + servicios premium para familias
- Reto único: el sector funerario tiene la tasa de adopción tecnológica más baja de todos los servicios de salud

Tarea principal: Define la estrategia de producto y el roadmap para una plataforma digital del sector funerario.

Desarrolla los siguientes entregables de producto:

1. Visión y posicionamiento de producto:
   - Problema central que resuelve la plataforma: para la funeraria, para la familia, para la sociedad
   - Por qué ahora: tendencias de digitalización del sector funerario post-pandemia
   - North Star Metric: qué indicador mide mejor que la plataforma genera valor real
   - Diferenciación frente a competidores: gestores generalistas, plataformas de obituarios, apps de duelo

2. Segmentación y Jobs to Be Done (JTBD):
   - JTBD del director funerario: reducir el tiempo administrativo por expediente, coordinar el equipo, cobrar más rápido
   - JTBD de la familia: acompañamiento en los primeros días, gestión de trámites, preservar la memoria del fallecido
   - JTBD del agente de previsión: cerrar contratos, gestionar su cartera, acceder a información del cliente
   - Cómo priorizar cuándo los JTBD de distintos usuarios entran en conflicto

3. Roadmap de producto (18 meses):
   - Trimestre 1-2: optimización core funeraria (expediente, agenda de salas, facturación simplificada)
   - Trimestre 3-4: portal de familias (seguimiento en tiempo real del servicio, memorial integrado)
   - Trimestre 5-6: módulo de previsión y seguros (cotizador, gestión de contratos, integración con aseguradoras)
   - Trimestre 7: marketplace de proveedores funerarios (floristería, catering, música, coronas)

4. Consideraciones éticas en el diseño del producto:
   - Cómo diseñar notificaciones que no resulten insensibles en momentos de duelo
   - Privacidad de datos de fallecidos y familias: más allá del cumplimiento RGPD
   - Monetización ética: qué funcionalidades no se deben cobrar en un sector de necesidad urgente
   - Accesibilidad como requisito no negociable: usuarios mayores, en estado emocional alterado

5. Métricas de producto para el sector funerario:
   - Tiempo medio de apertura de expediente (velocidad del flujo administrativo)
   - NPS de la funeraria y NPS de la familia (dos métricas separadas)
   - Tasa de adopción del portal de familias (cuántas familias activan el acceso)
   - Retención de funerarias: churn anual objetivo y estrategias para reducirlo

6. Go-to-market y expansión:
   - Estrategia de entrada en nuevos mercados: diferencias regulatorias entre España, México y Colombia
   - Partnership con asociaciones funerarias nacionales como canal de distribución
   - Modelo de recomendación entre funerarias: network effects en el sector
   - Internacionalización: qué localizar y qué mantener global en el producto

Incluye plantillas de JTBD, criterios de priorización de roadmap y un modelo de métricas adaptado a la peculiaridad del sector funerario.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir roadmap y estrategia de producto para plataformas digitales orientadas al sector funerario y el acompañamiento en el duelo',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del bienestar y duelo laboral en equipos funerarios con IA',
                'description'      => 'Diseña políticas de bienestar, prevención del burn-out y gestión del duelo vicario para los equipos de trabajo de funerarias y tanatorios.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en recursos humanos con formación en psicología organizacional y experiencia en sectores de primera respuesta y servicios fúnebres. Necesito desarrollar un programa integral de bienestar para los equipos de trabajo de una empresa funeraria con 28 empleados: directores funerarios, personal de tanatorio, conductores, agentes comerciales y administración.

Retos específicos del sector:
- Exposición diaria a la muerte y al dolor ajeno (duelo vicario)
- Guardias 24h que alteran los ritmos circadianos y la vida familiar
- Trabajo físico con cadáveres: estigma social, aislamiento de amistades fuera del sector
- Clientes en estado de shock emocional que pueden descargar su angustia en el personal
- Alta prevalencia de síndrome de burn-out no detectado (el propio personal minimiza sus síntomas)

Tarea principal: Diseña un programa integral de bienestar y gestión del duelo laboral para equipos funerarios.

Desarrolla los siguientes componentes del programa:

1. Diagnóstico de la salud organizacional actual:
   - Encuesta de bienestar adaptada al sector funerario: preguntas específicas sobre carga emocional, duelo vicario y estigma
   - Entrevistas con personal de distintos roles: identificar factores de riesgo específicos por puesto
   - Indicadores de alerta: tasa de absentismo, rotación, incidencias de baja por enfermedad mental
   - Benchmarks del sector: estudios sobre salud mental de profesionales funerarios en España y Europa

2. Prevención del duelo vicario y la fatiga por compasión:
   - Qué es el duelo vicario y cómo se diferencia del burn-out clásico
   - Factores de riesgo específicos del personal funerario: acumulación de casos difíciles, fallecidos jóvenes, accidentes
   - Técnicas de desconexión emocional saludable: rituales de cierre al final de la jornada
   - Supervisión clínica grupal: sesiones periódicas con un psicólogo especializado en duelo

3. Gestión de las guardias y la desconexión:
   - Diseño de cuadro de guardias equitativo que minimice el impacto en la vida personal
   - Protocolo de compensación de guardias: descanso efectivo, no solo económico
   - Espacios de desconexión en el trabajo: sala de descanso, zonas sin contacto con familias
   - Política de uso del teléfono personal durante las guardias nocturnas

4. Apoyo psicológico accesible para el equipo:
   - Servicio de psicología interno o externo: modelo de acceso confidencial y sin estigma
   - Primeros auxilios psicológicos entre compañeros: formación básica en escucha activa para el equipo
   - Protocolo de intervención en crisis: qué hacer cuando un empleado sufre un episodio agudo de angustia
   - Grupos de apoyo entre iguales: supervisión grupal mensual con facilitador externo

5. Gestión del estigma social y el orgullo de profesión:
   - Cómo abordar el estigma que el personal funerario percibe en su entorno social
   - Construcción de identidad profesional: el valor social del trabajo funerario
   - Comunicación interna de logros: reconocer públicamente los servicios bien realizados
   - Programa de embajadores de la profesión: empleados que hablen sobre su trabajo con normalidad

6. Plan de reconocimiento y retención del talento:
   - Sistema de reconocimiento específico para el sector: qué reconocer y cómo hacerlo con sentido
   - Desarrollo profesional: formación en tanatología, dirección de funerarias, tanatoestética
   - Retribución emocional: beneficios no económicos que valora especialmente el personal funerario
   - Encuesta de clima semestral: seguimiento del bienestar con plan de acción derivado

Incluye plantillas de encuesta de bienestar, estructura de la supervisión clínica grupal y protocolos de intervención en crisis emocional para el entorno de trabajo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar programas de bienestar y prevención del duelo vicario para equipos de trabajo en el sector funerario',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera y rentabilidad de funerarias con IA',
                'description'      => 'Analiza la estructura de costes, los márgenes por tipo de servicio y las palancas de rentabilidad de una empresa funeraria, con modelos financieros adaptados al sector.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor financiero especializado en el sector de servicios personales y empresas de alto componente emocional. Necesito construir un modelo de análisis financiero completo para una funeraria familiar con tres tanatorios, servicios de traslado y una cartera de 350 contratos de previsión activos.

Datos financieros del negocio:
- Facturación anual: 5,2 millones de euros (1.200 servicios)
- EBITDA actual: 18% sobre facturación (por debajo del benchmark del sector: 22-28%)
- Principal coste: personal (45% de la facturación), seguido de instalaciones y vehículos
- Mezcla de servicios: 60% funerales tradicionales, 30% cremaciones, 10% previsión (comisiones)

Tarea principal: Desarrolla el modelo de análisis financiero y las palancas de mejora de rentabilidad para la funeraria.

Construye los siguientes componentes del modelo:

1. Estructura de costes detallada por tipo de servicio:
   - Coste directo del funeral tradicional: féretro, personal de servicio, tanatorio, cementerio, traslado
   - Coste directo de la cremación: urna, personal, crematorio, traslado
   - Costes indirectos (overhead): personal administrativo, instalaciones, vehículos, seguros, marketing
   - Contribución marginal por tipo de servicio y por rango de precio del funeral

2. Análisis de márgenes por línea de negocio:
   - Margen bruto por categoría: funerales de alta gama, funerales básicos, cremaciones, servicios de previsión
   - Análisis de la mezcla óptima de servicios: qué combinación maximiza el EBITDA
   - Impacto de la estacionalidad: variación de la demanda en verano, otoño e invierno
   - Correlación entre ticket medio y margen: ¿vender más caro siempre mejora el margen?

3. Modelo de rentabilidad de la cartera de previsión:
   - Ingresos diferidos: cómo contabilizar los contratos de previsión según NIIF vs. PGC español
   - Cash flow de la previsión: el cobro es inmediato, el servicio se presta años después
   - Rentabilidad de la previsión: el coste del servicio en el futuro será mayor por inflación
   - Punto de equilibrio de la cartera de previsión: cuántos contratos activos necesita la funeraria para que sea rentable

4. KPIs financieros del sector funerario:
   - Ticket medio ponderado por tipo de servicio y trimestre
   - Revenue per service: ingresos totales divididos entre número de servicios
   - Coste por servicio: desglose de los costes directos unitarios
   - Utilización de salas de tanatorio: porcentaje de capacidad usada por franja horaria
   - Rentabilidad por tanatorio: cuál de los tres genera más margen y por qué

5. Palancas de mejora de la rentabilidad:
   - Incremento de ticket medio: venta de servicios adicionales sin presión (floristería, streaming, libro de memorias)
   - Optimización de costes de personal: dimensionado según demanda estacional y guardias eficientes
   - Externalización de cremaciones vs. inversión en crematorio propio: análisis de break-even
   - Crecimiento de la cartera de previsión: impacto de cada 100 contratos nuevos en el EBITDA

6. Modelo de proyección financiera a 5 años:
   - Escenario base: crecimiento orgánico del 3% anual en servicios
   - Escenario optimista: adquisición de una cuarta funeraria + crecimiento de previsión al 20% de la facturación
   - Escenario pesimista: competencia de precio agresiva + reducción del ticket medio del 8%
   - Tabla de flujos de caja libre y valoración de la empresa por múltiplo de EBITDA

Incluye plantillas de P&L para funeraria, fórmulas de KPIs específicas del sector y un modelo de sensibilidad para las variables más críticas del negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir modelos financieros y analizar las palancas de rentabilidad de empresas funerarias y tanatorios',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Documentación legal en servicios funerarios con IA',
                'description'      => 'Gestiona la documentación legal obligatoria en la prestación de servicios funerarios: licencias de enterramiento, certificados de defunción, contratos de previsión y normativa de traslados.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor jurídico especializado en el marco normativo de los servicios funerarios en España. Necesito un análisis completo de la documentación legal obligatoria y los procesos administrativos que debe gestionar una empresa funeraria en el momento del fallecimiento y durante la prestación del servicio.

Marco normativo principal:
- Ley Orgánica 10/1995, del Código Penal: delitos contra los difuntos
- Real Decreto 1591/2009 sobre productos sanitarios (aplicable a féretros y urnas)
- Normativa autonómica: cada comunidad autónoma regula el sector funerario de manera diferente
- Reglamento de policía sanitaria mortuoria: competencia autonómica en la mayoría de CC.AA.
- Ley 50/1980 de Contrato de Seguro y normativa de seguros de previsión funeraria

Tarea principal: Desarrolla la guía legal completa de documentación para la prestación de servicios funerarios.

Analiza en detalle cada área documental y legal:

1. Documentación en el momento del fallecimiento:
   - Certificado médico de defunción: quién lo emite, plazos, casos especiales (muerte violenta, sin médico presente)
   - Parte judicial: cuándo interviene el juzgado y qué documentación requiere
   - Inscripción en el Registro Civil: plazo legal (24 horas), documentación necesaria, proceso telemático
   - Licencia de enterramiento o cremación: quién la expide, plazo para enterrar (mínimo 24h en España)

2. Documentación para el traslado de cadáveres:
   - Traslado dentro del mismo municipio: documentación simplificada
   - Traslado entre comunidades autónomas: Guía Sanitaria de Circulación, autorización sanitaria previa
   - Traslado internacional (salida de España): Pasaporte Mortuorio, apostilla, autorización del país de destino
   - Traslado internacional (entrada en España): requisitos del país de origen, documentación en idioma local

3. Contrato de servicios funerarios:
   - Obligaciones de información precontractual según normativa de consumidores
   - Cláusulas obligatorias del contrato funerario: desglose de servicios, precios unitarios, forma de pago
   - Prohibiciones: cláusulas abusivas frecuentes en contratos funerarios detectadas por FACUA
   - Derecho de desistimiento: los servicios funerarios están excluidos del derecho de desistimiento de 14 días

4. Contratos de previsión funeraria:
   - Marco legal de la previsión funeraria: distinción entre seguro (supervisa la DGSFP) y previsión directa (no regulada como seguro)
   - Cláusulas obligatorias: servicios garantizados, condiciones de actualización de precios, revocación
   - Fondo de garantía: en qué casos la funeraria está obligada a constituir garantía financiera
   - Fiscalidad de la previsión funeraria: IVA, IRPF del tomador y del beneficiario

5. Protección de datos en el sector funerario:
   - Categorías especiales de datos: los datos de fallecidos incluyen causas de muerte (datos de salud)
   - Legitimación para el tratamiento: interés legítimo vs. obligación legal vs. consentimiento familiar
   - Plazo de conservación de los expedientes funerarios
   - Derechos de los familiares sobre los datos del fallecido según LOPDGDD

6. Responsabilidad civil de la empresa funeraria:
   - Daños materiales: mal estado del féretro, pérdida de pertenencias, retrasos en el servicio
   - Daños morales: error en la identificación del cuerpo, pérdida de restos, error en la cremación
   - Seguro de responsabilidad civil obligatorio: coberturas mínimas recomendadas
   - Gestión de reclamaciones: protocolo ante una queja formal que puede derivar en reclamación legal

Incluye modelos de contrato, checklist de documentación por tipo de servicio y tabla comparativa de las principales diferencias normativas entre comunidades autónomas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar la documentación legal obligatoria en servicios funerarios y garantizar el cumplimiento normativo en España',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención empática a familias en duelo con IA',
                'description'      => 'Diseña protocolos de comunicación y atención al cliente para acompañar a familias en proceso de duelo, con técnicas de escucha activa, gestión emocional y resolución de situaciones difíciles.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en comunicación empática y atención en situaciones de crisis emocional. Mi objetivo es diseñar un sistema completo de atención a familias en duelo para el personal de una funeraria, combinando protocolos de comunicación, formación en habilidades emocionales y herramientas prácticas para las situaciones más difíciles.

Perfil del personal que atiende a las familias:
- Directores funerarios: primer contacto con la familia, gestión del servicio completo
- Personal de tanatorio: atención durante la velada, apoyo en momentos de mayor emotividad
- Agentes telefónicos: primer contacto en el momento del fallecimiento (guardia 24h)
- Personal administrativo: gestión de documentación con familias en estado de shock

Tipos de situaciones más difíciles:
- Fallecimiento repentino o inesperado (accidente, infarto, suicidio)
- Fallecimiento de un niño o persona joven
- Familias con conflictos internos (divorciados, herencias, desacuerdos sobre el tipo de servicio)
- Familias de otras culturas con rituales y expectativas muy diferentes
- Familias que no pueden pagar el servicio

Tarea principal: Diseña el sistema completo de atención empática para familias en duelo.

Desarrolla los siguientes componentes del sistema:

1. Principios de la comunicación en duelo:
   - La escucha activa en el contexto del duelo: cómo escuchar sin interrumpir ni juzgar
   - Lenguaje verbal y no verbal: palabras que confortan y palabras que deben evitarse (eufemismos inadecuados, frases de consuelo vacías)
   - La presencia empática: cómo estar presente emocionalmente sin quedar absorbido por el dolor ajeno
   - Límites profesionales: cómo mantener la empatía sin perder la funcionalidad necesaria para gestionar el servicio

2. Protocolo de primera llamada (fallecimiento reciente):
   - Los primeros 30 segundos: cómo presentarse y establecer un tono de calma y control
   - Preguntas esenciales: qué información necesitar con urgencia y cómo pedirla sin parecer frío
   - Gestión de la llamada cuando el interlocutor llora o está en shock: qué decir y cuándo hacer pausas
   - Cierre de la llamada: confirmación de la información y qué esperar a continuación

3. La primera reunión presencial con la familia:
   - Acogida: espacio físico, lenguaje corporal, tiempo adecuado antes de entrar en gestiones
   - Estructura de la reunión: primero escuchar, luego informar, finalmente gestionar
   - Cómo presentar opciones de servicio y precios sin que parezca un acto comercial
   - Gestión del tiempo: la familia necesita tiempo, pero el servicio tiene plazos legales

4. Manejo de situaciones especialmente difíciles:
   - Fallecimiento de un menor: qué decir, cómo organizar el servicio, cómo ayudar a los padres
   - Suicidio: cómo abordar el tema con la familia, qué preguntar y qué evitar, recursos de apoyo al duelo
   - Conflicto familiar durante el servicio: cómo mediar sin tomar partido
   - Familia que no puede pagar: cómo informar de las opciones (ayudas del SEPE, servicios básicos) con dignidad

5. Apoyo continuado después del servicio:
   - Llamada de seguimiento post-servicio: cuándo hacerla, qué preguntar, cómo ofrecer apoyo adicional
   - Recursos de duelo que la funeraria puede facilitar: asociaciones, grupos de apoyo, bibliografía
   - Recordatorio del aniversario: cómo gestionar el contacto en fechas sensibles sin resultar comercial
   - Programa de acompañamiento al duelo: talleres o grupos organizados por la funeraria como servicio de valor

6. Formación y mantenimiento de competencias del equipo:
   - Plan de formación inicial: 8 horas de comunicación empática y primeros auxilios psicológicos
   - Roleplays de situaciones difíciles: práctica supervisada con feedback del instructor
   - Supervisión clínica del equipo: sesiones mensuales con psicólogo especializado en duelo
   - Evaluación de competencias de atención: cómo medir y mejorar la calidad de la atención empática

Incluye guiones de llamada, protocolos de reunión y un catálogo de frases útiles e inapropiadas para el personal en contacto con familias en duelo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar protocolos de atención empática y comunicación en duelo para el personal de funerarias y tanatorios',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance para modernización de funerarias con IA',
                'description'      => 'Estructura tu actividad como consultor independiente para la modernización y transformación digital de empresas funerarias familiares, con metodología y servicios definidos.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocios especializado en el lanzamiento de consultorías independientes en sectores tradicionales y con baja penetración tecnológica. Soy profesional con 12 años de experiencia en gestión de funerarias (he sido director de operaciones de un grupo funerario mediano) y quiero lanzar mi propia consultoría independiente para ayudar a funerarias familiares a modernizarse, mejorar su rentabilidad y adaptarse a los cambios del sector.

Mi perfil y diferenciación:
- Conocimiento profundo del sector: operaciones, normativa, finanzas, atención a familias
- Red de contactos: directores de funerarias, asociaciones del sector, proveedores, aseguradoras
- Valor añadido único: entiendo el lenguaje del funeralista y me gano su confianza rápidamente
- Objetivo de negocio: 5.000 € netos mensuales en el primer año, 8.000 € en el segundo

Tarea principal: Diseña el modelo de negocio y el plan de lanzamiento de mi consultoría de modernización funeraria.

Desarrolla los siguientes componentes del plan:

1. Definición del portfolio de servicios de consultoría:
   - Diagnóstico de modernización: auditoría completa del negocio (operaciones, finanzas, marketing, RRHH) con informe de oportunidades
   - Implantación de software de gestión funeraria: selección, configuración y formación del equipo
   - Optimización de la rentabilidad: análisis de márgenes, mezcla de servicios, estructura de costes
   - Desarrollo de negocio de previsión funeraria: lanzamiento o expansión de la cartera de previsión
   - Formación del equipo: habilidades de atención a familias, gestión del duelo vicario, ventas éticas

2. Modelo de tarifas para consultoría funeraria:
   - Diagnóstico inicial: precio fijo por funeraria según tamaño (número de tanatorios y servicios anuales)
   - Retainer mensual de asesoría continua: qué incluye y cómo dimensionarlo
   - Proyectos de implementación: precio por proyecto con hitos y entregables definidos
   - Formación: precio por jornada presencial vs. programa online de varias sesiones
   - Modelo de éxito: honorarios variables ligados a la mejora de EBITDA conseguida

3. Posicionamiento y captación de funerarias cliente:
   - Cliente ideal: funeraria familiar de segunda o tercera generación con 1-4 tanatorios y sin departamento de gestión profesionalizado
   - Canales de captación: asociaciones funerarias (PANASEF, asociaciones autonómicas), proveedores (casas funerarias, fabricantes de féretros), contactos directos
   - Conferencias y ponencias: cómo convertirse en referente en congresos funerarios
   - Contenido de autoridad: artículo mensual en Adiós Cultural o Funeraria Today sobre tendencias del sector

4. Metodología de consultoría para el sector funerario:
   - Fase de diagnóstico: cómo estructurar la auditoría de una funeraria en 5 días de trabajo in situ
   - Entregable del diagnóstico: informe ejecutivo con prioridades y plan de acción con ROI estimado
   - Fase de implementación: metodología de acompañamiento mensual con reuniones de seguimiento y KPIs
   - Gestión del change management en empresas familiares: cómo gestionar la resistencia al cambio del fundador

5. Estructura legal y financiera de la consultoría:
   - Alta como autónomo: epígrafe adecuado para consultoría de gestión empresarial
   - Contrato de servicios tipo: cláusulas esenciales, confidencialidad (los datos del negocio funerario son muy sensibles), resolución de conflictos
   - Seguro de responsabilidad civil profesional para consultores de gestión
   - Gestión fiscal: IVA, retenciones IRPF, facturas intracomunitarias si se opera en LATAM

6. Plan de crecimiento y escalabilidad:
   - Año 1: consolidar 4-5 clientes de retainer mensual + 3-4 proyectos puntuales
   - Año 2: desarrollar formación online (curso de modernización funeraria para directivos del sector)
   - Año 3: crear un modelo de franquicia de la metodología o asociarse con otros consultores sectoriales
   - Internacionalización: diferencias del mercado funerario en México, Colombia y Argentina

Incluye una propuesta comercial tipo para el diagnóstico inicial, el modelo de contrato de consultoría y un plan de los primeros 60 días de actividad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzar y estructurar una consultoría independiente especializada en la transformación y modernización de empresas funerarias familiares',
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
