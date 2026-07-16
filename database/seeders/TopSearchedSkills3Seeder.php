<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills3Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            // 1 - Marketing (1) - Newsletter con IA muy buscado
            [
                'profession_id'     => 1,
                'title'             => 'Newsletter semanal que la gente espera recibir: estructura, copy y growth',
                'description'       => 'Diseña la estructura perfecta de tu newsletter B2B o de nicho, escribe cada sección con fórmulas de copy probadas y configura el sistema de crecimiento orgánico para llegar a 10.000 suscriptores.',
                'prompt_content'    => <<<'PROMPT'
Eres un newsletter strategist con experiencia construyendo listas de correo de 5-100k suscriptores en nichos B2B y de creadores.

Mi newsletter:
- Nombre o idea de nombre: [nombre]
- Temática principal: [qué cubre]
- Audiencia objetivo: [perfil del suscriptor ideal]
- Frecuencia: [diaria / semanal / bisemanal / mensual]
- Objetivo principal: [monetización / leads / comunidad / branding personal]
- Herramienta de envío: [Substack / Beehiiv / ConvertKit / Mailchimp / otra]
- Newsletters que admiras como referencia: [1-3 ejemplos]

MODO 1 — DISEÑA MI NEWSLETTER:

## Blueprint de Newsletter — [Nombre]

### 🎯 Propuesta de valor única (tagline)
En menos de 10 palabras por qué alguien debería suscribirse a esta y no a otra.

### 🏗️ Estructura de cada número (template replicable)
```
ASUNTO: [fórmula + ejemplo concreto]
PREVIEW TEXT: [fórmula + ejemplo]

[Sección 1: Apertura — 50-80 palabras]
[Sección 2: Cuerpo principal — 300-500 palabras]
[Sección 3: Lista rápida o datos — 5 bullets]
[Sección 4: Recomendación de la semana — 1 herramienta/libro/recurso]
[Sección 5: CTA / oferta / comunidad]
```

### 📧 10 fórmulas de asunto que generan >40% de apertura
Adaptadas a tu temática con ejemplos concretos.

### 📈 Sistema de crecimiento orgánico (0 presupuesto)
- Canal 1: [táctica específica con frecuencia]
- Canal 2: [táctica específica]
- Canal 3: [táctica específica]
- Referral loop: cómo hacer que tus suscriptores traigan a otros

---
MODO 2 — ESCRIBE EL NÚMERO DE HOY:
[Dime el tema concreto de este número y genero el email completo listo para enviar]

Tema de este número: [tema]
Fuente o idea base: [artículo, dato, anécdota, o idea propia]

Genera el email completo con:
- Asunto (3 opciones A/B/C)
- Preview text
- Cuerpo completo con todas las secciones
- CTA final
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Email marketing, creación de audiencia, monetización de contenido',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],

            // 2 - Desarrollo (2) - PR description y code review muy buscado
            [
                'profession_id'     => 2,
                'title'             => 'Genera la descripción perfecta de un Pull Request que acelera el merge',
                'description'       => 'Convierte tus cambios de código en una PR description clara, completa y fácil de revisar. Con contexto de negocio, cambios técnicos, instrucciones de testing y checklist para el reviewer.',
                'prompt_content'    => <<<'PROMPT'
Eres un senior engineer con experiencia haciendo code reviews en equipos de alto rendimiento. Sabes que una buena PR description puede reducir el tiempo de review a la mitad.

Información sobre mis cambios:
- Título de la PR: [título breve]
- Tipo de cambio: [feature / bugfix / refactor / hotfix / chore / docs]
- Cambios principales realizados: [describe los archivos/funciones modificados y qué hace cada cambio]
- Problema que resuelve o issue relacionado: [descripción del bug o feature request]
- Decisiones técnicas que tomé: [trade-offs, alternativas consideradas]
- Riesgos o side effects posibles: [qué puede romperse o comportarse distinto]

Genera la PR description completa:

---
## [Tipo] — [Título descriptivo en imperativo]

### 📋 Resumen
Una o dos frases explicando QUÉ cambia y POR QUÉ. Escrito para alguien que no conoce el contexto.

### 🎯 Problema / Motivación
Descripción del problema que resuelve esta PR o el valor de negocio que aporta.
Enlace al issue/ticket: #XXX

### 🔧 Cambios técnicos
Lista de los cambios principales organizados por tipo:

**Nuevas funcionalidades:**
- `archivo.ts`: descripción de qué hace el nuevo código
- ...

**Cambios en lógica existente:**
- `otro-archivo.py`: qué cambió y por qué

**Archivos de configuración / infraestructura:**
- `docker-compose.yml`: ...

### 💡 Decisiones de diseño
Explica las decisiones no obvias. Por qué elegiste este approach sobre alternativas.

### 🧪 Cómo probar estos cambios
```bash
# Pasos exactos para reproducir el bug (si es fix) o probar la feature
1. git checkout [rama]
2. [comandos de setup]
3. [pasos de verificación]
```

**Casos a validar:**
- [ ] Caso happy path: [descripción]
- [ ] Caso edge: [descripción]
- [ ] Caso de error: [descripción]

### ⚠️ Consideraciones para el reviewer
Lo que el reviewer debe prestar especial atención y por qué.

### 📸 Screenshots / Vídeos (si aplica)
[Espacio para capturas antes/después si hay cambios visuales]

### ✅ Self-review checklist
- [ ] He probado los cambios localmente
- [ ] He añadido/actualizado tests
- [ ] No hay console.logs ni código de debug
- [ ] La documentación está actualizada
- [ ] He revisado el diff completo antes de abrir la PR
---
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 5,
                'use_case'          => 'Code review, colaboración en equipo, git workflow',
                'vote_score'        => 51,
                'resource_type'     => 'prompt',
            ],

            // 3 - Diseño (3) - Design system tokens muy buscado
            [
                'profession_id'     => 3,
                'title'             => 'Crea un Design System con tokens escalables desde tu paleta de marca',
                'description'       => 'Diseña la arquitectura de tokens de diseño para tu sistema: colores semánticos, tipografía, espaciado, sombras y componentes base. Compatible con Figma Variables y Tailwind CSS.',
                'prompt_content'    => <<<'PROMPT'
Eres un design systems engineer especializado en crear sistemas escalables que funcionan para equipos de 1 a 100 personas.

Información de mi marca:
- Color primario (hex): [ej: #6366f1]
- Color secundario (hex): [ej: #ec4899]
- Color de fondo base: [claro / oscuro / ambos]
- Tipografía principal: [nombre de la fuente o "elegir"]
- Estilo visual: [minimalista / corporativo / juguetón / técnico]
- Plataformas objetivo: [web / móvil iOS / móvil Android / desktop]
- Stack tecnológico: [Tailwind / CSS custom properties / Styled Components / otro]

Genera el design system completo:

## Design System — [Nombre marca]

### 🎨 Paleta de colores (tokens semánticos)

**Colores de marca:**
```css
--color-brand-50: [generado de tu primario]
--color-brand-100: ...
--color-brand-500: [tu color primario]
--color-brand-900: ...
```

**Colores semánticos (independientes de la marca):**
```css
/* Fondos */
--color-bg-base: ...
--color-bg-subtle: ...
--color-bg-elevated: ...

/* Texto */
--color-text-primary: ...
--color-text-secondary: ...
--color-text-disabled: ...

/* Estados */
--color-success: ...
--color-warning: ...
--color-error: ...
--color-info: ...
```

**Dark mode overrides:**
```css
[data-theme="dark"] {
  --color-bg-base: ...
}
```

### 📐 Escala de espaciado
```css
--space-1: 4px;
--space-2: 8px;
--space-3: 12px;
/* ... escala completa hasta space-20 */
```

### 🔤 Sistema tipográfico
```css
/* Tamaños */
--text-xs: 0.75rem;
--text-sm: 0.875rem;
/* ... */

/* Pesos */
--font-normal: 400;
--font-medium: 500;
--font-bold: 700;

/* Line heights */
--leading-tight: 1.25;
--leading-normal: 1.5;
```

### 🔲 Sombras y radios
```css
--shadow-sm: ...;
--shadow-md: ...;
--radius-sm: 4px;
--radius-md: 8px;
--radius-full: 9999px;
```

### 🧩 Componentes base (especificación)
Para cada componente (Button, Input, Card, Badge, Modal):
- Variantes visuales
- Estados (default, hover, focus, disabled, loading)
- Props de la API del componente
- Tokens que usa

### 📁 Estructura de archivos recomendada
Cómo organizar el design system en tu repo para que escale bien.

### 🔗 Exportación a Figma Variables
Instrucciones para mapear estos tokens a Figma Variables (colecciones y modos).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Design systems, component libraries, Figma + código',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],

            // 4 - Ventas (4) - Propuesta de valor muy buscado
            [
                'profession_id'     => 4,
                'title'             => 'Crea tu elevator pitch de 30 segundos que genera interés inmediato',
                'description'       => 'Diseña la versión de 30 segundos, 2 minutos y email de tu propuesta de valor. Para networking, llamadas en frío, ferias y LinkedIn. Probada con el método "problema-solución-prueba-CTA".',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de ventas especializado en propuestas de valor y comunicación de producto para B2B y startups.

Mi empresa/producto:
- Qué hago/vendo: [descripción en tus palabras, tan cruda como sea]
- Para quién: [perfil del cliente ideal]
- Problema principal que resuelvo: [el dolor más grande]
- Resultado concreto que consigo: [con números si los tienes]
- Diferenciador vs. alternativas: [por qué elegirme a mí]
- Contexto de uso del pitch: [networking / cold call / demo / feria / LinkedIn / email]

Genera todas las versiones:

## Elevator Pitch — [Empresa/Producto]

### ⚡ Versión 30 segundos (para networking y presentaciones)
[Texto exacto, natural, sin sonar a anuncio. ~75 palabras]

**Por qué funciona:** análisis de cada frase y su función persuasiva.

**Variante si preguntan "¿a qué te dedicas?":**
[Versión más casual y conversacional]

---

### 🎤 Versión 2 minutos (para llamadas en frío o intro en reunión)
Estructura: apertura hook → problema → solución → prueba social → CTA suave
[Texto completo, ~250 palabras]

---

### 📧 Versión email (subject + 5 líneas de cuerpo)
Para outreach en frío que se lee en móvil.
```
Asunto: [3 opciones A/B/C]

[Cuerpo de 5 líneas máximo]
[CTA claro]
```

---

### 🔗 Versión LinkedIn (headline + about section)
- **Headline** (220 caracteres): ...
- **About** (primeras 3 líneas visibles sin "ver más"): ...

---

### ❓ Las 5 objeciones más probables tras el pitch
Para cada una: respuesta directa de 2-3 frases que no suene defensiva.

### 🎯 Práctica recomendada
Cómo ensayar el pitch para que suene natural y no memorizado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Sales, networking, comunicación de producto',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],

            // 5 - Product Management (5) - Roadmap comunicado muy buscado
            [
                'profession_id'     => 5,
                'title'             => 'Comunica el roadmap de producto al board, ventas y clientes con el mismo mensaje',
                'description'       => 'Adapta tu roadmap interno a tres audiencias distintas sin contradecirte: el board quiere estrategia, ventas quiere fechas, los clientes quieren valor. Tres versiones, un mensaje coherente.',
                'prompt_content'    => <<<'PROMPT'
Eres un CPO con experiencia comunicando estrategia de producto a múltiples stakeholders sin comprometerte con fechas que no puedes cumplir.

Mi roadmap interno (pega lo que tengas):
[DESCRIBE TU ROADMAP: puede ser una lista de features, un Notion, o una descripción libre de lo que viene en Q1/Q2/Q3]

Contexto:
- Etapa del producto: [alpha / beta / GA / crecimiento / madurez]
- Temas estratégicos del año: [los 2-3 apuestas grandes]
- Compromisos ya hechos con clientes: [si hay features prometidas, cuáles]
- Restricciones que no puedes decir públicamente: [deuda técnica, recursos, cambios de estrategia]

Genera las tres versiones:

---

## VERSIÓN BOARD (foco: estrategia y retorno)
Duración: 5-10 diapositivas | Audiencia: inversores, directivos

**Slide 1: Visión a 12-18 meses**
Dónde estará el producto y qué posición de mercado buscamos.

**Slide 2: 3 apuestas estratégicas**
Por qué estas y no otras. Cómo cada una mueve la NSM y el revenue.

**Slide 3: Progreso Q pasado vs. plan**
Qué entregamos, qué se retrasó y por qué (sin excusas, con aprendizajes).

**Slide 4: Inversión requerida**
Recursos necesarios para ejecutar. Qué necesitas del board.

---

## VERSIÓN VENTAS (foco: qué puedo vender ya)
Formato: one-pager o deck de 3 slides | Audiencia: sales team

**Disponible hoy:** qué puedes vender sin riesgo de incumplir.
**Próximamente (90 días):** qué puedes mencionar como "en camino" con seguridad.
**En el horizonte (>90 días):** cómo hablar de esto sin comprometer fechas.

**Scripts para gestionar preguntas de clientes:**
- "¿Cuándo tendrán [feature X]?" → respuesta exacta
- "La competencia ya tiene Y" → respuesta exacta
- "Necesito esto para firmar" → respuesta exacta

---

## VERSIÓN CLIENTES (foco: valor y confianza)
Formato: changelog / email / blog post | Audiencia: usuarios activos

**Lo que lanzamos:** [features recientes con el valor que aportan, no la spec técnica]
**Lo que viene:** [en lenguaje de beneficios, sin fechas exactas]
**Por qué en este orden:** [transparencia sobre la priorización]
**Cómo darnos feedback:** [canal claro]

---

### 🔄 Reglas de consistencia entre versiones
Qué nunca debes decir en una versión que contradiga a otra.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Product strategy, stakeholder management, comunicación de roadmap',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],

            // 6 - RRHH (6) - Offboarding muy buscado
            [
                'profession_id'     => 6,
                'title'             => 'Proceso de offboarding que convierte empleados que se van en embajadores',
                'description'       => 'Diseña un proceso de salida que preserva el conocimiento, mantiene la relación y convierte al ex-empleado en referencia positiva. Con checklist, entrevista de salida y plan de transición de conocimiento.',
                'prompt_content'    => <<<'PROMPT'
Eres un HR Director especializado en employee experience, incluyendo los momentos más delicados como la salida de un empleado.

Contexto:
- Tipo de salida: [voluntaria / despido / ERTE / jubilación / fin de contrato]
- Rol del empleado que se va: [título y responsabilidades principales]
- Tiempo en la empresa: [X meses/años]
- Plazo de preaviso disponible: [X días/semanas]
- Conocimiento crítico que tiene: [procesos, relaciones, tecnología]

Genera el proceso completo:

## Proceso de Offboarding — [Rol] — [Fecha inicio]

### 📅 Timeline de las últimas X semanas
Cronograma día a día con todas las acciones a realizar, ordenadas por prioridad.

### 📋 Checklist de salida completo

**Semana 1 — Anuncio y planificación:**
- [ ] Comunicación interna al equipo (guión exacto adjunto)
- [ ] Reunión de kick-off de transición con el empleado
- [ ] Identificar sucesor o plan de cobertura

**Semana 2-N — Transferencia de conocimiento:**
- [ ] Documentar procesos que solo conoce esta persona
- [ ] Presentar a contactos clave (clientes, proveedores, stakeholders)
- [ ] Grabar vídeos explicativos de procesos complejos
- [ ] Audit de accesos y herramientas a transferir/revocar

**Última semana:**
- [ ] Entrevista de salida
- [ ] Carta de referencia (si aplica)
- [ ] Ceremonia de despedida
- [ ] Offboarding administrativo (nómina final, documentación)
- [ ] Revocar accesos (orden y timing exactos)

### 🗣️ Guión de comunicación al equipo
Template exacto para anunciar la salida de forma profesional y positiva, sea cual sea el motivo.

### 🎙️ Entrevista de salida (preguntas que generan insights reales)
12 preguntas diseñadas para obtener feedback honesto, no respuestas diplomáticas.
Tips para crear el ambiente psicológicamente seguro que hace que contesten de verdad.

### 📚 Template de transferencia de conocimiento
Estructura del documento que el empleado debe completar para cada proceso/responsabilidad.

### 🤝 Programa de Alumni
Cómo mantener la relación después de la salida para que sea un embajador de la empresa:
- Invitación a red de alumni
- Comunicaciones periódicas
- Oportunidades de colaboración futura (freelance, referidos)

### ✉️ Carta de referencia template
Estructura profesional adaptable a cualquier perfil.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Gestión de personas, knowledge management, employer branding',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],

            // 7 - Finanzas (7) - Pricing strategy muy buscado
            [
                'profession_id'     => 7,
                'title'             => 'Estrategia de pricing basada en valor: encuentra el precio que maximiza revenue',
                'description'       => 'Diseña o revisa tu estrategia de precios usando el método value-based pricing. Con análisis de disposición a pagar, estructura de planes, experimentos de pricing y cómo subir precios sin perder clientes.',
                'prompt_content'    => <<<'PROMPT'
Eres un pricing strategist especializado en SaaS y servicios B2B. Has ayudado a +30 empresas a doblar su ARPU con cambios de pricing sin perder clientes.

Contexto de mi negocio:
- Producto/servicio: [descripción]
- Precio actual: [€/mes, €/año, o €/proyecto]
- Número de clientes: [N]
- MRR/ARR actual: [€]
- Segmentos de clientes: [describe los diferentes tipos de cliente que tienes]
- Principal valor que entrego (en palabras del cliente): [qué dicen que les aporta]
- Métrica de valor del producto: [lo que más consumen/usan — usuarios, API calls, proyectos, etc.]
- Competidores y sus precios: [lista con precios si los conoces]

Genera la estrategia completa:

## Estrategia de Pricing — [Empresa] — [Fecha]

### 💡 Diagnóstico del pricing actual
Qué está bien, qué deja dinero sobre la mesa y qué puede estar ahuyentando clientes.

### 🎯 Métrica de valor recomendada
La variable que debe impulsar tu pricing y por qué se correlaciona con el valor percibido por el cliente.

### 📊 Estructura de planes recomendada
Para cada plan (mínimo 3):

**Plan [Nombre]** — €X/mes
- Para quién: [perfil exacto]
- Qué incluye: [features y límites]
- Por qué este precio: [justificación basada en valor]
- Palanca de upgrade: [qué les hace pasar al siguiente plan]

### 🔬 Experimentos de pricing a lanzar
3 tests A/B concretos para validar el nuevo pricing antes de lanzarlo a todos.

### 📈 Cómo subir precios a clientes existentes
- Cuándo y cómo comunicarlo
- Qué grandfathering ofrecer (si es necesario)
- Template del email de subida de precios que minimiza el churn
- Cómo gestionar las objeciones

### 💰 Impacto estimado en MRR
Proyección de cómo el nuevo pricing afecta al MRR en 3 escenarios: conservador, base, optimista.

### ⚠️ Errores de pricing más comunes en tu sector
Los 5 errores que cometen empresas como la tuya y cómo evitarlos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Pricing strategy, revenue optimization, SaaS growth',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],

            // 8 - Legal (8) - Política de privacidad RGPD muy buscado
            [
                'profession_id'     => 8,
                'title'             => 'Aviso legal, política de privacidad y cookies RGPD para cualquier web o app',
                'description'       => 'Genera los tres documentos legales obligatorios para operar en la UE: aviso legal, política de privacidad y política de cookies. Adaptados a tu tipo de negocio y actualizados con las últimas directrices de la AEPD.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en protección de datos y cumplimiento RGPD/LOPD para empresas digitales en España y la UE.

Información de mi negocio:
- Nombre de la empresa y CIF: [nombre, CIF]
- Domicilio social: [dirección completa]
- Tipo de web/app: [e-commerce / SaaS / blog con suscripción / marketplace / app móvil / otro]
- Datos que recoges de usuarios: [email / nombre / dirección / teléfono / datos de pago / localización / otros]
- Finalidades del tratamiento: [newsletter / gestión de pedidos / publicidad / analítica / otro]
- ¿Usas cookies de terceros? (Google Analytics, Meta Pixel, etc.): [sí/no — cuáles]
- ¿Cedes datos a terceros?: [sí/no — a quiénes]
- ¿Transferencias internacionales de datos?: [sí/no]
- ¿Menores de 14 años usan el servicio?: [sí/no]

Genera los tres documentos:

---

## 1. AVISO LEGAL
*(Incluye: datos identificativos del titular, condiciones de uso, propiedad intelectual, responsabilidad, ley aplicable)*

[Documento completo listo para copiar]

---

## 2. POLÍTICA DE PRIVACIDAD
*(Incluye: responsable del tratamiento, finalidades, base legal, plazo de conservación, derechos ARCO+, DPO si aplica, reclamación ante AEPD)*

[Documento completo con todas las secciones del Art. 13 RGPD]

---

## 3. POLÍTICA DE COOKIES
*(Incluye: qué son cookies, tabla de cookies usadas por categoría, cómo configurarlas, enlace a preferencias)*

**Tabla de cookies:**
| Nombre | Proveedor | Finalidad | Duración | Tipo |
|--------|---------|-----------|---------|------|
| _ga | Google Analytics | Analítica | 2 años | Analítica |
| [resto de tus cookies] | ... | ... | ... | ... |

---

## 4. Banner de cookies (texto + configuración)
- Texto del banner de primera capa (máx. 3 líneas)
- Texto del panel de segunda capa con categorías
- Configuración recomendada del banner según directrices AEPD 2024

---
*[AVISO: Este documento es orientativo. Debe ser revisado por un abogado antes de publicarlo, especialmente si tu negocio tiene particularidades.]*
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Cumplimiento legal, RGPD, protección de datos',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],

            // 9 - Customer Support (9) - Escalado y SLA de soporte
            [
                'profession_id'     => 9,
                'title'             => 'Diseña la matriz de escalado y SLAs de soporte por tier de cliente',
                'description'       => 'Crea el sistema de soporte por niveles (L1/L2/L3), los SLAs por plan de cliente y la matriz de escalado que garantiza que cada ticket llega a quien puede resolverlo en el menor tiempo posible.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Support con experiencia diseñando operaciones de soporte escalables para empresas SaaS de 10 a 500 empleados.

Contexto de mi equipo de soporte:
- Tamaño del equipo: [N agentes]
- Canales de soporte activos: [email / chat / teléfono / portal / Slack]
- Planes de cliente: [ej: Free / Pro / Business / Enterprise]
- Volumen de tickets/mes: [N]
- Tiempo de respuesta actual: [X horas]
- Herramienta de helpdesk: [Zendesk / Intercom / Freshdesk / Linear / otra]

Genera el sistema completo:

## Sistema de Soporte y Escalado — [Empresa]

### 🏗️ Estructura de niveles (tiers)

**L1 — Soporte General (agentes junior):**
- Tipos de tickets que resuelven: [ejemplos]
- Capacidad esperada: X tickets/día por agente
- Cuándo escalar a L2: [criterios concretos]
- Tiempo de resolución objetivo: X horas

**L2 — Soporte Técnico (agentes senior / especialistas):**
- Tipos de tickets: [ejemplos]
- Cuándo escalar a L3: [criterios]
- Tiempo de resolución objetivo: X horas

**L3 — Ingeniería / Producto:**
- Solo reciben bugs confirmados y casos enterprise críticos
- SLA de respuesta del equipo técnico: X horas
- Cómo se documenta para evitar recurrencia

### 📊 SLAs por plan de cliente
| Plan | Canales | 1ª respuesta | Resolución P1 | Resolución P2 | Resolución P3 | TAM dedicado |
|------|---------|-------------|--------------|--------------|--------------|-------------|
| Free | Email | 48h | N/A | N/A | 5 días | No |
| Pro | Email+Chat | 8h | 4h | 24h | 3 días | No |
| Business | Email+Chat | 4h | 2h | 12h | 2 días | No |
| Enterprise | Todos + Slack | 1h | 1h | 4h | 24h | Sí |

### 🚨 Matriz de escalado por tipo de incidencia
Para cada tipo de incidencia (outage, bug, billing, seguridad, legal):
- Quién lo recibe primero
- En qué tiempo escala
- A quién escala
- Si requiere comunicación al cliente durante la resolución

### 📧 Templates de comunicación por escenario
- Acuse de recibo de ticket (por canal y plan)
- Actualización de estado durante resolución
- Resolución completada
- Cierre sin resolución (no es un bug, no está en roadmap)
- Post-mortem para clientes enterprise

### 📈 Métricas de soporte a monitorizar
KPIs clave, frecuencia de revisión y umbrales de alerta para cada uno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Customer support operations, SaaS support, escalado',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],

            // 10 - Freelancers (10) - Gestión de clientes difíciles muy buscado
            [
                'profession_id'     => 10,
                'title'             => 'Gestiona clientes difíciles: scope creep, pagos tardíos y feedback infinito',
                'description'       => 'Scripts exactos y frameworks para manejar las situaciones más comunes que arruinan proyectos freelance: el cliente que pide "solo un cambio más", el que no paga a tiempo y el que nunca aprueba el trabajo.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de freelancers con 10 años de experiencia y más de 200 freelancers asesorados. Conoces todos los patrones de clientes difíciles y tienes respuestas probadas para cada uno.

Mi situación:
- Tipo de servicio que ofrezco: [diseño / desarrollo / copy / consultoría / otro]
- Tipo de cliente con el que tengo problemas: [agencia / empresa / particular / startup]
- Situación concreta: [describe el problema específico]

O elige el escenario que necesitas:

---

## ESCENARIO 1: Scope Creep — "Solo un cambio más"

**Señales de alerta tempranas** (para detectarlo antes de que sea un problema):
[Lista de señales]

**Conversación cuando ocurre por primera vez:**
Email/mensaje exacto para redirigir sin dañar la relación.

**Cuando ya han pedido 3+ cambios fuera de scope:**
Cómo y cuándo cobrar por ello. El email exacto con la propuesta de trabajo adicional.

**Cómo evitarlo desde el inicio:**
- Cláusula de scope para incluir en el contrato
- Proceso de aprobación de entregables que protege legalmente

---

## ESCENARIO 2: Pagos tardíos o facturas sin pagar

**Secuencia de recordatorios** (con días exactos y tono escalante):
- Día 1: recordatorio amigable
- Día 7: seguimiento firme
- Día 15: comunicación formal
- Día 30+: últimas opciones

**Email para pausar el trabajo por impago:**
Cómo hacerlo sin quemar el puente ni ponerte en riesgo legal.

**Cómo evitarlo:**
- Estructura de pagos recomendada (anticipo, hitos, cierre)
- Cláusula de intereses por demora
- Checklist antes de empezar con un cliente nuevo

---

## ESCENARIO 3: Feedback infinito — El cliente que nunca aprueba

**Proceso de aprobación con límites claros:**
Cómo estructurar rondas de revisión en el contrato.

**Cuando el feedback es contradictorio o imposible de implementar:**
Cómo señalarlo sin parecer defensivo.

**Cuando el proyecto lleva 3x el tiempo estimado:**
Cómo tener la conversación difícil sobre coste adicional o cierre del proyecto.

---

## ESCENARIO 4: El cliente que desaparece

**Secuencia de seguimiento** sin parecer desesperado:
3 mensajes en 3 semanas diferentes.

**Cuándo y cómo cerrar el proyecto unilateralmente:**
El email de cierre y cómo protegerte legalmente.

---

### 🛡️ Contrato freelance: las 5 cláusulas que evitan el 90% de los problemas
Texto exacto listo para incluir en cualquier contrato de servicios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Gestión de clientes freelance, comunicación, contratos',
                'vote_score'        => 52,
                'resource_type'     => 'prompt',
            ],
        ];

        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping (exists): {$data['title']}");
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
