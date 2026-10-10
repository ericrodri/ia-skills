<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills646Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Auditoría CRO de una página con hipótesis de mejora priorizadas',
                'description'       => 'Inspirado en los skills virales de marketing de 2026 (estilo Marketing Skills): analiza una página como un especialista en optimización de la conversión y entrega problemas detectados, hipótesis y un plan de pruebas ordenado por impacto.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista sénior en optimización de la tasa de conversión (CRO) con experiencia en SaaS, comercio electrónico y generación de clientes potenciales. Vas a auditar una página concreta y devolver un plan de mejora priorizado, no una lista genérica de buenas prácticas.

contexto:
- URL o tipo de página: [página de inicio, landing de campaña, ficha de producto, página de precios, formulario de registro]
- Contenido de la página: [pega el texto completo de la página, en orden, indicando dónde hay botones, imágenes, formularios y testimonios]
- Objetivo de conversión principal: [registro, compra, solicitud de demo, descarga, suscripción]
- Objetivos secundarios: [lista o "ninguno"]
- Fuentes de tráfico principales: [búsqueda orgánica, anuncios de pago, redes, email, referidos]
- Nivel de conocimiento del visitante: [no conoce el problema, conoce el problema, compara soluciones, conoce la marca]
- Datos disponibles: [tasa de conversión actual, tasa de rebote, mapas de calor, grabaciones, encuestas; o "no tengo datos"]
- Tráfico mensual aproximado: [número de visitas]

tarea:
1. Evalúa la página en estas siete áreas y puntúa cada una de 1 a 5:
   - Claridad de la propuesta de valor en los primeros 5 segundos.
   - Coincidencia entre el mensaje de la fuente de tráfico y el titular.
   - Jerarquía visual y recorrido de lectura.
   - Llamadas a la acción: texto, número, ubicación y coherencia.
   - Prueba social y credibilidad (testimonios, logotipos, cifras, garantías).
   - Fricción: campos de formulario, pasos, sorpresas de precio, carga cognitiva.
   - Gestión de objeciones: dudas habituales del visitante que la página no responde.
2. Para cada problema detectado, redacta una hipótesis con la estructura: "Como hemos observado [problema], creemos que [cambio] provocará [resultado] en [métrica], porque [razón basada en el comportamiento del usuario]".
3. Prioriza las hipótesis con el modelo ICE (impacto, confianza y facilidad, de 1 a 10) y ordénalas.
4. Indica qué hipótesis requieren un test A/B y cuáles son correcciones evidentes que conviene aplicar sin probar.
5. Calcula de forma orientativa si el tráfico mensual permite obtener resultados significativos en un test A/B en menos de cuatro semanas; si no, recomienda alternativas (pruebas de cinco segundos, encuestas, test con usuarios).

Formato de salida:
1. Resumen en cinco líneas con los tres mayores frenos de conversión.
2. Tabla de puntuación por área con comentario breve.
3. Lista de hipótesis priorizadas: N.º | Problema | Hipótesis | Cambio propuesto | Métrica | I | C | F | Puntuación ICE | Tipo (test / corrección directa).
4. Reescritura propuesta del titular, subtítulo y llamada a la acción principal (3 variantes cada uno).
5. Plan de las próximas 6 semanas: qué probar primero, duración y criterio de éxito.
6. Preguntas abiertas: datos que necesitarías para afinar el diagnóstico.

Reglas:
- Basa cada observación en el contenido real de la página, citando el fragmento.
- No recomiendes cambios de diseño sin explicar el motivo psicológico o de usabilidad.
- Si no hay datos cuantitativos, dilo claramente y baja la confianza de las hipótesis.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Detectar por qué una landing o página de producto no convierte y decidir qué probar primero',
                'vote_score'        => 76,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Copy de página de inicio orientado a conversión',
                'description'       => 'Inspirado en los skills virales de copywriting de 2026 (estilo Marketing Skills): escribe la página de inicio completa sección a sección a partir de la investigación de clientes, con variantes de titular y llamadas a la acción.',
                'prompt_content'    => <<<'EOT'
Actúa como redactor publicitario especializado en páginas web que convierten, con experiencia en productos digitales y servicios B2B y B2C. Vas a escribir el texto completo de una página de inicio partiendo de lo que dicen los clientes, no de lo que la empresa cree de sí misma.

contexto:
- Producto o servicio: [nombre y descripción en dos frases]
- Cliente ideal: [cargo o perfil, sector, tamaño, situación]
- Problema principal que resuelve: [problema]
- Alternativas que usa hoy el cliente: [competidores, hojas de cálculo, hacerlo a mano, no hacer nada]
- Diferenciador real: [qué hace mejor o distinto que las alternativas]
- Pruebas disponibles: [número de clientes, resultados medibles, testimonios textuales, logotipos, premios]
- Objeciones frecuentes: [precio, complejidad, migración, confianza, tiempo]
- Conversión principal: [prueba gratuita, demo, compra, lista de espera]
- Frases literales de clientes (reseñas, entrevistas, tickets de soporte): [pega aquí todas las que tengas]
- Tono de marca: [cercano, experto, directo, divertido, sobrio]

tarea:
1. Analiza las frases de clientes y extrae: palabras exactas con las que describen el problema, resultados que valoran, momentos de frustración y motivos de compra. Usa este lenguaje en el copy.
2. Define el mensaje central en una frase: para [cliente], que [problema], [producto] es [categoría] que [beneficio principal], a diferencia de [alternativa].
3. Escribe la página con estas secciones:
   - Cabecera: titular (máx. 10 palabras), subtítulo (máx. 25 palabras), llamada a la acción principal y secundaria, y texto bajo el botón que reduzca el riesgo.
   - Barra de confianza: qué logotipos o cifras mostrar.
   - Problema: el dolor descrito con las palabras del cliente.
   - Solución y cómo funciona en 3 pasos.
   - Beneficios: 3 a 5 bloques con titular orientado a resultado y explicación breve; nada de listas de funciones sin contexto.
   - Prueba social: selección y orden de testimonios, con el resultado destacado de cada uno.
   - Objeciones: sección de preguntas frecuentes que responda a las objeciones reales.
   - Cierre: repetición de la propuesta y llamada a la acción final.
4. Escribe 5 variantes de titular con ángulos diferentes (resultado, dolor, diferenciador, identidad, rapidez) y 3 variantes de texto del botón.

Formato de salida:
1. Hallazgos del lenguaje del cliente (tabla: frase literal | qué revela | dónde se usa en la página).
2. Mensaje central.
3. Página completa con encabezados de sección, lista para pasar a diseño.
4. Variantes de titular y botón.
5. Notas para el diseñador: qué elemento visual acompaña a cada sección.

Reglas:
- Prioriza claridad sobre ingenio: un visitante debe entender qué haces en 5 segundos.
- Escribe en segunda persona y en voz activa.
- Sustituye cada adjetivo vacío ("innovador", "líder", "potente") por un dato o un resultado concreto.
- Si falta una prueba, deja un hueco marcado como [añadir dato] en lugar de inventarla.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Reescribir la página de inicio de un producto para que comunique valor y convierta mejor',
                'vote_score'        => 72,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Secuencia de emails de bienvenida y activación para nuevos usuarios',
                'description'       => 'Inspirado en los skills virales de email marketing de 2026 (estilo Marketing Skills): diseña una secuencia de bienvenida que lleve al nuevo usuario a la acción clave del producto, con disparadores por comportamiento.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista en email marketing de ciclo de vida y activación de usuarios. Vas a diseñar una secuencia de bienvenida cuyo objetivo no es "presentar la marca", sino conseguir que el nuevo usuario complete la acción que predice que se quedará.

contexto:
- Producto: [nombre y descripción breve]
- Tipo de alta: [prueba gratuita de X días, plan gratuito, compra, suscripción a newsletter]
- Acción de activación (la que más se relaciona con la retención): [p. ej. crear el primer proyecto, invitar a un compañero, conectar una integración]
- Pasos necesarios para llegar a esa acción: [lista]
- Motivos por los que los usuarios abandonan antes de activarse: [lista o "desconocido"]
- Herramienta de envío: [Mailchimp, Brevo, Customer.io, HubSpot, Klaviyo...]
- Datos de comportamiento disponibles para segmentar: [eventos que se registran]
- Remitente: [persona real, fundador, equipo]
- Tono: [cercano, profesional, divertido]

tarea:
1. Diseña la secuencia de 5 a 7 emails a lo largo de [número] días. Para cada email define:
   - Disparador: tiempo desde el alta o evento de comportamiento (p. ej. "24 horas sin crear proyecto").
   - Condición de salida: qué hace que el usuario deje de recibirlo (p. ej. ya completó la activación).
   - Objetivo único del email.
2. Incluye estos tipos de email, adaptándolos al producto:
   - Bienvenida inmediata con un único primer paso.
   - Ayuda para superar el obstáculo más común.
   - Historia o caso de un cliente parecido que obtuvo un resultado.
   - Recurso práctico o plantilla que acelera la activación.
   - Email personal del fundador o del equipo preguntando qué le frena (invita a responder).
   - Recordatorio antes de que termine la prueba, si aplica.
   - Rama para usuarios activados: siguiente paso para profundizar.
3. Escribe cada email completo: tres opciones de asunto, preasunto, cuerpo de 80 a 180 palabras, un único botón o enlace y posdata si aporta.
4. Propón las métricas de éxito de la secuencia y los primeros tests A/B a realizar.

Formato de salida:
1. Diagrama de la secuencia en texto: email | día o disparador | condición de salida | objetivo.
2. Los emails completos, cada uno con su encabezado.
3. Ramas alternativas: qué recibe quien se activa pronto y quien no abre nada.
4. Métricas (aperturas, clics, tasa de activación por email, bajas) y valores orientativos de referencia.
5. Ideas de test A/B priorizadas.

Reglas:
- Un email, un objetivo, una llamada a la acción.
- Asuntos de menos de 45 caracteres, sin mayúsculas sostenidas ni promesas exageradas.
- Escribe como una persona, no como un boletín corporativo.
- No envíes contenido de activación a quien ya se ha activado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Aumentar la activación de nuevos usuarios en una prueba gratuita o plan gratuito mediante emails automáticos',
                'vote_score'        => 68,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Diseñar la página de precios: estructura de planes, anclaje y objeciones',
                'description'       => 'Inspirado en los skills virales de estrategia de precios de 2026 (estilo Marketing Skills): define planes, métrica de valor, anclaje y el texto de la página de precios para que elegir sea fácil.',
                'prompt_content'    => <<<'EOT'
Actúa como consultor de estrategia de precios y empaquetado para productos digitales y servicios. Vas a diseñar la estructura de planes y la página de precios para que el cliente entienda qué elegir en menos de un minuto y para que el plan recomendado sea el más elegido.

contexto:
- Producto: [nombre y descripción breve]
- Modelo actual: [suscripción mensual o anual, pago único, por uso, freemium]
- Precios actuales (si existen): [planes y precios]
- Segmentos de clientes: [p. ej. autónomos, pymes, empresas grandes] y qué valora cada uno
- Métrica de valor candidata: [usuarios, proyectos, contactos, uso, ingresos del cliente]
- Funciones del producto: [lista completa]
- Costes variables por cliente: [si los hay]
- Competidores y sus precios: [lista]
- Objetivo: [más ingresos por cliente, más conversión de prueba a pago, subir a clientes más grandes]

tarea:
1. Elige la métrica de valor: la que crece cuando el cliente obtiene más valor, es fácil de entender y de predecir. Justifica la elección y descarta alternativas.
2. Diseña de 3 a 4 planes. Para cada plan define: nombre orientado al cliente (no "Básico / Pro / Premium" si hay algo mejor), segmento al que va dirigido, precio mensual y anual, límites de la métrica de valor y funciones incluidas.
3. Aplica principios de psicología de precios y explica cómo se usan:
   - Anclaje: plan alto o de empresa que hace razonable el recomendado.
   - Plan recomendado destacado visualmente.
   - Descuento anual expresado de forma clara (meses gratis o porcentaje).
   - Evitar la parálisis: cada plan debe tener un perfil reconocible.
4. Decide qué funciones van en cada plan: las que generan valor diferencial suben de plan; las básicas para activarse nunca se bloquean.
5. Escribe el texto de la página de precios:
   - Titular y subtítulo.
   - Tarjetas de cada plan con frase de "ideal para", precio, botón y 5 a 7 puntos destacados.
   - Tabla comparativa completa agrupada por categorías.
   - Preguntas frecuentes sobre facturación, cambios de plan, cancelación, impuestos y garantía.
   - Elementos de confianza junto al botón (sin tarjeta, cancelación en un clic, garantía).

Formato de salida:
1. Métrica de valor elegida y razonamiento.
2. Tabla de planes: plan | para quién | precio mensual | precio anual | límites | funciones clave.
3. Explicación de la estrategia de anclaje y del plan recomendado.
4. Texto completo de la página de precios.
5. Riesgos (canibalización entre planes, clientes que se quedan en el gratuito) y cómo mitigarlos.
6. Plan de prueba: qué medir tras el cambio y durante cuánto tiempo.

Reglas:
- No copies la estructura del competidor sin justificarla para este producto.
- Señala cualquier supuesto que hayas hecho sobre costes o disposición a pagar.
- Si propones subir precios, incluye cómo comunicarlo a los clientes actuales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Rediseñar planes y página de precios de un SaaS o servicio para mejorar conversión e ingreso medio',
                'vote_score'        => 64,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Páginas de comparación contra competidores: "X vs Y" y "alternativas a X"',
                'description'       => 'Inspirado en los skills virales de páginas comparativas de 2026 (estilo Marketing Skills): crea páginas honestas de comparación y de alternativas que captan tráfico de búsqueda con alta intención de compra.',
                'prompt_content'    => <<<'EOT'
Actúa como estratega de marketing de producto y SEO especializado en páginas de comparación. Estas páginas atraen a personas que ya están decidiendo qué herramienta comprar, así que deben ser útiles, creíbles y claras sobre para quién es mejor cada opción.

contexto:
- Mi producto: [nombre y descripción breve]
- Competidor o competidores a comparar: [nombres]
- Tipo de página: [mi producto vs competidor / alternativas a competidor / comparativa de varias herramientas]
- Puntos fuertes reales de mi producto: [lista]
- Puntos donde el competidor es mejor: [lista honesta]
- Precios de ambos: [precios actuales y fecha de consulta]
- Motivos por los que clientes se han cambiado desde el competidor: [frases literales o "desconocido"]
- Público objetivo: [perfil]
- Palabra clave objetivo: [p. ej. "competidor vs mi producto", "alternativas a competidor"]

tarea:
1. Define para qué tipo de cliente es mejor cada herramienta. La página debe reconocer abiertamente cuándo el competidor es mejor opción: eso aumenta la credibilidad.
2. Escribe la página completa con esta estructura:
   - Titular con la palabra clave y subtítulo que resuma la diferencia principal en una frase.
   - Resumen rápido para quien tiene prisa: "Elige [mi producto] si…" y "Elige [competidor] si…".
   - Tabla comparativa con 8 a 12 criterios relevantes para el comprador (precio, facilidad de uso, funciones clave, integraciones, soporte, idioma, privacidad), con valores concretos, no solo marcas de verificación.
   - Comparación detallada por criterio, en párrafos breves.
   - Precios lado a lado con un ejemplo de coste para un caso típico.
   - Testimonios de clientes que se cambiaron y por qué.
   - Cómo migrar: pasos, tiempo estimado y ayuda disponible.
   - Preguntas frecuentes.
   - Llamada a la acción final.
3. Si la página es de "alternativas a X", incluye de 5 a 8 alternativas reales (incluida la mía, sin ponerla siempre la primera si no tiene sentido), con para quién es cada una, precio orientativo, ventajas e inconvenientes.
4. Prepara los elementos SEO: título de la página (máx. 60 caracteres), meta descripción (máx. 155 caracteres), estructura de encabezados y enlaces internos sugeridos.

Formato de salida:
1. Posicionamiento: frase para cada herramienta.
2. Página completa lista para maquetar.
3. Elementos SEO.
4. Lista de afirmaciones que deben verificarse y fecharse antes de publicar (precios, funciones).
5. Plan de mantenimiento: cada cuánto revisar la página.

Reglas:
- Nunca inventes datos del competidor; marca como [verificar] todo lo que no esté en el contexto.
- Evita el tono despectivo hacia el competidor: compara hechos.
- Incluye una fecha de "última actualización" visible.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Captar tráfico de búsqueda de personas que comparan herramientas y convertirlo en registros',
                'vote_score'        => 59,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estrategia de lanzamiento en Product Hunt y comunidades online',
                'description'       => 'Inspirado en los skills virales de lanzamiento de producto de 2026 (estilo Marketing Skills): planifica el antes, el día y el después de un lanzamiento en Product Hunt, Hacker News, Reddit y comunidades del nicho.',
                'prompt_content'    => <<<'EOT'
Actúa como responsable de lanzamientos de producto con experiencia en Product Hunt y en comunidades online. Vas a preparar un plan de lanzamiento completo, con calendario, textos y tareas, que maximice la visibilidad sin recurrir a prácticas que las comunidades penalizan.

contexto:
- Producto: [nombre, descripción breve y enlace]
- Fase: [primer lanzamiento, nueva versión importante, nueva función]
- Público objetivo: [perfil]
- Audiencia propia actual: [seguidores en redes, suscriptores de email, usuarios, comunidad]
- Fecha prevista: [fecha o "propónmela"]
- Equipo disponible el día del lanzamiento: [número de personas y horas]
- Recursos visuales: [vídeo de demo, capturas, GIF, logotipo]
- Oferta de lanzamiento: [descuento, plan ampliado, ninguna]
- Comunidades donde está mi público: [subreddits, foros, grupos de Slack o Discord, newsletters]

tarea:
1. Plan previo (de 4 a 6 semanas antes):
   - Preparación de la ficha: nombre, eslogan (máx. 60 caracteres), descripción, galería, primer comentario del creador.
   - Construcción de audiencia: cómo avisar a la comunidad propia y conseguir personas interesadas en recibir el aviso, sin pedir votos de forma directa.
   - Búsqueda de "cazador" si tiene sentido y cómo contactarlo.
   - Elección del día de la semana y la hora según competencia y zona horaria del público.
2. Plan del día del lanzamiento, hora a hora:
   - Publicación, primer comentario y respuesta a todos los comentarios.
   - Avisos a la audiencia propia por email y redes, con textos escritos.
   - Gestión de preguntas difíciles y críticas.
3. Adaptación a otras comunidades: para cada comunidad indica normas a respetar, formato de publicación que funciona (historia del creador, aprendizaje, pregunta, demo) y un borrador de publicación. Hacker News y Reddit castigan la autopromoción: propón ángulos de valor.
4. Plan posterior (2 semanas): seguimiento con nuevos usuarios, aprovechamiento de la insignia o el resultado, contenido sobre lo aprendido y conversión de visitantes en usuarios activos.

Formato de salida:
1. Calendario de 6 semanas con tareas y responsables.
2. Textos de la ficha de Product Hunt (eslogan en 5 variantes, descripción y primer comentario).
3. Guion del día hora a hora.
4. Borradores para cada comunidad y para email y redes.
5. Respuestas preparadas para las 8 preguntas o críticas más probables.
6. Métricas: visitas, registros, activaciones, posición, menciones; y objetivo realista para cada una.

Reglas:
- No propongas comprar votos, intercambiar votos ni usar cuentas falsas.
- Distingue entre lo que depende de mí y lo que depende del azar del día.
- Ajusta la ambición del plan al tamaño real de mi audiencia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparar el lanzamiento de un producto digital en Product Hunt y comunidades sin improvisar el día clave',
                'vote_score'        => 62,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Diseñar un programa de referidos que los clientes quieran usar',
                'description'       => 'Inspirado en los skills virales de crecimiento por referidos de 2026 (estilo Marketing Skills): diseña incentivos, mecánica, momentos de solicitud, textos y métricas de un programa de recomendación rentable.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista en crecimiento y programas de referidos. Vas a diseñar un programa en el que los clientes actuales recomienden el producto de forma natural, con incentivos rentables y momentos de solicitud bien elegidos.

contexto:
- Producto o servicio: [nombre y descripción]
- Modelo de negocio: [suscripción, compra única, servicio recurrente]
- Precio medio y margen aproximado: [cifras]
- Valor de vida del cliente (LTV) y coste de adquisición actual (CAC): [cifras o "desconocido"]
- Momento en que el cliente obtiene su primer resultado: [descripción]
- Perfil del cliente y con quién comparte cosas: [compañeros de trabajo, amigos, familia, comunidad]
- Herramientas disponibles: [plataforma de referidos, CRM, desarrollo propio]
- Restricciones legales o de marca: [sectores regulados, no ofrecer dinero, etc.]

tarea:
1. Evalúa si el producto es apto para referidos: frecuencia con la que el cliente habla del problema, facilidad de explicar el producto y nivel de satisfacción. Si no lo es, dilo y propón qué mejorar antes.
2. Diseña el incentivo:
   - Compara opciones: doble cara (ganan quien recomienda y quien llega), una sola cara, créditos en el producto, descuento, dinero, mejora de plan, donación o reconocimiento.
   - Calcula el coste máximo por referido que el negocio puede asumir a partir del LTV y el margen.
   - Propón niveles o recompensas escalonadas si tienen sentido.
3. Define la mecánica completa: cómo se genera el enlace o código, cuándo se considera válido un referido, cuándo se entrega la recompensa, plazo de validez y reglas contra el fraude.
4. Elige los momentos de solicitud: justo después del primer resultado, tras una valoración positiva, al renovar, tras un hito. Evita pedir antes de que el cliente haya recibido valor.
5. Escribe los textos:
   - Pantalla o sección del programa en el producto.
   - Email de presentación del programa.
   - Mensaje predefinido que el cliente comparte (versión email, WhatsApp y LinkedIn).
   - Página de aterrizaje para el invitado.
   - Notificaciones de referido conseguido y de recompensa entregada.
6. Define las métricas y el panel de seguimiento.

Formato de salida:
1. Diagnóstico de aptitud (5 líneas).
2. Propuesta de incentivo con cálculo de rentabilidad.
3. Reglas del programa en lenguaje claro, listas para publicar.
4. Mapa de momentos de solicitud.
5. Todos los textos.
6. Métricas: porcentaje de clientes que comparten, invitaciones por cliente, conversión de invitados, coste por cliente referido y comparación con el CAC.
7. Plan de lanzamiento en 30 días y experimentos para mejorar la participación.

Reglas:
- La recompensa nunca debe costar más que el margen que deja el nuevo cliente.
- Facilita compartir en un solo clic.
- Señala qué supuestos deben validarse con datos reales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Crear un programa de referidos rentable para un SaaS, tienda online o servicio recurrente',
                'vote_score'        => 55,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Copy de anuncios de pago con variantes para test A/B',
                'description'       => 'Inspirado en los skills virales de publicidad de pago de 2026 (estilo Marketing Skills): genera anuncios para Meta, Google y LinkedIn organizados por ángulo creativo, listos para probar en tests A/B ordenados.',
                'prompt_content'    => <<<'EOT'
Actúa como redactor de publicidad de pago y especialista en experimentación creativa. Vas a producir una batería de anuncios organizada por ángulos, de forma que cada test A/B responda a una pregunta concreta y no sea una mezcla de cambios imposible de interpretar.

contexto:
- Producto u oferta: [descripción y precio]
- Página de destino: [qué promete y qué pide]
- Público objetivo: [perfil, nivel de conocimiento del problema y del producto]
- Plataformas: [Meta (Facebook e Instagram), Google Search, LinkedIn, TikTok]
- Objetivo de campaña: [ventas, registros, clientes potenciales, instalaciones]
- Presupuesto diario aproximado: [cantidad]
- Anuncios anteriores y resultados: [textos que funcionaron o no, con métricas si las hay]
- Prueba social y datos disponibles: [cifras, testimonios, premios]
- Restricciones: [políticas del sector, palabras prohibidas, menciones legales]

tarea:
1. Define de 5 a 6 ángulos creativos distintos, por ejemplo: dolor del problema, resultado deseado, prueba social, objeción resuelta, comparación con la alternativa actual, urgencia legítima. Para cada ángulo indica a qué tipo de público convence más.
2. Para cada ángulo escribe, según la plataforma:
   - Meta: texto principal (versión corta de menos de 125 caracteres y versión larga), titular (máx. 40 caracteres), descripción y concepto visual o de vídeo en una frase.
   - Google Search: 10 titulares de máx. 30 caracteres y 4 descripciones de máx. 90 caracteres, incluyendo la palabra clave en varios.
   - LinkedIn: texto introductorio (máx. 150 caracteres visibles), titular y llamada a la acción.
3. Diseña el plan de tests A/B:
   - Primera ronda: probar ángulos entre sí manteniendo el formato.
   - Segunda ronda: dentro del ángulo ganador, probar ganchos o titulares.
   - Tercera ronda: probar llamada a la acción u oferta.
   Indica para cada ronda la hipótesis, la variable que cambia, las que se mantienen y el criterio para declarar ganador.
4. Calcula de forma orientativa cuánto tiempo y presupuesto necesita cada ronda para alcanzar un volumen mínimo de conversiones por variante.

Formato de salida:
1. Tabla de ángulos: ángulo | idea central | público | por qué puede funcionar.
2. Anuncios por plataforma y ángulo, con recuento de caracteres.
3. Plan de experimentación en tres rondas.
4. Lista de comprobación de coherencia entre anuncio y página de destino.
5. Métricas a vigilar en cada plataforma (CTR, CPC, tasa de conversión, coste por adquisición, frecuencia) y señales de fatiga creativa.

Reglas:
- Respeta los límites de caracteres de cada plataforma y cuenta los caracteres.
- No hagas promesas que la página de destino no cumpla.
- Evita afirmaciones absolutas que infrinjan políticas publicitarias ("garantizado", "el mejor") salvo que puedan demostrarse.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Lanzar campañas de Meta, Google o LinkedIn con variantes de anuncio organizadas para aprender qué mensaje funciona',
                'vote_score'        => 70,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Onboarding in-app: primeros pasos que llevan al usuario al momento "ajá"',
                'description'       => 'Inspirado en los skills virales de onboarding y activación de 2026 (estilo Marketing Skills): define el momento "ajá" del producto y diseña el recorrido dentro de la aplicación que lleva al usuario hasta él con la menor fricción posible.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista en crecimiento de producto (product-led growth) y diseño de onboarding. Tu objetivo es que el mayor porcentaje posible de usuarios nuevos llegue al momento en el que entienden el valor del producto, en el menor tiempo y con el menor esfuerzo.

contexto:
- Producto: [nombre y descripción]
- Tipo de usuario que se registra: [perfiles y qué quieren conseguir]
- Flujo actual de registro y primeros pasos: [describe pantalla por pantalla]
- Datos actuales: [porcentaje de registro completado, de usuarios que hacen la acción clave, retención a 7 y 30 días; o "sin datos"]
- Acción que creemos que predice la retención: [p. ej. "crear tres tareas y asignar una"]
- Puntos donde abandonan: [lista o "desconocido"]
- Recursos de diseño y desarrollo disponibles: [poco, medio, mucho]

tarea:
1. Define el momento "ajá": la experiencia en la que el usuario siente el valor por primera vez. Distínguelo de la acción de activación medible y propón cómo validarlo con datos (comparar retención de quienes la hacen frente a quienes no).
2. Mapea el recorrido actual y calcula el "tiempo hasta el valor": cuántos pasos, clics y minutos separan el registro del momento "ajá".
3. Identifica la fricción y clasifícala:
   - Fricción eliminable: pasos que pueden quitarse o posponerse (campos del registro, configuraciones).
   - Fricción reducible: pasos que pueden simplificarse con valores por defecto, plantillas, datos de ejemplo o importación automática.
   - Fricción productiva: pasos que aumentan el compromiso o personalizan la experiencia y conviene mantener.
4. Diseña el nuevo onboarding con estos elementos, justificando cada uno:
   - Pregunta inicial de segmentación (máx. 2 preguntas) para personalizar el recorrido.
   - Lista de comprobación de 3 a 5 pasos con progreso visible.
   - Estado vacío útil en cada pantalla principal, con plantilla o ejemplo.
   - Indicaciones contextuales en el momento justo, no un recorrido guiado de diez pasos al inicio.
   - Celebración al alcanzar el momento "ajá" y propuesta del siguiente paso.
   - Mensajes de recuperación por email o notificación para quien se queda a medias.
5. Escribe todos los textos de interfaz: titulares, botones, mensajes de estados vacíos, elementos de la lista de comprobación y notificaciones.

Formato de salida:
1. Definición del momento "ajá" y de la acción de activación.
2. Recorrido actual con tiempo hasta el valor.
3. Tabla de fricción: paso | tipo | propuesta.
4. Nuevo recorrido pantalla a pantalla con textos.
5. Métricas y embudo a seguir y objetivos a 30 días.
6. Experimentos priorizados para las próximas 8 semanas.

Reglas:
- Pide solo los datos imprescindibles en el registro; el resto, después.
- Cada pantalla debe tener una única acción principal.
- Si una propuesta exige mucho desarrollo, ofrece también una versión mínima.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Reducir el abandono de nuevos usuarios y acortar el tiempo hasta que entienden el valor del producto',
                'vote_score'        => 65,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Emails de recuperación de clientes perdidos y bajas',
                'description'       => 'Inspirado en los skills virales de retención y win-back de 2026 (estilo Marketing Skills): diseña el flujo de cancelación, las ofertas de retención y las secuencias para recuperar clientes que se fueron, según el motivo de la baja.',
                'prompt_content'    => <<<'EOT'
Actúa como especialista en retención de clientes y marketing de ciclo de vida. Vas a diseñar un sistema completo para reducir bajas y recuperar clientes perdidos, adaptando el mensaje al motivo real por el que se fueron.

contexto:
- Producto o servicio: [nombre y descripción]
- Modelo: [suscripción mensual o anual, compra recurrente, servicio]
- Tasa de bajas actual: [porcentaje mensual o "desconocida"]
- Motivos de baja conocidos: [precio, no lo uso, falta una función, me cambio a un competidor, problema técnico, cierre del negocio, temporal]
- Proceso de cancelación actual: [describe los pasos]
- Ofertas que el negocio puede permitirse: [pausa, descuento temporal, cambio a plan inferior, meses gratis, ayuda personalizada]
- Novedades del producto desde que se fueron los clientes antiguos: [lista]
- Herramienta de email y datos disponibles: [herramienta y datos de uso, fecha de baja, motivo]
- Tono de marca: [cercano, profesional]

tarea:
1. Diseña el flujo de cancelación:
   - Encuesta de salida de una sola pregunta con los motivos como opciones y un campo libre.
   - Oferta de retención específica para cada motivo (p. ej. pausa para "temporal", plan inferior para "precio", sesión de ayuda para "no sé usarlo").
   - Textos de cada pantalla, con una salida clara: cancelar siempre debe ser posible sin trucos.
2. Diseña la secuencia de email posterior a la baja (de 3 a 5 emails en 90 días) con ramas según el motivo:
   - Confirmación de baja amable, sin reproches, con lo que se conserva (datos, cuenta).
   - Email de valor sin venta a las 2-3 semanas.
   - Email de novedades relevantes para su motivo de baja.
   - Oferta de vuelta con plazo razonable.
   - Último email de despedida que invite a responder.
3. Diseña una campaña para clientes antiguos (que se fueron hace más de 6 meses): segmentación, mensaje y oferta.
4. Escribe todos los emails completos: 3 opciones de asunto, preasunto, cuerpo de 80 a 160 palabras y una llamada a la acción.
5. Define cómo usar la información de bajas para mejorar el producto: a quién se comunica y cada cuánto.

Formato de salida:
1. Mapa de motivos de baja con oferta de retención y argumento para cada uno.
2. Textos del flujo de cancelación.
3. Secuencias de email por rama, cada email con su día de envío.
4. Campaña para clientes antiguos.
5. Métricas: tasa de aceptación de ofertas de retención, tasa de reactivación, ingresos recuperados y bajas recurrentes tras volver.
6. Riesgos de abuso de descuentos y cómo limitarlos.

Reglas:
- Nunca hagas difícil cancelar ni uses tácticas que hagan sentir culpable al cliente.
- No ofrezcas el mismo descuento a todo el mundo: la oferta depende del motivo.
- Si el motivo es una función que falta, no prometas fechas que no estén confirmadas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Reducir bajas en un negocio de suscripción y recuperar clientes perdidos con mensajes según el motivo',
                'vote_score'        => 57,
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
