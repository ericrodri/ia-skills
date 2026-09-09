<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills96Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Email marketing para ecommerce',
                'description'      => 'Diseña flujos de automatización completos: bienvenida, carrito abandonado, post-compra, reactivación y win-back con métricas reales y benchmarks del sector.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en email marketing para ecommerce con 10 años de experiencia gestionando flujos automatizados en Klaviyo, Mailchimp y ActiveCampaign. Tu objetivo es ayudarme a diseñar y optimizar una estrategia completa de email automation para mi tienda online.

## Contexto que necesito que analices

Antes de comenzar, pregúntame por:
- Plataforma de ecommerce (Shopify, WooCommerce, Magento, etc.)
- ESP actual (proveedor de email) o el que voy a usar
- Tipo de producto y ticket medio
- Volumen actual de suscriptores y compradores recurrentes
- Tasa de apertura y clic actuales si las tengo

## Los 5 flujos clave que necesito diseñar

### 1. Flujo de bienvenida (Welcome Series)
Diseña una secuencia de 4-6 emails para nuevos suscriptores que no han comprado todavía:

**Estructura recomendada:**
| Email | Timing | Objetivo | CTA principal |
|-------|--------|----------|---------------|
| #1 | Inmediato | Bienvenida + oferta primera compra | Comprar con X% dto |
| #2 | +2 días | Historia de marca + valores | Conocer más |
| #3 | +4 días | Bestsellers y prueba social | Ver más vendidos |
| #4 | +7 días | Contenido de valor (guía, tutorial) | Descargar/leer |
| #5 | +10 días | Recordatorio oferta + urgencia | Última oportunidad |

Para cada email dame: asunto (con variante A/B), preheader, estructura del cuerpo y CTA.

### 2. Flujo de carrito abandonado (Abandoned Cart)
La secuencia que recupera entre el 5% y el 15% de los carritos perdidos:

**Secuencia de 3 emails:**
- Email 1 (+1 hora): Recordatorio suave sin descuento — el producto sigue disponible
- Email 2 (+24 horas): Urgencia + reseñas del producto abandonado + asistencia
- Email 3 (+72 horas): Incentivo final (descuento o envío gratis) + escasez real si aplica

Dame el asunto, preheader y copy completo para cada uno, adaptado a mi tipo de producto.

### 3. Flujo post-compra (Post-Purchase)
Convierte compradores únicos en clientes recurrentes y embajadores:

**Secuencia de 5 emails:**
1. Confirmación de pedido (transaccional + upsell)
2. Confirmación de envío + anticipa la experiencia
3. Solicitud de reseña (3-5 días tras entrega estimada)
4. Email de contenido: cómo sacar el máximo partido al producto
5. Cross-sell a los 21 días: productos complementarios basados en la compra

### 4. Flujo de reactivación (Win-Back)
Para suscriptores que no abren desde hace 90+ días:

**Benchmark de referencia:**
- 90 días sin abrir: inicio de flujo de reactivación
- Tasa de reactivación esperada: 5-10% del segmento inactivo
- Decisión de limpieza: dar de baja tras 5 emails sin interacción

**Secuencia recomendada:**
- Email 1: "¿Sigues ahí?" — nostalgia + lo que se han perdido
- Email 2: Oferta exclusiva de reactivación
- Email 3: Última oportunidad + transparencia ("vamos a eliminarte de la lista")

### 5. Flujo de abandono de navegación (Browse Abandonment)
Para visitantes que vieron productos pero no añadieron al carrito:

Configura segmentos por categoría visitada y tiempo en página. Dame la lógica de segmentación y un email de ejemplo para cada caso principal.

## Métricas y benchmarks del sector

Comparte una tabla con los KPIs que debo medir para cada flujo:

| Flujo | Tasa apertura objetivo | CTR objetivo | Ingresos por email enviado |
|-------|----------------------|--------------|---------------------------|
| Bienvenida | 40-60% | 8-12% | 0,50-2€ |
| Carrito abandonado | 40-50% | 10-15% | 3-8€ |
| Post-compra | 55-70% | 10-20% | 1-4€ |
| Win-back | 10-25% | 2-5% | 0,20-1€ |

## Optimización y testing

Explícame el proceso de optimización continua:
1. Qué elementos testear primero (asunto, horario, descuento vs. no descuento)
2. Cómo calcular el tamaño de muestra para A/B tests significativos
3. Cadencia de revisión de métricas (diaria, semanal, mensual)
4. Señales de alarma que indican problemas de deliverability

## Entregable final

Crea un documento de implementación que incluya: prioridad de activación de cada flujo, checklist técnico de configuración, calendario de revisión trimestral y estimación de ingresos adicionales esperados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la estrategia completa de email automation para una tienda ecommerce con flujos de bienvenida, carrito abandonado, post-compra y reactivación.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Optimización de renders en React',
                'description'      => 'Aplica memo, useMemo, useCallback, React Query y las técnicas que eliminan renders innecesarios en apps complejas de producción.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en performance de React con experiencia optimizando aplicaciones de producción con millones de usuarios. Voy a compartirte código o describir la arquitectura de mi app y necesito que identifiques los problemas de rendimiento y proporciones soluciones concretas.

## Diagnóstico previo: identifica el problema antes de optimizar

Antes de aplicar cualquier optimización, ayúdame a identificar si realmente hay un problema y cuál es su origen:

**Herramientas de diagnóstico que usaremos:**
1. React DevTools Profiler — para identificar componentes que re-renderizan innecesariamente
2. Chrome Performance tab — para medir el tiempo real de cada render
3. why-did-you-render — librería para detectar renders evitables
4. Bundle analyzer — para identificar código muerto y divisiones necesarias

**Pregunta siempre primero:** ¿El problema es de renders excesivos, de renders lentos (cálculos costosos) o de carga inicial (bundle size)? La solución es diferente en cada caso.

## Técnica 1: React.memo para componentes

**Cuándo usar memo:**
- El componente se renderiza con frecuencia por cambios en el padre
- Las props del componente cambian raramente o son primitivos
- El componente es visualmente complejo o renderiza listas largas

**Cuándo NO usar memo:**
- El componente es muy simple (el overhead del memo supera el beneficio)
- Las props cambian en cada render de todas formas
- El componente recibe objetos o funciones sin memoizar (memo fallará)

```jsx
// ❌ Sin memo: se re-renderiza aunque title no cambie
const ProductCard = ({ title, price, onAddToCart }) => { ... }

// ✅ Con memo + comparador personalizado
const ProductCard = React.memo(({ title, price, onAddToCart }) => {
  ...
}, (prevProps, nextProps) => {
  return prevProps.title === nextProps.title &&
         prevProps.price === nextProps.price;
});
```

Dame ejemplos específicos de mi código donde memo aportaría valor real.

## Técnica 2: useMemo para cálculos costosos

**Regla de oro:** Solo memoiza cuando el cálculo tarda más de 1ms medido con console.time().

```jsx
// ❌ Memoización prematura de algo barato
const total = useMemo(() => price * quantity, [price, quantity]);

// ✅ Memoización justificada: filtrado y ordenación de lista grande
const filteredAndSortedProducts = useMemo(() => {
  return products
    .filter(p => p.category === selectedCategory && p.stock > 0)
    .sort((a, b) => b.rating - a.rating)
    .slice(0, pageSize);
}, [products, selectedCategory, pageSize]);
```

## Técnica 3: useCallback para estabilizar funciones

**El problema real:** cuando pasas una función como prop o dependencia de useEffect, se crea una nueva referencia en cada render, rompiendo memo y causando efectos que se disparan de más.

```jsx
// ❌ Nueva función en cada render → rompe el memo del hijo
const handleDelete = (id) => deleteProduct(id);

// ✅ Función estable mientras deleteProduct no cambie
const handleDelete = useCallback((id) => {
  deleteProduct(id);
}, [deleteProduct]);
```

## Técnica 4: React Query para estado servidor

La causa más frecuente de renders innecesarios en apps reales no es falta de memo, sino mala gestión del estado asíncrono. React Query elimina el patrón useEffect + useState para fetching:

```jsx
// ❌ Patrón clásico: 3 estados = 3 potenciales re-renders
const [data, setData] = useState(null);
const [loading, setLoading] = useState(true);
const [error, setError] = useState(null);

// ✅ React Query: un solo hook, caché automática, deduplicación
const { data, isLoading, error } = useQuery({
  queryKey: ['products', filters],
  queryFn: () => fetchProducts(filters),
  staleTime: 5 * 60 * 1000, // 5 minutos de caché
});
```

**Beneficios de rendimiento de React Query:**
- Deduplicación de requests idénticos
- Background refetching sin loading spinner
- Caché compartida entre componentes
- Actualizaciones optimistas para UX fluida

## Técnica 5: Virtualización de listas largas

Para listas de más de 100 elementos, el DOM real destruye el rendimiento:

```jsx
import { FixedSizeList } from 'react-window';

const VirtualProductList = ({ products }) => (
  <FixedSizeList
    height={600}
    itemCount={products.length}
    itemSize={80}
    width="100%"
  >
    {({ index, style }) => (
      <div style={style}>
        <ProductCard product={products[index]} />
      </div>
    )}
  </FixedSizeList>
);
```

## Plan de acción para mi app

Analiza mi arquitectura y dame:
1. Lista priorizada de los 3-5 cambios con mayor impacto
2. Estimación del impacto en tiempo de render antes/después
3. Orden de implementación recomendado con nivel de riesgo de cada cambio
4. Tests de performance que debo ejecutar para validar las mejoras

## Checklist de optimización

| Técnica | Aplica a mi caso | Impacto esperado | Complejidad |
|---------|-----------------|-----------------|-------------|
| React.memo | | | |
| useMemo | | | |
| useCallback | | | |
| React Query | | | |
| Virtualización | | | |
| Code splitting | | | |
| Lazy loading | | | |

Completa esta tabla para mi caso específico y ordénala por ratio impacto/esfuerzo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Identificar y eliminar renders innecesarios en una aplicación React de producción usando las técnicas de optimización correctas en el orden correcto.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Identidad visual para startups',
                'description'      => 'Crea una marca con personalidad desde cero: logotipo, paleta, tipografía y sistema visual coherente con presupuesto limitado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director creativo con experiencia en branding para startups y empresas en etapa early stage. Tu objetivo es guiarme en la creación de una identidad visual sólida y escalable con un presupuesto ajustado, tomando decisiones de diseño fundamentadas que funcionarán desde el día uno y a medida que la empresa crezca.

## Fase 1: Fundamentos de marca antes del diseño

Antes de tocar ninguna herramienta de diseño, necesito responder estas preguntas:

**Brief de marca que necesito completar contigo:**
1. ¿Qué hace la empresa en una frase directa? (sin jerga corporativa)
2. ¿A quién sirve? (perfil del cliente ideal, no "todo el mundo")
3. ¿Cuáles son los 3 valores que deben percibir los clientes al primer contacto?
4. ¿Quiénes son los 2-3 competidores principales y qué identidad visual tienen?
5. ¿Cómo queremos diferenciarnos visualmente de ellos?
6. Si la marca fuera una persona: ¿qué personalidad tendría, cómo vestiría, qué tono usaría?

**Arquetipos de marca y su lenguaje visual:**
| Arquetipo | Personalidad | Paleta típica | Tipografía |
|-----------|-------------|---------------|------------|
| El Héroe | Audaz, competente | Rojo, azul navy, negro | Geométrica, bold |
| El Sabio | Confiable, experto | Azul, gris, verde bosque | Serif clásica |
| El Creador | Innovador, expresivo | Colores vibrantes, blanco | Sans moderna |
| El Compañero | Cercano, honesto | Tonos cálidos, verde | Redondeada, amigable |
| El Explorador | Libre, aventurero | Tierra, naranja, verde | Versátil, dinámica |

Ayúdame a identificar cuál encaja con mi propuesta y cómo expresarlo visualmente.

## Fase 2: Paleta de color

**Sistema de color mínimo viable para una startup:**
- 1 color primario (el que define la marca)
- 1 color secundario (para acentos y variedad)
- 1 color de acción (CTA, botones — puede ser el primario)
- Neutrales: al menos 4 tonos de gris + blanco y negro puros

**Criterios de selección de color:**
1. Contraste mínimo WCAG AA (ratio 4.5:1 para texto normal, 3:1 para texto grande)
2. Funciona en fondo blanco Y en fondo negro
3. Se diferencia claramente de los competidores
4. Transmite los valores identificados en la Fase 1

Dame 3 opciones de paleta para mi marca con los valores HEX, RGB y justificación estratégica de cada elección. Incluye también los neutrales y cómo aplicarlos.

## Fase 3: Tipografía

**Sistema tipográfico para startup con presupuesto ajustado (Google Fonts):**

Regla del sistema: máximo 2 familias tipográficas. Más de 2 es inconsistencia, no riqueza.

**Combinaciones probadas:**
| Familia display | Familia cuerpo | Personalidad resultante |
|----------------|---------------|------------------------|
| Space Grotesk | Inter | Tech moderna, seria |
| Playfair Display | Source Sans Pro | Premium, editorial |
| Plus Jakarta Sans | Plus Jakarta Sans | Limpia, versátil |
| Syne | Jost | Creativa, actual |
| Fraunces | Nunito | Cálida, original |

Para cada combinación dame: uso recomendado de cada familia, escala tipográfica (H1 a body), peso recomendado para cada nivel y ejemplo de aplicación en web y en impresión.

## Fase 4: Logotipo — guía para encargar o crear

**Los 4 tipos de logotipo y cuándo usar cada uno:**
1. **Wordmark** (solo tipografía): ideal cuando el nombre es corto y memorable. Ejemplo: Google, FedEx
2. **Lettermark** (iniciales): cuando el nombre es largo o técnico. Ejemplo: IBM, HP
3. **Logomark** (símbolo solo)**: necesita tiempo para construir reconocimiento. Solo si tienes presupuesto para marketing sostenido
4. **Combinado (símbolo + texto)**: el más versátil para startups — funciona en todas las situaciones

**Brief para diseñador o para generación con IA:**
- Describe en 3 adjetivos la sensación que debe transmitir
- Lista 5 conceptos o metáforas visuales relacionadas con tu negocio
- Indica los formatos donde se usará: app icon, web, tarjeta, merch
- Define qué debe evitar: estilos, iconos o asociaciones no deseadas

**Checklist de validación del logotipo:**
- [ ] Funciona en blanco y negro (sin color)
- [ ] Es legible a 16x16px (favicon)
- [ ] Escala bien a 5 metros (cartel, stand)
- [ ] No se parece a ningún competidor directo
- [ ] Tiene versión horizontal Y versión cuadrada

## Fase 5: Sistema visual completo

Con paleta, tipografía y logo, construye el sistema:

1. **Iconografía**: estilo (line, filled, duotone) y grosor consistente
2. **Fotografía**: mood, encuadre, tratamiento de color y qué evitar
3. **Ilustración**: ¿sí o no? y si sí, qué estilo
4. **Motion**: principios de animación si hay producto digital
5. **Espaciado y grid**: sistema de 4px o 8px para consistencia

## Entregable: Brand guidelines mínimo viable

Ayúdame a estructurar el documento de marca que un equipo de 5 personas puede seguir sin ser diseñadores. Incluye: sección de uso correcto/incorrecto del logo, reglas de color en fondos diferentes, cómo escalar la tipografía en distintos contextos y ejemplos de aplicación en los 3 touchpoints más importantes para mi negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear una identidad visual coherente y escalable para una startup desde cero, con decisiones fundamentadas en estrategia de marca y presupuesto ajustado.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Benchmarking de ventas',
                'description'      => 'Aprende a saber si tu equipo rinde bien: ratios de conversión, velocidad de pipeline y comparativas de sector para tomar decisiones con datos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en B2B SaaS y servicios profesionales que ha gestionado y auditado equipos de ventas en empresas desde 5 hasta 500 personas. Ayúdame a evaluar objetivamente el rendimiento de mi equipo de ventas usando benchmarks del sector y a identificar los cuellos de botella específicos de mi pipeline.

## Por qué el benchmarking de ventas es crítico

La mayoría de los equipos de ventas no saben si rinden bien o mal porque comparan sus métricas contra sí mismos, no contra el mercado. El resultado: celebran mejoras del 5% que el sector consigue un 25%, o se frustran con resultados que en realidad son excelentes para su industria.

El benchmarking de ventas responde: ¿somos buenos o simplemente mejores que ayer?

## Bloque 1: Métricas fundamentales y cómo calcularlas

**Las 8 métricas que definen el rendimiento de un equipo de ventas:**

| Métrica | Fórmula | Qué mide |
|---------|---------|---------|
| Win rate | Deals ganados / Deals totales × 100 | Efectividad del proceso completo |
| Sales cycle length | Suma de días todos los deals / Número de deals | Velocidad del proceso |
| Average deal size | Ingresos totales / Número de deals cerrados | Calidad de los deals |
| Pipeline coverage | Valor total pipeline / Cuota del período | Suficiencia del volumen prospectado |
| Lead-to-opportunity rate | Leads cualificados / Leads totales × 100 | Calidad de la generación de leads |
| Opportunity-to-close rate | Deals cerrados / Oportunidades creadas × 100 | Efectividad del equipo de ventas |
| Ramp time | Semanas hasta que el nuevo vendedor alcanza cuota | Efectividad del onboarding |
| Quota attainment | Vendedores que alcanzan cuota / Total vendedores × 100 | Salud general del equipo |

Para cada una de mis métricas actuales, ayúdame a calcularla correctamente y a interpretar qué significa el número.

## Bloque 2: Benchmarks por industria y modelo de negocio

**Win rates de referencia (B2B):**
| Industria | Win rate medio | Win rate top 25% |
|-----------|---------------|-----------------|
| SaaS Enterprise | 15-25% | 30%+ |
| SaaS SMB | 20-30% | 35%+ |
| Servicios profesionales | 25-40% | 50%+ |
| Manufactura / industrial | 20-35% | 45%+ |
| Consultoría | 30-50% | 60%+ |

**Ciclos de venta de referencia:**
| Ticket medio | Ciclo medio | Ciclo óptimo |
|-------------|------------|-------------|
| < 5.000€ | 30-60 días | < 30 días |
| 5.000-25.000€ | 60-120 días | 45-90 días |
| 25.000-100.000€ | 90-180 días | 75-150 días |
| > 100.000€ | 180-365 días | 120-270 días |

Compara mis números con la tabla correspondiente y dime en qué percentil me encuentro.

## Bloque 3: Análisis del pipeline

**Pipeline coverage recomendada por etapa de empresa:**
- Early stage (< 1M ARR): 4-5x la cuota trimestral
- Growth stage (1-10M ARR): 3-4x la cuota trimestral
- Scale (10M+ ARR): 2,5-3x la cuota trimestral

**Análisis de etapas del pipeline:**
Necesito entender en qué etapa se pierden más deals y por qué. Ayúdame a crear un análisis de conversión por etapa:

1. Prospecto → Lead cualificado (MQL)
2. MQL → Oportunidad (SQL)
3. Oportunidad → Demo/propuesta
4. Demo → Negociación
5. Negociación → Cierre ganado

Para cada transición, calcula la tasa de conversión, el tiempo medio en etapa y el motivo de pérdida más frecuente.

## Bloque 4: Diagnóstico de vendedores individuales

**Distribución de rendimiento típica en equipos de ventas:**
- Top performers (supera cuota >120%): 20% del equipo
- Core performers (alcanza cuota 80-120%): 60% del equipo
- Under performers (< 80% de cuota): 20% del equipo

Si mi distribución es diferente, ¿qué indica? Ayúdame a interpretar los distintos escenarios:
- Demasiados under performers → problema de contratación, onboarding o cuotas
- Demasiados top performers → las cuotas son bajas
- Sin top performers → falta de incentivo diferencial o proceso de ventas demasiado rígido

## Bloque 5: Plan de mejora basado en datos

Una vez identificados los cuellos de botella, dame un plan de acción específico para los 3 problemas más críticos que encuentres en mis datos. Para cada problema:
- Causa raíz probable
- Iniciativa de mejora concreta
- Métrica que indica que el problema se ha resuelto
- Plazo esperado para ver resultados
- Recursos necesarios (tiempo, dinero, herramientas)

## Entregable: Dashboard de ventas mínimo viable

Diseña el conjunto de 5-7 métricas que debo revisar en mi reunión semanal de ventas, con el formato de presentación, la frecuencia de actualización y las alertas que debo configurar cuando una métrica sale del rango esperado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Evaluar si el equipo de ventas rinde bien comparando las métricas propias contra benchmarks del sector e identificar los cuellos de botella específicos del pipeline.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Event storming y DDD',
                'description'      => 'Técnicas de modelado de dominio para diseñar sistemas complejos junto al equipo técnico y alinear negocio con arquitectura.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software experto en Domain-Driven Design (DDD) y facilitador de talleres de Event Storming con experiencia en equipos de 5 a 50 personas. Voy a describirte el dominio de negocio que quiero modelar y necesito que me guíes en el proceso completo: desde la preparación del taller hasta la definición de los bounded contexts y la arquitectura resultante.

## ¿Por qué Event Storming antes de escribir código?

La razón más frecuente por la que los sistemas complejos se vuelven inmantenibles es que se diseñaron sin un modelo de dominio compartido. El equipo técnico entiende una cosa, el negocio dice otra y el código refleja una tercera. Event Storming resuelve esto en 2-3 días en lugar de meses de malentendidos.

**Beneficios concretos:**
- Vocabulario compartido (Ubiquitous Language) que todos usan: negocio, diseño y código
- Identificación temprana de los bounded contexts antes de decidir microservicios
- Visualización de los flujos de negocio que revela complejidad oculta
- Alineamiento entre lo que el negocio necesita y lo que el equipo va a construir

## Fase 1: Preparación del taller de Event Storming

**Participantes necesarios:**
| Rol | Número recomendado | Por qué son esenciales |
|-----|------------------|----------------------|
| Domain experts (negocio) | 2-4 | Conocen las reglas reales del negocio |
| Developers | 3-6 | Van a implementar el modelo |
| Product manager | 1 | Conecta negocio con prioridad |
| Arquitecto / facilitador | 1 | Guía el proceso |

**Materiales y setup:**
- Pared o superficie larga (mínimo 4 metros lineales) con papel continuo
- Post-its de colores: naranja (domain events), azul (commands), amarillo (actores), lila (policies), rosa (external systems), verde (read models), rojo (puntos de dolor)
- Rotuladores para todos
- Tiempo: Big Picture (4-6h), Process Level (1 día), Design Level (1-2 días)

## Fase 2: Big Picture Event Storming

El primer nivel revela el flujo completo del negocio sin restricciones técnicas.

**Proceso paso a paso:**

**Paso 1 — Caos creativo (30-45 min):**
Cada participante escribe en post-its naranjas todos los eventos de dominio que conoce, en tiempo pasado (Pedido Creado, Pago Procesado, Envío Confirmado). Sin orden, sin discusión, sin filtros.

**Paso 2 — Ordenación temporal (45-60 min):**
Se ordenan todos los eventos en la línea de tiempo de izquierda a derecha. En este momento emergen los conflictos y los malentendidos: ¿cuándo exactamente se crea el pedido? ¿Antes o después de validar el stock?

**Paso 3 — Identificación de puntos de dolor (20 min):**
Post-its rojos en los eventos que generan problemas: procesos manuales, datos inconsistentes, cuellos de botella o momentos de pérdida de negocio.

**Paso 4 — Swimlanes y narrativas (30 min):**
Organiza los eventos por actores o sistemas y verifica que la historia tiene sentido de principio a fin.

Ayúdame a facilitar este proceso para mi dominio: cuéntame qué preguntas hacer en cada fase y cómo gestionar los desacuerdos entre participantes.

## Fase 3: Identificación de Bounded Contexts

Después del Big Picture, emergen agrupaciones naturales de eventos. Un Bounded Context es una frontera dentro de la cual un modelo de dominio es consistente y tiene significado propio.

**Señales de que estás ante un Bounded Context diferente:**
- El mismo término tiene significados distintos (ej: "Cliente" en ventas vs. en soporte)
- El equipo que lo gestiona es diferente
- Los cambios en esta área rara vez afectan a las demás
- Los datos tienen ciclos de vida independientes

**Ejemplo de identificación:**
En un ecommerce típico emergen estos bounded contexts:
1. **Catálogo** — productos, precios, categorías
2. **Pedidos** — carrito, checkout, gestión de pedidos
3. **Pagos** — procesamiento, reembolsos, facturación
4. **Logística** — stock, envíos, almacén
5. **Clientes** — perfiles, autenticación, preferencias
6. **Notificaciones** — emails, SMS, push

Para cada bounded context que identifiques en mi dominio, dame: nombre, responsabilidad principal, datos que posee, eventos que emite y cómo se integra con los demás.

## Fase 4: Aggregates, Commands y Policies

**Domain Events → Commands → Aggregates:**
- **Command**: intención de cambiar el sistema (CrearPedido, AprobarDescuento)
- **Domain Event**: algo que ya ocurrió (PedidoCreado, DescuentoAprobado)
- **Aggregate**: raíz que garantiza la consistencia (Pedido, Descuento)
- **Policy**: regla de negocio que conecta un evento con un command ("cuando PagoConfirmado entonces EnviarConfirmacionEmail")

Ayúdame a definir los aggregates principales de mi dominio, sus invariantes (reglas que siempre deben cumplirse) y las policies que conectan bounded contexts.

## Fase 5: Del modelo al código

**Traducción del modelo DDD a código:**
```
Bounded Context → Módulo o Microservicio
Aggregate → Clase principal con sus entidades y value objects
Domain Event → Evento publicado al message broker
Command → Handler en la capa de aplicación
Policy → Event listener / subscriber
Repository → Interfaz en el dominio, implementación en infraestructura
```

Dame la estructura de carpetas recomendada para implementar DDD en mi stack tecnológico específico y los patrones de integración entre bounded contexts (eventos de dominio, API calls, datos compartidos).

## Entregable del taller

Al final del proceso necesito: mapa visual del Big Picture con todos los bounded contexts identificados, lista de los aggregates principales con sus invariantes, glosario del Ubiquitous Language con al menos 20 términos del dominio, y recomendación de arquitectura (monolito modular vs. microservicios) justificada por la complejidad del dominio y el tamaño del equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Facilitar talleres de Event Storming e implementar DDD para diseñar la arquitectura de sistemas complejos alineando al equipo técnico con el negocio.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Cultura de empresa que funciona',
                'description'      => 'Los rituales, valores y comportamientos que construyen cultura real, no la del póster de la oficina ni el team building anual.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en organizational design y cultura empresarial que ha trabajado con empresas desde 10 hasta 5.000 empleados en distintos países. Tu enfoque es pragmático: la cultura se construye con comportamientos concretos y decisiones difíciles, no con valores en una presentación de PowerPoint. Ayúdame a diagnosticar, diseñar e implementar una cultura que realmente funcione para mi empresa.

## El problema con la mayoría de las culturas empresariales

La cultura no es lo que está escrito en la web de la empresa ni lo que se dice en el onboarding. La cultura es lo que el CEO hace cuando nadie le está mirando. Es cómo se toman las decisiones bajo presión. Es a quién se asciende y a quién se despide.

Cuando hay contradicción entre los valores declarados y los comportamientos reales, los empleados aprenden rápido que los valores no son reales: son marketing interno. Y eso destruye la confianza más rápido que cualquier crisis externa.

## Diagnóstico: ¿cuál es la cultura real actual?

Antes de diseñar la cultura que queremos, necesitamos entender la que existe hoy. Ayúdame a diagnosticarla respondiendo estas preguntas:

**Señales de cultura reales que analizaremos:**
1. ¿Cómo se toman las decisiones importantes? ¿Quién tiene voz y quién no?
2. ¿Qué comportamientos se toleran en las personas de alto rendimiento que no se tolerarían en otros?
3. ¿Qué pasó la última vez que alguien cometió un error grave? ¿Cómo reaccionó el liderazgo?
4. ¿Qué temas son tabú o "no se hablan" en las reuniones?
5. ¿Cómo se resuelven los conflictos entre equipos? ¿Hay política interna?
6. ¿Cuánto tarda información importante en llegar a quien la necesita?

**Herramientas de diagnóstico:**
- Encuesta de cultura anónima (te ayudo a diseñarla)
- Entrevistas de salida — la fuente más honesta de feedback
- Focus groups con empleados de menos de 6 meses (todavía tienen perspectiva externa)
- Análisis de decisiones pasadas: ¿qué revelan sobre los valores reales?

## Los 4 palancas reales de la cultura

### Palanca 1: Comportamientos de liderazgo

La cultura la define lo que los líderes hacen, no lo que dicen. Para cada valor declarado, necesitamos identificar el comportamiento concreto que lo demuestra:

| Valor declarado | Comportamiento que lo demuestra | Comportamiento que lo destruye |
|----------------|--------------------------------|-------------------------------|
| Transparencia | Compartir métricas negativas en el all-hands | Filtrar las malas noticias antes de comunicarlas |
| Aprendizaje | El CEO comparte públicamente sus propios errores | Penalizar a quien experimenta y falla |
| Equipo | Proteger al equipo de presiones externas | Culpar al equipo cuando hay problemas ante la dirección |

Dame los 5-7 comportamientos de liderazgo que son más críticos para la cultura que quiero construir.

### Palanca 2: Rituales que refuerzan valores

Los rituales son las prácticas repetidas que hacen que los valores sean tangibles. No el team building de Navidad: las reuniones semanales, los procesos de decisión, los reconocimientos públicos.

**Rituales por categoría:**
- **Comunicación**: all-hands mensual, AMA (Ask Me Anything) con el CEO, updates escritos asíncronos
- **Reconocimiento**: cómo se celebran los éxitos y quién los celebra
- **Aprendizaje**: post-mortems sin culpa, sesiones de retrospectiva, biblioteca interna
- **Decisiones**: framework de toma de decisiones, quién tiene autonomía sobre qué, cómo se documenta
- **Onboarding**: cómo se transmite la cultura a los nuevos

Para mi empresa, diseña 3-5 rituales concretos con formato, frecuencia, facilitador y resultado esperado.

### Palanca 3: Procesos de RRHH alineados con la cultura

Los procesos de contratación, evaluación y ascenso son los momentos donde la cultura se prueba de verdad:

**Preguntas de entrevista que revelan fit cultural:**
- "Cuéntame de una decisión con la que no estuviste de acuerdo. ¿Qué hiciste?"
- "¿Cuándo fue la última vez que reconociste públicamente el trabajo de un compañero?"
- "¿Qué hiciste la última vez que recibiste feedback negativo?"

**Evaluación de desempeño cultural:**
Diseña una rúbrica simple donde el 50% de la evaluación dependa del "cómo" (comportamientos culturales) y el 50% del "qué" (resultados). Esto refuerza que los resultados sin los comportamientos correctos no son aceptables.

### Palanca 4: Decisiones difíciles que demuestran los valores

La cultura se prueba en momentos de tensión: cuando hay que elegir entre el cliente y el equipo, entre la velocidad y la calidad, entre los beneficios a corto y la sostenibilidad a largo.

Ayúdame a definir cómo debe responder mi empresa en 3-5 escenarios difíciles que son realistas para mi industria, y qué dice cada respuesta sobre la cultura.

## Plan de implementación: 90 días

**Mes 1 — Diagnóstico y diseño:**
- Semana 1-2: Diagnóstico cultural (encuesta + entrevistas)
- Semana 3: Workshop de liderazgo para definir comportamientos concretos
- Semana 4: Diseño de los primeros rituales y revisión de procesos de RRHH

**Mes 2 — Activación:**
- Comunicación interna del cambio (con el por qué, no solo el qué)
- Activación de los primeros rituales
- Ajuste del proceso de onboarding

**Mes 3 — Refuerzo y medición:**
- Primeras señales de cambio: ¿qué comportamientos han cambiado?
- Corrección de los rituales que no funcionan
- Identificación de los embajadores de la cultura dentro del equipo

Diseña este plan específicamente para el tamaño y etapa de mi empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diagnosticar la cultura real de una empresa e implementar rituales, comportamientos y procesos que la transformen con acciones concretas en 90 días.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de cuentas anuales consolidadas',
                'description'      => 'Interpreta las cuentas de un grupo empresarial como lo hace un analista financiero profesional.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero senior con experiencia en análisis de estados financieros consolidados de grupos empresariales cotizados y no cotizados. Voy a compartirte las cuentas anuales de un grupo y necesito un análisis completo que revele la salud financiera real, más allá de lo que la propia empresa comunica.

## Por qué las cuentas consolidadas son más complejas

Las cuentas individuales muestran una sola empresa. Las consolidadas muestran un grupo de empresas como si fuera una sola entidad, eliminando las operaciones internas entre ellas. Esto introduce complejidades específicas que solo un analista experimentado sabe leer:

- Los goodwill y activos intangibles adquiridos pueden inflar el balance sin reflejar valor real
- Las operaciones entre filiales se eliminan, pero sus efectos en la rentabilidad segmental son clave
- Los intereses minoritarios afectan a qué parte del beneficio corresponde realmente a los accionistas de la matriz
- La conversión de divisas puede distorsionar el crecimiento real de los ingresos

## Bloque 1: Análisis de la cuenta de resultados consolidada

**Lo primero que mira un analista senior:**

1. **Calidad del revenue:** ¿los ingresos son recurrentes o puntuales? ¿Hay concentración en pocos clientes? ¿Cómo evoluciona el revenue orgánico vs. el crecimiento por adquisiciones?

2. **Evolución de márgenes por nivel:**
   | Margen | Cómo calcularlo | Qué revela |
   |--------|----------------|-----------|
   | Bruto | (Ingresos - COGS) / Ingresos | Poder de fijación de precios y eficiencia productiva |
   | EBITDA | EBITDA / Ingresos | Rentabilidad operativa antes de decisiones de capital |
   | EBIT | EBIT / Ingresos | Rentabilidad operativa incluyendo depreciación |
   | Neto | Beneficio neto / Ingresos | Rentabilidad final para el accionista |

3. **Partidas extraordinarias:** ¿hay resultados no recurrentes que inflan o deflactan el beneficio normalizado? Crea el beneficio ajustado eliminando estos efectos.

4. **Conversión de beneficio a caja:** el beneficio neto y el cash flow operativo deben evolucionar de forma similar a largo plazo. Una divergencia sostenida es señal de alarma sobre la calidad del resultado.

## Bloque 2: Análisis del balance consolidado

**Activos: calidad y composición**

- **Goodwill e intangibles:** si representan más del 30-40% del activo total, el grupo ha crecido principalmente por adquisiciones. Evalúa si hay riesgo de deterioro (impairment) comparando el valor en libros con el rendimiento de las unidades adquiridas.

- **Fondo de maniobra:** analiza la evolución del ciclo de conversión de caja (días de cobro + días de stock - días de pago). Un ciclo que se alarga indica deterioro de la posición competitiva.

- **Activos por impuesto diferido:** un importe muy elevado puede indicar pérdidas pasadas no compensadas o estimaciones optimistas.

**Deuda: estructura y sostenibilidad**

| Ratio | Fórmula | Referencia sector |
|-------|---------|------------------|
| Deuda neta / EBITDA | Deuda financiera neta / EBITDA | < 3x (general), < 5x (capital intensivo) |
| Cobertura de intereses | EBIT / Gastos financieros | > 3x |
| Loan-to-value | Deuda neta / Valor activos | Varía por sector |

- **Estructura de vencimientos:** un grupo que tiene que refinanciar mucha deuda en los próximos 12-24 meses tiene riesgo de liquidez aunque sea rentable

- **Deuda fuera de balance:** arrendamientos operativos (IFRS 16), garantías a filiales no consolidadas, compromisos de compra

## Bloque 3: Análisis del cash flow

El cash flow statement es donde se acaba la contabilidad creativa. Un grupo sano genera caja de forma consistente. Analiza:

**FCF (Free Cash Flow):**
FCF = Cash flow operativo - Capex de mantenimiento

Un FCF positivo y creciente indica que el negocio se autofinancia. Un FCF negativo de forma recurrente requiere financiación externa permanente.

**Capex de mantenimiento vs. de crecimiento:**
- El capex de mantenimiento es el necesario para mantener la capacidad actual (depreciation proxy)
- El capex de crecimiento es inversión para expandirse
- Sepáralos para calcular el FCF real vs. el que incluye crecimiento

**Calidad del cash flow operativo:**
Compara el beneficio neto con el CFO. Si el CFO es consistentemente inferior al beneficio, puede indicar problemas con el reconocimiento de ingresos o el cobro real de los mismos.

## Bloque 4: Ratios de valoración en contexto

No analices ratios en el vacío: compáralos con el sector y con la historia de la empresa:

| Ratio | Interpretación | Limitaciones |
|-------|---------------|-------------|
| EV/EBITDA | Valor del negocio vs. generación operativa | Ignora capex y estructura de capital |
| PER | Precio vs. beneficio | Sensible a extraordinarios y ciclo |
| EV/FCF | Valor vs. caja real generada | El más fiable pero difícil de calcular |
| P/Book | Precio vs. valor contable | Poco útil en empresas ligeras de activos |

## Bloque 5: Red flags y señales de alerta

**Señales que indican manipulación o deterioro oculto:**
- Cambios frecuentes en criterios contables o de estimación
- Crecimiento de ingresos sin crecimiento equivalente de caja
- Aumento del DSO (días de cobro) sin explicación comercial
- Goodwill que no se deprecia pese al deterioro evidente del negocio adquirido
- Operaciones de sale-and-leaseback recurrentes para maquillar la deuda
- CFO positivo financiado por deterioro del circulante (no por rentabilidad)

## Entregable: Investment memo de una página

Resume el análisis en el formato que usa un analista para presentar a un comité de inversión: tesis en 3 líneas, métricas clave vs. comparables, 3 fortalezas, 3 riesgos principales y valoración justa con supuestos explícitos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar cuentas anuales consolidadas de un grupo empresarial con el rigor de un analista financiero profesional, identificando la salud real del negocio más allá de los titulares.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Fiscalidad del socio de SL en España',
                'description'      => 'Cuándo cobrar como nómina, cuándo como dividendos y cómo optimizar la retribución del socio-administrador legalmente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor fiscal especializado en sociedades limitadas y retribución de socios en España, con conocimiento actualizado de la normativa del IRPF, IS y Seguridad Social. Necesito entender cómo estructurar mi retribución como socio-administrador de forma óptima desde el punto de vista fiscal y de Seguridad Social.

## Contexto previo importante

Antes de comenzar, ayúdame a definir mi situación exacta respondiendo estas preguntas:
- ¿Qué porcentaje de la sociedad poseo?
- ¿Ejerzo funciones de administrador remunerado?
- ¿Trabajo en la sociedad con dedicación exclusiva o parcial?
- ¿Cuál es el beneficio antes de impuestos esperado este año?
- ¿Qué ingresos personales tengo fuera de la sociedad?

## Las 3 vías de retribución del socio y su tratamiento fiscal

### Vía 1: Nómina (rendimientos del trabajo)
**Cuándo es obligatoria:**
Si eres administrador con funciones ejecutivas y la sociedad tiene más del 25% de participación en tu poder (junto con familiares de primer grado), la AEAT puede exigir que tus funciones de gerencia estén retribuidas como trabajo.

**Coste real de la nómina:**
| Concepto | Porcentaje | Quién lo paga |
|---------|-----------|--------------|
| IRPF (retención) | 15-47% progresivo | Trabajador (vía retención) |
| Cuota SS trabajador | 6,47% | Trabajador |
| Cuota SS empresa | ~30% | Sociedad |
| Total coste empleador | Salario bruto × 1,30 aprox | Sociedad |

**Ventaja fiscal de la nómina para la SL:**
El salario es gasto deducible en el Impuesto de Sociedades (25%), lo que reduce la base imponible de la empresa. Si el tipo marginal del socio en IRPF es inferior al 25%, la nómina puede ser más eficiente que los dividendos.

**Fórmula de decisión:**
Si tipo marginal IRPF del socio < 25% (tipo IS) → nómina más eficiente
Si tipo marginal IRPF del socio > 25% → analizar combinación nómina + dividendos

### Vía 2: Dividendos
**Tratamiento fiscal:**
Los dividendos tributan como rendimientos del capital mobiliario en el IRPF del socio:

| Base del ahorro | Tipo |
|----------------|------|
| Hasta 6.000€ | 19% |
| 6.000 - 50.000€ | 21% |
| 50.000 - 200.000€ | 23% |
| 200.000 - 300.000€ | 27% |
| Más de 300.000€ | 28% |

**Cuándo son eficientes:**
Los dividendos se distribuyen del beneficio después de IS (25%). Si el socio ya ha pagado IS en la sociedad, la carga total es: 25% IS + 19-28% IRPF sobre el neto. Para rentas moderadas puede ser eficiente si el socio tiene bajos ingresos de trabajo.

**El problema de los dividendos:**
No son deducibles en la SL (se pagan con beneficio neto, ya tributado). Si el beneficio está creciendo, mantenerlo en la SL e invertirlo tributa a solo el 25% hasta que se distribuya.

### Vía 3: RETA (Régimen de autónomos para socios)
Si eres socio con más del 33% de participación o tienes control efectivo de la sociedad, la Seguridad Social te obliga a cotizar por el RETA.

**Cuotas RETA 2024-2025 (sistema de cotización por ingresos reales):**
| Rendimientos netos mensuales | Cuota mínima mensual |
|------------------------------|---------------------|
| < 670€ | 230€ |
| 670 - 1.700€ | 295€ |
| 1.700 - 4.050€ | 364-530€ |
| > 4.050€ | 590-590€ (base máxima) |

La cuota de RETA no es deducible para el socio en su IRPF (sí lo es en el IS si la paga la sociedad como parte del coste laboral).

## Estrategias de optimización legal

### Estrategia 1: Nómina mínima + dividendos
Fijar una nómina que agote el tipo mínimo de IRPF (hasta el tramo del 19-24%) y complementar con dividendos que tributen al 19-21%. Esto evita los tramos superiores del IRPF laboral.

### Estrategia 2: Retención de beneficios en la SL
Si no necesitas el dinero, mantenerlo en la SL tributando al 25% IS y reinvirtiéndolo en el negocio o en inversiones financieras desde la sociedad puede ser más eficiente que distribuirlo.

### Estrategia 3: Plan de pensiones de empresa
La SL puede hacer aportaciones a un plan de pensiones del socio como retribución en especie, con los límites anuales vigentes, que son deducibles para la empresa y reducen la base imponible del IRPF del socio.

### Estrategia 4: Gastos deducibles correctamente justificados
Vehículo (con afectación justificada), seguro médico privado (hasta 500€/año por miembro de la unidad familiar), formación relacionada con la actividad y gastos de representación documentados.

## Simulación comparativa para mi caso

Construye una comparativa de 3 escenarios con mi retribución objetivo:
1. Todo nómina
2. Nómina mínima + dividendos
3. Retención de beneficios en SL

Para cada escenario: cuota SS, IRPF del socio, IS de la SL, carga fiscal total efectiva y liquidez disponible para el socio.

## Advertencias importantes

- Esta información es orientativa y general. La situación concreta depende de múltiples factores y debe ser validada con tu asesor fiscal
- La AEAT tiene criterios específicos sobre la retribución de administradores que requieren que conste en estatutos sociales
- Los cambios normativos son frecuentes: verifica la normativa vigente antes de tomar decisiones

Diseña la estructura de retribución óptima para mi caso específico con los datos que te comparta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la estructura de retribución óptima como socio-administrador de una SL en España, combinando nómina, dividendos y otras vías de forma legal y eficiente.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de SLAs',
                'description'      => 'Diseña, comunica y cumple los acuerdos de nivel de servicio sin destruir al equipo de soporte ni crear expectativas imposibles.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Success y operaciones de soporte con experiencia diseñando y gestionando SLAs (Service Level Agreements) en empresas B2B SaaS con modelos de servicio escalonados. Mi objetivo es crear un sistema de SLAs que satisfaga a los clientes, sea ejecutable por mi equipo y esté alineado con el modelo de negocio.

## El problema con los SLAs mal diseñados

Los SLAs mal diseñados crean tres problemas simultáneos: clientes insatisfechos (porque el SLA prometido no refleja lo que realmente valoran), equipos quemados (porque los tiempos son imposibles de cumplir de forma sostenible) y métricas vacías (porque el equipo cumple el SLA en papel pero no resuelve el problema real del cliente).

Un SLA bien diseñado es un contrato realista entre las capacidades del equipo, las expectativas del cliente y el modelo de negocio de la empresa.

## Bloque 1: Definición de métricas de SLA

### First Response Time (FRT) vs. Resolution Time
Son métricas distintas que deben gestionarse por separado:

- **FRT**: tiempo hasta que el cliente recibe la primera respuesta humana (no automática). Es el indicador que más afecta a la percepción inicial de la calidad del servicio.
- **Time to Resolution (TTR)**: tiempo hasta que el problema queda completamente resuelto. Es el que impacta en el NPS y en la renovación.

**¿Qué más medir?**
| Métrica | Qué mide | Por qué importa |
|---------|---------|----------------|
| FRT | Primera respuesta | Percepción de atención inmediata |
| TTR | Resolución completa | Satisfacción real del cliente |
| CSAT | Satisfacción post-ticket | Calidad percibida de la interacción |
| Reopen rate | Tickets que vuelven a abrirse | Calidad real de la resolución |
| Backlog trend | Acumulación de tickets sin resolver | Salud operativa del equipo |
| Breach rate | % tickets que incumplen SLA | Cumplimiento real de compromisos |

## Bloque 2: Diseño de SLAs por plan y severidad

### Matriz de SLA recomendada

**Por severidad del impacto:**
| Severidad | Definición | FRT objetivo | TTR objetivo |
|-----------|-----------|-------------|-------------|
| P1 - Crítico | Servicio completamente caído, pérdida de datos | 15-30 min | 4 horas |
| P2 - Alto | Funcionalidad principal degradada, workaround disponible | 1-2 horas | 8 horas / 1 día laborable |
| P3 - Medio | Funcionalidad secundaria afectada | 4-8 horas | 3 días laborables |
| P4 - Bajo | Consulta, mejora, cosmético | 1 día laborable | 7 días laborables |

**Por plan de cliente:**
| Plan | FRT P1 | FRT P2 | Disponibilidad soporte | Canal |
|------|--------|--------|----------------------|-------|
| Enterprise | 15 min | 1 hora | 24/7 | Teléfono + email + Slack |
| Pro | 1 hora | 4 horas | L-V 8-20h | Email + chat |
| Starter | 4 horas | 8 horas | L-V 9-18h | Email |
| Free | 1 día | 3 días | L-V 9-18h | Docs + email |

Adapta esta matriz a mi modelo de negocio específico: ¿qué planes tengo, qué horario de cobertura puedo garantizar realmente y qué canales usa cada segmento?

## Bloque 3: Comunicación de SLAs a clientes

### En el contrato / términos de servicio
El SLA formal debe incluir: definición precisa de cada severidad con ejemplos, horarios de cobertura en la zona horaria correcta, cómo se mide el tiempo (solo horas laborables o 24/7), qué pasa cuando se incumple (créditos de servicio, escalado) y qué situaciones quedan excluidas del SLA (incidencias de terceros, fuerzas mayores, código personalizado).

### En la comunicación operativa
Cuando un cliente abre un ticket, debe recibir inmediatamente:
1. Confirmación de recepción con número de ticket
2. Severidad asignada y tiempo de respuesta comprometido
3. Canal y contacto para seguimiento si es urgente

**Template de primera respuesta automática:**
```
Hemos recibido tu solicitud [#TICKET_ID].

Clasificación: [SEVERIDAD]
Compromiso de primera respuesta: [TIEMPO]
Horario de atención: [HORARIO]

Si el impacto ha cambiado desde que enviaste el ticket, responde indicando la urgencia y lo reclasificaremos.
```

## Bloque 4: Operaciones que permiten cumplir los SLAs

Un SLA solo funciona si hay procesos detrás que lo soporten:

### Triaje y clasificación
Define criterios objetivos para que cualquier agente clasifique correctamente la severidad. La clasificación subjetiva crea inconsistencia y debates constantes con clientes que siempre creen que su problema es P1.

### Escalado automático
Configura alertas cuando un ticket lleva el 70% del tiempo de SLA sin respuesta. No esperes al 100%: a esa altura ya es imposible cumplir.

### Gestión de la carga de trabajo
| Señal de alerta | Umbral | Acción |
|----------------|--------|--------|
| Backlog creciente | > 20% en una semana | Análisis de causa raíz |
| Breach rate alta | > 10% de tickets | Revisión de SLAs o recursos |
| TTR creciente | > 15% mes a mes | Análisis de complejidad de tickets |
| CSAT bajando | < 4.0/5.0 | Revisión de calidad de respuestas |

### Gestión de incidencias mayores (P1)
Necesitas un proceso de incidencias diferente al flujo normal de tickets: war room, comunicación proactiva cada 30 minutos, postmortem obligatorio y compensación automática si aplica.

## Bloque 5: SLA y relación con el cliente

### Cómo comunicar un incumplimiento
Cuando el SLA se incumple, la comunicación proactiva reduce el impacto en la satisfacción:
- Notifica antes de que el cliente lo descubra
- Explica qué pasó sin excusas excesivas
- Proporciona el tiempo estimado actualizado
- Ofrece la compensación correspondiente si está en el contrato

### Revisión periódica de SLAs
Los SLAs deben revisarse al menos anualmente. Las preguntas clave: ¿el equipo los cumple cómodamente? (podríamos ser más ambiciosos), ¿hay breaches recurrentes en alguna categoría? (necesitamos revisar recursos o definición), ¿los clientes solicitan tiempos diferentes? (puede haber desalineamiento con las expectativas del mercado).

## Entregable: Kit de SLA para mi empresa

Diseña el documento de SLA completo para mi empresa con: matriz de severidades, tiempos comprometidos por plan, proceso de escalado, política de compensación y métricas de revisión mensual. Adapta todo a los datos que te comparta sobre mi equipo y mis clientes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un sistema de SLAs realista y ejecutable para una empresa B2B, con matrices de severidad, comunicación a clientes y procesos operativos que permitan cumplirlos.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Crear y vender un curso online',
                'description'      => 'De la idea al primer ingreso: estructura del curso, grabación, plataforma y estrategia de lanzamiento para freelancers.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en creación y lanzamiento de cursos online con experiencia en Teachable, Gumroad, Podia y Kajabi, y con conocimiento de las estrategias de lanzamiento que generan los primeros ingresos sin una audiencia enorme. Mi objetivo es crear y vender mi primer curso online sobre un tema en el que tengo experiencia profesional como freelancer.

## Fase 1: Validación antes de crear el curso

El error más frecuente de los creadores de cursos es construir primero y vender después. Invierte el proceso: vende (o pre-vende) antes de grabar.

**Ejercicio de validación en 5 días:**
1. **Día 1**: Publica en LinkedIn/Twitter el problema que resuelve tu curso. ¿Cuánta gente reacciona y comenta?
2. **Día 2-3**: Abre 5 conversaciones con personas que tengan ese problema. Escucha, no vendas.
3. **Día 4**: Ofrece una sesión de consultoría de 90 minutos por el precio del curso. Si 3 personas pagan, el curso tiene demanda.
4. **Día 5**: Lanza una landing page con "notifícame cuando esté disponible". 50+ emails = señal verde.

**Preguntas de validación que debes poder responder:**
- ¿Quién es exactamente la persona que compraría este curso? (no "todo el mundo que quiera X")
- ¿Qué resultado concreto obtendrá al terminar?
- ¿Qué le está costando no saber esto ahora mismo? (en tiempo, dinero o oportunidades perdidas)
- ¿Dónde busca soluciones a este problema hoy?

## Fase 2: Estructura del curso

**El framework de diseño instruccional para freelancers:**

Un curso que vende bien tiene una transformación clara y medible. Estructura cada módulo como una etapa del viaje del alumno:

| Módulo | Propósito | Duración recomendada |
|--------|----------|---------------------|
| Bienvenida | Establece expectativas y motivación | 5-10 min |
| Fundamentos | Por qué esto funciona (marco conceptual) | 20-30 min |
| Core 1 | Primera acción de alto impacto | 30-45 min |
| Core 2 | Segunda acción de alto impacto | 30-45 min |
| Core 3 | Tercera acción de alto impacto | 30-45 min |
| Casos reales | Ejemplos aplicados de tu experiencia | 20-30 min |
| Siguiente nivel | Dónde ir cuando terminen el curso | 10-15 min |

**Regla del curso mínimo viable:**
Tu primer curso no necesita 10 módulos y 40 lecciones. Necesita resolver UN problema específico mejor que cualquier alternativa gratuita. 3-5 módulos con lecciones de 5-15 minutos es suficiente para empezar.

**Diseño de las lecciones:**
Cada lección debe seguir la estructura: contexto (¿por qué esto importa?), concepto (la explicación), demostración (el ejemplo real) y acción (qué hacer ahora). Las lecciones sin acción al final son conocimiento inerte que el alumno olvida.

## Fase 3: Producción con presupuesto ajustado

**Setup mínimo viable para grabar cursos:**
- **Cámara**: tu smartphone actual graba en calidad suficiente. Fíjalo en horizontal a la altura de los ojos.
- **Micrófono**: un micrófono de solapa de 20-40€ mejora el audio más que cualquier otra inversión. El audio malo arruina cursos; el vídeo mediocre no.
- **Iluminación**: colócate frente a una ventana con luz natural difusa. Una lámpara de escritorio como fill light si la ventana no es suficiente.
- **Fondo**: pared lisa o librería ordenada. No necesitas un estudio.
- **Edición**: CapCut (gratuito) o DaVinci Resolve (gratuito) son suficientes para el primer curso.

**Flujo de producción eficiente:**
1. Guion (no word by word, solo puntos clave con ejemplos)
2. Grabación en bloques de 2-3 lecciones
3. Edición básica: cortar silencios largos y errores, añadir intro/outro
4. Exportar en 1080p, 30fps, H.264

**Tiempo estimado:**
- Preparación y guion: 1 hora por lección
- Grabación: 2-3x la duración final
- Edición básica: 2-3x la duración final
- Total para un curso de 3 horas de contenido: 25-35 horas de trabajo

## Fase 4: Plataforma de venta

**Comparativa de plataformas para el primer curso:**
| Plataforma | Comisión | Precio mensual | Ideal para |
|-----------|---------|---------------|-----------|
| Gumroad | 10% | 0€ | Primer curso, validación rápida |
| Teachable | 5% (Basic) | 29€/mes | Audiencia propia, más control |
| Hotmart | 9,9% + fijo | 0€ | Mercado hispanohablante |
| Podia | 0% | 33€/mes | Si ya tienes audiencia |
| Notion + Lemon Squeezy | 5% | Mínimo | Curso en texto/PDF |

**Recomendación para empezar:**
Gumroad o Hotmart si no tienes audiencia ni quieres pagar mensual. Teachable si ya tienes lista de email o quieres un producto más cuidado.

## Fase 5: Lanzamiento y primeras ventas

**Estrategia de lanzamiento en 3 semanas para un freelancer sin audiencia:**

**Semana 1 — Calentamiento:**
- Publica contenido gratuito del tema del curso (3-5 posts)
- Abre una lista de espera con descuento de "fundadores"
- Contacta 1:1 a personas de tu red que tengan el problema

**Semana 2 — Pre-venta:**
- Anuncia el curso con precio de lanzamiento (30-40% de descuento)
- Comparte testimonios del problema que resuelves
- FAQ en formato de post: "¿Para quién es este curso?"

**Semana 3 — Urgencia y cierre:**
- Deadline real del precio de lanzamiento
- Bonus de última hora (consulta de 30 min incluida con los primeros X compradores)
- Email a la lista de espera con testimonios de los primeros compradores

**Precio recomendado:**
Para un primer curso de freelancer, el rango es 97-297€. Por debajo de 97€ se percibe como de poco valor. Por encima de 297€ necesitas una reputación establecida o un proceso de venta más elaborado.

## Entregable: Plan de 60 días del primer curso

Crea el calendario completo desde hoy hasta el primer ingreso, con tareas semanales, hitos de validación y las métricas que indicarán que el lanzamiento está funcionando o necesita ajustarse.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear y lanzar el primer curso online como freelancer, desde la validación del tema hasta las primeras ventas con una estrategia de lanzamiento sin audiencia previa.',
                'vote_score'       => 46,
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
