<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills45Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'TikTok para marcas: estrategia de contenido orgánico que genera awareness sin pagar',
                'description'      => 'Estrategia completa de contenido orgánico en TikTok para marcas, con formatos que funcionan, calendario editorial, guión de vídeos y métricas de crecimiento sin inversión en publicidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un estratega de redes sociales especializado en TikTok y contenido de vídeo corto para marcas. Tu enfoque es el contenido orgánico que genera awareness real y comunidad, no el que solo acumula impresiones vacías. Necesito que me ayudes a construir la presencia de mi marca en TikTok desde cero o a mejorar la que ya tengo.

## MI SITUACIÓN

- Nombre y sector de la marca: [tu respuesta]
- Producto o servicio: [descripción en 2 líneas]
- Público objetivo: [edad, intereses, comportamiento en TikTok]
- ¿Ya tienes cuenta en TikTok?: [Sí — estadísticas actuales / No — empezamos desde cero]
- Recursos disponibles para producción: [smartphone / cámara profesional / equipo de vídeo]
- Persona/s que aparecerán en cámara: [descripción del perfil: fundador, empleado, personaje de marca]
- Competidores que admiras en TikTok: [nombres de cuentas]
- Objetivo principal: [awareness / seguidores / tráfico web / ventas directas]

---

## MÓDULO 1 — DIAGNÓSTICO Y POSICIONAMIENTO EN TIKTOK

### 1.1 El nicho de TikTok de tu marca

El algoritmo de TikTok premia la consistencia temática. Define para mi marca:
- El nicho específico al que voy a pertenecer en TikTok (más concreto que el sector)
- Los 3 "hashtag communities" principales donde debe aparecer mi contenido
- El arquetipo de cuenta que debo adoptar (educador / entretenedor / insider / crítico / inspirador)
- El "gancho de identidad": la frase en 6 palabras que describe qué encuentran en mi cuenta

### 1.2 Análisis de la competencia en TikTok

Para cada competidor que he mencionado, ayúdame a analizar:
- Qué formatos de vídeo les funcionan mejor (por número de vistas)
- Qué temas generan más comentarios (señal de comunidad real)
- Qué están haciendo mal que yo puedo hacer mejor
- Qué gap de contenido existe en el nicho que nadie está cubriendo

---

## MÓDULO 2 — ESTRATEGIA DE CONTENIDO

### 2.1 La regla 70/20/10 adaptada a TikTok

Diseña el mix de contenido para mi marca:
- **70% — Contenido de comunidad**: entretenimiento, tendencias, humor, cultura del nicho. Ejemplos específicos para mi sector
- **20% — Contenido de valor**: educación, tutoriales, datos sorprendentes, desmitificación. Ejemplos con mis productos o servicios
- **10% — Contenido de marca**: menciones de producto, casos de éxito, behind the scenes del negocio

### 2.2 Los 8 formatos que funcionan orgánicamente en 2024-2025

Para cada formato, da un ejemplo concreto aplicado a mi marca:

1. **El before/after**: transformación visual en 15-30 segundos
2. **El "no sabías que..."**: dato sorprendente del sector
3. **El error que todos cometen**: crítica constructiva que genera engagement
4. **El día en mi empresa**: behind the scenes auténtico, sin producción
5. **La respuesta al comentario**: la mejor excusa para crear contenido reactivo
6. **El tutorial rápido**: cómo hacer algo relevante en menos de 60 segundos
7. **El "POV" de tu cliente**: el problema que resuelves desde la perspectiva de quien lo vive
8. **La tendencia adaptada**: un sonido viral o un formato trending aplicado a tu nicho

### 2.3 Calendario editorial de 4 semanas (20 vídeos)

Crea el calendario con:
- Día y hora de publicación recomendada
- Formato a usar
- Tema o guión en 1 línea
- Métricas de éxito esperadas (vistas, comentarios, shares)
- Sonido o hashtags principales

---

## MÓDULO 3 — GUIONES DE VÍDEO

Escribe los guiones completos de los primeros 3 vídeos usando esta estructura:

**Estructura de guión TikTok (30-60 segundos):**
- **[0-3 seg] GANCHO VISUAL + VERBAL**: la frase o imagen que hace parar el scroll
- **[3-10 seg] SETUP**: contexto mínimo necesario para entender el vídeo
- **[10-45 seg] CUERPO**: el contenido prometido, entregado de forma densa y rápida
- **[45-60 seg] CIERRE + CTA**: remate memorable + llamada a la acción (comentar, seguir, guardar)

Para cada guión incluye también:
- Indicaciones de cámara (primer plano / plano general / texto en pantalla)
- Texto en pantalla recomendado (hooks visuales)
- Sonido sugerido (tendencia o música de fondo)
- Descripción del vídeo + hashtags (máx. 5 hashtags relevantes)

---

## MÓDULO 4 — CRECIMIENTO ORGÁNICO: LAS PALANCAS

### 4.1 Cómo funciona el algoritmo de TikTok (lo que importa de verdad)

Explica las señales que TikTok usa para decidir a cuántas personas muestra un vídeo, en este orden de importancia:
- Tiempo de visualización y loops
- Comentarios y shares
- Guardados en colecciones
- Follows tras ver el vídeo
- El papel de los primeros 500 followers (el "micro-FYP" inicial)

### 4.2 Las 5 palancas de aceleración que no cuestan dinero

Para cada palanca, explica la táctica concreta y el tiempo esperado para ver resultados:
1. Publicar en el momento óptimo para mi audiencia específica
2. Responder a todos los comentarios en las primeras 2 horas
3. Usar la función "Stitch" y "Dueto" con creadores del nicho
4. Publicar en TikTok y reutilizar en Reels e YouTube Shorts el mismo día
5. La táctica del primer comentario propio que hace preguntas

### 4.3 Análisis de resultados: qué miro cada semana

Define el dashboard semanal de TikTok Analytics con las 5 métricas que importan, el benchmark mínimo para considerar que un vídeo ha funcionado y la acción a tomar cuando un vídeo supera el benchmark.

---

## MÓDULO 5 — MONETIZACIÓN ORGÁNICA

Explica las 4 vías para que el contenido orgánico de TikTok se convierta en ventas reales sin invertir en publicidad:
1. TikTok Shop y el contenido de producto nativo
2. El link en la bio como embudo de conversión
3. El DM como canal de conversión directa
4. El contenido que lleva tráfico al email marketing

Para cada vía, incluye la métrica de conversión que debo rastrear.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la estrategia de contenido orgánico en TikTok para una marca con calendario editorial, guiones y sistema de crecimiento',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],

            // 2 — Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'CI/CD pipeline completo con GitHub Actions: del commit a producción automatizado',
                'description'      => 'Guía para diseñar e implementar un pipeline de CI/CD completo con GitHub Actions, desde los tests automatizados hasta el despliegue en producción con rollback automático y notificaciones.',
                'prompt_content'   => <<<'PROMPT'
Eres un ingeniero DevOps senior con experiencia en pipelines de CI/CD para equipos de 2 a 50 personas. Necesito que me ayudes a diseñar e implementar un pipeline completo de GitHub Actions que automatice desde el primer commit hasta el despliegue en producción, con todos los controles de calidad, seguridad y rollback necesarios.

## MI STACK TÉCNICO

Completa antes de ejecutar el prompt:
- Lenguaje y framework principal: [Node.js/Next.js / Python/Django / PHP/Laravel / Ruby/Rails / otro]
- Plataforma de despliegue: [AWS / GCP / Azure / Railway / Fly.io / VPS propio / otro]
- Base de datos: [PostgreSQL / MySQL / MongoDB / otro]
- ¿Tienes Docker ya configurado?: [Sí / No]
- ¿Tienes tests escritos?: [Sí — tipo y cobertura estimada / No]
- Número de entornos: [solo producción / staging + producción / dev + staging + producción]
- Número de desarrolladores en el equipo: [número]
- ¿Usas ramas de feature (Gitflow)?: [Sí / No / Trunk-based development]

---

## PARTE 1 — DISEÑO DEL PIPELINE

### 1.1 Arquitectura de workflows

Diseña la arquitectura completa de workflows de GitHub Actions para mi stack, incluyendo qué workflow se dispara con cada evento:

| Evento Git | Workflow | Jobs incluidos | Entorno destino |
|------------|---------|---------------|----------------|
| Push a feature branch | CI | lint + test + build | ninguno |
| Pull Request a main | CI + Security | lint + test + build + SAST + preview | entorno de preview |
| Merge a main | CD staging | test + build + deploy + smoke tests | staging |
| Tag de release (vX.Y.Z) | CD producción | build + deploy + health check | producción |
| Fallo en producción | Rollback | rollback automático | producción |

### 1.2 Diagrama de flujo del pipeline completo

Describe en formato de texto estructurado (árbol de decisión) el flujo completo desde `git push` hasta usuario final, incluyendo los puntos de fallo y las rutas de recuperación.

---

## PARTE 2 — WORKFLOW DE CI (integración continua)

### 2.1 Archivo `ci.yml` completo

Genera el archivo YAML completo para el workflow de CI que incluya:

```yaml
name: CI Pipeline
on:
  push:
    branches: [feature/*, fix/*, chore/*]
  pull_request:
    branches: [main, develop]

jobs:
  lint:
    # configuración completa con caché de dependencias

  test:
    # matrix de versiones si aplica
    # cobertura mínima del 80% como gate
    # artifacts con el reporte de cobertura

  build:
    # build de producción que verifica que compila sin errores
    # tamaño del bundle como gate (si aplica)

  security-scan:
    # SAST con CodeQL o equivalente
    # análisis de dependencias vulnerables (dependabot / trivy)
```

Adapta el YAML a mi stack específico con los comandos reales, no placeholders genéricos.

### 2.2 Estrategia de caché

Explica y configura la estrategia de caché para que el pipeline pase de 8 minutos a menos de 3 minutos. Incluye:
- Caché de dependencias (npm/pip/composer/bundler)
- Caché de Docker layers si uso contenedores
- Caché de artefactos de build entre jobs
- Invalidación de caché cuando cambian los archivos de dependencias

---

## PARTE 3 — WORKFLOW DE CD (entrega continua)

### 3.1 Archivo `deploy-staging.yml` completo

Workflow de despliegue a staging que se dispara en merge a main:
- Build de imagen Docker con etiquetado semántico
- Push a container registry (GHCR o ECR)
- Despliegue en el entorno de staging
- Smoke tests automáticos (lista los 5 endpoints críticos a testear)
- Notificación al equipo en Slack/Teams con el resultado

### 3.2 Archivo `deploy-production.yml` completo

Workflow de despliegue a producción con:
- Trigger manual con `workflow_dispatch` O tag de versión
- Aprobación requerida de al menos 1 reviewer (environment protection rules)
- Zero-downtime deployment (blue-green o rolling update según mi plataforma)
- Health check post-despliegue con reintentos
- Rollback automático si el health check falla 3 veces

### 3.3 Gestión de secretos

Cómo gestionar de forma segura todos los secrets necesarios (credenciales de AWS/GCP, tokens de API, variables de entorno) usando GitHub Secrets + environments, con el principio de mínimo privilegio.

---

## PARTE 4 — CALIDAD Y SEGURIDAD

### 4.1 Gates de calidad que bloquean el merge

Configura los branch protection rules y los status checks requeridos para que ningún PR pueda mergearse sin:
- Tests en verde con cobertura > 80%
- Sin vulnerabilidades críticas o altas en dependencias
- Build exitoso
- Al menos 1 aprobación de código

### 4.2 Análisis de seguridad automatizado

Configura en el pipeline:
- **Dependabot**: para actualizaciones automáticas de dependencias
- **CodeQL o Semgrep**: para análisis estático de seguridad en el código
- **Trivy**: para scan de vulnerabilidades en imágenes Docker
- **Secret scanning**: para detectar credenciales accidentalmente commiteadas

### 4.3 SLO del pipeline

Define los SLOs del pipeline que debo monitorizar:
- Tiempo máximo de CI (objetivo: <5 min)
- Tiempo máximo de despliegue en producción (objetivo: <10 min)
- Tasa de éxito del pipeline (objetivo: >95%)
- MTTR tras un fallo (tiempo medio de recuperación)

---

## PARTE 5 — OBSERVABILIDAD POST-DESPLIEGUE

Define las notificaciones y alertas automáticas que el pipeline debe generar:
- En Slack: qué mensaje al iniciar despliegue, qué al terminar con éxito, qué al fallar
- En GitHub: comentario automático en el PR con métricas del build (tiempo, cobertura, tamaño del bundle)
- Integración con Datadog/Grafana/New Relic si aplica: qué eventos del pipeline enviar como anotaciones en los dashboards

---

## ENTREGABLE: CHECKLIST DE PIPELINE PRODUCTION-READY

Lista de 15 criterios que verifica que mi pipeline está listo para usarse en un equipo de producción real, con el nivel de prioridad de cada criterio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Diseñar e implementar un pipeline CI/CD completo con GitHub Actions desde los tests hasta el despliegue en producción con rollback',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],

            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Tipografía en diseño digital: elegir y combinar fuentes que funcionan en cualquier pantalla',
                'description'      => 'Guía práctica de tipografía digital para diseñadores: cómo seleccionar y combinar tipografías, jerarquía tipográfica, legibilidad en pantalla y las reglas que hacen que un diseño se lea bien.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador tipográfico con especialización en interfaces digitales. Tu enfoque es funcional: la tipografía existe para ser leída, no para ser admirada. Necesito que me ayudes a tomar decisiones tipográficas sólidas para mi proyecto digital, entendiendo los principios detrás de cada elección y no solo memorizando reglas.

## MI PROYECTO

- Tipo de proyecto: [app móvil / web app / sitio corporativo / landing page / dashboard / e-commerce / otro]
- Sector y personalidad de marca: [descripción en 2 líneas]
- Plataformas objetivo: [solo móvil / solo escritorio / responsive / app nativa iOS / app nativa Android]
- ¿Tienes ya una fuente de marca o empezamos desde cero?: [nombre de la fuente o "desde cero"]
- Restricciones técnicas: [solo Google Fonts / fuentes del sistema / puedo usar Typekit / sin restricciones]
- Audience principal: [describe brevemente a los usuarios]
- Longitud típica del contenido: [textos cortos como UI labels / textos medios como artículos / textos largos como documentos]

---

## PARTE 1 — FUNDAMENTOS DE TIPOGRAFÍA DIGITAL

### 1.1 Por qué la tipografía para pantalla es diferente a la impresión

Explica los 5 factores que hacen que la tipografía en pantalla necesite un tratamiento diferente al papel, con implicaciones prácticas para mis decisiones de diseño:

1. Resolución de pantalla y renderizado de fuentes (antialiasing, hinting)
2. Lectura a distancias variables (móvil vs escritorio vs TV)
3. Modo oscuro y contraste en diferentes condiciones de luz
4. Carga de la fuente y impacto en el Core Web Vitals (LCP, CLS)
5. Accesibilidad y usuarios con dislexia o baja visión

### 1.2 Anatomía tipográfica que necesitas saber (y por qué importa para UI)

Para cada término, explica en lenguaje directo por qué afecta a la legibilidad en pantalla:
- x-height: por qué las fuentes con x-height alto leen mejor en pantallas pequeñas
- Tracking vs kerning: cuándo ajustar uno u otro y en qué contextos
- Leading (interlineado): la regla del 1.4-1.6x para cuerpo de texto y cuándo romperla
- Contraste de trazo: por qué las fuentes de alto contraste sufren en pantallas de baja resolución
- Grosor de fuente: la paradoja del "light" que en pantalla parece delgado y cansa la vista

---

## PARTE 2 — SELECCIÓN DE TIPOGRAFÍAS

### 2.1 El proceso de selección en 4 pasos

Guía paso a paso para elegir la tipografía correcta para mi proyecto:

**Paso 1 — Definir los criterios funcionales:**
- Número de pesos disponibles necesarios (mínimo 3: regular, medium, bold)
- ¿Necesito soporte para caracteres especiales o idiomas múltiples?
- ¿La fuente tiene variantes de figura (old-style vs lining numerals) si hay números en la UI?
- ¿Soporta variable font para optimizar carga?

**Paso 2 — Evaluar la legibilidad:**
- Cómo probar una fuente al 16px, 14px y 12px antes de elegirla
- Los caracteres trampa que revelan si una fuente es legible (I, l, 1, O, 0, rn/m)
- Test del párrafo largo: cómo evaluar la fatiga visual en 5 minutos

**Paso 3 — Verificar la viabilidad técnica:**
- Licencia de uso en web y app
- Tamaño del archivo y cómo subsetearlo
- Disponibilidad en las plataformas objetivo (Google Fonts, Adobe Fonts, self-hosted)

**Paso 4 — Compatibilidad con la personalidad de marca:**
- El espectro de personalidad tipográfica (geométrica / humanista / transitional / slab / display)
- Cómo alinear el carácter de la fuente con los valores de la marca

### 2.2 Recomendaciones de tipografías para mi proyecto específico

Basándote en mi contexto, recomiéndame:
- **3 opciones de fuente principal** para texto de cuerpo, con pros y contras de cada una
- **3 opciones de fuente de display/heading**, compatibles con la fuente de cuerpo
- La **combinación ganadora** con justificación basada en mi tipo de proyecto y audiencia

---

## PARTE 3 — JERARQUÍA TIPOGRÁFICA

### 3.1 El sistema tipográfico de mi proyecto

Diseña el sistema tipográfico completo con:

| Nivel | Uso | Fuente | Tamaño | Peso | Interlineado | Tracking |
|-------|-----|--------|--------|------|-------------|---------|
| Display | Hero, títulos grandes | | | | | |
| H1 | Título de página | | | | | |
| H2 | Sección principal | | | | | |
| H3 | Subsección | | | | | |
| Body L | Texto largo, artículos | | | | | |
| Body M | Texto estándar de UI | | | | | |
| Body S | Labels, captions | | | | | |
| Micro | Footnotes, timestamps | | | | | |
| CTA | Botones y links | | | | | |
| Code | Código mono | | | | | |

Da valores concretos para escritorio y para móvil (responsive typography).

### 3.2 Tipografía fluida con clamp()

Muestra el código CSS de `clamp()` para los 3 niveles más importantes del sistema, que escale de forma fluida entre móvil (375px) y escritorio (1440px) sin saltos bruscos.

---

## PARTE 4 — TIPOGRAFÍA Y ACCESIBILIDAD

### 4.1 Checklist de accesibilidad tipográfica

15 criterios de accesibilidad tipográfica que debo verificar antes de entregar cualquier diseño, referenciando las pautas WCAG 2.1 y las AA/AAA aplicables.

### 4.2 Tipografía en modo oscuro

Cómo ajustar el sistema tipográfico para modo oscuro, incluyendo:
- Por qué no debes usar blanco puro (#FFFFFF) sobre negro en textos de cuerpo
- Ajuste de peso recomendado en modo oscuro (por qué el Regular se vuelve Light)
- Cómo verificar el contraste en ambos modos con herramientas gratuitas

---

## ENTREGABLE: GUÍA DE ESTILO TIPOGRÁFICO

Genera el documento de guía de estilo tipográfico de mi proyecto en formato que pueda copiar en Notion o Figma, con todos los niveles, valores y reglas de uso definidos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Seleccionar y combinar tipografías para proyectos digitales con sistema tipográfico completo, accesibilidad y responsive',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],

            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Técnicas de cierre: señales de compra y cierres que funcionan sin presionar al cliente',
                'description'      => 'Guía práctica para reconocer las señales de compra en cualquier canal y aplicar técnicas de cierre que generan compromiso del cliente de forma natural, sin presión ni manipulación.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de ventas con más de 15 años formando equipos comerciales en ventas consultivas B2B y B2C. Tu filosofía es clara: el cierre es la consecuencia natural de un proceso de venta bien hecho, no un truco de último momento. Necesito que me ayudes a dominar el arte de reconocer cuándo un cliente está listo para comprar y cómo facilitar ese paso sin generar presión.

## MI CONTEXTO DE VENTA

- Tipo de venta: [B2B enterprise / B2B pymes / B2C alto ticket / B2C masivo / SaaS / servicios profesionales]
- Canal de venta principal: [presencial / telefónico / videollamada / email / combinación]
- Ciclo de venta típico: [menos de 1 día / 1-4 semanas / 1-3 meses / más de 3 meses]
- Ticket medio: [tu respuesta]
- ¿Cuántos decisores hay en el proceso de compra?: [1 / 2-3 / comité de compras]
- Principal motivo por el que los clientes no cierran: [según tu experiencia]
- ¿Usas CRM?: [Sí — cuál / No]

---

## MÓDULO 1 — SEÑALES DE COMPRA: EL CLIENTE TE DICE QUE ESTÁ LISTO

### 1.1 Señales verbales de compra

Lista y explica las 15 señales verbales que indican que un cliente está en modo de compra. Para cada señal:
- La frase o tipo de pregunta exacta que hace el cliente
- Qué significa en términos de su proceso mental de decisión
- Cómo respondo en ese momento para no "matar" la señal con demasiada información
- El tiempo máximo que debo esperar antes de intentar el cierre

Incluye señales en estos contextos:
- Durante la demostración del producto
- Después de recibir la propuesta económica
- Tras el periodo de prueba (si aplica)
- En el seguimiento por email

### 1.2 Señales no verbales (en presencial y videollamada)

Los indicadores de lenguaje corporal y comportamiento que revelan que el cliente ha tomado ya la decisión internamente:
- Postura y lenguaje corporal en la reunión presencial
- Cambios en el tono de voz y velocidad del habla
- Comportamiento en videollamada (activa la cámara, apaga el micro para hablar con alguien)
- Señales digitales: vuelve a abrir el email con la propuesta, reenvía la propuesta a alguien

### 1.3 Las falsas señales: cuando parece que sí pero no lo es

Identifica los 5 comportamientos del cliente que parecen señales positivas pero en realidad son señales de duda o de distracción del proceso. Explica cómo distinguirlos.

---

## MÓDULO 2 — TÉCNICAS DE CIERRE (sin presión)

### 2.1 El cierre de resumen (el más profesional)

Guión completo del cierre de resumen, que recapitula el valor acordado antes de pedir la decisión:

```
Estructura:
1. Resumen de la situación actual del cliente (su dolor)
2. Lo que hemos acordado que mi solución hace para resolverlo
3. Los criterios de éxito que el cliente mismo definió
4. La pregunta de cierre natural
```

Escribe el guión adaptado a mi tipo de venta con lenguaje natural, no de manual.

### 2.2 El cierre de alternativa (reducir la decisión grande a una pequeña)

Cómo usar la técnica de la alternativa para bajar la resistencia del cliente y hacer que la decisión sea sobre detalles en lugar de sobre el "sí o no" principal. Incluye 5 ejemplos de preguntas de alternativa adaptadas a diferentes tipos de producto o servicio.

### 2.3 El cierre de prueba (para ciclos de venta largos)

Cómo usar preguntas de prueba a lo largo del proceso para tomar la temperatura del cliente sin comprometer la relación. Lista de 8 preguntas de prueba que puedo usar desde la primera reunión.

### 2.4 El cierre del compromiso progresivo

La técnica de obtener micro-compromisos a lo largo del proceso para que el cierre final sea la continuación natural de lo que ya ha acordado. Los 5 momentos clave del proceso de venta donde pedir un micro-compromiso.

### 2.5 El cierre de urgencia real (no la urgencia inventada)

Cómo crear urgencia genuina basada en el coste real de no decidir (no en descuentos artificiales de "solo hoy"). Guión para cuantificar el coste del statu quo para el cliente.

---

## MÓDULO 3 — EL SILENCIO COMO TÉCNICA DE CIERRE

Explica la regla del silencio tras la pregunta de cierre:
- Por qué la mayoría de los comerciales pierde el cierre hablando después de pedir la decisión
- Cuánto tiempo aguantar en silencio
- Qué hacer si el silencio dura más de 15 segundos
- Cómo manejar la incomodidad del silencio en una videollamada

---

## MÓDULO 4 — GESTIÓN DEL "NECESITO PENSARLO"

La frase más frecuente que retrasa o mata los cierres. Dame el protocolo completo:

1. **No luches contra ella**: por qué defender tu solución en ese momento es un error
2. **Valida**: la frase de validación que baja la guardia del cliente
3. **Explora**: las 3 preguntas que revelan si es una duda real o una objeción oculta
4. **Ofrece**: qué puedes hacer para facilitar la decisión (llamada adicional, referencia, garantía)
5. **Compromete**: cómo salir de la reunión con una fecha concreta de respuesta

---

## MÓDULO 5 — SEGUIMIENTO POST-PROPUESTA

### 5.1 La secuencia de seguimiento que no resulta molesta

Cronograma de 5 touchpoints tras enviar la propuesta, con el canal, el contenido y el objetivo de cada uno. Incluye cuándo parar de insistir con dignidad.

### 5.2 El email de seguimiento perfecto

Escribe el email de seguimiento en el día 3 tras enviar la propuesta que:
- No empieza con "Te escribo para hacer seguimiento de..."
- Aporta algo de valor nuevo al cliente
- Abre la conversación de forma natural sin presionar
- Tiene un CTA claro y fácil de responder
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Identificar señales de compra y aplicar técnicas de cierre naturales para aumentar la tasa de conversión',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],

            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de la voz del usuario: sistema para capturar, organizar y priorizar el feedback',
                'description'      => 'Sistema completo para capturar el feedback de usuarios de múltiples fuentes, organizarlo por temas y patrones, y convertirlo en decisiones de producto basadas en evidencia real.',
                'prompt_content'   => <<<'PROMPT'
Eres un Product Manager especializado en investigación de usuarios y sistemas de feedback. Tu enfoque es práctico: el feedback de usuarios es el activo más valioso de cualquier equipo de producto, pero sin un sistema para gestionarlo se convierte en ruido. Necesito que me ayudes a construir un sistema sostenible para capturar, organizar y convertir el feedback en decisiones de producto.

## MI CONTEXTO

- Tipo de producto: [SaaS B2B / SaaS B2C / marketplace / app móvil / otro]
- Número de usuarios activos: [rango aproximado]
- Fuentes de feedback actuales: [soporte / NPS / entrevistas / reseñas de app store / Intercom / otro]
- Herramienta de gestión de producto: [Productboard / Notion / Jira / Linear / hoja de cálculo / ninguna]
- Equipo de producto: [solo PM / PM + diseñador / equipo completo]
- ¿Con qué frecuencia tomas decisiones de roadmap?: [mensual / trimestral / continua]
- Principal reto con el feedback actual: [hay mucho y no sé qué hacer con él / hay poco y no sé cómo conseguir más / ambos]

---

## PARTE 1 — FUENTES DE FEEDBACK: EL MAPA COMPLETO

### 1.1 Taxonomía de fuentes de feedback

Para mi tipo de producto, organiza todas las fuentes de feedback en:

**Feedback pasivo (el usuario lo da sin que se lo pidas):**
- Tickets de soporte y sus categorías más comunes
- Reseñas en app stores y cómo extraer patrones de ellas
- Menciones en redes sociales y comunidades (Reddit, Twitter/X, foros del sector)
- Datos de comportamiento en el producto (dónde abandona, qué no usa, qué usa en exceso)
- Churn surveys cuando un usuario cancela

**Feedback activo (lo solicitas proactivamente):**
- NPS con la pregunta de seguimiento abierta
- Encuestas CSAT en momentos clave del producto
- Entrevistas de usuario (y el sistema para hacerlas de forma recurrente)
- Sesiones de usabilidad
- Feature requests directos (formulario, chat, email)
- Customer Advisory Board o panel de usuarios beta

### 1.2 Prioridad de las fuentes según fiabilidad

Explica cómo ponderar el feedback según su fiabilidad y representatividad:
- Por qué el feedback de los usuarios que más se quejan no es el más valioso
- La trampa del "el cliente con más dinero decide el roadmap"
- Cómo equilibrar el feedback cualitativo (entrevistas) con el cuantitativo (uso real del producto)
- El sesgo del "usuario power user" y cómo contrarrestarlo

---

## PARTE 2 — SISTEMA DE CAPTURA Y ORGANIZACIÓN

### 2.1 La estructura de la base de datos de feedback

Diseña el esquema de la base de datos de feedback en Notion, Airtable o la herramienta que use, con los campos mínimos necesarios:

| Campo | Tipo | Valores | Para qué sirve |
|-------|------|---------|---------------|
| ID | Auto | | |
| Fuente | Select | soporte / NPS / entrevista / app store / ... | |
| Fecha | Date | | |
| Segmento de usuario | Select | nuevo / activo / power user / en riesgo de churn | |
| Plan/tier | Select | free / pro / enterprise | |
| Cita textual | Long text | | |
| Tema | Multi-select | [lista de temas de tu producto] | |
| Sentimiento | Select | positivo / neutro / negativo | |
| Urgencia | Select | alta / media / baja | |
| Feature request asociado | Relation | | |
| Responsable | Person | | |

### 2.2 El proceso de triaje semanal

Define el proceso de 60 minutos que el PM hace cada viernes para procesar todo el feedback de la semana:
- De dónde lo recoge (fuentes y herramientas)
- Cómo lo clasifica sin leerlo todo en profundidad
- Qué va directamente a acción inmediata, qué al backlog y qué se descarta
- Quién más participa en el triaje y cómo

### 2.3 Identificación de patrones y temas

Explica la técnica de afinidad para agrupar el feedback en temas emergentes:
- Cómo hacer un affinity mapping con sticky notes digitales (FigJam, Miro) en 90 minutos
- La regla del "3 menciones independientes = patrón real"
- Cómo nombrar los temas de forma que el equipo de ingeniería entienda el problema, no la solución

---

## PARTE 3 — DEL FEEDBACK A LA DECISIÓN

### 3.1 El sistema de señales

Define las señales cuantitativas que convierten el feedback cualitativo en inputs de priorización:

| Señal | Fórmula de cálculo | Umbral de acción |
|-------|-------------------|-----------------|
| Frecuencia de mención de un tema | nº menciones / total de feedback en el período | |
| Impacto por segmento | % de usuarios afectados × peso del segmento | |
| Intensidad del feedback | escala de urgencia percibida | |
| Correlación con churn | % del tema en churned users vs activos | |

### 3.2 El User Feedback Brief

Plantilla del documento de 1 página que escribe el PM cuando quiere convertir un patrón de feedback en una iniciativa del roadmap:

```
PROBLEMA IDENTIFICADO:
[qué dice el usuario, en sus propias palabras]

EVIDENCIA:
- Nº de menciones: ___ en ___ semanas
- Segmentos afectados:
- Impacto en retención (si hay dato):
- Cita representativa:

HIPÓTESIS DE SOLUCIÓN:
[qué creemos que resolvería el problema]

CRITERIO DE ÉXITO:
[cómo mediremos que lo hemos resuelto]

ESFUERZO ESTIMADO:
[pequeño / mediano / grande]

DECISIÓN RECOMENDADA:
[priorizar ahora / backlog / investigar más / no hacer]
```

### 3.3 Cómo cerrar el bucle con los usuarios

Proceso para comunicar a los usuarios que su feedback se ha tenido en cuenta:
- El email de "hemos escuchado" cuando lanzas algo que solicitaron
- Cómo gestionar el feedback que no priorizas sin decepcionar al usuario
- La estrategia de comunidad beta para los usuarios que dan más feedback de calidad

---

## PARTE 4 — AUTOMATIZACIÓN Y ESCALABILIDAD

Define las 3 automatizaciones con no-code (Zapier / Make) que reducen el tiempo de gestión del feedback en un 60%:
1. Captura automática de tickets de soporte en la base de datos de feedback
2. Alertas automáticas cuando un tema supera el umbral de menciones
3. NPS score + texto abierto → clasificado automáticamente por sentimiento con IA

Para cada automatización: herramientas necesarias, pasos de configuración y tiempo de implementación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir el sistema de captura, organización y priorización del feedback de usuarios para tomar decisiones de producto basadas en evidencia',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],

            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Encuestas de clima y pulso: medir el engagement del equipo y actuar sobre los resultados',
                'description'      => 'Sistema completo de encuestas de clima laboral y pulso periódico para medir el engagement del equipo, interpretar los resultados y diseñar planes de acción que realmente mejoran la cultura.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en people analytics y cultura organizacional con experiencia en diseño de encuestas de clima y programas de employee experience. Tu enfoque es pragmático: una encuesta sin plan de acción es peor que no hacerla, porque genera expectativas que luego se frustran. Necesito que me ayudes a diseñar un sistema de medición del engagement que sea honesto, útil y que conduzca a mejoras reales.

## MI CONTEXTO ORGANIZACIONAL

- Tamaño del equipo: [número de personas]
- Estructura: [presencial / híbrido / remoto]
- ¿Has hecho encuestas de clima antes?: [Sí — frecuencia y tasa de respuesta / No]
- Herramienta disponible: [Google Forms / Typeform / Culture Amp / Lattice / Officevibe / otra]
- Nivel de confianza actual del equipo en el liderazgo (estimación honesta): [alta / media / baja]
- Principal área de preocupación que sospechas: [compensación / crecimiento / relación con manager / cultura / workload / otro]
- ¿Tienes HR o eres el propio founder/manager?: [tu respuesta]

---

## MÓDULO 1 — DISEÑO DE LA ENCUESTA

### 1.1 Tipos de medición: cuándo usar cada una

Explica la diferencia entre estos tipos de encuesta y cuándo usar cada una para mi situación:

| Tipo | Frecuencia | Longitud | Propósito |
|------|-----------|---------|----------|
| Encuesta de clima anual | 1 vez/año | 40-60 preguntas | Diagnóstico profundo |
| Encuesta de pulso | Semanal/mensual | 5-10 preguntas | Temperatura rápida |
| eNPS (Employee Net Promoter Score) | Trimestral | 2-3 preguntas | Fidelidad y promotores |
| Stay interview | Ad hoc | Conversación | Retención preventiva |
| Exit survey | Salida | 15-20 preguntas | Aprendizaje de la fuga |

Para mi caso, recomiéndame la combinación óptima y la frecuencia.

### 1.2 Las dimensiones del engagement

Define las 8 dimensiones que debe cubrir una encuesta de clima completa para mi tipo de empresa, con la justificación de por qué cada una importa:

1. Claridad de rol y objetivos
2. Relación con el manager directo
3. Desarrollo y crecimiento profesional
4. Reconocimiento y compensación percibida
5. Colaboración y trabajo en equipo
6. Cultura y valores
7. Wellbeing y carga de trabajo
8. Confianza en el liderazgo y la visión

### 1.3 Banco de preguntas

Para cada dimensión, proporciona 3 preguntas en escala Likert (1-5) y 1 pregunta abierta de profundización:

**Formato de escala Likert:**
"[Afirmación en presente]"
1 = Totalmente en desacuerdo → 5 = Totalmente de acuerdo

**Reglas de redacción que debes seguir:**
- Una sola idea por pregunta
- Evitar dobles negaciones
- Lenguaje accesible para todos los perfiles del equipo
- No hacer preguntas que impliquen que hay una respuesta "correcta"

---

## MÓDULO 2 — IMPLEMENTACIÓN DE LA ENCUESTA

### 2.1 Comunicación previa al lanzamiento

Escribe los 3 comunicados que debo enviar antes de lanzar la encuesta:

**Comunicado 1** (2 semanas antes): anuncia la encuesta, explica por qué la hacemos y qué haremos con los resultados
**Comunicado 2** (2 días antes): recordatorio con FAQ sobre anonimato y privacidad de los datos
**Comunicado 3** (día del lanzamiento): instrucciones claras con el enlace y el deadline

Para cada comunicado, incluye el asunto del email y el cuerpo completo.

### 2.2 Anonimato y confidencialidad

Define la política de anonimato que debes comunicar al equipo, incluyendo:
- Qué nivel de anonimato garantizas realmente (individual vs agregado)
- El tamaño mínimo de grupo para mostrar resultados desagregados sin comprometer el anonimato (regla del n≥5)
- Qué haces si los resultados de un departamento muy pequeño revelan quién respondió
- Cómo gestionas las respuestas abiertas que puedan identificar a alguien

### 2.3 Estrategia para maximizar la tasa de respuesta

Las 8 tácticas que aumentan la tasa de respuesta por encima del 70%:
- Timing óptimo (día de la semana y hora)
- Recordatorios sin ser invasivo
- El papel del manager directo en promover la participación
- Hacer la encuesta durante el horario de trabajo
- Comunicar los resultados de ediciones anteriores (closing the loop)

---

## MÓDULO 3 — ANÁLISIS E INTERPRETACIÓN DE RESULTADOS

### 3.1 Cómo leer los resultados sin sesgarse

Guía para interpretar los datos correctamente:
- Por qué la media es engañosa y qué mirar en lugar de ella (distribución de respuestas)
- Cómo identificar los "puntos de dolor ocultos" (dimensiones con alta varianza)
- Diferencia entre un resultado bajo en una pregunta vs un patrón bajo en una dimensión
- Cómo cruzar los resultados por departamento, antigüedad y rol para encontrar problemas específicos

### 3.2 El reporte de resultados para el equipo de liderazgo

Plantilla del reporte ejecutivo de 2 páginas con:
- Dashboard de resumen (por dimensión y vs. período anterior)
- Top 3 fortalezas a mantener
- Top 3 áreas de mejora prioritarias
- Citas anónimas más frecuentes
- Recomendaciones de acción con responsable y plazo

### 3.3 La comunicación de resultados al equipo completo

Cómo comunicar los resultados a toda la empresa de forma honesta, incluyendo los malos resultados, sin generar pánico ni desconfianza. Incluye el guión de la presentación de 20 minutos y las preguntas más difíciles que puede hacer el equipo.

---

## MÓDULO 4 — PLANES DE ACCIÓN

### 4.1 El formato del plan de acción

Plantilla del plan de acción que nace de la encuesta:

```
DIMENSIÓN: [ej: Desarrollo y crecimiento profesional]
RESULTADO: [score actual y comparativa]
CAUSA RAÍZ IDENTIFICADA: [a partir del análisis cualitativo]
ACCIONES:
  1. [acción] — Responsable: ___ — Plazo: ___ — Métrica de éxito: ___
  2. ...
PRÓXIMA MEDICIÓN: [fecha de la siguiente encuesta de pulso]
```

### 4.2 Las 5 dimensiones más problemáticas y sus acciones de mejora

Para cada dimensión, dame las 3 acciones de mejora más efectivas según la investigación en people analytics, con el tiempo típico para ver resultados.

---

## ENTREGABLE: CALENDARIO DEL SISTEMA DE MEDICIÓN

Genera el calendario anual completo del ciclo de encuestas con las fechas de envío, análisis, comunicación de resultados y revisión de acciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar el sistema de encuestas de clima y pulso para medir el engagement y generar planes de acción reales',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],

            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Modelos financieros en Excel y Sheets: construye el modelo que explica tu negocio',
                'description'      => 'Guía paso a paso para construir un modelo financiero profesional en Excel o Google Sheets que proyecta ingresos, costes y caja, con escenarios y visualizaciones para inversores y directivos.',
                'prompt_content'   => <<<'PROMPT'
Eres un analista financiero con experiencia en modelado financiero para startups, pymes y proyectos de inversión. Tu especialidad es construir modelos que son a la vez precisos y comprensibles: que no solo dan los números correctos, sino que explican el negocio de forma que cualquier directivo o inversor pueda entender los drivers y los riesgos. Necesito que me ayudes a construir el modelo financiero de mi negocio desde cero o a mejorar el que ya tengo.

## MI NEGOCIO

- Tipo de modelo de negocio: [SaaS / ecommerce / servicios profesionales / marketplace / manufactura / retail / otro]
- Etapa del negocio: [pre-revenue / early stage / crecimiento / maduro]
- ¿Para qué usarás el modelo?: [decisiones internas / presentar a inversores / banco / planificación estratégica]
- Herramienta: [Excel / Google Sheets / ambos]
- Nivel de Excel/Sheets: [básico / intermedio / avanzado]
- Horizonte temporal del modelo: [12 meses / 3 años / 5 años]
- ¿Tienes datos históricos?: [Sí — cuántos meses / No]

---

## PARTE 1 — ARQUITECTURA DEL MODELO

### 1.1 Estructura de pestañas recomendada

Diseña la estructura de pestañas del libro de Excel/Sheets para mi tipo de negocio:

| Pestaña | Color de etiqueta | Contenido | Quién la toca |
|---------|------------------|-----------|--------------|
| Assumptions | Azul | Todos los inputs y drivers del modelo | PM/CEO |
| Revenue Model | Verde | Construcción de los ingresos | Analista |
| Cost Model | Naranja | COGS y OPEX desglosados | Analista |
| P&L | Blanco | Cuenta de resultados consolidada | Todos |
| Cash Flow | Blanco | Flujo de caja directo e indirecto | CFO |
| Balance | Blanco | Balance de situación | CFO |
| KPIs | Verde | Métricas clave del negocio | CEO |
| Scenarios | Azul | Análisis de escenarios | CEO/Inversores |
| Charts | Gris | Gráficos para presentar | Todos |

Explica la regla de los colores y por qué separar inputs de outputs es fundamental para la integridad del modelo.

### 1.2 Los principios de un modelo financiero profesional

Explica los 7 principios que distinguen un modelo profesional de una hoja de cálculo:
1. Separación de inputs, cálculos y outputs
2. Hardcoding cero: ningún número en una fórmula sin etiqueta
3. Consistencia de dirección de las fórmulas (siempre de izquierda a derecha, de arriba a abajo)
4. Sin fórmulas en celdas de input
5. Un modelo, un tipo de letra, un formato
6. Cada fórmula debe poder auditarse sin seguir referencias circulares
7. El modelo explica el negocio: el nombre de cada fila debe poder leerse en voz alta y tener sentido

---

## PARTE 2 — MODELO DE INGRESOS

### 2.1 Construcción bottom-up de ingresos (el más creíble para inversores)

Para mi tipo de negocio, diseña la lógica de construcción de ingresos desde los drivers más granulares:

**Para SaaS/suscripción:**
```
Clientes inicio del mes
+ Nuevos clientes (Tráfico × Conversión a trial × Conversión a pago)
- Churned customers (Clientes × Churn rate mensual)
= Clientes fin de mes

MRR = Clientes × ARPU
ARR = MRR × 12
```

**Para ecommerce/transaccional:**
```
Visitas = Tráfico orgánico + Tráfico pagado
× Tasa de conversión
= Pedidos
× AOV (Average Order Value)
= Ingresos brutos
- Devoluciones (% estimado)
= Ingresos netos
```

Adapta la lógica a mi modelo de negocio con las fórmulas exactas de Excel.

### 2.2 Los 5 drivers de ingreso que debes modelar explícitamente

Para cada driver, explica cómo lo modelas en la hoja de Assumptions y por qué es más honesto que poner una tasa de crecimiento plana:
1. Adquisición de clientes (por canal con coste)
2. Conversión en cada etapa del funnel
3. Precio y evolución del precio (expansión de revenue)
4. Retención y churn (para modelos de suscripción)
5. Estacionalidad y ciclicalidad del negocio

---

## PARTE 3 — MODELO DE COSTES

### 3.1 Estructura del P&L

Diseña la estructura de la cuenta de resultados con el nivel de detalle correcto para mi etapa:

```
INGRESOS
  Ingresos brutos
  - Descuentos y devoluciones
  = Ingresos netos

COSTE DE LOS INGRESOS (COGS)
  [desglose por categoría: hosting, licencias, mano de obra directa, etc.]

MARGEN BRUTO = Ingresos netos - COGS
MARGEN BRUTO % = Margen bruto / Ingresos netos

GASTOS OPERATIVOS (OPEX)
  Sales & Marketing
    [desglose]
  Research & Development
    [desglose]
  General & Administrative
    [desglose]

EBITDA = Margen bruto - OPEX
Depreciación y amortización
EBIT
Gastos financieros
EBT
Impuesto de sociedades
BENEFICIO NETO
```

### 3.2 Modelado de la plantilla (headcount model)

La plantilla es el coste más importante y el más difícil de modelar bien. Diseña la hoja de headcount con:
- Tabla de posiciones con inicio previsto, salario bruto, coste social (% aplicable) y departamento
- Cómo modelar las contrataciones futuras como función de los milestones de negocio
- Cómo el modelo recoge automáticamente el coste mensual de cada posición
- La diferencia entre FTE (jornada completa) y equivalentes parciales

---

## PARTE 4 — ANÁLISIS DE ESCENARIOS

### 4.1 Los tres escenarios obligatorios

Define los 3 escenarios para mi modelo con los drivers que cambian en cada uno:

| Driver | Escenario pesimista | Base case | Escenario optimista |
|--------|-------------------|-----------|---------------------|
| Tasa de crecimiento de clientes | | | |
| Churn rate | | | |
| ARPU | | | |
| CAC | | | |
| Margen bruto | | | |

Explica cómo usar Data Validation y named ranges para que cambiar de escenario sea un solo clic.

### 4.2 Análisis de sensibilidad (tabla de datos de Excel)

Muéstrame cómo crear una tabla de sensibilidad 2D en Excel que muestre el EBITDA del año 3 en función de dos variables (por ejemplo, churn rate y precio), para identificar qué combinación de variables hace el modelo viable o inviable.

---

## PARTE 5 — PRESENTACIÓN A INVERSORES

### 5.1 Los 10 KPIs que un inversor busca en el modelo

Para cada KPI: cómo se calcula, dónde aparece en el modelo y qué rango es "aceptable" para una startup en mi etapa.

### 5.2 Los errores de modelado que matan la credibilidad ante un inversor

Lista de los 8 errores más comunes que hacen que un inversor rechace el modelo antes de leer los números.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Construir un modelo financiero profesional en Excel o Sheets con proyecciones de ingresos, costes, escenarios y KPIs para inversores',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],

            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Constituir empresa en España: SL vs autónomo, costes reales y cuándo dar el salto',
                'description'      => 'Análisis comparativo entre trabajar como autónomo y constituir una Sociedad Limitada en España, con costes reales, trámites, implicaciones fiscales y la decisión correcta según el nivel de ingresos.',
                'prompt_content'   => <<<'PROMPT'
Eres un asesor fiscal y mercantil especializado en startups y pequeñas empresas en España. Tu enfoque es directo: sin romanticismos sobre "emprender" ni burocracia innecesaria. Necesito que me ayudes a tomar la decisión correcta entre seguir como autónomo o constituir una Sociedad Limitada, entendiendo los costes reales, las obligaciones y el momento en que el cambio tiene sentido económico.

AVISO: Esta información tiene carácter educativo. Para decisiones fiscales concretas, consulta siempre con un asesor fiscal o abogado colegiado que conozca tu situación específica.

## MI SITUACIÓN ACTUAL

- Actividad económica: [descripción de lo que haces]
- Ingresos anuales actuales o proyectados: [rango aproximado]
- ¿Estás trabajando ya o es un proyecto nuevo?: [ya trabajo / proyecto nuevo]
- Situación actual: [autónomo / asalariado / desempleado / estudiante]
- ¿Tienes socios o irías tú solo?: [solo / con socios — número y participación]
- ¿Tienes empleados o planeas tenerlos?: [Sí / No]
- Principal preocupación: [fiscalidad / responsabilidad personal / imagen ante clientes / otro]

---

## BLOQUE 1 — AUTÓNOMO: LA RADIOGRAFÍA COMPLETA

### 1.1 Costes reales de ser autónomo en 2024-2025

Desglosa todos los costes que un autónomo soporta anualmente, incluyendo los que se olvidan:

**Cuota de autónomo (cotización a SS):**
- Tabla de bases de cotización por tramos de rendimientos netos
- La tarifa plana para nuevos autónomos (duración, importe, condiciones y excepciones)
- El mecanismo de regularización anual de cuotas

**Carga fiscal sobre el beneficio:**
- IRPF: tramos aplicables sobre el beneficio neto, con ejemplos de tributación en diferentes niveles de ingresos
- IVA: gestión, declaraciones trimestrales y el modelo 303/390
- Retenciones sobre facturas: cuándo aplica el 15% o el 7% de retención

**Costes obligatorios indirectos:**
- Gestoría o asesoría (rango de precio en España)
- Seguro de responsabilidad civil profesional (si aplica)
- Mutua de accidentes (si aplica según actividad)

**El coste de la incertidumbre:**
- Cómo calcular el fondo de reserva necesario para meses sin ingresos
- Por qué los autónomos pagan IRPF sobre ingresos que aún no han cobrado (criterio de devengo vs caja)

### 1.2 Ventajas del autónomo que se ignoran

Las 5 ventajas reales de ser autónomo frente a la SL que no suelen mencionarse:
1. Simplicidad administrativa y de gestión
2. Menor coste de gestoría
3. Retirada de dinero sin tributación adicional (dividendos)
4. Facilidad de cierre (si el negocio no funciona)
5. Acceso a prestación por cese de actividad (el "paro del autónomo"): requisitos y cuantía

---

## BLOQUE 2 — SOCIEDAD LIMITADA: LA RADIOGRAFÍA COMPLETA

### 2.1 Costes de constitución

Lista completa de costes de constitución de una SL en 2024:

| Concepto | Coste aproximado | Obligatorio |
|----------|-----------------|-------------|
| Capital social mínimo | 1 € (reforma 2023) | Sí |
| Notaría (escritura de constitución) | | Sí |
| Registro Mercantil | | Sí |
| Impuesto sobre Operaciones Societarias | 0% actualmente | Sí |
| Alta en Hacienda (modelos 036/840) | 0 | Sí |
| Alta del administrador en SS (autónomo societario) | | Si % > 25% |
| Gestoría para constitución | | Recomendado |

**La SL exprés**: coste, plazo y limitaciones frente a la constitución ordinaria.

### 2.2 Costes operativos anuales de una SL

Los costes fijos que una SL soporta aunque no facture nada:

| Concepto | Coste anual estimado |
|----------|---------------------|
| Gestoría contable y fiscal | |
| Depósito de cuentas en el RM | |
| Cuota de autónomo societario (si aplica) | |
| Auditoría (si superas los umbrales) | |

### 2.3 Fiscalidad de la SL

**Impuesto de Sociedades:**
- Tipo general: 25%
- Tipo reducido para empresas de nueva creación: 15% durante los 2 primeros años con base imponible positiva
- Cómo calcular la base imponible (no es igual al beneficio contable)

**La doble tributación del socio-administrador:**
- IS sobre el beneficio de la empresa
- IRPF sobre el salario del administrador
- IRPF sobre dividendos (si los hay)
- Cómo optimizar el mix salario/dividendo para minimizar la carga total

---

## BLOQUE 3 — EL ANÁLISIS COMPARATIVO: CUÁNDO CONVIENE LA SL

### 3.1 El punto de equilibrio fiscal

Calcula el nivel de beneficio a partir del cual la tributación en IS (25%) es más ventajosa que en IRPF para un contribuyente con rentas de trabajo, usando la tabla de tramos del IRPF estatal.

Genera una tabla comparativa:

| Beneficio anual | Tributación como autónomo (IRPF) | Tributación como SL (IS + optimización) | Ahorro con SL |
|----------------|--------------------------------|----------------------------------------|--------------|
| 30.000€ | | | |
| 50.000€ | | | |
| 80.000€ | | | |
| 120.000€ | | | |
| 200.000€ | | | |

### 3.2 Los factores no fiscales que también pesan

Más allá de los números, explica cuándo la SL es la decisión correcta por razones no fiscales:
- Responsabilidad patrimonial limitada: qué protege y qué NO protege (la trampa del aval personal)
- Imagen ante clientes B2B y cómo afecta a la capacidad de acceder a ciertos contratos
- Captación de inversión y entrada de socios
- Venta del negocio: por qué es más fácil vender participaciones de una SL

---

## BLOQUE 4 — TRÁMITES DE CONSTITUCIÓN PASO A PASO

### 4.1 Ruta rápida: de la idea a la SL operativa en 10 días

Checklist de pasos con el organismo responsable, el plazo típico y el coste de cada uno.

### 4.2 Los estatutos sociales: qué cláusulas no debes olvidar

Las 5 cláusulas que la mayoría de los emprendedores omiten en sus estatutos y que les generan problemas cuando hay socios:
1. Protocolo de resolución de conflictos entre socios
2. Derechos de tanteo y retracto en la transmisión de participaciones
3. Cláusula drag-along y tag-along
4. Retribución del administrador (si está prevista)
5. Causa de disolución por pérdidas

---

## ENTREGABLE: ÁRBOL DE DECISIÓN

Genera un árbol de decisión en formato texto que me lleve a la respuesta correcta (autónomo / SL) según mis circunstancias específicas, con la recomendación principal y el momento en que debería revisar la decisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Decidir entre autónomo y Sociedad Limitada en España con análisis de costes fiscales reales y árbol de decisión personalizado',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],

            // 9 — Customer Support
            [
                'profession_id'    => 9,
                'title'            => 'Métricas de soporte que importan: los KPIs que revelan si el equipo funciona de verdad',
                'description'      => 'Los KPIs de customer support que van más allá del tiempo de respuesta, cómo calcularlos, interpretarlos y usarlos para tomar decisiones sobre el equipo, los procesos y el producto.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de Customer Support con experiencia en equipos de 5 a 100 personas en empresas SaaS y de servicios. Tu enfoque es claro: los KPIs de soporte existen para mejorar la experiencia del cliente y la eficiencia del equipo, no para crear presión artificial. Necesito que me ayudes a construir el sistema de métricas de mi equipo de soporte que revele verdades útiles en lugar de números que se ven bien en un dashboard.

## MI CONTEXTO

- Tipo de empresa y producto: [SaaS / ecommerce / servicios / otro]
- Tamaño del equipo de soporte: [número de personas]
- Canales de soporte actuales: [email / chat / teléfono / redes sociales / combinación]
- Herramienta de ticketing: [Zendesk / Intercom / Freshdesk / HubSpot / otro]
- Volumen de tickets mensual: [número aproximado]
- ¿Tienes SLAs definidos con clientes?: [Sí / No]
- Principal problema percibido en el equipo: [lentitud / calidad de respuestas / burnout / falta de datos / otro]

---

## PARTE 1 — EL MAPA COMPLETO DE KPIs

### 1.1 Los KPIs que la mayoría mide (y sus limitaciones ocultas)

Para cada métrica estándar, explica qué mide bien, qué distorsiona y qué comportamiento no deseado puede incentivar en el equipo:

**First Response Time (FRT):**
- Cómo se calcula correctamente (horas de negocio vs 24/7)
- Por qué optimizar solo el FRT lleva a respuestas de "he recibido tu mensaje, en breve te atiendo"
- El benchmark para mi tipo de canal y sector

**Average Handle Time (AHT):**
- La trampa del AHT bajo: agentes que cierran tickets sin resolverlos para mejorar el ratio
- Cuándo el AHT alto es una señal de calidad y no de ineficiencia
- Cómo ajustar el AHT por complejidad de ticket

**First Contact Resolution (FCR):**
- Por qué el FCR es el KPI más importante y también el más difícil de medir correctamente
- Las 3 formas de medir FCR y cuál es la más honesta
- La relación inversa entre FCR y AHT: cómo aprovecharla

**CSAT (Customer Satisfaction Score):**
- Cuándo preguntar (¿justo al cerrar o 24h después?)
- Por qué el CSAT de los clientes muy satisfechos o muy insatisfechos es el más valioso
- Cómo evitar el sesgo de auto-selección en las respuestas

**Backlog y ticket age:**
- Por qué el backlog es un indicador de salud más importante que el FRT
- Cómo definir el "backlog saludable" según el volumen del equipo

### 1.2 Los KPIs que muy pocos equipos miden (y que revelan más)

Para cada métrica, explica qué insight da y cómo calcularla:

**1. Deflection Rate (tasa de deflexión):**
El porcentaje de potenciales tickets que se resuelven antes de llegar al equipo (base de conocimiento, chatbot, autoservicio). Cómo medirlo y por qué es el KPI más importante para escalar soporte sin contratar.

**2. Ticket Reopening Rate:**
Porcentaje de tickets que se vuelven a abrir después de cerrarlos. Un FCR falso se revela aquí. Benchmark saludable y acción si está por encima.

**3. Cost per ticket:**
Coste total del equipo de soporte / número de tickets resueltos. Cómo usarlo para decidir si invertir en automatización o en una persona más.

**4. Agent Satisfaction Score (ASAT):**
Por qué medir la satisfacción del equipo de soporte es tan importante como la del cliente, y cómo hacerlo sin que se convierta en un teatro.

**5. Support-driven churn:**
El porcentaje de churns en los que hubo un ticket de soporte sin resolver o mal resuelto en los 30 días anteriores. Por qué este dato es oro para el equipo de producto.

**6. Self-service success rate:**
Porcentaje de sesiones en la base de conocimiento que terminan sin que el usuario abra un ticket. Cómo integrarlo con el sistema de ticketing.

**7. Escalation rate:**
Porcentaje de tickets que escalan a un nivel superior. Alto = formación insuficiente del equipo o procesos poco claros.

---

## PARTE 2 — DASHBOARD Y REPORTING

### 2.1 El dashboard diario del team lead

Define el dashboard que un team lead debe revisar cada mañana en 10 minutos, con:
- Las 5 métricas más importantes para ese día
- Los umbrales de alerta y la acción a tomar cuando se superan
- La visualización recomendada para cada métrica

### 2.2 El reporte mensual para el C-suite

Estructura del reporte mensual de soporte para dirección que conecta los KPIs operativos con el impacto en el negocio:
- Tendencias (vs. mes anterior y vs. mismo mes del año pasado)
- Top 5 categorías de tickets con su coste e impacto en satisfacción
- Bugs o problemas de producto identificados desde soporte (el canal de feedback más infravalorado)
- Evolución del coste por ticket y proyección
- Recomendaciones concretas al equipo de producto o de operaciones

### 2.3 Análisis de calidad de respuestas (QA)

Cómo implementar un proceso de QA de respuestas del equipo:
- El formulario de evaluación de calidad de tickets (con los criterios y su peso)
- La frecuencia y muestra de tickets a revisar por agente
- Cómo dar feedback constructivo al agente sin que lo perciba como persecución
- Cómo el QA se conecta con el plan de formación del equipo

---

## PARTE 3 — MÉTRICAS Y MOTIVACIÓN DEL EQUIPO

### 3.1 Cómo usar las métricas sin crear toxicidad

Las 5 prácticas que convierten los KPIs en herramienta de desarrollo en lugar de presión:
- Por qué publicar los rankings individuales destruye la colaboración
- Cómo compartir métricas del equipo de forma que genere orgullo colectivo
- La diferencia entre gestionar con métricas y gestionar por métricas

### 3.2 Objetivos de equipo vs. objetivos individuales

Qué métricas deben tener objetivos de equipo y cuáles individuales, con la lógica de incentivos correcta para cada caso.

---

## ENTREGABLE: SCORECARD DE SOPORTE

Genera una plantilla de scorecard mensual del equipo de soporte que pueda compartir con dirección, con los KPIs organizados por área (velocidad, calidad, eficiencia, equipo) y la comparativa respecto al período anterior.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir y usar los KPIs de customer support que revelan la salud real del equipo y su impacto en el negocio',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],

            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Sistema de captación de clientes freelance: la agenda llena sin depender de recomendaciones',
                'description'      => 'Proceso de prospección sistemática para freelancers que genera flujo constante de clientes potenciales sin depender de las referencias, con estrategia de outreach, posicionamiento y pipeline.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor especializado en desarrollo de negocio para freelancers y profesionales independientes. Tu especialidad es construir sistemas de captación que generan clientes de forma predecible, sin depender de que "alguien te recomiende" ni de la suerte. Necesito que me ayudes a diseñar el sistema de captación que llena mi agenda de forma sostenible.

## MI SITUACIÓN COMO FREELANCE

- Especialidad y servicio principal: [descripción de lo que haces]
- Cliente ideal (sector, tamaño de empresa, cargo de quien decide): [tu respuesta]
- Ticket medio por proyecto o mes: [tu respuesta]
- Cuántos clientes activos necesitas para tener ingresos suficientes: [número]
- Canales que ya usas o has probado: [LinkedIn / email / referidos / eventos / otro]
- Principal bloqueo para conseguir nuevos clientes: [no sé dónde están / no sé cómo contactarles / sí les contacto pero no responden / sí responden pero no cierran]
- ¿Tienes portfolio o casos de éxito documentados?: [Sí / No]
- Tiempo disponible para captación por semana: [horas]

---

## MÓDULO 1 — POSICIONAMIENTO: QUIÉN ERES Y PARA QUIÉN

### 1.1 Por qué "diseñador freelance" o "desarrollador freelance" no es suficiente

Explica el problema del posicionamiento genérico para el freelance y el impacto directo en:
- La capacidad de cobrar más (el especialista cobra 3x el generalista)
- La facilidad de ser encontrado (SEO, LinkedIn, boca a boca)
- La calidad de los clientes que atraes

### 1.2 El ejercicio de posicionamiento

Guíame por el proceso de definir mi nicho con estas 3 dimensiones:

**Dimensión 1 — QUIÉN:** el sector o tipo de empresa al que me especializo
**Dimensión 2 — QUÉ:** el resultado específico que entrego (no la actividad)
**Dimensión 3 — CÓMO:** el método o enfoque diferencial que uso

Fórmula de posicionamiento: "Ayudo a [QUIÉN] a conseguir [QUÉ] mediante [CÓMO]"

Genera 5 versiones de mi posicionamiento con diferente nivel de especificidad, de más genérico a más nicho, y explica cuál funcionará mejor para mi objetivo de captación.

### 1.3 Perfil de LinkedIn como imán de clientes

Reescribe los elementos clave de mi perfil de LinkedIn para atraer a mi cliente ideal:
- **Titular**: no "Diseñador UX Freelance" sino [resultado + para quién]
- **Extracto (About)**: estructura de 5 párrafos que empieza con el dolor del cliente, no con mi CV
- **Sección de Featured**: qué poner aquí para generar autoridad inmediata
- **Descripción de experiencia**: cómo reescribir los proyectos en términos de resultados del cliente

---

## MÓDULO 2 — IDENTIFICACIÓN Y LISTA DE CLIENTES POTENCIALES

### 2.1 Dónde encontrar a tu cliente ideal (sin depender de anuncios)

Para mi tipo de cliente, dame las 7 fuentes donde puedo encontrar prospectos cualificados de forma gratuita:
1. Búsquedas avanzadas en LinkedIn Sales Navigator (o la versión gratuita)
2. Comunidades de Slack y Discord de mi sector objetivo
3. Grupos de LinkedIn y Facebook del sector
4. Eventos y conferencias del sector (presenciales y online)
5. Job boards: cómo encontrar empresas que buscan algo que tú haces como empleado (y ofrecerlo como freelance)
6. Proveedores complementarios (agencias que subcontratan)
7. Clientes anteriores de otras empresas donde has trabajado

### 2.2 La lista de 100 prospectos

Cómo construir una lista de 100 prospectos cualificados en 3 horas usando:
- Criterios de cualificación mínima (ICP exacto)
- Herramientas gratuitas para encontrar el email de contacto (Hunter.io, Apollo free tier)
- La hoja de seguimiento en Notion/Airtable/Google Sheets con los campos mínimos

---

## MÓDULO 3 — OUTREACH: EL PRIMER CONTACTO

### 3.1 Por qué el cold email funciona y por qué el tuyo no funciona

Los 5 errores más comunes en el outreach de freelancers y la corrección de cada uno:
1. Empieza hablando de ti en lugar del cliente
2. Es demasiado largo (>150 palabras)
3. Pide demasiado en el primer email (reunión de 1 hora)
4. Es genérico (podría enviarse a cualquier empresa)
5. No tiene un valor claro o una razón para responder

### 3.2 La secuencia de outreach en 3 touchpoints

Escribe la secuencia completa de contacto inicial:

**Email 1 — El gancho** (día 1):
- Máx. 100 palabras
- Abre con algo específico sobre esa empresa (un logro, un cambio, un problema del sector)
- Una sola propuesta de valor sin vender nada
- Un CTA ultra fácil (pregunta que se responde con Sí/No)

**Email 2 — El valor** (día 4, si no hay respuesta):
- Aporta algo útil gratuito (un análisis, un recurso, una observación)
- No menciona el email anterior directamente
- CTA ligeramente más directo

**Email 3 — El cierre limpio** (día 10, si no hay respuesta):
- Tono de cierre respetuoso
- Abre la puerta para el futuro sin presionar
- No es un "¿te recuerdo que no me has contestado?"

### 3.3 Outreach en LinkedIn: el mensaje directo que funciona

Escribe el mensaje de LinkedIn (máx. 300 caracteres para el primer contacto sin ser conexión) y el mensaje de seguimiento post-conexión que no suena a spam.

---

## MÓDULO 4 — EL PIPELINE DE CAPTACIÓN

### 4.1 El funnel del freelance

Define las etapas del pipeline de captación con el objetivo semanal de cada una:

| Etapa | Definición | Objetivo semanal | Métrica de conversión |
|-------|-----------|-----------------|----------------------|
| Prospecto identificado | | 20 | |
| Primer contacto enviado | | 10 | 50% de identificados |
| Respuesta recibida | | 2-3 | 20-30% de contactados |
| Llamada/reunión agendada | | 1-2 | 50-70% de respuestas |
| Propuesta enviada | | 1 | 70% de reuniones |
| Cliente ganado | | 0.5 | 30-50% de propuestas |

### 4.2 Rutina semanal de captación (90 minutos/día, 3 días/semana)

Diseña la rutina de prospección de 90 minutos:
- Lunes (30 min investigación): identificar 10 nuevos prospectos y añadirlos a la lista
- Miércoles (30 min outreach): enviar 5 primeros contactos y 5 seguimientos
- Viernes (30 min networking): 1 interacción de valor en LinkedIn por cada prospecto activo

### 4.3 Cómo convertir clientes actuales en fuente de referidos sistemáticos

El proceso para pedir referidos sin sentirte incómodo:
- El momento correcto para pedirlos (justo tras la entrega exitosa)
- La frase exacta que hace que el cliente quiera presentarte a alguien
- Cómo hacer que sea fácil para el cliente referirte (mensaje tipo para que lo reenvíe)
- El sistema de agradecimiento que convierte al cliente en embajador permanente

---

## ENTREGABLE: PLAN DE CAPTACIÓN DE 90 DÍAS

Genera el plan de acción semanal de 90 días con objetivos de pipeline por semana, hitos de revisión y la métrica de éxito que me dirá si el sistema está funcionando o si necesito ajustarlo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el sistema de captación de clientes freelance con posicionamiento, outreach y pipeline que no depende de recomendaciones',
                'vote_score'       => 47,
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
