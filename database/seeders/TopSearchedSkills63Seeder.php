<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills63Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Email de recuperación de carrito abandonado — la secuencia de 3 emails que recupera entre el 10-20% de los abandonos en ecommerce',
                'description'      => 'Aprende a diseñar y escribir la secuencia de emails de recuperación de carrito abandonado que maximiza la conversión: timing óptimo de cada email, estructura del copy para cada mensaje, cuándo usar descuentos y cómo personalizar la secuencia según el segmento de cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en email marketing y CRO para ecommerce con experiencia diseñando secuencias de recuperación de carrito que han generado entre el 10% y el 20% de recuperación sobre los abandonos. Ayúdame a diseñar y escribir la secuencia completa de emails para mi tienda, adaptada a mi tipo de producto y audiencia.

---

## POR QUÉ EL CARRITO ABANDONADO ES LA MAYOR OPORTUNIDAD DE INGRESOS

El 70% de los carritos en ecommerce se abandonan antes de la compra. Sin embargo, un usuario que añade un producto al carrito ha mostrado una intención de compra muy alta — mucho mayor que alguien que solo visita la página del producto.

La recuperación del carrito no es spam. Es recordar a alguien que quería comprar algo. Cuando se hace bien, tiene tasas de apertura del 40-50% (vs 20% media de email marketing) y tasas de conversión del 5-15% sobre emails enviados.

---

## MÓDULO 1 — EL TIMING ÓPTIMO DE CADA EMAIL

La secuencia estándar de 3 emails funciona así:

| Email | Timing | Objetivo | Tono |
|-------|--------|----------|------|
| Email 1 | 1 hora después del abandono | Recordatorio suave — puede que haya sido un problema técnico | Neutro, servicial |
| Email 2 | 24 horas después | Reforzar el deseo — producto + prueba social | Aspiracional |
| Email 3 | 72 horas después | Crear urgencia o incentivar con descuento | Urgencia moderada |

**Por qué 1 hora para el primero**: el usuario todavía tiene el producto en mente, puede que su sesión haya expirado o haya tenido un problema de pago.

**Por qué 72 horas para el descuento**: si ofreces el descuento demasiado pronto, condicionas al usuario a siempre abandonar el carrito para esperar el descuento.

---

## MÓDULO 2 — EMAIL 1: EL RECORDATORIO (1 HORA DESPUÉS)

### Estructura

**Subject**: [3 opciones a testear]
- "¿Olvidaste algo? Tu [nombre del producto] te espera"
- "Tu pedido está casi listo"
- "[Nombre], dejaste algo en tu carrito"

**Preheader** (el texto que aparece tras el subject en la bandeja de entrada):
- "Puedes completar tu compra en 2 clics. Tu carrito todavía está guardado."

**Estructura del cuerpo:**

```
[IMAGEN DEL PRODUCTO — con enlace directo al carrito]

Hola [Nombre],

Parece que algo interrumpió tu compra.
Tu [nombre exacto del producto] todavía está guardado en tu carrito.

[IMAGEN DEL PRODUCTO]
[Nombre del producto]
Talla/Color: [si aplica]
Precio: [X€]

[BOTÓN CTA: "Completar mi compra" → enlace directo al carrito pre-llenado]

¿Tuviste algún problema con el pago?
Puedes contactarnos en [email/chat] y te ayudamos en menos de [X horas].

[firma: nombre del equipo o persona real]
```

**Lo que NO incluir en el Email 1:**
- Descuento (todavía no)
- Presión de urgencia (todavía no)
- Texto excesivo — debe ser minimalista

---

## MÓDULO 3 — EMAIL 2: EL DESEO (24 HORAS DESPUÉS)

El segundo email tiene que recordarle por qué quería el producto y reforzar la confianza.

### Estructura

**Subject**: [3 opciones]
- "[Nombre del producto] — por qué lo elegiste en primer lugar"
- "Esto es lo que te estás perdiendo"
- "Los que compraron [producto] también dicen..."

**Cuerpo:**

```
[IMAGEN LIFESTYLE del producto — no solo el producto, sino el producto en uso]

Hola [Nombre],

Sabemos que tomar la decisión correcta toma su tiempo.
Por eso queremos que tengas toda la información.

[Nombre del producto] es perfecto para ti si:
✓ [Beneficio 1 relevante para tu audiencia]
✓ [Beneficio 2 con especificidad]
✓ [Beneficio 3 que diferencia el producto de alternativas]

LO QUE DICEN QUIENES YA LO TIENEN:
"[Review real de 5 estrellas — elegir una que mencione el beneficio más relevante]"
— [Nombre del reviewer], [ciudad si está disponible]

⭐⭐⭐⭐⭐ [X] valoraciones verificadas

[IMAGEN DEL PRODUCTO]
[Nombre del producto] — [precio]
[Stock disponible si es limitado — máximo si es verdad]

[BOTÓN: "Quiero este producto" → enlace al carrito]

[firma]
```

**Personalización avanzada para Email 2:**
Si tienes datos de navegación, incluye los otros productos que el usuario vio pero no añadió al carrito (cross-sell) o los best sellers de la misma categoría.

---

## MÓDULO 4 — EMAIL 3: LA URGENCIA O EL INCENTIVO (72 HORAS DESPUÉS)

El tercer email es el que más convierte si está bien construido. Tiene dos variantes según tu estrategia de precios:

### Variante A — Con descuento

**Cuándo usarla**: cuando el margen lo permite y quieres maximizar recuperación.
**Riesgo**: puede reducir el margen y condicionar al usuario a esperar.

```
Subject: "Un regalo para ayudarte a decidir — 10% de descuento solo hoy"
Preheader: "Tu código expira en 24 horas"

Hola [Nombre],

Tu [nombre del producto] lleva [X horas] esperándote.
Queremos ayudarte a dar el último paso.

Usa este código al finalizar tu compra:
[DESCUENTO10]
10% de descuento — válido solo durante las próximas 24 horas

[IMAGEN DEL PRODUCTO]
Precio original: [X€]
Con tu descuento: [Y€]

[BOTÓN con countdown si tu plataforma lo soporta: "Aplicar descuento y finalizar"]

Este código es exclusivo para ti y expira el [fecha/hora].
```

### Variante B — Con urgencia de stock (sin descuento)

**Cuándo usarla**: cuando no quieres devaluar el producto o el stock es genuinamente limitado.

```
Subject: "Quedan solo [X] unidades de tu talla/color"
Preheader: "No podemos garantizar que sigan disponibles mañana"

Solo aviso si es verdad — la urgencia falsa destruye la confianza.

Hola [Nombre],

Solo queremos que sepas que el [nombre del producto] en [talla/color]
tiene stock limitado. Cuando se agota, tarda [X semanas] en reponerse.

[IMAGEN DEL PRODUCTO]
Stock disponible: [X] unidades
Precio: [X€]

[BOTÓN: "Asegurar mi unidad" → carrito]
```

---

## MÓDULO 5 — SEGMENTACIÓN DE LA SECUENCIA

No todos los abandonos son iguales. Segmenta la secuencia para personalizar:

### Por valor del carrito

| Valor del carrito | Estrategia |
|-------------------|-----------|
| < 30€ | Secuencia estándar de 3 emails con descuento pequeño en Email 3 |
| 30€ - 150€ | Secuencia estándar con prueba social reforzada |
| > 150€ | Añadir Email 3.5: llamada o chat proactivo del equipo de soporte |

### Por tipo de cliente

| Tipo de cliente | Estrategia |
|-----------------|-----------|
| Primera compra | Enfatizar garantía de devolución + reviews en Email 2 |
| Cliente recurrente | Email 1 más personalizado con historial |
| VIP (> X compras o > X€ gastados) | Email 3 con descuento VIP mayor y trato especial |

---

## MÓDULO 6 — CONFIGURACIÓN TÉCNICA

### Lo que necesitas en tu plataforma

**Enlace de recuperación pre-poblado**: el botón del email debe llevar directamente al carrito con los productos ya dentro, no a la homepage.

**Tracking de conversión**: necesitas saber qué email y qué version del subject generó la compra.

**UTM params en todos los enlaces:**
```
?utm_source=email&utm_medium=carrito_abandonado&utm_campaign=email_[1/2/3]
```

**Stop condition**: cuando el usuario compra, la secuencia se detiene inmediatamente. Nada más molesto que recibir el email de descuento después de haber comprado.

### Plataformas que tienen esto nativo

- **Klaviyo**: la mejor para ecommerce, integración directa con Shopify/WooCommerce
- **Mailchimp**: tiene abandoned cart nativo para tiendas conectadas
- **Shopify Email**: básico pero funcional para empezar
- **ActiveCampaign**: buena opción para secuencias más sofisticadas

---

## ENTREGABLE

Para mi tienda [describe: tipo de producto, ticket medio, plataforma de ecommerce, datos actuales de abandono si los tienes]:
1. Los 3 subjects de cada email con variantes A/B para testear
2. Cuerpo completo de los 3 emails adaptados a tu producto y audiencia
3. Configuración de timing y stop conditions
4. Estrategia de segmentación por valor de carrito y tipo de cliente
5. KPIs que debes trackear desde el día 1: open rate, click rate y conversión por email
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la secuencia de 3 emails de recuperación de carrito abandonado con copy, timing y segmentación para recuperar entre el 10-20% de los abandonos.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Full-text search en productos — Elasticsearch, Algolia y búsqueda en PostgreSQL para aplicaciones con mucho contenido indexable',
                'description'      => 'Guía técnica para implementar full-text search en aplicaciones con alto volumen de contenido: cuándo usar PostgreSQL full-text search, cuándo migrar a Elasticsearch o Algolia, cómo diseñar el esquema de índices, y cómo implementar relevancia, filtros y facets que el usuario realmente necesita.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un engineer senior con experiencia implementando sistemas de búsqueda a escala en aplicaciones de producto. Ayúdame a elegir la solución de full-text search correcta para mi aplicación y a implementarla de forma que ofrezca una experiencia de búsqueda relevante y rápida para mis usuarios.

---

## CUÁNDO NECESITAS FULL-TEXT SEARCH

La búsqueda con LIKE o ILIKE en SQL es suficiente cuando:
- Tienes < 10.000 documentos
- Solo buscas coincidencias exactas de prefijo
- No necesitas relevancia (ordenar por qué tan bien coincide)

Necesitas full-text search cuando:
- Quieres que "perro" encuentre documentos con "perros" o "perrera" (stemming)
- Quieres que "manzana iphone" encuentre documentos con "iPhone de Apple" (sinónimos)
- Quieres errores tipográficos tolerados ("elasticserach" → Elasticsearch)
- Quieres ordenar resultados por relevancia, no solo por fecha

---

## MÓDULO 1 — ÁRBOL DE DECISIÓN: ¿QUÉ SOLUCIÓN ELEGIR?

```
¿Cuántos documentos/registros tienes o proyectas?
├── < 1 millón
│   ├── ¿Necesitas fuzzy search (tolerancia a errores tipográficos)?
│   │   ├── No → PostgreSQL full-text search es suficiente
│   │   └── Sí → Algolia (SaaS, más rápido de implementar) o pg_trgm
│   └── ¿Necesitas facets/filtros complejos?
│       ├── No → PostgreSQL full-text search
│       └── Sí → Algolia o Elasticsearch
└── > 1 millón
    ├── ¿Tienes capacidad técnica para gestionar infraestructura?
    │   ├── No → Algolia (SaaS gestionado) o Elastic Cloud
    │   └── Sí → Elasticsearch self-hosted o Meilisearch
    └── ¿Necesitas búsqueda en tiempo real (< 100ms)?
        ├── Alta prioridad → Algolia o Meilisearch
        └── Normal → Elasticsearch o PostgreSQL con optimizaciones
```

---

## MÓDULO 2 — POSTGRESQL FULL-TEXT SEARCH

### Cuándo es la elección correcta

- Ya usas PostgreSQL y quieres evitar infraestructura adicional
- Volumen de documentos razonable (< 500k registros buscables)
- Puedes vivir sin fuzzy search o lo complementas con pg_trgm
- El equipo conoce SQL y no quiere aprender otra herramienta

### Implementación básica

```sql
-- Añadir columna de vector de búsqueda
ALTER TABLE productos ADD COLUMN search_vector tsvector;

-- Generar el vector con pesos por campo (A=mayor peso, D=menor)
UPDATE productos SET search_vector =
  setweight(to_tsvector('spanish', coalesce(nombre, '')), 'A') ||
  setweight(to_tsvector('spanish', coalesce(descripcion, '')), 'B') ||
  setweight(to_tsvector('spanish', coalesce(categoria, '')), 'C');

-- Índice GIN para búsqueda eficiente
CREATE INDEX idx_productos_search ON productos USING GIN(search_vector);

-- Trigger para mantener el vector actualizado
CREATE FUNCTION productos_search_vector_update() RETURNS trigger AS $$
BEGIN
  NEW.search_vector :=
    setweight(to_tsvector('spanish', coalesce(NEW.nombre, '')), 'A') ||
    setweight(to_tsvector('spanish', coalesce(NEW.descripcion, '')), 'B') ||
    setweight(to_tsvector('spanish', coalesce(NEW.categoria, '')), 'C');
  RETURN NEW;
END
$$ LANGUAGE plpgsql;

CREATE TRIGGER productos_search_trigger
  BEFORE INSERT OR UPDATE ON productos
  FOR EACH ROW EXECUTE FUNCTION productos_search_vector_update();
```

### Query de búsqueda con ranking

```sql
SELECT
  id,
  nombre,
  descripcion,
  ts_rank(search_vector, query) AS rank
FROM productos,
  plainto_tsquery('spanish', 'zapatos running') query
WHERE search_vector @@ query
ORDER BY rank DESC
LIMIT 20;
```

### Fuzzy search con pg_trgm (tolerancia a errores tipográficos)

```sql
-- Extensión para búsqueda por similitud
CREATE EXTENSION IF NOT EXISTS pg_trgm;

-- Índice GIN para trigrams
CREATE INDEX idx_productos_nombre_trgm ON productos
  USING GIN(nombre gin_trgm_ops);

-- Query con tolerancia a errores (umbral 0.3 = 30% similitud mínima)
SELECT id, nombre, similarity(nombre, 'adidass running') AS sim
FROM productos
WHERE nombre % 'adidass running'  -- % usa el umbral de pg_trgm.similarity_threshold
ORDER BY sim DESC
LIMIT 10;

-- Combinar full-text + fuzzy
SET pg_trgm.similarity_threshold = 0.3;
SELECT id, nombre, ts_rank(search_vector, query) AS fts_rank,
       similarity(nombre, $1) AS fuzzy_rank
FROM productos,
     plainto_tsquery('spanish', $1) query
WHERE search_vector @@ query OR nombre % $1
ORDER BY (ts_rank(search_vector, query) + similarity(nombre, $1)) DESC
LIMIT 20;
```

---

## MÓDULO 3 — ELASTICSEARCH

### Cuándo es la elección correcta

- Volumen alto (> 1 millón de documentos)
- Necesitas facets y filtros complejos (búsqueda con filtros de precio, categoría, valoración)
- Quieres control total sobre el scoring y la relevancia
- Tienes capacidad para gestionar la infraestructura o usas Elastic Cloud

### Arquitectura de índice para un catálogo de productos

```json
PUT /productos
{
  "mappings": {
    "properties": {
      "nombre": {
        "type": "text",
        "analyzer": "spanish",
        "fields": {
          "keyword": { "type": "keyword" }
        }
      },
      "descripcion": {
        "type": "text",
        "analyzer": "spanish"
      },
      "categoria": {
        "type": "keyword"
      },
      "precio": {
        "type": "float"
      },
      "valoracion": {
        "type": "float"
      },
      "stock": {
        "type": "integer"
      },
      "tags": {
        "type": "keyword"
      },
      "suggest": {
        "type": "completion"
      }
    }
  },
  "settings": {
    "analysis": {
      "analyzer": {
        "spanish": {
          "tokenizer": "standard",
          "filter": ["lowercase", "spanish_stop", "spanish_stemmer"]
        }
      },
      "filter": {
        "spanish_stop": {
          "type": "stop",
          "stopwords": "_spanish_"
        },
        "spanish_stemmer": {
          "type": "stemmer",
          "language": "spanish"
        }
      }
    }
  }
}
```

### Query de búsqueda con facets y filtros

```json
POST /productos/_search
{
  "query": {
    "bool": {
      "must": [
        {
          "multi_match": {
            "query": "zapatos running",
            "fields": ["nombre^3", "descripcion", "tags^2"],
            "fuzziness": "AUTO"
          }
        }
      ],
      "filter": [
        { "range": { "precio": { "gte": 50, "lte": 200 } } },
        { "term": { "categoria": "calzado" } }
      ]
    }
  },
  "aggs": {
    "por_categoria": {
      "terms": { "field": "categoria", "size": 10 }
    },
    "rango_precio": {
      "range": {
        "field": "precio",
        "ranges": [
          { "to": 50 },
          { "from": 50, "to": 100 },
          { "from": 100, "to": 200 },
          { "from": 200 }
        ]
      }
    },
    "valoracion_media": {
      "avg": { "field": "valoracion" }
    }
  },
  "size": 20,
  "from": 0
}
```

---

## MÓDULO 4 — ALGOLIA

### Cuándo es la elección correcta

- Quieres la mejor experiencia de búsqueda sin gestionar infraestructura
- Necesitas búsqueda instantánea (< 10ms de respuesta)
- El equipo de frontend quiere un SDK simple
- Tienes presupuesto para el SaaS (plan gratuito hasta 10k registros/mes)

### Implementación básica con Laravel/PHP

```php
// composer require algolia/algoliasearch-client-php

use Algolia\AlgoliaSearch\SearchClient;

$client = SearchClient::create(
    config('services.algolia.app_id'),
    config('services.algolia.secret')
);

$index = $client->initIndex('productos');

// Configuración del índice (hacerlo una vez)
$index->setSettings([
    'searchableAttributes' => [
        'unordered(nombre)',
        'descripcion',
        'tags'
    ],
    'attributesForFaceting' => ['categoria', 'precio', 'valoracion'],
    'ranking' => [
        'typo', 'geo', 'words', 'filters', 'proximity',
        'attribute', 'exact', 'custom'
    ],
    'customRanking' => ['desc(ventas)', 'desc(valoracion)'],
    'typoTolerance' => true,
    'ignorePlurals' => true,
    'queryLanguages' => ['es']
]);

// Indexar productos
$productos = Producto::all()->map(fn($p) => [
    'objectID' => $p->id,
    'nombre' => $p->nombre,
    'descripcion' => $p->descripcion,
    'categoria' => $p->categoria,
    'precio' => $p->precio,
    'valoracion' => $p->valoracion_media,
    'tags' => $p->tags,
    'ventas' => $p->total_ventas,
]);

$index->saveObjects($productos->toArray());

// Búsqueda con filtros
$resultados = $index->search('zapatos running', [
    'filters' => 'categoria:calzado AND precio >= 50 AND precio <= 200',
    'facets' => ['categoria', 'precio'],
    'hitsPerPage' => 20,
    'page' => 0
]);
```

### Integración con Laravel Scout

```php
// config/scout.php → 'driver' => 'algolia'
// composer require laravel/scout algolia/algoliasearch-client-php

// En el modelo
use Laravel\Scout\Searchable;

class Producto extends Model
{
    use Searchable;

    public function toSearchableArray(): array
    {
        return [
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'categoria' => $this->categoria,
            'precio' => $this->precio,
            'valoracion' => $this->valoracion_media,
            'tags' => $this->tags->pluck('nombre')->toArray(),
        ];
    }
}

// Búsqueda
$productos = Producto::search('zapatos running')
    ->where('precio', '>=', 50)
    ->paginate(20);
```

---

## MÓDULO 5 — DISEÑO DE LA EXPERIENCIA DE BÚSQUEDA

### Los componentes que importan al usuario

**Autocompletar / Sugerencias**:
- Muestra sugerencias desde las 2-3 primeras letras
- Incluye búsquedas populares de tu catálogo, no solo coincidencias de texto
- Corrige errores tipográficos en las sugerencias

**Resultados sin resultados (Zero Results Page)**:
No muestres "No se encontraron resultados". Muestra:
1. ¿Quisiste decir "[corrección]"?
2. Resultados de categorías relacionadas
3. Best sellers de la categoría más cercana al query

**Facets y filtros**:
Los mejores filtros son los que el usuario realmente usa. Analiza qué filtros aplican tus usuarios y elimina los que nadie usa.

**Ordenación**:
Por defecto, relevancia. Pero ofrece siempre: precio ascendente/descendente, más recientes, mejor valorados.

---

## ENTREGABLE

Para mi aplicación [describe: tipo de contenido/productos, volumen estimado, stack tecnológico actual, casos de uso de búsqueda más importantes]:
1. Recomendación de solución (PostgreSQL / Elasticsearch / Algolia / Meilisearch) con justificación
2. Esquema de índice / mapping adaptado a tus entidades
3. Implementación de la query de búsqueda principal con filtros y facets
4. Plan de migración si tienes búsqueda existente con LIKE/ILIKE
5. Las 3 métricas de calidad de búsqueda que deberías trackear (click-through rate, zero results rate, búsquedas sin click)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar full-text search en aplicaciones con alto volumen de contenido usando PostgreSQL, Elasticsearch o Algolia según el contexto técnico.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX del proceso de checkout — el flujo de pago que reduce el abandono y maximiza la conversión en ecommerce y SaaS',
                'description'      => 'Framework para optimizar el checkout de un ecommerce o un SaaS: los errores más comunes que causan abandono, el flujo de pago de menor fricción, cómo diseñar el formulario de pago, los trust signals que aumentan la conversión y cómo medir el impacto de cada cambio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en UX y CRO con experiencia auditando y optimizando procesos de checkout en ecommerce y SaaS que han resultado en mejoras de conversión del 15-40%. Ayúdame a auditar y rediseñar el checkout de mi producto para reducir el abandono y maximizar la tasa de finalización de pago.

---

## EL PROBLEMA DEL CHECKOUT: LOS NÚMEROS

El abandono en el checkout es alto porque llega cuando el usuario ya tiene intención de compra clara — y aun así se va. Causas más frecuentes según Baymard Institute:

| Causa de abandono | % de usuarios que lo mencionan |
|-------------------|-------------------------------|
| Costes inesperados en el checkout (envío, impuestos) | 48% |
| Obligado a crear una cuenta | 24% |
| El proceso era demasiado largo/complejo | 22% |
| No confiaba en la seguridad del sitio para pagar | 18% |
| No encontraba su método de pago preferido | 13% |
| El sitio daba errores o se colgaba | 12% |

Esto significa que la mayoría del abandono en checkout es evitable con diseño.

---

## MÓDULO 1 — LOS PRINCIPIOS DEL CHECKOUT DE BAJA FRICCIÓN

### Principio 1: Checkout como invitado por defecto

El registro obligatorio es el segundo mayor motivo de abandono. Solución:

```
FLUJO CORRECTO:
Paso 1: Email (solo email, sin contraseña)
→ El sistema verifica si ya tiene cuenta
→ Si sí: "Detectamos que ya tienes una cuenta. ¿Quieres acceder?" (opcional)
→ Si no: continúa como invitado
Paso final: "Guarda tus datos para futuras compras" (invitación post-compra)

FLUJO INCORRECTO:
"Debes crear una cuenta para continuar"
```

### Principio 2: Muestra el coste total desde el principio

El mayor motivo de abandono son los costes inesperados. Muestra envío, impuestos y total desde el carrito, no al final del checkout.

### Principio 3: Progreso visible en todo momento

El usuario necesita saber cuánto le falta. Una barra de progreso o los pasos visibles reduce la ansiedad del proceso.

### Principio 4: Cada campo que añades reduce la conversión

Cada campo adicional en un formulario reduce la conversión. Pregunta solo lo que es estrictamente necesario. Para ecommerce básico: nombre, email, dirección de envío y pago.

---

## MÓDULO 2 — ARQUITECTURA DEL FLUJO DE CHECKOUT

### El flujo de 3 pasos (estándar para ecommerce físico)

```
PASO 1: INFORMACIÓN DE CONTACTO Y ENVÍO
├── Email
├── Nombre completo
├── Dirección de envío
├── Teléfono (opcional si no lo necesitas para la entrega)
└── Método de envío (con precios y plazos visibles)

PASO 2: PAGO
├── Opciones de pago: tarjeta / PayPal / Bizum / Apple Pay / Google Pay
├── Si tarjeta: número, fecha de expiración, CVV
├── Checkbox "misma dirección de facturación" (default: checked)
└── Si es diferente: mostrar campos de facturación

PASO 3: RESUMEN Y CONFIRMACIÓN
├── Resumen del pedido (productos, cantidades, imágenes)
├── Dirección de envío
├── Método de pago (últimos 4 dígitos, no datos completos)
├── Coste total desglosado (productos + envío + impuestos)
└── BOTÓN: "Confirmar pedido de [X€]" (precio en el botón)
```

### El flujo de 1 paso (mejor para SaaS / compras simples)

Para SaaS o cuando el producto es simple (un solo SKU, precio fijo), el checkout de 1 sola página con todos los campos reduce la fricción y mejora la conversión.

```
PÁGINA ÚNICA:
┌─────────────────────────────────────────────────────┐
│  RESUMEN DEL PEDIDO (sidebar o parte superior)      │
│  [producto] × 1 = 99€                               │
│  Prueba de 14 días incluida                         │
├─────────────────────────────────────────────────────┤
│  INFORMACIÓN DE CONTACTO                            │
│  Email ___________                                  │
├─────────────────────────────────────────────────────┤
│  PAGO                                               │
│  [Apple Pay] [Google Pay] [PayPal]                  │
│  ──── o paga con tarjeta ────                       │
│  Número de tarjeta ___________                      │
│  Fecha expiry ___ CVV ___                           │
├─────────────────────────────────────────────────────┤
│  [BOTÓN: Empezar mi prueba gratuita]                │
│  No se cobra nada hoy. Cancela cuando quieras.      │
└─────────────────────────────────────────────────────┘
```

---

## MÓDULO 3 — DISEÑO DEL FORMULARIO DE PAGO

### Los campos que más importan en la tarjeta

**Número de tarjeta**:
- Formato con espacios cada 4 dígitos mientras el usuario escribe
- Detectar el tipo de tarjeta automáticamente y mostrar el logo (Visa/MC/Amex)
- El campo debe ser un solo input, no dividirlo en 4 campos de 4 dígitos

**Fecha de expiración**:
- Formato MM/AA, no mes y año separados
- Auto-formatear el "/" al escribir el mes

**CVV**:
- Mostrar un tooltip con imagen explicando dónde está el CVV
- Cambiar la imagen del CVV si detectas Amex (4 dígitos en el frente, no en el reverso)

### Los errores de formulario que más frustran

```
ERROR INCORRECTO:
"Error: datos inválidos"

ERROR CORRECTO:
"El número de tarjeta no es válido. Revisa que hayas introducido los 16 dígitos correctamente."

PRINCIPIOS:
- Validación en línea (mientras el usuario escribe) para errores de formato
- Validación al salir del campo (blur) para errores de contenido
- El error siempre está debajo del campo afectado, nunca solo al principio
- El color del error no es solo rojo — incluye un ícono y texto
- Si hay múltiples errores, indica cuántos hay y cuáles son
```

---

## MÓDULO 4 — TRUST SIGNALS QUE AUMENTAN LA CONVERSIÓN

Los usuarios en el momento del pago necesitan señales de que pueden confiar en ti.

### Trust signals por prioridad de impacto

| Trust signal | Impacto | Dónde ponerlo |
|-------------|---------|----------------|
| Selector de pago conocido (PayPal, Apple Pay) | Alto | Primero en las opciones de pago |
| Candado HTTPS visible + "Pago seguro" | Alto | Cerca del botón de pago |
| Logos de tarjetas aceptadas | Medio | Debajo del campo de número de tarjeta |
| Garantía de devolución (si la tienes) | Alto | Cerca del botón de pago |
| Política de privacidad de datos de pago | Medio | Debajo del botón, en pequeño pero legible |
| Reviews / número de clientes | Medio | En el sidebar del resumen |

### Los textos que más tranquilizan al usuario

Justo antes del botón de pago final:

```
Para ecommerce:
"Pago seguro con cifrado SSL. Tus datos de tarjeta nunca se almacenan en nuestros servidores."

Para SaaS con trial:
"No se realizará ningún cargo hoy. El plan se activa el [fecha], cuando termine tu prueba gratuita.
Cancela en cualquier momento sin coste."

Para compras de alto valor:
"Garantía de devolución de 30 días. Si no estás satisfecho, te devolvemos el importe íntegro."
```

---

## MÓDULO 5 — CHECKOUT MÓVIL

El 60-70% del tráfico de ecommerce es móvil. El checkout en móvil tiene requisitos adicionales:

**Teclado numérico para campos de número**:
```html
<input type="text" inputmode="numeric" pattern="[0-9\s]*"
       autocomplete="cc-number" name="cardnumber">
```

**Autocomplete de tarjeta del navegador**:
Usa los atributos `autocomplete` correctos para que el navegador pueda rellenar automáticamente:
- `autocomplete="cc-number"` — número de tarjeta
- `autocomplete="cc-exp"` — fecha de expiración
- `autocomplete="cc-csc"` — CVV
- `autocomplete="email"`, `autocomplete="name"`, etc.

**Apple Pay / Google Pay como primera opción en móvil**:
En móvil, el usuario ya tiene su tarjeta guardada en el dispositivo. Priorizar estos métodos reduce la fricción a un solo clic.

**Botón de pago siempre visible**:
En mobile, el botón final debe hacer sticky cuando el usuario llega al final del formulario, o estar siempre visible sin scroll.

---

## MÓDULO 6 — MÉTRICAS Y TESTING

### Funnel de checkout a monitorizar

```
Tasa de inicio de checkout = usuarios que llegan al checkout / usuarios que ven el carrito
Tasa de completado paso 1 = usuarios que completan el paso 1 / usuarios que inician checkout
Tasa de completado paso 2 = usuarios que completan el paso 2 / usuarios que completaron paso 1
Tasa de conversión final = compras completadas / usuarios que iniciaron checkout
```

Cualquier paso con > 30% de caída merece investigación y optimización prioritaria.

### Tests A/B prioritarios para checkout

1. Checkout en 1 paso vs 3 pasos (para tu tipo de producto)
2. Apple Pay / Google Pay como primera opción vs tarjeta primero
3. Checkout como invitado vs registro obligatorio
4. Con campo de cupón visible vs oculto (los cupones visibles aumentan el abandono porque el usuario va a buscar uno)
5. Garantía de devolución visible vs sin mencionar

---

## ENTREGABLE

Para mi checkout actual [describe: tipo de producto (física/digital/SaaS), plataforma (Shopify/WooCommerce/custom), métricas actuales de conversión si las tienes]:
1. Audit del flujo actual: los 5 puntos de mayor fricción con impacto estimado
2. Propuesta de arquitectura de checkout (1 paso vs 3 pasos) con justificación
3. Wireframe de baja fidelidad del checkout optimizado
4. Lista de trust signals prioritarios para añadir esta semana
5. Plan de A/B testing de 60 días con los 3 tests más importantes ordenados por impacto esperado
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Auditar y rediseñar el flujo de checkout de un ecommerce o SaaS para reducir el abandono y maximizar la tasa de conversión en el proceso de pago.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Coordinación de canales de venta — cómo alinear el equipo de ventas online y offline sin que se pisen ni generen conflicto de canal',
                'description'      => 'Framework para empresas con múltiples canales de venta (directo online, fuerza de ventas, distribuidores, retail): cómo definir territorios y cuentas para evitar solapamiento, qué hacer cuando un cliente llega por dos canales a la vez, y cómo estructurar los incentivos para que todos los canales colaboren en lugar de competir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial con experiencia gestionando modelos de ventas multicanal en empresas B2B y B2C. Ayúdame a diseñar una estructura de coordinación entre mis canales de venta para que colaboren en lugar de competir, con reglas claras de atribución, territorios y comisiones.

---

## EL PROBLEMA DEL CONFLICTO DE CANAL

El conflicto de canal ocurre cuando dos o más canales compiten por el mismo cliente o deal. Es uno de los problemas más costosos de las organizaciones comerciales porque:
- Destruye relaciones con distribuidores o socios
- Desmotiva al equipo comercial cuando pierde una comisión por "culpa" de otro canal
- Confunde al cliente que recibe el mismo producto por diferentes precios o condiciones
- Consume tiempo de gestión que debería ir a captar nuevos clientes

---

## MÓDULO 1 — MAPEO DE TUS CANALES DE VENTA

### Template de mapa de canales

Para cada canal que tienes, documenta:

```
CANAL: [nombre — ej. Fuerza de ventas directa / Canal online / Distribuidores / Retail]

Tipo de cliente que atiende:
- Segmento: [grande empresa / PYME / consumidor / etc.]
- Geografía: [nacional / regional / ciudad]
- Ticket medio: [X€]
- Ciclo de venta medio: [días]

Propuesta de valor del canal para el cliente:
- ¿Por qué el cliente preferiría comprar por este canal?
- ¿Qué servicios o valor diferencial ofrece este canal?

Propuesta de valor del canal para la empresa:
- ¿Qué coste de adquisición tiene este canal?
- ¿Qué margen genera?
- ¿Qué volumen mueve?

Potencial de conflicto con otros canales:
- ¿Con qué otros canales se puede solapar?
- ¿En qué situaciones concretas podría haber conflicto?
```

---

## MÓDULO 2 — SISTEMAS DE SEPARACIÓN DE CANALES

La forma más efectiva de evitar el conflicto de canal es la separación clara: cada canal tiene su dominio definido y no puede entrar en el del otro.

### Separación por tamaño de empresa (Account Segmentation)

La más común en B2B:

| Canal | Tamaño de empresa | Criterio de corte |
|-------|-------------------|-------------------|
| Fuerza de ventas enterprise | > 500 empleados | Número de empleados en LinkedIn/BBDD |
| Fuerza de ventas mid-market | 50-500 empleados | Ídem |
| Inside sales / SDRs | 10-50 empleados | Ídem |
| Self-service online | < 10 empleados / autónomos | Ídem |

**Regla de oro**: el criterio de corte debe ser objetivo y verificable (número de empleados, facturación, número de tiendas) — nunca subjetivo.

### Separación geográfica

En modelos con distribuidores regionales o fuerza de ventas por zona:

```
MAPA DE TERRITORIOS:
- Define polígonos de territorio claros (provincia, código postal, región)
- Un mismo territorio no puede ser atendido por dos canales con overlapping
- Los clientes "sin territorio" (nacionales, sin HQ claro) van a un canal central

GESTIÓN DE CUENTAS NACIONALES:
- Las empresas con sedes en múltiples territorios son "cuentas nacionales"
- Las cuentas nacionales siempre van al canal central / KAM
- Los distribuidores locales pueden tener una comisión de agente si han generado el contacto
```

### Separación por sector vertical

Cuando los canales tienen especialización sectorial:

```
Canal A (especializado en salud): atiende hospitales, clínicas, farmacias
Canal B (especializado en industria): atiende manufactura, logística, construcción
Canal online: atiende solicitudes de sectores no cubiertos por los canales especializados
```

---

## MÓDULO 3 — REGLAS DE ATRIBUCIÓN CUANDO HAY SOLAPAMIENTO

Aunque tengas la separación bien definida, habrá casos de solapamiento. Necesitas reglas explícitas:

### El caso más común: el cliente llega por dos canales a la vez

Ejemplo: un cliente enterprise visita la web y solicita una demo (canal online), pero también tiene una relación activa con un account executive de la fuerza de ventas.

**Regla del primer contacto cualificado**:
El canal que primero estableció contacto cualificado (reunión, llamada, demo) con la oportunidad específica tiene la atribución. Si hay duda, gana el canal con relación más establecida (mayor historial de cuenta).

**Cómo registrarlo en el CRM**:
```
Todos los contactos con un cliente, independientemente del canal, deben registrarse
en el CRM en la misma cuenta.

Cuando hay una oportunidad solapada:
1. El canal que la detecta abre la oportunidad en el CRM
2. Si ya existe una oportunidad abierta por otro canal, escalar a manager en 24h
3. El manager decide la atribución en base a las reglas documentadas
4. La decisión se registra en el CRM con fecha y justificación
```

### Atribución compartida (split attribution)

En algunos modelos tiene sentido que dos canales compartan la comisión:

```
Ejemplo: El distribuidor A generó el lead. La fuerza de ventas central
cerró el deal porque el distribuidor no tenía acceso al nivel C del cliente.

Regla: El distribuidor recibe el 30% de la comisión (generación del lead).
La fuerza de ventas recibe el 70% (cierre).
```

La atribución compartida funciona bien cuando la colaboración entre canales es genuina y frecuente. No la uses para evitar conflictos — úsala para incentivar la colaboración.

---

## MÓDULO 4 — ESTRUCTURA DE INCENTIVOS PARA FOMENTAR LA COLABORACIÓN

El conflicto de canal persiste cuando los incentivos económicos llevan a que los canales compitan. La solución es diseñar incentivos que premien la colaboración.

### El error más común en los incentivos de canal

Los comerciales de la fuerza de ventas directa tienen incentivo para capturar directamente un deal que debería ir al distribuidor (más comisión para ellos). Si no hay consecuencia por esto, siempre lo harán.

### Incentivos que promueven la colaboración

**Para la fuerza de ventas directa**:
- Comisión de "channel development" por oportunidades que derivan al canal correcto (aunque ellos no cierren)
- KPI de satisfacción del canal (net promoter score de distribuidores) en el variable del KAM de canal

**Para distribuidores**:
- Acceso a deal registration (el distribuidor registra el deal en el portal del vendor antes de que se lo capture alguien)
- Protección de márgenes garantizada si el vendor vende directamente en su territorio (compensación por bypass)

**Ejemplo de estructura de comisión colaborativa**:

```
Escenario: Deal de 100.000€

Opción A — La fuerza de ventas cierra directamente (sin canal):
- Comisión comercial: 8% = 8.000€
- Sin incentivo adicional

Opción B — La fuerza de ventas co-vende con el distribuidor:
- Comisión del distribuidor: 15% = 15.000€ (mejor margen para el distribuidor)
- Bonus de co-venta al comercial: 3% = 3.000€ adicionales
- La empresa vende con más frecuencia a través del canal (menor coste de venta)
```

---

## MÓDULO 5 — PRICING Y CONDICIONES POR CANAL

El conflicto de precios entre canales es el más visible para el cliente y el más dañino para la marca.

### Política de precio mínimo (MSRP / MAP)

Define un precio mínimo que ningún canal puede bajar:

```
POLÍTICA DE PRECIO MÍNIMO ANUNCIADO (MAP):

El precio público de [producto] no puede ser inferior a [X€] en ningún canal.
Incluye:
- Tienda online propia
- Amazon / Marketplaces
- Distribuidores y retail
- Fuerza de ventas (excepto descuentos negociados con aprobación del manager)

Consecuencias del incumplimiento:
- Primera vez: aviso formal
- Segunda vez: suspensión temporal del acuerdo
- Tercera vez: terminación del acuerdo de distribución
```

### Diferenciación de valor por canal (no de precio)

En lugar de tener precios diferentes, ofrece valor diferente por canal:

- **Fuerza de ventas**: mismo precio + implementación incluida + SLA de soporte premium
- **Online self-service**: mismo precio + acceso inmediato + self-service
- **Distribuidor**: mismo precio + soporte local del distribuidor + facturación local

---

## ENTREGABLE

Para mi estructura comercial actual [describe: canales existentes, tipo de producto, mercados, los conflictos concretos que ya has experimentado]:
1. Mapa de canales con criterios de separación por segmento/geografía/vertical
2. Reglas de atribución documentadas para los 3 casos de solapamiento más frecuentes en tu negocio
3. Propuesta de estructura de incentivos que promueve la colaboración
4. Política de precio mínimo y diferenciación de valor por canal
5. Proceso de resolución de conflictos de canal con plazos y roles definidos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar una estructura de coordinación entre canales de venta (online, fuerza de ventas, distribuidores) para eliminar el conflicto de canal con reglas de atribución e incentivos alineados.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Deuda de UX — cómo identificar, documentar y priorizar los problemas de usabilidad acumulados que frenan la conversión',
                'description'      => 'Framework para product managers que heredan o acumulan deuda de UX: cómo hacer un audit sistemático de los problemas de usabilidad existentes, cómo documentarlos y cuantificar su impacto en la conversión y retención, y cómo priorizarlos en el backlog frente a nuevas features.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia gestionando la deuda de UX en productos maduros que han crecido rápido. Ayúdame a construir un proceso para identificar, documentar, priorizar y resolver la deuda de UX acumulada en mi producto sin paralizar el desarrollo de nuevas features.

---

## QUÉ ES LA DEUDA DE UX Y POR QUÉ IMPORTA

La deuda de UX es el conjunto de problemas de usabilidad que se han acumulado en el producto porque:
- En su momento se priorizó la velocidad de desarrollo sobre la calidad de la experiencia
- El producto creció en features sin rediseñar los flujos originales
- Se tomaron decisiones de diseño que funcionaban con 1.000 usuarios pero no escalan a 100.000
- Los problemas se conocen pero siempre hay algo más urgente que resolverlos

El impacto no es solo estético — es financiero:
- Cada punto de fricción en el flujo de activación reduce el activation rate
- Cada flujo confuso aumenta el volumen de tickets de soporte
- Cada feature difícil de usar es una feature por la que pagas pero que el usuario ignora

---

## MÓDULO 1 — AUDIT SISTEMÁTICO DE DEUDA DE UX

### Las 5 fuentes de información sobre deuda de UX

**Fuente 1: Análisis cuantitativo del funnel**

Identifica los pasos donde los usuarios se pierden o abandonan:
```
Herramientas: Mixpanel, Amplitude, FullStory, Hotjar

Preguntas a responder:
- ¿En qué paso del onboarding se van más usuarios?
- ¿Qué features se activan pero luego se abandonan en < 3 sesiones?
- ¿Qué páginas tienen alta tasa de rebote inesperada?
- ¿En qué parte del flujo principal hay más tiempo muerto (tiempo entre clicks)?
```

**Fuente 2: Tickets de soporte categorizados**

Los tickets de soporte son una mina de deuda de UX. Categoriza los tickets de los últimos 3-6 meses:
```
Categoría de ticket | Volumen | % del total | Causa raíz probable
[X feature] no funciona | [N] | [X%] | Bug o UX confusa
No sé cómo hacer [Y] | [N] | [X%] | Falta de discoverability
[Z proceso] no me funciona | [N] | [X%] | Flujo con fricción
```

**Fuente 3: Grabaciones de sesión y mapas de calor**

- Grabaciones (FullStory, Hotjar): busca clics de rabia (clicks repetidos en el mismo sitio sin respuesta), scrolls erráticos, formularios que se abandonan a medias
- Mapas de calor: ¿los usuarios hacen click en elementos no clickables? ¿Ignoran el CTA principal?

**Fuente 4: Entrevistas con usuarios activos**

5-10 entrevistas focalizadas en el flujo con más fricción. No preguntes "¿qué cambiarías?". Pide al usuario que realice una tarea y observa dónde duda o falla.

**Fuente 5: Feedback del equipo de CS y ventas**

El equipo de soporte y los AEs escuchan quejas de UX constantemente. Una sesión mensual de 30 minutos con ellos puede revelar los problemas más frecuentes.

---

## MÓDULO 2 — DOCUMENTACIÓN DE LA DEUDA DE UX

### El registro de deuda de UX

Crea un documento compartido (Notion, Confluence, spreadsheet) con esta estructura por cada issue:

```
REGISTRO DE DEUDA DE UX — [nombre del issue]

ID: UX-[número]
Fecha de identificación: [fecha]
Identificado por: [persona]
Estado: [nuevo / en revisión / priorizado / en desarrollo / resuelto]

DESCRIPCIÓN DEL PROBLEMA
¿Qué flujo o elemento tiene el problema?
[descripción en 2-3 frases, desde la perspectiva del usuario]

EVIDENCIA
- Cuantitativa: [métrica + dato — ej. "22% de los usuarios abandona este paso"]
- Cualitativa: [grabación / quote de usuario / ticket de soporte]
- Frecuencia: [cuántos usuarios / % del total afectado]

IMPACTO ESTIMADO
- Métrica afectada: [activation rate / conversion rate / churn / soporte]
- Impacto si se resuelve: [estimación — ej. "+2pp en activation rate"]
- Impacto económico estimado: [si lo puedes calcular]

SEVERIDAD
□ Crítica: bloquea al usuario para completar la tarea principal
□ Alta: el usuario puede completar la tarea con dificultad
□ Media: fricción pero el usuario lo resuelve
□ Baja: estético o menor

PROPUESTA DE SOLUCIÓN INICIAL
[No necesita ser definitiva — es el punto de partida para el diseñador]

COSTE ESTIMADO DE RESOLUCIÓN
[Small / Medium / Large / XL — según complejidad de implementación]
```

---

## MÓDULO 3 — PRIORIZACIÓN DE LA DEUDA DE UX

### El modelo de priorización RICE adaptado a deuda de UX

```
RICE Score = (Reach × Impact × Confidence) / Effort

Reach (Alcance): ¿cuántos usuarios activos son afectados por este problema?
- < 10% de usuarios: 1
- 10-30% de usuarios: 2
- 30-60% de usuarios: 3
- > 60% de usuarios: 4

Impact (Impacto): ¿cuánto mejorará la métrica clave si se resuelve?
- Mínimo: 0.25
- Bajo: 0.5
- Medio: 1
- Alto: 2
- Muy alto: 3

Confidence (Confianza en la estimación): ¿cuánta evidencia tenemos?
- Solo suposición: 50%
- Evidencia cualitativa: 70%
- Evidencia cuantitativa + cualitativa: 100%

Effort (Esfuerzo): días de engineering + design combinados
- 1 día: 1
- 1 semana: 5
- 2 semanas: 10
- 1 mes: 20
```

### Cuándo priorizar deuda de UX vs nuevas features

Esta es la tensión central del PM que gestiona deuda de UX:

```
PRIORIZA DEUDA DE UX CUANDO:
✓ La issue bloquea un flujo crítico (onboarding, activación, pago)
✓ El volumen de tickets de soporte relacionados > X por semana (define tu umbral)
✓ La evidencia muestra caída medible en métricas clave
✓ Es la causa de churn en usuarios recientes (< 90 días)
✓ Los nuevos features que construyes se sientan sobre el mismo flujo con problema

PRIORIZA NUEVAS FEATURES CUANDO:
✓ La deuda de UX tiene bajo impacto en métricas críticas
✓ Hay una oportunidad de mercado con ventana de tiempo limitada
✓ Un cliente enterprise la requiere para la renovación / firma
✓ La deuda de UX puede mitigarse con documentación o soporte mientras se resuelve
```

### La regla del 20%

Muchos equipos de producto efectivos reservan el 20% de la capacidad de cada sprint para deuda de UX y deuda técnica combinadas. Esto evita que se acumule indefinidamente sin detener el progreso de nuevas features.

---

## MÓDULO 4 — CÓMO CONVENCER AL EQUIPO DE RESOLVER DEUDA DE UX

El principal obstáculo es la falta de visibilidad del impacto. Nadie ve el ROI de arreglar algo "que ya funciona".

### El argumento del coste de no hacer nada

Calcula el coste mensual de NO resolver un issue de UX:

```
Issue: El paso 4 del onboarding confunde al 35% de los usuarios que llegan ahí.
De esos, el 20% abandona en ese paso.

Cálculo:
- Usuarios que llegan al paso 4 al mes: 1.000
- Abandono causado por el issue: 1.000 × 35% × 20% = 70 usuarios/mes
- MRR perdido: 70 × ticket medio (50€) = 3.500€/mes de MRR que no se activa
- Anualizado: 42.000€ de ARR potencial

Coste de resolución estimado: 2 semanas de design + 1 semana de engineering
Payback: 1-2 meses
```

### La presentación al equipo de dirección

```
STRUCTURE PARA PRESENTAR DEUDA DE UX:

1. El problema: [flujo específico] tiene [evidencia de fricción]
2. El impacto: [métrica] está en [X] cuando el benchmark del sector es [Y]
3. El coste de no hacer nada: [€/mes de MRR perdido o tickets adicionales de soporte]
4. La solución propuesta: [descripción de alto nivel del cambio]
5. El coste de la solución: [semanas de design + engineering]
6. El ROI estimado: [mejora de métrica] → [impacto económico]
```

---

## MÓDULO 5 — SEGUIMIENTO Y PREVENCIÓN

### Cómo evitar que la deuda de UX se acumule de nuevo

**Checklist de UX en el Definition of Done**:
```
Todo issue que añade o modifica un flujo de usuario debe:
□ Haber sido revisado por design antes de desarrollo
□ Haber pasado un test de usabilidad básico (3-5 usuarios internos)
□ No introducir inconsistencias con el design system
□ Tener definidos los estados de error con copy claro
□ Haberse testeado en los dispositivos y navegadores principales
```

**UX debt review mensual**:
Dedica 1 hora al mes a revisar el registro de deuda de UX, actualizar las métricas, y validar que las prioridades siguen siendo correctas.

---

## ENTREGABLE

Para mi producto [describe: tipo de producto, fase, los flujos con más fricción conocida]:
1. Plan de audit de deuda de UX en 2 semanas: qué métricas revisar, qué fuentes de datos consultar
2. Las 5 categorías de deuda de UX que más frecuentemente aparecen en productos de tu tipo
3. Template de registro de deuda de UX adaptado a tu contexto
4. RICE scores de los 3 issues de UX que ya conoces
5. Propuesta de reserva de capacidad de sprint para deuda de UX y argumento para el equipo de ingeniería
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Identificar, documentar y priorizar la deuda de UX acumulada en un producto con evidencia de impacto en métricas y framework para resolverla sin detener el desarrollo.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'People analytics — cómo usar los datos del equipo para tomar mejores decisiones de gestión de personas',
                'description'      => 'Introducción a people analytics para equipos de RRHH: qué datos recopilar sobre el equipo, cómo construir un dashboard básico de métricas de personas, cómo usar los datos para predecir rotación, identificar problemas de clima antes de que escalen y tomar decisiones de contratación y desarrollo más informadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en people analytics con experiencia implementando sistemas de medición de RRHH en empresas de 50 a 500 personas. Ayúdame a construir un sistema básico de people analytics que transforme los datos de RRHH en decisiones mejores sobre gestión del equipo.

---

## POR QUÉ PEOPLE ANALYTICS CAMBIA LA GESTIÓN DE PERSONAS

La mayoría de las decisiones de RRHH se toman con intuición o con datos anecdóticos ("parece que el equipo de ingeniería tiene más rotación que el de ventas"). People analytics reemplaza la intuición con evidencia.

Las empresas que implementan people analytics con rigor reportan:
- 25-40% menos rotación no deseada porque detectan señales antes
- Ciclos de contratación más cortos al entender qué predictores de éxito funcionan
- Mejor gestión del desempeño porque los datos revelan patrones que los managers no ven

---

## MÓDULO 1 — LOS DATOS QUE NECESITAS RECOPILAR

### Datos básicos (deberías tener esto ya en tu HRIS)

| Tipo de dato | Ejemplos | Fuente |
|-------------|---------|--------|
| **Datos demográficos** | Edad, género, antigüedad, departamento, nivel, ubicación | HRIS (BambooHR, Factorial, Personio) |
| **Datos de compensación** | Salario, variable, equity, última revisión | HRIS + Payroll |
| **Datos de contratación** | Canal de origen, tiempo de contratación, oferta aceptada/rechazada | ATS (Greenhouse, Lever, Workable) |
| **Datos de desarrollo** | Formaciones completadas, performance reviews, promociones | HRIS + LMS |
| **Datos de rotación** | Bajas (voluntarias/involuntarias), fecha, destino si se conoce | HRIS |

### Datos de engagement (necesitas recopilarlos activamente)

| Tipo | Herramienta | Frecuencia |
|------|------------|-----------|
| **Encuesta de clima** | Typeform, SurveyMonkey, Culture Amp, Lattice | Trimestral o semestral |
| **eNPS (Employee Net Promoter Score)** | Pregunta única en el sistema | Mensual |
| **Pulse surveys** | Preguntas cortas (3-5) | Quincenal o mensual |
| **Feedback 360** | Lattice, Leapsome, Cultura de feedback interno | Anual |

### El eNPS — la métrica más simple de engagement

```
Pregunta: "Del 1 al 10, ¿cuánto recomendarías trabajar en [empresa] a
           un amigo o conocido?"

Promotores: 9-10 → % de promotores
Neutros: 7-8 → ignorados en el cálculo
Detractores: 1-6 → % de detractores

eNPS = % Promotores - % Detractores

Interpretación:
> 50: Excelente
20-50: Bueno
0-20: Mejorable
< 0: Problema de cultura que requiere atención urgente
```

---

## MÓDULO 2 — EL DASHBOARD BÁSICO DE PEOPLE ANALYTICS

### Las 10 métricas que debe tener tu dashboard

| Métrica | Fórmula | Frecuencia de actualización | Benchmark |
|---------|---------|----------------------------|-----------|
| **Headcount activo** | Total de empleados activos | Mensual | — |
| **Rotación voluntaria** | Bajas voluntarias / headcount medio × 100 | Mensual | 10-15% anual en tech |
| **Rotación involuntaria** | Bajas involuntarias / headcount medio × 100 | Mensual | < 5% anual |
| **Tenure medio** | Promedio de antigüedad del equipo | Mensual | Depende del sector |
| **Tiempo de contratación** | Días desde apertura hasta oferta aceptada | Por proceso | < 30-45 días tech |
| **Tasa de oferta aceptada** | Ofertas aceptadas / ofertas enviadas × 100 | Por mes | > 80% |
| **Coste por contratación** | Coste total de RRHH + sourcing / contrataciones | Mensual | Varía por nivel |
| **eNPS** | % promotores - % detractores | Mensual | > 20 |
| **Tasa de participación en encuestas** | Participantes / invitados × 100 | Por encuesta | > 70% |
| **Porcentaje de objetivos completados** | Empleados con OKRs/goals completados / total | Trimestral | > 70% |

### Cómo construir el dashboard (sin herramienta de people analytics)

Si no tienes presupuesto para Culture Amp o Lattice, puedes construirlo con:

```
Opción A — Google Sheets / Excel:
- Una pestaña por tipo de dato
- Dashboard resumen en la primera pestaña con gráficos
- Actualización manual mensual

Opción B — HRIS con reporting básico (BambooHR, Factorial, Personio):
- Casi todos los HRIS tienen reportes predefinidos para las métricas básicas
- Exportar a CSV mensualmente para historificar

Opción C — Herramienta de BI (Power BI, Tableau, Looker Studio gratis):
- Conectar directamente con el HRIS via API o CSV
- Dashboard automatizado y siempre actualizado
```

---

## MÓDULO 3 — ANÁLISIS DE ROTACIÓN Y PREDICCIÓN DE ABANDONO

### Análisis de rotación retrospectivo

El primer análisis que hace la diferencia: ¿quiénes se van y por qué?

```
SEGMENTACIÓN DE LA ROTACIÓN:

Por departamento:
¿Qué departamento tiene más rotación? ¿Es consistente o hay un pico reciente?

Por antigüedad:
¿El abandono es más frecuente en el primer año? ¿En el año 3-4?
(El abandono en año 1 = problema de onboarding/expectativas)
(El abandono en año 3-4 = problema de desarrollo/compensación)

Por desempeño:
¿Estamos perdiendo a los de alto desempeño o a los de bajo desempeño?
(Perder high performers = problema crítico. Perder low performers puede ser sano.)

Por canal de origen:
¿Los que llegaron por referidos se quedan más? ¿Y los de LinkedIn?
(Esto informa dónde invertir en sourcing)
```

### Indicadores tempranos de riesgo de abandono

Aunque no tengas un modelo predictivo sofisticado, estos indicadores son señales de riesgo:

| Indicador | Por qué es una señal | Acción |
|-----------|---------------------|--------|
| Descenso en el eNPS individual > 2 puntos | El empleado ha perdido satisfacción | Reunión 1:1 proactiva del manager |
| Tiempo desde la última promotion > 24-30 meses | Puede sentirse estancado | Conversación de carrera |
| Solicitud de más de 2 días de vacaciones sin comunicar destino | A veces señal de entrevistas | Reunión de calibración |
| Reducción de commits/PRs/participación en meetings (si tienes datos) | Desconexión activa | Manager 1:1 |
| Ausencia de conversación de carrera en los últimos 6 meses | Falta de visión de futuro | Manager acción |

---

## MÓDULO 4 — ANÁLISIS DE COMPENSACIÓN Y EQUIDAD

### Audit de equidad salarial

Una vez al año (mínimo), analiza si hay brechas salariales injustificadas:

```sql
-- En tu HRIS o en Excel
Agrupa por: departamento + nivel + género (si tienes el dato)

Para cada grupo calcula:
- Salario medio
- Mediana salarial
- P25 y P75

Identifica empleados que están > 15% por debajo de la mediana de su grupo
sin justificación de desempeño documentada
```

### Benchmarking externo de compensación

Una vez al año, compara tus rangos salariales con el mercado:
- **Fuentes gratuitas**: Glassdoor, LinkedIn Salary, Jobted, InfoJobs (para España)
- **Fuentes de pago**: Mercer, Radford, Korn Ferry
- **Comunidades de RRHH**: encuestas de compensación de asociaciones sectoriales

---

## MÓDULO 5 — PRIVACY Y ÉTICA EN PEOPLE ANALYTICS

People analytics maneja datos sensibles. Las reglas son:

### Obligaciones legales en España/UE

- Los datos de empleados son datos personales bajo el RGPD
- Necesitas base legal para el tratamiento (contrato laboral, cumplimiento de obligaciones legales, interés legítimo)
- Los empleados tienen derecho de acceso, rectificación y borrado de sus datos
- Comunicar a los empleados qué datos recopilas, para qué y quién tiene acceso

### Principios éticos

**Anonimización en grupos pequeños**: si un departamento tiene < 5 personas, no publiques métricas individualizadas — el dato revela a la persona.

**Transparencia con el equipo**: comunica qué datos analizas y para qué. El people analytics que se hace "en secreto" destruye la confianza cuando se descubre.

**No vigilancia**: people analytics no es monitorización de la productividad. Es análisis agregado para tomar mejores decisiones. El análisis de productividad individual con fines disciplinarios es un terreno muy diferente con implicaciones legales distintas.

---

## ENTREGABLE

Para mi equipo [describe: tamaño de la empresa, sector, herramienta de HRIS si tienes, qué decisiones de RRHH quieres mejorar con datos]:
1. Las 5 métricas prioritarias para tu contexto con definición y fuente de datos
2. Template de dashboard en Google Sheets / Excel para empezar esta semana
3. Análisis de rotación básico: segmentación recomendada y las 3 preguntas que deberías poder responder
4. Plan de encuesta de clima trimestral: preguntas, frecuencia, cómo comunicarlo al equipo
5. Checklist de cumplimiento RGPD para el uso de datos de empleados en España
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un sistema básico de people analytics con métricas de rotación, engagement y compensación para tomar mejores decisiones de gestión de personas.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión de riesgos operacionales — seguros empresariales, coberturas necesarias y mitigación de riesgos no financieros para PYMEs',
                'description'      => 'Guía práctica para PYMEs y emprendedores sobre gestión de riesgos operacionales: qué seguros empresariales son obligatorios o altamente recomendables, cómo evaluar los riesgos no financieros del negocio (operativos, tecnológicos, de reputación) y cómo construir un plan básico de continuidad de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de gestión de riesgos con experiencia asesorando a PYMEs y empresas de rápido crecimiento. Ayúdame a construir un mapa de riesgos operacionales para mi negocio y a determinar qué coberturas de seguro necesito, qué riesgos debo mitigar internamente y cómo preparar un plan de continuidad básico.

---

## POR QUÉ LA GESTIÓN DE RIESGOS ES RELEVANTE PARA PYMES

Las PYMEs suelen subestimar sus riesgos operacionales porque "eso solo le pasa a las empresas grandes". La realidad:

- El 40% de las PYMEs que sufren un incidente grave de datos no recuperan su operación en 6 meses
- Un accidente laboral sin cobertura adecuada puede generar responsabilidades de 6 cifras
- Un litigio con un cliente o proveedor sin seguro de responsabilidad civil puede paralizar la caja
- La dependencia de un único proveedor crítico (hosting, logística, materia prima) es el riesgo operacional más frecuente y más ignorado

La gestión de riesgos no es burocracia — es supervivencia empresarial.

---

## MÓDULO 1 — MAPA DE RIESGOS OPERACIONALES

### Cómo construir tu mapa de riesgos

Para cada riesgo, evalúa dos dimensiones:
- **Probabilidad**: ¿qué tan probable es que ocurra en los próximos 12 meses?
- **Impacto**: ¿qué daño causaría si ocurre?

```
Escala de probabilidad:
1 — Muy improbable (< 5% probabilidad en 12 meses)
2 — Improbable (5-15%)
3 — Posible (15-30%)
4 — Probable (30-60%)
5 — Muy probable (> 60%)

Escala de impacto:
1 — Insignificante (< 1.000€ o sin impacto operativo)
2 — Menor (1.000-10.000€ o impacto operativo menor)
3 — Moderado (10.000-100.000€ o paralización parcial)
4 — Grave (100.000-500.000€ o paralización total)
5 — Crítico (> 500.000€ o amenaza de supervivencia del negocio)

Puntuación de riesgo = Probabilidad × Impacto
20-25: Crítico — acción inmediata
12-19: Alto — plan de mitigación prioritario
6-11: Medio — monitorizar y mitigar progresivamente
1-5: Bajo — aceptar o mitigar cuando sea posible
```

### Categorías de riesgo operacional por tipo de empresa

**Riesgos tecnológicos**:
- Pérdida de datos (fallo de hardware, ransomware, error humano)
- Caída del sistema / downtime (hosting, SaaS crítico del que dependes)
- Brecha de seguridad / acceso no autorizado
- Dependencia de un proveedor tecnológico único

**Riesgos de personas**:
- Baja laboral o incapacidad temporal de persona clave
- Salida voluntaria de persona con conocimiento crítico no documentado
- Accidente laboral
- Error humano en proceso crítico (contabilidad, producción, datos de clientes)

**Riesgos de proveedores**:
- Quiebra o cierre del proveedor principal
- Retrasos o problemas de calidad del proveedor
- Subida de precio unilateral del proveedor con contrato débil

**Riesgos de clientes / mercado**:
- Pérdida del cliente que representa > 20% de la facturación
- Concentración de facturación en pocos clientes
- Cambio regulatorio que afecta al modelo de negocio

**Riesgos de responsabilidad**:
- Accidente o daño a un cliente o tercero
- Error profesional que causa perjuicio económico al cliente
- Incumplimiento de contrato
- Infracción de protección de datos (multa AEPD)

---

## MÓDULO 2 — SEGUROS EMPRESARIALES: QUÉ NECESITAS

### Seguros obligatorios en España

| Seguro | Obligatorio para | Base legal |
|--------|-----------------|-----------|
| **Seguro de accidentes de trabajo y enfermedades profesionales** | Todas las empresas con asalariados (cubre la mutua) | Ley General SS |
| **Seguro de responsabilidad civil** | Obligatorio en algunos sectores (sanitario, construcción, actividades de riesgo) | Normativa sectorial |
| **Seguro de vida** | Solo si el convenio colectivo lo exige | Convenio colectivo |
| **Seguro de vehículos de empresa** | Todas las empresas con vehículos | Ley de Tráfico |

### Seguros altamente recomendables (no obligatorios pero críticos)

**Seguro de responsabilidad civil general (RC)**:
- Cubre daños a terceros (clientes, visitantes, propiedades de terceros) causados por la actividad de la empresa
- Para cualquier empresa que atiende clientes o trabaja en instalaciones de terceros
- Coste orientativo para PYME de servicios: 300-1.500€/año según actividad

**Seguro de responsabilidad civil profesional (errores y omisiones)**:
- Cubre reclamaciones por errores o negligencia en los servicios profesionales prestados
- Esencial para: consultoras, despachos de abogados, asesores, desarrolladores, diseñadores, médicos, ingenieros
- Coste orientativo: 500-3.000€/año según facturación y tipo de servicio

**Seguro cyber / de ciberriesgos**:
- Cubre: recuperación de datos, notificación de brecha a afectados, defensa legal, responsabilidad ante clientes, business interruption por ataque
- Cada vez más relevante para cualquier empresa con datos de clientes o dependencia de sistemas
- Coste orientativo PYME: 800-3.000€/año según tamaño y tipo de datos

**Seguro multirriesgo empresarial** (combinado de daños):
- Cubre: incendio, robo, daños por agua, roturas de maquinaria, pérdida de beneficios por siniestro
- Para empresas con local, maquinaria o stock físico
- Coste orientativo: variable según el valor asegurado

**Seguro de crédito** (para empresas B2B con alta concentración):
- Cubre el impago de clientes (insolvencia, morosidad)
- Recomendable cuando tienes pocos clientes que representan > 30% de la facturación
- Coste: 0,1-0,5% sobre la facturación asegurada

### Template de análisis de necesidades de seguro

```
Mi empresa:
Sector: _____________
Número de empleados: _______
Facturación anual: ________€
¿Tenemos local físico? □ Sí □ No
¿Atendemos clientes físicamente? □ Sí □ No
¿Prestamos servicios profesionales con potencial error? □ Sí □ No
¿Manejamos datos de clientes? □ Sí □ No
¿Tenemos vehículos de empresa? □ Sí □ No
¿Facturamos > 30% a un solo cliente? □ Sí □ No

Seguros necesarios:
□ RC General (obligatorio si: ___________)
□ RC Profesional
□ Cyber
□ Multirriesgo
□ Crédito
□ Vida/accidentes clave (para persona clave)
```

---

## MÓDULO 3 — MITIGACIÓN DE RIESGOS SIN SEGURO

No todos los riesgos se transfieren a una aseguradora. Muchos se mitigan operativamente:

### Riesgos tecnológicos — mitigación básica

```
Backup de datos (regla 3-2-1):
- 3 copias de los datos
- En 2 medios diferentes
- Con 1 copia offsite (AWS S3, Google Cloud, etc.)
- Frecuencia: diaria para datos críticos
- Test de restauración: mensual (un backup que no testeas no es un backup)

Dependencia de proveedor único:
- Documenta el proceso de migración ANTES de necesitarlo
- Ten una segunda opción identificada para los proveedores críticos
- Negocia SLAs con penalizaciones en los contratos de proveedores críticos
```

### Riesgos de persona clave — documentación crítica

El riesgo de la persona que "solo ella sabe cómo funciona X" es el más frecuente en PYMEs.

```
Para cada proceso crítico, documenta:
- Qué hace (descripción del proceso paso a paso)
- Con qué herramientas (accesos, cuentas)
- Con qué frecuencia
- Quién puede hacerlo si ella no está (backup definido)

Repositorio de contraseñas y accesos:
- Usa un gestor de contraseñas empresarial (1Password Teams, Bitwarden)
- NUNCA tengas contraseñas críticas que solo una persona conoce
```

---

## MÓDULO 4 — PLAN BÁSICO DE CONTINUIDAD DE NEGOCIO

### El plan de continuidad mínimo viable para una PYME

```
PLAN DE CONTINUIDAD DE NEGOCIO — [EMPRESA] — [FECHA]

1. INVENTARIO DE FUNCIONES CRÍTICAS
Función: [descripción]
Tiempo máximo de interrupción tolerable: [horas/días]
Persona responsable: [nombre + backup]
Sistemas/herramientas necesarios: [lista]

2. ESCENARIOS DE RIESGO CUBIERTOS
□ Pérdida de acceso al local (incendio, inundación, desahucio)
□ Caída del sistema principal (hosting, CRM, ERP)
□ Baja de persona clave (más de 2 semanas)
□ Pérdida de datos (ransomware, fallo hardware)
□ Pérdida del cliente principal

3. PARA CADA ESCENARIO:
¿Qué hacemos en las primeras 24 horas?
¿Qué hacemos en los primeros 7 días?
¿Cuál es el plan de recuperación a 30 días?

4. CONTACTOS DE EMERGENCIA
Proveedor de hosting: [tel + email + cuenta]
Asesor jurídico: [tel]
Gestor de seguros/corredor: [tel]
Banco: [tel del gestor de cuenta]
```

---

## ENTREGABLE

Para mi empresa [describe: sector, tamaño, actividad principal, los riesgos que ya identificas]:
1. Mapa de riesgos operacionales con las 10 más relevantes para tu tipo de negocio y su puntuación
2. Recomendación de seguros: cuáles necesitas, coberturas mínimas y coste orientativo
3. Plan de mitigación para los 3 riesgos de mayor puntuación sin coste de seguro
4. Checklist de documentación de continuidad: los 5 procesos críticos que necesitas documentar esta semana
5. Plan de revisión anual de riesgos y seguros
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un mapa de riesgos operacionales para PYMEs, determinar qué seguros son necesarios y establecer un plan básico de continuidad de negocio.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Joint ventures en España — estructura jurídica de la UTE/JV, acuerdo de governance y cláusulas de disolución y exit',
                'description'      => 'Guía práctica para estructurar una joint venture o UTE en España: cuándo usar cada estructura, qué debe incluir el acuerdo de governance (toma de decisiones, distribución de beneficios, aportaciones), y cómo redactar las cláusulas de salida para proteger los intereses de cada parte cuando la relación se termina.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado mercantil especializado en estructuración de operaciones corporativas en España. Ayúdame a diseñar la estructura jurídica adecuada para la joint venture o alianza estratégica que estoy contemplando, entendiendo las diferencias entre las opciones disponibles y asegurando que el acuerdo protege los intereses de todas las partes.

**AVISO LEGAL**: Este prompt es orientativo. Antes de firmar cualquier acuerdo de joint venture o UTE, contrata a un abogado mercantil para que revise y redacte los documentos específicos.

---

## CUÁNDO TIENE SENTIDO UNA JOINT VENTURE

Una joint venture (JV) o alianza empresarial tiene sentido cuando:
- Dos o más empresas quieren combinar recursos, capacidades o mercados para un proyecto o negocio sin fusionarse
- El proyecto es demasiado grande o arriesgado para que una sola empresa lo asuma
- Cada parte aporta algo que la otra no tiene (tecnología + distribución, capital + expertise, acceso a mercado + producto)
- El horizonte de la colaboración es definido o puede serlo

Las JVs fracasan cuando:
- Los objetivos de cada parte son diferentes y no se alinean al inicio
- Las aportaciones no están claramente definidas y valorizadas
- No hay mecanismos de toma de decisiones claros para cuando hay desacuerdo
- No hay reglas de salida para cuando la relación ya no funciona

---

## MÓDULO 1 — LAS ESTRUCTURAS DISPONIBLES EN ESPAÑA

### Unión Temporal de Empresas (UTE)

**Marco legal**: Ley 18/1982

**Características**:
- No crea una nueva persona jurídica — es un contrato de colaboración entre empresas existentes
- Las empresas miembro mantienen su independencia y personalidad jurídica
- Tienen un régimen fiscal especial: las rentas se atribuyen a cada socio y tributan en su propia base imponible
- Son muy comunes en contratos de obra y concesiones públicas (los pliegos de licitación pública frecuentemente las permiten)
- Se inscriben en el Registro Especial de UTEs del Ministerio de Hacienda

**Cuándo es la estructura adecuada**:
- Proyecto con duración definida (una obra, un contrato público, un proyecto de I+D)
- Las partes no quieren crear una estructura permanente
- Necesitas presentarte a concursos o licitaciones que aceptan UTEs
- Régimen fiscal más eficiente en proyectos con pérdidas iniciales

**Limitaciones**:
- No tiene personalidad jurídica propia (algunas relaciones comerciales lo exigen)
- Más rígida que una sociedad para modificar términos
- Menos flexible para atraer financiación externa

### Sociedad Limitada (SL) como JV

La estructura más común para joint ventures permanentes o de largo plazo.

**Cuándo es la adecuada**:
- La JV tiene vocación de continuidad (> 2-3 años)
- Los socios de la JV van a necesitar contratar empleados, pedir financiación o firmar contratos significativos a nombre de la JV
- Quieres una estructura con limitación de responsabilidad para cada parte

**Estructura típica**:
- Cada empresa fundadora tiene su participación en la SL (ej. 50%-50%, 60%-40%, etc.)
- Los acuerdos de governance van en el Pacto de Socios (no en los estatutos — más flexibilidad y confidencialidad)

### Contrato de colaboración sin vehículo jurídico

Para colaboraciones más ligeras sin proyecto conjunto formalizado:
- Acuerdo de distribución / referral
- Acuerdo de co-desarrollo o licencia
- Consorcio informal (sin inscripción en registro)

---

## MÓDULO 2 — EL ACUERDO DE GOVERNANCE

El governance define cómo se gobierna la JV: quién decide qué, cómo se distribuyen los beneficios y cómo se resuelven los desacuerdos.

### Estructura de toma de decisiones

```
ÓRGANO EJECUTIVO — para decisiones operativas del día a día
(puede ser un comité de dirección o un gerente designado)
Quórum: [especifica — ej. decisiones por unanimidad o por mayoría simple]
Reuniones: [frecuencia — ej. mensual]

ÓRGANO ESTRATÉGICO — para decisiones estratégicas y revisión del plan
(board o comité de socios)
Composición: [N representantes de la Parte A + N de la Parte B]
Quórum: [ej. unanimidad para decisiones estratégicas]
Reuniones: [frecuencia — ej. trimestral]

DECISIONES RESERVADAS (requieren unanimidad o mayoría cualificada):
□ Modificación del plan de negocio aprobado
□ Inversiones superiores a [X€]
□ Contratación de deuda financiera
□ Cambios en la estructura accionarial
□ Aprobación de cuentas anuales
□ Distribución de dividendos
□ Liquidación o disolución de la JV
```

### Aportaciones y distribución de resultados

```
TABLA DE APORTACIONES:

Parte A ([empresa]):
- Aportación de capital: [X€]
- Aportación de activos: [descripción y valor]
- Aportación de servicios: [descripción — cómo se valora?]
- Aportación de know-how / licencias: [descripción]

Parte B ([empresa]):
[ídem]

DISTRIBUCIÓN DE RESULTADOS:
Los beneficios y pérdidas se distribuyen en proporción a [la participación / otra fórmula]
salvo acuerdo expreso en contrario.

MECANISMO DE DISTRIBUCIÓN:
- Dividendos: [frecuencia — ej. una vez al año, tras aprobación de cuentas]
- Reinversión mínima: [% de beneficios que se reinvierten antes de distribuir]
- Cuenta corriente socios: [si se permiten préstamos entre socios y la JV]
```

### Resolución de deadlocks (bloqueo en la toma de decisiones)

El deadlock es el mayor riesgo en una JV 50-50: ambas partes tienen que estar de acuerdo en todo pero no lo están.

**Mecanismos de resolución de deadlock**:

1. **Mediación**: las partes designan un mediador externo (antes de ir a arbitraje)
2. **Casting vote**: un consejero independiente designado de común acuerdo tiene el voto de desempate
3. **Texas Shoot-Out (Russian Roulette)**: si hay deadlock sobre el valor de la empresa, una parte propone un precio; la otra parte puede vender a ese precio O comprar a ese precio. Resuelve el deadlock pero es agresivo.
4. **Buy-Sell Agreement**: cualquier parte puede ofrecer comprar la parte de la otra a un precio X; la otra parte puede vender a X o comprar la parte del ofertante a X.

---

## MÓDULO 3 — CLÁUSULAS DE SALIDA (EXIT PROVISIONS)

Las cláusulas de salida son las que más se negocian y más importan cuando la relación no funciona.

### Restricciones a la transferencia de participaciones

```
LOCK-UP (período de no venta):
Las Partes no podrán transmitir sus participaciones durante los primeros
[2-3] años desde la constitución de la JV, salvo consentimiento unánime
de los demás socios.

DERECHO DE PRIMERA OFERTA (ROFR):
Antes de transmitir sus participaciones a un tercero, la Parte vendedora
deberá ofrecerlas en las mismas condiciones a las demás Partes, que tendrán
un plazo de [30 días] para ejercer su derecho de adquisición preferente.

DERECHO DE ACOMPAÑAMIENTO (TAG-ALONG):
Si una Parte transmite sus participaciones a un tercero, las demás Partes
tendrán derecho a vender sus propias participaciones al mismo tercero
en las mismas condiciones económicas.

DERECHO DE ARRASTRE (DRAG-ALONG):
Si Partes que representan > [X%] del capital acuerdan vender a un tercero,
podrán arrastrar a las demás Partes a vender en las mismas condiciones.
```

### Causas de disolución anticipada

```
La JV se disolverá anticipadamente en los siguientes casos:
a) Por acuerdo unánime de todas las Partes
b) Por incumplimiento grave y no subsanado en [30 días] de las
   obligaciones de una Parte
c) Por declaración de insolvencia de cualquiera de las Partes
d) Por cambio de control de cualquiera de las Partes (si así se acuerda)
e) Deadlock no resuelto en [X meses] mediante los mecanismos establecidos
```

### No competencia post-disolución

```
Una vez disuelta la JV, las Partes se comprometen a no competir
directamente con la actividad de la JV en el mercado [especificar]
durante un período de [12-24 meses].

En caso de salida anticipada de una Parte por incumplimiento:
- La Parte incumplidora está sujeta a la cláusula de no competencia
- La Parte no incumplidora queda libre de la restricción
```

---

## MÓDULO 4 — CLÁUSULAS DE PROTECCIÓN DE APORTACIONES

Si una parte ha aportado propiedad intelectual, know-how o tecnología:

```
TITULARIDAD DE LA PI:
La PI aportada por la Parte A al inicio de la JV seguirá siendo
propiedad exclusiva de la Parte A. La JV tiene licencia de uso
durante la vigencia de la JV, no exclusiva / exclusiva en el sector.

En caso de disolución:
- La PI pre-existente revierte a su titular original
- La PI generada durante la JV es propiedad [compartida / de la JV /
  de la Parte que la generó según proporción de contribución]
```

---

## ENTREGABLE

Para mi joint venture [describe: las empresas involucradas, qué aporta cada una, el proyecto o negocio, la duración estimada, las principales preocupaciones]:
1. Recomendación de estructura (UTE / SL / contrato de colaboración) con justificación
2. Estructura de governance propuesta: órganos, quórum, decisiones reservadas
3. Draft de las cláusulas de transferencia y salida adaptadas a tu situación
4. Las 3 cláusulas más críticas para tu posición específica y cómo negociarlas
5. Checklist de los documentos que necesitas antes de iniciar la operación
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la estructura jurídica y el acuerdo de governance de una joint venture o UTE en España con cláusulas de salida y protección de aportaciones.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Deflección proactiva de tickets — implementa el sistema de self-service que resuelve dudas antes de que el cliente tenga que contactar',
                'description'      => 'Sistema para reducir el volumen de tickets de soporte mediante deflección proactiva: cómo identificar qué tickets se pueden evitar con self-service, cómo construir una base de conocimiento que los usuarios realmente usan, y cómo implementar chatbots y flows automáticos que resuelven dudas sin intervención humana.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Support especializado en estrategias de self-service y deflección de tickets. Ayúdame a construir un sistema de self-service proactivo que reduzca el volumen de tickets entrantes en un 30-50% sin reducir la satisfacción del cliente, liberando al equipo de soporte para centrarse en los casos que realmente necesitan atención humana.

---

## EL CASO DE NEGOCIO PARA LA DEFLECCIÓN

Un ticket de soporte atendido por un agente humano cuesta entre 5€ y 50€ dependiendo de la complejidad y el modelo de soporte. Un mismo problema resuelto por self-service cuesta menos de 0,10€.

Pero la deflección no es solo coste — es velocidad para el cliente. Un artículo de ayuda disponible 24/7 resuelve el problema en 2 minutos. Un agente disponible en horario de oficina puede tardar horas.

El objetivo no es eliminar el soporte humano — es reservarlo para los problemas que realmente lo necesitan.

---

## MÓDULO 1 — IDENTIFICAR QUÉ TICKETS PUEDES DEFLECTAR

### El análisis de deflectabilidad

No todos los tickets son deflectables. El primer paso es identificar los que sí lo son.

**Proceso de análisis**:

```
Paso 1: Categoriza todos los tickets de los últimos 3 meses
        (si no tienes categorías, lee 100 tickets al azar y crea un árbol de categorías)

Categorías comunes:
- Cómo usar [feature]: pregunta de uso, el usuario no sabe cómo hacer algo
- Error / no funciona: problema técnico
- Cambio de plan / facturación: gestión de cuenta
- Estado de pedido/envío: información sobre el estado de algo
- Solicitud de feature: feedback de producto
- Incidencia crítica: algo está roto y tiene impacto importante

Paso 2: Para cada categoría, pregunta:
¿Podría el cliente haber resuelto esto sin contactarnos si...?
  → Hubiera existido un artículo de ayuda claro sobre este tema?
  → El producto hubiera tenido un tooltip o mensaje en contexto?
  → El email transaccional lo hubiera informado antes?
  → Hubiera habido un chatbot que guiara el proceso?

Paso 3: Calcula el % de tickets deflectables por categoría
Suma el volumen de las categorías deflectables → ese es tu potencial de deflección
```

**Matriz de deflectabilidad:**

| Categoría | Volumen mensual | ¿Deflectable? | Mecanismo de deflección |
|-----------|----------------|---------------|------------------------|
| "Cómo cambio mi contraseña" | 150 | Sí | Artículo KB + chatbot |
| "¿Cuándo llega mi pedido?" | 200 | Sí | Email tracking automático + chatbot |
| "El pago no me funciona" | 80 | Parcial | Diagnóstico en la app + artículo |
| "Quiero cancelar mi cuenta" | 40 | No | Proceso humano para retention |
| "Encontré un bug crítico" | 20 | No | Siempre necesita agente |

---

## MÓDULO 2 — LA BASE DE CONOCIMIENTO QUE USAN LOS USUARIOS

El 70% de las bases de conocimiento no se usan porque están diseñadas para los agentes de soporte, no para los clientes.

### Los errores más comunes en las bases de conocimiento

**Error 1: Artículos escritos por el equipo de producto, no por el cliente**
Los artículos que empiezan con "Este feature permite al usuario..." están escritos desde la perspectiva del producto. Los artículos útiles empiezan con el problema del usuario: "¿Cómo cambio mi dirección de facturación?"

**Error 2: Estructura de categorías que refleja el organigrama de la empresa**
"Soporte técnico / Soporte comercial / Soporte de producto" no tiene ningún sentido para el usuario. Estructura por job-to-be-done: "Gestionar mi cuenta / Realizar un pago / Configurar integraciones".

**Error 3: Sin buscador optimizado**
El usuario busca en lenguaje natural. Tu base de conocimiento necesita un buscador que entienda sinónimos ("eliminar" y "borrar", "factura" y "recibo").

**Error 4: Artículos desactualizados**
Un artículo que dice "haz click en el botón azul" cuando el botón ahora es verde destruye la confianza del usuario en el self-service.

### Estructura de un artículo de base de conocimiento que funciona

```
TÍTULO: Pregunta en el lenguaje del usuario
[ej. "¿Cómo añado un método de pago?" — NO "Gestión de métodos de pago"]

RESUMEN (1 línea): Lo que aprenderás en este artículo

ANTES DE EMPEZAR (si aplica):
- Necesitas ser administrador de la cuenta para hacer esto
- Esta opción solo está disponible en el plan Pro

PASOS (con capturas de pantalla actualizadas):
1. Ve a [Sección] → [Subsección]
   [Captura de pantalla con el elemento destacado]
2. [Acción específica]
   [Captura si hay algo visual que mostrar]
3. [Confirmación del resultado]

RESULTADO ESPERADO:
[Cómo saber que funcionó correctamente]

PROBLEMAS COMUNES:
¿El botón aparece en gris? → Significa que [explicación + solución]
¿Ves un mensaje de error? → [Cómo resolverlo]

¿Sigue sin funcionar?
[Enlace a contactar con soporte — siempre debe existir una salida humana]

FECHA DE ÚLTIMA ACTUALIZACIÓN: [fecha]
```

### Proceso de mantenimiento de la base de conocimiento

```
Disparadores de actualización (automatizable):
- Cuando un release notes menciona un feature ya documentado → revisar artículo
- Cuando 3+ tickets en una semana referencian el mismo artículo como "no me ayudó"
  → revisar el artículo

Revisión periódica:
- Mensual: los 10 artículos más visitados → ¿siguen actualizados?
- Trimestral: audit completo de artículos > 6 meses sin actualizar
```

---

## MÓDULO 3 — CHATBOTS Y FLOWS AUTOMÁTICOS

Los chatbots de soporte no son para simular una conversación humana — son para guiar al usuario al recurso correcto (artículo de KB, herramienta de diagnóstico, o agente humano) de forma rápida.

### Los flujos más efectivos de chatbot para soporte

**Flow 1: Diagnóstico de problema**

```
Usuario escribe: "no puedo iniciar sesión"

Bot: "Entendido. Vamos a resolverlo rápido. ¿Cuál es el problema exactamente?"
  → [A] No recuerdo mi contraseña
  → [B] La contraseña correcta no funciona
  → [C] No recibo el email de verificación
  → [D] Mi cuenta parece bloqueada

Si [A] → Enlace directo a "Restablecer contraseña" + artículo KB
Si [B] → Verificar si la cuenta existe + sugerir artículo + opción de hablar con agente
Si [C] → Verificar email, sugerir revisar spam + artículo + opción de agente
Si [D] → Pasar a agente directamente (requiere revisión manual)
```

**Flow 2: Estado de pedido/ticket**

```
Usuario escribe: "¿cuándo llega mi pedido?"

Bot: "Puedo ayudarte. ¿Cuál es tu número de pedido?"
Usuario: "12345"

Bot: [Consulta API del sistema] → "Tu pedido #12345 está en camino.
     Salió de nuestro almacén el [fecha]. La entrega estimada es [fecha].
     Puedes hacer seguimiento en tiempo real aquí: [enlace]

     ¿Hay algo más en lo que pueda ayudarte?"
```

**Flow 3: Escalación inteligente**

```
Después de 2 intentos de resolución con KB/bot sin éxito:
"Entiendo que los recursos que te compartí no han resuelto tu problema.
Te pongo en contacto con nuestro equipo ahora mismo.

Para agilizar la atención, cuéntame brevemente: ¿qué intentaste hacer y qué pasó?"

[El bot recopila contexto → el agente recibe el ticket ya con contexto]
```

---

## MÓDULO 4 — SELF-SERVICE EN CONTEXTO (IN-APP Y EN PRODUCTO)

La mejor deflección es la que ocurre antes de que el usuario salga del producto a buscar ayuda.

### Tooltips y onboarding contextual

- Tooltips en features complejos: "¿Qué es esto?" aparece en el ? junto al campo
- Walkthroughs de onboarding: guía paso a paso en el primer uso de cada feature importante
- Empty states que guían: cuando el usuario llega a una sección vacía, explica qué hacer (no solo "No tienes datos todavía")

### Mensajes proactivos en el producto

Detecta situaciones donde el usuario podría tener problemas y anticipa:

```
Ejemplo: El usuario lleva 3 minutos en el paso de configuración de integración
         sin completarlo (señal de que está atascado)

→ Aparece: "¿Necesitas ayuda con la integración?
            La mayoría de las dudas están resueltas aquí: [enlace artículo]
            O chatea con nosotros: [botón]"
```

---

## MÓDULO 5 — MÉTRICAS DE SELF-SERVICE

| Métrica | Fórmula | Objetivo |
|---------|---------|---------|
| **Ticket deflection rate** | Tickets resueltos por self-service / total de interacciones × 100 | > 30-50% |
| **KB article views / ticket** | Visitas a KB / tickets del mismo período | Tendencia ascendente |
| **Article helpfulness** | Artículos con "Sí, me ayudó" / total de votos | > 70% |
| **Zero-contact resolution** | Usuarios que resolvieron su problema sin abrir un ticket | Tendencia ascendente |
| **CSAT self-service** | Satisfacción del usuario que usó solo self-service | > 4/5 |

---

## ENTREGABLE

Para mi equipo de soporte [describe: producto, volumen de tickets, categorías principales de tickets, herramienta de helpdesk y KB si la tienes]:
1. Análisis de deflectabilidad: las 5 categorías de tickets con mayor potencial de self-service
2. Plan de base de conocimiento: los 10 artículos prioritarios con títulos en lenguaje de usuario
3. Flow de chatbot para el caso de uso más frecuente deflectable
4. Plan de implementación de 60 días para reducir el volumen de tickets en un 30%
5. Dashboard de métricas de self-service para medir el impacto
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Reducir el volumen de tickets de soporte en un 30-50% mediante deflección proactiva con base de conocimiento, chatbots y self-service en contexto.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Paquetes de servicios — cómo diseñar y vender paquetes con precio fijo que aumentan el ticket medio y simplifican la venta',
                'description'      => 'Framework para freelancers que quieren abandonar la tarifa por hora y diseñar paquetes de servicios con precio fijo: cómo estructurar los entregables, cómo nombrar y posicionar los paquetes, cómo fijar el precio que maximiza el margen y cómo venderlos sin entrar en comparaciones de horas trabajadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocio para freelancers con experiencia ayudando a profesionales independientes a estructurar y vender sus servicios como paquetes de precio fijo. Ayúdame a diseñar mis paquetes de servicios, a ponerles precio y a construir la propuesta comercial que los vende sin que el cliente pregunte "¿cuántas horas son?".

---

## POR QUÉ LOS PAQUETES SUPERAN A LA TARIFA POR HORA

**El problema de la tarifa por hora**:
- El cliente compra tu tiempo, no el resultado. Eso lo hace sensible al número de horas.
- Si eres rápido y eficiente, ganas menos que si eres lento.
- El cliente siempre tiene la percepción de que está "pagando por tu tiempo" y puede cuestionar cada hora.
- Tu ingresos tienen un techo: el número de horas que puedes trabajar.

**Las ventajas de los paquetes**:
- El cliente compra un resultado, no tiempo. La conversación es "¿qué consigo?" no "¿cuánto cuesta la hora?".
- Tu eficiencia se convierte en margen, no en descuento.
- El ticket medio es más predecible y más alto.
- La venta es más fácil porque el cliente sabe exactamente lo que recibe.

---

## MÓDULO 1 — DISEÑA TU MATRIZ DE PAQUETES

### La estructura de 3 paquetes (Good / Better / Best)

La mayoría de los freelancers que venden bien usan 3 paquetes. Esta estructura tiene base psicológica: el cliente compara entre tus 3 opciones (no entre tú y un competidor) y el paquete del medio es el más elegido.

```
PAQUETE ESENCIAL (el más básico):
- Precio: [el más bajo]
- Para quién: clientes con presupuesto limitado o necesidad específica y acotada
- Qué incluye: el resultado más básico que puedes entregar con calidad
- Qué NO incluye: [lista las cosas que podrían esperar pero no están]
- Timeline: [más corto]

PAQUETE ESTÁNDAR (el que más vendes, el que quieres vender):
- Precio: [el que mejor equilibra valor y accesibilidad]
- Para quién: el cliente que tiene el problema completo que tú resuelves
- Qué incluye: el resultado completo + los extras que lo hacen 10x mejor
- Timeline: [razonable]

PAQUETE PREMIUM (el más completo y caro):
- Precio: [el más alto — al menos 2x el paquete estándar]
- Para quién: clientes que quieren lo mejor sin preocuparse por el detalle
- Qué incluye: todo lo del estándar + atención personalizada + velocidad + extras exclusivos
- Timeline: [prioritario — más rápido]
- Diferencial: acceso directo, revisiones ilimitadas, garantía extendida
```

### Template de definición de paquete

Para cada paquete, documenta:

```
NOMBRE DEL PAQUETE: [nombre memorable que evoca el resultado]
                    Ej: "Web en 2 semanas" o "Lanzamiento Completo" o "Sprint de Marca"

PARA QUIÉN ES:
"Este paquete es perfecto para [tipo de cliente] que necesita [situación específica]
y quiere [resultado] sin [fricción principal que resuelves]."

ENTREGABLES (concretos y verificables):
□ [Entregable 1] — descripción específica de qué incluye y qué no
□ [Entregable 2] — ídem
□ [Entregable 3] — ídem

PROCESO:
Semana 1: [qué ocurre]
Semana 2: [qué ocurre]
[etc.]

LO QUE NO INCLUYE (para gestionar expectativas):
✗ [Cosa que el cliente podría esperar pero no está]
✗ [Cosa que no incluye]

NÚMERO DE REVISIONES: [número específico]
TIEMPO DE ENTREGA: [X días/semanas desde el inicio]
PRECIO: [X€]

EXTRAS / ADD-ONS (opcionales):
+ [Extra 1]: +[X€]
+ [Extra 2]: +[Y€]
```

---

## MÓDULO 2 — CÓMO FIJAR EL PRECIO DE LOS PAQUETES

### El error más común: calcular el precio desde las horas

Calcular el precio multiplicando horas estimadas × tarifa horaria te lleva a vender tiempo, no valor. El enfoque correcto es precio basado en valor.

### El framework de precio basado en valor

**Paso 1: Define el resultado**
¿Qué cambia en el negocio del cliente después de tu trabajo?

**Paso 2: Cuantifica el valor del resultado**
```
Ejemplos por tipo de servicio:

Diseñadora web para ecommerce:
"Una web optimizada para conversión puede aumentar la tasa de conversión
de 1% a 2%. Con 5.000 visitas al mes y ticket medio de 60€, eso son
3.000€/mes adicionales = 36.000€/año."
→ Un paquete de 3.500€ tiene un ROI de 10x en el primer año.

Consultor de SEO:
"Pasar del puesto 8 al puesto 2 para una keyword con 2.000 búsquedas mensuales
puede generar 150 visitas orgánicas adicionales al mes.
Con conversión del 3% y ticket de 200€ = 900€/mes adicionales."
→ Un paquete de 2.500€ se paga en 3 meses.

Copywriter:
"Un email de bienvenida bien escrito puede aumentar la tasa de conversión
de prueba a pago del 15% al 25%. Con 100 trials al mes y LTV de 300€,
eso son 3.000€/mes adicionales."
→ Un paquete de 1.500€ se amortiza en 2 semanas.
```

**Paso 3: Precio = % del valor que capturas**

Tu precio debería ser entre el 10% y el 30% del valor que el cliente obtiene. Si el ROI es claro y cuantificable, estás en el extremo alto; si es más difuso, en el bajo.

### La tabla de sanity check del precio

```
Antes de fijar el precio final, comprueba:

□ ¿El precio es rentable para ti? (ingresos mínimos deseados / número de proyectos)
□ ¿El precio refleja el valor que el cliente obtiene? (ROI test)
□ ¿El precio es competitivo en tu segmento? (no el más barato, pero tampoco inalcanzable)
□ ¿Puedes defender el precio sin pedir disculpas? (si tienes que justificarlo en exceso, revisar)
□ ¿El paquete más caro parece premium y distinto del estándar? (mínimo 2x)
```

---

## MÓDULO 3 — NOMBRAR Y POSICIONAR LOS PAQUETES

El nombre del paquete comunica el resultado antes de que el cliente lea el detalle.

### Nombres que venden (orientados al resultado)

```
MAL (describe el servicio):
- Paquete Básico / Estándar / Premium
- Pack Diseño Web S / M / XL
- Servicio de Consultoría 10h / 20h / 40h

BIEN (describe el resultado o la promesa):
- "Web Lista" / "Web que Vende" / "Marca Completa"
- "Sprint de Lanzamiento" / "Sistema de Ventas" / "Ecosistema Digital"
- "Claridad en 30 días" / "Pipeline en 90 días" / "Socio Estratégico"
```

### La página de servicios / propuesta comercial

Estructura para presentar tus paquetes al cliente:

```
SECCIÓN 1: EL PROBLEMA
"La mayoría de [tu tipo de cliente] tiene [problema específico].
Eso les cuesta [consecuencia concreta]."

SECCIÓN 2: TU SOLUCIÓN
"[Nombre de tu servicio] es [qué es] para [para quién] que quieren [resultado]."

SECCIÓN 3: LOS PAQUETES (tabla comparativa)
[Las 3 columnas con los paquetes, incluyendo qué está en cada uno con checkmarks]

SECCIÓN 4: CÓMO FUNCIONA (el proceso)
"Así trabajamos juntos: [3-5 pasos claros]"

SECCIÓN 5: PRUEBA SOCIAL
[Testimonial relevante o caso de éxito para cada paquete si tienes]

SECCIÓN 6: FAQs
Las preguntas que siempre te hacen antes de contratar
```

---

## MÓDULO 4 — CÓMO VENDER LOS PAQUETES (SIN DEFENDER LAS HORAS)

### La reunión de diagnóstico antes de proponer

Antes de enviar la propuesta con los paquetes, haz una reunión de diagnóstico (30-45 minutos) para:
1. Entender el problema específico del cliente
2. Entender el resultado que busca y el impacto que tendría
3. Entender el presupuesto disponible (no siempre directamente, pero orientativamente)

Con esa información, recomendarás el paquete concreto en la propuesta.

### Cómo recomendar (no presentar todas las opciones igual)

```
MAL:
"Te envío los tres paquetes y me dices cuál te interesa."

BIEN:
"Basándome en lo que me contaste — que necesitas [resultado] para [fecha]
y que el mayor reto es [contexto] — te recomiendo el Paquete [Estándar].
Te incluyo también el Paquete [Premium] por si prefieres una ejecución
más rápida con atención prioritaria, y el Paquete [Esencial] si el
presupuesto es el principal factor de decisión ahora mismo."
```

### Cuando el cliente pregunta "¿cuántas horas son?"

```
Respuesta: "Mis paquetes tienen precio por resultado, no por horas.
El tiempo que lleva depende mucho del proyecto específico.
Lo que sí te puedo garantizar es que en [X semanas] tendrás [resultado concreto].
¿Es ese el resultado que necesitas?"

[Devuelves la conversación al resultado, no a las horas]
```

---

## ENTREGABLE

Para mi actividad freelance [describe: qué tipo de servicio ofreces, a quién, cuál es tu tarifa actual, cuál es el problema que más resuelves]:
1. Definición de los 3 paquetes (Esencial / Estándar / Premium) con entregables concretos y nombre orientado al resultado
2. Precio de cada paquete con justificación de valor (ROI del cliente)
3. Template de propuesta comercial adaptada a tu servicio
4. Script para la reunión de diagnóstico antes de enviar la propuesta
5. Las 3 objeciones más frecuentes en tu sector y cómo responderlas sin justificar horas
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y vender paquetes de servicios con precio fijo que aumentan el ticket medio del freelance y simplifican la venta eliminando la comparación por horas.',
                'vote_score'       => 42,
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
