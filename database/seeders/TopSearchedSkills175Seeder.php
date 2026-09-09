<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills175Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Negociación con agencias y proveedores de marketing',
                'description'      => 'Negocia contratos con agencias de publicidad, herramientas de marketing y medios. Los términos que importan, los errores que cuestan caro y las cláusulas de rendimiento que alinean incentivos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing con más de 15 años de experiencia negociando contratos con agencias de publicidad, plataformas tecnológicas y proveedores de medios. Voy a negociar un contrato con [TIPO DE PROVEEDOR: agencia creativa / agencia de medios / plataforma de automatización / proveedor de datos / medio de comunicación] y necesito tu ayuda para preparar la negociación completa.

**Contexto de la negociación:**
- Empresa compradora: [describe tu empresa, sector, tamaño]
- Proveedor objetivo: [nombre o tipo de proveedor]
- Presupuesto anual estimado: [importe en euros o rango]
- Duración del contrato que proponen: [meses/años]
- Servicios incluidos: [describe qué van a prestar]
- Fecha límite para cerrar el acuerdo: [fecha]

**Fase 1 — Análisis de la propuesta recibida**

Revisa la propuesta que me han enviado y señala:

1. **Términos financieros que debo cuestionar**: precios fuera de mercado, fees ocultos, incrementos automáticos de precio, cláusulas de indexación sin cap, costes de setup o onboarding inflados, y cualquier coste variable que pueda dispararse.

2. **Cláusulas de salida que debo mejorar**: penalizaciones por cancelación anticipada excesivas, períodos de preaviso desproporcionados, condiciones de renovación automática que me encierran, y la ausencia de cláusulas de salida por bajo rendimiento.

3. **Ausencias que me perjudican**: lo que no está en el contrato y debería estar, incluyendo SLAs, penalizaciones por incumplimiento, propiedad de los activos creativos, portabilidad de datos y derechos de auditoría.

**Fase 2 — Estrategia de negociación**

Diseña una estrategia con estos elementos:

- **Jerarquía de concesiones**: qué puedo ceder sin impacto real (términos de pago, volumen mínimo garantizado en servicios adicionales, co-marketing, testimonial) versus qué no puedo mover (propiedad creativa, SLAs mínimos, cláusula de salida por rendimiento).

- **Ancla inicial recomendada**: qué posición debo abrir en cada término principal (precio, duración, penalizaciones) para tener margen de maniobra sin perder credibilidad.

- **BATNA (mejor alternativa)**: cómo construir y comunicar que tengo alternativas reales, incluso si estoy muy orientado a cerrar con este proveedor.

- **Técnicas específicas para cada tipo de proveedor**: las agencias grandes tienen márgenes en los costes de producción; los proveedores de tecnología tienen descuentos por volumen o por commit anual; los medios tienen inventario no vendido que pueden ofrecer con descuento; explícame las palancas específicas de mi caso.

**Fase 3 — Cláusulas de rendimiento que debo incluir**

Redacta o evalúa las siguientes cláusulas:

1. **KPI Agreement**: define los indicadores de rendimiento con sus valores mínimos aceptables, la cadencia de revisión y el mecanismo de escalada cuando no se alcanzan.

2. **Cláusula de malus/bonus**: estructura un sistema donde el fee variable suba si superan objetivos y baje si los incumplen, incluyendo el floor mínimo que protege a la agencia para que no opere en pérdidas.

3. **Cláusula de revisión de tarifas**: establece que las tarifas solo pueden subir si hay un índice objetivo (IPC o benchmark del sector) y siempre con un cap máximo anual, no a discreción del proveedor.

4. **Propiedad intelectual y activos**: todo lo producido en el marco del contrato debe ser mío; los activos (creatividades, datos de audiencias, código de píxeles, listas de emails) deben entregarse en un plazo máximo de 15 días tras la finalización del contrato.

5. **Cláusula de confidencialidad bidireccional**: protege mi información estratégica (presupuestos, estrategias, resultados) e impide que la agencia use mis datos o caso de éxito sin autorización.

**Fase 4 — Guión de la reunión de negociación**

Dame un guión con las frases exactas para:
- Abrir la negociación sin agresividad pero mostrando que conozco el mercado
- Responder cuando dicen "este es nuestro precio estándar y no tenemos margen"
- Manejar el cierre cuando proponen un "descuento por firma rápida"
- Reaccionar ante la presión de "tenemos otro cliente interesado en este presupuesto"

Termina con un checklist de los 10 puntos que debo verificar antes de firmar cualquier contrato con un proveedor de marketing.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Negociación de contratos con agencias de publicidad, proveedores de marketing y medios para conseguir mejores términos y cláusulas de rendimiento.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Negociación de oferta de trabajo tech',
                'description'      => 'Negocia el salario, el equity y los beneficios de una oferta tech. El proceso, los rangos del mercado y las técnicas que funcionan cuando la empresa dice que el salario no es negociable.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un career coach especializado en el mercado tecnológico con experiencia en negociación de compensación para desarrolladores, ingenieros y perfiles tech en España y Europa. He recibido una oferta de trabajo y necesito ayuda para negociarla.

**Datos de la oferta recibida:**
- Empresa: [nombre o tipo: startup / scale-up / corporación / consultora]
- Rol: [título exacto del puesto]
- Salario base ofertado: [importe bruto anual]
- Equity ofertado: [opciones, RSUs, porcentaje o "ninguno"]
- Otros beneficios: [lista lo que incluyen: seguro médico, retribución flexible, teletrabajo, formación, etc.]
- Fecha límite para responder: [fecha]

**Mi situación actual:**
- Salario actual o última referencia: [importe]
- Años de experiencia en el rol: [número]
- Otras ofertas activas o procesos abiertos: [sí/no y en qué empresa]
- Urgencia personal por cambiar: [alta / media / baja]

**Fase 1 — Diagnóstico de la oferta**

Evalúa la oferta completa con estos criterios:

1. **Posición en el mercado**: dado mi perfil y la empresa, ¿está la oferta en el percentil 25, 50 o 75 del mercado? ¿Qué fuentes de datos del mercado tech español/europeo debo consultar para validarlo (Stack Overflow Survey, Glassdoor, Hays, Michael Page, LinkedIn Salary)?

2. **Análisis del equity**: si hay equity, explícame cómo calcular su valor real: cliff, vesting schedule, strike price vs. última valoración, dilución esperada en próximas rondas y los escenarios de exit donde el equity vale algo. Si no hay equity en una startup, ¿cuándo tiene sentido pedirlo?

3. **El paquete total**: calcula el coste total del paquete incluyendo beneficios y dime qué elementos tienen mayor valor real para mí (seguro médico, ESPP, pensión, teletrabajo como ahorro de desplazamiento).

**Fase 2 — Estrategia de negociación**

Diseña la estrategia completa:

- **Primer movimiento**: si la oferta está por debajo de mi expectativa, ¿debo pedir por email o llamada? Dame el guión exacto para pedir más sin que suene a ultimátum ni a ingratitud por la oferta recibida.

- **El rango que debo pedir**: recomiéndame la anchura del rango y el número de apertura. Explícame la lógica de por qué el número inicial importa más que el final.

- **Cuando dicen que el salario es fijo**: las empresas siempre dicen que la banda es fija. Enséñame las cinco alternativas que siempre son negociables aunque el salario base no lo sea: signing bonus, accelerated vesting, extra de vacaciones, budget de formación, nivel de senior en vez de mid.

- **Cómo usar otras ofertas**: si tengo otro proceso abierto pero sin oferta, ¿cómo lo menciono sin mentir y sin perder credibilidad? Si tengo una oferta real de otra empresa, cómo la presento para generar urgencia sin provocar una contra-oferta que no vaya a aceptar.

**Fase 3 — Gestión de objeciones habituales**

Dame la respuesta exacta para cada objeción:

1. "No tenemos margen en la banda salarial para ese puesto."
2. "Tu salario actual ya está por encima de nuestra horquilla."
3. "Vamos a hacerte una oferta justa y competitiva, no queremos entrar en una guerra de números."
4. "El equity lo compensará si las cosas van bien."
5. "Si negociamos contigo, tenemos que hacerlo con todos."

**Fase 4 — El momento del cierre**

- ¿Cuándo es el momento de parar de negociar y aceptar? Dame las señales de que he llegado al límite real.
- ¿Cómo acepto la oferta de forma que preserve la relación con el equipo que me ha fichado?
- ¿Hay algo que deba pedir por escrito antes de firmar que no esté en la oferta formal (compromisos de formación, revisión salarial a los 6 meses, trabajo en remoto)?

Termina con un email tipo de respuesta a la oferta que pueda adaptar y enviar en las próximas 24 horas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Negociar una oferta de trabajo en el sector tech: salario, equity, beneficios y las técnicas para mejorar una oferta inicial.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Negociación de proyectos de diseño',
                'description'      => 'Negocia el scope, el precio y los términos de proyectos de diseño. El presupuesto, los derechos de autor y las condiciones que protegen al diseñador cuando el cliente cambia de opinión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador senior con experiencia en negociación de proyectos de diseño gráfico, UX/UI, branding e ilustración. Tengo un proyecto de diseño que negociar con un cliente y necesito ayuda para estructurar la propuesta, defender el precio y protegerme legalmente.

**Datos del proyecto:**
- Tipo de proyecto: [branding / UX-UI / campaña gráfica / ilustración / web design / packaging / otro]
- Cliente: [empresa grande / pyme / startup / particular / agencia intermediaria]
- Lo que el cliente quiere: [describe el brief inicial tal como te lo han presentado]
- Presupuesto que han mencionado (si lo han dicho): [importe o "no lo han dicho"]
- Plazo que piden: [semanas/meses]
- Usos previstos del diseño: [web, redes, impresión, producto físico, TV, licencia internacional]

**Fase 1 — Análisis del scope y detección de riesgos**

Antes de presentar precio, ayúdame a:

1. **Identificar el scope real vs. el scope percibido**: el cliente describe lo que quiere, pero a menudo no sabe lo que implica. Señala qué no está especificado y puede generar trabajo adicional no remunerado (número de conceptos, rondas de revisión, formatos de entrega, versiones por idioma, adaptaciones de formato).

2. **Riesgos de scope creep**: ¿qué típicamente se añade en este tipo de proyecto que el cliente no menciona al principio? Ayúdame a incluirlo en el contrato o a precio explícitamente como add-on.

3. **Señales de alerta del cliente**: ¿qué frases o comportamientos en el brief sugieren que este cliente va a ser difícil? (pide "algo sencillo", no tiene claro lo que quiere, menciona que "el último diseñador no entendió la visión", o da un plazo imposible con presupuesto bajo).

**Fase 2 — Estructura de precios y defensa del presupuesto**

1. **Cálculo del precio justo**: ayúdame a calcular el precio basado en horas estimadas × tarifa horaria o en precio por entregable. Incluye el tiempo de gestión, comunicación, revisiones y exportación de assets que los diseñadores normalmente no facturan.

2. **Desglose de la propuesta**: ¿cómo presento el precio para que el cliente entienda el valor? ¿Muestro el desglose por fases o un precio total? ¿Qué ventajas tiene cada enfoque?

3. **Cuando el cliente dice que es caro**: dame las respuestas exactas para:
   - "Otro diseñador me lo hace por la mitad"
   - "Tenemos presupuesto limitado pero es un proyecto con mucha visibilidad"
   - "¿Puedes hacer una versión más económica?"
   - "Empezamos con poco, pero si sale bien hay mucho más trabajo"

**Fase 3 — Derechos de autor y propiedad intelectual**

Este es el área más descuidada por los diseñadores y donde más se pierde dinero:

1. **Licencia vs. cesión de derechos**: explícame la diferencia y cuándo usar cada una. ¿Cuándo tiene sentido ceder todos los derechos y cuándo licenciar por uso, medio y territorio?

2. **Tabla de precios según uso**: si el cliente quiere usar mi diseño en TV, en una tienda internacional o en packaging de producto, ¿cómo ajusto el precio? Dame un esquema de tarifas por tipo de uso.

3. **Qué incluir siempre en el contrato**: la lista mínima de cláusulas que me protegen cuando el proyecto termina mal: propiedad de los archivos fuente, derecho a mostrar el trabajo en portfolio, penalización por uso no autorizado del diseño y qué pasa con los borradores que no se aprueban.

**Fase 4 — Gestión de revisiones y cambios de scope**

1. Redacta la cláusula de revisiones que incluiría en mi contrato tipo (máximo de rondas, qué cuenta como revisión vs. qué cuenta como nuevo trabajo, proceso para aprobar cambios por escrito).

2. Dame la respuesta exacta para cuando el cliente dice "solo es un pequeño cambio" y lo que pide implica rehacer el 40% del trabajo.

3. ¿Cómo gestiono la situación cuando el cliente desaparece durante semanas y luego quiere reactivar el proyecto urgente?

Termina con una plantilla de email para enviar la propuesta comercial que incluya el resumen del proyecto, precio, condiciones de pago y los próximos pasos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Negociar proyectos de diseño: precio, derechos de autor, revisiones y condiciones que protegen al diseñador.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Negociación de contratos B2B complejos',
                'description'      => 'Cierra deals complejos sin destruir el margen. Las técnicas que funcionan cuando el comprador tiene más poder, las concesiones estratégicas y el cierre que crea una relación a largo plazo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial con experiencia en ventas B2B complejas y negociación de contratos de alto valor. Estoy en proceso de negociación con un cliente potencial y necesito ayuda para preparar la estrategia completa de cierre.

**Datos del deal:**
- Mi empresa y producto/servicio: [describe qué vendes]
- Cliente: [nombre, sector, tamaño aproximado]
- Valor del contrato: [importe anual o total]
- Duración del contrato propuesta: [meses/años]
- Fase actual de la negociación: [primera reunión / propuesta enviada / segunda ronda / punto muerto]
- Interlocutores del cliente: [quién está en la mesa: procurement, usuario final, dirección, legal]
- Competidores que también están en el proceso: [nombres o "no lo sé"]
- Principal objeción o punto de conflicto ahora mismo: [describe el problema]

**Fase 1 — Análisis de poder en la negociación**

Antes de entrar en técnicas, necesito entender el balance de poder real:

1. ¿Quién necesita más este deal: yo o el cliente? Ayúdame a evaluar objetivamente mi posición de poder y la del cliente basándome en los datos que te he dado.

2. ¿Cuál es el BATNA real de cada parte? ¿Qué pasa si yo no cierro este deal? ¿Qué pasa si ellos no me compran a mí?

3. ¿Hay presión de tiempo en su lado que no me están diciendo? (fin de año fiscal, proyecto en marcha, promesa a su dirección, presupuesto que caduca).

**Fase 2 — Estrategia de concesiones**

El error más frecuente en ventas B2B es hacer concesiones de precio sin obtener nada a cambio. Diseñame una estrategia de concesiones:

1. **Qué nunca debo ceder primero**: por qué el precio no debe ser la primera concesión y qué ofrecer antes (plazos de entrega, soporte adicional, acceso a funcionalidades premium, revisiones trimestrales, referencias).

2. **El patrón de concesiones decrecientes**: cómo estructuro las bajadas de precio para que el cliente entienda que estoy llegando a mi límite (primera bajada grande, segunda mediana, tercera pequeña, cuarta simbólica).

3. **Concesiones que me cuestan poco y valen mucho para el cliente**: lista de concesiones de bajo coste real que tienen alto valor percibido en contratos B2B y que puedo usar como moneda de cambio.

4. **Cómo pedir algo a cambio de cada concesión**: la técnica del "si yo... entonces tú..." para que cada cesión mía vaya ligada a una cesión del cliente (más plazo de pago a cambio de compromiso de más volumen, descuento a cambio de firma antes de fecha límite, precio especial a cambio de caso de éxito).

**Fase 3 — Gestión del departamento de compras (procurement)**

Cuando procurement entra en la negociación, el juego cambia completamente:

1. ¿Cómo cambio mi estrategia cuando dejo de hablar con el usuario/sponsor y empiezo a negociar con compras?

2. Las cuatro técnicas de procurement que debo anticipar: el farol del competidor más barato, el silencio como presión, la reducción del scope para bajar el precio y la petición de descuento de último minuto antes de la firma.

3. ¿Cómo mantengo el acceso al sponsor interno mientras negocio con procurement sin saltarme el proceso?

**Fase 4 — El cierre**

1. **Señales de compra**: ¿qué comportamientos y frases del cliente indican que está listo para cerrar aunque todavía esté negociando?

2. **Técnicas de cierre para contratos complejos**: el cierre por alternativas, el cierre por resumen de acuerdos y el cierre por urgencia legítima (no fabricada).

3. **El cierre que no destruye la relación**: cómo presionar para cerrar sin que el cliente sienta que le has ganado a él, porque va a ser tu cliente durante años.

Dame finalmente un email de seguimiento post-reunión de negociación que consolide los acuerdos alcanzados y proponga los próximos pasos hacia la firma.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Negociar contratos B2B de alto valor: estrategia de concesiones, gestión de procurement y técnicas de cierre.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Negociación interna para el Product Manager',
                'description'      => 'El PM negocia constantemente sin autoridad formal. Cómo conseguir recursos del equipo de ingeniería, prioridad en el roadmap y apoyo de los stakeholders usando el poder de la influencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de liderazgo sin autoridad formal especializado en Product Management. El PM vive en una paradoja: es responsable de los resultados del producto pero no tiene autoridad directa sobre los equipos que lo construyen. Necesito ayuda para dominar la negociación interna en mi empresa.

**Mi contexto:**
- Tipo de empresa: [startup / scale-up / corporación]
- Número de stakeholders con los que negocio regularmente: [ingeniería, diseño, marketing, ventas, dirección, legal, datos...]
- El conflicto actual más urgente: [describe la situación concreta: un feature que necesito y engineering no prioriza, un stakeholder que bloquea el roadmap, recursos que me han prometido y no llegan, etc.]
- Mi posición en la jerarquía: [PM junior / senior / Head of Product / CPO]

**Módulo 1 — El mapa de influencia**

Antes de cualquier negociación interna, necesito entender el terreno:

1. **Mapa de stakeholders**: ayúdame a construir una matriz de poder e interés para los actores clave de mi situación. ¿Quién tiene poder real de decisión sobre lo que necesito? ¿Quién influye sobre quién? ¿Quién es aliado, quién es neutro y quién es resistente?

2. **Motivaciones de cada parte**: ¿qué quiere realmente el equipo de ingeniería cuando se resiste a mi feature? ¿Qué quiere ventas cuando empuja sus peticiones al roadmap? Ayúdame a ver más allá de las posiciones declaradas hacia los intereses reales.

3. **Dónde tengo poder sin saberlo**: el PM tiene más influencia de la que cree; ayúdame a identificar mis fuentes de poder (información, acceso al cliente, visión del producto, relaciones con dirección, control del backlog, datos de uso).

**Módulo 2 — Negociar prioridad con ingeniería**

Esta es la negociación más frecuente y más difícil del PM:

1. **El lenguaje de ingeniería**: los ingenieros responden mejor a ciertos argumentos que a otros. ¿Cómo traduzco el impacto de negocio a términos técnicos que hagan que quieran construir lo que pido?

2. **El deal que funciona con engineering**: ¿qué puedo ofrecer a ingeniería a cambio de priorizar mi feature? (deuda técnica en el roadmap, decisiones de arquitectura que les dejes a ellos, protección frente a stakeholders que los saturan de peticiones, visibilidad del impacto de su trabajo).

3. **Cuándo escalar y cuándo no**: ¿cómo decido si voy al CTO o al CPO cuando hay un bloqueo con el equipo técnico? ¿Qué cuesta escalar y cuándo es el momento correcto?

**Módulo 3 — Negociar el roadmap con stakeholders**

1. **Cómo decir no sin destruir relaciones**: el PM dice no constantemente. Dame cinco marcos para rechazar una petición de un stakeholder sin crear un enemigo: el no por datos, el no por oportunidad (ahora no, en el Q3), el no por alternativa (en lugar de X, considera Y), el no por criterios acordados y el no por proceso.

2. **El comité de roadmap**: si tengo que llevar el roadmap a una reunión con múltiples stakeholders que van a pelear por prioridad, ¿cómo diseño el proceso para que la decisión sea legítima aunque algunos salgan perdiendo?

3. **Gestión del stakeholder que siempre tiene urgencias**: ese VP de ventas que cada semana tiene "el deal más importante del año" que requiere un feature urgente. ¿Cómo establezco un proceso que le dé visibilidad sin que secuestre el roadmap?

**Módulo 4 — La reunión de negociación interna**

Dame un framework para preparar cualquier reunión de negociación interna con estos elementos:

- Qué investigo antes de la reunión para entender la posición real del otro lado
- Cómo abro la conversación para que sea colaborativa, no confrontacional
- Qué propongo para crear opciones donde no existían
- Cómo manejo el "eso no es mi prioridad" o el "no tenemos capacidad"
- Cómo cierro la reunión con un acuerdo documentado que se cumpla

Termina con las cinco frases que un PM debe dominar para influir sin autoridad y que puedo empezar a usar desde mañana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Negociación interna del PM: conseguir prioridad con ingeniería, gestionar el roadmap con stakeholders y tomar decisiones sin autoridad formal.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Negociación de compensación con candidatos',
                'description'      => 'Cierra ofertas de trabajo negociando de forma que el candidato acepte y quede satisfecho. El proceso, los límites de banda salarial y las alternativas cuando no hay margen.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de recursos humanos con amplia experiencia en atracción de talento y negociación de compensación. Necesito ayuda para preparar y ejecutar la negociación de una oferta de trabajo con un candidato que ha pasado el proceso de selección.

**Contexto de la negociación:**
- Puesto a cubrir: [título del puesto]
- Banda salarial aprobada para el puesto: [mínimo - máximo bruto anual]
- Expectativa salarial declarada por el candidato: [importe que ha mencionado]
- Salario actual del candidato (si lo sabemos): [importe o "desconocido"]
- Otros elementos del paquete disponibles: [seguro médico, teletrabajo, flexibilidad, bonus, equity, formación, beneficios sociales]
- Urgencia para cubrir el puesto: [alta / media / baja]
- ¿Tiene el candidato otras ofertas activas?: [sí / no / "creemos que sí"]
- Contexto adicional: [cualquier información relevante sobre el candidato o la situación]

**Fase 1 — Estrategia antes de hacer la oferta**

1. **Dónde aterrizar dentro de la banda**: ¿hago la oferta en el mínimo de la banda, en el medio o cerca del máximo? Ayúdame a decidir basándome en la urgencia, la escasez del perfil, lo que sé de su situación y la equidad interna con el equipo.

2. **Elementos no salariales que debo preparar**: lista los beneficios que tienen valor real para el candidato según el perfil (desarrolladores valoran el remoto y la formación; perfiles de management valoran el bonus y el seguro de vida; padres con hijos valoran la flexibilidad horaria). ¿Cuáles debería enfatizar en esta negociación?

3. **El framing de la oferta**: cómo presento el paquete total de forma que el candidato lo vea como un conjunto de valor y no solo compare el número de salario base.

**Fase 2 — La llamada de la oferta**

Dame un guión completo para la llamada en que hago la oferta:

1. La apertura que crea contexto positivo antes de dar el número
2. Cómo presento el salario base junto con el resto del paquete
3. Cómo manejo el silencio del candidato después de dar el número
4. Cómo respondo si dice que esperaba más
5. Cómo respondo si dice que necesita pensarlo

**Fase 3 — Gestión de la contrapropuesta**

El candidato vuelve pidiendo más. Guíame a través de estas situaciones:

1. **Pide más de lo que puedo dar en salario base**: ¿cuándo muevo el número dentro de la banda y cuándo no? ¿Cómo ofrezco alternativas sin salir de la banda? (signing bonus puntual, revisión salarial a los 6 meses, upgrade de categoría interna).

2. **Está en el máximo de la banda y sigue pidiendo más**: ¿cómo explico el límite de la banda de forma que no suene a excusa? ¿Qué alternativas no salariales puedo ofrecer que tengan valor real para él?

3. **Tiene otra oferta como palanca**: ¿cómo respondo cuando dice "me han ofrecido X en otra empresa"? ¿Cuándo compito y cuándo dejo ir al candidato? ¿Cómo evito entrar en una guerra de ofertas que distorsiona la equidad interna?

4. **Negocia cada punto por separado**: algunos candidatos negocian salario, luego bonus, luego teletrabajo, luego días de vacaciones en rondas separadas. ¿Cómo gestiono este proceso sin perder el control?

**Fase 4 — El cierre y la aceptación**

1. ¿Cuándo pongo una fecha límite a la oferta y cómo la presento sin que suene a presión?
2. ¿Qué hago si el candidato acepta verbalmente pero tarda días en firmar?
3. ¿Cómo gestiono al candidato que acepta pero luego contraoferta del empleo actual?
4. ¿Cómo aseguro que el candidato que ha negociado duro empiece bien, sin resentimiento por ninguna de las dos partes?

Termina con las tres señales de que una negociación con un candidato está yendo mal y debo reconsiderar si seguir adelante.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Negociación de ofertas de trabajo con candidatos: cómo presentar el paquete, gestionar contrapropuestas y cerrar con el candidato satisfecho.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Negociación con entidades financieras',
                'description'      => 'Negocia las condiciones de financiación bancaria: tipos, garantías, covenants y las cláusulas que la empresa puede mejorar si sabe cómo negociar con la banca.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con amplia experiencia en negociación de financiación bancaria para empresas medianas. Mi empresa necesita financiación bancaria y quiero preparar la negociación para obtener las mejores condiciones posibles.

**Datos de mi empresa y la operación:**
- Tipo de empresa: [sector, tamaño, años de actividad]
- EBITDA último ejercicio: [importe]
- Facturación último ejercicio: [importe]
- Deuda financiera actual: [importe o "sin deuda"]
- Tipo de financiación que busco: [préstamo a largo plazo / línea de crédito / factoring / leasing / confirming / préstamo ICO / financiación de proyecto]
- Importe solicitado: [importe]
- Destino de los fondos: [inversión en activo / circulante / adquisición / refinanciación]
- Bancos con los que ya trabajo: [nombres o número de entidades]
- Nuevas entidades a las que he ido: [sí/no]

**Fase 1 — Preparación: cómo llegar a la mesa fuerte**

1. **La documentación que maximiza mi posición**: qué información debo preparar y presentar de forma proactiva para que el banco me vea como un riesgo bajo (estados financieros auditados, plan de negocio, proyecciones de cash flow, contrato con cliente ancla, tasación de garantías).

2. **Cómo usar la competencia entre bancos**: el mayor error es negociar con un solo banco. Diseñame una estrategia de proceso competitivo: cuántos bancos consultar, cómo comunicarles que hay un proceso competitivo sin mentir, y cómo usar las ofertas cruzadas para mejorar condiciones.

3. **Mi ratio de endeudamiento como palanca**: explícame cómo el banco calcula mi capacidad de deuda (Deuda Neta / EBITDA) y cómo puedo presentar mi situación de la forma más favorable dentro de los datos reales.

**Fase 2 — Los términos que más importan y cómo negociarlos**

1. **El tipo de interés**: diferencia entre tipo fijo, variable (Euribor + spread) y mixto. ¿Cuándo conviene cada uno con los tipos actuales? ¿Cómo negocio el spread con el banco? ¿Qué argumentos reducen el spread que me ofrecen?

2. **Las comisiones que suelen olvidarse**: comisión de apertura, de disponibilidad, de cancelación anticipada, de estudio y de agencia (en operaciones sindicadas). ¿Cuáles son negociables y cuáles son estándar? ¿Cómo consigo que bajen o eliminen algunas?

3. **Las garantías**: el banco pedirá garantías. ¿Qué garantías reales (hipotecaria, prenda de maquinaria, pignoración de cuentas) versus personales (aval del accionista) puedo ofrecer y cuál me conviene más ceder? ¿Cómo limito el aval personal al mínimo imprescindible?

4. **Los covenants financieros**: el banco incluirá obligaciones de mantenimiento de ratios (leverage, cobertura de servicio de deuda, EBITDA mínimo). ¿Cuáles son normales y cuáles son excesivamente restrictivos? ¿Cómo negocio el headroom (margen sobre el ratio mínimo) y las consecuencias del breach?

5. **Cláusulas de prepago**: si en el futuro quiero amortizar anticipadamente, ¿qué cláusulas debo negociar ahora para no pagar penalizaciones excesivas?

**Fase 3 — La reunión con el banco**

Dame el guión para la reunión con el director de banca de empresas:

- Cómo presentar la operación en los primeros 5 minutos
- Cómo responder cuando dicen que las condiciones que me ofrecen son "estándar del mercado"
- Cómo reaccionar ante la petición de garantías adicionales que no había previsto
- Cómo manejar la situación cuando el banco dice "lo tenemos que pasar por el comité de riesgos"

**Fase 4 — La decisión final**

¿Cómo comparo dos ofertas bancarias con condiciones distintas? Dame un modelo de comparación que reduzca todo a un coste efectivo anual que pueda comparar de forma objetiva, incluyendo todas las comisiones y el coste del aval personal.

Termina con los cinco errores más frecuentes que cometen las empresas al negociar financiación bancaria y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Negociación de financiación bancaria: tipos, comisiones, covenants, garantías y cómo usar la competencia entre entidades para mejorar condiciones.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Técnicas de negociación jurídica',
                'description'      => 'El abogado que negocia mejor consigue mejores acuerdos. Las técnicas de negociación aplicadas a contratos, litigios y transacciones donde el resultado no es solo quién tiene razón.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado senior con especialización en negociación jurídica y resolución de conflictos comerciales. Necesito ayuda para preparar una negociación jurídica compleja donde el resultado depende tanto del Derecho como de la estrategia negociadora.

**Datos del asunto:**
- Tipo de negociación: [redacción de contrato / renegociación de contrato / resolución de conflicto extrajudicial / litigio en curso / transacción M&A / acuerdo de licencia / joint venture]
- Las partes: [describe brevemente quiénes son, la relación de poder entre ellas]
- La cuestión jurídica de fondo: [cuál es el punto de conflicto legal o el documento que hay que negociar]
- Mi cliente: [empresa / particular / cuál de las partes represento]
- Fortalezas jurídicas de mi posición: [qué dice el Derecho a nuestro favor]
- Debilidades jurídicas de mi posición: [donde somos más débiles legalmente]
- Resultado ideal para mi cliente: [qué querría obtener en el mejor escenario]
- Resultado mínimo aceptable: [qué línea roja no podemos cruzar]

**Módulo 1 — Diferencia entre tener razón y ganar la negociación**

1. El error más frecuente del abogado es creer que su trabajo es demostrar que tiene razón jurídica. Explícame por qué una posición jurídica sólida no garantiza un buen acuerdo negociado y por qué el mejor abogado negociador a veces cede en lo jurídico para ganar en lo económico o en el tiempo.

2. ¿Cuál es el BATNA de mi cliente (qué pasa si no llegamos a acuerdo y vamos a juicio o arbitraje)? Ayúdame a evaluarlo de forma realista: probabilidades de éxito estimadas, plazos, costes, desgaste directivo y reputacional. ¿Cuál es el BATNA de la otra parte?

3. ¿En qué contextos tiene sentido para mi cliente llegar a un acuerdo que jurídicamente no tiene por qué aceptar, y cuándo tiene sentido litigar aunque el acuerdo sea económicamente razonable?

**Módulo 2 — Estrategia de negociación jurídica**

1. **El encuadre jurídico como palanca**: cómo uso la incertidumbre jurídica (cuando la norma es ambigua, la jurisprudencia está dividida o la interpretación es discutible) como palanca negociadora, sin hacer afirmaciones falsas sobre el estado del Derecho.

2. **La propuesta de apertura en una negociación contractual**: en una negociación de contrato, ¿quién debe proponer el primer borrador y por qué eso da ventaja? ¿Cómo redacto un primer borrador que sea defensible pero deje margen para conceder?

3. **La técnica del package deal**: en negociaciones jurídicas complejas (M&A, joint ventures, litigios con múltiples reclamaciones), ¿por qué es mejor negociar el conjunto que ir cláusula por cláusula? ¿Cómo diseño el paquete para que las concesiones en puntos menores me den victorias en los puntos que importan?

4. **Gestión de las cláusulas de responsabilidad**: limitation of liability, indemnización, garantías y declaraciones son siempre los puntos más difíciles. Dame el rango de lo que es normal en el mercado y cómo defiendo que el tope de responsabilidad de mi cliente sea el más bajo posible.

**Módulo 3 — Negociación en el contexto de un litigio**

Cuando ya hay un litigio en curso, la negociación tiene reglas distintas:

1. ¿Cómo uso el coste y la incertidumbre del litigio como argumento para llegar a un acuerdo? ¿Cómo lo presento sin que parezca que estoy admitiendo debilidad?

2. ¿Cuándo hacer la propuesta de acuerdo: antes de la demanda, después de la admisión, después de la audiencia previa, antes del juicio? ¿Qué señales de la otra parte me dicen que el momento es propicio?

3. En acuerdos transaccionales, ¿qué cláusulas son imprescindibles para proteger a mi cliente después de firmar? (confidencialidad, no disparagement, quitclaim de futuras reclamaciones, sin admisión de hechos).

**Módulo 4 — La reunión de negociación**

Dame el protocolo para dirigir una reunión de negociación jurídica:

- Cómo abro para crear un clima colaborativo sin ceder posición
- Cómo manejo la presión de la otra parte cuando su abogado eleva el tono
- Cómo reacciono ante una propuesta inaceptable sin cerrar la negociación
- Cómo cierro un acuerdo en sala y lo dejo documentado de forma que no haya marcha atrás

Termina con el checklist de lo que debo revisar antes de dar por cerrada cualquier negociación jurídica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Negociación jurídica: técnicas para abogados en contratos, litigios y transacciones donde la estrategia negociadora es tan importante como el Derecho.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Negociación de renovaciones y condiciones desde CS',
                'description'      => 'Negocia renovaciones de contratos, descuentos y ajustes de precio desde el equipo de CS. Las técnicas que retienen al cliente sin destruir el margen y cómo presentar un aumento de precio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en negociación de renovaciones y expansión de contratos SaaS y de servicios B2B. Tengo una renovación próxima o una situación de negociación con un cliente existente y necesito ayuda para prepararla.

**Datos de la situación:**
- Tipo de situación: [renovación anual próxima / cliente que pide descuento / cliente en riesgo de churn / upsell que hay que justificar / aumento de precio que tengo que comunicar]
- Cliente: [sector, tamaño, tiempo como cliente]
- Valor del contrato actual: [importe anual]
- NPS o satisfacción aproximada: [alta / media / hay problemas conocidos]
- Uso del producto: [activo y comprometido / uso bajo / han tenido problemas de adopción]
- ROI que el cliente ha obtenido: [si lo conoces, describe el valor demostrable]
- Interlocutor principal: [usuario / economic buyer / procurement / C-level]
- Fecha de vencimiento del contrato: [fecha]

**Fase 1 — Evaluación de la posición antes de negociar**

1. **Diagnóstico de salud del cliente**: antes de sentarme a negociar, ¿qué señales debo revisar para entender si este cliente va a renovar, necesita trabajo previo o está en riesgo real? (frecuencia de login, tickets de soporte recientes, participación en QBRs, expansión de usuarios, cambios en el equipo del cliente).

2. **Cálculo del coste de churn**: ¿cuánto vale realmente este cliente en el tiempo? LTV estimado, coste de reemplazarlo con un cliente nuevo, impacto en NRR. ¿Cuánto descuento tiene sentido dar para retenerlo, y cuándo es mejor dejarlo ir?

3. **El ROI demostrable**: antes de cualquier reunión de renovación, ayúdame a construir el business case de lo que el cliente ha obtenido: ahorro de tiempo, ingresos generados, reducción de costes, KPIs mejorados. Si no tengo datos, ¿cómo los consigo con el cliente?

**Fase 2 — La reunión de renovación (escenario estándar)**

Dame el guión para una reunión de renovación con un cliente satisfecho:

1. Cómo abro revisando el valor entregado antes de hablar de precio
2. Cómo presento la renovación como un paso natural, no como una venta
3. Cómo presento una oportunidad de expansión sin que parezca que solo llamo cuando hay que renovar
4. Cómo manejo el "lo tengo que consultar con mi equipo / con finanzas"
5. Cómo pido el compromiso y la firma

**Fase 3 — Gestión de un cliente que pide descuento**

Este es el escenario más frecuente y más peligroso para el margen:

1. ¿Cuándo tiene sentido dar un descuento de renovación y cuándo es un error? Dame los criterios: antigüedad del cliente, tamaño, potencial de expansión, señal de riesgo real vs. negociación táctica.

2. **Alternativas al descuento de precio** que mantienen el valor percibido: upgrade de plan con más funcionalidades al mismo precio, extensión del contrato (multi-año) con descuento anualizado, créditos de servicios de implementación, sesiones de formación adicional, acceso anticipado a nuevas funcionalidades.

3. **El descuento condicionado**: si doy descuento, siempre debe ir atado a algo: contrato multi-año, pago anual anticipado, referencia pública o caso de éxito, ampliación de usuarios. Dame el guión para presentar esta condición sin que parezca una penalización.

4. **Respuesta cuando dicen que el competidor es más barato**: cómo comparo valor sin atacar al competidor y cómo construyo el caso de coste de cambio real (migración, curva de aprendizaje, riesgo de adopción).

**Fase 4 — Comunicación de un aumento de precio**

Comunicar una subida de precio a clientes existentes es uno de los momentos más delicados del CS:

1. ¿Cuándo comunicarlo y con cuánto tiempo de antelación?
2. ¿Por email o por llamada primero? ¿Cuál es el canal correcto según el tamaño del cliente y la magnitud de la subida?
3. Dame la plantilla de email para comunicar un aumento de precio que minimice el churn reactivo y la escalada.
4. ¿Cómo gestiono al cliente que amenaza con irse cuando recibe la comunicación del aumento?

Termina con los cinco KPIs que debo medir para saber si mi proceso de renovación es eficaz.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Negociar renovaciones de contratos y aumentos de precio desde CS: retener al cliente sin destruir el margen y gestionar peticiones de descuento.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Negociación de tarifas como freelance',
                'description'      => 'Sube tus tarifas y negocia mejores condiciones. El proceso para pedir más, la gestión de clientes que presionan el precio y las situaciones donde rechazar es la mejor estrategia de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocio especializado en freelancers y profesionales independientes. Necesito ayuda para negociar mis tarifas, defender mi precio y gestionar las situaciones donde el cliente presiona hacia abajo.

**Mi situación:**
- Mi especialidad profesional: [diseño / desarrollo / consultoría / copywriting / fotografía / traducción / formación / otro]
- Experiencia como freelance: [años, tipos de clientes con los que trabajo]
- Tarifa actual: [precio por hora o por proyecto]
- Tarifa que quiero alcanzar: [objetivo]
- El problema concreto que tengo ahora: [cliente nuevo que negocia el precio / cliente existente al que quiero subir tarifa / no sé cómo pedir más cuando el cliente dice que es caro / pierdo deals por precio aunque creo que mi trabajo vale más]

**Módulo 1 — La psicología de la negociación de tarifas**

Antes de cualquier técnica, necesito entender los bloqueos mentales que me impiden pedir más:

1. **El síndrome del impostor en los precios**: por qué los freelancers buenos suelen cobrar menos de lo que valen y cómo reformular la conversación interna sobre el precio (no estoy pidiendo un favor, estoy ofreciendo valor que resuelve un problema).

2. **El cliente que regatean vs. el cliente que compra valor**: ¿cómo identifico antes de la primera propuesta si el cliente va a presionar el precio independientemente de cuánto cobre? Las señales en la primera conversación que predicen si va a ser un cliente de precio o un cliente de valor.

3. **Por qué subir las tarifas es una estrategia de negocio y no de codicia**: el efecto de la tarifa alta en la percepción de calidad, en el tipo de cliente que atraes, en la cantidad de proyectos que necesitas para vivir bien y en la energía que tienes para hacer un trabajo excelente.

**Módulo 2 — Cómo pedir más en la propuesta inicial**

1. **El momento de dar el precio**: ¿cuándo es el mejor momento en la conversación para mencionar el precio? ¿Antes o después de entender el problema del cliente en profundidad? ¿Cómo construyo el valor antes de dar el número?

2. **La técnica del silencio después de dar el precio**: por qué debo dar el precio y callarme, sin explicarlo ni defenderlo inmediatamente, y qué pasa si el cliente no dice nada durante 10 segundos.

3. **Cuando piden un presupuesto por email**: ¿envío el precio por email o insisto en hablarlo? ¿Cómo redacto una propuesta que justifique el precio sin que parezca que me estoy disculpando por él?

**Módulo 3 — Gestión de la presión sobre el precio**

Dame la respuesta exacta para cada situación:

1. El cliente dice: "Es demasiado caro, no tenemos tanto presupuesto."
2. El cliente dice: "Otro freelance me lo hace por la mitad."
3. El cliente dice: "Empezamos con un proyecto pequeño para ver cómo trabajas."
4. El cliente dice: "¿No puedes hacer una versión más básica más barata?"
5. El cliente dice: "Te damos visibilidad / te ponemos en el portfolio / te recomendamos."
6. El cliente dice: "Esto es urgente, ¿puedes hacer un precio especial?"

Para cada situación, dame la respuesta que mantiene el precio, preserva la relación y no destruye mi posición.

**Módulo 4 — Subir tarifa a un cliente existente**

Este es el momento más temido: decirle a un cliente con el que llevas tiempo que vas a cobrar más:

1. ¿Cuándo es el momento correcto para comunicar una subida (después de un proyecto exitoso, al inicio del año, al renovar un acuerdo)?
2. ¿Con cuánta antelación y por qué canal?
3. Dame el email exacto para comunicar una subida de tarifa del 20-30% a un cliente con el que llevo más de un año, de forma que la probabilidad de que siga trabajando conmigo sea máxima.
4. ¿Qué hago si el cliente dice que no puede asumir la nueva tarifa? ¿Cuándo negocio y cuándo le dejo ir?

**Módulo 5 — Cuándo decir no es la mejor estrategia**

Hay situaciones donde rechazar un proyecto o un cliente es más rentable que aceptar:

- El cliente que pide descuento del 40% prometiendo más trabajo en el futuro
- El proyecto urgente con presupuesto bajo que va a consumir tu mejor energía
- El cliente que ya ha demostrado en conversaciones previas que va a ser difícil
- El proyecto fuera de tu especialidad que te piden "porque seguro que puedes"

¿Cómo rechazo educada pero firmemente sin cerrar la puerta del todo? Dame la frase exacta.

Termina con el ejercicio concreto que debo hacer esta semana para saber cuál es mi tarifa de mercado real y qué cambio debo hacer en mi siguiente propuesta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 15,
                'use_case'         => 'Negociar tarifas como freelance: cómo pedir más, gestionar clientes que presionan el precio y subir tarifas a clientes existentes.',
                'vote_score'       => 47,
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
