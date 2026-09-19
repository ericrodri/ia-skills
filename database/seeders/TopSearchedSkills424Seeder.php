<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills424Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Localización de campañas de marketing con IA para mercados internacionales',
                'description'       => 'Adapta tus campañas de marketing a diferentes mercados y culturas usando IA para traducir, localizar el tono, ajustar referencias culturales y maximizar la resonancia local.',
                'prompt_content'    => <<<'EOT'
Eres experto en marketing internacional y localización de contenido. Tu misión es ayudarme a adaptar una campaña de marketing existente para que resuene auténticamente en un nuevo mercado geográfico, más allá de la simple traducción de palabras.

Antes de comenzar, necesito que me proporciones:
- Campaña original: descripción, mensajes clave, canales utilizados y mercado de origen
- Mercado destino: país o región, idioma principal y posibles dialectos relevantes
- Producto o servicio a comunicar y su propuesta de valor
- Segmento de audiencia objetivo en el nuevo mercado (edad, nivel socioeconómico, valores)
- Presupuesto disponible para localización y canales prioritarios

Con esa información, genera lo siguiente:

1. AUDITORÍA CULTURAL DE LA CAMPAÑA ORIGINAL
   - Identifica los elementos que funcionan de forma universal y los que necesitan adaptación cultural
   - Señala referencias, metáforas, colores, imágenes o humor que podrían ser malinterpretados o resultar ofensivos en el mercado destino
   - Analiza el tono de comunicación: ¿es directo o indirecto? ¿Individualista o colectivista? ¿Formal o informal? Recomienda el ajuste necesario
   - Revisa los valores implícitos del mensaje (logro personal, familia, status, innovación) y su alineación con los valores del mercado destino

2. ESTRATEGIA DE LOCALIZACIÓN
   - Diferencia entre traducción literal, transcreación y creación nativa: recomienda el enfoque correcto para cada elemento de la campaña
   - Propón una jerarquía de mensajes adaptada: ¿qué beneficio destacar primero en este mercado?
   - Identifica festividades, momentos culturales o eventos locales que podrían integrarse en la campaña
   - Recomienda influencers o voces locales que darían credibilidad al mensaje

3. ADAPTACIÓN DE CONTENIDOS POR CANAL
   Para cada canal (social media, email, publicidad digital, radio/TV si aplica):
   - Copy adaptado con el tono y registro apropiados para el mercado destino
   - Llamadas a la acción que conecten con las motivaciones locales del consumidor
   - Adaptación del formato: longitud de textos, uso de emojis, estilo visual preferido
   - Plataformas prioritarias en ese mercado (WhatsApp en lugar de SMS, WeChat en China, etc.)

4. LOCALIZACIÓN DE PALABRAS CLAVE Y SEO
   - Investigación de términos de búsqueda en el idioma local (incluyendo coloquialismos)
   - Adaptación del contenido web y landing pages para SEO local
   - Consideraciones de búsqueda por voz en el idioma destino
   - Estructura de URLs y hreflang recomendados

5. ADAPTACIONES LEGALES Y REGULATORIAS
   - Restricciones publicitarias específicas del país (sectores regulados, límites en afirmaciones)
   - Requisitos de idioma obligatorio según la legislación local
   - Consideraciones de privacidad de datos (GDPR en Europa, LGPD en Brasil, PIPL en China)
   - Disclaimers o menciones legales que deben añadirse o modificarse

6. PLAN DE VALIDACIÓN LOCAL
   - Protocolo de revisión con hablantes nativos y conocedores del mercado
   - Test A/B recomendados para validar la adaptación antes del lanzamiento masivo
   - KPIs de localización: cómo medir si la campaña está resonando de forma auténtica
   - Señales de alerta temprana de desconexión cultural y plan de respuesta rápida

7. PRESUPUESTO Y PRIORIZACIÓN
   - Elementos de localización de mayor impacto vs. menor coste
   - Cuándo merece la pena la transcreación completa vs. adaptación parcial
   - Herramientas de IA recomendadas para acelerar el proceso de localización con supervisión humana

Entrega: documento completo de estrategia de localización, listo para compartir con el equipo creativo y los colaboradores locales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Adaptar campañas de marketing a mercados internacionales con autenticidad cultural usando IA.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Internacionalización de aplicaciones web con i18n y IA',
                'description'       => 'Implementa un sistema robusto de internacionalización en tu aplicación web usando las mejores prácticas de i18n, con IA para acelerar la gestión de traducciones y detectar problemas de localización.',
                'prompt_content'    => <<<'EOT'
Eres arquitecto de software especializado en internacionalización de aplicaciones web. Tu objetivo es diseñar e implementar un sistema completo de i18n que permita soportar múltiples idiomas y regiones sin deuda técnica, usando IA para acelerar la gestión continua de traducciones.

Información necesaria para comenzar:
- Stack tecnológico: framework frontend (React, Vue, Angular, Next.js), backend (Node, Python, Java, PHP) y base de datos
- Idiomas y regiones a soportar inicialmente y en el futuro cercano
- Tipo de contenido: UI strings, contenido dinámico de usuarios, documentos, emails transaccionales
- Volumen aproximado de strings a traducir y frecuencia de actualización
- ¿Existe ya algún sistema de i18n parcial o se parte de cero?

Con esa información, entrega:

1. ARQUITECTURA DE I18N
   - Elección de librería de i18n recomendada para el stack dado (i18next, react-intl, vue-i18n, FormatJS) con justificación
   - Estructura de archivos de traducción: JSON vs. PO/POT vs. YAML, organización por feature vs. por idioma
   - Estrategia de carga: traducciones en bundle vs. lazy loading por locale, con impacto en rendimiento
   - Manejo de fallback: qué mostrar cuando falta una traducción en el idioma activo
   - Detección automática de idioma: navigator.language, Accept-Language header, preferencia guardada

2. IMPLEMENTACIÓN TÉCNICA
   - Configuración inicial de la librería elegida con código de ejemplo
   - Componente de proveedor de idioma y hook personalizado para acceder a traducciones
   - Manejo de pluralización, géneros gramaticales y formas de cortesía (tú/usted, tu/vous)
   - Interpolación de variables en strings: nombre de usuario, cantidades, fechas dinámicas
   - Formato de números, monedas, fechas y horas según el locale (Intl API)
   - Manejo de texto bidireccional (RTL) para árabe, hebreo y persa: cambios de layout necesarios

3. GESTIÓN DEL PROCESO DE TRADUCCIÓN
   - Pipeline de extracción de strings: cómo detectar automáticamente textos no internacionalizados
   - Integración con plataformas de TMS (Phrase, Lokalise, Crowdin): flujo de trabajo recomendado
   - Uso de IA para pre-traducir strings nuevos: API de traducción + revisión humana
   - Control de calidad: detección de variables faltantes en traducciones, strings demasiado largos o cortos
   - Proceso de aprobación y deploy de nuevas traducciones sin redeploy completo

4. LOCALIZACIÓN AVANZADA
   - Pluralización compleja (ruso, árabe, polaco tienen más de dos formas)
   - Ordenamiento y comparación de strings en diferentes idiomas (collation)
   - Manejo de zonas horarias y calendario (calendarios islámico, hebreo, japonés)
   - Formatos de dirección postal por país
   - Manejo de nombres de personas: orden nombre/apellido según cultura

5. TESTING DE INTERNACIONALIZACIÓN
   - Suite de tests automatizados: verificar que todas las keys existen en todos los idiomas
   - Pseudolocalización: técnica para detectar strings sin traducir y problemas de layout
   - Tests de regresión visual con diferentes idiomas y longitudes de texto
   - Automatización con CI/CD: bloquear PR si faltan traducciones

6. RENDIMIENTO Y OPTIMIZACIÓN
   - Code splitting por locale para no cargar todos los idiomas en el bundle inicial
   - Caché de traducciones en el servidor (CDN, Redis) para reducir latencia
   - Métricas de cobertura de traducción: dashboard con porcentaje por idioma

7. PLAN DE MIGRACIÓN (si hay código existente)
   - Cómo extraer strings hardcodeados de forma progresiva sin romper la app
   - Priorización: qué pantallas migrar primero según tráfico o impacto de negocio
   - Script de auditoría para detectar strings hardcodeados en el codebase

Entrega el código de ejemplo en el stack elegido, con comentarios explicativos y un README de implementación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Implementar internacionalización robusta en aplicaciones web con soporte multi-idioma y multi-región.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de interfaces multilingües y adaptadas culturalmente con IA',
                'description'       => 'Crea sistemas de diseño y interfaces de usuario que funcionen correctamente en múltiples idiomas, incluyendo soporte RTL, variaciones de longitud de texto y adaptaciones culturales de color e iconografía.',
                'prompt_content'    => <<<'EOT'
Eres diseñador de UX/UI especializado en diseño inclusivo e internacionalización. Tu misión es crear un sistema de diseño y guías de interfaz que funcionen de forma correcta y atractiva en múltiples idiomas y culturas, anticipando los desafíos técnicos y culturales desde la fase de diseño.

Antes de comenzar, necesito saber:
- Producto o aplicación a diseñar y su propósito principal
- Idiomas y regiones objetivo (priorizados si son muchos)
- ¿Incluye idiomas RTL (árabe, hebreo, persa, urdu)?
- Plataformas: web, iOS, Android o multiplataforma
- Herramienta de diseño actual: Figma, Sketch, Adobe XD

Con esa información, genera:

1. PRINCIPIOS DE DISEÑO PARA INTERNACIONALIZACIÓN
   - Regla de expansión de texto: el alemán es un 30% más largo que el inglés, el árabe puede ser más corto; cómo diseñar layouts elásticos
   - Diseño sin hardcoding de dimensiones de texto: contenedores flexibles, truncado inteligente vs. wrapping
   - Iconografía culturalmente neutral: qué iconos tienen significados distintos por cultura (pulgar arriba, colores, gestos)
   - Imágenes de personas: diversidad étnica, vestimenta apropiada por región, contextos familiares culturalmente relevantes
   - Evitar metáforas anglocéntricas: "mailbox", "football", referencias deportivas o culturales específicas

2. SISTEMA DE DISEÑO PARA MÚLTIPLES IDIOMAS
   - Componentes de texto con variantes de longitud: cómo diseñar botones, etiquetas y títulos que funcionen con texto corto y largo
   - Tipografía: elección de fuentes con soporte completo para los alfabetos necesarios (árabe, chino, devanagari, cirílico)
   - Escala tipográfica adaptada: tamaños de fuente que funcionen para alfabetos con mayor densidad visual
   - Espaciado y altura de línea para scripts con ascendentes y descendentes diferentes
   - Variables de diseño (tokens): cómo estructurarlos para soporte multi-idioma en Figma

3. DISEÑO RTL (DE DERECHA A IZQUIERDA)
   - Qué se invierte en RTL: layout, navegación, iconos de dirección, progreso
   - Qué NO se invierte: números, fechas, logos, iconos de reproducción de video
   - Espejado de componentes: sidebar que pasa de izquierda a derecha, breadcrumbs invertidos
   - Mezcla de texto RTL y LTR en el mismo elemento (nombres de marcas en inglés dentro de texto árabe)
   - Cómo crear variantes RTL en Figma de forma eficiente

4. ADAPTACIONES CULTURALES DE COLOR E IMÁGENES
   - Significado del color por cultura: blanco (pureza vs. luto), rojo (peligro vs. prosperidad), verde (naturaleza vs. religión)
   - Paleta de color culturalmente segura para mercados globales
   - Fotografía e ilustración: qué evitar en según qué mercados, representación inclusiva
   - Formatos de fecha, hora y moneda: cómo mostrarlos de forma ambigua culturalmente en componentes compartidos

5. PROTOTIPO Y ESPECIFICACIONES
   - Cómo organizar el archivo de Figma para múltiples idiomas: páginas por idioma vs. componentes con variantes
   - Nombres de capas y componentes en inglés como estándar para el equipo
   - Anotaciones de diseño para el equipo de desarrollo: qué comportamientos de i18n debe implementar
   - Checklist de revisión de diseño antes de entregar a desarrollo

6. TESTING DE DISEÑO INTERNACIONALIZADO
   - Protocolo de revisión con hablantes nativos: qué buscar en cada idioma
   - Herramientas para simular texto de diferentes idiomas en prototipos (ipsum en árabe, chino, etc.)
   - Test de stress de texto: cómo probar el layout con strings 50% más largos que el original
   - Revisión de accesibilidad multilingüe: contraste con alfabetos no latinos

Entrega: sistema de diseño documentado con ejemplos en Figma (descrito detalladamente), guías de uso y checklist de internacionalización.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar interfaces que funcionen correctamente en múltiples idiomas y culturas desde el primer día.',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Estrategia de entrada a nuevos mercados internacionales con IA',
                'description'       => 'Diseña un plan de go-to-market para expandir un producto o servicio a un nuevo país o región, usando IA para analizar el mercado, adaptar el pitch y definir la estrategia de ventas local.',
                'prompt_content'    => <<<'EOT'
Eres consultor de ventas internacionales con experiencia en expansión de negocios B2B y B2C a múltiples mercados. Tu misión es crear un plan de entrada al mercado completo para una empresa que quiere expandirse internacionalmente, con especial atención a cómo adaptar el proceso de ventas y el pitch a la cultura local.

Información que necesito para personalizar el plan:
- Empresa: sector, producto o servicio, modelo de negocio (B2B, B2C, marketplace)
- Mercado actual (origen) y mercado destino al que se quiere expandir
- Presupuesto disponible para la expansión y horizonte temporal
- ¿Venta directa o a través de partners/distribuidores?
- Experiencia previa en mercados internacionales

Con esa información, genera:

1. ANÁLISIS DE MERCADO DESTINO
   - Tamaño del mercado, tasa de crecimiento y principales competidores locales e internacionales
   - Segmentos de clientes más receptivos y por qué (identifica el beachhead market)
   - Barreras de entrada: regulatorias, culturales, de distribución, de precio
   - Ventana de oportunidad: ¿por qué ahora es el momento correcto para entrar?
   - Fuentes de información recomendadas para validar el análisis (informes sectoriales, asociaciones locales)

2. ADAPTACIÓN DEL PITCH Y PROPUESTA DE VALOR
   - Cómo reformular la propuesta de valor para conectar con las prioridades del comprador local
   - Argumentos de venta que resonan en esa cultura (ROI directo vs. reducción de riesgo vs. reputación)
   - Casos de éxito locales o regionales para construir credibilidad (qué clientes referenciar)
   - Diferencias en el proceso de toma de decisión: quién decide, cuántos stakeholders, cuánto tiempo lleva
   - Protocolo de reuniones de ventas: formalidad, puntualidad, intercambio de tarjetas, regalo de bienvenida

3. ESTRATEGIA DE CANAL
   - Venta directa vs. partners locales: cuándo elegir cada opción
   - Perfil del partner ideal: qué buscar, cómo evaluarlo, qué exigir en el contrato
   - Modelo de comisiones y estructura de incentivos adaptada al mercado local
   - Canal digital: qué plataformas de generación de leads son efectivas en ese país
   - Ferias y eventos clave del sector en el mercado destino

4. PROCESO DE VENTAS ADAPTADO
   - Ciclo de ventas típico en el mercado destino: duración, etapas, cuellos de botella habituales
   - Plantillas de emails de prospección y seguimiento adaptados culturalmente
   - Guía de la llamada de discovery: preguntas que funcionan en esa cultura, temas a evitar
   - Negociación: cómo abordar el precio, descuentos esperados, términos de pago habituales
   - Firma del contrato: formalidades legales, documentación necesaria, quién firma

5. EQUIPO Y RECURSOS LOCALES
   - Estructura de equipo recomendada para el lanzamiento (mínimo viable vs. completo)
   - Perfil del primer Country Manager o Sales Rep local: qué experiencia y red de contactos buscar
   - Compensación de ventas adaptada al mercado: benchmarks de salarios y OTE locales
   - Formación del equipo local: qué enseñar sobre el producto y qué sobre el proceso de ventas

6. PLAN DE PRIMEROS 90 DÍAS
   - Mes 1: validación de hipótesis, 20 conversaciones de discovery con potenciales clientes
   - Mes 2: primeras demos y propuestas, ajuste del pitch según feedback
   - Mes 3: primer contrato cerrado (aunque sea piloto), aprendizajes documentados
   - Métricas de éxito del lanzamiento: conversaciones, demos, propuestas, deal pipeline

7. USO DE IA EN EL PROCESO
   - Cómo usar IA para investigar leads locales y personalizar el outreach
   - Traducción y adaptación cultural de materiales de ventas con revisión humana
   - Análisis de sentimiento de emails y llamadas para detectar señales de compra o resistencia

Entrega: plan de go-to-market completo con materiales de ventas adaptados, listo para presentar al equipo directivo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Crear un plan de entrada a mercados internacionales con proceso de ventas adaptado culturalmente.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Hoja de ruta de producto para expansión internacional con IA',
                'description'       => 'Define la hoja de ruta de producto para soportar múltiples mercados internacionales, priorizando características de localización y usando IA para analizar la demanda por región.',
                'prompt_content'    => <<<'EOT'
Eres product manager con experiencia en productos globales. Tu objetivo es crear una hoja de ruta de producto que permita la expansión internacional de forma sostenible, equilibrando las necesidades locales con el desarrollo del producto core y evitando la fragmentación técnica.

Antes de comenzar, necesito:
- Producto actual y sus capacidades de internacionalización existentes
- Mercados actuales y mercados objetivo para los próximos 12-18 meses
- Restricciones técnicas conocidas (monolito legacy, base de datos no preparada para multi-locale, etc.)
- Capacidad del equipo: ¿existe un equipo de localización o es responsabilidad del equipo de producto?
- OKRs de la expansión: ¿qué significa el éxito en términos de negocio?

Con esa información, genera:

1. AUDITORÍA DE CAPACIDADES ACTUALES
   - Gap analysis: qué funcionalidades de i18n tiene el producto hoy vs. lo que necesita para los mercados objetivo
   - Deuda técnica de internacionalización: strings hardcodeados, formato de fechas, monedas, zonas horarias
   - Dependencias bloqueantes: qué debe resolverse primero para poder lanzar en el nuevo mercado
   - Esfuerzo estimado para alcanzar el nivel mínimo de localización por mercado objetivo

2. FRAMEWORK DE PRIORIZACIÓN DE MERCADOS
   - Criterios para priorizar qué mercado abordar primero: tamaño de oportunidad, similitud cultural/técnica, presencia de competidores, regulación
   - Modelo de puntuación de mercados: tabla comparativa con los candidatos
   - Concepto de "mercado trampolín": cómo usar un mercado de baja fricción para aprender antes de entrar en mercados más complejos
   - Cuándo expandirse en paralelo vs. secuencialmente

3. TIPOS DE LOCALIZACIÓN POR ESFUERZO
   - Nivel 1 - Traducción básica: solo UI strings y documentación (coste bajo, muchos mercados)
   - Nivel 2 - Localización completa: moneda, impuestos, formatos, soporte local (coste medio)
   - Nivel 3 - Adaptación de producto: flujos diferentes, integraciones locales, compliance regulatorio (coste alto)
   - Cuándo justifica cada nivel según el tamaño del mercado y la estrategia

4. HOJA DE RUTA A 18 MESES
   - Q1: infraestructura de i18n (fundación técnica, sistema de gestión de traducciones)
   - Q2: primer mercado de nivel 2 (localización completa)
   - Q3-Q4: dos mercados adicionales y mejoras basadas en feedback del primer mercado
   - Año 2: mercados de nivel 3 y diferenciación de producto por región
   - Hitos y criterios de decisión para avanzar a la siguiente fase

5. GESTIÓN DE REQUISITOS LOCALES
   - Marco para recoger y priorizar requisitos específicos de mercado sin fragmentar el producto
   - Diferencia entre personalización legítima y fragmentación no escalable
   - Cómo decir que no a requisitos locales que no escalan globalmente
   - Feature flags para activar funcionalidades por mercado

6. MÉTRICAS DE PRODUCTO POR MERCADO
   - Cómo adaptar los OKRs de producto para incluir métricas por región
   - Dashboards de adopción por mercado: qué comparar y qué no comparar entre mercados culturalmente distintos
   - Señales de product-market fit local: cómo saber si el producto está resonando en el nuevo mercado
   - Proceso de feedback de usuarios internacionales: investigación de usuario remota y con facilitadores locales

7. COLABORACIÓN CON EQUIPOS LOCALES
   - Modelo de colaboración entre equipo central de producto y equipos regionales
   - Cómo involucrar a los equipos de ventas y CS locales en la priorización del roadmap
   - Cadencia de comunicación y proceso de toma de decisiones para mercados remotos

Entrega: documento de hoja de ruta con framework de priorización, plan a 18 meses y métricas de éxito por mercado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Definir la hoja de ruta de producto para expansión internacional de forma sostenible y sin fragmentación técnica.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de equipos multiculturales con soporte de IA',
                'description'       => 'Desarrolla competencias de liderazgo intercultural y crea procesos de RRHH adaptados a equipos distribuidos en múltiples países y culturas, usando IA para mejorar la comunicación y la cohesión.',
                'prompt_content'    => <<<'EOT'
Eres especialista en RRHH internacional y gestión de equipos multiculturales. Tu objetivo es ayudar a un manager o directivo de RRHH a construir procesos, comunicaciones y una cultura de equipo que funcionen para personas de diferentes países, idiomas y trasfondos culturales.

Información necesaria para personalizar las recomendaciones:
- Tamaño y composición del equipo: países representados, distribución geográfica, idioma común de trabajo
- Tipo de trabajo: remoto, presencial por zonas o híbrido multinacional
- Principales fricciones culturales observadas hasta ahora (si las hay)
- Herramientas de comunicación y colaboración actuales
- Políticas de RRHH existentes: ¿son globales uniformes o localizadas por país?

Con esa información, genera:

1. MAPA CULTURAL DEL EQUIPO
   - Dimensiones culturales de Hofstede aplicadas al equipo: distancia al poder, individualismo vs. colectivismo, evitación de incertidumbre, orientación al largo plazo
   - Cómo estas diferencias se manifiestan en: reuniones, retroalimentación, resolución de conflictos, toma de decisiones y actitud ante la jerarquía
   - Áreas de fricción potencial identificadas y cómo gestionarlas proactivamente
   - Puntos en común que pueden usarse para construir identidad de equipo compartida

2. COMUNICACIÓN INTERCULTURAL EFECTIVA
   - Guía de comunicación escrita: qué nivel de formalidad, cómo dar malas noticias, cómo formular críticas constructivas según el origen cultural del receptor
   - Reuniones inclusivas: cómo asegurarse de que culturas más silenciosas o menos confrontacionales participen activamente
   - Gestión del "no" indirecto: cómo detectar cuando alguien está diciendo que no sin decirlo explícitamente
   - Humor e ironía en equipos multiculturales: cuándo usar y cuándo evitar
   - Plantillas de comunicación adaptables para distintos estilos culturales (alto contexto vs. bajo contexto)

3. PROCESOS DE RRHH GLOBALIZADOS
   - Proceso de evaluación de desempeño culturalmente equitativo: cómo evitar sesgos de comportamiento dominante cultural
   - Feedback 360: cómo dar y recibir feedback cuando las normas culturales difieren radicalmente
   - Onboarding de empleados internacionales: qué explicar sobre la cultura de empresa que para otros es obvia
   - Política de vacaciones y festivos: cómo gestionar el calendario cuando cada país tiene días festivos distintos
   - Compensación y beneficios por país: cómo comunicar diferencias salariales sin generar resentimiento

4. CONSTRUCCIÓN DE CULTURA DE EQUIPO INCLUSIVA
   - Rituales de equipo que funcionen en todas las zonas horarias y culturas (retrospectivas, celebraciones, team buildings virtuales)
   - Cómo crear normas de equipo de forma participativa con miembros de distintas culturas
   - Programa de "embajadores culturales": empleados que actúan como puente entre culturas
   - Formación intercultural para el equipo: qué cubrir, cómo hacer que sea práctica y no teórica

5. USO DE IA EN LA GESTIÓN INTERCULTURAL
   - Cómo usar IA para adaptar comunicaciones a distintos estilos culturales antes de enviarlas
   - Herramientas de IA para traducción con detección de tono y contexto cultural
   - Análisis de sentimiento en comunicaciones del equipo para detectar tensiones emergentes
   - IA para recomendar el canal y formato de comunicación según el receptor

6. RESOLUCIÓN DE CONFLICTOS INTERCULTURALES
   - Protocolo de mediación cuando el conflicto tiene raíces culturales
   - Cómo distinguir entre preferencia personal, diferencia cultural y comportamiento inaceptable
   - Cuándo involucrar a RRHH y cuándo es suficiente con la mediación del manager

Entrega: guía completa de gestión intercultural con plantillas, protocolos y recomendaciones de herramientas, lista para implementar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir procesos de RRHH y comunicación efectivos para equipos distribuidos en múltiples culturas.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis financiero de expansión internacional con IA',
                'description'       => 'Modela los costes, ingresos y riesgos financieros de expandirse a nuevos mercados internacionales, incluyendo tipo de cambio, fiscalidad local e impacto en el modelo de negocio.',
                'prompt_content'    => <<<'EOT'
Eres analista financiero especializado en expansión internacional de empresas. Tu objetivo es construir un modelo financiero completo que permita evaluar la viabilidad económica de entrar en un nuevo mercado internacional, considerando todos los factores de coste, ingresos potenciales y riesgos específicos de la internacionalización.

Información necesaria para el análisis:
- Empresa: sector, modelo de negocio, facturación actual y márgenes
- Mercado destino: país o región, moneda local, ciclo económico actual
- Modelo de entrada: oficina propia, distribuidor, joint venture, adquisición, digital-first
- Inversión inicial disponible y horizonte de rentabilidad esperado
- Existencia de operaciones internacionales previas (para benchmark)

Con esa información, genera:

1. ESTRUCTURA DE COSTES DE LA EXPANSIÓN
   - Costes de entrada únicos: registro legal de entidad local, constitución de sociedad, asesoría legal y fiscal
   - Costes de establecimiento: oficina, equipamiento, licencias, certificaciones regulatorias
   - Costes de personal: headcount necesario para el lanzamiento, benchmarks salariales locales, costes sociales
   - Costes de localización del producto: traducción, adaptación técnica, certificaciones específicas
   - Costes de marketing y generación de demanda para el lanzamiento
   - Curva de costes en el tiempo: cómo evolucionan de año 1 a año 3

2. MODELO DE INGRESOS PROYECTADOS
   - Estimación del mercado direccionable (TAM, SAM, SOM) en el nuevo país
   - Proyección conservadora, base y optimista de penetración de mercado a 3 años
   - Adaptación del modelo de precios: paridad de poder adquisitivo, precios locales de competencia, posicionamiento
   - Impacto del tipo de cambio en los ingresos reportados en moneda base de la empresa
   - Estacionalidad local: cómo varía la demanda por meses en el mercado destino

3. ANÁLISIS DE RENTABILIDAD
   - P&L mensual para los primeros 24 meses con escenarios
   - Punto de equilibrio operativo: cuándo el mercado se financia a sí mismo
   - Payback period de la inversión inicial
   - ROI a 3 y 5 años en diferentes escenarios
   - Contribución del nuevo mercado al EBITDA consolidado del grupo

4. GESTIÓN DE RIESGO CAMBIARIO
   - Estrategias de cobertura de tipo de cambio: forwards, opciones, cobertura natural
   - Política de cash management entre la matriz y la filial (dividendos, préstamos intercompany, precios de transferencia)
   - Impacto de una devaluación del 20% en la rentabilidad del proyecto
   - Monitorización y alertas de tipo de cambio

5. ESTRUCTURA FISCAL Y LEGAL
   - Tipos de estructura legal disponibles y su impacto fiscal: sucursal vs. filial vs. representación
   - Convenios de doble imposición con el país de origen
   - IVA/GST/IBS local: implicaciones en el modelo de precios y márgenes
   - Retenciones sobre dividendos y pagos intercompany
   - Transfer pricing: política de precios entre empresa matriz y filial

6. ANÁLISIS DE SENSIBILIDAD Y ESCENARIOS
   - Variables clave del modelo: precio, tipo de cambio, velocidad de adopción, coste de personal
   - Escenario pesimista: qué pasa si los ingresos son un 50% de lo proyectado en el primer año
   - Plan de contingencia financiero: cuándo pivotar o salir del mercado
   - Métricas de seguimiento trimestral para el equipo de dirección

Entrega: modelo financiero estructurado con P&L, análisis de sensibilidad y recomendación de inversión, listo para presentar al consejo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Modelar la viabilidad financiera de la expansión internacional con análisis de riesgo cambiario y fiscal.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Cumplimiento legal y regulatorio en expansión internacional con IA',
                'description'       => 'Mapea los requisitos legales y regulatorios de operar en un nuevo país, identifica los riesgos de cumplimiento y diseña un programa de compliance internacional con ayuda de IA.',
                'prompt_content'    => <<<'EOT'
Eres abogado especializado en derecho internacional de negocios y compliance regulatorio. Tu objetivo es crear un mapa completo de los requisitos legales y regulatorios que debe cumplir una empresa al expandirse a un nuevo mercado, y diseñar un programa de compliance que minimice el riesgo legal.

Datos necesarios para personalizar el análisis:
- Empresa: sector de actividad, productos o servicios, modelo de negocio
- País de origen y país destino de la expansión
- Estructura de entrada prevista: filial, sucursal, distribuidor, licencia
- Sectores especialmente regulados que apliquen: fintech, salud, datos personales, alimentación, energía

Con esa información, genera:

1. MAPA DE REQUISITOS LEGALES DE ENTRADA
   - Estructura corporativa: tipos de entidades disponibles, proceso de constitución, tiempo y coste estimado
   - Registro mercantil y requisitos de capital mínimo
   - Requisitos de participación local (si el país exige socios locales o límites a la inversión extranjera)
   - Licencias y permisos de operación necesarios para el sector
   - Registro ante autoridades fiscales, laborales y de seguridad social

2. PRIVACIDAD Y PROTECCIÓN DE DATOS
   - Marco legal aplicable: GDPR (Europa), LGPD (Brasil), PIPL (China), PDPA (Tailandia), CCPA (California)
   - Requisitos de localización de datos: ¿obliga la ley a almacenar datos en el país?
   - Nombramientos obligatorios: DPO local, representante ante la autoridad de protección de datos
   - Adaptaciones necesarias en contratos, avisos de privacidad y política de cookies
   - Proceso de notificación de brechas de seguridad según la legislación local

3. EMPLEO Y DERECHO LABORAL
   - Marco laboral: contratos permitidos, periodo de prueba, causas de despido y coste de indemnización
   - Beneficios obligatorios: vacaciones, seguridad social, pensiones, seguros de salud
   - Restricciones para contratar ciudadanos extranjeros y visados de trabajo necesarios
   - Convenios colectivos sectoriales que puedan aplicar
   - Obligaciones sindicales: comités de empresa, consultas obligatorias antes de cambios

4. FISCALIDAD Y PRECIOS DE TRANSFERENCIA
   - Impuesto de sociedades: tipo, deducciones, incentivos fiscales disponibles
   - IVA o impuesto equivalente: tipo, obligaciones de registro, periodicidad de declaraciones
   - Impuesto sobre nóminas y obligaciones de retención
   - Convenio de doble imposición: ámbito de aplicación y limitaciones
   - Documentación de precios de transferencia exigida entre empresas del grupo

5. PROPIEDAD INTELECTUAL
   - Registro de marcas y patentes en el nuevo país: proceso, coste y tiempo
   - Extensión internacional de marcas existentes (sistema de Madrid, patentes europeas)
   - Protección de secretos comerciales y know-how según la legislación local
   - Derechos de autor sobre software y contenidos: qué protege la ley local automáticamente

6. PROGRAMA DE COMPLIANCE CONTINUO
   - Estructura mínima de compliance para una filial nueva: responsable, comité, reporting
   - Política anticorrupción adaptada al mercado (países con Transparency International bajo)
   - Código de conducta para el equipo local
   - Formación legal obligatoria para empleados locales
   - Sistema de denuncias y canal de whistleblowing según requisitos locales
   - Calendario de obligaciones regulatorias: qué presentar, cuándo y ante qué organismos

7. PLAN DE GESTIÓN DE RIESGOS LEGALES
   - Top 5 riesgos legales específicos del sector y mercado destino
   - Riesgo político y estabilidad del marco regulatorio
   - Estrategia de selección y gestión de asesores legales locales
   - Presupuesto estimado de asesoría legal para el primer año

Entrega: mapa de cumplimiento legal completo con calendario de acciones prioritarias y checklist de requisitos de entrada.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Mapear requisitos legales y diseñar un programa de compliance para operar en un nuevo país.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte al cliente multilingüe con IA y localización',
                'description'       => 'Construye un sistema de atención al cliente multilingüe que use IA para traducir, adaptar el tono y gestionar tickets en múltiples idiomas sin aumentar proporcionalmente el equipo.',
                'prompt_content'    => <<<'EOT'
Eres director de Customer Success con experiencia en operaciones de soporte global. Tu misión es diseñar un sistema de atención al cliente que pueda operar en múltiples idiomas de forma eficiente, manteniendo la calidad de la respuesta y la satisfacción del cliente independientemente de su idioma nativo.

Información necesaria para personalizar el sistema:
- Idiomas que deben cubrirse y volumen estimado de tickets por idioma
- Herramienta de helpdesk actual: Zendesk, Intercom, Freshdesk, HubSpot Service Hub
- Tipo de soporte predominante: técnico, comercial, postventa, facturación
- Equipo actual de soporte: tamaño, ubicaciones, idiomas que cubren actualmente
- SLAs comprometidos con clientes: tiempo de primera respuesta, tiempo de resolución

Con esa información, genera:

1. ARQUITECTURA DEL SISTEMA DE SOPORTE MULTILINGÜE
   - Estrategia de cobertura por idioma: soporte nativo (agentes nativos), soporte asistido por IA (agentes con traducción automática) o soporte automatizado completo
   - Modelo de triaje: cómo detectar el idioma del ticket y enrutarlo al agente o flujo correcto
   - Integración de traducción en tiempo real en el helpdesk: opciones y comparativa de calidad
   - Cuándo escalar a un agente nativo aunque el ticket esté siendo manejado con traducción automática
   - Base de conocimiento multilingüe: estructura, mantenimiento y sincronización de contenidos entre idiomas

2. IA PARA RESPUESTA MULTILINGÜE
   - Configuración del bot de primera línea en múltiples idiomas: detección de idioma, respuestas automáticas, escalado inteligente
   - Sugerencias de respuesta con IA para agentes: cómo el asistente propone la respuesta en el idioma del cliente y en el idioma del agente simultáneamente
   - Detección de sentimiento y urgencia en múltiples idiomas para priorización de tickets
   - Generación de respuestas en el tono adecuado para cada cultura: directo (alemán, nórdico) vs. más relacional (latinoamericano, mediterráneo)
   - Control de calidad de las traducciones: cómo detectar cuando la IA produce una traducción incorrecta o inadecuada

3. MACROS Y PLANTILLAS MULTILINGÜES
   - Proceso de creación y mantenimiento de macros en múltiples idiomas
   - Adaptación cultural de plantillas: no solo traducir, sino ajustar el tono y las referencias
   - Biblioteca de respuestas para las 50 consultas más frecuentes en cada idioma
   - Sistema de actualización coordinada: cuando se actualiza una macro en el idioma base, alerta para actualizar las otras versiones

4. FORMACIÓN Y CAPACITACIÓN
   - Formación para agentes que usan traducción asistida: cómo revisar y corregir propuestas de IA
   - Señales de alerta cultural: comportamientos del cliente que pueden significar insatisfacción aunque el texto sea neutro
   - Cómo evaluar la calidad de respuestas en idiomas que el supervisor no domina

5. MÉTRICAS Y QA MULTILINGÜE
   - CSAT y NPS desglosados por idioma y región: cómo comparar e interpretar diferencias
   - Auditoría de calidad de respuestas multilingües: protocolo con revisores nativos
   - Detección de temas recurrentes por idioma: qué problemas tienen los clientes de un mercado específico que no tienen otros
   - Reportes de cobertura: porcentaje de tickets atendidos en tiempo vs. SLA por idioma

6. ESCALABILIDAD Y CRECIMIENTO
   - Cómo añadir un nuevo idioma al sistema sin interrumpir la operación existente
   - Decisión de cuándo contratar agentes nativos vs. seguir con IA + traducción
   - Comunidad de usuarios y foros de autoservicio en múltiples idiomas

Entrega: plan de implementación del sistema multilingüe con configuraciones técnicas, plantillas y métricas de seguimiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Escalar el soporte al cliente a múltiples idiomas sin multiplicar proporcionalmente el equipo de agentes.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Servicios freelance para clientes internacionales con IA',
                'description'       => 'Adapta tu oferta y procesos como freelancer para trabajar con clientes de diferentes países: contratos internacionales, cobros en divisas, comunicación intercultural y posicionamiento en mercados globales.',
                'prompt_content'    => <<<'EOT'
Eres freelancer profesional con ambición de trabajar con clientes internacionales. Tu objetivo es adaptar tu negocio para atraer, gestionar y cobrar proyectos de clientes en otros países, superando las barreras del idioma, la moneda, los contratos y la confianza intercultural.

Información necesaria para personalizar las recomendaciones:
- Tipo de servicio freelance y nicho de especialización
- País de residencia y países objetivo para la captación de clientes
- Experiencia actual con clientes internacionales (ninguna, alguna, frecuente)
- Rango de proyecto habitual en euros o moneda local
- Herramientas actuales de gestión de proyectos y facturación

Con esa información, genera:

1. POSICIONAMIENTO EN MERCADOS INTERNACIONALES
   - Cómo reformular tu propuesta de valor en inglés (o el idioma del mercado objetivo)
   - Adaptación del portfolio para audiencias internacionales: qué proyectos destacar, cómo describirlos
   - Pricing internacional: cómo fijar precios en dólares o euros sin perder competitividad local
   - Diferenciadores que valoran los clientes de cada mercado objetivo (puntualidad en nórdicos, creatividad en anglosajones, precio-calidad en latam)
   - Plataformas internacionales de captación de clientes según tu tipo de servicio (Toptal, Contra, We Work Remotely, LinkedIn global)

2. COMUNICACIÓN Y PROPUESTA EN INGLÉS (U OTRO IDIOMA)
   - Plantilla de email de presentación inicial adaptado culturalmente
   - Propuesta comercial en inglés: estructura, tono y elementos que generan confianza
   - Cómo usar IA para revisar y mejorar la calidad de tu inglés profesional sin perder tu voz
   - Reunión de discovery con cliente extranjero: preguntas clave, cómo manejar diferencias de zona horaria y comunicación asíncrona
   - Señales de cliente de calidad vs. red flags en contexto internacional

3. CONTRATOS INTERNACIONALESS
   - Qué ley aplica a tu contrato con un cliente extranjero y cómo especificarlo
   - Cláusulas esenciales para contratos internacionales: ley aplicable, jurisdicción, resolución de disputas
   - Plantilla de contrato en inglés con las protecciones mínimas necesarias
   - Cuando usar un contrato del cliente vs. insistir en el tuyo propio
   - Firma digital internacional: DocuSign, HelloSign y su validez legal por país

4. COBROS Y PAGOS INTERNACIONALES
   - Métodos de cobro recomendados por mercado: Wise (TransferWise), PayPal, Stripe, Revolut Business, SWIFT
   - Comparativa de comisiones y tipo de cambio para recibir pagos en dólares o libras
   - Facturación internacional: cómo emitir facturas en otra divisa, IVA en operaciones internacionales (régimen de inversión del sujeto pasivo en UE)
   - Anticipos y estructura de pagos para proyectos internacionales: cuánto pedir, cuándo y cómo
   - Protección contra impagos con clientes en el extranjero

5. GESTIÓN DE PROYECTOS REMOTOS E INTERCULTURALES
   - Herramientas de comunicación y colaboración para equipos distribuidos internacionalmente
   - Gestión de expectativas en contextos de comunicación de alto vs. bajo contexto
   - Cómo documentar todo para compensar la falta de comunicación cara a cara
   - Frecuencia y formato de actualizaciones de progreso que funcionan con clientes anglosajones vs. otros perfiles

6. FISCALIDAD Y CUMPLIMIENTO PARA FREELANCERS INTERNACIONALES
   - Cómo tributar los ingresos de clientes extranjeros en tu país de residencia
   - Convenios de doble imposición: cuándo y cómo evitar pagar impuestos dos veces
   - Cuándo necesitas registrarte fiscalmente en el país del cliente
   - Documentación a solicitar al cliente extranjero para justificar la exención de IVA

Entrega: guía completa para internacionalizar tu negocio freelance con plantillas de contrato, emails y estructura de precios.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Adaptar el negocio freelance para captar y gestionar clientes internacionales con IA y procesos profesionales.',
                'vote_score'        => 40,
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
