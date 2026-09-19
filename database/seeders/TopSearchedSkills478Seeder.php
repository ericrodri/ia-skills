<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills478Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Crear identidad de marca con IA generativa para campañas de marketing',
                'description'      => 'Aprende a usar IA generativa para construir identidades visuales de marca coherentes, generar variaciones de activos y acelerar la producción de materiales de campaña.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo senior especializado en branding y marketing visual. Tu misión es ayudarme a construir una identidad de marca completa usando IA generativa como herramienta de apoyo creativo.

**Contexto del proyecto:**
Tengo una marca nueva (o necesito renovar una existente) y quiero usar IA para acelerar el proceso de diseño sin sacrificar coherencia ni calidad. Necesito que me guíes paso a paso.

**instrucción: Fase 1 — Brief de marca**
Primero, ayúdame a definir el ADN visual de mi marca respondiendo estas preguntas de manera estratégica:
- ¿Cuáles son los tres adjetivos que mejor describen la personalidad de la marca?
- ¿Qué sensación debe provocar en el cliente al primer contacto?
- ¿Qué marcas admira el cliente (y cuáles detesta) y por qué?
- ¿En qué contextos se verá la marca: digital, impreso, packaging, señalética?

Con mis respuestas, genera un "mood board textual": una descripción de 200 palabras que capture la esencia visual de la marca, incluyendo referencias a estilos tipográficos, paletas de color conceptuales, texturas y referencias artísticas.

**instrucción: Fase 2 — Generación de paleta de color**
A partir del mood board, propón tres paletas de color distintas con los siguientes criterios:
- Paleta primaria: 2-3 colores principales con sus códigos HEX, RGB y CMYK
- Paleta secundaria: 2-3 colores de apoyo
- Paleta de acento: 1-2 colores para llamadas a la acción o elementos destacados
- Para cada paleta, explica la psicología del color aplicada y cómo refuerza el posicionamiento de la marca

**instrucción: Fase 3 — Prompts para generación de logo**
Crea 5 prompts detallados optimizados para Midjourney o DALL-E que generen conceptos de logo para mi marca. Cada prompt debe:
- Especificar el estilo (minimalista, geométrico, ilustrativo, tipográfico, etc.)
- Incluir parámetros técnicos como fondo blanco, alta resolución, vectorizable
- Describir la composición, los elementos simbólicos y el tratamiento tipográfico
- Indicar referencias estilísticas concretas (Bauhaus, Swiss style, Art Deco, etc.)
- Añadir negativos (qué evitar) para refinar el resultado

**instrucción: Fase 4 — Sistema de variaciones**
Una vez tengamos el concepto de logo aprobado, ayúdame a definir las variaciones necesarias:
- Versión horizontal vs. vertical
- Versión con símbolo solo (icono)
- Versión en negativo (fondo oscuro)
- Versión monocromática
- Versión reducida para favicon o app icon

Para cada variación, indica las reglas de uso y los contextos donde debe aplicarse.

**instrucción: Fase 5 — Assets de campaña escalables**
Finalmente, crea prompts específicos para generar los siguientes activos de marketing con coherencia visual:
- Banners para redes sociales (Instagram, LinkedIn, Twitter/X) con las dimensiones correctas
- Imágenes de portada para landing pages
- Ilustraciones de apoyo para blog posts o newsletters
- Plantillas de presentación corporativa

Para cada activo, incluye el prompt base y las variaciones de copy o escena que lo harán escalable para distintas campañas.

**objetivo final:** Al terminar esta sesión, debes tener un sistema visual completo y reproducible que cualquier diseñador (o la propia IA en futuras sesiones) pueda ejecutar con coherencia. Documenta todo en un "brand prompt kit" estructurado que pueda reutilizarse.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir identidad visual de marca completa con IA generativa para acelerar campañas',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Generar sistema de diseño visual con IA para aplicaciones web',
                'description'      => 'Usa IA para definir tokens de diseño, componentes visuales y guías de estilo que integren branding con desarrollo frontend.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en design systems y frontend engineering. Voy a usarte para construir un sistema de diseño visual coherente para mi aplicación web, alineado con la identidad de marca.

**tarea principal:**
Necesito un design system que sirva de puente entre el branding de la marca y el código de la aplicación. El sistema debe ser implementable en cualquier framework moderno (React, Vue, Angular) y documentable en Storybook o similar.

**instrucción: Módulo 1 — Tokens de diseño**
Define la arquitectura de tokens para mi sistema. Organiza los tokens en estas categorías:

Tokens primitivos (los valores base):
- Color: escala completa de cada color de marca (100-900)
- Tipografía: familias, tamaños, pesos, interlineados y espaciados de letras
- Espaciado: escala modular (4px, 8px, 16px, 24px, 32px, 48px, 64px, etc.)
- Bordes: radios y grosores
- Sombras: niveles de elevación (none, sm, md, lg, xl)

Tokens semánticos (la capa de significado):
- color-primary, color-secondary, color-accent
- color-background, color-surface, color-border
- color-text-primary, color-text-secondary, color-text-disabled
- color-success, color-warning, color-error, color-info

Para cada token, proporciona el nombre en kebab-case, el valor en modo claro y oscuro, y el uso recomendado.

**instrucción: Módulo 2 — Prompts para generación de componentes visuales**
Crea prompts específicos para generar con IA los siguientes activos visuales que el equipo de desarrollo necesita:

1. Ilustraciones de estados vacíos (empty states) coherentes con la marca
2. Iconografía personalizada: prompt para generar un set de 20 iconos en el estilo de la marca
3. Imágenes de onboarding: secuencia de 3-5 pantallas explicativas
4. Avatares y placeholders de usuario
5. Fondos y texturas para secciones hero

Para cada categoría, el prompt debe incluir: estilo visual, paleta de colores exacta (usa los tokens definidos), formato de exportación y resoluciones necesarias.

**instrucción: Módulo 3 — Guía de integración técnica**
Ayúdame a documentar cómo implementar los assets generados:
- Cómo exportar SVGs optimizados desde las herramientas de IA
- Cómo convertir los tokens en variables CSS o archivos de configuración de Tailwind
- Cómo versionar los assets en el repositorio del proyecto
- Cómo automatizar la generación de variantes con scripts

**instrucción: Módulo 4 — Sistema de prompts reutilizables**
Crea una biblioteca de prompts maestros que el equipo de desarrollo pueda usar para mantener la coherencia visual en el futuro:
- Prompt base para cualquier ilustración nueva
- Prompt para generar screenshots de la app para marketing
- Prompt para crear demos animadas (instrucciones para herramientas de generación de video)

**objetivo final:** Quiero un documento técnico que un desarrollador pueda abrir y seguir sin intervención del equipo de diseño para generar activos visuales coherentes con la marca.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir design system con tokens y prompts de IA para equipos de desarrollo frontend',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Sistema de prompts para Midjourney y DALL-E en proyectos de branding',
                'description'      => 'Domina la generación de identidades visuales, paletas automáticas y assets de marca con prompts estructurados para herramientas de IA generativa.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador gráfico senior especializado en branding y en el uso profesional de herramientas de IA generativa como Midjourney, DALL-E 3 y Stable Diffusion. Tu expertise combina el pensamiento estratégico de marca con el dominio técnico de los prompts.

**tarea central:**
Voy a darte información sobre una marca y quiero que construyas conmigo un arsenal completo de prompts profesionales para generar todos los activos visuales que necesita un proyecto de branding desde cero.

**instrucción: Bloque 1 — Análisis y brief visual**
Antes de escribir un solo prompt, necesito que me ayudes a analizar la marca con estas preguntas:
- ¿Cuál es la propuesta de valor única de la marca?
- ¿Cuál es el perfil del cliente ideal (edad, estilo de vida, aspiraciones)?
- ¿Qué emociones debe evocar la identidad visual?
- ¿Hay restricciones de uso (colores corporativos ya definidos, estilos a evitar)?

Con esta información, crea una "arquitectura de estilo" en forma de tabla con: estilo visual dominante, referencias artísticas, paleta cromática base, dirección tipográfica y tono fotográfico.

**instrucción: Bloque 2 — Prompts para logotipo**
Crea 8 prompts detallados para generar conceptos de logo. Cada prompt debe seguir esta estructura exacta:
[Descripción del concepto] + [Estilo artístico] + [Paleta de colores con hex codes] + [Composición y proporciones] + [Fondo] + [Parámetros técnicos] + [Negativos]

Ejemplo de estructura (no de contenido): "Geometric abstract symbol representing [concepto], Swiss International Style, primary color #2D4A8A and white, centered composition with 1:1 ratio, pure white background, vector art style, clean lines, high contrast --ar 1:1 --style raw --q 2, no text, no gradients, no drop shadows"

Los 8 prompts deben explorar diferentes enfoques: símbolo abstracto, logotipo tipográfico, combinación símbolo+texto, monograma, emblema, mascota geométrica, wordmark cursivo y sello.

**instrucción: Bloque 3 — Sistema de paleta generativa**
Crea prompts para generar tarjetas de paleta de color visuales para presentar al cliente:
- Una paleta principal con 5 colores y sus proporciones de uso
- Una paleta secundaria de 3 colores complementarios
- Una paleta de acento para calls to action
- Variaciones oscuras y claras para modo oscuro/claro

Para cada paleta, el prompt debe generar una presentación visual elegante tipo style guide.

**instrucción: Bloque 4 — Assets de aplicación de marca**
Crea prompts específicos para los siguientes materiales de aplicación:
1. Tarjetas de presentación: anverso y reverso con la identidad aplicada
2. Papelería corporativa: membrete y sobre
3. Mockups de packaging: caja, bolsa o envase según el sector
4. Aplicación en dispositivos: mockup de website y app móvil
5. Señalética y merchandising: una pieza representativa
6. Post para redes sociales: plantilla de anuncio y de contenido orgánico

**instrucción: Bloque 5 — Flujo de refinamiento**
Enséñame el proceso iterativo para refinar los resultados:
- Cómo usar "seed numbers" para mantener coherencia entre generaciones
- Técnica de variaciones controladas para A/B testing visual
- Cómo combinar generaciones de IA con edición en Photoshop/Illustrator
- Criterios profesionales para seleccionar el mejor resultado

**objetivo final:** Quiero un playbook de prompts que pueda entregar a cualquier miembro del equipo creativo y que les permita generar activos de marca con coherencia profesional, reduciendo el tiempo de producción en al menos un 60%.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear biblioteca completa de prompts profesionales para diseño de marca con IA generativa',
                'vote_score'       => 55,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Usar IA generativa para crear materiales de ventas con identidad de marca',
                'description'      => 'Genera propuestas visuales, presentaciones de ventas y materiales de pitch con coherencia de marca usando herramientas de IA generativa.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en sales enablement y diseño de materiales comerciales. Tu especialidad es combinar el storytelling de ventas con la producción eficiente de activos visuales usando IA generativa.

**tarea:**
Necesito crear un arsenal completo de materiales visuales de ventas para mi empresa que sean coherentes con la identidad de marca y que aceleren el ciclo comercial. Quiero usar IA para producirlos en una fracción del tiempo habitual.

**instrucción: Sección 1 — Diagnóstico de necesidades comerciales**
Antes de crear nada, ayúdame a mapear qué materiales necesito según mis etapas del funnel:
- Prospección: ¿qué piezas visuales necesito para captar atención en cold outreach?
- Calificación: ¿qué materiales ayudan a explicar el problema que resuelvo?
- Propuesta: ¿qué formato visual tiene mayor tasa de cierre en mi sector?
- Negociación: ¿qué comparativas visuales o casos de éxito aceleran la decisión?
- Cierre: ¿qué materiales de onboarding generan confianza inmediata?

Para cada etapa, dame una lista de 3 piezas visuales prioritarias y el formato recomendado.

**instrucción: Sección 2 — Prompts para propuestas visuales**
Crea prompts para generar con IA los siguientes materiales de propuesta comercial:

Portadas de propuesta profesional:
- Descripción del prompt para generar una portada impactante con la imagen de la empresa cliente integrada
- Variantes para distintos sectores (tech, retail, salud, industria)

Infografías de proceso:
- Prompt para ilustrar el proceso de trabajo en 4-6 pasos con iconografía profesional
- Estilo corporativo limpio, colores de marca, sin texto (se añade después)

Visualizaciones de ROI:
- Prompt para crear gráficos antes/después que muestren el impacto de mi solución
- Diseño tipo dashboard ejecutivo

**instrucción: Sección 3 — Banco de imágenes de marca**
Genera prompts para crear un banco de 20 imágenes de uso comercial:
- 5 imágenes de equipo/personas que representen al cliente ideal
- 5 imágenes de contexto de trabajo (oficina, reunión, tecnología)
- 5 imágenes abstractas de concepto (éxito, crecimiento, colaboración)
- 5 imágenes de producto o servicio en uso

Para cada categoría, el prompt debe asegurar coherencia fotográfica (estilo, iluminación, paleta) con la marca.

**instrucción: Sección 4 — Templates de presentación**
Ayúdame a diseñar la estructura de una presentación de ventas de 12 slides y crea prompts para los elementos visuales de cada slide:
1. Portada de impacto
2. El problema del cliente
3. Por qué ahora (urgencia del mercado)
4. Nuestra solución
5-7. Casos de éxito con resultados visuales
8. Proceso de trabajo
9. Equipo y credenciales
10. Precios y paquetes
11. Garantías y próximos pasos
12. Cierre con llamada a la acción

**objetivo final:** Tener un sistema de producción de materiales comerciales donde cualquier vendedor pueda generar piezas profesionales en menos de 2 horas sin depender del equipo de diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Producir materiales de ventas visuales con IA generativa manteniendo coherencia de marca',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Diseñar identidad visual de producto digital con IA generativa',
                'description'      => 'Crea el sistema visual completo de un producto digital: iconografía, ilustraciones de onboarding, empty states y assets de marketing con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un product designer senior con experiencia en branding de productos digitales y en el uso estratégico de IA generativa en el flujo de diseño. Combinas la visión de producto con la ejecución visual de alta calidad.

**contexto del proyecto:**
Estoy lanzando (o rediseñando) un producto digital y necesito construir su identidad visual completa. Quiero usar IA generativa para acelerar la producción de activos sin perder coherencia ni calidad de producto.

**instrucción: Etapa 1 — Identidad de producto**
Ayúdame a definir la "product personality" respondiendo estas preguntas:
- ¿Qué problema resuelve el producto y para quién?
- Si el producto fuera una persona, ¿cómo sería su personalidad en 5 adjetivos?
- ¿Qué productos admira el equipo en términos de diseño (y por qué)?
- ¿Cuál es la emoción principal que debe sentir el usuario al usarlo?

Con estas respuestas, crea un "product design brief" de una página que incluya: principios de diseño, dirección visual, paleta cromática con justificación psicológica, y dirección tipográfica.

**instrucción: Etapa 2 — Sistema de iconografía**
Crea un prompt maestro para generar un set de iconos coherentes para el producto. El prompt debe especificar:
- Estilo (outline, filled, duotone, etc.) y grosor de trazo exacto en px
- Esquinas (sharp, rounded) y proporciones del canvas
- Paleta de colores aplicada a los iconos
- Lista de los 30 iconos más necesarios para un producto digital típico
- Formato de exportación: SVG, 24x24px base, escalable a 16 y 32

Incluye también el proceso para mantener coherencia al generar iconos adicionales en el futuro.

**instrucción: Etapa 3 — Ilustraciones de producto**
Crea prompts específicos para generar:

Onboarding (3-5 pantallas):
- Cada ilustración debe narrar un paso del proceso de activación
- Estilo coherente, personajes consistentes entre pantallas
- Formato: 600x400px, fondo de color de marca, sin texto

Empty states (5 estados):
- Sin datos todavía
- Sin resultados de búsqueda
- Error de conexión
- Tarea completada
- Bienvenida a nueva feature

Feature announcements:
- Ilustración de "novedad" para modales de anuncio de features
- Estilo celebratorio pero coherente con la identidad

**instrucción: Etapa 4 — Assets de marketing de producto**
Genera prompts para los materiales de lanzamiento y growth:
- App Store screenshots: 6 pantallas con el producto mockupeado en dispositivos reales
- Social media assets: announcement posts para LinkedIn, Twitter/X e Instagram
- Product Hunt banner: imagen de hero para el día de lanzamiento
- Press kit: imagen de portada para medios y bloggers

**objetivo final:** Al completar este flujo, tendrás un sistema visual de producto reproducible y escalable que puede evolucionar con el producto sin perder coherencia, documentado en un "visual identity doc" que el equipo puede consultar de manera autónoma.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir identidad visual completa de producto digital con IA generativa',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Crear materiales de employer branding con IA generativa',
                'description'      => 'Diseña la identidad visual del employer brand para atraer talento: assets para LinkedIn, job postings visuales, cultura de empresa en imágenes.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en employer branding y comunicación interna con experiencia en producción de contenido visual usando IA generativa. Tu misión es ayudar a las empresas a construir una imagen de empleador atractiva y auténtica.

**tarea:**
Quiero desarrollar una estrategia visual de employer branding completa para mi empresa. Necesito materiales que atraigan talento de calidad, reflejen la cultura real de la organización y sean producibles de forma eficiente con IA.

**instrucción: Módulo 1 — Diagnóstico de employer brand**
Ayúdame a definir nuestra propuesta de valor como empleador (EVP) respondiendo:
- ¿Cuáles son los 3 beneficios únicos que ofrecemos como empleador?
- ¿Cómo describirían los empleados actuales la cultura en 3 palabras?
- ¿Qué tipo de personas queremos atraer (perfil, valores, aspiraciones)?
- ¿Qué nos hace diferentes de los competidores en la guerra por el talento?

Con estas respuestas, crea una "EVP visual": la traducción de la propuesta de valor en elementos visuales concretos (colores, estilos fotográficos, iconografía, tono).

**instrucción: Módulo 2 — Prompts para contenido de cultura**
Crea prompts para generar con IA imágenes que comuniquen cultura empresarial:

Serie "Un día en la empresa":
- Imágenes de trabajo en equipo, colaboración y momentos de pausa
- Estilo fotográfico: editorial, natural, sin poses forzadas
- Paleta: colores de marca aplicados en ambiente de oficina/remoto

Serie "Valores en acción":
- Una imagen conceptual por cada valor de la empresa
- Estilo: ilustración minimalista o fotografía conceptual
- Formato cuadrado para Instagram y LinkedIn

Retratos de equipo (plantilla):
- Prompt base para headshots profesionales coherentes con la marca
- Fondo, iluminación y encuadre consistentes para toda la empresa

**instrucción: Módulo 3 — Job postings visuales**
Diseña plantillas visuales para ofertas de empleo. Crea prompts para generar:
- Imagen de oferta de trabajo genérica para cada departamento (tech, marketing, ventas, ops)
- Banner para LinkedIn con el logo de la empresa y el puesto
- Story para Instagram Stories con swipe-up a la oferta
- Imagen de "estamos contratando" para posts orgánicos

**instrucción: Módulo 4 — Onboarding visual**
Crea materiales visuales para el proceso de bienvenida:
- Portada del manual del empleado
- Infografía de "tus primeros 90 días"
- Tarjetas de bienvenida personalizables
- Screensaver/fondo de pantalla corporativo

**instrucción: Módulo 5 — Calendario de contenido de employer brand**
Planifica 12 semanas de contenido visual para LinkedIn con:
- Tipo de post (cultura, equipo, logro, vacante, evento)
- Prompt específico para generar la imagen de ese post
- Copy sugerido (30 palabras)
- Hashtags recomendados

**objetivo final:** Tener un sistema de producción de contenido de employer branding que el equipo de RRHH pueda ejecutar de manera autónoma sin depender siempre del equipo de marketing o diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir sistema visual de employer branding para atraer talento con IA generativa',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Generar informes financieros visuales y dashboards con IA',
                'description'      => 'Usa IA generativa para crear visualizaciones de datos financieros, infografías de resultados y materiales de investor relations con identidad de marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en comunicación financiera y visualización de datos con experiencia en el uso de IA para producir materiales de alta calidad para inversores, directivos y stakeholders.

**tarea:**
Necesito crear materiales visuales financieros que sean rigurosos, claros y que proyecten profesionalidad. Quiero usar IA generativa para acelerar la producción sin sacrificar la exactitud o el impacto visual.

**instrucción: Bloque 1 — Sistema visual para comunicación financiera**
Primero, define conmigo los estándares visuales para todos los materiales financieros:
- Paleta cromática para datos: colores para positivo/negativo, rangos, categorías
- Tipografía: familia para números (tabular figures), títulos y cuerpo de texto
- Reglas de composición: márgenes, proporciones, jerarquía visual
- Iconografía: set de iconos financieros coherentes con la marca corporativa

Crea un "financial brand guide" de una página con estas reglas documentadas.

**instrucción: Bloque 2 — Prompts para visualización de métricas**
Crea prompts detallados para generar las siguientes visualizaciones financieras con IA:

Dashboard ejecutivo mensual:
- Diseño de cuadro de mandos con KPIs principales (revenue, margen, EBITDA, cash)
- Estilo: oscuro/claro según preferencia, números grandes y prominentes
- Indicadores de tendencia: flechas verdes/rojas, sparklines

Infografía de resultados anuales:
- Diseño de una página que resume el año fiscal
- Incluye: ingresos, crecimiento YoY, expansión geográfica, hitos clave
- Formato para presentación a inversores y para comunicación interna

Comparativa sectorial:
- Tabla visual comparando métricas de la empresa vs. competidores vs. mercado
- Estilo benchmarking profesional, highlights para destacar fortalezas

**instrucción: Bloque 3 — Materiales de investor relations**
Genera prompts para los materiales de comunicación con inversores:
- Portada del informe anual (annual report cover)
- Diseño de factsheet de una página para fondos e inversores institucionales
- Slide deck de earnings call: 8-10 slides con datos y visualizaciones
- Gráfico de evolución del precio de la acción y comparativa con índices

**instrucción: Bloque 4 — Infografías internas de performance**
Crea prompts para materiales de comunicación interna de resultados:
- "Results snapshot" mensual para enviar al equipo por email/Slack
- Scorecards de departamento: 1 página por área con sus KPIs
- Mapa de progreso hacia objetivos anuales (OKRs visualizados)

**instrucción: Bloque 5 — Plantillas reutilizables**
Define el sistema de plantillas para que el equipo financiero pueda actualizar los materiales mensualmente con mínimo esfuerzo:
- Variables que cambian cada mes vs. elementos fijos de la plantilla
- Instrucciones para actualizar con nuevos datos sin redeseñar
- Proceso de revisión y aprobación del material antes de distribuir

**objetivo final:** Tener un sistema de comunicación financiera visual que proyecte la seriedad y profesionalismo de la empresa, reduciendo el tiempo de producción de informes de días a horas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear materiales visuales financieros e informes de investor relations con IA generativa',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Diseñar materiales visuales de comunicación legal con IA',
                'description'      => 'Genera infografías legales, materiales de compliance visual y presentaciones jurídicas profesionales usando IA generativa con identidad de marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en comunicación legal y diseño de materiales jurídicos, con experiencia en hacer que el contenido legal sea visualmente accesible sin perder rigor ni precisión.

**tarea:**
Los equipos legales necesitan comunicar información compleja de manera clara y visualmente atractiva: políticas de empresa, materiales de compliance, contratos en lenguaje visual, y presentaciones para litigios o negociaciones. Voy a usar IA generativa para producir estos materiales de forma eficiente.

**instrucción: Sección 1 — Principios visuales para comunicación legal**
Antes de generar nada, establece conmigo los principios que deben guiar el diseño de materiales legales:
- Claridad sobre estética: ¿cómo priorizar la comprensión sobre el impacto visual?
- Precisión terminológica: ¿cómo integrar términos legales en el diseño sin ambigüedad?
- Accesibilidad: ¿cómo hacer materiales de compliance accesibles para no abogados?
- Confidencialidad: ¿qué elementos visuales pueden incluirse en materiales que se compartirán externamente?

Crea una "guía de comunicación visual legal" de una página con estas directrices.

**instrucción: Sección 2 — Infografías de procesos legales**
Crea prompts para generar visualizaciones de procesos jurídicos:

Diagrama de flujo de proceso contractual:
- Desde la solicitud hasta la firma y el archivo
- Estilo: limpio, corporativo, con iconos de documentos y personas
- Colores: escala de grises con un color de acento para los hitos clave

Mapa de cumplimiento normativo (compliance map):
- Visualización de las normativas aplicables a la empresa
- Estructura jerárquica: regulación → obligación → acción → responsable
- Formato de póster para imprimir en oficinas

Timeline de plazos legales:
- Visualización de deadlines de contratos, renovaciones y obligaciones periódicas
- Estilo: línea de tiempo horizontal con indicadores de urgencia por colores

**instrucción: Sección 3 — Materiales de formación en compliance**
Genera prompts para materiales formativos:
- Portada de manual de compliance para empleados
- Infografía "10 reglas de oro" para comportamiento ético
- Cards visuales de política: una por cada política importante (GDPR, conflictos de interés, etc.)
- Quiz visual: preguntas de compliance en formato atractivo para formación

**instrucción: Sección 4 — Presentaciones jurídicas**
Crea prompts para slides de presentaciones legales:
- Diseño de slide deck para due diligence: estructura, paleta, tipografía
- Visualización de argumentación legal: premisa → evidencia → conclusión
- Tablas comparativas de opciones legales (pros/contras visualizados)
- Timeline de litigios y procedimientos administrativos

**instrucción: Sección 5 — Comunicación externa**
Prompts para materiales de comunicación legal hacia clientes y terceros:
- Carta de bienvenida visual para nuevos clientes del despacho
- Resumen ejecutivo de contrato (contract summary) en una página
- Newsletter legal mensual con diseño atractivo
- Tarjeta de servicios: portfolio visual de especialidades del despacho

**objetivo final:** Tener un sistema de producción de materiales legales visuales que combine rigor jurídico con diseño profesional, mejorando la comprensión y el cumplimiento por parte de todos los stakeholders.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Producir materiales de comunicación legal visual e infografías de compliance con IA',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Crear activos visuales de customer success con IA generativa',
                'description'      => 'Diseña materiales de onboarding de clientes, guías visuales de producto, infografías de éxito y reportes de health score con identidad de marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en customer success y diseño de experiencia del cliente, con especialización en la producción de materiales visuales que aumentan la adopción de producto y reducen el churn.

**tarea:**
Los equipos de customer success necesitan comunicar valor de manera constante y visual: desde el onboarding inicial hasta los reportes de renovación. Voy a usar IA generativa para crear un sistema completo de materiales visuales de CS.

**instrucción: Módulo 1 — Journey visual del cliente**
Ayúdame a mapear el customer journey y los materiales visuales que necesito en cada etapa:
- Onboarding (días 1-30): ¿qué materiales aceleran la activación?
- Adopción (mes 2-3): ¿qué piezas visuales aumentan el uso de features avanzadas?
- Expansión (mes 4+): ¿cómo visualizar el valor para facilitar upsell?
- Renovación: ¿qué muestra el ROI de manera irrefutable?
- Advocacy: ¿qué materiales convierten clientes satisfechos en promotores?

Para cada etapa, dame 3 tipos de materiales visuales prioritarios con su objetivo específico.

**instrucción: Módulo 2 — Kit de onboarding visual**
Crea prompts para generar los materiales del proceso de bienvenida:

Welcome kit visual:
- Portada del manual de inicio: profesional, cálida, con espacio para nombre del cliente
- Checklist visual de los primeros 30 días (estilo roadmap)
- Infografía "cómo funciona en 5 pasos"

Guías de producto:
- Prompt para crear screenshots anotados con callouts visuales claros
- Plantilla de "quick reference card" (tarjeta de referencia rápida) tamaño A5
- Diseño de tooltip visual para in-app guidance

**instrucción: Módulo 3 — Reportes de success**
Genera prompts para los materiales de comunicación periódica:

Business review mensual:
- Diseño de reporte de 4 páginas con métricas de uso y resultados de negocio
- Sección de logros del mes, tendencias y recomendaciones
- Comparativa con el mes anterior y con los objetivos acordados

Health score visual:
- Dashboard visual del "health" del cliente: verde/amarillo/rojo por categoría
- Indicadores: adopción, engagement, soporte, NPS, valor obtenido
- Formato ejecutivo de una página para presentar al sponsor del cliente

**instrucción: Módulo 4 — Comunicación de valor**
Prompts para materiales que demuestran ROI:
- Infografía "resultados conseguidos" personalizable por cliente
- Caso de éxito visual de una página (one-pager)
- Comparativa antes/después con métricas de impacto
- Certificado de éxito (milestone achievement) para compartir en LinkedIn

**instrucción: Módulo 5 — Materiales de comunidad y advocacy**
Crea prompts para convertir clientes en promotores:
- Diseño de badges de "power user" o certificación
- Plantilla para que clientes creen su testimonio visual
- Invitación a comunidad o evento de usuarios: diseño impactante
- Kit de redes sociales para que clientes compartan su éxito

**objetivo final:** Tener un sistema de comunicación visual de customer success que aumente el NPS, acelere la adopción y haga que las renovaciones sean conversaciones de valor en lugar de negociaciones de precio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear sistema completo de materiales visuales de customer success con IA para aumentar retención',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Kit de branding visual para freelancers con IA generativa',
                'description'      => 'Crea tu identidad de marca personal completa como freelancer: logo, paleta, propuesta visual y materiales de portafolio usando IA generativa.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de personal branding y diseñador gráfico especializado en ayudar a profesionales independientes a construir identidades visuales que atraigan clientes de calidad y justifiquen tarifas premium.

**tarea:**
Como freelancer, tu marca personal es tu activo más valioso. Voy a guiarte paso a paso para construir una identidad visual completa usando IA generativa, sin necesidad de contratar a un diseñador externo ni invertir miles de euros.

**instrucción: Paso 1 — Define tu posicionamiento visual**
Antes de crear cualquier elemento visual, necesito entender quién eres profesionalmente:
- ¿Cuál es tu especialidad única y para qué tipo de clientes trabajas?
- ¿Cómo quieres que te perciban: creativo, estratégico, técnico, confiable, innovador?
- ¿Qué nivel de cliente quieres atraer (startups, pymes, corporaciones)?
- ¿Cuáles son los freelancers o profesionales cuya marca visual admiras?

Con estas respuestas, crea tu "personal brand statement visual": una descripción de tu identidad como profesional traducida en elementos visuales concretos.

**instrucción: Paso 2 — Crea tu paleta de color personal**
Tu paleta de color es tu firma visual. Ayúdame a definir:
- Un color primario que represente tu personalidad profesional (con justificación psicológica)
- Un color secundario complementario para fondos y elementos de apoyo
- Un color de acento para destacar tu propuesta de valor
- Versiones claras y oscuras de cada color para versatilidad

Para cada color, dame el hex code, el uso recomendado y un prompt para generar elementos de branding en ese color.

**instrucción: Paso 3 — Prompts para tu logo personal**
Crea 5 prompts para generar conceptos de logo personal:
- Logotipo tipográfico con tus iniciales en un estilo único
- Símbolo abstracto que represente tu especialidad
- Combinación de símbolo e iniciales
- Sello o stamp con tu nombre completo
- Versión minimalista para uso como icono en redes

Para cada prompt, incluye: el estilo visual, los colores exactos, la composición y los parámetros técnicos para herramientas como Midjourney o DALL-E.

**instrucción: Paso 4 — Materiales de portafolio**
Genera prompts para crear los activos de tu portafolio:

Portada de portafolio PDF:
- Diseño profesional con foto (placeholder) y headline de propuesta de valor
- Paleta de marca aplicada, tipografía elegante

Thumbnails de proyectos:
- Plantilla para presentar cada proyecto de manera coherente
- Incluye: imagen principal, tipo de proyecto, cliente, resultado clave

Case study de una página:
- Estructura visual: reto → solución → resultado
- Diseño limpio que haga los datos protagonistas

**instrucción: Paso 5 — Presencia digital**
Prompts para tu presencia online:
- Foto de perfil profesional: instrucciones para el prompt y para procesarla con IA
- Banner de LinkedIn con tu propuesta de valor visual
- Template de posts para LinkedIn/Twitter con tu identidad de marca
- Portada de tu website personal o página de Notion

**instrucción: Paso 6 — Propuestas comerciales**
Crea una plantilla visual de propuesta para clientes:
- Portada con logo del cliente (espacio para personalizar) y tu marca
- Página de "sobre mí" con foto y credenciales
- Propuesta de servicio: scope, entregables y timeline visual
- Inversión y términos: presentados de manera profesional
- Cierre con llamada a la acción

**objetivo final:** Tener una identidad visual de freelancer que proyecte el mismo nivel de profesionalismo que una agencia, permita justificar tarifas más altas y genere confianza inmediata en los clientes potenciales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir identidad de marca personal completa como freelancer usando IA generativa',
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
