<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills657Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 4,
                'title'             => 'Prompt para vender en Vinted o Wallapop: título, descripción, precio y fotos que venden',
                'description'       => 'Crea anuncios de segunda mano que se venden: título con las palabras que se buscan, descripción honesta, precio razonado y guía de fotos.',
                'prompt_content'    => <<<'EOT'
Actúa como vendedor experto en plataformas de segunda mano en España. Quiero vender un artículo rápido y a buen precio, sin regalarlo y sin tener que contestar las mismas preguntas veinte veces.

EL ARTÍCULO
- Qué es: [tipo de producto]
- Marca y modelo (si lo sé): [marca y modelo, tal como aparece en la etiqueta]
- Talla o medidas: [talla de etiqueta y medidas reales en cm si es ropa; dimensiones si es otro objeto]
- Estado real: [nuevo con etiqueta, como nuevo, buen estado, con signos de uso]
- Defectos (aunque sean pequeños): [manchas, arañazos, falta una pieza, nada]
- Precio de compra y año aproximado: [cantidad y año]
- Qué incluye: [caja, cargador, factura, accesorios]
- Plataforma: [Vinted / Wallapop / ambas]
- Prisa por vender: [mucha / normal / ninguna]
- ¿Envío o en mano?: [envío / en mano en ciudad X / ambos]

LO QUE NECESITO
1. Título: tres versiones de un máximo de 60 caracteres que empiecen por lo que la gente escribe en el buscador (tipo de prenda u objeto, marca, modelo, talla, color). Sin mayúsculas en todo el texto ni emojis de relleno.
2. Descripción: breve y escaneable. Primero los datos clave, después el estado con los defectos explicados con naturalidad, luego medidas, qué incluye y condiciones de envío. Termina con una frase amable. La honestidad sobre los defectos evita devoluciones y malas valoraciones.
3. Precio: explícame cómo comprobar el precio de artículos parecidos ya vendidos o anunciados, y propón un precio de salida, un precio mínimo que aceptar y una estrategia de rebaja (por ejemplo, bajar un 10 % a los 7 días si no hay interés). No te inventes precios de mercado: si no tienes datos, dame un rango razonado y dime que lo compruebe.
4. Fotos: guía de 6 fotos con el orden exacto (portada, detalle de etiqueta, defectos, medidas, prenda puesta o en uso, accesorios). Indica fondo, luz natural y encuadre. Solo fotos hechas por mí, nunca imágenes de la web de la marca.
5. Respuestas preparadas: cinco mensajes cortos para las preguntas típicas (¿lo rebajas?, ¿sigue disponible?, ¿puedes enviar hoy?, ofertas muy bajas, petición de pago fuera de la plataforma). En este último caso, recuérdame que lo rechace siempre.

FORMATO DE SALIDA
- Tres títulos.
- Descripción lista para copiar.
- Tabla de precio: Precio de salida | Mínimo | Plan de rebajas.
- Lista de fotos numerada.
- Respuestas rápidas.

Si me dices que el artículo es una falsificación o réplica, no me ayudes a venderlo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Publicar anuncios de segunda mano que aparecen en las búsquedas y se venden antes.',
                'vote_score'        => 76,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Prompt para evaluar una idea de dropshipping con números reales antes de invertir',
                'description'       => 'Calcula si un producto de dropshipping es rentable: margen real, coste por venta en publicidad, devoluciones, plazos de envío y riesgos legales.',
                'prompt_content'    => <<<'EOT'
Actúa como analista de comercio electrónico escéptico. Tengo una idea de dropshipping y quiero saber si tiene sentido antes de gastar dinero en publicidad. No me motives: hazme las cuentas y señala los riesgos. No me prometas ganancias; si los números no salen, dímelo.

LA IDEA
- Producto: [descripción]
- Mercado de venta: [España / UE / otro]
- Proveedor y país de origen: [país, plataforma o mayorista]
- Coste unitario del producto: [euros]
- Coste de envío al cliente: [euros] y plazo de entrega: [días]
- Precio de venta previsto: [euros, IVA incluido]
- Canal de captación: [anuncios en redes sociales, buscadores, creadores de contenido, tráfico orgánico]
- Presupuesto para la prueba: [euros]
- ¿Tengo empresa o soy autónomo?: [sí / no / aún no]

ANÁLISIS QUE NECESITO
1. Margen unitario real: precio de venta sin IVA menos coste de producto, envío, comisión de la pasarela de pago, comisión de la plataforma de tienda y embalaje. Muestra la fórmula y el resultado con mis datos.
2. Coste por venta máximo asumible en publicidad para no perder dinero (punto de equilibrio). Compáralo con un rango de coste por adquisición prudente que yo debo validar con mi propia prueba; no lo presentes como dato garantizado.
3. Devoluciones: estima el impacto de una tasa de devoluciones de [porcentaje, por ejemplo 8 %] incluyendo envío de vuelta y producto no recuperable. En la UE el cliente tiene 14 días de desistimiento.
4. Escenarios: pesimista, realista y optimista con ventas, gasto en anuncios, beneficio o pérdida neta y meses hasta recuperar la inversión.
5. Riesgos no financieros: plazos de envío largos, aduanas e IVA de importación, marcado CE y normativa de seguridad del producto, garantía legal de 3 años que asume el vendedor, calidad no verificada, saturación del producto, dependencia de un solo proveedor.
6. Obligaciones básicas en España: alta como autónomo o sociedad, facturación, condiciones legales de la tienda. Indica que debo confirmarlo con una gestoría.
7. Prueba mínima: cómo validar la demanda gastando poco (pedir muestra, prueba con presupuesto limitado, criterios de parada).

FORMATO DE SALIDA
- Tabla de margen unitario con cada partida.
- Punto de equilibrio en publicidad.
- Tabla de escenarios: Escenario | Ventas/mes | Gasto anuncios | Beneficio neto | Comentario.
- Lista de riesgos con gravedad (alta, media, baja).
- Veredicto: seguir, ajustar o descartar, y por qué.
- Plan de prueba de 30 días con criterios de parada.

Si te faltan datos, usa supuestos prudentes y márcalos como [SUPUESTO].
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Decidir si lanzar o descartar un producto de dropshipping antes de gastar en anuncios.',
                'vote_score'        => 62,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Prompt para salir de deudas: plan con el método bola de nieve o avalancha',
                'description'       => 'Ordena tus deudas, compara el método bola de nieve y el avalancha con tus cifras y obtén un calendario de pagos realista para salir de ellas.',
                'prompt_content'    => <<<'EOT'
Actúa como orientador de finanzas personales. Quiero un plan claro para salir de mis deudas. No eres un asesor financiero autorizado ni un abogado, así que si mi situación es grave (impagos, embargos, deudas que no puedo atender), indícame que busque asesoramiento profesional, por ejemplo en asociaciones de consumidores o en la vía de la Ley de Segunda Oportunidad con un abogado.

MIS INGRESOS Y GASTOS
- Ingresos netos mensuales: [euros]
- Gastos fijos imprescindibles (vivienda, suministros, comida, transporte, seguros): [euros o lista]
- Gastos variables que podría recortar: [lista con importes]
- Ahorro disponible ahora: [euros]

MIS DEUDAS (una línea por deuda)
- [Nombre: tarjeta de crédito / préstamo personal / financiación de coche / microcrédito / familiar] | Saldo pendiente: [euros] | TAE o TIN: [porcentaje] | Cuota mínima: [euros] | Plazo restante: [meses] | Comisión por amortización anticipada: [sí / no / no sé]

LO QUE NECESITO
1. Resumen: deuda total, cuota mínima total, porcentaje de mis ingresos que se va en deudas y dinero libre al mes después de gastos y cuotas mínimas.
2. Si el dinero libre es negativo, para aquí y dame primero un plan de recorte y de negociación con los acreedores (carencia, reunificación con sus riesgos, ampliación de plazo), antes de ningún método.
3. Fondo de emergencia inicial: cuánto apartar antes de acelerar pagos (por ejemplo, 500-1.000 euros) para no volver a endeudarme ante un imprevisto.
4. Calcula los dos métodos con mis cifras:
   - Bola de nieve: pagar primero la deuda de menor saldo.
   - Avalancha: pagar primero la deuda de mayor interés.
   Para cada uno: orden de pago, mes en que se liquida cada deuda, intereses totales aproximados y mes final.
5. Recomiéndame uno según mi perfil (necesidad de motivación rápida o ahorro máximo en intereses) y explica la diferencia en euros.
6. Señales de alarma: qué productos evitar mientras salgo de deudas (créditos rápidos, pago aplazado de la tarjeta, reunificaciones con plazos muy largos).

FORMATO DE SALIDA
- Tabla resumen de deudas ordenadas.
- Tabla comparativa: Método | Orden | Intereses totales | Mes de fin.
- Calendario mes a mes del método elegido (primeros 12 meses y luego por trimestres).
- Cinco medidas concretas para liberar dinero cada mes.
- Rutina de revisión mensual de 15 minutos.

Indica que los cálculos son aproximados y que debo confirmar intereses y comisiones con cada entidad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Organizar varias deudas y saber en qué orden pagarlas y cuándo terminarás.',
                'vote_score'        => 75,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Prompt para ordenar tus finanzas personales: presupuesto mensual y fondo de emergencia',
                'description'       => 'Organiza tu dinero: presupuesto mensual por categorías, fondo de emergencia, ahorro automático y una rutina sencilla para mantenerlo.',
                'prompt_content'    => <<<'EOT'
Actúa como orientador de finanzas personales, práctico y sin juicios. Quiero ordenar mi dinero: saber en qué se va, montar un presupuesto que pueda cumplir y crear un fondo de emergencia. No me recomiendes productos de inversión concretos; esto va de orden y ahorro.

MI SITUACIÓN
- Ingresos netos mensuales: [euros] y si son fijos o variables: [fijos / variables, rango]
- Pagas extra: [número e importe]
- Personas a mi cargo: [número]
- Vivienda: [alquiler / hipoteca / vivo con mi familia] y coste mensual: [euros]
- Ahorro actual: [euros] y dónde está: [cuenta corriente, cuenta remunerada, otro]
- Deudas: [lista o ninguna]
- Objetivos: [ejemplo: fondo de emergencia, viaje en verano, entrada de un piso, dejar de llegar justo a fin de mes]

MIS GASTOS DEL ÚLTIMO MES
Pega aquí los movimientos de tu cuenta, sin números de cuenta ni datos personales, o una lista aproximada:
[concepto | importe]

LO QUE NECESITO
1. Clasifica mis gastos en categorías: vivienda, suministros, alimentación, transporte, seguros, suscripciones, ocio, ropa, salud, educación, regalos, otros. Detecta gastos hormiga y suscripciones repetidas.
2. Calcula mi tasa de ahorro actual y compárala con una referencia orientativa (por ejemplo, el reparto 50/30/20), adaptándola a mi realidad si vivo en una ciudad cara.
3. Propón un presupuesto mensual por categoría, realista, con un margen para imprevistos pequeños.
4. Fondo de emergencia: calcula el objetivo (entre 3 y 6 meses de gastos imprescindibles; más si mis ingresos son variables), cuánto aportar al mes y en cuántos meses lo alcanzo. Dónde guardarlo: separado, disponible y sin riesgo.
5. Gastos anuales: lista de pagos que no son mensuales (seguros, IBI, ITV, vuelta al cole) y cuánto apartar cada mes para no llevarme sustos.
6. Sistema: cuentas o «huchas» separadas, transferencia automática el día de cobro y rutina de revisión.

FORMATO DE SALIDA
- Tabla de gastos actuales por categoría con porcentaje sobre ingresos.
- Diez gastos que puedo recortar con el ahorro mensual estimado.
- Tabla de presupuesto propuesto: Categoría | Actual | Propuesto | Diferencia.
- Plan del fondo de emergencia mes a mes.
- Calendario de gastos anuales y aportación mensual.
- Rutina de revisión: 10 minutos a la semana y 30 minutos al mes.

No me pidas ni repitas datos bancarios. Si ves algo preocupante, dímelo con claridad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Saber en qué se va tu dinero, montar un presupuesto y crear un fondo de emergencia.',
                'vote_score'        => 73,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Prompt para analizar una empresa cotizada antes de invertir: qué mirar y qué preguntarte',
                'description'       => 'Guía educativa para estudiar una empresa cotizada: negocio, cuentas, deuda, valoración y riesgos. No es recomendación de inversión.',
                'prompt_content'    => <<<'EOT'
Actúa como profesor de análisis fundamental. Quiero aprender a estudiar una empresa cotizada antes de decidir por mi cuenta si invierto. Esto es un ejercicio educativo: no me digas si debo comprar o vender, no me des precios objetivo ni me prometas rentabilidades. Antes de empezar, recuérdame que tus datos pueden estar desactualizados o ser incorrectos y que debo comprobarlos en las cuentas oficiales de la empresa y en el regulador (por ejemplo, la CNMV en España).

LA EMPRESA
- Nombre y mercado donde cotiza: [empresa, bolsa]
- Por qué me interesa: [motivo]
- Datos que he recopilado de fuentes oficiales (pégalos aquí): [ingresos, beneficio neto, flujo de caja libre, deuda neta, número de acciones, precio actual, dividendos, de los últimos 3-5 años]
- Mi horizonte temporal: [años]
- Mi experiencia: [ninguna / básica / media]

LO QUE NECESITO
1. Entender el negocio: cómo gana dinero, principales clientes y mercados, competidores, ventajas competitivas posibles y qué podría romperlas. Si no conoces bien la empresa, dilo y dime dónde buscarlo (informe anual, presentación de resultados).
2. Calidad de las cuentas con los datos que te paso: evolución de ingresos y márgenes, conversión de beneficio en caja, rentabilidad sobre el capital, nivel de deuda respecto al resultado bruto de explotación. Explica cada ratio en una frase y qué valores suelen considerarse preocupantes en su sector, sin dogmas.
3. Valoración: explícame cómo se interpretan el PER, el rendimiento del flujo de caja libre y el valor empresa entre resultado bruto de explotación, calculados con mis datos, y por qué compararlos con su propio histórico y con empresas parecidas.
4. Dividendos: si los paga, ¿se cubren con la caja que genera?
5. Riesgos: sectoriales, regulatorios, de divisa, de concentración de clientes, de gestión y de deuda.
6. Preguntas que debo responder yo antes de decidir: ¿entiendo el negocio?, ¿qué tendría que pasar para que me equivocara?, ¿qué porcentaje de mi patrimonio estaría dispuesto a perder?, ¿encaja con mi diversificación y mi fondo de emergencia?

FORMATO DE SALIDA
- Aviso inicial sobre datos desactualizados y carácter educativo.
- Resumen del negocio en 5 líneas.
- Tabla de ratios: Ratio | Valor con mis datos | Qué significa | Señal a vigilar.
- Lista de riesgos.
- Lista de comprobación de 12 preguntas previas a invertir.
- Fuentes oficiales a revisar.

Si te pido una recomendación de compra, recuérdame que no puedes darla y que, si la necesito, debo acudir a un asesor financiero autorizado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Aprender a estudiar el negocio, las cuentas y los riesgos de una empresa cotizada con fines educativos.',
                'vote_score'        => 58,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Prompt para crear nombres de empresa o marca con comprobación de dominio y registro',
                'description'       => 'Genera nombres para tu empresa o marca, fíltralos por pronunciación y memoria, y aprende a comprobar dominio, redes y registro de marca.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista en naming. Necesito un nombre para mi empresa o marca y quiero una lista corta de candidatos sólidos, no cien nombres al azar. No puedes comprobar en tiempo real si un dominio o una marca están libres, así que dímelo y explícame cómo verificarlo yo.

EL PROYECTO
- A qué me dedico: [descripción del producto o servicio]
- Público: [quién compra, edad, sector]
- Mercado: [España / países de habla hispana / internacional]
- Valores y personalidad: [cercana, técnica, premium, divertida, sostenible...]
- Competidores y sus nombres: [lista, para no parecerme a ellos]
- Palabras que me gustan o no me gustan: [lista]
- Restricciones: [máximo de sílabas, que funcione en inglés, que no lleve mi nombre]
- Dominio preferido: [.com / .es / ambos]

PASO 1. TERRITORIOS
Propón 4 territorios creativos (por ejemplo: descriptivo, evocador, inventado, metafórico, compuesto) y explica qué transmite cada uno para mi proyecto.

PASO 2. CANDIDATOS
Genera 20 nombres repartidos entre los territorios. Para cada uno: significado o lógica, sílabas y cómo se pronuncia.

PASO 3. FILTRO
Puntúa del 1 al 5 cada nombre en: facilidad para decirlo por teléfono, facilidad para escribirlo tras oírlo, memorabilidad, encaje con la personalidad, capacidad de crecer si amplío servicios, y posibles connotaciones negativas en español, inglés u otros idiomas de mi mercado. Quédate con los 6 mejores.

PASO 4. COMPROBACIONES (explicadas para que las haga yo)
- Dominio: dónde comprobar disponibilidad y variantes razonables si no está libre.
- Redes sociales: nombres de usuario coincidentes.
- Registro de marca: buscar en la Oficina Española de Patentes y Marcas y en la oficina de la UE (EUIPO) por denominación y en las clases de Niza de mi actividad [clases si las sé]. Explícame qué es una marca parecida que puede crear conflicto aunque no sea idéntica.
- Denominación social: si voy a crear una sociedad, comprobar en el Registro Mercantil Central.
- Búsqueda en Google del nombre para ver si se asocia a algo indeseado.
Recomiéndame consultar con un agente de la propiedad industrial antes de invertir en la marca.

FORMATO DE SALIDA
- Territorios en lista.
- Tabla de 20 candidatos: Nombre | Territorio | Lógica | Sílabas.
- Tabla de puntuación de los 6 finalistas.
- Lista de comprobación con enlaces genéricos a los registros oficiales.
- Mi recomendación final y un plan B.

No uses nombres de marcas conocidas ni variaciones de ellas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'Elegir el nombre de un negocio nuevo y verificar dominio, redes y registro de marca antes de lanzarlo.',
                'vote_score'        => 67,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para crear una canción con Suno: letra, estilo y estructura',
                'description'       => 'Escribe la letra con estructura de versos y estribillo y el campo de estilo para Suno: género, tempo, voz e instrumentos, sin imitar artistas.',
                'prompt_content'    => <<<'EOT'
Quiero crear una canción original con Suno. Ayúdame a escribir la letra y la descripción del estilo con la estructura que mejor entiende la herramienta. La canción debe ser original: no imites a artistas por su nombre ni copies letras o melodías existentes. Describe los estilos con géneros, épocas, instrumentos y emociones.

LA CANCIÓN
- Para qué es: [regalo de cumpleaños, boda, vídeo de empresa, proyecto personal, anuncio de mi negocio]
- Tema o historia: [describir con detalles concretos: nombres, lugares, anécdotas]
- Emoción principal: [alegre, nostálgica, épica, romántica, divertida]
- Idioma: [español / español con algún verso en inglés]
- Género: [pop, rumba, reguetón, rock, balada, flamenco pop, electrónica, folk]
- Tempo aproximado: [lento, medio, rápido o BPM]
- Voz: [masculina, femenina, dúo, coro], con matices: [cálida, rasgada, aireada]
- Duración aproximada: [minutos]
- Palabras o frases obligatorias: [lista]

PASO 1. ESTRUCTURA
Propón una estructura sencilla, por ejemplo: intro, verso 1, preestribillo, estribillo, verso 2, preestribillo, estribillo, puente, estribillo final, outro. Ajusta según el género.

PASO 2. LETRA
Escribe la letra con estas reglas:
- Etiquetas de sección entre corchetes en líneas propias: [Intro], [Verse], [Pre-Chorus], [Chorus], [Bridge], [Outro].
- Versos de longitud parecida dentro de cada sección para que la métrica fluya.
- Rima natural, sin forzar palabras raras. Evita clichés vacíos; usa imágenes concretas de la historia que te he dado.
- Estribillo corto, repetible y con el gancho en la primera línea.
- Escribe las cifras y siglas en letra para que se pronuncien bien.
- Máximo de unas 250 palabras para que entre en la duración.

PASO 3. CAMPO DE ESTILO
Redacta la descripción del estilo en una línea de menos de 200 caracteres, en inglés (la herramienta suele interpretarlo mejor), con: género y subgénero, época o ambiente, tempo, instrumentos principales, tipo de voz y emoción. Sin nombres de artistas ni de canciones.

PASO 4. VARIANTES Y REVISIÓN
Ofrece dos variaciones del campo de estilo (más acústica y más bailable). Después repasa la letra: sílabas que se atascan, rimas pobres, partes demasiado largas. Sugiere qué cambiar si la primera generación suena precipitada o la voz no entra a tiempo.

FORMATO DE SALIDA
- Estructura propuesta.
- Letra completa en un bloque listo para copiar.
- Campo de estilo principal y dos variantes.
- Título de la canción (tres opciones).
- Lista de ajustes para la segunda generación.

Antes de usar la canción con fines comerciales, revisa las condiciones de uso y la licencia de tu plan de Suno.
EOT,
                'tool_name'         => 'Suno',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Crear una canción personalizada para un regalo, un evento o un vídeo con Suno.',
                'vote_score'        => 77,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Prompts de vídeo para Kling, Seedance o Wan: plano, movimiento de cámara y duración',
                'description'       => 'Escribe prompts de vídeo con IA que funcionan: sujeto, acción, plano, movimiento de cámara, luz y duración, escena a escena y sin deformaciones.',
                'prompt_content'    => <<<'EOT'
Actúa como director de fotografía que trabaja con generadores de vídeo por IA como Kling, Seedance o Wan. Quiero prompts de vídeo claros, que den clips coherentes de pocos segundos, sin movimientos imposibles ni personajes que se deforman.

EL PROYECTO
- Para qué es: [anuncio para redes, cabecera de vídeo, presentación de producto, contenido para mi marca, videoclip]
- Duración total deseada: [segundos] y duración por clip permitida por la herramienta: [5 / 10 segundos]
- Formato: [vertical 9:16 / horizontal 16:9 / cuadrado]
- Punto de partida: [solo texto / imagen inicial propia que adjunto]
- Idea general: [describir la historia o el mensaje]
- Estética: [realista, cinematográfica, animación 3D, documental, publicidad de producto]
- Producto o persona que aparece: [descripción; si es una persona real, tengo su permiso]

REGLAS
- Nada de personajes, logotipos ni marcas con derechos citados por su nombre, ni imitar a personas reales sin permiso.
- Una sola acción principal por clip. Los generadores fallan cuando se encadenan muchas acciones en pocos segundos.

PASO 1. GUION DE PLANOS
Divide la idea en clips de [duración por clip]. Para cada uno indica el objetivo narrativo y cómo enlaza con el siguiente.

PASO 2. PROMPT POR CLIP
Escribe cada prompt en este orden:
1. Tipo de plano: plano general, plano medio, primer plano, plano detalle, cenital.
2. Sujeto con descripción física constante (ropa, colores, rasgos) para mantener la continuidad entre clips.
3. Acción concreta y su velocidad (lenta, natural).
4. Escenario y momento del día.
5. Movimiento de cámara: fija, travelling lateral, acercamiento lento, giro alrededor del sujeto, cámara en mano suave, grúa ascendente. Uno solo por clip.
6. Iluminación y color: hora dorada, luz suave de ventana, neón, contraluz.
7. Estilo y lente: objetivo de 35 mm o 85 mm, poca profundidad de campo, grano de película.
8. Duración del clip.
Añade un prompt negativo breve: sin texto en pantalla, sin manos deformes, sin parpadeos, sin cambios de cara.

PASO 3. VERSIÓN DESDE IMAGEN
Si parto de una imagen propia, reescribe los prompts describiendo solo el movimiento y la cámara, sin volver a describir lo que ya está en la imagen.

FORMATO DE SALIDA
- Tabla del guion: Clip | Duración | Plano | Acción | Movimiento de cámara | Transición.
- Un bloque de texto por clip con el prompt listo para copiar y el prompt negativo.
- Tres errores frecuentes y cómo corregirlos (exceso de acciones, cámara contradictoria, sujeto que cambia).
- Consejos de montaje y música para unir los clips.

Revisa las condiciones de uso comercial de la herramienta antes de publicar el vídeo.
EOT,
                'tool_name'         => 'Kling',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Crear clips de vídeo con IA para anuncios, redes sociales o presentaciones de producto.',
                'vote_score'        => 71,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Plantilla de prompt en formato JSON para generar imágenes más controladas',
                'description'       => 'Convierte tu idea en un prompt estructurado en JSON (sujeto, composición, luz, cámara, estilo y restricciones) para controlar mejor las imágenes.',
                'prompt_content'    => <<<'EOT'
Actúa como director de arte especializado en generación de imágenes con IA (por ejemplo, Nano Banana en Gemini o el generador de imágenes de ChatGPT). Quiero pasar de prompts sueltos a prompts estructurados en JSON, porque así controlo mejor cada parte de la imagen y puedo cambiar un solo campo sin rehacerlo todo.

MI IDEA
- Qué quiero conseguir: [describir la imagen en una o dos frases]
- Uso: [publicación en redes, portada de blog, foto de producto, ilustración para una presentación]
- Formato: [1:1, 4:5, 16:9, 9:16]
- Imagen de referencia propia: [sí, la adjunto / no]. Solo fotos mías o con permiso.
- Estilo: [fotografía realista, ilustración plana, acuarela, 3D, collage]
- Texto dentro de la imagen: [texto exacto o ninguno]
- Colores de marca: [códigos o nombres]

REGLAS
No incluyas personajes, logotipos ni marcas con derechos por su nombre, ni el estilo de artistas concretos. Describe el estilo con técnicas, épocas y materiales.

PASO 1. PLANTILLA
Rellena esta estructura con mi idea. Mantén las claves en inglés y los valores en español o inglés, pero sé coherente:
{
  "subject": "[sujeto principal con detalles físicos]",
  "action": "[qué hace o cómo está colocado]",
  "environment": "[lugar, fondo, momento del día]",
  "composition": {"framing": "[plano]", "angle": "[ángulo]", "position": "[regla de tercios, centrado]"},
  "camera": {"lens": "[35mm, 85mm, macro]", "depth_of_field": "[poca, mucha]"},
  "lighting": {"type": "[natural, estudio]", "direction": "[lateral, contraluz]", "mood": "[cálida, fría]"},
  "style": "[técnica visual]",
  "color_palette": ["[color 1]", "[color 2]", "[color 3]"],
  "text": {"content": "[texto exacto o vacío]", "placement": "[posición]"},
  "aspect_ratio": "[formato]",
  "constraints": ["sin marcas de agua", "sin logotipos", "manos y rostros naturales"]
}

PASO 2. VALIDACIÓN
Comprueba que el JSON es válido (comillas dobles, comas, llaves cerradas) y que no hay campos contradictorios (por ejemplo, luz de mediodía y ambiente nocturno).

PASO 3. GENERACIÓN
Genera la imagen usando el JSON como prompt. Si adjunto una referencia, añade el campo "reference" indicando qué conservar de ella (composición, producto, colores) y qué no.

PASO 4. VARIACIONES CONTROLADAS
Propón tres variaciones cambiando un solo campo cada vez (por ejemplo, solo la iluminación, solo el ángulo, solo la paleta) y explica qué efecto esperar.

FORMATO DE SALIDA
- JSON completo en un bloque de código.
- Imagen generada.
- Tabla de variaciones: Campo modificado | Valor nuevo | Efecto esperado.
- Consejos para reutilizar la plantilla en una serie de imágenes coherentes.
EOT,
                'tool_name'         => 'Gemini',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Generar series de imágenes coherentes y fáciles de ajustar para redes, blog o fotos de producto.',
                'vote_score'        => 69,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Prompt para escribir una novela con IA sin perder tu voz: premisa, personajes y escaleta',
                'description'       => 'Usa la IA como editor y no como escritor: afina la premisa, construye personajes, monta la escaleta y revisa capítulos manteniendo tu estilo.',
                'prompt_content'    => <<<'EOT'
Actúa como editor literario con experiencia en acompañar a autores noveles. Quiero escribir una novela y usarte como apoyo, no como sustituto: la prosa la escribo yo. Tu papel es preguntar, ordenar, detectar problemas y proponer opciones. No escribas capítulos completos salvo que te lo pida expresamente, y cuando propongas frases, márcalas como sugerencia.

MI PROYECTO
- Género: [novela negra, fantasía, romántica, histórica, literaria, ciencia ficción, juvenil]
- Idea en una o dos frases: [idea]
- Extensión prevista: [número de palabras o páginas]
- Público: [adulto, juvenil]
- Punto de vista: [primera persona, tercera limitada, varios narradores]
- Lo que ya tengo escrito: [nada, notas, primeros capítulos]
- Autores o tonos que me inspiran (descritos, no para copiarlos): [describir el tono]
- Fragmento de mi escritura (300-500 palabras) para que conozcas mi voz: [pegar fragmento]

FASE 1. PREMISA
Hazme hasta 8 preguntas para afinar la idea (qué quiere el protagonista, qué se lo impide, qué está en juego, por qué ahora). Después propón tres versiones de la premisa en una frase y dime cuál tiene más conflicto.

FASE 2. VOZ
Analiza mi fragmento: longitud de frases, registro, uso del diálogo, ritmo, imágenes recurrentes, muletillas. Redacta una ficha de estilo que usarás para revisar mis capítulos sin cambiar mi voz.

FASE 3. PERSONAJES
Para el protagonista, el antagonista y dos secundarios: deseo, necesidad, herida, contradicción, cómo habla y cómo cambia a lo largo de la historia. Señala si dos personajes cumplen la misma función.

FASE 4. ESCALETA
Propón una estructura en actos y una escaleta capítulo a capítulo: qué ocurre, qué cambia, qué información recibe el lector y con qué gancho termina. Marca los puntos de giro y el clímax.

FASE 5. REVISIÓN DE CAPÍTULOS
Cuando te pegue un capítulo: primero comentarios de estructura (¿avanza la trama?, ¿hay tensión?), luego de personajes y diálogos, y por último de estilo, siempre comparando con mi ficha de voz. Indica los fragmentos con cita breve y propón cómo resolverlos, sin reescribir el capítulo.

FORMATO DE SALIDA
- Preguntas numeradas en la fase 1; espera mis respuestas antes de pasar a la siguiente fase.
- Ficha de estilo en tabla: Rasgo | Ejemplo de mi texto | Cómo respetarlo.
- Fichas de personajes.
- Escaleta en tabla: Capítulo | Acontecimiento | Cambio | Gancho final.
- Revisiones en tres bloques: estructura, personajes, estilo.

Recuerda que el texto final debe ser mío; si en algún momento escribes por mí, avísame.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Planificar y revisar una novela con ayuda de la IA conservando tu propio estilo de escritura.',
                'vote_score'        => 65,
                'resource_type'     => 'prompt',
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
                'views_count' => rand(150, 600),
                'saves_count' => rand(15, 60),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
