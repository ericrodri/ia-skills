<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills101Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing sostenible sin greenwashing',
                'description'      => 'Comunica el compromiso medioambiental y social de tu marca sin caer en el greenwashing que destruye la credibilidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor de marketing especializado en sostenibilidad y comunicación de propósito de marca. Trabajo como responsable de marketing en una empresa de consumo que quiere comunicar sus iniciativas sostenibles pero tiene miedo de ser acusada de greenwashing. Ayúdame a construir una estrategia de comunicación sostenible creíble y efectiva.

## Mi contexto

- La empresa fabrica productos de cuidado personal con algunos ingredientes naturales pero no es 100% sostenible.
- Hemos reducido las emisiones de CO₂ un 22% en los últimos 2 años y cambiado el 60% del packaging a materiales reciclados.
- Algunos competidores hacen afirmaciones sostenibles muy agresivas sin evidencia. Queremos diferenciarnos siendo honestos.
- El target principal son millennials y Gen Z con alta sensibilidad medioambiental.

## Lo que necesito

### 1. El espectro del greenwashing: dónde está la línea

Explica los distintos niveles de greenwashing para que entienda dónde está el riesgo:

| Tipo de greenwashing | Ejemplo concreto | Riesgo legal/reputacional |
|---------------------|-----------------|--------------------------|
| Afirmaciones vagas | "Producto natural y ecológico" sin certificación | Medio |
| Irrelevante | "Sin CFC" cuando los CFCs llevan décadas prohibidos | Bajo–medio |
| Sin prueba | "Reducimos emisiones" sin datos verificables | Alto |
| Categoría falsa | Comparar con el peor del sector y llamarlo sostenible | Muy alto |
| Mentira directa | Certificaciones falsas o datos inventados | Legal |

¿Cuáles son las afirmaciones que debo evitar absolutamente en mis comunicaciones?

### 2. El marco de comunicación sostenible honesta

Dame un framework de 5 principios para comunicar sostenibilidad sin riesgo:
1. **Solo lo que es verificable**: si no tengo el dato exacto, no lo digo
2. **Contexto siempre**: un 22% de reducción necesita punto de partida y metodología
3. **Progreso, no perfección**: comunicar el camino, no fingir que ya llegamos
4. **Materialidad**: comunicar lo que realmente importa en mi sector, no el detalle anecdótico
5. **Acción concreta**: vincular cada claim a una acción específica y medible

Cómo aplico cada principio a mi situación concreta.

### 3. Los claims sostenibles que puedo usar con seguridad

Con los datos que tengo (22% de reducción de CO₂, 60% de packaging reciclado), ¿qué afirmaciones puedo hacer legalmente y con integridad? Dame ejemplos de copy para:
- Packaging del producto
- Redes sociales
- Web (página de sostenibilidad)
- Campaña publicitaria

### 4. La regulación europea de las alegaciones verdes

Explica la Directiva de Alegaciones Verdes de la UE (Green Claims Directive) que entra en vigor próximamente:
- Qué afirmaciones quedarán prohibidas
- Qué prueba documental necesito para usar alegaciones sostenibles
- Cómo me preparo antes de que entre en vigor

### 5. Construir la historia de sostenibilidad a largo plazo

En lugar de campañas puntuales, ¿cómo construyo una narrativa de sostenibilidad coherente que crezca con las mejoras reales de la empresa?
- Estructura del informe de sostenibilidad anual (aunque seamos pymes)
- Cómo uso el progreso (aunque sea parcial) como contenido de marketing
- Cómo involucro a los consumidores en el camino

### 6. Responder a las críticas

¿Qué hago si alguien nos acusa de greenwashing en redes sociales, aunque sea injustamente? Dame un protocolo de gestión de crisis verde:
1. Cómo evalúo si la crítica tiene base
2. Cómo respondo públicamente
3. Qué cambio internamente si la crítica tiene razón

### 7. Métricas del marketing sostenible

¿Cómo mido el impacto del marketing sostenible en el negocio?
- Métricas de percepción de marca (brand trust, NPS entre consumidores con valores sostenibles)
- Conversión y ticket medio de clientes adquiridos por canales de sostenibilidad
- Cobertura de medios especializados en sostenibilidad

Responde en español con ejemplos de empresas de consumo europeas. Incluye el marco legal vigente y las best practices del sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Estrategia de comunicación sostenible honesta para marcas de consumo: claims seguros, regulación UE y gestión de crisis verde.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Green software engineering: reduce la huella de carbono del código',
                'description'      => 'Cómo medir y reducir la huella de carbono del software: efficient algorithms, cloud optimization y carbon-aware computing.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en green software engineering y sostenibilidad tecnológica. Soy tech lead de una empresa de software con una plataforma SaaS que corre sobre AWS. Quiero medir y reducir la huella de carbono de nuestra infraestructura y nuestro código, pero no sé por dónde empezar. Guíame con un enfoque práctico y técnico.

## Mi contexto

- Stack: aplicación Node.js con PostgreSQL en AWS (EC2 + RDS + S3 + CloudFront).
- El gasto de AWS es de unos 8.000€/mes, principalmente en compute y transferencia de datos.
- No tenemos métricas de CO₂ actuales. El CEO quiere que reportemos nuestra huella en el próximo informe anual.
- El equipo está motivado con la sostenibilidad pero no sabe cómo traducirlo en código.

## Lo que necesito

### 1. Los principios de green software engineering

Explica los 8 principios del Green Software Foundation de forma concisa y con ejemplos de cómo aplican a nuestra arquitectura AWS/Node.js:

| Principio | Qué significa en la práctica | Ejemplo concreto |
|-----------|------------------------------|-----------------|
| Carbon efficiency | Emitir menos CO₂ por unidad de trabajo | Migrar de EC2 a Lambda donde el uso es esporádico |
| Energy efficiency | Usar menos energía por unidad de trabajo | Optimizar queries que hacen full table scans |
| Carbon awareness | Ejecutar tareas cuando la electricidad es más verde | Batch jobs en horario de alta energía renovable |
| Hardware efficiency | Aprovechar mejor el hardware existente | Right-sizing de instancias sobredimensionadas |
| ... | ... | ... |

Completa la tabla con los 8 principios.

### 2. Cómo mido mi huella actual

Herramientas y métricas para establecer la línea de base de CO₂:
- **AWS Customer Carbon Footprint Tool**: cómo leerlo y qué limitaciones tiene
- **Cloud Carbon Footprint (open source)**: cómo instalarlo y qué datos necesita
- **Electricity Maps API**: para carbon-aware computing en tiempo real
- Métrica objetivo: gramos de CO₂ equivalente por usuario activo al mes

### 3. Quick wins de infraestructura (impacto alto, esfuerzo bajo)

Las optimizaciones de AWS que reducen coste Y huella de carbono simultáneamente:
- Right-sizing de instancias (cómo identifico instancias sobredimensionadas)
- Spot instances para workloads tolerantes a interrupciones
- Auto-scaling ajustado (no mantener capacidad ociosa nocturna)
- Elección de región AWS según intensidad de carbono de la electricidad local
- S3 Intelligent-Tiering para datos poco accedidos

¿Qué impacto en CO₂ y en coste puedo esperar de cada una?

### 4. Carbon-aware computing: ejecutar cuando la electricidad es verde

Explica cómo implemento carbon-aware scheduling para nuestros jobs de procesamiento en batch:
- Cómo uso la Electricity Maps API para detectar la intensidad de carbono en tiempo real
- Ejemplo de código Node.js para decidir si ejecutar un job ahora o diferirlo
- Cómo configuro esto en AWS con EventBridge y Lambda

### 5. Optimización de código: los cambios con más impacto

¿Qué patrones de código generan más CO₂ innecesario en una app Node.js + PostgreSQL?
- Queries N+1 y cómo detectarlas con explain analyze
- Procesamiento síncrono donde debería ser asíncrono/batch
- Transferencia de datos innecesaria entre servicios
- JSON serialization/deserialization excesiva

Dame un checklist de optimización de código con impacto en energía estimado.

### 6. Reportar la huella de carbono

¿Cómo construyo un informe de emisiones de software que sea creíble y útil?
- El estándar GHG Protocol: Scope 1, 2 y 3 aplicado al software
- Qué métricas reporto (emisiones absolutas, emisiones por usuario, tendencia YoY)
- Cómo comunico el progreso al CEO y en el informe anual

### 7. Cultura de green software en el equipo

¿Cómo hago que el equipo piense en sostenibilidad en el día a día?
- Cómo incluyo impacto de carbono en los criterios de architecture review
- Métricas de eficiencia energética en el dashboard de métricas de ingeniería
- Recursos de formación para el equipo (certificaciones, cursos)

Responde en español con ejemplos de código y comandos AWS concretos. Enfoque técnico y práctico, no teórico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Guía técnica para medir y reducir la huella de carbono de una plataforma SaaS en AWS.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño sostenible: reduce el impacto ambiental de tus productos digitales',
                'description'      => 'Reduce el impacto ambiental de los productos digitales: web performance, dark mode, diseño para durabilidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño sostenible y eco-design para productos digitales. Soy diseñador de producto en una empresa con una plataforma web de alto tráfico (5 millones de páginas vistas al mes). Quiero hacer que nuestro producto sea más sostenible desde la perspectiva del diseño. Ayúdame con un enfoque práctico y fundamentado.

## Lo que necesito

### 1. Por qué el diseño digital tiene impacto ambiental

Explica de forma concreta (con datos) cómo el diseño de un producto digital contribuye a las emisiones de CO₂:
- Cuánto pesa una página web media y cuánto CO₂ genera por visita
- El impacto del vídeo autoplay, las fuentes web pesadas y las imágenes sin optimizar
- La herramienta Website Carbon Calculator y cómo interpretar sus resultados
- ¿Cuánto CO₂ podrían ahorrarse 5M de páginas vistas al mes si reducimos el peso a la mitad?

### 2. Los principios del diseño sostenible digital

Dame los 7 principios del Sustainable Web Design aplicados a decisiones de diseño concretas:

| Principio | Decisión de diseño sostenible | Alternativa no sostenible |
|-----------|------------------------------|--------------------------|
| Eficiencia de datos | SVG e iconos en lugar de imágenes PNG | Imágenes decorativas pesadas |
| Experiencia limpia | Flujos directos, sin dark patterns | Modales de cookies agresivos |
| Durabilidad | Diseño que funciona en dispositivos de 4 años | Requiere hardware nuevo |
| ... | ... | ... |

Completa la tabla con los 7 principios.

### 3. Performance de diseño: las optimizaciones con mayor impacto

Las decisiones de diseño que más afectan al peso de la página y al consumo energético:
- **Tipografía**: cuándo usar fuentes del sistema vs. Google Fonts, y cómo optimizar si uso fuentes web
- **Imágenes**: formatos modernos (WebP, AVIF), lazy loading, art direction responsiva
- **Vídeo**: alternativas al vídeo de fondo (CSS animations, SVG animado), cuándo vale la pena
- **Animaciones**: cuándo las animaciones gastan más energía de la que ahorran en UX

### 4. Dark mode sostenible: mito o realidad

¿El dark mode realmente ahorra energía? Explica:
- En qué tipos de pantalla ahorra (OLED/AMOLED) y en cuáles no (LCD)
- Cómo diseño un dark mode que sea útil para la accesibilidad y la batería
- Las consideraciones de diseño específicas (contraste, lectura prolongada, colores vibrantes)

### 5. Diseño para la durabilidad y la longevidad

El producto más sostenible es el que no se reemplaza:
- Cómo diseño para que el producto funcione bien en dispositivos más antiguos
- Progressive enhancement vs. diseño que requiere el último navegador
- Cómo evito las tendencias de diseño que envejecen mal y obligan a rediseños anuales
- El concepto de "diseño atemporal" aplicado a productos digitales

### 6. Reducir el consumo de los usuarios

Las funcionalidades que diseño pueden hacer que los usuarios pasen más tiempo en el producto (lo que consume más energía). ¿Cómo equilibro el engagement con el uso responsable?
- ¿Debo añadir recordatorios de descanso o límites de uso como opciones?
- Diseño de notificaciones que no creen dependencia
- El concepto de "tiempo bien gastado" (time well spent) de Tristan Harris

### 7. Medir el impacto del diseño sostenible

¿Cómo muestro al equipo y al CEO que las decisiones de diseño sostenible tienen impacto real?
- Métricas de performance (Core Web Vitals) como proxy de sostenibilidad
- Cálculo de CO₂ ahorrado por reducción de peso de página
- Herramientas: Lighthouse, WebPageTest, Ecograder, Beacon

Responde en español con herramientas concretas, ejemplos de cálculos reales y recursos que pueda compartir con mi equipo. Incluye datos numéricos donde sea posible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Guía de diseño sostenible para productos digitales: performance, dark mode y longevidad.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta con propósito: valores como diferenciador comercial',
                'description'      => 'Integra los valores de empresa en el proceso de ventas y úsalos como diferenciador ante compradores que exigen más que precio y features.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor de ventas especializado en empresas con propósito y modelos de negocio sostenibles. Trabajo como Account Executive en una empresa B2B que vende software de gestión de cadena de suministro. La empresa tiene compromisos reales de sostenibilidad (carbono neutro, proveedores locales, B Corp en proceso) pero el equipo de ventas no sabe cómo integrar esto en las conversaciones comerciales. Ayúdame a construir una estrategia de venta con propósito.

## Mi contexto

- Vendemos a empresas de manufactura y distribución de tamaño mediano.
- El ciclo de ventas es de 3–5 meses, con comités de compra de 4–6 personas.
- Precio 20–30% más alto que alternativas menos sostenibles del mercado.
- El área de compras nos pide descuento. El área de sostenibilidad y el CEO nos quieren.
- Los compradores incluyen cada vez más criterios ESG en sus RFPs.

## Lo que necesito

### 1. Por qué el propósito se convierte en ventaja competitiva real

Explica cuándo y cómo los valores de empresa se convierten en argumento de venta genuino (no en marketing vacío):
- Los sectores y tipos de compradores donde el propósito pesa más
- Cómo cuantificar el valor del propósito (reducción de riesgo de reputación, acceso a financiación ESG, cumplimiento regulatorio)
- La diferencia entre vender con propósito y hacer purpose-washing comercial

### 2. Mapear los stakeholders por su sensibilidad al propósito

En un comité de compra de 5 personas, cada uno valora cosas distintas:

| Stakeholder | Qué le importa principalmente | Cómo el propósito habla a sus intereses |
|-------------|------------------------------|----------------------------------------|
| Director de compras | Precio, términos, riesgo de proveedor | Solidez ESG reduce riesgo de cadena de suministro |
| Director de operaciones | Eficiencia, integración, soporte | Proveedor sostenible = menos riesgo reputacional |
| Director de sostenibilidad | Alineación de valores, impacto medible | Caso obvio: KPIs de Scope 3 |
| CEO / CFO | ROI, posicionamiento estratégico | Acceso a capital ESG, imagen de empresa |
| IT | Seguridad, integración técnica | Menos relevante para el propósito |

¿Cómo adapto mi mensaje para cada stakeholder en el mismo proceso de venta?

### 3. Las preguntas de discovery sobre sostenibilidad

¿Qué preguntas hago en la fase de discovery para entender si el propósito puede ser palanca en esta oportunidad?
- Preguntas sobre sus propios compromisos ESG (¿tienen objetivo de net zero? ¿cuándo?)
- Preguntas sobre la presión de sus clientes o inversores (¿sus clientes les exigen datos ESG?)
- Preguntas sobre regulación (¿les afecta la CSRD? ¿el reglamento de diligencia debida?)
- Preguntas sobre competencia (¿saben si sus competidores están tomando posición en sostenibilidad?)

### 4. Responder a la objeción del precio

El comprador dice: "Vuestra solución es un 25% más cara que la alternativa. ¿Por qué debería pagar más?"

Dame una respuesta estructurada que:
1. Reconoce la diferencia de precio sin disculparse
2. Cuantifica el coste total de la alternativa más barata (riesgo reputacional, costes de compliance futuro, no alineación con sus objetivos ESG)
3. Calcula el ROI del sobreprecio en términos que el CFO entienda

### 5. Usar el propósito en la propuesta escrita

¿Cómo integro los valores de empresa en una propuesta formal sin que parezca un añadido forzado?
- Dónde va la sección de sostenibilidad en la propuesta (no al final como apéndice)
- Qué certificaciones y datos concretos incluyo
- Cómo vinculo nuestros compromisos a los objetivos ESG específicos del cliente

### 6. La venta al área de sostenibilidad vs. al área de compras

A veces tengo aliado en el director de sostenibilidad pero el bloqueante es compras. ¿Cómo gestiono esta dualidad?

### 7. Métricas de impacto para el cliente

Dame 5 métricas de impacto sostenible que puedo ofrecer como parte del contrato:
- Reducción de Scope 3 calculada con nuestra herramienta
- Informe de trazabilidad de cadena de suministro
- Certificación de proveedores auditados

Responde en español con ejemplos concretos del mercado B2B europeo. Scripts de conversación y plantillas que pueda usar directamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Estrategia de venta con propósito para empresas B2B: mapeo de stakeholders, manejo de objeción de precio y propuestas ESG.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto responsable: privacidad, accesibilidad y sostenibilidad como requisitos',
                'description'      => 'Privacidad, accesibilidad, sostenibilidad e impacto social como requisitos del producto, no como añadidos.',
                'prompt_content'   => <<<'PROMPT'
Eres un product manager especializado en diseño responsable y ética del producto. Soy PM de un producto SaaS B2C con 200.000 usuarios activos. Quiero integrar principios de producto responsable (privacidad, accesibilidad, sostenibilidad e impacto social) en nuestro proceso de desarrollo, pero el equipo los ve como trabajo extra, no como parte del producto. Ayúdame a cambiar eso.

## Mi contexto

- El producto es una plataforma de productividad personal con funcionalidades de IA.
- El equipo tiene 3 PMs, 4 diseñadores y 18 ingenieros.
- Los OKRs actuales están 100% centrados en retención y monetización.
- Tenemos deuda técnica en accesibilidad (no cumplimos WCAG 2.1 AA) y en privacidad (dark patterns heredados de la versión anterior).
- La IA del producto genera algunas recomendaciones que podrían crear dependencia en los usuarios.

## Lo que necesito

### 1. El caso de negocio del producto responsable

¿Cómo le explico al CEO y al CPO que el producto responsable no es un coste sino una inversión?

| Principio | Riesgo si lo ignoramos | Oportunidad si lo integramos |
|-----------|----------------------|------------------------------|
| Privacidad | Multas RGPD, pérdida de confianza | Diferenciador ante productos que explotan datos |
| Accesibilidad | Exclusión del 15–20% de usuarios, riesgo legal | Ampliar mercado, mejor UX para todos |
| Sostenibilidad | Presión regulatoria creciente | Posicionamiento de marca, ahorro de infraestructura |
| Impacto social | Dependencia, daño a usuarios vulnerables | Retención a largo plazo, NPS más alto |

### 2. Privacy by design: integrar la privacidad desde el inicio

¿Cómo implemento privacy by design en nuestro proceso de discovery y definición?
- La Privacy Impact Assessment (PIA) ligera: qué preguntas hago antes de empezar a diseñar una nueva funcionalidad
- Cómo evalúo si una feature de IA requiere datos que los usuarios no esperan compartir
- Los dark patterns de privacidad que tengo que eliminar primero (consentimiento confuso, opt-out difícil, compartir datos por defecto)
- ¿Cuándo necesito un DPO? ¿Qué papel juega el PM en la gestión de privacidad?

### 3. Accesibilidad como feature, no como checkbox

Plan para llevar el producto de la situación actual (no cumplimos WCAG 2.1 AA) a compliance sin paralizar el roadmap:
- Qué auditar primero (los flujos críticos: registro, onboarding, funcionalidad principal)
- Cómo priorizar los issues de accesibilidad con el mismo proceso que los bugs normales
- Cómo integro los tests de accesibilidad en el proceso de QA existente
- El perfil de usuario con discapacidad que deberíamos incluir en nuestro user research

### 4. Impacto social de las funcionalidades de IA

Nuestra IA hace recomendaciones de productividad que podrían crear dependencia. ¿Cómo evalúo el impacto social de las funcionalidades de IA antes de lanzarlas?
- Framework de evaluación de impacto de IA (lista de preguntas antes del lanzamiento)
- Cómo diseño funciones de IA que empoderen al usuario en lugar de crear dependencia
- El concepto de "time well spent": ¿cómo lo mido y lo incluyo en mis métricas?

### 5. Integrar el producto responsable en el proceso de desarrollo

¿Cómo cambio el proceso para que la responsabilidad no sea un paso extra al final, sino parte de la definición?
- La checklist de producto responsable que reviso antes de escribir el PRD
- Cómo incluyo impacto en privacidad, accesibilidad y sostenibilidad en los criterios de aceptación
- La retrospectiva de impacto responsable: qué pregunto al equipo después de cada lanzamiento

### 6. OKRs de producto responsable

¿Cómo propongo OKRs que equilibren negocio y responsabilidad?
- Ejemplos de OKRs de accesibilidad (% de funcionalidades que cumplen WCAG)
- OKRs de privacidad (% de usuarios que entienden qué datos compartimos)
- OKRs de tiempo bien gastado (% de sesiones con objetivos cumplidos vs. scroll sin fin)

### 7. Comunicar el producto responsable a los usuarios

¿Cómo comunico al usuario que el producto se preocupa por su bienestar sin que parezca marketing vacío?

Responde en español con ejemplos concretos de productos digitales. Frameworks y checklists que pueda implementar en el próximo sprint.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Integrar privacidad, accesibilidad e impacto social en el proceso de desarrollo de producto desde el inicio.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'ESG en recursos humanos: la dimensión social',
                'description'      => 'La dimensión social del ESG: diversidad, equidad, bienestar y las métricas que los inversores empiezan a exigir a las empresas.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ESG con especialización en la dimensión social (S) y su aplicación en la gestión de personas. Soy directora de RRHH de una empresa industrial de 400 personas que está preparando su primer informe ESG. Los inversores y el consejo nos piden métricas sociales que nunca hemos medido. Ayúdame a construir el sistema de medición y gestión de la S del ESG desde cero.

## Mi contexto

- La empresa tiene plantas en España (300 personas) y Polonia (100 personas).
- La plantilla es 72% hombres (sector industrial con baja representación femenina).
- No tenemos un sistema de medición de bienestar ni de diversidad formal.
- Dos grandes clientes nos han pedido ya que reportemos métricas sociales como parte de su due diligence de cadena de suministro.
- La empresa está considerando emitir bonos vinculados a sostenibilidad (SLBs) donde los covenants incluyen métricas de RRHH.

## Lo que necesito

### 1. Qué métricas sociales exigen los estándares ESG

Dame el mapa de métricas sociales que los principales estándares piden:

| Estándar | Métricas sociales clave | Obligatorio o voluntario |
|---------|------------------------|-------------------------|
| GRI (Standards 401–410) | Rotación, formación, salud y seguridad, diversidad | Voluntario (pero referencia global) |
| ESRS (CSRD) | Diversidad del consejo, brecha salarial de género, accidentes laborales | Obligatorio para empresas en scope |
| SASB (por sector) | Varía por industria (industrial: seguridad, retención) | Voluntario |
| DJSI / MSCI ratings | Índices de diversidad, satisfacción del empleado | Rating externo |

¿Mi empresa está en el scope de la CSRD? ¿A partir de cuándo?

### 2. Las métricas sociales que tengo que medir sí o sí

Lista las 15 métricas sociales más solicitadas por inversores y clientes, con definición exacta y cómo calcularlas:

1. **Tasa de rotación voluntaria**: empleados que salen por propia iniciativa / plantilla media × 100
2. **Brecha salarial de género ajustada**: diferencia salarial hombres-mujeres para el mismo rol y nivel
3. **Índice de accidentabilidad (LTIFR)**: número de accidentes con baja / millones de horas trabajadas
4. **Horas de formación por empleado**: horas totales de formación / plantilla media
...

Dame la lista completa con fórmulas.

### 3. Brecha salarial de género: diagnóstico y plan de acción

Cómo realizo el análisis de la brecha salarial de género en mi empresa:
- La diferencia entre brecha raw (media hombres vs. media mujeres) y brecha ajustada (mismo rol, mismo nivel)
- Cómo interpreto los resultados: ¿cuándo es estructural y cuándo es por la composición de la plantilla?
- Plan de acción si encuentro brecha injustificada: ¿qué hago? ¿en qué plazo?
- Cuándo y cómo comunicar los resultados externamente

### 4. Diversidad e inclusión en un sector industrial con baja representación femenina

Con un 72% de hombres en un sector industrial, ¿qué objetivos de diversidad son realistas y cómo los alcanzo?
- Por qué las cuotas a corto plazo pueden no funcionar en ciertos sectores
- Intervenciones en el pipeline: universidades técnicas, programas de aprendiz, relaciones con institutos de FP
- Diversidad más allá del género: edad, discapacidad, nacionalidad
- Cómo creo un entorno inclusivo para las mujeres que ya tenemos antes de contratar más

### 5. Bienestar y satisfacción del empleado: cómo lo mido

Tengo que reportar métricas de bienestar pero nunca hemos hecho encuestas formales. Proceso para implementar la medición:
- Encuesta de clima laboral y eNPS: diseño, frecuencia, análisis y acción
- Métricas de absentismo como proxy de bienestar
- Programas de bienestar que puedo implementar en un entorno industrial

### 6. Salud y seguridad: ir más allá del cumplimiento legal

La seguridad laboral es obligatoria, pero los inversores esperan que la empresa vaya más allá:
- LTIFR y TRIR: cómo los calculo y cómo los comparo con el benchmark del sector
- Cultura de seguridad vs. cumplimiento de normas: la diferencia y cómo la mido
- Cómo reporto un accidente grave a los inversores (transparencia ESG)

### 7. El informe social: cómo estructuro la narrativa

Los números solos no convencen. ¿Cómo construyo la narrativa social del informe ESG?
- Estructura recomendada para la sección social
- Cómo uso casos concretos de empleados (con su consentimiento) para humanizar los datos
- Cómo gestiono la comunicación de métricas donde estamos por debajo del benchmark

Responde en español con ejemplos del marco regulatorio europeo (CSRD, GRI) y del sector industrial. Fórmulas exactas y frameworks accionables.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de métricas sociales ESG para RRHH: diversidad, brecha salarial, bienestar y reporting para inversores.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Reporting ESG y taxonomía verde de la UE para empresas',
                'description'      => 'Qué empresas tienen que reportar, qué métricas incluir y cómo prepararse para la regulación CSRD.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en finanzas sostenibles y regulación ESG de la Unión Europea. Soy CFO de una empresa industrial con 280M€ de facturación y cotización en un mercado regulado europeo. Tenemos que preparar nuestro primer informe CSRD y no sabemos por dónde empezar. Ayúdame a entender la regulación y a construir el plan de implementación.

## Mi contexto

- Empresa industrial de manufactura, con planta en España y 3 almacenes de distribución en Europa.
- Cotizamos en el Mercado Continuo español (IBEX Small Cap).
- Facturación: 280M€, 850 empleados.
- Primer ejercicio obligatorio bajo CSRD: ejercicio 2025 (informe publicado en 2026).
- Tenemos un informe de sostenibilidad voluntario desde 2021 pero no cumple con los ESRS.
- El consejo de administración no tiene experiencia en ESG y hay urgencia de ponerles al día.

## Lo que necesito

### 1. El mapa de la regulación ESG europea: qué es qué

Explica de forma clara (para un CFO que viene de las finanzas tradicionales) las distintas piezas del puzzle regulatorio:

| Regulación | Qué es | A quién aplica | Fecha de entrada en vigor |
|-----------|--------|----------------|--------------------------|
| CSRD | Directiva de reporte de sostenibilidad corporativa | Grandes empresas y cotizadas | 2024–2028 (escalonado) |
| ESRS | Los estándares de reporte dentro de la CSRD | Las empresas sujetas a CSRD | Igual que CSRD |
| Taxonomía UE | Clasificación de actividades económicas sostenibles | Empresas financieras y CSRD | Progresivo |
| SFDR | Regulación de divulgación de finanzas sostenibles | Gestoras y bancos | 2021 |

¿Cuál es la relación entre estas regulaciones y cuál me afecta a mí?

### 2. La doble materialidad: el concepto clave del CSRD

El ESRS exige un análisis de doble materialidad. Explica:
- Qué es la materialidad de impacto (cómo afecta mi empresa al mundo)
- Qué es la materialidad financiera (cómo el mundo afecta a mi empresa)
- Proceso para hacer el análisis de doble materialidad con mi equipo
- Quién debe participar en el proceso (no es solo el equipo de sostenibilidad)
- Cómo documento el proceso para que sea auditable

### 3. Los ESRS: qué tengo que reportar

Guíame por la estructura de los European Sustainability Reporting Standards:

| ESRS | Tema | Métricas clave que requiere |
|------|------|-----------------------------|
| ESRS 2 | Información general | Gobernanza, estrategia, gestión de riesgos, métricas |
| ESRS E1 | Cambio climático | Emisiones Scope 1, 2 y 3, objetivo de net zero, taxonomía |
| ESRS E2–E5 | Contaminación, agua, biodiversidad, economía circular | Varía por materialidad |
| ESRS S1–S4 | Trabajadores, cadena de valor, comunidades, consumidores | Métricas sociales |
| ESRS G1 | Conducta empresarial | Anticorrupción, lobbying, pagos fiscales |

¿Cuáles de estos son obligatorios para mí y cuáles dependen del análisis de doble materialidad?

### 4. La taxonomía verde de la UE: qué actividades son elegibles

¿Cómo determino si alguna de mis actividades es elegible (eligible) y alineada (aligned) con la taxonomía verde?
- Las 6 objetivos ambientales de la taxonomía
- Los criterios técnicos de examen (Technical Screening Criteria) para manufactura industrial
- Cómo calculo el % de facturación, CAPEX y OPEX taxonómicamente alineado
- Qué pasa si no tengo actividades elegibles (¿reporto 0%?)

### 5. El plan de implementación: 18 meses para estar listo

Con primer reporte en 2026, dame el plan de implementación mes a mes:

| Trimestre | Hitos clave |
|-----------|-------------|
| Q1 2025 | Análisis de doble materialidad, gap analysis vs. ESRS |
| Q2 2025 | Sistema de recopilación de datos, inventario de emisiones Scope 1 y 2 |
| Q3 2025 | Scope 3 (los más complejos), datos sociales (ESRS S1) |
| Q4 2025 | Borrador del informe, auditoría de verificación limitada |
| Q1–Q2 2026 | Publicación del informe con los estados financieros |

### 6. La verificación externa del informe

¿Quién audita el informe CSRD? ¿Puede ser el mismo auditor financiero? ¿Qué es la "assurance limitada" vs. "razonable"? ¿Cuánto cuesta?

### 7. Comunicar el CSRD al consejo y a los inversores

¿Cómo presento al consejo de administración (sin experiencia ESG) los riesgos y oportunidades del CSRD?
- Los riesgos de no cumplir (sanciones, impacto en acceso a financiación)
- Las oportunidades (acceso a bonos verdes, mejora de rating ESG, preferencia de inversores institucionales)

Responde en español con ejemplos concretos del marco regulatorio europeo actual. Incluye fechas exactas de implementación y referencias a los textos legales cuando sea útil.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Guía de implementación CSRD y taxonomía verde para el CFO de una empresa cotizada: doble materialidad, ESRS y plan de 18 meses.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance ESG y diligencia debida en cadena de suministro',
                'description'      => 'La Directiva de Diligencia Debida de la UE y sus obligaciones para empresas medianas.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en derecho corporativo y compliance ESG europeo. Soy directora jurídica de una empresa de retail con 180M€ de facturación y una cadena de suministro compleja con proveedores en Asia, Europa del Este y Marruecos. Necesito entender qué obligaciones legales tenemos en materia de sostenibilidad y diligencia debida. Ayúdame a construir el programa de compliance.

## Mi contexto

- La empresa vende ropa y accesorios bajo marca propia. Fabricamos el 80% con proveedores externos (60% en Bangladesh y Vietnam, 40% en Portugal y Marruecos).
- Tenemos unos 120 proveedores directos y un número desconocido de sub-proveedores.
- Hemos tenido un incidente en 2023: un proveedor en Bangladesh fue investigado por condiciones laborales deficientes y salió en prensa española.
- El consejo de administración preguntó si éramos legalmente responsables. La respuesta actual es "no lo sabemos".
- Dos grandes clientes (retailers alemán y francés) nos piden que cumplamos con sus propios estándares de cadena de suministro.

## Lo que necesito

### 1. El mapa de la regulación de diligencia debida en Europa

Explica las distintas regulaciones que me pueden afectar:

| Regulación | País / UE | Qué obliga | ¿Me aplica? |
|-----------|-----------|-----------|-------------|
| Ley de Debida Diligencia Alemana (LkSG) | Alemania | Diligencia en DDHH y medioambiente | Si tengo clientes alemanes que me lo exigen |
| Loi de Vigilance | Francia | Grandes empresas francesas | Probablemente no directamente |
| Directiva CSDDD (CS3D) | UE | Todas las grandes empresas, luego medianas | A partir de 2027–2028 |
| Reglamento de productos libres de deforestación (EUDR) | UE | Empresas que usan materias primas de riesgo | Depende de los materiales |

¿A cuáles de estas regulaciones estoy sujeta hoy y cuáles serán obligatorias en los próximos 3 años?

### 2. La Directiva CSDDD: qué obliga y cuándo

Explica los elementos clave de la Corporate Sustainability Due Diligence Directive:
- Scope: qué empresas quedan incluidas y a partir de cuándo
- Las 6 obligaciones principales (política de diligencia, identificación de impactos, prevención, reparación, quejas, comunicación)
- La cadena de valor: ¿hasta cuántos eslabones debo llegar?
- Responsabilidad civil: ¿puedo ser demandada por el comportamiento de mis proveedores?
- Sanciones: qué multas establece la directiva

### 3. Programa de diligencia debida en cadena de suministro: construcción desde cero

Plan para construir el programa de due diligence con los recursos de un departamento legal de 3 personas:

**Fase 1 – Mapeo de la cadena de suministro**
- Cómo hago el inventario de proveedores directos (Tier 1) y sub-proveedores (Tier 2 y 3)
- Qué herramientas de mapeo existen (EcoVadis, Sourcemap, Sedex)
- Cómo priorizo: no puedo auditar a 120 proveedores con los mismos recursos

**Fase 2 – Evaluación de riesgos**
- Criterios de riesgo: geografía, sector, tipo de producto, historial de incidentes
- Matriz de riesgo ESG para mis proveedores:

| Riesgo DDHH | Riesgo Medioambiental | Nivel de auditoría |
|-------------|----------------------|-------------------|
| Alto | Alto | Auditoría in situ anual |
| Alto | Bajo | Cuestionario + revisión documental semestral |
| Bajo | Alto | Cuestionario ambiental anual |
| Bajo | Bajo | Cuestionario básico bienal |

**Fase 3 – Contratos con proveedores**
- Las cláusulas ESG que debo incluir en mis contratos de aprovisionamiento
- Cómo gestiono el proveedor que no quiere firmar estas cláusulas

### 4. Gestionar el incidente de 2023 legalmente

¿Cuál es nuestra exposición legal por el incidente del proveedor bangladesí?
- Responsabilidad civil y penal bajo el marco legal actual
- Qué documentación necesitamos tener para defendernos
- Cómo mejoro el proceso para que el próximo incidente no nos tome por sorpresa

### 5. Responder a los clientes alemán y francés

Tenemos clientes que nos exigen cumplir con sus propios estándares ESG de proveedores. ¿Cómo gestiono estas peticiones?
- Qué documentación debo preparar para sus cuestionarios
- Cómo negocio cuando sus estándares van más allá de lo que puedo cumplir ahora mismo
- ¿Puedo perder el contrato si no cumplo? ¿Hay cláusulas de terminación por incumplimiento ESG?

### 6. La comunicación interna: quién hace qué

El compliance ESG no es solo del departamento legal. ¿Cómo distribuyo las responsabilidades?
- Compras: primeros en identificar riesgos de proveedor
- Legal: política, contratos y responsabilidad
- Sostenibilidad / RRHH: política de DDHH y medioambiente
- CEO y consejo: aprobación de política y recursos

Responde en español con referencias al texto de la CSDDD y las regulaciones nacionales relevantes. Checklists y matrices que pueda usar directamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Programa de diligencia debida ESG en cadena de suministro: CSDDD, mapeo de proveedores y gestión de riesgos legales.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte para productos de economía circular',
                'description'      => 'Gestión de devoluciones, reparaciones, segunda vida y la experiencia de cliente en modelos circulares.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en experiencia de cliente y operaciones de servicio para empresas con modelos de negocio de economía circular. Trabajo en el equipo de Customer Success de una empresa de electrónica de consumo que está lanzando un programa de reparación, reacondicionamiento y segunda vida de sus productos. Necesito diseñar el proceso de soporte al cliente para este nuevo modelo. Ayúdame a construirlo.

## Mi contexto

- Vendemos dispositivos tecnológicos (tablets, auriculares, smartwatches) con ticket medio de 250€.
- Lanzamos tres servicios nuevos: reparación en centro propio, programa de reacondicionamiento (refurbished con garantía) y sistema de devolución con crédito para compra futura.
- El equipo de soporte actual está entrenado para el modelo lineal (venta y posventa estándar). Esto es completamente nuevo para ellos.
- Los clientes tienen dudas sobre la calidad y garantías de los productos reacondicionados y sobre qué pasa con sus datos cuando devuelven un dispositivo.

## Lo que necesito

### 1. El customer journey circular: los nuevos puntos de contacto

Mapea el customer journey en un modelo circular (vs. el lineal de compra–uso–descarte):

| Momento del journey | Necesidad del cliente | Canal de soporte | Tipo de interacción |
|--------------------|-----------------------|-----------------|---------------------|
| Compra de producto reacondicionado | ¿Es de calidad? ¿Qué garantía tiene? | Web, chat | Informativa pre-compra |
| Recepción del producto reacondicionado | ¿Está en buen estado? ¿Qué incluye? | Email + chat | Onboarding especial |
| Solicitud de reparación | ¿Cuánto cuesta? ¿Cuánto tarda? | Teléfono, app | Presupuesto y logística |
| Devolución con crédito | ¿Cuánto me dan? ¿Qué pasa con mis datos? | App, web | Proceso guiado |
| Segunda compra (con crédito) | ¿Cómo uso el crédito? | Web | Proceso de canje |

### 2. Las preguntas frecuentes sobre productos reacondicionados

Los clientes tienen miedos específicos sobre lo reacondicionado. Dame los scripts de respuesta para las 8 preguntas más comunes:
1. "¿Qué significa exactamente 'reacondicionado'?"
2. "¿Tiene los mismos problemas que el producto devuelto?"
3. "¿Qué garantía tiene respecto al producto nuevo?"
4. "¿Ha tenido otros dueños? ¿Cuántos?"
5. "¿Qué pasa con mis datos cuando devuelvo el dispositivo?"
6. "¿Puedo devolverlo si no me gusta?"
7. "¿Los repuestos son originales?"
8. "¿Por qué debería comprarlo reacondicionado en lugar de nuevo a un precio similar?"

### 3. El proceso de borrado de datos: la pregunta más sensible

Los clientes están muy preocupados por la privacidad cuando devuelven un dispositivo. Dame:
- El proceso de borrado de datos certificado que debo describir al cliente
- El certificado de borrado que puedo ofrecer (¿qué estándar? ¿DoD 5220.22-M, NIST 800-88?)
- Cómo comunico este proceso en la página de devolución (lenguaje claro para no técnicos)
- Qué hacer cuando el dispositivo no enciende y no se puede hacer borrado remoto

### 4. Proceso de solicitud de reparación: de la fricción a la fluidez

El proceso de reparación tiene más fricción que una compra estándar. ¿Cómo lo simplifico?
- Diagnosing tool digital (cuestionario que identifica el problema antes de hablar con soporte)
- Sistema de presupuesto online sin tener que enviar el producto primero
- Logística de recogida y devolución (quién la gestiona, qué plazo prometo)
- Cómo gestiono las expectativas de tiempo cuando hay escasez de piezas
- Seguimiento del estado de la reparación en tiempo real

### 5. El crédito de devolución: cómo gestiono la experiencia

El cliente quiere devolver su dispositivo a cambio de crédito para una compra futura. ¿Cómo diseño este proceso?
- Cómo calculo y comunico el valor del crédito de forma transparente
- Cómo gestiono la decepción cuando el crédito ofrecido es menor de lo esperado
- El flujo de devolución: ¿presencial o por correo? ¿Qué opciones ofrezco?
- Cómo incentivo que el cliente use el crédito (sin que parezca presión)

### 6. Formación del equipo de soporte

El equipo tiene que aprender un modelo completamente nuevo. ¿Cómo les formo?
- Los 5 conceptos clave de la economía circular que todo agente de soporte debe entender
- Roleplay de las conversaciones más difíciles (cliente que devuelve un reacondicionado en mal estado)
- Cómo gestionar la frustración del cliente que esperaba calidad nueva y recibe calidad reacondicionada

### 7. Métricas del soporte circular

¿Qué métricas añado a mi dashboard para el modelo circular?
- Tasa de éxito de reparaciones (% que salen bien a la primera)
- NPS de clientes de productos reacondicionados vs. nuevos
- Tasa de segunda compra después de devolución con crédito
- Coste por interacción en el modelo circular vs. el lineal

Responde en español con ejemplos del sector de electrónica de consumo y retail sostenible. Scripts y plantillas que mi equipo pueda usar directamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseño del proceso de soporte para modelos de economía circular: reparaciones, productos reacondicionados y devoluciones con crédito.',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance con impacto: negocio alineado con tus valores',
                'description'      => 'Cómo construir un negocio independiente alineado con tus valores sin sacrificar los ingresos.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach de negocios especializado en profesionales independientes que quieren construir un negocio con impacto positivo. Soy diseñadora gráfica freelance con 6 años de experiencia. Tengo buenos ingresos (70.000€/año) pero siento que mi trabajo no tiene propósito: diseño para marcas que no me representan y en muchos casos no me gustan. Quiero reorientar mi negocio hacia clientes y proyectos con impacto social o medioambiental positivo, pero tengo miedo de perder ingresos. Ayúdame con el plan.

## Mi contexto

- Clientes actuales: agencias de publicidad que me subcontratan (50%), startups tech (30%), pymes diversas (20%).
- Mis ingresos actuales son estables pero siento que podría ganar más si me especializara.
- Me apasionan: el medioambiente, la educación y la salud mental.
- Tengo un portfolio sólido pero genérico. No comunico ningún posicionamiento de impacto.
- Miedo principal: que las organizaciones de impacto (ONGs, startups sociales) no puedan pagarme lo que cobro.

## Lo que necesito

### 1. Desmontando el mito de que el impacto significa cobrar menos

¿Es cierto que trabajar con organizaciones de impacto significa ganar menos? Explica el espectro real del mercado:

| Tipo de cliente de impacto | Capacidad de pago | Potencial de proyectos interesantes |
|---------------------------|------------------|-------------------------------------|
| ONGs internacionales (UNICEF, WWF, Greenpeace) | Alto (presupuestos de comunicación reales) | Muy alto |
| Startups de impacto (Climatetech, EdTech, Healthtech) | Medio-alto (si tienen financiación) | Alto |
| Empresas con compromisos ESG reales | Alto | Medio-alto |
| ONGs locales pequeñas | Bajo | Medio |
| Startups sociales sin financiación | Muy bajo | Bajo |

¿En qué segmentos del mercado de impacto debería enfocarme?

### 2. Mi posicionamiento de impacto: cómo lo defino

Proceso para encontrar mi nicho en el mercado de diseño con impacto:
- Intersección de mis habilidades (diseño gráfico), mis valores (medioambiente) y el mercado (quién paga)
- Ejemplos de posicionamientos concretos de diseñadores con impacto:
  - "Diseñadora de comunicación para organizaciones climáticas"
  - "Diseñadora de marca para startups de salud mental"
  - "Diseñadora editorial para proyectos educativos"

¿Cómo elijo entre estas opciones de forma estratégica?

### 3. La transición sin salto al vacío

Cómo migro mi cartera de clientes actual hacia clientes de impacto sin perder ingresos en el proceso:

| Trimestre | Acción | % cartera de impacto objetivo |
|-----------|--------|-------------------------------|
| Q1 | Primeros proyectos de impacto (pro bono selectivo o tarifa reducida) | 10% |
| Q2 | Portfolio de impacto visible, primeros clientes pagando | 25% |
| Q3 | Comunicación activa del nuevo posicionamiento | 40% |
| Q4 | Reducción gradual de clientes no alineados | 60% |

¿Es este ritmo realista? ¿Qué riesgos financieros debo gestionar?

### 4. El pro bono estratégico: cuándo es inversión y cuándo es pérdida

Quiero hacer pro bono o descuentos para construir portfolio de impacto, pero no puedo hacerlo indefinidamente. ¿Cómo uso el pro bono de forma estratégica?
- Criterios para elegir proyectos pro bono (visibilidad, networking, aprendizaje)
- Límite de tiempo: cuántos proyectos pro bono al año y de qué duración máxima
- Cómo convierto el pro bono en referencias pagadas
- Cuándo decir no aunque me importe la causa

### 5. Dónde encuentro clientes de impacto

Los clientes de impacto no están en los mismos canales que los clientes convencionales. ¿Dónde los busco?
- Comunidades y directorios: Impact Hub, Social Enterprise UK, B Corp directory, Ashoka
- Eventos: conferencias de sostenibilidad, foros de innovación social, Design for Good
- LinkedIn: cómo busco directores de comunicación en empresas B Corp o startups climatetech
- Agencias especializadas en comunicación de impacto que subcontratan diseñadores

### 6. Mi propuesta de valor para clientes de impacto

¿Cómo comunico mi valor a una organización de impacto de forma diferente a como lo hago con un cliente convencional?
- Qué incluyo en mi portfolio cuando me dirijo a ellos
- Cómo demuestro que entiendo su causa (sin fingir que soy experta en todo)
- Cómo presento mi trabajo en términos de impacto (no solo de estética)

### 7. Alinear las finanzas del negocio con los valores

Si quiero un negocio con impacto, ¿qué más puedo hacer además de elegir a quién diseño?
- Donaciones de un % de los ingresos (1% for the Planet y similares)
- Ser autónoma comprometida con B Corp (¿existe para autónomos?)
- Elegir banco ético, proveedor de energía renovable, herramientas de software con política de impacto
- Compensar las emisiones de mi actividad (viajes, hosting, etc.)

Responde en español con ejemplos reales del mercado de diseño y comunicación de impacto en España y Europa. Frameworks prácticos para la transición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Transición de negocio freelance convencional a modelo con impacto: posicionamiento, clientes y finanzas alineadas con valores.',
                'vote_score'       => 30,
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
