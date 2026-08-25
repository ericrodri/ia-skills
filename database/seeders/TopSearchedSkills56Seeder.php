<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills56Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'LinkedIn de empresa company page',
                'description'       => 'Estrategia de contenido para la página de empresa en LinkedIn: qué publicar, con qué frecuencia y cómo construir audiencia orgánica.',
                'prompt_content'    => <<<'PROMPT'
# LinkedIn de empresa: estrategia de contenido que construye audiencia y genera leads

Actúa como un especialista en LinkedIn marketing y estrategia de contenido B2B con experiencia gestionando páginas de empresa desde 500 hasta 50.000 seguidores. Voy a compartirte el contexto de mi empresa y necesito que me ayudes a construir una estrategia de contenido para la company page que genere audiencia orgánica, visibilidad de marca y leads cualificados.

## Página de empresa vs. perfil personal en LinkedIn

La mayoría de las empresas cometen el error de comparar el rendimiento de su company page con el de los perfiles personales de sus empleados y concluyen que "LinkedIn de empresa no funciona". La realidad es que son canales distintos con objetivos distintos:

**El perfil personal** tiene mayor alcance orgánico porque LinkedIn favorece las conexiones humanas. Es ideal para el liderazgo de pensamiento del CEO, fundadores o expertos del equipo.

**La company page** tiene menos alcance orgánico pero más credibilidad institucional. Es lo que un candidato revisa antes de postularse, lo que un inversor mira antes de reunirse, y lo que un potencial cliente busca para validar que la empresa es real y activa.

---

## Parte 1: Los fundamentos antes de publicar nada

Antes de planificar contenido, asegúrate de que la página tiene los fundamentos en orden:

**Checklist de setup básico:**
- [ ] Logo y foto de portada actualizados y con la resolución correcta (portada: 1128×191 px)
- [ ] Tagline (120 caracteres): no el nombre del producto, el beneficio para el cliente
- [ ] Descripción de empresa (2.000 caracteres): quién eres, para quién, qué problema resuelves, qué os diferencia
- [ ] URL personalizada (linkedin.com/company/tu-empresa)
- [ ] Botón de CTA configurado: "Visitar web", "Contactar", "Saber más"
- [ ] Especialidades configuradas: las 20 palabras clave de tu sector
- [ ] Empleados vinculados: invita a todos los empleados a indicar la empresa en su perfil
- [ ] Primera publicación de presentación

---

## Parte 2: Los 6 tipos de contenido que funcionan en una company page

El mayor error de las company pages es publicar solo contenido corporativo: notas de prensa, premios y logros propios. Ese contenido no tiene engagement porque a nadie le interesa tu empresa tanto como a ti.

**Los 6 tipos de contenido que sí generan engagement:**

| Tipo | Descripción | Frecuencia |
|---|---|---|
| Educativo / Insight | Conocimiento útil para tu audiencia target, sin mencionar el producto | 40 % del contenido |
| Caso de uso de cliente | Historia de cómo un cliente resolvió un problema con tu ayuda | 20 % del contenido |
| Cultura y personas | El equipo, el día a día, los valores en acción | 15 % del contenido |
| Producto y novedades | Lanzamientos, mejoras, funcionalidades — pero siempre con ángulo de beneficio para el usuario | 15 % del contenido |
| Tendencias del sector | Datos, estudios, debates relevantes para tu audiencia | 10 % del contenido |

**Lo que NO publicar (o hacerlo muy raramente):**
- Premios y reconocimientos propios (sin contexto de por qué importa al lector)
- Notas de prensa corporativas en formato de nota de prensa
- Contenido genérico de celebración de festivos (Feliz Navidad, Día del Trabajador...)
- Noticias del sector sin un punto de vista propio

---

## Parte 3: Estructura y formatos de publicación

**Los formatos con mayor alcance orgánico en LinkedIn (2024-2025):**

1. **Documentos PDF / Carruseles**: el formato con más engagement en company pages. Crea mini-guías, frameworks visuales o estudios de caso en formato carrusel (5-10 slides).

2. **Vídeo nativo corto (60-90 segundos)**: LinkedIn favorece el vídeo subido directamente (no enlace a YouTube). Ideal para: demostración de producto, detrás de las cámaras del equipo, opinión del CEO sobre tendencias del sector.

3. **Post de texto con hook fuerte**: publicaciones de solo texto con un primer párrafo que obliga a hacer clic en "Ver más". El hook es todo.

4. **Newsletter de empresa**: LinkedIn permite crear una newsletter desde la company page. Es el formato más efectivo para fidelizar seguidores: reciben notificación de cada edición.

5. **Sondeos**: alta participación pero bajo alcance posterior. Úsalos para investigación de mercado y para generar comentarios que amplifican el alcance.

---

## Parte 4: La cadencia de publicación y el calendario editorial

**Frecuencia recomendada para una company page:**
- Mínimo viable: 2 publicaciones por semana
- Óptimo: 3-4 publicaciones por semana
- Evitar: más de una publicación por día (LinkedIn no distribuye bien más de una publicación al día de la misma página)

**Horarios con mayor visibilidad (España, LinkedIn B2B):**
- Martes, miércoles y jueves: mejor rendimiento
- 8:00-9:00 y 12:00-13:00: picos de actividad
- Los viernes y el fin de semana funcionan peor para contenido de empresa

**Plantilla de calendario editorial mensual:**

```
Semana 1:
- Lunes: Post educativo (framework o insight del sector)
- Miércoles: Caso de cliente (historia + resultado)
- Viernes: Cultura de empresa (foto del equipo o historia de un empleado)

Semana 2:
- Martes: Carrusel con guía práctica (PDF / documento)
- Jueves: Tendencia del sector con punto de vista propio

Semana 3:
- Lunes: Post de producto (lanzamiento o mejora con ángulo de beneficio)
- Miércoles: Post educativo
- Viernes: Vídeo corto (detrás de las cámaras o tutoriel)

Semana 4:
- Martes: Caso de cliente o testimonio
- Jueves: Datos del sector + perspectiva de la empresa
```

---

## Parte 5: Amplificación orgánica — cómo multiplicar el alcance

El mayor amplificador de una company page no es el presupuesto de publicidad: son los empleados.

**Employee advocacy — el sistema que funciona:**

1. **Notificación interna cuando se publica**: avisa al equipo (Slack, email) con un mensaje tipo "Nueva publicación en LinkedIn — si te parece interesante, un me gusta o comentario en los primeros 60 minutos ayuda mucho al alcance."

2. **Haz que sea fácil**: comparte el enlace directo a la publicación. No le pidas al equipo que busque la página.

3. **Crea una política sencilla**: no obligues, invita. "Si la publicación habla de algo con lo que te identificas o estás orgulloso, compártela." La autenticidad tiene más peso que el volumen.

4. **Identifica a tus embajadores internos**: los empleados que tienen más seguidores en LinkedIn son multiplicadores de alcance. Dales primicia del contenido y deja que lo adapten a su voz.

**Interacción con otras páginas y comunidades:**
- Comenta de forma genuina en publicaciones de partners, clientes y medios del sector
- Etiqueta a empresas o personas cuando el contexto lo justifica (no spam de etiquetas)
- Comparte contenido relevante de terceros con un punto de vista propio añadido

---

## Parte 6: Métricas para evaluar el rendimiento

| Métrica | Qué mide | Cómo interpretar |
|---|---|---|
| Alcance de publicación | A cuántas personas llegó el contenido | Benchmark: 5-15 % de seguidores por publicación |
| Tasa de engagement | (Reacciones + comentarios + reposts) / Alcance | > 2 % es muy bueno en company page |
| Crecimiento de seguidores | Nuevos seguidores por mes | Mide si el contenido atrae audiencia nueva |
| Clics en el botón CTA | Visitas a la web desde la página | Mide el interés comercial real |
| Impresiones de la empresa | Total de veces que el contenido de la empresa fue visto | Tendencia mensual, no número absoluto |

---

## Entregable

Cuéntame el sector de tu empresa, quién es tu cliente ideal y cuáles son tus 2-3 objetivos con LinkedIn (branding, generación de leads, atracción de talento), y elaboraré:
1. Estrategia de contenido con los 6 pilares temáticos específicos para tu empresa
2. Calendario editorial del primer mes con 12 publicaciones listas para publicar
3. 3 hooks de publicación de alto impacto para empezar esta semana
4. Plan de employee advocacy adaptado al tamaño de tu equipo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear una estrategia de contenido para la company page de LinkedIn que genera audiencia y leads',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Zero-downtime migrations',
                'description'       => 'Ejecuta migraciones de base de datos en producción sin interrupciones del servicio usando el patrón expand-contract y técnicas probadas.',
                'prompt_content'    => <<<'PROMPT'
# Zero-downtime migrations: cambia la base de datos en producción sin caídas

Actúa como un ingeniero de bases de datos y backend senior con experiencia ejecutando migraciones en producción en sistemas con alta disponibilidad y sin ventanas de mantenimiento. Voy a compartirte el contexto de mi base de datos y el cambio que necesito hacer, y necesito que me diseñes la estrategia de migración que minimiza el riesgo y elimina el downtime.

## Por qué las migraciones en producción son peligrosas

Las operaciones más frecuentes que causan downtime o degradación de performance en producción:

| Operación | Riesgo | Base de datos afectada |
|---|---|---|
| Añadir columna NOT NULL sin default | Bloqueo de tabla completo | MySQL 5.x, PostgreSQL < 11 |
| Renombrar columna directamente | Rompe el código que usa el nombre antiguo | Todas |
| Añadir índice en tabla grande | Lock de escritura durante minutos u horas | MySQL |
| Cambiar tipo de datos de columna grande | Reescritura de la tabla completa | Todas |
| Eliminar columna que el código aún usa | Error en runtime inmediato | Todas |
| Añadir foreign key sin índice previo | Lock de tabla durante la validación | MySQL especialmente |

---

## Parte 1: El patrón Expand-Contract (la base de todo)

El patrón Expand-Contract es la metodología fundamental para hacer cambios en el esquema de base de datos sin downtime. Consiste en tres fases desplegadas de forma independiente:

### Fase 1 — Expand (añadir, no cambiar)

En lugar de cambiar el esquema directamente, añades lo nuevo sin eliminar lo viejo. El código antiguo sigue funcionando, el código nuevo puede usar las columnas o tablas nuevas.

**Ejemplo: renombrar la columna `user_name` a `full_name`**

```sql
-- Fase 1: Añade la columna nueva SIN eliminar la antigua
ALTER TABLE users ADD COLUMN full_name VARCHAR(255);
```

### Fase 2 — Migración de datos + código dual-write

Mientras conviven las dos columnas, el código escribe en ambas y lee de la nueva cuando tenga datos, de la antigua como fallback.

```php
// Código durante la fase de transición
public function getFullName(): string
{
    return $this->full_name ?? $this->user_name;
}

public function setFullName(string $name): void
{
    $this->full_name = $name;
    $this->user_name = $name; // backfill para compatibilidad
}
```

Script de backfill de datos existentes (ejecutar en batch para no saturar la base de datos):
```sql
UPDATE users
SET full_name = user_name
WHERE full_name IS NULL
LIMIT 1000; -- Ejecutar en batches con pausa entre iteraciones
```

### Fase 3 — Contract (eliminar lo viejo)

Una vez que todo el código usa la columna nueva y los datos están migrados, eliminas la columna antigua en un deployment posterior.

```sql
-- Fase 3: Solo cuando el código ya no usa user_name
ALTER TABLE users DROP COLUMN user_name;
```

**La clave**: cada fase es un deployment independiente. Si algo falla, puedes hacer rollback sin afectar al resto.

---

## Parte 2: Añadir columnas NOT NULL en PostgreSQL y MySQL

### PostgreSQL 11+ (la más amigable)

PostgreSQL 11 introdujo la capacidad de añadir columnas NOT NULL con valor por defecto constante sin reescribir la tabla:

```sql
-- PostgreSQL 11+: añade instantáneamente sin lock
ALTER TABLE orders ADD COLUMN status VARCHAR(20) NOT NULL DEFAULT 'pending';
```

Si necesitas un valor por defecto dinámico o estás en PostgreSQL < 11:

```sql
-- Paso 1: Añade como nullable (sin lock)
ALTER TABLE orders ADD COLUMN status VARCHAR(20);

-- Paso 2: Backfill en batches
UPDATE orders SET status = 'pending' WHERE status IS NULL LIMIT 5000;
-- Repite hasta que no queden nulls

-- Paso 3: Añade la constraint NOT NULL (PostgreSQL tarda menos porque sabe que no hay nulls)
ALTER TABLE orders ALTER COLUMN status SET NOT NULL;

-- Paso 4: Añade el default para filas futuras
ALTER TABLE orders ALTER COLUMN status SET DEFAULT 'pending';
```

### MySQL / MariaDB

MySQL es más complejo. Usa `pt-online-schema-change` o `gh-ost` para tablas grandes:

```bash
# Usando gh-ost (GitHub's Online Schema Change tool)
gh-ost \
  --user="admin" \
  --password="password" \
  --host="db.example.com" \
  --database="myapp" \
  --table="orders" \
  --alter="ADD COLUMN status VARCHAR(20) NOT NULL DEFAULT 'pending'" \
  --execute
```

gh-ost crea una tabla fantasma, copia los datos en background, y hace el swap atómico al final con un lock mínimo (< 1 segundo).

---

## Parte 3: Añadir índices sin lock

### PostgreSQL

```sql
-- CONCURRENT: crea el índice sin bloquear escrituras (tarda más, pero no hay lock)
CREATE INDEX CONCURRENTLY idx_orders_user_id ON orders(user_id);
```

`CONCURRENTLY` permite que las escrituras continúen durante la creación del índice. La desventaja: si falla, deja un índice inválido que debes eliminar y volver a crear.

```sql
-- Verifica el estado del índice
SELECT indexname, indisvalid FROM pg_indexes
JOIN pg_class ON pg_class.relname = pg_indexes.indexname
JOIN pg_index ON pg_index.indexrelid = pg_class.oid
WHERE tablename = 'orders';

-- Elimina índice inválido
DROP INDEX CONCURRENTLY idx_orders_user_id;
```

### MySQL (para tablas > 1 millón de filas)

Usa `gh-ost` o `pt-online-schema-change` para añadir índices en tablas grandes.

```bash
pt-online-schema-change \
  --alter="ADD INDEX idx_user_id (user_id)" \
  --execute \
  D=myapp,t=orders
```

---

## Parte 4: Cambio de tipo de datos — la operación más compleja

Cambiar el tipo de una columna existente requiere una estrategia expand-contract completa:

**Caso: cambiar `price` de INT a DECIMAL(10,2)**

```sql
-- Fase 1: Añade nueva columna con el tipo correcto
ALTER TABLE products ADD COLUMN price_decimal DECIMAL(10,2);

-- Fase 2: Backfill (ejecutar en batches)
UPDATE products
SET price_decimal = price::DECIMAL / 100  -- si el int guardaba centavos
WHERE price_decimal IS NULL
LIMIT 5000;

-- Fase 3 (deployment siguiente): el código usa price_decimal, hace dual-write
-- Fase 4 (deployment posterior): elimina price, renombra price_decimal a price
-- (o crea la columna ya con el nombre final y usa el patrón de rename)
```

---

## Parte 5: Checklist de migración segura

Antes de ejecutar cualquier migración en producción:

**Preparación:**
- [ ] ¿Tienes un backup reciente (< 1 hora) verificado?
- [ ] ¿Has ejecutado la migración en staging con datos reales o representativos?
- [ ] ¿Conoces el tiempo estimado de ejecución? (Pruébalo en staging)
- [ ] ¿Tienes un plan de rollback documentado y probado?
- [ ] ¿Has avisado al equipo del riesgo y el timing?

**Durante la migración:**
- [ ] Monitoriza el lock wait time y slow query log en tiempo real
- [ ] Ten el rollback listo para ejecutar en < 60 segundos
- [ ] Verifica las métricas de la aplicación (error rate, latencia) durante y después

**Post-migración:**
- [ ] Verifica que los datos son correctos con queries de validación
- [ ] Comprueba que los índices existen y son válidos
- [ ] Revisa los logs de error de la aplicación en los 15 minutos posteriores

---

## Entregable

Descríbeme el cambio de esquema que necesitas hacer (tabla, operación, volumen aproximado de filas, base de datos y versión) y elaboraré:
1. Plan de migración paso a paso con las SQL exactas en orden de ejecución
2. Script de backfill seguro en batches para los datos existentes
3. Código de transición (dual-write/dual-read) si aplica
4. Checklist de rollback específico para tu operación
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 75,
                'use_case'          => 'Ejecutar migraciones de base de datos en producción sin downtime ni pérdida de datos',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño editorial digital',
                'description'       => 'Crea ebooks, informes, presentaciones y documentos PDF con aspecto profesional usando principios de diseño editorial aplicados al formato digital.',
                'prompt_content'    => <<<'PROMPT'
# Diseño editorial digital: documentos PDF e informes de aspecto profesional

Actúa como un diseñador editorial con experiencia en publicaciones corporativas, informes sectoriales, ebooks y materiales de marketing en formato PDF. Voy a compartirte el contexto del documento que necesito crear y necesito que me ayudes con la estructura, los principios de diseño y los detalles visuales que lo hacen parecer profesional.

## Por qué el diseño editorial importa para los documentos de tu empresa

Un informe o ebook mal diseñado transmite las mismas ideas que uno bien diseñado, pero el segundo tiene el doble de probabilidades de ser leído, compartido y citado. El diseño editorial no es decoración: es legibilidad, jerarquía y credibilidad.

---

## Parte 1: Los tipos de documento editorial digital y sus reglas

**Ebook / Guía práctica (lead magnet)**
- Objetivo: descarga masiva, lectura completa
- Extensión típica: 15-40 páginas
- Formato: A4 o US Letter, orientación vertical
- Tono visual: más dinámico, uso de color intenso, ilustraciones

**Informe de empresa / White paper**
- Objetivo: credibilidad, distribución a decisores
- Extensión típica: 10-25 páginas
- Formato: A4 o US Letter, orientación vertical
- Tono visual: más formal, conservador, datos tabulados

**Presentación / Deck (para imprimir o compartir como PDF)**
- Objetivo: presentación en reunión o lectura posterior
- Formato: 16:9 o 4:3, orientación horizontal
- Tono visual: muy visual, poco texto por slide, alto contraste

**Propuesta comercial**
- Objetivo: persuadir a un decisor de compra
- Extensión típica: 6-15 páginas
- Formato: A4 o personalizado, orientación vertical
- Tono visual: alineado con la identidad de marca del proveedor

---

## Parte 2: Anatomía de un documento bien diseñado

### La grid (rejilla de maquetación)

La grid es el sistema invisible que alinea todos los elementos del documento. Sin grid, el diseño parece desordenado aunque cada elemento individual sea bonito.

**Grid básica para documento A4:**
- Márgenes: superior 20mm, inferior 20mm, exterior 15mm, interior 20mm (o simétrico: 20mm todos)
- Columnas: 1 columna para texto corrido, 2 columnas para catálogos o guías, 3 columnas para revistas
- Medianil (espacio entre columnas): 5-8mm
- Línea de base (baseline grid): 12-14pt para texto a 10-11pt

**Por qué el margen interior mayor**: en documentos impresos con encuadernación, el margen interior más grande compensa el espacio que "come" el lomo. En PDFs digitales puedes usar márgenes simétricos.

### Jerarquía tipográfica

La jerarquía tipográfica guía el ojo del lector por el documento. Define al menos estos 4 niveles:

| Nivel | Uso | Tamaño orientativo | Peso |
|---|---|---|---|
| H1 — Título de capítulo | Inicio de cada sección principal | 28-36pt | Bold / Black |
| H2 — Subtítulo de sección | Subsecciones dentro del capítulo | 18-22pt | SemiBold |
| H3 — Título de párrafo | Énfasis dentro de una sección | 12-14pt | SemiBold |
| Body — Texto corrido | Párrafos principales | 10-11pt | Regular |
| Caption — Pie de foto/tabla | Descripción de elementos visuales | 8-9pt | Regular / Italic |

**Interlineado (leading)**: usa 1,4-1,6× el tamaño del cuerpo. Para texto a 11pt → interlineado de 15-17pt.

---

## Parte 3: Color en documentos corporativos

**La paleta de un documento editorial:**
- 1 color primario de marca (60 % del uso de color)
- 1 color de acento (30 %, para elementos destacados, gráficas, iconos)
- Grises (10 %, para fondos de sección, bordes, texto secundario)
- Negro puro solo para texto de alta densidad

**Reglas de contraste (accesibilidad WCAG AA):**
- Texto normal sobre fondo: ratio mínimo 4,5:1
- Texto grande (>18pt o >14pt bold) sobre fondo: ratio mínimo 3:1
- Herramienta gratuita para verificar contraste: contrast-ratio.com

**Uso del color para crear estructura visual:**
- Fondos de color en páginas de inicio de capítulo
- Franja de color en el header de cada página (color primario)
- Destacados y citas en color de acento sobre fondo claro
- Tablas: encabezado con color primario, filas alternas con gris muy claro (#F5F5F5)

---

## Parte 4: Elementos de diseño que elevan la calidad

**Citas destacadas (pull quotes):**
Extrae una frase impactante del texto y dale protagonismo visual. Aumenta la legibilidad al romper el muro de texto y sirve de ancla visual para el lector que escanea.

```
┌─────────────────────────────────────────┐
│ ▌ "El 73 % de las empresas que no      │
│   documentan sus procesos los pierden  │
│   cuando cambia el equipo."             │
│                                         │
│   — Nombre, Cargo, Empresa              │
└─────────────────────────────────────────┘
```

**Iconos y pictogramas:**
Usa iconos de una sola familia para coherencia visual. Recursos gratuitos: Phosphor Icons, Heroicons, Feather Icons. Úsalos en el mismo color de acento en toda la publicación.

**Infografías de datos simples:**
No necesitas Tableau o D3.js. Una tabla bien diseñada con colores de la paleta corporativa, bordes mínimos y encabezado en color primario comunica mejor que una gráfica compleja.

**Número de página y running header:**
El número de página en el margen exterior, el título del capítulo en el running header interior. Usa el mismo color y tamaño en todos. Es el detalle que separa un documento amateur de uno profesional.

---

## Parte 5: Herramientas y flujo de trabajo

**Por nivel de experiencia en diseño:**

| Perfil | Herramienta | Curva de aprendizaje |
|---|---|---|
| Sin experiencia de diseño | Canva Pro (plantillas editables) | Baja |
| Intermedio, equipo de marketing | Adobe InDesign | Alta pero estándar de la industria |
| Freelancer / diseñador | Affinity Publisher 2 (pago único) | Media |
| Equipo con múltiples colaboradores | Figma (con plugins de export a PDF) | Media |
| Google Workspace heavy | Google Slides con plantilla personalizada | Baja |

**Flujo de trabajo para un informe de 20 páginas:**

1. Recopila y organiza todo el contenido primero (textos finales, datos, fotos) — no diseñes sobre contenido provisional
2. Define la estructura del documento: tabla de contenidos, capítulos, elementos visuales por capítulo
3. Crea el sistema de estilos (plantilla) antes de maquetar: define los estilos de párrafo H1, H2, body, caption
4. Maqueta capítulo por capítulo respetando el sistema de estilos
5. Revisa la jerarquía visual a vista de pájaro (miniaturas de todas las páginas): ¿hay suficiente variedad visual? ¿Los capítulos se distinguen claramente?
6. Revisión de accesibilidad: contraste, tamaño mínimo de texto (≥ 9pt para print, ≥ 11pt para digital)
7. Export a PDF optimizado: PDF/A para archivado, PDF interactivo para web con hipervínculos activos

---

## Parte 6: La portada — los 3 segundos que deciden si se descarga

La portada de un ebook o informe tiene que responder en 3 segundos:
1. ¿De qué trata? (título claro, sin jerga)
2. ¿Para quién es? (imagen o ilustración que refleja el perfil del lector)
3. ¿Quién lo publica? (logo y nombre de empresa con presencia, pero no dominante)

**Los errores más frecuentes en portadas:**
- Título demasiado largo (más de 8-10 palabras)
- Foto de stock genérica sin relación con el contenido
- Logo de empresa demasiado grande que compite con el título
- Texto blanco sobre foto sin capa de opacidad oscura suficiente (contraste insuficiente)

---

## Entregable

Descríbeme el documento que quieres crear (tipo, extensión, audiencia objetivo, contenido disponible y herramienta que usas o que quieres usar) y elaboraré:
1. Estructura de páginas recomendada con elementos visuales por sección
2. Sistema de estilos tipográficos y paleta de color para tu documento
3. Plantilla de la portada con descripción detallada de los elementos
4. Checklist de revisión antes de exportar el PDF final
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar ebooks, informes y documentos PDF con aspecto editorial profesional',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Venta basada en datos',
                'description'       => 'Usa el CRM, el product analytics y los datos externos para priorizar accounts, personalizar outreach y cerrar más deals con menos esfuerzo.',
                'prompt_content'    => <<<'PROMPT'
# Venta basada en datos: prioriza, personaliza y cierra con inteligencia

Actúa como un director de ventas con experiencia en sales operations y uso de datos para optimizar el rendimiento comercial en equipos B2B SaaS y servicios. Voy a compartirte el contexto de mi proceso de ventas y los datos que tengo disponibles, y necesito que me ayudes a construir un sistema de ventas basado en datos que mejore la tasa de conversión y la eficiencia del equipo.

## La diferencia entre vender con datos y vender con intuición

El vendedor que trabaja solo con intuición:
- Dedica el mismo tiempo a todos los leads sin saber cuáles tienen mayor probabilidad de cerrar
- Personaliza el outreach con información superficial (nombre de la empresa, cargo)
- No sabe qué touchpoints llevaron al cierre de los deals ganados
- No detecta los early warning signs de un deal en riesgo

El vendedor que trabaja con datos:
- Prioriza los leads que muestran las señales de intención más fuertes
- Personaliza usando datos de comportamiento del prospecto (qué páginas visitó, qué funcionalidades probó en el trial, qué contenido consumió)
- Replica los patrones de los deals ganados en el pipeline actual
- Detecta cuándo un deal se enfría antes de que sea demasiado tarde para actuar

---

## Parte 1: Las fuentes de datos que ya tienes (y no estás usando)

**Datos del CRM:**
- Tiempo medio de cierre por industria, tamaño de empresa y fuente de lead
- Tasa de conversión por etapa del pipeline (análisis del funnel de ventas)
- Actividades registradas en los deals ganados vs. perdidos (qué secuencia de touchpoints llevan al cierre)
- Valor medio del deal por segmento

**Datos del producto (para SaaS con trial/freemium):**
- Tiempo hasta la primera acción de valor del usuario (señal de activación)
- Funcionalidades usadas durante el trial (predictor de conversión)
- Frecuencia de uso durante el trial (alta frecuencia = alta probabilidad de conversión)
- Usuarios invitados durante el trial (señal de trabajo en equipo = mayor LTV)

**Datos de comportamiento web:**
- Páginas de precios visitadas (señal de intención de compra)
- Contenido de comparativas o "alternativas a X" visitado (señal de evaluación activa)
- Formularios iniciados pero no completados (alta intención, fricción en el proceso)
- Visitas repetidas en 72 horas (señal de consideración activa)

**Datos externos:**
- Noticias de financiación reciente del prospecto (nuevo presupuesto disponible)
- Cambio de CEO o director de área (nueva persona, nueva oportunidad)
- Expansión internacional, nueva oficina, contratación masiva (señal de crecimiento = compran más herramientas)
- Fuentes: LinkedIn, Crunchbase, Google Alerts, Apollo, Bombora

---

## Parte 2: El Lead Scoring — prioriza antes de actuar

El lead scoring asigna puntos a cada lead en función de las señales de intención y ajuste con tu ICP (Ideal Customer Profile). Los leads con mayor puntuación reciben atención prioritaria.

**Modelo de lead scoring en dos dimensiones:**

**Dimensión 1 — Fit (ajuste con el ICP):**

| Criterio | Puntos |
|---|---|
| Industria objetivo | +20 |
| Tamaño de empresa (rango ideal) | +20 |
| Cargo con poder de decisión o influencia | +15 |
| Ubicación geográfica objetivo | +10 |
| Tecnologías complementarias en su stack | +10 |

**Dimensión 2 — Intent (señales de intención):**

| Señal | Puntos |
|---|---|
| Visitó la página de precios | +25 |
| Inició un trial o solicitó demo | +40 |
| Abrió 3+ emails de la secuencia | +15 |
| Usó el trial más de 3 días | +30 |
| Invitó a otros usuarios al trial | +20 |
| Financiación reciente | +15 |
| Cambio de decisor relevante | +10 |
| Inactividad > 14 días en el trial | -20 |

**Umbrales de acción:**
- Score > 80: contacto prioritario, secuencia de alto esfuerzo (llamada + email personalizado)
- Score 50-80: secuencia estándar, personalización media
- Score < 50: nutrición automatizada hasta que suba el score

---

## Parte 3: Personalización con datos — más allá del nombre

La verdadera personalización basada en datos usa el comportamiento del prospecto, no solo su nombre y cargo:

**Personalización de nivel 1 (datos básicos):**
```
Hola [Nombre], vi que trabajas en [Empresa] como [Cargo]...
```
Esto lo hace todo el mundo. No diferencia.

**Personalización de nivel 2 (contexto de la empresa):**
```
Hola [Nombre], vi que [Empresa] acaba de expandirse a [País] — felicidades.
En equipos que crecen internacionalmente, solemos ver el problema de [problema relevante].
```
Mejor, pero requiere investigación manual.

**Personalización de nivel 3 (datos de comportamiento):**
```
Hola [Nombre],

Vi que [Nombre] estuvo explorando nuestra sección de [funcionalidad X] durante el trial.
Muchos equipos en [industria] la usan para [caso de uso concreto] y consiguen [resultado].

¿Ese es el caso de uso principal que estabas evaluando?
```
Este nivel solo es posible con datos de product analytics conectados al CRM (Segment + HubSpot/Salesforce).

---

## Parte 4: Análisis de win/loss — aprende de lo que ya pasó

El análisis de win/loss estudia los deals cerrados (ganados y perdidos) para identificar patrones replicables o evitables.

**Cómo hacer un análisis de win/loss:**

1. **Exporta los últimos 6-12 meses de deals cerrados** del CRM con estos campos: empresa, industria, tamaño, fuente, duración del ciclo, valor, motivo de cierre (ganado) o pérdida (perdido), número de touchpoints, stakeholders involucrados.

2. **Analiza los deals ganados:**
   - ¿Qué tienen en común? (industria, tamaño, fuente de lead, first touchpoint)
   - ¿Cuántos touchpoints de media antes del cierre?
   - ¿Qué etapa del pipeline tuvo mayor duración?
   - ¿Hubo un touchpoint específico que aceleró el cierre?

3. **Analiza los deals perdidos:**
   - ¿Por qué razón se perdieron más frecuentemente? (precio, competencia, timing, no decidieron)
   - ¿En qué etapa del pipeline se perdieron?
   - ¿Hay señales tempranas que predigan el churn del deal?

4. **Construye el Ideal Deal Profile (IDP):**
```
El deal que cerramos con mayor probabilidad tiene estas características:
- Industria: [X, Y, Z]
- Tamaño: [rango de empleados o revenue]
- Fuente: [canal de origen más frecuente]
- Duración media: [X días]
- Touchpoints hasta el cierre: [N]
- Stakeholders involucrados: [roles]
- First touchpoint que genera mayor conversión: [acción]
```

---

## Parte 5: Dashboard de ventas para el equipo

**Métricas del dashboard semanal del equipo comercial:**

| Métrica | Descripción | Frecuencia de revisión |
|---|---|---|
| Pipeline por etapa | Valor y número de deals en cada stage | Diaria |
| Leads nuevos cualificados | MQL o SQL generados en la semana | Semanal |
| Actividad de outreach | Emails enviados, llamadas, meetings | Diaria |
| Tasa de conversión por etapa | % de deals que avanzan de un stage al siguiente | Semanal |
| Forecast de cierre del mes | Deals en etapas avanzadas × probabilidad | Semanal |
| Win rate | % de oportunidades cerradas en positivo | Mensual |
| Average deal size | Ticket medio de los deals cerrados | Mensual |
| Sales cycle length | Tiempo medio desde MQL hasta cierre | Mensual |

---

## Entregable

Cuéntame qué datos tienes disponibles (CRM, product analytics, datos externos), cuál es tu ICP y cuáles son los principales cuellos de botella en tu pipeline, y elaboraré:
1. Modelo de lead scoring adaptado a tu proceso
2. Análisis de los datos que tienes para identificar patrones de win/loss
3. Plantilla de personalización de outreach con datos de comportamiento
4. Dashboard de ventas con las métricas prioritarias para tu equipo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Usar datos del CRM, el producto y fuentes externas para vender de forma más eficiente',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Internacionalización del producto',
                'description'       => 'Adapta el producto a nuevos mercados: localización técnica, culturalización de la experiencia y go-to-market por país.',
                'prompt_content'    => <<<'PROMPT'
# Internacionalización del producto: de un mercado a muchos sin romperte

Actúa como un Product Manager con experiencia liderando expansiones internacionales de productos digitales, desde la arquitectura técnica de i18n hasta el go-to-market en nuevos países. Voy a compartirte el contexto de mi producto y los mercados a los que quiero expandirme, y necesito una guía completa que cubra tanto la parte técnica como la estratégica.

## La diferencia entre localización y culturalización

**Localización (l10n)**: adaptar el contenido al idioma y formato local (traducción, monedas, formatos de fecha, unidades de medida).

**Internacionalización (i18n)**: preparar el código para soportar múltiples localizaciones sin necesidad de reescribirlo.

**Culturalización**: adaptar no solo el idioma sino los conceptos, referencias culturales, metáforas visuales y experiencias de usuario a las expectativas locales. Una interfaz perfectamente traducida al japonés puede ser inutilizable si mantiene los patrones de diseño americanos.

El error más frecuente es hacer localización sin culturalización y preguntarse por qué el producto no convierte en el nuevo mercado.

---

## Parte 1: Preparación técnica (i18n) — lo que debes resolver antes de entrar en un nuevo mercado

**Arquitectura de internacionalización:**

1. **Externaliza todas las cadenas de texto**: ningún texto hardcodeado en el código. Todo a través de un sistema de gestión de traducciones (i18n files, gettext, ICU message format).

2. **Formato de fechas y números**: usa siempre las APIs nativas del lenguaje para formatear, nunca concatenes strings.

```javascript
// MAL: "El pedido llegará el " + date.getDay() + "/" + date.getMonth()
// BIEN:
const formatter = new Intl.DateTimeFormat('es-ES', { dateStyle: 'long' });
formatter.format(date); // "25 de agosto de 2026"
```

3. **Plurales y géneros**: los idiomas tienen reglas de pluralización distintas. En ruso hay 4 formas de plural. En árabe, 6. Usa ICU message format para manejarlos:

```
{count, plural,
  =0 {No tienes mensajes}
  one {Tienes 1 mensaje}
  other {Tienes # mensajes}
}
```

4. **Dirección del texto (RTL)**: árabe y hebreo se escriben de derecha a izquierda. Preparar el CSS con `dir="rtl"` y usar propiedades lógicas CSS (`margin-inline-start` en lugar de `margin-left`).

5. **Monedas y precios**: nunca almacenes precios en formato de moneda. Almacena siempre en la unidad menor (céntimos, centavos) como entero. Formatea para visualización con Intl.NumberFormat.

6. **Zonas horarias**: almacena todas las fechas en UTC. Muéstralas en la zona horaria del usuario usando su configuración regional.

7. **Longitud variable de texto**: las traducciones al alemán son un 30-40 % más largas que el inglés. Al chino pueden ser un 50 % más cortas. Diseña la UI con texto variable, sin widths fijos para labels.

---

## Parte 2: El proceso de localización de contenido

**Herramientas de gestión de traducciones:**

| Herramienta | Mejor para | Precio |
|---|---|---|
| Phrase (Memsource) | Equipos grandes con muchos idiomas | Desde 25 €/mes |
| Lokalise | SaaS de crecimiento rápido, buenas integraciones | Desde 120 €/mes |
| Crowdin | Open source y proyectos con comunidad | Freemium |
| Weblate | Self-hosted, open source | Gratis |
| Simple JSON files | MVP de 1-2 idiomas | Gratis |

**Proceso de localización por nivel de madurez:**

- **Nivel 1 (MVP de expansión)**: traducción manual con Google Translate + revisión nativa. Adecuado para validar si hay demanda antes de invertir en localización profesional.
- **Nivel 2 (traction)**: traductores profesionales + herramienta de TM (Translation Memory) para consistencia y ahorro de costes en traducciones futuras.
- **Nivel 3 (escala)**: Machine Translation (DeepL o GPT-4) + post-editing por traductores nativos. Hasta 60 % de ahorro en costes vs. traducción manual.

---

## Parte 3: Culturalización por mercado

**Lo que debes investigar de cada mercado antes de adaptar el producto:**

1. **Expectativas de UX**: ¿los usuarios esperan un producto minimalista (mercados nórdicos) o denso de información (Japón, Corea)? ¿Prefieren navegación por menús o por búsqueda?

2. **Confianza y credibilidad**: ¿qué señales de confianza funcionan en ese mercado? En Alemania, los certificados de seguridad y los datos de empresa son críticos. En España, el testimonio de cliente. En Japón, la pertenencia a asociaciones del sector.

3. **Formas de pago locales**: muchos mercados tienen métodos de pago dominantes distintos a Visa/Mastercard.
   - Alemania: SEPA y Klarna dominan
   - Países Bajos: iDEAL es el pago preferido
   - Brasil: Boleto Bancário y Pix
   - México: OXXO Pay (efectivo en puntos de venta)
   Sin soporte del método de pago local, la tasa de conversión se desploma.

4. **Regulación y compliance**: RGPD (Europa), LGPD (Brasil), PDPA (Thailand), CCPA (California). Cada mercado tiene sus propias obligaciones de privacidad y protección de datos.

5. **Soporte al cliente**: ¿en qué idioma y en qué horario esperan soporte? ¿Por qué canal?

---

## Parte 4: Go-to-market por país

Antes de lanzar en un nuevo mercado, responde estas preguntas:

**Research de mercado:**
- ¿Existe demanda del problema que resolvemos? (búsquedas en Google, competidores locales)
- ¿Qué competidores locales existen y qué los diferencia de ti?
- ¿Cuál es el canal de adquisición que funciona mejor en ese mercado?
- ¿Hay diferencias regulatorias que afecten a tu modelo de negocio?

**Estrategia de entrada por tipo de mercado:**

| Tipo de mercado | Estrategia recomendada | Inversión inicial |
|---|---|---|
| Mercado anglófono (UK, AU, CA) | Entrada directa con el producto en inglés | Baja |
| Europa occidental (DE, FR, NL) | Localización completa + presencia local o partner | Media |
| LATAM (MX, CO, AR) | Localización al español regional + soporte en horario local | Media |
| Brasil | Portugués brasileño + métodos de pago locales | Media-alta |
| Japón, Corea, China | Culturalización profunda + socio local | Alta |

**El MVP de expansión:**

Antes de invertir en localización completa, valida con un MVP de expansión:
1. Traduce solo las páginas de aterrizaje y el onboarding en el idioma local
2. Añade el método de pago local
3. Lanza tráfico paid (Google Ads en el idioma local) para validar conversión
4. Si la conversión es comparable a tu mercado principal, invierte en localización completa

---

## Parte 5: Métricas de la expansión internacional

| Métrica | Qué mide | Cuándo preocuparse |
|---|---|---|
| Conversion rate por país | Si el producto convierte igual en el nuevo mercado | < 50 % vs. mercado base |
| Trial-to-paid por país | Si el trial convierte a pago en el nuevo mercado | < 50 % vs. mercado base |
| Churn por país | Si los usuarios del nuevo mercado retienen igual | > 1,5× vs. mercado base |
| CSAT por país | Si la experiencia local es satisfactoria | < 4,0/5 sostenido |
| Time to first value por país | Si los usuarios locales se activan igual | > 50 % más tiempo vs. base |

---

## Entregable

Dime en qué mercados quieres entrar, cuál es tu producto y en qué estadio está la internacionalización técnica, y elaboraré:
1. Checklist de preparación técnica i18n para tu stack
2. Plan de localización por mercado con priorización
3. Consideraciones de culturalización específicas para los mercados que has elegido
4. Plan de go-to-market MVP para el primer mercado prioritario
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 70,
                'use_case'          => 'Adaptar el producto a nuevos mercados: localización, culturalización y go-to-market',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Programa de mentoring interno',
                'description'       => 'Implementa un sistema de mentoring que desarrolla talento, acelera el crecimiento profesional y retiene a los mejores empleados.',
                'prompt_content'    => <<<'PROMPT'
# Programa de mentoring interno: desarrolla talento y retiene a los mejores

Actúa como una consultora de RRHH y desarrollo organizacional con experiencia diseñando e implementando programas de mentoring en empresas de 50 a 500 personas. Voy a compartirte el contexto de mi empresa y los objetivos del programa, y necesito un diseño completo que sea práctico, escalable y que no dependa de la buena voluntad espontánea de los participantes.

## Por qué los programas de mentoring fracasan

La mayoría de programas de mentoring mueren en los primeros 6 meses porque:
1. Se asignan parejas de mentoring sin criterios claros de compatibilidad
2. No hay estructura: las sesiones se convierten en conversaciones sin dirección
3. Los mentores no reciben formación ni apoyo para desempeñar el rol
4. No hay seguimiento ni responsabilidad de ninguna de las partes
5. El programa se lanza con mucho ruido y se abandona sin explicación

Un programa bien diseñado tiene estructura, reconocimiento y métricas desde el primer día.

---

## Parte 1: Define el objetivo y el modelo del programa

Antes de diseñar el proceso, aclara qué quieres conseguir:

**Objetivos posibles (elige 1-2 prioritarios):**
- Acelerar el desarrollo profesional de empleados de alto potencial (HiPo)
- Retener talento en riesgo de abandonar la empresa
- Integrar más rápido a empleados nuevos (mentoring de onboarding)
- Transferir conocimiento de empleados senior antes de su salida
- Promover la diversidad e inclusión (mentoring para grupos subrepresentados)
- Desarrollar las habilidades de liderazgo de los managers de primera línea

**Modelos de mentoring:**

| Modelo | Descripción | Mejor para |
|---|---|---|
| 1:1 tradicional | Un mentor y un mentee durante 6-12 meses | Desarrollo individual de HiPo |
| Peer mentoring | Pares del mismo nivel que se apoyan mutuamente | Onboarding acelerado, equipos distribuidos |
| Group mentoring | Un mentor con 4-6 mentees | Escalabilidad, transferencia de conocimiento |
| Reverse mentoring | El junior mentoriza al senior (ej. en tecnología o tendencias) | Digitalización, diversidad generacional |
| Speed mentoring | Sesiones cortas con múltiples mentores en formato rotativo | Networking interno, exploración de carreras |

---

## Parte 2: Reclutamiento y selección de participantes

**Selección de mentores:**

Criterios de un buen mentor interno:
- Mínimo 3-5 años en la empresa o industria con experiencia relevante
- Capacidad y disposición para dar feedback honesto (no solo apoyo positivo)
- Disponibilidad real: mínimo 2 horas al mes para el mentee
- Motivación genuina (no asignados por obligación)
- Competencia en el área de desarrollo del mentee (no necesariamente su mismo rol)

**Selección de mentees:**

Criterios de selección:
- Disposición activa (voluntario, no asignado)
- Tiene un objetivo de desarrollo claro (no "quiero crecer en general")
- Disponible para las sesiones y comprometido con las acciones entre sesiones
- Recomendación del manager directo como señal de potencial

**Formulario de aplicación del mentee:**
```
Nombre y rol actual:

¿Por qué quieres participar en el programa de mentoring?

¿Cuáles son tus 2-3 objetivos de desarrollo profesional para los próximos 12 meses?

¿En qué área o competencia quieres enfocarte con tu mentor?
[ ] Liderazgo y gestión de equipos
[ ] Habilidades técnicas (especifica cuál)
[ ] Comunicación y presencia ejecutiva
[ ] Gestión de proyectos
[ ] Desarrollo de negocio / relación con clientes
[ ] Carrera y transición de rol

¿Hay algún perfil específico de mentor que crees que te beneficiaría más?

Compromiso de tiempo: el programa requiere una sesión mensual de 60 min y dedicar 2-3 horas entre sesiones a las acciones acordadas. ¿Tienes capacidad para eso?
```

---

## Parte 3: El matching — cómo asignar parejas

El matching mal hecho arruina el programa. Evita el matching aleatorio.

**Criterios de matching (en orden de importancia):**

1. **Objetivo de desarrollo del mentee vs. experiencia del mentor**: el mentor debe haber vivido o desarrollado lo que el mentee quiere aprender, no necesariamente en el mismo rol
2. **Diferentes áreas o equipos**: la perspectiva externa aporta más que la del manager directo
3. **Compatibilidad de estilo de trabajo y comunicación**: introvertido con extrovertido funciona si hay voluntad; estilos muy rígidos enfrentados generan fricción
4. **Sin relación directa de reporting**: el mentor no debe ser el manager directo del mentee (conflicto de intereses en la evaluación de rendimiento)

**Proceso de matching en 3 pasos:**
1. Recoge la información de todos los mentores y mentees con el formulario
2. El coordinador del programa propone 2-3 opciones de mentor por mentee
3. El mentee elige su preferencia y el mentor confirma (o propone una alternativa)

---

## Parte 4: La estructura de las sesiones

La falta de estructura es la causa de muerte número 1 de las relaciones de mentoring. Estas herramientas dan dirección sin quitar espontaneidad:

**El Plan de Desarrollo Individual (PDI):**
En la primera sesión, el mentee elabora su PDI con el apoyo del mentor:

```
PDI — [Nombre del mentee]

Periodo: [Mes] — [Mes+6 meses]

Objetivo principal de desarrollo:
[Una frase concreta: "Desarrollar las habilidades de comunicación ejecutiva para presentar con confianza ante el comité de dirección"]

Competencias a desarrollar:
1. [Competencia 1] — estado actual: [1-5] / estado objetivo: [1-5]
2. [Competencia 2] — estado actual: [1-5] / estado objetivo: [1-5]

Acciones comprometidas:
- [Acción 1]: [Responsable] — [Fecha]
- [Acción 2]: [Responsable] — [Fecha]

Cómo mediremos el progreso:
[Criterio observable de que hemos avanzado]

Sesión de revisión del PDI: [Fecha — a los 3 meses]
```

**Agenda de la sesión mensual (60 minutos):**
- 10 min: check-in — cómo está el mentee, qué ha pasado desde la última sesión
- 20 min: revisión de las acciones comprometidas en la sesión anterior
- 20 min: tema de la sesión (preparado por el mentee)
- 10 min: acciones para la próxima sesión y compromisos

**La regla del tema**: el mentee siempre llega con el tema propuesto. Si el mentee llega sin tema, la sesión pierde profundidad y eficacia.

---

## Parte 5: Formación de mentores

Los mentores no saben necesariamente cómo serlo solo por tener experiencia. Un taller de 2-3 horas antes del inicio del programa marca la diferencia.

**Contenido del taller de formación de mentores:**

1. **La diferencia entre mentoring y management**: el mentor no da órdenes ni evalúa; hace preguntas y comparte experiencia
2. **El modelo GROW para estructurar conversaciones de coaching**:
   - **G**oal: ¿qué quieres conseguir en esta conversación?
   - **R**eality: ¿cuál es la situación actual?
   - **O**ptions: ¿qué opciones tienes?
   - **W**ill / Way forward: ¿qué vas a hacer?
3. **Cómo dar feedback de desarrollo** (sin evaluar, sin criticar, observando)
4. **Confidencialidad**: qué se puede compartir con la empresa y qué no
5. **Cómo manejar situaciones difíciles**: mentee que no cumple compromisos, temas personales complicados, petición de favoritismo

---

## Parte 6: Métricas y evaluación del programa

| KPI | Cómo medirlo | Objetivo |
|---|---|---|
| Tasa de finalización | % de parejas que completan el programa | > 80 % |
| Satisfacción del mentee | Encuesta al final del programa (1-5) | > 4,0/5 |
| Satisfacción del mentor | Encuesta al final del programa (1-5) | > 4,0/5 |
| Objetivos del PDI alcanzados | Autoevaluación del mentee al finalizar | > 70 % de objetivos |
| Retención de mentees | % de mentees en la empresa a los 12 meses | Comparar con el resto de empleados |
| Promociones de mentees | % de mentees que reciben una promoción en 12-18 meses | Comparar con el resto |

---

## Entregable

Cuéntame el tamaño de tu empresa, el objetivo del programa y si ya tienes experiencia con programas de mentoring anteriores, y elaboraré:
1. Diseño completo del programa adaptado a tu empresa (modelo, duración, proceso)
2. Formularios de aplicación para mentores y mentees
3. Guía del primer taller de formación de mentores (contenido y dinámica)
4. Plan de comunicación de lanzamiento interno del programa
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar e implementar un programa de mentoring interno que desarrolla y retiene talento',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Ayudas y subvenciones para empresas en España',
                'description'       => 'Navega el ecosistema de ayudas públicas para empresas en España: CDTI, Kit Digital, ENISA, ICO, fondos europeos y cómo solicitarlos.',
                'prompt_content'    => <<<'PROMPT'
# Ayudas y subvenciones para empresas en España: cómo encontrarlas y conseguirlas

Actúa como un consultor de financiación pública con experiencia ayudando a startups y PYMES españolas a identificar, solicitar y gestionar subvenciones, ayudas, préstamos participativos y financiación europea. Voy a compartirte el contexto de mi empresa y necesito que me ayudes a identificar las ayudas más relevantes y a diseñar una estrategia de captación de financiación pública.

## Por qué las empresas no solicitan las ayudas que merecen

Los tres obstáculos más frecuentes:
1. **Desconocimiento**: la mayoría de empresarios no saben qué ayudas existen o creen que "son solo para grandes empresas"
2. **Burocracia percibida**: el proceso parece complicado pero con la guía correcta es manejable
3. **Timing**: muchas ayudas tienen convocatorias anuales cerradas y hay que anticiparse

La realidad: una PYME o startup tecnológica en España puede acceder a 50.000 - 500.000 € de financiación pública entre subvenciones, préstamos participativos y créditos blandos en sus primeros 3-5 años. Muy pocas lo hacen.

---

## Parte 1: El mapa de ayudas públicas para empresas en España

### CDTI (Centro para el Desarrollo Tecnológico y la Industrial)

El CDTI es la principal herramienta de financiación de la innovación empresarial en España.

**Líneas principales:**

| Instrumento | Qué financia | Importe | Tipo |
|---|---|---|---|
| Proyectos de I+D | Proyectos de investigación industrial y desarrollo experimental | 175.000 € - 15M € | Préstamo blando (sin interés, 3-5 años carencia) |
| Neotec | Empresas de base tecnológica < 6 años | Hasta 250.000 € | Subvención + préstamo |
| Proyectos en Cooperación | I+D con socios europeos (Eurostars, Celtic Next...) | Variable | Subvención parcial |
| Activa Startups | Aceleración e internacionalización | Variable | Apoyo no financiero + conexiones |

**Cuándo solicitar CDTI:**
- Tienes un proyecto de desarrollo tecnológico con componente de innovación
- El proyecto tiene un presupuesto mínimo de 175.000 € (para líneas de préstamo)
- La empresa lleva al menos 1 año funcionando (para las líneas generales)

### ENISA (Empresa Nacional de Innovación)

ENISA concede préstamos participativos a startups y empresas innovadoras con criterios favorables.

**Líneas de ENISA:**

| Línea | Target | Importe | Condición clave |
|---|---|---|---|
| Jóvenes Emprendedores | Empresas < 2 años con promotores < 40 años | 25.000 - 75.000 € | Ratio de recursos propios ≥ 1 |
| Emprendedores | Empresas < 2 años | 25.000 - 300.000 € | Ratio de recursos propios ≥ 1 |
| Crecimiento | Empresas rentables en expansión | 25.000 - 1,5M € | EBITDA positivo |
| Agenda Digital | Digitalización y economía digital | 25.000 - 500.000 € | Sector digital |

**Ventajas del préstamo participativo ENISA:**
- El tipo de interés variable incluye un componente ligado a los resultados de la empresa (no te ahoga si hay problemas)
- No requiere garantías reales
- Cuenta como fondos propios a efectos de endeudamiento bancario

### Kit Digital

Subvenciones para la digitalización de pymes y autónomos. Gestionado por Red.es.

| Segmento | Empleados | Importe máximo |
|---|---|---|
| Segmento I | 10-49 empleados | 12.000 € |
| Segmento II | 3-9 empleados | 6.000 € |
| Segmento III | 0-2 empleados y autónomos | 2.000 € |

**Categorías de soluciones financiables:** sitio web y presencia básica, comercio electrónico, gestión de redes sociales, gestión de clientes (CRM), BI y analítica, gestión de procesos (ERP), factura electrónica, ciberseguridad, comunicaciones seguras, presencia avanzada en internet.

### ICO (Instituto de Crédito Oficial)

El ICO ofrece líneas de crédito a través de la banca privada con tipos de interés más bajos que el mercado:

- **Línea ICO Empresas y Emprendedores**: financiación de inversiones y circulante
- **Línea ICO Sostenible**: para proyectos de inversión en eficiencia energética y renovables
- **Línea ICO Garantía SGR**: con aval de una Sociedad de Garantía Recíproca para empresas sin historial crediticio suficiente

---

## Parte 2: Fondos europeos directamente accesibles para empresas

**Horizonte Europa (2021-2027):**
El mayor programa de I+D de la UE con 95.500 millones €. Accesible directamente por empresas a través de consorcios europeos.

Instrumentos más relevantes para empresas:
- **EIC Accelerator**: para startups y pymes innovadoras con potencial de ruptura. Hasta 2,5M € de subvención + 15M € de inversión de capital. Alta competitividad.
- **EIC Pathfinder**: investigación exploratoria de alto riesgo y alto impacto. Hasta 4M €.
- **EEN (Enterprise Europe Network)**: facilita la búsqueda de socios europeos para proyectos colaborativos

**FEDER (Fondos Europeos de Desarrollo Regional):**
Gestionados por las Comunidades Autónomas. Cofinancian innovación, digitalización y competitividad empresarial. Cada CCAA tiene su convocatoria específica.

---

## Parte 3: Ayudas autonómicas y locales

Cada Comunidad Autónoma tiene su propia agencia de desarrollo empresarial con ayudas específicas:

| CCAA | Organismo | URL |
|---|---|---|
| Madrid | Comunidad de Madrid — Emprendimiento | comunidad.madrid |
| Cataluña | ACCIÓ | accio.gencat.cat |
| País Vasco | SPRI | spri.eus |
| Andalucía | Agencia IDEA | agenciaidea.es |
| Valencia | IVACE | ivace.es |
| Galicia | IGAPE | igape.es |

**Tip**: las ayudas autonómicas suelen tener menor competencia y mayor tasa de éxito que las estatales o europeas. Empieza siempre por explorar tu comunidad autónoma.

---

## Parte 4: El proceso de solicitud — de la idea a la resolución

**Fase 1 — Identificación (1-2 semanas):**
- Usa el buscador de ayudas de BDNS (Base de Datos Nacional de Subvenciones): infosubvenciones.meh.es
- Suscríbete a las alertas de las agencias relevantes para tu sector y CCAA
- Consulta con una consultora especializada si el importe justifica la inversión

**Fase 2 — Preparación de la solicitud (2-8 semanas según la complejidad):**
- Documentación empresarial: escrituras, NIF, últimas cuentas depositadas, certificado de estar al corriente con Hacienda y SS
- Memoria del proyecto (el documento más importante): describe el proyecto, la innovación, el equipo, el mercado y el impacto esperado
- Plan de negocio o business plan (para líneas de inversión y ENISA)
- Presupuesto detallado de gastos elegibles

**Fase 3 — Presentación y seguimiento:**
- La mayoría de solicitudes se presentan telemáticamente con certificado digital
- Guarda copia de todo lo enviado con el número de registro
- Mantén vigilado el estado de la solicitud (puede haber requerimientos de subsanación)

**Fase 4 — Justificación:**
Si la ayuda es concedida, tendrás que justificar el gasto con facturas, contratos y documentación de la ejecución del proyecto. La justificación mal hecha puede suponer la devolución de la ayuda.

---

## Parte 5: Errores frecuentes y cómo evitarlos

| Error | Consecuencia | Cómo evitarlo |
|---|---|---|
| Iniciar el proyecto antes de la resolución | El gasto previo no es elegible | No comiences los gastos hasta recibir la resolución favorable |
| Memorias genéricas y no adaptadas | Puntuación baja, solicitud denegada | Adapta la memoria a los criterios de evaluación publicados en la convocatoria |
| No verificar que la empresa cumple los requisitos | Solicitud inadmisible | Lee los requisitos de elegibilidad antes de invertir tiempo |
| Presupuesto poco detallado | Requerimiento de subsanación o reducción del importe concedido | Desglosa cada partida con referencia a proveedor y cotización |
| No tener al corriente las obligaciones fiscales y de SS | Exclusión automática | Verifica el estado antes de solicitar |

---

## Entregable

Cuéntame el sector de tu empresa, los años de antigüedad, el número de empleados, los proyectos de innovación o digitalización que tienes en marcha y tu situación financiera actual, y elaboraré:
1. Mapa de ayudas más relevantes para tu perfil con estimación de importe
2. Calendario de convocatorias del próximo semestre
3. Guía de preparación de la memoria para la ayuda prioritaria
4. Checklist de documentación necesaria para las primeras solicitudes
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Identificar y solicitar subvenciones y ayudas públicas para empresas en España',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratación de empleados en el extranjero',
                'description'       => 'Compliance internacional de RRHH para empresas españolas con equipo remoto global: opciones legales, costes y riesgos por país.',
                'prompt_content'    => <<<'PROMPT'
# Contratación de empleados en el extranjero: compliance para empresas españolas con equipo global

Actúa como un abogado especialista en derecho laboral internacional y expansion global con experiencia asesorando a startups y empresas españolas que contratan empleados en múltiples países. Voy a compartirte el contexto de mi empresa y el país donde quiero contratar, y necesito entender las opciones legales, los costes y los riesgos de compliance.

## El problema que ignoran la mayoría de empresas

Muchas empresas españolas contratan a personas en el extranjero como si fueran freelancers, pagando por transferencia bancaria sin ninguna estructura legal. Esto genera:
- **Riesgo de permanent establishment (EP)**: en muchos países, tener un empleado trabajando de forma habitual puede crear un establecimiento permanente que genera obligaciones fiscales locales para toda la empresa
- **Reclasificación del contratista como empleado**: en países como EE.UU., Francia o Alemania, las autoridades pueden reclasificar al "freelance" como empleado con todos los derechos y costes asociados (incluyendo retroactivos de hasta varios años)
- **Sin protección para el trabajador ni para la empresa**: en caso de conflicto, no hay marco legal claro

---

## Parte 1: Las 4 opciones para contratar en el extranjero

### Opción 1 — Employer of Record (EOR)

Un EOR es una empresa local que actúa como empleador formal del trabajador en ese país, mientras el empleado trabaja de facto para tu empresa.

**Cómo funciona:**
- La empresa EOR contrata legalmente al empleado según la ley local
- Gestiona la nómina, los impuestos locales, las contribuciones a la seguridad social y el compliance
- Tu empresa paga al EOR una tarifa mensual = salario del empleado + costes locales + margen del EOR (10-20 %)
- Tú diriges el trabajo del día a día del empleado

**Ventajas:**
- Entrada rápida (operativo en 1-2 semanas)
- Sin necesidad de constituir entidad local
- Compliance garantizado por el EOR
- Ideal para 1-5 empleados en un mismo país

**Desventajas:**
- Coste adicional (el margen del EOR)
- Menor control sobre los términos del contrato
- No es sostenible a largo plazo para volúmenes altos (> 10 empleados en el mismo país)

**Proveedores de EOR globales:**
- Deel: cobertura en 150+ países, interfaz moderna, desde 499 $/mes por empleado
- Remote.com: énfasis en compliance y equidad de beneficios, desde 599 $/mes
- Rippling: mejor si ya usas su plataforma de RRHH en España
- Papaya Global: enfocado en enterprise

### Opción 2 — Subsidiaria local (filial)

Constituir una entidad legal en el país objetivo donde el empleado pueda estar contratado directamente.

**Cuándo tiene sentido:**
- Más de 5-10 empleados en el mismo país
- Presencia comercial local (no solo equipo técnico remoto)
- Plazo de permanencia largo (> 2-3 años)
- El país es estratégico para el negocio

**Coste y tiempo de constitución:**

| País | Tiempo estimado | Coste aproximado |
|---|---|---|
| Reino Unido | 1-2 semanas | 1.000-3.000 € |
| Alemania (GmbH) | 4-8 semanas | 5.000-15.000 € |
| EE.UU. (Delaware LLC) | 1-2 semanas | 500-2.000 $ |
| México (S.A. de C.V.) | 4-8 semanas | 2.000-5.000 € |
| Brasil | 3-6 meses | 5.000-20.000 € |

### Opción 3 — Contratista / Freelance (con precaución)

Contratar como contratista independiente es la opción más simple, pero la más arriesgada si no se gestiona correctamente.

**Cuándo es válido legalmente:**
- El trabajo es por proyecto, no continuo
- El contratista trabaja para múltiples clientes
- El contratista usa sus propios medios de trabajo
- No hay control sobre el horario ni la forma de ejecutar el trabajo
- No existe exclusividad

**Tests de reclasificación por país:**

| País | Test / Criterio principal | Penalización por reclasificación |
|---|---|---|
| EE.UU. | ABC test (California) o Common law control test | Hasta 3 años de cotizaciones + multas |
| Francia | Présomption de salariat (presunción de asalariado) | Contribuciones retroactivas + multas |
| Alemania | Status-Feststellungsverfahren (determinación de estatus) | Cotizaciones retroactivas + multa |
| UK | IR35 (Off-payroll working rules) | PAYE retroactivo |
| España | Falso autónomo (art. 8.1 ET) | Regularización del régimen y multa |

### Opción 4 — Contrato de prestación de servicios con empresa local

El trabajador crea su propia empresa (SRL, LLC, Limited...) y contrata con tu empresa a través de un contrato B2B. Reduce el riesgo de reclasificación si se estructura correctamente, pero no lo elimina.

---

## Parte 2: Aspectos de compliance por tipo de país

### Europa (Unión Europea)

**Ventajas**: libre circulación de trabajadores entre estados miembros de la UE. Un empleado español puede trabajar para tu empresa española sin necesitar permiso de trabajo en otro estado miembro.

**Desafíos**:
- Cada país tiene su propia legislación laboral (vacaciones, despido, preaviso, convenios colectivos)
- La directiva sobre trabajadores desplazados (96/71/CE) exige aplicar las condiciones laborales del país donde se trabaja físicamente si el desplazamiento supera 12 meses
- RGPD aplica en toda la UE, pero las autoridades de control son nacionales y pueden tener interpretaciones distintas

### Reino Unido (post-Brexit)

Desde enero de 2021, los ciudadanos de la UE necesitan visado para trabajar en el UK. Para contratar en UK:
- EOR es la opción más rápida si no tienes entidad
- Registrar una UK Limited Company es rápido y barato si planeas crecer allí
- Atención al IR35: si el rol del contratista encaja como empleado, se aplican las reglas de empleado

### EE.UU.

El mercado más complejo y con mayor variación entre estados:
- Delaware LLC es el vehículo más usado para constituir entidad
- Las leyes laborales varían por estado (California es la más restrictiva)
- Sin seguro médico aportado por el empleador, es muy difícil atraer talento local
- EOR es la opción más popular para empresas europeas que quieren 1-5 empleados en EE.UU.

### LATAM (México, Colombia, Argentina)

- Legislación laboral muy protectora con el empleado (despido caro, prestaciones obligatorias extendidas)
- México: aguinaldo de 15 días mínimo, parte de utilidades, IMSS
- Colombia: prima de servicios, cesantías, intereses de cesantías, caja de compensación familiar
- Argentina: inflación y tipo de cambio hacen compleja la gestión de nómina; considerar EOR local

---

## Parte 3: Consideraciones fiscales — el riesgo del Permanent Establishment

El mayor riesgo fiscal de tener empleados en el extranjero es crear un establecimiento permanente (EP) involuntario.

**¿Cuándo existe riesgo de EP?**
- El empleado tiene autoridad para firmar contratos en nombre de la empresa
- El empleado desarrolla habitualmente la actividad principal del negocio desde ese país
- El empleado tiene un lugar fijo de trabajo que usa la empresa (oficina, almacén)

**Cómo minimizar el riesgo:**
- Contrata a través de EOR (el EOR es el empleador formal, no tu empresa)
- Restringe contractualmente las actividades del empleado (apoyo interno, no ventas ni contratos con clientes)
- Asegúrate de que el rol es de soporte interno, no de actividad comercial local
- Consulta con un asesor fiscal local antes de contratar en países con alta litigiosidad fiscal (Francia, Alemania, Italia)

---

## Parte 4: Checklist de due diligence antes de contratar en un nuevo país

- [ ] ¿Has identificado la opción legal más adecuada (EOR, subsidiaria, contratista)?
- [ ] ¿Conoces los costes obligatorios del empleador en ese país (seguridad social, beneficios obligatorios)?
- [ ] ¿Has revisado el riesgo de permanent establishment con un asesor fiscal local?
- [ ] ¿El contrato de trabajo cumple con la ley laboral local?
- [ ] ¿Has adaptado las cláusulas de confidencialidad y PI a la ley del país?
- [ ] ¿Tienes claro el proceso de offboarding y los costes de despido?
- [ ] ¿Has revisado las implicaciones del RGPD / ley de privacidad local para los datos del empleado?

---

## Entregable

Dime en qué país quieres contratar, el perfil del rol (empleado o contratista, tiempo completo o parcial, actividades que realizará) y el presupuesto mensual que tienes, y elaboraré:
1. Comparativa de las opciones legales más adecuadas para tu caso con pros, contras y costes estimados
2. Listado de costes obligatorios del empleador en ese país
3. Riesgos principales de compliance que debes gestionar
4. Recomendación de proveedores EOR o asesores locales para ese país
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Contratar empleados en el extranjero de forma legal y segura desde una empresa española',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Programa estructurado de voz del cliente',
                'description'       => 'Diseña entrevistas, encuestas y feedback loops que alimentan el roadmap de producto con insights de clientes reales y accionables.',
                'prompt_content'    => <<<'PROMPT'
# Voz del cliente: el sistema que alimenta el roadmap con insights reales

Actúa como un experto en research de usuarios y customer insights con experiencia diseñando programas VoC (Voice of Customer) en empresas SaaS B2B y de consumo. Voy a compartirte el contexto de mi empresa y necesito que me ayudes a crear un programa estructurado de escucha al cliente que sea continuo, no episódico, y que realmente influya en las decisiones de producto.

## La diferencia entre escuchar a los clientes y tener un programa VoC

Escuchar a los clientes de forma reactiva (cuando se quejan, cuando cancelan) es gestión de crisis, no estrategia de producto.

Un programa VoC estructurado:
- Captura feedback en múltiples momentos del ciclo de vida del cliente
- Usa métodos cuantitativos y cualitativos de forma complementaria
- Tiene un proceso sistemático para convertir el feedback en decisiones de producto
- Cierra el loop con los clientes para que vean que su feedback impacta

El resultado: clientes más comprometidos, producto que evoluciona en la dirección correcta, y menor churn preventivo (resuelves los problemas antes de que se vayan).

---

## Parte 1: Los 5 momentos de captura de feedback

El error más frecuente es capturar feedback solo al final (encuesta NPS anual, entrevista de cancelación). Para cuando el cliente cancela, es tarde. El sistema debe capturar feedback a lo largo de todo el ciclo de vida:

| Momento | Método | Objetivo |
|---|---|---|
| Onboarding (días 3-7) | Encuesta corta in-app o email | Detectar fricción en la activación temprana |
| Post-milestone (primera vez que completa acción clave) | Email de felicitación + 1 pregunta | Capturar el AHA moment y el primer valor percibido |
| Uso regular (mensual) | NPS in-app o por email | Medir satisfacción general y detectar tendencias |
| Renovación o expansión (30 días antes) | Entrevista cualitativa con CS | Entender qué más necesitan y riesgos de churn |
| Cancelación / Churn | Encuesta de salida + llamada si el LTV lo justifica | Entender la causa raíz, recuperar si es posible |

---

## Parte 2: Las entrevistas de usuario — el método más valioso y más ignorado

Las entrevistas individuales con clientes dan insights que ninguna encuesta puede capturar. Una sola entrevista bien hecha vale más que 1.000 respuestas de NPS.

**Cuándo hacer entrevistas:**
- Al descubrir un problema o una oportunidad de producto
- Antes de comenzar el desarrollo de una feature importante
- Cuando el feedback cuantitativo muestra una anomalía que no entiendes
- De forma regular (mínimo 2-4 entrevistas de usuario por mes)

**El guion de entrevista de usuario (para descubrimiento de problema):**

```
ANTES DE EMPEZAR (5 min):
"Gracias por dedicar tu tiempo. Esta sesión no es un test de nuestro producto,
sino una conversación para entender cómo trabajas. No hay respuestas correctas ni incorrectas.
¿Puedo grabar la sesión solo para mis notas? La grabación es confidencial."

CONTEXTO GENERAL (10 min):
1. "Cuéntame un poco sobre tu rol y cómo es tu día a día."
2. "¿Cuál es el trabajo o proceso que más tiempo te consume en este área?"
3. "¿Cómo lo hacías antes de tener [nuestro producto / cualquier herramienta]?"

EL PROBLEMA ESPECÍFICO (15 min):
4. "Cuéntame la última vez que tuviste que [tarea relevante]. ¿Cómo lo hiciste paso a paso?"
   (No des opciones. Escucha. Haz silencio incómodo si es necesario.)
5. "¿Qué fue lo más frustrante de ese proceso?"
6. "¿Qué hiciste cuando [obstáculo que mencionaron]?"
7. "Si pudieras cambiar una sola cosa de cómo haces esto ahora, ¿qué sería?"

SOBRE NUESTRO PRODUCTO (10 min, solo si es pertinente):
8. "¿Cómo usas [nuestro producto] para este proceso?"
9. "¿Hay algo que intentes hacer con [nuestro producto] que no consigues hacer fácilmente?"

CIERRE (5 min):
10. "¿Hay algo que no te he preguntado y que crees que sería importante que supiera?"
11. "¿Hay alguien más en tu equipo con quien creas que debería hablar?"
```

**Las reglas de oro de la entrevista:**
- Nunca preguntes si les gustaría X feature (sesgo de confirmación)
- Pregunta siempre por comportamientos pasados, no intenciones futuras
- El silencio es tu mejor herramienta: deja que el cliente llene el espacio
- No defiendas el producto si el cliente lo critica: eso cierra la conversación

---

## Parte 3: Las encuestas cuantitativas — qué medir y cómo

**NPS (Net Promoter Score):**

```
"¿Con qué probabilidad recomendarías [Empresa] a un colega o amigo? (0-10)"
```

- Promotores (9-10): pregúntales qué han ganado con el producto
- Pasivos (7-8): pregúntales qué mejorarías
- Detractores (0-6): pregúntales el motivo principal y ofrece acción concreta

**Frecuencia de envío**: mensual in-app (para usuarios activos) o trimestral por email (para toda la base). No envíes más de una vez por trimestre por email — genera fatiga.

**CSAT (Customer Satisfaction Score):**

```
"¿Qué tal fue tu experiencia con [interacción específica]? (1-5 estrellas)"
```

CSAT es más contextual que NPS. Úsalo después de:
- Un ticket de soporte resuelto
- Completar el onboarding
- Una llamada de CSM

**CES (Customer Effort Score):**

```
"¿Cuánto esfuerzo te ha costado [completar esta tarea]? (1=muy fácil / 7=muy difícil)"
```

El CES predice la retención mejor que NPS en productos de uso frecuente. Si hacer la tarea principal cuesta demasiado, el usuario abandona aunque esté satisfecho con la empresa.

---

## Parte 4: El proceso de convertir feedback en decisiones

Capturar feedback sin un proceso para convertirlo en acción es tirar dinero. Este ciclo asegura que el feedback llega a las personas que pueden actuar sobre él:

**El ciclo mensual de VoC:**

**Semana 1 — Captura y síntesis:**
- Exporta todos los comentarios cualitativos del mes (NPS detractor + respuestas abiertas CSAT + tickets de soporte + notas de entrevistas)
- Agrupa los comentarios por tema usando afinidad o clustering (Dovetail, Notion, Miro, o simplemente una hoja de cálculo)
- Identifica los 3-5 temas más frecuentes o más urgentes

**Semana 2 — Análisis y priorización:**
- Cuantifica cada tema: ¿cuántos clientes lo mencionan? ¿Qué segmento de cliente? ¿Qué impacto tiene en el NPS o el churn?
- Crea un documento de insights con el contexto (cita literal del cliente, segmento, contexto)

**Semana 3 — Presentación al equipo de producto:**
- Monthly VoC review: 60 minutos con PM, diseño y CS
- Presenta los 3-5 insights principales con las citas de clientes
- Propón cómo estos insights deberían influir en el roadmap del siguiente quarter

**Semana 4 — Close the loop con clientes:**
- Para clientes que dieron feedback negativo, envía un follow-up: "Gracias por tu feedback. Estamos trabajando en [acción concreta] y queremos que seas de los primeros en verlo."
- Para clientes que participaron en entrevistas: comparte un resumen de los cambios que se harán gracias a su feedback.

---

## Parte 5: Herramientas del programa VoC

| Funcionalidad | Herramienta gratuita | Herramienta de pago |
|---|---|---|
| Encuestas NPS/CSAT in-app | Hotjar (básico) | Delighted, Survicate, Pendo |
| Entrevistas de usuario | Zoom + Notion para notas | Dovetail, UserTesting |
| Repositorio de insights | Notion o Airtable | Dovetail, Productboard, EnjoyHQ |
| Análisis de sentimiento de tickets | Manual | MonkeyLearn, Intercom AI |
| Encuestas por email | Typeform (básico) | SurveyMonkey, Typeform Pro |
| Screener de reclutamiento de usuarios | Google Forms | User Interviews, Respondent |

---

## Parte 6: Métricas del programa VoC

| KPI | Objetivo | Cómo medirlo |
|---|---|---|
| Tasa de respuesta NPS | > 25 % (email) / > 40 % (in-app) | Herramienta de NPS |
| Entrevistas de usuario al mes | Mínimo 4 | Registro en CRM o Notion |
| % de insights que entran en el roadmap | > 30 % de los top insights del quarter | Comparativa roadmap vs. insights |
| Time to action sobre feedback crítico | < 30 días para feedback de detractores | Registro de seguimiento |
| NPS trend (trimestral) | Tendencia positiva | Dashboard de NPS |

---

## Entregable

Cuéntame en qué fase está tu empresa (pre-PMF, crecimiento, escala), cuántos clientes activos tienes y si ya usas algún método de feedback, y elaboraré:
1. Diseño del programa VoC adaptado a tu etapa y recursos
2. Guion de entrevista de usuario para el problema más relevante en tu producto ahora mismo
3. Plantilla de encuesta NPS con seguimiento cualitativo
4. Proceso mensual de síntesis y presentación de insights al equipo de producto
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Crear un sistema continuo de escucha al cliente que alimenta el roadmap de producto',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Propuestas comerciales ganadoras',
                'description'       => 'Estructura, argumentación y diseño de propuestas para proyectos premium que demuestran valor antes de que el cliente decida.',
                'prompt_content'    => <<<'PROMPT'
# Propuestas comerciales ganadoras: cierra proyectos premium con una propuesta que convence

Actúa como un consultor comercial y especialista en ventas de servicios profesionales con experiencia ayudando a freelancers, consultores y agencias a estructurar propuestas que ganan proyectos de alto valor (5.000 - 100.000 €). Voy a compartirte el contexto del proyecto para el que necesito preparar una propuesta y necesito que me ayudes a construirla desde cero o a mejorar la que ya tengo.

## Por qué las propuestas mediocres pierden proyectos que merecías ganar

Una propuesta comercial no es un presupuesto con una lista de precios. Es el documento que convence a tu cliente de que eres la mejor inversión posible para su objetivo. Las propuestas que pierden proyectos suelen cometer estos errores:

1. **Hablan del proveedor, no del cliente**: "Llevamos 10 años en el sector", "Nuestro equipo está formado por..." La primera página debería ser sobre el cliente, no sobre ti.
2. **No articulan el valor, solo el precio**: listan entregables sin explicar qué consigue el cliente gracias a ellos.
3. **Son genéricas**: el cliente siente que es la misma propuesta que mandas a todos. Porque lo es.
4. **No manejan las objeciones anticipadamente**: dejan preguntas críticas sin respuesta (¿qué pasa si no funciona? ¿Puedo cancelar? ¿Qué garantía tienes?).
5. **No tienen un cierre claro**: terminan con "quedo a tu disposición para cualquier duda" en lugar de proponer el siguiente paso.

---

## Parte 1: La estructura de una propuesta ganadora en 7 bloques

### Bloque 1 — Portada con identidad visual

Incluye:
- Nombre del cliente (personalización inmediata)
- Título del proyecto (específico, no "Propuesta de servicios")
- Tu logo y el logo del cliente (si tienes permiso o es un prospecto importante)
- Fecha y número de versión
- Nombre de tu contacto en la empresa cliente

**Ejemplo de título:**
- MAL: "Propuesta de servicios de marketing digital"
- BIEN: "Estrategia de captación digital para [Empresa]: de 50 a 200 leads cualificados mensuales en 90 días"

### Bloque 2 — Resumen ejecutivo (el más importante)

El resumen ejecutivo es lo que el decisor lee si solo lee una página. Debe responder:
1. ¿Cuál es el problema o la oportunidad del cliente?
2. ¿Qué vas a hacer para resolverlo?
3. ¿Cuál es el resultado esperado?
4. ¿Por qué tú eres la mejor opción?

**Plantilla de resumen ejecutivo:**
```
[Nombre empresa] busca [objetivo] para [consecuencia de lograrlo / consecuencia de no lograrlo].

Nuestra propuesta aborda este objetivo a través de [descripción breve del enfoque],
con un resultado esperado de [outcome concreto y, si es posible, cuantificado].

Llevamos [X años / N proyectos similares] ayudando a [tipo de cliente] a conseguir
[resultado concreto verificable]. El proyecto tiene una duración de [X semanas/meses]
con una inversión de [X €].
```

### Bloque 3 — Diagnóstico de la situación actual

Demuestra que has hecho los deberes. Describe la situación del cliente con datos específicos (no genéricos). Este bloque comunica: "te he entendido mejor de lo que esperabas."

Incluye:
- Su contexto de negocio relevante para el proyecto
- Los problemas o ineficiencias que has identificado
- Las consecuencias de no resolverlos (coste de la inacción)
- La oportunidad que existe si se actúa ahora

### Bloque 4 — Tu solución y metodología

Describe qué vas a hacer y cómo. Pero siempre en términos de lo que el cliente consigue, no de lo que tú haces.

**Estructura por fase:**
```
Fase 1: [Nombre descriptivo] — Semanas 1-2
Objetivo: [qué consigue el cliente al final de esta fase]
Actividades:
- [Actividad 1]: [por qué es importante para el resultado]
- [Actividad 2]: [por qué es importante para el resultado]
Entregables: [lista concreta de lo que el cliente recibe]

Fase 2: [Nombre descriptivo] — Semanas 3-5
[Mismo formato]
```

**El alcance explícito — qué NO incluye:**
Incluye siempre una sección de "Fuera del alcance de esta propuesta". Esto evita malentendidos y gestiona expectativas desde el principio.

### Bloque 5 — Por qué nosotros (con evidencia, no con opinión)

Este bloque responde a la pregunta implícita del cliente: "¿Puedo confiar en que esta empresa o persona puede entregar lo que promete?"

Tipos de evidencia (en orden de impacto):
1. **Caso de uso similar**: un cliente en situación comparable con resultado verificable
2. **Testimonio específico**: de alguien que el cliente pueda contactar si quiere verificar
3. **Métrica o resultado concreto**: "Hemos ayudado a X clientes en este sector a conseguir Y"
4. **Metodología propia**: si tienes un framework o proceso diferenciador, nómbralo y explica por qué funciona

Lo que NO funciona como evidencia:
- "Somos apasionados de nuestro trabajo" (¿quién dice lo contrario?)
- "Trabajamos con empresas líderes del sector" (¿cuáles? ¿qué lograron?)
- Premios y certificaciones sin contexto de por qué importan al cliente

### Bloque 6 — Inversión y condiciones

Nunca llames a esta sección "Precio" o "Coste". Llámala "Inversión" o "Tu inversión".

**Estructura de la sección de inversión:**

```
INVERSIÓN

[Nombre del proyecto completo]: X.XXX €

Desglose (si añade valor, no si abruma):
- Fase 1 — [nombre]: X €
- Fase 2 — [nombre]: X €

Forma de pago:
50 % al inicio del proyecto — [fecha de inicio propuesta]
50 % en la entrega final — [fecha estimada de entrega]

Condiciones:
- Incluye [N] rondas de revisión por entregable
- Revisiones adicionales a [X €/hora o X € por ronda]
- Entrega en [formato]
- Soporte post-entrega: [período y condiciones]

Validez de la propuesta: hasta el [fecha — típicamente 30 días]
```

**Tip sobre el precio**: si ofreces opciones, usa 3 (bueno / mejor / óptimo). El cliente raramente elige la más barata si la diferencia de valor está bien explicada. Nunca más de 3 opciones — la paradoja de la elección paraliza la decisión.

### Bloque 7 — Próximos pasos y CTA

Termina con una acción específica, no con "quedo a tu disposición":

```
PRÓXIMOS PASOS

Si esta propuesta encaja con lo que buscáis, el proceso para arrancar es sencillo:

1. Confirma tu aprobación respondiendo a este email o firmando la propuesta digitalmente.
2. Realizas el pago del 50 % inicial: [datos bancarios o enlace de pago].
3. Programamos la reunión de kickoff para la semana del [fecha].

La disponibilidad para iniciar en la fecha propuesta está garantizada hasta el [fecha].
Pasada esa fecha, el inicio quedaría sujeto a la agenda disponible.

¿Tienes alguna pregunta antes de confirmar? Puedes llamarme directamente al [teléfono]
o responder a este email.
```

---

## Parte 2: El formato y el diseño

**Regla del diseño en propuestas**: el diseño debe reflejar tu nivel de atención al detalle. Una propuesta mal maquetada dice "así de cuidado vas a tener con mi proyecto".

**Mínimos de diseño para una propuesta profesional:**
- Tipografía consistente: máximo 2 fuentes, una para títulos y otra para el cuerpo
- Colores de tu marca: aplícalos en los encabezados, separadores y elementos de énfasis
- Márgenes generosos: no llenes cada centímetro de papel
- Numeración de páginas con índice si supera 8-10 páginas
- Logotipo en cada página (header o footer)

**Longitud ideal por tipo de proyecto:**
- Proyecto < 5.000 €: 3-5 páginas
- Proyecto 5.000-25.000 €: 6-10 páginas
- Proyecto > 25.000 €: 10-20 páginas + anexos opcionales

---

## Parte 3: La firma digital y el seguimiento

**Herramientas de envío con firma digital:**
- Bonsai: diseñado para freelancers, incluye contrato + factura + seguimiento
- PandaDoc: para agencias y consultoras con volumen
- DocuSign: estándar en proyectos enterprise
- HelloSign: simple y económico

**La secuencia de seguimiento post-propuesta:**

- **Día de envío**: email de acompañamiento con resumen de 3 bullets de los puntos clave y disponibilidad para una llamada de revisión
- **Día 3 (sin respuesta)**: email breve: "Solo quería confirmar que la recibiste correctamente y si tienes alguna pregunta antes de revisarla"
- **Día 7 (sin respuesta)**: llamada corta de 2-3 minutos: "¿Tuviste oportunidad de revisarla? ¿Hay algo que quieras que clarifiquemos?"
- **Día 14 (sin respuesta)**: email de cierre: "La propuesta tiene validez hasta [fecha]. Si el timing no es el adecuado ahora, no hay problema — aquí estaré cuando sea el momento."

---

## Entregable

Cuéntame el contexto del proyecto (cliente, qué necesitan, qué vas a hacer tú, presupuesto orientativo) y elaboraré:
1. Propuesta completa en los 7 bloques adaptada a tu caso
2. Resumen ejecutivo listo para usar
3. Sección de inversión con opciones si corresponde
4. Email de envío de la propuesta y secuencia de seguimiento
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Escribir propuestas comerciales que ganan proyectos premium y justifican el precio',
                'vote_score'        => 44,
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
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
