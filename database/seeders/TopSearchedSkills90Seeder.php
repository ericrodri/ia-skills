<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills90Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'GEO: consigue que ChatGPT y Perplexity recomienden tu marca',
                'description'      => 'Auditoría y plan de optimización para motores generativos: qué revisar en tu web para que los asistentes te citen, cómo escribir contenido extraíble y cómo medir las citas que no dejan clic.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de SEO y GEO (optimización para motores generativos) con experiencia en marcas que han pasado de no aparecer nunca en respuestas de asistentes a ser fuente citada de forma recurrente. Quiero un diagnóstico y un plan de acción para mi caso.

## Preguntas antes de empezar

1. ¿Qué dominio es y de qué categoría de producto o servicio hablamos?
2. ¿Cuáles son las 10 preguntas que un cliente potencial haría en un asistente antes de comprarte?
3. ¿La web es una aplicación de una sola página (React, Vue, Angular) o sirve HTML completo?
4. ¿Tienes acceso a los registros del servidor o al panel del CDN?
5. ¿Qué contenido propio tienes que no exista en ningún otro sitio: datos, precios, comparativas, casos?

## Fase 1 — Auditoría de rastreabilidad

Comprueba y dime el estado de cada punto:

| Comprobación | Cómo se verifica | Por qué importa |
|---|---|---|
| El HTML inicial trae el contenido | `curl -A "GPTBot" URL` y buscar el H1 y el texto | Muchos rastreadores de IA no ejecutan JavaScript |
| Bots de IA no bloqueados | `robots.txt` y reglas de CDN/WAF | Es donde se cae la mayoría sin saberlo |
| Datos estructurados presentes | Organization, Article, FAQPage, BreadcrumbList | Le dice a la máquina qué es cada cosa |
| Sitemap con fechas reales | `lastmod` coherente con los cambios | Un lastmod que miente entrena a ignorarlo |
| `llms.txt` | Índice en Markdown de páginas clave | Opcional, media hora, sin riesgo |

Los agentes a revisar hoy: GPTBot, ClaudeBot, PerplexityBot, Google-Extended, Bingbot.

## Fase 2 — Auditoría de extractabilidad

Para cada una de las 10 preguntas del cliente, evalúa si mi contenido tiene un fragmento que se sostiene solo:

- ¿Existe un titular con la pregunta literal?
- ¿El primer párrafo bajo ese titular responde entero, sin preámbulo?
- ¿Hay un dato concreto (cifra, plazo, precio, tabla) que se pueda citar?
- ¿El párrafo se entiende arrancado de la página, sin pronombres colgando?

Marca cada pregunta como CUBIERTA / DÉBIL / INEXISTENTE y ordénalas por oportunidad.

## Fase 3 — Plan de contenido

Para las preguntas DÉBIL e INEXISTENTE, propón:

1. El titular exacto (la pregunta tal como la escribe una persona).
2. La respuesta de dos frases que va inmediatamente debajo.
3. El dato o tabla concreta que hace citable el fragmento, y de dónde sacarlo.
4. Dónde vive: página nueva, apartado de una existente o FAQ.

Regla dura: si no hay dato propio, no hay cita. Sustituye toda afirmación vaga («considerablemente más rápido») por una medida real («de 40 minutos a 6»).

## Fase 4 — Medición

Diseña un cuadro de seguimiento mensual con:

- Tráfico por referente de los dominios de los asistentes (es la punta del iceberg, pero es el único número duro).
- Auditoría de citas: las 15 preguntas lanzadas en tres asistentes, anotando si aparecemos, en qué parte de la respuesta y con qué frase se nos describe.
- Peticiones de GPTBot, ClaudeBot y PerplexityBot en los registros, por sección del sitio.

## Entregables

1. Informe de rastreabilidad con los fallos ordenados por gravedad y el arreglo concreto de cada uno.
2. Tabla de las 10 preguntas con su estado y la oportunidad estimada.
3. Plan de contenido de 8 semanas: qué se escribe, en qué orden y con qué dato propio.
4. Plantilla del cuadro de seguimiento mensual, lista para copiar en una hoja de cálculo.
5. Las tres cosas que NO hay que hacer en mi caso concreto, con el motivo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Auditar la web y el contenido para que los asistentes de IA citen la marca, con plan de trabajo y sistema de medición de citas',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Auditoría de visibilidad en buscadores de IA: mide tu presencia en las respuestas generadas',
                'description'      => 'Monta el protocolo para saber si tu marca aparece cuando alguien pregunta por tu categoría en ChatGPT, Gemini o Perplexity, con qué se te describe y quién te está quitando el hueco.',
                'prompt_content'   => <<<'PROMPT'
Actúa como analista de marketing especializado en medir la visibilidad de marca dentro de asistentes conversacionales. Quiero montar un protocolo repetible de medición, no una foto puntual.

## Contexto que necesito de ti

1. Categoría de producto o servicio y mercado geográfico.
2. Tu marca y los 5 competidores con los que te comparan de verdad.
3. Los 3 segmentos de cliente que más te interesan.
4. ¿Qué decisión vas a tomar con estos datos? (contenido, PR, producto, precios)

## Paso 1 — Diseña el panel de consultas

Construye 25 preguntas repartidas así:

| Tipo | Cantidad | Ejemplo |
|---|---|---|
| Categoría genérica | 5 | «mejores herramientas de X para pymes» |
| Comparativa | 5 | «X frente a Y, cuál elegir» |
| Problema | 5 | «cómo resolver [problema] sin contratar a nadie» |
| Marca directa | 5 | «qué es [marca] y para quién es» |
| Objeción | 5 | «es fiable [marca]», «alternativas a [marca]» |

Las preguntas deben estar escritas como las escribe una persona, con contexto y en su idioma real, no como palabras clave.

## Paso 2 — Protocolo de lanzamiento

Define y déjalo por escrito para que cualquiera lo repita igual:

- Asistentes a usar (mínimo tres) y si se lanza con sesión limpia o no.
- Una sola pregunta por conversación, sin repreguntar.
- Qué se registra de cada respuesta: si aparecemos, posición en el texto, frase literal con la que se nos describe, competidores mencionados, fuentes citadas y su URL.
- Fecha y hora, porque las respuestas cambian.

## Paso 3 — Métricas que salen de ahí

1. **Tasa de aparición:** en cuántas de las 25 respondemos presentes.
2. **Cuota de mención:** nuestras menciones sobre el total de marcas mencionadas.
3. **Calidad de la descripción:** clasifica cada mención en exacta, incompleta o errónea. Las erróneas son la prioridad absoluta.
4. **Fuentes que nos traen:** qué URLs cita el asistente cuando nos menciona. Si son de terceros, ahí está tu palanca de PR.
5. **Huecos:** preguntas donde aparece la competencia y nosotros no.

## Paso 4 — De la medida a la acción

Para cada hueco y cada descripción errónea, propón la acción concreta:

- Contenido propio que falta (titular + dato).
- Página de tercero donde conviene aparecer (comparativas, listados, foros del sector).
- Corrección de información obsoleta que sigue circulando (precios antiguos, funciones retiradas).
- Datos estructurados o página de entidad que aclare qué somos.

## Entregables

1. Las 25 consultas finales, en formato tabla y listas para copiar.
2. La plantilla de registro con todas las columnas y un ejemplo rellenado.
3. Definición de las 5 métricas y cómo se calculan.
4. Plan de acción priorizado con las 10 primeras tareas.
5. Cadencia recomendada de medición y qué variación se considera señal y no ruido.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Medir de forma repetible si la marca aparece en respuestas de asistentes de IA y convertir los huecos detectados en un plan de contenido y PR',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Clústeres temáticos: la arquitectura de contenidos que te convierte en autoridad de un tema',
                'description'      => 'Agrupa tus consultas por intención, define la página pilar y los artículos satélite, y monta el enlazado interno que concentra autoridad en lugar de dispersarla.',
                'prompt_content'   => <<<'PROMPT'
Actúa como estratega de contenidos SEO especializado en arquitectura de información. Quiero pasar de publicar artículos sueltos a tener clústeres temáticos con página pilar, satélites y enlazado interno coherente.

## Datos que necesito

1. Temas en los que quieres ser autoridad (máximo 3 para empezar).
2. Listado de URLs de contenido que ya tienes (o el sitemap).
3. Producto o servicio al que debe llevar el contenido.
4. Capacidad real de publicación: artículos al mes y quién los escribe.

## Paso 1 — Inventario y agrupación por intención

Clasifica cada consulta y cada URL existente en:

| Intención | Qué busca la persona | Tipo de página |
|---|---|---|
| Informativa amplia | Entender el tema | Pilar |
| Informativa específica | Resolver una duda concreta | Satélite |
| Comparativa | Decidir entre opciones | Comparativa / alternativas |
| Transaccional | Comprar o probar | Producto / precios |
| Navegacional | Llegar a algo tuyo | Marca |

Agrupa por intención, no por palabra clave: dos consultas con la misma intención van a la misma página. Ese es el criterio que evita canibalizar.

## Paso 2 — Diseña el clúster

Para cada tema entrega:

- **Página pilar:** título, ángulo, extensión objetivo, apartados (los H2 exactos) y qué pregunta responde cada uno.
- **6-12 satélites:** título, consulta principal, intención, extensión y qué aporta que la pilar no cubra.
- **Regla de no solapamiento:** una frase por satélite que explique por qué no compite con la pilar ni con otro satélite.

## Paso 3 — Enlazado interno

Define el esquema exacto:

- Cada satélite enlaza a la pilar con texto de ancla descriptivo (no «haz clic aquí», tampoco la misma ancla en todos).
- La pilar enlaza a todos sus satélites desde el apartado correspondiente.
- Los satélites relacionados entre sí se enlazan solo cuando hay continuidad real de lectura.
- Cada pieza del clúster enlaza a una página comercial, con el ancla del problema y no del producto.

## Paso 4 — Orden de publicación

Ordena las piezas por: consulta con demanda existente + capacidad de escribirla bien + cercanía a la venta. Explica el criterio de cada posición y qué se publica el primer mes.

## Paso 5 — Medición del clúster

Define cómo se mide el clúster como unidad, no artículo a artículo: impresiones y clics agregados, consultas nuevas para las que aparece el conjunto, posición media de la pilar y conversiones asistidas.

## Entregables

1. Mapa del clúster en formato tabla: pilar, satélites, intención, estado (existe / reescribir / nuevo).
2. Esquema de la pilar con los H2 y la pregunta que resuelve cada uno.
3. Matriz de enlazado interno con origen, destino y ancla propuesta.
4. Calendario de publicación de 12 semanas.
5. Qué URLs actuales conviene consolidar o redirigir, con el motivo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Organizar el contenido en clústeres temáticos con página pilar, satélites y enlazado interno para ganar autoridad temática sin canibalizar',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Canibalización de keywords: detecta las URLs que compiten entre sí y consolídalas',
                'description'      => 'Encuentra las páginas que se están quitando posiciones unas a otras, decide cuál sobrevive y ejecuta la consolidación con redirecciones y reescritura sin perder el tráfico que ya tenías.',
                'prompt_content'   => <<<'PROMPT'
Actúa como SEO técnico especializado en auditorías de contenido. Tengo la sospecha de que varias páginas de mi sitio compiten por las mismas consultas. Quiero detectarlo con datos, decidir qué hacer con cada caso y ejecutarlo sin perder tráfico.

## Datos que te voy a dar

1. Exportación de Search Console: consultas y páginas de los últimos 6 meses (impresiones, clics, posición media).
2. Listado de URLs del sitio o el sitemap.
3. Qué páginas son comerciales y qué páginas son de contenido.

Si no tengo alguno de estos datos, dime exactamente cómo obtenerlo antes de seguir.

## Paso 1 — Detección

Marca como sospechoso todo caso donde:

- Dos o más URLs reciben impresiones para la misma consulta con posición media por debajo de 10.
- La URL que Google elige para una consulta cambia entre semanas (posición inestable).
- Dos páginas tienen el mismo título o títulos que se diferencian en una palabra.
- Una página de contenido aparece para una consulta claramente comercial, o al contrario.

Clasifica cada caso en: canibalización real, solapamiento parcial o falso positivo (misma consulta, intenciones distintas).

## Paso 2 — Decisión, caso por caso

Para cada canibalización real, elige y justifica:

| Acción | Cuándo | Qué implica |
|---|---|---|
| Consolidar | Dos páginas dicen casi lo mismo | Fusionar en la mejor y redirigir 301 la otra |
| Diferenciar | Hay dos intenciones distintas mal servidas | Reescribir cada una para su intención |
| Canonicalizar | Duplicados técnicos (facetas, paginación) | `rel=canonical` a la principal |
| Despublicar | Contenido sin valor ni tráfico | 410 o 301 según enlaces entrantes |
| No tocar | Falso positivo | Documentar por qué, para no revisitarlo |

La página que sobrevive es la que tiene más enlaces entrantes y mejor histórico, no la más reciente ni la que más nos gusta.

## Paso 3 — Plan de ejecución

Para cada consolidación entrega:

1. URL que sobrevive y URL que desaparece.
2. Qué contenido de la que desaparece se rescata y en qué apartado de la superviviente entra.
3. Redirección exacta (origen → destino), y qué enlaces internos hay que actualizar para no dejar cadenas de redirección.
4. Título y descripción nuevos de la superviviente.
5. Riesgo: qué tráfico está en juego y qué pasa si sale mal.

## Paso 4 — Control posterior

Define el seguimiento: qué consultas vigilar, con qué frecuencia, en qué plazo se espera la recuperación (normalmente 2-6 semanas) y cuál es la señal de que hay que revertir.

## Entregables

1. Tabla de casos detectados con clasificación y datos que la sustentan.
2. Decisión y justificación por caso.
3. Fichero de redirecciones listo para pasar a producción.
4. Instrucciones de reescritura de las páginas que se quedan.
5. Cuadro de seguimiento de 6 semanas con los umbrales de alarma.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Detectar y resolver canibalización de contenido entre URLs con datos de Search Console, decidiendo qué consolidar, diferenciar o despublicar',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Migración web sin perder tráfico: plan de redirecciones y control post-lanzamiento',
                'description'      => 'El protocolo completo para cambiar de dominio, de CMS o de estructura de URLs sin que el tráfico orgánico se caiga: inventario previo, mapa de redirecciones, checklist del día D y vigilancia posterior.',
                'prompt_content'   => <<<'PROMPT'
Actúa como SEO técnico con experiencia en migraciones de sitios con tráfico orgánico relevante. Vamos a migrar y quiero un plan que evite la caída clásica del 30-60% de visitas.

## Contexto que necesito

1. Qué tipo de migración: ¿dominio, protocolo, CMS, estructura de URLs, rediseño, o varias a la vez?
2. Volumen actual: URLs indexadas, sesiones orgánicas al mes y las 20 páginas que más tráfico traen.
3. Fecha prevista y quién ejecuta (agencia, equipo interno, proveedor del CMS).
4. ¿Hay entorno de preproducción accesible?

Advertencia que quiero que me repitas si aplica: hacer dos migraciones a la vez (por ejemplo dominio y rediseño) multiplica el riesgo y hace imposible saber qué falló. Si se pueden separar en dos fases, dilo.

## Fase 1 — Inventario previo (antes de tocar nada)

Deja congelada la línea base:

- Rastreo completo del sitio actual: URL, código de estado, título, H1, canonical, indexabilidad.
- Exportación de Search Console (16 meses): consultas, páginas, países, dispositivos.
- Analítica: sesiones y conversiones por página, últimos 12 meses.
- Enlaces entrantes por página de destino.
- Core Web Vitals actuales.

Sin esta foto no se puede demostrar qué se perdió ni recuperarlo.

## Fase 2 — Mapa de redirecciones

Regla: **una redirección 301 por cada URL antigua, a la página nueva más equivalente**. Nunca todo a la portada.

Entrega la tabla con: URL antigua, URL nueva, tipo de redirección, prioridad (según tráfico y enlaces) y notas. Marca aparte:

- URLs sin equivalente: decide 410 o redirección a la categoría superior, con criterio explícito.
- Parámetros, facetas y paginación: qué se conserva, qué se canonicaliza.
- Redirecciones en cadena: prohibidas, siempre origen → destino final.

## Fase 3 — Checklist del día D

1. `robots.txt` del nuevo sitio permite el rastreo (el error más frecuente es publicar con el `Disallow: /` de preproducción).
2. Etiquetas `noindex` de preproducción eliminadas.
3. Canonicals apuntando al nuevo dominio.
4. Sitemap nuevo generado y enviado; sitemap antiguo mantenido temporalmente.
5. Cambio de dirección declarado en Search Console (si hay cambio de dominio).
6. Analítica y etiquetas de conversión funcionando en el nuevo sitio.
7. Prueba manual de las 20 URLs de más tráfico, una por una.
8. Datos estructurados verificados en las plantillas principales.

## Fase 4 — Vigilancia posterior

Define el calendario de control: día 1, día 3, semana 1, semana 2, semana 4 y semana 8. Para cada hito, qué se mira (cobertura, errores de rastreo, posiciones de las consultas clave, sesiones orgánicas) y cuál es el umbral que dispara una intervención.

## Entregables

1. Plan de migración con fases, responsables y fechas.
2. Mapa de redirecciones completo en formato tabla.
3. Checklist del día D en formato lista de verificación.
4. Calendario de vigilancia con umbrales de alarma.
5. Plan de reversión: qué se puede deshacer, cómo y hasta cuándo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Planificar y controlar una migración de dominio, CMS o estructura de URLs sin perder tráfico orgánico, con mapa de redirecciones y vigilancia posterior',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Datos estructurados Schema.org: consigue resultados enriquecidos sin marcar lo que no debes',
                'description'      => 'Qué tipos de Schema.org aplican a cada página, el JSON-LD listo para pegar, cómo validarlo y qué prácticas de marcado se penalizan en lugar de premiarse.',
                'prompt_content'   => <<<'PROMPT'
Actúa como SEO técnico especializado en datos estructurados. Quiero implementar Schema.org en mi sitio para conseguir resultados enriquecidos y que los motores —clásicos y generativos— entiendan qué es cada página.

## Contexto que necesito

1. Tipo de sitio: ecommerce, SaaS, medio, servicios profesionales, marketplace, local.
2. Tipos de página que existen (portada, categoría, producto, artículo, ficha local, FAQ, evento...).
3. Tecnología: ¿puedes inyectar JSON-LD en el `<head>` desde plantillas del servidor?
4. ¿Hay algún marcado ya implementado? Si sí, qué tipos.

## Paso 1 — Mapa de tipos por plantilla

Entrega una tabla: plantilla → tipos de Schema.org recomendados → propiedades obligatorias → propiedades recomendadas que aportan valor real.

Criterio: solo se marca lo que el usuario ve en la página. Marcar contenido oculto es motivo de acción manual, no un atajo.

## Paso 2 — JSON-LD listo para pegar

Para cada plantilla, escribe el bloque JSON-LD completo, con los campos entre llaves para sustituir por variables de la plantilla. Incluye:

- `@id` estables para poder referenciar entidades entre sí en lugar de repetirlas.
- Referencia cruzada: el artículo apunta al `publisher` por `@id`, no duplica la organización entera.
- `BreadcrumbList` coherente con las migas visibles.
- Fechas en formato ISO 8601 con zona horaria.

## Paso 3 — Los errores que quitan el resultado enriquecido

Revisa y dime si estoy cayendo en alguno:

| Error | Consecuencia |
|---|---|
| FAQ marcada que el usuario no ve | Posible acción manual |
| Reseñas propias marcadas sin ser reseñas de terceros | Pérdida del resultado enriquecido |
| Precio o disponibilidad desincronizados del contenido | Marcado ignorado o penalizado |
| Marcar la organización en todas las páginas con `@id` distinto | Entidad fragmentada |
| Datos estructurados solo por JavaScript en un sitio sin SSR | Muchos rastreadores no lo ven |

## Paso 4 — Validación y vigilancia

Define el proceso: validador de resultados enriquecidos y validador de Schema.org, informes de mejoras en Search Console, y qué se revisa después de cada despliegue del CMS (las actualizaciones de plantillas se llevan el marcado por delante con frecuencia).

## Entregables

1. Tabla de tipos por plantilla con propiedades obligatorias y recomendadas.
2. Los bloques JSON-LD completos, uno por plantilla, listos para pegar.
3. Lista de errores detectados en el marcado actual, ordenados por gravedad.
4. Procedimiento de validación y de control tras despliegues.
5. Qué NO marcar en mi caso y por qué.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar datos estructurados Schema.org por tipo de plantilla con JSON-LD listo para producción y evitar los marcados que se penalizan',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Medición sin cookies: GA4, modo de consentimiento y conversiones modeladas',
                'description'      => 'Cómo seguir midiendo cuando la mitad de los visitantes rechaza el seguimiento: configuración del banner, consent mode, eventos de servidor, y qué números puedes defender y cuáles no.',
                'prompt_content'   => <<<'PROMPT'
Actúa como analista digital especializado en medición con restricciones de privacidad. Quiero un sistema de medición que cumpla la normativa, sobreviva al rechazo de cookies y siga permitiendo tomar decisiones.

## Contexto que necesito

1. Herramientas actuales: analítica, gestor de etiquetas, plataformas publicitarias, CRM.
2. Banner de consentimiento actual y tasa de aceptación aproximada.
3. Conversiones que de verdad importan al negocio (máximo 5).
4. Mercados: ¿solo UE o también fuera?
5. ¿Tienes capacidad técnica para medición del lado del servidor?

## Paso 1 — Diagnóstico honesto de lo que hoy mides

Para cada conversión, dime:

- Cómo se mide hoy y en cuántos pasos puede romperse.
- Qué porcentaje de usuarios queda fuera por rechazo de consentimiento o bloqueadores.
- Si el número que se reporta a dirección es una medida o una estimación, y si eso está dicho en algún sitio.

Este último punto es el que produce discusiones absurdas seis meses después. Que quede escrito.

## Paso 2 — Consentimiento bien montado

Requisitos que debe cumplir el banner:

- Rechazar es tan fácil como aceptar, mismo número de clics y misma jerarquía visual.
- Nada de seguimiento antes de la decisión, salvo lo estrictamente necesario.
- El estado de consentimiento se propaga a todas las etiquetas (modo de consentimiento) y se registra.
- La decisión se puede revisar y retirar desde el pie de página.

Dime qué falla en el mío y cómo se corrige, sin recomendarme trucos que rozan el incumplimiento: si un ajuste sirve para «medir a quien dijo no», no lo quiero.

## Paso 3 — Arquitectura de medición

Diseña las capas y qué aporta cada una:

| Capa | Qué mide | Fiabilidad |
|---|---|---|
| Analítica de cliente con consentimiento | Comportamiento detallado del que acepta | Alta pero parcial |
| Modelado de conversiones | Estimación del que rechaza | Estimación, útil para tendencia |
| Eventos de servidor / API de conversiones | Hechos del negocio (pedido, alta, contrato) | Máxima, no se pierde |
| Datos del CRM | Ingreso real y calidad del lead | Máxima, con retraso |
| Encuesta de atribución declarada («¿cómo nos conociste?») | Canales invisibles | Cualitativa, muy valiosa |

La regla que más ordena: **las decisiones de negocio se toman con los hechos del servidor y el CRM; la analítica de cliente sirve para entender comportamiento, no para contar dinero.**

## Paso 4 — Plan de implantación

Ordena las tareas en tres bloques: lo que arregla el cumplimiento (primero), lo que recupera capacidad de medición y lo que mejora la atribución. Para cada tarea: quién, esfuerzo aproximado y qué se puede afirmar después que antes no.

## Entregables

1. Diagnóstico de la medición actual con los puntos de rotura señalados.
2. Correcciones concretas del banner y del modo de consentimiento.
3. Arquitectura de medición objetivo, con la capa responsable de cada número.
4. Plan de implantación por bloques.
5. Una hoja de definiciones: para cada métrica, qué mide exactamente, de dónde sale y qué margen de error tiene.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Rediseñar la medición digital para cumplir la normativa de consentimiento sin perder capacidad de decisión, separando hechos medidos de estimaciones',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Calendario editorial por intención de búsqueda: 12 meses de contenido con criterio',
                'description'      => 'Convierte una lista de temas en un calendario donde cada pieza tiene intención, consulta objetivo, formato, responsable y una métrica de éxito definida antes de escribirla.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de contenidos con experiencia en equipos pequeños que publican poco y necesitan que cada pieza rinda. Quiero un calendario editorial anual construido sobre intención de búsqueda y capacidad real, no sobre ocurrencias.

## Contexto que necesito

1. Negocio, producto y a quién le vendes.
2. Capacidad real de publicación al mes y quién escribe.
3. Contenido que ya existe (URLs o temas).
4. Estacionalidad del negocio: meses fuertes y flojos.
5. Objetivo del año: captación, autoridad, retención o soporte a ventas.

## Paso 1 — Reparto por intención

Propón el reparto de la producción anual entre:

| Bloque | Función | % sugerido |
|---|---|---|
| Pilares | Autoridad temática | 10-15% |
| Informativo específico | Captación de cola larga | 40-50% |
| Comparativas y alternativas | Decisión | 15-20% |
| Casos y datos propios | Prueba y citabilidad | 10-15% |
| Actualizaciones de contenido existente | Mantener lo que ya funciona | 15-20% |

Ajusta los porcentajes a mi objetivo y explica el cambio. El bloque de actualizaciones es el que todo el mundo recorta y el que más rentabilidad tiene: defiéndelo.

## Paso 2 — Ficha de cada pieza

Para cada mes, entrega las piezas con esta ficha completa:

- Título de trabajo y consulta objetivo.
- Intención y qué debe saber o decidir el lector al terminar.
- Formato y extensión aproximada.
- Dato propio, ejemplo o experiencia que la hace distinta de lo que ya está publicado.
- Enlaces internos de salida (dos contenidos y una página comercial).
- Métrica de éxito y plazo para evaluarla.
- Responsable y fecha de publicación.

Si una pieza no tiene un dato propio, un ejemplo real o una opinión sostenida, márcala como prescindible: es contenido que ya existe cien veces.

## Paso 3 — Encaje con el negocio

Coloca las piezas comerciales y las de decisión 4-8 semanas antes de los picos de demanda, no durante. Señala en el calendario los hitos del negocio (lanzamientos, ferias, temporada) y qué contenido los apoya.

## Paso 4 — Revisión trimestral

Define el ritual: qué se mira cada trimestre (piezas que funcionan, piezas muertas, consultas nuevas aparecidas), qué se actualiza, qué se despublica y cómo se recolocan los tres meses siguientes con lo aprendido.

## Entregables

1. Reparto anual por bloque de intención, justificado.
2. Calendario de 12 meses con las fichas completas de las piezas del primer trimestre y los títulos del resto.
3. Lista de contenido existente a actualizar, con qué cambiar en cada uno.
4. Guion del ritual de revisión trimestral.
5. Las 5 piezas que descartarías de mi lista inicial y por qué.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un calendario editorial anual basado en intención de búsqueda, capacidad real del equipo y estacionalidad, con métrica de éxito por pieza',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Test A/B de titulares y creatividades: diseña el experimento que da una respuesta fiable',
                'description'      => 'Cómo plantear un test que se pueda interpretar: hipótesis, tamaño de muestra, duración mínima, criterio de parada y qué hacer cuando el resultado sale plano.',
                'prompt_content'   => <<<'PROMPT'
Actúa como analista de experimentación en marketing. Quiero dejar de "probar cosas" y montar tests que den respuestas en las que se pueda basar una decisión.

## Contexto que necesito

1. Qué quieres testar: titular de landing, creatividad de anuncio, asunto de email, precio, formulario.
2. Volumen disponible: visitas, impresiones o envíos por semana en ese punto.
3. Tasa de conversión actual de la métrica que quieres mover.
4. Herramienta con la que se ejecuta y si permite asignación aleatoria real.

## Paso 1 — Hipótesis, no ocurrencia

Reescribe mi idea en este formato y descarta lo que no encaje:

> Creemos que [cambio concreto] hará que [métrica] mejore para [segmento], porque [razón basada en un dato o en una observación de usuarios]. Lo sabremos si [métrica] sube al menos [mínimo relevante] con un volumen de [muestra].

Si no hay un «porque» sostenido en algo observado, el test es una lotería: dilo.

## Paso 2 — Diseño

Calcula y explícame:

- Tamaño de muestra necesario por variante para detectar el efecto mínimo que me interesaría (no el que sueño).
- Duración mínima: al menos dos ciclos semanales completos, para no medir solo martes.
- Número de variantes: cuantas más, más muestra hace falta; recomienda el mínimo viable.
- Una sola métrica principal y dos de control (para detectar que mejoras clics y hundes ventas).
- Criterio de parada definido **antes** de arrancar.

Advierte explícitamente contra mirar el resultado cada día y parar cuando sale favorable: es la forma más común de convertir ruido en decisión.

## Paso 3 — Las variantes

Genera 3-5 variantes del elemento a testar, cada una con una palanca distinta y declarada: claridad, especificidad, prueba, urgencia legítima, objeción resuelta. Nada de variar cinco cosas a la vez, porque después no se sabe qué funcionó.

## Paso 4 — Lectura de resultados

Prepara la plantilla de conclusión con: resultado de la métrica principal, métricas de control, si se alcanzó la muestra prevista, decisión (implantar, descartar, repetir con más volumen) y qué aprendimos sobre la audiencia, que es lo único que sobrevive al test.

Incluye el caso incómodo: si el resultado es plano, la conclusión útil es «esta palanca no mueve nada aquí», y eso vale dinero. No se maquilla con segmentaciones buscadas a posteriori.

## Entregables

1. Hipótesis reescrita en el formato pedido.
2. Diseño del test: muestra, duración, variantes, métricas y criterio de parada.
3. Las variantes redactadas y la palanca de cada una.
4. Plantilla de lectura de resultados.
5. Qué testar después según cada resultado posible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar tests A/B interpretables de titulares, creatividades o asuntos de email, con muestra, duración y criterio de parada definidos de antemano',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 1,
                'title'            => 'Flujo de trabajo con IA para un equipo de marketing pequeño: qué se delega y qué se revisa',
                'description'      => 'Reparte las tareas del equipo entre lo que la IA hace bien, lo que hace con supervisión y lo que no debe tocar, con los controles de calidad y de marca que evitan publicar cualquier cosa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como responsable de marketing que ha implantado IA en un equipo pequeño y ha visto los dos fracasos habituales: prohibirla y perder productividad, o usarla sin control y degradar la marca. Quiero un reparto de tareas y unos controles.

## Contexto que necesito

1. Tamaño del equipo y qué hace cada persona.
2. Las 15 tareas que más horas consumen al mes.
3. Herramientas de IA disponibles y con qué plan (importa para el tratamiento de datos).
4. Qué contenido sale con la marca delante y qué es interno.

## Paso 1 — Clasificación de las tareas

Reparte mis 15 tareas en cuatro cajones y justifica cada una:

| Cajón | Criterio | Control necesario |
|---|---|---|
| Delegable | Resultado verificable en un minuto, error barato | Revisión rápida |
| Asistida | La IA hace el borrador, la persona decide | Revisión con criterio |
| Solo con datos propios | Necesita información interna que no se puede pegar | Proceso definido |
| No delegable | Juicio, relación o riesgo alto | Ninguna delegación |

La pregunta que decide el cajón no es «¿puede hacerlo?», es «¿puedo detectar en un minuto que lo ha hecho mal?».

## Paso 2 — El material que hace falta

Para las tareas de los dos primeros cajones, define lo que hay que preparar una vez y sirve siempre:

- **Guía de voz de marca:** cómo hablamos, qué no decimos nunca, tres ejemplos buenos y tres malos.
- **Contexto de negocio:** producto, cliente, objeciones frecuentes, competidores y cómo nos diferenciamos.
- **Prompts guardados** por tarea, con el formato de salida exigido.
- **Datos que nunca se pegan:** lista explícita.

## Paso 3 — Controles de calidad

Define la revisión mínima antes de publicar cualquier pieza asistida:

1. Verificación de hechos: cifras, nombres, citas y enlaces, uno por uno.
2. Voz: ¿suena a nosotros o suena a nadie? Marca las muletillas a eliminar.
3. Aportación: ¿dice algo que no esté ya publicado cien veces? Si no, no se publica.
4. Responsable: quien firma responde del contenido como de cualquier otro trabajo propio.

## Paso 4 — Medición del ahorro

Antes de decir que la IA nos ahorra tiempo, mide: horas de la tarea antes, horas después (incluida la revisión) y calidad del resultado. Propón cómo registrarlo durante cuatro semanas sin montar una burocracia.

## Entregables

1. Las 15 tareas clasificadas con justificación.
2. Guía de voz de marca rellenable y contexto de negocio en una página.
3. Los prompts guardados de las 5 tareas de mayor impacto.
4. Lista de verificación previa a publicar.
5. Hoja de medición del ahorro real durante cuatro semanas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Definir qué tareas de marketing se delegan a la IA, con qué material de contexto y qué controles de calidad y de marca antes de publicar',
                'vote_score'       => 36,
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
