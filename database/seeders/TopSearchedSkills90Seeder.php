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
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Marketing con IA generativa',
                'description'      => 'Usa Claude, ChatGPT y Midjourney para escalar la producción de contenido sin perder la voz de marca ni la estrategia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de contenido senior especializado en marketing con inteligencia artificial generativa. Tu objetivo es ayudarme a construir un sistema de producción de contenido escalable que mantenga la coherencia de marca y la calidad estratégica en todos los canales.

## Contexto de mi marca

Antes de generar nada, necesito que interiorices estos parámetros de marca:
- Nombre de la empresa: [EMPRESA]
- Sector / categoría: [SECTOR]
- Público objetivo: [AUDIENCIA]
- Tono de voz: [ej. cercano pero profesional / directo y sin rodeos / experto y didáctico]
- Tres palabras que definen la personalidad de marca: [PALABRA1], [PALABRA2], [PALABRA3]
- Lo que nunca haríamos: [RESTRICCIONES DE TONO O CONTENIDO]
- Ejemplos de copy que nos representan bien: [EJEMPLO1] / [EJEMPLO2]

Con estos parámetros como filtro permanente, ayúdame en las siguientes áreas:

---

## 1. Sistema de prompts por canal

Genera una biblioteca de prompts maestros para cada canal, que cualquier miembro del equipo pueda usar sin conocimientos técnicos de IA:

**Blog / SEO**
- Prompt para brief de artículo: incluye ángulo diferencial, estructura H2/H3, palabras clave primaria y secundarias, CTA y meta description.
- Prompt para expandir sección: toma un H2 y desarrolla 300 palabras con ejemplos concretos y datos.

**LinkedIn (empresa y personal)**
- Prompt para post de liderazgo de pensamiento basado en una noticia del sector.
- Prompt para post de caso de éxito de cliente en formato "antes / proceso / resultado".

**Email marketing**
- Prompt para secuencia de bienvenida de 5 emails (día 0, 1, 3, 7, 14) con objetivos claros por email.
- Prompt para newsletter semanal que no parezca IA: estructura, ganchos y cierre.

**Redes sociales (Instagram, X/Twitter)**
- Prompt para adaptar un artículo largo en 5 posts de redes con formatos distintos.
- Prompt para generación de hooks virales a partir de un titular aburrido.

---

## 2. Flujo de trabajo humano + IA

Diseña el proceso exacto para un equipo de 2-3 personas que quiere publicar 20 piezas de contenido al mes usando IA:

1. **Ideación**: cómo usar IA para generar 50 ideas de contenido alineadas con el calendario editorial y los objetivos de negocio.
2. **Producción**: qué hace la IA y qué hace el humano en cada tipo de pieza.
3. **Revisión de marca**: checklist de 10 puntos para verificar que el copy final suena a nosotros, no a ChatGPT.
4. **Distribución**: cómo adaptar una pieza madre a 6 formatos en menos de 30 minutos.

---

## 3. Integración de imagen con texto

Explica cómo coordinar Midjourney (o Adobe Firefly / DALL-E 3) con el copy generado para que la imagen y el texto cuenten la misma historia:

- Cómo traducir el brief de copy en un prompt de imagen efectivo.
- Guía de estilo visual para prompts: paleta, composición, estilo fotográfico o ilustrativo.
- Errores más comunes al combinar IA de texto e imagen y cómo evitarlos.

---

## 4. Métricas para medir el impacto real

Define los KPIs que me permiten saber si la producción con IA está funcionando:
- Velocidad de producción (piezas por hora-persona antes vs. después).
- Tasa de edición humana: qué porcentaje del copy generado se publica sin cambios significativos.
- Performance de contenido IA vs. contenido 100% humano: CTR, tiempo en página, conversiones.

---

## 5. Guardrails para no caer en la trampa del contenido genérico

Lista los 7 signos de que tu contenido IA se ha vuelto genérico e ineficaz, y propón un prompt de "test de autenticidad" que evalúe cualquier pieza antes de publicarla.

---

Empieza por pedirme los parámetros de marca que faltan. Una vez los tengas todos, genera primero el sistema de prompts por canal y luego pregunta por cuál flujo de trabajo quieres continuar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Escalar la producción de contenido de marketing manteniendo la voz y la estrategia de marca.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'LLMs en el flujo de desarrollo',
                'description'      => 'Integra IA en code review, debugging, refactoring y documentación: el workflow del developer 10x en 2025.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior software engineer con experiencia en integrar LLMs en flujos de desarrollo reales. No me des consejos genéricos: ayúdame a construir un workflow concreto y repetible que pueda adoptar esta semana.

## Mi stack y contexto

- Lenguaje principal: [LENGUAJE]
- Framework: [FRAMEWORK]
- Tamaño del codebase: [pequeño / mediano / grande — nº de ficheros aprox.]
- Trabajo: [solo / en equipo de N personas]
- Editor: [VS Code / JetBrains / Neovim / otro]
- Dónde tengo más fricción ahora mismo: [ÁREA: debugging / code review / documentación / tests / refactoring]

---

## 1. Code review asistido por IA

Crea un prompt de code review que pueda pegar junto con un diff y obtener:
- Bugs potenciales con nivel de severidad (crítico / medio / menor).
- Violaciones de principios SOLID, DRY o convenciones del proyecto.
- Sugerencias de simplificación con ejemplo de código mejorado.
- Preguntas que haría un revisor senior para entender el contexto antes de aprobar.

El prompt debe ser parametrizable: que yo pueda indicar el tipo de cambio (nueva feature / bugfix / refactor / hotfix) y el nivel de rigor del review.

---

## 2. Debugging sistemático con IA

Diseña un proceso de debugging en 5 pasos que use IA en los momentos correctos (no en todos):

1. Qué información recopilar antes de pegar nada en el chat de IA.
2. Cómo formular el problema para obtener hipótesis útiles, no respuestas genéricas.
3. Cómo validar las hipótesis sin seguir ciegamente lo que sugiere la IA.
4. Cuándo descartar la respuesta de la IA y volver al método clásico.
5. Cómo documentar el bug y la solución para que la IA (y el equipo) aprendan de él.

Incluye un prompt plantilla para debugging que cubra: error, contexto del sistema, comportamiento esperado vs. real, ya intenté X.

---

## 3. Refactoring guiado

Explica cómo usar IA para refactorizar código legado sin romper funcionalidad:
- Prompt para identificar code smells en un módulo dado.
- Proceso para refactorizar en pasos pequeños y verificables.
- Cómo escribir los tests antes del refactor usando IA para generar los casos de prueba.
- Checklist de verificación post-refactor.

---

## 4. Documentación automática de calidad

Genera una estrategia para que la documentación se escriba sola (o casi):
- Prompt para generar JSDoc / PHPDoc / docstrings a partir del código.
- Prompt para escribir el README de un módulo nuevo.
- Prompt para generar el CHANGELOG en formato Keep a Changelog a partir de los commits.
- Cómo integrar esto en el pre-commit hook o la CI.

---

## 5. Generación y mantenimiento de tests

- Prompt para generar unit tests a partir de una función dada.
- Prompt para identificar casos extremos no cubiertos por los tests existentes.
- Cómo usar IA para escribir tests de integración cuando la documentación de la API externa es escasa.

---

## 6. Configuración del entorno

Recomienda la configuración óptima para mi editor y terminal:
- Extensions / plugins de IA que realmente merecen la pena (con criterio honesto).
- Cómo configurar GitHub Copilot o Cursor para que sugiera según las convenciones del proyecto.
- Atajos de teclado y flujos de trabajo para que la IA esté a un keystroke de distancia sin interrumpir el flow.

---

Empieza pidiendo mi stack. Luego dame el workflow completo para el área de mayor fricción que indique, con ejemplos de código reales en mi lenguaje.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un workflow de desarrollo profesional con IA integrada en cada fase del ciclo.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño asistido por IA',
                'description'      => 'Figma AI, Adobe Firefly, Midjourney: integra la IA en el proceso de diseño sin perder el control creativo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design director con experiencia en integrar herramientas de inteligencia artificial en equipos de diseño de producto y comunicación. Tu misión es ayudarme a construir un flujo de trabajo de diseño asistido por IA que sea práctico, repetible y que potencie mi criterio creativo en lugar de reemplazarlo.

## Mi perfil y contexto

- Tipo de diseño principal: [UX/UI de producto / branding / comunicación / motion / todos]
- Herramientas actuales: [Figma / Adobe CC / Sketch / otro]
- Nivel de experiencia con IA generativa: [ninguno / básico / intermedio / avanzado]
- Tipo de proyectos habituales: [apps / webs / identidades de marca / materiales de marketing]
- Principal reto ahora mismo: [velocidad / calidad visual / presentar ideas al cliente / exploración conceptual]

---

## 1. Mapa de herramientas por fase del proceso

Crea un mapa visual (en formato tabla) que relacione cada fase del proceso de diseño con las herramientas de IA más adecuadas y el caso de uso específico:

| Fase | Herramienta IA | Para qué exactamente | Limitación a tener en cuenta |
|------|----------------|----------------------|------------------------------|
| Briefing y research | ... | ... | ... |
| Ideación / moodboard | ... | ... | ... |
| Exploración conceptual | ... | ... | ... |
| Diseño de componentes | ... | ... | ... |
| Generación de assets | ... | ... | ... |
| Prototipado | ... | ... | ... |
| Presentación al cliente | ... | ... | ... |

Rellena la tabla con recomendaciones concretas para Figma AI, Adobe Firefly, Midjourney v6, DALL-E 3 y herramientas emergentes relevantes.

---

## 2. Prompts de Midjourney para diseñadores profesionales

Crea una biblioteca de 10 prompts de Midjourney optimizados para uso profesional, organizados por tipo de output:

**Fotografía de producto**: prompt para mockup de packaging / dispositivo / textil con fondo neutro y luz de estudio.
**Ilustración de marca**: prompt para ilustraciones vectoriales con estilo definido, paleta y coherencia entre piezas.
**Exploración de UI**: prompt para generar pantallas de app que sirvan como punto de partida conceptual.
**Fotografía editorial**: prompt para imágenes de personas en contexto de trabajo / lifestyle que eviten el aspecto "banco de imágenes".
**Texturas y fondos**: prompt para elementos de apoyo en presentaciones y materiales de marca.

Para cada prompt, explica: variables que puedo ajustar, parámetros clave (--ar, --style, --v) y cómo usarlo como punto de partida, no como resultado final.

---

## 3. Figma AI en el día a día

Explica las funcionalidades de Figma AI más útiles para un diseñador profesional:
- Autocompletar y generar variantes de componentes.
- Generar copy de placeholder realista en el idioma correcto.
- Búsqueda semántica en la biblioteca de componentes.
- Cómo usar el generador de layouts para acelerar la exploración.

Y lo más importante: qué NO delegar a Figma AI (decisiones de jerarquía, coherencia de sistema de diseño, accesibilidad).

---

## 4. Mantener el control creativo

Este es el punto más crítico. Explica:
- Cómo establecer un "brief creativo en prompt" que garantice coherencia entre piezas generadas por IA.
- El proceso de selección y edición: por qué la curaduría es la nueva habilidad de diseño.
- Cómo comunicar al cliente qué partes del proceso usan IA sin generar desconfianza.
- Los errores más comunes que delatan el uso de IA (manos, tipografías, simetría falsa) y cómo corregirlos.

---

## 5. Sistema de carpetas y naming para assets de IA

Propón un sistema de organización de archivos para gestionar la producción de assets generados por IA en proyectos de largo plazo:
- Estructura de carpetas.
- Naming convention que incluya la herramienta, la versión del prompt y la fecha.
- Cómo versionar los prompts junto con los diseños.

---

Empieza preguntando mi perfil y contexto. Luego dame el mapa de herramientas y la biblioteca de prompts de Midjourney adaptados a mi tipo de trabajo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integrar herramientas de IA generativa en el proceso de diseño manteniendo el criterio y el control creativo.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Sales enablement con IA',
                'description'      => 'Prepara llamadas, analiza grabaciones y entrena al equipo con herramientas de IA que doblan la tasa de cierre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en implementar programas de sales enablement basados en inteligencia artificial. Tu objetivo es ayudarme a construir un sistema completo que mejore el rendimiento del equipo de ventas en cada fase del ciclo comercial.

## Contexto de mi equipo de ventas

- Tamaño del equipo: [N personas]
- Ciclo de venta: [transaccional < 2 semanas / consultivo 1-3 meses / enterprise > 3 meses]
- Ticket promedio: [IMPORTE]
- Principal canal de venta: [telefónico / videoconferencia / presencial / email / mixto]
- Mayor problema actual: [bajo ratio de cierre / ciclo demasiado largo / falta de pipeline / discurso inconsistente entre comerciales]
- Herramientas actuales: [CRM, plataforma de grabación, etc.]

---

## 1. Preparación de llamadas y reuniones con IA

Crea un prompt de preparación pre-llamada que, a partir de la información del CRM y el perfil de LinkedIn del prospecto, genere:

**Resumen del prospecto**
- Empresa, sector, tamaño, momento de crecimiento actual.
- Posibles dolores basados en el sector y el puesto del interlocutor.
- Noticias recientes de la empresa que puedo usar como gancho de conversación.

**Hipótesis de necesidad**
- Tres hipótesis sobre qué problema está intentando resolver.
- Preguntas de discovery para validar o descartar cada hipótesis.

**Posibles objeciones y respuestas**
- Las 5 objeciones más probables para este perfil.
- Framework de respuesta para cada una: reconocer / reformular / responder / confirmar.

**Cierre recomendado**
- Cuál de nuestros planes o productos encaja mejor con este perfil y por qué.
- La propuesta de siguiente paso más probable que este perfil aceptará.

---

## 2. Análisis de grabaciones de llamadas

Diseña un proceso para analizar grabaciones de llamadas de ventas con IA:

**Prompt de análisis de transcripción**
Toma esta transcripción de una llamada de ventas y analiza:
1. Ratio de escucha: ¿cuánto tiempo habló el vendedor vs. el cliente?
2. Calidad del discovery: ¿se hicieron preguntas abiertas que descubren el dolor real?
3. Manejo de objeciones: ¿se abordaron todas? ¿Cómo se podrían mejorar?
4. Propuesta de valor: ¿quedó clara y conectada al dolor específico del cliente?
5. Siguiente paso: ¿se definió con fecha y responsable?
6. Puntuación global de 1 a 10 y los 3 momentos donde el vendedor podría haber hecho algo diferente.

**Cómo integrarlo en el coaching del equipo**
- Proceso semanal de revisión de llamadas con IA.
- Cómo usar los insights para personalizar el entrenamiento por vendedor.

---

## 3. Generación de materiales de ventas

Prompts para crear materiales de sales enablement de alta calidad:

- **Battle card**: para un competidor específico, genera una tarjeta de comparación honesta que el equipo pueda usar en llamadas.
- **Email de seguimiento post-reunión**: template que resume los puntos clave de la reunión y propone el siguiente paso con urgencia real.
- **Propuesta comercial**: estructura de propuesta para ciclos consultivos que conecta el dolor del cliente con nuestra solución y el ROI esperado.
- **Secuencia de outreach en frío**: 5 touchpoints (email + LinkedIn + llamada) para abrir conversación con un ICP definido.

---

## 4. Entrenamiento y role-play con IA

Crea escenarios de role-play que el equipo puede practicar con Claude:
- Escenario 1: prospecto interesado pero con objeción de precio.
- Escenario 2: prospecto con múltiples stakeholders y proceso de compra complejo.
- Escenario 3: cliente que está mirando a la competencia y está a punto de irse.

Para cada escenario: rol que juega la IA, criterios de evaluación y feedback automático.

---

## 5. Dashboard de métricas de enablement

Define los 8 KPIs que miden si el programa de sales enablement con IA está funcionando:
- Métricas de actividad (llamadas, emails, reuniones).
- Métricas de calidad (puntuación media de llamadas, ratio de objeciones resueltas).
- Métricas de resultado (tasa de conversión por etapa, tiempo del ciclo, ticket promedio).

---

Empieza preguntando el contexto de mi equipo. Luego genera el prompt de preparación de llamadas y el proceso de análisis de grabaciones adaptados a mi ciclo de venta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar un sistema de sales enablement con IA para mejorar la preparación, el entrenamiento y la tasa de cierre del equipo.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product
            [
                'profession_id'    => 5,
                'title'            => 'AI product strategy',
                'description'      => 'Cómo decidir qué funcionalidades de IA añadir, cuándo y en qué orden para no distraer al equipo de lo que importa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product strategist con experiencia en integrar capacidades de inteligencia artificial en productos digitales. No me ayudes a hacer una lista de ideas de features de IA; ayúdame a construir un marco de decisión riguroso para saber cuándo una funcionalidad de IA crea valor real y cuándo es solo ruido tecnológico.

## Contexto del producto

- Nombre del producto / empresa: [PRODUCTO]
- Categoría: [SaaS B2B / marketplace / app de consumo / plataforma / otro]
- Estadio actual: [idea / MVP / PMF / escala]
- Número de usuarios activos: [N]
- Principal problema que resuelve el producto: [PROBLEMA]
- El mayor dolor de los usuarios que aún no está resuelto: [DOLOR]
- Recursos de desarrollo disponibles para los próximos 6 meses: [N engineers]

---

## 1. Marco de decisión: ¿IA o no IA?

Crea un árbol de decisión que me ayude a evaluar si una funcionalidad debería usar IA o si hay una solución más simple, más rápida y más mantenible:

**Preguntas de calificación**
1. ¿El problema requiere procesar lenguaje natural, imágenes o audio? → ¿Sí? IA candidata. ¿No? Busca solución determinista.
2. ¿Los patrones del problema son demasiado complejos para reglas explícitas? → Mismo criterio.
3. ¿La solución mejora con más datos? → ML/IA. ¿No? Algoritmo clásico.
4. ¿El coste de un error es alto? → Añadir humano en el loop. ¿Bajo? IA autónoma con feedback.
5. ¿Tenemos suficientes datos de entrenamiento o podemos usar un modelo de base? → Viabilidad técnica.

**Criterios de priorización**
Para cada feature de IA candidata, puntúa de 1 a 5:
- Impacto en la métrica principal del producto.
- Viabilidad técnica con los recursos actuales.
- Diferenciación respecto a la competencia.
- Riesgo de que la IA falle y dañe la experiencia del usuario.
- Velocidad de iteración: ¿podemos aprender rápido si falla?

---

## 2. Las 5 capas de IA en un producto

Explica las cinco formas distintas en que la IA puede integrarse en un producto, de menor a mayor complejidad, con ejemplos concretos para mi categoría de producto:

1. **IA como búsqueda y filtrado mejorado**: embeddings y búsqueda semántica.
2. **IA como generación de contenido asistida**: el usuario controla, la IA sugiere.
3. **IA como automatización de tareas repetitivas**: la IA ejecuta, el humano revisa.
4. **IA como personalización**: experiencias adaptadas al comportamiento individual.
5. **IA como agente autónomo**: la IA toma decisiones y ejecuta acciones sin supervisión constante.

Para mi producto, ¿en qué capa debería empezar y por qué?

---

## 3. Roadmap de IA en 3 horizontes

Diseña un roadmap estructurado en tres horizontes:

**Horizonte 1 (0-3 meses)**: quick wins con alto impacto y bajo riesgo.
- Qué funcionalidades de IA puedo implementar con APIs existentes (OpenAI, Anthropic, Google).
- Cuáles no requieren datos propios de entrenamiento.
- Cómo medir si funcionan antes de invertir más.

**Horizonte 2 (3-9 meses)**: diferenciación competitiva.
- Funcionalidades que requieren datos propios y modelo fino o RAG.
- Cómo construir el moat de datos desde ya.

**Horizonte 3 (9-18 meses)**: IA como ventaja estructural.
- Cómo la IA puede cambiar el modelo de negocio, no solo el producto.

---

## 4. Gestión del riesgo y la confianza del usuario

Los usuarios desconfían de la IA cuando falla. Diseña la estrategia de gestión del riesgo:
- Cómo comunicar al usuario que una feature usa IA sin crear falsas expectativas.
- Diseño de fallbacks cuando la IA da un resultado malo.
- Cómo recoger feedback sobre outputs de IA de forma sistemática.
- Métricas de calidad de IA (precisión, recall, satisfacción del usuario con el resultado).

---

## 5. Anti-patrones a evitar

Lista los 7 errores más comunes que cometen los product managers al añadir IA a un producto:
1. Añadir IA a un problema que ya tiene solución más simple.
2. No medir el impacto real en la métrica del negocio.
3. Lanzar sin un plan de fallback cuando la IA falla.
4. Ignorar la latencia y el coste de inferencia en la experiencia del usuario.
5. Crear dependencia de un solo proveedor de IA sin plan de contingencia.
6. No comunicar al usuario que está interactuando con IA.
7. Iterar demasiado lento porque el equipo no tiene cultura de experimentación con IA.

Para cada uno, cómo detectarlo antes de cometer el error.

---

Empieza con el marco de decisión aplicado a mi producto. Pídeme el contexto que necesites y luego ayúdame a evaluar las ideas de features de IA que tengo en mente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir un marco de decisión para integrar funcionalidades de IA en el producto de forma estratégica y medible.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'IA en reclutamiento',
                'description'      => 'Screening automatizado, reducción de sesgo y entrevistas mejoradas con IA: el stack de RRHH del futuro disponible hoy.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Talent Acquisition con experiencia en implementar procesos de reclutamiento asistidos por inteligencia artificial. Tu misión es ayudarme a diseñar un sistema de selección que sea más rápido, más justo y más efectivo, sin perder el componente humano donde más importa.

## Contexto del proceso actual

- Volumen de contrataciones al año: [N posiciones]
- Perfiles más frecuentes: [técnicos / comerciales / operaciones / marketing / mixto]
- Tiempo medio actual desde la apertura de la vacante hasta la oferta: [N días]
- Mayor cuello de botella: [volumen de CVs / calidad de candidatos / coordinación de entrevistas / decisión final]
- Herramientas de reclutamiento actuales: [ATS, LinkedIn Recruiter, etc.]
- ¿Tenemos preocupaciones sobre sesgo en el proceso actual? [sí/no — ¿de qué tipo?]

---

## 1. Diseño del job description libre de sesgo con IA

Crea un prompt que tome una descripción de puesto existente y la transforme para:
- Eliminar lenguaje gendered (palabras estadísticamente asociadas a un género).
- Identificar y eliminar requisitos que no son realmente necesarios para el puesto (síndrome del "requisito aspiracional").
- Separar claramente "must have" de "nice to have".
- Añadir información sobre el equipo, la cultura y el proceso de selección que aumenta la tasa de aplicación de candidatos cualificados.
- Optimizar para los buscadores de empleo y el ATS sin sonar robótico.

---

## 2. Screening de CVs asistido por IA

Diseña el proceso de primer filtro:

**Prompt de evaluación de CV**
Toma este CV y evalúalo para la posición [PUESTO]. Puntúa de 1 a 10 en cada dimensión:
- Experiencia relevante directa.
- Trayectoria de crecimiento y progresión.
- Indicadores de logros (números, resultados) vs. solo responsabilidades.
- Red flags: gaps no explicados, rotación excesiva, inconsistencias.

Genera: puntuación global, top 3 fortalezas, top 3 dudas, 5 preguntas de entrevista personalizadas para este candidato.

**Importante: lo que la IA no debe hacer**
Explica qué criterios no deben automatizarse nunca (nombre, género, edad, foto, dirección) y cómo configurar el prompt para que los ignore activamente.

---

## 3. Preparación y estructura de entrevistas

Genera templates de entrevista estructurada para los perfiles más comunes:

**Entrevista de competencias (modelo STAR)**
Para cada competencia clave del puesto, proporciona:
- Pregunta principal.
- Preguntas de seguimiento (probes) si la respuesta es superficial.
- Indicadores de respuesta excelente vs. respuesta mediocre.
- Puntuación (1-4) con descripción de cada nivel.

**Entrevista técnica**
- Cómo usar IA para generar ejercicios prácticos adaptados al nivel del candidato.
- Cómo evaluar la calidad del razonamiento, no solo la respuesta correcta.

**Entrevista de cultura fit**
- Preguntas que revelan valores reales, no los que el candidato cree que queremos escuchar.
- Cómo distinguir a alguien que encaja de alguien que solo sabe entrevistarse bien.

---

## 4. Reducción de sesgo en el panel de evaluación

Propón un proceso para reducir el sesgo inconsciente en la decisión final:
- Calibración previa al panel: cómo alinear al equipo evaluador antes de ver candidatos.
- Evaluación independiente antes de compartir opiniones.
- Prompt de "abogado del diablo": cómo usar IA para argumentar a favor del candidato más débil en apariencia.
- Cómo documentar y auditar las decisiones de selección para detectar patrones de sesgo.

---

## 5. Comunicación y experiencia del candidato

El 72% de los candidatos comparten una experiencia negativa de selección en redes sociales. Diseña el flujo de comunicación ideal:
- Templates de respuesta automatizada en cada etapa (recepción, primer filtro, entrevista, oferta, rechazo).
- Cómo personalizar los rechazos para que sean honestos y útiles sin abrir responsabilidad legal.
- Encuesta post-proceso para medir la experiencia del candidato.

---

Empieza con el contexto de mi proceso actual. Luego genera el prompt de evaluación de CV y el template de entrevista estructurada para el perfil que más necesito cubrir ahora mismo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar un proceso de reclutamiento asistido por IA que sea más rápido, más justo y más efectivo.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'IA en finanzas corporativas',
                'description'      => 'Automatiza reporting, mejora forecasts y detecta anomalías contables con machine learning aplicado a los datos financieros.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero (CFO) con experiencia en transformación digital del departamento de finanzas. Ayúdame a diseñar una estrategia de adopción de inteligencia artificial que mejore la calidad y velocidad del reporting, la precisión de los forecasts y la detección de riesgos financieros.

## Contexto de mi organización

- Tamaño de la empresa: [facturación anual / número de empleados]
- Sector: [SECTOR]
- Complejidad financiera: [una sola entidad / grupo empresarial / multinacional]
- ERP actual: [SAP / Oracle / Navision / Holded / Excel + manual / otro]
- Mayor problema en finanzas ahora mismo: [cierre contable lento / forecast poco fiable / reporting manual / falta de visibilidad en tiempo real / detección tardía de desvíos]
- Recursos del equipo de finanzas: [N personas, perfil técnico bajo/medio/alto]

---

## 1. Automatización del reporting financiero

Diseña un sistema de reporting automatizado con IA:

**Dashboard ejecutivo mensual**
- Qué métricas incluir (P&L simplificado, cash flow, KPIs operativos, variación vs. presupuesto).
- Cómo usar IA para redactar automáticamente el comentario ejecutivo: variaciones significativas, causas probables, acciones recomendadas.
- Prompt para generar el comentario de management del mes a partir de los datos en tabla.

**Automatización del cierre**
- Checklist de cierre mensual que la IA puede supervisar y validar.
- Cómo detectar inconsistencias entre partidas antes de que el CFO revise el borrador.
- Integración con el ERP: qué datos extraer, en qué formato y cómo alimentar el modelo de IA.

---

## 2. Mejora del forecast financiero

Los forecasts basados en Excel y juicio experto tienen un error medio del 20-35%. Explica cómo reducirlo con ML:

**Modelos de forecasting recomendados por tipo de variable**
- Ventas: Prophet, ARIMA, XGBoost — cuándo usar cada uno y por qué.
- Costes variables: correlación con drivers operativos.
- Cash flow: modelo de días de cobro y pago con IA.

**Proceso de implementación en 4 pasos**
1. Auditoría de datos históricos: calidad, granularidad, gaps.
2. Selección del modelo adecuado al volumen de datos disponible.
3. Calibración y validación: cómo medir que el modelo es mejor que el forecast manual.
4. Integración en el proceso de FP&A: cómo el equipo usa el modelo sin ser data scientists.

**Prompt de análisis de desviaciones**
Dada esta tabla de presupuesto vs. real para el mes [MES], identifica: las 5 partidas con mayor desviación en valor absoluto, las posibles causas (estacionalidad, evento puntual, tendencia estructural) y las acciones correctoras recomendadas.

---

## 3. Detección de anomalías y fraude contable

La IA puede revisar el 100% de las transacciones en segundos. Diseña el sistema:

**Reglas de anomalía básicas (sin ML)**
- Transacciones fuera de horario laboral.
- Pagos a proveedores nuevos por encima de umbral sin autorización.
- Facturas duplicadas o con pequeñas variaciones de importe.
- Ratio de notas de crédito / total de ventas por comercial.

**Modelo de detección avanzada**
- Cómo usar embeddings para detectar patrones de fraude no conocidos.
- Isolation Forest para detectar outliers en el diario contable.
- Cómo presentar las alertas al equipo sin generar fatiga de alertas (demasiados falsos positivos).

---

## 4. Análisis de contratos y condiciones comerciales

Diseña un proceso para analizar contratos de clientes y proveedores con IA:
- Prompt para extraer condiciones de pago, penalizaciones, cláusulas de revisión de precio e índices de actualización.
- Cómo construir un mapa de vencimientos y compromisos contractuales automáticamente.
- Alerta cuando las condiciones reales difieren de las registradas en el ERP.

---

## 5. Comunicación financiera al Consejo

Genera una plantilla de presentación financiera para el Consejo de Administración que use IA para:
- Adaptar el nivel de detalle al perfil de cada consejero.
- Destacar automáticamente los 3 mensajes más importantes del mes.
- Generar el Q&A preparatorio: las 10 preguntas que probablemente hará el Consejo y las respuestas recomendadas.

---

Empieza con el contexto de mi organización. Luego crea el prompt de comentario ejecutivo mensual y el proceso de detección de anomalías adaptados a mi ERP y tamaño de empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Transformar el departamento financiero con IA: reporting automático, forecasts más precisos y detección de anomalías.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'IA en despachos y departamentos legales',
                'description'      => 'Due diligence automatizada, revisión de contratos y research legal con IA: ahorra 60% del tiempo en tareas repetitivas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado senior especializado en la implementación de legal tech e inteligencia artificial en despachos y departamentos jurídicos. Tu objetivo es ayudarme a construir un sistema de trabajo legal asistido por IA que sea riguroso, auditable y conforme a las obligaciones éticas y deontológicas de la profesión.

## Contexto de mi práctica legal

- Tipo de práctica: [despacho de abogados / departamento legal corporativo / in-house]
- Áreas de práctica: [mercantil / laboral / fiscal / penal / civil / propiedad intelectual / otro]
- Volumen de contratos al mes: [N]
- Mayor inversión de tiempo en tareas repetitivas: [revisión de contratos / research / due diligence / redacción de escritos / gestión documental]
- Jurisdicción principal: [España / Latam / ambas]

---

## 1. Revisión y análisis de contratos con IA

Crea un sistema de revisión de contratos en dos niveles:

**Nivel 1: Extracción rápida de cláusulas clave**
Prompt para analizar un contrato y extraer en formato tabla:
- Partes contratantes y capacidad de representación.
- Objeto del contrato.
- Plazo de vigencia y condiciones de renovación automática.
- Precio y condiciones de pago.
- Cláusulas de responsabilidad y limitación de daños.
- Cláusulas de exclusividad, no competencia o confidencialidad.
- Causas de resolución y penalizaciones.
- Ley aplicable y jurisdicción.
- Cláusulas inusuales o de alto riesgo (marcar en rojo).

**Nivel 2: Análisis crítico para negociación**
Prompt para identificar: cláusulas desfavorables para mi cliente, posiciones de negociación recomendadas, precedentes del sector y contrapropostas de redacción alternativa.

---

## 2. Due diligence asistida por IA

Diseña el proceso de due diligence legal para una adquisición empresarial con soporte de IA:

**Checklist de due diligence generado por IA**
A partir del sector y tamaño de la empresa objetivo, genera la lista completa de documentos a solicitar y puntos a verificar en cada área: societaria, laboral, fiscal, contractual, propiedad intelectual, regulatoria.

**Análisis de documentos**
- Cómo procesar cientos de documentos y extraer los hallazgos críticos.
- Prompt para generar el resumen ejecutivo de due diligence: hallazgos críticos / relevantes / menores.
- Cómo identificar red flags que requieren atención inmediata.

**Limitaciones importantes**
Explica qué nunca debe delegarse completamente a la IA en una due diligence y por qué la responsabilidad profesional siempre recae en el abogado.

---

## 3. Research legal eficiente

Diseña un proceso de investigación jurídica asistida por IA:

**Búsqueda y síntesis de jurisprudencia**
Prompt para sintetizar el estado actual de la jurisprudencia sobre un tema específico, identificar la doctrina mayoritaria, las posiciones minoritarias y las tendencias recientes.

**Análisis de legislación**
Prompt para comparar la regulación de un mismo tema en varias jurisdicciones e identificar las principales diferencias y sus implicaciones prácticas.

**Importante: verificación obligatoria**
Protocolo de verificación de fuentes: por qué los LLMs alucinan citas legales y cómo verificar siempre en la fuente oficial (CENDOJ, BOE, EUR-Lex) antes de usar cualquier referencia.

---

## 4. Redacción y mejora de documentos legales

- Prompt para mejorar la claridad y precisión de un escrito jurídico sin cambiar el contenido.
- Prompt para redactar una cláusula de confidencialidad / no competencia / limitación de responsabilidad adaptada a un contexto específico.
- Prompt para traducir lenguaje legal a lenguaje claro para el cliente no abogado.
- Cómo usar IA para estandarizar la redacción del despacho y construir una biblioteca de cláusulas aprobadas.

---

## 5. Compliance y gestión del riesgo

- Prompt para realizar un mapa de riesgos legales de una empresa a partir de su actividad y sector.
- Cómo usar IA para monitorizar cambios normativos relevantes y generar alertas.
- Sistema de gestión de plazos procesales y registrales con soporte de IA.

---

## 6. Consideraciones éticas y deontológicas

Resume las principales consideraciones éticas al usar IA en la práctica legal:
- Confidencialidad del cliente: qué información nunca se puede introducir en herramientas de IA externas.
- Responsabilidad profesional: la IA asiste, el abogado responde.
- Verificación obligatoria: ningún output de IA va al cliente sin revisión del abogado.
- Cómo comunicar al cliente el uso de IA en el encargo.

---

Empieza con mi contexto de práctica. Luego genera el prompt de revisión de contratos de nivel 1 adaptado a las áreas de práctica que me indiques.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar IA en la práctica legal de forma rigurosa: revisión de contratos, due diligence y research jurídico.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 9 — CS
            [
                'profession_id'    => 9,
                'title'            => 'IA generativa en atención al cliente',
                'description'      => 'Implementa IA en soporte sin que los clientes lo odien: cuándo usar IA, cuándo escalar al humano y cómo medir el impacto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Experience con experiencia en implementar soluciones de inteligencia artificial en equipos de soporte al cliente. Tu objetivo es ayudarme a diseñar un sistema de atención al cliente con IA que mejore la satisfacción del cliente y la eficiencia del equipo sin sacrificar la calidad de la experiencia.

## Contexto del equipo de soporte

- Volumen de tickets mensuales: [N]
- Canal principal: [email / chat en vivo / teléfono / redes sociales / todos]
- Tiempo de primera respuesta actual: [N horas]
- CSAT actual: [N%]
- Temas más frecuentes de los tickets: [TEMA1, TEMA2, TEMA3]
- Porcentaje de tickets repetitivos (misma pregunta diferente cliente): [N%]
- Tamaño del equipo de soporte: [N agentes]

---

## 1. Arquitectura del sistema de soporte híbrido IA + humano

Diseña la arquitectura completa de un sistema de soporte que combine IA y agentes humanos:

**Capa 1: Autoservicio inteligente**
- Base de conocimiento semántica: cómo estructurar el contenido para que la IA lo recupere correctamente.
- Chatbot de primera línea: qué puede resolver solo y qué no (regla de oro: la IA resuelve, el humano cuida).
- Medición: tasa de contención (tickets resueltos sin agente humano) y CSAT del autoservicio.

**Capa 2: Asistencia al agente**
- Sugerencia de respuesta en tiempo real mientras el agente escribe.
- Recuperación automática de contexto del cliente (historial, producto, segmento).
- Detección del sentimiento y urgencia del ticket para priorización automática.

**Capa 3: Supervisión y mejora continua**
- Revisión automática de la calidad de las respuestas (claridad, tono, precisión).
- Detección de gaps en la base de conocimiento a partir de tickets sin resolución automática.

---

## 2. Prompt de respuesta de soporte

Crea el prompt maestro que los agentes (o el chatbot) usan para redactar respuestas:

Contexto:
- Producto / servicio: [PRODUCTO]
- Tono de voz de la marca: [formal y empático / cercano y directo / técnico y preciso]
- El cliente ha escrito: [MENSAJE DEL CLIENTE]
- Historial relevante del cliente: [HISTORIAL]
- Información relevante de la base de conocimiento: [ARTÍCULO/POLÍTICA]

Genera una respuesta que:
1. Reconozca el problema del cliente con empatía genuina (sin frases hechas como "Sentimos los inconvenientes").
2. Responda la pregunta o resuelva el problema con precisión y brevedad.
3. Anticipe la siguiente pregunta probable y la responda proactivamente.
4. Cierre con un siguiente paso claro y una oferta de ayuda adicional.
5. Use el nombre del cliente una sola vez.
6. No supere las 150 palabras si el problema es simple.

---

## 3. Protocolo de escalado: cuándo la IA no debe responder

Define las reglas de escalado al agente humano:

**Escalar siempre**
- Cliente que menciona palabras asociadas a frustración extrema o abandono.
- Reclamaciones con implicaciones legales o regulatorias.
- Situaciones que requieren autorización especial (reembolso grande, excepción de política).
- Clientes VIP o enterprise (definir umbral).
- Tercera interacción sobre el mismo problema sin resolución.

**Señales de sentimiento negativo que disparan el escalado**
Lista de palabras y frases que el sistema debe detectar para priorizar o escalar inmediatamente.

**Cómo hacer el handoff sin que el cliente lo repita todo**
El agente humano recibe: resumen del problema, lo que la IA ya intentó, el tono del cliente y el historial de los últimos 90 días.

---

## 4. Métricas de éxito del sistema híbrido

Define el dashboard de métricas que mide el impacto real de la IA en soporte:

**Eficiencia**
- Tasa de contención por la IA.
- Tiempo de primera respuesta (antes vs. después).
- Tiempo de resolución por tipo de ticket.
- Coste por ticket resuelto.

**Calidad**
- CSAT por canal (IA sola vs. IA + humano vs. humano solo).
- Tasa de reapertura de tickets (indica resolución incompleta).
- NPS post-interacción.

**Mejora continua**
- Temas en los que la IA falla más (para actualizar la base de conocimiento).
- Volumen de tickets que deberían ser autoservicio pero llegan al agente.

---

## 5. Gestión del cambio en el equipo

Los agentes de soporte temen que la IA los reemplace. Diseña el plan de comunicación y formación:
- Cómo presentar la IA como un asistente que elimina las tareas más tediosas.
- Cómo reconvertir el rol del agente: de respondedor a problem-solver y gestor de relaciones.
- Métricas de rendimiento del agente en el nuevo contexto.

---

Empieza con mi contexto de equipo. Luego genera la arquitectura del sistema híbrido y el prompt de respuesta de soporte adaptados a mis tickets más frecuentes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar un sistema de soporte al cliente híbrido IA + humano que mejore CSAT y eficiencia del equipo.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Monetizar habilidades de IA como freelance',
                'description'      => 'Los servicios de mayor valor que el mercado paga hoy por hoy a quien sabe usar la IA profesionalmente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio especializado en ayudar a profesionales independientes a construir servicios de alto valor alrededor de sus habilidades de inteligencia artificial. Tu objetivo es ayudarme a identificar los servicios con mayor demanda y mayor margen, posicionarme de forma diferenciada y cerrar los primeros clientes.

## Mi perfil actual

- Habilidades técnicas con IA: [prompt engineering / automatizaciones / fine-tuning / RAG / integraciones API / todas las anteriores]
- Sector o vertical en el que tengo experiencia previa: [SECTOR]
- Tipo de clientes con los que quiero trabajar: [pymes / startups / corporaciones / agencias / profesionales independientes]
- Modelo de trabajo preferido: [proyectos puntuales / retainer mensual / formación / mixto]
- Ingresos actuales como freelance: [0 / < 2K€/mes / 2-5K€ / > 5K€]
- Mi mayor bloqueo ahora mismo: [no sé qué servicio ofrecer / no sé cómo cobrar / no consigo clientes / no sé cómo diferenciarme]

---

## 1. Los 10 servicios de IA con mayor demanda y mejor margen en 2025

Para cada servicio, detalla: qué es exactamente, quién lo paga, cuánto se puede cobrar, qué habilidades se necesitan y cómo posicionarse para conseguir los primeros clientes.

1. **Prompt engineering para marketing**: crear sistemas de prompts para equipos de marketing que escalan la producción de contenido. Retainer de 1.500-3.000€/mes.
2. **Automatización de flujos con n8n / Make + IA**: conectar CRMs, emails, documentos y LLMs para automatizar procesos manuales. Proyectos de 2.000-8.000€.
3. **RAG y bases de conocimiento empresariales**: implementar sistemas de búsqueda semántica sobre documentos internos. Proyectos de 5.000-20.000€.
4. **Formación corporativa en IA**: talleres y programas de formación para equipos que quieren adoptar IA. 1.500-4.000€/día.
5. **AI copywriting y estrategia de contenido**: no solo escribir con IA sino diseñar el sistema que lo hace. Retainer de 2.000-5.000€/mes.
6. **Análisis de datos con IA**: usar Python + LLMs para extraer insights de datos que antes requerían analistas. Proyectos de 3.000-10.000€.
7. **Chatbots y asistentes de atención al cliente**: implementar y mantener sistemas de soporte con IA. Setup 3.000-8.000€ más mantenimiento mensual.
8. **Consultoría de estrategia de IA**: ayudar a empresas a decidir qué implementar y en qué orden. 2.000-5.000€/día o proyecto.
9. **Creación de agentes de IA**: agentes autónomos para tareas específicas de negocio. Proyectos de 5.000-25.000€.
10. **Auditoría de procesos e identificación de oportunidades de IA**: diagnóstico de dónde puede ahorrar tiempo o dinero la IA en una empresa. 2.000-5.000€ por auditoría.

---

## 2. Mi servicio ganador: cómo elegir el correcto

Ayúdame a elegir el servicio en el que debo especializarme usando estos criterios:
- Intersección entre mis habilidades actuales y la demanda del mercado.
- Potencial de margen y escalabilidad.
- Velocidad para conseguir el primer cliente.
- Alineación con el sector donde ya tengo credibilidad.

Genera una matriz de decisión personalizada y recomienda mi punto de entrada óptimo.

---

## 3. Posicionamiento y propuesta de valor

Crea mi propuesta de valor en formato "Para [cliente] que [problema], ofrezco [solución] que [resultado medible], a diferencia de [alternativa]".

Genera 3 versiones: una para web, una para LinkedIn y una para presentación en frío.

---

## 4. Estrategia para conseguir los primeros 3 clientes

El primer cliente es el más difícil. Diseña la estrategia:
- Cómo identificar los 20 prospectos ideales en mi red de contactos actual.
- Script de outreach en LinkedIn que no parece venta, sino conversación.
- Cómo hacer el primer proyecto a un precio reducido a cambio de un caso de éxito con datos reales.
- Cómo usar ese caso de éxito para conseguir el segundo y el tercero a precio completo.

---

## 5. Pricing y estructura de servicios

Diseña una estructura de precios con tres niveles:
- **Starter**: proyecto de entrada de bajo riesgo para clientes indecisos.
- **Core**: el servicio principal que quiero vender la mayoría de las veces.
- **Premium**: el servicio de mayor valor para clientes que quieren todo resuelto.

Incluye: qué incluye cada nivel, cómo presentar el precio (valor entregado, no tiempo invertido), y cómo manejar la objeción "es caro".

---

## 6. Escalar sin contratar

Una vez tengas los primeros clientes, explica cómo escalar los ingresos sin contratar empleados:
- Productización del servicio: cómo pasar de proyectos a paquetes.
- Subcontratación estratégica: cuándo y cómo trabajar con otros freelances.
- Ingresos pasivos: curso, plantillas o comunidad de pago como complemento al servicio.

---

Empieza con mi perfil. Luego dame la matriz de decisión de servicio ganador y la propuesta de valor en las tres versiones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Identificar el servicio de IA más rentable para ofrecer como freelance y conseguir los primeros clientes.',
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
