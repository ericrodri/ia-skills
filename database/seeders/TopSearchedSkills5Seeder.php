<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills5Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'SEO local: posiciona un negocio físico en Google Maps y búsquedas locales',
                'description'       => 'Estrategia completa de SEO local para negocios físicos: optimización de Google Business Profile, keywords locales, gestión de reseñas y link building local para dominar las búsquedas "cerca de mí".',
                'prompt_content'    => <<<'PROMPT'
Eres un especialista en SEO local con experiencia posicionando negocios físicos en los primeros resultados del Local Pack de Google.

Mi negocio:
- Tipo de negocio: [restaurante / clínica / tienda / taller / otro]
- Ciudad y barrio: [ubicación]
- Servicios principales: [lista]
- Competidores locales principales: [nombres]
- Estado actual de Google Business Profile: [sin reclamar / básico / optimizado]
- Reseñas actuales: [N reseñas, puntuación media]
- Web actual: [sí/no — URL]

## Estrategia SEO Local — [Negocio] — [Ciudad]

### 📍 Optimización de Google Business Profile (GBP)

**Categorías recomendadas:**
- Categoría principal: [la más específica disponible]
- Categorías secundarias: [lista de 5-10]

**Descripción optimizada (750 caracteres):**
[Texto completo con keywords locales naturalmente integradas]

**Atributos a activar:** [lista de atributos relevantes para tu sector]

**Preguntas y respuestas a crear:**
5 Q&A que los clientes buscan, con respuesta optimizada con keywords.

### 🔑 Keywords locales prioritarias
| Keyword | Volumen estimado | Dificultad | Tipo de intención |
|---------|-----------------|-----------|-----------------|
| "[servicio] en [ciudad]" | ... | ... | Transaccional |
| "[servicio] cerca de mí" | ... | ... | Transaccional |

### ⭐ Sistema de gestión y generación de reseñas
- Template de email/mensaje para pedir reseña a clientes satisfechos
- Cómo responder a reseñas negativas (template)
- Proceso de 30 días para doblar el número de reseñas

### 🔗 Link building local
10 fuentes de backlinks locales de alta relevancia (directorios, asociaciones, medios locales).

### 📱 Contenido en GBP (Google Posts)
Calendario de posts mensuales con ejemplos de texto y timing óptimo.

### 📊 KPIs de SEO local a monitorizar mensualmente
Las métricas del panel de GBP que predicen más visitas y llamadas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 20,
                'use_case'          => 'SEO local, negocios físicos, Google Maps',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Plan de migración de base de datos a producción sin downtime',
                'description'       => 'Diseña y ejecuta migraciones de schema en base de datos de producción sin interrumpir el servicio: estrategia expand-contract, rollback plan, feature flags y checklist de validación post-migración.',
                'prompt_content'    => <<<'PROMPT'
Eres un database engineer con experiencia en migraciones zero-downtime en sistemas con millones de registros y tráfico 24/7.

Mi migración:
- Base de datos: [PostgreSQL / MySQL / MongoDB / otro]
- Cambio a realizar: [añadir columna / renombrar / eliminar / cambiar tipo / índice / otra tabla]
- Tamaño de la tabla afectada: [N filas / GB]
- Tráfico en producción: [N req/s o "alta carga"]
- Framework/ORM: [Laravel / Django / Rails / Prisma / otro]
- ¿Tienes rollback fácil disponible? [sí/no]

## Plan de Migración Zero-Downtime — [Cambio]

### 🔍 Análisis de riesgo
- Operaciones que bloquean tabla: [cuáles aplican a tu cambio]
- Tiempo estimado de la migración: [basado en tamaño de tabla]
- Riesgo de bloqueo de lecturas/escrituras: [alto/medio/bajo]
- Estrategia recomendada: [expand-contract / online DDL / blue-green / copy trick]

### 📋 Plan paso a paso (expand-contract pattern)

**Fase 1 — EXPAND (deploy sin romper nada):**
```sql
-- Código exacto de la migración fase 1
```
```php/python
// Cambios en el código de la aplicación para la fase 1
// El código debe funcionar con el schema viejo Y el nuevo
```

**Fase 2 — BACKFILL (rellenar datos históricos):**
```sql
-- Script de backfill en batches para no saturar la BD
-- Procesa N filas a la vez con sleep entre batches
```

**Fase 3 — CONTRACT (eliminar lo viejo):**
```sql
-- Solo ejecutar cuando el código ya no usa el schema viejo
```

### 🔄 Rollback plan
Cómo deshacer cada fase si algo sale mal, con los comandos exactos.

### 🧪 Checklist de validación post-migración
- [ ] Integridad de datos verificada
- [ ] Performance de queries críticas medida
- [ ] Índices creados correctamente
- [ ] Aplicación funcionando sin errores en staging
- [ ] Monitoring activado para detectar degradación

### ⏱️ Runbook del día de la migración
Timeline hora a hora con responsables y puntos de go/no-go.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Database migrations, DevOps, SRE',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Auditoría de accesibilidad WCAG 2.2 y plan de remediación priorizado',
                'description'       => 'Evalúa la accesibilidad de tu interfaz con los criterios WCAG 2.2, identifica las barreras que afectan a usuarios con discapacidad y genera un plan de remediación ordenado por impacto y esfuerzo.',
                'prompt_content'    => <<<'PROMPT'
Eres un especialista en accesibilidad web certificado CPACC con experiencia en auditorías WCAG 2.2 para productos digitales.

Producto a auditar:
- URL o descripción de la interfaz: [URL o describe la UI]
- Tipo de producto: [web / app móvil / webapp]
- Stack tecnológico: [React / Vue / Angular / HTML/CSS vanilla]
- Nivel WCAG objetivo: [A / AA (mínimo legal en muchos países) / AAA]
- Contexto de uso: [público general / sector salud / sector público / otro]

## Auditoría de Accesibilidad WCAG 2.2 — [Producto]

### 📊 Resumen ejecutivo
- Nivel de conformidad actual estimado: [A / AA parcial / no conforme]
- Issues críticos encontrados: N
- Issues moderados: N
- Issues menores: N
- Riesgo legal: [alto/medio/bajo según sector y legislación aplicable]

### 🚨 Issues críticos (bloquean el uso completamente)

Para cada issue:
**Issue [N]: [Nombre del problema]**
- Criterio WCAG afectado: [ej: 1.1.1 Non-text Content (A)]
- Descripción: qué falla y cómo afecta a usuarios con discapacidad
- Usuarios afectados: [ciegos / baja visión / motriz / cognitivo / otro]
- Cómo detectarlo: [herramienta o test manual]
- Solución técnica:
```html/css/js
// Código exacto de la corrección
```
- Esfuerzo: [horas estimadas]

### ⚠️ Issues moderados (dificultan pero no bloquean)
[Mismo formato, menos detalle]

### ✅ Qué está bien (para no romper)
Elementos accesibles que el equipo ha implementado correctamente.

### 📋 Plan de remediación priorizado
| Prioridad | Issue | Criterio | Esfuerzo | Sprint |
|-----------|-------|---------|---------|--------|
| 1 | ... | 1.1.1 | 2h | Sprint 1 |

### 🧰 Herramientas de testing recomendadas
- Automáticas: [axe DevTools, Lighthouse, WAVE]
- Manuales: [lectores de pantalla NVDA/VoiceOver, teclado only]
- Proceso de testing continuo para no regresar
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Accesibilidad web, WCAG, diseño inclusivo',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Account Based Marketing (ABM): campaña hiperpersonalizada para tus 20 cuentas objetivo',
                'description'       => 'Diseña una campaña ABM completa para tus cuentas de mayor potencial: investigación de la cuenta, mapa de stakeholders, mensajes personalizados por rol y secuencia de touchpoints multicanal.',
                'prompt_content'    => <<<'PROMPT'
Eres un Account Based Marketing strategist con experiencia en campañas ABM que generan pipeline en cuentas enterprise.

Contexto de mi empresa:
- Producto/servicio: [descripción]
- Ticket medio: [€]
- Ciclo de venta: [X meses]
- Equipo de ventas y marketing: [N personas]

Cuenta objetivo a trabajar:
- Nombre de la empresa: [nombre]
- Sector: [industria]
- Tamaño: [empleados / facturación]
- Por qué es una cuenta prioritaria: [motivo]
- Contactos que ya conoces dentro: [nombre, cargo — si tienes]
- Interacciones previas: [ninguna / visitaron la web / asistieron a webinar / otro]

## Campaña ABM — [Nombre cuenta] — [Trimestre]

### 🔍 Investigación de la cuenta (antes de contactar)

**Inteligencia de negocio:**
- Noticias recientes que puedo usar como trigger: [cómo buscarlo]
- Iniciativas estratégicas públicas (earnings, press releases): [qué buscar]
- Señales de intención de compra: [herramientas y qué buscar]
- Tecnología que usan actualmente (tech stack): [cómo detectarlo]

**Mapa de stakeholders:**
| Rol | Nombre (si se conoce) | Pain point principal | Influencia | Postura esperada |
|-----|---------------------|---------------------|-----------|----------------|
| Decision maker | ... | ... | Alta | ... |
| Champion | ... | ... | Media | ... |
| Blocker | ... | ... | Alta | ... |

### 📝 Mensajes por rol (hiperpersonalizados)

Para el Decision Maker (C-level):
```
Asunto: [hook con dato de su empresa]
[Email de 4 líneas con ROI específico para su rol]
```

Para el Champion (Director/Manager):
```
[Email centrado en su pain point operacional]
```

Para el Blocker (Finanzas/Legal/IT):
```
[Email que aborda sus objeciones antes de que las plantee]
```

### 🗓️ Secuencia de touchpoints (8 semanas)
| Semana | Canal | Acción | Mensaje/Contenido |
|--------|-------|--------|-----------------|
| 1 | LinkedIn | Connect request | [nota de conexión] |
| 1 | Email | 1er outreach | [email personalizado] |
| 2 | LinkedIn | Engagement | [comentar post suyo] |

### 🎁 Contenido y regalos de alto valor
Ideas de contenido hiperpersonalizado para esta cuenta (mini-audit, benchmark de sector, informe personalizado).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'ABM, enterprise sales, marketing B2B',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Sprint planning efectivo: del backlog priorizado al sprint comprometido en 90 minutos',
                'description'       => 'Facilita un sprint planning que termina con un equipo comprometido y un sprint goal claro. Con agenda, criterios de selección de tickets, técnica de estimación y gestión de la capacidad real del equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Agile Coach con experiencia facilitando sprint plannings que generan compromiso real, no teatro ágil.

Contexto de mi equipo:
- Tamaño del sprint: [1 / 2 semanas]
- Equipo: [N developers + N QA + N diseñadores]
- Velocidad media de los últimos 3 sprints: [X puntos]
- Bajas o vacaciones este sprint: [N días de capacidad perdidos]
- Deuda técnica o bugs pendientes: [X% del sprint reservado]
- Estado del backlog: [bien priorizado / caótico / regular]
- Herramienta: [Jira / Linear / Notion / otra]

Genera el framework completo:

## Sprint Planning [Sprint N] — [Fechas]

### 📊 Capacidad real del sprint
- Días hábiles: X días × N personas = X persona-días
- Menos: vacaciones/bajas (X días)
- Menos: ceremonias y overhead estimado (X días)
- Menos: soporte y bugs inesperados (X% buffer)
- **Capacidad neta: X puntos / X persona-días**

### 🎯 Sprint Goal
Template para formular el sprint goal que el equipo pueda memorizar:
"Al final del sprint, [usuario] podrá [hacer X] para [conseguir Y]."

### 📋 Criterios de selección de tickets (qué entra y qué no)
Las 5 preguntas que hacer a cada ticket antes de comprometerlo.

### ⚖️ Técnica de estimación recomendada para tu equipo
- Cómo hacer Planning Poker en 30 segundos por ticket
- Cómo gestionar el debate cuando hay disparidad de estimaciones
- Cuándo parar de debatir y decidir

### 🗓️ Agenda de la sesión (90 minutos)
| Tiempo | Actividad | Responsable | Output |
|--------|-----------|-------------|--------|
| 0-10 min | Revisión de capacidad y velocidad | SM | Capacidad confirmada |
| 10-20 min | Sprint Goal | PM + equipo | Goal comprometido |
| 20-70 min | Selección y estimación de tickets | Equipo | Sprint backlog |
| 70-85 min | Distribución de tareas | Equipo | Ownership claro |
| 85-90 min | Compromisos y riesgos | SM | Lista de impedimentos |

### ⚠️ Señales de que el sprint planning no está funcionando
Y cómo corregirlas en el momento.

### 📋 Template de definición de "Ready" para tickets
Los 5 criterios que un ticket debe cumplir antes de poder entrar al sprint planning.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Agile, Scrum, gestión de equipos de producto',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Programa de mentoring interno: diseño, matching y seguimiento en 90 días',
                'description'       => 'Lanza un programa de mentoring interno que desarrolla talento, mejora la retención y transfiere conocimiento crítico. Con criterios de matching mentor-mentee, estructura de sesiones y métricas de éxito.',
                'prompt_content'    => <<<'PROMPT'
Eres una Learning & Development specialist con experiencia diseñando programas de mentoring internos que generan resultados medibles en empresas de 50-500 personas.

Contexto de mi empresa:
- Número de empleados: [N]
- Sectores y roles principales: [lista]
- Objetivo del programa: [desarrollo de liderazgo / retención / transferencia de conocimiento / onboarding]
- Duración del programa: [3 / 6 / 12 meses]
- Número de parejas mentor-mentee que quieres lanzar: [N]
- Recursos disponibles: [tiempo de RRHH, presupuesto de formación]
- ¿Tienes experiencia previa con mentoring? [sí/no]

## Programa de Mentoring — [Empresa] — [Año]

### 🎯 Diseño del programa

**Modelo de mentoring:** [tradicional 1:1 / reverse / peer / grupal — cuál se ajusta a tus objetivos]

**Criterios de elegibilidad:**
- Mentores: [experiencia mínima, nivel, perfil]
- Mentees: [criterios de selección, cómo postulan]

**Estructura de la relación (por mes):**
- Frecuencia de sesiones: [X sesiones/mes de X minutos]
- Formato: [presencial / videollamada / híbrido]
- Agenda tipo de una sesión: [estructura de los 60 minutos]

### 🔗 Sistema de matching mentor-mentee

**Formulario para mentores** (5 preguntas):
[Preguntas que capturan sus fortalezas y disponibilidad]

**Formulario para mentees** (5 preguntas):
[Preguntas que capturan sus objetivos y preferencias]

**Algoritmo de matching:**
Criterios ponderados para crear la mejor pareja posible.

**Presentación de la pareja:**
Email template para hacer la introducción de forma cálida y profesional.

### 📅 Cronograma del programa (90 días detallado)
| Semana | Actividad | Responsable |
|--------|-----------|-------------|
| 1 | Kick-off training para mentores | RRHH |
| 2 | Matching y presentaciones | RRHH |
| 3 | Primera sesión con agenda guiada | Pareja |
| ... | ... | ... |

### 📊 Métricas de éxito
Cómo medir el impacto real del programa en retención, promotion rate y satisfacción.

### ⚠️ Los 5 errores que matan los programas de mentoring
Y cómo evitarlos desde el diseño.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Desarrollo de talento, L&D, retención',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Valoración de startup pre-revenue para primera ronda de inversión',
                'description'       => 'Calcula el rango de valoración razonable para tu startup en etapa pre-revenue usando los métodos que usan los inversores: Berkus, Scorecard, VC Method y comparables. Con narrativa para defender tu valoración.',
                'prompt_content'    => <<<'PROMPT'
Eres un asesor de M&A y fundraising con experiencia en valoración de startups early-stage y en preparar a fundadores para negociar con inversores.

Contexto de mi startup:
- Descripción del producto/servicio: [qué hace]
- Etapa: [idea / MVP / beta / primeros clientes]
- Mercado objetivo (TAM): [€ o "no lo tenemos calculado"]
- Equipo fundador: [N personas, background relevante]
- Tracción actual: [usuarios, descargas, LOIs, pilotos — lo que tengas]
- Propiedad intelectual o ventaja técnica: [sí/no — describe]
- Competencia principal: [nombres y última valoración conocida]
- Importe que buscas levantar: [€]
- Dilución máxima que aceptarías: [X%]

## Valoración Pre-Revenue — [Startup] — [Fecha]

### 📊 Método 1: Scorecard Method
Valora tu startup comparando con el deal promedio del mercado para tu etapa y geografía.

| Factor | Peso | Tu puntuación (0.0-1.5x) | Justificación |
|--------|------|------------------------|---------------|
| Fortaleza del equipo | 30% | X | ... |
| Tamaño del mercado | 25% | X | ... |
| Producto/tecnología | 15% | X | ... |
| Entorno competitivo | 10% | X | ... |
| Canales de venta | 10% | X | ... |
| Necesidad adicional de inversión | 5% | X | ... |
| Otros factores | 5% | X | ... |
| **Valoración resultante** | | **€X** | |

### 📊 Método 2: Berkus Method
Asigna valor a los 5 elementos de riesgo reducidos.

### 📊 Método 3: VC Method (hacia atrás desde el retorno)
Si el inversor espera 10x en 7 años, ¿cuánto puede pagar hoy?

### 🎯 Rango de valoración resultante
- Mínimo: €X | Medio: €X | Máximo: €X
- **Valoración a defender: €X — €X (post-money)**
- Dilución implícita con tu raise: X%

### 💬 Cómo defender tu valoración ante el inversor
Los 3 argumentos más sólidos y cómo responder a "¿por qué tanto?" sin perder posición.

### ⚠️ Señales de que estás pidiendo demasiado (o muy poco)
Cómo calibrar si tu valoración está en mercado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Fundraising, startup finance, investor relations',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contrato de distribución y agencia comercial con protección para ambas partes',
                'description'       => 'Redacta un contrato de distribución o agencia comercial que proteja tanto al fabricante/marca como al distribuidor/agente. Con cláusulas de exclusividad, territorio, objetivos mínimos y terminación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado mercantilista especializado en contratos de distribución y agencia comercial bajo la ley española y el Reglamento UE de exención por categorías.

Contexto del contrato:
- Tipo: [distribución / agencia comercial / franquicia / comisión]
- Producto o servicio objeto del contrato: [descripción]
- Fabricante/Marca (concedente): [nombre]
- Distribuidor/Agente: [nombre]
- Territorio: [zona geográfica — España / Europa / mundial]
- Exclusividad: [exclusiva para el agente / no exclusiva / mixta]
- Duración: [X años o indefinido]
- Objetivos mínimos de venta (si los hay): [€ o unidades]

## CONTRATO DE [DISTRIBUCIÓN / AGENCIA COMERCIAL]

### 1. Partes contratantes e identificación
Datos completos de ambas partes.

### 2. Objeto del contrato
Productos/servicios, territorio y alcance de la relación comercial.

### 3. Exclusividad y restricciones territoriales
Cláusula de exclusividad redactada conforme al Reglamento 330/2010/UE para ser válida.

### 4. Obligaciones del Distribuidor/Agente
- Objetivos mínimos de venta y consecuencias de no alcanzarlos
- Obligaciones de stock, soporte y servicio postventa
- Restricciones de competencia durante la vigencia

### 5. Obligaciones del Fabricante/Marca
- Suministro, precios y condiciones de pago
- Soporte de marketing y material promocional
- Información de producto y formación

### 6. Precio, comisiones y condiciones económicas
Estructura de precios, descuentos autorizados y cómo se calculan las comisiones.

### 7. Duración y terminación
- Preaviso para terminación ordinaria
- Causas de terminación extraordinaria (con lista taxativa)
- Consecuencias de la terminación (indemnización del agente — Art. 28 LCA)

### 8. Cláusula de no competencia post-contractual
Límites según la ley (máximo 2 años, zona y productos específicos).

### 9. Confidencialidad y protección de datos
Información protegida y obligaciones RGPD.

### 10. Resolución de conflictos
Mediación, arbitraje o jurisdicción ordinaria — cuál recomendamos y por qué.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Contratos comerciales, distribución, expansión de negocio',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Chatbot de soporte: diseña los flujos conversacionales que resuelven el 40% de los tickets',
                'description'       => 'Construye los árboles de decisión y flujos de conversación para un chatbot de soporte que resuelve las preguntas más frecuentes sin agente humano, con escalado elegante cuando es necesario.',
                'prompt_content'    => <<<'PROMPT'
Eres un Conversational Design specialist con experiencia construyendo chatbots de soporte que reducen el volumen de tickets sin frustrar al usuario.

Contexto:
- Producto/servicio: [descripción]
- Herramienta de chatbot: [Intercom / Drift / Crisp / Zendesk / custom / otra]
- Los 10 tickets más frecuentes que recibes: [lista con % del volumen total si la tienes]
- Tono de comunicación de tu marca: [formal / cercano / técnico]
- Horario del equipo humano: [L-V 9-18h / 24/7 / otro]

## Diseño de Chatbot de Soporte — [Producto]

### 🗺️ Árbol de decisión principal

```
Saludo inicial: "[Texto de bienvenida — máx. 2 líneas]"

¿En qué puedo ayudarte?
├── 🔑 "Problema con mi cuenta / acceso"
│   ├── "No recuerdo mi contraseña" → [Flujo 1]
│   ├── "No puedo entrar" → [Flujo 2]
│   └── "Quiero cambiar mis datos" → [Flujo 3]
├── 💰 "Facturación y pagos"
│   ├── "No entiendo mi factura" → [Flujo 4]
│   └── "Quiero cancelar" → [Flujo 5 — retención]
├── 🛠️ "Problema técnico"
│   └── → [Preguntas de diagnóstico]
└── ❓ "Otra consulta" → [Escalado a agente]
```

### 📝 Flujos completos (los 5 más frecuentes)
Para cada flujo:
- Mensajes del bot (texto exacto, tono de marca)
- Opciones que ve el usuario
- Condiciones de escalado a agente humano
- Mensaje de handoff al agente con contexto recogido

### ✍️ Banco de respuestas rápidas (FAQ)
Las 20 preguntas más frecuentes con la respuesta exacta del bot (máx. 3 frases cada una).

### 🔄 Protocolo de escalado inteligente
Cuándo y cómo transferir al agente humano sin que el usuario tenga que repetir todo desde cero.

### 📊 Métricas del chatbot a optimizar
Tasa de contención, CSAT del bot, temas sin respuesta (para crear nuevos flujos).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Automatización de soporte, chatbot design, self-service',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Portfolio freelance que convierte: estructura y caso de estudio que cierra proyectos',
                'description'       => 'Diseña la estructura de tu portfolio y escribe el caso de estudio perfecto que transforma visitantes en clientes. Con el formato que usan los freelancers que cobran el doble que la competencia.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de marketing para freelancers especializado en portfolios y posicionamiento que generan inbound.

Mi perfil:
- Tipo de servicio: [diseño / desarrollo / copy / fotografía / consultoría / otro]
- Especialidad o nicho: [si tienes uno]
- Experiencia: [N años]
- 3 proyectos más interesantes que has hecho: [describe brevemente cada uno]
- Tipo de cliente que quieres atraer: [perfil ideal]
- Portfolio actual: [sí/no — herramienta: Behance / web propia / Notion / sin portfolio]

## Estructura del Portfolio — [Tu nombre/marca]

### 🏗️ Arquitectura del portfolio (qué páginas y en qué orden)
Estructura óptima según tu tipo de servicio y los proyectos que tienes.

### ✍️ Caso de estudio perfecto (el formato que convierte)
Para tu proyecto más representativo, genera el caso de estudio completo:

---
**[Título del proyecto — empresa o tipo de reto]**

**El reto en una frase:**
[Qué problema tenía el cliente antes de contratarte]

**Mi rol:**
[Exactamente qué hice — no lo que "el equipo" hizo]

**El proceso (3-5 pasos, sin jerga):**
1. **[Fase 1]:** qué hice, qué decisiones tomé y por qué
2. ...

**El resultado (con números siempre que sea posible):**
→ [Métrica 1 mejorada X%]
→ [Métrica 2: de X a Y]
→ [Impacto cualitativo si no hay números]

**Lo que aprendí (opcional pero diferenciador):**
Una línea honesta sobre el reto más grande del proyecto.

**[Imagen destacada o descripción visual]**

---

### 🧲 Página de inicio: el copy que hace que los clientes contacten
Estructura y texto de la home de tu portfolio con:
- Headline que posiciona (no "soy diseñador freelance")
- Social proof en las primeras 3 líneas
- CTA con fricción mínima

### 💬 Testimonios que venden (cómo pedirlos)
Template de email para conseguir testimonios específicos y útiles, no genéricos.

### 📣 Cómo distribuir el portfolio para conseguir los primeros clientes inbound
Los 3 canales donde publicar tu portfolio según tu tipo de servicio.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Marketing personal, portfolio, captación de clientes freelance',
                'vote_score'        => 44,
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
