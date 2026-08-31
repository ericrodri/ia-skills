<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills94Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 5,
                'title'            => 'PRD asistido por IA que el equipo puede implementar sin volver a preguntarte',
                'description'      => 'Estructura el documento de requisitos con el problema, las decisiones tomadas, los casos límite y lo que queda fuera, de forma que diseño y desarrollo puedan empezar sin diez rondas de aclaraciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product manager senior que escribe documentos que el equipo lee de verdad. Quiero un PRD que responda de antemano las preguntas que siempre llegan por chat tres días después de empezar.

## Contexto que necesito

1. El problema: quién lo tiene, con qué frecuencia y qué hace hoy para resolverlo.
2. Evidencia disponible: datos de uso, tickets, entrevistas, peticiones.
3. Objetivo de negocio y métrica que debería moverse.
4. Restricciones conocidas: técnicas, legales, de plazo, de equipo.
5. Qué has decidido ya y qué está abierto de verdad.

## Estructura del documento

### 1. Problema (media página, sin solución dentro)
Quién, cuándo, con qué frecuencia, qué coste tiene hoy. Con la evidencia citada. Si la evidencia es una petición de un cliente grande, dilo tal cual: es una razón legítima, pero es distinta de un patrón observado.

### 2. Por qué ahora
Qué cambia si lo hacemos este trimestre en lugar del siguiente. Sin esta sección, cualquier cosa parece prioritaria.

### 3. Resultado esperado
Métrica principal, valor actual, valor objetivo y plazo de evaluación. Más las métricas de control que no deben empeorar. Un objetivo sin métrica de control es una invitación a optimizar una cosa rompiendo otra.

### 4. Alcance
Dos listas explícitas: **dentro** y **fuera**. La lista de fuera es la que evita la mitad de las discusiones, y hay que escribirla aunque parezca obvia.

### 5. Comportamiento esperado
Los recorridos principales, paso a paso, en presente y en lenguaje de usuario. Para cada uno: qué ve, qué hace, qué ocurre, qué pasa si falla.

### 6. Casos límite y estados
Tabla con: sin datos, un solo elemento, muchísimos elementos, sin permisos, sin conexión, operación duplicada, valores extremos, texto muy largo, usuario que no ha completado un paso previo. Y la decisión para cada uno. **Este apartado es el que distingue un PRD útil de una idea escrita**: cada hueco aquí se convierte en una decisión improvisada de quien implemente.

### 7. Decisiones tomadas y descartadas
Qué se decidió, qué alternativas se valoraron y por qué se descartaron. Evita que la discusión vuelva cada dos semanas.

### 8. Preguntas abiertas
Con responsable y fecha. Ninguna pregunta abierta sin dueño.

### 9. Lanzamiento
Cómo se despliega (a quién primero), qué se mide, cuándo se revisa y en qué condiciones se revierte.

## Lo que quiero que hagas además

- Señálame las contradicciones o los huecos de la información que te he dado, en lugar de rellenarlos.
- Marca cada afirmación del documento como «dato», «supuesto» o «decisión». Los supuestos son los que hay que validar antes de construir.
- Propón la versión mínima que aprende lo mismo con menos trabajo.

## Entregables

1. El PRD completo con los nueve apartados.
2. Lista de supuestos que conviene validar antes de empezar, y cómo validarlos rápido.
3. Preguntas que le harán al equipo y que el documento ya responde (para comprobar que está completo).
4. La versión mínima alternativa, con lo que se sacrifica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Escribir un PRD completo con problema, alcance explícito, casos límite decididos y supuestos marcados para que el equipo empiece sin aclaraciones',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Analiza 500 opiniones de usuarios y sal con una lista priorizada de decisiones',
                'description'      => 'Convierte reseñas, encuestas y tickets en temas cuantificados, separa problema de solución pedida y cruza con impacto de negocio para decidir qué se construye.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product manager con experiencia en análisis de feedback a escala. Tengo mucho texto de usuarios acumulado y quiero decisiones, no un mural de post-its.

## Lo que te voy a dar

1. El corpus: reseñas, respuestas de encuestas, tickets, mensajes de comunidad (pégalo por lotes).
2. De dónde sale cada bloque y de qué periodo.
3. Segmentos de cliente y, si es posible, plan o tamaño de cuenta de quien opina.
4. La estrategia actual del producto, para poder señalar los conflictos.

## Paso 1 — Limpieza y sesgos declarados

Antes de analizar, dime a quién estoy escuchando y a quién no:

- Reparto del corpus por fuente y por segmento.
- Quiénes están sobrerrepresentados (los que escriben reseñas son un perfil concreto; los que abren tickets, otro).
- Qué segmentos importantes no aparecen y qué habría que hacer para oírlos.

Un análisis sin este apartado lleva a construir para los que hablan, no para los que pagan.

## Paso 2 — Temas cuantificados

Agrupa en temas y entrega la tabla:

| Tema | Menciones | % del corpus | Segmentos donde pesa | Intensidad | Tendencia |
|---|---|---|---|---|---|

Intensidad: cuánto bloquea o cuánto irrita. Tendencia: si crece o decrece respecto al periodo anterior, si tengo datos comparables.

## Paso 3 — Separar problema de solución pedida

Para cada tema, distingue:

- **El problema** (lo que le impide conseguir lo que quiere).
- **La solución que pide** (su propuesta, que casi nunca es la mejor).
- **El trabajo que intenta hacer** (por qué le importa).

Cuando cinco clientes piden cinco funciones distintas para el mismo problema, la decisión correcta no es construir cinco cosas.

## Paso 4 — Cruce con negocio

Añade a cada tema, con lo que yo te dé o marcando que falta el dato: ingresos afectados, relación con abandono, coste de soporte asociado, y encaje con la estrategia. Un tema con muchas menciones de usuarios gratuitos y otro con tres menciones de tres cuentas grandes en renovación no compiten en la misma liga.

## Paso 5 — Decisiones

Clasifica cada tema y justifica:

| Decisión | Criterio |
|---|---|
| Construir ahora | Problema real, impacto alto, encaje estratégico |
| Arreglar barato | Coste bajo, alivio inmediato (copy, documentación, ajuste) |
| No es producto | Se resuelve con soporte, formación o comercial |
| No lo vamos a hacer | Con el motivo, para poder responderlo cuando vuelva |
| Investigar | Falta información; con la pregunta concreta y el método |

El cubo «no lo vamos a hacer» es obligatorio: un backlog donde todo está pendiente es un backlog que no decide.

## Entregables

1. Declaración de sesgos del corpus y quién falta.
2. Tabla de temas cuantificados.
3. Desglose problema / solución pedida / trabajo por tema.
4. Cruce con impacto de negocio.
5. Decisiones por tema, con las cinco primeras acciones concretas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar cientos de opiniones de usuarios y convertirlas en temas cuantificados y decisiones de producto con el sesgo del corpus declarado',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Especifica una función con criterios de aceptación y casos límite cerrados',
                'description'      => 'Pasa de «hay que hacer que se pueda exportar» a una especificación con reglas, estados, errores y criterios verificables que diseño, desarrollo y QA interpretan igual.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product manager con experiencia escribiendo especificaciones para equipos que no quieren adivinar. Te describo una función en lenguaje coloquial y quiero la especificación cerrada.

## Lo que te voy a dar

1. La función, tal como la diría en una reunión.
2. Quién la usa y en qué momento de su trabajo.
3. Restricciones conocidas y sistemas implicados.
4. Lo que ya existe en el producto y con lo que tiene que convivir.

## Paso 1 — Preguntas antes de escribir

Hazme las preguntas cuya respuesta cambia la implementación. No las genéricas: las que si no se responden ahora se responderán solas y mal. Máximo 10, ordenadas por impacto.

## Paso 2 — Reglas de negocio

Enumera las reglas, cada una comprobable y sin ambigüedad. Formato: «Si [condición], entonces [resultado]». Marca las que yo he decidido y las que has tenido que suponer.

## Paso 3 — Criterios de aceptación

Escríbelos así, y que cada uno sea verificable por alguien que no haya participado en la conversación:

```
Dado [estado inicial concreto]
Cuando [acción]
Entonces [resultado observable]
```

Nada de «funciona correctamente» ni «es rápido». Si es rendimiento, con número.

## Paso 4 — Casos límite y errores

Tabla completa con el comportamiento decidido:

| Situación | Comportamiento esperado | Mensaje al usuario |
|---|---|---|
| Sin datos | | |
| Un solo elemento | | |
| Volumen máximo esperado | | |
| Por encima del máximo | | |
| Permisos insuficientes | | |
| Operación repetida (doble clic, reintento) | | |
| Fallo del sistema externo | | |
| Datos inválidos o corruptos | | |
| Operación concurrente sobre el mismo recurso | | |
| Cancelación a mitad | | |

## Paso 5 — Lo que queda fuera

Lista explícita, con el motivo. Incluye las cosas que la gente va a suponer incluidas.

## Paso 6 — Impactos laterales

Qué más se toca: analítica y eventos a registrar, permisos y roles, notificaciones, exportaciones, documentación y ayuda, textos en otros idiomas, y qué se rompe en integraciones existentes.

## Entregables

1. Las preguntas abiertas ordenadas por impacto.
2. Reglas de negocio, con lo supuesto marcado.
3. Criterios de aceptación completos.
4. Tabla de casos límite con comportamiento y mensajes.
5. Fuera de alcance e impactos laterales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Convertir una idea de función en especificación cerrada con reglas de negocio, criterios de aceptación verificables y casos límite decididos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Síntesis de entrevistas de descubrimiento: valida o tumba tu hipótesis con evidencia',
                'description'      => 'Analiza las entrevistas de la semana contra la hipótesis que las motivó, con el criterio de validación definido antes de empezar para no leer en los datos lo que ya querías creer.',
                'prompt_content'   => <<<'PROMPT'
Actúa como investigador de producto riguroso. Tengo entrevistas de descubrimiento y una hipótesis. Quiero saber si la hipótesis se sostiene, no que me la confirmes.

## Lo que te voy a dar

1. La hipótesis, tal como la escribimos antes de las entrevistas.
2. El criterio de validación que fijamos, si lo fijamos.
3. Las transcripciones o notas.
4. Cómo se reclutó a estas personas.

Si no fijamos criterio de validación de antemano, dímelo y avísame de que a partir de aquí el análisis es más débil: sin criterio previo, siempre se encuentra apoyo para lo que se quiere creer.

## Paso 1 — Reconstruir el criterio

Si falta, propón el criterio que habría correspondido: cuántas personas de qué perfil tendrían que decir qué para considerar la hipótesis sostenida, y qué evidencia la tumbaría.

## Paso 2 — Evidencia a favor y en contra

Dos columnas, con citas literales y quién lo dijo. Y una tercera categoría que casi siempre se omite: **evidencia ambigua**, la que se puede leer en los dos sentidos. Que esté a la vista.

## Paso 3 — Distinguir lo que importa

Para cada entrevista, separa:

| Tipo de dato | Fiabilidad |
|---|---|
| Comportamiento pasado descrito con detalle («la semana pasada tuve que...») | Alta |
| Proceso actual que la persona enseña o describe paso a paso | Alta |
| Emoción sobre el problema | Media |
| Predicción de su comportamiento futuro («lo usaría», «lo pagaría») | Baja |
| Opinión sobre una idea que le hemos contado | Muy baja |

Que la conclusión no se apoye en las dos últimas filas. La gente es mala prediciendo lo que hará y amable valorando ideas ajenas.

## Paso 4 — Veredicto

Uno de estos cuatro, con la justificación:

- **Sostenida:** con qué grado de confianza y qué límites.
- **Tumbada:** qué la contradice y qué aprendimos que vale más que la hipótesis.
- **Matizada:** vale para un segmento y no para otro. Especifica cuál.
- **Sin resolver:** qué falta y cuántas entrevistas más, con qué perfil.

## Paso 5 — Siguiente paso

Según el veredicto: qué se construye, qué se prueba antes con un experimento más barato, o a quién hay que entrevistar. Con la pregunta concreta de la siguiente ronda.

## Entregables

1. Criterio de validación (el fijado o el reconstruido).
2. Evidencia a favor, en contra y ambigua, con citas.
3. Clasificación de la calidad de la evidencia por entrevista.
4. Veredicto justificado.
5. Siguiente paso con la pregunta de la próxima ronda.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sintetizar entrevistas de descubrimiento contra una hipótesis con criterio de validación explícito y separando la evidencia fiable de la débil',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Define qué es «suficientemente bueno» en una función con IA antes de lanzarla',
                'description'      => 'Fija el umbral de calidad aceptable, qué tipos de error se toleran y cuáles no, cómo se despliega por fases y en qué condiciones se retira, para no lanzar por sensación ni bloquear por miedo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product manager con experiencia lanzando funciones basadas en modelos de lenguaje. Vamos a lanzar una y necesito una decisión defendible sobre cuándo está lista.

## Contexto que necesito

1. Qué hace la función y qué entrega al usuario.
2. Qué hace el usuario con esa salida y qué pasa si es incorrecta.
3. Puede el usuario verificar el resultado por sí mismo, sí o no.
4. Alternativa actual: cómo lo resuelve hoy y con qué tasa de error humano.
5. Qué medimos ya (si tenemos evaluaciones) y qué resultados dan.

## Paso 1 — Clasificar los errores por consecuencia

No todos los fallos son iguales, y este es el análisis que casi nunca se hace:

| Tipo de error | Ejemplo en mi función | Detectable por el usuario | Coste | Tolerancia |
|---|---|---|---|---|
| Vacío o negativa | No responde | Sí | Bajo | Alta |
| Incompleto | Se deja parte | A veces | Medio | Media |
| Plausible pero falso | Inventa un dato creíble | No | Alto | Muy baja |
| Fuera de tono o de marca | Suena a otra empresa | Sí | Medio | Baja |
| Dañino | Consejo peligroso, filtra datos | No siempre | Muy alto | Cero |

El error plausible pero falso es el que hunde la confianza, porque el usuario no puede detectarlo. Si tu función es propensa a ese error y el usuario no puede verificar, el umbral tiene que ser muy alto o hay que rediseñar la función para que muestre sus fuentes.

## Paso 2 — Umbral y comparación correcta

Fija el umbral contra la alternativa real, no contra la perfección: si el proceso humano actual falla el 8% de las veces, exigir 0% a la función es una decisión política, no de calidad. Define:

- Métrica principal y su umbral mínimo para lanzar.
- Tolerancia cero para los errores de la última fila.
- Muestra sobre la que se mide y quién la juzga.

## Paso 3 — Diseño del despliegue

| Fase | Audiencia | Duración | Qué se vigila | Criterio para avanzar |
|---|---|---|---|---|
| Interna | Equipo | 1-2 semanas | Errores graves | Cero errores dañinos |
| Beta | Usuarios que aceptan probar | 2-4 semanas | Umbral + satisfacción | Umbral sostenido |
| Parcial | % del tráfico | 2-4 semanas | Métricas de negocio | Sin daño en las de control |
| General | Todos | — | Vigilancia continua | — |

## Paso 4 — Retirada

Define de antemano: qué señal obliga a desactivar, quién puede hacerlo sin pedir permiso, cómo se avisa a los usuarios y qué queda mientras tanto. Una función con IA sin interruptor es un riesgo operativo, no una función.

## Paso 5 — Qué se promete al usuario

El copy y las expectativas: qué decimos que hace, qué decimos que no garantiza, dónde se le pide que revise. Prometer menos y cumplirlo funciona mejor que lo contrario, sobre todo la segunda semana.

## Entregables

1. Tabla de errores clasificados para mi función concreta.
2. Umbral de lanzamiento con la comparación contra la alternativa actual.
3. Plan de despliegue por fases con criterios de avance.
4. Protocolo de retirada con responsables.
5. Copy de expectativas y de revisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Decidir cuándo una función con IA está lista para lanzarse, con clasificación de errores por consecuencia, umbral, despliegue por fases y protocolo de retirada',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Unit economics de una función con IA: coste por uso, precio y margen',
                'description'      => 'Calcula lo que cuesta cada uso de una función basada en modelos, cómo evoluciona con la adopción y qué modelo de precio la sostiene sin comerse el margen del producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product manager con perfil analítico y experiencia en productos donde el coste variable importa. Quiero saber si la función con IA que vamos a lanzar tiene sentido económico antes de que la adopción nos sorprenda.

## Datos que necesito

1. Qué hace la función y cuántas llamadas al modelo consume un uso típico.
2. Tamaño aproximado de entrada y salida por llamada, y qué parte del contexto se repite.
3. Precio por millón de tokens de entrada y de salida del modelo elegido (consúltalo actualizado; cambia).
4. Usos previstos por usuario y por mes, en escenario bajo, medio y alto.
5. Precio actual del producto y margen bruto objetivo.

## Paso 1 — Coste por uso

Calcula y muestra el desglose: tokens de entrada, de salida, número de llamadas y coste total por uso. Distingue el caso típico del caso pesado, porque la media engaña cuando la distribución tiene cola larga: unos pocos usuarios intensivos pueden representar la mitad de la factura.

## Paso 2 — Escenarios de adopción

| Escenario | % de usuarios que la usan | Usos/mes por usuario | Coste mensual total | % del ingreso |
|---|---|---|---|---|
| Bajo | | | | |
| Medio | | | | |
| Alto (éxito) | | | | |

El escenario que hay que mirar con lupa es el de éxito: muchas funciones con IA son rentables mientras nadie las usa.

## Paso 3 — Palancas de coste

Ordena por rentabilidad y estima el ahorro de cada una: caché del prefijo estable, recorte de contexto, modelo más pequeño para los casos fáciles, menos llamadas por uso, salida más corta, procesamiento por lotes en lo no interactivo, resultados reutilizados entre usuarios cuando sea posible.

Para cada palanca, di qué riesgo de calidad implica y cómo se verificaría.

## Paso 4 — Modelo de precio

Evalúa las opciones para mi caso:

| Modelo | Cuándo funciona | Riesgo |
|---|---|---|
| Incluido en el plan | Uso predecible y coste bajo respecto al precio | Los usuarios intensivos se comen el margen |
| Límite por plan | Uso desigual | Fricción y conversaciones de soporte |
| Créditos o consumo | Uso muy variable | Fricción de compra, cliente vigilando el contador |
| Plan superior | La función es diferencial | Segmenta el producto, puede frenar adopción |

Recomienda uno y di qué límite concreto pondrías, con el número.

## Paso 5 — Vigilancia

Define las tres alarmas: coste por usuario activo, coste sobre ingreso de la función, y el percentil alto de consumo por usuario. Con umbral y con responsable.

## Entregables

1. Coste por uso, típico y pesado, con el desglose.
2. Tabla de escenarios con el coste sobre el ingreso.
3. Palancas ordenadas con ahorro estimado y riesgo.
4. Modelo de precio recomendado con límites concretos.
5. Alarmas de vigilancia con umbrales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Calcular el coste por uso de una función con IA, proyectar escenarios de adopción y elegir el modelo de precio que sostiene el margen',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Qué prometer al usuario sobre sus datos en una función con IA',
                'description'      => 'Decide y redacta lo que se dice sobre el tratamiento de datos en una función con IA: qué se envía, a quién, cuánto se guarda, qué controles tiene el usuario y qué no se puede afirmar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product manager que ha tenido que responder a un cuestionario de seguridad de un cliente grande y a una pregunta incómoda en redes sobre datos. Quiero decidir y redactar la promesa de datos de una función con IA antes de lanzarla, no después.

Nota: esto ordena decisiones de producto y comunicación. La validación jurídica y la base legal del tratamiento las revisa quien lleve el asunto legal en tu organización.

## Contexto que necesito

1. Qué datos entran en la función: introducidos por el usuario, del producto, de terceros.
2. Si hay datos personales, y de quién: del usuario o de terceros (sus clientes, sus empleados).
3. Proveedor del modelo, plan contratado y qué dice su contrato sobre uso de datos y retención.
4. Qué se guarda por nuestra parte y para qué (mejorar el producto, depurar, historial del usuario).
5. Mercados y tipo de cliente (consumidor, empresa, sector regulado).

## Paso 1 — Mapa del dato

Traza el recorrido completo, paso a paso: qué sale del navegador, qué guarda nuestro sistema, qué se envía al proveedor, qué vuelve, qué se registra en trazas y por cuánto tiempo vive cada cosa. Marca los puntos donde un dato personal cruza un límite.

Aquí aparecen casi siempre dos sorpresas: los registros de depuración con el contenido completo, y los datos que viajan al proveedor porque están en un contexto que nadie revisó.

## Paso 2 — Decisiones de producto

Para cada punto, decide y justifica:

| Decisión | Opciones | Recomendación |
|---|---|---|
| Retención de las entradas | No guardar / guardar N días / guardar hasta que el usuario borre | |
| Uso para mejorar el producto | No / con consentimiento explícito / anonimizado | |
| Control del usuario | Desactivar la función / borrar historial / exportar | |
| Datos sensibles | Bloquear la entrada / avisar / permitir | |
| Nivel de cliente | ¿Los clientes de empresa necesitan condiciones distintas? | |

Regla práctica: lo que no se guarda no se filtra, no se pide en una auditoría y no aparece en una brecha. La retención por defecto debería ser la mínima que permita operar.

## Paso 3 — La promesa, redactada

Escribe tres versiones del mismo contenido, coherentes entre sí:

1. **En la interfaz**, junto a la función: dos frases, en lenguaje llano.
2. **En el centro de ayuda**: media página con el recorrido del dato y los controles.
3. **Para el cuestionario de seguridad de un cliente**: respuestas concretas a proveedor, ubicación del tratamiento, retención, subencargados, cifrado y uso para entrenamiento.

## Paso 4 — Lo que no se puede afirmar

Lista de frases que suenan bien y no se deben usar sin poder demostrarlas: «tus datos nunca salen de tu cuenta», «no usamos IA con tus datos», «totalmente anónimo», «cumple el RGPD» a secas. Para cada una, la alternativa precisa y verificable.

## Entregables

1. Mapa del dato con los cruces marcados.
2. Tabla de decisiones con recomendación y motivo.
3. Los tres textos de la promesa.
4. Lista de afirmaciones prohibidas con su alternativa.
5. Qué preguntas hay que llevar a legal antes de publicar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Decidir y redactar la promesa de tratamiento de datos de una función con IA, con mapa del dato, controles del usuario y afirmaciones verificables',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Notas de versión y comunicación de cambios que la gente sí lee',
                'description'      => 'Escribe el anuncio de cada cambio desde el punto de vista de quien lo usa, con la jerarquía correcta según el impacto y el aviso previo cuando el cambio rompe algo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product manager que ha visto dos cosas: notas de versión que nadie abre y cambios silenciosos que generan una avalancha de tickets. Quiero un sistema de comunicación de cambios proporcionado al impacto.

## Contexto que necesito

1. Los cambios de este ciclo, con una línea cada uno.
2. Quién usa el producto y con qué frecuencia entra.
3. Canales disponibles: notas en la app, correo, centro de ayuda, comunidad, comercial.
4. Si hay clientes con integraciones o API.

## Paso 1 — Clasificar por impacto

| Nivel | Definición | Comunicación |
|---|---|---|
| Rompe | Algo deja de funcionar como antes | Aviso previo con plazo, correo directo, guía de migración |
| Cambia el flujo | La tarea se hace de otra forma | Aviso en la app antes y durante, ayuda actualizada |
| Añade | Función nueva opcional | Notas de versión, y anuncio si es relevante |
| Mejora | Rendimiento, corrección, detalle | Notas de versión agrupadas |
| Interno | Sin efecto visible | No se comunica |

El error más caro es tratar un cambio de nivel «rompe» como si fuera «mejora». El segundo más caro es enviar un correo a toda la base por una corrección menor: eso entrena a la gente a ignorar tus correos.

## Paso 2 — Redacción, cambio a cambio

Para cada uno, tres líneas con esta estructura:

1. **Qué puedes hacer ahora** (en segunda persona, con el verbo de la acción del usuario).
2. **Por qué te importa** (el problema que resuelve, no la tecnología).
3. **Cómo se usa** (dónde está, en una frase o con un enlace).

Nada de «hemos refactorizado el módulo de exportación para mejorar la eficiencia». Sí a «ahora puedes exportar más de 10.000 filas sin que se corte».

## Paso 3 — El caso de los cambios que rompen

Plantilla completa: qué cambia, cuándo exactamente, por qué lo hacemos, a quién afecta (con criterio para que cada uno sepa si le toca), qué tiene que hacer, hasta cuándo funciona lo antiguo, y a quién escribir si se atasca. Enviado con antelación proporcional al trabajo que exige, y repetido cerca de la fecha.

## Paso 4 — Formato de las notas

- Agrupadas por área del producto, no por sprint ni por número de versión.
- Lo importante arriba; las correcciones, en una lista al final.
- Sin números de ticket internos ni jerga de equipo.
- Con fecha y con enlace permanente para poder citarlas.

## Paso 5 — Uso interno

Prepara la versión para el equipo: qué contar a soporte antes del lanzamiento (con las preguntas que van a llegar y su respuesta), y qué contar a ventas (qué se puede prometer y qué no).

## Entregables

1. Los cambios clasificados por nivel de impacto.
2. Notas de versión completas, listas para publicar.
3. El correo de aviso de los cambios que rompen.
4. Guía interna para soporte y para ventas.
5. Calendario de envíos, con antelación por tipo de cambio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Clasificar los cambios de producto por impacto y redactar notas de versión, avisos previos y guía interna para soporte y ventas',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Del ticket de soporte a la decisión de producto: monta el circuito completo',
                'description'      => 'El proceso que convierte el flujo diario de tickets en señal utilizable por producto: etiquetado mínimo, agregación semanal, criterio de escalado y respuesta de vuelta al equipo de soporte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product manager que trabaja pegado a soporte. Hoy los tickets se resuelven y desaparecen; quiero que dejen de ser solo trabajo y empiecen a ser información.

## Contexto que necesito

1. Volumen de tickets al mes y herramienta que usáis.
2. Cómo se etiquetan hoy (o si no se etiquetan).
3. Tamaño del equipo de soporte y del de producto.
4. Qué relación hay hoy entre los dos equipos: reuniones, canal, nada.

## Paso 1 — Etiquetado mínimo viable

El etiquetado que nadie mantiene es el que tiene 40 categorías. Propón el mínimo que sirve para decidir:

| Dimensión | Valores | Quién la pone |
|---|---|---|
| Área del producto | 6-10 valores máximo | Soporte, al cerrar |
| Tipo | Fallo / no encuentra / no entiende / no existe / no debería ser así | Soporte, al cerrar |
| Evitable | Sí, con producto / sí, con documentación / no evitable | Soporte, al cerrar |
| Impacto en el cliente | Bloquea / molesta / pregunta | Soporte, al abrir |

La dimensión «evitable» es la que convierte soporte en producto: separa lo que hay que construir de lo que hay que explicar mejor.

## Paso 2 — Agregación semanal

Define el informe automático de una página: volumen por área, top 10 de motivos, qué crece respecto a la semana anterior, tickets evitables con producto y su coste estimado en horas de soporte, y las tres citas de cliente más reveladoras.

Que sea una página. Los informes de quince páginas se archivan sin leer.

## Paso 3 — Criterio de escalado

Cuándo un patrón de tickets entra en el proceso de producto, escrito y sin ambigüedad. Por ejemplo: más de N tickets del mismo motivo en dos semanas, o cualquier motivo que bloquee a un cliente de más de X, o cualquier fallo con pérdida de datos. Sin criterio escrito, el escalado depende de quién grite más fuerte.

## Paso 4 — El circuito de vuelta

La parte que casi todos olvidan y la que hace que soporte siga etiquetando: contarle qué ha pasado con lo que reportó. Define:

- Estado visible de los patrones escalados: recibido, en análisis, en construcción, descartado con motivo.
- Aviso a soporte cuando algo se soluciona, con la respuesta que puede dar al cliente que lo pidió.
- Reconocimiento explícito de los patrones que cambiaron una decisión.

## Paso 5 — Reunión de 30 minutos

Guion de la reunión semanal entre soporte y producto: los tres primeros motivos, decisiones tomadas, qué se escala, qué se resuelve con documentación y quién hace qué. Con acta de tres líneas.

## Entregables

1. Esquema de etiquetado mínimo, listo para configurar.
2. Plantilla del informe semanal de una página.
3. Criterio de escalado escrito, con umbrales.
4. Diseño del circuito de vuelta a soporte.
5. Guion de la reunión semanal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el circuito que convierte los tickets de soporte en señal para producto, con etiquetado mínimo, informe semanal y criterio de escalado',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Documento de decisión de producto: deja de discutir lo mismo cada dos meses',
                'description'      => 'Registra cada decisión relevante con su contexto, las alternativas descartadas y las condiciones que la harían cambiar, para que el equipo no reabra debates cerrados ni repita errores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product manager veterano que ha vivido la misma discusión tres veces en un año porque nadie escribió por qué se decidió lo que se decidió. Quiero implantar un registro de decisiones de producto.

## Contexto que necesito

1. La decisión concreta que hay que documentar ahora.
2. Quién participa y quién decide.
3. Información disponible: datos, investigación, restricciones.
4. Dónde vivirá el registro (repositorio, wiki, herramienta de producto).

## Estructura del documento (una página, no más)

### Título
Decisión en una frase afirmativa: «Cobramos el almacenamiento por volumen y no por usuario». Sin interrogaciones ni títulos vagos.

### Estado
Propuesta / decidida / revisada / revertida. Con fecha.

### Contexto
Qué situación obliga a decidir. Qué sabemos, con datos. Qué no sabemos. Restricciones reales.

### Opciones consideradas
Tabla con al menos tres, incluyendo «no hacer nada»:

| Opción | A favor | En contra | Coste | Riesgo principal |
|---|---|---|---|---|

Si solo hay una opción sobre la mesa, no es una decisión: es una ejecución. Dilo.

### Decisión y por qué
La opción elegida y el criterio que la hizo ganar. El criterio importa más que la opción: es lo que permite decidir coherentemente la próxima vez.

### Consecuencias aceptadas
Lo que empeora con esta decisión, dicho explícitamente. Una decisión sin consecuencias es una decisión sin analizar.

### Qué la haría cambiar
Las condiciones concretas y medibles que obligarían a revisarla: un umbral de métrica, un cambio de mercado, un coste que se dispara. **Este apartado es el que evita la mitad de las discusiones futuras**: cuando alguien quiere reabrir el tema, la pregunta es si se cumple alguna de estas condiciones.

### Fecha de revisión
Cuándo se vuelve a mirar aunque no pase nada.

## Además

- Señálame los supuestos de la decisión y cuáles son verificables.
- Dime qué información falta y si merece la pena esperar a tenerla o decidir con lo que hay (con el coste de esperar).
- Propón las tres decisiones pasadas que convendría documentar retroactivamente porque siguen provocando debates.

## Entregables

1. El documento de la decisión actual, completo.
2. Supuestos marcados y cómo validarlos.
3. Recomendación sobre decidir ahora o esperar, con el coste de cada camino.
4. Plantilla en blanco para las siguientes decisiones.
5. Lista de decisiones pasadas a documentar, por prioridad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Documentar decisiones de producto con alternativas, consecuencias aceptadas y condiciones de revisión para evitar reabrir debates cerrados',
                'vote_score'       => 33,
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
