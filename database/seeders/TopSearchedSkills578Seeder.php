<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills578Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing digital para turismo rural y agroturismo con IA',
                'description'      => 'Diseña campañas de marketing específicas para alojamientos rurales, granjas de turismo y experiencias agroturísticas usando IA para diferenciarte en un mercado en crecimiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing de destinos rurales y turismo de naturaleza con más de 10 años de experiencia ayudando a negocios de turismo rural, casas de agroturismo y granjas con actividades turísticas a conseguir visibilidad online y atraer viajeros de perfil cultural, gastronómico y de naturaleza.

Contexto: Gestiono un negocio de turismo rural/agroturismo en [UBICACIÓN] que ofrece [DESCRIPCIÓN DEL NEGOCIO: alojamiento, experiencias, gastronomía, actividades]. Mis clientes principales son [PERFIL DEL CLIENTE OBJETIVO] y actualmente la mayoría de mis reservas llegan por [CANALES ACTUALES]. Quiero profesionalizar mi marketing digital para aumentar ocupación y llegar a nuevos públicos.

Objetivo: Desarrollar una estrategia de marketing digital completa y adaptada a las particularidades del turismo rural, con acciones concretas y presupuesto ajustado a la realidad de un negocio pequeño o mediano.

instrucción principal:
Crea una estrategia de marketing digital completa para mi negocio de turismo rural:

1. ANÁLISIS DE POSICIONAMIENTO
Ayúdame a definir mi propuesta de valor diferencial:
- Qué hace único a mi negocio respecto a otros alojamientos rurales
- Para qué tipo de viajero soy la mejor opción (y para cuál NO)
- Mi palabra de marca: el adjetivo o concepto que me define
- Mis 3 experiencias estrella que debo comunicar como pilares
- Cómo comunicar autenticidad sin caer en tópicos del sector

2. CALENDARIO DE CONTENIDOS ANUAL
Estructura el plan de contenidos por temporada:
- Temporada alta (verano, Semana Santa, Navidades): qué comunicar
- Temporada media (primavera, otoño): cómo llenar semanas de entre-semana
- Temporada baja: estrategias de promoción y paquetes especiales
- Calendario de festividades, ferias y eventos locales que aprovechar
- Temas de contenido evergreen: recetas, naturaleza, tradiciones, historia local

3. ESTRATEGIA DE REDES SOCIALES
Diseña el plan para cada plataforma:
- Instagram: estética, tipos de contenido (reels, stories, carrusel), frecuencia
- Facebook: comunidad local, grupos de turismo rural, eventos
- Pinterest: tableros inspiracionales para viajeros en fase de descubrimiento
- TikTok: posibilidad de viralidad con contenido auténtico del campo
- YouTube: vídeos de experiencias, visitas virtuales y testimoniales
Incluye ideas de contenido específicas para cada red.

4. SEO LOCAL Y POSICIONAMIENTO EN BUSCADORES
Optimiza tu presencia en búsquedas:
- Palabras clave específicas de turismo rural en tu zona
- Optimización de Google My Business: fotos, publicaciones, respuestas
- Contenidos del blog: artículos que atraigan a viajeros que planifican
- Estructura de la web: páginas que debes tener y cómo optimizarlas
- Enlazado local: colaboraciones con otros negocios y destinos

5. GESTIÓN DE OTAs Y RESERVAS DIRECTAS
Maximiza ingresos por canal:
- Presence en Booking.com, Airbnb, Ruralia y plataformas especializadas
- Estrategia de precios por canal y temporada
- Cómo incentivar la reserva directa (descuentos, exclusivos, flexibilidad)
- Email marketing: newsletter para viajeros que ya conocen el negocio
- Programa de fidelización simple y efectivo

6. MARKETING DE EXPERIENCIAS AGROTURÍSTICAS
Vende las experiencias, no solo el alojamiento:
- Cómo fotografiar y comunicar actividades rurales (vendimia, ordeño, cocina)
- Copywriting para experiencias: qué palabras venden y cuáles no
- Paquetes experienciales por perfil de cliente (familias, parejas, grupos)
- Colaboraciones con productores locales, bodegas y artesanos
- Comunicación de la sostenibilidad y el impacto positivo en el territorio

7. PRESUPUESTO Y PRIORIDADES
Establece un plan realista:
- Inversión mínima recomendada por canal (paid vs. orgánico)
- Herramientas gratuitas o de bajo coste para la gestión
- KPIs clave: tasa de ocupación, coste por reserva directa, engagement
- Plan de acción para los primeros 90 días
- Revisión trimestral de resultados y ajuste de estrategia

Adapta todas las recomendaciones a las limitaciones de tiempo y recursos de un negocio familiar o pequeño equipo, priorizando acciones de alto impacto y bajo coste.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marketing digital para turismo rural y agroturismo',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollar plataforma de reservas para turismo rural con IA',
                'description'      => 'Diseña la arquitectura técnica y funcionalidades de una plataforma digital de reservas y experiencias para negocios de turismo rural usando IA para optimizar el desarrollo.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en plataformas de viajes y turismo, con experiencia específica en el sector de turismo rural, glamping y experiencias de naturaleza. Conoces las particularidades técnicas de los sistemas de disponibilidad, las integraciones con channel managers y las necesidades de negocios pequeños con limitaciones de recursos técnicos.

Contexto: Quiero desarrollar [o mejorar] una plataforma digital para negocios de turismo rural que incluya reservas online, gestión de disponibilidad, presentación de experiencias agroturísticas y comunicación con los huéspedes. El negocio es [descripción: alojamiento rural / granja / complejo de cabañas] con [número de unidades/experiencias].

Objetivo: Diseñar y planificar el desarrollo de un sistema digital completo que gestione todos los aspectos del negocio de turismo rural de forma eficiente y con buena experiencia de usuario.

instrucción principal:
Desarrolla el plan técnico completo para la plataforma de turismo rural:

1. ARQUITECTURA DEL SISTEMA
Define la arquitectura técnica:
- Stack tecnológico recomendado (frontend, backend, base de datos)
- Justificación de cada elección tecnológica
- Arquitectura de microservicios vs. monolítica: pros y contras para este caso
- Sistema de almacenamiento de imágenes y vídeos (CDN)
- Requisitos de infraestructura y hosting recomendado
- Consideraciones de escalabilidad y rendimiento

2. MÓDULO DE RESERVAS Y DISPONIBILIDAD
Diseña el core del sistema:
- Motor de disponibilidad: lógica de bloques, temporadas y restricciones
- Tipos de habitaciones/unidades y sus atributos
- Gestión de tarifas: temporada, duración mínima, last minute, early bird
- Proceso de reserva: flujo de usuario desde búsqueda hasta confirmación
- Sistema de pago: pasarelas, gestión de depósitos y cancelaciones
- Integración con channel manager (Siteminder, Cloudbeds, etc.)

3. GESTIÓN DE EXPERIENCIAS AGROTURÍSTICAS
Sistema para actividades y experiencias:
- Catálogo de experiencias: modelo de datos y atributos
- Disponibilidad de experiencias: plazas, horarios y requisitos
- Experiencias vinculadas a alojamiento vs. standalone
- Sistema de vouchers y entradas digitales
- Gestión de instructores/guías y sus horarios

4. PANEL DE ADMINISTRACIÓN
Diseña el backoffice del negocio:
- Dashboard de ocupación y reservas en tiempo real
- Calendario visual de disponibilidad multi-unidad
- Gestión de reservas: crear, modificar, cancelar
- CRM básico: perfil de huéspedes y historial de estancias
- Reportes: ocupación por período, ingresos, canales de origen
- Gestión de contenidos: fotos, descripciones, tarifas

5. COMUNICACIÓN CON HUÉSPEDES
Sistema de messaging y notificaciones:
- Emails automáticos: confirmación, recordatorio pre-llegada, post-estancia
- Instrucciones de llegada y guía del alojamiento (digital)
- Sistema de mensajería interna entre negocio y huésped
- Solicitud de review post-estancia
- Newsletter para huéspedes anteriores

6. INTEGRACIONES EXTERNAS
APIs y servicios de terceros necesarios:
- Pasarelas de pago: Stripe, Redsys o equivalentes locales
- OTAs: sincronización con Booking.com, Airbnb, Ruralia vía iCal o API
- Google Maps y servicios de geolocalización
- Metasearch: Google Hotel Ads
- Analytics: Google Analytics 4 y Facebook Pixel

7. HOJA DE RUTA DE DESARROLLO
Plan de implementación por fases:
- Fase 1 (MVP, 2 meses): reservas básicas, disponibilidad y pago
- Fase 2 (3 meses): experiencias, backoffice completo, integraciones OTA
- Fase 3 (2 meses): CRM, email marketing, Google Hotel Ads
- Estimación de recursos necesarios por fase
- Criterios de éxito y métricas de validación del producto

Incluye consideraciones específicas sobre el contexto rural: conectividad limitada en algunas zonas, clientes con menor digitalización, necesidad de soporte en múltiples idiomas si hay turismo internacional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Desarrollo de plataforma de reservas turismo rural',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Identidad visual y branding para negocios de turismo rural y agroturismo con IA',
                'description'      => 'Crea una identidad de marca auténtica para alojamientos rurales, granjas turísticas y experiencias agroturísticas que comunique naturaleza, tradición y calidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de arte y brand strategist especializado en negocios del sector turístico rural, gastronómico y de naturaleza. Has trabajado con casas rurales, bodegas, granjas y hoteles boutique en entorno rural, y sabes cómo crear marcas que transmitan autenticidad sin perder profesionalidad.

Contexto: Necesito crear (o renovar) la identidad visual de mi negocio de turismo rural/agroturismo. El negocio es [descripción] ubicado en [zona geográfica]. Me dirijo a [perfil de cliente] que busca [tipo de experiencia]. Actualmente mi identidad visual es [descripción del estado actual o "no tengo ninguna definida"].

Objetivo: Desarrollar una identidad de marca visual completa que diferencie mi negocio, transmita los valores correctos y sea aplicable en todos los puntos de contacto con el cliente.

instrucción principal:
Desarrolla la identidad visual completa para el negocio de turismo rural:

1. ESTRATEGIA DE MARCA
Define el posicionamiento de marca:
- Propuesta de valor única: qué hace diferente a este negocio
- Personalidad de marca: 5 adjetivos que la definen y 5 que NO la definen
- Tono de voz: cómo habla la marca (formal/cercano, poético/directo, etc.)
- Arquetipos de marca: cuál o cuáles encajan (el Explorador, el Mago, el Sabio)
- Promesa de marca: la experiencia que el cliente siempre puede esperar
- Valores de marca: qué principios guían el negocio y cómo se comunican

2. NAMING Y CONCEPTUALIZACIÓN
Propón opciones de nombre (si es nuevo o se plantea cambio):
- 5 propuestas de nombre con justificación conceptual
- Criterios de evaluación: pronunciabilidad, memorabilidad, disponibilidad
- Juego de palabras con el territorio, la tradición o la naturaleza del lugar
- Variantes en otros idiomas si hay mercado internacional
- Disponibilidad de dominio web y redes sociales

3. SISTEMA DE COLOR
Define la paleta cromática:
- Color primario: el color que define la marca y su significado
- Color secundario: complementario al primario, para jerarquía visual
- Colores de acento: para destacar elementos clave
- Neutros: blancos, cremas, marrones y grises del entorno rural
- Paleta de temporada: variaciones para comunicaciones de diferentes épocas
- Justificación de cada color desde la psicología del color y el contexto rural

4. TIPOGRAFÍA
Selecciona el sistema tipográfico:
- Tipografía principal: para logotipo y titulares
- Tipografía secundaria: para cuerpo de texto
- Tipografía de acento: para frases destacadas o citas
- Jerarquía tipográfica: tamaños, pesos y usos
- Opciones gratuitas (Google Fonts) vs. tipografías premium

5. LOGOTIPO E ICONOGRAFÍA
Diseña el sistema de identidad gráfica:
- Concepto del logotipo: descripción detallada del símbolo y logotipo
- Variantes del logotipo: horizontal, vertical, solo símbolo, solo texto
- Versiones monocromáticas y negativas
- Zona de exclusión y tamaño mínimo de uso
- Iconografía complementaria: set de iconos propios para servicios y experiencias
- Patrones o texturas derivadas de la identidad

6. APLICACIONES DE LA IDENTIDAD
Diseña las piezas de comunicación principales:
- Señalética del alojamiento: carteles, bienvenida, habitaciones, rutas
- Material impreso: tarjetas, folletos, carta de restaurante, guía del huésped
- Packaging: etiquetas de productos propios (mermeladas, aceites, vinos)
- Uniformes y merchandising: delantales, bolsas, camisetas
- Presencia digital: foto de perfil, portada de redes, plantillas de publicaciones

7. GUÍA DE IDENTIDAD (BRAND BOOK)
Documenta las normas de uso:
- Uso correcto e incorrecto del logotipo
- Combinaciones de color permitidas
- Estilo fotográfico: qué fotografiar, cómo editar y qué evitar
- Ejemplos de aplicación correcta en cada soporte
- Instrucciones para proveedores externos

Incluye inspiraciones de referencia en el sector y describe detalladamente cada elemento para que un diseñador pueda ejecutarlo fielmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Branding e identidad visual para turismo rural',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas directas y gestión de canales para turismo rural con IA',
                'description'      => 'Optimiza la venta directa de tu alojamiento rural: estrategias para reducir dependencia de OTAs, aumentar reservas directas y gestionar canales de distribución con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un Revenue Manager especializado en alojamientos turísticos rurales y boutique con experiencia en optimizar la mezcla de canales de distribución, aumentar la rentabilidad por reserva y reducir la comisión media pagada a intermediarios.

Contexto: Tengo un alojamiento de turismo rural con [X unidades/habitaciones] en [localización]. Actualmente el [X]% de mis reservas llegan a través de OTAs (principalmente Booking.com y/o Airbnb) y el resto de forma directa. La comisión media que pago es del [X]%. Quiero aumentar la reserva directa y reducir mi dependencia de las plataformas sin sacrificar ocupación.

Objetivo: Desarrollar una estrategia de ventas directas completa que aumente el porcentaje de reservas directas, optimice el revenue por unidad y reduzca el coste de adquisición de cada reserva.

instrucción principal:
Crea una estrategia completa de ventas directas para el alojamiento rural:

1. DIAGNÓSTICO DE LA SITUACIÓN ACTUAL
Analiza el punto de partida:
- Cálculo del coste real por reserva en cada canal
- Análisis del mix de canales: fortalezas y dependencias actuales
- Perfil de cliente por canal: quién reserva dónde y por qué
- Evaluación de la web actual: ¿convierte o solo informa?
- Presencia en metabuscadores: Google Hotel Ads, Trivago, Kayak
- Valoración de la estrategia de precios actual

2. ESTRATEGIA DE PRECIO POR CANAL
Diseña la política de precios:
- Principio de paridad de precios: qué es y cómo manejarlo legalmente
- Ventajas exclusivas para reserva directa (sin violar paridad)
- Descuentos y beneficios no monetarios: desayuno incluido, early check-in, etc.
- Estrategia de last minute: cuándo bajar precio y cuándo no
- Early bird: cómo incentivar reservas anticipadas con descuento
- Tarifas de grupo y largas estancias

3. OPTIMIZACIÓN DE LA WEB PARA CONVERTIR
Convierte la web en el mejor canal de venta:
- Motor de reservas: qué evaluar y cómo elegir el adecuado
- Elementos de conversión obligatorios: testimonios, garantías, urgencia
- SEO local: aparecer cuando el viajero busca en Google
- Google Hotel Ads: cómo aparecer con precio directamente en búsquedas
- Velocidad y experiencia móvil: por qué es crítico en turismo rural
- Chat en tiempo real o WhatsApp Business como canal de cierre

4. EMAIL MARKETING Y CRM
Construye relaciones con tus huéspedes:
- Captura de emails: durante la reserva, durante la estancia y al checkout
- Secuencia de bienvenida para nuevos suscriptores
- Email pre-llegada: expectativas, instrucciones y up-sells
- Email post-estancia: solicitar review y segunda visita
- Newsletter anual o semestral con novedades y ofertas
- Campaña de recuperación de huéspedes que no repiten

5. PROGRAMA DE FIDELIZACIÓN Y REFERIDOS
Convierte huéspedes en embajadores:
- Sistema de puntos o beneficios para huéspedes recurrentes
- Programa de referidos: incentivos para quien trae nuevos clientes
- Colaboraciones con agencias de viaje locales y especializadas
- Grupos y comunidades online de turismo rural: cómo participar
- Alianzas con otros negocios del destino para paquetes conjuntos

6. GESTIÓN DE OTAS SIN DEPENDENCIA EXCESIVA
Usa las OTAs como herramienta, no como muleta:
- Estrategia de listing en Booking.com: cómo optimizar el perfil
- Airbnb para turismo rural: ventajas y límites de la plataforma
- Plataformas especializadas: Ruralia, TopRural, Escapada Rural
- Gestión de reviews: respuesta a valoraciones y su impacto en el ranking
- Cuándo y cómo cerrar disponibilidad en OTAs para forzar la directa

7. MÉTRICAS Y SEGUIMIENTO
Define los KPIs del canal directo:
- Porcentaje de reservas directas vs. OTAs (objetivo progresivo)
- Coste de adquisición por canal
- RevPAR (Revenue per Available Room) y cómo mejorarlo
- Tasa de repetición de huéspedes
- NPS del proceso de reserva directa

Incluye un plan de acción trimestral con las 3 acciones de mayor impacto para empezar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Revenue management y ventas directas en turismo rural',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Desarrollo de producto de experiencias agroturísticas con IA',
                'description'      => 'Diseña y valida nuevas experiencias agroturísticas: actividades en granja, rutas gastronómicas, talleres tradicionales y paquetes de turismo de naturaleza.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en desarrollo de productos turísticos con enfoque en experiencias rurales, gastronómicas y de naturaleza. Conoces la metodología de design thinking aplicada al turismo, el modelo de economía de la experiencia de Pine & Gilmore y las tendencias del turismo regenerativo y de proximidad.

Contexto: Tengo un negocio de agroturismo/turismo rural y quiero ampliar mi oferta más allá del alojamiento. Actualmente [descripción de lo que ofreces]. Tengo acceso a [recursos: tierra agrícola, animales, producción propia, entorno natural, patrimonio cultural] y quiero convertirlos en experiencias que generen ingresos adicionales y diferencien mi negocio.

Objetivo: Diseñar un portfolio de experiencias agroturísticas con propuesta de valor clara, proceso de desarrollo estructurado y modelo de negocio viable.

instrucción principal:
Desarrolla el sistema de experiencias agroturísticas completo:

1. INVENTARIO DE RECURSOS EXPERIENCIALES
Identifica el potencial del negocio:
- Recursos propios: producción agrícola, ganadería, flora, fauna del entorno
- Patrimonio cultural: tradiciones, técnicas artesanales, gastronomía local
- Entorno natural: rutas, paisajes, ecosistemas específicos
- Red de productores locales: artesanos, bodegueros, queseros, apicultores
- Calendario estacional: qué es único en cada época del año
- Elementos que no tienes pero podrías incorporar con colaboraciones

2. DEFINICIÓN DE EXPERIENCIAS ESTRELLA
Diseña el portfolio de experiencias:
Para cada experiencia propuesta, define:
- Nombre evocador y memorable
- Descripción de la experiencia (qué vivirá el cliente, paso a paso)
- Perfil de cliente ideal: para quién es perfecta esta experiencia
- Duración y tamaño de grupo ideal (mínimo y máximo)
- Estacionalidad: cuándo se puede ofrecer y cuándo no
- Necesidades de infraestructura, personal y materiales
- Precio orientativo y justificación del valor
- Factor diferencial: por qué esta experiencia solo puede vivirse aquí

3. METODOLOGÍA DE CO-CREACIÓN CON CLIENTES
Diseña el proceso de desarrollo iterativo:
- Cómo identificar qué quieren realmente los viajeros
- Técnicas de validación de experiencias antes de invertir
- Piloto con grupos de prueba: cómo organizar y qué medir
- Iteración basada en feedback: qué cambiar y qué mantener
- De la idea al producto listo para vender: proceso completo

4. DISEÑO DE EXPERIENCIAS MEMORABLES
Aplica el modelo de experiencias:
- Los 4 dominios de la experiencia: entretenimiento, educación, evasión y estética
- Cómo crear momentos pico (peak experiences) memorables
- El poder del storytelling: contar la historia detrás de cada producto
- Activación de los 5 sentidos: vista, olfato, tacto, gusto, oído
- Souvenir de la experiencia: algo físico o emocional que el cliente se lleva
- Cómo fotografiar la experiencia para que se convierta en contenido orgánico

5. OPERATIVA DE LAS EXPERIENCIAS
Estructura los procesos internos:
- Guión de la experiencia: timing, mensajes clave y momentos críticos
- Formación del personal/guía que conduce la experiencia
- Materiales y equipamiento necesario por experiencia
- Protocolo de seguridad y gestión de riesgos
- Gestión de grupos: dinámica, idiomas, adaptaciones especiales
- Plan B: qué hacer si el tiempo u otros factores impiden la experiencia

6. MODELO DE NEGOCIO DE LAS EXPERIENCIAS
Analiza la viabilidad económica:
- Estructura de costes por experiencia: fijos y variables
- Precio mínimo de rentabilidad y precio objetivo
- Canales de venta: directo, OTAs de experiencias (Airbnb Experiences, Civitatis), agencias
- Paquetes de alojamiento + experiencia: cómo estructurarlos
- Revenue adicional: productos propios que vender tras la experiencia

7. CERTIFICACIONES Y SELLOS DE CALIDAD
Accede a reconocimiento del sector:
- Sellos de turismo sostenible y agroturismo en tu comunidad/país
- Biosphere Tourism y certificaciones internacionales
- Denominaciones de origen vinculadas a las experiencias
- Fondo Europeo Agrícola de Desarrollo Rural (FEADER): subvenciones disponibles
- Asociaciones sectoriales de turismo rural que aportan visibilidad

Incluye una ficha completa para las 3 mejores experiencias que podrías empezar a ofrecer en los próximos 90 días con inversión mínima.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de producto de experiencias agroturísticas',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de personal y equipos en negocios de turismo rural con IA',
                'description'      => 'Diseña procesos de selección, formación y gestión del personal en alojamientos rurales y negocios de agroturismo, con las particularidades de la temporalidad y el entorno rural.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de RRHH especializado en pequeñas y medianas empresas turísticas rurales, con experiencia en la gestión de equipos estacionales, contratación en zonas con escasez de mano de obra y construcción de cultura de empresa en negocios familiares o de gestión directa.

Contexto: Gestiono un negocio de turismo rural que da empleo a [X personas] de forma [permanente/estacional]. Los principales retos de RRHH son [ejemplos: encontrar personal cualificado en zona rural, retener a los buenos empleados entre temporadas, formar a personal sin experiencia previa, gestionar el trabajo familiar sin conflictos].

Objetivo: Diseñar un sistema de gestión de personas que sea eficaz, humano y adaptado a las particularidades de un negocio de turismo rural.

instrucción principal:
Desarrolla un sistema completo de gestión de personas para el negocio de turismo rural:

1. ESTRUCTURA ORGANIZATIVA
Define la organización del equipo:
- Organigrama del negocio: roles, responsabilidades y dependencias
- Perfiles de puesto detallados: funciones, competencias y requisitos
- Distribución de turnos en temporada alta vs. baja
- Roles polivalentes: cómo diseñar puestos flexibles para negocio pequeño
- Protocolo de sustituciones y contingencias

2. RECLUTAMIENTO EN ENTORNO RURAL
Diseña el proceso de captación de talento:
- Dónde buscar candidatos: canales locales, SEPE, universidades, redes profesionales
- Cómo hacer atractivo el puesto en una zona rural
- Beneficios diferenciales: alojamiento, comidas, entorno natural, conciliación
- Proceso de selección adaptado: entrevista estructurada, prueba práctica
- Acuerdos con escuelas de hostelería y turismo para prácticas
- Estrategia de fidelización entre temporadas (comunicación, beneficios)

3. ONBOARDING Y FORMACIÓN INICIAL
Programa de incorporación para el sector rural:
- Semana 1: bienvenida, valores del negocio, normas de convivencia
- Semana 2: formación en procedimientos y estándares de calidad
- Semana 3: acompañamiento práctico en el puesto
- Mes 2: autonomía supervisada con feedback diario
- Materiales de onboarding: manual del empleado, guías de procedimiento
- Formación específica: idiomas, primeros auxilios, protocolo de huéspedes

4. GESTIÓN DEL RENDIMIENTO
Estructura el seguimiento del equipo:
- Reuniones regulares: diaria (briefing), semanal (coordinación) y mensual (desempeño)
- Feedback continuo: cómo dar reconocimiento y corrección en el día a día
- Evaluación semestral: herramientas simples para negocios pequeños
- Plan de desarrollo: qué puede crecer un empleado dentro del negocio
- Gestión de conflictos: protocolo para situaciones difíciles

5. CULTURA Y CLIMA LABORAL
Construye una cultura positiva:
- Valores del negocio: cómo definirlos y transmitirlos de verdad
- Rituales de equipo: celebraciones, reconocimientos y tradiciones internas
- Gestión de la convivencia: cuando el equipo vive en el alojamiento
- Bienestar del empleado: descansos, carga de trabajo y prevención de burnout
- Comunicación interna: herramientas simples para un equipo pequeño

6. GESTIÓN ADMINISTRATIVA Y LEGAL
Cumple con las obligaciones laborales:
- Contratos: tipos más habituales en hostelería rural y cuándo usarlos
- Convenio colectivo aplicable: puntos más importantes del sector
- Gestión de horarios y descansos: registro de jornada y cumplimiento
- Prevención de riesgos laborales: obligaciones básicas para el sector
- Gestión de bajas, vacaciones y permisos
- Seguridad Social: gestión de altas/bajas y cotizaciones

7. RETENCIÓN Y FIDELIZACIÓN DEL EQUIPO
Reduce la rotación de personal:
- Plan de carrera para empleados clave
- Sistemas de reconocimiento no monetario
- Política salarial: cómo posicionarse en el mercado local
- Acuerdos de exclusividad para temporada: fidelización entre temporadas
- Encuestas de clima laboral: cómo hacer que el equipo se sienta escuchado

Incluye plantillas de los documentos más útiles: perfil de puesto, entrevista de selección, plan de onboarding y evaluación semestral.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'RRHH y gestión de personas en turismo rural',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Planificación financiera y rentabilidad para negocios de turismo rural con IA',
                'description'      => 'Analiza la rentabilidad de tu alojamiento rural, diseña presupuestos estacionales, gestiona la tesorería y accede a subvenciones del sector con ayuda de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor financiero especializado en pequeñas y medianas empresas turísticas, especialmente en alojamientos rurales, granjas agroturísticas y negocios de turismo de naturaleza. Conoces la estacionalidad del sector, las subvenciones europeas para el desarrollo rural y las métricas financieras específicas del turismo.

Contexto: Gestiono un negocio de turismo rural y necesito mejorar la gestión financiera. Actualmente [descripción de la situación financiera: alojamiento con X unidades, ingresos aproximados, temporada alta/baja, estructura de costes]. Los principales retos financieros son [temporalidad, inversiones necesarias, acceso a subvenciones, etc.].

Objetivo: Desarrollar un sistema de planificación y control financiero adaptado a las particularidades del negocio de turismo rural.

instrucción principal:
Crea un sistema de gestión financiera completo para el negocio de turismo rural:

1. MÉTRICAS FINANCIERAS CLAVE DEL SECTOR
Define los KPIs financieros esenciales:
- RevPAR (Revenue per Available Room): cómo calcularlo y mejorarlo
- ADR (Average Daily Rate): tarifa media y estrategias para aumentarla
- Tasa de ocupación: objetivos por temporada y canal
- GOP (Gross Operating Profit): margen operativo bruto y benchmarks del sector
- EBITDA y cómo mejorar el resultado operativo
- Coste de adquisición por reserva por canal
- Revenue por experiencia adicional (upselling)

2. PRESUPUESTO ANUAL POR TEMPORADAS
Diseña la planificación financiera estacional:
- Temporada alta (meses de máxima ocupación): proyección de ingresos y costes
- Temporada media (hombros): estrategias de maximización de ingresos
- Temporada baja: control de gastos y actividades de mantenimiento
- Presupuesto mensual: estructura de P&L mensual para el negocio
- Previsión de tesorería: flujos de caja por mes y gestión de la estacionalidad
- Fondo de reserva: cuánto mantener para imprevistos y reinversión

3. ESTRUCTURA DE COSTES Y OPTIMIZACIÓN
Analiza y optimiza la estructura de gastos:
- Costes fijos: hipoteca/alquiler, seguros, servicios mínimos, plantilla fija
- Costes variables: suministros, personal temporal, suministros de alojamiento
- Costes de distribución: comisiones de OTAs y coste por canal
- Costes de marketing: inversión publicitaria y su ROI
- Coste por departamento: alojamiento, restauración, experiencias
- Benchmark de costes del sector: en qué partidas estás por encima de la media

4. PLAN DE INVERSIONES
Prioriza las inversiones del negocio:
- Inventario de inversiones necesarias: ranking por rentabilidad y urgencia
- Análisis de retorno de inversión (ROI) de cada mejora
- Financiación: hipoteca, préstamos ICO, leasing, autofinanciación
- Subvenciones europeas: FEADER, LEADER y programas de desarrollo rural
- Plan de amortizaciones: impacto en el resultado fiscal
- Gestión de la deuda: niveles aceptables y plan de reducción

5. FISCALIDAD DEL TURISMO RURAL
Optimiza la carga fiscal:
- Régimen fiscal más adecuado: autónomo vs. sociedad limitada
- IVA en servicios turísticos: tipos aplicables y gestión
- IRPF o IS: estimación directa normal vs. simplificada
- Deducciones fiscales para actividades turísticas rurales
- Tratamiento fiscal de las subvenciones recibidas
- Obligaciones fiscales del sector: calendario de declaraciones

6. ACCESO A FINANCIACIÓN Y SUBVENCIONES
Identifica fuentes de financiación:
- Fondos FEADER: qué tipos de proyectos financia y cómo solicitarlos
- Grupos de Acción Local (GAL-LEADER): convocatorias y requisitos
- ICO Turismo: líneas de crédito específicas para el sector
- Avales y garantías: Sociedad de Garantía Recíproca
- Subvenciones autonómicas para turismo rural: cómo encontrarlas
- Crowdfunding como herramienta de financiación y marketing simultáneos

7. DASHBOARD FINANCIERO SIMPLE
Diseña el sistema de control mensual:
- 5 métricas que hay que revisar cada mes sin falta
- Plantilla de P&L mensual simplificada para no financieros
- Sistema de alertas: cuándo el negocio está en riesgo
- Reunión financiera mensual: qué revisar y cómo tomar decisiones
- Cierre anual: análisis de resultados y planificación del año siguiente

Incluye ejemplos numéricos con un caso ficticio de alojamiento rural para hacer tangibles todos los conceptos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestión financiera y rentabilidad en turismo rural',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal y compliance para negocios de turismo rural y agroturismo con IA',
                'description'      => 'Navega el marco normativo del turismo rural: licencias, categorías, normativas autonómicas, obligaciones fiscales y protección de datos para alojamientos y experiencias.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho turístico y normativa de turismo rural en España, con experiencia asesorando a propietarios de casas rurales, granjas agroturísticas y empresas de actividades de naturaleza sobre sus obligaciones legales y la mejor forma de estructurar sus negocios.

Contexto: Soy propietario o estoy pensando en poner en marcha un negocio de turismo rural que incluye [alojamiento rural / experiencias agroturísticas / venta de productos propios / restauración]. Estoy ubicado en [comunidad autónoma] y necesito entender el marco legal completo para operar con seguridad jurídica.

Objetivo: Obtener una guía legal completa y práctica que me permita entender las obligaciones normativas de mi negocio de turismo rural y actuar en consecuencia.

instrucción principal:
Desarrolla una guía legal completa para el negocio de turismo rural:

1. CATEGORÍAS Y TIPOS DE ALOJAMIENTO RURAL
Entiende el marco normativo básico:
- Tipos de alojamiento rural regulados: casa rural, apartamento rural, posada, albergue
- Diferencias entre alojamiento completo vs. por habitaciones
- Requisitos de categorización: estrellas, llaves, espigas (según normativa autonómica)
- Capacidad máxima: límites de plazas por tipo de establecimiento
- Diferencias entre uso turístico y residencial de una vivienda rural
- Normativa autonómica específica: cómo acceder y dónde consultar la de tu comunidad

2. LICENCIAS Y AUTORIZACIONES NECESARIAS
Tramita las autorizaciones correctamente:
- Declaración responsable vs. licencia de apertura: cuál aplica en tu caso
- Registro en el Registro de Turismo de la Comunidad Autónoma: proceso y documentación
- Licencia de obras: cuándo es necesaria para rehabilitar o adaptar
- Certificado de habitabilidad y cédula de habitabilidad
- Autorización sanitaria si se sirven alimentos
- Licencia ambiental si hay actividades con animales
- Plazos de obtención y tasas aproximadas

3. NORMATIVA DE AGROTURISMO Y EXPERIENCIAS
Regula las actividades turísticas en el campo:
- Qué distingue el agroturismo del turismo rural sin vinculación agrícola
- Requisitos para ofrecer actividades pagadas en finca agrícola
- Venta de productos propios en el alojamiento: límites y regulación
- Actividades de naturaleza con riesgo: regulación de deportes de aventura
- Talleres y cursos gastronómicos: normativa de manipulación de alimentos
- Guías de naturaleza y turismo: titulaciones obligatorias

4. OBLIGACIONES FISCALES Y MERCANTILES
Estructura correctamente el negocio:
- Mejor forma jurídica: autónomo vs. SL y sus implicaciones
- Alta en el IAE: epígrafes correctos para alojamiento y actividades
- Facturación: obligaciones y cuándo emitir factura al cliente
- IVA reducido para servicios turísticos: 10% vs. 21%
- Comunicación de datos de viajeros a las fuerzas de seguridad
- Contabilidad obligatoria según el régimen fiscal elegido

5. PROTECCIÓN DE DATOS Y MARKETING DIGITAL
Cumple con el RGPD en el turismo rural:
- Datos que recoges de los huéspedes y su tratamiento legal
- Aviso legal, política de privacidad y cookies: qué debe incluir tu web
- Formulario de reservas: campos que puedes pedir y cuáles no
- Email marketing: cómo construir tu lista cumpliendo la normativa
- Cámaras de seguridad: dónde puedes instalarlas y qué avisos poner
- Gestión de los datos de menores en el establecimiento

6. SEGUROS OBLIGATORIOS Y RECOMENDADOS
Protege el negocio con la cobertura adecuada:
- Responsabilidad civil obligatoria: coberturas mínimas exigidas
- Seguro de incendios y daños: obligatorio con hipoteca, recomendable siempre
- Seguro de cancelación para el cliente: qué ofrece y si es obligatorio comunicarlo
- Seguros de accidentes para actividades de naturaleza
- Seguro de empleados: obligaciones según el convenio
- Seguro agrícola si hay producción vinculada al agroturismo

7. RESOLUCIÓN DE CONFLICTOS Y RECLAMACIONES
Gestiona las situaciones conflictivas:
- Hoja de reclamaciones: obligatoriedad y cómo gestionarla
- Proceso de reclamación ante la administración turística
- Política de cancelación: qué es ejecutable legalmente y qué no
- Gestión de daños causados por huéspedes: protocolo y cobertura
- OMIC y organismos de mediación turística: cuándo acudir

Incluye un checklist de cumplimiento legal que el propietario pueda usar para verificar su situación, con advertencia de que la normativa varía por comunidad autónoma y que debe consultar con un abogado local para su caso específico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Compliance legal y normativa para turismo rural',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente y gestión de la experiencia del huésped rural con IA',
                'description'      => 'Diseña el proceso completo de atención al viajero en turismo rural: desde la primera consulta hasta el post-estancia, gestionando expectativas y convirtiendo huéspedes en embajadores.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en Guest Experience especializado en alojamientos rurales boutique y agroturismo, con experiencia en diseñar experiencias de cliente que convierten una estancia en un recuerdo imborrable y generan recomendaciones espontáneas.

Contexto: Gestiono un alojamiento de turismo rural y quiero mejorar sistemáticamente la experiencia de mis huéspedes desde el primer contacto hasta que se van (y después). Actualmente la atención es buena pero no está sistematizada: depende mucho de quién esté de turno y no siempre mantenemos el mismo nivel de calidad.

Objetivo: Diseñar un sistema de Guest Experience completo que garantice una experiencia consistente y memorable para todos los huéspedes, independientemente del momento o el personal.

instrucción principal:
Desarrolla el sistema completo de experiencia del huésped:

1. MAPA DE LA EXPERIENCIA DEL HUÉSPED (GUEST JOURNEY)
Visualiza todos los puntos de contacto:
- Fase de descubrimiento: cómo nos encuentran y primera impresión online
- Fase de consideración: web, fotos, reviews y proceso de reserva
- Pre-llegada: comunicaciones, instrucciones y expectativas
- Llegada y check-in: primeros momentos en el alojamiento
- Durante la estancia: interacciones cotidianas y servicio
- Partida y check-out: último contacto presencial
- Post-estancia: seguimiento, review y próxima visita
Para cada fase, define: puntos de contacto, expectativas del huésped y momentos de verdad.

2. PROTOCOLO DE COMUNICACIÓN PRE-LLEGADA
Diseña la comunicación antes de que lleguen:
- Email de confirmación de reserva: qué información incluir
- Guía de llegada: instrucciones, acceso, aparcamiento, normas básicas
- Email de bienvenida (7 días antes): expectativas, agenda sugerida, preguntas frecuentes
- WhatsApp o SMS de recordatorio (48-24h antes)
- Recogida de información pre-llegada: alergias, celebraciones, preferencias
- Resolución de dudas pre-llegada: respuestas estándar a las preguntas más frecuentes

3. PROTOCOLO DE CHECK-IN Y BIENVENIDA
Haz que la llegada sea memorable:
- Primer minuto: cómo recibir a un huésped y qué decir
- Tour del alojamiento: qué mostrar y en qué orden
- Bienvenida con detalle local: producto típico, carta de bienvenida personalizada
- Información sobre el entorno: qué ver, dónde comer, qué hacer
- Manual del huésped: formato digital e impreso, qué debe incluir
- Check-in sin persona: protocolo para llegadas autónomas con clave

4. SERVICIO DURANTE LA ESTANCIA
Define los estándares de servicio:
- Disponibilidad y respuesta: canales de comunicación y tiempos de respuesta
- Servicio de limpieza: frecuencia, estándares y discreción
- Atención a necesidades especiales: familias, mascotas, personas con movilidad reducida
- Gestión de incidencias: protocolo cuando algo falla
- Up-selling amable: cómo ofrecer servicios adicionales sin presionar
- Momentos sorpresa: pequeños gestos que marcan la diferencia

5. CHECK-OUT Y DESPEDIDA
Cierra la estancia perfectamente:
- Proceso de check-out: sencillo, agradable y sin esperas
- Gestión del depósito y devolución
- Despedida: qué decir y cómo despedirse de forma memorable
- Solicitud de review: cuándo y cómo pedirla sin ser invasivo
- Información para la próxima visita: oferta de repetición exclusiva

6. GESTIÓN DE REVIEWS Y REPUTACIÓN ONLINE
Construye tu reputación activamente:
- Estrategia de solicitud de reviews: timing y mensaje
- Cómo responder a reviews positivas: sin ser genérico
- Cómo responder a reviews negativas: con empatía y profesionalidad
- Alertas de menciones online: cómo monitorizarlas
- Uso de reviews en el marketing: qué puedes compartir y cómo
- Análisis de reviews: qué aprender para mejorar el servicio

7. PROGRAMA POST-ESTANCIA Y FIDELIZACIÓN
Mantén la relación más allá de la visita:
- Email post-estancia: agradecimiento y solicitud de review
- Newsletter para huéspedes anteriores: cómo mantener el contacto sin molestar
- Oferta de repetición: qué incentivo ofreces a quienes vuelven
- Programa de referidos: cómo incentivar las recomendaciones
- Comunidad de huéspedes: grupo privado, canal o forma de mantener la relación

Incluye guiones de comunicación concretos para cada punto de contacto, adaptados al tono cálido y cercano del turismo rural.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Guest experience y atención al cliente en turismo rural',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelancer en turismo rural: cómo ofrecer servicios digitales al sector con IA',
                'description'      => 'Guía para freelancers que quieren trabajar con negocios de turismo rural y agroturismo: qué servicios ofrecer, cómo prospectarlos y cómo diferenciarte en este nicho.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio para freelancers digitales que quieren especializarse en el sector turístico rural. Conoces las necesidades de los negocios de turismo rural, su capacidad de inversión, sus puntos de dolor más frecuentes y cómo una persona independiente puede crear un nicho de negocio rentable en este sector.

Contexto: Soy freelancer [diseñador/desarrollador/marketero/consultor/fotógrafo] y quiero enfocarme en el nicho del turismo rural y agroturismo porque me apasiona el sector y veo oportunidad de crecimiento. Actualmente tengo [descripción de situación actual: sin clientes en el sector / algunos clientes / etc.]. Quiero construir un negocio estable trabajando con este tipo de negocios.

Objetivo: Desarrollar una estrategia completa para construir un negocio freelance especializado en turismo rural, desde la definición de servicios hasta la captación y fidelización de clientes.

instrucción principal:
Crea la hoja de ruta completa para el freelancer especializado en turismo rural:

1. ANÁLISIS DEL NICHO DE TURISMO RURAL
Entiende el mercado en profundidad:
- Tamaño del sector: número de establecimientos de turismo rural en España y tendencia
- Perfiles de negocio: desde casa rural familiar hasta complejo glamping de 20 unidades
- Capacidad de inversión media en servicios digitales por tipo de negocio
- Principales puntos de dolor: qué necesitan y no saben resolver solos
- Ciclo de decisión de compra: cómo deciden contratar y con qué criterios
- Temporalidad del negocio y su impacto en cuándo contratan servicios

2. DEFINICIÓN DE TU OFERTA DE SERVICIOS
Diseña tu portfolio para el sector:
- Servicios de alta demanda: fotografía profesional, web, marketing en redes, SEO local
- Servicios de nicho: gestión de OTAs, email marketing turístico, diseño de experiencias
- Paquete de inicio: el servicio con el que enganchar a un nuevo cliente
- Servicios recurrentes: los que generan ingresos mensuales estables
- Servicios premium: propuestas de mayor valor y mayor precio
- Qué NO ofrecer: donde la competencia o los precios no te favorecen

3. PROPUESTA DE VALOR DIFERENCIAL
Define tu posicionamiento en el nicho:
- Por qué un especialista en turismo rural vs. un generalista
- Tu historia personal y conexión con el sector (si la hay)
- Resultados que puedes demostrar o prometer (con garantías)
- Casos de éxito propios o referencias del sector
- Cómo comunicar tu especialización en todos los canales
- Personal branding para el nicho: qué contenido crear para ser reconocido

4. ESTRATEGIA DE CAPTACIÓN DE CLIENTES
Encuentra tus primeros y siguientes clientes:
- Dónde se reúnen los propietarios de turismo rural: ferias, asociaciones, grupos
- Prospección directa: cómo contactar a propietarios sin ser invasivo
- Ferias de turismo rural donde mostrar tu servicio
- Colaboraciones con otros proveedores del sector (agencias, consultoras)
- Marketing de contenidos: blog, Instagram o LinkedIn sobre turismo rural digital
- Estrategia de referidos: cómo convertir un cliente en fuente de nuevos clientes

5. PRICING Y MODELOS DE NEGOCIO
Cobra lo que vales en el sector:
- Tarifas de mercado para cada servicio en el sector rural
- Modelo por proyecto vs. retainer mensual: cuál encaja mejor
- Cómo estructurar presupuestos para negocios pequeños (escalable)
- Pago inicial y condiciones: cómo protegerte de impagos
- Descuento por volumen o larga duración: cuándo sí y cuándo no
- Revisión de tarifas: cómo subir precios sin perder clientes

6. PROCESO DE TRABAJO Y ENTREGA
Sistematiza tu operativa:
- Propuesta comercial tipo para negocios de turismo rural
- Proceso de onboarding: qué información necesitas del cliente
- Gestión del proyecto: herramientas, comunicación y hitos
- Revisiones y aprobaciones: cómo evitar bucles infinitos de cambios
- Entrega y cierre: documentación y formación al cliente
- Seguimiento post-proyecto: cómo mantener la relación activa

7. CRECIMIENTO Y ESCALABILIDAD
Construye un negocio sostenible:
- De proyecto a proyecto a ingresos recurrentes
- Sistemas de productividad: qué automatizar y qué delegar
- Cuándo y cómo subcontratar para crecer
- Formación continua en turismo rural: dónde aprender y actualizarse
- Comunidad y red: grupos de freelancers en el sector turístico

Incluye un plan de acción de 90 días con objetivos concretos y medibles para conseguir los primeros 3 clientes en el nicho de turismo rural.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Freelance especializado en turismo rural y agroturismo',
                'vote_score'       => 54,
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
