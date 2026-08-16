<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills46Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'YouTube Ads: pre-roll, in-feed y cómo crear anuncios de vídeo que no se saltan',
                'description'      => 'Estrategia y producción de anuncios de vídeo en YouTube para los formatos pre-roll, in-feed y bumper, con estructura de guión, targeting avanzado y métricas de campaña que realmente importan.',
                'prompt_content'   => <<<'PROMPT'
Eres un especialista en publicidad en vídeo y YouTube Ads con experiencia en campañas de performance y branding para marcas B2B y B2C. Necesito que me ayudes a diseñar, escribir y optimizar anuncios de vídeo en YouTube que no se saltan, que convierten y que no malgastan el presupuesto en audiencias incorrectas.

## MI CONTEXTO

- Producto o servicio que quiero anunciar: [descripción]
- Objetivo de la campaña: [awareness / consideración / conversión / remarketing]
- Presupuesto mensual disponible: [rango]
- Audiencia objetivo: [descripción demográfica e intereses]
- ¿Tienes vídeos anteriores en YouTube?: [Sí — estadísticas / No]
- Competidores que anuncian en YouTube y cuyo enfoque conoces: [nombres si los hay]
- Landing page de destino (si hay conversión): [URL o descripción]
- Duración máxima de producción que puedes manejar: [15 seg / 30 seg / 60 seg / más]

---

## PARTE 1 — FORMATOS DE YOUTUBE ADS: EL MAPA COMPLETO

### 1.1 Guía de formatos y cuándo usar cada uno

Para cada formato, explica el mecanismo, cuándo se puede saltar, dónde aparece, el objetivo óptimo y el benchmark de CPV o CPM:

| Formato | ¿Se puede saltar? | Duración | Objetivo óptimo | Coste típico |
|---------|-------------------|---------|----------------|-------------|
| Skippable in-stream | Sí, tras 5 seg | 15-60+ seg | Consideración / Conversión | CPV |
| Non-skippable in-stream | No | Máx. 15-20 seg | Branding / Awareness | CPM |
| Bumper ads | No | Máx. 6 seg | Recordación / Retargeting | CPM |
| In-feed (discovery) | N/A | Cualquier duración | Consideración / Canal | CPC |
| Masthead | N/A | Variable | Lanzamiento / Branding masivo | CPD |
| Outstream | Sí | Variable | Alcance móvil | vCPM |

### 1.2 La combinación óptima de formatos para mi objetivo

Basándote en mi objetivo de campaña y presupuesto, recomiéndame la combinación de formatos y el presupuesto a asignar a cada uno con la justificación estratégica.

---

## PARTE 2 — EL GUIÓN DEL ANUNCIO QUE NO SE SALTA

### 2.1 La estructura ABCD de YouTube (el framework oficial de Google)

Explica el framework ABCD de Google para anuncios de vídeo efectivos y aplícalo a mi producto:
- **A (Attract)**: cómo capturar la atención en los primeros 5 segundos antes del botón de skip
- **B (Brand)**: cuándo y cómo presentar la marca sin que se sienta forzado
- **C (Connect)**: cómo crear conexión emocional con la audiencia objetivo
- **D (Direct)**: el CTA que convierte sin perder la coherencia emocional del anuncio

### 2.2 Los primeros 5 segundos: la batalla del skip

Los primeros 5 segundos son los únicos que el espectador siempre ve. Dame las 8 aperturas más efectivas que hacen que alguien decida no saltar, con un ejemplo aplicado a mi producto para cada una:

1. **La pregunta que te incluye**: "¿Cuánto tiempo llevas haciendo X de la forma incorrecta?"
2. **El statement provocador**: una afirmación que contradice la creencia común del target
3. **El conflicto en acción**: empieza en medio de un problema que el espectador reconoce
4. **El resultado sorprendente**: muestra el after antes de explicar el before
5. **El personaje reconocible**: alguien que es exactamente como el espectador
6. **El dato impactante**: una estadística que reencuadra el problema
7. **El humor negro de nicho**: una broma que solo entiende tu target (y eso es bueno)
8. **La demostración inmediata**: muestra el producto haciendo algo que nadie esperaba

### 2.3 Guiones completos para mi campaña

Escribe los guiones completos de:

**Anuncio skippable de 30 segundos** (para conversión):
```
[0-5 seg — GANCHO, antes del skip]:
[5-15 seg — PROBLEMA Y AGITACIÓN]:
[15-25 seg — SOLUCIÓN Y PRUEBA]:
[25-30 seg — CTA]:

Indicaciones de producción:
- Escena/plano por cada bloque
- Texto en pantalla si aplica
- Música/tono recomendado
```

**Bumper de 6 segundos** (para remarketing):
```
[0-3 seg — IMAGEN O SITUACIÓN MEMORABLE]:
[3-6 seg — NOMBRE DE MARCA + PROMESA ÚNICA]:

Nota: en 6 segundos no se explica, se recuerda. El bumper asume que el espectador ya conoce la marca.
```

**Anuncio in-feed** (para consideración):
- Título (máx. 100 caracteres): [texto]
- Descripción línea 1 (máx. 35 caracteres): [texto]
- Descripción línea 2 (máx. 35 caracteres): [texto]
- Thumbnail recomendado: descripción visual de la imagen que genera más CTR

---

## PARTE 3 — TARGETING AVANZADO

### 3.1 Las audiencias de YouTube que debes usar (y las que malgastan dinero)

Para mi objetivo, define las audiencias prioritarias con el nivel de especificidad correcto:

**Audiencias de intención:**
- Custom Intent Audiences: cómo construirlas con las keywords exactas que busca mi target en Google
- In-Market audiences: cuáles son relevantes para mi sector

**Audiencias de afinidad:**
- Custom Affinity Audiences: cómo crear audiencias basadas en URLs que visita mi target
- Por qué las afinidades amplias (ej: "amantes de la tecnología") suelen ser un desperdicio

**Audiencias de datos propios:**
- Customer Match: cómo subir mi lista de emails y hacer remarketing
- Similar Audiences sobre mis mejores clientes
- Remarketing de vídeo: la secuencia de remarketing con bumpers y skippable

### 3.2 Exclusiones que debes activar desde el día 1

Las exclusiones de audiencia y de placement que reducen el gasto en tráfico irrelevante:
- Exclusión de edades menores de 18 si mi producto no es para ellos
- Exclusión de categorías de contenido sensible
- Exclusión de canales infantiles y contenido de juegos si no es mi target
- Cómo revisar el informe de placements y excluir canales individuales

---

## PARTE 4 — MÉTRICAS Y OPTIMIZACIÓN

### 4.1 Las métricas que importan (y las que solo se ven bien)

| Métrica | Lo que mide realmente | Cuándo actuar |
|---------|----------------------|---------------|
| View Rate | Calidad del gancho creativo | <25% revisar primeros 5 seg |
| VTR (View Through Rate) | Engagement total del anuncio | |
| CPV | Eficiencia del coste por vista | |
| Earned Actions | Interés orgánico generado por el anuncio | |
| Brand Lift | Incremento en búsquedas de marca | |
| Conversion Rate post-view | Efectividad de conversión real | |

### 4.2 El proceso de optimización semanal

Agenda de optimización de la campaña semana a semana:
- Semana 1: solo observar, no tocar (el algoritmo necesita datos)
- Semana 2: primeras exclusiones de placement y ajustes de audiencia
- Semana 3: test A/B del gancho creativo
- Semana 4: decisión de escalar, mantener o matar la campaña

### 4.3 Cómo escalar sin que el CPA se dispare

Las 3 formas correctas de escalar una campaña de YouTube que funciona, con el porcentaje máximo de incremento de presupuesto semanal recomendado para no romper el aprendizaje del algoritmo.

---

## ENTREGABLE: BRIEF DE PRODUCCIÓN

Genera el brief creativo completo que le daría a un equipo de producción de vídeo para que produzcan el anuncio principal sin necesidad de más reuniones, con todos los elementos técnicos y creativos especificados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar anuncios de vídeo en YouTube que no se saltan con guiones, targeting avanzado y proceso de optimización',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],

            // 2 — Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'GraphQL: diseño de APIs flexibles y eficientes que los frontends modernos necesitan',
                'description'      => 'Guía práctica para diseñar, implementar y optimizar una API GraphQL: schema design, resolvers, N+1 problem, autenticación, paginación y las decisiones arquitectónicas que marcan la diferencia.',
                'prompt_content'   => <<<'PROMPT'
Eres un ingeniero backend senior con amplia experiencia diseñando e implementando APIs GraphQL en producción. Tu enfoque es pragmático: GraphQL es una herramienta poderosa que puede convertirse en una pesadilla si se diseña mal. Necesito que me ayudes a diseñar e implementar una API GraphQL sólida, eficiente y mantenible.

## MI CONTEXTO TÉCNICO

- Lenguaje y framework backend: [Node.js/Apollo Server / Python/Strawberry / Ruby/graphql-ruby / Java/Spring / otro]
- Base de datos: [PostgreSQL / MySQL / MongoDB / otro]
- ¿Migras de REST a GraphQL o empiezas desde cero?: [migración / nuevo proyecto]
- Número de entidades principales del dominio: [aproximado]
- Clientes del API: [web app React/Vue / app móvil iOS/Android / ambos / otro]
- ¿Tienes requisitos de autenticación y autorización?: [describe brevemente]
- Escala esperada: [menos de 1000 req/min / 1000-10000 / más de 10000]
- ¿Necesitas suscripciones en tiempo real (WebSockets)?: [Sí / No]

---

## PARTE 1 — DISEÑO DEL SCHEMA

### 1.1 Principios de diseño de schema que marcan la diferencia

Explica en profundidad cada uno de estos principios con ejemplos de código real:

**1. Diseña para el cliente, no para la base de datos**
Por qué el schema GraphQL no debe ser un reflejo 1:1 de tu modelo de datos. Muestra un ejemplo de schema mal diseñado (que refleja la DB) vs. uno bien diseñado (que refleja el dominio del cliente).

**2. Nullability intencional**
Cuándo un campo debe ser nullable y cuándo no, y por qué un schema con todo non-null es una trampa. La regla de oro para decidir.

**3. Nombres descriptivos y consistentes**
Convenciones de nomenclatura para tipos, queries, mutations y subscriptions. El problema de los nombres inconsistentes en un schema grande.

**4. Input types vs scalars**
Cuándo usar un input type y cuándo un scalar individual en los argumentos de una mutation. El antipatrón del "UpdateEverythingInput".

**5. IDs globales y el patrón Node**
Por qué usar IDs opacos base64 en lugar de integers y cómo implementar la interfaz Node para compatibilidad con Relay.

### 1.2 Diseño de queries y mutations

Para mi dominio, diseña el schema completo de:

**Queries:**
- Queries de item único (por ID, por slug, por identificador único)
- Queries de colección con filtrado, ordenación y búsqueda
- Queries de colección paginadas (cursor-based vs offset: cuándo usar cada una)

**Mutations:**
- El patrón de mutation con payload type (en lugar de devolver el tipo directamente)
- Cómo incluir errores de dominio en el payload sin usar HTTP error codes
- Mutations de creación, actualización parcial y eliminación

```graphql
# Ejemplo de mutation con payload pattern:
type CreateProductPayload {
  product: Product
  errors: [UserError!]!
}

type UserError {
  field: [String!]
  message: String!
}

type Mutation {
  createProduct(input: CreateProductInput!): CreateProductPayload!
}
```

### 1.3 Paginación cursor-based con Relay spec

Implementación completa de la paginación connection/edge/node compatible con la especificación Relay, con el código del resolver y el query de ejemplo desde el cliente.

---

## PARTE 2 — RESOLVERS Y EL PROBLEMA N+1

### 2.1 El problema N+1: la trampa más común en GraphQL

Explica con un ejemplo concreto por qué GraphQL tiene un problema intrínseco con N+1 y cómo una query aparentemente inocente puede generar 1+N consultas a la base de datos.

### 2.2 DataLoader: la solución estándar

Implementación completa de DataLoader para mi stack:
- Cómo crear un DataLoader por entidad
- El patrón de batch function con consulta SQL optimizada
- Cómo instanciar DataLoaders con scope de request (no global) para evitar problemas de caché compartida
- Código completo del loader y del resolver que lo usa

### 2.3 Joins selectivos vs DataLoader

Cuándo es mejor hacer un JOIN en la query SQL directamente que usar DataLoader, con criterios de decisión claros y ejemplos de ambos enfoques.

---

## PARTE 3 — AUTENTICACIÓN Y AUTORIZACIÓN

### 3.1 Autenticación en GraphQL

Implementa el middleware de autenticación con JWT que:
- Valida el token en cada request
- Inyecta el usuario autenticado en el contexto
- Distingue entre queries que requieren autenticación y las que no
- Maneja tokens expirados sin romper el schema

### 3.2 Autorización a nivel de campo (field-level authorization)

El patrón correcto para implementar autorización granular sin contaminar los resolvers:
- Schema directives para autorización declarativa (`@auth(requires: ADMIN)`)
- El patrón de Shield (graphql-shield) para reglas de autorización centralizadas
- Cómo ocultar campos en lugar de devolver errores cuando el usuario no tiene acceso

### 3.3 Protección contra consultas maliciosas

Cómo proteger la API de:
- **Query depth limiting**: configuración y umbral recomendado
- **Query complexity analysis**: cómo asignar pesos a los campos y definir el presupuesto máximo
- **Rate limiting** por IP y por usuario autenticado
- **Query whitelisting** en producción (persisted queries)

---

## PARTE 4 — OPTIMIZACIÓN Y PERFORMANCE

### 4.1 Caché en GraphQL

Estrategia de caché para una API GraphQL:
- Por qué HTTP caching no funciona directamente con POST queries
- Response caching con Apollo Server y las directivas `@cacheControl`
- DataLoader como caché de request
- CDN caching con persisted queries

### 4.2 Subscriptions en tiempo real

Si necesito subscriptions, implementa el setup completo con:
- WebSocket transport (graphql-ws)
- Filtrado de subscriptions para que cada cliente solo reciba sus datos
- Manejo de desconexiones y reconexiones
- Escalado de subscriptions con PubSub y Redis en producción

### 4.3 Monitorización de la API GraphQL

Las métricas específicas de GraphQL que debo monitorizar:
- Tiempo de resolución por field y por operation
- Frecuencia de uso de cada field (para schema pruning)
- Error rate por operation
- Configuración de Apollo Studio o alternativas open-source (Grafana + plugin)

---

## PARTE 5 — TOOLING Y DEVELOPER EXPERIENCE

### 5.1 Generación de tipos

Configura graphql-codegen para generar tipos TypeScript automáticamente desde el schema, para que el frontend y el backend compartan el contrato sin trabajo manual.

### 5.2 Testing de la API GraphQL

Estrategia de testing con ejemplos de código:
- Unit tests de resolvers individuales (mockeando el contexto y el DataLoader)
- Integration tests de queries completas contra una base de datos de test
- Contract tests para verificar que el schema no rompe queries existentes del cliente

---

## ENTREGABLE: CHECKLIST DE SCHEMA REVIEW

Genera la checklist de 20 puntos para revisar un schema GraphQL antes de desplegarlo en producción, cubriendo diseño, seguridad, performance y developer experience.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Diseñar e implementar una API GraphQL con schema design profesional, DataLoader, autorización y optimización de rendimiento',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],

            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Teoría del color y paletas de marca: psicología, armonías y coherencia visual',
                'description'      => 'Guía práctica de teoría del color aplicada al diseño de marca digital: psicología del color, construcción de paletas armónicas, accesibilidad y sistema de color para Figma o CSS.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador de identidad visual con especialización en sistemas de color para marcas digitales. Tu enfoque combina la teoría del color clásica con las necesidades prácticas del diseño de interfaces, sin quedarse en la abstracción. Necesito que me ayudes a construir o mejorar la paleta de color de mi marca, entendiendo el porqué de cada decisión.

## MI PROYECTO DE MARCA

- Nombre de la marca o producto: [tu respuesta]
- Sector y tipo de empresa: [tu respuesta]
- Personalidad de marca (elige 3): [confiable / innovadora / sostenible / lujosa / accesible / técnica / creativa / otra]
- Audiencia principal: [descripción del perfil]
- ¿Ya tienes colores definidos?: [Sí — describe / No — empezamos desde cero]
- Plataformas donde se usará: [web / app móvil / producto impreso / redes sociales / todo]
- Colores que definitivamente quieres evitar y por qué: [tu respuesta]
- ¿Hay referentes de otras marcas cuyo uso del color admiras?: [nombres o ejemplos]

---

## PARTE 1 — PSICOLOGÍA DEL COLOR APLICADA A LA MARCA

### 1.1 El color como comunicación

Para los colores más utilizados en diseño de marca, explica:
- El significado psicológico primario y secundario
- Los sectores donde domina y por qué
- Cuándo usarlo y cuándo evitarlo
- Las diferencias culturales más importantes (qué significa el blanco en Asia vs Occidente, por ejemplo)

**Rojo** | **Naranja** | **Amarillo** | **Verde** | **Azul** | **Violeta** | **Rosa** | **Negro** | **Blanco** | **Gris**

### 1.2 Análisis de mi marca

Basándote en la personalidad y el sector de mi marca, dame:
- Los 2-3 colores que psicológicamente conectan mejor con mis valores
- Los colores que debería evitar aunque me gusten estéticamente
- Cómo mis colores hablan al subconsciente de mi audiencia objetivo
- Ejemplos de marcas de referencia en mi sector y análisis de sus decisiones de color

---

## PARTE 2 — TEORÍA DEL COLOR: LO QUE NECESITAS SABER

### 2.1 El círculo cromático y las armonías de color

Para cada armonía, explica el principio, el efecto visual que produce, cuándo usarla en diseño de marca y un ejemplo de marca reconocida:

**Complementaria**: colores opuestos en el círculo — tensión visual, energía, contraste máximo
**Análoga**: 3 colores adyacentes — armonía, naturalidad, coherencia
**Triádica**: equidistantes — equilibrio vibrante, personalidad fuerte
**Split-complementaria**: suaviza la complementaria — sofisticación sin agresividad
**Tetrádica (doble complementaria)**: 4 colores — riqueza visual, difícil de equilibrar
**Monocromática**: variaciones de un solo tono — elegancia, claridad, minimalismo

### 2.2 Tono, saturación y luminosidad: el triángulo que controlas

Explica con ejemplos prácticos:
- Cómo el cambio de saturación modifica el carácter de un color (el azul corporativo vs el azul neón)
- Cómo la luminosidad define si un color es "premium" o "accesible"
- Por qué las paletas de marca profesionales usan variaciones de saturación y luminosidad, no solo del tono
- La diferencia entre HSL, HSB y HEX/RGB y cuándo usar cada sistema

### 2.3 Color en modo oscuro: los ajustes que se ignoran

Cómo adaptar una paleta de color al modo oscuro correctamente:
- Por qué no es simplemente invertir los colores
- Cómo ajustar la saturación en fondos oscuros (el fenómeno de "vibration")
- La escala de grises neutral que necesitas para los fondos
- El sistema de tokens que hace el dark mode sostenible

---

## PARTE 3 — CONSTRUCCIÓN DE LA PALETA

### 3.1 La estructura de una paleta de marca profesional

Diseña la estructura de paleta que necesito con estas categorías:

**Color primario** (1 color):
- El color identitario de la marca
- Sus 9 variaciones de escala (100-900) con valores HSL

**Color secundario** (1-2 colores):
- Complemento o acento del primario
- Cuándo usarlo vs. el primario

**Paleta de grises neutral** (10 variaciones):
- La escala que uso para textos, fondos y bordes
- Por qué un gris "frío" vs "cálido" cambia completamente la percepción de la marca

**Colores de estado** (4 colores semánticos):
- Success / Error / Warning / Info
- Cómo asegurarte de que son accesibles y no entran en conflicto con el primario

**Colores de fondo** (light + dark mode):
- La jerarquía de fondos (background / surface / elevated surface)

### 3.2 Mi paleta recomendada

Basándote en toda la información que he dado, diseña mi paleta completa con:
- El color primario propuesto con su justificación
- El color secundario o acento
- Las escalas de cada color (valores HEX reales)
- Los colores de estado
- Cómo se usa cada color y cuándo

---

## PARTE 4 — ACCESIBILIDAD DEL COLOR

### 4.1 Contraste y WCAG 2.1

Explica los requisitos de contraste AA y AAA para:
- Texto normal (< 18pt)
- Texto grande (≥ 18pt o 14pt bold)
- Componentes UI (botones, inputs, iconos)

### 4.2 Cómo verificar el contraste de mi paleta

Proceso para verificar cada combinación de colores de mi paleta con herramientas gratuitas (Stark plugin de Figma, Colour Contrast Analyser, WebAIM). Lista de las combinaciones texto/fondo que debo verificar obligatoriamente.

### 4.3 Daltonismo y diseño inclusivo

Los 3 tipos de daltonismo más frecuentes y cómo afectan a mi paleta, con las herramientas para simularlos y los ajustes mínimos que hacen la paleta accesible para el 8% de la población con deficiencia de color.

---

## PARTE 5 — IMPLEMENTACIÓN TÉCNICA

### 5.1 Sistema de tokens en Figma

Cómo estructurar los estilos de color en Figma usando la nomenclatura de design tokens, con la jerarquía que facilita el dark mode y el handoff con desarrollo.

### 5.2 Variables CSS para el sistema de color

El código CSS completo de las custom properties para implementar la paleta en web, con soporte para dark mode usando `prefers-color-scheme` y `data-theme`:

```css
:root {
  /* Primary */
  --color-primary-100: #...;
  --color-primary-500: #...;
  --color-primary-900: #...;
  /* ... */
}
```

---

## ENTREGABLE: GUÍA DE USO DEL COLOR

Genera las reglas de uso de la paleta en formato de guía de estilo breve: cuándo usar cada color, qué combinaciones están permitidas y cuáles están prohibidas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir la paleta de color de una marca digital con psicología, armonías, accesibilidad y tokens para Figma y CSS',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],

            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Territory planning: organizar el territorio y las cuentas para maximizar la cobertura del equipo',
                'description'      => 'Metodología de planificación de territorio comercial para organizar cuentas, asignar recursos del equipo de ventas y maximizar la cobertura de mercado con criterios de segmentación y potencial.',
                'prompt_content'   => <<<'PROMPT'
Eres un director comercial con experiencia en diseño y gestión de territorios de venta para equipos de 5 a 50 personas en ventas B2B. Tu enfoque es cuantitativo: el territory planning bien hecho maximiza el potencial capturado, reduce la fricción interna del equipo y da a cada comercial un territorio lo suficientemente grande para ser desafiante y lo suficientemente manejable para ser rentable. Necesito que me ayudes a diseñar o rediseñar el territorio y la asignación de cuentas de mi equipo.

## MI CONTEXTO COMERCIAL

- Sector y tipo de venta: [B2B / SaaS / servicios / distribución / otro]
- Tamaño del equipo comercial: [número de Account Executives / BDRs / SDRs]
- Modelo de ventas: [hunter-farmer / full cycle / inside sales / field sales]
- Mercado objetivo: [geográfico / por sector / por tamaño de empresa / por segmento de producto]
- Número de cuentas actuales: [clientes activos]
- Número de cuentas potenciales identificadas (TAM): [estimación]
- Ciclo de venta medio: [duración]
- Ticket medio: [rango]
- Principal problema de la asignación actual: [desequilibrio / falta de cobertura / superposición / otro]

---

## MÓDULO 1 — ANÁLISIS DEL MERCADO Y SEGMENTACIÓN

### 1.1 Definición del Mercado Total Disponible (TAM)

Ayúdame a calcular y segmentar el TAM de mi mercado con estos pasos:

**Paso 1 — Identificación del universo de cuentas:**
- Fuentes de datos para construir la lista de empresas del mercado objetivo (LinkedIn Sales Navigator, bases de datos de empresas, directorios sectoriales)
- Criterios de inclusión/exclusión (tamaño mínimo, sector específico, geografía, señales de intención)

**Paso 2 — Segmentación de cuentas (modelo ICP + tiering):**

| Tier | Criterios | Potencial anual estimado | Número de cuentas |
|------|----------|--------------------------|------------------|
| Enterprise (Tier 1) | >500 empleados / >50M€ facturación | >100K€ | |
| Mid-market (Tier 2) | 50-500 empleados / 5-50M€ | 20-100K€ | |
| SMB (Tier 3) | <50 empleados / <5M€ | <20K€ | |

**Paso 3 — Priorización por potencial capturado:**
Cómo calcular el "potencial de cuenta" combinando: tamaño de cuenta × fit con ICP × señales de buying intent × situación competitiva actual (si hay contrato con un competidor)

### 1.2 El análisis de cuentas blancas vs cuentas en competencia

Clasifica el TAM en:
- **Cuentas blancas**: sin proveedor actual en mi categoría — oportunidad de creación
- **En competencia**: con contrato activo con un competidor — oportunidad de desplazamiento
- **Cuentas propias**: ya clientes — oportunidad de expansión

Para cada categoría, define el approach comercial diferente y el ratio de capacidad necesario (cuentas por comercial).

---

## MÓDULO 2 — DISEÑO DEL TERRITORIO

### 2.1 Criterios de segmentación del territorio

Evalúa los diferentes criterios de segmentación y recomienda el óptimo para mi modelo de negocio:

| Criterio | Pros | Contras | Cuándo usarlo |
|----------|------|---------|--------------|
| Geográfico | | | |
| Por sector/vertical | | | |
| Por tamaño de empresa | | | |
| Por cuenta nombrada | | | |
| Por producto | | | |
| Híbrido (geo + tier) | | | |

### 2.2 El ejercicio de balance del territorio

Los principios para que los territorios sean equitativos:

**Métrica 1 — Potencial de territorio:**
Cómo calcular el potencial total de cada territorio en €, de forma que ningún comercial tenga un territorio demasiado pequeño ni demasiado grande.

**Métrica 2 — Ratio de cobertura:**
Número de cuentas Tier 1 y Tier 2 por comercial. El benchmark típico por tipo de venta.

**Métrica 3 — Carga de trabajo estimada:**
Estimación de horas requeridas por cuenta según el tier, multiplica por el número de cuentas y compara con la capacidad disponible del comercial.

**La regla del 70%:**
Por qué el territorio debe cubrir un máximo del 70% de la capacidad del comercial para que tenga tiempo de capturar nuevas cuentas (prospección).

### 2.3 Proceso de asignación de cuentas

Step-by-step para asignar las cuentas del TAM al territorio de cada comercial:
1. Reservar las cuentas estratégicas en una "lista de presidencia" gestionada por el director
2. Asignar cuentas Tier 1 por criterio prioritario (geografía o vertical según el modelo elegido)
3. Completar con Tier 2 para equilibrar el potencial
4. Añadir Tier 3 si el modelo incluye atención a SMB
5. Crear la lista de cuentas "sin asignar" para sprints de prospección

---

## MÓDULO 3 — CUOTAS Y OBJETIVOS

### 3.1 Cómo derivar la cuota individual del objetivo de empresa

El proceso top-down + bottom-up para fijar cuotas que sean ambiciosas pero alcanzables:
- Objetivo de negocio → cuota de equipo → cuota individual
- El factor de "uplift" estándar (por qué la suma de cuotas individuales supera el objetivo del equipo)
- Cómo ajustar la cuota por la fase del commercials en el equipo (nuevo vs. establecido)

### 3.2 Los componentes del plan de compensación alineados con el territorio

Cómo el plan de comisiones debe reflejar la realidad del territorio:
- Acelerador de cuota (por qué pagar más del % base cuando se supera la cuota)
- Protección en territorios nuevos o difíciles (mínimos garantizados)
- Penalización por no usar el territorio asignado (evita el cherry-picking)

---

## MÓDULO 4 — REVISIÓN Y REASIGNACIÓN

### 4.1 El carve-out de cuentas

Política para cuando una cuenta crece más allá de su tier asignado y debe pasarse a un equipo de enterprise o de named accounts. Cómo gestionar la transición sin destruir la relación del cliente con el comercial original.

### 4.2 El quarterly territory review

Agenda y plantilla del QBR (Quarterly Business Review) de territorio:
- Métricas de cobertura: qué % del territorio se ha contactado
- Oportunidades por etapa del pipeline por territorio
- Ajustes de asignación propuestos para el siguiente trimestre
- Identificación de cuentas "fantasma" (asignadas pero nunca contactadas)

---

## ENTREGABLE: PLANTILLA DE TERRITORY PLAN

Genera la plantilla de Territory Plan individual que cada comercial completa al inicio de cada trimestre, con las secciones de análisis de territorio, priorización de cuentas, plan de actividad y objetivos del trimestre.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar el territorio y la asignación de cuentas del equipo comercial para maximizar la cobertura y el potencial capturado',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],

            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Feature flags y releases graduales: despliega sin miedo con control total',
                'description'      => 'Guía completa sobre feature flags y releases graduales: tipos de flags, arquitectura técnica, estrategias de rollout, testing en producción y cómo eliminar flags obsoletos sin deuda técnica.',
                'prompt_content'   => <<<'PROMPT'
Eres un Product Manager con experiencia en equipos que practican continuous delivery y release engineering. Tu especialidad es el arte de desplegar sin miedo: hacer que nuevas funcionalidades lleguen a los usuarios de forma controlada, reversible y basada en datos. Necesito que me ayudes a implementar un sistema de feature flags y releases graduales en mi organización.

## MI CONTEXTO

- Tipo de producto: [web app / app móvil nativa / SaaS B2B / B2C / otro]
- Stack técnico principal: [lenguaje y framework]
- Número de deploys por semana actualmente: [número]
- ¿Ya usas feature flags?: [Sí — describe / No]
- Tamaño del equipo de ingeniería: [número]
- ¿Tienes un proceso de testing en producción?: [Sí / No]
- Herramienta de feature flags disponible o considerada: [LaunchDarkly / Unleash / Flagsmith / Growthbook / implementación propia / ninguna]
- Principal motivación: [reducir riesgo de releases / hacer A/B testing / controlar rollouts por segmento / testing en producción]

---

## PARTE 1 — FUNDAMENTOS DE FEATURE FLAGS

### 1.1 Los 4 tipos de feature flags y cuándo usar cada uno

Explica con ejemplos concretos la diferencia entre:

**1. Release flags (o deployment flags):**
- Propósito: desacoplar el deployment del release
- Ciclo de vida típico: corto (días o semanas)
- Quién los controla: equipo de ingeniería
- Ejemplo: "La nueva pantalla de checkout está desplegada pero solo activa para el equipo interno"

**2. Experiment flags:**
- Propósito: A/B testing y experimentación controlada
- Ciclo de vida: el tiempo del experimento
- Quién los controla: PM + Data team
- Ejemplo: "50% de los usuarios ven el botón verde, 50% el azul"

**3. Ops flags (o kill switches):**
- Propósito: control de emergencia para desactivar funcionalidades sin redeploy
- Ciclo de vida: permanente
- Quién los controla: operaciones/SRE
- Ejemplo: "Desactivo el módulo de importación masiva si la base de datos está bajo presión"

**4. Permission flags:**
- Propósito: control de acceso por plan, rol o segmento
- Ciclo de vida: permanente mientras exista la funcionalidad
- Quién los controla: producto
- Ejemplo: "La función de exportación solo está disponible para el plan Pro"

### 1.2 El ciclo de vida de un feature flag

El proceso completo desde que se crea un flag hasta que se elimina, con el responsable y las acciones en cada fase:

1. Creación del flag (naming convention, descripción, owner, fecha de expiración estimada)
2. Implementación en el código
3. Testing con el flag en on y en off
4. Rollout gradual
5. Evaluación y decisión (activar para todos / rollback)
6. Limpieza del flag y la deuda técnica que conlleva

---

## PARTE 2 — ESTRATEGIAS DE ROLLOUT

### 2.1 Los 6 patrones de rollout gradual

Para cada patrón, explica el mecanismo, cuándo usarlo y los criterios para avanzar al siguiente nivel:

**1. Canary release**: porcentaje aleatorio de usuarios
- Del 1% al 5% al 25% al 100%
- Criterios para avanzar: error rate, latencia, conversión ≈ línea base

**2. Ring deployment**: por anillos de confianza
- Ring 0: equipo interno
- Ring 1: early adopters / beta users
- Ring 2: segmento de bajo riesgo (nuevos usuarios)
- Ring 3: base completa

**3. Rollout por geografía**: mercados o regiones primero
- Cuándo tiene sentido (regulación, idioma, soporte local)

**4. Rollout por segmento de usuario**: plan, industria, comportamiento
- Cómo definir el segmento técnicamente en la herramienta de feature flags

**5. Dark launch**: el backend está activo pero el usuario no ve nada
- Cómo usarlo para testear el rendimiento en producción con tráfico real

**6. Blue-green deployment**: sin feature flags pero con infra
- La diferencia con un canary release y cuándo elegir uno u otro

### 2.2 Mi plan de rollout para la siguiente funcionalidad

Diseña el plan de rollout específico para la próxima funcionalidad importante de mi producto, incluyendo:
- Qué tipo de flag usar
- Los criterios de entrada y salida de cada fase
- Las métricas de salud que monitorizaré durante el rollout
- El plan de rollback: qué pasos y en cuánto tiempo podría revertir

---

## PARTE 3 — A/B TESTING CON FEATURE FLAGS

### 3.1 Diseño de un experimento correcto

Guía para diseñar un A/B test con feature flags que sea estadísticamente válido:
1. Definir la hipótesis en formato "Si [cambio], entonces [métrica] mejorará en [X]% porque [razón]"
2. Calcular el tamaño de muestra necesario (dónde calcular el sample size sin conocimientos estadísticos avanzados)
3. Definir la métrica primaria y las métricas de guardia (guardrail metrics)
4. Duración mínima del experimento (la trampa de parar pronto cuando los resultados son positivos)
5. Cómo evitar el peeking bias

### 3.2 Interpretación y decisión

Cómo leer los resultados de un A/B test:
- Qué es la significancia estadística y por qué el p < 0.05 no siempre es suficiente
- La diferencia entre significancia estadística y significancia práctica
- Qué hacer cuando el resultado es neutro (no siempre es un fracaso)
- El proceso de decisión: activar para todos / rollback / iterar

---

## PARTE 4 — GESTIÓN DE LA DEUDA DE FLAGS

### 4.1 El inventario de feature flags

Plantilla del registro de flags que debes mantener:

| Flag | Tipo | Owner | Creado | Expira | Estado | En producción | Eliminado |
|------|------|-------|--------|--------|--------|--------------|-----------|

### 4.2 La trampa de los flags permanentes

Por qué los feature flags que duran más de 3 meses se convierten en deuda técnica, con los riesgos concretos:
- Complejidad del código (combinaciones exponenciales de flags)
- Tests que ya no cubren el código sin el flag
- Documentación desactualizada

### 4.3 El proceso de limpieza trimestral de flags

La rutina trimestral de 2 horas para revisar, eliminar y refactorizar los flags obsoletos sin romper nada:
- Cómo identificar los flags seguros de eliminar
- La PR de limpieza que no nadie quiere escribir pero que todos necesitan
- Cómo hacer que la limpieza sea parte del Definition of Done

---

## ENTREGABLE: GUÍA DE DECISIÓN

Genera el árbol de decisión que cualquier PM o ingeniero puede seguir para elegir el tipo de flag correcto, la estrategia de rollout óptima y el criterio de limpieza, en formato de diagrama de texto estructurado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar feature flags y releases graduales para desplegar funcionalidades con control, rollback y testing en producción',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],

            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Liderazgo de equipos remotos y distribuidos: las prácticas que hacen funcionar el trabajo a distancia',
                'description'      => 'Guía práctica de liderazgo para equipos remotos y distribuidos: rituales de equipo, comunicación asíncrona, cultura de confianza, gestión del rendimiento y bienestar sin presencia física.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en liderazgo de equipos remotos con experiencia en empresas que operan 100% de forma distribuida o en modelos híbridos complejos. Tu enfoque es concreto: los equipos remotos no se gestionan igual que los presenciales, y los líderes que no adaptan su estilo terminan con equipos desconectados, baja productividad y alta rotación. Necesito que me ayudes a ser un mejor líder para mi equipo distribuido.

## MI SITUACIÓN

- Tamaño del equipo: [número de personas]
- Distribución geográfica: [mismo país / diferentes países / diferentes zonas horarias — cuáles]
- Modelo: [100% remoto / híbrido — qué días presenciales / remoto con reuniones puntuales]
- Sector y tipo de trabajo: [desarrollo de software / diseño / ventas / marketing / otro]
- Tiempo que lleva el equipo siendo remoto: [meses o años]
- Principal desafío que experimentas: [desconexión / falta de visibilidad / comunicación / gestión del rendimiento / bienestar / otro]
- ¿Cuánto tiempo llevas liderando este equipo en remoto?: [tiempo]

---

## MÓDULO 1 — EL CAMBIO DE MENTALIDAD DEL LÍDER REMOTO

### 1.1 De la gestión por presencia a la gestión por resultados

Explica el cambio de paradigma que debe hacer un líder que viene de la gestión presencial:
- Por qué el control visual ("le veo en la oficina, luego está trabajando") es contraproducente en remoto
- El framework "Output over input": cómo definir los resultados esperados con suficiente claridad
- Cómo establecer objetivos a nivel de equipo e individual que no requieren supervisión directa
- La trampa del micromanager remoto: las señales que indican que estás gestionando por presencia digital (pedir actualizaciones constantes en Slack, revisar cuándo alguien se conectó, etc.)

### 1.2 Construir confianza sin estar en la misma habitación

Los 5 comportamientos del líder que generan confianza en equipos remotos:
1. Cumplir los compromisos que adquieres en las reuniones de equipo
2. Dar visibilidad sobre tu propio trabajo y estado (practicar lo que predicas)
3. Dar feedback rápido (no tardas días en responder preguntas)
4. Defender al equipo frente a la organización (no sacrificar a los tuyos)
5. Tratar los errores como aprendizaje, no como causa de vergüenza pública

---

## MÓDULO 2 — COMUNICACIÓN Y RITUALES DE EQUIPO

### 2.1 El stack de comunicación del equipo remoto

Diseña la arquitectura de comunicación para mi equipo con estas capas:

**Asíncrona (la base):**
- Para qué tipo de mensaje: qué va por email, qué por Notion/Confluence, qué por Slack/Teams
- La regla de "documenta antes de preguntar": cómo instaurarla sin que sea una burocracia
- Los Updates diarios o semanales escritos: el formato que funciona y el que no

**Síncrona (restringida pero rica):**
- Qué reuniones son imprescindibles y cuáles puedes eliminar
- Cómo hacer reuniones remotas que la gente no quiera saltar
- La regla de la cámara: cuándo exigirla y cuándo no

**Informal (la que más se pierde en remoto):**
- Cómo replicar los encuentros casuales de la oficina sin forzarlos
- Las herramientas para el café virtual que no parecen un ejercicio corporativo

### 2.2 Los rituales esenciales del equipo distribuido

Para cada ritual, dame la frecuencia, duración, facilitador, formato y el error más común al implementarlo:

**Daily standup asíncrono**: qué funciona y qué lo convierte en un teatro
**Weekly team sync**: agenda tipo de 30-45 minutos que no parece una reunión de status
**Retrospectiva mensual**: cómo hacerla en remoto con herramientas de colaboración visual
**All-hands trimestral virtual**: cómo mantener la atención de 30+ personas en un Zoom de 90 minutos
**1:1 semanal**: las preguntas que un manager remoto debe hacer y las que no debe hacer

### 2.3 Documentar para eliminar reuniones

El sistema de documentación asíncrona que reduce las reuniones del equipo en un 40%:
- El "Working Out Loud": cómo cada persona documenta su progreso de forma que no requiere preguntas
- Las decisiones escritas (RFC, PRD, ADR): cómo hacer que el equipo las lea realmente
- El no-meeting day: cómo proteger el tiempo de trabajo profundo

---

## MÓDULO 3 — GESTIÓN DEL RENDIMIENTO EN REMOTO

### 3.1 OKRs y objetivos en equipos distribuidos

Cómo adaptar el ciclo de OKRs para que funcione en un equipo distribuido:
- La revisión semanal de OKRs en formato asíncrono (evita la reunión de status)
- Cómo detectar un OKR en riesgo antes de que sea tarde
- El balance entre autonomía en el cómo y claridad en el qué

### 3.2 El 1:1 como herramienta de gestión remota

El 1:1 semanal o quincenal es la reunión más importante del líder remoto. Dame:
- La estructura de los primeros 10 minutos (check-in de bienestar, no de tareas)
- Las 5 preguntas que revelan la salud real de la persona (no el proyecto)
- Las señales de alerta de alguien en riesgo de burnout o desconexión que solo aparecen en el 1:1
- Cómo gestionar a la persona que siempre dice que "todo va bien"

### 3.3 Feedback continuo en equipos remotos

Cómo dar feedback de calidad cuando no compartes espacio físico:
- El modelo SBI (Situation, Behaviour, Impact) adaptado a conversaciones remotas
- Por qué el feedback escrito tiene más peso emocional que el oral y cómo usarlo bien
- La frecuencia de feedback que evita las "sorpresas" en la evaluación anual
- Cómo crear una cultura de feedback entre pares (no solo del manager al equipo)

---

## MÓDULO 4 — BIENESTAR Y PREVENCIÓN DEL BURNOUT

### 4.1 Las señales de burnout que el manager remoto debe detectar

Los indicadores de que alguien en el equipo está sobrecargado o desconectado, visibles incluso sin presencia física:
- Cambios en el patrón de respuesta (responde mucho más tarde o mucho más rápido de lo habitual)
- Calidad de las entregas deteriorada
- Ausencia en conversaciones donde antes participaba
- Lenguaje más negativo o más escueto en mensajes escritos

### 4.2 Políticas de bienestar para el equipo remoto

Las 5 políticas que protegen el bienestar sin necesidad de grandes inversiones:
1. Right to disconnect: qué significa concretamente y cómo se respeta
2. No-meeting blocks protegidos en el calendario
3. Vacaciones obligatorias y el problema de las vacaciones no tomadas en remoto
4. El fondo de home office: qué cubre y por qué importa para la retención
5. La revisión anual de carga de trabajo: la conversación que nadie tiene pero todos necesitan

---

## ENTREGABLE: CHECKLIST DEL LÍDER REMOTO

Genera una checklist de 25 prácticas que el líder de un equipo remoto debe revisar trimestralmente, organizada por área (comunicación, rendimiento, cultura, bienestar), con la frecuencia de revisión recomendada para cada una.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar las prácticas de liderazgo que hacen funcionar equipos remotos y distribuidos con comunicación, rendimiento y bienestar',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],

            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Gestión de cuentas a cobrar: reduce el DSO y cobra más rápido sin dañar al cliente',
                'description'      => 'Sistema completo para reducir el Days Sales Outstanding (DSO) y mejorar el flujo de caja mediante procesos de facturación, seguimiento y negociación de cobros sin comprometer la relación con el cliente.',
                'prompt_content'   => <<<'PROMPT'
Eres un director financiero con amplia experiencia en gestión del circulante y optimización del ciclo de cobro. Tu enfoque es claro: una empresa puede ser rentable en el P&L y morir por falta de liquidez. El cobro no es un trámite administrativo, es una función financiera estratégica. Necesito que me ayudes a reducir el DSO de mi empresa y a construir un proceso de cobro que proteja el flujo de caja sin dañar las relaciones comerciales.

## MI SITUACIÓN FINANCIERA

- Sector y modelo de negocio: [tu respuesta]
- Facturación anual aproximada: [rango]
- DSO actual (Days Sales Outstanding): [número de días, o "no lo sé"]
- Plazo de pago habitual con clientes: [30 / 60 / 90 días / variable]
- Porcentaje de facturas que se cobran fuera de plazo: [estimación]
- ¿Tienes software de facturación o ERP?: [sí — cuál / no]
- Principal causa de retraso en los cobros: [clientes que no pagan / disputas / proceso interno lento / falta de seguimiento]
- ¿Tienes clientes muy grandes que imponen sus condiciones de pago?: [Sí — porcentaje de la facturación / No]

---

## MÓDULO 1 — DIAGNÓSTICO: DÓNDE SE PIERDE EL DINERO

### 1.1 Cómo calcular el DSO correctamente

Explica las tres formas de calcular el DSO y cuál es la más precisa para mi tipo de negocio:

**Método simple:**
DSO = (Cuentas a cobrar / Ventas del período) × Número de días

**Método countback (el más preciso para empresas con estacionalidad):**
[explica el proceso paso a paso]

**DSO colección vs DSO best possible:**
La diferencia entre el DSO actual y el DSO mínimo alcanzable si todos pagaran al vencimiento. La brecha entre ambos es el potencial de mejora.

### 1.2 Mapa de antigüedad de las cuentas a cobrar (aging report)

Cómo construir y leer el aging report:

| Vencimiento | Importe | % del total | Acción recomendada |
|------------|---------|-------------|-------------------|
| No vencido | | | |
| 1-30 días | | | |
| 31-60 días | | | |
| 61-90 días | | | |
| > 90 días | | | |

Explica qué indica cada tramo, el benchmark de distribución saludable para mi sector y la señal de alerta cuando un tramo supera el umbral.

### 1.3 Las causas raíz del cobro tardío

Clasifica las causas de retraso en:

**Causas internas (en mi empresa):**
- Facturas emitidas tarde o con errores (número de pedido incorrecto, datos fiscales incorrectos)
- Términos de pago mal negociados desde el principio
- Falta de proceso de seguimiento sistemático
- Ausencia de responsable claro del cobro

**Causas externas (en el cliente):**
- Procesos de aprobación internos lentos (especialmente en grandes empresas)
- Tesorería del cliente en dificultades
- Disputas sobre el servicio o el importe
- Cambios en el contacto de cuentas a pagar

Para cada causa, dame la solución específica.

---

## MÓDULO 2 — PROCESO DE COBRO: ANTES DEL VENCIMIENTO

### 2.1 La facturación que acelera el cobro

Los errores de facturación que retrasan el pago sin que el cliente lo diga:
- Facturas sin el número de orden de compra del cliente
- Condiciones de pago ambiguas ("a 30 días" vs "a 30 días fecha factura" vs "a 30 días fecha recepción")
- No especificar el método de pago preferido
- Facturas enviadas a la persona equivocada

La lista de campos obligatorios en cada factura para que entre en el proceso de pago del cliente sin fricciones.

### 2.2 El email de aviso previo al vencimiento

Escribe el email que se envía automáticamente 5-7 días antes del vencimiento:
- Tono: amable, profesional, sin urgencia artificial
- Incluye el resumen de la factura y el método de pago preferido
- CTA: confirmar la fecha de pago prevista

### 2.3 Automatización del ciclo de cobro

Configura la secuencia automática de comunicaciones:

| Día | Trigger | Canal | Mensaje | Objetivo |
|-----|---------|-------|---------|---------|
| -7 | Pre-vencimiento | Email | Aviso amable | Confirmar fecha de pago |
| 0 | Vencimiento | Email | Recordatorio | Confirmar si se ha tramitado |
| +5 | 5 días de retraso | Email + teléfono | Seguimiento | Entender el motivo del retraso |
| +15 | 15 días de retraso | Llamada | Negociación | Acuerdo de pago |
| +30 | 30 días de retraso | Email formal | Carta de reclamación | Última vía amistosa |
| +45 | 45 días de retraso | [siguiente nivel] | | |

---

## MÓDULO 3 — NEGOCIACIÓN Y RECUPERACIÓN DE COBROS

### 3.1 La llamada de cobro que no destruye la relación

Guión completo de la llamada de seguimiento cuando la factura lleva 5-15 días de retraso:
- Apertura sin reproches
- La pregunta que revela la causa real del retraso
- Cómo manejar las excusas más comunes (no la hemos recibido / está en tramitación / esperamos la aprobación del director)
- Cómo cerrar la llamada con un compromiso de fecha específico

### 3.2 Acuerdos de pago aplazado

Cuándo ofrecer un plan de pago a un cliente en dificultades, cómo estructurarlo y cómo proteger el riesgo (no ofrecer nuevos servicios mientras haya deuda pendiente).

### 3.3 Gestión de la disputa de factura

El proceso de resolución cuando el cliente disputa el importe o la calidad del servicio:
- Cómo separar la disputa del pago de la parte no disputada
- Plazo máximo para resolver internamente antes de escalar
- Cuándo el cálculo coste/beneficio indica que es mejor negociar que litigar

---

## MÓDULO 4 — PREVENCIÓN: LAS CONDICIONES COMERCIALES QUE PROTEGEN LA CAJA

### 4.1 Renegociación de plazos con clientes grandes

Estrategia para negociar mejores condiciones de pago con clientes que imponen 90 días:
- Argumentos que funcionan (descuento por pronto pago, mejor servicio prioritario)
- Cuándo el coste financiero del plazo justifica un recargo
- La cláusula de intereses de demora: cómo incluirla en el contrato sin que el cliente se ofenda

### 4.2 El scoring de crédito de clientes

Proceso simple para evaluar el riesgo de cobro de un cliente nuevo antes de entregar el servicio:
- Qué información pedir y cómo
- La consulta en registros de morosidad disponibles en España
- Cuándo exigir pago anticipado o aval bancario

---

## ENTREGABLE: DASHBOARD DE CUENTAS A COBRAR

Genera la plantilla del dashboard semanal de gestión de cobros con los KPIs, los clientes prioritarios a contactar esta semana y el impacto estimado en el DSO de las acciones en curso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Reducir el DSO y construir el proceso sistemático de cobro que mejora el flujo de caja sin dañar las relaciones con clientes',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],

            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'M&A para compradores: fases del proceso, due diligence y las trampas más comunes',
                'description'      => 'Guía práctica del proceso de compraventa de empresa desde la perspectiva del comprador: fases del M&A, qué revisar en la due diligence, cómo negociar el precio y los errores que cuestan millones.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado mercantilista y asesor de M&A con experiencia en transacciones de compraventa de empresas en el rango de 1 a 50 millones de euros. Tu enfoque es proteger al comprador de los riesgos ocultos y asegurarte de que la transacción tiene sentido estratégico y económico. Necesito que me guíes por el proceso completo de compra de una empresa, desde la identificación hasta el cierre.

AVISO IMPORTANTE: Esta guía tiene carácter educativo. Cualquier operación de M&A requiere asesoramiento legal, financiero y fiscal especializado adaptado a la transacción concreta.

## MI SITUACIÓN

- Perfil del comprador: [emprendedor individual / empresa comprando otra / fondo / directivo con MBO]
- Tipo de empresa objetivo: [pyme de servicios / SaaS / manufactura / distribución / otro]
- Rango de precio estimado: [menos de 1M€ / 1-5M€ / 5-20M€ / más de 20M€]
- Motivación de la compra: [crecimiento inorgánico / adquisición de tecnología / eliminación de competidor / sucesión familiar]
- ¿Tienes asesores ya contratados?: [sí — describe / no]
- Fase actual del proceso: [todavía buscando / carta de intenciones firmada / en due diligence / otro]

---

## FASE 1 — IDENTIFICACIÓN Y CUALIFICACIÓN DEL TARGET

### 1.1 Criterios de selección del target

Define los criterios estratégicos y financieros mínimos que debe cumplir una empresa candidata:

**Criterios estratégicos (fit):**
- Complementariedad con el negocio del comprador
- Posicionamiento en el mercado objetivo
- Capacidades o activos que el comprador no tiene
- Riesgo de integración cultural

**Criterios financieros (mínimos para no perder tiempo):**
- EBITDA mínimo y margen mínimo
- Crecimiento orgánico de los últimos 3 años
- Nivel de deuda financiera neta aceptable
- Concentración máxima de clientes (si un solo cliente representa >30% de los ingresos, es una señal de riesgo)

### 1.2 Las primeras conversaciones con el vendedor

Cómo gestionar el primer contacto y las primeras reuniones:
- La información que debes pedir en la primera reunión sin asustar al vendedor
- El Teaser y el IM (Information Memorandum): qué contienen y cómo leerlos con ojo crítico
- Las preguntas que revelan si el vendedor tiene prisa o si puede negociar con calma
- Cómo evaluar la motivación real de la venta (sucesión / cansancio / necesidad de liquidez / quiere seguir con un socio)

---

## FASE 2 — VALORACIÓN Y CARTA DE INTENCIONES

### 2.1 Métodos de valoración para pymes

Explica los métodos más usados en transacciones de pyme y cuándo aplicar cada uno:

**Múltiplo de EBITDA:**
- Cómo calcular el EBITDA ajustado (quitando gastos extraordinarios, salario de mercado del owner, etc.)
- Rangos de múltiplo por sector y tamaño (el múltiplo de una SaaS vs una empresa de servicios profesionales)
- Por qué el EBITDA "normalizado" es siempre inferior al que presenta el vendedor

**Descuento de flujos de caja (DCF):**
- Cuándo el DCF es el método más relevante y cuándo es un ejercicio de imaginación
- La tasa de descuento (WACC) para una pyme y por qué es más alta que para una gran empresa

**Valoración por activos netos:**
- Cuándo aplica (empresas en pérdidas, holdcos, inmobiliarias)

### 2.2 El ajuste de precio por deuda neta y capital de trabajo

Explica estos ajustes críticos que muchos compradores no entienden:
- Deuda financiera neta: qué incluye y cómo ajusta el equity value
- Capital de trabajo normalizado: qué es y por qué el comprador paga o recibe la diferencia
- El "locked box" vs el "completion accounts": cuál protege más al comprador y cuándo negociar cada uno

### 2.3 La Carta de Intenciones (LOI / Term Sheet)

Los elementos que DEBEN estar en la LOI y los que nunca debes aceptar en la primera propuesta del vendedor:

**Elementos clave:**
- Precio y estructura del pago (precio fijo / earnout / mix)
- Exclusividad y duración
- Condiciones previas al cierre
- Acceso a la due diligence
- Break fee si alguna de las partes rompe

**Lo que nunca debes aceptar sin luchar:**
- Earnouts con métricas que el vendedor controla
- Cláusulas de indemnización asimétricas
- Períodos de exclusividad demasiado cortos para una DD seria

---

## FASE 3 — DUE DILIGENCE: EL CORAZÓN DEL PROCESO

### 3.1 Las 5 áreas de la due diligence y qué buscas en cada una

**Due Diligence Financiera:**
- Qué documentos pedir (estados financieros de 3-5 años, contratos con clientes, aging de cobros)
- Las 10 señales de alerta más frecuentes en las cuentas de una pyme
- Cómo detectar el "window dressing" (maquillaje de cuentas previo a la venta)

**Due Diligence Legal:**
- Contratos con clientes: cláusulas de change of control que pueden anularlos
- Contratos laborales: indefinidos, pactos de permanencia, directivos clave
- Litigios pendientes y contingencias fiscales
- Propiedad intelectual: ¿la empresa realmente es dueña de su tecnología o marca?
- Estructura societaria: participaciones, derechos de tanteo, pactos de socios

**Due Diligence Comercial:**
- Concentración de clientes y contratos de renovación
- Posición competitiva real vs. la que presenta el vendedor
- Pipeline de ventas: qué está firmado vs. qué "está a punto de firmarse"

**Due Diligence de RRHH:**
- Organigrama real y dependencia de personas clave
- Cultura: cómo de difícil será la integración
- Acuerdos de retención del equipo clave

**Due Diligence de IT/Tecnología (para empresas tech):**
- Arquitectura técnica y deuda técnica acumulada
- Dependencias de terceros
- Seguridad y cumplimiento de RGPD

### 3.2 Las 8 trampas más comunes que encuentran los compradores

Para cada trampa: cómo se presenta, por qué no se detecta a tiempo y cómo protegerse:
1. EBITDA inflado por gastos diferidos
2. Ingresos de clientes con los que no hay contrato escrito
3. Contratos de clientes con cláusula de change of control
4. Deuda con el owner no registrada como deuda
5. Contingencias fiscales no provisionadas
6. El equipo clave que se irá si el vendedor se va
7. Tecnología que "le pertenece" a un empleado o a una empresa relacionada
8. Procesos laborales no declarados

---

## FASE 4 — NEGOCIACIÓN Y CIERRE

### 4.1 El Contrato de Compraventa (SPA): cláusulas críticas

Explica en lenguaje comprensible las cláusulas del SPA que más impacto tienen para el comprador:
- Representaciones y garantías: qué cubren y durante cuánto tiempo
- Indemnizaciones: el mecanismo y los límites (cap, basket, escrow)
- Earn-out: cómo estructurarlo para que sea justo y ejecutable
- Condiciones suspensivas y resolutorias
- Pacto de no competencia del vendedor

### 4.2 El cierre: qué pasa el día 0

Lista de tareas y verificaciones del closing day, y el proceso para los 100 días posteriores al cierre (el periodo más crítico de la integración).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Guiar el proceso de compra de una empresa desde la valoración hasta la due diligence y el cierre con todas las trampas identificadas',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],

            // 9 — Customer Support
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de quejas en redes sociales: protocolo para responder críticas públicas sin empeorar la situación',
                'description'      => 'Protocolo completo para gestionar quejas y críticas públicas en Twitter/X, Instagram y Google Maps, con guiones de respuesta, escala de urgencia y estrategia de recuperación de reputación.',
                'prompt_content'   => <<<'PROMPT'
Eres un especialista en gestión de reputación online y community management de crisis. Tu especialidad es convertir los momentos de queja pública en oportunidades de demostrar el compromiso de la marca con el cliente, sin que la situación escale ni dañe la reputación de forma permanente. Necesito que me ayudes a construir el protocolo completo de gestión de quejas en redes sociales para mi negocio.

## MI CONTEXTO

- Tipo de negocio: [restaurante / hotel / ecommerce / SaaS / tienda / servicio profesional / otro]
- Canales sociales donde tienes presencia activa: [Twitter/X / Instagram / Facebook / Google Maps / TripAdvisor / otro]
- ¿Tienes equipo de social media o lo gestionas tú solo?: [solo / 1 persona / equipo]
- Volumen de menciones y mensajes directos mensuales: [aproximado]
- ¿Has tenido alguna crisis de reputación online?: [Sí — describe brevemente / No]
- Principal tipo de queja que recibes: [producto / envío / atención al cliente / precio / otro]
- Herramienta de monitorización: [Hootsuite / Brandwatch / alertas de Google / ninguna / otro]

---

## MÓDULO 1 — MONITORIZACIÓN Y DETECCIÓN TEMPRANA

### 1.1 Sistema de escucha social

Define el sistema de monitorización que detecta menciones negativas antes de que escalen:
- Las keywords que debes monitorizar (nombre de marca, nombre de producto, variaciones y errores tipográficos comunes)
- Herramientas gratuitas y de pago para cada volumen de negocio
- La alerta que me avisa en tiempo real cuando hay una mención con sentimiento negativo
- Frecuencia mínima de revisión según el tamaño del negocio

### 1.2 La escala de urgencia de una queja

Clasifica cualquier queja en uno de estos niveles y define el tiempo de respuesta máximo para cada uno:

| Nivel | Descripción | Ejemplo | Tiempo máx. respuesta | Quién responde |
|-------|------------|---------|----------------------|----------------|
| Nivel 1 — Crítico | Riesgo de crisis viral, seguridad o legal | Producto dañino, acusación grave, influencer con 100K+ | 15-30 min | Dirección + Comunicación |
| Nivel 2 — Alto | Queja con potencial de amplificación | Queja con 50+ likes, retweet de cuenta relevante | 1-2 horas | Community manager + CS |
| Nivel 3 — Medio | Queja directa sin amplificación | Comentario negativo en Instagram, reseña de 1 estrella | 4-8 horas | Community manager |
| Nivel 4 — Bajo | Queja que puede resolverse con FAQ | Pregunta sobre envío, duda sobre política de devolución | 24 horas | Respuesta tipo |

---

## MÓDULO 2 — PRINCIPIOS DE RESPUESTA

### 2.1 Las reglas de oro de la respuesta pública

Los 10 principios que deben guiar cualquier respuesta pública, con el error opuesto que cometen la mayoría de las marcas:

1. **Responde siempre, nunca ignores**: por qué el silencio amplifica la queja
2. **Responde rápido, no perfecto**: el tiempo importa más que la perfección del texto
3. **Empatiza primero, explica después**: el cliente quiere sentirse escuchado antes de escuchar tu explicación
4. **No te pongas a la defensiva**: aunque el cliente esté equivocado, la respuesta defensiva pierde siempre en público
5. **Pasa al canal privado para resolver**: la respuesta pública gestiona la percepción, el DM resuelve el problema
6. **Nunca borres un comentario negativo** (salvo excepciones claras): explica cuándo sí y cuándo no
7. **No entres en debates interminables**: sabe cuándo cerrar la conversación con dignidad
8. **Personaliza, no uses plantillas evidentes**: el cliente detecta el copy-paste
9. **Cierra en público**: cuando el problema se resuelve, cierra el hilo públicamente
10. **Convierte el detractor en testimonial**: cómo pedir que actualice su reseña cuando el problema se resolvió bien

### 2.2 El tono correcto por plataforma

Matices de tono para cada canal:
- **Twitter/X**: directo, conciso (el límite de caracteres obliga), más informal
- **Instagram**: más visual y emocional, usa el nombre del usuario, cierra con calor
- **Google Maps / TripAdvisor**: el público objetivo no es el quejoso sino los futuros clientes que leerán la respuesta; escribe pensando en ellos
- **Facebook**: más formal que Instagram, mayor variedad de edad del público

---

## MÓDULO 3 — GUIONES DE RESPUESTA POR TIPO DE QUEJA

### 3.1 Plantillas adaptables (no copiar-pegar, sino personalizar)

Para cada tipo de queja, proporciona la estructura de respuesta y un ejemplo completo:

**Tipo 1 — Producto defectuoso o servicio mal prestado:**
```
Estructura:
1. Saludo con nombre (si está disponible)
2. Reconocimiento del problema sin excusas
3. Disculpa genuina (no "lamentamos los inconvenientes")
4. Acción concreta que vamos a tomar
5. Invitación a continuar por privado con CTA específico
```

**Tipo 2 — Retraso en envío o en la prestación del servicio:**
[misma estructura]

**Tipo 3 — Atención al cliente percibida como mala:**
[misma estructura — especial cuidado con no defender al empleado en público]

**Tipo 4 — Precio percibido como abusivo:**
[misma estructura — cómo explicar el valor sin parecer arrogante]

**Tipo 5 — Queja que es claramente incorrecta o de mala fe:**
[cómo responder sin agredir, sin dar la razón y sin generar más debate]

**Tipo 6 — Queja de un troll o usuario que solo busca conflicto:**
[cuándo y cómo cerrar la conversación; cuándo es válido bloquear]

**Tipo 7 — Crisis viral (el peor escenario):**
[la respuesta de emergencia para el primer tweet, mientras se gestiona internamente]

### 3.2 Respuestas a reseñas de Google Maps y TripAdvisor

La estructura específica para las reseñas de Google Maps (las más leídas antes de tomar decisiones de compra):
- Los errores más frecuentes en las respuestas de Google Maps
- Por qué la longitud ideal es entre 100 y 200 palabras
- Cómo incluir naturalmente keywords de tu negocio sin que parezca SEO forzado
- La frase final que invita al cliente a volver

---

## MÓDULO 4 — GESTIÓN DE LA CRISIS VIRAL

### 4.1 El protocolo de crisis en 4 horas

Las acciones a ejecutar en las primeras 4 horas cuando una queja se está amplificando:

- **Hora 0**: detección y clasificación de nivel — ¿quién la está retuiteando? ¿qué alcance potencial tiene?
- **Hora 0-0,5**: respuesta pública inicial (aunque no tengas la solución completa, di que ya estás trabajando en ello)
- **Hora 0,5-2**: investigación interna y preparación de la respuesta completa
- **Hora 2-4**: respuesta completa y acción de compensación si aplica

### 4.2 Cuándo y cómo comunicar un error grave proactivamente

Si el error es tuyo, cuándo tiene más sentido comunicarlo antes de que lo publiquen los clientes afectados, y cómo hacerlo para que sea percibido como honestidad y no como excusa.

---

## MÓDULO 5 — RECUPERACIÓN DE REPUTACIÓN A MEDIO PLAZO

### 5.1 Estrategia de generación de reseñas positivas

Cómo construir un volumen de reseñas positivas que diluyan las negativas y mejoren la calificación media:
- El momento óptimo para pedir la reseña (justo tras la resolución exitosa de un problema o tras la entrega)
- El mensaje de WhatsApp/email que genera más tasa de conversión a reseña
- Las plataformas donde priorizar (Google Maps primero, luego las específicas del sector)

### 5.2 KPIs de reputación online

El dashboard mensual de reputación:
- Puntuación media en cada plataforma y evolución
- Tiempo medio de primera respuesta
- Porcentaje de quejas resueltas públicamente
- Ratio de reseñas positivas/negativas generadas en el período
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el protocolo de gestión de quejas en redes sociales con guiones de respuesta, escala de urgencia y estrategia de reputación',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],

            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Gestión del tiempo como freelance: el sistema que separa producción de gestión y evita el siempre-ocupado',
                'description'      => 'Sistema de gestión del tiempo para freelancers que distingue entre tiempo productivo y tiempo de gestión, protege el tiempo de trabajo profundo y elimina la trampa del estar siempre ocupado sin avanzar.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach especializado en productividad para profesionales independientes y freelancers. Tu enfoque es radical: la mayoría de los freelancers están permanentemente ocupados y perpetuamente subpagados, no porque no trabajen duro sino porque mezclan el tiempo de producción (el que genera ingresos) con el tiempo de gestión (el que los consume). Necesito que me ayudes a construir un sistema de gestión del tiempo que de verdad funcione para la vida freelance.

## MI SITUACIÓN ACTUAL

- Especialidad freelance: [descripción]
- Horas que "trabajas" de media por semana: [número]
- Horas que REALMENTE dedicas a trabajo que paga: [estimación honesta]
- Principal "ladrón de tiempo" que identificas: [emails / reuniones / cambios de contexto / redes sociales / gestión administrativa / otro]
- ¿Trabajas desde casa, en coworking o en movimiento?: [tu respuesta]
- ¿Tienes clientes que esperan respuesta inmediata?: [Sí — cuántos / No]
- Herramientas de productividad que ya usas: [Notion / Todoist / Google Calendar / otra / ninguna]
- ¿Tienes un horario definido o trabajas cuando puedes?: [horario / cuando puedo / mix]

---

## MÓDULO 1 — EL DIAGNÓSTICO: DÓNDE SE VA EL TIEMPO

### 1.1 El audit de tiempo de 1 semana

Antes de cambiar nada, necesitas saber dónde va tu tiempo ahora mismo. Define el proceso de audit:
- Cómo registrar cada bloque de 30 minutos durante 5 días laborables (herramienta recomendada: Toggl Track o papel)
- Las categorías en las que clasificar cada actividad:
  - **Trabajo cliente** (factura directamente)
  - **Desarrollo de negocio** (captación, propuestas, networking)
  - **Administración** (facturación, contabilidad, emails de gestión)
  - **Formación** (aprender algo nuevo)
  - **Reuniones** (distinguir: de cliente / internas / networking)
  - **Procrastinación disfrazada** (Slack, redes sociales, "investigar")

### 1.2 Las 3 preguntas que revela el audit

Cuando tengo los datos de la semana, ¿qué porcentaje de mi tiempo se va a cada categoría y cuál es el objetivo saludable para un freelance sostenible?

| Categoría | % actual típico del freelance | % objetivo |
|-----------|-------------------------------|-----------|
| Trabajo cliente (facturable) | 40-50% | 60-70% |
| Desarrollo de negocio | 5-10% | 15-20% |
| Administración | 20-30% | 5-10% |
| Formación | 5% | 10% |
| Procrastinación | 15-20% | <5% |

### 1.3 El cálculo de tu "utilization rate"

Explica el concepto y dame la fórmula para calcular mi ratio de utilización real:
- Cómo el bajo utilization rate es la causa principal de baja facturación, no la falta de trabajo
- El objetivo de utilization rate por tipo de freelance (creativo vs técnico vs consultor)
- El límite superior del utilization rate saludable (>80% sostenido lleva al burnout)

---

## MÓDULO 2 — LA ARQUITECTURA DEL TIEMPO FREELANCE

### 2.1 Los 4 tipos de tiempo que necesitas proteger

Para cada tipo, explica qué actividades van ahí y cómo protegerlo en el calendario:

**1. Tiempo de producción profunda (Deep Work):**
- Qué va aquí: el trabajo que requiere concentración sostenida de 60-90+ minutos
- Cuántos bloques necesitas por semana según mi tipo de trabajo
- Cómo protegerlo de interrupciones (reglas de disponibilidad, notificaciones, clientes)

**2. Tiempo de producción superficial:**
- Qué va aquí: emails de proyecto, pequeños ajustes, revisiones rápidas
- Por qué es peligroso mezclarlo con el deep work
- Cómo agrupar estas tareas en bloques (batching)

**3. Tiempo de desarrollo de negocio:**
- Qué va aquí: prospección, propuestas, networking, redes sociales
- Por qué el freelance que solo hace "lo de siempre" tiene ciclos de fiesta/hambre
- El bloque semanal mínimo que no puedes eliminar aunque estés lleno de trabajo

**4. Tiempo de administración y gestión:**
- Qué va aquí: facturación, contabilidad, contratos, emails generales
- Cómo automatizar o externalizar el 70% de estas tareas
- El "bloque administrativo" semanal que concentra todo esto en un solo momento

### 2.2 El diseño de la semana ideal

Ayúdame a diseñar mi semana ideal completa (no la posible, la ideal):

```
LUNES:
  8:00-10:00 — [tipo de actividad]
  10:00-13:30 — [tipo de actividad]
  14:30-16:30 — [tipo de actividad]
  16:30-18:00 — [tipo de actividad]

MARTES:
  [misma estructura]

[etc. para cada día de la semana]
```

Principios a aplicar en el diseño:
- El trabajo más exigente cognitivamente va en el bloque de mayor energía (mañana para la mayoría)
- Las reuniones van agrupadas en los mismos días (no dispersas toda la semana)
- Al menos 1 día a la semana sin reuniones (día de producción protegida)
- La gestión y el email se revisan 2 veces al día, no continuamente

### 2.3 La gestión de la disponibilidad con clientes

Cómo comunicar tu política de disponibilidad a los clientes de forma que la respeten sin sentirse ignorados:
- El mensaje de "horario de respuesta" que va en tu firma de email
- Cómo manejar el cliente que espera respuesta en minutos en un WhatsApp de empresa
- Cuándo tiene sentido definir un SLA de respuesta en el contrato
- La herramienta de reserva de reuniones (Calendly / TidyCal) que elimina el ping-pong de emails para agendas

---

## MÓDULO 3 — LOS SISTEMAS QUE AHORRA TIEMPO

### 3.1 El sistema de gestión de tareas para freelancers

Diseña el sistema de gestión de tareas (no un sistema de productividad genérico, sino uno adaptado a la vida freelance):

**El nivel de proyecto**: un proyecto por cliente, con sus entregables y fechas
**El nivel de tarea**: las tareas concretas de cada proyecto, con estimación de tiempo
**El nivel de próximas acciones**: lo que haré hoy, no lo que haré "algún día"

Cómo integrar estos tres niveles en la herramienta que ya uso, con la revisión diaria (15 minutos) y la revisión semanal (45 minutos) que lo mantienen actualizado.

### 3.2 Las automatizaciones que liberan 3-5 horas a la semana

Para cada área, dame la herramienta y el proceso de configuración:

1. **Facturación automática**: generar y enviar facturas recurrentes sin intervención manual
2. **Seguimiento de cobros**: recordatorios automáticos antes y después del vencimiento
3. **Onboarding de clientes**: formulario + secuencia de email que recopila toda la información que necesitas sin 3 reuniones previas
4. **Reserva de reuniones**: eliminar el ping-pong con un enlace de Calendly + integración con Google Meet/Zoom
5. **Propuestas en PDF**: plantilla que se actualiza en 15 minutos, no en 3 horas

### 3.3 La rutina de cierre de la semana (viernes, 30 minutos)

El proceso de revisión semanal que garantiza que llegas al lunes con claridad, no con ansiedad:
1. Revisar lo completado vs. lo planificado
2. Actualizar el estado de cada proyecto activo
3. Definir las 3 prioridades de la semana siguiente
4. Revisar el pipeline de captación
5. Procesar la bandeja de entrada hasta cero

---

## MÓDULO 4 — EL CICLO DE HAMBRE Y FIESTA (Y CÓMO ROMPERLO)

Explica por qué tantos freelancers caen en el ciclo de "mucho trabajo / búsqueda desesperada de trabajo" y el mecanismo psicológico que lo perpetúa.

El sistema de "captación mínima garantizada" que mantiene el pipeline activo incluso cuando estás al 100% de capacidad:
- El bloque semanal de 90 minutos que no se cancela aunque estés ocupado
- Las 3 actividades de captación que más retorno dan con menos tiempo invertido
- Cómo medir la salud del pipeline con el "pipeline coverage ratio" (valor del pipeline / objetivo de facturación)

---

## ENTREGABLE: MI SISTEMA EN UNA PÁGINA

Genera el documento de "mi sistema de productividad freelance" en una sola página que describa: mi semana ideal, mis bloques protegidos, mis automatizaciones activas, mi rutina de revisión y mis métricas de tiempo. Formato que pueda pegar en Notion.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el sistema de gestión del tiempo freelance que separa producción de gestión y elimina la trampa del siempre-ocupado',
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
