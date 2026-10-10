<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Skills virales de diseño y frontend.
 */
class TopSearchedSkills644Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 3,
                'title'             => 'Diseñar interfaces con personalidad que no parezcan hechas por IA',
                'description'       => 'Rompe con el aspecto genérico de las interfaces generadas por IA (degradados morados, tarjetas idénticas, tipografía por defecto) y define una dirección visual con carácter. Inspirado en el skill viral frontend-design de Anthropic.',
                'prompt_content'    => <<<'EOT'
rol: Eres un director de arte y diseñador de producto con criterio propio. Detestas las interfaces intercambiables y sabes que una dirección visual clara se nota en cada detalle.

contexto:
- Producto: [NOMBRE Y QUÉ HACE]
- Público: [QUIÉN LO USA, EDAD, CONTEXTO DE USO]
- Tono de marca en tres adjetivos: [ADJETIVO 1, ADJETIVO 2, ADJETIVO 3]
- Referencias que me gustan (no de mi sector): [WEBS, REVISTAS, CARTELES, OBJETOS]
- Lo que quiero evitar: [POR EJEMPLO: ASPECTO CORPORATIVO, ESTÉTICA DE PLANTILLA]
- Pantalla o componente a diseñar: [POR EJEMPLO: PORTADA, PANEL, TARJETA DE PRODUCTO]
- Tecnología de destino: [HTML Y CSS, REACT CON TAILWIND, VUE, OTRO]

tarea: Trabaja en cuatro pasos.

Paso 1. Detectar los tópicos
Enumera los rasgos típicos de una interfaz generada por IA que hay que evitar en este caso concreto, por ejemplo:
- Degradados violeta y azul sin motivo.
- Tipografías por defecto del sistema o la misma fuente sin carácter de siempre.
- Rejillas de tres tarjetas idénticas con icono, título y texto.
- Sombras suaves y bordes redondeados en todo.
- Emojis como iconos y textos de relleno entusiastas.
Añade los que detectes según mi sector.

Paso 2. Elegir una dirección visual
- Propón tres direcciones distintas y atrevidas, cada una con un nombre, una frase que la resuma y una referencia cultural (editorial, industrial, brutalista, artesanal, retro técnico, lujo silencioso u otra).
- Para cada una describe: tipografía de títulos y de texto, paleta con valores hexadecimales, uso del espacio, tratamiento de imágenes, textura y un detalle memorable.
- Recomienda una y explica por qué encaja con el público y el tono.

Paso 3. Aplicarla a la pantalla
- Describe la composición: jerarquía, ritmo, asimetrías intencionadas y punto focal.
- Define los estados de interacción con la misma personalidad (hover, foco, activo, vacío, error).
- Escribe los microtextos con la voz de la marca, sin fórmulas genéricas.

Paso 4. Código
- Entrega el código de la pantalla en la tecnología indicada.
- Usa variables o tokens para colores, tipografías y espaciados.
- Asegura contraste suficiente, foco visible y diseño adaptable a móvil.

formato de salida:
1. Lista de tópicos a evitar.
2. Las tres direcciones en tabla comparativa.
3. Dirección elegida con justificación.
4. Descripción de la composición y estados.
5. Código completo.
6. Tres decisiones que hacen que este diseño no parezca de plantilla.

reglas:
- Cada elección visual debe tener un motivo ligado al producto o al público.
- La personalidad no puede sacrificar la legibilidad ni la accesibilidad.
- No uses imágenes de banco de imágenes genéricas como solución; describe qué imagen haría falta.

Empieza por el paso 1.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Dar a una web o aplicación una identidad visual propia en lugar del aspecto genérico típico del diseño generado por IA.',
                'vote_score'        => 79,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Elegir paleta de color, tipografías y tipo de gráfico justificando cada decisión',
                'description'       => 'Asistente de decisiones visuales que propone colores, combinaciones tipográficas y el gráfico adecuado para cada dato, explicando el porqué de cada elección. Inspirado en el skill viral UI UX Pro Max.',
                'prompt_content'    => <<<'EOT'
rol: Eres un diseñador de interfaces y visualización de datos que nunca elige nada "porque queda bonito". Cada decisión de color, tipografía o gráfico tiene una razón funcional y la sabes explicar.

contexto:
- Proyecto: [WEB, APLICACIÓN, PANEL DE DATOS, INFORME, PRESENTACIÓN]
- Sector y público: [SECTOR Y PERFIL DEL USUARIO]
- Sensaciones que debe transmitir: [POR EJEMPLO: CONFIANZA, ENERGÍA, CALMA, PRECISIÓN]
- Colores de marca obligatorios, si existen: [VALORES HEXADECIMALES O "ninguno"]
- Soporte: [PANTALLA CLARA, MODO OSCURO, IMPRESIÓN, PROYECTOR]
- Datos que hay que representar, si aplica: [DESCRIBE LOS DATOS Y LA PREGUNTA QUE RESPONDEN]

tarea: Resuelve tres decisiones y justifica cada una.

Decisión 1. Paleta de color
- Propón una paleta con: color principal, color secundario, acento, neutros (al menos cinco tonos) y colores semánticos (éxito, aviso, error, información).
- Da los valores hexadecimales y el uso previsto de cada color.
- Comprueba el contraste de las combinaciones de texto y fondo más habituales e indica si cumplen WCAG AA.
- Si hay modo oscuro, adapta la paleta y explica los ajustes.
- Explica la lógica: por qué ese tono para este sector, qué asociaciones evita y cómo se distribuye (proporción aproximada de uso).

Decisión 2. Tipografías
- Propón una combinación de dos fuentes como máximo: una para títulos y otra para texto, ambas disponibles de forma gratuita o con licencia indicada.
- Define la escala tipográfica: tamaños, interlineados y pesos para cada nivel (H1 a H4, cuerpo, texto pequeño, etiquetas).
- Justifica la combinación: contraste, legibilidad en pantalla, soporte de caracteres en español y rendimiento de carga.
- Ofrece una alternativa por si la primera opción no está disponible.

Decisión 3. Tipo de gráfico
- Para cada conjunto de datos, identifica la pregunta principal: comparar, ver evolución, mostrar composición, distribución o relación.
- Recomienda el tipo de gráfico adecuado y uno que debe evitarse, con el motivo.
- Indica cómo aplicar la paleta al gráfico: colores categóricos, escala secuencial o divergente, y cómo destacar el dato clave.
- Añade recomendaciones de etiquetas, ejes y leyenda.

formato de salida:
1. Tabla de paleta: nombre, hexadecimal, uso, contraste sobre blanco y sobre oscuro.
2. Tabla tipográfica: nivel, fuente, tamaño, peso, interlineado.
3. Tabla de gráficos: datos, pregunta, gráfico recomendado, gráfico a evitar, motivo.
4. Párrafo de justificación para cada decisión, apto para presentar al cliente.
5. Fragmento de variables CSS listo para usar.

reglas:
- No propongas más colores de los necesarios.
- Nunca transmitas información solo con color; indica el refuerzo (icono, texto, patrón).
- Evita gráficos circulares con más de cinco categorías y gráficos en tres dimensiones.

Empieza por la paleta.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Tomar decisiones de color, tipografía y visualización de datos con argumentos que se puedan defender ante un cliente o un equipo.',
                'vote_score'        => 73,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Auditoría de diseño contra estándares profesionales sin reescribir componentes',
                'description'       => 'Evalúa una interfaz existente frente a criterios de diseño profesional (jerarquía, espaciado, consistencia, estados) y entrega correcciones puntuales sin rehacer el código. Inspirado en los skills virales de auditoría de diseño para agentes.',
                'prompt_content'    => <<<'EOT'
rol: Eres un diseñador de producto sénior que hace auditorías de interfaz. Tu trabajo es detectar lo que resta calidad y proponer ajustes quirúrgicos. No rediseñas ni reescribes componentes enteros.

contexto:
- Producto y pantalla auditada: [NOMBRE Y PANTALLA]
- Objetivo de la pantalla: [QUÉ DEBE CONSEGUIR EL USUARIO]
- Material: [CAPTURA DESCRITA, CÓDIGO HTML/CSS O COMPONENTES]
- Sistema de diseño existente, si lo hay: [TOKENS, GUÍA DE ESTILO O "ninguno"]
- Restricción: [POR EJEMPLO: NO SE PUEDE CAMBIAR LA ESTRUCTURA, SOLO ESTILOS]

tarea: Audita la pantalla contra estos ocho criterios. Para cada uno puntúa de 1 a 5 y anota hallazgos concretos.

Criterio 1. Jerarquía visual
- ¿Se entiende en tres segundos qué es lo más importante? ¿Hay un único punto focal?
Criterio 2. Espaciado y ritmo
- ¿Se usa una escala de espaciado coherente (por ejemplo múltiplos de 4 u 8)? ¿Hay elementos apretados o huecos sin sentido?
Criterio 3. Tipografía
- ¿Cuántos tamaños y pesos distintos hay? ¿La longitud de línea es cómoda? ¿El interlineado es adecuado?
Criterio 4. Color y contraste
- ¿El color guía la atención o compite? ¿Cumplen los textos el contraste mínimo?
Criterio 5. Alineación y rejilla
- ¿Los elementos comparten ejes? ¿Hay desalineaciones de pocos píxeles?
Criterio 6. Consistencia
- ¿Botones, iconos, radios de borde y sombras siguen la misma lógica en toda la pantalla?
Criterio 7. Estados y retroalimentación
- ¿Existen estados de hover, foco, cargando, vacío, error y éxito?
Criterio 8. Contenido y microtextos
- ¿Los textos de botones son verbos claros? ¿Hay jerga o textos ambiguos?

formato de salida:
1. Tabla resumen: criterio, puntuación, hallazgo principal.
2. Lista de hallazgos, cada uno con:
   - Identificador y criterio.
   - Elemento afectado (selector, componente o zona).
   - Problema observado.
   - Corrección mínima: el cambio exacto de propiedad CSS, clase o texto, sin reescribir el componente.
   - Impacto: alto, medio o bajo.
3. Las cinco correcciones con mejor relación entre impacto y esfuerzo.
4. Cambios que requerirían rediseño, listados aparte como recomendación futura.

reglas:
- Prohibido proponer rehacer el componente completo; si es inevitable, ponlo en el punto 4.
- Cada corrección debe poder aplicarse en menos de quince minutos.
- Si hay sistema de diseño, propone correcciones con sus tokens, no con valores sueltos.
- Si no puedes ver algo con el material aportado, márcalo como "no evaluable".
- Respeta las decisiones de marca existentes aunque no coincidan con tu gusto personal; audita la ejecución, no la identidad.
- Escribe cada hallazgo de forma que una persona de desarrollo pueda aplicarlo sin tener que preguntarte nada más.

Empieza la auditoría.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Pulir una interfaz ya construida con cambios pequeños y concretos antes de una demo o un lanzamiento.',
                'vote_score'        => 62,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Auditoría de accesibilidad WCAG 2.2 de una pantalla',
                'description'       => 'Revisa una pantalla o componente contra los criterios WCAG 2.2 nivel AA, con hallazgos priorizados y correcciones de código. Inspirado en los skills virales de accesibilidad para agentes de diseño y frontend.',
                'prompt_content'    => <<<'EOT'
rol: Eres un especialista en accesibilidad digital. Conoces a fondo las pautas WCAG 2.2 y sabes traducirlas a cambios concretos en el código y el diseño.

contexto:
- Pantalla o componente: [NOMBRE Y FUNCIÓN]
- Tecnología: [HTML, REACT, VUE, OTRO]
- Código o descripción detallada: [PEGA EL CÓDIGO O DESCRIBE LA PANTALLA]
- Usuarios con necesidades conocidas, si las hay: [POR EJEMPLO: PERSONAS MAYORES, LECTORES DE PANTALLA]
- Nivel objetivo: [A, AA O AAA; POR DEFECTO AA]

tarea: Audita la pantalla en cinco bloques, siguiendo los cuatro principios de WCAG y las novedades de la versión 2.2.

Bloque 1. Perceptible
- Textos alternativos en imágenes informativas y vacío en decorativas.
- Contraste de texto (4,5:1 normal, 3:1 grande) y de elementos gráficos y bordes de controles (3:1).
- Información que no dependa solo del color.
- Contenido que se adapta al zoom del 200 % y a 320 píxeles de ancho sin desplazamiento horizontal.

Bloque 2. Operable
- Todo usable con teclado, sin trampas de foco y con orden lógico.
- Foco visible y no oculto por elementos fijos como cabeceras o banners (criterio nuevo de 2.2).
- Tamaño mínimo de los objetivos táctiles de 24 por 24 píxeles (criterio nuevo de 2.2).
- Alternativa a las acciones de arrastrar (criterio nuevo de 2.2).
- Enlaces y botones con nombres que se entienden fuera de contexto.

Bloque 3. Comprensible
- Idioma de la página declarado.
- Etiquetas visibles en formularios, mensajes de error claros y sugerencias de corrección.
- Ayuda en un lugar coherente entre páginas (criterio nuevo de 2.2).
- No pedir de nuevo datos ya introducidos en el mismo proceso (criterio nuevo de 2.2).
- Autenticación sin pruebas cognitivas como recordar o transcribir códigos (criterio nuevo de 2.2).

Bloque 4. Robusto
- HTML semántico, roles ARIA solo cuando no hay elemento nativo, nombre, rol y valor correctos.
- Mensajes de estado anunciados a los lectores de pantalla.

Bloque 5. Pruebas manuales recomendadas
- Recorrido con teclado, con lector de pantalla y con zoom, indicando qué comprobar en cada uno.

formato de salida:
1. Resumen: número de incumplimientos por nivel y estimación del esfuerzo de corrección.
2. Tabla de hallazgos: criterio WCAG (número y nombre), nivel, elemento afectado, problema, impacto en el usuario, prioridad.
3. Correcciones con código antes y después para cada hallazgo prioritario.
4. Lista de comprobaciones que no se pueden verificar sin probar la pantalla real.
5. Guion de pruebas manuales.

reglas:
- Cita siempre el número del criterio WCAG.
- Prioriza por impacto real en personas, no por facilidad de corrección.
- No añadas ARIA innecesario; primero HTML semántico.
- Aclara que una auditoría automática o asistida no sustituye a pruebas con usuarios reales.

Empieza por el bloque 1.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Comprobar si una pantalla cumple la accesibilidad exigible y saber exactamente qué corregir en el código.',
                'vote_score'        => 65,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Crear un sistema de diseño con tokens a partir de una marca',
                'description'       => 'Convierte los elementos de una marca (logo, colores, tipografía, tono) en un sistema de diseño con tokens primitivos, semánticos y de componente listos para código. Inspirado en los skills virales de design systems para agentes.',
                'prompt_content'    => <<<'EOT'
rol: Eres un diseñador de sistemas de diseño que trabaja codo con codo con desarrollo. Sabes que un buen sistema se basa en tokens bien nombrados que separan el valor de su intención.

contexto:
- Marca: [NOMBRE]
- Elementos de marca disponibles: [COLORES CON HEXADECIMAL, TIPOGRAFÍAS, LOGO DESCRITO, GUÍA DE TONO]
- Productos donde se usará: [WEB, APLICACIÓN MÓVIL, PANEL INTERNO, CORREOS]
- Tecnología de destino: [CSS, TAILWIND, STYLE DICTIONARY, FIGMA VARIABLES]
- ¿Necesita modo oscuro?: [SÍ / NO]
- Componentes más usados: [BOTONES, CAMPOS, TARJETAS, NAVEGACIÓN, TABLAS, AVISOS]

tarea: Construye el sistema en cinco capas.

Capa 1. Tokens primitivos
- Escala de color completa para cada color de marca y para los neutros, de 50 a 950, derivada de los valores de marca.
- Escala de espaciado basada en una unidad (4 u 8 píxeles).
- Escala tipográfica con tamaños, pesos e interlineados.
- Radios, bordes, sombras, duraciones y curvas de animación.

Capa 2. Tokens semánticos
- Asigna intenciones a los primitivos: fondo, superficie, texto principal, texto secundario, borde, acción principal, acción secundaria, éxito, aviso, error, información, foco.
- Define los valores en modo claro y en modo oscuro si procede.
- Comprueba que las combinaciones de texto y fondo cumplen contraste AA.

Capa 3. Tokens de componente
- Para cada componente indicado, define sus tokens propios apuntando a los semánticos (por ejemplo: botón primario fondo, botón primario texto, botón primario fondo en hover).
- Incluye estados: reposo, hover, foco, activo, deshabilitado.

Capa 4. Convenciones de nombre
- Propón una nomenclatura coherente (categoría, propiedad, variante, estado) y explica sus reglas.
- Indica qué no debe hacerse: usar primitivos directamente en componentes, nombres basados en el color en vez de en la intención.

Capa 5. Gobierno
- Cómo se proponen y aprueban nuevos tokens.
- Cómo se versiona el sistema y se comunican cambios incompatibles.

formato de salida:
1. Resumen del sistema en un párrafo.
2. Tablas de tokens primitivos.
3. Tabla de tokens semánticos con valores en claro y oscuro.
4. Tokens de componente por cada componente.
5. Archivo de tokens en el formato de la tecnología de destino, listo para copiar.
6. Ejemplo de un botón y un campo de formulario usando solo tokens.
7. Guía breve de nomenclatura y gobierno.

reglas:
- Los componentes solo consumen tokens semánticos o de componente, nunca primitivos.
- Respeta los valores de marca exactos; deriva el resto de forma coherente.
- Mantén el sistema lo más pequeño posible: no crees tokens que nadie va a usar.

Empieza por la capa 1.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Pasar de una guía de marca a un sistema de diseño consistente que diseño y desarrollo puedan compartir.',
                'vote_score'        => 68,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 1,
                'title'             => 'Landing page que convierte: estructura y copy sección a sección',
                'description'       => 'Construye la estructura y los textos de una página de aterrizaje orientada a conversión, desde la propuesta de valor hasta la llamada a la acción final. Inspirado en los skills virales de landing pages para agentes de marketing y frontend.',
                'prompt_content'    => <<<'EOT'
rol: Eres un especialista en conversión y redacción publicitaria. Escribes páginas de aterrizaje claras, concretas y centradas en el cliente, sin superlativos vacíos.

contexto:
- Producto o servicio: [NOMBRE Y QUÉ HACE]
- Cliente ideal: [PERFIL, CARGO, SITUACIÓN]
- Problema principal que resuelve: [DOLOR CONCRETO]
- Resultado que obtiene el cliente: [BENEFICIO MEDIBLE]
- Objeciones habituales: [PRECIO, CONFIANZA, TIEMPO, COMPLEJIDAD]
- Pruebas disponibles: [TESTIMONIOS, CIFRAS, LOGOS DE CLIENTES, CASOS]
- Acción que queremos conseguir: [REGISTRO, DEMO, COMPRA, DESCARGA]
- Origen del tráfico: [ANUNCIOS, BUSCADORES, CORREO, REDES]
- Tono de marca: [CERCANO, TÉCNICO, PREMIUM, DIVERTIDO]

tarea: Diseña la página en tres pasos.

Paso 1. Mensaje central
- Escribe la propuesta de valor en una frase de menos de doce palabras.
- Propón cinco titulares alternativos con enfoques distintos: resultado, problema, novedad, comparación y especificidad.
- Indica cuál recomiendas según el origen del tráfico.

Paso 2. Estructura
Define las secciones en orden y el objetivo de cada una. Como base:
- Cabecera: titular, subtítulo, llamada a la acción y elemento visual.
- Prueba social inmediata: logos o cifra clave.
- Problema: describe la situación del cliente con sus palabras.
- Solución: cómo funciona en tres pasos.
- Beneficios: de tres a cinco, cada uno con un resultado concreto, no con una característica.
- Prueba: testimonios con nombre, cargo y resultado.
- Objeciones: preguntas frecuentes que responden a cada objeción.
- Oferta: qué incluye, precio o modalidad y garantía.
- Llamada a la acción final con reducción del riesgo.
Ajusta, elimina o reordena secciones según el caso y justifícalo.

Paso 3. Copy completo
- Escribe todos los textos de cada sección.
- Botones con verbos que expresen lo que obtiene el usuario.
- Indica qué elemento visual acompaña a cada sección.

formato de salida:
1. Propuesta de valor y titulares alternativos.
2. Esquema de secciones con objetivo de cada una.
3. Copy completo, sección por sección, con encabezados claros.
4. Tres pruebas A/B prioritarias con hipótesis y métrica.
5. Lista de comprobación de conversión: velocidad, una sola acción principal, formulario mínimo, coherencia con el anuncio, versión móvil.

reglas:
- Prohibido usar frases como "líder del sector", "solución integral" o "revolucionario" sin prueba.
- Cada beneficio debe responder a "¿y eso qué significa para mí?".
- No inventes testimonios ni cifras; deja huecos [ENTRE CORCHETES] si faltan datos.
- Una sola acción principal en toda la página.
- Escribe frases cortas, en segunda persona y con el vocabulario que usa el propio cliente, no el de la empresa.

Empieza por el mensaje central.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear o rehacer una página de aterrizaje para una campaña o lanzamiento con un mensaje claro y orientado a resultados.',
                'vote_score'        => 70,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Refactorizar componentes React grandes de forma segura',
                'description'       => 'Descompone un componente React monolítico en piezas pequeñas y probadas, paso a paso y sin cambiar su comportamiento. Inspirado en los skills virales de refactorización frontend para agentes de código.',
                'prompt_content'    => <<<'EOT'
rol: Eres un ingeniero frontend sénior especializado en React. Refactorizas sin miedo porque lo haces en pasos pequeños, cada uno verificable y reversible.

contexto:
- Componente a refactorizar: [NOMBRE DEL COMPONENTE]
- Versión de React y librerías clave: [VERSIONES, GESTOR DE ESTADO, LIBRERÍA DE ESTILOS]
- Problemas que motivan la refactorización: [POR EJEMPLO: 800 LÍNEAS, RENDERIZADOS LENTOS, DIFÍCIL DE PROBAR]
- Pruebas existentes: [DESCRIBE LAS PRUEBAS O "ninguna"]
- Código del componente: [PEGA EL CÓDIGO]
- Componentes que lo usan: [LISTA O "desconocido"]

tarea: Sigue estas fases sin saltarte ninguna.

Fase 1. Diagnóstico
- Describe las responsabilidades que mezcla el componente: obtención de datos, estado, lógica de negocio, presentación, efectos.
- Identifica estados derivados que se guardan innecesariamente, efectos que deberían ser cálculos, props que atraviesan muchos niveles y funciones que se recrean en cada render.
- Señala los riesgos: efectos con dependencias incompletas, cierres con valores antiguos, claves inestables en listas.

Fase 2. Red de seguridad
- Antes de tocar nada, propone pruebas de caracterización que fijen el comportamiento actual: qué se renderiza con distintas props, qué ocurre al interactuar, qué llamadas se hacen.
- Escribe esas pruebas con Testing Library, centradas en lo que ve el usuario.

Fase 3. Plan de pasos pequeños
Ordena los cambios para que cada uno sea independiente y deje todo funcionando, por ejemplo:
- Extraer funciones puras de cálculo fuera del componente.
- Extraer la lógica de estado y efectos a hooks propios.
- Separar subcomponentes de presentación sin estado.
- Sustituir estado derivado por cálculos.
- Aplicar memorización solo donde haya un problema de rendimiento medido.
Para cada paso indica: qué se mueve, a qué archivo y qué prueba lo cubre.

Fase 4. Ejecución
- Muestra el código resultante de cada paso por separado.
- Tras cada paso, confirma que la interfaz pública (props y comportamiento) no ha cambiado.

Fase 5. Resultado
- Árbol de archivos final.
- Comparación antes y después: líneas, número de responsabilidades por archivo, renderizados evitados si aplica.

formato de salida:
1. Diagnóstico en lista.
2. Pruebas de caracterización.
3. Plan numerado de pasos.
4. Código paso a paso.
5. Árbol final y comparación.
6. Mejoras que dejo para más adelante.

reglas:
- No cambies el comportamiento visible ni la API del componente durante la refactorización.
- No añadas librerías nuevas sin preguntar.
- No uses memorización por defecto: justifica cada uso.
- Si detectas un error en el código original, anótalo pero no lo corrijas en la misma fase.

Empieza por el diagnóstico.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Trocear un componente React enorme y difícil de mantener sin introducir regresiones.',
                'vote_score'        => 61,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Revisión de código frontend con checklist completo',
                'description'       => 'Revisión específica de frontend que cubre rendimiento, accesibilidad, estado, estilos, seguridad en el navegador y pruebas, con hallazgos priorizados. Inspirado en los skills virales de revisión de código frontend.',
                'prompt_content'    => <<<'EOT'
rol: Eres un revisor experto en frontend. Conoces los errores que solo aparecen en el navegador del usuario: renderizados de más, foco perdido, estilos que se rompen en móvil y datos que se filtran al cliente.

contexto:
- Framework y versión: [REACT, VUE, SVELTE, ANGULAR U OTRO]
- Herramientas: [GESTOR DE ESTADO, LIBRERÍA DE ESTILOS, ENRUTADOR, BUILD]
- Objetivo del cambio: [QUÉ HACE ESTE CÓDIGO]
- Navegadores y dispositivos soportados: [LISTA]
- Código o diff: [PEGA EL CÓDIGO]

tarea: Recorre el siguiente checklist y marca cada punto como "correcto", "problema" o "no aplica".

1. Componentes y estructura
- Responsabilidad única, tamaño razonable, nombres descriptivos.
- Props tipadas y con valores por defecto sensatos.
- Lógica de negocio fuera de la presentación.

2. Estado y datos
- Estado mínimo; nada que pueda calcularse se guarda.
- Estados de carga, vacío y error contemplados.
- Peticiones canceladas al desmontar, sin condiciones de carrera.
- Sin duplicación de estado del servidor en el cliente.

3. Rendimiento
- Claves estables en listas.
- Sin renderizados innecesarios evidentes ni cálculos pesados en cada render.
- Imágenes con dimensiones, formatos modernos y carga diferida.
- Importaciones pesadas divididas o cargadas bajo demanda.
- Impacto en Core Web Vitals: LCP, INP y CLS.

4. Accesibilidad
- HTML semántico, etiquetas en formularios, textos alternativos.
- Navegación con teclado y foco visible y gestionado en modales.
- Contraste suficiente y sin información solo por color.

5. Estilos y diseño adaptable
- Uso de tokens o variables del sistema de diseño.
- Sin valores mágicos ni estilos en línea injustificados.
- Funciona a 320 píxeles de ancho y con texto ampliado.

6. Seguridad en el cliente
- Sin inserción de HTML sin sanear.
- Sin secretos ni claves en el código del cliente.
- Validación en el cliente como ayuda, nunca como única barrera.

7. Pruebas
- Pruebas centradas en el comportamiento del usuario.
- Casos de error y estados vacíos cubiertos.

8. Internacionalización
- Textos fuera del código, formatos de fecha y número locales, textos largos que no rompen el diseño.

formato de salida:
1. Veredicto en una línea.
2. Tabla del checklist: punto, estado, comentario breve.
3. Hallazgos detallados ordenados por prioridad (bloqueante, importante, menor), cada uno con ubicación, problema, impacto en el usuario y código corregido.
4. Tres aspectos bien resueltos.

reglas:
- Cita el fragmento exacto de cada problema.
- No conviertas preferencias personales en bloqueantes.
- Si un punto no se puede evaluar sin ejecutar la aplicación, dilo.

Comienza la revisión.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Revisar pull requests de frontend con un criterio completo que no se limite al estilo del código.',
                'vote_score'        => 58,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseñar microinteracciones y animaciones con criterio',
                'description'       => 'Define animaciones y microinteracciones que aportan claridad en lugar de adorno: cuándo animar, cuánto dura, qué curva usar y cómo respetar a quien prefiere menos movimiento. Inspirado en los skills virales de motion design para interfaces.',
                'prompt_content'    => <<<'EOT'
rol: Eres un diseñador de interacción especializado en movimiento. Para ti una animación solo está justificada si ayuda al usuario a entender qué ha pasado, dónde está o qué puede hacer.

contexto:
- Producto y pantalla: [NOMBRE Y PANTALLA]
- Personalidad de la marca: [POR EJEMPLO: SOBRIA, JUGUETONA, TÉCNICA, PREMIUM]
- Interacciones a diseñar: [POR EJEMPLO: ENVIAR FORMULARIO, AÑADIR AL CARRITO, ABRIR MENÚ, CAMBIAR DE PESTAÑA, CARGA DE DATOS]
- Tecnología: [CSS, FRAMER MOTION, GSAP, VUE TRANSITIONS, OTRA]
- Dispositivos principales: [MÓVIL, ESCRITORIO, AMBOS]

tarea: Trabaja en cuatro pasos.

Paso 1. Filtrar
Para cada interacción indicada, responde:
- ¿Qué función cumpliría la animación: dar retroalimentación, mostrar una relación espacial, indicar un cambio de estado, guiar la atención o reducir la espera percibida?
- Si no cumple ninguna, recomienda no animar y explica por qué.

Paso 2. Especificar
Para cada microinteracción aprobada, define sus cuatro partes:
- Disparador: qué la inicia (usuario o sistema).
- Reglas: qué ocurre exactamente.
- Retroalimentación: qué ve, oye o siente el usuario.
- Bucles y modos: qué pasa si se repite o si falla.
Y sus valores de movimiento:
- Propiedades animadas (preferentemente transform y opacity para no penalizar el rendimiento).
- Duración en milisegundos, con la referencia de 100 a 200 para retroalimentación inmediata y de 200 a 400 para transiciones de elementos grandes.
- Curva de aceleración y motivo (entrada con desaceleración, salida con aceleración).
- Retardos y escalonado si hay varios elementos.

Paso 3. Coherencia
- Propón un pequeño sistema de movimiento: tres duraciones y dos o tres curvas con nombre, reutilizables en toda la interfaz.
- Explica cómo refleja la personalidad de la marca.

Paso 4. Accesibilidad y rendimiento
- Versión para usuarios con preferencia de movimiento reducido: qué se elimina y qué se sustituye por un cambio sin desplazamiento.
- Evitar parpadeos de más de tres veces por segundo.
- No bloquear la interacción mientras dura la animación.
- Cómo comprobar que la animación va fluida en dispositivos modestos.

formato de salida:
1. Tabla de filtrado: interacción, función, ¿se anima?, motivo.
2. Ficha de cada microinteracción: disparador, reglas, retroalimentación, bucles, propiedades, duración, curva.
3. Sistema de movimiento como tokens.
4. Código de ejemplo de al menos dos microinteracciones, con la variante de movimiento reducido.
5. Lista de errores a evitar en este proyecto.

reglas:
- Ninguna animación debe retrasar una tarea del usuario.
- Menos y mejor: si dudas, no animes.
- Siempre incluye la versión con movimiento reducido.

Empieza por el paso 1.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Añadir animaciones a una interfaz que mejoren la experiencia sin distraer ni perjudicar el rendimiento o la accesibilidad.',
                'vote_score'        => 57,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Convertir un boceto o captura de pantalla en especificación para desarrollo',
                'description'       => 'Transforma un boceto, un wireframe o una captura en una especificación funcional y visual que desarrollo puede implementar sin adivinar. Inspirado en los skills virales de screenshot to spec para agentes.',
                'prompt_content'    => <<<'EOT'
rol: Eres un analista de producto con base de diseño y de desarrollo. Tu especialidad es convertir imágenes ambiguas en documentos precisos que no dejan nada a la interpretación.

contexto:
- Material: [ADJUNTA EL BOCETO O CAPTURA, O DESCRÍBELO CON DETALLE]
- Producto y pantalla: [NOMBRE Y PROPÓSITO]
- Usuario que la usará: [PERFIL]
- Tecnología de desarrollo: [FRAMEWORK Y LIBRERÍA DE COMPONENTES]
- Sistema de diseño existente: [TOKENS O "ninguno"]
- Datos reales disponibles: [ORIGEN DE LOS DATOS, API O ESQUEMA]

tarea: Elabora la especificación en seis apartados.

Apartado 1. Inventario visual
- Divide la pantalla en zonas (cabecera, navegación, contenido, barra lateral, pie).
- Dentro de cada zona, enumera todos los elementos visibles con un identificador.
- Para cada elemento indica: tipo (texto, botón, campo, imagen, tabla, gráfico), contenido y jerarquía.

Apartado 2. Comportamiento
- Para cada elemento interactivo: qué ocurre al pulsarlo, a dónde lleva, qué datos envía.
- Estados de cada elemento: reposo, hover, foco, deshabilitado, cargando, error.
- Estados de la pantalla completa: carga inicial, vacío, error, sin permisos, datos parciales.

Apartado 3. Datos
- Qué dato alimenta cada elemento, de dónde viene y con qué formato.
- Reglas de validación de los campos.
- Qué pasa con textos muy largos, números muy grandes o listas con cientos de elementos.

Apartado 4. Diseño adaptable
- Cómo se reorganiza la pantalla en móvil, tableta y escritorio.
- Qué elementos se ocultan, se apilan o se convierten en menús.

Apartado 5. Especificación visual
- Espaciados, tamaños de texto y colores estimados, expresados con tokens si existen.
- Componentes existentes que se pueden reutilizar y componentes nuevos que hay que crear.

Apartado 6. Ambigüedades
- Todo lo que la imagen no aclara: elementos cortados, textos de ejemplo, iconos sin significado claro.
- Para cada ambigüedad, una suposición razonable y una pregunta para el equipo de diseño o producto.

formato de salida:
1. Resumen de la pantalla en tres líneas.
2. Inventario por zonas en tabla.
3. Tabla de comportamiento y estados.
4. Tabla de datos y validaciones.
5. Reglas de diseño adaptable.
6. Lista de componentes: reutilizables y nuevos.
7. Criterios de aceptación en formato "dado, cuando, entonces".
8. Preguntas abiertas con la suposición propuesta.

reglas:
- No inventes funcionalidades que no se ven ni se deducen claramente.
- Distingue entre lo que se ve en la imagen y lo que supones.
- Escribe para que una persona que no ha visto la imagen pueda implementarla.

Empieza por el inventario visual.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 25,
                'use_case'          => 'Pasar de un boceto o una captura a tareas de desarrollo claras, con estados, datos y criterios de aceptación.',
                'vote_score'        => 60,
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
