<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills476Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de marketing para apps móviles con IA',
                'description'       => 'Diseña campañas de adquisición y retención de usuarios para aplicaciones móviles usando IA para segmentación, personalización de mensajes y optimización del presupuesto publicitario.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en marketing de aplicaciones móviles (App Marketing) con experiencia en estrategias de crecimiento, adquisición de usuarios y monetización. Tu encargo es ayudarme a diseñar una estrategia completa de marketing para el lanzamiento y crecimiento de una aplicación móvil, integrando herramientas de inteligencia artificial en cada fase.

**Datos de la aplicación:**
[NOMBRE DE LA APP, CATEGORÍA (productividad, salud, entretenimiento, finanzas, etc.), PLATAFORMAS (iOS, Android o ambas), MODELO DE MONETIZACIÓN (freemium, suscripción, compras in-app, publicidad), MERCADOS OBJETIVO]

**Bloque 1 — Investigación y segmentación con IA**

Define la estrategia de conocimiento del usuario:

1. **Arquetipos de usuario**: Crea tres perfiles de usuario detallados basándote en los datos que me proporciones. Para cada perfil incluye: demografía, motivaciones para descargar la app, barreras de adopción, dispositivos y hábitos de uso móvil, y canales donde se pueden alcanzar.

2. **Análisis de competencia en tiendas**: Identifica las palabras clave ASO (App Store Optimization) de mayor oportunidad, analiza las reseñas de las apps competidoras para encontrar puntos de dolor no resueltos y define el posicionamiento diferencial en las tiendas.

3. **Segmentación para campañas de pago**: Define los segmentos de audiencia para Meta Ads, Google UAC y Apple Search Ads con sus parámetros específicos: intereses, comportamientos, lookalikes basados en usuarios existentes de alta LTV.

**Bloque 2 — Estrategia de contenido y creatividades**

Desarrolla el plan de contenido para la fase de lanzamiento (primeros 90 días):

- **Descripción optimizada para tiendas**: Redacta la descripción corta (80 caracteres) y larga (4.000 caracteres) de la app para App Store y Google Play, con palabras clave integradas de forma natural.
- **Plan de screenshots y preview videos**: ¿Qué momentos de la app mostrar? ¿Qué copy superponer? ¿Qué orden de pantallas maximiza la conversión?
- **Matriz de creatividades para paid media**: Cuatro variantes de creatividad (conceptos diferentes, no solo versiones de color) para testear en los primeros 30 días, con descripción del visual, texto principal y CTA de cada una.
- **Estrategia de contenido orgánico**: Plan mensual de contenido para redes sociales (TikTok, Instagram, YouTube Shorts) que muestre el producto en uso real sin parecer publicidad.

**Bloque 3 — Campañas de adquisición con IA**

Define la estrategia de paid user acquisition:

- **Presupuesto y distribución por canal**: Dado un presupuesto inicial de [X€ o $], ¿cómo distribuirlo entre App Store Search, Google UAC, Meta y canales alternativos? Justifica la distribución.
- **Métricas objetivo**: Define el CPI (coste por instalación), CPA (coste por acción clave como registro o primera compra), ROAS y LTV objetivo para cada segmento.
- **Optimización algorítmica**: ¿Cómo configurar los eventos de optimización en cada plataforma para que el algoritmo aprenda a encontrar usuarios de alta calidad, no solo instalaciones baratas?

**Bloque 4 — Retención y monetización**

La retención es más valiosa que la adquisición. Define:

- **Secuencia de onboarding**: Los primeros siete días son críticos. Diseña la secuencia de notificaciones push, emails y mensajes in-app que lleven al usuario al momento "aha" lo antes posible.
- **Estrategia de reactivación**: Flujo automatizado para usuarios que no han abierto la app en 7, 14 y 30 días, con mensajes personalizados según la última acción del usuario.
- **Optimización de conversión freemium**: Si la app es freemium, ¿cuándo y cómo presentar el upsell? Define el momento óptimo basándote en el comportamiento del usuario, no en el tiempo transcurrido.

Proporciona un calendario de ejecución para los primeros 90 días con las acciones prioritarias por semana y las métricas de seguimiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar una estrategia completa de marketing para el lanzamiento y crecimiento de una app móvil, con ASO, paid UA, contenido y retención.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Integración de LLMs en aplicaciones móviles nativas',
                'description'       => 'Aprende a integrar modelos de lenguaje de gran escala en apps iOS y Android: arquitectura, gestión de contexto, optimización de costes y UX para funcionalidades de IA conversacional en móvil.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de software móvil especializado en la integración de inteligencia artificial y modelos de lenguaje en aplicaciones nativas para iOS y Android. Tu encargo es guiarme en el diseño e implementación de funcionalidades de IA conversacional en una aplicación móvil, cubriendo arquitectura, rendimiento, costes y experiencia de usuario.

**Descripción del proyecto:**
[PLATAFORMA: iOS nativo (Swift/SwiftUI), Android nativo (Kotlin/Jetpack Compose) o React Native/Flutter]
[FUNCIONALIDAD DE IA A IMPLEMENTAR: asistente conversacional, generación de contenido, análisis de imagen, transcripción de voz, recomendaciones personalizadas]
[MODELO DE IA A USAR O POR DEFINIR: Claude API, OpenAI, modelo local on-device, otro]

**Bloque 1 — Decisión de arquitectura: cloud vs. on-device**

Analiza las dos aproximaciones principales:

1. **Integración con API en la nube (Claude, GPT-4, Gemini)**:
   - Ventajas: capacidad sin límite, modelos actualizados, sin tamaño de app adicional.
   - Desventajas: latencia de red, coste por llamada, dependencia de conectividad, privacidad de datos.
   - Implementación: ¿Cómo hacer las llamadas a la API desde la app de forma segura (sin exponer la API key en el cliente)? Describe la arquitectura con un backend proxy (Node.js, Python o serverless) y el flujo de autenticación.

2. **Modelos on-device (Core ML, TFLite, ONNX Runtime)**:
   - Ventajas: sin latencia de red, privacidad total, funcionamiento offline, sin coste por inferencia.
   - Desventajas: tamaño de descarga, capacidades limitadas, actualización más compleja.
   - Implementación: ¿Qué modelos ligeros son viables para móvil hoy? Compara Phi-3 Mini, Gemma 2B y Llama 3.2 en términos de tamaño, velocidad y calidad en dispositivos de gama media.

3. **Arquitectura híbrida**: Para funcionalidades simples, usar modelo on-device; para queries complejas, escalar a la API en la nube. Define cómo implementar este router y los criterios de decisión.

**Bloque 2 — Implementación técnica detallada**

Proporciona código de ejemplo para:

- **Llamada asíncrona a la API con streaming en Swift**: Implementa una función que llame a la API de Claude con streaming de respuesta, actualice la interfaz token a token y maneje errores de red con reintentos.
- **Gestión del contexto de conversación**: ¿Cómo almacenar el historial de mensajes en el cliente? Define la estructura de datos, el límite de contexto que envías (para controlar costes) y la estrategia de resumir conversaciones largas.
- **Caché inteligente de respuestas**: Para preguntas frecuentes o similares, ¿cómo evitar llamadas redundantes a la API? Implementa un sistema de caché con similitud semántica o hash de prompts.
- **Manejo de errores y fallbacks**: ¿Qué muestra la app cuando la API falla o la conectividad es mala? Define los estados de error y los mensajes de usuario apropiados.

**Bloque 3 — Optimización de costes**

El coste de las llamadas a LLMs puede escalar rápidamente. Define estrategias para controlarlo:

- Compresión de contexto: ¿cómo reducir tokens enviados sin perder calidad de respuesta?
- Prompt caching: ¿cómo aprovechar el caché de prompts del sistema de Claude para reducir costes en prompts de sistema repetitivos?
- Modelo por caso de uso: ¿cuándo usar claude-haiku vs. claude-sonnet en función de la complejidad de la tarea?
- Estimación de coste mensual para distintos volúmenes de usuarios activos (1.000, 10.000, 100.000 MAU).

**Bloque 4 — UX para funcionalidades de IA en móvil**

La IA en móvil tiene patrones de UX específicos:

- Indicadores de carga y streaming: ¿cómo mostrar que la IA está pensando sin que el usuario abandone?
- Longitud de respuestas: en móvil, las respuestas largas son difíciles de consumir. ¿Cómo instruccionar al modelo para que responda de forma concisa?
- Corrección y regeneración: ¿cómo permitir al usuario pedir una respuesta diferente o corregir su input sin reiniciar la conversación?
- Accesibilidad: ¿cómo garantizar que las funcionalidades de IA son accesibles para usuarios con discapacidades visuales o motoras?

Incluye un diagrama de arquitectura en texto y el stack tecnológico recomendado para cada plataforma.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 70,
                'use_case'          => 'Integrar LLMs en apps móviles nativas con arquitectura cloud vs. on-device, código de streaming, gestión de contexto y optimización de costes.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de UX personalizada con IA para aplicaciones móviles',
                'description'       => 'Aplica principios de diseño adaptativo e inteligencia artificial para crear experiencias de usuario en apps móviles que se personalizan según el comportamiento y preferencias de cada usuario.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador de experiencia de usuario especializado en aplicaciones móviles con inteligencia artificial adaptativa. Tu encargo es ayudarme a diseñar un sistema de UX personalizada que adapte la interfaz, el contenido y los flujos de interacción al comportamiento individual de cada usuario, usando datos y modelos de IA.

**Descripción de la aplicación:**
[TIPO DE APP, PRINCIPALES FUNCIONALIDADES, USUARIOS OBJETIVO, PLATAFORMAS]

**Bloque 1 — Fundamentos del diseño adaptativo**

Define los principios del sistema de personalización:

1. **Qué personalizar y qué no**: No todo debe personalizarse. Identifica los elementos que se benefician de la adaptación (orden de contenido, sugerencias, notificaciones, nivel de complejidad de la interfaz) y los que deben permanecer consistentes (navegación principal, acciones críticas, onboarding de seguridad).

2. **Datos que alimentan la personalización**: ¿Qué señales de comportamiento son las más predictivas de las preferencias del usuario? Define el conjunto mínimo de datos a recopilar (con consideraciones de privacidad) y cómo interpretarlos para inferir preferencias.

3. **Transparencia y control del usuario**: El usuario debe sentir que la IA le ayuda, no que le vigila. Define cómo comunicar que la app se adapta, cómo mostrar las razones de una recomendación y cómo permitir al usuario ajustar o resetear sus preferencias.

**Bloque 2 — Patrones de diseño para IA en móvil**

Documenta los patrones de diseño aplicables a la app:

- **Recomendaciones contextuales**: ¿Cómo presentar sugerencias generadas por IA sin interrumpir el flujo del usuario? Define el formato visual, la frecuencia máxima y las condiciones que activan la sugerencia.
- **Búsqueda semántica**: Diseña la experiencia de búsqueda que entiende intención, no solo palabras exactas. ¿Cómo mostrar resultados de distinta confianza? ¿Cómo gestionar el estado de "sin resultados"?
- **Asistente conversacional integrado**: Si la app incluye un chat con IA, ¿cómo integrarlo sin que domine toda la experiencia? ¿Cuándo es accesible, cómo se activa, qué aspecto tiene en contextos distintos?
- **Onboarding adaptativo**: El primer uso determina la retención. Diseña un onboarding que aprende las preferencias del usuario en los primeros tres pasos y adapta el resto del proceso en consecuencia.

**Bloque 3 — Diseño de estados de la IA**

La IA no siempre es perfecta ni rápida. Diseña los estados de la interfaz para:

- **Estado de carga y procesamiento**: ¿Qué ve el usuario mientras la IA analiza o genera contenido? Evita spinners genéricos: el microcopy y la animación deben reflejar qué está haciendo la IA.
- **Estado de baja confianza**: Cuando la IA no está segura de su respuesta, ¿cómo comunica la incertidumbre sin generar desconfianza? Define el lenguaje visual y de texto para "no estoy seguro, pero...".
- **Estado de error o indisponibilidad**: La IA falla. ¿Cómo mantener la funcionalidad básica de la app cuando el servicio de IA no está disponible? ¿Qué fallback ofreces?
- **Estado de aprendizaje**: En las primeras sesiones, la IA no tiene suficientes datos. ¿Cómo gestionar este período sin que el usuario perciba la experiencia como genérica o rota?

**Bloque 4 — Sistema de diseño para componentes de IA**

Define los componentes reutilizables del design system para funcionalidades de IA:

- Chip de "sugerencia de IA" con variantes (activa, descartable, expandible).
- Tarjeta de "resultado generado por IA" con indicador de origen y acción de feedback.
- Barra de input para chat con IA, con estados (vacío, escribiendo, esperando respuesta, error).
- Componente de "explicación de IA" que muestra por qué se hizo una recomendación.

Para cada componente, describe las especificaciones visuales, los estados de interacción, las consideraciones de accesibilidad y el comportamiento en modo oscuro.

**Entregable**: Guía de diseño de 10 páginas con principios, patrones, componentes y directrices de implementación para el equipo de desarrollo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar un sistema de UX adaptativa para apps móviles con IA, incluyendo patrones de interacción, estados de la IA y componentes del design system.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Demo y pitch de app móvil con IA para cierres de venta enterprise',
                'description'       => 'Estructura demostraciones de aplicaciones móviles con IA que convierten a decisores corporativos, con narrativa de ROI, manejo de objeciones técnicas y secuencia de cierre adaptada a cada stakeholder.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de preventas y consultor de ventas enterprise especializado en soluciones de software móvil con inteligencia artificial. Tu encargo es ayudarme a estructurar demostraciones de producto y presentaciones de cierre para vender una aplicación móvil con funcionalidades de IA a empresas de tamaño mediano y grande.

**Datos del producto y la oportunidad:**
- Nombre y descripción de la app: [DESCRIPCIÓN]
- Funcionalidades de IA principales: [LISTA]
- Empresa objetivo: [SECTOR, TAMAÑO, GEOGRAFÍA]
- Stakeholders en la reunión: [CTO, CMO, CFO, CEO, DIRECTOR DE OPERACIONES, USUARIO FINAL]
- Fase del proceso de venta: [PRIMERA DEMO, DEMO TÉCNICA, PRESENTACIÓN FINAL, NEGOCIACIÓN]
- Competidores en la evaluación: [SI LOS CONOCES]

**Bloque 1 — Estructura de la demostración**

Diseña el guion de una demostración de 45 minutos:

- **Apertura (5 minutos)**: ¿Cómo comenzar con el problema del cliente, no con el producto? Propón tres aperturas distintas adaptadas a si el stakeholder principal es técnico, de negocio o usuario final.
- **Demostración del producto (25 minutos)**: ¿En qué orden mostrar las funcionalidades para crear un arco narrativo convincente? Las funcionalidades de IA deben "sorprender" al espectador en el momento correcto. Define el orden y el guion verbal para cada pantalla.
- **Caso de uso del cliente (10 minutos)**: ¿Cómo personalizar la demo usando datos o escenarios del propio cliente? Proporciona una checklist de información que debes recopilar antes de la demo para personalizarla.
- **Cierre y próximos pasos (5 minutos)**: ¿Cómo terminar la demo con momentum? Evita el clásico "¿preguntas?" Propón tres cierres de demo diferentes según el nivel de interés percibido.

**Bloque 2 — Presentación de ROI para decisores financieros**

El CFO y el CEO necesitan números, no features. Crea:

- **Calculadora de ROI simplificada**: Una tabla con las variables clave (horas ahorradas por empleado, reducción de errores, aumento de conversión) y cómo llenarla con datos del cliente.
- **Comparativa de coste total de propiedad**: Cómo presentar el precio de la app vs. el coste de la solución actual (incluyendo tiempo, errores y oportunidades perdidas).
- **Timeline de retorno**: ¿En cuántos meses recupera la inversión el cliente? Define cómo calcularlo con datos conservadores, medios y optimistas.

**Bloque 3 — Manejo de objeciones técnicas sobre la IA**

Los compradores técnicos tienen objeciones específicas sobre funcionalidades de IA. Prepara respuestas para:

- "¿Cómo garantizáis la precisión de la IA? ¿Qué pasa cuando se equivoca?"
- "¿Dónde se procesan nuestros datos? ¿Cumple con el GDPR?"
- "¿Cómo se integra con nuestros sistemas actuales (ERP, CRM, SSO)?"
- "¿Qué pasa si el proveedor de IA (OpenAI, Anthropic) cambia precios o cierra?"
- "¿Pueden nuestro equipo de IT auditar el modelo o la lógica de IA?"

Para cada objeción, proporciona una respuesta de dos a tres frases que neutralice la preocupación y la convierta en una conversación sobre valor.

**Bloque 4 — Secuencia de cierre post-demo**

El cierre comienza después de la demo, no durante. Define:

- Email de seguimiento (enviado en las dos horas posteriores a la demo): resumen de lo visto, puntos de acuerdo, próximos pasos y propuesta de fecha para siguiente reunión.
- Propuesta de piloto limitado: ¿cómo estructurar un piloto de 30-60 días que reduzca el riesgo percibido y acelere la decisión?
- Secuencia de nurturing para el caso de que la decisión se alargue: qué contenido enviar en semanas 2, 4 y 8 para mantener el interés sin presionar.

Adapta todo el contenido al tipo de app y al perfil del comprador que me describas. La demo debe sentirse como una conversación, no como un monólogo comercial.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Estructurar demos y presentaciones de cierre de apps móviles con IA para clientes enterprise, con narrativa de ROI y manejo de objeciones técnicas.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Roadmap de producto para app móvil con funcionalidades de IA',
                'description'       => 'Define y prioriza el roadmap de producto de una aplicación móvil integrando capacidades de IA, con framework de decisión, criterios de priorización y comunicación a stakeholders.',
                'prompt_content'    => <<<'EOT'
Eres un product manager especializado en aplicaciones móviles con inteligencia artificial integrada. Tu encargo es ayudarme a construir y comunicar el roadmap de producto de una app móvil que incorpora funcionalidades de IA, balanceando las demandas de usuarios, negocio y capacidades técnicas disponibles.

**Contexto del producto:**
[NOMBRE DE LA APP, ETAPA (pre-lanzamiento, lanzamiento, crecimiento, madurez), MÉTRICAS ACTUALES, EQUIPO (ingenieros, diseñadores, data scientists), PLATAFORMAS]

**Bloque 1 — Framework de decisión para features de IA**

No todas las funcionalidades de IA merecen estar en el roadmap. Define el proceso de evaluación:

1. **Criterios de inclusión de una feature de IA**: ¿Resuelve un problema real del usuario que no se puede resolver con lógica determinista? ¿Los datos disponibles son suficientes para que el modelo funcione bien? ¿El beneficio justifica la latencia y el coste adicional que añade la IA?

2. **Matriz de priorización específica para IA**: Adapta el framework RICE (Reach, Impact, Confidence, Effort) para features de IA, añadiendo dos dimensiones nuevas: Data Readiness (¿tenemos los datos de entrenamiento o feedback necesarios?) y AI Risk (¿qué tan grave es un error del modelo para el usuario?).

3. **Feature vs. experimento vs. producto**: Clasifica cada funcionalidad de IA candidata en una de estas tres categorías y define qué criterio de éxito determina si pasa de experimento a feature oficial.

**Bloque 2 — Roadmap de IA en tres horizontes**

Construye el roadmap en tres horizontes temporales:

- **Horizonte 1 (0-3 meses) — Fundamentos**: Features de IA de bajo riesgo y alta utilidad que se construyen sobre APIs existentes (Claude, OpenAI, etc.) sin necesidad de datos propios de entrenamiento. Define tres features concretas para este horizonte con su descripción, métrica de éxito y dependencias técnicas.

- **Horizonte 2 (3-9 meses) — Diferenciación**: Features de IA que usan datos propios del producto para personalizar la experiencia. Requieren instrumentación de datos, pipelines de ML y mayor inversión. Define dos features con su justificación de negocio y los prerequisitos técnicos que deben estar listos.

- **Horizonte 3 (9-18 meses) — Innovación**: Apuestas estratégicas de IA que pueden cambiar el modelo de negocio o crear ventajas competitivas sostenibles. Define una apuesta grande con su tesis de producto y los riesgos principales que debes validar antes de invertir.

**Bloque 3 — Gestión de la deuda técnica de IA**

Las features de IA crean tipos específicos de deuda técnica que los PMs deben gestionar:

- **Degradación del modelo**: ¿Con qué frecuencia reentrenar o reevaluar los modelos? Define un calendario de revisión y los disparadores que activan una revisión urgente (caída en métricas de calidad, cambio de comportamiento de usuarios).
- **Evolución de proveedores de IA**: ¿Cómo gestionar el roadmap cuando los proveedores de modelos (Claude, GPT) lanzan nuevas versiones? Define el proceso de evaluación de nuevos modelos y migración.
- **Datos de feedback del usuario**: Las features de IA necesitan feedback para mejorar. ¿Cómo diseñar el mecanismo de feedback en el producto (thumbs up/down, reportes, comportamiento implícito) y cómo esos datos alimentan las iteraciones?

**Bloque 4 — Comunicación del roadmap a stakeholders**

El roadmap de IA es difícil de comunicar porque las estimaciones son más inciertas:

- **Para inversores y dirección**: Una narrativa de una página que conecte las apuestas de IA con la visión de producto y las métricas de negocio a largo plazo. Sin tecnicismos; con resultados esperados.
- **Para el equipo de ingeniería**: Especificaciones técnicas de cada feature de IA: inputs y outputs del modelo, criterios de aceptación medibles, plan de testing y criterios de rollout.
- **Para ventas y marketing**: Qué features de IA se pueden comunicar externamente y cuándo, con el lenguaje correcto para cada audiencia (usuarios vs. compradores enterprise vs. prensa).

Proporciona una plantilla de documento de roadmap lista para completar con los datos de mi producto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir y comunicar el roadmap de producto de una app móvil con IA en tres horizontes, con framework de priorización y gestión de deuda técnica.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Política de uso de IA en el trabajo para equipos de recursos humanos',
                'description'       => 'Redacta una política corporativa completa de uso de inteligencia artificial por parte de los empleados, con directrices éticas, límites de uso, formación y proceso de actualización continua.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en derecho laboral digital, políticas de empresa y gestión del cambio tecnológico. Tu encargo es ayudarme a redactar una política corporativa de uso de herramientas de inteligencia artificial por parte de los empleados, equilibrando la habilitación de la productividad con la gestión de riesgos legales, éticos y de seguridad.

**Contexto de la empresa:**
[SECTOR, TAMAÑO, GEOGRAFÍAS DONDE OPERA, TIPOS DE DATOS QUE MANEJAN LOS EMPLEADOS, HERRAMIENTAS DE IA YA EN USO O CONSIDERADAS]

**Sección 1 — Objetivo y ámbito de aplicación**

Redacta la introducción de la política que incluya:
- Por qué la empresa adopta esta política ahora: el contexto de proliferación de herramientas de IA y la necesidad de un marco claro.
- A quién aplica: empleados, contratistas, freelancers, consultores con acceso a sistemas de la empresa.
- Qué herramientas cubre: herramientas de IA generativa (ChatGPT, Claude, Gemini, Copilot), IA embebida en software existente (suite de Microsoft, Google Workspace, Salesforce Einstein) y cualquier uso futuro.
- Principios rectores: productividad responsable, confidencialidad, veracidad, equidad y cumplimiento legal.

**Sección 2 — Usos permitidos y usos prohibidos**

Define con claridad los dos lados:

**Usos permitidos** (proporciona ejemplos concretos por departamento):
- Marketing: generación de borradores de contenido, investigación de mercado, análisis de datos de campañas.
- Desarrollo: autocompletado de código, revisión de código, documentación técnica.
- RRHH: análisis de descripciones de puestos, redacción de comunicados internos, formación.
- Legal: resumen de documentos, investigación inicial (siempre con revisión humana).
- Finanzas: análisis de datos, generación de informes, modelado de escenarios.

**Usos prohibidos** (con la justificación legal o ética de cada prohibición):
- Introducir datos personales de clientes o empleados en herramientas de IA externas.
- Usar IA para tomar decisiones que afectan a personas sin supervisión humana.
- Publicar contenido generado por IA sin revisión y sin revelar su origen cuando sea relevante.
- Usar IA para eludir procesos de compliance, auditoría o aprobación.
- Usos discriminatorios en procesos de selección, evaluación o promoción.

**Sección 3 — Seguridad y confidencialidad**

Define las reglas de manejo de información:
- Clasificación de información que no puede introducirse en IA externa: datos personales (GDPR), secretos comerciales, información financiera no publicada, datos de clientes sujetos a NDA.
- Diferencia entre herramientas aprobadas (con acuerdo de procesamiento de datos) y no aprobadas.
- Proceso para solicitar la aprobación de una nueva herramienta de IA: formulario, criterios de evaluación, responsable de decisión y plazo de respuesta.

**Sección 4 — Veracidad y responsabilidad**

La IA comete errores con confianza. Define:
- Obligación de verificar cualquier dato, estadística, cita legal o dato técnico generado por IA antes de usarlo en documentos oficiales, comunicaciones externas o decisiones.
- Proceso de revisión mínimo por tipo de documento: para documentos internos vs. externos vs. documentos con implicaciones legales.
- Transparencia: ¿cuándo debe el empleado revelar que usó IA? Define las situaciones que lo requieren.

**Sección 5 — Formación, actualización y sanciones**

Define el programa de soporte:
- Formación inicial obligatoria: contenidos mínimos, duración y forma de acreditación.
- Proceso de actualización de la política: dado que la IA evoluciona rápidamente, ¿con qué frecuencia se revisa? ¿Quién la revisa?
- Consecuencias del incumplimiento: proceso disciplinario gradual (advertencia, plan de mejora, despido) según gravedad.

Redacta la política en un lenguaje claro, sin jerga legal innecesaria, con ejemplos prácticos en cada sección. El objetivo es que cualquier empleado la entienda y la siga, no que quede archivada.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Redactar una política corporativa de uso de herramientas de IA por empleados, con usos permitidos, prohibidos, seguridad y proceso de actualización.',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelos de monetización para apps móviles con IA: análisis financiero',
                'description'       => 'Evalúa y diseña el modelo de monetización óptimo para una aplicación móvil con funcionalidades de IA, analizando costes de infraestructura, pricing estratégico y proyecciones de rentabilidad.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero especializado en modelos de negocio de aplicaciones móviles y economía de la inteligencia artificial. Tu encargo es ayudarme a diseñar y evaluar el modelo de monetización de una app móvil que utiliza IA como funcionalidad central, considerando los costes específicos de la IA y los modelos de pricing que mejor capturan el valor generado.

**Datos de la aplicación:**
[DESCRIPCIÓN DE LA APP, FUNCIONALIDADES DE IA, MÉTRICAS ACTUALES O ESTIMADAS: descargas, usuarios activos, retención, NPS]

**Bloque 1 — Estructura de costes de una app con IA**

Antes de definir el precio, entiende los costes:

1. **Costes de infraestructura de IA**: Detalla la estructura de costes variables de una app con IA en sus componentes principales:
   - Coste de llamadas a API de LLMs (tokens de entrada y salida por usuario activo mensual).
   - Coste de hosting y cómputo para modelos propios si los hay.
   - Coste de almacenamiento de datos de usuario y vectores de embeddings.
   - Coste de herramientas de monitorización y observabilidad de IA.

2. **Cálculo del coste por usuario activo (CPU)**: Con los datos de uso que me proporciones, calcula el coste mensual por usuario activo en diferentes escenarios de uso (ligero, medio, intensivo). Este número es crítico para definir el precio mínimo viable.

3. **Economías de escala de la IA**: ¿Cómo evolucionan los costes de IA al escalar de 1.000 a 100.000 usuarios? ¿Qué optimizaciones de coste (caching, fine-tuning, modelos propios) se vuelven viables a qué escala?

**Bloque 2 — Modelos de monetización y su viabilidad**

Analiza los principales modelos para apps con IA:

- **Freemium con límite de uso de IA**: Usuarios gratuitos tienen X llamadas o tokens de IA al mes; usuarios de pago tienen acceso ilimitado o expandido. ¿Cuál es el límite óptimo para convertir sin alienar?
- **Suscripción escalonada (tiers)**: Define tres niveles (Básico, Pro, Business) con funcionalidades de IA diferenciadas. ¿Qué features de IA son el "gancho" de cada tier? ¿Cómo evitar que el tier gratuito canibalice el de pago?
- **Precio por consumo (pay-as-you-go)**: Cobrar directamente por créditos de IA usados. ¿Cuándo tiene sentido? ¿Qué tipo de usuario prefiere este modelo?
- **Precio por resultado o éxito**: Si la IA genera un resultado medible (texto aprobado, código ejecutado, conversión lograda), cobrar por ese resultado. ¿Es viable técnica y legalmente?
- **B2B con asientos o licencias enterprise**: Precio por usuario para equipos corporativos, con SLA y soporte incluido. ¿Cómo diferencia el modelo enterprise del consumer?

**Bloque 3 — Proyecciones financieras a 24 meses**

Construye un modelo financiero simplificado:

- **Escenario base**: Supuestos de conversión freemium a pago, ARPU (ingreso medio por usuario de pago), churn mensual, crecimiento de usuarios activos. Proyecta ingresos, costes de IA y margen bruto mes a mes.
- **Escenario optimista y pesimista**: ¿Qué supuestos cambias? ¿Cuál es el impacto en el tiempo para alcanzar rentabilidad?
- **Punto de equilibrio (break-even)**: ¿A cuántos usuarios de pago se alcanza el break-even considerando costes fijos (equipo, infraestructura no-IA, marketing) y costes variables de IA?
- **Métricas clave de SaaS adaptadas a apps con IA**: LTV (considerando el coste de servir al usuario con IA), LTV/CAC, payback period y net revenue retention.

**Bloque 4 — Estrategia de pricing ante la caída de costes de IA**

Los costes de los LLMs caen históricamente un 80% cada año. Define:
- ¿Cómo construir el pricing hoy anticipando que los costes de IA bajarán? ¿Trasladar la bajada al usuario o retener el margen para financiar el equipo?
- ¿Cómo diferenciarte cuando los costes de IA sean tan bajos que cualquiera pueda construir funcionalidades similares? ¿Qué elementos de valor no se comoditizan?

Proporciona el modelo financiero en formato de tabla para que pueda adaptarlo con mis propios datos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Diseñar y evaluar modelos de monetización para apps móviles con IA, con análisis de costes, proyecciones financieras y estrategia de pricing ante la caída de costes.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco legal para apps móviles con IA: privacidad, sesgos y responsabilidad',
                'description'       => 'Identifica y gestiona los riesgos legales de las funcionalidades de IA en aplicaciones móviles: GDPR, AI Act europeo, discriminación algorítmica, responsabilidad civil y términos de servicio.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en derecho digital, privacidad de datos y regulación de inteligencia artificial. Tu encargo es ayudarme a identificar y gestionar los riesgos legales de integrar funcionalidades de IA en una aplicación móvil, con especial atención a la regulación europea y las mejores prácticas internacionales.

**Datos de la aplicación:**
[DESCRIPCIÓN DE LA APP, FUNCIONALIDADES DE IA ESPECÍFICAS, PAÍSES DE OPERACIÓN, TIPO DE USUARIOS (consumidores o empresas), DATOS PERSONALES QUE PROCESA]

**Bloque 1 — GDPR y privacidad de datos en apps con IA**

Analiza los requisitos específicos del GDPR para las funcionalidades de IA:

1. **Base legal para el procesamiento**: Para cada funcionalidad de IA, identifica la base legal que justifica el procesamiento de datos personales: consentimiento, ejecución de contrato, interés legítimo o cumplimiento de obligación legal. ¿Cuál es más sólida para cada caso?

2. **Explicabilidad de decisiones automatizadas**: El artículo 22 del GDPR limita las decisiones completamente automatizadas que afectan significativamente a las personas. ¿Tus funcionalidades de IA caen bajo este ámbito? ¿Qué mecanismos de revisión humana debes implementar?

3. **Evaluación de impacto en protección de datos (DPIA)**: ¿Cuándo es obligatorio realizar una DPIA para funcionalidades de IA? Proporciona un checklist de las preguntas que la DPIA debe responder y los criterios que determinan si el riesgo es aceptable.

4. **Transferencia internacional de datos**: Si usas APIs de IA externas (OpenAI, Anthropic, Google) que procesan datos en servidores fuera del EEE, ¿qué mecanismos de transferencia (Cláusulas Contractuales Tipo, etc.) necesitas implementar? ¿Cómo afecta esto a tu DPA con el proveedor?

**Bloque 2 — Reglamento Europeo de IA (AI Act)**

El AI Act clasifica los sistemas de IA por nivel de riesgo. Analiza tu app:

- **Clasificación de riesgo**: ¿Tu sistema de IA es de riesgo inaceptable (prohibido), alto riesgo, riesgo limitado o riesgo mínimo? Proporciona el análisis paso a paso basándote en el sector y las funcionalidades.
- **Obligaciones para sistemas de alto riesgo**: Si tu app cae en esta categoría (por ejemplo, apps de salud con diagnóstico, apps de RRHH con selección de personal, apps financieras con scoring crediticio), ¿qué requisitos técnicos y de documentación debes cumplir?
- **Transparencia obligatoria**: El AI Act requiere informar al usuario cuando interactúa con IA en ciertos contextos. ¿Qué información debes revelar y cómo?
- **Plazos de cumplimiento**: El AI Act tiene diferentes plazos de entrada en vigor por categoría de riesgo. Define el calendario relevante para tu app.

**Bloque 3 — Discriminación algorítmica y sesgo**

Los modelos de IA pueden perpetuar o amplificar discriminación. Define tu estrategia de mitigación:

- ¿Cuáles son las categorías protegidas relevantes en tu contexto (género, edad, etnia, discapacidad, orientación sexual)?
- ¿Cómo auditas regularmente los outputs de tu sistema de IA para detectar sesgos? ¿Con qué métricas de equidad?
- ¿Cuál es tu proceso de remediación cuando se detecta un sesgo en producción?
- ¿Qué documentación mantener para demostrar due diligence en caso de demanda?

**Bloque 4 — Responsabilidad civil y términos de servicio**

Define el marco contractual que proteja a la empresa:

- **Términos de servicio**: ¿Qué cláusulas específicas necesitas para las funcionalidades de IA? Incluye: limitación de responsabilidad por outputs incorrectos, prohibición de uso para decisiones de alto impacto sin revisión humana, reserva de derecho a modificar o eliminar funcionalidades de IA.
- **Responsabilidad en la cadena de IA**: Si usas un modelo de tercero (Claude, GPT) y ese modelo produce un output dañino, ¿quién es responsable? Analiza la cadena de responsabilidad y cómo tus términos con el proveedor de IA deben reflejarla.
- **Seguro de responsabilidad civil por IA**: ¿Existe? ¿Qué coberturas buscar? ¿Qué documentación exigen las aseguradoras?

Proporciona una lista de verificación legal con los 20 puntos que toda app con IA debe revisar antes de lanzarse al mercado europeo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Identificar y gestionar los riesgos legales de funcionalidades de IA en apps móviles: GDPR, AI Act europeo, discriminación algorítmica y responsabilidad civil.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte técnico automatizado con IA para aplicaciones móviles',
                'description'       => 'Diseña un sistema de soporte técnico inteligente para apps móviles que resuelva el 70% de las incidencias automáticamente, escale las complejas y aprenda de cada interacción.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en experiencia del cliente y arquitectura de sistemas de soporte técnico para aplicaciones móviles. Tu encargo es ayudarme a diseñar e implementar un sistema de soporte técnico inteligente basado en IA que resuelva automáticamente la mayoría de las incidencias, ofrezca una experiencia de usuario excelente y reduzca la carga del equipo humano de soporte.

**Contexto de la app y el equipo de soporte:**
[DESCRIPCIÓN DE LA APP, VOLUMEN DE INCIDENCIAS MENSUALES, TIPOS DE PROBLEMAS MÁS FRECUENTES, EQUIPO ACTUAL DE SOPORTE, CANALES DE SOPORTE EXISTENTES]

**Bloque 1 — Taxonomía de incidencias y automatización**

Antes de automatizar, clasifica el problema:

1. **Categorías de incidencias**: Define las categorías de problemas más frecuentes en apps móviles (problemas de login, fallos de sincronización, problemas de pago, bugs específicos de dispositivo, preguntas sobre funcionalidades, solicitudes de reembolso) y, para cada categoría, evalúa el potencial de automatización: ¿puede resolverse sin intervención humana? ¿Con qué probabilidad?

2. **Árbol de decisión de triaje**: Diseña el flujo de triaje automático que, en los primeros dos intercambios con el usuario, determina la categoría del problema y la ruta de resolución (auto-resolución, base de conocimiento, escalada técnica, escalada de negocio).

3. **Señales de complejidad**: ¿Cuáles son las señales que indican que una incidencia necesita atención humana inmediata? (tono emocional negativo, palabras clave de riesgo legal, problemas de seguridad, usuarios VIP o de alto valor, incidencias repetidas del mismo usuario).

**Bloque 2 — Diseño del agente de soporte con IA**

Define la arquitectura del sistema conversacional:

- **Personalidad y tono del agente**: Define el nombre, el tono (amigable pero eficiente, técnico pero accesible), y las reglas de comunicación del agente (longitud de respuestas, uso de emojis, forma de pedir información adicional).
- **Base de conocimiento**: ¿Cómo estructurar la base de conocimiento que alimenta al agente? Define los tipos de documentos (preguntas frecuentes, guías de resolución paso a paso, changelog de versiones, códigos de error conocidos) y el proceso de mantenimiento.
- **Acceso a datos del usuario**: El agente debe poder consultar datos del usuario para personalizar la respuesta (versión de la app instalada, dispositivo, historial de incidencias, estado de suscripción). Define qué datos debe acceder y cómo de forma segura.
- **Manejo de frustracion del usuario**: ¿Cómo detectar y responder cuando el usuario está frustrado o furioso? Proporciona ejemplos de respuestas para cuando el agente ha fallado en resolver el problema en el primer intento.

**Bloque 3 — Flujos de resolución automatizada**

Diseña los flujos completos para los cinco problemas más frecuentes:

Para cada flujo, define: saludo y reconocimiento del problema, preguntas de diagnóstico (máximo tres), acción de resolución automática si es posible (reiniciar sesión, limpiar caché, reenviar email de verificación), verificación de que el problema se resolvió y cierre de incidencia.

- Flujo 1: Usuario no puede iniciar sesión.
- Flujo 2: Pago procesado pero suscripción no activada.
- Flujo 3: La app se cierra inesperadamente (crash).
- Flujo 4: Solicitud de reembolso.
- Flujo 5: Problema específico de la funcionalidad de IA (respuesta incorrecta, comportamiento inesperado del modelo).

**Bloque 4 — Escalada y mejora continua**

Define el sistema de escalada humana y el aprendizaje:

- **Protocolo de escalada**: ¿Cuándo y cómo escala el agente a un humano? Define el mensaje de transición que no genere frustración adicional, la información que debe traspasar al agente humano y el SLA de respuesta humana según prioridad.
- **Métricas del sistema de soporte con IA**: Define los KPIs específicos: tasa de auto-resolución, CSAT del soporte con IA vs. humano, tiempo hasta resolución, tasa de escalada, temas sin resolver que aparecen repetidamente.
- **Ciclo de mejora**: ¿Cómo revisar semanalmente los casos mal resueltos por la IA para mejorar la base de conocimiento y el comportamiento del agente?

Proporciona el guion completo de conversación para el flujo de problema de login con todos los estados posibles.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar un sistema de soporte técnico con IA para apps móviles, con triaje automático, flujos de resolución y escalada a soporte humano.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Desarrollo de apps móviles con IA para freelancers: de la idea al cliente',
                'description'       => 'Guía completa para freelancers que quieren especializarse en desarrollo de apps móviles con IA: propuesta de valor, captación de clientes, estimación de proyectos y entrega de valor.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de negocios para desarrolladores freelance especializados en tecnología móvil e inteligencia artificial. Tu encargo es ayudarme a construir un negocio rentable como freelancer especializado en el desarrollo de aplicaciones móviles con funcionalidades de IA, desde la definición de mi propuesta de valor hasta la entrega y fidelización de clientes.

**Mi perfil actual:**
[AÑOS DE EXPERIENCIA EN DESARROLLO MÓVIL, PLATAFORMAS DOMINADAS (iOS/Android/React Native/Flutter), EXPERIENCIA CON IA (básica/intermedia/avanzada), MERCADOS DONDE QUIERO TRABAJAR]

**Bloque 1 — Posicionamiento y propuesta de valor**

Define mi especialización dentro del nicho de apps móviles con IA:

1. **Elección de nicho de especialización**: El mercado de apps móviles con IA es amplio. Propón tres nichos de especialización viables con alta demanda y competencia manejable. Para cada nicho, describe: tipo de clientes típicos, ticket medio de proyecto, complejidad técnica, competidores principales y cómo diferenciarse.

2. **Propuesta de valor única**: Ayúdame a construir una propuesta de valor que combine mis habilidades técnicas con el impacto de negocio que genero. La propuesta no puede ser "desarrollo apps móviles con IA": debe ser específica sobre el tipo de cliente, el problema que resuelvo y el resultado que entrego.

3. **Posicionamiento en el mercado**: ¿Compito en precio o en valor? Define el posicionamiento de tarifa (por hora vs. por proyecto vs. por resultado) y el rango de tarifas justificado para mi nivel de especialización en el mercado objetivo.

**Bloque 2 — Captación de clientes**

Define la estrategia de adquisición de proyectos:

- **Perfil de LinkedIn optimizado para el nicho**: Los elementos clave del perfil que hacen que clientes potenciales me encuentren: titular, extracto, featured section, experiencias redactadas con resultados, skills y recomendaciones estratégicas.
- **Outreach directo**: Plantilla de mensaje personalizado para contactar a directores de producto, CTOs o founders de empresas que podrían necesitar mis servicios. Máximo 100 palabras, con gancho específico para cada tipo de empresa.
- **Plataformas de freelance**: ¿En cuáles tiene sentido estar para apps móviles con IA? (Toptal, Upwork, Contra, YC co-founder matching, etc.). Define la estrategia de perfil y de propuesta para las dos plataformas más adecuadas.
- **Contenido de autoridad**: Plan de publicación mensual de cuatro posts de LinkedIn que demuestren expertise: tipo de contenido (caso de estudio, opinión técnica, tutorial, reflexión de negocio), estructura de cada uno y objetivo de cada post.

**Bloque 3 — Estimación y propuesta de proyectos**

La estimación de proyectos con IA es más compleja que los proyectos convencionales:

- **Framework de descubrimiento antes de estimar**: Lista de preguntas que debo hacer al cliente antes de dar cualquier número. Incluye preguntas técnicas (stack, integraciones, APIs de IA a usar), de negocio (métricas de éxito, usuarios esperados, presupuesto orientativo) y de proceso (equipo del cliente, metodología, nivel de disponibilidad).
- **Plantilla de propuesta para app móvil con IA**: Estructura de una propuesta de seis páginas que incluya: comprensión del problema, solución propuesta con arquitectura de IA, fases y entregables, equipo, presupuesto por fase y condiciones.
- **Gestión de la incertidumbre de la IA**: ¿Cómo estimar proyectos donde el comportamiento del componente de IA no está completamente definido? Define cómo incorporar buffers de incertidumbre y cómo comunicarlos al cliente sin generar desconfianza.

**Bloque 4 — Entrega y fidelización**

La excelencia en la entrega es tu mejor argumento de venta:

- **Proceso de entrega que diferencia**: Define los hitos, documentación y comunicación proactiva que hacen que el cliente sienta que está en buenas manos durante todo el proyecto.
- **Demostración del valor de la IA**: ¿Cómo mostrar al cliente el impacto de las funcionalidades de IA una vez en producción? Define las métricas que debes preparar para el informe de cierre del proyecto.
- **Upselling y retención**: ¿Qué servicios de continuidad ofrecer tras el proyecto (mantenimiento del modelo de IA, optimización, nuevas features)? Define la propuesta de retainer mensual y cómo presentarla al finalizar el proyecto.

Proporciona plantillas listas para usar para la propuesta, el outreach de LinkedIn y el contrato simplificado adaptado a proyectos de apps móviles con IA.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir un negocio freelance especializado en apps móviles con IA: posicionamiento, captación de clientes, estimación de proyectos y fidelización.',
                'vote_score'        => 55,
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
