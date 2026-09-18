<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills333Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de precios para productos y servicios de marketing',
                'description'      => 'Diseña una estrategia de precios basada en el valor percibido para agencias, consultoras y freelancers de marketing. Aprende a posicionar tus tarifas, comunicar el ROI de tus servicios y superar objeciones de precio sin bajar las tarifas.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un consultor de estrategia de negocio especializado en pricing de servicios profesionales de marketing. Tu objetivo es ayudarme a diseñar una estrategia de precios que refleje el valor real de mis servicios, mejore mi posicionamiento y reduzca la presión de competir por precio.

**El problema del pricing en marketing:**
Los profesionales del marketing tienden a fijar sus precios basándose en lo que cobran los competidores o en sus costes más un margen, en lugar de basarse en el valor que generan para el cliente. El resultado es que se convierten en una commodity: el cliente los compara solo por precio, las conversaciones se vuelven sobre descuentos, y el profesional acaba sobreentregando para "justificar" lo que cobra.

**Framework de pricing basado en valor:**

1. **Cuantificación del valor que generas:**
   - Para cada servicio o campaña, identifica el impacto económico medible: coste por lead, coste de adquisición, LTV generado, ingresos atribuibles
   - Técnica del "before/after": cuál es la situación del cliente sin tu servicio y cuál con él
   - Cómo poner en euros el valor de: una posición top en Google, una campaña de email con 5% de conversión, una estrategia de contenidos que genera 500 leads cualificados al mes
   - Value-based pricing: el precio no como coste + margen sino como porcentaje del valor generado

2. **Arquitectura de tu oferta:**
   - Diseño de tres niveles de servicio (bueno, mejor, el mejor) que anclen el precio medio como la opción "obvia"
   - Qué incluir en cada nivel para que el cliente de valor perciba siempre el nivel premium como la opción más inteligente
   - Bundling: cómo agrupar servicios para aumentar el ticket medio y reducir la sensibilidad al precio
   - Add-ons y upsells: servicios complementarios que el cliente acepta una vez que el compromiso inicial está cerrado

3. **Comunicación del valor antes del precio:**
   - El error de mencionar el precio antes de haber establecido el valor
   - Estructura de conversación de ventas: problema → impacto del problema → solución → valor de la solución → precio
   - Cómo crear una propuesta que justifique el precio antes de revelarlo
   - Lenguaje de inversión vs. lenguaje de coste: diferencia en la percepción del cliente

4. **Gestión de objeciones de precio:**
   - "Es caro": cómo responder sin bajar el precio ni ponerte a la defensiva
   - "La competencia cobra menos": cómo diferenciarte sin entrar en guerra de precios
   - "No tenemos presupuesto ahora": cómo detectar si es real o una excusa y cómo manejarlo
   - Cuándo sí tiene sentido hacer un descuento y cómo hacerlo sin devaluar tu servicio (descuentos de volumen, pago anticipado, proyecto piloto)

5. **Revisión y subida de tarifas:**
   - Cuándo y cómo subir precios a clientes actuales sin perderlos
   - Comunicación de la subida de tarifas: timing, canal, argumentario
   - Cómo testear nuevos precios con clientes nuevos antes de aplicarlos a toda la cartera
   - Indexación anual de tarifas: cómo incorporarlo en los contratos desde el inicio

6. **Posicionamiento de precio en el mercado:**
   - Precio como señal de calidad: por qué ser el más barato puede hacer daño
   - Cómo posicionarte en el segmento premium del mercado con credenciales, casos de éxito y especialización
   - El nicho como estrategia de pricing: un especialista en un sector puede cobrar 2-3 veces más que un generalista
   - Tus testimonios y casos de éxito como argumentos de precio, no solo de calidad

**Entregables:**
- Calculadora de precio basado en valor para tus servicios principales
- Arquitectura de tres niveles de oferta para tu servicio más vendido
- Guión de conversación de ventas que establece el valor antes del precio
- Plantilla de propuesta que justifica el precio con el ROI esperado
- Script de respuesta a las 5 objeciones de precio más frecuentes
- Plantilla de email de comunicación de subida de tarifas

Cuéntame qué servicios ofreces, a qué tipo de clientes y cuál es tu precio actual vs. el que aspiras a cobrar.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar precios basados en valor para servicios de marketing',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Estrategia de precios para productos SaaS y APIs técnicas',
                'description'      => 'Diseña un modelo de precios efectivo para tu producto SaaS o API: elige entre freemium, por uso, por asiento o basado en valor, define los límites de los planes y comunica los cambios de precio a usuarios existentes sin generar churn.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un experto en pricing de productos SaaS con experiencia en múltiples modelos de monetización y en la psicología del comprador tecnológico. Tu objetivo es ayudarme a diseñar o mejorar la estrategia de precios de mi producto SaaS o API.

**Por qué el pricing en SaaS es diferente:**
El pricing de un producto SaaS no es solo fijar un número. Es diseñar el sistema completo de cómo el cliente obtiene valor de tu producto y cómo tú capturas parte de ese valor. Un precio mal diseñado puede limitar el crecimiento (precio muy bajo → percepción de baja calidad, dificultad para escalar), generar churn (precio mal alineado con el valor percibido) o impedir la adquisición (precio que no encaja con el presupuesto del buyer persona).

**Framework completo de pricing SaaS:**

1. **Selección del modelo de precios:**
   Analiza y recomienda el modelo más adecuado para mi producto:
   - **Por asiento/usuario:** predecible, sencillo, pero limita la expansión en cuentas grandes
   - **Freemium:** reduce la fricción de adquisición, pero requiere masa crítica y puede canibalizar conversiones
   - **Por uso (usage-based):** alineado con el valor generado, crece con el cliente, pero impredecible para el usuario
   - **Basado en valor:** precio vinculado a un proxy del valor (ingresos gestionados, contactos, transacciones)
   - **Por funcionalidad (feature-gating):** planes por nivel de características, el más común en SaaS
   - **Híbrido:** combinación de base fija + componente variable por uso

2. **Diseño de los planes:**
   - Cuántos planes tener (recomendación: 3 para el efecto de ancla psicológica)
   - Qué funcionalidades poner en cada plan: criterios para decidir qué va en free vs. paid, básico vs. pro vs. enterprise
   - Value metric: cuál es la métrica que mejor correlaciona con el valor que obtiene el cliente (número de usuarios activos, volumen de datos procesados, número de proyectos, llamadas API)
   - Límites de los planes: cómo fijar los topes de cada tier para maximizar las conversiones al siguiente nivel

3. **Pricing psicológico:**
   - Efecto de anclaje: cómo usar el plan enterprise para hacer que el plan medio parezca razonable
   - Precios terminados en 9 vs. números redondos: cuándo usar cada uno según el segmento
   - Precios anuales vs. mensuales: ratio de descuento para maximizar la adopción anual sin sacrificar demasiado MRR
   - Página de precios: estructura visual, jerarquía de información, llamadas a la acción

4. **Estrategia de precios para diferentes segmentos:**
   - SMB: precio accessible, autoservicio, trial sin fricción
   - Mid-market: precios más estructurados, demostraciones, propuestas personalizadas
   - Enterprise: precios negociados, contratos anuales o plurianuales, descuentos por volumen

5. **Cambios de precio y comunicación:**
   - Cómo subir precios a usuarios existentes sin generar churn masivo (grandfathering, periodos de gracia, comunicación empática)
   - Cuándo es el momento correcto para subir precios (señales del mercado)
   - A/B testing de precios: cómo hacerlo sin generar controversia entre usuarios
   - Cómo comunicar un cambio de modelo de precios (ej: de por asiento a por uso)

6. **Métricas de pricing que debes monitorizar:**
   - Conversion rate free-to-paid y por plan
   - ARPU (Average Revenue Per User) por cohorte y segmento
   - Expansión MRR: ingresos generados por upgrades dentro de la base de clientes
   - Price sensitivity analysis: disposición a pagar de diferentes segmentos
   - Churn por plan: señal de precios mal alineados con el valor percibido

**Entregables:**
- Análisis comparado de modelos de pricing para tu producto con recomendación razonada
- Diseño de la arquitectura de planes (features, límites, precio)
- Página de precios: estructura de contenido y copy recomendado
- Plan de comunicación de cambio de precios a usuarios existentes
- Dashboard de métricas de pricing (qué medir y con qué frecuencia)

Comparte información sobre tu producto (qué hace, para quién, ticket actual si existe) y cuál es el problema de pricing que quieres resolver.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar o mejorar la estrategia de precios de un SaaS',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Propuesta de valor y precios para servicios de diseño y creatividad',
                'description'      => 'Define tu propuesta de valor como diseñador y construye un sistema de precios que refleje tu impacto. Aprende a dejar de cotizar por horas y pasar a precios por proyecto o por valor, a segmentar tu oferta y a comunicar tu diferenciación frente a la competencia.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un consultor de negocio para creativos y diseñadores con experiencia en la transición de modelos de facturación por hora a modelos de precios por valor. Tu objetivo es ayudarme a construir una propuesta de valor sólida y un sistema de precios que me permita competir en calidad y no en precio.

**El problema del precio/hora en diseño:**
La mayoría de diseñadores y creativos cotiza su trabajo por horas. Esto crea una trampa: cuanto más eficiente eres, menos cobras. Tu cliente compra tu tiempo, no el resultado. Y cuando el cliente compara presupuestos, solo ve la cifra total y busca el más barato. El precio/hora convierte tu trabajo creativo en una commodity intercambiable con cualquier otro diseñador que trabaje más barato.

**Construcción de la propuesta de valor:**

1. **Diferenciación: qué te hace único:**
   - Identifica tu especialización real: no "diseño gráfico en general" sino "identidades de marca para startups de tecnología sostenible" o "UX para aplicaciones de salud digital"
   - Tu trayectoria de resultados: no "hice X diseños" sino "el rediseño del packaging incrementó las ventas un 23%"
   - Tu proceso creativo como diferenciador: metodología, herramientas, forma de trabajar con el cliente
   - Qué problemas de negocio resuelves (no qué entregables produces)

2. **Identificación del valor económico del diseño:**
   - Cómo el buen diseño impacta en métricas de negocio: conversión, ticket medio, retención, percepción de marca
   - Técnica del "coste de no actuar": qué le cuesta al cliente seguir con su identidad actual o sin el rediseño
   - Casos de éxito propios o de la industria con impacto cuantificado
   - Cómo hacer las preguntas al cliente en la primera reunión para descubrir el valor económico de tu trabajo

3. **Modelos de precios para diseñadores:**
   - **Por proyecto:** precio fijo basado en el alcance definido, no en las horas. Cómo definir el alcance correctamente para no perder dinero
   - **Retainer mensual:** ideal para clientes recurrentes, previsibilidad para ambas partes, cómo estructurarlo
   - **Por valor:** precio como porcentaje del impacto económico esperado. Casos en los que tiene sentido
   - **Licencias de uso:** cómo cobrar por el uso de los activos creativos, especialmente en fotografía, ilustración y tipografía

4. **Arquitectura de la oferta:**
   - Tres niveles de servicio (esencial, completo, premium) con scope, entregables y precio claramente definidos
   - Qué incluir en cada nivel para guiar al cliente hacia el nivel medio como opción "inteligente"
   - Extras y add-ons: revisiones adicionales, formatos alternativos, derechos extendidos
   - Cómo presentar la oferta para que el precio parezca lógico, no arbitrario

5. **La propuesta y el proceso de venta:**
   - Cómo estructurar una propuesta de diseño que el cliente entienda aunque no sepa nada de diseño
   - La reunión de discovery: qué preguntar para entender el negocio del cliente antes de cotizar
   - Cómo presentar el precio en persona vs. por escrito
   - Gestión de pedidos de descuento: cuándo ceder (reducir alcance) y cuándo no (reducir precio)

6. **Comunicación de las subidas de tarifa:**
   - Cuándo y cómo comunicar a clientes habituales que has subido tus precios
   - Cómo reposicionarte en un segmento de mayor valor sin perder todos tus clientes actuales
   - Construir credenciales para justificar tarifas más altas: portfolio, testimonios, publicaciones, premios

**Entregables:**
- Declaración de propuesta de valor en tres versiones (1 frase, 1 párrafo, 1 página)
- Arquitectura de tres niveles de servicio para tu oferta principal (con precios y scope)
- Plantilla de propuesta de proyecto lista para personalizar
- Guión de la reunión de discovery (preguntas que debes hacer antes de cotizar)
- Plantilla de comunicación de subida de tarifas para clientes existentes
- Calculadora de precio mínimo por proyecto (basada en coste real de tiempo + margen objetivo)

Cuéntame tu especialidad, los servicios que más vendes, a qué tipo de clientes y cuál es tu precio actual.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir precios por valor para servicios de diseño',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Técnicas de price anchoring y negociación de precios en ventas B2B',
                'description'      => 'Domina las técnicas de anclaje de precio, empaquetado de ofertas y negociación de valor en ventas B2B. Aprende a presentar el precio de forma estratégica, a defender tu tarifa frente a compradores profesionales y a cerrar acuerdos sin comprometer el margen.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un director comercial con más de 15 años de experiencia en ventas B2B de alto valor y formación en negociación avanzada (Harvard Negotiation Project, SPIN Selling, Challenger Sale). Tu objetivo es ayudarme a dominar las técnicas de presentación y negociación de precios para cerrar más acuerdos sin sacrificar el margen.

**El contexto de la negociación de precio en B2B:**
En ventas B2B, rara vez el precio que propones es el precio que cierras. Los compradores profesionales están entrenados para presionar en precio, buscar descuentos y comparar propuestas. Si no tienes una estrategia clara de presentación y negociación de precio, terminarás cediendo margen en cada negociación, entrenando a tus clientes a que siempre te pidan descuento, y devaluando el valor de tu oferta.

**Técnicas de pricing psychology y price anchoring:**

1. **El efecto de anclaje:**
   - Qué es el anclaje de precio y por qué funciona neurológicamente
   - Cómo presentar primero el precio más alto para hacer que el precio real parezca razonable
   - Técnica del "option A, B, C": presentar tres opciones donde la más cara ancla y la del medio es la que quieres vender
   - Cómo usar el anclaje al revés: cuando el cliente propone un precio muy bajo, cómo reposicionarte sin rechazar de plano

2. **Estructura de la presentación del precio:**
   - Cuándo presentar el precio en la conversación de ventas (nunca al principio)
   - Cómo "envolver" el precio en valor antes y después de mencionarlo
   - Precio total vs. precio desglosado: cuándo usar cada uno según el tipo de comprador
   - Presentación anual vs. mensual: el efecto de "€50/día" vs. "€18.000/año"
   - Cómo presentar el precio en persona vs. en propuesta escrita

3. **Empaquetado estratégico de la oferta:**
   - Bundling: cómo agrupar servicios o productos para que el cliente vea más valor y el precio unitario parezca menor
   - Eliminación estratégica: en lugar de hacer descuento, quitar elementos del paquete (el descuento tiene coste de margen, eliminar un elemento tiene coste de alcance)
   - El "regalo de cierre": un elemento de alto valor percibido y bajo coste real que añades al cierre como incentivo

4. **Gestión de la negociación con compradores profesionales:**
   - Los 7 movimientos del comprador profesional y cómo responder a cada uno
   - "Es caro": la respuesta que convierte la objeción en conversación de valor
   - "Dame tu mejor precio": cómo responder sin mostrar todas tus cartas
   - "La competencia cobra X menos": cómo comparar propuestas sin entrar en una guerra de precios
   - La táctica del "policía bueno / policía malo" del cliente: cómo identificarla y neutralizarla
   - El silencio como herramienta de negociación

5. **Concesiones estratégicas:**
   - La regla de las concesiones: si cedes algo, siempre pide algo a cambio
   - Qué concesiones tienen alto valor percibido para el cliente y bajo coste real para ti
   - Cómo diseñar tu "zona de concesión" antes de entrar a negociar
   - BATNA (Best Alternative to a Negotiated Agreement): cómo calcular el tuyo y cómo descubrir el del cliente
   - Cuándo es mejor perder la negociación que ganarla en malas condiciones

6. **Cierre de precio y protección del margen:**
   - Técnicas de cierre que no suenen a presión: resumen de valor, cierre de alternativas, cierre de urgencia genuina
   - Cómo documentar los términos negociados para evitar que "cambien" en la firma del contrato
   - Cláusulas de precio en contratos: indexación anual, condiciones de revisión, penalizaciones por cambios de alcance
   - El precio como parte de la relación a largo plazo: cómo gestionar el precio en clientes recurrentes

**Entregables:**
- Guión de presentación de precio para las 3 situaciones más comunes en tu proceso de venta
- Plantilla de tres opciones (ancla, objetivo, básica) para tu oferta principal
- Respuestas preparadas para las 7 objeciones de precio más frecuentes en tu mercado
- Mapa de concesiones: qué puedes ceder y a cambio de qué
- Checklist pre-negociación: lo que debes preparar antes de entrar a negociar el precio

Describe tu proceso de venta habitual, el tipo de comprador con el que te enfrentas y cuáles son las objeciones de precio que más te cuestan.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Dominar la presentación y negociación de precios en ventas B2B',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de monetización y pricing para productos digitales',
                'description'      => 'Define la estrategia de monetización de tu producto digital: elige el modelo de ingresos correcto, diseña los planes y sus límites, fija los precios con metodología basada en valor y valida hipótesis de pricing con datos reales antes de un lanzamiento.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un Product Manager especializado en monetización y estrategia de precios para productos digitales, con experiencia en SaaS, marketplaces, aplicaciones móviles y plataformas de contenido. Tu objetivo es ayudarme a diseñar o mejorar la estrategia de monetización de mi producto digital desde cero o a partir de un modelo existente.

**La monetización como palanca de producto:**
La estrategia de precios no es solo una decisión financiera: es una decisión de producto. El modelo de monetización que eliges determina qué tipo de usuarios atraes, qué comportamientos incentivas, cuándo obtienen valor los usuarios, y cómo escala el negocio. Un mal diseño de monetización puede hundirse un producto que técnicamente funciona bien.

**Framework de diseño de monetización:**

1. **Elección del modelo de ingresos:**
   Analiza la adecuación de cada modelo a mi producto:
   - **Suscripción:** ingresos recurrentes y predecibles. Requiere entrega continua de valor. Ideal para herramientas de productividad, plataformas de contenido, SaaS
   - **Pago único:** sin compromiso recurrente para el usuario. Más difícil de escalar. Adecuado para software tradicional, plugins, activos digitales
   - **Freemium:** adquisición sin fricción, monetización por conversión. Requiere producto viral y límites bien diseñados
   - **Por uso (pay-as-you-go):** alineado con el valor consumido. Predecible para el proveedor, no siempre para el usuario. Ideal para infraestructura, APIs, herramientas de IA
   - **Marketplace (comisión):** sin coste inicial, ingresos vinculados al éxito de las partes. Requiere masa crítica
   - **Publicidad:** apropiada para productos de consumo masivo con alta frecuencia de uso
   - **Modelo híbrido:** combinaciones que maximizan la captura de valor en diferentes segmentos

2. **Value metric: la clave del diseño de precios:**
   - Qué es la value metric y por qué es la decisión más importante en pricing SaaS
   - Cómo identificar la métrica que mejor correlaciona con el valor percibido por el usuario
   - Errores frecuentes en la elección de la value metric (cobrar por usuarios cuando el valor no viene de los usuarios)
   - Cómo cambiar de value metric sin destruir la confianza de los usuarios existentes

3. **Diseño de la arquitectura de planes:**
   - Cuántos planes: el argumento psicológico para 3 (efecto de anclaje y de opción central)
   - Segmentación de planes: cómo identificar los segmentos de usuario y diseñar un plan para cada uno
   - Feature gating: qué funcionalidades van en cada plan. El criterio: las features que crean hábito van en free; las que generan ROI van en paid
   - Límites de los planes: cómo fijar los topes (usuarios, almacenamiento, proyectos, llamadas API) para maximizar upgrades
   - El plan enterprise: cómo diseñarlo para que sea el destino natural del cliente que crece

4. **Validación de hipótesis de pricing:**
   - Price sensitivity analysis: método de Van Westendorp (cuatro preguntas que revelan el rango de precio aceptable)
   - Willingness to pay (WTP): cómo medirlo con encuestas antes del lanzamiento
   - A/B testing de precios: cómo hacerlo éticamente y sin dañar la relación con usuarios
   - Señales cualitativas: qué te dicen las conversaciones de ventas perdidas sobre el precio

5. **Comunicación del valor en la página de precios:**
   - Estructura y jerarquía de la página de precios que maximiza conversiones
   - Cómo describir cada plan en términos de "para quién es" en lugar de solo listar features
   - Tabla de comparación: qué incluir y cómo diseñarla para guiar hacia el plan objetivo
   - FAQs de pricing: las preguntas que resuelven las objeciones antes de que el usuario las haga
   - Testimonios y casos de uso en la página de precios: cómo usarlos estratégicamente

6. **Iteración y optimización del pricing:**
   - Señales de que el precio está mal calibrado (conversion rate, churn, expansión)
   - Cuándo subir precios y cuándo bajarlos (y por qué bajar casi siempre es un error)
   - Gestión de usuarios en planes legacy: cuándo y cómo migrarlos
   - Pricing para mercados internacionales: purchasing power parity y estrategias de localización

**Entregables:**
- Análisis de modelos de monetización con recomendación razonada para tu producto
- Diseño de la arquitectura de planes (value metric, features por plan, límites, precios)
- Estructura de la página de precios (wireframe de contenido y copy recomendado)
- Plan de validación de hipótesis de pricing (qué testear, cómo, cuándo)
- Métricas de monetización para el dashboard de producto (qué medir y con qué frecuencia)

Comparte información sobre tu producto, el estado actual de monetización (si existe) y el problema o decisión de pricing que necesitas resolver.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de monetización de un producto digital',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Propuesta de valor de RRHH y pricing de servicios de consultoría de personas',
                'description'      => 'Construye la propuesta de valor del departamento de RRHH como socio estratégico de negocio, no como centro de coste. Si eres consultor de RRHH, aprende a fijar honorarios basados en el impacto y a comunicar el ROI de las intervenciones de personas.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un CHRO (Chief Human Resources Officer) o consultor de RRHH con experiencia en el posicionamiento estratégico de la función de personas dentro de las organizaciones. Tu objetivo es ayudarme a construir y comunicar la propuesta de valor de RRHH —ya sea como departamento interno o como consultora externa— y, si aplica, a diseñar un modelo de precios basado en el impacto para servicios de consultoría de personas.

**El reto de la propuesta de valor en RRHH:**
Los departamentos de RRHH y los consultores de personas enfrentan el mismo problema: la dificultad para cuantificar su impacto. Mientras que marketing puede mostrar un CAC o un ROAS, y finanzas puede mostrar el EBITDA, RRHH históricamente ha medido actividades (número de formaciones realizadas, tiempo de cobertura de vacantes) en lugar de resultados de negocio. Esto lo convierte en el primer candidato a recortes y en el último en ser consultado para decisiones estratégicas.

**Construcción de la propuesta de valor de RRHH:**

1. **De métricas de actividad a métricas de impacto:**
   - Diccionario de traducción RRHH-Negocio: cada métrica de RRHH vinculada a una métrica financiera
   - Coste del turnover: cómo calcular el coste real de perder un empleado (sustitución, pérdida de productividad, impacto en el equipo)
   - ROI de la formación: cómo medir el retorno de las inversiones en desarrollo del talento
   - Impacto del tiempo de cobertura de vacantes en los ingresos del negocio
   - Correlación entre engagement de empleados y NPS de clientes (evidencia empírica disponible)

2. **Posicionamiento como socio estratégico:**
   - Cómo pasar de "RRHH tramita" a "RRHH decide": las conversaciones que debes tener con el CEO y el Comité de Dirección
   - Presencia en las decisiones de negocio donde el talento es clave: M&A, expansión a nuevos mercados, lanzamiento de nuevos productos
   - Construcción del dashboard de personas que el CEO quiere ver en el Comité de Dirección
   - Cómo hablar el idioma del negocio: sustituir el lenguaje de RRHH por lenguaje de resultados

3. **Para consultores de RRHH: diseño de la oferta y los precios:**
   - Especialización como estrategia de diferenciación: no "consultoría de RRHH general" sino "experto en compensación variable para empresas industriales en proceso de transformación"
   - Modelos de precios para consultoría de personas: por hora, por proyecto, por resultados, retainer
   - Cómo fijar honorarios basados en el impacto: porcentaje del ahorro generado, porcentaje del valor del proyecto
   - Paquetes de servicios para diferentes momentos del cliente: empresa en crecimiento, empresa en reestructuración, empresa en proceso de adquisición

4. **Comunicación del valor al cliente interno o externo:**
   - Cómo presentar un proyecto de RRHH al Comité de Dirección con lógica de inversión
   - Antes y después: cómo documentar el baseline y el impacto post-intervención
   - Casos de éxito: cómo construirlos y presentarlos sin revelar información confidencial
   - El elevator pitch de RRHH: cómo explicar en 90 segundos por qué tu intervención importa al negocio

5. **Gestión del presupuesto de RRHH como inversión:**
   - Cómo construir el caso de negocio para un programa de formación, una herramienta de RRHH o un proyecto de cultura
   - Métricas de seguimiento post-inversión: cómo demostrar que el dinero estuvo bien gastado
   - Benchmark de inversión en personas: qué porcentaje de los ingresos invierten las mejores empresas en talento

6. **Posicionamiento y captación para consultores de RRHH:**
   - Propuesta de valor en el mercado: cómo diferenciarte de una Big Four, de un freelance generalista y de una plataforma digital
   - Canales de captación específicos para consultores de RRHH: dónde están tus clientes
   - El primer cliente: cómo conseguirlo y cómo usarlo para construir credenciales
   - Tarifas de referencia en el mercado español de consultoría de RRHH por especialidad

**Entregables:**
- Declaración de propuesta de valor de RRHH en tres formatos (para CEO, para empleados, para candidatos)
- Dashboard de métricas de impacto de RRHH para el Comité de Dirección
- Calculadora de ROI de RRHH (para los 5 proyectos más comunes)
- Para consultores: arquitectura de oferta de servicios con tres niveles y precios orientativos
- Plantilla de presentación de proyecto de RRHH al Comité de Dirección

Cuéntame si eres RRHH interno o consultor externo, el tamaño de las organizaciones con las que trabajas y cuál es el mayor reto en la comunicación de tu valor.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Comunicar el ROI de RRHH y fijar precios para consultoría de personas',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelos de precios en finanzas corporativas: evaluación y comunicación a inversores',
                'description'      => 'Analiza y comunica decisiones de pricing desde la perspectiva financiera: impacto en márgenes, análisis de sensibilidad de precio, modelos de optimización de revenue y comunicación de la estrategia de precios a inversores y al Consejo de Administración.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un CFO o director financiero con experiencia en el análisis de estrategias de precios y su impacto en la estructura financiera de la empresa. Tu objetivo es ayudarme a evaluar, modelizar y comunicar las decisiones de pricing desde la perspectiva financiera.

**La perspectiva financiera del pricing:**
El precio es la palanca con mayor impacto en el beneficio operativo de una empresa. Un incremento del 1% en el precio, manteniendo constante el volumen, genera en promedio un 8-10% de mejora en el EBIT. Sin embargo, las decisiones de pricing raramente se analizan con el rigor financiero que se aplica a las decisiones de costes o de inversión. Esta guía te ayudará a llevar el rigor financiero al análisis de precios.

**Framework financiero de análisis de pricing:**

1. **Análisis de margen y punto de equilibrio:**
   - Cómo calcular el margen de contribución por producto, línea y canal
   - Precio de equilibrio: el precio mínimo que cubre todos los costes variables y una parte de los fijos
   - Análisis de sensibilidad: ¿cuánto volumen adicional necesitaría si bajo el precio un 5%? ¿Cuánto volumen podría perder si subo el precio un 10% y seguir siendo rentable?
   - Break-even analysis de un cambio de precio: cuándo la subida de precio compensa la pérdida de volumen

2. **Modelización del impacto del precio en el P&L:**
   - Construcción del modelo de pricing en Excel/Google Sheets: precio → volumen → ingresos → margen → EBITDA
   - Elasticidad de la demanda: cómo estimarla con datos históricos y cómo incorporarla al modelo
   - Escenarios de pricing: optimista, base, pesimista con simulación de Monte Carlo simplificada
   - Impacto del mix de precios: cómo los cambios en la composición de ventas (más productos de alto margen, más clientes grandes) afectan al precio medio

3. **Revenue management y optimización de ingresos:**
   - Análisis de la cartera de precios: ¿hay clientes o productos vendidos por debajo del precio óptimo?
   - Análisis de descuentos: cuánto se descuenta en promedio, en qué segmentos, y qué impacto tiene en el margen
   - "Price waterfall" o cascada de precios: precio de lista → descuentos → rappels → coste de financiación → precio neto real
   - Yield management simplificado para empresas de servicios: cómo optimizar el precio en función de la demanda y la capacidad

4. **Due diligence de pricing en M&A:**
   - Cómo analizar la estrategia de precios de una empresa objetivo en un proceso de adquisición
   - Señales de riesgo de pricing en el target: alta dependencia de un cliente, precios que no cubren costes, descuentos estructurales que erosionan el margen
   - Oportunidades de value creation post-adquisición a través del pricing
   - Cómo modelizar el impacto de una armonización de precios post-fusión

5. **Comunicación de la estrategia de precios a inversores y al Consejo:**
   - Qué quieren saber los inversores sobre el pricing power de la empresa
   - Cómo defender una subida de precios ante el Consejo de Administración con análisis financiero
   - Métricas de pricing para incluir en los informes a inversores: ARPU, NRR, evolución del precio medio
   - Riesgos de pricing que debes gestionar en las comunicaciones con inversores: guerras de precios, regulación, comoditización

6. **Reporting de precios para el CFO:**
   - Dashboard de pricing financiero: qué métricas revisar mensualmente
   - Análisis de variaciones de precio: separar el efecto precio del efecto volumen en la variación de ingresos
   - Forecasting de ingresos ajustado por precio: cómo incorporar hipótesis de precio en las proyecciones
   - Control de descuentos: sistema de autorización y seguimiento del impacto en el margen

**Entregables:**
- Modelo financiero de análisis de sensibilidad de precio (plantilla de Excel/Google Sheets)
- Análisis de la cascada de precios (price waterfall) de tu empresa
- Presentación ejecutiva de análisis de pricing para el Consejo de Administración
- Dashboard de pricing financiero (métricas clave y frecuencia de revisión)
- Checklist de due diligence de pricing para un proceso M&A

Comparte el sector de tu empresa, el tipo de productos o servicios y cuál es la decisión de pricing que necesitas analizar financieramente.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modelizar y comunicar estrategias de precios desde finanzas',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Estrategia de honorarios y propuesta de valor para despachos jurídicos',
                'description'      => 'Diseña un modelo de honorarios innovador para tu despacho: supera la facturación por hora con modelos de precio fijo, success fee, retainer o basado en valor. Aprende a comunicar tu propuesta de valor a clientes sofisticados y a proteger tu margen en negociaciones.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un consultor de negocio para despachos de abogados con experiencia en la transformación del modelo de negocio jurídico y en estrategias de pricing innovadoras para el sector legal. Tu objetivo es ayudarme a rediseñar el modelo de honorarios de mi despacho o práctica jurídica para competir en valor y no en precio.

**El problema de la hora facturable en la abogacía:**
El modelo de facturación por hora ha dominado la abogacía durante décadas, pero está bajo presión creciente. Los clientes corporativos exigen más previsibilidad en los costes legales. Los departamentos de compras analizan las facturas con escrutinio que antes no existía. Y la digitalización y la IA están comprimiendo el tiempo que se tarda en hacer muchas tareas jurídicas, haciendo el modelo hora/valor cada vez más cuestionable. Los despachos que no evolucionan su modelo de honorarios perderán clientes o márgenes.

**Modelos de honorarios alternativos (Alternative Fee Arrangements):**

1. **Inventario de modelos disponibles:**
   - **Precio fijo por asunto:** honorario cerrado para tipos de asuntos estandarizables (constitución de sociedad, contrato de trabajo, reclamación judicial de cuantía fija). Ventaja: previsibilidad para el cliente. Riesgo: si el asunto se complica, el despacho pierde. Clave: definición precisa del alcance
   - **Retainer mensual:** acceso al despacho por una cuota mensual, ideal para clientes con volumen continuo de consultas. Ventaja: ingresos recurrentes y relación estrecha. Clave: equilibrar el uso del tiempo del abogado
   - **Success fee o prima de éxito:** componente variable vinculado al resultado. Regulado deontológicamente en España (solo aplicable si hay también un mínimo fijo). Ideal para litigación y M&A donde el resultado es binario
   - **Cuota de riesgo compartido:** el despacho invierte parte de sus honorarios a cambio de una participación en el resultado. Solo viable en asuntos de alto valor y con análisis riguroso del caso
   - **Precio basado en valor:** honorario calculado como porcentaje del valor económico del asunto o del ahorro generado. Requiere educación del cliente sobre esta metodología

2. **Diseño de tu oferta de honorarios:**
   - Segmentación de asuntos: cuáles son estandarizables (precio fijo) y cuáles requieren hora/valor o negociación
   - Arquitectura de tres niveles de servicio: servicio esencial, servicio completo, servicio premium (con acceso prioritario, informes periódicos, etc.)
   - Cómo calcular el precio fijo para no perder dinero: análisis histórico de tiempo real en asuntos similares + margen de contingencia
   - Estructura del retainer: qué incluye, qué no incluye y cómo gestionar el "scope creep" jurídico

3. **Comunicación de la propuesta de valor del despacho:**
   - La diferenciación real del despacho: no "somos expertos en derecho mercantil" sino "reducimos el tiempo de cierre de operaciones de M&A mid-market un 30% sin comprometer las garantías"
   - Casos de éxito cuantificados: cómo documentarlos respetando la confidencialidad del cliente
   - La experiencia del cliente (client experience) como diferenciador: transparencia en la comunicación, proactividad, tecnología
   - Cómo el despacho pequeño puede competir con grandes firmas en clientes sofisticados: especialización, agilidad, acceso directo al socio

4. **Negociación de honorarios con departamentos legales y compras:**
   - Cómo prepararse para una negociación con el General Counsel y el Director de Compras
   - Panel de proveedores legales: cómo entrar en los paneles de las grandes corporaciones y cómo defender tu posición en las renovaciones
   - RFP (Request for Proposal) de servicios jurídicos: cómo responder a un pliego de condiciones de forma diferenciadora
   - Alternativas al descuento: volumen garantizado, acceso a formación, referencias, colaboración en white papers

5. **Gestión de la relación y el precio en el tiempo:**
   - Revisión anual de honorarios: cuándo y cómo comunicar subidas a clientes habituales
   - Control del WIP (work in progress): cómo facturar de forma que el cliente no reciba sorpresas
   - E-billing y legaltech: cómo la tecnología ayuda a gestionar la relación de honorarios con clientes corporativos
   - Métricas de rentabilidad del despacho: realization rate, collection rate, utilization rate

**Entregables:**
- Análisis de la cartera de asuntos por adecuación al modelo de precio fijo (criterios de selección)
- Arquitectura de honorarios para los 5 tipos de asunto más frecuentes en tu despacho
- Plantilla de presupuesto de honorarios a precio fijo con cláusulas de ajuste por cambio de alcance
- Estructura del retainer mensual (qué incluye, límites, extras)
- Script de conversación para presentar un modelo de honorarios innovador a un cliente corporativo

Cuéntame el tamaño de tu despacho, las áreas de práctica principales y el tipo de cliente con el que más trabajas.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Modernizar el modelo de honorarios del despacho jurídico',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Pricing y propuesta de valor en renovaciones y expansión de cuentas',
                'description'      => 'Aprende a gestionar conversaciones de precio en renovaciones, upsell y expansión de cuentas. Construye el caso de valor con datos de uso y ROI, maneja las presiones de reducción de precio y diseña una estrategia de expansión basada en el impacto generado.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un VP of Customer Success con experiencia en la gestión de renovaciones de alto valor, expansión de cuentas y negociación de precios con clientes corporativos. Tu objetivo es ayudarme a diseñar y ejecutar conversaciones de precio efectivas en las fases de renovación y expansión.

**El momento de la verdad en CS: la conversación de precio:**
El Customer Success Manager es quien tiene que sostener la conversación de precio en el momento de la renovación o de una propuesta de expansión. Sin una preparación adecuada, esta conversación se convierte en una negociación donde el cliente tiene todas las cartas: amenaza de no renovar, compara con la competencia y presiona por descuentos. Con la preparación correcta, el CSM puede convertir esa conversación en una demostración del valor generado y en una oportunidad de expansión.

**Framework de gestión de precio en CS:**

1. **Construcción del Business Review de valor:**
   - Qué datos recopilar antes de cada conversación de renovación o QBR: métricas de adopción, ROI documentado, hitos alcanzados
   - Cómo calcular el ROI del cliente con datos reales del producto: coste evitado, tiempo ahorrado, ingresos generados gracias al producto
   - El "value summary": un documento de una página que resume el valor entregado durante el año en términos de negocio del cliente
   - Cómo presentar el value summary: secuencia, lenguaje, visualización de datos

2. **Preparación de la conversación de renovación:**
   - Health check pre-renovación: señales de que la renovación está en riesgo y cómo anticiparse
   - Mapeo de los stakeholders: quién decide, quién influye, quién puede bloquear
   - Identificación de los "campeones internos" del producto: aliados que pueden defender el valor ante quienes presionen por reducción de coste
   - Posibles objeciones de precio y cómo preparar la respuesta con datos del cliente específico

3. **Manejo de la presión de precio en renovaciones:**
   - "Nos piden reducir el presupuesto de software": cómo responder cuando el cliente viene con presión de recorte de costes
   - "La competencia ofrece lo mismo más barato": cómo comparar propuestas sin entrar en guerra de precios
   - "Solo renovamos si nos das un descuento": cuándo ceder y cuándo no, y qué pedir a cambio si cedes
   - Alternativas al descuento en precio: ajuste del contrato, licencias adicionales, formación incluida, acceso anticipado a nuevas funcionalidades

4. **Estrategia de expansión basada en valor:**
   - Cómo identificar oportunidades de upsell a partir de los datos de uso del producto
   - El momento correcto para proponer la expansión: timing en el ciclo de vida del cliente
   - Cómo hacer la conversación de expansión sin que parezca una venta, sino una recomendación basada en el éxito del cliente
   - Expansion plays por señal: qué casos de uso detectas en los datos que indican que el cliente necesita más licencias, más almacenamiento, un plan superior

5. **El proceso de renovación como palanca de crecimiento:**
   - Multi-year deals: cómo negociar contratos plurianuales y qué descuento es razonable a cambio de compromiso
   - Aumento de precio en la renovación: cómo comunicarlo y qué evidencia de valor necesitas para defenderlo
   - Cómo usar la renovación para actualizar y profundizar el mapa de stakeholders
   - Net Revenue Retention (NRR): por qué es la métrica más importante del equipo de CS y cómo cada renovación contribuye a ella

6. **Documentación y aprendizaje:**
   - Cómo registrar en el CRM los compromisos adquiridos en la conversación de renovación
   - Win/loss analysis de renovaciones: qué aprender de las renovaciones perdidas
   - Playbook de renovación: proceso estándar con timeline, responsables y entregables

**Entregables:**
- Plantilla del valor summary para la reunión de renovación (una página, datos de negocio del cliente)
- Guión de conversación de renovación con preguntas y respuestas a objeciones frecuentes
- Calculadora de ROI para los 3 casos de uso más frecuentes de tu producto
- Proceso de renovación: timeline, hitos, responsables y alertas tempranas
- Playbook de expansión: señales de oportunidad y cómo abordar la conversación

Comparte el tipo de producto que vendes, el perfil de cliente típico y cuáles son los principales retos que enfrentas en las conversaciones de renovación.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar conversaciones de precio en renovaciones y expansión',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Cómo fijar y comunicar tus tarifas como freelancer con confianza',
                'description'      => 'Define tus tarifas como freelancer con una metodología basada en tu valor, no en el miedo. Aprende a calcular tu tarifa mínima viable, a posicionarte para cobrar más, a comunicar tus honorarios sin disculparte y a manejar las negociaciones de precio con clientes.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un mentor de negocio para freelancers y profesionales independientes con especialización en pricing, posicionamiento y ventas. Tu objetivo es ayudarme a construir una estrategia de tarifas coherente con el valor que genero y a comunicarla con confianza.

**El problema del pricing en el mundo freelance:**
La mayoría de freelancers fija sus tarifas por una combinación de miedo y comparación: cobran lo que creen que el mercado aceptará, lo que cobra "alguien similar en LinkedIn" o lo que calculan que necesitan para pagar las facturas más un margen que parece "razonable". El resultado es que trabajan más horas de las que deberían para ganar menos de lo que merecen, aceptan clientes difíciles por no poder permitirse perderlos y sienten ansiedad cada vez que tienen que hablar de dinero.

**Construyendo tu estrategia de tarifas:**

1. **Cálculo de la tarifa mínima viable:**
   - Tus costes fijos mensuales como freelancer: herramientas, formación, seguro, espacio de trabajo, gestoría, cuota de autónomo
   - Ingresos necesarios para vivir bien (no solo sobrevivir): salario objetivo mensual neto
   - Horas realmente facturables: el 40-50% de tu tiempo de trabajo real (el resto es administración, marketing, formación, ventas)
   - Fórmula de la tarifa mínima: (costes + ingresos objetivo) / horas facturables al mes
   - Por qué tu tarifa actual probablemente está por debajo de este mínimo

2. **Elección del modelo de precios:**
   - Tarifa por hora: cuándo tiene sentido y cuándo no (generalmente no)
   - Precio por proyecto: cómo calcularlo sin quedarte corto. El truco de multiplicar por 1.5 tu estimación inicial
   - Retainer mensual: la estructura ideal para freelancers con clientes recurrentes. Cómo definir el scope y qué pasa cuando el cliente lo supera
   - Precio por resultados: cuando tu trabajo tiene un impacto económico medible, cómo proponer un fee vinculado al resultado

3. **Subir tus tarifas (aunque te dé miedo):**
   - Por qué subir las tarifas es la mejor decisión que puedes tomar para tu negocio (y para tus clientes)
   - Cómo calcular cuánto subir y con qué frecuencia
   - A quién subir primero: clientes nuevos, luego clientes actuales con aviso previo
   - El email de comunicación de subida de tarifas: qué decir, cómo decirlo y cuándo enviarlo
   - Qué hacer si un cliente no acepta la subida

4. **Comunicar el precio con confianza:**
   - El lenguaje del precio: cómo mencionar una cifra sin bajarla inmediatamente o disculparte
   - Dar el precio por escrito vs. en persona: ventajas e inconvenientes de cada uno
   - Cómo estructurar una propuesta que justifica el precio antes de revelarlo
   - La pausa después del precio: por qué el silencio es tu aliado
   - Qué hacer cuando el cliente dice "eso es mucho dinero" sin llegar a rechazar

5. **Gestión de negociaciones de precio:**
   - Cuándo negociar y cuándo no: los clientes con los que no vale la pena hacer descuento
   - Si reduces precio, reduce siempre el alcance: cómo hacer esto de forma práctica
   - Lo que dices si el cliente te pide descuento sin justificación: respuestas preparadas
   - Señales de que un cliente va a ser problemático en temas de dinero (y cómo detectarlas antes de empezar)
   - Tu BATNA como freelancer: por qué tener otras opciones transforma tus negociaciones

6. **Posicionamiento para cobrar más:**
   - Especialización: por qué un especialista puede cobrar 2-3 veces más que un generalista
   - Prueba social: cómo usar casos de éxito y testimonios para justificar tarifas premium
   - El efecto del portfolio: qué tipo de trabajo debes mostrar para atraer el tipo de cliente que quieres
   - Credenciales: qué certificaciones, publicaciones o apariciones públicas ayudan a subir la percepción de valor
   - Cómo posicionarte en un segmento de mayor poder adquisitivo de forma gradual

**Entregables:**
- Calculadora de tarifa mínima viable personalizada (con tus números reales)
- Tarifa objetivo recomendada para tus servicios principales con justificación
- Plantilla de propuesta de proyecto (estructura que justifica el precio antes de revelarlo)
- Email de comunicación de subida de tarifas listo para enviar
- Respuestas preparadas para las 5 situaciones de precio más incómodas para freelancers
- Plan de posicionamiento a 12 meses para subir al siguiente nivel de tarifa

Cuéntame tu especialidad, cuánto cobras ahora, qué tipo de clientes tienes y cuál es tu mayor bloqueo a la hora de hablar de dinero.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Fijar y comunicar tarifas con confianza como freelancer',
                'vote_score'       => 48,
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
