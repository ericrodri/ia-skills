<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills54Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Programa de afiliados',
                'description'       => 'Diseña y lanza un programa de afiliados que genera ventas recurrentes con bajo coste de adquisición de clientes.',
                'prompt_content'    => <<<'PROMPT'
# Diseña y lanza un programa de afiliados rentable

Actúa como un experto en marketing de performance y crecimiento B2C con experiencia diseñando programas de afiliados para SaaS, e-commerce y marketplaces. Voy a darte el contexto de mi negocio y necesito que me ayudes a crear un programa de afiliados completo, desde la estrategia hasta la implementación operativa.

## Contexto que debes pedirme (o asumir si ya lo tienes)

- Tipo de producto o servicio y ticket medio
- Canal de venta actual y principales fuentes de tráfico
- Márgenes brutos aproximados
- Presupuesto disponible para arrancar el programa
- Recursos de equipo dedicados al programa

---

## Fase 1: Estructura de comisiones

Define una estructura de comisiones sostenible para mi negocio usando esta metodología:

**Paso 1 — Calcula el techo de comisión viable:**
```
Comisión máxima viable = (LTV × margen bruto) × % CAC target
```
Si mi LTV es 600 €, margen bruto 70 % y acepto gastar hasta el 30 % del LTV en adquisición:
```
Techo = 600 × 0,70 × 0,30 = 126 € por cliente
```

**Modelos de comisión que debes evaluar para mi caso:**

| Modelo | Cuándo encaja | Ejemplo |
|---|---|---|
| CPA fijo | Producto con margen estable | 50 € por venta cerrada |
| % del pedido | E-commerce o variable | 15 % sobre el valor del carrito |
| Comisión recurrente | SaaS con suscripción | 20 % del MRR durante 12 meses |
| Escalonado por volumen | Afiliados de alto tráfico | 10 % hasta 20 ventas / mes, 15 % a partir de 21 |
| Híbrido lead + venta | Ciclos de venta largos | 5 € por lead + 40 € por conversión |

Recomiéndame el modelo más adecuado para mi negocio y justifica la elección con los números concretos.

---

## Fase 2: Perfil de afiliado ideal y reclutamiento

Crea el perfil del afiliado ideal (IPA) para mi programa:

1. **Audiencia que mueve**: tamaño de audiencia mínimo recomendado, nicho, canales preferentes (blog SEO, newsletter, YouTube, LinkedIn, TikTok, comunidades)
2. **Nivel de expertise en mi categoría**: ¿generalista o especialista?
3. **Tipo de contenido**: reviews, tutoriales, comparativas, casos de uso
4. **Señales de calidad**: tasa de engagement mínima, historial de colaboraciones previas, coherencia de marca

**Estrategia de reclutamiento en 3 oleadas:**

- *Oleada 1 (mes 1-2):* 10 afiliados semilla — clientes actuales satisfechos, socios estratégicos, embajadores de marca internos
- *Oleada 2 (mes 3-4):* afiliados de nicho con audiencias medias (5.000-50.000 seguidores) altamente cualificadas
- *Oleada 3 (mes 5+):* afiliados de volumen y plataformas de afiliados (Awin, Tradedoubler, Impact)

Redacta para mí el email de outreach para la oleada 1 con asunto, cuerpo (150 palabras máximo) y CTA claro.

---

## Fase 3: Materiales y kit de afiliado

Lista los materiales que debo preparar antes del lanzamiento:

- [ ] Página de aterrizaje del programa con FAQs y condiciones
- [ ] Acuerdo de afiliado (términos legales básicos: exclusividad, cookies, política de devoluciones)
- [ ] Pack de creatividades: banners en 3 formatos (300×250, 728×90, 160×600), imágenes cuadradas para redes
- [ ] Templates de email y copy para que el afiliado adapte a su voz
- [ ] Guía de marca: colores, tipografías, mensajes clave permitidos y prohibidos
- [ ] Dashboard de seguimiento con acceso individual a sus métricas (clics, conversiones, comisiones pendientes y pagadas)

---

## Fase 4: Plataforma técnica

Compara las opciones según mi escala y presupuesto:

| Herramienta | Precio/mes | Mejor para | Integración |
|---|---|---|---|
| Rewardful | 49 $ | SaaS con Stripe | Stripe nativa |
| Tapfiliate | 89 $ | E-commerce y SaaS | Shopify, WooCommerce |
| PartnerStack | Consultar | B2B con socios | Salesforce, HubSpot |
| FirstPromoter | 49 $ | SaaS bootstrapped | Stripe / Paddle |
| Afiliados WooCommerce | Gratis/plugin | WordPress básico | WooCommerce |

Recomiéndame la solución técnica más adecuada para mi escenario y describe los pasos de configuración inicial.

---

## Fase 5: Gestión, optimización y escalado

Define el proceso operativo mensual:

**Ciclo mensual del programa:**
1. *Semana 1:* revisión de métricas (tasa de conversión por afiliado, EPC — earnings per click, número de afiliados activos vs. registrados)
2. *Semana 2:* comunicación a afiliados (newsletter interna con novedades, nuevas creatividades, incentivos temporales)
3. *Semana 3:* incorporación de nuevos afiliados y onboarding
4. *Semana 4:* cierre de comisiones, validación de ventas y pago

**KPIs del programa que debo monitorizar:**

| KPI | Definición | Benchmark saludable |
|---|---|---|
| Afiliados activos / total | % que genera al menos 1 venta/mes | > 20 % |
| EPC | Comisión media por clic | Depende del nicho, target > 0,50 € |
| Churn de afiliados | % que abandona en 90 días | < 30 % |
| CAC vía afiliados vs. otros canales | Comparativa de eficiencia | < CAC canal pagado |
| Revenue generado por el programa | MRR o GMV atribuido | % crecimiento mes a mes |

**Acciones de retención de afiliados:**
- Programa de niveles: Plata / Oro / Platino con comisiones y privilegios distintos
- Concursos trimestrales con premios adicionales al top 3 de afiliados
- Acceso anticipado a nuevos productos para afiliados Platino
- Llamada trimestral de revisión con afiliados top 10

---

## Entregable final

Genera para mí un documento de lanzamiento del programa que incluya:
1. Nombre y propuesta de valor del programa (2 frases)
2. Estructura de comisiones recomendada con números
3. Primeros 10 afiliados objetivo con su nombre o perfil tipo
4. Checklist de lanzamiento con fechas (semanas 1 a 8)
5. Plantilla del primer email de bienvenida a afiliados aprobados

Sé específico, usa los datos de mi negocio en cada sección y no des respuestas genéricas. Si necesitas más contexto antes de responder alguna sección, indícalo al principio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar y lanzar un programa de afiliados rentable con bajo coste de adquisición',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Testing unitario y TDD',
                'description'       => 'Aprende a escribir tests que mejoran el diseño del código, previenen regresiones y hacen el desarrollo más sostenible a largo plazo.',
                'prompt_content'    => <<<'PROMPT'
# Testing unitario y TDD: escribe tests que mejoran tu código

Actúa como un ingeniero de software senior con experiencia en desarrollo guiado por tests (TDD), arquitectura limpia y revisiones de código en equipos de producto. Voy a compartirte el contexto de mi proyecto y necesito que me enseñes a aplicar TDD de forma práctica, no teórica.

## Contexto que necesito proporcionarte

- Lenguaje y framework del proyecto (PHP/Laravel, Python/Django, Node/Express, etc.)
- Estado actual del testing: sin tests, tests legacy, cobertura parcial
- Tipo de código que quiero testear: lógica de negocio, controladores, servicios, repositorios
- Un ejemplo de código real que quiera testear (si lo tengo)

---

## Parte 1: La filosofía TDD en la práctica

El ciclo TDD no es escribir tests después — es dejar que el test defina el diseño:

**El ciclo Red-Green-Refactor:**
```
1. RED    → Escribe un test que falla (describe el comportamiento esperado)
2. GREEN  → Escribe el mínimo código que hace pasar el test
3. REFACTOR → Limpia el código sin romper los tests
```

Por qué esto importa: cuando escribes el test primero, te ves obligado a pensar en la interfaz pública de tu clase antes que en su implementación. Esto produce código con responsabilidades más claras, dependencias más explícitas y módulos más pequeños.

**Señales de que tu código es difícil de testear (y por qué):**

| Síntoma | Causa raíz | Solución |
|---|---|---|
| Test requiere setup de 20 objetos | God class / demasiadas dependencias | Inyección de dependencias + SRP |
| No puedo testear sin base de datos | Lógica en el ORM / repositorio | Separar lógica de negocio de persistencia |
| El test falla al cambiar detalles internos | Test acoplado a implementación | Testear comportamiento, no estructura interna |
| Test muy lento (> 100 ms) | Llama a red, disco o base de datos | Mocks / stubs para infraestructura |

---

## Parte 2: Anatomía de un buen test unitario

Todo test unitario bien escrito sigue la estructura **AAA: Arrange → Act → Assert**.

**Ejemplo en PHP con PHPUnit:**
```php
/** @test */
public function it_calculates_total_with_discount(): void
{
    // Arrange
    $cart = new ShoppingCart();
    $cart->addItem(new CartItem('Curso IA', price: 100.00, qty: 2));
    $discount = new PercentageDiscount(10);

    // Act
    $total = $cart->calculateTotal($discount);

    // Assert
    $this->assertEquals(180.00, $total);
}
```

**Reglas de un buen test:**
- Un test = un comportamiento (no una función, un comportamiento observable)
- El nombre del test describe qué pasa y bajo qué condición: `it_returns_zero_when_cart_is_empty`
- No hay lógica condicional dentro del test (no `if`, no `foreach`)
- El test es independiente: no depende del orden de ejecución ni del estado de otros tests
- Falla por una sola razón

---

## Parte 3: Mocks, stubs y doubles

Cuando tu código interactúa con infraestructura (base de datos, email, API externa), necesitas aislarla:

**Tipos de test doubles:**

| Tipo | Qué hace | Cuándo usarlo |
|---|---|---|
| Stub | Devuelve valores predefinidos | Cuando solo te importa el output, no las llamadas |
| Mock | Verifica que se llamó con los parámetros correctos | Cuando el efecto secundario ES el comportamiento |
| Fake | Implementación simplificada real | Tests de integración ligeros (ej. InMemoryRepository) |
| Spy | Registra las llamadas reales | Cuando quieres verificar interacciones sin definirlas antes |

**Ejemplo con Mockery en Laravel:**
```php
/** @test */
public function it_sends_welcome_email_after_registration(): void
{
    // Arrange
    $mailer = Mockery::mock(MailerInterface::class);
    $mailer->shouldReceive('send')
           ->once()
           ->with(WelcomeEmail::class, 'user@example.com');

    $service = new RegistrationService($mailer);

    // Act
    $service->register('user@example.com', 'SecurePass123');

    // Assert implícito: Mockery verifica la expectativa al final del test
}
```

---

## Parte 4: Qué testear y qué no testear

**Sí testear:**
- Lógica de negocio con múltiples ramificaciones (cálculos, validaciones, reglas)
- Casos límite y condiciones de error (división por cero, arrays vacíos, nulls)
- Transformaciones de datos (parsers, mappers, formatters)
- Comportamientos críticos: pagos, permisos, notificaciones

**No testear (o no como unitarios):**
- Getters y setters triviales sin lógica
- Configuración del framework
- Código que solo delega a una librería externa sin transformación
- Consultas de base de datos (eso es integración, no unidad)

**La regla de oro:** si borras el test y nadie nota que desapareció en 6 meses, el test no valía la pena.

---

## Parte 5: Aplicación práctica — dame tu código

Compárteme una clase, función o módulo de tu proyecto actual (puede ser 20-100 líneas) y haré lo siguiente:

1. Identificaré qué comportamientos merecen ser testeados
2. Escribiré los tests unitarios aplicando AAA
3. Si el código no es testeable, lo refactorizaré para que lo sea (aplicando SRP, inyección de dependencias o extracción de métodos)
4. Explicaré cada decisión de diseño que tome

**Formato que debes darme:**
```
Lenguaje: [PHP / Python / JS / etc.]
Framework de testing: [PHPUnit / Jest / Pytest / etc.]
Código a testear:
[pega aquí tu código]

Comportamiento que quiero verificar:
[describe en lenguaje natural qué debe hacer este código]
```

---

## Parte 6: Integración en el flujo de trabajo del equipo

Para que TDD se adopte en el equipo, necesitas estas tres anclas:

1. **Pre-commit hook**: ejecuta los tests antes de cada commit. Si fallan, el commit no pasa.
2. **CI obligatorio**: ninguna PR se aprueba si la suite falla o si la cobertura baja del umbral definido.
3. **Definición de Done actualizada**: un ticket no está terminado hasta que tenga tests que cubran los happy path y al menos dos edge cases.

Dime cómo está configurado tu flujo actual y te ayudo a añadir estas anclas sin fricción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Aplicar TDD para escribir tests que mejoran el diseño del código y previenen regresiones',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Landing pages de alta conversión',
                'description'       => 'Estructura, jerarquía visual y copy que convierte visitantes en leads o clientes desde el primer segundo.',
                'prompt_content'    => <<<'PROMPT'
# Diseña una landing page que convierte: estructura, jerarquía y copy

Actúa como un especialista en CRO (Conversion Rate Optimization) y diseño UX con experiencia en landing pages para SaaS, infoproductos, servicios y e-commerce. Voy a compartirte el contexto de mi página y necesito un análisis y rediseño orientado exclusivamente a conversión.

## Contexto que necesito que me preguntes (o asume si ya lo tienes)

- Producto o servicio y propuesta de valor principal
- Audiencia objetivo y nivel de consciencia del problema
- Acción deseada (suscripción, compra, demo, descarga, llamada)
- Métricas actuales si existen (tasa de conversión, tasa de rebote, tiempo en página)
- Tráfico principal que llega a la página (paid ads, SEO, email, referral)

---

## Parte 1: Los 5 segundos que lo deciden todo

Un visitante decide si sigue leyendo o abandona en menos de 5 segundos. En ese tiempo solo ve el "above the fold" — lo que cabe en pantalla sin hacer scroll.

**El above the fold perfecto contiene exactamente:**
1. **Headline**: el beneficio principal en una frase (máximo 10 palabras). No el nombre del producto, el resultado del usuario.
2. **Subheadline**: amplía el headline con el cómo o para quién (1-2 frases)
3. **Hero visual**: imagen o video que muestra el producto en uso, no un stock foto genérico
4. **CTA principal**: botón con copy de acción específico ("Empieza gratis 14 días", no "Enviar")
5. **Proof element**: un microdato de credibilidad (4,9/5 · 2.340 reseñas · Usado por empresas como X)

**Fórmula de headline de alta conversión:**
```
[Resultado deseado] + [Timeframe o condición] + [Objeción eliminada]

Ejemplo: "Automatiza tus reportes de ventas en 10 minutos sin tocar código"
```

---

## Parte 2: Estructura completa de la página

Sigue este orden probado para páginas de conversión media-alta (visitas frías/templadas):

### Bloque 1 — Hero (above the fold)
- Headline orientado a beneficio
- Subheadline que amplía y cualifica
- CTA primario + CTA secundario (ej. "Ver demo")
- Prueba social mínima (logos de clientes o número de usuarios)

### Bloque 2 — Problema / dolor
- Describe el estado actual del usuario sin tu solución
- Usa el lenguaje exacto con el que tus usuarios describen su problema (extraído de entrevistas, reseñas, foros)
- 3-5 puntos de dolor específicos y emocionales

### Bloque 3 — Solución y cómo funciona
- Explica el mecanismo: qué hace tu producto y cómo lo hace
- Formato: 3 pasos simples o funcionalidades clave con icono + título + descripción breve
- Captura de pantalla o GIF del producto real

### Bloque 4 — Beneficios y resultados
- No listes características, lista transformaciones: "Antes pasabas 3 horas preparando el informe. Ahora son 10 minutos."
- Usa la estructura: [Característica] → [Ventaja] → [Beneficio emocional]

### Bloque 5 — Prueba social
- Testimonios con foto, nombre, cargo y empresa (sin foto = sin credibilidad)
- Casos de uso o resultados numéricos: "Aumentó su conversión un 34 % en 60 días"
- Logos de clientes reconocibles o menciones en medios

### Bloque 6 — Objeciones (FAQ)
- Lista las 5-7 preguntas que hacen tus prospectos antes de comprar
- Respóndelas honestamente, incluyendo la de precio y la de "¿y si no funciona para mí?"

### Bloque 7 — CTA final
- Repite el CTA con variación de copy
- Añade garantía o condición de riesgo cero ("Sin tarjeta de crédito", "Cancela cuando quieras")
- Urgencia real si existe (plazas limitadas, precio de lanzamiento)

---

## Parte 3: Copy que convierte — principios y ejemplos

**Principios de copy CRO:**

| Principio | Aplicación práctica |
|---|---|
| Especificidad beats generalidad | "Ahorra 4 horas a la semana" > "Ahorra tiempo" |
| VOC (Voice of Customer) | Usa las palabras exactas de tus clientes, no las tuyas |
| Reducción de riesgo | Garantías, periodos de prueba, reembolsos |
| Urgencia y escasez reales | Solo si son verdad; la urgencia falsa destruye confianza |
| Progresión de micro-sí | Cada bloque consigue un pequeño acuerdo del lector |

**Errores de copy más frecuentes:**
- Headline con el nombre de la empresa en lugar del beneficio
- CTA genérico: "Enviar", "Más información", "Suscribirse"
- Lenguaje centrado en el producto ("Nuestra plataforma ofrece...") en lugar del usuario ("Tú podrás...")
- Features sin beneficio: "Integración con 200 herramientas" → "Conecta con las herramientas que ya usas tu equipo, sin migrar datos"

---

## Parte 4: Jerarquía visual y diseño

**Reglas de diseño para conversión:**
1. Un solo CTA primario por sección (máximo dos CTAs por pantalla: primario + secundario)
2. Dirección visual hacia el CTA: la mirada del personaje en la foto debe apuntar al botón
3. Contraste del botón: el color del CTA debe ser el más llamativo de la página, con ratio de contraste ≥ 4,5:1
4. Espacio en blanco generoso: las páginas de alta conversión tienen más espacio vacío del que parece necesario
5. Mobile-first: el 60-70 % del tráfico de muchas landing pages es móvil; si el formulario no funciona con el pulgar, estás perdiendo conversiones

---

## Parte 5: Testing y optimización

**Qué testear primero (por impacto):**
1. Headline del hero (mayor impacto individual)
2. Copy del CTA
3. Hero visual (foto vs. video vs. ilustración)
4. Longitud del formulario (pedir menos datos = más conversiones, pedir más = leads de mayor calidad)
5. Posición y número de testimonios

**Checklist de revisión antes de publicar:**
- [ ] ¿El visitante sabe en 5 segundos qué hace el producto y para quién es?
- [ ] ¿Hay un CTA claro above the fold?
- [ ] ¿El copy habla de beneficios, no solo de características?
- [ ] ¿Hay al menos 3 elementos de prueba social?
- [ ] ¿Está optimizada para móvil?
- [ ] ¿La velocidad de carga es < 3 segundos?
- [ ] ¿Responde las principales objeciones?

---

## Entregable

Dame la URL de tu landing page actual (o describe su estructura) y generaré:
1. Análisis de lo que está frenando la conversión
2. Reescritura del headline y subheadline
3. Propuesta de estructura nueva con copy para cada bloque
4. Lista de los 3 tests A/B que implementaría primero
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Estructurar y escribir una landing page que convierte visitantes en leads o clientes',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Reactivación de cuentas inactivas',
                'description'       => 'Reactiva clientes dormidos con el enfoque correcto: sin parecer desesperado y con una tasa de respuesta real.',
                'prompt_content'    => <<<'PROMPT'
# Reactiva cuentas inactivas sin perder la dignidad comercial

Actúa como un experto en ventas consultivas y customer success con experiencia en estrategias de win-back para SaaS, servicios profesionales y B2B. Voy a compartirte el contexto de mis cuentas inactivas y necesito una estrategia de reactivación completa: segmentación, mensajes, timing y seguimiento.

## Contexto que necesito que me des o que yo te proporcione

- Tipo de producto o servicio y ticket medio
- Definición de "inactivo" en mi negocio (sin compra en X meses, sin login en Y días, sin responder en Z semanas)
- Razones conocidas o sospechadas por las que dejaron de comprar / responder
- Canal habitual de comunicación con estos clientes

---

## Parte 1: Segmenta antes de contactar

No todos los inactivos merecen el mismo esfuerzo ni el mismo mensaje. Clasifícalos primero:

**Matriz de priorización de reactivación:**

| Segmento | Criterio | Prioridad | Approach |
|---|---|---|---|
| Alto valor, baja inactividad | LTV alto, inactivo < 3 meses | Máxima | Llamada personal |
| Alto valor, alta inactividad | LTV alto, inactivo 3-12 meses | Alta | Email personalizado + llamada |
| Bajo valor, baja inactividad | LTV bajo, inactivo < 3 meses | Media | Secuencia email automatizada |
| Bajo valor, alta inactividad | LTV bajo, inactivo > 12 meses | Baja | Un email de cierre y limpieza de lista |

**Datos que debes cruzar para segmentar:**
- Fecha de última compra / interacción
- Histórico de gasto total (LTV real)
- Razón de cancelación o pérdida si se registró
- Interacciones recientes con contenido (apertura de emails, visitas web)
- Cambios en la empresa del cliente (expansión, reducción, cambio de responsable)

---

## Parte 2: Diagnostica el motivo de la inactividad

Antes de lanzar la campaña, intenta entender por qué se fueron o se enfriaron. Los motivos más frecuentes:

1. **Circunstancial**: no era el momento (presupuesto, prioridades cambiadas) — alta probabilidad de win-back
2. **Competencia**: eligieron a otro proveedor — reactivable si han tenido mala experiencia con ellos
3. **Producto**: el producto no cubría su necesidad real — solo reactivable si has mejorado en ese área
4. **Relacional**: mala experiencia de servicio o falta de seguimiento — necesita reconocimiento y gesto concreto
5. **Desaparición natural**: la empresa cerró, el contacto cambió de trabajo, el proyecto terminó — limpia y actualiza

Para cada segmento prioritario, investiga antes de contactar:
- LinkedIn: ¿sigue en la empresa? ¿Ha cambiado de rol?
- CRM: ¿cuál fue la última interacción y qué se habló?
- Email: ¿han abierto algún email tuyo en los últimos 90 días?

---

## Parte 3: La secuencia de reactivación

**Estructura recomendada: 4 puntos de contacto en 3 semanas**

### Toque 1 — Email de reconexión (día 1)
Tono: casual, sin presión, centrado en ellos.

```
Asunto: [Nombre], ¿cómo va todo por [su empresa]?

Hola [Nombre],

Han pasado [X meses] desde que hablamos y quería saber cómo estás.

¿Pudisteis avanzar con [el proyecto / la iniciativa que mencionaste]?

Sin ninguna agenda comercial por mi parte, solo curiosidad genuina.

[Tu nombre]
```

### Toque 2 — Valor sin pedir nada (día 5)
Comparte un recurso, artículo, caso de uso o insight relevante para su sector. Ni una mención a venta.

```
Asunto: Esto me hizo pensar en [su empresa]

Hola [Nombre],

Leyendo sobre [tendencia en su sector] me acordé de la conversación que tuvimos sobre [tema concreto].

Creo que este [informe / caso de uso / artículo] podría ser útil para [su contexto específico].

[Enlace]

¿Sigue siendo eso una prioridad para vosotros?
```

### Toque 3 — Propuesta de valor actualizada (día 10)
Solo si hubo apertura o respuesta en los anteriores. Introduce una razón nueva para volver.

```
Asunto: Lo que ha cambiado desde que hablamos

Hola [Nombre],

Desde la última vez que trabajamos juntos hemos lanzado [nueva funcionalidad / mejora concreta] que resuelve exactamente lo que me comentaste sobre [problema específico que mencionaron].

¿Tienes 20 minutos esta semana para que te cuente cómo está funcionando para otros equipos como el tuyo?
```

### Toque 4 — Cierre elegante (día 18)
Si no hay respuesta tras tres intentos, cierra sin quemarte el puente.

```
Asunto: Último mensaje de mi parte

Hola [Nombre],

He intentado contactarte varias veces sin éxito. Entiendo que tienes muchas cosas en marcha y que quizás no es el momento.

No volveré a escribirte a menos que me lo pidas.

Si en algún momento tiene sentido retomar la conversación, aquí me tienes.

[Tu nombre]
```

Este último email tiene tasas de respuesta sorprendentemente altas porque elimina completamente la presión.

---

## Parte 4: Canales y timing

**Secuencia multicanal para cuentas de alto valor:**

| Día | Canal | Acción |
|---|---|---|
| 1 | Email | Toque 1: reconexión |
| 3 | LinkedIn | Like o comentario en una publicación reciente suya |
| 5 | Email | Toque 2: recurso de valor |
| 7 | LinkedIn | Mensaje directo breve referenciando el email |
| 10 | Email | Toque 3: propuesta actualizada |
| 12 | Teléfono | Llamada breve (si hay señales de apertura) |
| 18 | Email | Toque 4: cierre elegante |

---

## Parte 5: Métricas de éxito del programa de reactivación

| KPI | Qué mide | Benchmark referencia |
|---|---|---|
| Tasa de respuesta | % de inactivos que responden | 5-15 % según sector y tiempo de inactividad |
| Tasa de win-back | % que vuelven a comprar | 2-8 % del total contactado |
| Revenue recuperado | Valor total de ventas reactivadas | Depende del ticket y volumen |
| Tiempo medio de reactivación | Días desde primer contacto hasta cierre | 14-45 días en B2B |

---

## Entregable

Dame la lista de clientes inactivos que quieres reactivar (o describe el segmento) y elaboraré:
1. Segmentación personalizada con prioridad para cada grupo
2. Secuencia de 4 emails adaptados a tu tono de marca y producto
3. Script para la llamada de seguimiento
4. Dashboard de seguimiento con las métricas que debes monitorizar
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseñar y ejecutar una campaña de reactivación de clientes inactivos',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Documentación de producto',
                'description'       => 'PRDs, specs y wikis que el equipo de ingeniería y diseño realmente lee, entiende y usa para construir.',
                'prompt_content'    => <<<'PROMPT'
# Documentación de producto que el equipo realmente usa

Actúa como un Product Manager senior con experiencia en equipos de producto de 5 a 50 personas, equipos distribuidos y ciclos de desarrollo ágil. Voy a compartirte el contexto de la funcionalidad o iniciativa que necesito documentar, y necesito que me ayudes a crear documentación que el equipo de ingeniería, diseño y stakeholders realmente lea y use.

## El problema con la documentación de producto habitual

La mayoría de los PRDs mueren en Confluence porque:
- Son demasiado largos y genéricos (30 páginas para una feature de 2 semanas)
- Mezclan el "qué" con el "cómo" (invaden el trabajo de ingeniería)
- Se escriben antes de validar el problema y quedan obsoletos antes de que empiece el sprint
- No tienen un dueño claro ni una fecha de revisión

La documentación útil tiene una regla: si no toma una decisión o resuelve una ambigüedad, no debería existir.

---

## Parte 1: Tipos de documentos y cuándo usar cada uno

| Documento | Propósito | Longitud ideal | Cuándo escribirlo |
|---|---|---|---|
| Problem Brief | Articula el problema y por qué vale la pena resolverlo | 1 página | Antes de comprometer recursos |
| PRD (Product Requirements Doc) | Define qué construir y los criterios de éxito | 2-4 páginas | Después de validar el problema |
| Tech Spec / RFC | Define cómo construirlo (responsabilidad de ingeniería) | Variable | Durante el sprint de discovery |
| User Story + criterios de aceptación | Define el comportamiento esperado en detalle | 10-20 líneas | Durante refinamiento del backlog |
| Runbook de lanzamiento | Checklist operativo para el release | 1-2 páginas | 1 semana antes del lanzamiento |
| Postmortem / Retro de feature | Qué aprendimos al construir y lanzar | 1 página | 2-4 semanas después del lanzamiento |

---

## Parte 2: La plantilla de PRD que funciona

### Plantilla PRD — versión compacta

```markdown
# [Nombre de la feature] — PRD

**Estado:** Draft / En revisión / Aprobado / En desarrollo / Lanzado
**PM:** [Nombre]
**Ingeniería:** [Lead técnico]
**Diseño:** [Diseñador responsable]
**Última actualización:** [Fecha]

---

## 1. El problema (1 párrafo)
¿Qué problema tiene el usuario? ¿Cuántos usuarios lo tienen? ¿Cuánto les cuesta no resolverlo?

## 2. Por qué ahora (1 párrafo)
¿Por qué es prioritario resolver esto en este momento y no en 3 meses?

## 3. Objetivo y métrica de éxito
- Objetivo: [verbo + resultado medible + plazo]
- Métrica primaria: [KPI que se mueve si esto funciona]
- Métrica secundaria: [KPI que no debe empeorar]
- Guardrail: [qué no debe romperse]

## 4. Usuarios objetivo
- Usuario primario: [persona + contexto + job to be done]
- Usuarios secundarios o afectados: [si los hay]
- Out of scope de usuarios: [quién NO es el target]

## 5. Solución propuesta
[Descripción del flujo de usuario en texto + enlace al Figma / prototipo]

### Casos de uso principales (happy path)
1. [Caso 1]
2. [Caso 2]
3. [Caso 3]

### Edge cases y estados de error
- [Qué pasa si el usuario no tiene permisos]
- [Qué pasa si falla la conexión]
- [Estado vacío: primera vez que el usuario accede]

## 6. Out of scope (explícito)
- NO incluye: [lista de cosas que no se van a hacer en esta iteración]

## 7. Dependencias y riesgos
- Dependencias técnicas: [APIs, servicios, otros equipos]
- Dependencias de negocio: [aprobaciones, datos, integraciones]
- Riesgos: [qué podría salir mal y plan de mitigación]

## 8. Preguntas abiertas
| Pregunta | Responsable | Fecha límite | Respuesta |
|---|---|---|---|
| ¿Permitimos X? | PM | DD/MM | — |

## 9. Historial de decisiones
| Fecha | Decisión | Alternativas consideradas | Razón |
|---|---|---|---|
| DD/MM | Usamos modal, no nueva página | Drawer lateral, página nueva | Menor coste de desarrollo |
```

---

## Parte 3: Escribir user stories que los engineers entienden

**Formato estándar:**
```
Como [tipo de usuario],
quiero [acción o capacidad],
para [beneficio o resultado esperado].
```

**Criterios de aceptación (Given-When-Then):**
```
Dado que [contexto o estado inicial],
cuando [el usuario realiza la acción],
entonces [resultado observable esperado].
```

**Ejemplo completo:**
```
Como administrador de cuenta,
quiero poder exportar todos los usuarios de mi organización a CSV,
para poder importarlos a nuestro CRM externo sin trabajo manual.

Criterios de aceptación:
- Dado que soy admin y tengo > 0 usuarios, cuando hago clic en "Exportar usuarios",
  entonces se descarga un archivo CSV con columnas: email, nombre, rol, fecha de alta, último acceso.
- Dado que el export tiene > 1.000 usuarios, cuando solicito el export,
  entonces recibo un email con el enlace de descarga en menos de 5 minutos.
- Dado que soy usuario sin rol admin, cuando intento acceder a la función de export,
  entonces veo un mensaje de error con instrucciones para contactar al admin.
```

---

## Parte 4: La wiki que se mantiene actualizada

La mayor causa de wikis muertas es que no tienen dueño ni proceso de actualización. Aplica este sistema:

1. **Una página = un dueño**: cada documento tiene un responsable en el frontmatter
2. **Fecha de caducidad**: cada página tiene una fecha de revisión programada (mínimo trimestral)
3. **Link, no copiar**: en lugar de duplicar información, enlaza a la fuente de verdad
4. **Estructura fija por tipo**: usa plantillas para que todos los documentos del mismo tipo tengan la misma estructura
5. **Búsqueda funcional**: si tu wiki no tiene búsqueda decente, nadie la usa — Notion, Confluence y Linear wiki tienen buena búsqueda; los README en carpetas no

**Estructura de wiki de producto recomendada:**
```
/producto
  /visión-y-estrategia
    - North Star y OKRs
    - Personas de usuario
    - Competitive landscape
  /roadmap
    - Roadmap actual (enlace a herramienta)
    - Decisiones de priorización
  /features
    - [Nombre feature 1] (PRD + estado)
    - [Nombre feature 2]
  /procesos
    - Cómo escribimos PRDs
    - Cómo hacemos refinamiento
    - Cómo medimos el éxito de una feature
  /postmortems
    - [Feature X] — aprendizajes
```

---

## Entregable

Dime qué necesitas documentar (nueva feature, iniciativa estratégica, proceso de equipo) y generaré:
1. PRD completo usando la plantilla con tu contexto específico
2. User stories con criterios de aceptación para los 3 casos de uso principales
3. Lista de preguntas abiertas que debes resolver antes de empezar el desarrollo
4. Checklist de revisión del documento antes de compartirlo con el equipo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Escribir PRDs, specs y wikis que el equipo de ingeniería y diseño realmente usa',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de bajas y ausencias',
                'description'       => 'Protocolo completo para gestionar incapacidades temporales, excedencias y reincorporaciones en España según la normativa vigente.',
                'prompt_content'    => <<<'PROMPT'
# Gestión de bajas y ausencias en España: protocolo completo para RRHH

Actúa como un experto en derecho laboral español y gestión de RRHH con experiencia en empresas de 10 a 500 empleados. Voy a describirte la situación de baja o ausencia de un empleado y necesito el protocolo de actuación correcto, los plazos legales, la documentación requerida y las gestiones con la Seguridad Social.

## Contexto que necesito que me ayudes a gestionar

- Tipo de baja o ausencia: IT enfermedad común, IT accidente laboral, maternidad/paternidad/nacimiento, excedencia voluntaria, excedencia por cuidado de hijos o familiares, reducción de jornada
- Antigüedad del empleado y tipo de contrato
- Convenio colectivo aplicable (puede haber mejoras sobre el mínimo legal)
- Si es la primera baja o hay historial de ausencias previas

---

## Parte 1: Incapacidad Temporal (IT) por enfermedad común o accidente no laboral

### Plazos y responsabilidades

| Día de baja | Quién paga | Porcentaje de la base reguladora |
|---|---|---|
| 1 al 3 | Nadie (a cargo del trabajador salvo mejora en convenio) | 0 % (salvo mejora) |
| 4 al 15 | Empresa | 60 % |
| 16 al 20 | Empresa (paga la SS y la empresa lo adelanta) | 60 % |
| 21 en adelante | INSS / Mutua (la empresa gestiona el pago delegado) | 75 % |

**Nota importante**: muchos convenios colectivos complementan hasta el 100 % desde el primer día. Revisa siempre el convenio aplicable.

### Documentación obligatoria

- **Parte médico de baja**: emitido por el médico del Sistema Nacional de Salud o la Mutua. El trabajador debe entregarlo a la empresa en un plazo de 3 días hábiles desde su emisión.
- **Partes de confirmación**: emitidos cada 7 días (procesos < 30 días) o cada 14 días (procesos ≥ 30 días). Mismos plazos de entrega.
- **Parte de alta**: el trabajador debe incorporarse en el plazo de 24 horas desde la fecha del alta médica.

### Gestiones de la empresa

1. **Comunicar la baja al sistema RED** de la Seguridad Social a través de la plataforma SILTRA o el sistema de tu gestoría
2. **Registrar en el sistema de control de presencia** la ausencia desde el primer día
3. **Notificar a la Mutua colaboradora** si la empresa tiene mutua para IT (muchas empresas tienen)
4. **Gestionar la cobertura del puesto**: plan de contingencia por ausencia

### Proceso cuando la baja se prolonga (> 365 días)

A partir del día 365, el INSS puede ampliar la IT hasta un máximo de 545 días si prevé que el trabajador puede recuperarse. Después, si no hay alta médica, el INSS puede:
- Declarar la Incapacidad Permanente (IP)
- Proponer el Alta médica con propuesta de IP

La empresa no puede despedir al trabajador por estar de baja (constituiría despido nulo), salvo causas objetivas o disciplinarias ajenas a la baja.

---

## Parte 2: IT por accidente laboral o enfermedad profesional

Las principales diferencias respecto a enfermedad común:

- **Pago desde el primer día**: la Mutua paga el 75 % de la base reguladora desde el día siguiente al accidente (el día del accidente lo paga íntegramente la empresa)
- **Base reguladora más alta**: incluye horas extra y pagas prorrateadas
- **Parte de accidente**: la empresa está obligada a comunicar el accidente a través del sistema DELTA (si hay baja, en las primeras 5 jornadas hábiles)
- **Investigación del accidente**: obligación legal de investigar las causas y registrarlas

---

## Parte 3: Excedencias

### Excedencia voluntaria

- **Derecho**: trabajadores con al menos 1 año de antigüedad
- **Duración**: mínimo 4 meses, máximo 5 años
- **Reingreso**: no está garantizado. El trabajador tiene derecho preferente a ocupar vacante de igual o similar categoría. Si no existe vacante, no hay obligación de reincorporar.
- **Notificación**: el trabajador debe solicitar el reingreso con antelación suficiente (recomendable mínimo 1 mes)
- **Cotización**: durante la excedencia NO se cotiza. Esto afecta al futuro derecho a prestaciones.

### Excedencia por cuidado de hijos

- **Derecho**: para cuidado de hijo o menor acogido hasta 3 años de edad
- **Duración**: hasta 3 años desde el nacimiento o la resolución de acogimiento
- **Reingreso**: GARANTIZADO. La empresa está obligada a reservar el puesto durante el primer año.
- **Cotización**: se mantiene durante el primer año (período asimilado a cotización)
- **Compatibilidad**: puede solicitarse a tiempo parcial

### Excedencia por cuidado de familiares

- **Derecho**: para cuidado de familiar hasta segundo grado por consanguinidad o afinidad que no pueda valerse por sí mismo
- **Duración**: máximo 2 años
- **Reserva de puesto**: sólo el primer año garantizado

---

## Parte 4: Protocolo de reincorporación

La reincorporación mal gestionada genera absentismo posterior. Aplica este protocolo:

### Semana previa al alta (si se conoce la fecha)
- [ ] Contactar con el empleado (si es apropiado y el empleado lo desea) para preparar la vuelta
- [ ] Actualizar al sustituto temporal sobre el proceso de traspaso
- [ ] Preparar el puesto de trabajo y los accesos

### Día de reincorporación
- [ ] Reunión de bienvenida con el responsable directo (30 minutos)
- [ ] Actualización sobre cambios en el equipo, proyectos y empresa durante la ausencia
- [ ] Revisión de workload y ajuste de expectativas para la primera semana
- [ ] Verificación de que todos los accesos funcionan correctamente

### Semanas 1 y 2
- [ ] Check-in diario breve con el responsable
- [ ] No sobrecargar con reuniones ni proyectos urgentes durante la primera semana
- [ ] Si hay bajas por motivos de salud mental, considerar reincorporación gradual (requiere informe médico)

### Reincorporación gradual (artículo 48.3 ET para maternidad/paternidad)
Para bajas por maternidad, paternidad o enfermedad grave, existe la posibilidad de una reincorporación a tiempo parcial de forma progresiva. Requiere acuerdo entre empresa y trabajador.

---

## Parte 5: Consideraciones especiales y errores frecuentes

**Errores más frecuentes en la gestión de ausencias:**

| Error | Consecuencia | Solución |
|---|---|---|
| No comunicar la baja al RED en plazo | Sanción de la TGSS | Automatizar con la gestoría |
| Contactar al empleado de baja para temas de trabajo | Puede considerarse acoso | Política clara de desconexión durante la baja |
| No gestionar la cobertura del puesto | Impacto operativo y carga sobre el equipo | Plan de contingencia previo |
| Despedir al empleado estando de baja | Despido nulo | Nunca tomar decisiones de despido durante una IT |
| No actualizar el convenio colectivo aplicable | Pagar menos de lo que corresponde | Revisión anual del convenio y complementos |

---

## Entregable

Descríbeme la situación concreta (tipo de baja, duración esperada, características del empleado y empresa) y elaboraré:
1. Protocolo de actuación paso a paso con fechas y responsables
2. Checklist de documentación requerida
3. Cálculo del subsidio y coste para la empresa
4. Plantilla de comunicación interna para el equipo del empleado de baja
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestionar incapacidades temporales, excedencias y reincorporaciones en España',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Unit economics y estructura de costes',
                'description'       => 'Desglosa el coste unitario de tu producto o servicio para identificar dónde optimizar y cuándo serás rentable.',
                'prompt_content'    => <<<'PROMPT'
# Unit economics: entiende y optimiza el coste unitario de tu negocio

Actúa como un CFO fractional con experiencia en startups en fase seed y Serie A, SaaS y negocios de servicios. Voy a compartirte los datos de mi negocio y necesito que me ayudes a construir el modelo de unit economics completo: desde el coste variable unitario hasta el payback period y las palancas de mejora.

## Qué son los unit economics y por qué son críticos

Los unit economics miden la rentabilidad de una unidad individual de negocio — normalmente un cliente, un pedido o una suscripción — sin la distorsión de los costes fijos. Saberlos es fundamental porque:
- Un negocio puede crecer en revenue y ser cada vez más deficitario si los unit economics son negativos
- Son el primer filtro de los inversores para evaluar la escalabilidad del modelo
- Identifican exactamente dónde estás "quemando" dinero y qué acción tiene mayor impacto

---

## Parte 1: Las métricas clave y cómo calcularlas

### CAC — Coste de Adquisición de Cliente

```
CAC = Total invertido en ventas y marketing / Número de nuevos clientes en el mismo período
```

**Importante**: incluye salarios del equipo comercial y de marketing, no solo la inversión publicitaria.

**Ejemplo**:
- Inversión en ads: 8.000 €
- Salario equipo de ventas y marketing (proporcional): 12.000 €
- Herramientas de marketing y CRM: 1.500 €
- Total: 21.500 €
- Nuevos clientes ese mes: 43
- **CAC = 21.500 / 43 = 500 €**

**Benchmark por modelo de negocio:**

| Modelo | CAC bajo | CAC alto |
|---|---|---|
| SaaS SMB | 100-500 € | 500-2.000 € |
| SaaS Enterprise | 2.000-10.000 € | 10.000-50.000 € |
| E-commerce | 10-50 € | 50-200 € |
| Marketplace | 20-100 € | 100-500 € |

---

### LTV — Lifetime Value

Para SaaS con suscripción mensual:
```
LTV = ARPU × Margen bruto / Churn rate mensual
```

**Ejemplo**:
- ARPU (ingreso medio por usuario/mes): 80 €
- Margen bruto: 75 %
- Churn mensual: 2 %
- **LTV = 80 × 0,75 / 0,02 = 3.000 €**

Para negocios con compras repetidas:
```
LTV = Ticket medio × Frecuencia de compra anual × Años de vida del cliente × Margen bruto
```

---

### Ratio LTV / CAC

El ratio que define la salud del modelo:

| Ratio LTV/CAC | Interpretación |
|---|---|
| < 1 | Destruyes valor por cada cliente. Para inmediatamente. |
| 1 - 3 | Negocio viable pero ajustado. Optimiza antes de escalar. |
| 3 - 5 | Saludable. Puedes crecer con cautela. |
| > 5 | Excelente. Escala agresivamente. |

**El objetivo estándar para SaaS en crecimiento es LTV/CAC ≥ 3.**

---

### Payback Period

Cuántos meses tarda un cliente en devolverte lo que te costó adquirirlo:

```
Payback = CAC / (ARPU mensual × Margen bruto)
```

**Ejemplo**:
- CAC: 500 €
- ARPU: 80 €
- Margen bruto: 75 %
- **Payback = 500 / (80 × 0,75) = 500 / 60 = 8,3 meses**

**Benchmark**:
- SaaS SMB: 6-18 meses es aceptable
- SaaS Enterprise: hasta 24-36 meses puede ser sostenible si el LTV es muy alto
- E-commerce: idealmente < 3 meses

---

## Parte 2: Estructura de costes por unidad (COGS y contribution margin)

### Gross Margin (Margen Bruto)

```
Margen bruto = (Revenue - COGS) / Revenue × 100
```

**Qué incluye el COGS en distintos modelos:**

| Modelo | COGS típicos |
|---|---|
| SaaS | Hosting e infraestructura, soporte de customer success, licencias de terceros por usuario |
| E-commerce | Coste del producto, fulfillment, logística, devoluciones |
| Agencia / Servicios | Horas del equipo directamente dedicado al proyecto, subcontratistas |
| Marketplace | Procesamiento de pagos, fraude, costes de transacción |

**Benchmark de margen bruto por modelo:**
- SaaS puro: 70-85 %
- SaaS con hardware o servicios: 50-70 %
- E-commerce: 30-60 %
- Servicios / agencia: 40-65 %

---

### Contribution Margin (Margen de Contribución)

A diferencia del margen bruto, el contribution margin descuenta también los costes variables de ventas y marketing:

```
Contribution Margin = Revenue - COGS - Costes variables de S&M
```

Este es el número que realmente indica si cada cliente "contribuye" a cubrir los costes fijos.

---

## Parte 3: Simulador de escenarios

Dime tus datos actuales y simularemos tres escenarios: conservador, base y optimista.

**Datos que necesito:**
- Revenue mensual actual y número de clientes activos
- Inversión mensual en marketing y ventas (incluyendo salarios)
- Nuevos clientes al mes
- Tasa de churn mensual
- COGS estimados (hosting, soporte, fulfillment...)
- Ticket medio o ARPU

Con estos datos calcularé:
1. CAC actual y desglosado por canal
2. LTV con sensibilidad al churn
3. Ratio LTV/CAC y comparativa con benchmark de tu sector
4. Payback period actual
5. Punto de break-even operativo

---

## Parte 4: Las 5 palancas para mejorar los unit economics

| Palanca | Qué optimiza | Impacto típico |
|---|---|---|
| Reducir churn | Aumenta LTV sin tocar el CAC | Alto — cada punto de churn = cambio drástico en LTV |
| Aumentar ARPU (upsell/expansión) | Aumenta LTV por cliente existente | Alto — costo casi nulo de adquisición |
| Mejorar conversión del funnel | Reduce CAC al obtener más clientes con el mismo gasto | Medio-alto |
| Reducir COGS con automatización o escala | Aumenta margen bruto | Medio — requiere inversión previa |
| Optimizar mix de canales | Reduce CAC global priorizando canales con menor coste | Medio |

---

## Entregable

Compárteme los datos de tu negocio (aunque sean aproximados) y recibirás:
1. Tabla de unit economics completa con CAC, LTV, ratio y payback
2. Comparativa con benchmarks de tu sector
3. Las 2-3 palancas con mayor impacto según tu situación específica
4. Modelo en formato tabla que puedas copiar a una hoja de cálculo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Calcular y optimizar el coste unitario y la rentabilidad por cliente',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos con proveedores tecnológicos SaaS y cloud',
                'description'       => 'Negocia y revisa contratos con proveedores SaaS y cloud: SLAs, portabilidad de datos, exit clauses y gestión del riesgo de vendor lock-in.',
                'prompt_content'    => <<<'PROMPT'
# Contratos tecnológicos SaaS y cloud: lo que debes exigir antes de firmar

Actúa como un abogado especialista en derecho tecnológico y contratos IT con experiencia asesorando a startups y empresas medianas en la contratación de soluciones SaaS, plataformas cloud y proveedores de infraestructura. Voy a compartirte el contrato o las condiciones de un proveedor tecnológico y necesito que me ayudes a identificar riesgos, negociar mejoras y proteger los intereses de mi empresa.

## Contexto que necesito que me des o que yo te proporcione

- Proveedor y tipo de servicio (CRM, ERP, infraestructura cloud, plataforma de pagos, herramienta de comunicación...)
- Volumen de datos almacenados y tipo (datos de clientes, datos financieros, datos de salud...)
- Duración prevista de la relación y grado de integración en los procesos internos
- Presupuesto del contrato (determina el poder de negociación)
- Si hay datos personales de ciudadanos europeos implicados (RGPD)

---

## Parte 1: El SLA — lo que el proveedor realmente garantiza

El SLA (Service Level Agreement) define las garantías de disponibilidad y rendimiento. Lo que suele poner en el contrato y lo que significa en la práctica son cosas muy distintas.

### Disponibilidad (uptime)

| Uptime garantizado | Tiempo de caída permitido al año | Tiempo de caída al mes |
|---|---|---|
| 99,0 % | 87,6 horas | 7,3 horas |
| 99,5 % | 43,8 horas | 3,65 horas |
| 99,9 % | 8,76 horas | 43,8 minutos |
| 99,95 % | 4,38 horas | 21,9 minutos |
| 99,99 % | 52,6 minutos | 4,4 minutos |

**Lo que debes preguntar:**
- ¿Cómo se mide el uptime? ¿Incluye mantenimientos planificados o los excluye? (La mayoría de contratos excluyen el mantenimiento, lo que infla artificialmente el uptime declarado)
- ¿Quién certifica la medición? ¿Hay acceso a métricas en tiempo real?
- ¿Existe una página de estado pública? (statuspage.io u equivalente)

### Penalizaciones por incumplimiento del SLA

La mayoría de contratos SaaS incluyen créditos de servicio que son simbólicos. Ejemplo típico:

```
Uptime 99,0-99,5 % → crédito del 5 % de la factura mensual
Uptime 95,0-99,0 % → crédito del 10 % de la factura mensual
Uptime < 95,0 % → crédito del 25 % de la factura mensual
```

**El problema**: si pagas 500 €/mes y el servicio estuvo caído 8 horas durante un día crítico, el crédito máximo que recibirás es 125 €, muy por debajo del daño real causado.

**Qué negociar**:
- Créditos proporcionales al tiempo real de caída (no a rangos amplios)
- Derecho de terminación por causa si el SLA se incumple más de X veces en un período
- Exclusión del tiempo de mantenimiento del cómputo de uptime solo si el mantenimiento se comunica con al menos 72 horas de antelación

### RTO y RPO (Recovery Time Objective / Recovery Point Objective)

- **RTO**: tiempo máximo para restaurar el servicio tras un incidente grave
- **RPO**: máxima pérdida de datos aceptable (cuántas horas de datos puedes perder en el peor caso)

Estos dos parámetros deben estar en el contrato, no solo en la documentación técnica.

---

## Parte 2: Portabilidad y exportación de datos

Este es el punto más crítico y el más ignorado al firmar. Si no puedes sacar tus datos de forma limpia, eres prisionero del proveedor.

**Qué debe garantizar el contrato:**

1. **Formato de exportación estándar**: los datos deben exportarse en formatos abiertos e interoperables (CSV, JSON, XML, SQL dump). Rechaza cualquier formato propietario que solo lea el software del proveedor.

2. **Exportación completa sin coste adicional**: la exportación de todos tus datos debe estar incluida en el servicio. Algunos proveedores cobran por exportar, lo que es una práctica abusiva.

3. **Plazo de exportación**: el contrato debe especificar en cuántos días el proveedor te facilita la exportación completa si la solicitas.

4. **Período de acceso tras la terminación**: mínimo 30 días (preferiblemente 90) de acceso de solo lectura después de cancelar para completar la migración.

5. **Destrucción certificada de datos**: tras la exportación y el período de gracia, el proveedor debe certificar por escrito la eliminación de tus datos de todos sus sistemas, incluidas copias de seguridad.

**Plantilla de cláusula de portabilidad que debes pedir:**
```
A solicitud del Cliente, el Proveedor facilitará la exportación de todos los datos del Cliente
en formato [CSV/JSON/SQL] en un plazo máximo de [30] días desde la solicitud, sin coste adicional.
Tras la terminación del contrato por cualquier causa, el Proveedor mantendrá los datos accesibles
durante [90] días adicionales. Transcurrido ese plazo, el Proveedor destruirá todos los datos
del Cliente y emitirá certificado de destrucción en los [30] días siguientes.
```

---

## Parte 3: Exit clauses — cómo salir sin que duela

Las exit clauses (cláusulas de salida) definen en qué condiciones puedes terminar el contrato antes del período pactado y con qué coste.

**Tipos de terminación que debes negociar:**

| Tipo | Qué significa | Qué negociar |
|---|---|---|
| Terminación por causa | Puedes salir sin penalización si el proveedor incumple | Lista taxativa de causas: incumplimiento de SLA, brecha de seguridad, insolvencia |
| Terminación por conveniencia | Puedes salir sin justificación | Penalización reducida: máximo 1-3 meses de cuota, nunca el total del contrato restante |
| Terminación por cambio material | Si el proveedor cambia los términos, precios o funcionalidades | Derecho de salida si el cambio afecta negativamente al uso |
| Terminación por adquisición | Si el proveedor es adquirido por un competidor | Derecho de salida sin penalización en los 90 días siguientes |

---

## Parte 4: Vendor lock-in — el riesgo que no ves hasta que es tarde

El vendor lock-in ocurre cuando migrar a otro proveedor se vuelve tan costoso (en dinero, tiempo o riesgo) que en la práctica no puedes hacerlo.

**Señales de alto riesgo de vendor lock-in:**

- [ ] Los datos solo se pueden exportar en formato propietario
- [ ] El proveedor usa APIs propias no estándar que requieren reescribir integraciones
- [ ] El equipo solo sabe usar esa herramienta (lock-in de conocimiento)
- [ ] Los precios suben significativamente cada año por efecto de la migración implícita
- [ ] El contrato tiene penalizaciones de terminación superiores a 6 meses de cuota

**Estrategias de mitigación:**
1. Prioriza herramientas con APIs estándar (REST, GraphQL) e integraciones con middlewares como Zapier o Make
2. Documenta internamente todos los procesos y configuraciones del proveedor
3. Exporta copias de seguridad de tus datos periódicamente (aunque no estés pensando en cambiar)
4. Evalúa alternativas cada 18-24 meses aunque no tengas intención de migrar

---

## Parte 5: RGPD y privacidad en contratos cloud

Si tratas datos personales de ciudadanos europeos (clientes, empleados, usuarios), el RGPD te exige que el contrato con tu proveedor cloud incluya un DPA (Data Processing Agreement).

**Qué debe contener el DPA:**
- Objeto y duración del tratamiento
- Naturaleza y finalidad del tratamiento
- Tipo de datos personales y categorías de interesados
- Obligaciones y derechos del responsable del tratamiento (tú)
- Subencargados del tratamiento autorizados (sub-processors)
- Medidas de seguridad técnicas y organizativas implementadas
- Procedimiento ante violaciones de seguridad (notificación en 72 horas)
- Mecanismo de transferencia internacional si el proveedor está fuera del EEE (Cláusulas Contractuales Tipo de la CE)

---

## Entregable

Compárteme el contrato o las condiciones del proveedor (o descríbeme los términos clave) y elaboraré:
1. Análisis de riesgos del SLA con comparativa frente a los estándares del mercado
2. Lista de cláusulas que debes negociar y propuesta de redacción alternativa
3. Checklist RGPD / DPA
4. Valoración del riesgo de vendor lock-in con recomendaciones concretas de mitigación
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 70,
                'use_case'          => 'Revisar y negociar contratos con proveedores SaaS y cloud para minimizar riesgos',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Análisis de tickets para mejorar el producto',
                'description'       => 'Extrae patrones del backlog de soporte y conviértelos en mejoras de producto, documentación y reducción de volumen de tickets.',
                'prompt_content'    => <<<'PROMPT'
# Convierte tu backlog de tickets en una mina de insights de producto

Actúa como un experto en customer success, product operations y análisis de datos de soporte con experiencia en equipos de CS que manejan desde 100 hasta 10.000 tickets mensuales. Voy a compartirte datos de nuestro backlog de soporte y necesito que me ayudes a extraer los patrones más relevantes para el equipo de producto y para reducir el volumen de tickets a futuro.

## Por qué el análisis de tickets es la fuente de insights más subutilizada

Los equipos de producto suelen depender de encuestas NPS, entrevistas de usuario y analítica de producto. Sin embargo, el sistema de tickets contiene algo más valioso: problemas reales, en el lenguaje exacto del usuario, con contexto de su situación específica. El problema es que nadie los analiza sistemáticamente.

Un análisis bien hecho del backlog revela:
- Las funcionalidades que más confunden a los usuarios (problemas de UX, no de educación)
- Los casos de uso que el producto no cubre pero los usuarios intentan resolver con él
- Las integraciones y compatibilidades más demandadas
- Los mensajes de error que generan más fricción
- Los segmentos de usuarios con mayor propensión al churn por problemas no resueltos

---

## Parte 1: Sistema de categorización y tagging

El primer paso es tener los tickets correctamente etiquetados. Si tu sistema actual no tiene tags consistentes, empieza por categorizar los últimos 90 días.

### Taxonomía de categorías recomendada

**Nivel 1 — Tipo de ticket:**
- `bug`: comportamiento incorrecto del producto
- `feature-request`: funcionalidad que el usuario desea y no existe
- `how-to`: el usuario no sabe cómo hacer algo que sí está disponible
- `billing`: incidencias de facturación o pagos
- `account`: problemas de acceso, permisos, configuración de cuenta
- `integration`: problemas con integraciones de terceros
- `performance`: el producto es lento o inestable

**Nivel 2 — Área del producto:**
- Etiqueta con el nombre del módulo o sección donde ocurre el problema (ej. `módulo-informes`, `onboarding`, `api`, `dashboard`)

**Nivel 3 — Severidad e impacto:**
- `P1-crítico`: el usuario no puede usar el producto
- `P2-alto`: funcionalidad core degradada
- `P3-medio`: funcionalidad secundaria afectada
- `P4-bajo`: cosmético o deseo de mejora

**Nivel 4 — Segmento del usuario:**
- Plan de suscripción, industria o tamaño de empresa (si lo tienes disponible)

---

## Parte 2: Análisis de frecuencia y priorización

Una vez categorizados, el análisis de frecuencia revela el verdadero impacto:

### Matriz de priorización para producto

```
Impacto en roadmap = Frecuencia × Severidad × Segmento estratégico

Donde:
- Frecuencia: número de tickets en el período
- Severidad: P1=4, P2=3, P3=2, P4=1
- Segmento estratégico: clientes enterprise=3, plan Pro=2, plan Free=1
```

**Ejemplo de output del análisis:**

| Categoría | Tickets 90 días | Severidad media | Score prioridad | Acción recomendada |
|---|---|---|---|---|
| Exportar datos en PDF | 47 | P3 | 94 | Feature request — evaluar para Q2 |
| Error al conectar con Zapier | 31 | P2 | 93 | Bug + documentación — sprint actual |
| Cómo crear un informe personalizado | 89 | P3 | 89 | How-to — artículo de ayuda urgente |
| Dashboard lento con > 10k registros | 12 | P1 | 72 | Performance — investigación técnica |

---

## Parte 3: Identificar patrones cualitativos

La frecuencia cuantitativa no lo cuenta todo. El análisis cualitativo del texto de los tickets revela patrones que los números no capturan.

**Proceso de análisis cualitativo:**

1. **Agrupa los tickets más frecuentes** por categoría y lee los 10-15 más representativos de cada grupo
2. **Identifica el trabajo que intentan hacer** (jobs-to-be-done): "El usuario no está pidiendo X, está intentando conseguir Y y encuentra que X se lo impide"
3. **Extrae las frases literales**: las palabras exactas que usan los usuarios para describir el problema son oro para la documentación y el copy de la UI
4. **Detecta la raíz del problema**: ¿es un bug, un problema de diseño de UX, un gap de funcionalidad o un problema de documentación?

**Plantilla de análisis por categoría:**
```
Categoría: [Nombre]
Volumen últimos 90 días: [N tickets]
Tipo predominante: bug / how-to / feature-request / billing

Frase literal más repetida: "[cita exacta del ticket]"

Jobs-to-be-done identificado:
El usuario quiere [objetivo final], pero el producto [obstáculo actual].

Causa raíz:
[ ] Bug técnico
[ ] Problema de UX / flujo confuso
[ ] Funcionalidad inexistente
[ ] Documentación inexistente o inadecuada
[ ] Expectativa incorrecta generada por el marketing o el onboarding

Acción recomendada:
[ ] Bug fix — urgencia: alta/media/baja
[ ] Mejora de UX — descripción: [qué cambiar]
[ ] Nueva feature — brief: [descripción breve para el PRD]
[ ] Artículo de documentación — título sugerido: [título]
[ ] Mejora del onboarding — punto de fricción: [dónde]
```

---

## Parte 4: El ciclo de feedback al producto

El análisis de tickets solo crea valor si alimenta el proceso de decisión de producto de forma sistemática.

**Cadencia recomendada:**

| Frecuencia | Entregable | Audiencia |
|---|---|---|
| Semanal | Top 5 tickets más urgentes de la semana | Lead de producto + engineering |
| Mensual | Informe de tendencias: top categorías, variaciones, nuevos patrones | Producto + C-level |
| Trimestral | Análisis profundo de clusters: insights para el roadmap del siguiente quarter | Toda la empresa |

**Formato del informe mensual de tickets:**
```
## Informe de soporte — [Mes]

### Resumen ejecutivo
- Total tickets: [N] ([+/-]% vs mes anterior)
- Tiempo medio de resolución: [X] horas
- CSAT promedio: [X]/5
- Tasa de tickets recurrentes (mismo usuario, mismo problema): [X]%

### Top 3 categorías por volumen
1. [Categoría] — [N tickets] — tendencia: ↑↓→
2. [Categoría] — [N tickets] — tendencia: ↑↓→
3. [Categoría] — [N tickets] — tendencia: ↑↓→

### Nuevos patrones detectados
[Descripción de patrones que no existían o han crecido significativamente]

### Acciones tomadas este mes
- [Acción 1]: [resultado o estado]
- [Acción 2]: [resultado o estado]

### Propuestas para el equipo de producto
- [Propuesta 1] — justificación: [N tickets, segmento, impacto estimado]
- [Propuesta 2] — justificación: [N tickets, segmento, impacto estimado]
```

---

## Parte 5: Métricas del programa

| KPI | Qué mide | Objetivo |
|---|---|---|
| Ticket deflection rate | % de usuarios que resuelven solos con la documentación | > 30 % |
| First contact resolution | % de tickets resueltos en el primer contacto | > 70 % |
| Time to resolve | Tiempo medio de resolución por categoría | Definir SLA por P-level |
| Ticket-to-bug ratio | % de tickets que resultan en bugs reportados | Tracking de calidad de producto |
| Repeat contact rate | % de usuarios que abren ticket por el mismo problema | < 5 % |

---

## Entregable

Compárteme un export de tus tickets (o descríbeme las categorías y volúmenes que tienes) y elaboraré:
1. Taxonomía de categorías adaptada a tu producto
2. Análisis de priorización con la matriz de impacto
3. Informe de insights listo para compartir con el equipo de producto
4. Lista de artículos de documentación que reducirían el volumen de tickets en < 30 días
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Analizar el backlog de soporte para extraer insights de producto y reducir tickets',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Presentaciones y pitches ganadores',
                'description'       => 'Estructura, diseño y narrativa para presentaciones y propuestas que cierran más proyectos y ganan más clientes.',
                'prompt_content'    => <<<'PROMPT'
# Presentaciones y pitches que cierran proyectos: estructura, narrativa y diseño

Actúa como un consultor de comunicación y ventas B2B con experiencia ayudando a freelancers, consultores y agencias a ganar proyectos de alto valor mediante presentaciones y propuestas efectivas. Voy a contarte el contexto del proyecto o cliente para el que necesito preparar una presentación, y necesito que me ayudes a construirla desde cero o a mejorar lo que ya tengo.

## Contexto que debes pedirme antes de empezar

- Tipo de presentación: pitch de nuevo proyecto, propuesta económica, presentación de resultados, presentación de agencia
- Perfil del cliente o audiencia: decisor, técnico, financiero, mixto
- Formato: presencial, videollamada, enviada por email sin presentación en vivo
- Duración disponible: 15 minutos, 30 minutos, 60 minutos, o solo envío de PDF
- Competidores: ¿estás en un proceso de selección con otros proveedores?

---

## Parte 1: El error más caro en los pitches — hablar de ti en lugar del cliente

La mayoría de presentaciones de agencias y freelancers siguen este orden: "Quiénes somos → Nuestros servicios → Nuestros clientes → Presupuesto". Este orden está pensado para el proveedor, no para el cliente.

**El orden que convierte:**
1. **Situación del cliente**: demuestras que entiendes su contexto antes de presentar nada
2. **El problema o la oportunidad**: articulas lo que está en juego mejor de lo que ellos lo harían
3. **Tu solución específica**: no un catálogo de servicios, sino una respuesta diseñada para este caso
4. **Por qué tú**: evidencia específica de que puedes ejecutar (no genérica)
5. **Propuesta concreta y siguiente paso**: sin ambigüedad

Este orden comunica "te he escuchado y entiendo tu situación" antes de hablar de ti.

---

## Parte 2: La estructura de las 5 diapositivas que cierra el 80 % de los proyectos

Para pitches de 15-20 minutos o propuestas en PDF, cinco diapositivas bien construidas superan a decenas de slides mediocres:

### Slide 1 — "Esto es lo que veo en vuestro negocio"
Muestra que has hecho los deberes. Incluye:
- Descripción del contexto actual del cliente (su mercado, sus retos, su situación específica)
- El problema, pain point u oportunidad que van a resolver contigo
- Un dato, un hecho o una observación que demuestre que conoces su sector

**Objetivo**: que el cliente piense "esta persona nos ha entendido". Si consigues esto en la primera slide, el resto de la presentación lo escuchan desde otro lugar.

### Slide 2 — "Lo que voy a resolver / conseguir para vosotros"
No es "lo que voy a hacer", es "lo que vosotros vais a conseguir". Formula el objetivo en términos del cliente:
- Resultado cuantificable siempre que sea posible ("reducir el tiempo de X de 3 semanas a 5 días")
- Si no es cuantificable, describe el estado futuro deseado con claridad
- Define el criterio de éxito del proyecto

### Slide 3 — "Cómo lo vamos a hacer"
El plan de trabajo específico para este proyecto. No una lista genérica de servicios:
- Fases o entregables concretos con nombres descriptivos
- Timeline o duración estimada
- Lo que necesitas del cliente para ejecutar (para gestionar expectativas desde el principio)

### Slide 4 — "Por qué confiar en nosotros para esto"
Evidencia específica, no genérica:
- Caso de uso relevante: "Hicimos algo similar para [empresa parecida] y conseguimos [resultado concreto]"
- Una métrica o resultado demostrable
- Un testimonio específico de alguien que pueda verificarse
- Evita: "Llevamos 10 años en el sector", "trabajamos con empresas líderes" — eso lo dice todo el mundo

### Slide 5 — "La propuesta y el siguiente paso"
Claridad total. Sin ambigüedad:
- Alcance exacto: qué incluye y qué NO incluye (esto evita discusiones después)
- Inversión: precio total y desglose si es relevante
- Condiciones: forma de pago, entregables, revisiones incluidas
- Siguiente paso: qué debe pasar para arrancar, con una fecha o acción concreta
- Urgencia real si existe: "Esta propuesta tiene validez hasta [fecha]"

---

## Parte 3: Diseño visual — el 20 % que decide el 80 % de la percepción

No necesitas ser diseñador. Necesitas evitar los errores que hacen parecer amateur tu presentación:

**Reglas de diseño para no diseñadores:**

1. **Máximo 3 elementos visuales por slide**: titular, contenido principal, imagen o dato. Más es ruido.
2. **Tipografía consistente**: un solo tipo de letra. Usa tamaños para crear jerarquía (título 36-40pt, body 18-22pt, notas 14pt).
3. **Paleta de 2-3 colores**: el color de acento para lo más importante, neutros para el contexto.
4. **Imagen > texto siempre que puedas**: una foto de calidad comunica en 0,1 segundos lo que 50 palabras tardan en leer.
5. **Espacio en blanco**: las presentaciones ganadoras tienen más espacio vacío del que parece necesario.
6. **Evita**: fondos con degradados complejos, más de 3 fuentes, bullet points anidados en 3 niveles, capturas de pantalla sin recortar.

**Herramientas recomendadas por perfil:**
- Presentaciones con diseño profesional sin invertir tiempo: Canva Pro (plantillas limpias)
- Control total y animaciones: PowerPoint con la plantilla correcta o Keynote (Mac)
- Propuestas interactivas online: Pitch.com o Beautiful.ai
- Propuestas en PDF con diseño editorial: Notion + export o Adobe Express

---

## Parte 4: El pitch en vivo — los 3 momentos que lo cambian todo

Si la presentación es en vivo (presencial o videollamada), estos tres momentos deciden el resultado:

### Minuto 0-2 — El encuadre
Antes de mostrar la primera slide: "Antes de entrar en la propuesta, me gustaría confirmar que he entendido bien el contexto. ¿Me corriges si algo no es así?" Esto crea colaboración en lugar de evaluación.

### El momento de la pregunta difícil — precio o competencia
Cuando pregunten por el precio antes de que hayas terminado, o cuando comparen con la competencia, responde siempre con contexto antes de dar el número: "El precio depende directamente del alcance. Antes de darlo, déjame asegurarme de que el alcance que estoy proponiendo tiene sentido para vosotros."

### El cierre — nunca termines con "¿Tenéis alguna pregunta?"
Termina siempre con una propuesta de siguiente paso específica: "Si la propuesta tiene sentido para vosotros, el siguiente paso sería firmar la propuesta esta semana para poder arrancar el [fecha]. ¿Hay algo que necesitéis revisar antes de tomar esa decisión?"

---

## Parte 5: Follow-up tras el pitch

El 80 % de los proyectos no se ganan en la reunión, sino en el seguimiento:

**Secuencia de follow-up:**
- **24 horas**: email breve de "gracias + resumen de los puntos clave acordados + siguiente paso"
- **5 días (sin respuesta)**: email corto con una razón para volver a contactar (un artículo relevante, una pregunta concreta)
- **12 días (sin respuesta)**: email de cierre: "Entiendo que las prioridades cambian. Si en algún momento tiene sentido retomar la conversación, aquí me tienes."

---

## Entregable

Dime el contexto del proyecto o cliente y crearé:
1. Estructura completa de 5-8 slides con el copy de cada una
2. Propuesta de siguiente paso y CTA para el cierre
3. Email de envío de la propuesta (si va por email)
4. Script para los 3 momentos clave del pitch en vivo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir presentaciones y propuestas que cierran más proyectos',
                'vote_score'        => 39,
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
