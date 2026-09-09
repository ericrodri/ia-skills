<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills102Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing en Latinoamérica: diferencias clave para no fallar',
                'description'      => 'Las diferencias culturales, plataformas y comportamientos del consumidor que hacen que las estrategias europeas fallen en LATAM.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing digital para mercados latinoamericanos con experiencia en México, Argentina, Colombia, Brasil y Chile. Trabajo como responsable de marketing en una empresa española que va a expandirse a LATAM por primera vez. Vamos a entrar en México y Colombia como primer paso. Ayúdame a entender qué cambia y qué no cambia cuando hacemos marketing en estos mercados.

## Mi contexto

- Empresa SaaS B2B que vende software de gestión para pymes.
- En España tenemos un CAC de 180€ y un ciclo de venta de 3 semanas.
- Presupuesto de marketing para LATAM: 80.000€ anuales para los dos países.
- El equipo actual de marketing está en Madrid y no conoce LATAM de primera mano.
- Primer objetivo: 50 clientes nuevos en México y 25 en Colombia en 12 meses.

## Lo que necesito

### 1. Lo que más sorprende a los marketeros europeos en LATAM

Antes de hablar de estrategia, dame los 8 errores más comunes de las empresas europeas que llegan a LATAM con su estrategia de marketing "copy-paste":
1. Asumir que el español es igual en todos los países
2. Ignorar WhatsApp como canal principal de comunicación comercial
3. Usar referencias culturales europeas que no conectan
4. Infraestimar la importancia de las relaciones personales en B2B
...

Completa la lista con los 4 errores restantes y explica cada uno con un ejemplo concreto.

### 2. Diferencias por país: México vs. Colombia

Para cada uno de los dos países de entrada, dame el contexto de marketing clave:

**México**
- Tamaño del mercado de pymes y penetración de software de gestión
- Canales digitales más usados por pymes (¿LinkedIn funciona? ¿Hay alternativas locales?)
- Tono de comunicación: ¿formal o informal? ¿Cómo me dirijo a un dueño de pyme mexicano?
- El papel de la confianza y las referencias personales en el proceso de compra
- Plataformas de pagos locales que debo soportar (Clip, OXXO Pay, SPEI)

**Colombia**
- Diferencias respecto a México en comportamiento del comprador
- El papel de las asociaciones empresariales y gremios como canal de distribución
- Ciudades que priorizo (Bogotá primero, ¿cuándo Medellín y Cali?)
- Sensibilidad al precio y comparación con alternativas locales

### 3. El papel de WhatsApp en el marketing B2B de LATAM

WhatsApp es el canal de comunicación principal en LATAM, incluyendo B2B. ¿Cómo integro WhatsApp en mi estrategia de marketing y ventas?
- WhatsApp Business API: cuándo vale la pena la integración técnica
- Secuencias de nurturing por WhatsApp (sin ser invasivo)
- WhatsApp como canal de soporte vs. canal de ventas
- Las diferencias entre México y Colombia en el uso de WhatsApp para negocios

### 4. Contenido y tono: cómo adaptar el copy

Dame ejemplos concretos de cómo adapto el mismo mensaje de marketing para los distintos mercados:

**Mensaje original (España)**: "Optimiza la gestión de tu empresa con nuestra plataforma intuitiva"

**Adaptación México**: [dame el copy adaptado con el tono correcto]
**Adaptación Colombia**: [dame el copy adaptado con el tono correcto]

¿Qué palabras o expresiones evito en cada país? ¿Qué expresiones funcionan bien localmente?

### 5. Estrategia de canales con presupuesto limitado

Con 80.000€/año para dos países, ¿cómo distribuyo el presupuesto?

| Canal | México (€/año) | Colombia (€/año) | Por qué este % |
|-------|---------------|-----------------|----------------|
| Google Ads | | | |
| Meta (Facebook/Instagram) | | | |
| LinkedIn | | | |
| Contenido / SEO local | | | |
| Alianzas y partnerships | | | |
| Eventos y ferias | | | |

### 6. Partnerships y canales indirectos en LATAM

En LATAM, las alianzas locales son a menudo más eficientes que el marketing directo para una empresa europea que llega nueva. ¿Con qué tipo de socios debo hablar?
- Contadores y asesores fiscales (los consejeros de confianza de las pymes)
- Cámaras de comercio y asociaciones empresariales
- Otros SaaS no competidores con la misma base de clientes
- Distribuidores tecnológicos locales

### 7. Medir el CAC en un mercado nuevo sin histórico

¿Cómo establezco benchmarks de CAC y LTV para LATAM cuando no tengo datos propios? ¿Qué fuentes de datos uso y cómo calibro los objetivos con el CEO?

Responde en español neutro con sensibilidad a las diferencias regionales. Ejemplos concretos, copy real y datos de mercado cuando estén disponibles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Guía de marketing para la expansión a México y Colombia: diferencias culturales, WhatsApp B2B y distribución de presupuesto.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de apps para mercados hispanohablantes',
                'description'      => 'Localización técnica, pasarelas de pago locales (Mercado Pago, OXXO Pay) e infraestructura para LATAM.',
                'prompt_content'   => <<<'PROMPT'
Eres un desarrollador senior con experiencia en lanzar productos digitales en mercados latinoamericanos. Soy tech lead de una startup española que va a lanzar su app de ecommerce en México y Argentina. La app existe y funciona bien en España. Necesito adaptar la arquitectura y el código para los mercados de LATAM. Guíame con un plan técnico completo.

## Mi contexto

- Stack: React Native (iOS y Android) + API en Node.js/Express + PostgreSQL en AWS (región eu-west-1 actualmente).
- La app permite a consumidores comprar en tiendas locales con entrega en el día.
- En España usamos Stripe para pagos. En LATAM Stripe tiene soporte limitado.
- Experiencia con infraestructura en AWS pero nunca hemos operado en regiones de LATAM.
- Objetivo: lanzar en Ciudad de México en 4 meses y en Buenos Aires en 6 meses.

## Lo que necesito

### 1. Infraestructura AWS para LATAM: migración o multi-región

¿Debo mover toda la infraestructura a una región de LATAM o usar multi-región? Dame el análisis:

| Opción | Latencia para LATAM | Complejidad operativa | Coste estimado extra |
|--------|--------------------|-----------------------|---------------------|
| Solo eu-west-1 (no cambio) | ~180ms desde México | Baja | 0 |
| Solo sa-east-1 (São Paulo) | ~30ms desde Argentina, ~70ms desde México | Media | +20–30% |
| Multi-región (eu-west-1 + sa-east-1) | < 50ms en todos | Alta | +50–60% |
| CDN + CloudFront en LATAM | Mejor para estáticos | Baja | Mínimo |

¿Cuál recomiendas para nuestro caso y por qué?

### 2. Pasarelas de pago en México: Stripe, Conekta y OXXO

Stripe tiene limitaciones en México. Dame el mapa completo de opciones:

**OXXO Pay**: el pago en efectivo más usado en México. ¿Cómo funciona técnicamente?
- Integración via Conekta o Stripe (sí tiene soporte limitado de OXXO)
- Flujo de pago: el usuario genera referencia → paga en OXXO → confirmación asíncrona
- Gestión de webhooks para confirmación de pago (puede tardar hasta 24h)
- Cómo gestiono el inventario mientras el pago está pendiente

**Conekta**: la pasarela más usada para Mexico.
- Diferencias vs. Stripe en la API
- Comisiones y modelo de precios
- Soporte de tarjetas de débito (muy común en México, más que crédito)
- Meses sin intereses (MSI): cómo implemento esta funcionalidad que los clientes esperan

**SPEI**: transferencia bancaria instantánea en México.
- Cuándo tiene sentido para una app de consumo
- Integración técnica

### 3. Pasarelas de pago en Argentina: Mercado Pago y el control de cambios

Argentina tiene una situación económica compleja. Dame el contexto técnico y financiero:
- **Mercado Pago**: integración técnica, su dominio del mercado argentino, comisiones
- **Control de cambios**: cómo cobro en pesos argentinos y cómo transfiero los fondos a la empresa española
- **Inflation y pricing**: cómo implemento actualizaciones de precio frecuentes sin fricciones para el usuario
- **Cuotas**: los argentinos esperan pagar en cuotas. ¿Cómo implemento esto técnicamente?

### 4. Localización técnica más allá de la traducción

La localización en LATAM va más allá del idioma. ¿Qué cambio técnicamente?

- **Formatos de fecha y hora**: DD/MM/YYYY en Argentina, ¿y en México?
- **Formatos de moneda**: símbolo del peso, separadores decimales y de miles
- **Números de teléfono**: formato E.164 y las diferencias entre países
- **RFC y CUIT**: los equivalentes del NIF para registro de empresas (necesario para facturas)
- **Facturación electrónica**: en México existe el CFDI (factura digital obligatoria). ¿Necesito implementarlo?

### 5. Integración con WhatsApp Business

En LATAM, el soporte y las notificaciones por WhatsApp son esperadas (no opcionales). ¿Cómo integro WhatsApp en la app?
- WhatsApp Business API via Twilio, Meta directamente o agregadores locales
- Notificaciones de pedido por WhatsApp vs. push notification
- Chatbot básico para soporte de primer nivel
- Coste por mensaje y cómo lo controlo

### 6. Performance en redes móviles de LATAM

Las conexiones móviles en LATAM son más lentas y costosas que en España. ¿Cómo optimizo la app?
- Bundle size de React Native: cómo lo reduzco
- Lazy loading de imágenes y contenido pesado
- Modo offline básico para flujos críticos (ver catálogo sin conexión)
- Cómo pruebo la app en condiciones de red de 3G (no solo 4G/5G)

### 7. Compliance legal técnico

¿Qué cambios técnicos requiere el cumplimiento legal en México y Argentina?
- **Privacidad**: LFPDPPP (ley de privacidad mexicana) y ley 25.326 argentina
- **Aviso de privacidad**: obligatorio en México, con requisitos específicos
- **Retención de datos**: cuánto tiempo y dónde (¿pueden estar los datos en AWS eu-west-1?)

Responde en español con código de ejemplo cuando sea útil, especialmente para integraciones de pago. Enfoque técnico y práctico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Guía técnica para lanzar una app en México y Argentina: pasarelas de pago locales, infraestructura AWS y localización.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para diversidad cultural: adapta sin traducir',
                'description'      => 'Adapta el diseño visual para diferentes mercados sin que parezca una traducción literal del original.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño intercultural y localización visual con experiencia en mercados latinoamericanos y europeos. Soy diseñadora de producto en una empresa que va a expandir su app de bienestar mental a México, Colombia y Argentina. El diseño actual es español (de España) y necesito adaptarlo para LATAM. Ayúdame a entender qué cambia y cómo abordarlo.

## Mi contexto

- La app tiene una paleta de colores fría (azules y grises), estética minimalista, tipografía sans-serif neutra.
- El tono visual es serio y clínico (queremos transmitir profesionalismo médico).
- Los ilustraciones representan personas. Ahora son todas de fenotipos europeos.
- El copy de la app está en español de España ("vosotros", "ordenador", expresiones locales).
- En España funciona muy bien con usuarios urbanos de 25–45 años. Queremos el mismo perfil en LATAM.

## Lo que necesito

### 1. Qué cambia en el diseño para LATAM y qué no

Dame el mapa de lo que es universal y lo que es cultural en el diseño:

| Elemento de diseño | ¿Universal o cultural? | Qué cambia para LATAM |
|-------------------|----------------------|----------------------|
| Colores y su significado | Cultural | El amarillo y el verde tienen connotaciones distintas |
| Jerarquía visual (Z-pattern) | Universal | No cambia |
| Tipografía y legibilidad | Parcialmente | Tamaños mínimos pueden subir por condiciones de lectura |
| Ilustraciones de personas | Cultural | Representación de diversidad étnica y estética |
| Iconografía | Parcialmente | Algunos iconos tienen significados distintos |
| Densidad de información | Cultural | LATAM puede tolerar más densidad que el minimalismo europeo |
| Tono del color (saturación) | Cultural | LATAM generalmente prefiere más viveza |

Completa la tabla con 5 elementos más.

### 2. Color: el minimalismo frío funciona en LATAM

Tenemos una paleta fría y minimalista. ¿Funciona en LATAM o necesitamos adaptar?
- La percepción del azul frío en diferentes culturas (¿confianza o frialdad?)
- Cuándo introducir más calidez (¿un acento cálido es suficiente o necesito repensar toda la paleta?)
- El caso específico de una app de salud mental: ¿el minimalismo clínico es apropiado o puede distanciar?
- Ejemplos de apps de salud exitosas en LATAM: ¿qué paleta usan?

### 3. Ilustraciones con diversidad étnica real

Las ilustraciones de personajes europeos son el error más visible en la localización. ¿Cómo lo corrijo?
- El espectro de fenotipos en México, Colombia y Argentina (no son iguales entre sí)
- Cómo diseño ilustraciones que sean inclusivas sin caer en estereotipos
- Si uso un estilo abstracto o ilustrativo, ¿necesito igual representación de fenotipos?
- Recursos: bibliotecas de ilustraciones con diversidad latinoamericana (Humaaans, Open Peeps, alternativas)
- Cuándo vale la pena comisionar ilustraciones propias vs. adaptar las existentes

### 4. El español de LATAM en el diseño UX

El diseño de texto en la app tiene que cambiar. ¿Cómo gestiono la localización lingüística en el diseño?
- Las 5 diferencias más importantes entre el español de España y el de LATAM para una app de bienestar
- Las palabras que en España son neutras pero en LATAM tienen connotaciones distintas (hay algunas problemáticas)
- Cómo diseño los strings de la app para que sean fácilmente localizables (texto flexible, no fijo en imágenes)
- ¿Creo una versión genérica de "español neutro" o versiones por país?

### 5. Pruebas con usuarios de LATAM

Antes de lanzar, ¿cómo valido que el diseño adaptado funciona realmente?
- Cómo hago pruebas de usabilidad remotas con usuarios mexicanos o colombianos desde España
- Qué pruebo: ¿percepciones culturales o solo usabilidad funcional?
- Los reclutadores de usuarios y plataformas de investigación que operan en LATAM
- Cómo interpreto el feedback cuando hay diferencias culturales en cómo la gente critica (en LATAM es menos directa)

### 6. Diseño de onboarding culturalmente adaptado

El onboarding de una app de salud mental requiere construir confianza. ¿Cambia la estrategia para LATAM?
- El papel de las figuras de autoridad (profesionales de la salud como endorsers)
- La importancia de la comunidad vs. el individuo (LATAM es más colectivista)
- Privacidad: ¿los usuarios de LATAM son más o menos sensibles a compartir datos de salud mental?
- El estigma de la salud mental en LATAM vs. España: ¿cómo lo refleja el diseño?

### 7. Mi proceso de localización visual: paso a paso

Dame un proceso claro para la localización visual de mi app para LATAM:
1. Audit cultural del diseño actual (qué puede ser problemático)
2. Definición de principios de diseño adaptados por mercado
3. Priorización de cambios (qué es imprescindible antes del lanzamiento vs. iterativo)
4. Flujo de revisión con personas locales (no diseñadores, sino usuarios reales)
5. Documentación de las decisiones para el equipo

Responde en español con ejemplos visuales descritos en detalle, referencias a investigación de diseño intercultural y herramientas concretas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Proceso de localización visual de apps para LATAM: color, ilustraciones, lenguaje y pruebas con usuarios.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas en LATAM: diferencias en el proceso comercial',
                'description'      => 'Diferencias en el proceso de venta, la toma de decisiones y las relaciones comerciales en México, Argentina, Colombia y Brasil.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de ventas con más de 15 años de experiencia en mercados latinoamericanos, habiendo liderado equipos en México, Argentina, Colombia y Brasil. Soy VP de ventas de una empresa española de software B2B que va a abrir sus primeras operaciones de ventas en LATAM. Voy a contratar 4 Account Executives (2 en México, 1 en Colombia, 1 en Argentina). Ayúdame a entender qué cambia en el proceso de ventas y cómo adapto el playbook.

## Mi contexto

- Vendemos software de RRHH (nómina, gestión de personal) con ticket medio de 30.000€/año.
- En España el ciclo de venta es de 2–3 meses, 4–5 reuniones, decisión centralizada en RRHH + Finanzas.
- Nunca hemos vendido en LATAM. El playbook de ventas está completamente diseñado para el mercado español.
- Primer objetivo: 20 clientes nuevos en los 3 países en 12 meses.

## Lo que necesito

### 1. Las diferencias culturales que más afectan al proceso de ventas

¿Qué diferencias culturales impactan directamente en el proceso comercial en LATAM vs. España?

| Dimensión cultural | España | México | Colombia | Argentina |
|-------------------|--------|--------|---------|-----------|
| Construcción de confianza (¿antes o durante la venta?) | Durante la demo | Antes: relación personal primero | Antes: referencias y calidez | Durante: demostrar expertise |
| Toma de decisiones (¿quién decide realmente?) | Comité pequeño | Puede haber un "padrino" informal | Jefatura directa + CEO | CEO muchas veces decide solo |
| Formalidad en las reuniones | Media | Alta en primera reunión | Alta | Informal pero directa |
| Tolerancia a la incertidumbre | Media | Baja (necesita seguridad) | Baja | Alta (más risktakers) |
| Actitud ante los precios | Negocia moderadamente | Negocia siempre | Negocia con cortesía | Negocia intensamente |

Completa la tabla con 3 dimensiones más relevantes para ventas B2B.

### 2. México: cómo vendo aquí

El mercado más grande de LATAM para software de RRHH. Dame el playbook específico:

**La importancia del "palancazo"**: en México, las referencias y relaciones personales ("no es lo que sabes sino a quién conoces") son determinantes. ¿Cómo un vendedor nuevo construye la red desde cero?

**El proceso de ventas adaptado**:
- Primera reunión: ¿qué NO hago que haría en España?
- Cómo trato las reuniones de "platicamos" que no tienen agenda definida
- El papel del whatsapp en el seguimiento comercial
- Cómo gestiono el "sí" mexicano que a veces significa "no quiero decirte que no"

**Tomadores de decisión**:
- Quién firma en una empresa mexicana de 200 personas
- El papel del área de compras y las licitaciones
- Cómo navego una empresa familiar (que son mayoría en México)

### 3. Colombia: calidez y process-driven

Colombia tiene un perfil de comprador distinto a México. ¿En qué se diferencia?
- El rol de Bogotá como mercado principal y cuándo expandir a Medellín
- La importancia de los gremios y asociaciones empresariales como canal de entrada
- El comprador colombiano: muy educado, pide mucha información antes de decidir
- Cómo gestiono los largos procesos de evaluación sin perder el momentum

### 4. Argentina: expertise primero, precio siempre

El mercado argentino tiene sus particularidades económicas y culturales:
- La negociación de precio en un país con inflación alta: cómo manejo el pricing
- El comprador argentino: más directo, discute de tú a tú, espera que seas experto
- El ciclo de ventas: ¿más corto o más largo que en México?
- Cómo gestiono el riesgo de impago en un mercado con control de cambios

### 5. El equipo de ventas local: qué busco en un AE para LATAM

¿Es mejor contratar a alguien con experiencia en ventas de software o a alguien con red de contactos en el sector? ¿Qué perfil busco en cada país?

Competencias críticas vs. enseñables para un AE de México vs. Colombia vs. Argentina.

### 6. El playbook adaptado: qué cambio y qué no

Dame una tabla de qué elementos de mi playbook español mantengo igual y cuáles adapto:

| Elemento del playbook | ¿Adaptar para LATAM? | Qué cambio específicamente |
|-----------------------|---------------------|--------------------------|
| Template de email de outreach | Sí | Tono más personal, referencia a la persona que nos presentó |
| Demo de producto (60 min) | Parcialmente | Más tiempo para conversación inicial (15 min vs. 5 min) |
| Propuesta económica | Sí | Adaptar al ciclo presupuestario local (en México: abril-junio) |
| Proceso de negociación | Sí | En México no se puede ser tan directo con descuentos |
| Contrato y términos | Sí | Adaptar a ley local de cada país |

### 7. Métricas y objetivos: ¿son realistas para el primer año?

Con el objetivo de 20 clientes en 12 meses, ¿es realista para un mercado nuevo con un equipo nuevo?
- Benchmarks de tiempo de ramp-up para AEs nuevos en LATAM
- El "impuesto de mercado nuevo": cuánto más lento es el primer año vs. el segundo
- Cómo presento estas expectativas al board sin quedar mal si no se cumplen

Responde en español con anécdotas y ejemplos reales del mercado B2B latinoamericano. Scripts de conversación y ejemplos de email adaptados cuando sea útil.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Playbook de ventas B2B adaptado para México, Colombia y Argentina: cultura, proceso y equipo local.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para mercados emergentes de LATAM',
                'description'      => 'Las particularidades de construir producto para mercados emergentes con alta informalidad y gran diversidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un product manager con experiencia construyendo productos digitales para mercados latinoamericanos en empresas como Rappi, Nubank, Mercado Libre o similares. Soy PM en una fintech española que va a lanzar un producto de pagos y crédito para pymes en México. He construido producto para el mercado español durante 5 años. Ayúdame a entender qué cambia cuando hago product management para LATAM.

## Mi contexto

- Producto: app móvil de pagos B2B y línea de crédito para pequeñas empresas.
- El producto funciona bien en España. Vamos a hacer un "MVP de localización" para México en 6 meses.
- El equipo de producto está en Madrid. No tenemos PM local en México todavía.
- La empresa tiene 15M€ de financiación y una presión alta por lanzar rápido.
- Mi mayor preocupación: construir producto sin entender de verdad al usuario mexicano.

## Lo que necesito

### 1. Los principios del product management para mercados emergentes

¿Qué es diferente fundamentalmente cuando construyes producto para un mercado emergente como México?

| Dimensión | España (desarrollado) | México (emergente) |
|-----------|----------------------|-------------------|
| Infraestructura digital | Banda ancha y 4G extendidos | Conectividad variable, gran base de 3G |
| Bancarización | > 95% | ~ 50% de adultos no bancarizados |
| Confianza en instituciones | Media-alta | Baja (especialmente financiero) |
| Documentación formal | Universal | Alta informalidad (muchas pymes sin papeles) |
| Literacy digital | Alta | Varía mucho (urbano vs. rural, edad) |
| Comportamiento de pago | Tarjeta + transferencia | Efectivo dominante, OXXO, SPEI |

¿Cómo cada una de estas dimensiones impacta en las decisiones de producto que tomo?

### 2. Research de usuario sin salir de Madrid (y por qué es un error)

¿Puedo hacer product discovery para México desde Madrid? Dame la respuesta honesta:
- Por qué el research remoto tiene límites claros para un mercado tan diferente
- Qué puedo hacer de forma remota (entrevistas de Zoom, análisis de datos de apps similares, estudios de mercado)
- Qué NECESITO hacer presencialmente (observación de contexto en tiendas físicas, acompañamiento de usuarios)
- Plataformas de investigación de usuarios que operan en México (UserTesting, Lookback, agencias locales)
- Mi plan mínimo viable de research antes de lanzar

### 3. El usuario de pymes informales: quién es y qué necesita

La mayoría de las pymes mexicanas operan en la informalidad parcial o total. ¿Qué implica esto para el producto?
- Cómo hace pagos una tienda de abarrotes que no tiene RFC ni cuenta bancaria
- Por qué "digitalizar su negocio" puede no ser su objetivo (su objetivo es no perder tiempo)
- El "Jobs to be Done" de una pyme informal en México para pagos y crédito
- Qué información puedo pedir en el onboarding (y qué NO puedo pedir porque no la tienen)

### 4. Construcción de confianza en fintech para LATAM

En México, la desconfianza hacia instituciones financieras es estructural. ¿Cómo diseño un producto que la supere?
- Los elementos de UX que construyen confianza en fintech (explicación de seguridad, transparencia de costes, testimonios locales)
- El papel de la identidad visual local (¿importa si pareces empresa española o parecida a banco local?)
- Onboarding progresivo: pedir poco al principio y más después de ganar confianza
- Cómo las empresas que han tenido éxito en fintech mexicana han construido confianza (Clip, Kueski, Konfio)

### 5. El MVP de localización: qué incluir en 6 meses

Tenemos 6 meses para un MVP. ¿Qué incluyo y qué dejo para después?

**Imprescindible en v1**:
- SPEI y pagos con tarjeta
- OXXO Pay como método de pago recibido (para los clientes de las pymes)
- KYC simplificado adaptado a la regulación de la CNBV
- App con < 20MB de descarga (usuarios con almacenamiento limitado)
- Soporte por WhatsApp (no solo chat in-app)

**Dejar para v2**:
- Crédito (requiere licencia y más confianza establecida)
- Integraciones con contabilidad local (CONTPAQi, Aspel)
- Facturación CFDI (importante pero complejo)

¿Estás de acuerdo con esta priorización? ¿Qué cambiarías?

### 6. Métricas del producto para LATAM

¿Cambian las métricas que uso como PM cuando paso de España a México?
- Retention en mercados de alta rotación de apps
- Activación: cuándo un usuario de pyme "activa" realmente
- El NPS en LATAM (¿es comparable con el de España?)
- Métricas de fraude y riesgo (más relevantes en LATAM)

### 7. Trabajar con el equipo de producto en Madrid para construir para México

¿Cómo trabajo con un equipo en Madrid que no conoce México para tomar buenas decisiones de producto?
- Cómo comparto el contexto de usuario mexicano con ingenieros y diseñadores madrileños
- La importancia de traer al equipo a México (aunque sea una semana) antes de empezar a construir
- Cuándo contratar un PM local en México y qué perfil buscar

Responde en español con ejemplos de empresas de fintech y tecnología latinoamericanas. Frameworks concretos que pueda usar en el discovery y en la priorización.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Guía de product management para mercados emergentes: research sin salir de Madrid, informalidad, confianza y MVP para México.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos remotos en LATAM',
                'description'      => 'Zonas horarias, diferencias culturales, contratos locales y cómo construir cultura en un equipo distribuido por todo el continente.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión de equipos remotos distribuidos en Latinoamérica con experiencia en empresas tecnológicas. Soy directora de RRHH de una empresa española de software que tiene ya 12 empleados en LATAM (4 en México, 3 en Colombia, 2 en Argentina y 3 en Chile) y va a crecer hasta 30 personas en la región en 12 meses. Ayúdame a construir el sistema de gestión para equipos remotos distribuidos en LATAM.

## Mi contexto

- La empresa tiene 80 personas en España y el equipo de LATAM trabaja completamente remoto.
- Los empleados de LATAM sienten que son "ciudadanos de segunda": menos información, menos oportunidades de desarrollo, menor acceso al CEO.
- Tenemos problemas de zonas horarias: España (CET) vs. México (-7h en invierno), Colombia (-5h) y Chile (-4h en verano, -3h en invierno).
- Los contratos de los empleados de LATAM son un caos: algunos son proveedores freelance, otros tienen contratos locales directos, y no hay consistencia.
- Queremos crecer pero primero necesitamos ordenar lo que tenemos.

## Lo que necesito

### 1. Estructura legal para contratar en LATAM: opciones y riesgos

Las opciones para contratar empleados en LATAM siendo una empresa española:

| Opción | Cómo funciona | Pros | Contras | Cuándo usar |
|--------|--------------|------|---------|-------------|
| Freelance / autónomo local | Contrato de servicios | Flexibilidad, bajo coste inicial | Riesgo de relación laboral, sin beneficios | Proyectos puntuales, < 6 meses |
| Employer of Record (EOR) | Empresa intermediaria (Remote, Deel, Oyster) | Compliance legal inmediato | Coste: 300–800€/mes por empleado | Primeras contrataciones en un país |
| Entidad propia local | Constituir SAS en Colombia, SA de CV en México | Control total, ahorro a escala | Coste y tiempo de constitución | Cuando tienes > 8–10 empleados en un país |

¿Qué recomiendo para nuestra situación actual (12 empleados en 4 países)?

### 2. Regularizar la situación actual: el plan de transición

Tenemos un caos contractual. ¿Cómo lo regularizo sin crear problemas laborales?
- Auditoría de la situación actual: qué tipo de relación tenemos con cada persona
- Riesgo de que los "freelancers" sean considerados empleados: criterios de la legislación en México, Colombia, Argentina y Chile
- Cómo comunico al empleado que vamos a cambiar su estructura contractual (sin que piense que le vamos a echar)
- Plazos realistas para la regularización

### 3. Zonas horarias: cómo las gestiono sin agotar a nadie

Con España (CET) y equipos en América (UTC-3 a UTC-7), ¿cómo organizo el trabajo?

Ventana de solapamiento:
- España 9h–18h CET
- México City: 2h–11h CST (en invierno solo 11h–13h CET de solapamiento)
- Colombia: 3h–12h COT (11h–18h CET de solapamiento = 7h útiles)
- Chile: 4h–13h CLT (12h–18h CET en verano = 6h útiles)

Estrategia recomendada:
- Qué reuniones son obligatorias en la ventana de solapamiento
- Qué trabajo es completamente asíncrono (y cómo lo organizo)
- Política de horario para empleados de LATAM: ¿adaptamos sus horas o las nuestras?
- Cómo evito que las personas de México (con menos solapamiento) se sientan excluidas

### 4. Cultura inclusiva para el equipo de LATAM

Los empleados de LATAM sienten que son "ciudadanos de segunda". ¿Cómo lo soluciono?
- Cómo aseguro que tienen el mismo acceso a información que el equipo de España
- Visibilidad con el CEO y el liderazgo: cómo creo oportunidades iguales
- Oportunidades de desarrollo: cómo hago que los de LATAM también puedan ser promovidos
- El riesgo de la "colonia": cuando LATAM hace el trabajo operativo y España hace el estratégico

### 5. Onboarding de empleados remotos en LATAM

El onboarding de un empleado nuevo en Bogotá es completamente diferente al de alguien en la oficina de Madrid. ¿Cómo lo diseño?
- La semana de onboarding asíncrono: qué aprenden y en qué orden
- La semana en Madrid: ¿es imprescindible? ¿Para todos o solo para ciertos roles?
- El buddy program: ¿asigno un buddy de España o de LATAM?
- Cómo mido si el onboarding ha funcionado (30-60-90 días)

### 6. Compensación en LATAM: cómo equiparo sin pagar mal ni pagar de más

¿Cómo estructuro la compensación para empleados en distintos países de LATAM?
- Benchmarks salariales para roles tecnológicos en México, Colombia, Argentina y Chile
- ¿En qué moneda pago? ¿Dólares o moneda local? (Especialmente importante en Argentina)
- Beneficios: qué ofrezco más allá del salario (seguro médico, pensión, extras)
- Cómo gestiono los ajustes por inflación en Argentina

### 7. Las herramientas de gestión remota para equipos de LATAM

¿Hay herramientas o enfoques específicos para equipos distribuidos en LATAM?
- Notion vs. Confluence para documentación asíncrona
- Slack con gestión de zonas horarias
- Loom para comunicación asíncrona con contexto
- Políticas de "no reunión" para el equipo de México

Responde en español con ejemplos concretos, referencias a plataformas de EOR que operan en LATAM y benchmarks de compensación actuales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de gestión para equipos remotos distribuidos en LATAM: contratos, zonas horarias, cultura inclusiva y compensación.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Expansión financiera a LATAM: entidades, bancos y fiscalidad',
                'description'      => 'Apertura de entidades, cuentas bancarias, control de cambios y las complejidades fiscales de operar en varios países de LATAM.',
                'prompt_content'   => <<<'PROMPT'
Eres un CFO con experiencia en expansión internacional de empresas tecnológicas a Latinoamérica. Soy CFO de una empresa española de software con 12M€ de facturación que va a abrir operaciones comerciales en México y Colombia. Hasta ahora hemos vendido desde España con contratos en euros. Ahora necesitamos presencia local. Ayúdame a estructurar la expansión financiera de forma eficiente.

## Mi contexto

- Facturamos 12M€ desde España. El 8% ya son clientes de LATAM que pagan en euros desde España.
- Quiero abrir entidades legales en México y Colombia para poder contratar localmente, facturar en moneda local y tener cuentas bancarias locales.
- El mayor problema que anticipamos: la burocracia bancaria en LATAM (nos han dicho que abrir una cuenta bancaria puede tardar meses).
- Mi CFO anterior me advirtió que México tiene una carga fiscal compleja para empresas extranjeras. No sé si eso sigue siendo así.
- Objetivo: tener las estructuras funcionando en 6 meses.

## Lo que necesito

### 1. La estructura legal óptima para operar en México y Colombia

Opciones para estructurar la presencia legal en cada país:

**México**
- S.A. de C.V. vs. S. de R.L. de C.V.: ¿cuál es mejor para una empresa tecnológica extranjera?
- Tiempo y coste estimado de constitución
- Requisitos para socios extranjeros (¿necesito socios mexicanos o puede ser 100% española?)
- El Registro Nacional de Inversiones Extranjeras (RNIE): qué es y cuándo es obligatorio
- Alternativa: filial vs. sucursal vs. representante comercial

**Colombia**
- SAS (Sociedad por Acciones Simplificada): la forma más recomendada para empresas extranjeras
- Tiempo y coste de constitución en Colombia vs. México
- Registro de inversión extranjera ante el Banco de la República
- ¿Puedo operar en Colombia con un representante legal remoto desde España?

### 2. La pesadilla bancaria en LATAM: cómo abrir cuentas

Nos han advertido que abrir cuentas bancarias en LATAM para empresas extranjeras es muy difícil. ¿Cuál es la realidad?

**México**
- Qué bancos abren cuentas para empresas con accionistas extranjeros (BBVA México, Santander México, Banamex)
- Documentación típica requerida (apostillas, traducciones, KYC de la matriz)
- Tiempo real de apertura: ¿semanas o meses?
- Alternativa de neobancos para empresas en México (Cuenca Business, Kapital, Konfio)

**Colombia**
- Bancolombia, Davivienda vs. neobancos para empresas (Nequi Business, Bling)
- El problema del certificado de existencia y representación legal reciente
- Cuánto tarda la apertura una vez tengo todos los documentos

**Solución mientras se abre la cuenta**: ¿cómo cobro en los primeros meses? ¿Stripe en LATAM, Deel para pagos de empleados, otros?

### 3. Fiscalidad en México: lo que me advirtieron

El sistema fiscal mexicano (SAT) es conocido por su complejidad. ¿Qué debo saber como CFO?
- IVA en México: tipo general y excepciones para software SaaS
- ISR (Impuesto Sobre la Renta) para empresas: tipo y cómo funciona
- El régimen de facturación CFDI: la factura electrónica obligatoria en México
- Retención en la fuente por pagos a la empresa española desde México
- El riesgo de establecimiento permanente: ¿cuándo se considera que la empresa española tiene EP en México?

### 4. Fiscalidad en Colombia: más simple que México

Colombia tiene un sistema fiscal distinto. ¿Qué debo vigilar?
- IVA en Colombia para servicios digitales importados (la regla del "IVA digital")
- Impuesto de Industria y Comercio (ICA): el impuesto municipal que sorprende a todos
- Retenciones en la fuente: cómo funcionan en Colombia y qué impacta en el flujo de caja
- El precio de transferencia entre la matriz española y la filial colombiana

### 5. Control de cambios y repatriación de fondos

¿Cómo muevo el dinero desde México y Colombia hacia España?
- México: no tiene control de cambios formal, pero el SPEI internacional tiene límites
- Colombia: el Banco de la República controla los flujos internacionales de capital
- Argentina (si llegamos): el control de cambios es el mayor riesgo operativo (no entrar por ahora)
- ¿Cómo estructuro los royalties o service fees de la matriz española para minimizar retenciones?

### 6. El transfer pricing: precios de transferencia entre entidades

Cuando la filial mexicana pague servicios a la matriz española, ¿cómo determino el precio de transferencia para cumplir con las normas y no pagar de más en impuestos?
- El principio de arm's length y cómo lo aplico
- Métodos de precio de transferencia más usados para servicios intragrupo
- Documentación que debo mantener para una inspección fiscal

### 7. El timeline y el presupuesto para la expansión financiera

Dame un plan realista de 6 meses con hitos y costes estimados:

| Mes | Hito México | Hito Colombia | Coste estimado |
|-----|-------------|---------------|----------------|
| 1 | Elección de asesor local + inicio de constitución | Mismo | 5.000–8.000€ asesores |
| 2 | Constitución completada + RFC obtenido | Constitución completada + NIT | 3.000–5.000€ notaría y registro |
| 3 | Solicitud de cuenta bancaria | Solicitud de cuenta bancaria | 0 |
| 4–5 | Cuenta bancaria operativa | Cuenta bancaria operativa | 0 |
| 6 | Primeras nóminas y facturas locales | Primeras nóminas y facturas locales | Coste recurrente de gestión |

¿Es este timeline realista? ¿Qué puede retrasarse y qué hago si se retrasa?

Responde en español con datos actualizados sobre regulación fiscal en México y Colombia. Incluye nombres de asesores o despachos de referencia si los conoces.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Guía del CFO para la expansión financiera y legal a México y Colombia: entidades, bancos, IVA y transfer pricing.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para operar en LATAM desde España',
                'description'      => 'Las diferencias regulatorias más importantes entre países y cómo estructurar la operación legal de forma eficiente.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en derecho mercantil internacional con experiencia en expansión de empresas europeas a Latinoamérica. Soy directora jurídica de una empresa española de tecnología que va a iniciar operaciones en México, Colombia y Chile. Nunca hemos operado fuera de la UE. Ayúdame a construir el marco legal para la expansión a LATAM.

## Mi contexto

- Empresa de software B2B (SaaS de gestión empresarial), facturación de 15M€, 120 empleados.
- Queremos vender a empresas locales en los tres países, contratar equipos locales pequeños (3–5 personas por país) y facturar en moneda local.
- Actualmente firmamos contratos desde España con ley española. Esto va a cambiar.
- Los mayores miedos: incumplimiento regulatorio sin saberlo, riesgo laboral por contratos mal hechos y problemas de IP (que el código del producto quede registrado a nombre de empleados locales).
- Presupuesto legal para la expansión: 60.000€ el primer año.

## Lo que necesito

### 1. Las diferencias legales más importantes por país

Dame una comparativa legal de los tres países en los aspectos más relevantes para nuestra empresa:

| Aspecto legal | México | Colombia | Chile |
|---------------|--------|---------|-------|
| Forma societaria recomendada para empresa extranjera | S. de R.L. de C.V. o S.A. de C.V. | SAS | SpA (Sociedad por Acciones) |
| Tiempo de constitución | 4–8 semanas | 2–3 semanas (más ágil) | 2–4 semanas |
| Necesidad de socio local | No (100% extranjero posible) | No | No |
| Régimen laboral: tipo de contrato | Contrato individual de trabajo (LFT) | Contrato laboral (CST) | Contrato de trabajo indefinido |
| Periodo de prueba | 30 días (México) | 2 meses | No existe formalmente |
| Propiedad intelectual por empleados | La IP es de la empresa si está en el contrato | Igual | Igual |

Completa la tabla con 5 aspectos más: privacidad de datos, protección del consumidor, arbitraje de contratos comerciales, plazo de preaviso de despido, indemnización por despido.

### 2. Contratos laborales: los riesgos que no veo venir

En LATAM los contratos laborales tienen particularidades que pueden ser costosas si las ignoro:

**México (Ley Federal del Trabajo)**
- La liquidación en México (90 días de salario + 20 días por año): el coste de despedir es más alto que en España
- La participación de los trabajadores en las utilidades (PTU): el 10% de la utilidad fiscal se reparte entre empleados
- El IMSS (seguridad social): porcentajes de cotización y quién los paga
- Las NOM-035: la norma de factores de riesgo psicosocial que debo cumplir

**Colombia (Código Sustantivo del Trabajo)**
- El auxilio de cesantías: provisión del 8.33% del salario mensual
- Las primas semestrales: equivalente a 15 días de salario dos veces al año
- La jornada laboral en Colombia: cambios recientes (reducción progresiva de la jornada hasta 42h en 2026)

**Chile (Código del Trabajo)**
- El finiquito: cómo funciona y cuándo es negociable
- La AFP (pensiones privadas): el empleador no cotiza en pensiones, solo el empleado

### 3. Contratos con clientes: qué ley aplica y dónde litigamos

Cuando firmo un contrato con un cliente mexicano, colombiano o chileno, ¿qué ley rige el contrato?
- ¿Puedo mantener la ley española y los tribunales de Madrid en todos mis contratos?
- Cuándo un cliente local va a insistir en ley local (B2B con empresas grandes)
- El arbitraje internacional como alternativa (CIADI, CAM, ICC): cuándo tiene sentido incluir una cláusula arbitral
- Las diferencias en responsabilidad por defectos del software (warranty y limitation of liability) en cada jurisdicción

### 4. Propiedad intelectual: proteger el código y la marca en LATAM

¿Cómo protejo la propiedad intelectual de la empresa en los tres países?
- Registro de marca: ¿lo hago país por país o hay registros regionales (OAPI, OEPM no cubre LATAM)?
- Propiedad del código fuente: qué debe decir el contrato de trabajo para que la IP sea de la empresa
- NDA y acuerdos de confidencialidad: ¿son ejecutables en México, Colombia y Chile?
- El riesgo del "work made for hire" vs. cesión expresa de derechos

### 5. Privacidad de datos en LATAM: el RGPD no aplica (¿o sí?)

El RGPD se aplica a datos de ciudadanos europeos, no a los latinoamericanos. ¿Qué legislación de privacidad debo cumplir?

| País | Ley de privacidad | Autoridad de control | Similitud con RGPD |
|------|------------------|---------------------|-------------------|
| México | LFPDPPP (2010) | INAI | Media |
| Colombia | Ley 1581 de 2012 | SIC | Alta |
| Chile | Ley 19.628 (en revisión, nueva ley en tramitación) | Autoridad en creación | Media-alta |

¿Qué cambios técnicos o contractuales requiero para cumplir con estas leyes además del RGPD?

### 6. El presupuesto legal de 60.000€: cómo lo distribuyo

Con 60.000€ para el primer año de expansión legal en tres países, ¿cómo lo asigno?

| Concepto | Coste estimado | Prioritario |
|---------|---------------|-------------|
| Constitución de entidades (3 países) | 12.000–18.000€ | Sí |
| Contratos de trabajo adaptados por país | 6.000–9.000€ | Sí |
| Templates de contratos con clientes (por país) | 4.000–6.000€ | Sí |
| Registro de marcas (3 países) | 3.000–5.000€ | Medio |
| Asesoría laboral recurrente | 12.000–18.000€/año | Sí |
| Contingencia | 10.000€ | Reserva |

¿Debo contratar un despacho con presencia en los tres países o despachos locales en cada uno?

### 7. La red de asesores locales: cómo la construyo

¿Cómo encuentro abogados de confianza en México, Colombia y Chile sin conocer el mercado? ¿Qué criterios uso para elegirlos? ¿Cómo gestiono la relación desde Madrid?

Responde en español con referencias a las leyes específicas (artículos cuando sea relevante) y con ejemplos de situaciones reales que las empresas extranjeras encuentran al operar en LATAM.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marco legal para operar en México, Colombia y Chile: entidades, contratos laborales, IP y privacidad de datos.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte en español para LATAM: tono y expectativas',
                'description'      => 'Diferencias de lenguaje, tono y expectativas entre España y los mercados latinoamericanos en el soporte al cliente.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en experiencia de cliente y operaciones de soporte para mercados de habla hispana. Soy responsable de Customer Success en una empresa de software española que está expandiendo su base de clientes a México, Colombia y Argentina. Actualmente nuestro equipo de soporte está en Madrid y atiende clientes en español de España. Ayúdame a adaptar el servicio de soporte para los nuevos mercados de LATAM.

## Mi contexto

- Equipo de soporte actual: 8 personas en Madrid, atención en horario CET (8h–20h).
- Los clientes de LATAM representarán el 30% de la base en 12 meses (actualmente son el 5%).
- Hemos recibido ya algunas quejas de clientes mexicanos sobre el tono "demasiado frío" de nuestros agentes.
- No tenemos ningún agente con experiencia en LATAM.
- El SLA actual: respuesta en < 4h para tickets urgentes, < 24h para el resto.

## Lo que necesito

### 1. Las diferencias de comunicación que más importan en soporte

¿Cuáles son las diferencias más importantes entre atender a un cliente español y a un cliente de LATAM?

| Dimensión | España | México | Colombia | Argentina |
|-----------|--------|--------|---------|-----------|
| Tratamiento formal | "Usted" en contextos formales, "tú" rápidamente | "Usted" siempre en primera interacción | "Usted" en negocios, "tú" después de confianza | "Vos" o "usted" según contexto |
| Tono esperado | Profesional y directo | Amable, paciencia con el proceso | Muy cálido, saludos extensos | Directo, puede parecer brusco |
| Expresión de frustración del cliente | Directa | Indirecta (raramente confrontacional) | Amable pero insistente | Muy directa, puede ser agresiva |
| Expectativa de respuesta emocional del agente | Neutral | Empática | Muy empática | Resolutiva |
| Uso del humor en soporte | Ocasional | Nunca en soporte formal | Raramente | A veces, si el cliente lo inicia |

### 2. El vocabulario que cambia por país

En soporte técnico, muchas palabras tienen equivalentes distintos en cada variante del español:

| Término en España | México | Colombia | Argentina |
|-------------------|--------|---------|-----------|
| Ordenador | Computadora | Computador | Computadora |
| Móvil | Celular | Celular | Celular |
| Aplicación | App o aplicación | Aplicación | Aplicación |
| Contraseña | Contraseña o password | Clave | Clave o contraseña |
| Inicio de sesión | Inicio de sesión / login | Ingreso al sistema | Ingresar al sistema |

Dame 10 términos más de soporte técnico de software que cambian entre España y LATAM.

### 3. Templates de respuesta adaptados por mercado

Dame ejemplos de la misma respuesta de soporte adaptada para cada mercado:

**Situación**: El cliente no puede iniciar sesión. El problema es que su contraseña expiró.

**Respuesta para España** (tono actual que tenemos):
"Buenos días. Te indicamos que tu contraseña ha caducado. Puedes restablecerla desde el enlace de 'Olvidé mi contraseña' en la pantalla de acceso. Si tienes más dudas, contáctanos."

**Respuesta adaptada para México**: [adapta el tono, el vocabulario y el tratamiento]
**Respuesta adaptada para Colombia**: [adapta el tono con la calidez colombiana]
**Respuesta adaptada para Argentina**: [adapta el tono más directo y el vocabulario]

### 4. Gestión de clientes difíciles en LATAM

¿Cómo gestiono un cliente enfadado en cada mercado? Las escaladas tienen dinámicas distintas:

**Cliente mexicano frustrado**:
- Rara vez expresa el enfado directamente. Puede decir "está bien" cuando no lo está.
- Cómo detecto que está insatisfecho aunque no lo diga explícitamente
- Cómo reconducir la conversación

**Cliente argentino frustrado**:
- Muy directo sobre su descontento. Puede parecer agresivo al equipo español.
- Cómo el equipo de soporte interpreta el tono sin defensividad
- Scripts para desescalar sin rendirse ante exigencias irrazonables

**Cliente colombiano frustrado**:
- Muy educado incluso cuando está muy enfadado. El "no" viene disfrazado de cortesía.
- Cómo interpreto señales de insatisfacción profunda en un tono siempre amable

### 5. El horario de soporte para LATAM: el problema de las zonas horarias

Con el equipo en Madrid (CET) y clientes en México (UTC-6), Colombia (UTC-5) y Argentina (UTC-3):
- Ventana de solapamiento real para atención sincrónica
- Qué hacer cuando un cliente de México escribe a las 9am local (que son las 4pm en Madrid)
- Opciones: extender turno en Madrid, contratar agente en LATAM o chatbot para fuera de hora
- Mi recomendación para el primer año con presupuesto limitado

### 6. Formación del equipo de Madrid para atender LATAM

¿Cómo formo a mi equipo de 8 personas en Madrid para que sean efectivos con clientes de LATAM?
- Módulo de conciencia cultural: duración, qué incluir, cómo hacerlo práctico
- Roleplay de situaciones difíciles por mercado
- Cómo doy feedback a un agente cuyo tono está fallando con clientes mexicanos
- Recursos (libros, cursos, contenido) para el equipo

### 7. Métricas de soporte para LATAM: ¿las mismas que para España?

¿Debo tener KPIs diferenciados para clientes de LATAM?
- CSAT: ¿es comparable entre mercados? (Los colombianos tienden a dar puntuaciones más altas por educación)
- NPS: las diferencias culturales en la interpretación de escalas numéricas
- FRT y resolución: ¿debo ajustar los SLAs para compensar las zonas horarias?

Responde en español con ejemplos de conversaciones reales y scripts que mi equipo pueda usar directamente. Incluye los errores más comunes de equipos españoles atendiendo a clientes de LATAM.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Adaptación del soporte al cliente en español para México, Colombia y Argentina: tono, vocabulario, templates y formación del equipo.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en LATAM: prosperar como profesional independiente hispanohablante',
                'description'      => 'Cómo competir y prosperar como profesional independiente en mercados con alta demanda de talento digital hispanohablante.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach de negocio independiente especializado en freelancers y profesionales independientes del mundo digital hispanohablante. Soy diseñadora UX con 5 años de experiencia y vivo en Bogotá, Colombia. Trabajo principalmente con clientes locales colombianos y gano el equivalente a 1.200 USD/mes. Quiero llegar a 3.000 USD/mes en 12 meses. Ayúdame a construir el plan.

## Mi contexto

- Clientes actuales: startups colombianas y agencias de publicidad que me subcontratan.
- Cobro en pesos colombianos. La variabilidad del tipo de cambio me afecta.
- Tengo capacidad para trabajar con clientes de México, España y Estados Unidos (en inglés básico-intermedio).
- El mayor bloqueo percibido: no sé cómo llegar a clientes internacionales y tengo miedo de cobrar en USD y que me pidan más de lo que puedo dar.
- Tengo un portfolio de 12 proyectos pero no está bien presentado.

## Lo que necesito

### 1. El mercado freelance para talento digital latinoamericano

¿Cuál es la oportunidad real para un freelance de UX en Bogotá que quiere ganar 3.000 USD/mes?

| Mercado | Tarifa media UX (USD/hora) | Competencia | Barrera de entrada | Mi oportunidad |
|---------|--------------------------|-------------|-------------------|----------------|
| Colombia (local) | 15–25 USD | Alta (muchos locales) | Baja | Limitada para subir tarifa |
| México | 25–45 USD | Media | Baja (mismo idioma) | Alta |
| España | 35–55 USD | Media | Baja (mismo idioma) | Alta |
| Estados Unidos | 60–120 USD | Alta pero segmentada | Media (inglés) | Media si me especializo |
| Europa anglófona | 50–90 USD | Alta | Alta (inglés avanzado) | Baja por ahora |

¿En qué mercado me enfoco primero para llegar a 3.000 USD/mes?

### 2. El modelo financiero del freelance a 3.000 USD/mes

Para llegar a 3.000 USD/mes, ¿cuántas horas facturables necesito a qué tarifa?

| Escenario | Tarifa USD/hora | Horas facturables/mes | Ingresos brutos |
|-----------|----------------|----------------------|-----------------|
| Solo Colombia | 20 USD | 150h | 3.000 USD |
| Mix Colombia + México | 30 USD | 100h | 3.000 USD |
| Mix México + España | 40 USD | 75h | 3.000 USD |

¿Cuál es el camino más realista en 12 meses desde mi situación actual?

### 3. Cobrar en USD desde Colombia: cómo funciona

Cobrar en dólares desde Colombia tiene particularidades que debo entender:
- Cuentas en USD: Wise, Payoneer, Mercury (para recibir pagos internacionales sin comisiones excesivas)
- Declaración de divisas ante el Banco de la República: ¿cuándo es obligatorio?
- Impuestos: ¿pago IVA por servicios prestados a clientes en México o España?
- El régimen de "exportación de servicios" en Colombia: cuándo mis servicios están exentos de IVA

### 4. Cómo llego a clientes en México y España

Los clientes en México y España no me van a encontrar solos. ¿Cómo los busco activamente?

**Para México**:
- LinkedIn: cómo hago outreach a startups mexicanas que buscan UX (búsqueda de responsables de producto en CDMX, Monterrey, Guadalajara)
- Comunidades: Slack de Product Hunt LATAM, UX Latam, grupos de Facebook de diseño en México
- Plataformas: Workana vs. Toptal vs. Contra para perfiles de LATAM
- La estrategia del "precio de entrada": ¿bajo el precio para el primer cliente mexicano?

**Para España**:
- Las diferencias en cómo los clientes españoles contratan freelancers de LATAM
- ¿Les preocupa la zona horaria? ¿Y la diferencia cultural?
- LinkedIn Jobs en España: cómo aparezco en búsquedas aunque esté en Colombia
- Comunidades de producto y diseño en España (Meetup de Product Management Spain, Comunidad de Diseño UX)

### 5. Mi portfolio: de genérico a especializado

Tengo 12 proyectos en el portfolio pero no están bien presentados. ¿Cómo lo rehago para atraer clientes internacionales?
- Los 3 proyectos que selecciono (criterios de selección para impactar a un cliente internacional)
- La estructura de un case study que vende: problema → proceso → resultado (con métricas)
- Dónde lo publico: Behance, Dribbble, portfolio propio, LinkedIn articles
- El error más común: mostrar el resultado visual sin explicar el proceso de pensamiento

### 6. La propuesta que cierra clientes internacionales

¿Cómo escribo una propuesta para un cliente en México o España que nunca ha contratado a nadie de Colombia?
- Cómo abordo la pregunta no formulada: "¿Por qué contratar a alguien en Colombia?"
- El precio: ¿cotizo igual que un freelance local o con descuento?
- Las garantías y condiciones que reducen el riesgo percibido del cliente
- Template de propuesta en 5 secciones que convierte

### 7. Gestión del tiempo y energía para escalar sin quemarte

Para pasar de 1.200 a 3.000 USD/mes voy a tener que trabajar más O cobrar más por hora. La segunda es mejor. ¿Cómo gestiono la transición sin agotarme?
- Cuántas horas dedico al negocio (ventas, portfolio, desarrollo) vs. al trabajo de cliente
- Cómo gestiono la incertidumbre de ingresos variable mientras construyo la cartera internacional
- El "cliente mínimo viable": cuánto tiempo guardo siempre para clientes colombianos como red de seguridad

Responde en español con ejemplos concretos del mercado de talento digital en LATAM. Incluye datos de tarifas actuales, plataformas que realmente usan los freelancers de la región y scripts de outreach que pueda probar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Plan para triplicar ingresos como freelance UX en Colombia: mercados internacionales, cobro en USD, portfolio y propuestas.',
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
