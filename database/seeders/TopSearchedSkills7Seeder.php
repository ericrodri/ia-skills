<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills7Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Caso de estudio y success story que genera leads B2B de forma pasiva',
                'description'       => 'Escribe el caso de estudio que tus prospectos comparten con sus jefes para aprobar la compra. Con la estructura de storytelling que convierte lectores en leads calificados.',
                'prompt_content'    => <<<'PROMPT'
Eres un content strategist especializado en case studies B2B que acortan el ciclo de ventas.

Información sobre el cliente y el proyecto:
- Nombre de la empresa cliente (o seudónimo): [nombre]
- Sector del cliente: [industria]
- Tamaño de la empresa: [empleados / facturación]
- Problema que tenían antes: [describe en detalle]
- Por qué nos eligieron a nosotros: [razones]
- Solución que implementamos: [descripción]
- Resultados obtenidos (con números): [métricas concretas]
- Tiempo desde implementación hasta resultados: [semanas/meses]
- Persona de contacto que puede hacer de testimonial: [nombre y cargo]

Genera el caso de estudio completo:

## [Empresa] aumentó [métrica] un X% en [tiempo] con [Tu empresa]

### El resumen para el que no tiene tiempo (3 bullets)
- Problema: [en una frase]
- Solución: [en una frase]
- Resultado: [el número más impresionante]

### El contexto (2 párrafos)
Quién es la empresa cliente y por qué la situación era urgente. Escrito de forma que el lector se identifique.

### El problema en detalle
Cómo era el día a día antes de nuestra solución. Lenguaje visual y empático.

### Por qué nos eligieron
La historia real de cómo llegaron a nosotros y qué les convenció (sin sonar a anuncio).

### La solución implementada
Qué hicimos exactamente, en qué fases y cómo fue el proceso de implementación. Con los detalles que generan confianza técnica.

### Los resultados (la sección más importante)
Métricas antes/después en formato visual:
- [Métrica 1]: de X a Y (+X%)
- [Métrica 2]: reducción de X a Y
- ROI: €X recuperados en X meses

### La voz del cliente (cita textual)
"[Quote de 2-3 frases que capture el beneficio más emocional — pide esto exactamente a tu cliente]"
— [Nombre], [Cargo], [Empresa]

### ¿Listo para conseguir resultados similares?
CTA con fricción mínima y urgencia genuina.

---

### 📋 Checklist de distribución del caso de estudio
Dónde y cómo publicar el case study para máxima generación de leads.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Content marketing, B2B lead generation, social proof',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Optimización de performance web: audit completo y plan de mejora de Core Web Vitals',
                'description'       => 'Diagnostica los cuellos de botella de rendimiento de tu web o app, genera el plan de optimización priorizado por impacto en LCP, INP y CLS, y obtén el código exacto de cada corrección.',
                'prompt_content'    => <<<'PROMPT'
Eres un Web Performance Engineer especializado en Core Web Vitals y optimización de carga para aplicaciones React, Vue y Next.js.

Mi app/web:
- URL o descripción: [URL o stack]
- Framework: [React / Next.js / Vue / Nuxt / Astro / otro]
- Puntuación Lighthouse actual (si la tienes): [Performance X / LCP Xs / CLS X / INP Xms]
- Datos de PageSpeed Insights (campo real): [si los tienes]
- Tipo de página a optimizar: [landing / app SPA / e-commerce / blog]
- Hosting: [Vercel / AWS / Hetzner / otro]

## Audit de Performance — [Web/App]

### 📊 Diagnóstico por métrica

**LCP — Largest Contentful Paint (objetivo: < 2.5s)**
- Causa más probable para tu stack: [imagen hero sin preload / render-blocking JS / TTFB alto]
- Correcciones priorizadas:

1. **Preload del recurso LCP:**
```html
<link rel="preload" as="image" href="/hero.webp" fetchpriority="high">
```

2. **Convertir imagen a WebP/AVIF:**
```bash
# Conversión en batch
cwebp -q 80 imagen.jpg -o imagen.webp
```

3. **Critical CSS inline:**
[Cómo extraerlo y cómo implementarlo en tu framework]

**INP — Interaction to Next Paint (objetivo: < 200ms)**
- Cómo detectar tareas largas: [Chrome DevTools → Performance → Long Tasks]
- Code splitting en React/Vue: [código exacto]
- Defer de scripts no críticos: [implementación]

**CLS — Cumulative Layout Shift (objetivo: < 0.1)**
- Causas más comunes y corrección:
```css
/* Reservar espacio para imágenes */
img { aspect-ratio: 16/9; width: 100%; }
/* Font display para evitar FOUT */
@font-face { font-display: optional; }
```

### 🚀 Plan de optimización (ordenado por ROI)
| Optimización | Impacto en LCP/INP/CLS | Esfuerzo | Sprint |
|-------------|----------------------|---------|--------|
| ... | Alto | 2h | 1 |

### 🛠️ Setup de monitorización continua
Cómo configurar alertas para detectar regresiones de performance antes de que lleguen a producción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Web performance, Core Web Vitals, frontend optimization',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Research de usuarios con card sorting y árbol de navegación (tree testing)',
                'description'       => 'Diseña y analiza estudios de card sorting y tree testing para validar la arquitectura de información de tu producto. Con protocolo de investigación, análisis de resultados y recomendaciones de navegación.',
                'prompt_content'    => <<<'PROMPT'
Eres un Information Architect y UX researcher con experiencia validando arquitecturas de navegación complejas con usuarios reales.

Contexto de mi proyecto:
- Tipo de producto: [web / app / intranet / e-commerce]
- Problema de navegación actual: [los usuarios no encuentran X / alto porcentaje de abandono en Y]
- Número de secciones o contenidos principales: [N]
- Herramienta disponible: [Optimal Workshop / Maze / UserZoom / DIY con Notion/Miro]
- Número de participantes disponibles: [N o "debo reclutar"]

## Plan de Investigación de Arquitectura — [Producto]

### 🃏 Card Sorting (para descubrir modelos mentales)

**Tipo recomendado:** [abierto / cerrado / híbrido — con justificación]

**Tarjetas a usar (20-40 es lo ideal):**
[Lista de tarjetas basadas en los contenidos de tu producto]

**Protocolo del estudio:**
- Instrucciones exactas para el participante
- Tiempo estimado: X minutos
- Cómo analizar los resultados: dendrograma + matriz de similitud

**Análisis de resultados:**
- Qué grupos aparecen consistentemente
- Qué tarjetas generan más confusión (alta varianza)
- Cómo usar los resultados para diseñar la nueva estructura

### 🌳 Tree Testing (para validar la estructura propuesta)

**Tareas de testing (5-8 tareas):**
Para cada tarea:
- Escenario: "[texto de la tarea sin revelar la respuesta]"
- Respuesta correcta: [ruta esperada]
- Métrica: tasa de éxito directo / indirect success / failure

**Análisis de resultados:**
- Árbol de decisiones por tarea
- Destinos más frecuentes cuando fallan
- Qué etiquetas de navegación confunden

### 📊 Informe de hallazgos
Estructura del documento de 5 páginas que presentarás al equipo de producto con:
- Modelo mental de los usuarios
- Estructura de navegación recomendada
- Terminología que los usuarios entienden (vs. jerga interna)
- Tests A/B de navegación a lanzar en producción
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'UX research, arquitectura de información, navegación',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Social selling en LinkedIn: sistema de 30 minutos diarios que genera pipeline',
                'description'       => 'Implementa una rutina de social selling en LinkedIn que genera conversaciones con decisores sin parecer spam. Con protocolo diario de 30 minutos, templates de engagement y métricas para saber qué funciona.',
                'prompt_content'    => <<<'PROMPT'
Eres un Social Selling coach especializado en LinkedIn con experiencia ayudando a equipos de ventas B2B a generar pipeline sin presupuesto de publicidad.

Mi contexto:
- Qué vendo: [producto/servicio]
- Cliente ideal (ICP): [cargo, sector, tamaño de empresa]
- Red actual en LinkedIn: [N conexiones]
- SSI (Social Selling Index) actual: [si lo conoces, o "desconocido"]
- Tiempo disponible para LinkedIn: [30 min / 1 hora al día]
- Mayor dificultad actual: [no sé qué publicar / mis mensajes no obtienen respuesta / no tengo tiempo / otro]

## Sistema de Social Selling — [Tu nombre] en LinkedIn

### 📅 Rutina diaria de 30 minutos

**Bloque 1 — Señales y triggers (10 min):**
- Cómo usar LinkedIn Sales Navigator o búsqueda avanzada para encontrar señales de compra
- Qué notificaciones revisar y actuar primero
- Cómo guardar los leads más calientes para seguimiento

**Bloque 2 — Engagement estratégico (10 min):**
- En qué posts comentar (de prospects, de influencers del sector, de clientes)
- Cómo comentar para que el prospect note tu presencia sin parecer desesperado
- El tipo de comentario que abre conversaciones (no el "Gran post, totalmente de acuerdo")

**Bloque 3 — Outreach (10 min):**
- Cuántos mensajes enviar al día (para no quemar la cuenta)
- Secuencia de mensajes (connect → warm-up → pitch)

### 💬 Templates de mensajes que obtienen respuesta

**Nota de conexión (sin pitch):**
[Template con personalización obligatoria]

**Primer mensaje post-conexión:**
[Template con trigger del perfil del prospect]

**Mensaje de valor (antes del pitch):**
[Template con recurso o insight relevante]

**Pitch suave (cuando hay engagement):**
[Template de 3 líneas con CTA de bajo compromiso]

### 📊 KPIs semanales del social selling
Qué medir para saber si el sistema está funcionando y cuándo ajustar.

### 🚀 Optimización del perfil para social selling
Los 5 cambios en el perfil que aumentan la tasa de aceptación de conexiones un 40%.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Social selling, LinkedIn, prospección B2B',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Definition of Ready y Definition of Done: los contratos que hacen predecible tu equipo ágil',
                'description'       => 'Crea el DoR y DoD adaptados a tu equipo y contexto. Con los criterios específicos para cada tipo de ticket, proceso de validación y cómo implementarlos sin que se conviertan en burocracia.',
                'prompt_content'    => <<<'PROMPT'
Eres un Agile Coach con experiencia implementando prácticas de ingeniería de calidad en equipos de 3 a 20 personas.

Contexto de mi equipo:
- Tamaño: [N developers, N QA, N designers]
- Stack tecnológico: [frontend + backend + infra]
- Metodología: [Scrum / Kanban / Shape Up / híbrido]
- Tipos de tickets que manejan: [feature / bug / chore / spike / sub-task]
- Problemas actuales: [tickets que entran al sprint sin estar listos / features que "terminan" pero tienen bugs / deuda técnica oculta]

Genera los documentos completos:

## Definition of Ready (DoR) — [Equipo]

### ¿Qué es y para qué sirve?
Una frase que explica el valor del DoR al equipo (por qué no es burocracia).

### Criterios por tipo de ticket

**Feature:**
- [ ] User story en formato correcto (Como... quiero... para...)
- [ ] Criterios de aceptación con al menos 3 escenarios (happy path + edge cases)
- [ ] Diseño aprobado y disponible en Figma (si aplica)
- [ ] Dependencias técnicas identificadas y desbloqueadas
- [ ] Estimación hecha por el equipo
- [ ] [Añade criterios específicos para tu stack]

**Bug:**
- [ ] Reproducible en staging con pasos detallados
- [ ] Severidad definida (P1/P2/P3/P4)
- [ ] Comportamiento esperado vs. actual documentado
- [ ] Logs o screenshot del error incluidos

**Spike (investigación):**
- [ ] Pregunta concreta que debe responder
- [ ] Timebox definido (máx. X horas)
- [ ] Output esperado (documento / PoC / decisión)

### Proceso de validación del DoR
Quién valida, cuándo y qué pasa si un ticket no pasa el DoR.

---

## Definition of Done (DoD) — [Equipo]

### Criterios universales (todos los tickets)
- [ ] Código revisado y aprobado por al menos 1 peer
- [ ] Tests actualizados y en verde (unitarios + integración)
- [ ] Sin regresiones detectadas en smoke test
- [ ] Deployed en staging sin errores
- [ ] Documentación actualizada (si aplica)
- [ ] Ticket actualizado con notas de implementación

### Criterios adicionales por tipo

**Feature:**
- [ ] QA sign-off realizado con checklist
- [ ] Analytics/tracking configurado según el plan de medición
- [ ] Feature flag configurado correctamente (si aplica)
- [ ] Comunicación al equipo de producto realizada

**Bug fix:**
- [ ] Test de regresión específico añadido para este bug
- [ ] Root cause documentado en el ticket

### 🎯 Cómo implementarlos sin resistencia del equipo
El proceso en 3 pasos para que el equipo los adopte como suyos, no como reglas impuestas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Agile, calidad de software, gestión de equipo de producto',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Feedback 360º: diseña el proceso y facilita las conversaciones difíciles',
                'description'       => 'Implementa un proceso de evaluación 360º que genera feedback honesto y accionable. Con diseño del cuestionario, selección de evaluadores, análisis de resultados y guión para la conversación de devolution.',
                'prompt_content'    => <<<'PROMPT'
Eres un HR Business Partner especializado en procesos de evaluación de desempeño y feedback organizacional.

Contexto:
- Tamaño de la empresa: [N empleados]
- Frecuencia deseada: [anual / semestral]
- Herramienta: [Culture Amp / Leapsome / Lattice / Google Forms / otra]
- Objetivo principal: [desarrollo / calibración salarial / identificar HiPos / otro]
- Cultura de feedback actual: [muy baja / media / alta]

## Proceso de Feedback 360º — [Empresa]

### 🏗️ Diseño del proceso

**Participantes:**
- Evaluado: [quiénes participan — todos / niveles senior+]
- Evaluadores: [cuántos / quién los selecciona / criterios de selección]
- Anonimato: [total / parcial / ninguno — con justificación]

**Timeline del proceso:**
| Fase | Duración | Actividades |
|------|---------|------------|
| Preparación | 1 semana | Comunicación, selección de evaluadores |
| Recolección | 2 semanas | Encuestas abiertas |
| Análisis | 1 semana | Procesamiento y preparación de informes |
| Devolution | 2 semanas | Conversaciones individuales |

### 📋 Cuestionario (preguntas que generan feedback útil)

**Preguntas cuantitativas (escala 1-5):**
[10 preguntas por competencia — con competencias adaptadas al nivel del evaluado]

**Preguntas abiertas (las más valiosas):**
1. ¿Qué hace especialmente bien [nombre] que debería seguir haciendo?
2. ¿Qué podría hacer de forma diferente para ser más efectivo?
3. [3-4 preguntas más adaptadas al objetivo del proceso]

### 📊 Análisis del informe individual
Cómo presentar los resultados de forma que sean accionables y no abrumadores.

### 🗣️ Guión de la conversación de devolution (90 min)

**Apertura y contexto (10 min):**
[Script exacto para crear seguridad psicológica]

**Revisión de fortalezas (20 min):**
Cómo presentar el feedback positivo para que se reciba (no se descarte).

**Áreas de desarrollo (30 min):**
Cómo entregar feedback difícil sin que se ponga a la defensiva.

**Plan de desarrollo (30 min):**
Cómo construir el plan de acción conjuntamente.

**Cierre (10 min):**
Compromisos mutuos y próximo check-in.

### ⚠️ Los 5 errores que arruinan un proceso 360º
Y cómo evitarlos desde el diseño.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Performance management, desarrollo de liderazgo, feedback organizacional',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Gestión de tesorería y optimización del capital circulante para PYMEs',
                'description'       => 'Controla el flujo de caja de tu PYME con el forecast de tesorería a 13 semanas, identifica los gaps de liquidez antes de que ocurran y aplica las palancas de optimización del circulante (cobros, pagos, stock).',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO fractional especializado en gestión de tesorería y cash flow para PYMEs con facturación de 500k a 10M€.

Situación de mi empresa:
- Sector y tipo de negocio: [describe]
- Facturación anual: [€]
- Caja actual: [€]
- Días de cobro medio (DSO): [X días]
- Días de pago a proveedores (DPO): [X días]
- Stock (si aplica): [€ o días de rotación]
- Deuda financiera: [€ — tipo y plazo]
- Problema principal de tesorería: [picos de tensión / clientes que no pagan / demasiado stock / otro]

Genera el análisis y plan completo:

## Gestión de Tesorería — [Empresa] — [Mes/Año]

### 📊 Forecast de tesorería a 13 semanas
| Semana | Cobros previstos | Pagos previstos | Saldo neto | Saldo acumulado |
|--------|----------------|----------------|-----------|----------------|
| 1 | €X | €X | €X | €X |
| 2 | ... | ... | ... | ... |

**🚨 Semanas críticas identificadas:** [semanas donde el saldo baja de €X]
**Acción de contingencia:** [línea de crédito / adelantar cobros / retrasar pagos / otro]

### 💊 Diagnóstico del capital circulante

**DSO (Días de cobro): X días**
- Benchmark sector: X días
- Si bajas a X días: €X adicionales de caja liberada
- Cómo reducirlo: [3 acciones concretas]

**DPO (Días de pago): X días**
- Benchmark sector: X días
- Si extiendes a X días: €X adicionales de caja liberada
- Cómo negociarlo con proveedores

**Rotación de stock (si aplica):** X días
- Si reduces a X días: €X liberados

### 🛠️ Plan de optimización (palancas prioritarias)
| Palanca | Caja liberada | Tiempo implementación | Dificultad |
|---------|--------------|----------------------|-----------|
| Reducir DSO | €X | X semanas | Media |
| Extender DPO | €X | X semanas | Baja |
| Reducir stock | €X | X meses | Alta |

### 💳 Instrumentos financieros de tesorería
Cuándo y cómo usar: confirming, factoring, póliza de crédito, descuento de pagarés.

### 📋 Dashboard de tesorería semanal
Las 5 métricas que debes revisar cada lunes en 15 minutos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Tesorería, cash flow, gestión financiera PYME',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contrato de trabajo con cláusulas de confidencialidad y no competencia válidas en España',
                'description'       => 'Redacta un contrato de trabajo con las cláusulas de confidencialidad, no competencia post-contractual y pacto de permanencia que sean legalmente válidas y ejecutables en España, sin exceder los límites del ET.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado laboralista especializado en contratos de trabajo para empresas de tecnología y servicios en España.

Perfil del empleado:
- Puesto: [título y descripción del cargo]
- Tipo de contrato: [indefinido / temporal — causa / por obra]
- Jornada: [completa / parcial — horas]
- Salario: [€ bruto/año]
- Convenio colectivo aplicable: [sector — o "a determinar"]
- ¿Tiene acceso a información confidencial? [sí/no — tipo]
- ¿Necesita pacto de no competencia? [sí/no]
- ¿Necesita pacto de permanencia? [sí/no — duración]
- ¿Trabajo en remoto? [sí/no — modalidad]

## CONTRATO DE TRABAJO

### Cláusulas estándar
*Partes, objeto, duración, jornada, salario, lugar de trabajo, período de prueba*

---

### CLÁUSULAS ESPECIALES

**Cláusula de Confidencialidad (durante y post-contrato):**
[Redacción válida que especifica qué información protege, durante cuánto tiempo y consecuencias del incumplimiento]

**Pacto de No Competencia Post-contractual (Art. 21.2 ET):**
Requisitos legales para que sea válido:
- ✅ Interés empresarial legítimo: [debe justificarse]
- ✅ Compensación económica adecuada: mínimo recomendado €X/mes durante X meses
- ✅ Duración máxima: 2 años técnicos / 6 meses no técnicos

[Redacción completa de la cláusula que cumple los requisitos]

**Pacto de Permanencia (Art. 21.4 ET):**
Cuándo es válido, duración máxima y cómo calcular la compensación si el trabajador incumple.

[Redacción completa de la cláusula]

**Propiedad intelectual generada durante el empleo:**
[Cláusula que atribuye a la empresa las creaciones del empleado en el ejercicio de sus funciones — Art. 51 LPI]

**Trabajo en remoto (si aplica):**
[Cláusula conforme a la Ley 10/2021 de trabajo a distancia — medios, gastos, control horario]

### ⚠️ Límites legales que no debes superar
Las 5 cláusulas que los empleadores incluyen y que los tribunales declaran nulas.

### 📋 Checklist de formalidades obligatorias
Registro en SEPE, alta en SS, comunicación de contrato, entrega al trabajador.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Derecho laboral, contratos de trabajo, compliance empresarial',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Programa de Customer Success para cuentas enterprise: de la firma al advocacy',
                'description'       => 'Diseña el journey completo del cliente enterprise: onboarding estructurado, business reviews periódicas, gestión de riesgos de churn y programa de conversión de clientes en defensores públicos de tu marca.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Customer Success con experiencia gestionando cuentas enterprise de 50k€+ ARR con equipos de CS de 3-15 personas.

Contexto:
- Tipo de producto: [SaaS / plataforma / servicio gestionado]
- ARR medio de cuenta enterprise: [€]
- Número de cuentas enterprise actuales: [N]
- Equipo de CS: [N CSMs, ratio clientes por CSM]
- Churn anual enterprise actual: [X%]
- Mayor problema en enterprise: [largo tiempo de onboarding / bajo adoption / renovaciones complicadas / otro]

## Programa de Customer Success Enterprise — [Empresa]

### 🗺️ Customer Journey Map (momentos clave)

**Fase 1 — Onboarding (días 0-90)**

*Semana 1 — Kickoff:*
- Reunión de kickoff: agenda, asistentes y output esperado
- Entrega del Success Plan: template completo
- Configuración técnica: quién hace qué y en qué plazo

*Semana 2-4 — Implementación:*
- Check-ins de seguimiento: frecuencia y formato
- Criterios de éxito del onboarding: cómo saber que terminó bien

*Día 90 — First Value Review:*
- Agenda de la reunión de 90 días
- Métricas de adoption que deberías ver

**Fase 2 — Adoption y crecimiento (meses 3-12)**

*Business Reviews (QBR):*
- Frecuencia recomendada por ARR: [<100k: semestral / >100k: trimestral]
- Agenda de la QBR: [estructura de 60 min]
- Cómo preparar los datos para la QBR en 2 horas

*Health Score:*
| Dimensión | Peso | Señal verde | Señal roja |
|-----------|------|------------|-----------|
| Adoption | 30% | >X usuarios activos/semana | <X |
| Engagement | 25% | Responde en <Xh | No responde |
| ROI percibido | 25% | Menciona casos de uso | No sabe el ROI |
| Relación | 20% | Sponsor accesible | Solo habla con admin |

**Fase 3 — Renovación y expansión**

*Proceso de renovación 90 días antes:* cronograma exacto
*Identificación de oportunidades de expansión:* señales y momento

**Fase 4 — Advocacy**
Cómo convertir a los mejores clientes en: caso de estudio / referencia para ventas / speaker en tu evento / review en G2.

### 📋 Templates clave
- Email de kickoff
- Template de Success Plan
- Agenda de QBR
- Email de renovación (90 días antes)
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Customer success enterprise, retención, expansion revenue',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'De freelance generalista a especialista de nicho: posiciónate para cobrar el doble',
                'description'       => 'Define tu nicho de especialización, reposiciona tu oferta y comunica tu nueva propuesta de valor. El proceso paso a paso para pasar de competir por precio a ser la opción obvia en tu nicho.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de negocio para freelancers especializado en posicionamiento y estrategia de especialización.

Mi situación actual:
- Qué hago actualmente: [describe tus servicios]
- Tipo de clientes que tengo: [perfil actual — variado / nicho / otro]
- Tarifa actual: [€/hora o €/proyecto]
- Lo que más disfruto haciendo: [tipo de proyecto o problema]
- El proyecto del que más orgulloso estás: [describe brevemente]
- Sector o tipo de empresa con quien mejores resultados has tenido: [sector/tipo]
- Miedo principal de especializarte: [perder clientes / equivocarte de nicho / otro]

## Estrategia de Especialización — [Tu nombre]

### 🔍 Análisis de tu nicho ideal

**Cruce de 3 variables:**
1. Dónde tienes más expertise (tus mejores proyectos)
2. Dónde el mercado paga más (precio + volumen de demanda)
3. Dónde disfrutas trabajar (sostenibilidad a largo plazo)

**Tu nicho recomendado:**
[Nombre del nicho] = [Tipo de cliente] + [Problema específico] + [Tu habilidad diferencial]

**Por qué este nicho y no otros:**
Análisis de demanda, competencia y potencial de pricing.

### 🎤 Nueva propuesta de valor

**Headline generalista (antes):** "Diseñador / Developer / Copywriter freelance"

**Headline especializado (después):**
"[Resultado específico] para [tipo de empresa] que [situación/problema concreto]"
Ejemplo: "Diseño sistemas de design tokens para startups SaaS que quieren escalar su equipo de producto"

**Elevator pitch de especialista (30 segundos):**
[Texto completo — natural, sin sonar a anuncio]

### 📋 Plan de transición en 90 días

**Mes 1 — Preparación sin quemar nada:**
- Qué cambiar en el perfil de LinkedIn y portfolio
- Qué proyectos publicar como casos de estudio del nicho
- Cómo hablar con clientes actuales sin asustarlos

**Mes 2 — Primeras acciones de posicionamiento:**
- Dónde estar presente en el nicho (comunidades, eventos, publicaciones)
- El primer contenido de nicho que publicar

**Mes 3 — Primera subida de tarifa:**
- Cuándo y cómo subir precios con el nuevo posicionamiento
- Cómo gestionar el primer "no" por precio como especialista

### 💰 Impacto esperado en tarifa
Por qué los especialistas cobran 2-3x más y cómo justificarlo ante nuevos clientes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Posicionamiento freelance, estrategia de nicho, pricing',
                'vote_score'        => 47,
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
