<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills583Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de clínicas veterinarias: campañas con IA para captar nuevos dueños de mascotas',
                'description'      => 'Diseña campañas de marketing para clínicas veterinarias y tiendas de mascotas usando IA para segmentar audiencias, crear contenido emocional y aumentar la captación de clientes en el sector pet.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing para el sector veterinario y de cuidado de mascotas, con experiencia creando estrategias de captación y fidelización para clínicas veterinarias, tiendas especializadas, grooming, adiestramiento y servicios relacionados con animales de compañía.

Contexto de mi negocio:
- Tipo de negocio: [clínica veterinaria / tienda de mascotas / grooming / adiestramiento / hotel para mascotas / otro]
- Ubicación y radio de acción: [ciudad, barrio o zona de influencia]
- Servicios principales: [consultas generales, urgencias, cirugía, vacunación, peluquería canina, etc.]
- Público objetivo: [familias con perros, propietarios de gatos, dueños de mascotas exóticas, etc.]
- Presupuesto de marketing mensual: [cifra aproximada o "sin presupuesto definido"]
- Principales canales actuales: [Instagram, Google, boca a boca, sin marketing activo]

---

## Estrategia de captación con IA para el sector pet

### Fase 1 — Segmentación de audiencias por tipo de mascota y momento de vida

El marketing veterinario efectivo empieza por entender que no es lo mismo hablar con alguien que acaba de adoptar un cachorro que con alguien cuya mascota tiene 12 años. La IA te ayuda a crear mensajes específicos para cada segmento:

**Segmentos clave en el sector pet:**

Segmento A — Nuevos adoptantes (0-6 meses con la mascota):
- Necesidades: primera vacunación, microchip, desparasitación, esterilización
- Emociones: ilusión, incertidumbre, muchas preguntas
- Mensaje: "Acompañamos a tu nuevo compañero desde el primer día"
- Canal prioritario: Instagram y TikTok con contenido educativo sobre primeros cuidados

Segmento B — Propietarios establecidos (mascota adulta, 1-7 años):
- Necesidades: revisiones anuales, vacunas de recuerdo, nutrición, prevención
- Emociones: rutina, confianza en su veterinario actual, sensibles al precio
- Mensaje: "Prevenir es siempre mejor que curar — y más económico"
- Canal prioritario: Email marketing y Google My Business

Segmento C — Propietarios de mascotas senior (8+ años):
- Necesidades: seguimiento de enfermedades crónicas, análisis periódicos, calidad de vida
- Emociones: preocupación, cariño profundo, disposición a gastar en salud
- Mensaje: "Tu compañero de vida merece los mejores cuidados en su etapa más importante"
- Canal prioritario: Facebook y email con contenido sobre bienestar senior

Segmento D — Propietarios de mascotas exóticas (reptiles, aves, conejos, roedores):
- Necesidades: veterinarios especializados, información específica muy escasa online
- Emociones: frustración por falta de especialistas, fidelidad extrema cuando encuentran uno bueno
- Mensaje: "Especialistas en animales exóticos — porque tu mascota es única"
- Canal prioritario: Grupos de Facebook, foros especializados, SEO local

### Fase 2 — Creación de contenido emocional con IA

El sector pet tiene una ventaja única: las mascotas generan conexión emocional inmediata. Aprovéchala con contenido que combine emoción y utilidad:

**Tipos de contenido que funcionan en el sector veterinario:**

Contenido educativo (60% del mix):
- "5 señales de que tu perro necesita ir al veterinario ahora"
- "Guía completa de vacunación para cachorros en España"
- "Qué comer debe tu gato según su edad"
- "Primeros auxilios para mascotas: qué hacer antes de llegar a urgencias"

Contenido emocional (25% del mix):
- Historias de recuperación de pacientes (con permiso del dueño)
- "El día que salvamos a [nombre de la mascota]"
- Presentación del equipo: "Conoce a los veterinarios que cuidarán a tu compañero"
- Momentos del día a día de la clínica: detrás de cámaras

Contenido de captación directa (15% del mix):
- Promociones de primera visita: "Primera consulta con el 20% de descuento"
- Paquetes de bienvenida para cachorros
- Recordatorios de vacunación personalizados
- Programa de fidelización: "Tu mascota acumula puntos en cada visita"

### Fase 3 — SEO local para búsquedas veterinarias

Las búsquedas veterinarias son altamente locales: "veterinario en [ciudad]", "clínica veterinaria abierta ahora", "urgencias veterinarias cerca". Optimiza para estas búsquedas:

Acciones prioritarias de SEO local:
1. Google My Business completamente optimizado: fotos del equipo, instalaciones, mascotas tratadas (con permiso), horario actualizado, categorías correctas
2. Respuesta a todas las reseñas en Google: agradeciendo las positivas y gestionando las negativas con empatía
3. Página web con landing pages específicas por servicio y por especie: "vacunación de perros en [ciudad]", "veterinario de gatos en [barrio]"
4. Contenido de blog respondiendo preguntas frecuentes locales
5. Schema markup para clínicas veterinarias: horario, dirección, servicios, puntuación

### Instrucciones para generar con IA

Basándote en mi contexto descrito arriba, genera:

1. Plan de contenido para Instagram durante 4 semanas (28 posts) distribuidos en: educativo, emocional y captación, con temas específicos para mi tipo de negocio y especie de mascotas más relevante en mi zona.

2. Tres variantes de copy para mi perfil de Google My Business: descripción del negocio (750 caracteres), respuesta tipo a reseñas positivas, y protocolo de respuesta a reseñas negativas.

3. Campaña de email de bienvenida para nuevos clientes: secuencia de 4 emails durante el primer mes, con asuntos específicos, estructura de cada email y llamadas a la acción concretas.

4. Propuesta de programa de fidelización: nombre del programa, mecánica de puntos o beneficios, comunicación del programa y métricas para evaluar su éxito a los 90 días.

Para cada elemento, adapta el tono al perfil de mi negocio: más técnico y formal si es clínica especializada, más cercano y emocional si es clínica de barrio o negocio pet-friendly.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Campañas de marketing para clínicas veterinarias y negocios del sector pet',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'API para clínicas veterinarias: arquitectura de sistema de gestión de pacientes animales',
                'description'      => 'Diseña la arquitectura de una API REST para gestionar historiales clínicos de mascotas, citas veterinarias, vacunaciones y seguimiento de tratamientos con las mejores prácticas de desarrollo.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en sistemas de gestión para el sector salud y veterinario, con experiencia diseñando APIs REST para clínicas, hospitales y centros de atención médica donde la integridad de los datos y la trazabilidad son requisitos críticos.

Contexto del proyecto:
- Tipo de sistema: [nueva clínica desde cero / migración de sistema legacy / módulo adicional para sistema existente]
- Escala esperada: [clínica pequeña 1-3 veterinarios / clínica mediana 4-10 / hospital veterinario o cadena]
- Stack tecnológico preferido: [Node.js, Python/FastAPI, PHP/Laravel, Java/Spring, .NET, otro]
- Base de datos: [PostgreSQL, MySQL, MongoDB, otro / no definido]
- Integraciones necesarias: [facturación, laboratorio externo, farmacia, app móvil para clientes, recordatorios SMS/email]
- Requerimientos de cumplimiento: [GDPR para datos de propietarios, privacidad de historiales]

---

## Arquitectura de API para sistema veterinario

### Entidades principales del dominio veterinario

Antes de diseñar endpoints, es crítico modelar correctamente el dominio. En una clínica veterinaria existen relaciones complejas entre:

**Entidades core:**

Patient (Animal/Mascota):
- id, name, species (dog/cat/rabbit/bird/reptile/exotic), breed, sex, birth_date, color, microchip_number, chip_registered_at
- weight_kg (histórico de pesos, no solo el actual)
- owner_id (FK a Owner)
- veterinarian_id (veterinario de cabecera asignado)
- status: active/deceased/transferred/lost

Owner (Propietario):
- id, name, email, phone, address, city, postal_code
- gdpr_consent_at, marketing_consent (boolean)
- emergency_contact_name, emergency_contact_phone
- multiple patients (relación 1-N)

MedicalRecord (Historia clínica):
- id, patient_id, visit_date, veterinarian_id
- chief_complaint (motivo de consulta)
- physical_examination (JSON estructurado: temperatura, peso, frecuencia cardíaca, etc.)
- diagnosis (texto + ICD codes para enfermedades animales)
- treatment_plan, notes
- follow_up_date

Vaccination (Vacunación):
- id, patient_id, vaccine_name, lot_number, administered_at, veterinarian_id
- next_due_date (para recordatorios automáticos)
- manufacturer, dose_ml

Appointment (Cita):
- id, patient_id, veterinarian_id, scheduled_at, duration_minutes
- appointment_type: consultation/surgery/grooming/vaccination/follow_up/emergency
- status: scheduled/confirmed/in_progress/completed/cancelled/no_show
- notes, cancellation_reason

Prescription (Prescripción):
- id, medical_record_id, medication_name, dosage, frequency, duration_days
- instructions, refills_allowed, dispensed_at

### Diseño de endpoints REST

Estructura de versioning y autenticación:
- Base URL: `/api/v1/`
- Autenticación: JWT Bearer token con roles: admin, veterinarian, receptionist, client (para portal de propietarios)
- Rate limiting por rol: clientes más restringidos que staff interno

Endpoints críticos del sistema:

Pacientes:
- GET /patients — listado con filtros (especie, veterinario, estado)
- POST /patients — crear paciente con validación de microchip único
- GET /patients/{id} — ficha completa con historia clínica, vacunas, citas próximas
- PUT /patients/{id} — actualización de datos del paciente
- GET /patients/{id}/medical-records — historial completo ordenado cronológicamente
- GET /patients/{id}/vaccinations — protocolo de vacunación y próximas fechas
- GET /patients/{id}/upcoming-appointments — citas futuras

Historia clínica:
- POST /patients/{id}/medical-records — registrar visita con validación de campos obligatorios
- GET /medical-records/{id} — detalle completo de una consulta
- POST /medical-records/{id}/prescriptions — añadir prescripción a consulta

Citas:
- GET /appointments — agenda con filtros por fecha, veterinario, estado
- POST /appointments — crear cita con validación de disponibilidad y solapamientos
- PATCH /appointments/{id}/status — actualizar estado con triggers para notificaciones
- GET /veterinarians/{id}/availability — slots disponibles por veterinario y rango de fechas

Alertas y recordatorios:
- GET /alerts/vaccinations-due — mascotas con vacunas pendientes en próximos N días
- GET /alerts/follow-ups — revisiones programadas pendientes
- GET /alerts/appointments-tomorrow — citas del día siguiente para confirmación

### Consideraciones técnicas críticas

Integridad de datos médicos:
- Soft deletes en todas las entidades médicas: nunca eliminar historial clínico
- Auditoría completa: created_by, updated_by, versioning de cambios en historiales
- Campos inmutables en historia clínica: una vez creada una consulta, solo se puede añadir addendum, no modificar el registro original

Notificaciones y automatización:
- Sistema de jobs en background para recordatorios de vacunas
- Webhook configurable para integraciones con sistemas de SMS y email
- Gestión de consentimientos GDPR con fecha de aceptación y versión del texto

### Instrucciones para generar

Con el contexto de mi proyecto, genera:

1. Diagrama ERD en formato texto o pseudocódigo con todas las entidades, sus campos principales y relaciones, adaptado a mi escala y stack.

2. Especificación OpenAPI/Swagger de los 10 endpoints más críticos para mi caso de uso, con request/response bodies completos y códigos de error documentados.

3. Estrategia de migración de base de datos: scripts de creación en el orden correcto respetando foreign keys, índices para las consultas más frecuentes y consideraciones de rendimiento.

4. Plan de implementación en sprints de 2 semanas para llegar a un MVP funcional en mi stack, con criterios de aceptación por sprint.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseño de API REST para sistemas de gestión de clínicas veterinarias',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Branding para negocios de mascotas: identidad visual que transmite confianza y amor por los animales',
                'description'      => 'Crea la identidad visual completa para clínicas veterinarias, tiendas pet, servicios de grooming o adiestramiento: naming, paleta de color, tipografía y aplicaciones de marca que conecten emocionalmente con los dueños de mascotas.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de identidad visual y branding especializado en el sector de mascotas y servicios veterinarios, con experiencia creando marcas para clínicas, tiendas pet, servicios de grooming, adiestramiento y hoteles para animales que logran transmitir simultáneamente confianza profesional y calidez emocional — la combinación exacta que los dueños de mascotas buscan al elegir a quién confiar el cuidado de su animal.

Contexto del negocio:
- Tipo de negocio: [clínica veterinaria / tienda de mascotas / grooming y peluquería / adiestramiento / hotel para mascotas / tienda online / aplicación móvil]
- Especie principal: [perros, gatos, ambos, exóticos, todas las especies]
- Posicionamiento deseado: [clínica de barrio cercana / especialista premium / low-cost accesible / boutique de lujo para mascotas]
- Nombre actual o candidatos: [nombre actual del negocio o "abierto a propuestas"]
- Competidores principales en tu zona: [nombres o descripción de su estética]
- Valores de marca más importantes: [confianza, experiencia, amor por los animales, innovación, accesibilidad, otro]

---

## Sistema de identidad visual para el sector pet

### Principio fundamental del branding veterinario

Los dueños de mascotas toman decisiones con el corazón pero las justifican con la razón. Tu identidad visual debe:

1. Generar confianza instantánea (profesionalidad, limpieza, experiencia)
2. Transmitir calidez y amor por los animales (accesibilidad, empatía, cuidado)
3. Diferenciarse de la competencia (no otro diseño con huellita y colores verde o azul)

El error más común en el sector: elegir entre profesional o emocional. Los mejores brandings veterinarios logran ambos.

### Psicología del color en el sector pet

Paletas que funcionan y por qué:

Azul marino + coral/salmón:
- El azul transmite confianza, salud y profesionalidad (associado con medicina)
- El coral/salmón añade calidez, energía positiva y emoción sin perder seriedad
- Ideal para: clínicas de nivel medio-alto con buen servicio al cliente

Verde salvia + beige/arena:
- Transmite naturaleza, bienestar, calma y conexión con lo orgánico
- Muy diferenciador frente al verde saturado típico del sector
- Ideal para: clínicas holísticas, tiendas de alimentación natural, servicios eco-friendly

Morado/lavanda + dorado:
- Exclusividad, cuidado premium, servicio boutique
- Poco usado en el sector, por eso diferencia radicalmente
- Ideal para: grooming de lujo, hoteles para mascotas premium, tiendas gourmet

Negro + naranja/ámbar:
- Modernidad, profesionalidad técnica, confianza y energía
- Rompe con la estética "cute" típica del sector
- Ideal para: hospitales veterinarios de referencia, especialistas, urgencias 24h

### Tipografía que comunica carácter de marca

Para negocios pet, la tipografía debe equilibrar legibilidad y personalidad:

Combinación 1 — Profesional con calidez:
- Display: serif moderno (Playfair Display, Cormorant) → confianza y tradición
- Body: sans-serif humanista (Source Sans, Lato) → cercanía y legibilidad
- Acento: script suave opcional para tagline → emoción controlada

Combinación 2 — Moderno y accesible:
- Display: sans-serif geométrico redondeado (Nunito, Poppins) → amigable y moderno
- Body: sans-serif neutro (Inter, DM Sans) → limpio y profesional
- Sin acento: la redondez ya aporta calidez sin necesitar script

Combinación 3 — Premium y diferenciador:
- Display: serif contemporáneo (Italiana, Bodoni Moda) → exclusividad
- Body: sans-serif elegante (Jost, Outfit) → modernidad sofisticada
- Acento: monograma o sello circular → identidad de marca fuerte

### Iconografía y elementos gráficos

Errores a evitar en iconografía pet:
- La huella de pata (sobreusada, genérica, no diferencia)
- El estetoscopio dibujado (cliché médico)
- Los animales sonrientes o humanizados en exceso (poco profesional)
- El corazón rojo como único símbolo de amor (demasiado literal)

Aproximaciones diferenciadas:
- Siluetas minimalistas y elegantes de animales en lugar de ilustraciones detalladas
- Símbolos abstractos que sugieren cuidado sin literalidad (manos, envolventes, escudos)
- Tipografía con el nombre como protagonista sin necesidad de icono literal
- Monogramas o letras iniciales con tratamiento sofisticado
- Elementos de la naturaleza (hoja, flor, montaña) que refuercen valores de bienestar

### Aplicaciones de marca para el sector veterinario

Touchpoints críticos donde la identidad debe brillar:

Signage y presencia física:
- Fachada: legibilidad a distancia, contraste suficiente, iluminación nocturna
- Uniforme del equipo: bordado del logo, colores corporativos, identificación de roles
- Sala de espera: coherencia en señalética, colores y materiales
- Tarjetas de visita y fichas del paciente

Presencia digital:
- App icon (cuadrado con bordes redondeados, reconocible a 60px)
- Perfil de Instagram (foto de perfil nítida a 110px)
- Google My Business: fotos con coherencia de marca
- WhatsApp Business: foto de perfil y mensaje de bienvenida con tono de marca

Materiales de comunicación:
- Cartillas de vacunación con diseño de marca
- Bolsas de farmacia con logo
- Etiquetas de medicamentos
- Calendario de recordatorios con branding

### Instrucciones para generar

Con el contexto de mi negocio, proporciona:

1. Análisis del posicionamiento competitivo: qué estética domina en el sector en mi zona y qué espacio visual está libre para diferenciarse.

2. Sistema de color completo: paleta primaria (2 colores), secundaria (2 colores de apoyo), neutrales (2-3 tonos), con códigos hexadecimales, RGB y Pantone estimado, y justificación psicológica de cada elección.

3. Recomendación tipográfica: dos fuentes gratuitas de Google Fonts que funcionen para mi posicionamiento, con jerarquía de uso (H1, H2, body, caption) y especificaciones de peso y tamaño base.

4. Brief de iconografía: descripción detallada del concepto visual del logo — qué debe representar, qué debe evitar, qué sensación debe transmitir a primera vista — para entregar a un diseñador.

5. Lista de aplicaciones prioritarias de marca para mi tipo de negocio, ordenadas por impacto en la decisión de compra del cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Identidad visual y branding para clínicas veterinarias y negocios del sector pet',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas en clínicas veterinarias: argumentario para aumentar ticket medio con IA',
                'description'      => 'Desarrolla un argumentario de ventas éticas para veterinarios y recepcionistas que incremente el ticket medio de la clínica recomendando servicios preventivos, productos nutricionales y seguros para mascotas sin perder la confianza del cliente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas éticas y comunicación persuasiva para el sector veterinario, con experiencia formando a equipos de clínicas en cómo recomendar servicios adicionales de forma honesta, empática y centrada en el bienestar del animal — no en la comisión.

Contexto de la clínica:
- Tamaño del equipo: [solo veterinario/a, equipo pequeño 2-5, clínica mediana 6-15, hospital]
- Ticket medio actual por consulta: [cifra aproximada o "lo desconozco"]
- Servicios que más se infrautilizan: [revisiones preventivas, nutrición, seguros, dentales, análisis periódicos, otro]
- Principal objeción del cliente: [precio, "ya lo hago yo", "otro veterinario me lo dijo diferente", "no es necesario ahora"]
- Estilo de comunicación del equipo: [muy técnico y formal / cercano y conversacional / mixto]

---

## Sistema de ventas éticas para clínicas veterinarias

### El marco mental correcto: asesor de salud, no vendedor

El mayor error al hablar de ventas en veterinaria es pensar en "vender". El cambio de paradigma que funciona:

NO eres un vendedor intentando maximizar el ticket.
ERES el experto de salud de esa mascota, y tu obligación ética es informar al propietario de todo lo que puede hacer por el bienestar de su animal — luego ellos deciden.

Este reencuadre elimina la incomodidad del equipo al recomendar servicios adicionales y aumenta la tasa de aceptación porque el cliente siente que le estás ayudando, no vendiéndole.

### Momentos de contacto con mayor potencial de recomendación

Durante la consulta anual de revisión:
- Momento ideal para: plan de nutrición, análisis preventivo de sangre, limpieza dental
- Script: "Aprovechando que todo está bien, me gustaría hablaros de tres cosas que podemos hacer para asegurarnos de que [nombre de la mascota] siga así de bien el próximo año..."

Al vacunar:
- Momento ideal para: desparasitación, microchip si no lo tiene, recordatorio de próxima vacuna
- Script: "Ya que estamos poniéndole la vacuna, os comento que esta época del año es muy importante también para..."

Al tratar una enfermedad aguda:
- Momento ideal para: seguro veterinario, plan preventivo para evitar recaídas
- Script: "Para que una situación como esta no os pille desprevenidos económicamente en el futuro, hay algo que quiero que conozcáis..."

En el mostrador (recepcionista):
- Momento ideal para: productos nutricionales, antiparasitarios, snacks dentales, seguros
- Script: "¿Habéis pensado en cambiar su alimentación a una específica para su edad? Tenemos una nueva gama que..."

### Argumentarios por servicio

Limpieza dental:
"Los estudios muestran que el 80% de los perros mayores de 3 años tienen algún grado de enfermedad periodontal. La limpieza dental no es solo estética — la bacteria en la boca llega al corazón, riñón e hígado. Prevenir ahora es mucho menos costoso que tratar las consecuencias."

Análisis de sangre preventivo:
"Un análisis anual nos permite detectar cambios en riñón, hígado, tiroides o niveles de glucosa cuando aún son reversibles. Lo mismo que hacemos los humanos con nuestras analíticas. El precio de este análisis es mucho menor que el tratamiento de cualquiera de estas enfermedades diagnosticada tarde."

Cambio a alimentación premium:
"La alimentación es el medicamento diario de tu mascota. Lo que come todos los días impacta más en su salud que cualquier otra cosa que puedas hacer. Os propongo probar durante 30 días y miraremos la diferencia en su pelo, energía y digestión."

Seguro veterinario:
"Una urgencia, una cirugía o un tratamiento oncológico pueden costar entre 1.000 y 8.000 euros. Un seguro con cobertura básica cuesta menos de 30 euros al mes. Os lo recomiendo no para ganar nada — nosotros no cobramos comisión — sino porque he visto familias tener que tomar decisiones muy dolorosas por motivos económicos."

Desparasitación sistemática:
"Muchos parásitos no son visibles a simple vista y algunos se transmiten a humanos, especialmente a niños. Un protocolo de desparasitación correcta protege a toda la familia, no solo a la mascota."

### Gestión de las objeciones más comunes

Objeción: "Es muy caro"
Respuesta: "Entiendo perfectamente. Lo que os propongo es hacer una cosa: comparad el coste de este servicio con el coste de no hacerlo si aparece el problema que estamos intentando prevenir. ¿Queréis que os cuente qué puede pasar si esperamos y cómo sería el tratamiento entonces?"

Objeción: "Ya le doy comida buena de toda la vida"
Respuesta: "Eso es genial, y se nota. Lo que ha cambiado en los últimos años es la investigación sobre nutrición animal — sabemos mucho más sobre las necesidades específicas según raza, tamaño y edad. No es que lo estéis haciendo mal, es que podemos optimizar todavía más."

Objeción: "Lo consultaré con mi pareja"
Respuesta: "Por supuesto, es normal consultarlo. ¿Os puedo preparar un resumen escrito de lo que hemos hablado para que podáis verlo juntos en casa? Así tenéis toda la información y me llamáis si tenéis alguna duda."

### Instrucciones para generar

Con el contexto de mi clínica, genera:

1. Argumentario personalizado para los 3 servicios que más se infrautilizan en mi clínica, adaptado al estilo de comunicación de mi equipo, con versión larga (consulta) y versión corta (mostrador).

2. Guión de formación para el equipo: cómo presentar internamente el concepto de "asesoramiento ético" frente a "venta", con ejercicios de roleplay para los 3 servicios del punto anterior.

3. Protocolo de seguimiento post-consulta: qué decir en el recordatorio de cita del día siguiente, qué enviar por WhatsApp después de una consulta en la que se recomendó un servicio que el cliente no aceptó, y cuándo y cómo hacer seguimiento sin resultar intrusivo.

4. Sistema de métricas: qué indicadores debo medir para saber si el argumentario está funcionando, cómo calcularlo con mis datos actuales y qué objetivo razonable fijarme para los primeros 3 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Argumentario de ventas éticas para clínicas veterinarias',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product discovery en apps de mascotas: cómo validar features con dueños de animales',
                'description'      => 'Aplica metodologías de product discovery para identificar las necesidades reales de los dueños de mascotas, validar hipótesis de producto y priorizar el roadmap de una app o plataforma del sector pet.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en apps y plataformas del sector de mascotas, con experiencia aplicando metodologías de descubrimiento de producto (Jobs to Be Done, continuous discovery, Opportunity Solution Tree) en contextos donde el usuario tiene una relación emocional profunda con el problema que resuelve tu producto.

Contexto de mi producto:
- Tipo de producto: [app para dueños de mascotas / plataforma de servicios pet / marketplace de veterinarios / app de seguimiento de salud animal / comunidad online / otro]
- Etapa del producto: [idea pre-MVP / MVP lanzado / producto con usuarios activos / scaling]
- Número de usuarios o clientes actuales: [cifra aproximada]
- Principal métrica de negocio que quieres mejorar: [retención, conversión, engagement, NPS, ingresos]
- Hipótesis de producto más prioritaria ahora mismo: [describe la feature o mejora que quieres validar]

---

## Framework de product discovery para el sector pet

### Por qué el sector pet es especial para product discovery

Los dueños de mascotas son un segmento de usuario con características únicas que afectan directamente cómo haces discovery:

Alta carga emocional en cada decisión:
- Las decisiones sobre mascotas raramente son racionales puras
- El Jobs to Be Done funciona mejor que las feature requests porque las personas pedirán "mejores fotos" pero el job real es "quiero sentir que soy un buen dueño"
- Las entrevistas deben profundizar en emociones y miedos, no solo en comportamientos

Segmentación compleja dentro del segmento "dueño de mascota":
- El dueño de perro activo vs el dueño de gato casero tienen necesidades radicalmente diferentes
- Nuevos adoptantes vs propietarios experimentados: nivel de ansiedad, necesidades de información y disposición a pagar muy distintos
- Propietarios de mascotas exóticas: segmento pequeño pero de alta disposición a pagar y muy fiel a soluciones especializadas

Ciclo de vida del usuario determinado por el del animal:
- El engagement cambia drásticamente cuando la mascota es cachorro vs adulta vs senior
- Los momentos de alta intensidad (enfermedad, cirugía, fallecimiento) son touchpoints críticos donde el producto puede fallar o brillar
- La pérdida de la mascota es una crisis que el producto debe gestionar con extremo cuidado

### Metodología de entrevistas para usuarios pet

Estructura de entrevista de discovery (60 minutos):

Apertura (5 minutos):
Presentación, confidencialidad, permiso para grabar. "No estamos evaluando tus respuestas, estamos aprendiendo de tu experiencia."

Contexto de la mascota (10 minutos):
- "Cuéntame sobre [nombre de la mascota]. ¿Hace cuánto la tienes?"
- "¿Cómo llegó a tu vida?" (adopción, compra, regalo — dice mucho sobre el vínculo)
- "¿Cómo describirías tu relación con ella?"

El job principal (20 minutos):
- "¿Qué es lo más importante para ti como dueño de [especie]?"
- "¿Recuerdas la última vez que te preocupaste por la salud de tu mascota? Cuéntame qué pasó."
- "¿Qué es lo más difícil de cuidar bien a [nombre]?"
- "¿Qué harías diferente si pudieras?"

Comportamientos actuales (15 minutos):
- "¿Qué haces hoy para [job específico que exploramos]?"
- "¿Qué herramientas, apps o recursos usas?"
- "¿Qué no funciona de esas soluciones?"
- "¿Cuándo fue la última vez que lo hiciste? Cuéntame el momento exacto."

Validación de hipótesis (10 minutos — solo si tienes hipótesis específica):
- Mostrar el concepto o mockup al final, nunca al principio
- "¿Cuándo en tu vida de dueño de mascota habrías necesitado esto?"
- "¿Qué te generaría desconfianza de algo así?"

Cierre (5 minutos):
- "¿Hay algo que debería haber preguntado y no he preguntado?"
- "¿Conoces a otros dueños de [especie similar] que podrían ayudarme?"

### Opportunity Solution Tree para productos pet

Outcome deseado (elige uno como foco):
"Aumentar la frecuencia de uso semanal de usuarios activos en un 30% en 90 días"

Oportunidades identificadas en discovery (ejemplos reales del sector):

Oportunidad 1 — Los dueños no saben cuándo ir al veterinario:
"Cuando mi perro tiene un síntoma, no sé si es urgente o puedo esperar. Busco en Google y me asusto más."

Oportunidad 2 — La historia clínica está dispersa:
"Cuando voy al veterinario nuevo, no recuerdo las vacunas que le han puesto. Tengo papeles en cajones de hace años."

Oportunidad 3 — Quiero compartir momentos con otros dueños que entiendan:
"Mi familia no entiende por qué me preocupo tanto. En grupos de Facebook encuentro gente como yo."

Oportunidad 4 — El cuidado diario es difícil de mantener:
"Sé que debería darle más ejercicio y hacerle los controles, pero con el trabajo se me olvida."

Para cada oportunidad, el OST me pide generar soluciones (features) y experimentos:

Solución para Oportunidad 1:
- Checker de síntomas conversacional con triage urgente/no urgente
- Experimento: landing page con formulario de síntomas, medir si los usuarios completan el flujo
- Métrica de éxito: tasa de finalización del checker >60%, reducción de churn post-síntoma-preocupante

### Instrucciones para generar

Con el contexto de mi producto, genera:

1. Guía de reclutamiento de entrevistas: perfil exacto de los usuarios a entrevistar para mi etapa de producto, cómo encontrarlos (canales específicos del sector pet), mensaje de invitación, incentivo recomendado y cuántas entrevistas hacer antes de empezar a ver saturación.

2. Guión de entrevista personalizado para mi hipótesis de producto actual: 15-20 preguntas adaptadas a mi tipo de producto y job to be done principal, con indicaciones sobre qué explorar si la respuesta va en una u otra dirección.

3. Opportunity Solution Tree inicial: basado en los pain points más comunes del sector pet y mi métrica de negocio objetivo, con 4-6 oportunidades priorizadas por impacto potencial y facilidad de validación, y 2-3 soluciones para la oportunidad de mayor prioridad.

4. Plan de experimentos rápidos: para la hipótesis de producto que quiero validar, diseña 3 experimentos ordenados de menor a mayor esfuerzo, con qué medir en cada uno, cuándo dar por válida la hipótesis y criterios de kill para saber cuándo desecharla.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Product discovery y validación de hipótesis en apps y plataformas del sector pet',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos en clínicas veterinarias: RRHH para retener talento veterinario',
                'description'      => 'Diseña procesos de gestión de personas adaptados a la realidad del sector veterinario: alta rotación, burnout, conciliación con guardia y fines de semana, y retención de veterinarios y auxiliares en un mercado de alta demanda.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos y gestión de equipos en el sector sanitario y veterinario, con experiencia ayudando a directores de clínicas y hospitales veterinarios a construir equipos estables, reducir la rotación y crear culturas de trabajo donde los profesionales quieran quedarse a largo plazo a pesar de las condiciones exigentes del sector.

Contexto de mi clínica:
- Tamaño del equipo: [1-3 personas / 4-10 / 11-25 / más de 25]
- Composición: [solo veterinarios / veterinarios + auxiliares / equipo completo con recepción y administración]
- Principal problema de RRHH actual: [alta rotación / dificultad para contratar / burnout / conflictos de equipo / falta de liderazgo / compensación]
- Rotación anual actual: [porcentaje aproximado o "lo desconozco"]
- Principal reto operativo: [guardias, fines de semana, conciliación, formación continua, otro]
- Situación de la dirección: [veterinario/a que también dirige / director/a no clínico / sin dirección formal]

---

## Gestión de equipos en el sector veterinario: realidades y soluciones

### El contexto único de los RRHH veterinarios

El sector veterinario tiene características que lo hacen especialmente desafiante desde el punto de vista de gestión de personas:

Fatiga por compasión y burnout estructural:
- Los veterinarios toman decisiones de vida o muerte con animales y gestionan el duelo de los dueños diariamente
- La fatiga por compasión (vicarious trauma) es alta y poco reconocida en el sector
- El burnout en veterinaria en España supera el 60% según estudios recientes, con especial incidencia en los primeros 5 años de carrera

Brecha entre formación y expectativas laborales:
- Los estudiantes de veterinaria se forman con una fuerte vocación por los animales
- La realidad del trabajo incluye gestión de propietarios difíciles, presión económica, guardias y burocracia
- Este choque de expectativas genera frustración temprana y rotación en los primeros 2-3 años

Mercado de trabajo con desequilibrio demanda-oferta:
- España forma más veterinarios que muchos países europeos pero la demanda de clínica de pequeños animales crece más rápido
- Los perfiles especializados (cirugía, oncología, neurología) son muy escasos y tienen poder de negociación alto
- Las clínicas compiten no solo por salario sino por condiciones, cultura y proyecto profesional

### Estrategias de retención por estadio del empleado

Primeros 3 meses — Onboarding crítico:
La mayoría de las salidas tempranas se decide en los primeros 90 días. Un onboarding estructurado puede reducir la rotación temprana en un 30-50%.

Plan de onboarding para veterinarios:
- Semana 1: observación activa, presentación de protocolos, acceso a sistemas, mentor asignado
- Semana 2-4: primeras consultas con supervisión disponible, no evaluativa
- Mes 2: autonomía progresiva en consulta general, objetivos claros y alcanzables
- Mes 3: primera revisión formal con feedback bidireccional, ajuste de expectativas

Errores de onboarding más comunes en veterinaria:
- Poner al veterinario nuevo a hacer guardias solo antes de que conozca los protocolos
- No presentar al equipo de forma estructurada
- No clarificar las expectativas de rendimiento desde el primer día
- No preguntar al nuevo empleado qué necesita para hacer bien su trabajo

Empleados establecidos (1-3 años) — El momento del segundo contrato:
El periodo más crítico de retención. Las personas deciden si construyen su carrera aquí o buscan otra opción.

Elementos que retienen en este periodo:
- Plan de carrera visible: ¿qué puede aprender aquí? ¿hacia dónde puede crecer?
- Formación continua real: congresos, cursos, especialización pagada por la clínica
- Autonomía creciente: más responsabilidad, más participación en decisiones
- Reconocimiento específico: no solo "gracias" genérico sino reconocimiento de logros concretos

Empleados senior (3+ años) — El riesgo de estancamiento:
El mayor riesgo no es que se vayan (aunque pueden), sino que se queden desenganchados.

Estrategias para empleados senior:
- Roles de mentoring y liderazgo: que formen a los nuevos
- Participación en proyecto de crecimiento de la clínica: nueva área, nueva especialidad
- Flexibilidad en condiciones: más autonomía en horarios, menos guardias si tienen cargas familiares
- Reconocimiento económico vinculado a resultados del negocio

### Gestión de las guardias y los fines de semana

El principal conflicto de conciliación en veterinaria:

Sistema justo de rotación:
- Publicar el calendario de guardias con al menos 4-6 semanas de antelación
- Rotación equitativa documentada y visible para todo el equipo
- Sistema de intercambio entre empleados: transparente y con registro
- Compensación diferenciada clara para guardias nocturnas, festivos y emergencias

Fórmula de compensación de guardias que retiene:
- Pago base por disponibilidad (aunque no haya actividad)
- Plus por activación (cuando se produce una llamada o urgencia)
- Descanso compensatorio garantizado y respetado
- Límite de guardias consecutivas (no más de 7 días seguidos con guardia, nunca)

### Prevención del burnout: protocolo práctico

Señales de alerta tempranas:
- Cambios en el humor o en la comunicación con el equipo
- Aumento de errores o de quejas de clientes
- Ausencias frecuentes o peticiones de cambio de turno inusuales
- Distanciamiento emocional de los pacientes ("ya no me importa tanto")
- Comentarios negativos frecuentes sobre el trabajo o los clientes

Protocolo de intervención:
1. Conversación privada y no evaluativa: "¿Cómo estás? ¿Cómo te sientes con el trabajo últimamente?"
2. Identificar la causa: exceso de carga, problema de equipo, vida personal, expectativas no cumplidas
3. Ajuste temporal de condiciones: reducción de guardias, cambio de turno, periodo de menor responsabilidad
4. Derivación a recursos: EAP (Employee Assistance Program) si existe, psicólogo de empresa, grupos de apoyo entre veterinarios
5. Seguimiento a 30 y 60 días

### Instrucciones para generar

Con el contexto de mi clínica, genera:

1. Diagnóstico de RRHH: basado en mi situación actual, identifica los 3 principales riesgos de talento para los próximos 12 meses y el coste estimado de no abordarlos (en términos de coste de sustitución, productividad perdida y reputación).

2. Plan de onboarding de 90 días: cronograma semanal adaptado a mi tamaño de equipo y perfil de incorporaciones habituales, con objetivos claros por semana, criterios de éxito y puntos de revisión.

3. Sistema de revisión de desempeño: estructura de la conversación anual (y semestral si aplica), preguntas concretas para cada estadio del empleado, cómo dar feedback difícil y cómo documentar el proceso.

4. Plan de retención a 12 meses: 5 acciones concretas priorizadas por impacto en rotación, con estimación de esfuerzo de implementación, coste económico aproximado y métrica para medir si está funcionando.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión de personas y retención de talento en clínicas veterinarias',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas de clínica veterinaria: control de costes y rentabilidad por servicio con IA',
                'description'      => 'Analiza la rentabilidad de cada servicio de tu clínica veterinaria, identifica los cuellos de botella financieros y diseña una estrategia de precios que mejore el margen sin perder clientes.',
                'prompt_content'   => <<<'EOT'
Eres un consultor financiero especializado en el sector veterinario y sanitario, con experiencia ayudando a propietarios y directores de clínicas a entender sus números, identificar servicios poco rentables, optimizar la estructura de costes y tomar decisiones de precios basadas en datos reales y no en intuición o en lo que cobra la competencia.

Contexto financiero de la clínica:
- Facturación anual aproximada: [cifra o rango]
- Número de consultas mensuales: [cifra aproximada]
- Ticket medio por visita: [cifra actual]
- Principales servicios por volumen: [consulta general, vacunación, cirugía, dental, urgencias, productos]
- Costes más significativos: [personal, alquiler, material sanitario, medicamentos, laboratorio]
- Herramienta de control financiero actual: [Excel, software de gestión veterinaria, nada, otro]
- Principal dolor financiero: [no sé si gano dinero, sé que pierdo en algunos servicios, precios bajos, costes descontrolados]

---

## Control financiero para clínicas veterinarias

### El problema de la ceguera financiera en veterinaria

La mayoría de los veterinarios propietarios de clínica saben su facturación total pero no saben cuál es su margen real por servicio. Esto crea una trampa peligrosa: pueden estar muy ocupados, con sala de espera llena, y aun así ganar poco dinero porque los servicios más demandados son los menos rentables.

El análisis que todo propietario de clínica necesita hacer al menos una vez al año:

Rentabilidad por servicio = Precio de venta − Coste directo − Coste indirecto asignado

Donde:
- Coste directo = material consumido + medicamentos + laboratorio externo
- Coste indirecto asignado = parte proporcional del tiempo de veterinario + tiempo de auxiliar + tiempo de sala + amortización de equipos

### Metodología de análisis de rentabilidad por servicio

Paso 1 — Inventario de servicios y precios actuales:
Lista todos los servicios con su precio de venta actual. Agrúpalos en categorías:
- Consulta y diagnóstico (consulta general, consulta especialista, urgencias)
- Preventivo (vacunación, desparasitación, revisiones)
- Procedimientos (cirugía, dental, radiografía, ecografía, análisis)
- Hospitalización
- Venta de productos (alimentación, medicamentos, accesorios)

Paso 2 — Costes directos por servicio:
Para cada servicio, calcula el coste de los materiales consumidos en promedio:
- Consulta general: ninguno o mínimo (guantes, jeringas) → coste directo ~0,50-2€
- Vacunación: coste de la vacuna → variable por fabricante, 2-15€ típico
- Limpieza dental: anestesia + material → 20-40€ en costes directos típicos
- Cirugía simple (castración): anestesia + material quirúrgico → 30-60€

Paso 3 — Coste del tiempo (el más olvidado):
Este es el coste que la mayoría de clínicas ignora y que destruye la rentabilidad:
- Calcula el coste/hora de cada perfil: veterinario/a, auxiliar, recepción
- Incluye el coste de Seguridad Social y beneficios, no solo el salario bruto
- Asigna el tiempo medio real de cada servicio (incluye preparación y registro)

Ejemplo de cálculo:
Veterinario/a: 2.500€/mes bruto + 35% SS empleador = 3.375€/mes coste empresa
Horas trabajadas: 160h/mes
Coste/hora veterinario: 21€/hora
Coste/hora auxiliar (1.400€ bruto + 35% SS): 11,8€/hora

Consulta general (20 minutos de veterinario + 5 minutos auxiliar):
Coste tiempo = 20/60 × 21€ + 5/60 × 11,8€ = 7€ + 1€ = 8€
Coste material = 1,5€
Coste indirecto (alquiler, luz, limpieza): asignar 2-3€ por consulta
Coste total consulta general: ~11,50€

Si la consulta se cobra a 30€, el margen bruto es 18,50€ (62%). Si se cobra a 20€, el margen es 8,50€ (42,5%).

### Análisis de precios de la competencia sin copiarse

El error más común en pricing veterinario: cobrar lo que cobra la clínica de enfrente.

La competencia no tiene tus costes. No tiene tu equipo. No tiene tu posicionamiento. Copiar precios puede llevar a cobrar por debajo de tus costes reales sin saberlo.

Metodología correcta de pricing:

1. Calcula tu precio mínimo (break-even por servicio): el precio por debajo del cual pierdes dinero
2. Calcula tu precio objetivo: el precio que te da el margen que necesitas para el negocio sea sostenible
3. Contrasta con el mercado: ¿tu precio objetivo es viable en tu mercado? ¿o tienes que bajar costes para llegar?
4. Posiciona: si tu precio es más alto que la media, necesitas justificarlo con valor percibido diferencial

### Dashboard financiero mínimo para clínicas

Métricas mensuales que debes revisar:

Ingresos:
- Facturación total vs mes anterior y vs mismo mes año anterior
- Número de consultas y ticket medio
- Mix de servicios: qué % de la facturación viene de cada categoría

Costes:
- Costes de personal como % de facturación (objetivo: 40-50% en clínicas bien gestionadas)
- Costes de materiales y medicamentos como % de facturación (objetivo: 15-25%)
- Coste de alquiler como % de facturación (objetivo: <10%)

Rentabilidad:
- Margen bruto total
- EBITDA mensual y acumulado
- Caja disponible y previsión de los próximos 60 días

### Instrucciones para generar

Con el contexto financiero de mi clínica, genera:

1. Plantilla de análisis de rentabilidad por servicio: tabla con los 8-10 servicios más importantes de mi clínica, columnas para precio venta, coste directo, coste de tiempo, coste indirecto asignado, margen bruto y margen neto, con fórmulas y ejemplos con valores realistas.

2. Análisis de pricing: para los 3 servicios con margen más bajo o dudoso, análisis de si el precio actual está por encima del coste real, opciones de ajuste de precio o de reducción de costes, y cómo comunicar una subida de precio a los clientes si es necesaria.

3. Dashboard financiero mensual: plantilla de las 10-12 métricas clave que debería revisar cada mes, con descripción de cómo calcularlas con los datos disponibles en mi software de gestión, y alertas: qué valor de cada métrica debe disparar una acción.

4. Plan de mejora de margen a 90 días: 4-5 acciones concretas ordenadas por impacto potencial en el resultado y facilidad de implementación, con estimación del impacto en facturación o en margen si se implementan.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Análisis de rentabilidad y control financiero para clínicas veterinarias',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos veterinarios: cláusulas esenciales para clínicas y servicios de cuidado de mascotas',
                'description'      => 'Diseña los contratos y documentos legales esenciales para clínicas veterinarias: consentimiento informado para cirugías, contrato de hospitalización, acuerdo de servicios de grooming y documentación de responsabilidad.',
                'prompt_content'   => <<<'EOT'
Eres un asesor legal especializado en el sector veterinario y de cuidado de mascotas en España, con experiencia redactando y revisando contratos, documentos de consentimiento informado, términos de servicio y protocolos de gestión de responsabilidad para clínicas veterinarias, servicios de grooming, adiestramiento, hoteles para mascotas y otras empresas del sector pet.

Contexto de mi negocio:
- Tipo de negocio: [clínica veterinaria / grooming / hotel para mascotas / adiestramiento / tienda online / combinación]
- Servicios que requieren cobertura legal urgente: [cirugía, anestesia, hospitalización, grooming, transporte, custodia]
- Situación actual de documentación: [sin contratos / contratos básicos no actualizados / quiero revisar los que tengo]
- Principal riesgo legal que me preocupa: [reclamaciones por muerte de animal, disputas por daños, impagos, protección de datos]
- Jurisdicción: [España — indicar comunidad autónoma si hay legislación autonómica relevante]

---

## Marco legal para el sector veterinario en España

### El nuevo estatus legal de los animales en España

Desde la reforma del Código Civil de 2022 (Ley 17/2021), los animales ya no son "cosas" sino "seres sintientes". Este cambio tiene implicaciones directas para la responsabilidad civil de veterinarios y empresas de servicios pet:

Consecuencias prácticas para clínicas y servicios:
- Un animal herido o muerto por negligencia puede generar reclamación por daño moral al propietario, adicional al valor económico del animal
- Los juzgados están empezando a admitir reclamaciones de mayor cuantía en casos de mala praxis veterinaria
- La documentación de consentimiento informado es ahora más crítica que nunca

Lo que esto significa para tu documentación legal:
- Los consentimientos informados deben ser exhaustivos: riesgos, alternativas, pronóstico
- Los contratos de servicio deben delimitar claramente las responsabilidades
- El registro de incidencias debe ser sistemático y conservarse al menos 5 años

### Documentos legales esenciales por tipo de negocio

Para clínicas veterinarias:

1. Consentimiento informado para cirugía/anestesia — El documento más crítico:

Elementos obligatorios:
- Identificación completa del animal (especie, raza, nombre, edad, microchip)
- Identificación del propietario con DNI
- Descripción del procedimiento en lenguaje comprensible
- Riesgos generales de la anestesia y riesgos específicos del procedimiento
- Alternativas al procedimiento propuesto
- Posibles complicaciones y cómo se gestionarán
- Autorización expresa para transfusiones de sangre si fuera necesario
- Autorización para procedimientos adicionales si se encuentran hallazgos durante la cirugía
- Instrucciones post-operatorias básicas y responsabilidad del propietario en el seguimiento
- Firma del propietario con fecha y hora

Errores comunes en consentimientos veterinarios:
- Consentimiento firmado verbalmente o recordado tras el procedimiento
- Riesgos descritos con lenguaje demasiado técnico que el propietario no comprende
- Sin mención a posibles complicaciones graves (muerte bajo anestesia)
- Sin autorización para procedimientos adicionales emergentes

2. Contrato de hospitalización:

Cláusulas esenciales:
- Duración prevista de la hospitalización y condiciones de prórroga
- Autorización para tratamientos de urgencia sin consultar al propietario (con límite económico)
- Protocolo de comunicación: frecuencia de actualizaciones, cómo se notifica una emergencia
- Condiciones de visita del propietario
- Gestión del fallecimiento: qué hace la clínica con el cuerpo si el propietario no puede ser localizado
- Condiciones económicas: tarifa por día, qué incluye y qué se factura aparte
- Responsabilidad por fuga o accidente dentro de las instalaciones

3. Alta médica y seguimiento:

Documento de alta que protege legalmente:
- Estado del animal en el momento del alta
- Tratamiento prescrito con dosis y duración exactas
- Restricciones de actividad y alimentación
- Señales de alarma que requieren atención inmediata
- Fecha de revisión y consecuencias de no acudir
- Firma del propietario confirmando que ha recibido y comprendido las instrucciones

Para servicios de grooming:

Contrato de servicio de peluquería canina/felina:
- Descripción exacta de los servicios incluidos y el precio
- Estado del animal al inicio del servicio: debe haber protocolo de revisión previa documentado
- Exención de responsabilidad por reacciones al baño o corte en animales con condiciones no declaradas por el propietario
- Responsabilidad del propietario de informar sobre alergias, medicaciones, condiciones de salud previas
- Protocolo de emergencia: qué hace el groomer si el animal tiene una reacción adversa
- Límite de responsabilidad económica: declarar el valor máximo de indemnización en caso de accidente

Para hoteles de mascotas y guarderías:

Contrato de custodia temporal:
- Periodo exacto de custodia con fechas y horas
- Condiciones de recogida tardía (tarifa adicional, límite de días, qué pasa si no recogen al animal)
- Estado de salud declarado por el propietario y responsabilidad por información falsa u omitida
- Autorización para atención veterinaria urgente con límite de gasto autorizado sin consultar
- Protocolo de comunicación de incidencias
- Condiciones de la instalación: descripción del alojamiento, alimentación, paseos
- Política de compatibilidad entre animales y responsabilidad por peleas

### Protección de datos RGPD en el sector pet

Los propietarios de mascotas son personas físicas cuyos datos personales están protegidos por el RGPD y la LOPDGDD:

Datos que recoge una clínica veterinaria y su base legal:
- Nombre, DNI, teléfono, dirección: necesarios para la prestación del servicio (contrato)
- Email: comunicaciones administrativas (contrato) y marketing solo con consentimiento expreso
- Historia clínica del animal: necesaria para la atención veterinaria (contrato/interés legítimo)

Documentos RGPD obligatorios:
- Política de privacidad visible en web y en el mostrador de la clínica
- Registro de actividades de tratamiento (interno, no visible)
- Formulario de consentimiento para comunicaciones de marketing separado del contrato de servicio
- Procedimiento de respuesta a derechos de los interesados (acceso, rectificación, supresión)

### Instrucciones para generar

Con el contexto de mi negocio, genera:

1. Consentimiento informado para el servicio de mayor riesgo en mi negocio: borrador completo con todas las cláusulas esenciales, en lenguaje comprensible para el propietario, con estructura clara y espacios para firmas.

2. Contrato de servicio base: para el servicio principal de mi negocio, borrador con cláusulas de prestación del servicio, precio, responsabilidades de ambas partes, límites de responsabilidad y resolución de disputas, adaptado a la legislación española vigente.

3. Checklist de compliance legal para mi negocio: lista de todos los documentos que debería tener en vigor, cuáles tengo cubiertos según mi descripción, cuáles son urgentes y cuáles son recomendables pero no críticos, con el riesgo de no tenerlos.

4. Cláusula de gestión de exitus (fallecimiento del animal durante el servicio): redacción del protocolo y cláusula contractual para el caso de fallecimiento del animal bajo custodia o durante un procedimiento, incluyendo comunicación al propietario, gestión del cuerpo y límites de responsabilidad económica.

Nota importante: los documentos generados son borradores orientativos. Consulta siempre con un abogado especializado antes de usarlos en tu negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Documentación legal y contratos para clínicas veterinarias y servicios de mascotas',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en clínicas veterinarias: manejo de situaciones difíciles con IA',
                'description'      => 'Desarrolla protocolos de atención al cliente para clínicas veterinarias: gestión del duelo por pérdida de mascota, manejo de propietarios agresivos, comunicación de malas noticias y respuesta a quejas en redes sociales.',
                'prompt_content'   => <<<'EOT'
Eres un experto en atención al cliente y comunicación en el sector veterinario, con experiencia formando a equipos de clínicas en las situaciones más emocionalmente exigentes del sector: dar malas noticias sobre la salud de un animal querido, gestionar el duelo de un propietario que pierde a su mascota, calmar a personas en estado de estrés agudo por una urgencia, y manejar quejas y conflictos sin que la relación con el cliente se rompa.

Contexto de mi clínica:
- Tamaño del equipo de atención: [solo recepción / recepción + auxiliares / todo el equipo tiene contacto con clientes]
- Situación que más te preocupa gestionar: [duelo, malas noticias, agresividad, quejas online, impagos, expectativas no cumplidas]
- Volumen de incidencias mensuales estimado: [muy bajo / 2-5 al mes / más frecuente]
- Formación actual del equipo en comunicación difícil: [ninguna / básica / tienen experiencia pero sin protocolo]
- Canal de quejas más habitual: [teléfono, presencial, WhatsApp, Google, redes sociales]

---

## Protocolos de atención al cliente para situaciones difíciles en veterinaria

### Por qué la atención al cliente en veterinaria es diferente

En la mayoría de los sectores, una queja de cliente es un problema de servicio. En veterinaria, frecuentemente es una crisis emocional del propietario que se expresa como queja.

La persona que llama "enfadada" porque su perro murió en la clínica no está enfadada: está en duelo y necesita a alguien que la acompañe. La persona que discute el precio de la cirugía después de que su gato murió en la mesa no está regateando: está buscando un culpable externo para su dolor.

Entender esto cambia completamente la forma de responder.

### Protocolo 1 — Comunicación de fallecimiento de una mascota

Este es el momento más difícil en la atención veterinaria. Sin protocolo, el equipo improvisa y comete errores que pueden destruir años de relación con el cliente.

Preparación antes de la llamada o el encuentro:
- Asegúrate de tener los datos correctos del animal y del propietario
- Elige el momento adecuado: nunca al cierre, nunca cuando tienes 5 minutos
- Asegúrate de tener privacidad (no dar malas noticias en recepción con otros clientes presentes)
- Si es por teléfono, pregunta si puede hablar (no si está sentado — dile que tienes una noticia importante y necesita un momento)

Estructura de la conversación de malas noticias (método SPIKES adaptado al veterinario):

S — Setting (contexto): "Quería hablar contigo sobre [nombre del animal]. ¿Tienes un momento?"

P — Perception (qué sabe el propietario): "¿Cómo lo veías tú últimamente? ¿Notabas algo diferente en él?"

I — Invitation (permiso para dar la noticia): "Tengo que contarte algo importante sobre [nombre]. ¿Estás preparado/a?"

K — Knowledge (dar la noticia con claridad): "Lamentablemente, [nombre] ha fallecido / no ha superado la cirugía / hemos tenido que tomar la decisión de eutanasiarle porque [razón médica clara]."

E — Emotions (silencio y espacio para la emoción): No llenes el silencio. Deja que la persona reaccione. Si llora, deja que llore. "Entiendo. Esto es muy duro."

S — Summary (qué pasa ahora): Después de que la emoción inicial pase, informa sobre los siguientes pasos prácticos (recogida del cuerpo, opciones de incineración, etc.) solo si el propietario está en condiciones de escucharlo.

Errores que destruyen la confianza:
- Empezar con "Lo hicimos todo lo que pudimos" antes de dar la noticia (defensivo)
- Usar lenguaje médico como escudo ("sufrió un paro cardiorrespiratorio refractario")
- Dar la noticia mientras haces otra cosa o de pie
- Pasar rápido a los trámites administrativos antes de que el cliente procese la noticia
- Decir "ya tendrás otra mascota" o minimizar el duelo

### Protocolo 2 — Gestión de propietarios en estado de estrés agudo (urgencias)

La persona que llega con una urgencia está en modo "cerebro de amígdala": no puede procesar información compleja ni tomar decisiones racionales.

Protocolo de acogida en urgencias:
1. Contacto físico inmediato con el animal (demuestra que tomas el control)
2. Presentación breve y nombre: "Soy [nombre], voy a ocuparme de [nombre del animal] ahora mismo"
3. Separar al animal del propietario si es necesario para tratarlo, explicando brevemente por qué
4. Asignar a alguien del equipo para acompañar al propietario (no dejarlo solo en sala de espera)
5. Actualización cada 10-15 minutos aunque no haya novedades: "Seguimos trabajando con él, en 10 minutos te cuento más"

Lo que más tranquiliza en urgencias no es información técnica, sino:
- Sentir que alguien está al cargo
- Recibir actualizaciones frecuentes aunque sean breves
- No estar solo/a esperando

### Protocolo 3 — Respuesta a quejas en Google y redes sociales

Una reseña negativa en Google tiene un impacto enorme en la captación de nuevos clientes. La respuesta correcta puede convertir una reseña de 1 estrella en una demostración de profesionalidad.

Principios de respuesta a reseñas negativas:
1. Responde siempre, nunca ignores
2. Responde en menos de 24 horas (48h máximo)
3. Empieza por el agradecimiento y el reconocimiento, nunca por la defensa
4. No des detalles médicos del caso (confidencialidad y RGPD)
5. Ofrece continuar la conversación en privado
6. Nunca ataques al cliente, aunque su reseña sea injusta

Estructura de respuesta a reseña negativa:

Apertura: "Gracias por tomarte el tiempo de compartir tu experiencia. Lamentamos que no hayas quedado satisfecho/a con nuestra atención."

Reconocimiento sin admitir culpa: "Entendemos lo difícil que es cuando la salud de tu mascota está en juego, y queremos que todas las familias que confían en nosotros se vayan sintiéndose bien atendidas."

Invitación a resolver: "Nos gustaría poder hablar contigo directamente para entender mejor lo que ocurrió y ver cómo podemos mejorar. ¿Podrías contactarnos al [teléfono/email] y preguntar por [nombre del responsable]?"

Cierre: "Gracias por ayudarnos a mejorar."

### Protocolo 4 — Gestión de impagos y disputas económicas

El dinero en veterinaria tiene una carga emocional especial: el propietario puede sentir que está poniendo precio a la vida de su mascota.

Comunicación de costes antes del servicio:
- Siempre dar presupuesto escrito antes de cualquier procedimiento mayor
- Explicar qué incluye y qué puede añadirse (contingencias)
- Confirmar que el cliente ha leído y firmado el presupuesto

Cuando el cliente no puede pagar:
- No es una situación de mala fe en la mayoría de casos: es una emergencia económica
- Ofrece opciones: pago aplazado, pago parcial inmediato, financiación externa si la clínica trabaja con alguna
- Documenta el acuerdo por escrito siempre
- No retengas al animal: es ilegal en España retener a un animal por deuda del propietario

### Instrucciones para generar

Con el contexto de mi clínica y la situación que más me preocupa, genera:

1. Guión de comunicación de fallecimiento o eutanasia: script completo para la situación más común en mi clínica (¿muerte inesperada en cirugía? ¿eutanasia programada? ¿fallecimiento en hospitalización?), con variantes para comunicación presencial y telefónica.

2. Protocolo escrito de gestión de duelo: qué hace el equipo en los 30 minutos siguientes al fallecimiento, qué comunicaciones se envían al propietario en los días siguientes (tarjeta, mensaje, seguimiento), y cómo gestionar si el propietario vuelve a la clínica emocionalmente en el siguiente mes.

3. Plantillas de respuesta para redes sociales: 5 respuestas tipo para las quejas más comunes en mi tipo de negocio (retraso en cita, precio, desacuerdo con diagnóstico, muerte del animal, trato recibido), adaptadas al tono de mi clínica.

4. Formación de equipo en 2 horas: programa de taller para formar al equipo en comunicación difícil, con ejercicios de roleplay para las 3 situaciones más frecuentes en mi clínica, y materiales de referencia rápida (tarjeta de bolsillo con los pasos del protocolo).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Protocolos de atención al cliente en situaciones difíciles en clínicas veterinarias',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en el sector pet: cómo especializarte en mascotas y monetizar tu expertise con IA',
                'description'      => 'Diseña tu propuesta de valor como freelance especializado en el sector de mascotas: nicho de servicios, tarifas, captación de clientes y posicionamiento como experto en un mercado en crecimiento.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de estrategia para freelances y profesionales independientes, especializado en ayudar a personas con conocimiento o pasión por el sector de mascotas a construir un negocio propio viable, diferenciado y escalable, ya sean veterinarios que quieren diversificar, profesionales de otros sectores que se reorientan hacia el mundo pet, o apasionados de las mascotas que quieren convertir su hobby en negocio.

Contexto de mi situación:
- Perfil de partida: [veterinario/a en activo / auxiliar veterinario / diseñador/a / fotógrafo/a / marketer / nutricionista / adiestradores / sin formación específica pero con experiencia práctica / otro]
- Experiencia con mascotas: [profesional / propietario con mucha experiencia / apasionado sin mascota propia]
- Servicios en los que estás pensando: [fotografía de mascotas, contenido para clínicas, nutrición animal, diseño de web veterinaria, SEO para clínicas, consultoría de redes sociales, otro]
- Situación laboral: [quiero dejar mi trabajo actual / quiero un ingreso complementario / ya soy freelance en otro sector]
- Objetivo económico: [ingresos extra de X€/mes / reemplazar salario de X€ / construir agencia o negocio a largo plazo]

---

## Hoja de ruta para freelance especializado en mascotas

### Por qué el sector pet es especialmente atractivo para freelances

Crecimiento sostenido del sector:
El mercado de mascotas en España supera los 1.500 millones de euros anuales y ha crecido de forma constante durante la última década, acelerado especialmente tras la pandemia. Hay más mascotas, más gasto por mascota y más profesionalización del sector.

Atomización del cliente ideal:
Existen más de 30.000 clínicas veterinarias en España, más de 15.000 establecimientos de venta de animales y accesorios, y un número creciente de servicios independientes (grooming, adiestramiento, hotel). Son negocios pequeños, con escasos recursos de marketing y comunicación, que necesitan exactamente lo que un buen freelance puede ofrecer.

Barrera emocional de entrada baja pero barrera de conocimiento alta:
Los dueños de estos negocios quieren trabajar con alguien que "entienda" su mundo. Si conoces el sector, tienes una ventaja competitiva enorme frente a agencias generalistas.

### Los 8 nichos de mayor demanda para freelances en el sector pet

Nicho 1 — Fotografía y vídeo para mascotas:
- Clientes: clínicas, tiendas, marcas de alimentación animal, propietarios (sesiones de mascotas)
- Tarifa media: 200-800€ por sesión, 500-2.000€ por campaña corporativa
- Barrera de entrada: equipo fotográfico + experiencia con animales (paciencia fundamental)
- Diferenciador clave: especialización en especie (fotógrafo de perros, de gatos, de exóticos)

Nicho 2 — Gestión de redes sociales para clínicas veterinarias y tiendas pet:
- Clientes: clínicas veterinarias, tiendas de mascotas, grooming, hoteles para mascotas
- Tarifa media: 300-800€/mes por gestión de Instagram+Facebook, 150-300€ por estrategia sin ejecución
- Barrera de entrada: conocimiento de marketing digital + conocimiento del sector
- Diferenciador clave: conocer los temas que generan engagement en el sector pet (tips de salud, stories emotivas)

Nicho 3 — Copywriting y contenido para el sector veterinario:
- Clientes: clínicas, marcas de alimentación animal, fabricantes de productos pet, blogs especializados
- Tarifa media: 50-150€ por artículo de blog, 200-500€ por email campaign, 1.000-3.000€ por web completa
- Barrera de entrada: capacidad de escritura + conocimiento técnico veterinario básico (se puede adquirir)
- Diferenciador clave: combinar rigor técnico con lenguaje accesible para propietarios no expertos

Nicho 4 — Diseño web para el sector veterinario:
- Clientes: clínicas veterinarias (muchas tienen webs obsoletas), tiendas, nuevos negocios pet
- Tarifa media: 800-3.000€ por web completa, 150-500€/mes por mantenimiento y mejoras
- Barrera de entrada: diseño web + UX básico + conocimiento del sector
- Diferenciador clave: plantillas y componentes reutilizables específicos para veterinarias (calendar de citas, ficha de servicios)

Nicho 5 — Consultoría de nutrición animal:
- Clientes: propietarios de mascotas con dietas especiales, clínicas que quieren ofrecer el servicio, marcas
- Tarifa media: 80-200€ por consulta de nutrición, 500-1.500€ por formación a clínicas
- Barrera de entrada: formación en nutrición animal (cursos certificados, no requiere veterinaria)
- Diferenciador clave: especialización en dieta BARF, en gatos, en mascotas senior, en razas específicas

Nicho 6 — SEO y posicionamiento local para clínicas veterinarias:
- Clientes: clínicas que quieren aparecer primero en "veterinario en [ciudad]"
- Tarifa media: 500-1.500€/mes por gestión SEO, 1.000-3.000€ por auditoría + plan inicial
- Barrera de entrada: SEO local + conocimiento del sector para crear contenido optimizado
- Diferenciador clave: conocer las búsquedas específicas del sector (síntomas, razas, tratamientos)

Nicho 7 — Adiestramiento y modificación de conducta:
- Clientes: propietarios de mascotas con problemas de conducta, clínicas que derivan casos
- Tarifa media: 60-150€ por sesión individual, 300-800€ por curso grupal
- Barrera de entrada: formación en etología y adiestramiento (certificaciones reconocidas)
- Diferenciador clave: especialización en conducta felina (mucho menos oferta que canina), en razas específicas, en problemas post-adopción

Nicho 8 — Consultoría de negocio para clínicas veterinarias:
- Clientes: propietarios de clínicas que quieren mejorar su gestión, rentabilidad o marketing
- Tarifa media: 100-200€/hora de consultoría, 1.500-5.000€ por proyecto de mejora
- Barrera de entrada: experiencia en gestión de negocios + conocimiento del sector veterinario
- Diferenciador clave: combinar perspectiva de negocio con conocimiento de la realidad operativa de las clínicas

### Proceso de captación de clientes en el sector pet

Estrategia de captación para freelances que empiezan:

Paso 1 — El primer cliente gratis o a precio reducido:
- Identifica 3-5 clínicas o negocios pet en tu zona que necesiten tu servicio claramente
- Ofrece hacer un "proyecto piloto" a precio especial a cambio de testimonio y caso de estudio
- Documenta el proceso y los resultados con métricas

Paso 2 — Construir autoridad en el nicho:
- Crear contenido en LinkedIn y/o Instagram sobre tu especialización en el sector pet
- Participar en grupos de Facebook de propietarios de clínicas y veterinarios
- Escribir artículos en publicaciones del sector (Argos, Ateuves, etc.)
- Hablar en eventos o webinars para veterinarios

Paso 3 — Red de referidos dentro del sector:
- El sector veterinario en España es una comunidad relativamente pequeña y muy conectada
- Un cliente satisfecho que te recomienda a otro veterinario de su red vale por 5 campañas de publicidad
- Diseña un sistema de referidos: ¿qué ofreces a los clientes que te recomiendan?

### Instrucciones para generar

Con mi contexto, genera:

1. Propuesta de valor diferenciada: en 3-5 frases, describe exactamente qué ofreces, a quién, qué resultado consiguen y por qué eres diferente de los generalistas. Versión larga para web y versión de 30 segundos para presentación verbal.

2. Estructura de servicios y tarifas: para los 2-3 servicios que mejor encajan con mi perfil, define qué incluye cada servicio, qué no incluye, cuánto tiempo lleva, a qué precio y en qué formato (proyecto cerrado / retención mensual / por hora).

3. Plan de captación para los primeros 90 días: qué hacer exactamente en el mes 1, mes 2 y mes 3 para conseguir los primeros 3 clientes de pago, con acciones concretas para cada semana, recursos necesarios y criterios de éxito.

4. Perfil de LinkedIn optimizado para mi nicho: titular, sección "Acerca de" completa, descripción de servicios y cómo solicitar propuestas, adaptado a mi nicho específico en el sector pet.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de negocio para freelances especializados en el sector de mascotas',
                'vote_score'       => 34,
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
