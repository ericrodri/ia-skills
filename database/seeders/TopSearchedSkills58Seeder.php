<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills58Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Modelo de negocio freemium: diseña el freemium que convierte sin regalar todo',
                'description'      => 'Diseña la versión gratuita y la de pago de tu producto con el equilibrio correcto: suficiente valor gratis para enganchar, suficiente retención en el límite para convertir, sin crear usuarios que nunca paguen porque ya tienen todo lo que necesitan.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño de modelos de negocio freemium y monetización de productos digitales con experiencia analizando y rediseñando la estructura de planes gratuitos y de pago para SaaS, apps y plataformas digitales, donde el diseño del límite entre gratis y pago es la decisión que más impacta en la tasa de conversión y en el coste de adquisición a largo plazo.

Contexto de mi producto:
- Tipo de producto: [SaaS / app móvil / plataforma / marketplace / herramienta]
- Propuesta de valor principal: [qué hace el producto en una frase]
- Planes actuales (si ya tienes freemium): [describe el plan gratis y el de pago]
- Tasa de conversión de free a pago actual: [si la conoces, o "no la medimos"]
- Principal hipótesis sobre por qué no convierte más: [demasiado valor gratis / el límite no duele / no comunicamos bien el upgrade / otro]

---

## Los 3 arquetipos de freemium y cuándo usa cada uno

### Arquetipo 1 — Freemium por capacidad (el más común)

```
El usuario gratuito tiene acceso a todas las features pero con límites
de volumen, cantidad o frecuencia.

Ejemplos:
- Notion: ilimitado para uso personal, límite de bloques para equipos
- Dropbox: 2GB gratis, 2TB de pago
- Mailchimp: hasta 500 contactos gratis, ilimitados de pago
- Trello: tableros ilimitados gratis, límite de Power-Ups

Funciona cuando:
→ El valor del producto escala con el uso (más archivos, más contactos, más proyectos)
→ Los usuarios heavy users son naturalmente los que más pagan
→ El coste marginal de dar más capacidad es bajo

Riesgo:
→ Si el límite es demasiado alto, los usuarios nunca lo alcanzan
→ Si el límite es demasiado bajo, los usuarios se frustran antes de ver el valor
```

### Arquetipo 2 — Freemium por features

```
El usuario gratuito tiene acceso limitado a las funcionalidades.
Las features más potentes o avanzadas están en el plan de pago.

Ejemplos:
- Canva: diseño básico gratis, plantillas premium y brand kit de pago
- Zoom: reuniones de hasta 40 min gratis, ilimitadas de pago
- Grammarly: corrección básica gratis, sugerencias avanzadas de pago
- HubSpot: CRM gratis, automatizaciones y reporting de pago

Funciona cuando:
→ Existe una jerarquía clara entre features básicas y avanzadas
→ Las features de pago resuelven problemas que solo aparecen cuando
   el usuario ya está enganchado (escala, colaboración, reporting)

Riesgo:
→ Si las features gratis son suficientes para el caso de uso principal,
   el usuario nunca siente la necesidad de actualizar
```

### Arquetipo 3 — Freemium por tiempo (trial disfrazado)

```
El usuario tiene acceso completo durante un tiempo limitado, después
necesita pagar para seguir.

Diferencia con el trial:
→ Trial: "tienes X días para decidir"
→ Freemium por tiempo: "puedes usar la versión básica siempre, pero las
   features avanzadas que probaste en los primeros 30 días requieren pago"

Funciona cuando:
→ El valor del producto se experimenta rápido (primera sesión)
→ El enganche ocurre en los primeros días de uso
→ Quieres que los usuarios experimenten el producto completo antes de decidir
```

---

## El framework para diseñar el límite correcto

### La pregunta clave: ¿qué tiene que experimentar el usuario ANTES de pagar?

```
El usuario debe:
1. Entender qué hace el producto (primeros 5 minutos)
2. Completar su primer caso de uso con éxito (primera sesión)
3. Volver al menos una segunda vez porque encontró valor real (día 3-7)
4. Sentir el límite cuando ya está comprometido, no antes (semana 2-4)

El límite correcto duele SOLO cuando el usuario ya está enganchado.
Un límite que duele el día 1 es una barrera de entrada.
Un límite que nunca duele es un modelo de caridad.
```

### Tabla de análisis para encontrar tu límite óptimo

| Pregunta | Tu respuesta | Implicación para el límite |
|---|---|---|
| ¿Cuándo experimenta el usuario el "aha moment"? | [responde] | El plan gratis debe llegar hasta ese momento |
| ¿Qué hacen los usuarios que convierten que no hacen los que no convierten? | [responde] | Esas acciones deben ser posibles en gratis |
| ¿Qué hacen los heavy users que los casual users no hacen? | [responde] | Esas features o capacidad van al plan de pago |
| ¿Cuál es el coste para ti de un usuario gratis activo? | [responde] | Define el umbral de generosidad sostenible |

### El test del límite en 3 preguntas

```
Antes de publicar tu plan gratuito, pásalo por este test:

PREGUNTA 1: "¿Un usuario puede resolver su caso de uso principal
con el plan gratis de forma indefinida?"
→ SÍ: tu límite es demasiado generoso. Ajusta.
→ NO: continúa al siguiente.

PREGUNTA 2: "¿El usuario siente el límite antes de haber
experimentado el valor real del producto?"
→ SÍ: tu límite llega demasiado pronto. Ajusta.
→ NO: continúa al siguiente.

PREGUNTA 3: "Cuando el usuario llega al límite, ¿tiene
ya suficiente contexto para entender qué gana pagando?"
→ NO: el upgrade necesita más contexto o el límite llega
       antes de que el usuario entienda el valor.
→ SÍ: tu límite está bien diseñado.
```

---

## El momento del upgrade: cómo convertir sin presionar

### Los 5 triggers de conversión que funcionan

```
1. LÍMITE ALCANZADO (el más obvio, pero hay que ejecutarlo bien)
   → Mensaje: "Has llegado al límite de [X] en tu plan actual"
   → Error frecuente: mostrar solo el error, sin mostrar qué ganas pagando
   → Bien ejecutado: "Has creado 5 proyectos (tu límite). Con el plan Pro,
     proyectos ilimitados + exportación en PDF + acceso al equipo."

2. FEATURE BLOQUEADA (el usuario intenta usar algo que no tiene)
   → Mensaje: clic en la feature → "Esta función está disponible en el plan Pro"
   → Muestra un preview o demo de lo que obtendría
   → No lo bloquees completamente: muestra la feature en gris con el candado

3. MILESTONE DEL USUARIO (el usuario consiguió su primer éxito)
   → Momento: justo después del primer "aha moment"
   → Mensaje: "¡Acabas de [logro]! Con el plan Pro puedes también [siguiente nivel]"
   → Este trigger tiene una tasa de conversión 3-5x más alta que el límite genérico

4. COLABORACIÓN (el usuario quiere invitar a alguien)
   → Uno de los triggers más potentes en herramientas de trabajo
   → "Invita a tu equipo" → "La colaboración en equipo está disponible en Pro"
   → La presión social de querer compartir el trabajo es un motor poderoso

5. EXPORTACIÓN O INTEGRACIÓN (el usuario quiere conectar el producto a su flujo)
   → "Exportar a PDF", "Conectar con Slack", "Sincronizar con Google Drive"
   → Estas acciones indican un usuario comprometido con el producto en su workflow
   → Son el momento ideal para el upgrade porque el usuario ya lo ve como herramienta de trabajo
```

### Página de upgrade que convierte

```
Estructura óptima del modal / página de upgrade:

TITULAR: [Lo que ganas, no lo que pagas]
  ❌ MAL: "Actualiza a Pro por 29€/mes"
  ✅ BIEN: "Desbloquea proyectos ilimitados, exportación y trabajo en equipo"

COMPARATIVA VISUAL:
  Gratis             Pro
  ✓ 5 proyectos  →  ✓ Proyectos ilimitados
  ✓ 1 usuario    →  ✓ Hasta 10 usuarios
  ✗ Exportar PDF →  ✓ Exportar PDF y Word
  ✗ Integraciones → ✓ Slack, Notion, Zapier

PRECIO CON ANCLAJE:
  [Precio mensual] o [Precio anual con % de ahorro destacado]
  "Ahorra el 35% con el plan anual → 19€/mes (facturado anualmente)"

PRUEBA SOCIAL EN EL PUNTO CRÍTICO:
  "14.000 equipos ya usan el plan Pro. Aquí lo que dicen:"
  [Testimonial de 1-2 líneas de alguien con un rol similar al usuario]

CTA ÚNICO:
  "Empieza tu prueba gratuita de 14 días" (si ofreces trial de Pro)
  o "Activar plan Pro" (si es directamente de pago)

GARANTÍA (reduce el riesgo percibido):
  "Cancela en cualquier momento. Sin compromiso."
```

---

## Métricas freemium que tienes que medir cada semana

```
CONVERSIÓN:
Free-to-paid conversion rate = Usuarios que pagan / Total usuarios gratis activos
Objetivo SaaS B2B: 2-5% | B2C: 1-3% | Herramientas productividad: 3-8%

ACTIVACIÓN:
Activated free users = Usuarios que completaron el "aha moment" / Total registros
Si <40%: el problema está en el onboarding, no en el límite del freemium

TIEMPO HASTA CONVERSIÓN:
Mediana de días desde registro hasta primer pago
Si >90 días: el límite llega demasiado tarde o el valor percibido es bajo

CHURN DE USUARIOS PAGOS:
Si el churn de pagos es >5% mensual: el producto no cumple las expectativas
del upgrade (las features premium no valen lo que el usuario esperaba)

COSTO POR USUARIO GRATIS:
Infraestructura + soporte + coste de adquisición / Usuarios gratis activos
Si supera el 30% del ARPU de pago: el modelo no es sostenible a escala
```

---

Entrega: analiza la estructura freemium de mi producto ([descripción del producto y planes actuales]), identifica si el límite está bien posicionado usando el test de las 3 preguntas, y dame las recomendaciones concretas para ajustar la frontera entre gratis y pago para aumentar la conversión de mi caso específico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el equilibrio correcto entre plan gratuito y de pago para maximizar conversión',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Documentación técnica efectiva: READMEs, wikis, ADRs y changelogs que el equipo realmente lee',
                'description'      => 'Aprende a escribir documentación técnica que el equipo usa, mantiene y actualiza: desde el README que convierte a nuevos colaboradores en productivos en horas, hasta los Architecture Decision Records que preservan el conocimiento tácito del equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ingeniería de software y cultura de documentación técnica con experiencia en equipos de desarrollo distribuidos y startups en crecimiento, donde la documentación no es un lujo sino la diferencia entre un equipo que escala su conocimiento y uno que reinventa la rueda en cada sprint o pierde velocidad cada vez que alguien nuevo se incorpora.

Contexto de mi equipo:
- Tamaño del equipo técnico: [número de developers]
- Stack principal: [lenguajes, frameworks, herramientas clave]
- Situación actual de la documentación: [no existe / existe pero nadie la lee / existe pero está desactualizada / parcialmente buena]
- Principal dolor de la falta de documentación: [onboarding lento / decisiones repetidas / deuda técnica sin contexto / dependencia de personas clave]
- Herramienta donde vive la documentación: [Notion / Confluence / GitHub Wiki / Markdown en repo / ninguna]

---

## Los 4 tipos de documentación técnica y cuándo usar cada uno

### 1. README — La puerta de entrada al proyecto

El README es la primera impresión del proyecto. Un buen README convierte a un developer nuevo en productivo en horas, no en días.

**Estructura del README perfecto:**

```markdown
# [Nombre del Proyecto]

> Una línea que explica qué hace el proyecto y para quién.

## ¿Qué es esto?
[2-3 párrafos. Contexto: qué problema resuelve, quién lo usa,
qué NO hace este proyecto (importante para evitar malentendidos)]

## Inicio rápido (Quick Start)
[El camino más corto desde cero hasta ver algo funcionando.
No el camino completo — el camino mínimo para el primer éxito.]

```bash
# 1. Clona el repositorio
git clone https://github.com/empresa/proyecto.git

# 2. Instala dependencias
cd proyecto && npm install

# 3. Configura las variables de entorno
cp .env.example .env
# Edita .env con tus credenciales (ver sección Configuración)

# 4. Ejecuta en local
npm run dev
# → Abre http://localhost:3000
```

## Requisitos previos
- Node.js >= 18.0
- PostgreSQL >= 14
- [Otros requisitos]

## Configuración
[Tabla de variables de entorno con descripción y valores de ejemplo]

| Variable | Descripción | Ejemplo |
|---|---|---|
| DATABASE_URL | URL de conexión a PostgreSQL | postgres://user:pass@localhost/db |
| API_KEY | Clave de la API de [servicio] | sk-... |

## Arquitectura
[Diagrama o descripción de alto nivel. No los detalles — el mapa.]

## Contribuir
[Cómo crear un PR, estándares de código, cómo correr los tests]

## Equipo y contacto
[Quién mantiene esto y cómo contactar si hay dudas]
```

**Regla de los 15 minutos:** un developer nuevo con acceso al repo y credenciales válidas debe poder ejecutar el proyecto en local en 15 minutos siguiendo solo el README. Si tarda más, el README necesita mejora.

---

### 2. Architecture Decision Records (ADRs) — El por qué de las decisiones

Los ADRs documentan las decisiones técnicas importantes y su contexto. Sin ellos, seis meses después nadie recuerda por qué se eligió PostgreSQL en lugar de MongoDB, o por qué se decidió no usar microservicios.

**Cuándo crear un ADR:**
```
✅ Elegir una librería o framework que afecta a todo el stack
✅ Decidir la arquitectura de un módulo importante
✅ Cambiar una convención de código que aplica a todo el equipo
✅ Rechazar conscientemente una opción que parece buena (documenta el "no")
✅ Cualquier decisión donde el equipo debatió más de 30 minutos
```

**Plantilla de ADR:**

```markdown
# ADR-[número]: [Título de la decisión]

**Fecha:** [YYYY-MM-DD]
**Estado:** Propuesta | Aceptada | Deprecada | Sustituida por ADR-[número]
**Autores:** [nombres]

## Contexto
[Describe la situación que provocó esta decisión. ¿Qué problema
estábamos intentando resolver? ¿Qué restricciones había?]

## Opciones consideradas

### Opción 1: [nombre]
**Pro:** [...]
**Contra:** [...]

### Opción 2: [nombre]
**Pro:** [...]
**Contra:** [...]

### Opción 3 (la elegida): [nombre]
**Pro:** [...]
**Contra:** [...]

## Decisión
[Qué elegimos y por qué. Menciona los criterios que más pesaron.]

## Consecuencias
**Positivas:** [qué ganamos con esta decisión]
**Negativas o riesgos:** [qué perdemos o qué deberemos gestionar]
**Revisión:** [cuándo o bajo qué condiciones revisar esta decisión]
```

**Dónde viven los ADRs:**
```
Recomendado: en el mismo repositorio, en /docs/adr/
Nombrado: 0001-usar-postgresql.md, 0002-arquitectura-modular.md

Ventajas de tenerlos en el repo:
→ Viajan con el código (el contexto y el código evolucionan juntos)
→ Se revisan en PR (los cambios de arquitectura se discuten en PR)
→ Búsqueda de texto completo con el código relacionado
```

---

### 3. Wiki de arquitectura — El mapa del sistema

La wiki de arquitectura no documenta cómo funciona el código (para eso están los comentarios y el código bien escrito). Documenta cómo están organizados los componentes y por qué.

**Estructura de la wiki de arquitectura:**

```
docs/
├── architecture/
│   ├── overview.md          → Diagrama de alto nivel del sistema
│   ├── data-flow.md         → Cómo fluyen los datos entre servicios
│   ├── auth-and-security.md → Modelo de autenticación y permisos
│   └── integrations.md      → APIs externas y cómo se conectan
├── adr/
│   └── [los ADRs]
├── runbooks/
│   ├── deploy.md            → Cómo hacer un deploy
│   ├── incidents.md         → Protocolo de incidentes en producción
│   └── rollback.md          → Cómo hacer un rollback
└── onboarding/
    ├── day-1.md             → Qué hacer el primer día
    ├── week-1.md            → Qué hacer la primera semana
    └── glossary.md          → Glosario de términos del proyecto
```

**El diagrama de arquitectura que el equipo realmente usará:**

```
Principios para diagramas útiles:
→ C4 model: usa los 4 niveles (Context, Container, Component, Code)
   pero en la wiki solo necesitas Context y Container
→ Herramientas recomendadas: Mermaid (dentro del Markdown),
   draw.io, Excalidraw (para diagramas más libres)
→ Un diagrama desactualizado es peor que ninguno
   → Solución: diagrama as code con Mermaid (se actualiza con el PR)

Ejemplo de diagrama de contexto en Mermaid:
```mermaid
graph TB
    U[Usuario web] --> FE[Frontend React]
    FE --> API[API Laravel]
    API --> DB[(PostgreSQL)]
    API --> CACHE[(Redis)]
    API --> EXT[Stripe API]
    API --> EMAIL[SendGrid]
```

---

### 4. Changelog — El historial que los stakeholders leen

El changelog conecta el trabajo técnico con el impacto en el negocio. Sigue el formato Keep a Changelog y SemVer.

**Plantilla de CHANGELOG.md:**

```markdown
# Changelog

Todos los cambios notables de este proyecto se documentan aquí.
Formato: [Keep a Changelog](https://keepachangelog.com)
Versioning: [Semantic Versioning](https://semver.org)

---

## [Unreleased]
### En progreso
- [Feature en desarrollo activo]

---

## [2.4.0] — 2025-08-15

### Añadido
- Exportación de reportes en formato Excel (`.xlsx`)
- Notificaciones por email cuando el proceso de análisis completa
- Soporte para autenticación con Google SSO

### Mejorado
- Reducción del tiempo de carga del dashboard principal en un 60%
  (migración de consultas N+1 a eager loading)
- Interfaz de carga de archivos: soporte drag & drop

### Corregido
- El filtro de fechas ignoraba la zona horaria del usuario (#342)
- Los exports en PDF no incluían el logo en páginas 2+ (#387)

### Seguridad
- Actualización de dependencias con vulnerabilidades CVE-2025-1234

---

## [2.3.1] — 2025-07-28

### Corregido
- Error 500 al intentar eliminar un proyecto con tareas asociadas (#401)
```

---

## Cómo mantener la documentación actualizada (el verdadero reto)

### El sistema que funciona: documentación como parte del Definition of Done

```
Añade a tu DoD de cada historia de usuario o PR:

□ Si añade una feature nueva: README o wiki actualizado
□ Si cambia la arquitectura: ADR creado o actualizado
□ Si añade variables de entorno: .env.example actualizado
□ Si es un cambio visible para el usuario: CHANGELOG actualizado
□ Si cambia un endpoint: documentación de la API actualizada

Herramienta: añade un checklist en la plantilla de PR de GitHub:

## PR Checklist
- [ ] Tests pasando
- [ ] Variables de entorno nuevas en .env.example
- [ ] CHANGELOG actualizado (si es feature o fix importante)
- [ ] Documentación actualizada si cambia el comportamiento existente
```

### Automatizaciones que ayudan

```bash
# Genera un draft de changelog desde los commits de git
# (requiere commits con formato Conventional Commits)
npx conventional-changelog -p angular -i CHANGELOG.md -s

# Valida que el .env.example tiene todas las variables del .env
# (script simple para CI)
diff <(grep -oP '^[A-Z_]+(?==)' .env | sort) \
     <(grep -oP '^[A-Z_]+(?==)' .env.example | sort)
```

---

Entrega: crea el README de mi proyecto ([nombre y descripción del proyecto]) siguiendo la estructura anterior, genera la plantilla de ADR adaptada a mi stack ([stack]), y dame el checklist de Definition of Done para incluir en nuestra plantilla de PR en GitHub que asegure que la documentación no se queda atrás.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear y mantener documentación técnica que el equipo realmente usa y actualiza',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Microcopy y mensajes del sistema: textos de error, estado vacío y onboarding que mejoran la experiencia',
                'description'      => 'Escribe los textos de interfaz que marcan la diferencia entre una app que frustra y una que guía: mensajes de error que explican y ayudan, estados vacíos que invitan a actuar y mensajes de onboarding que consiguen que el usuario llegue al primer éxito.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en UX writing y microcopy con experiencia redactando y auditando los textos de interfaz de productos digitales, donde el microcopy bien escrito no es un detalle estético sino una palanca de conversión, retención y satisfacción que la mayoría de los equipos ignora y que tiene un ROI inmediato porque requiere tiempo, no presupuesto.

Contexto de mi producto:
- Tipo de producto: [app web / app móvil / SaaS / e-commerce / herramienta de productividad]
- Tono de voz del producto: [formal / profesional / amigable / cercano / técnico]
- Audiencia principal: [perfil del usuario objetivo]
- Textos que más quieres mejorar: [errores / estados vacíos / onboarding / notificaciones / tooltips / confirmaciones / todos]
- Situación actual: [textos técnicos heredados del desarrollo / textos en inglés sin traducir / textos inconsistentes / sin microcopy definido]

---

## Los 5 tipos de microcopy más críticos

### 1. Mensajes de error — El texto que más define la percepción del producto

**Los 4 errores más frecuentes en mensajes de error:**

```
❌ Error genérico:
"Se ha producido un error."
→ No dice qué pasó, no dice qué hacer, genera ansiedad

❌ Error técnico:
"Error 422: Unprocessable Entity"
→ Incomprensible para el usuario no técnico

❌ Error que culpa al usuario:
"Has introducido un formato inválido."
→ Agresivo, defensivo, no ayuda

❌ Error sin solución:
"Tu sesión ha expirado."
→ Dice qué pasó pero no qué hacer
```

**La fórmula del buen mensaje de error:**

```
[Qué pasó] + [Por qué] (si ayuda) + [Qué hacer]

Estructura en 2-3 líneas:
Línea 1 (titular): Lo que pasó, en lenguaje humano
Línea 2 (cuerpo): Cómo solucionarlo, acción concreta
Línea 3 (opcional): Alternativa o enlace de ayuda
```

**Antes y después de mensajes de error reales:**

| Situación | Texto malo | Texto mejorado |
|---|---|---|
| Contraseña incorrecta | "Credenciales inválidas" | "La contraseña no es correcta. Inténtalo de nuevo o [recupera tu contraseña]." |
| Formulario incompleto | "Todos los campos son obligatorios" | "Falta el correo electrónico. Añádelo para continuar." |
| Sin conexión | "Error de red" | "Sin conexión a internet. Comprueba tu red y vuelve a intentarlo." |
| Archivo demasiado grande | "Error al subir el archivo" | "Este archivo pesa 12 MB. El límite es 5 MB. Puedes comprimirlo o [subirlo por Dropbox]." |
| Tiempo de espera | "Timeout" | "Esto está tardando más de lo esperado. Espera un momento o [actualiza la página]." |
| Permiso denegado | "Acceso no autorizado" | "Solo los administradores pueden hacer esto. Pide acceso a [nombre de quien puede darlo]." |

**Reglas de oro para errores:**
```
→ Nunca uses "error" como primera palabra. Empieza con lo que pasó.
→ Nunca uses jerga técnica (404, null, undefined, exception, timeout)
→ Siempre da una acción concreta o un enlace de salida
→ En formularios: señala el campo concreto, no "hay errores en el formulario"
→ Si fue un error del sistema (no del usuario): reconócelo y discúlpate brevemente
   "Algo fue mal por nuestra parte. Inténtalo de nuevo o [contacta con soporte]."
```

---

### 2. Estados vacíos — La oportunidad más desaprovechada del producto

El estado vacío es lo que el usuario ve cuando no tiene datos todavía: lista de tareas vacía, inbox a cero, dashboard sin proyectos. La mayoría de los productos ponen un texto aburrido. Los mejores productos convierten el estado vacío en un momento de engagement.

**Los 3 tipos de estado vacío:**

```
TIPO A — Primer uso (el usuario nunca ha creado nada)
→ Objetivo: inspirar, eliminar el miedo al primer paso
→ Tono: alentador, específico, con llamada a la acción clara

TIPO B — Sin resultados en una búsqueda o filtro
→ Objetivo: orientar (¿qué puede hacer el usuario?)
→ Tono: útil, sin culpar al usuario por la búsqueda

TIPO C — Lista borrada o completada
→ Objetivo: reforzar el logro (si es positivo) o facilitar el reinicio
→ Tono: celebratorio (si completó algo) o neutral (si borró)
```

**Plantillas de estado vacío que funcionan:**

```
TIPO A — Primer uso:

[Ilustración relevante — no el típico cajón vacío genérico]
Titular: "Tu [área] está esperando"
Subtítulo: "Crea tu primer [objeto] y [beneficio concreto en 5-7 palabras]."
CTA: "[Verbo + objeto]" → "Crear proyecto", "Añadir cliente", "Importar datos"

Ejemplo — Inbox vacío de una herramienta de gestión:
Ilustración: bandeja de correo con luz verde
Titular: "Tu bandeja está al día"
Subtítulo: "Cuando lleguen nuevas solicitudes, aparecerán aquí."
[No necesita CTA — es un estado positivo]

Ejemplo — Lista de proyectos vacía:
Titular: "Aún no tienes proyectos"
Subtítulo: "Crea tu primer proyecto para empezar a organizar tu trabajo."
CTA: "Crear primer proyecto →"

TIPO B — Sin resultados de búsqueda:
"No encontramos '[término buscado]'"
"Prueba con otros términos o [crear nuevo con ese nombre →]"

TIPO C — Lista completada:
"¡Todo listo! No hay tareas pendientes."
"Disfruta el momento o [añade nuevas tareas] para seguir avanzando."
```

---

### 3. Onboarding — Los textos que llevan al usuario al primer éxito

**El error más frecuente:** el onboarding habla de features, no de resultados.

```
❌ MAL (orientado a features):
"Bienvenido a [Producto]. Aquí puedes crear proyectos, añadir
tareas, asignarlas a tu equipo, establecer fechas límite,
integrar con Slack y mucho más."

✅ BIEN (orientado al primer éxito):
"En 3 minutos tendrás tu primer proyecto listo."
[Paso 1] [Paso 2] [Paso 3]
```

**Estructura del flujo de onboarding en texto:**

```
PANTALLA DE BIENVENIDA:
Titular: "Hola, [Nombre]. Vamos a poner esto en marcha."
Subtítulo: "Tres pasos y tendrás [resultado concreto]."
CTA: "Empezar →"

PASO 1 (la acción más importante):
Instrucción: "[Verbo + objeto concreto]" — "Añade tu primer cliente"
Helper text: "Escribe el nombre de la empresa o persona. Puedes importar
              desde Excel más tarde si prefieres."
Placeholder del campo: "Nombre de la empresa (ej: Acme SL)"

PASO 2:
Instrucción: "[Segunda acción clave]"
Progress: "Paso 2 de 3"
Skip opcional: "Hacer esto más tarde" (solo si es realmente opcional)

CONFIRMACIÓN DE ONBOARDING COMPLETADO:
Titular: "¡Listo! [Resultado obtenido]."
Subtítulo: "Ahora puedes [siguiente acción de valor]."
CTA primario: "[Siguiente acción más importante]"
CTA secundario: "Explorar el panel →"
```

---

### 4. Tooltips y textos de ayuda contextual

```
REGLAS PARA TOOLTIPS:
→ Máximo 2 líneas (si necesita más, es un artículo de ayuda, no un tooltip)
→ Explica el "para qué", no el "qué es"
→ Aparece solo cuando el usuario lo necesita (hover o ícono de ?)
→ Si la interfaz necesita muchos tooltips, el problema es de diseño, no de copy

FORMATO:
✅ "Usa esto para [beneficio o caso de uso concreto]."
❌ "Esto es [nombre de la feature]."

EJEMPLOS:
Campo "Fecha de vencimiento":
✅ "Te avisaremos 24 horas antes para que puedas revisar el trabajo."
❌ "La fecha en que vence esta tarea."

Switch "Notificaciones de email":
✅ "Recibe un resumen diario de lo que cambió mientras no estabas."
❌ "Activa o desactiva las notificaciones por email."
```

---

### 5. Confirmaciones y mensajes de éxito

```
CONFIRMACIONES (antes de una acción destructiva o irreversible):

Mal:
Titular: "¿Estás seguro?"
Botón: "Sí" / "No"

Bien:
Titular: "¿Eliminar el proyecto 'Campaña Verano 2025'?"
Cuerpo: "Se eliminarán también las 12 tareas asociadas. Esta acción
         no se puede deshacer."
Botón principal: "Eliminar proyecto"
Botón secundario: "Cancelar"

Regla: el botón de confirmación siempre describe la acción, nunca "Sí" o "OK".

MENSAJES DE ÉXITO (feedback inmediato tras una acción):

El mensaje de éxito es la oportunidad de reforzar el comportamiento y
proponer el siguiente paso.

Estructura:
"[Acción] completada [con nombre específico si aplica]."
"[Siguiente acción sugerida]" (como CTA secundario o texto)

Ejemplos:
✅ "Proyecto 'Rediseño web' creado. ¿Quieres añadir la primera tarea?"
✅ "Archivo subido correctamente. [Ver en la biblioteca →]"
✅ "Correo enviado a 243 contactos. [Ver estadísticas →]"
```

---

## Checklist de auditoría de microcopy

```
Para cada texto de tu interfaz, comprueba:
□ ¿Usa lenguaje humano, no técnico?
□ ¿Empieza con lo importante (no con "Error:", "Aviso:", "Info:")?
□ ¿Le dice al usuario qué hacer, no solo qué pasó?
□ ¿Es coherente con el tono de voz del producto?
□ ¿Está en la voz activa (no "el archivo fue eliminado" sino "eliminaste el archivo")?
□ ¿Los CTAs usan verbos de acción específicos (no "OK", "Aceptar", "Enviar")?
□ ¿Los textos de error nunca culpan al usuario?
□ ¿Los estados vacíos invitan a actuar, no solo muestran que no hay datos?
```

---

Entrega: audita los 5 textos de mi producto que más impactan la experiencia ([lista los textos actuales]) y dame la versión mejorada de cada uno usando la fórmula y los principios anteriores, adaptados al tono de voz de mi producto ([tono]).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Mejorar los textos de interfaz para reducir la fricción y guiar al usuario al éxito',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de la propuesta económica: pricing, descuentos y cómo defender el precio sin ceder el margen',
                'description'      => 'Diseña y defiende tu propuesta económica con confianza: cómo estructurar el pricing, cuándo y cuánto descuento ofrecer, cómo responder a la negociación de precio y cómo proteger el margen sin perder el cliente.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación de precio y diseño de propuestas comerciales B2B con experiencia en ciclos de venta de servicios, SaaS y consultoría, donde la gestión del precio es la habilidad que más separa a los comerciales mediocres de los que cierran con margen y sin descuentos innecesarios.

Contexto de mi situación comercial:
- Tipo de producto o servicio: [SaaS / servicios profesionales / consultoría / agencia / producto físico]
- Ticket medio de la propuesta: [rango en euros]
- Estructura de precios actual: [precio fijo / por usuario / por proyecto / suscripción / combinado]
- Principal objeción de precio que recibes: [es demasiado caro / el competidor es más barato / no tenemos presupuesto / necesito descuento]
- Tu práctica actual cuando piden descuento: [siempre doy / nunca doy / depende / no tengo política clara]

---

## Marco de pricing: estructura tu precio antes de negociarlo

### Los 3 enfoques de pricing y cuándo usar cada uno

```
ENFOQUE 1 — Pricing basado en coste
Precio = Coste × (1 + margen deseado)
→ Ventaja: sencillo y protege el margen mínimo
→ Riesgo: deja dinero sobre la mesa si el valor percibido es mayor
→ Úsalo: cuando el coste es muy variable y necesitas protegerte

ENFOQUE 2 — Pricing basado en el mercado/competencia
Precio = Precio del mercado ± diferenciación
→ Ventaja: fácil de justificar ante el cliente
→ Riesgo: te obliga a competir en precio si no diferencias
→ Úsalo: como referencia para validar que no estás muy fuera de rango

ENFOQUE 3 — Pricing basado en valor (el más potente)
Precio = Fracción del valor económico que generas para el cliente
→ Ventaja: desvincula el precio de tu coste y lo conecta al ROI del cliente
→ Regla general: captura entre el 10% y el 30% del valor que generas
→ Úsalo: siempre que puedas cuantificar el impacto económico de tu trabajo
```

**Cómo calcular el precio basado en valor:**

```
Ejemplo — Consultoría de automatización de procesos:
El cliente gasta actualmente 3 personas × 20h/semana en el proceso manual
= 60h/semana × 52 semanas × 35€/hora = 109.200€/año en coste de personal

Tu automatización elimina el 80% de ese trabajo = 87.360€/año de ahorro

Precio basado en valor:
→ 15% del valor generado en el primer año = 13.104€ (precio muy bajo)
→ 25% del valor generado = 21.840€ (precio razonable)
→ 50% del valor generado el primer año (pago único) = 43.680€ (premium)

Independientemente del precio que elijas, preséntatelo así:
"Este proyecto tiene un ROI del [300-600]% en el primer año."
```

---

## Estructura de la propuesta económica que funciona

### La propuesta de 3 opciones (anchoring)

Siempre presenta 3 opciones. La opción del medio es la que quieres vender. La tercera opción hace que la del medio parezca razonable. La primera crea la percepción de que hay opciones económicas.

```
OPCIÓN ESENCIAL — [Nombre]
[Lo mínimo para resolver el problema principal]
Precio: [X€]
Incluye: [lista corta de entregables o features]
No incluye: [lo que sí tiene la opción recomendada]
Ideal para: [perfil de cliente o situación]

OPCIÓN RECOMENDADA ★ — [Nombre]
[La solución completa que resuelve el problema y previene el siguiente]
Precio: [1.5-2X€]
Incluye: todo lo anterior +
  → [Feature o entregable de alto valor percibido 1]
  → [Feature o entregable de alto valor percibido 2]
  → [Soporte o garantía adicional]
Ideal para: [perfil de cliente o situación más amplia]

OPCIÓN PREMIUM — [Nombre]
[La solución completa + el máximo soporte y personalización]
Precio: [3-4X€]
Incluye: todo lo anterior +
  → [Servicio de alto valor añadido]
  → [Dedicación exclusiva o cuenta gestionada]
  → [Garantía de resultado]
Ideal para: [cliente que quiere la solución sin preocupaciones]
```

**Por qué funciona:** el cliente raramente elige la primera opción (parece que recorta) ni la última (parece cara). La del medio se convierte en la "elección razonable". Además, si alguien elige la premium, el margen es excelente.

---

## Política de descuentos: cuándo, cuánto y cómo

### La regla de oro de los descuentos

```
NUNCA des un descuento sin obtener algo a cambio.
Un descuento sin contrapartida transmite:
→ "El precio de lista no era el precio real" (daña la credibilidad)
→ "Si presionas más, puede que baje más" (invita a más negociación)
→ "Mi trabajo vale menos de lo que pedí" (daña tu posicionamiento)

Siempre que bajes el precio, baja también el alcance.
O pide algo a cambio (pago anticipado, referido, testimonial, período más largo).
```

**La tabla de descuentos con contrapartida:**

| Descuento | Contrapartida que pides |
|---|---|
| 10-15% | Pago al contado o por adelantado (100% antes de empezar) |
| 10% | Firma esta semana (cierre rápido — válido 5 días) |
| 15% | Contrato anual en lugar de mensual |
| 20% | Referido activo a otra empresa de su sector |
| 5% | Caso de éxito publicado con resultados reales |
| 10% | Acceso a beta y feedback estructurado durante 3 meses |

---

## Cómo responder a "es demasiado caro"

### Las 4 respuestas más efectivas según el contexto

**Respuesta 1 — Cuando el cliente no entiende el valor:**

```
"Entiendo que el precio puede parecer alto fuera de contexto.
¿Le puedo preguntar: ¿cuánto le cuesta actualmente el problema
que quiere resolver? Me refiero en tiempo de equipo, en errores,
en clientes perdidos o en oportunidades que no podéis aprovechar."

[Deja que el cliente ponga el número. Luego compara tu precio con ese número.]

"Con ese dato, el ROI de nuestra solución es de [X veces la inversión]
en [plazo]. ¿Cambia esto la perspectiva sobre el precio?"
```

**Respuesta 2 — Cuando el cliente compara con un competidor más barato:**

```
"Tiene sentido comparar. ¿Puedo preguntarle qué incluye exactamente
la propuesta de [competidor] por ese precio?"

[Escucha. En el 70% de los casos hay algo que no incluye.]

"La diferencia principal es [X]. Para su caso concreto, eso significa
que con nuestra solución [beneficio que no tiene el competidor].
¿Es eso relevante para su decisión?"
```

**Respuesta 3 — Cuando el presupuesto es genuinamente limitado:**

```
"Entendido. Para ajustarnos a ese presupuesto, podría reducir
el alcance de [elemento concreto que tiene menos valor para este cliente].
Eso nos dejaría en [precio ajustado].

La contrapartida es que [consecuencia concreta del alcance reducido].
¿Eso sería suficiente para sus necesidades inmediatas, o el elemento
que retiramos es crítico para el proyecto?"
```

**Respuesta 4 — Cuando piden descuento por hábito, sin justificación:**

```
"Nuestro precio refleja el trabajo y los resultados que entregamos.
Lo que sí puedo ofrecerle para hacer el proyecto más viable es
[pago en 3 cuotas / empezar con una fase más pequeña / aplazar
la factura hasta el resultado].

¿Alguna de estas opciones encaja mejor con su situación?"
```

---

## La propuesta enviada por email: estructura y timing

```
ESTRUCTURA DEL EMAIL DE PROPUESTA:

Asunto: Propuesta [Nombre del proyecto] — [Empresa] | [Fecha de validez]

Párrafo 1 — Contexto (1-2 frases):
"Basándome en nuestra conversación del [fecha], en la que me contaste
que [el problema principal], he preparado la propuesta que encontrarás
adjunta."

Párrafo 2 — Resumen ejecutivo (3-4 líneas):
"La propuesta incluye [descripción de la opción recomendada]. El objetivo
es [resultado esperado] en [plazo]. El precio de la opción recomendada
es [precio]."

Párrafo 3 — Próximo paso:
"Me gustaría revisar la propuesta contigo el [propón fecha y hora concreta]
para responder cualquier pregunta y adaptar el alcance si es necesario.
¿Te viene bien ese momento o prefieres otro?"

Firma + datos de contacto

---

TIMING CRÍTICO:
→ Envía la propuesta máximo 24-48h después de la reunión
→ Si no tienes respuesta en 3-4 días: llama (no emails de seguimiento)
→ La llamada de seguimiento no es para preguntar "¿qué te parece?"
   sino para "¿tienes alguna pregunta sobre la propuesta?"
```

---

Entrega: diseña la estructura de precios de 3 opciones para mi producto/servicio ([descripción]), calcula el precio basado en valor para mi cliente tipo ([perfil del cliente y problema que resuelve]), y dame el guión para la próxima vez que un cliente diga "es demasiado caro" en mi contexto específico ([sector y ticket medio]).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Estructurar y defender el precio en ventas B2B sin perder el margen',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product-Market Fit: cómo medirlo con la encuesta de Sean Ellis y las métricas de retención',
                'description'      => 'Aprende a medir si realmente has alcanzado el Product-Market Fit usando la encuesta de Sean Ellis, las curvas de retención y las señales cualitativas que distinguen el PMF real de la ilusión de tracción.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de producto y growth con experiencia evaluando el nivel de Product-Market Fit en startups en diferentes etapas, donde confundir la ilusión de tracción inicial con el PMF real es el error que lleva a escalar prematuramente y quemar runway en un producto que aún no está listo para crecer.

Contexto de mi producto:
- Etapa del producto: [idea / MVP / primeros usuarios / crecimiento / escala]
- Número de usuarios activos actuales: [rango aproximado]
- Tipo de producto: [SaaS B2B / B2C / marketplace / app de consumo / herramienta]
- Métricas actuales que mides: [lo que tienes: DAU, MAU, churn, retención, NPS]
- Principal duda sobre el PMF: [¿lo tengo? / ¿cómo lo mido? / ¿cómo mejorarlo?]

---

## Qué es realmente el PMF (y qué no es)

```
PMF ES:
✅ Un segmento específico de usuarios que experimenta tu producto
   como "must have" — no como "nice to have"
✅ Una retención que se estabiliza (la curva de retención se aplana
   en lugar de caer hacia cero)
✅ Un crecimiento que viene principalmente de boca a boca o referidos,
   no solo de adquisición pagada
✅ Usuarios que se quejan activamente si piensas en eliminar el producto

PMF NO ES:
❌ Tener 10.000 usuarios registrados (si ninguno vuelve, no hay PMF)
❌ Una buena demo o mucho interés inicial ("cool product")
❌ Un NPS positivo sin retención
❌ Inversión recibida (los inversores también se equivocan)
❌ Cobertura de prensa o viralidad de un tweet
```

---

## El método 1: La encuesta de Sean Ellis

### Cómo funciona

La encuesta de Sean Ellis es el método más usado para medir PMF. Es una sola pregunta:

```
"¿Cómo te sentirías si ya no pudieras usar [Producto]?"

Opciones:
A) Muy decepcionado
B) Algo decepcionado
C) No me importaría (no es tan útil para mí)
D) Ya no lo uso

Interpretación:
→ Si ≥40% responde "Muy decepcionado" → has alcanzado el PMF
→ Si 25-40% responde "Muy decepcionado" → estás cerca, trabaja en ello
→ Si <25% responde "Muy decepcionado" → aún no hay PMF
```

### A quién encuestar y cuándo

```
CRITERIOS DE SELECCIÓN DE LA MUESTRA:
→ Solo usuarios que han experimentado el valor real del producto
   (no los que se registraron y nunca volvieron)
→ Han usado el producto al menos 2-3 veces en el último mes
→ Llevan al menos 2-4 semanas usando el producto
→ Tamaño mínimo de muestra para ser estadísticamente relevante: 40 respuestas

CUÁNDO ENVIARLA:
→ Después de que el usuario completa su segunda o tercera sesión
→ En el momento del "aha moment" documentado (si lo conoces)
→ No el día del registro (el usuario no ha experimentado el valor aún)

CÓMO ENVIARLA:
→ Por email: con asunto simple "Una pregunta rápida sobre [Producto]"
→ In-app: como popup o banner, timing en el momento de mayor engagement
→ Herramientas: Typeform, Survicate, Delighted, o encuesta nativa en Intercom
```

### Preguntas complementarias de la encuesta

```
La encuesta completa de Sean Ellis incluye 4 preguntas:

1. "¿Cómo te sentirías si ya no pudieras usar [Producto]?"
   [Muy decepcionado / Algo decepcionado / No me importaría / Ya no lo uso]

2. "¿Qué tipo de persona se beneficia más de [Producto]?"
   → Te dice quién es tu usuario ideal desde la perspectiva del usuario
   → A menudo revela un segmento más específico del que pensabas

3. "¿Cuál es el principal beneficio que obtienes de [Producto]?"
   → Te dice qué valoran, que a veces es diferente de lo que tú crees
   → Usa las palabras exactas de tus usuarios en tu marketing

4. "¿Cómo podríamos mejorar [Producto] para ti?"
   → Solo de los que respondieron "Muy decepcionado"
   → Son los que más saben qué necesitas mejorar para acercarte al PMF
```

---

## El método 2: Análisis de curvas de retención

### Cómo leer una curva de retención

```
La retención mide qué porcentaje de tus usuarios vuelve después de X días.

Curva de retención sin PMF (curva que cae a cero):
Día 0: 100%
Día 7: 30%
Día 14: 15%
Día 30: 5%
Día 60: 1%
→ Los usuarios llegan, prueban y no vuelven.
  El producto no genera hábito. No hay PMF.

Curva de retención con PMF (curva que se aplana):
Día 0: 100%
Día 7: 35%
Día 14: 28%
Día 30: 22%
Día 60: 20%
Día 90: 19%
→ La curva se estabiliza. Hay un núcleo de usuarios que siguen volviendo.
  Esto es una señal fuerte de PMF en ese segmento.
```

**Cómo generar la curva de retención:**

```sql
-- En SQL (PostgreSQL): cohort retention analysis
WITH cohorts AS (
  SELECT
    user_id,
    DATE_TRUNC('week', first_login) AS cohort_week
  FROM users
),
activity AS (
  SELECT
    user_id,
    DATE_TRUNC('week', event_date) AS activity_week
  FROM events
  WHERE event_type = 'session_start'
)
SELECT
  c.cohort_week,
  (a.activity_week - c.cohort_week) / 7 AS week_number,
  COUNT(DISTINCT a.user_id) AS retained_users,
  COUNT(DISTINCT c.user_id) AS cohort_size,
  ROUND(COUNT(DISTINCT a.user_id)::NUMERIC /
        COUNT(DISTINCT c.user_id) * 100, 1) AS retention_rate
FROM cohorts c
LEFT JOIN activity a ON c.user_id = a.user_id
GROUP BY 1, 2
ORDER BY 1, 2;
```

**Benchmarks de retención por tipo de producto:**

| Tipo de producto | Buena retención D7 | Buena retención D30 | PMF signal |
|---|---|---|---|
| Apps de consumo (social) | >25% | >15% | Curva aplana >8% D90 |
| SaaS B2B | >65% | >50% | Churn mensual <3% |
| E-commerce | >15% | >8% | 2+ compras en 90 días |
| Marketplace | >30% | >20% | Curva aplana >15% D90 |
| Herramientas productividad | >45% | >35% | DAU/MAU >30% |

---

## El método 3: Señales cualitativas del PMF

```
Las señales de PMF que no salen en los dashboards:

SEÑAL 1: El "pull" de los usuarios
Los usuarios te contactan para preguntar cuándo estará lista la feature X,
o se quejan cuando hay downtime. La queja activa = compromiso.

SEÑAL 2: Referidos orgánicos sin programa de referidos
El crecimiento por boca a boca es la señal más pura de PMF. Si tienes
un NPS de 50+ y preguntas de dónde vienen los nuevos usuarios y muchos
dicen "me lo recomendó [alguien]", es una señal fuerte.

SEÑAL 3: El lenguaje de "must have" en las entrevistas
Cuando entrevistas usuarios y dicen frases como:
  "No podría hacer mi trabajo sin esto"
  "Lo uso todos los días"
  "Se lo recomendé a [5 personas]"
vs. frases de "nice to have":
  "Es útil"
  "Lo uso cuando me acuerdo"
  "Tiene potencial"

SEÑAL 4: Los usuarios adaptan su comportamiento al producto
No adaptan el producto a su comportamiento (uso de workarounds) sino
que cambian cómo trabajan para integrar el producto en su rutina.

SEÑAL 5: Dificultad para desinstalar o cancelar
En SaaS: el proceso de cancelación genera conversaciones. Los usuarios
explican por qué se van, negocian un descuento, piden que les contacten
más adelante. No simplemente cancelan en silencio.
```

---

## Qué hacer si no tienes PMF todavía

### El framework de iteración hacia el PMF

```
Paso 1: Identifica a tus usuarios "Muy decepcionados"
→ Son entre el 20-40% de tu base si estás cerca del PMF
→ Entrevístalos: ¿quiénes son? ¿qué caso de uso resuelven?
→ Busca el segmento donde la concentración de "Muy decepcionados" es mayor

Paso 2: Entiende qué los hace "Muy decepcionados"
→ ¿Qué feature o flujo es el que más usan?
→ ¿Qué problema específico resuelven con el producto?
→ ¿En qué contexto lo usan (rol, sector, tamaño de empresa)?

Paso 3: Dobla la apuesta en ese segmento
→ Optimiza el producto para el caso de uso de los "Muy decepcionados"
→ Ajusta el ICP (Ideal Customer Profile) a ese segmento más específico
→ Elimina features que usan los "Algo decepcionados" si distraen del PMF

Paso 4: Vuelve a medir en 6-8 semanas
→ Repite la encuesta con el nuevo segmento
→ Comprueba si la curva de retención mejora
→ Si el % de "Muy decepcionados" sube, vas en la dirección correcta
```

---

Entrega: diseña el plan de medición de PMF para mi producto ([tipo de producto y etapa]), con la segmentación correcta para la encuesta, el código SQL para generar mi curva de retención adaptado a mi schema de base de datos ([descripción del schema si la tienes]), y el plan de acción si el resultado es inferior al 40% de "Muy decepcionados".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Medir y alcanzar el Product-Market Fit con metodología rigurosa',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Retención y desarrollo del top talent: identifica, retén y desarrolla a tu 10% más impactante',
                'description'      => 'Diseña una estrategia específica para los empleados de alto rendimiento que generan el mayor impacto: cómo identificarlos más allá de las evaluaciones formales, qué los retiene (y qué los espanta), y cómo crear planes de desarrollo individuales que los mantengan comprometidos y creciendo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del talento y desarrollo organizacional con experiencia diseñando programas de identificación y retención de alto rendimiento en empresas de tecnología, consultoría y servicios, donde perder a un top performer tiene un coste real de entre 1,5 y 3 veces su salario anual en reclutamiento, pérdida de conocimiento y caída de productividad del equipo.

Contexto de mi organización:
- Tamaño de la empresa y sector: [número de empleados, sector]
- Porcentaje estimado de top performers: [si lo sabes, o "no lo hemos identificado formalmente"]
- Principal riesgo de pérdida de talento: [mejores ofertas externas / falta de crecimiento / mal ambiente / compensación / otro]
- Proceso de evaluación del desempeño actual: [ciclos formales / informal / sin proceso / OKRs / 360]
- Presupuesto disponible para retención de talento: [limitado / moderado / sin restricción]

---

## Quién es realmente tu top talent

### Más allá de la evaluación formal del desempeño

```
El error más frecuente: usar solo la evaluación anual de desempeño
para identificar a los top performers. Las evaluaciones anuales tienen
sesgo del evaluador, sesgo recency (se valora más lo reciente) y
no capturan el impacto sistémico que tienen los mejores.

Las 4 señales de un top performer real:

1. IMPACTO MULTIPLICADOR
   No solo entrega bien su trabajo: hace que el trabajo de otros
   sea mejor. Sus code reviews mejoran el nivel del equipo.
   Sus presentaciones establecen el estándar. Sus procesos otros
   los adoptan espontáneamente.

2. RESOLUTIVIDAD EN LA AMBIGÜEDAD
   Cuando hay un problema sin solución clara, son los primeros
   en proponer un camino y avanzar. No esperan instrucciones
   perfectas para actuar.

3. INVERSIÓN ACTIVA EN EL EQUIPO
   Ayudan a otros sin que se lo pidan. Mentorizan a juniors.
   Comparten conocimiento proactivamente.

4. CALIBRACIÓN DE CRITERIO
   No solo hacen las cosas bien: saben cuáles son las cosas
   importantes que hay que hacer. Priorizan con criterio,
   no solo con eficiencia.
```

### La matriz de talento 9-box (revisada)

```
POTENCIAL
  Alto  │ Talento en          │ Empleado           │ TOP TALENT ★
        │ desarrollo          │ de alto             │ (enfoque principal
        │ (invertir en         │ potencial           │ de este programa)
        │ formación)           │ (plan de expansión) │
  ─────────────────────────────────────────────────────────────────
  Medio │ Empleado            │ CORE PERFORMER      │ Candidato a
        │ sólido              │ (el 60-70%          │ top performer
        │ (mantener)          │ de la empresa)      │ (acelerar)
  ─────────────────────────────────────────────────────────────────
  Bajo  │ Bajo                │ Performer           │ Posible
        │ performer           │ inconsistente       │ desubicación
        │ (PIP o salida)      │ (diagnosticar)      │ de rol
  ─────────────────────────────────────────────────────────────────
            Bajo               Medio                 Alto
                         DESEMPEÑO ACTUAL
```

**Cómo usar la matriz:**
```
→ Revísala trimestralmente con los managers, no anualmente
→ El foco de retención va al cuadrante Alto/Alto
→ El foco de aceleración va al cuadrante Alto-Medio y Medio-Alto
→ La matriz es confidencial entre managers y RRHH — nunca la comparta con el empleado
→ Una persona puede moverse entre cuadrantes — la matriz es dinámica
```

---

## Qué retiene a los top performers (y qué los espanta)

### Los 5 drivers de retención del top talent

**Driver 1 — Crecimiento y autonomía:**

```
Los top performers no se quedan por el dinero únicamente.
Se quedan cuando sienten que están creciendo más rápido
que en cualquier otro lugar.

Señales de alarma:
→ "No aprendo nada nuevo en este rol"
→ "No tengo espacio para tomar decisiones"
→ "Todo lo tengo que consultar con alguien"

Acciones:
→ Asigna proyectos con algo de ambigüedad (no los microgestiones)
→ Aumenta su alcance antes de que lo pidan
→ Déjales elegir en qué trabajan un % de su tiempo (20% rules)
```

**Driver 2 — Contexto y propósito:**

```
Los top performers necesitan entender el "por qué" de lo que hacen.
No se conforman con tareas — quieren entender la estrategia.

Señales de alarma:
→ "No sé por qué estamos priorizando esto"
→ "Nunca me explican adónde va la empresa"
→ "Mi trabajo no parece conectado con lo importante"

Acciones:
→ Involúcrales en conversaciones estratégicas antes de que sean decisiones
→ Comparte el contexto de negocio que normalmente solo ve el equipo directivo
→ Explica el razonamiento detrás de las prioridades, no solo las prioridades
```

**Driver 3 — Reconocimiento de impacto:**

```
Los top performers no necesitan halagos constantes. Necesitan
que su contribución específica sea visible para quienes importan.

Señales de alarma:
→ "Nadie sabe lo que hago aquí"
→ "Mi manager no habla de mi trabajo al equipo directivo"
→ "Otros reciben el mérito de lo que yo construí"

Acciones:
→ Cita su trabajo en reuniones con stakeholders superiores
→ Asegúrate de que el CEO o directores conocen a tus top performers por nombre
→ Da visibilidad a su trabajo en la newsletter interna o all-hands
```

**Driver 4 — Compensación competitiva:**

```
La compensación no retiene por sí sola, pero sí puede empujar a irse.
El top talent es el primer segmento que sabe exactamente lo que vale
en el mercado (entrevistas activas, LinkedIn, Glassdoor).

Principio: compensa en el percentil 75-90 del mercado para top talent.
No necesitas pagar el máximo del mercado. Sí necesitas no ser claramente inferior.

Estructura de compensación para top performers:
→ Salario base: percentil 70-80 del mercado
→ Bonus por desempeño: ligado a resultados que el empleado controla
→ Equity (si aplica): longcliff vesting (4 años, cliff de 1 año)
→ Beneficios diferenciadores: flexibilidad, formación, seguro premium
```

**Driver 5 — Calidad del manager directo:**

```
"La gente no deja empresas, deja managers."
Esta frase es cierta para el 70% de las salidas de top talent.

Los managers que retienen top talent:
✅ Dan feedback frecuente y honesto (no solo en el ciclo anual)
✅ Protegen el tiempo y el foco de su equipo (no dejan que otros lo interrumpan)
✅ Hacen carrera por su equipo hacia arriba
✅ Tienen 1:1s reales donde escuchan más de lo que hablan
✅ Abogan por la compensación justa de su equipo sin que se lo pidan

Los managers que empujan al top talent a salir:
❌ Microgestión
❌ No compartir contexto estratégico
❌ Atribuirse el mérito del trabajo del equipo
❌ Feedback solo cuando algo va mal
❌ No defender al equipo en decisiones que les afectan
```

---

## El Plan de Desarrollo Individual para top performers

**Plantilla del Individual Development Plan (IDP):**

```
PLAN DE DESARROLLO INDIVIDUAL
Nombre: [...]          Manager: [...]
Fecha: [...]           Revisión: [en 6 meses]

FORTALEZAS QUE QUEREMOS AMPLIFICAR:
1. [Fortaleza 1] → Oportunidad: [cómo usarla más o ampliarla]
2. [Fortaleza 2] → Oportunidad: [...]

ÁREAS DE DESARROLLO ELEGIDAS POR EL EMPLEADO:
(siempre co-diseñado con el empleado, nunca impuesto)
1. [Habilidad o área] → Acciones: [formación / proyecto / mentoring]
2. [Habilidad o área] → Acciones: [...]

OBJETIVOS DE CARRERA A 2-3 AÑOS:
[En palabras del empleado: qué quiere hacer, en qué quiere convertirse]

PRÓXIMOS DESAFÍOS QUE LE OFRECE LA EMPRESA:
1. [Proyecto de mayor alcance] — Plazo: [...]
2. [Liderazgo de iniciativa] — Plazo: [...]
3. [Exposición a stakeholder o área nueva] — Plazo: [...]

CONVERSACIONES DE RETENCIÓN PROGRAMADAS:
[1:1 mensual de 30 min dedicado a desarrollo, no a operativa]
[Stay interview semestral]
```

### La stay interview: la herramienta más infrautilizada

```
La stay interview es una conversación semestral específica sobre
retención, diferente del 1:1 habitual.

Preguntas de la stay interview:
1. "¿Qué te hace venir a trabajar con ganas cada mañana?"
2. "¿Hay algo que haga que pienses en buscar algo diferente?"
3. "¿Qué cambiaría si te ofrecieran trabajo mañana en otra empresa?"
4. "¿Sientes que estás creciendo aquí? ¿En qué dirección?"
5. "¿Hay algo que podría hacer yo diferente como manager para apoyarte mejor?"

Reglas de la stay interview:
→ Es una conversación, no un cuestionario. Escucha más de lo que preguntas.
→ Lo que el empleado dice es confidencial (no va a RRHH sin su permiso)
→ Actúa sobre lo que escuchas en las 2 semanas siguientes
→ No hagas stay interviews si no vas a actuar sobre las respuestas
```

---

Entrega: diseña el programa de retención para los top performers de mi organización ([tamaño y sector]), con el proceso de identificación adaptado a mi cultura ([descripción de la cultura]), la estructura de los IDPs para los 3-5 perfiles de top talent más frecuentes en mi empresa y el plan de stay interviews para los próximos 6 meses.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Identificar y retener al talento de mayor impacto con programas individualizados',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Optimización del working capital: gestiona el ciclo de conversión de efectivo para liberar caja',
                'description'      => 'Reduce el ciclo de conversión de efectivo optimizando el cobro a clientes, el pago a proveedores y la gestión del inventario para liberar caja sin necesitar financiación externa, mejorando la liquidez del negocio de forma sostenible.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en finanzas operativas y gestión del capital circulante con experiencia en empresas industriales, distribución, retail y servicios, donde mejorar el ciclo de conversión de efectivo en 15-30 días puede liberar cientos de miles de euros de caja sin necesitar ninguna línea de crédito adicional ni vender ningún activo.

Contexto de mi empresa:
- Sector y tipo de negocio: [sector, B2B / B2C, producto / servicio]
- Facturación anual aproximada: [rango en euros]
- Principal problema de liquidez: [clientes que pagan tarde / inventario elevado / pago adelantado a proveedores / combinación]
- DSO actual (días de cobro): [si lo sabes, o "no lo medimos"]
- DPO actual (días de pago): [si lo sabes, o "no lo medimos"]
- DIO actual (días de inventario): [si aplica y lo sabes]

---

## El Ciclo de Conversión de Efectivo (CCE): el marco fundamental

```
CCE = DSO + DIO − DPO

Donde:
DSO (Days Sales Outstanding)  = Días de cobro a clientes
DIO (Days Inventory Outstanding) = Días de inventario (si aplica)
DPO (Days Payable Outstanding) = Días de pago a proveedores

El objetivo es minimizar el CCE:
→ CCE alto: tienes mucho dinero "atrapado" en el ciclo operativo
→ CCE bajo o negativo: el negocio se financia solo con el ciclo operativo
   (el mejor ejemplo: Amazon, con CCE negativo durante años)

Ejemplo de empresa con problemas de liquidez:
DSO = 65 días (clientes pagan tarde)
DIO = 45 días (inventario lento)
DPO = 30 días (pagas rápido a proveedores)
CCE = 65 + 45 − 30 = 80 días

Objetivo tras optimización:
DSO = 40 días (-25 días)
DIO = 30 días (-15 días)
DPO = 45 días (+15 días)
CCE = 40 + 30 − 45 = 25 días

Liberación de caja con facturación de 5M€/año:
Reducción de 55 días × (5.000.000 / 365) = 753.424€ liberados
```

---

## Optimización del DSO: cobra antes sin perder al cliente

### Las causas reales del DSO elevado

```
1. Plazos de pago demasiado largos en el contrato inicial
   → El cliente paga a 90 días porque tú se lo ofreciste a 90 días

2. Facturación tardía o con errores
   → Si facturas el día 15 en lugar del día 1, pierdes 15 días de cobro
   → Si la factura tiene errores, el cliente la disputa y el reloj se para

3. Sin proceso de seguimiento de facturas vencidas
   → Las facturas se vencen sin que nadie las reclame activamente

4. Sin incentivos para pago anticipado
   → No hay ninguna razón para que el cliente pague antes del vencimiento
```

### Herramientas para reducir el DSO

**1. Facturación inmediata y automatizada:**

```
Regla: factura el mismo día que entregas el servicio o el producto.
Cada día de retraso en la facturación es un día de retraso en el cobro.

Automatiza:
→ Facturación automática al cerrar el pedido o al marcar el proyecto como completado
→ Envío automático al email del responsable de pagos (no al contacto comercial)
→ Recordatorio automático 7 días antes del vencimiento y el día del vencimiento
```

**2. Proceso de seguimiento de facturas vencidas:**

```
Protocolo de cobro por aging de facturas:

Día 0 (fecha de vencimiento):
→ Email automático de recordatorio amable
"Recordatorio: la factura [número] por [importe] vence hoy. [Enlace de pago]"

Días 1-7 (1 semana de retraso):
→ Email personal del responsable de la cuenta
"Hola [Nombre], ¿hay algún problema con la factura [número]? ¿Puedo ayudarte
a gestionarla? [Datos de pago]"

Días 8-15 (2 semanas de retraso):
→ Llamada telefónica del área de cobros + email de escalado
"Llamo para gestionar la factura [número] que está vencida desde [fecha]."

Días 16-30 (más de 2 semanas):
→ Email del director financiero o del gerente
→ Bloqueo de nuevos pedidos o servicios hasta regularización

Más de 30 días:
→ Carta certificada + evaluación de proceso de reclamación
```

**3. Descuentos por pronto pago:**

```
Nomenclatura estándar: "2/10 net 30"
= 2% de descuento si paga en 10 días, plazo normal de 30 días

Coste del descuento vs. coste de financiación:
2% de descuento por anticipar 20 días de cobro
= Coste anualizado: 2% × (365/20) = 36,5% anualizado

Si el coste de tu línea de crédito es del 8-12%:
→ El descuento por pronto pago no compensa si tu coste de financiación es bajo
→ Pero si no tienes acceso a crédito o está caro, puede ser muy útil

Alternativa: descuento de 1% por pago en 15 días (red 45)
= Coste anualizado: 1% × (365/30) = 12,2% — más razonable
```

---

## Optimización del DIO: reduce el inventario sin roturas de stock

*(Aplica solo a negocios con inventario físico)*

### El triángulo de inventario

```
El objetivo es encontrar el equilibrio entre:
→ No tener roturas de stock (que generan ventas perdidas)
→ No tener exceso de inventario (que inmoviliza caja)

Fórmula del inventario óptimo:

EOQ (Economic Order Quantity) = √(2 × D × S / H)

Donde:
D = Demanda anual en unidades
S = Coste de hacer un pedido (fijo por pedido)
H = Coste de mantener una unidad en inventario por año

Ejemplo:
D = 10.000 unidades/año
S = 150€ por pedido (administración, transporte fijo)
H = 8€/unidad/año (almacenaje + coste de capital)

EOQ = √(2 × 10.000 × 150 / 8) = √375.000 = 612 unidades por pedido
```

### Análisis ABC de inventario

```
Clasifica tu inventario en 3 grupos:

A — 20% de los SKUs que representan el 80% del valor
→ Control exhaustivo, stock de seguridad preciso, revisión semanal
→ Proveedores alternativos identificados

B — 30% de los SKUs que representan el 15% del valor
→ Control moderado, revisión mensual

C — 50% de los SKUs que representan el 5% del valor
→ Control mínimo, reducir o eliminar si es posible
→ Evaluar si merece la pena mantener el inventario
   vs. comprar bajo pedido (aumenta el plazo pero elimina el inmovilizado)
```

---

## Optimización del DPO: paga más tarde sin dañar la relación con proveedores

```
Aumentar el DPO no es retrasar pagos sin avisar.
Es negociar mejores condiciones de pago como parte de la relación comercial.

Técnicas para aumentar el DPO de forma sostenible:

1. RENEGOCIACIÓN DIRECTA
   "Estamos revisando nuestras condiciones de pago. Para los proveedores
   estratégicos con los que queremos consolidar el volumen, estamos
   ofreciendo plazos de 60 días en lugar de 30 a cambio de mejores
   precios o condiciones de servicio. ¿Podemos explorar esto?"

2. REVERSE FACTORING (confirming)
   → Tu banco paga al proveedor al vencimiento de la factura
   → El proveedor puede cobrar antes (con un pequeño descuento) si lo necesita
   → Tú sigues pagando al banco en el plazo pactado (más largo)
   → Ganas: más plazo de pago sin dañar la relación con el proveedor
   → El proveedor gana: puede cobrar antes cuando lo necesita

3. CONSOLIDACIÓN DE PAGOS
   Si pagas facturas de pequeño importe constantemente, cambia a
   pagos semanales o quincenales → aumenta la media de días de pago
   sin negociar formalmente ningún cambio de condiciones
```

---

## El dashboard de working capital

```
KPIs que debes revisar mensualmente:

COBROS:
DSO actual:                [días]
DSO objetivo:              [días]
Facturas vencidas <30 días: [€] y [% del total pendiente]
Facturas vencidas 30-60 días: [€] y [%]
Facturas vencidas >60 días: [€] y [%]

INVENTARIO (si aplica):
DIO actual:                [días]
Valor del inventario:      [€]
Rotación de inventario:    [veces/año]
SKUs sin movimiento >90 días: [número y valor]

PAGOS:
DPO actual:                [días]
DPO objetivo:              [días]
% de facturas pagadas antes de vencimiento: [%]

RESUMEN:
CCE actual:                [días]
CCE objetivo:              [días]
Caja liberada si alcanzamos el objetivo: [€]
```

---

Entrega: calcula el CCE actual de mi empresa con los datos que te proporciono ([DSO actual, DIO si aplica, DPO actual, facturación anual]), identifica las 3 palancas de mayor impacto para reducirlo en mi sector ([sector]) y dame el plan de acción para los próximos 90 días con los cambios de proceso concretos que debo implementar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Liberar caja optimizando el ciclo de conversión de efectivo sin nueva financiación',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Programa de compliance y cumplimiento normativo para empresas medianas sin gran equipo legal',
                'description'      => 'Implementa un sistema de compliance proporcional al tamaño y riesgo de tu empresa: identifica las normativas aplicables, diseña los controles mínimos necesarios, y crea la cultura de cumplimiento sin el coste de un departamento legal propio.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado y consultor de compliance con experiencia implementando programas de cumplimiento normativo en empresas medianas de 50-500 empleados en sectores regulados como fintech, salud, alimentación, construcción y tecnología, donde un programa de compliance bien diseñado no es solo protección legal sino un activo competitivo que abre puertas a contratos públicos, grandes clientes y rondas de inversión.

Contexto de mi empresa:
- Sector y actividad: [sector principal, productos o servicios que ofrece]
- Tamaño: [número de empleados, facturación aproximada]
- Situación legal actual: [sin compliance / compliance básico / auditado pero desactualizado]
- Principal motivación para implementar compliance: [exigencia de un cliente / auditoría / inversión / normativa nueva / proactividad]
- Recursos disponibles: [solo RRHH + asesoría externa / persona dedicada parcialmente / otra]

---

## Paso 1: Mapa de riesgos normativos

### Las normativas que aplican a casi todas las empresas en España

```
BLOQUE 1 — Universal (toda empresa con empleados en España):
□ Estatuto de los Trabajadores y convenio colectivo aplicable
□ Ley de Igualdad (planes de igualdad obligatorio >50 empleados)
□ Ley de Prevención de Riesgos Laborales (LPRL)
□ Reglamento General de Protección de Datos (RGPD)
□ Ley Orgánica 3/2018 (LOPDGDD) — implementación española del RGPD
□ Ley de Prevención del Blanqueo de Capitales (si aplica al sector)

BLOQUE 2 — Por tamaño:
>50 empleados:
□ Plan de Igualdad obligatorio con registro en REGCON
□ Canal de denuncias (whistleblowing) — Ley 2/2023 →
   OBLIGATORIO desde junio 2023 para empresas con ≥50 trabajadores
□ Protocolo de acoso sexual y acoso por razón de sexo

>250 empleados:
□ Registro salarial y auditoría retributiva
□ Plan de igualdad con auditoría cada 4 años

BLOQUE 3 — Por sector (ejemplos):
Alimentación: APPCC, trazabilidad, etiquetado (Reglamento UE 1169/2011)
Salud/Farmacia: autorización sanitaria, farmacovigilancia, AEMPS
Fintech/Finanzas: CNMV, Banco de España, MiCA (criptoactivos)
Construcción: seguridad en obra, CTE, licencias urbanísticas
Tecnología/SaaS: RGPD, DSA/DMA (si >45M usuarios), ciberseguridad (NIS2)
Comercio exterior: normativa aduanera, controles de exportación
```

---

## Paso 2: Los 6 pilares de un programa de compliance

### Pilar 1 — Gobierno y responsabilidad

```
Decisiones de estructura de gobierno:

¿Quién es el Compliance Officer?
→ Empresa <100 empleados: Director Financiero o RRHH con formación específica
→ Empresa 100-500 empleados: persona dedicada parcialmente (30-50% del tiempo)
  o asesoría externa de compliance
→ Empresa >500 empleados: Compliance Officer a tiempo completo

El Compliance Officer debe:
→ Tener acceso directo al Consejo de Administración o CEO
→ No depender jerárquicamente del área más expuesta al riesgo (no bajo el CFO
  si el principal riesgo es financiero)
→ Tener capacidad de decir "no" sin miedo a represalias

Documento base: Código de Conducta
Máximo 10-15 páginas, lenguaje claro, firmado por todos los empleados.
Mínimo que debe incluir:
□ Conflictos de interés y cómo declararlos
□ Regalos y atenciones (límite de valor, registro)
□ Confidencialidad de información sensible
□ Uso de los recursos de la empresa
□ Uso de sistemas informáticos y datos de clientes
□ Cómo reportar una irregularidad
```

### Pilar 2 — Identificación y evaluación de riesgos

```
Matriz de riesgos de compliance (actualizar anualmente):

Para cada área de riesgo, evalúa:
Probabilidad (1-5) × Impacto (1-5) = Riesgo inherente

Áreas a evaluar:
→ Datos personales y privacidad (RGPD)
→ Relaciones laborales y discriminación
→ Seguridad y salud laboral
→ Anticorrupción y soborno (Ley 10/2010)
→ Blanqueo de capitales (si aplica)
→ Competencia y precios (cartelización)
→ Responsabilidad medioambiental
→ Seguridad de la información / ciberseguridad

Tabla de la matriz:
| Área de riesgo | Probabilidad | Impacto | Riesgo (P×I) | Control existente | Riesgo residual |
|---|---|---|---|---|---|
| RGPD — Brecha de datos | 3 | 5 | 15 (alto) | Política + formación | 8 (medio) |
| Acoso laboral | 2 | 4 | 8 (medio) | Protocolo + canal | 4 (bajo) |
```

### Pilar 3 — Políticas y procedimientos

```
El mínimo viable de políticas escritas:

IMPRESCINDIBLES:
□ Política de Protección de Datos (RGPD)
□ Política de Seguridad de la Información
□ Código de Conducta
□ Protocolo de Acoso (sexual y laboral)
□ Política de Conflictos de Interés y Regalos
□ Procedimiento del Canal de Denuncias

SEGÚN SECTOR/TAMAÑO:
□ Política de Anticorrupción y Compliance Penal
□ Política Medioambiental
□ Procedimiento de Due Diligence de Proveedores
□ Política de Exportación y Control de Comercio

Regla de mantenimiento: cada política tiene un dueño y una fecha
de revisión anual. Si nadie es responsable de actualizarla, se queda obsoleta.
```

### Pilar 4 — Canal de denuncias (whistleblowing)

```
Obligatorio desde junio 2023 para empresas con ≥50 trabajadores
(Ley 2/2023 de 20 de febrero).

Requisitos legales del canal:
□ Confidencialidad garantizada del denunciante
□ Posibilidad de denuncia anónima
□ Acuse de recibo en 7 días hábiles
□ Respuesta/resolución en máximo 3 meses
□ Prohibición de represalias contra el denunciante
□ Canal accesible también para terceros (clientes, proveedores)

Opciones de implementación:
→ Plataforma digital especializada: EQS, Navex, Convercent (desde 50€/mes)
→ Dirección de email dedicada (con garantías de anonimato si se usa Tor o similar)
→ Formulario web con proveedor externo que garantice la confidencialidad
→ Buzón físico (solo como complemento, no como único canal en 2025)

Qué NO hacer:
❌ Canal de denuncias que va al manager directo (sesgo, represalia fácil)
❌ Canal de denuncias gestionado por RRHH si RRHH es parte del riesgo
❌ Email corporativo sin garantías de anonimato
```

### Pilar 5 — Formación y cultura

```
Plan de formación anual de compliance:

TODOS LOS EMPLEADOS (mínimo 1 vez/año, 30-60 min):
→ Código de conducta y valores
→ Protección de datos y privacidad (básico)
→ Canal de denuncias: cómo usarlo y qué protección tiene el denunciante

MANDOS INTERMEDIOS Y MANAGERS (mínimo 1 vez/año, 90 min):
→ Todo lo anterior +
→ Prevención del acoso y discriminación
→ Gestión de conflictos de interés en su equipo

PERFILES DE ALTO RIESGO (función financiera, compras, ventas internacionales):
→ Todo lo anterior +
→ Anticorrupción y soborno
→ Blanqueo de capitales (si aplica)
→ Normas específicas del sector

Evidencia de formación: guarda registro de asistencia con firma
o certificado de completación en plataforma de e-learning.
Los registros son la prueba de diligencia debida en caso de inspección.
```

### Pilar 6 — Monitorización y mejora continua

```
Calendario de compliance anual:

Enero:
□ Revisión del mapa de riesgos del año anterior
□ Actualización de políticas que hayan quedado obsoletas

Marzo:
□ Informe de compliance al Consejo/CEO
□ Revisión de incidencias del canal de denuncias

Junio:
□ Auditoría interna o externa de un área de riesgo alto
□ Formación semestral de mandos intermedios

Septiembre:
□ Revisión de proveedores críticos (due diligence)
□ Actualización de la formación anual

Diciembre:
□ Informe anual de compliance
□ Planificación del programa del año siguiente
□ Revisión de la matriz de riesgos
```

---

## Compliance penal: la responsabilidad penal de las personas jurídicas

```
Desde 2010, las empresas pueden ser condenadas penalmente en España
(Ley Orgánica 5/2010, reforma del Código Penal).

Los delitos más frecuentes en empresas:
→ Corrupción y cohecho (soborno a funcionarios o entre privados)
→ Delitos contra la Hacienda Pública (fraude fiscal)
→ Blanqueo de capitales
→ Delitos contra los trabajadores
→ Delitos medioambientales
→ Delitos contra la propiedad intelectual e industrial

La exención o atenuante de responsabilidad penal requiere:
□ Que el delito fuera cometido por una persona con iniciativa propia
□ Que la empresa tenga un modelo de organización y gestión de compliance
□ Con órgano de supervisión (Compliance Officer o equivalente)
□ Con poderes autónomos de iniciativa y control
□ Con formación y canal de denuncias efectivos
□ Con monitorización y actualización periódica

En la práctica: un programa de compliance bien documentado es
la principal defensa de la empresa ante una investigación penal.
```

---

Entrega: diseña el programa de compliance mínimo viable para mi empresa ([sector], [tamaño]), con la lista priorizada de políticas a implementar en los próximos 6 meses, el plan de formación del primer año y la estructura del canal de denuncias adaptada a mi caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar un programa de compliance proporcional y efectivo para empresas medianas',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Estructura de soporte técnico por niveles: diseña el modelo tier 1/2/3 que resuelve más rápido y escala',
                'description'      => 'Diseña el modelo de soporte por niveles que distribuye los tickets correctamente, evita que los ingenieros seniors pierdan tiempo en problemas básicos y escala el equipo de soporte sin degradar la calidad ni disparar los costes.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en operaciones de customer support y diseño de organizaciones de soporte técnico con experiencia escalando equipos de soporte de 3 a 30+ personas en empresas SaaS B2B, donde el modelo de soporte por niveles bien diseñado puede triplicar la capacidad de resolución sin triplicar el headcount, mientras mejora la satisfacción del cliente y reduce el burnout del equipo técnico.

Contexto de mi equipo:
- Tamaño actual del equipo de soporte: [número de personas]
- Volumen mensual de tickets: [número aproximado]
- Tipos de tickets más frecuentes: [descripción: bugs / configuración / cómo hacer X / integraciones / billing / otro]
- Tiempo medio de resolución actual: [horas o días]
- Principal dolor actual: [el equipo técnico hace soporte de nivel básico / los tickets básicos tardan demasiado / escalada sin criterio / no hay proceso claro]
- Herramienta de ticketing: [Intercom / Zendesk / Freshdesk / Linear / Jira / otra]

---

## El modelo de 3 niveles: qué resuelve cada uno

### Visión general del modelo tier 1/2/3

```
TIER 0 — Autoservicio (antes de contactar con el soporte)
Quién: el propio cliente, sin intervención del equipo
Qué resuelve:
  → Preguntas frecuentes documentadas en la base de conocimiento
  → Tutoriales en vídeo de las acciones más comunes
  → Chatbot con respuestas automáticas para los 20 temas más frecuentes
  → Status page del sistema (para incidencias de disponibilidad)
Objetivo: deflectar el 30-50% de los contactos antes de que lleguen al equipo
KPI: Deflection rate (% de usuarios que resuelven sin abrir ticket)

TIER 1 — Soporte generalista (primera línea)
Quién: agentes de soporte con formación en el producto, sin perfil técnico profundo
Qué resuelve:
  → Problemas de configuración básica
  → Errores de uso documentados
  → Preguntas de "cómo hacer X" que no están en la KB
  → Gestión de billing, planes, cancelaciones
  → Problemas de acceso y credenciales
Objetivo: resolver el 60-70% de todos los tickets en Tier 1
SLA: primera respuesta en <4h (días laborables) / resolución en <24h
KPI: First Contact Resolution (FCR) rate — objetivo >65%

TIER 2 — Soporte técnico especializado
Quién: agentes con conocimiento técnico del producto (pueden leer código, logs, consultar BD)
Qué resuelve:
  → Bugs reproducibles en configuraciones específicas
  → Problemas de integración con APIs o webhooks
  → Casos edge no documentados
  → Problemas de rendimiento o datos incorrectos
  → Escaladas de Tier 1 que requieren acceso técnico
Objetivo: resolver el 25-35% de los tickets (los que escala Tier 1)
SLA: primera respuesta en <2h (días laborables) / resolución en <72h
KPI: Escalation rate desde T2 a T3 — objetivo <20% de los tickets de T2

TIER 3 — Engineering / Product
Quién: ingenieros del equipo de producto
Qué resuelve:
  → Bugs confirmados que requieren cambio de código
  → Problemas de infraestructura o base de datos
  → Casos que afectan a múltiples clientes (incidencias)
  → Decisiones de producto que surgen de patrones en el soporte
Objetivo: recibir máximo el 5-10% de todos los tickets
KPI: Time to Resolution — objetivo <5 días para bugs no críticos
```

---

## Diseño del proceso de escalada

### Las reglas de escalada de Tier 1 a Tier 2

```
Escalar a Tier 2 CUANDO:
✅ El agente de T1 ha intentado la solución documentada y no funciona
✅ El problema requiere acceso a logs, base de datos o backend
✅ El cliente reporta un comportamiento que ningún otro cliente ha reportado
✅ El problema lleva >1 día sin resolución y el cliente está escalando
✅ El bug afecta a funcionalidades críticas del flujo del cliente

NO escalar a Tier 2 cuando:
❌ El agente de T1 no ha revisado la base de conocimiento
❌ El cliente está frustrado pero el problema es básico de configuración
❌ La solución está documentada pero el agente no la encontró
❌ El agente no ha intentado reproducir el problema

Qué debe incluir un ticket escalado a Tier 2:
□ Descripción del problema exacta (en palabras del cliente)
□ Pasos para reproducir el problema (intentados por T1)
□ Resultado obtenido vs. resultado esperado
□ URL, cuenta o ID de cliente donde ocurre
□ Screenshots o vídeo del problema (si aplica)
□ Qué soluciones ya se intentaron en T1
□ Nivel de urgencia para el cliente (impacto en su negocio)
```

### Las reglas de escalada de Tier 2 a Tier 3

```
Escalar a Tier 3 CUANDO:
✅ Se ha confirmado que es un bug (reproducible en el entorno de T2)
✅ El problema requiere cambio en el código o en la base de datos
✅ Es un problema de infraestructura (servidores, bases de datos, DNS)
✅ Afecta a más de 1 cliente (patrón identificado)
✅ Es un problema de seguridad (prioridad máxima, escalada inmediata)

Ticket a T3 debe incluir:
□ Bug report completo con pasos para reproducir
□ Stack trace o logs relevantes
□ Número de clientes afectados
□ Impacto en el negocio (cuantificado si es posible)
□ Workaround temporal ofrecido al cliente (si existe)
□ Prioridad sugerida: P1 (crítico) / P2 (alto) / P3 (normal) / P4 (bajo)
```

---

## SLAs por nivel y por prioridad

```
MATRIZ DE SLA:

                    P1 (Crítico)    P2 (Alto)    P3 (Normal)   P4 (Bajo)
                    [Sistema caído] [Función      [Molestia     [Cosmético
                                    bloqueante]   importante]   o minor]

Primera respuesta:  15 min          1h            4h            24h
Actualización:      30 min          2h            8h            72h
Resolución T1:      1h              4h            24h           5 días
Resolución T2:      2h              8h            72h           10 días
Resolución T3:      4h              48h           5 días        backlog

DEFINICIÓN DE PRIORIDADES:

P1 — Crítico: el cliente no puede operar su negocio principal.
  Ejemplos: login caído, datos perdidos, facturación rota, integración crítica caída

P2 — Alto: funcionalidad importante bloqueada, workaround existe pero es difícil.
  Ejemplos: feature clave no funciona, exports rotos, rendimiento muy degradado

P3 — Normal: funcionalidad afectada con workaround disponible.
  Ejemplos: bug menor, configuración que no guarda, UI inconsistente

P4 — Bajo: mejoras o bugs que no afectan al uso normal.
  Ejemplos: error tipográfico, sugerencia de mejora, comportamiento confuso pero funcional
```

---

## Estructuras de equipo según el volumen

```
EQUIPO PEQUEÑO (<200 tickets/mes):
→ 2-3 personas de T1 generalista
→ 1 persona técnica de T2 (puede hacer también trabajo de producto/engineering)
→ T3 es el equipo de engineering, con 2h/semana máx. dedicadas a soporte
→ Herramienta: Intercom o Freshdesk con automatizaciones básicas

EQUIPO MEDIO (200-1.000 tickets/mes):
→ 4-6 agentes T1 especializados por área (producto + billing)
→ 2-3 personas de T2 técnico
→ 1 Support Engineer que hace puente con engineering
→ Rotas de guardia para P1 fuera de horario
→ Canal de escalada directo con Slack o PagerDuty para P1

EQUIPO GRANDE (>1.000 tickets/mes):
→ Jefe de Soporte + Team Leads por nivel
→ T1: 8-15 agentes + especialización por segmento (SMB / Enterprise)
→ T2: 4-6 agentes técnicos
→ T3: Support Engineers dedicados (no engineering de producto)
→ Ops: analista de calidad + analista de datos de soporte
```

---

## KPIs del equipo de soporte por niveles

```
INDICADORES DE VOLUMEN Y EFICIENCIA:
Ticket Volume            → Total de tickets por semana/mes
First Response Time      → Tiempo hasta primera respuesta (media y mediana)
Time to Resolution       → Tiempo hasta cierre (media y mediana)
First Contact Resolution → % tickets resueltos en el primer contacto
Escalation Rate T1→T2    → % de tickets que T1 escala (objetivo: <35%)
Escalation Rate T2→T3    → % de tickets que T2 escala (objetivo: <20%)
Reopen Rate              → % de tickets cerrados que el cliente reabre

INDICADORES DE CALIDAD:
CSAT (Customer Satisfaction) → Encuesta post-cierre, escala 1-5 o emoji
  Objetivo: >4.2/5.0 o >85% positivo
QA Score → Revisión interna de tickets por el lead del equipo
  Objetivo: >90% de los tickets pasan el QA
Backlog Age → Antigüedad media de los tickets sin resolver

INDICADORES DE NEGOCIO:
Churn relacionado con soporte → % de churns donde hay >3 tickets sin resolver
Cost per Ticket → Coste del equipo / número de tickets
Defletion Rate (T0) → % de contactos resueltos sin abrir ticket
```

---

Entrega: diseña la estructura de soporte por niveles para mi equipo ([tamaño], [volumen de tickets]), con las reglas de escalada adaptadas a los tipos de ticket más frecuentes en mi producto ([descripción del producto y tipos de tickets]), los SLAs recomendados para mi contexto y el plan de transición si actualmente no tenemos niveles definidos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el modelo de soporte por niveles que escala sin degradar calidad',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Modelo de retainer con clientes: cambia proyectos puntuales por contratos mensuales estables',
                'description'      => 'Transforma tu modelo de negocio freelance de proyectos puntuales a retainers mensuales que generan ingresos predecibles: cómo proponer el retainer, qué incluir, cómo fijar el precio y cómo gestionar los límites sin comprometer la relación con el cliente.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño de modelos de negocio para freelances y consultores independientes con experiencia transformando modelos de trabajo por proyecto a modelos de retainer mensual, donde la diferencia entre un freelance que factura irregular y uno que tiene ingresos predecibles está frecuentemente en si tiene o no retainers activos con 2-3 clientes clave.

Contexto de mi situación:
- Especialidad: [diseño web / desarrollo / marketing / copywriting / consultoría / otro]
- Ticket medio actual por proyecto: [rango en euros]
- Duración media de cada proyecto: [semanas o meses]
- Número de clientes activos con potencial de retainer: [número aproximado]
- Principal obstáculo para ofrecer retainers: [no sé cómo proponerlo / miedo al rechazo / no sé qué incluir / el cliente no ve el valor / otro]

---

## Por qué el modelo de retainer es superior al modelo por proyecto

### La matemática del freelance por proyectos vs. retainer

```
MODELO POR PROYECTOS (la montaña rusa):
Mes 1: 3.000€ (entregando el proyecto A)
Mes 2: 4.500€ (cerrando proyecto B y entregando A)
Mes 3: 800€ (en pipeline, sin proyectos activos)
Mes 4: 5.000€ (dos proyectos a la vez)
Mes 5: 1.200€ (vacío de proyectos)
Media: 2.900€/mes — pero la varianza hace que sea imposible planificar

MODELO CON 2 RETAINERS + PROYECTOS:
Retainer cliente A: 1.500€/mes (fijo, 15h de trabajo garantizado)
Retainer cliente B: 1.800€/mes (fijo, 20h de trabajo garantizado)
Proyectos puntuales variables: 500-2.000€/mes adicionales
Total mínimo garantizado: 3.300€/mes
Total con proyectos: 3.800-5.300€/mes — con base estable

El retainer no solo aporta más dinero.
Aporta predecibilidad: puedes contratar, invertir, planificar.
```

### Por qué el cliente también gana con el retainer

```
Desde la perspectiva del cliente, el retainer tiene valor porque:

1. PRIORIDAD GARANTIZADA
   "Sabes que cuando me necesites, tengo tiempo reservado para ti.
   Con los proyectos puntuales, si llamas en mi semana cargada,
   puedo tardar 2-3 semanas en empezar."

2. PRECIO PREDECIBLE
   "Puedes presupuestar exactamente cuánto vas a gastar en
   [diseño/desarrollo/marketing] cada mes. Sin sorpresas."

3. CONTINUIDAD Y CONTEXTO
   "Después de X meses trabajando juntos, conozco tu negocio,
   tu marca, tu equipo. No tienes que explicarme de cero cada vez."

4. ACCESO RÁPIDO Y DIRECTO
   "Puedo consultar contigo en una llamada rápida sin tener que
   contratar un proyecto formal. Las decisiones se toman más rápido."

5. PRECIO MEJOR QUE POR PROYECTO
   "El retainer te sale más barato por hora que contratar proyectos
   puntuales porque yo también gano la predecibilidad."
```

---

## Tipos de retainer: elige el modelo correcto para tu especialidad

### Modelo 1 — Retainer de horas reservadas

```
Cómo funciona:
→ El cliente paga X€/mes por Y horas de tu tiempo
→ Las horas no usadas no se acumulan (use-it-or-lose-it)
→ Las horas extra se facturan aparte al precio acordado

Ideal para: servicios donde el cliente necesita flexibilidad
(consultoría, asesoría legal, diseño UX, desarrollo web)

Precio:
→ Precio por hora en proyecto puntual: 80€/hora
→ Precio retainer (con descuento por volumen y predecibilidad): 65-70€/hora
→ Mínimo de horas para que sea atractivo para ti: 10h/mes

Contrato:
"Este retainer incluye hasta 15 horas de [descripción del servicio]
al mes, a un precio de 975€/mes (65€/hora). Las horas se renuevan
mensualmente y no son acumulables. Las horas adicionales se facturan
a 80€/hora con aprobación previa."
```

### Modelo 2 — Retainer por entregables definidos

```
Cómo funciona:
→ El cliente paga X€/mes por un conjunto fijo de entregables
→ El precio no está ligado a las horas, sino al resultado
→ Más horas para entregar lo mismo = menos rentable para ti, no para el cliente

Ideal para: servicios con entregables claros y repetitivos
(gestión de redes sociales, newsletters, reportes mensuales, SEO)

Ejemplo — Retainer de marketing de contenidos:
"1.500€/mes incluye:
→ 8 posts para LinkedIn (copy + diseño de imagen básico)
→ 1 newsletter mensual (copy + maquetación)
→ Informe mensual de resultados
→ 1 sesión de estrategia de 60 min al mes"

Ventaja del modelo por entregables:
→ El cliente sabe exactamente qué recibe → fácil de vender
→ Tú controlas cuánto tiempo inviertes → optimizas la rentabilidad
→ No hay debate sobre "cuántas horas consumiste este mes"
```

### Modelo 3 — Retainer de acceso / consultoría estratégica

```
Cómo funciona:
→ El cliente paga por tener acceso a ti, no por horas ni entregables
→ Incluye llamadas, emails, revisiones puntuales y "estar disponible"
→ Sin límite formal de horas, pero con límites implícitos claros

Ideal para: posiciones de asesoría senior, fractional CMO/CTO/CFO

Ejemplo:
"3.000€/mes como Consultor Estratégico de Marketing.
Incluye: disponibilidad para llamadas (máx. 4h/semana comprometidas),
revisión de materiales y estrategias, presencia en reuniones clave
de equipo (hasta 2/mes), y acceso por WhatsApp/email en días hábiles
con respuesta en <4h."

Importante: define el "techo" de forma clara aunque no lo llames horas.
El cliente no puede esperar que estés disponible 40h/semana por 3.000€.
```

---

## Cómo proponer el retainer: el guión de la conversación

### Cuándo y con quién proponer el retainer

```
El mejor momento para proponer un retainer:
→ Cuando acabas de entregar un proyecto con muy buen resultado
→ Cuando el cliente te dice "esto ha quedado muy bien" o "seguiría contigo"
→ Cuando el cliente te contacta por segunda vez para un nuevo proyecto
→ Cuando ves que el cliente tiene necesidades recurrentes que coinciden
   exactamente con lo que haces

Señales de que el cliente es candidato a retainer:
✅ Ya tiene historial contigo (al menos 1 proyecto completado)
✅ Sus necesidades son recurrentes (no un proyecto único y cerrado)
✅ Tiene presupuesto estable de marketing/tecnología/diseño
✅ Ha mostrado satisfacción con tu trabajo
✅ La relación personal es positiva
```

**Guión de la propuesta:**

```
Contexto: acabáis de cerrar con éxito un proyecto.

"[Nombre], muy contento con cómo ha quedado esto. Me gustaría
proponerte algo que creo que puede ser interesante para ti.

Veo que tienes necesidades en [área] de forma bastante continua
— [referencia a algo concreto que el cliente mencionó]. En lugar
de que cada vez que necesites algo tengamos que arrancar un nuevo
proyecto desde cero, podríamos formalizar una colaboración mensual.

Lo que yo gano: la predecibilidad me permite planificar y darte
siempre prioridad cuando me necesitas. Lo que tú ganas: acceso
garantizado a mi tiempo, mejor precio que por proyecto puntual,
y no tienes que explicarme de cero cada vez.

He preparado una propuesta de 3 opciones que se ajustan a diferentes
niveles de colaboración. ¿Te parezco que la revisemos juntos?"
```

---

## El contrato de retainer: lo que no puede faltar

```
CLÁUSULAS ESENCIALES:

1. ALCANCE DEL SERVICIO
   Qué incluye exactamente (horas / entregables / acceso)
   Qué NO incluye (para evitar creep de alcance)

2. PRECIO Y FACTURACIÓN
   Importe mensual y fecha de facturación (ej: día 1 de cada mes)
   Forma de pago y plazo (ej: transferencia a 7 días de la factura)
   Revisión de precio: cada cuánto y con cuánto preaviso

3. DURACIÓN Y CANCELACIÓN
   Compromiso mínimo: 3 meses (recomendado para que valga la pena para los dos)
   Preaviso para cancelar: 30 días (no cancelación inmediata)
   Sin penalización tras el período mínimo

4. GESTIÓN DEL ALCANCE (SCOPE CREEP)
   "Las solicitudes fuera del alcance definido se presupuestarán
   por separado con un mínimo de 48h de plazo antes de empezar."

5. PROPIEDAD INTELECTUAL
   La propiedad de los entregables pasa al cliente al recibir el pago.

6. CONFIDENCIALIDAD
   Ambas partes mantienen confidencialidad sobre la información compartida.

PLANTILLA DE PRESENTACIÓN DE OPCIONES:

OPCIÓN ESENCIAL — 800€/mes
[10h de trabajo / 4 entregables pequeños]
Ideal para: mantenimiento básico y consultas puntuales

OPCIÓN RECOMENDADA ★ — 1.500€/mes
[20h de trabajo / 8 entregables + informe mensual]
Ideal para: colaboración continua con resultados medibles
AHORRO vs. tarifa por proyecto: 400€/mes

OPCIÓN INTEGRAL — 2.500€/mes
[35h de trabajo / entregables + estrategia + disponibilidad ampliada]
Ideal para: externalización completa del área de [especialidad]
```

---

Entrega: diseña el retainer específico para mi especialidad ([especialidad]) y mi cliente tipo ([perfil del cliente ideal]), con las 3 opciones de precio, el guión exacto para proponer el retainer en mi próxima conversación con [cliente con más potencial] y el contrato resumido en una página.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Transformar proyectos puntuales en contratos mensuales de retainer con ingresos predecibles',
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
