<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills65Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Lead scoring y nurturing avanzado',
                'description'      => 'Puntúa los leads por comportamiento y envíales el mensaje correcto en el momento exacto. Sistema de scoring dinámico y secuencias de nurturing que aumentan la conversión a cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing automation y CRM con especialización en lead scoring predictivo y nurturing B2B y B2C.

Voy a describir mi base de leads y mi proceso actual, y necesito que me ayudes a construir un sistema de scoring y nurturing avanzado que aumente mis tasas de conversión.

**Contexto actual:**
[Describe: tu producto/servicio, cómo captas los leads (contenido, ads, eventos, etc.), qué herramienta de marketing automation usas y cuál es tu tasa de conversión actual de lead a cliente]

---

## BLOQUE 1 — DISEÑO DEL MODELO DE SCORING

### 1.1 Las dos dimensiones del scoring

Un sistema de scoring completo combina dos dimensiones independientes:

**Scoring de perfil (¿es el lead ideal?):**
| Atributo | Criterio | Puntos |
|---|---|---|
| Cargo | Director, VP, C-level | +20 |
| Cargo | Manager, Responsable | +10 |
| Cargo | Ejecutivo junior | +0 |
| Tamaño empresa | +100 empleados | +15 |
| Sector | Sector prioritario A | +20 |
| Sector | Sector prioritario B | +10 |
| País/región | Mercado objetivo | +15 |

**Scoring de comportamiento (¿está listo para comprar?):**
| Acción | Puntos | Caducidad |
|---|---|---|
| Visita a página de precios | +30 | 30 días |
| Demo solicitada | +50 | Sin caducar |
| Email de nurturing abierto | +5 | 7 días |
| Click en email | +15 | 14 días |
| Descarga de caso de éxito | +20 | 30 días |
| Visita repetida al sitio (+3 veces en 7 días) | +25 | 7 días |
| Inactividad de 60 días | -20 | — |

Adapta estos criterios a mis fuentes de datos y herramientas actuales. ¿Qué eventos comportamentales puedo trackear con lo que ya tengo?

### 1.2 Umbrales de calificación

Define los umbrales para mi caso:
- **Cold (0-30)**: No apto para contacto comercial todavía
- **Warm (31-60)**: Entra en nurturing activo
- **Hot (61-80)**: Notificación al equipo de ventas para seguimiento
- **Sales Ready (81+)**: Contacto inmediato de ventas en 24h

¿Cómo ajusto estos umbrales según los resultados de los primeros 90 días?

### 1.3 Degradación del score (score decay)
- Por qué un lead que fue muy activo hace 6 meses no debe seguir teniendo puntuación alta
- Regla de degradación: reducción del 10% del score de comportamiento cada 30 días de inactividad
- Cuándo reiniciar el score a cero vs. archivarlo

---

## BLOQUE 2 — SECUENCIAS DE NURTURING POR ETAPA

### 2.1 Nurturing para Cold Leads

Objetivo: educación y construcción de confianza, sin presión de venta.

Cadencia: 1 email cada 10 días, máximo 6 emails antes de considerar inactivo.

| Email | Día | Tipo de contenido | CTA |
|---|---|---|---|
| #1 | Día 0 | Bienvenida + el problema que resuelves | Recurso gratuito |
| #2 | Día 10 | Contenido educativo (guía o checklist) | Leer más |
| #3 | Día 20 | Caso de éxito de cliente similar | Ver caso |
| #4 | Día 30 | Contenido sobre el coste del problema | Calculadora o herramienta |
| #5 | Día 40 | Comparativa o diferenciación | Demo o prueba |
| #6 | Día 50 | Último intento + pregunta directa | ¿Sigue siendo relevante? |

### 2.2 Nurturing para Warm Leads

Cadencia más intensa: 1 email cada 5 días, más personalizado.

Dame las líneas de asunto y el cuerpo completo (150-200 palabras cada uno) para los 3 emails más importantes en esta fase: el de caso de éxito, el de objeción más común y el de demo/prueba.

### 2.3 Alertas para Hot Leads
- Qué notificación exacta recibe el comercial cuando un lead llega a puntuación Hot
- Qué información debe incluir la alerta (acciones recientes del lead, páginas visitadas, emails abiertos)
- El guión de la primera llamada al lead Hot: cómo abrir sin parecer que lo estabas vigilando

---

## BLOQUE 3 — PERSONALIZACIÓN DEL NURTURING

### 3.1 Segmentación por caso de uso
Si mi producto sirve para varios casos de uso, cómo bifurco las secuencias según lo que el lead ha manifestado interés (formulario de captación, contenido descargado, páginas visitadas).

Ejemplo de árbol de decisión:
- Lead descarga "Guía para startups" → Secuencia A (mensajes orientados a startup)
- Lead visita "Precios enterprise" → Secuencia B (mensajes orientados a empresa grande)
- Lead sin señal clara → Secuencia genérica con bifurcación según primer click

### 3.2 Dynamic content en emails
- Variables de personalización básicas: nombre, empresa, cargo
- Bloques de contenido dinámico según sector o tamaño de empresa
- Cuándo la personalización excesiva genera incomodidad ("efecto stalker") y cómo evitarla

---

## BLOQUE 4 — ALINEACIÓN VENTAS Y MARKETING (SLA)

El nurturing solo funciona si ventas y marketing están de acuerdo. Define el SLA:

| Métrica | Marketing se compromete | Ventas se compromete |
|---|---|---|
| Volumen de leads MQL/mes | X leads | — |
| Calidad (% que llegan a demo) | >Y% | — |
| Tiempo de seguimiento de SQL | — | <24h hábiles |
| Feedback sobre calidad | — | 1 vez/semana |

¿Cómo implemento la reunión mensual de revisión de calidad de leads entre los dos equipos?

---

## BLOQUE 5 — MÉTRICAS Y OPTIMIZACIÓN

Las métricas que debo revisar cada mes para mejorar el modelo:

1. **MQL to SQL conversion rate**: % de leads calificados por marketing que acepta ventas
2. **SQL to Opportunity rate**: % que pasa a oportunidad real
3. **Time to SQL**: tiempo medio desde lead hasta calificación
4. **Nurturing email engagement**: apertura, CTR y conversión por secuencia y por email
5. **Score accuracy**: % de leads Hot que acaban comprando (valida el umbral)

Dame un dashboard de una página (tabla) con estas métricas, su fórmula, el benchmark de referencia y el semáforo de alerta.

Al final, dame las 3 señales que me dicen que mi modelo de scoring necesita una recalibración urgente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Construir un sistema de lead scoring y nurturing automatizado que aumente la conversión de lead a cliente.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo móvil cross-platform',
                'description'      => 'React Native vs Flutter: cuándo usar cada uno, cómo estructurar el proyecto y las diferencias clave para tomar la decisión correcta antes de empezar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un desarrollador mobile senior con experiencia real en producción tanto con React Native como con Flutter. Has lanzado apps con ambas tecnologías y conoces sus ventajas y limitaciones reales, no solo las de los materiales de marketing.

Voy a describir mi proyecto y necesito que me ayudes a tomar la decisión correcta entre React Native y Flutter, y luego a estructurar el proyecto de la mejor manera posible.

**Contexto de mi proyecto:**
[Describe: tipo de app (B2C, B2B, interna), funcionalidades principales, si ya existe una web o un backend, el stack del equipo actual y el plazo para la primera versión]

---

## PARTE 1 — DECISIÓN: REACT NATIVE VS FLUTTER

### 1.1 La comparativa honesta

| Criterio | React Native | Flutter | Mi caso |
|---|---|---|---|
| Curva de aprendizaje | Media (si ya sabes JS/React) | Media-alta (Dart es nuevo) | |
| Performance visual | Buena, con excepciones | Excelente (propio renderer) | |
| Acceso a APIs nativas | Bridge JS↔Native (mejora con JSI) | MethodChannel (más verboso) | |
| Ecosistema de librerías | Muy grande (npm) | Más limitado pero creciendo | |
| Hot reload en desarrollo | Sí (Fast Refresh) | Sí (muy rápido) | |
| Apps con custom UI muy distinta de iOS/Android | Más difícil | Más fácil (renderer propio) | |
| Integración en app nativa existente | Bien soportado | Soportado (brownfield) | |
| Tamaño del binario | Menor | Mayor (incluye el engine Skia) | |
| Soporte corporativo | Meta | Google | |
| Comunidad en España/LATAM | Mayor | Creciendo | |

### 1.2 Cuándo elegir React Native
- El equipo ya conoce React y JavaScript/TypeScript
- El diseño sigue los patrones de UI nativos de cada plataforma (no un diseño muy custom)
- Necesitas integrar con librerías del ecosistema web o reutilizar lógica de negocio de una web React
- La app comparte lógica con una web existente (monorepo con React Native Web)

### 1.3 Cuándo elegir Flutter
- El diseño es altamente custom y diferente al look nativo de cada plataforma
- La app será principalmente visual con muchas animaciones
- El equipo puede aprender Dart (curva razonable, 2-3 semanas para productividad básica)
- Necesitas soporte web/desktop además de móvil desde el mismo codebase
- La consistencia visual pixel-perfect entre iOS y Android es prioritaria

---

## PARTE 2 — ESTRUCTURA DEL PROYECTO

### Para React Native (con TypeScript)

```
src/
├── app/                    ← navegación y configuración global
│   ├── navigation/
│   └── providers/
├── features/               ← módulos por funcionalidad
│   └── auth/
│       ├── components/
│       ├── screens/
│       ├── hooks/
│       ├── api/
│       └── types/
├── shared/                 ← código reutilizable
│   ├── components/         ← design system
│   ├── hooks/
│   ├── utils/
│   └── constants/
└── infrastructure/
    ├── api/                ← cliente HTTP y endpoints
    ├── storage/            ← AsyncStorage wrapper
    └── notifications/
```

### Para Flutter

```
lib/
├── app/
│   ├── router/             ← go_router o auto_route
│   └── theme/
├── features/
│   └── auth/
│       ├── presentation/   ← widgets y pantallas
│       ├── domain/         ← entidades y repositorios (interfaces)
│       ├── data/           ← implementaciones
│       └── application/    ← bloc/cubit o riverpod providers
├── shared/
│   ├── widgets/
│   ├── extensions/
│   └── utils/
└── core/
    ├── network/
    ├── storage/
    └── di/                 ← inyección de dependencias (get_it)
```

Adapta esta estructura al tamaño y necesidades de mi proyecto.

---

## PARTE 3 — PATRONES DE ARQUITECTURA

### 3.1 Gestión de estado

**Para React Native:**
- Zustand (simple, pequeño, sin boilerplate): cuándo es la mejor opción
- Redux Toolkit (complejo pero muy poderoso): cuándo justifica la complejidad
- React Query + Zustand (server state vs. client state separados): la opción que más recomiendas y por qué

**Para Flutter:**
- BLoC/Cubit (evento→estado, muy testeable): para apps medianas y grandes
- Riverpod (más moderno, reactivo): para apps de cualquier tamaño
- Provider (más sencillo): para apps pequeñas o prototipos

### 3.2 Navegación
- React Native: React Navigation vs Expo Router (file-based routing)
- Flutter: go_router vs auto_route
- Cuál recomiendas en cada caso y por qué

### 3.3 Llamadas a API y caché
- React Native: React Query (TanStack Query) como estándar de facto
- Flutter: dio + retrofit para HTTP, plus flutter_query o riverpod para caching
- Manejo de errores: cómo centralizar el manejo de errores de red sin duplicar código

---

## PARTE 4 — FUNCIONALIDADES COMUNES Y CÓMO IMPLEMENTARLAS

Para cada funcionalidad, dame la librería recomendada para RN y para Flutter:

| Funcionalidad | React Native | Flutter |
|---|---|---|
| Autenticación (OAuth, biometría) | | |
| Push notifications | | |
| Cámara y galería | | |
| Mapas | | |
| Pagos (Stripe, etc.) | | |
| Analytics | | |
| Almacenamiento local seguro | | |
| Deep linking | | |

---

## PARTE 5 — TESTING

Dame la estrategia de testing para la tecnología que elijo:

- **Unit tests**: para la lógica de negocio (use cases, hooks, blocs)
- **Widget/component tests**: para los componentes de UI aislados
- **Integration tests**: para flujos completos (con Detox en RN, o integration_test en Flutter)
- Qué porcentaje de cobertura tiene sentido para una app mobile en fase de MVP

---

## PARTE 6 — PLAN DE LANZAMIENTO

Dame un plan de desarrollo de 12 semanas para la versión MVP:
- Semanas 1-2: setup, arquitectura, CI/CD y design system básico
- Semanas 3-6: features core
- Semanas 7-9: polish, edge cases y testing
- Semanas 10-11: beta cerrada y feedback
- Semana 12: submission a App Store y Google Play

Incluye las cosas que más suelen retrasar el lanzamiento y cómo anticiparlas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'         => 'Decidir entre React Native y Flutter y estructurar correctamente el proyecto mobile desde el inicio.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de páginas de error',
                'description'      => '404, 500 y estados de error que no frustran al usuario sino que le dan una salida clara. Principios de diseño y plantillas para convertir el error en una buena experiencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX con especialización en diseño de estados de error, páginas vacías y comunicación de errores al usuario. Tu enfoque es siempre: el error es una oportunidad para mejorar la relación con el usuario, no un momento para esconderse.

Voy a describir mi producto y necesito que me ayudes a diseñar las páginas y mensajes de error de forma que el usuario no se sienta perdido, frustrado ni abandonado.

**Contexto de mi producto:**
[Describe: tipo de app/web, perfil de usuario, los 3 errores más frecuentes que ven los usuarios actualmente y si usas un design system o librería de componentes]

---

## BLOQUE 1 — TIPOLOGÍA DE ERRORES QUE DEBO DISEÑAR

Primero, identifica todos los tipos de error que necesito cubrir en mi producto:

| Tipo de error | Causa | Ejemplo | Prioridad de diseño |
|---|---|---|---|
| 404 — Página no encontrada | URL incorrecta, enlace roto, contenido eliminado | /productos/id-que-ya-no-existe | Alta |
| 500 — Error de servidor | Fallo interno, timeout de BD | Error al cargar el dashboard | Alta |
| 403 — Sin permiso | Usuario no tiene acceso | Intentar acceder a admin sin rol | Media |
| 401 — No autenticado | Sesión expirada, no logueado | Acceso a página protegida | Media |
| Error de red | Sin conexión, timeout de fetch | App móvil sin datos | Alta |
| Error de formulario | Validación fallida | Campo requerido, formato incorrecto | Alta |
| Estado vacío (no es un error) | No hay datos todavía | Lista vacía, cero resultados | Alta |
| Error de carga de componente | Fallo en una sección específica | Widget de gráfica que no carga | Media |

Para mi producto, ¿cuáles son los más críticos y cuáles puedo tratar con un diseño más simple?

---

## BLOQUE 2 — PRINCIPIOS DE DISEÑO DE ERRORES

Los 7 principios que aplico al diseñar cualquier página o mensaje de error:

1. **Nunca culpabilizar al usuario**: frases como "Página no encontrada porque introdujiste una URL incorrecta" están prohibidas. El mensaje asume la responsabilidad del sistema.

2. **Siempre dar una salida**: cada estado de error debe tener al menos un CTA claro. El usuario nunca debe quedarse atascado.

3. **Lenguaje humano, no técnico**: "Error 500: Internal Server Error" es para los logs, no para el usuario. Traduce siempre a lenguaje cotidiano.

4. **Proporcional al impacto**: un error de validación de formulario no necesita una página entera. Un error 500 sí necesita toda la atención del usuario.

5. **Informativo sin prometer**: "Estamos trabajando en ello" solo si realmente hay un equipo activo. No prometas tiempos de resolución que no puedes cumplir.

6. **Consistente con el tono de la marca**: si tu producto es serio y formal, el error no debe ser gracioso. Si es casual y joven, un toque de humor apropiado reduce la frustración.

7. **Accesible**: los colores de error deben cumplir contraste WCAG AA, los mensajes deben ser legibles por lectores de pantalla.

---

## BLOQUE 3 — DISEÑO DE PÁGINAS DE ERROR ESPECÍFICAS

### 3.1 Página 404

Elementos que debe incluir:
- **Encabezado**: no pongas "Error 404". Ponlo que sea si acaso pequeño. El título principal debe describir la situación.
  - Malo: "Error 404 - Not Found"
  - Mejor: "Esta página no existe"
  - Bueno: "Parece que esta página ya no está aquí"
- **Mensaje secundario**: breve, empático, sin culpar. Máximo 2 frases.
- **Opciones de salida** (elige según el producto): volver al inicio, ir a la búsqueda, ver las secciones principales
- **Elemento visual**: ilustración o imagen que refuerce el tono (no obligatoria, pero mejora la experiencia si está bien hecha)
- **Búsqueda** (opcional): si tu producto tiene buscador, incluirlo directamente en la 404 reduce el abandono

Escríbeme 3 versiones del copy (texto) para la 404 con tonos diferentes:
1. Formal y profesional (B2B)
2. Amigable y cercano (B2C consumer)
3. Con un toque de humor apropiado (productos tech/jóvenes)

### 3.2 Página 500

Esta es la más delicada porque el usuario sabe que no es su culpa.

Elementos imprescindibles:
- **Reconocimiento del problema**: "Algo ha fallado por nuestra parte"
- **Estado actual**: si hay una status page, enlazar directamente
- **Qué puede hacer**: recargar la página, volver en unos minutos, contactar con soporte si es urgente
- **Código de error o referencia** (para usuarios técnicos o soporte): puede ir en texto pequeño al final

Dame el copy completo para la página 500, incluyendo asunto y cuerpo del email de notificación que se enviaría automáticamente si el error dura más de 5 minutos.

### 3.3 Estados vacíos

Los empty states no son errores, pero se diseñan junto a ellos. Clasifícalos:

| Tipo de empty state | Mensaje recomendado | CTA |
|---|---|---|
| Primera vez (onboarding) | "Todavía no tienes proyectos. Crea el primero." | Botón de crear |
| Sin resultados de búsqueda | "No encontramos resultados para 'X'. Prueba con otras palabras." | Limpiar filtros |
| Sin datos históricos | "No hay actividad registrada este mes." | Sin CTA (informativo) |
| Filtros muy restrictivos | "Ningún resultado coincide con los filtros aplicados." | Restablecer filtros |

---

## BLOQUE 4 — MENSAJES DE ERROR INLINE

Para los errores dentro de formularios:

- **Cuándo mostrar el error**: al perder el foco (onBlur) o al intentar enviar, no al escribir
- **Dónde mostrarlo**: debajo del campo afectado, nunca solo en la parte superior del formulario
- **Cómo escribir el mensaje**: describe el problema Y la solución. "El email no es válido" → "Introduce un email con el formato usuario@ejemplo.com"
- **Color y icono**: rojo accesible (#CC0000 mínimo o equivalente con contraste 4.5:1), icono de advertencia
- **Recuperación**: cuando el usuario corrige el error, el estado de error desaparece inmediatamente (validación en tiempo real)

Dame una lista de los 10 mensajes de error de formulario más comunes con el texto mejorado:

---

## BLOQUE 5 — CHECKLIST DE REVISIÓN

Dame un checklist de 12 puntos para auditar los estados de error de cualquier producto digital, cubriendo copy, diseño visual, accesibilidad y comportamiento técnico.

Al final, dame 3 ejemplos de productos digitales conocidos que tienen páginas de error excepcionalmente bien diseñadas y qué podemos aprender de cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 30,
                'use_case'         => 'Diseñar páginas de error (404, 500, empty states) que mejoran la experiencia de usuario en lugar de frustrarle.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Política de descuentos',
                'description'      => 'Diseña las reglas de descuento que protegen el margen sin desmotivar al equipo de ventas. Marco completo para definir, aprobar y controlar los descuentos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Ventas y un Controller financiero que trabajan juntos para diseñar una política de descuentos que sea efectiva comercialmente pero que no destruya el margen del negocio.

Voy a describir mi empresa y necesito que me ayudes a crear una política de descuentos completa que el equipo de ventas pueda aplicar de forma autónoma dentro de límites claros.

**Contexto de mi empresa:**
[Describe: tipo de producto/servicio, ticket medio, margen bruto actual, estructura del equipo de ventas y el problema más común con los descuentos hoy: se dan demasiados, sin criterio, sin aprobación, etc.]

---

## MÓDULO 1 — POR QUÉ LOS DESCUENTOS MAL GESTIONADOS SON UN PROBLEMA

Antes de diseñar la política, quiero entender el impacto real de los descuentos en mis números:

### El efecto del descuento en el margen

Para un producto con precio de venta de 100€ y coste variable de 60€ (margen del 40%):
- Un descuento del 10% → precio 90€ → margen 30€ → margen del 33% (-7 puntos)
- Un descuento del 20% → precio 80€ → margen 20€ → margen del 25% (-15 puntos)
- Un descuento del 30% → precio 70€ → margen 10€ → margen del 14% (-26 puntos)

Calcula para mí: ¿cuántas unidades adicionales necesito vender para compensar el impacto de un descuento del X% en mi margen total? (Fórmula de compensación de descuentos)

### Los 4 efectos secundarios de los descuentos sin política
1. Entrenamiento del cliente: aprende a esperar hasta el descuento para comprar
2. Señal de precio incorrecto: si siempre se negocia, quizás el precio de lista no es creíble
3. Inequidad entre clientes: dos clientes similares pagan precios muy diferentes
4. Presión sobre el equipo: si los comerciales saben que siempre se puede bajar, nunca defienden el precio

---

## MÓDULO 2 — DISEÑO DE LA ESTRUCTURA DE DESCUENTOS

### 2.1 Descuentos por volumen (objetivos)

Diseña una tabla de descuentos por volumen para mi caso:

| Volumen de compra | Descuento autorizado | Base racional |
|---|---|---|
| 1 unidad / contrato base | 0% | Precio de lista |
| 3-5 unidades | hasta 5% | Ahorro en gestión |
| 6-10 unidades | hasta 10% | Compromiso de volumen |
| +10 unidades / contrato anual | hasta 15% | Relación estratégica |

### 2.2 Descuentos por condiciones de pago

| Condición | Descuento autorizado |
|---|---|
| Pago anual por adelantado | hasta 10% |
| Pago semestral | hasta 5% |
| Pago mensual | 0% |

### 2.3 Descuentos por tipo de cliente

| Segmento | Descuento base | Justificación |
|---|---|---|
| Startups (primeros 2 años) | hasta 20% | Precio de entrada, LTV largo plazo |
| ONG / sector público | hasta 15% | Política corporativa |
| Cliente de referencia (caso de éxito) | hasta 10% | Valor del testimonial |
| Competidor en fase de migración | hasta 25% | Coste de cambio del cliente |

---

## MÓDULO 3 — NIVELES DE AUTORIZACIÓN

### 3.1 La matriz de aprobación

| Nivel de descuento | Quién puede aprobarlo | Plazo máximo de respuesta |
|---|---|---|
| 0-10% | El propio comercial (autónomo) | Inmediato |
| 11-20% | Manager de ventas | 24 horas |
| 21-30% | Director de ventas | 48 horas |
| +30% | CEO + Director Financiero | 72 horas |

### 3.2 Lo que debe incluir la solicitud de aprobación
Diseña el formulario interno (Slack, email, CRM) que el comercial debe rellenar para pedir aprobación de un descuento fuera de su rango:
- Nombre del cliente y etapa del deal
- Descuento solicitado y justificación (qué ha argumentado el cliente)
- Impacto en el margen del deal
- Alternativa que ya se ofreció antes del descuento
- Riesgo de perder el deal si no se aprueba (bajo/medio/alto)

---

## MÓDULO 4 — ALTERNATIVAS AL DESCUENTO

Entrena al equipo de ventas para ofrecer valor en lugar de precio. Lista de 10 alternativas al descuento de precio que puedo ofrecer:

1. Ampliar el plazo de pago sin cambiar el precio
2. Incluir horas de formación o implementación gratuitas
3. Acceso anticipado a funcionalidades en roadmap
4. Soporte prioritario durante los primeros 3 meses
5. [Dame las 5 restantes adaptadas a mi tipo de producto]

Para cada alternativa: cuál es el coste real para mí y cuál es el valor percibido por el cliente.

---

## MÓDULO 5 — CONTROL Y REPORTING

### Métricas de control de la política de descuentos

| Métrica | Fórmula | Frecuencia de revisión | Alerta si... |
|---|---|---|---|
| Descuento medio concedido | Suma descuentos / número de deals | Mensual | >X% |
| % deals con descuento | Deals con descuento / total deals | Mensual | >Y% |
| Margen medio por deal | Margen total / número de deals | Mensual | <Z% |
| Tiempo de ciclo vs. descuento | Correlación | Trimestral | Descuento no acelera el ciclo |

Dame los valores de referencia (X, Y, Z) recomendados para mi tipo de negocio.

Al final, dame el texto de la política de descuentos lista para comunicar al equipo de ventas: máximo una página, lenguaje claro, con la tabla de autorización y las reglas más importantes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Diseñar una política de descuentos que protege el margen con niveles de autorización, alternativas al descuento y métricas de control.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Discovery en B2B',
                'description'      => 'Las técnicas de investigación de usuario que funcionan cuando el comprador no es el usuario final. Cómo hacer discovery efectivo en contextos B2B donde el acceso al usuario es limitado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager senior especializado en productos B2B con experiencia en entornos donde el comprador (buyer) y el usuario final son personas diferentes, y donde el acceso para investigación es limitado y requiere negociación interna.

Voy a describir mi contexto y necesito que me ayudes a diseñar un proceso de discovery B2B que funcione en la práctica, no en la teoría.

**Contexto de mi producto:**
[Describe: tu producto B2B, quién compra (título, departamento), quién usa el día a día, el tamaño de los clientes a los que vendes y cuántos usuarios activos tienes actualmente]

---

## PARTE 1 — EL PROBLEMA DEL DISCOVERY B2B

Explícame los 5 desafíos específicos del discovery en B2B que no existen en B2C:

1. **El acceso mediado**: no puedes hablar con el usuario sin pasar por el comprador o el CS Manager
2. **El sesgo del intermediario**: lo que te cuenta el Account Manager no es lo que el usuario piensa
3. **La brecha buyer-user**: el comprador compró por razones estratégicas, el usuario usa por razones prácticas
4. **Los incentivos divergentes**: el usuario puede sabotear un producto que su jefe compró
5. **El NDA y la confidencialidad**: los usuarios en empresas grandes tienen restricciones para hablar con proveedores

¿Cómo afecta cada uno de estos problemas a mi situación concreta y cómo mitigo cada uno?

---

## PARTE 2 — FUENTES DE INSIGHTS EN B2B

Cuando el acceso directo al usuario es limitado, ¿de dónde extraigo insights reales?

### Fuente 1: Tickets de soporte y soporte en vivo
- Cómo analizar los tickets de soporte para identificar patrones de dolor real
- Las 3 preguntas que debo hacerle al equipo de CS cada semana para capturar insights cualitativos
- Cómo diferenciar un bug de un problema de diseño de un problema de expectativa no cumplida

### Fuente 2: Grabaciones de sesiones (Hotjar, FullStory, PostHog)
- Qué buscar en las grabaciones que los analytics cuantitativos no muestran
- Cómo identificar fricciones que el usuario nunca reporta pero que veo en su comportamiento
- Cuántas sesiones tengo que ver para tener confianza en un patrón (respuesta: menos de las que crees)

### Fuente 3: Entrevistas de usuario
- Cómo negociar el acceso a usuarios a través del equipo de CS o de ventas
- El argumento que funciona con los CSMs para que te presenten a sus clientes sin sentirse amenazados
- Qué ofrecerle al cliente a cambio de 30 minutos de su tiempo
- Cuántas entrevistas necesito antes de que los patrones se saturen (generalmente 5-8 por segmento)

### Fuente 4: Entrevistas de ventas y renovación
- Qué preguntas hacer en los calls de sales para extraer información de discovery
- Cómo acceder a las grabaciones de Gong/Chorus y qué buscar en ellas
- Las entrevistas de churn como la fuente más honesta de feedback que existe

### Fuente 5: Datos de uso (product analytics)
- Las métricas de activación: ¿qué hace el usuario en las primeras 2 semanas?
- Identificar el "aha moment": la acción que correlaciona con retención a 90 días
- Las features que tienen alta adopción pero bajo engagement (se usan por obligación, no por valor)

---

## PARTE 3 — TÉCNICAS DE INVESTIGACIÓN ADAPTADAS A B2B

### 3.1 Entrevistas de contexto (contextual inquiry)
- Qué es y por qué es especialmente valiosa en B2B (ves el workflow real, no el que te describen)
- Cómo pedirla sin que suene invasiva: "¿podría acompañarte 30 minutos mientras usas el producto en una tarea real?"
- Qué observar: workarounds, ficheros Excel paralelos, capturas de pantalla en Slack, reuniones sobre el producto

### 3.2 Jobs to be Done en contexto B2B
- La diferencia entre el job funcional, el emocional y el social en un contexto laboral
- Por qué el job social es especialmente importante en B2B ("no quiero que mi jefe piense que no sé usar la herramienta")
- Cómo estructuro las entrevistas JTBD cuando el usuario tiene un jefe que también tiene opinión

### 3.3 El diario del usuario
- Pedir a 5-10 usuarios que registren durante 1-2 semanas los momentos de frustración con el producto
- Herramientas: un Google Form enviado por WhatsApp/Slack cada 2 días, o un canal de Slack dedicado
- Cómo incentivar la participación sin contaminar los insights

---

## PARTE 4 — TRIANGULACIÓN Y VALIDACIÓN

Cómo combino múltiples fuentes para tener confianza en un problema antes de priorizar:

| Signal | Fuente | Peso | Evidencia necesaria |
|---|---|---|---|
| Usuario reporta pain explícitamente | Entrevista | Alto | 3+ usuarios independientes |
| Comportamiento observable en sesión | Grabación | Alto | Patrón en 5+ sesiones |
| Ticket de soporte recurrente | Support | Medio | Top 3 categorías de tickets |
| Dato cuantitativo (drop-off, etc.) | Analytics | Medio | Tendencia de +2 semanas |
| Opinión del CSM | Interno | Bajo | Solo confirma, nunca es suficiente solo |

---

## PARTE 5 — SÍNTESIS Y COMUNICACIÓN DE INSIGHTS

### El formato de insight que funciona para convencer al equipo

```
PROBLEMA: [Descripción del problema en términos de comportamiento o dolor]
EVIDENCIA: [3 fuentes que lo confirman]
IMPACTO: [Cuántos usuarios afecta, qué métrica mueve]
CONTEXTO: [En qué situación ocurre — cuándo, por qué, para quién]
INSIGHT ACCIONABLE: [Qué implica esto para el producto]
```

Dame una plantilla completa de un documento de insights para compartir con el equipo de producto y stakeholders.

Al final, dame las 3 preguntas de discovery que más información reveladora producen en entrevistas B2B y por qué funcionan.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar un proceso de discovery B2B efectivo cuando el acceso al usuario final es limitado y mediado.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Planificación de la sucesión',
                'description'      => 'Identifica los sustitutos para roles clave y prepáralos antes de que la salida sea urgente. Plan de sucesión que protege la continuidad del negocio sin depender de una sola persona.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Recursos Humanos con experiencia en planificación estratégica del talento y gestión de sucesiones en empresas medianas y grandes.

Voy a describir mi organización y necesito que me ayudes a diseñar un plan de sucesión para los roles clave, que sea práctico de implementar y que no genere alarmas ni incomodidades innecesarias en el equipo.

**Contexto de mi organización:**
[Describe: tamaño de la empresa, sector, los 3-5 roles que más te preocupan si se fueran mañana, y si ya tienes algún proceso de sucesión o es completamente nuevo]

---

## MÓDULO 1 — POR QUÉ LA MAYORÍA DE PLANES DE SUCESIÓN FALLAN

Antes de diseñar el plan, identifica los errores más comunes:

1. **Solo existe en papel**: el plan se hace una vez, se archiva y nadie lo revisa hasta que hay una crisis
2. **Se confunde con la evaluación del desempeño**: los candidatos a sucesor se identifican por su rendimiento actual, no por su potencial para el rol futuro
3. **Se focaliza solo en la C-suite**: los roles de middle management son igual de críticos y más frecuentemente vacantes
4. **No prepara activamente a los sucesores**: identificar no es preparar
5. **No gestiona la comunicación**: los sucesores no saben que lo son, y los titulares del rol no saben que tienen un sustituto en preparación

¿Cuál de estos errores es más probable en mi contexto?

---

## MÓDULO 2 — IDENTIFICACIÓN DE ROLES CRÍTICOS

No todos los roles necesitan un plan de sucesión. Prioriza con esta matriz:

| Criterio | Peso | Valoración (1-5) | Puntuación |
|---|---|---|---|
| Impacto si el rol queda vacante >30 días | 30% | | |
| Dificultad de encontrar reemplazo externo | 25% | | |
| Conocimiento único o difícil de documentar | 20% | | |
| Probabilidad de salida en los próximos 2 años | 15% | | |
| Costo de contratar externamente | 10% | | |

Los roles con puntuación >3.5 son los que necesitan plan de sucesión activo.

Ayúdame a aplicar esta matriz a los roles que me preocupan.

---

## MÓDULO 3 — EVALUACIÓN DE CANDIDATOS INTERNOS

Para cada rol crítico identificado, evalúa los candidatos internos en dos dimensiones:

### 3.1 Potencial vs. Desempeño (la matriz 9-box)

| | Desempeño bajo | Desempeño medio | Desempeño alto |
|---|---|---|---|
| **Potencial alto** | Dilema / riesgo | Estrella en desarrollo | Estrella |
| **Potencial medio** | Problema | Núcleo sólido | Trabajador fiable |
| **Potencial bajo** | Problema crónico | Especialista limitado | Workhorse |

Los candidatos a sucesor están en los cuadrantes de alto potencial. Pero "alto potencial para qué rol específico" es la pregunta correcta, no "alto potencial en general".

### 3.2 Evaluación de preparación (readiness)

Para cada candidato a sucesor, evalúa:

| Dimensión | Candidato A | Candidato B |
|---|---|---|
| Listo ahora (ready now) | Sí/No | Sí/No |
| Listo en 1-2 años | Sí/No | Sí/No |
| Listo en 3-5 años | Sí/No | Sí/No |
| Brechas clave para el rol | [Lista] | [Lista] |

Lo ideal es tener al menos 1 candidato "ready now" y 1-2 candidatos en desarrollo para cada rol crítico.

---

## MÓDULO 4 — PLANES DE DESARROLLO PARA SUCESORES

Identificar no es suficiente. Para cada sucesor en desarrollo, diseña un plan con:

### Las 3 fuentes de desarrollo (70-20-10)
- **70% — experiencias en el puesto**: proyectos stretch, rotaciones, gestión temporal del rol
- **20% — aprendizaje social**: mentoring del titular actual, shadowing, coaching externo
- **10% — formación formal**: cursos, certificaciones, programas de liderazgo

### El plan de 18 meses para un sucesor en desarrollo

| Trimestre | Objetivo | Acción específica | Responsable | Indicador |
|---|---|---|---|---|
| Q1 | Exposición al rol | Asistir a las reuniones del titular como observador | HR + Titular | Asistencia regular |
| Q2 | Proyecto liderado | Gestionar un proyecto del departamento de forma autónoma | Sucesor | Entrega a tiempo |
| Q3 | Gestión parcial | Cubrir al titular durante sus vacaciones | Titular | Feedback del equipo |
| Q4 | Evaluación de progreso | Revisión de brechas y ajuste del plan | HR + Sucesor | 360 review |

---

## MÓDULO 5 — COMUNICACIÓN DEL PLAN

### ¿Decírselo o no decírselo al sucesor?

Ventajas de ser transparente:
- El sucesor se compromete más con su desarrollo
- Retiene mejor a los candidatos que saben que tienen futuro
- El titular puede preparar activamente al sucesor

Riesgos:
- Si el sucesor no llega a ocupar el rol, puede frustrar y perder a esa persona
- Si hay varios candidatos, puede crear competencia destructiva
- El titular puede sentirse amenazado

Dame una recomendación clara para mi contexto y, si recomiendas la transparencia, el guión exacto de cómo comunicárselo al sucesor.

### Cómo hablar del plan con los titulares de los roles críticos
- Cómo presentarlo sin que parezca que los estás anticipando a un despido
- Cómo involucrar al titular en el desarrollo de su sucesor sin que se sienta prescindible

---

## MÓDULO 6 — REVISIÓN Y MANTENIMIENTO

El plan de sucesión muere si no se revisa regularmente:

- **Revisión trimestral**: actualizar la preparación de los sucesores y los cambios de riesgo en los roles
- **Revisión anual**: reevaluar qué roles son críticos (pueden cambiar con la estrategia)
- **Eventos que disparan revisión inmediata**: baja de un empleado clave, cambio estratégico, proceso de M&A

Dame el formato del informe trimestral de sucesión para presentar al Comité de Dirección: máximo una página, con los roles críticos, el status de cada sucesor y las acciones prioritarias del trimestre.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar un plan de sucesión para roles clave con identificación de candidatos, planes de desarrollo y protocolo de comunicación.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de punto de equilibrio multiproducto',
                'description'      => 'Calcula el breakeven cuando vendes varios productos o servicios con márgenes distintos. Metodología para empresas con mix de productos y cómo optimizar la combinación de ventas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un controller financiero con experiencia en análisis de rentabilidad para empresas con catálogos de múltiples productos o servicios, donde el mix de ventas tiene un impacto enorme en la rentabilidad global.

Voy a describir mi empresa y necesito que me ayudes a calcular el punto de equilibrio multiproducto y a entender qué combinación de ventas optimiza mi rentabilidad.

**Contexto de mi empresa:**
[Describe: los productos o servicios que ofreces (3-6), los precios y costes variables aproximados de cada uno, y cuáles son los costes fijos mensuales totales]

---

## BLOQUE 1 — EL PROBLEMA DEL BREAKEVEN MULTIPRODUCTO

Explícame por qué el breakeven de una empresa con varios productos no se puede calcular con la fórmula simple (Costes Fijos / Margen de Contribución):

1. **El mix de ventas importa**: si cambio la proporción de ventas de mi producto más rentable al menos rentable, el breakeven cambia aunque venda el mismo número de unidades
2. **El margen de contribución ponderado**: cómo calcular el margen medio según el peso de cada producto en las ventas
3. **El riesgo del subsidio cruzado**: un producto deficitario puede estar siendo sostenido por otro rentable sin que lo sepas
4. **La trampa del volumen**: vender más unidades de un producto de bajo margen puede empeorar la rentabilidad total

---

## BLOQUE 2 — CÁLCULO PASO A PASO

### Paso 1: Calcular el margen de contribución por producto

Para cada producto:
```
Margen de Contribución (€) = Precio de Venta - Costes Variables
Ratio de Margen de Contribución (%) = MC / Precio × 100
```

| Producto | Precio | CV | MC (€) | MC (%) |
|---|---|---|---|---|
| Producto A | | | | |
| Producto B | | | | |
| Producto C | | | | |

### Paso 2: Calcular el mix de ventas actual

```
Mix de ventas = Unidades de cada producto / Total unidades vendidas (%)
```

| Producto | Unidades/mes | % del mix |
|---|---|---|
| Producto A | | |
| Producto B | | |
| Producto C | | |

### Paso 3: Margen de contribución ponderado

```
MC ponderado = Σ (MC% de cada producto × % del mix de ese producto)
```

Ejemplo:
- Producto A: MC 60%, mix 40% → contribuye 60% × 40% = 24%
- Producto B: MC 40%, mix 35% → contribuye 40% × 35% = 14%
- Producto C: MC 20%, mix 25% → contribuye 20% × 25% = 5%
- MC ponderado total = 43%

### Paso 4: Punto de equilibrio en ingresos

```
Breakeven en ingresos = Costes Fijos Totales / MC ponderado
```

### Paso 5: Punto de equilibrio en unidades por producto

```
Breakeven total en unidades = Breakeven en ingresos / Precio medio ponderado
Unidades de cada producto = Breakeven total × % del mix
```

Aplica este cálculo a mis datos específicos y muéstrame el resultado final en una tabla clara.

---

## BLOQUE 3 — ANÁLISIS DE SENSIBILIDAD DEL MIX

¿Qué pasa con mi breakeven si el mix de ventas cambia?

Calcula el breakeven bajo tres escenarios de mix diferentes:

| Escenario | Descripción | Breakeven en €/mes | Δ vs. actual |
|---|---|---|---|
| Actual | Mix real de los últimos 3 meses | | |
| Optimista | Más ventas del producto de mayor margen | | |
| Pesimista | Más ventas del producto de menor margen | | |
| Óptimo teórico | 100% del producto de mayor margen | | |

¿Cuánto cambia mi breakeven si aumento en 10 puntos porcentuales las ventas de mi producto más rentable? Dame el cálculo concreto.

---

## BLOQUE 4 — OPTIMIZACIÓN DEL MIX

### ¿Qué producto debo empujar más?

Más allá del margen de contribución, considera:

| Factor | Producto A | Producto B | Producto C |
|---|---|---|---|
| MC (%) | | | |
| Volumen de ventas actual | | | |
| Capacidad de escalar ventas | | | |
| Tiempo de venta (ciclo) | | | |
| Coste de adquisición por venta | | | |
| Potencial de upsell/cross-sell | | | |

El producto ideal para empujar no siempre es el de mayor margen, sino el que tiene margen alto Y capacidad de escalar ventas Y ciclo de venta corto.

### Estrategias para mejorar el mix
1. **Desincentivo para el producto de bajo margen**: sin eliminarlo, reducir el esfuerzo comercial en él
2. **Incentivos a ventas orientados al margen**: pagar comisiones sobre margen, no sobre ingresos
3. **Bundling estratégico**: empaquetar el producto de bajo margen con el de alto margen para subir el ticket medio
4. **Revisión de precios del producto de bajo margen**: ¿por qué tiene bajo margen? ¿Es el precio o es el coste?

---

## BLOQUE 5 — MARGEN DE SEGURIDAD

Una vez calculado el breakeven:

```
Margen de seguridad (€) = Ingresos reales - Breakeven en ingresos
Margen de seguridad (%) = Margen de seguridad € / Ingresos reales × 100
```

- Si el margen de seguridad es <10%: situación de alerta, cualquier bajada de ventas genera pérdidas
- Si está entre 10-20%: zona de cuidado, monitorizar mensualmente
- Si supera el 20%: zona de confort razonable para un negocio maduro

¿Cuál es mi margen de seguridad actual y qué palancas tengo para aumentarlo?

---

## BLOQUE 6 — DASHBOARD DE SEGUIMIENTO MENSUAL

Dame el formato de una tabla de una página para hacer el seguimiento mensual del breakeven y el mix de ventas:

Columnas: Producto | Unidades vendidas | Ingresos | Costes Variables | MC € | MC % | % del mix | Contribución al MC ponderado

Más una sección de resumen:
- MC ponderado total del mes
- Costes fijos del mes
- Breakeven teórico del mes
- Ingresos reales del mes
- Margen de seguridad del mes
- Δ vs. mes anterior

Al final, dame las 3 señales de alerta financiera que debo configurar para detectar antes de fin de mes si el mix se está deteriorando.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Calcular el punto de equilibrio en empresas con múltiples productos y optimizar el mix de ventas para maximizar la rentabilidad.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Derecho del consumidor en ecommerce España',
                'description'      => 'Devoluciones 14 días, garantías, desistimiento y cómo evitar multas de consumo. Guía práctica de cumplimiento legal para tiendas online que venden en España.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho del consumidor y comercio electrónico en España, con conocimiento del Texto Refundido de la Ley General para la Defensa de los Consumidores (TRLGDCU) y la Directiva europea 2019/771.

Voy a describir mi ecommerce y necesito que me ayudes a entender mis obligaciones legales y a diseñar los procesos internos correctos para cumplirlas sin que sean un freno para mi negocio.

**Contexto de mi ecommerce:**
[Describe: qué vendes (productos físicos, digitales o servicios), a qué mercados vendes (solo España, Europa), si eres marketplace o venta directa, y cuánto facturas aproximadamente]

---

## BLOQUE 1 — DERECHO DE DESISTIMIENTO: LOS 14 DÍAS

### 1.1 Qué es y a quién aplica
- Solo aplica a consumidores (personas físicas que actúan fuera de su actividad profesional), no a empresas
- Aplica en contratos a distancia (online) y fuera de establecimiento
- No requiere ninguna justificación por parte del consumidor

### 1.2 Plazo de 14 días: cómo se cuenta
- 14 días naturales desde la recepción del producto (bienes) o desde la celebración del contrato (servicios digitales)
- Si no informaste correctamente del derecho de desistimiento en el momento de la compra: el plazo se amplía a 12 meses
- ¿Cuándo empieza si el cliente compra varios productos en un pedido que se entrega en fechas distintas?

### 1.3 Excepciones al derecho de desistimiento (no olvides comunicarlas)

| Tipo de producto/servicio | ¿Puede el cliente desistir? | Condición |
|---|---|---|
| Producto personalizado a medida | No | Fabricado según especificaciones |
| Producto perecedero | No | Riesgo de deterioro rápido |
| Software descargado | No | Si el cliente consintió expresamente el inicio |
| Contenido digital descargado | No | Con consentimiento y renuncia explícita |
| Productos sellados de audio/vídeo/software abiertos | No | Si el precinto ha sido roto |
| Servicios ya ejecutados completamente | No | Con consentimiento previo del consumidor |
| Artículos de higiene personal abiertos | No | Por razones de protección de la salud |

Para mis productos específicos, ¿qué excepciones aplican y cómo las comunico correctamente?

### 1.4 Obligaciones cuando el cliente ejercita el desistimiento
- Plazo para devolver el dinero: 14 días desde la notificación del desistimiento (no desde la recepción del producto devuelto)
- Método de reembolso: el mismo medio de pago, salvo acuerdo expreso
- ¿Quién paga los gastos de devolución? Regla y excepción
- ¿Puedo retener el reembolso hasta recibir el producto? Sí, excepciones

---

## BLOQUE 2 — GARANTÍAS DE PRODUCTO

### 2.1 La nueva garantía legal: 3 años para productos físicos

Desde la transposición de la Directiva 2019/771 (en vigor en España desde enero 2022):

| Periodo | Obligación |
|---|---|
| Primeros 12 meses | Se presume que el defecto existía en el momento de la entrega |
| Meses 13-36 | El consumidor debe probar que el defecto existía al momento de la entrega |
| Bienes de segunda mano | Mínimo 1 año (puede reducirse contractualmente, pero nunca menos de 1 año) |

### 2.2 Los remedios del consumidor ante un producto defectuoso (en orden)
1. Reparación gratuita
2. Sustitución por un producto igual
3. Reducción del precio
4. Resolución del contrato (devolución del dinero)

El consumidor elige entre reparación y sustitución, y el vendedor puede negarse solo si el remedio elegido es desproporcionado o imposible.

### 2.3 Garantía comercial vs. garantía legal
- La garantía legal no puede eliminarse ni reducirse contractualmente (es imperativa)
- La garantía comercial es adicional y voluntaria: si la ofreces, debes cumplirla
- Qué debe incluir una garantía comercial para ser válida (art. 126 TRLGDCU)

### 2.4 Bienes digitales y contenido digital
- Nueva categoría: contratos de suministro de contenidos digitales y servicios digitales
- Qué es la "conformidad" para un producto digital (actualizaciones incluidas)
- Durante cuánto tiempo debes suministrar actualizaciones de seguridad

---

## BLOQUE 3 — INFORMACIÓN PRECONTRACTUAL OBLIGATORIA

Lo que DEBES mostrar al usuario ANTES de que pulse el botón de compra:

1. Identidad completa del vendedor (razón social, CIF, domicilio, teléfono, email)
2. Características principales del producto/servicio
3. Precio total con todos los impuestos y gastos de envío
4. Modalidades de pago, entrega y plazo de entrega
5. Derecho de desistimiento: condiciones, plazo y procedimiento
6. Duración del contrato y condiciones de resolución (en suscripciones)
7. Funcionalidad e interoperabilidad de los contenidos digitales

### El botón de compra
- El TRLGDCU exige que el botón de pago sea inequívoco: "Pagar ahora", "Confirmar pedido" o similar
- Está prohibido: "Siguiente", "Continuar" o cualquier término que no deje claro que implica un pago

---

## BLOQUE 4 — PROCESOS INTERNOS DE CUMPLIMIENTO

### 4.1 El formulario de desistimiento
- Obligación de facilitar un formulario modelo (el del Anexo B del TRLGDCU)
- Cómo integrar el proceso de desistimiento en tu plataforma (formulario online vs. email)
- Plazo para responder al cliente: confirmación inmediata y tramitación en 14 días

### 4.2 Política de devoluciones y su redacción
Dame el texto de una política de devoluciones compliant con la normativa, que sea clara para el consumidor pero que también proteja al comercio en los casos de excepción.

### 4.3 Cómo documentar y conservar
- Qué documentación guardar de cada transacción y durante cuánto tiempo
- Cómo demostrar ante la AECOSAN/FACUA que informaste correctamente al consumidor

---

## BLOQUE 5 — SANCIONES Y CÓMO EVITARLAS

Las 5 infracciones más comunes en ecommerce que acaban en sanción:

1. No informar del derecho de desistimiento → nulidad de la cláusula + ampliación a 12 meses
2. Cobrar gastos de devolución cuando no corresponde → devolución + sanción
3. Retrasar el reembolso más de 14 días → recargo + posible sanción
4. No cumplir la garantía legal alegando que "el cliente lo ha usado" → sanción grave
5. Añadir servicios no solicitados con opt-out (casillas premarcadas) → sanción

Sanciones orientativas:
- Infracción leve: hasta 10.000€
- Infracción grave: de 10.001€ a 100.000€
- Infracción muy grave: de 100.001€ a 1.000.000€ (o 4x el beneficio ilícito)

Dame una lista de verificación de 15 puntos para auditar mi ecommerce y asegurarme de que estoy cumpliendo antes de que llegue una inspección o una reclamación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'         => 'Cumplir la normativa de consumidores en ecommerce España: devoluciones, garantías, desistimiento y proceso de reclamaciones.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Programa de onboarding de agentes de soporte',
                'description'      => 'El plan de formación que da autonomía en 30 días y estandariza la calidad del soporte. Estructura, materiales y evaluación para incorporar agentes que rindan desde el primer mes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Success con experiencia en diseño de programas de formación para equipos de soporte en empresas SaaS y ecommerce. Has estructurado onboardings que reducen el tiempo hasta la autonomía de 90 días a 30 días sin comprometer la calidad.

Voy a describir mi equipo y mi producto, y necesito que me ayudes a diseñar un programa de onboarding para nuevos agentes de soporte que sea efectivo, escalable y que no dependa exclusivamente del conocimiento de una persona.

**Contexto de mi equipo:**
[Describe: tamaño del equipo actual, tipo de soporte que ofreces (chat, email, teléfono), complejidad del producto, volumen de tickets por agente y el problema principal en el onboarding actual]

---

## MÓDULO 1 — DIAGNÓSTICO DEL ONBOARDING ACTUAL

Antes de diseñar el nuevo programa, ayúdame a entender qué está fallando:

### Las 5 señales de un onboarding deficiente

1. El agente nuevo pide ayuda constantemente a los compañeros más de 3 semanas después de empezar
2. La calidad de las respuestas del agente nuevo es inconsistente con la del equipo
3. Los primeros tickets que resuelve solo tienen peor CSAT que los del equipo
4. El agente no sabe dónde buscar la información y lo pregunta directamente
5. No hay criterios claros para saber si el agente ha "pasado" el onboarding

¿Cuáles de estas señales son las más presentes en mi equipo?

---

## MÓDULO 2 — ESTRUCTURA DEL PROGRAMA DE 30 DÍAS

### Semana 1 — Inmersión en el producto y la empresa

**Objetivo**: entender qué vendemos, para quién y por qué los clientes nos llaman.

| Día | Actividad | Responsable | Duración |
|---|---|---|---|
| Lunes | Bienvenida: misión, valores, cómo funciona el equipo | Manager | 2h |
| Lunes | Setup de herramientas: CRM, ticketing, chat, etc. | IT/Manager | 2h |
| Martes | Demo del producto de principio a fin | PM o CS Senior | 3h |
| Martes | Exploración libre del producto con guión de tareas | Autónomo | 2h |
| Miércoles | Las 20 preguntas más frecuentes: lectura y comprensión | Autónomo | 4h |
| Jueves | Shadowing: escuchar/leer tickets reales del equipo | CS Senior | Día completo |
| Viernes | Test de producto básico + primer ticket simulado | Manager | 2h |

### Semana 2 — Procesos, políticas y primeros tickets reales

**Objetivo**: manejar los tipos de ticket más comunes de forma autónoma con supervisión.

- Lunes: procesos internos (escalados, tiempos de respuesta, qué queda en CS y qué va a otros equipos)
- Martes: políticas de la empresa (devoluciones, compensaciones, SLA con clientes enterprise)
- Miércoles-Viernes: gestión de los 30 tipos de ticket más frecuentes (10 por día) en modo simulación

### Semana 3 — Tickets reales con revisión

**Objetivo**: autonomía supervisada. El agente resuelve solo, pero un senior revisa antes de enviar.

- Asignación de cola propia (reducida)
- Revisión del 100% de los tickets antes de cerrar
- Sesión diaria de feedback de 15 minutos con el supervisor
- Temas a reforzar según errores detectados

### Semana 4 — Autonomía plena con métricas de evaluación

**Objetivo**: rendimiento comparable al del equipo.

- Gestión autónoma de la cola
- Revisión aleatoria del 20% de los tickets (en lugar del 100%)
- Evaluación final: CSAT, tiempo de primera respuesta, ratio de resolución en primer contacto

---

## MÓDULO 3 — MATERIALES DEL PROGRAMA

### 3.1 La base de conocimiento de onboarding

Qué documentos debe tener listo el equipo ANTES de que llegue el agente nuevo:

1. **Guía del producto**: las funcionalidades más importantes explicadas para alguien nuevo
2. **FAQ del agente**: las 50 preguntas más frecuentes con la respuesta estándar y el contexto para adaptarla
3. **Árbol de decisión de escalado**: diagrama de cuándo resolver solo y cuándo escalar a otro equipo
4. **Tono y voz**: guía de comunicación con ejemplos de respuestas buenas y malas
5. **Plantillas**: las 20 respuestas más comunes listas para personalizar

### 3.2 El kit del primer día

Qué debe tener preparado el manager para el primer día del agente (sin improvisar):
- Lista de accesos a crear
- Documento de bienvenida con el plan de las 4 semanas
- Nombre del "buddy" que acompañará al agente las primeras semanas
- Calendario de las primeras 2 semanas con todas las actividades ya agendadas

### 3.3 Los ejercicios de simulación

Diseña 5 escenarios de simulación de tickets para la semana 2, cubriendo:
1. Consulta técnica básica sobre una funcionalidad del producto
2. Reclamación por retraso o error en la entrega
3. Solicitud de devolución o cancelación
4. Escalado necesario por fallo técnico que CS no puede resolver
5. Cliente agresivo o frustrado que requiere desescalada emocional

Para cada escenario: el mensaje del cliente, la respuesta esperada, los errores comunes y el criterio de evaluación.

---

## MÓDULO 4 — EVALUACIÓN Y CERTIFICACIÓN

### 4.1 Criterios de aprobación del onboarding

Define los KPIs que el agente debe alcanzar antes de finalizar el programa:

| Métrica | Umbral de aprobación | Cómo se mide |
|---|---|---|
| CSAT | ≥ 85% de satisfacción | Encuesta post-ticket |
| Tiempo de primera respuesta | ≤ X horas | Herramienta de ticketing |
| FCR (First Contact Resolution) | ≥ 70% | Tickets reabiertos |
| Tasa de escalado | ≤ 20% | Tickets escalados / total |
| Test de conocimiento | ≥ 80% de aciertos | Test escrito |

### 4.2 Qué hacer si el agente no supera el onboarding

- Extensión de 2 semanas adicionales con plan específico para las áreas débiles
- Si tras 6 semanas no alcanza los umbrales: conversación directa sobre el fit para el rol

---

## MÓDULO 5 — MEJORA CONTINUA DEL PROGRAMA

- Encuesta al agente al finalizar el onboarding: qué funcionó y qué no
- Reunión trimestral del equipo para actualizar los materiales
- Cómo usar los primeros 30 días del agente nuevo para mejorar la base de conocimiento (sus dudas son las dudas de todos)

Al final, dame una checklist de 20 puntos para el manager: todo lo que debe tener listo antes del primer día del agente nuevo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Diseñar un programa de onboarding de 30 días para agentes de soporte con materiales, evaluación y plan semana a semana.',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Especialización de nicho',
                'description'      => 'Cuándo conviene ser generalista y cuándo la ultra-especialización multiplica la tarifa. Cómo elegir tu nicho, posicionarte en él y atraer clientes premium.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio para freelancers y profesionales independientes con experiencia ayudando a generalistas a convertirse en especialistas de nicho de alto valor, y que también conoce los casos en que ser generalista es la estrategia correcta.

Voy a describir mi situación actual y necesito que me ayudes a tomar la decisión sobre el nivel de especialización correcto para mi negocio y a ejecutar la transición si corresponde.

**Situación actual:**
[Describe: tu especialidad actual (diseño, marketing, desarrollo, etc.), qué servicios ofreces, tu tarifa actual, tus últimos 3 clientes y el problema que más te limita ahora: dificultad para encontrar clientes, competencia de precio, proyectos poco interesantes, etc.]

---

## PARTE 1 — GENERALISTA VS ESPECIALISTA: LA DECISIÓN CORRECTA

### 1.1 Las ventajas reales del especialista de nicho

1. **Tarifa más alta**: el especialista puede cobrar 3-5x la tarifa de un generalista porque el cliente lo percibe como experto, no como un recurso sustituible
2. **Ciclo de venta más corto**: el cliente que necesita exactamente lo que tú haces no compara 10 opciones
3. **Marketing más fácil**: un mensaje específico ("diseño de landing pages para SaaS B2B en fase de crecimiento") convierte mejor que un mensaje genérico
4. **Trabajo más interesante**: haces siempre lo mismo pero en profundidad, no lo mismo de forma superficial en mil contextos
5. **Referidos de calidad**: los clientes te refieren a otros que necesitan exactamente lo mismo

### 1.2 Las ventajas reales del generalista

1. **Resiliencia en mercados pequeños**: en mercados poco maduros, la especialización puede ser demasiado estrecha
2. **Variedad de trabajo**: si la variedad es lo que te motiva, la especialización puede quemarte
3. **Múltiples fuentes de ingresos**: si un nicho cae, tienes otros
4. **Clientes de largo plazo**: algunos clientes prefieren un único proveedor que les resuelve múltiples necesidades

### 1.3 La pregunta clave para tu decisión

Ayúdame a responder estas 5 preguntas para saber si la especialización es la estrategia correcta para mí ahora:

1. ¿Tengo ya clientes que, si los analizara, se parecen mucho entre sí (mismo sector, mismo problema)?
2. ¿Hay algún tipo de proyecto que hago claramente mejor que cualquier otro?
3. ¿El mercado al que me especializaría tiene suficiente tamaño para sostener mi negocio?
4. ¿Estaría dispuesto a rechazar proyectos fuera del nicho durante 6-12 meses?
5. ¿Tengo energía y curiosidad genuina por ese nicho?

---

## PARTE 2 — CÓMO ELEGIR TU NICHO

Hay tres dimensiones en las que puedes especializarte. Elige una o una combinación de dos:

### Dimensión 1: Especialización por tipo de cliente (WHO)
- Sector: SaaS, ecommerce, sector legal, hospitality...
- Tamaño: startups, pymes, enterprise
- Etapa: empresas en crecimiento, en transformación, en lanzamiento

### Dimensión 2: Especialización por tipo de problema (WHAT)
- Rediseño de landing pages para aumentar conversión
- Automatización de procesos de onboarding
- Estrategia SEO para startups en fase de tracción

### Dimensión 3: Especialización por tipo de resultado (OUTCOME)
- Aumento de leads cualificados en un 30%
- Reducción del churn en los primeros 90 días
- Lanzamiento de producto en menos de 12 semanas

**El nicho más poderoso**: combina WHO + WHAT + OUTCOME.
Ejemplo: "Ayudo a SaaS B2B [WHO] a rediseñar su proceso de onboarding [WHAT] para reducir el churn de los primeros 30 días [OUTCOME]."

Ayúdame a construir mi nicho ideal usando este framework y mi historial de clientes.

---

## PARTE 3 — VALIDACIÓN DEL NICHO ANTES DE COMPROMETERTE

Antes de hacer el cambio público, valida que el nicho tiene mercado:

### 3.1 Test de demanda (sin gastar nada)
- Busca en LinkedIn la cantidad de perfiles que encajan con tu cliente ideal del nicho
- Busca en Google "freelance [tu especialidad] para [tu nicho]" y ve cuánta competencia hay (competencia = demanda)
- Revisa las ofertas en portales de freelance: ¿hay proyectos recurrentes de este tipo?
- Habla con 5 potenciales clientes del nicho antes de posicionarte: ¿pagan bien? ¿tienen el problema?

### 3.2 El test de la tarifa
- ¿Puedes cobrar al menos un 50% más en este nicho vs. tu tarifa actual?
- Si no, el nicho no está lo suficientemente diferenciado o el cliente no percibe valor único en tu especialización

### 3.3 Test de sostenibilidad
- ¿Cuántos clientes activos necesitas al año para alcanzar tu objetivo de ingresos?
- ¿El nicho tiene suficientes clientes potenciales para ese número?
- Regla: si necesitas 10 clientes al año y el nicho tiene 50 potenciales en España, el nicho es demasiado pequeño

---

## PARTE 4 — EL POSICIONAMIENTO EN PRÁCTICA

### 4.1 Tu propuesta de valor especializada

Estructura del mensaje de posicionamiento:
```
Ayudo a [TIPO DE CLIENTE] a [RESULTADO ESPECÍFICO] mediante [TU MÉTODO/SERVICIO DIFERENCIAL].
A diferencia de los [GENERALISTAS/COMPETENCIA], yo [QUÉ TE HACE DIFERENTE].
```

Escríbeme 3 versiones de mi propuesta de valor con distintos niveles de especificidad.

### 4.2 Dónde y cómo posicionarte

- **LinkedIn**: cómo reescribir el titular y el about para atraer al cliente del nicho
- **Portfolio**: qué casos de éxito mostrar y cómo presentarlos (resultado primero, proceso después)
- **Contenido**: qué tipo de contenido crear para demostrar autoridad en el nicho sin gastar tiempo infinito
- **Referidos**: cómo pedirlos específicamente para el nicho ("¿conoces a alguna empresa de SaaS B2B que...?")

---

## PARTE 5 — LA TRANSICIÓN SIN PERDER INGRESOS

Si tienes clientes generalistas ahora y quieres especializarte:

1. **Mes 1-2**: no rechaces proyectos generalistas todavía. Actualiza tu posicionamiento online y empieza a crear contenido de nicho.
2. **Mes 3-4**: cuando tengas los primeros clientes del nicho, puedes empezar a rechazar los más alejados de él.
3. **Mes 5-6**: dedica el 70% del tiempo de prospección al nicho. Evalúa si los ingresos del nicho pueden reemplazar a los generalistas.
4. **Mes 7-12**: full commitment al nicho. Actualiza el portfolio y elimina los casos que no encajan.

¿Cuánto tiempo realista necesito para hacer esta transición dado mi situación actual?

Al final, dame los 3 errores más comunes que cometen los freelancers cuando intentan especializarse y cómo evitar cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Elegir y validar un nicho de especialización como freelance, construir el posicionamiento y hacer la transición sin perder ingresos.',
                'vote_score'       => 41,
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
