<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills77Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'ABM (Account-Based Marketing) — marketing hiperpersonalizado para tus cuentas clave',
                'description'      => 'Diseña e implementa una estrategia de Account-Based Marketing para las 50 cuentas más importantes de tu pipeline: selección, personalización y coordinación con ventas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Account-Based Marketing (ABM) con experiencia en empresas SaaS B2B con ciclos de venta enterprise. Necesito diseñar e implementar una estrategia ABM para atacar las cuentas más estratégicas de nuestro pipeline.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántas cuentas target tienes identificadas o quieres atacar?
2. ¿Cuál es el ACV objetivo y el ciclo de venta típico en enterprise?
3. ¿Qué canales de marketing tienes disponibles? (paid, content, eventos, email, social)
4. ¿Cuántas personas hay en el equipo de marketing y cuántas en ventas?
5. ¿Tienes ya datos de intent (señales de compra) de estas cuentas o empezamos desde cero?

## Los 3 Tipos de ABM y Cuándo Usar Cada Uno

| Tipo | Escala | Personalización | Recursos | Cuándo usar |
|---|---|---|---|---|
| ABM 1:1 (Strategic) | 5-15 cuentas | Máxima (campañas únicas por cuenta) | Alto | Cuentas de máximo valor, ciclo > 6 meses |
| ABM 1:few (Programmatic) | 15-100 cuentas | Alta (clusters por industria/perfil) | Medio | Segmento enterprise prioritario |
| ABM 1:many (Scaled) | 100-500 cuentas | Media (mensajes por segmento) | Bajo | Mid-market, escalado de ABM |

## Selección de Cuentas: El Account Tiering

No todas las cuentas merecen el mismo esfuerzo. Define los tiers:

**Tier 1 — Cuentas Estratégicas (10-15 cuentas)**
Criterios:
- ACV potencial > [tu umbral]
- Fit con tu ICP: industria, tamaño, modelo de negocio
- Propensidad de compra: señales de intent recientes
- Influencia de mercado (si cierras esta cuenta, abre puertas)
- Relación existente (alguien en tu empresa conoce a alguien)

**Tier 2 — Cuentas de Alto Potencial (30-50 cuentas)**
Criterios similares pero ACV o señales de intent algo menores. Requieren personalización por cluster, no individual.

**Tier 3 — Pipeline de ABM escalado (hasta 200 cuentas)**
Cuentas que encajan con el ICP pero no hay señal activa. Trabajo de awareness y nurturing segmentado.

**Fuentes de datos para la selección:**
| Herramienta | Qué aporta |
|---|---|
| Bombora / G2 Buyer Intent | Señales de intent (búsquedas activas sobre tu categoría) |
| LinkedIn Sales Navigator | Mapping de stakeholders en la cuenta |
| Clearbit / Apollo | Enriquecimiento de datos de empresa |
| CRM propio | Historial de engagement, oportunidades anteriores |

## El Account Plan: Qué Necesitas Saber de Cada Cuenta Tier 1

Para cada cuenta Tier 1, construye un account plan con:

**1. Mapa de stakeholders:**
| Nombre | Cargo | Rol en la decisión | Canal preferido | Relación actual |
|---|---|---|---|---|
| [CMO] | Comprador económico | Aprueba el budget | LinkedIn, email | Frío |
| [VP Marketing Ops] | Influenciador técnico | Evalúa la solución | Email, demo | Contacto previo |
| [Head de Datos] | Usuario final | Usa el producto | LinkedIn | Desconocido |

**2. Triggers de compra identificados:**
- ¿Han contratado recientemente un VP que viene de empresas que usan tu solución?
- ¿Tienen una iniciativa estratégica que tu producto apoya?
- ¿Están en proceso de digitalización, expansión o cambio de proveedor?

**3. Mensaje personalizado por cuenta:**
El mensaje ABM no es "somos los mejores en X". Es "sabemos que [empresa] está trabajando en [reto específico] y aquí hay cómo empresas como la vuestra lo han resuelto con [tu solución]".

## Las Tácticas ABM por Canal

**Contenido personalizado:**
- Landing page personalizada por cuenta (nombre de empresa en el hero, caso de éxito del mismo sector)
- Informe personalizado: "El estado de [tema] en la industria [de la cuenta]"
- Video de 2 minutos del CEO o Account Executive dirigido específicamente a la cuenta

**Paid ABM (Programmatic Advertising):**
- LinkedIn Matched Audiences: sube la lista de cuentas y personas target
- Display retargeting con mensajes personalizados por cluster
- IP-based targeting (DemandBase, Terminus): muestra anuncios a las IPs de las oficinas de la cuenta

**Eventos y experiencias:**
- Invitación exclusiva a roundtable privado con 10-15 ejecutivos del mismo sector
- Patrocinio de eventos donde asisten tus cuentas target
- Executive dinner: cena privada donde tu CEO o VP se sienta con los decisores de las cuentas

**Secuencias de outreach coordinadas (Marketing + Ventas):**
| Día | Canal | Acción | Responsable |
|---|---|---|---|
| 1 | LinkedIn | Conectar con el AE y comentar post del prospect | AE |
| 3 | Email | Enviar contenido personalizado (informe del sector) | Marketing |
| 5 | LinkedIn | Follow-up con referencia al contenido | AE |
| 8 | Email | Caso de éxito del mismo sector | Marketing |
| 12 | Llamada | AE llama referenciando el contenido | AE |
| 15 | LinkedIn | Video mensaje personalizado | AE |

## Métricas de ABM

ABM no se mide en leads. Se mide en engagement y pipeline de cuentas:

| Métrica | Definición | Objetivo |
|---|---|---|
| Account Engagement Rate | % de cuentas target con ≥1 touchpoint significativo | > 60% en 90 días |
| Pipeline Velocity por cuenta | Velocidad de avance de las cuentas ABM en el pipeline | Comparar vs. no-ABM |
| Win Rate en cuentas ABM | % de deals cerrados en cuentas que recibieron ABM | > 2x win rate no-ABM |
| Multi-thread | % de deals con ≥3 stakeholders enganchados | > 70% en Tier 1 |
| Revenue influenced | Revenue cerrado en cuentas que recibieron ABM | Reportar al board |

## Alineación Marketing-Ventas: El SLA de ABM

ABM fracasa cuando marketing y ventas no están sincronizados.

**Compromisos de marketing:**
- Creará materiales personalizados en < 5 días hábiles por solicitud del AE
- Reportará el engagement de la cuenta semanalmente al AE asignado
- Activará paid advertising en la cuenta antes de que el AE inicie el outreach

**Compromisos de ventas:**
- Ejecutará la secuencia de outreach en los plazos acordados
- Actualizará el CRM con el feedback de cada interacción para que marketing ajuste mensajes
- Informará a marketing antes de un reunión clave para preparar contenido de apoyo

## Entregables

Con el contexto que me des, produce:
1. Plantilla de account tiering (tabla de scoring para seleccionar las cuentas Tier 1)
2. Account plan de una cuenta Tier 1 de ejemplo con mapa de stakeholders y mensajes
3. Secuencia de outreach de 15 días coordinada marketing + ventas
4. Dashboard de métricas ABM (qué medir, con qué frecuencia, qué herramientas)
5. SLA de alineación marketing-ventas para el programa ABM
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar e implementar un programa ABM para las cuentas enterprise más estratégicas, coordinando marketing y ventas con personalización real',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Monorepo con Turborepo o Nx — gestiona múltiples paquetes sin perder velocidad de CI',
                'description'      => 'Aprende a configurar y escalar un monorepo con Turborepo o Nx: gestión de dependencias, caching inteligente, pipelines de CI optimizados y código compartido entre apps.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero senior de plataforma con experiencia configurando y escalando monorepos en equipos de producto con múltiples aplicaciones y paquetes compartidos. Necesito diseñar la arquitectura de nuestro monorepo y configurar el tooling para mantener la velocidad de desarrollo a medida que el proyecto crece.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué tienes actualmente: múltiples repos separados que quieres migrar, o empiezas desde cero?
2. ¿Cuántas aplicaciones y paquetes compartidos prevés tener?
3. ¿Cuál es el stack tecnológico? (Next.js, Node, NestJS, React Native, etc.)
4. ¿Cuántas personas trabajan en el proyecto?
5. ¿Cuál es tu CI/CD actual? (GitHub Actions, GitLab CI, CircleCI)

## Monorepo vs. Polyrepo: Cuándo Elegir Monorepo

| Criterio | Monorepo | Polyrepo |
|---|---|---|
| Código compartido entre apps | ✅ Sencillo, cambios atómicos | ❌ Requiere publicar y versionar paquetes |
| Visibilidad del código entre equipos | ✅ Total por defecto | ❌ Depende de permisos y acceso |
| Overhead de configuración inicial | ❌ Mayor | ✅ Menor |
| Escala de equipos grandes (> 50 devs) | ✅ Con buen tooling | ✅ Más natural con ownership por equipo |
| Cambios coordinados multi-app | ✅ Un solo PR | ❌ Múltiples PRs coordinados |
| CI/CD sin optimización | ❌ Lento (compila todo) | ✅ Solo el repo afectado |
| CI/CD con caching (Turborepo/Nx) | ✅ Tan rápido como polyrepo | N/A |

## Turborepo vs. Nx: La Elección

| Aspecto | Turborepo | Nx |
|---|---|---|
| Curva de aprendizaje | Baja (config mínima) | Media (más conceptos) |
| Caching | Excelente (local + remoto) | Excelente (local + remoto) |
| Plugins y generators | Limitado | Muy extenso |
| Integración con frameworks | Buena | Excelente (presets para Next, React, NestJS, etc.) |
| Visualización del grafo | Básico | `nx graph` interactivo |
| Mejor para | Proyectos JS/TS, equipos pequeños-medios | Proyectos grandes, múltiples lenguajes |

## Estructura de Carpetas del Monorepo

```
monorepo/
├── apps/
│   ├── web/                    # Next.js app principal
│   ├── admin/                  # Panel de administración
│   └── api/                    # NestJS backend
├── packages/
│   ├── ui/                     # Design system compartido
│   ├── config/                 # ESLint, TypeScript configs
│   │   ├── eslint/
│   │   └── typescript/
│   ├── utils/                  # Utilidades compartidas
│   └── types/                  # Tipos TypeScript compartidos
├── tooling/
│   └── scripts/                # Scripts de build, deploy
├── turbo.json                  # Config de Turborepo
├── package.json                # Root package.json
└── pnpm-workspace.yaml         # Workspace config (pnpm)
```

## Configuración de Turborepo

**turbo.json:**
```json
{
  "$schema": "https://turbo.build/schema.json",
  "pipeline": {
    "build": {
      "dependsOn": ["^build"],
      "outputs": [".next/**", "dist/**", "!.next/cache/**"]
    },
    "lint": {
      "outputs": []
    },
    "test": {
      "dependsOn": ["build"],
      "outputs": ["coverage/**"]
    },
    "dev": {
      "cache": false,
      "persistent": true
    },
    "typecheck": {
      "dependsOn": ["^typecheck"]
    }
  }
}
```

**Conceptos clave:**
- `dependsOn: ["^build"]`: ejecuta el `build` de las dependencias primero (el `^` significa "dependencies de")
- `outputs`: qué archivos se cachean. Si no cambian los inputs, Turborepo restaura los outputs del cache sin ejecutar.
- `cache: false`: para tareas que no deben cachearse (dev server, watch)
- `persistent: true`: para procesos que no terminan (servidores de desarrollo)

## Caching: La Magia de Turborepo/Nx

El caching es lo que hace que un monorepo sea tan rápido como un polyrepo.

**Cómo funciona:**
1. Turborepo calcula un hash de los inputs (código fuente + variables de entorno + config)
2. Si el hash ya existe en el cache (local o remoto), restaura el output sin ejecutar
3. Si no existe, ejecuta la tarea y guarda el output

**Remote Caching (Vercel Remote Cache / Nx Cloud):**
Comparte el cache entre todos los miembros del equipo y la CI. Si el CI ha construido un paquete, el developer local lo obtiene del cache sin ejecutar.

```bash
# Activar remote cache en Turborepo (Vercel)
npx turbo login
npx turbo link
```

**Cuánto tiempo ahorra:**
| Sin caching | Con local cache | Con remote cache |
|---|---|---|
| CI: 15 min (todo el monorepo) | 15 min (primera vez) | 2-3 min (restaura del cache de CI anterior) |
| Dev rebuild tras cambio en utils | 8 min (todo reconstruye) | < 1 min (solo lo afectado) |

## Package Manager: Usa pnpm

pnpm es el package manager recomendado para monorepos: workspace links nativos, deduplicación de dependencias agresiva, y mucho más rápido que npm/yarn en installs.

**pnpm-workspace.yaml:**
```yaml
packages:
  - 'apps/*'
  - 'packages/*'
  - 'tooling/*'
```

**Instalar una dependencia en un paquete específico:**
```bash
pnpm add react --filter @mycompany/web
pnpm add --save-dev typescript --filter @mycompany/ui
```

## TypeScript en el Monorepo: Project References

Para que TypeScript sea eficiente en monorepo, usa Project References:

**packages/ui/tsconfig.json:**
```json
{
  "extends": "@mycompany/config/typescript/base.json",
  "compilerOptions": {
    "outDir": "dist",
    "rootDir": "src",
    "composite": true
  },
  "include": ["src"]
}
```

**apps/web/tsconfig.json:**
```json
{
  "extends": "@mycompany/config/typescript/nextjs.json",
  "references": [
    { "path": "../../packages/ui" },
    { "path": "../../packages/utils" }
  ]
}
```

## CI/CD Optimizado para Monorepo

**GitHub Actions con Turborepo y remote cache:**
```yaml
name: CI
on: [push, pull_request]

jobs:
  build-and-test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4
      - uses: pnpm/action-setup@v3
      - uses: actions/setup-node@v4
        with:
          node-version: '20'
          cache: 'pnpm'
      - run: pnpm install --frozen-lockfile
      - run: pnpm turbo build lint test typecheck
        env:
          TURBO_TOKEN: ${{ secrets.TURBO_TOKEN }}
          TURBO_TEAM: ${{ vars.TURBO_TEAM }}
```

Con remote cache activado, los jobs que no han cambiado se completan en segundos.

## Entregables

Con el contexto que me des, produce:
1. Estructura de carpetas completa del monorepo para tu stack
2. turbo.json o nx.json con la configuración del pipeline completa
3. Configuración de pnpm workspaces con los scripts más usados en root package.json
4. GitHub Actions workflow optimizado con remote caching
5. Guía de "cómo añadir una nueva app al monorepo" en 5 pasos (para el equipo)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Configurar un monorepo con Turborepo o Nx con caching remoto, pipelines optimizados y estructura de paquetes compartidos para el equipo',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de newsletters y emails de marketing — estructura y CTA que maximizan el CTR',
                'description'      => 'Aprende a diseñar newsletters y emails de marketing con la jerarquía visual, estructura y llamadas a la acción que maximizan el click-through rate y la conversión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de email marketing y especialista en UX para newsletters con experiencia en campañas B2B y B2C de alto rendimiento. Necesito diseñar emails de marketing que la gente realmente quiera abrir, leer y en los que haga clic.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué tipo de email quieres diseñar? (newsletter, email promocional, onboarding, transaccional)
2. ¿Cuál es tu herramienta de email? (Mailchimp, HubSpot, Klaviyo, Brevo, Campaign Monitor)
3. ¿Cuál es tu audiencia principal? (consumidores, profesionales, decisores B2B)
4. ¿Cuáles son tus métricas actuales? (open rate, CTR, tasa de baja)
5. ¿Tienes ya una identidad de marca definida o trabajamos desde cero?

## Las Reglas Fundamentales del Email Design

**1. La lectura en F (y por qué importa)**
Los usuarios escanean los emails en forma de F: leen la primera línea completa, luego saltan hacia abajo por el lado izquierdo. Diseña para ser escaneado antes de ser leído:
- La información más importante va arriba y a la izquierda
- Los subtítulos y bullets son más leídos que los párrafos
- El primer CTA debe aparecer sin necesidad de hacer scroll

**2. Una email, un objetivo**
El error más común: incluir demasiados CTAs y objetivos. Cada email debe tener exactamente una acción principal que quieres que haga el lector.

**3. Mobile-first absoluto**
El 60-70% de los emails se abren en móvil. Si tu email no funciona en móvil, no funciona.

## Anatomía de un Email de Alto Rendimiento

**Estructura de columna única para móvil:**

```
┌────────────────────────────────────┐
│  PREHEADER (50-90 caracteres)      │
│  "Lo que no está en el asunto..."  │
├────────────────────────────────────┤
│         LOGO / HEADER              │
│      (máx. 600px de ancho)         │
├────────────────────────────────────┤
│     HERO IMAGE o ILUSTRACIÓN       │
│     (opcional pero impactante)     │
├────────────────────────────────────┤
│  TITULAR H1 (máx. 2 líneas)        │
│  Subtítulo opcional (1 línea)      │
├────────────────────────────────────┤
│  CUERPO DEL MENSAJE                │
│  Máx. 150-200 palabras             │
│  Párrafos cortos (2-3 líneas)      │
├────────────────────────────────────┤
│  ┌──────────────────────────────┐  │
│  │    CTA PRINCIPAL BOTÓN       │  │
│  │  Mínimo 44px de altura       │  │
│  └──────────────────────────────┘  │
├────────────────────────────────────┤
│  [CONTENIDO SECUNDARIO OPCIONAL]   │
│  (con CTA secundario si aplica)    │
├────────────────────────────────────┤
│  FOOTER: desuscribirse, dirección  │
│  Preferencias de email             │
└────────────────────────────────────┘
```

## El Asunto y el Preheader: La Batalla de la Apertura

El 47% de las personas decide abrir o no un email solo por el asunto.

**Técnicas de asunto que funcionan:**

| Técnica | Ejemplo | Por qué funciona |
|---|---|---|
| Curiosidad con gap | "Lo que no te están contando sobre X" | Crea tensión de información |
| Número específico | "7 formas de reducir tu AHT esta semana" | Concreto y escaneable |
| Pregunta directa | "¿Estás cometiendo este error en tus emails?" | Implica al lector |
| Urgencia real | "Cierra hoy: acceso al taller de noviembre" | Funciona solo si la urgencia es real |
| Personalización | "{{first_name}}, hemos preparado algo para ti" | Aumenta el open rate 26% |
| Contraintuitivo | "Por qué publico menos en LinkedIn que hace un año" | Rompe el patrón esperado |

**El preheader (el texto gris que aparece después del asunto):**
No lo dejes vacío (los clientes de email rellenarán con el primer texto del email). Úsalo para complementar el asunto: si el asunto genera curiosidad, el preheader puede dar una pista. Si el asunto es claro, el preheader puede añadir un beneficio adicional.

## El CTA: La Pieza Más Importante del Email

**Diseño del botón CTA:**
- Tamaño mínimo: 44px de altura, 120px de ancho
- Color: contrasta con el fondo, coherente con la marca
- Texto: verbo de acción en imperativo + beneficio ("Ver la guía", "Empezar gratis", "Reservar mi plaza")
- Posición: primero arriba del fold, puede repetirse al final
- Espacio: 20-30px de margen alrededor del botón

**Textos de CTA por objetivo:**
| Objetivo | Texto débil | Texto fuerte |
|---|---|---|
| Descargar contenido | "Clic aquí" | "Descargar el informe gratis" |
| Registrarse | "Enviar" | "Crear mi cuenta gratis" |
| Comprar | "Comprar" | "Conseguir el curso — 47€" |
| Leer artículo | "Más información" | "Leer el artículo completo" |
| Reservar demo | "Demo" | "Reservar mi demo de 30 min" |

## Tipografía y Color en Email

**Tipografía safe para email (funciona en todos los clientes):**
- Sans-serif: Arial, Helvetica, Verdana, Trebuchet MS
- Serif: Georgia, Times New Roman
- Tamaño body: mínimo 16px
- Line-height: 1.5-1.6
- Máximo 65 caracteres por línea (legibilidad óptima)

**Paleta de color recomendada para emails:**
| Elemento | Recomendación |
|---|---|
| Fondo del email | Blanco (#FFFFFF) o gris muy claro (#F9F9F9) |
| Fondo del contenido | Blanco |
| Texto principal | Negro suave (#1A1A1A o #333333) |
| CTA button | Color de marca con buen contraste |
| Links | Color de marca, no azul subrayado genérico |

## Newsletter vs. Email Promocional: Diferencias de Diseño

| Elemento | Newsletter | Email Promocional |
|---|---|---|
| Objetivo | Aportar valor, construir relación | Conversión directa |
| Frecuencia de CTAs | 1-3 CTAs secundarios | 1 CTA principal dominante |
| Longitud | Más largo (puede tener varios bloques) | Más corto y directo |
| Personalización | Puede segmentarse por intereses | Por segmento de comportamiento |
| Tono | Informativo, de autoridad | Persuasivo, de urgencia |
| Imágenes | Opcionales (coherentes con el contenido) | Hero image de producto impactante |

## Pruebas A/B para Emails

Prueba siempre un elemento a la vez:

| Elemento a testear | Variantes sugeridas | KPI a medir |
|---|---|---|
| Asunto | Curiosidad vs. beneficio claro | Open rate |
| Preheader | Complementario vs. urgencia | Open rate |
| CTA text | Verbo de acción vs. beneficio | CTR |
| CTA color | Primario vs. contraste | CTR |
| Hero image | Con imagen vs. sin imagen | CTR |
| Longitud | Corto (150 palabras) vs. largo (400 palabras) | CTR y tasa de baja |

## Entregables

Con el contexto que me des, produce:
1. Estructura HTML del email (en pseudocódigo o descripción de bloques) adaptada a tu herramienta
2. 5 variantes de asunto para el próximo email con el preheader correspondiente
3. Paleta de colores y tipografía del email alineadas con tu marca
4. Guía de CTA: texto, color, tamaño y posición recomendados
5. Plan de A/B testing para los próximos 3 envíos con hipótesis y KPI
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar newsletters y emails de marketing con estructura, jerarquía visual y CTAs que maximicen el open rate y el CTR',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Cierre de ventas consultivas — técnicas que funcionan sin presionar al cliente',
                'description'      => 'Aprende las técnicas de cierre que funcionan en ventas B2B de alto valor: cómo crear urgencia genuina, gestionar la indecisión y cerrar sin presionar al comprador.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en ventas consultivas B2B de alto valor (ACV > 20.000€). Necesito ayuda para mejorar mi tasa de cierre en los deals que llegan a la fase final del pipeline pero se quedan estancados.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el ACV promedio y el ciclo de venta típico en días?
2. ¿En qué fase se estancan más los deals? (después de la demo, después de la propuesta, en negociación)
3. ¿Cuántos stakeholders suelen estar en la decisión?
4. ¿Cuáles son las objeciones más frecuentes en la recta final?
5. ¿Tienes acceso directo al decision-maker o sueles vender a través de un champion?

## Por Qué los Deals Buenos No Cierran

El problema más común en ventas consultivas no es que el cliente diga que no: es que no dice nada. El deal "zombi" que lleva semanas sin avanzar.

**Las causas reales:**
- **Sin urgencia real:** El cliente quiere el producto pero no hay consecuencia de no comprarlo ahora
- **Sin champion interno:** No hay nadie dentro de la empresa que esté activando el proceso
- **Más stakeholders de los que conoces:** Alguien que no has mapeado está bloqueando
- **Propuesta que no conecta con el ROI del comprador económico:** El CFO no ve los números
- **Competidor activo:** Hay una alternativa en juego que no conoces

## El Framework MEDDIC/MEDDPICC para Calificar el Cierre

Antes de intentar cerrar, confirma que tienes esto:

| Elemento | Pregunta clave | Tu respuesta |
|---|---|---|
| **M**etrics | ¿Qué KPIs mejorarán y cuánto? | |
| **E**conomic Buyer | ¿Hablas con quien firma el cheque? | |
| **D**ecision Criteria | ¿Cuáles son sus criterios de evaluación? | |
| **D**ecision Process | ¿Cuál es el proceso de aprobación interno? | |
| **P**aper Process | ¿Cuánto tardan los contratos en aprobarse? | |
| **I**dentify Pain | ¿Cuál es el coste de no hacer nada? | |
| **C**hampion | ¿Quién dentro de la empresa lucha por tu solución? | |
| **C**ompetition | ¿A quién más están evaluando? | |

Si no tienes respuesta para alguno, no estás listo para cerrar. Tienes que ir a buscar esa información primero.

## Crear Urgencia Genuina (Sin Manipular)

La urgencia forzada destruye la confianza. La urgencia genuina viene del coste real de esperar.

**Tipos de urgencia que funcionan en ventas consultivas:**

**1. Urgencia de consecuencia (la más poderosa):**
"Cada mes que no implementáis esto, estáis dejando de [resultado cuantificado]. En vuestro caso, eso son aproximadamente X€ al mes."

**2. Urgencia de fecha interna del cliente:**
"Has mencionado que necesitáis tener esto listo para el Q1. Si empezamos el onboarding en [fecha], llegaremos justo. Si esperamos dos semanas más, no podemos garantizar esa fecha."

**3. Urgencia de restricción real (solo si es verdad):**
"Tenemos capacidad de onboarding para 2 clientes más este mes. Si confirmáis antes del [fecha], garantizo tu spot con el equipo de implementación."

**4. Urgencia de evento externo:**
El cliente tiene un board meeting, una auditoría, un lanzamiento de producto. Tu solución puede apoyarles. El timing es real.

## Las Técnicas de Cierre para Ventas Consultivas

Olvida los cierres de presión de ventas tradicionales. En ventas consultivas, cierras con claridad y confianza, no con manipulación.

**1. El cierre de resumen de valor:**
"Recapitulemos lo que hemos acordado: vosotros tenéis [problema]. Nuestra solución os da [beneficio específico] en [tiempo]. El resultado esperado es [ROI]. ¿Hay alguna razón por la que no tendría sentido seguir adelante esta semana?"

**2. El cierre de siguiente paso:**
No preguntes "¿Qué decides?". Propón el siguiente paso concreto: "El próximo paso lógico es que revises la propuesta con [nombre del decision-maker] el martes. ¿Te pongo yo en copia en un email para presentarme y prepararlo juntos?"

**3. El cierre de hypothetical:**
"Si el precio estuviera dentro de vuestro presupuesto, ¿habría alguna otra razón para no seguir adelante?" → Si dicen no, el precio es la única barrera. Si dicen sí, hay otra objeción que descubrir.

**4. El cierre de inversión:**
"Estáis invirtiendo [X€] en esto. En [plazo], si los resultados son los que hemos calculado, eso equivale a [Y veces el precio]. ¿Tiene sentido esperar más antes de empezar a generar ese retorno?"

## Gestión del Silencio y la Indecisión

El cliente dice "necesito pensarlo más". Esto no es un no, pero tampoco es un sí. Tu respuesta:

"Entiendo perfectamente. Para poder ayudarte en el proceso de decisión, ¿qué es lo que queda pendiente de resolver para que te sientas cómodo tomando la decisión?"

Luego escucha. La respuesta te dirá exactamente cuál es el bloqueo real.

**Los bloqueos más comunes y cómo manejarlos:**

| Bloqueo | Lo que dicen | Lo que significa | Tu respuesta |
|---|---|---|---|
| Precio | "Es caro" | No ven el ROI claro | Recalcula el ROI con sus números |
| Timing | "No es el momento" | No hay urgencia interna | Cuantifica el coste de esperar |
| Stakeholder | "Necesito consultarlo" | Falta alineación interna | Pide unirte a esa conversación |
| Confianza | "Necesito más referencias" | No confían suficiente | Ofrece referencia directa del sector |
| Competidor | "Estamos evaluando otras opciones" | Deal no ganado todavía | Descubre criterios de decisión |

## El Mutual Action Plan (MAP): El Cierre sin Cierre

El MAP es el documento que define los pasos mutuos para llegar al contrato firmado. Crea urgencia sin presionar porque el cliente ayuda a construirlo.

**Ejemplo de MAP:**
| Fecha | Acción | Responsable |
|---|---|---|
| 15 Nov | Revisión de propuesta con CFO | Champion (cliente) |
| 18 Nov | Sesión de Q&A con CFO y equipo técnico | Tú + Champion |
| 22 Nov | Llamada de referencia con cliente similar | Tú (organizas) + Champion |
| 25 Nov | Envío de contrato final | Tú |
| 30 Nov | Firma del contrato | Economic buyer |
| 5 Dic | Kickoff de onboarding | Ambos |

## Entregables

Con el contexto que me des, produce:
1. Análisis MEDDPICC de tu deal actual más avanzado (con las brechas identificadas)
2. Guión completo de la próxima conversación de cierre con el cliente
3. Email de seguimiento post-propuesta para reactivar un deal estancado
4. Mutual Action Plan para el deal que me describas
5. Respuestas a las 5 objeciones más frecuentes de tu mercado en formato script
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Cerrar deals B2B de alto valor que llegan a la fase final pero se quedan estancados, usando técnicas de cierre consultivo sin presión',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto freemium a premium — modelo de conversión y activación del upgrade',
                'description'      => 'Aprende a diseñar el modelo freemium: qué incluir en el plan gratuito, qué reservar para premium, y cómo crear los mecanismos que activan la conversión al plan de pago.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager especializado en modelos de negocio freemium con experiencia en productos SaaS B2B y B2C. Necesito ayuda para diseñar o mejorar el modelo freemium de nuestro producto: qué incluir en el plan gratuito, qué guardar para premium, y cómo activar la conversión al upgrade.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el tipo de producto y a quién va dirigido? (B2B SaaS, herramienta de productividad, plataforma de contenido, etc.)
2. ¿Tienes ya un plan gratuito o estás diseñando el modelo desde cero?
3. ¿Cuál es tu tasa de conversión free-to-paid actual (si tienes plan free)?
4. ¿Cuáles son las funcionalidades principales del producto?
5. ¿Cuál es el precio del plan de pago y el ACV objetivo?

## Los Tres Modelos de Freemium

| Modelo | Cómo funciona | Ejemplos | Riesgo principal |
|---|---|---|---|
| Feature-limited | Free tiene funcionalidades básicas; premium desbloquea features avanzadas | Slack, Notion, Figma | Si las features gratuitas son suficientes, nadie paga |
| Usage-limited | Free tiene límites de uso (vol. de datos, usuarios, proyectos); premium sube el límite | Mailchimp, Dropbox | El límite debe ser doloroso antes de que el usuario abandone |
| Time-limited (trial) | Acceso completo durante X días; luego paga | La mayoría de SaaS enterprise | Alta tasa de abandono al final del trial |
| Capacidad de equipo | Un usuario gratis; pagar para añadir miembros | Loom, Calendly | Funciona solo si el producto es colaborativo |

## El Principio de Diseño del Freemium: El Anzuelo de Valor

El plan gratuito tiene que ser suficientemente bueno para que el usuario llegue a sentir el valor real del producto, pero suficientemente limitado para que quiera más.

**La fórmula del freemium exitoso:**
```
Plan gratuito = suficiente para experimentar el valor central
Plan premium = el valor adicional que el usuario ya quiere porque el free le ha enganchado
```

**Lo que NUNCA debe estar en el plan gratuito:**
- Las features que generan el "aha moment" más poderoso para el usuario de mayor valor
- Funcionalidades que implican un coste directo significativo para ti (almacenamiento ilimitado, procesamiento intensivo)
- Features que los usuarios de empresa necesitan sí o sí (SSO, roles avanzados, auditoría)

**Lo que DEBE estar en el plan gratuito:**
- El core del producto que demuestra el valor promesa
- Suficiente para que el usuario invierta tiempo y datos (crea switching cost)
- La experiencia de colaborar con otro usuario (si el producto es colaborativo)

## Diseño de los Paywalls: Cuándo y Cómo Mostrarlos

El paywall es el momento de fricción entre el free y el premium. Mal diseñado, frustra. Bien diseñado, convierte.

**Tipos de paywall:**

| Tipo | Descripción | Mejor para |
|---|---|---|
| Hard paywall | Bloquea completamente la feature hasta que paga | Features de alto valor con alternativa clara |
| Soft paywall | Muestra un preview o versión reducida antes de bloquear | Features donde ver el resultado motiva el pago |
| Usage warning | Avisa cuando el usuario se acerca al límite del free | Modelos de límite de uso |
| Collaborative paywall | "Para invitar a [persona], activa premium" | Productos colaborativos |

**Principios de UX del paywall:**
1. El paywall debe mostrar claramente qué se desbloquea, no solo que hay que pagar
2. Incluye la prueba social junto al paywall: "14.000 equipos ya usan el plan Pro"
3. Muestra el precio claramente: la ambigüedad aumenta la ansiedad y reduce la conversión
4. Ofrece siempre el plan anual con el descuento como primera opción

## El Upgrade Flow: Reducir la Fricción del Pago

El usuario ha decidido pagar. Ahora necesitas que complete el proceso:

| Paso del upgrade flow | Fricción común | Cómo reducirla |
|---|---|---|
| Click en "Upgrade" | Botón no visible o enterrado | CTA de upgrade siempre visible en navegación |
| Selección de plan | Demasiadas opciones | Máximo 3 planes, recomienda uno claramente |
| Introducción de pago | Formulario largo, no familiar | Stripe, PayPal, Apple Pay nativos |
| Confirmación | Sin refuerzo de la decisión | Mensaje de bienvenida + desbloqueando las features |
| Primera acción post-upgrade | El usuario no sabe qué hacer | Tour de las nuevas features desbloqueadas |

## Métricas del Modelo Freemium

| Métrica | Definición | Benchmark SaaS |
|---|---|---|
| Free-to-paid conversion rate | % de usuarios free que convierten a paid | 2-5% (B2C) / 5-15% (B2B PLG) |
| Time to convert | Días desde registro hasta upgrade | < 30 días (ideal < 14 días) |
| Activation rate (free) | % de usuarios free que llegan al aha moment | > 40% |
| Churn del plan free | % de usuarios free activos en los últimos 30 días | > 20% activos |
| PQL rate | % de usuarios free que cumplen el criterio de Product Qualified Lead | Define según tu modelo |

## El PQL: Identificar Quién Está Listo para Convertir

El PQL (Product Qualified Lead) es el usuario free que ha demostrado suficiente engagement para que valga la pena contactarle proactivamente.

**Define tu PQL con comportamientos de producto:**

| Comportamiento | Peso |
|---|---|
| Ha completado el onboarding | 30 puntos |
| Ha usado el producto 3+ veces en la última semana | 25 puntos |
| Ha invitado a otro usuario | 20 puntos |
| Ha usado la feature que está detrás del paywall | 15 puntos |
| Ha exportado datos o creado un entregable | 10 puntos |

**Score PQL > 60 puntos = contactar proactivamente con email de upgrade o llamada de CS**

## Estrategias de Activación del Upgrade

Cuando el usuario está cerca del límite o ha alcanzado el PQL:

**Email de upgrade contextual:**
"Hola [Nombre], has creado 9 de tus 10 proyectos disponibles en el plan gratuito. Con Pro, tendrás proyectos ilimitados, [feature 2] y [feature 3]. Pásate a Pro antes de que te quedas sin espacio."

**Nudge in-product (momento de fricción):**
Cuando el usuario intenta hacer algo que requiere premium, muestra un modal con:
1. Una frase que describe la feature que acaba de intentar usar
2. Un testimonio de un usuario similar
3. El precio y el CTA

**Trial inverso:**
En lugar de dar acceso completo por 14 días desde el inicio, activa un "trial de premium" cuando el usuario ya conoce el producto y tiene datos en él (a los 30-60 días). Mucho más conversión porque el usuario ya tiene contexto.

## Entregables

Con el contexto que me des, produce:
1. Propuesta de qué features van en free vs. premium para tu producto
2. Definición del PQL: criterios de puntuación y umbral de activación
3. Diseño del paywall principal (descripción de UX y copy)
4. Email de upgrade contextual basado en comportamiento de producto
5. Plan de mejora de la conversión free-to-paid en 90 días con KPIs de control
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar o mejorar el modelo freemium definiendo el split free/premium, los paywalls y las mecánicas de activación del upgrade',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de la ambigüedad organizacional — lidera cuando la estrategia cambia',
                'description'      => 'Aprende a liderar equipos cuando la dirección no está clara, los roles son ambiguos y la estrategia cambia. Técnicas para mantener la productividad y la moral en entornos inciertos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach ejecutivo y experto en liderazgo organizacional con experiencia en entornos de alta incertidumbre (startups en hypergrowth, reorganizaciones corporativas, equipos en transformación digital). Necesito ayuda para liderar mi equipo en un momento en el que la dirección estratégica no es clara y la organización está en cambio.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es la fuente principal de ambigüedad? (cambio de estrategia, reorganización, mercado incierto, liderazgo en transición)
2. ¿Cuántas personas tienes a cargo y cuánto tiempo llevan en el equipo?
3. ¿Cuál es el impacto visible en el equipo? (bajo engagement, parálisis, rotación, conflictos)
4. ¿Tienes acceso a información que el equipo no tiene, o todos estáis en la misma oscuridad?
5. ¿Cuánto tiempo llevas tú mismo en esta situación de incertidumbre?

## El Problema de la Ambigüedad Organizacional

La ambigüedad no es solo incomodidad: tiene costes reales.

**Impacto de la ambigüedad no gestionada:**

| Síntoma | Causa | Si no se gestiona |
|---|---|---|
| Parálisis de decisiones | Nadie quiere equivocarse si las reglas van a cambiar | El equipo espera instrucciones, productividad cae |
| Microgestión del equipo | El manager siente que necesita controlarlo todo | Pérdida de autonomía y motivación |
| Silos y política | Cada unidad se protege sin visión común | Fragmentación y conflictos laterales |
| Burnout del líder | Absorber la incertidumbre de arriba y proteger al equipo | El líder se convierte en el cuello de botella |
| Rotación de talento | Los mejores se van antes de saber hacia dónde va el barco | Pérdida de knowledge en el peor momento |

## Los 4 Roles del Líder en la Incertidumbre

**1. Filtro (no amplificador) de la incertidumbre**
Tu trabajo no es trasladar toda la ansiedad organizacional a tu equipo. Pero tampoco ocultar la realidad. El equilibrio: da contexto honesto sin amplificar el caos.

Lo que NO decir: "La situación es muy complicada y no sabemos qué va a pasar."
Lo que SÍ decir: "Hay cosas que aún no están definidas a nivel de empresa. Lo que sí sé es que [certezas concretas]. En cuanto tenga más información, seré el primero en compartirla."

**2. Proveedor de certezas locales**
Cuando la estrategia global es incierta, crea claridad en el nivel del equipo:
- ¿Qué estamos haciendo esta semana? → Claro
- ¿Cuáles son nuestros objetivos del próximo mes? → Claro
- ¿Cuáles son los valores que nos guían cuando no hay instrucciones? → Claro

La claridad local compensa la incertidumbre global.

**3. Guardián del sentido y propósito**
Las personas toleran la incertidumbre del "cómo" mucho mejor que la incertidumbre del "para qué". Recuerda constantemente al equipo el impacto de su trabajo.

**4. Tomador de decisiones con información incompleta**
En ambigüedad, la parálisis es peor que una decisión imperfecta. Tu equipo necesita que tomes decisiones aunque no tengas toda la información. La clave: sé explícito sobre los supuestos ("tomo esta decisión basándome en X, si cambia, la revisamos").

## Herramientas de Liderazgo en Ambigüedad

### Tool 1: El "North Star" del equipo

Cuando la estrategia corporativa cambia, define el North Star de tu equipo: la contribución única que tu equipo hace independientemente de los cambios que vengan.

**Template:**
> "El equipo de [nombre] existe para [hacer X] de forma que [impacto en clientes/empresa]. Independientemente de los cambios organizacionales, esta misión sigue siendo válida porque [razón]."

### Tool 2: La Jerarquía de Certezas

En el próximo all-hands o 1:1 del equipo, estructura el mensaje en tres capas:

| Capa | Contenido | Por qué importa |
|---|---|---|
| Lo que sabemos con certeza | Hechos confirmados, lo que no va a cambiar | Ancla emocionalmente al equipo |
| Lo que sabemos que no sabemos | Preguntas abiertas con timeline de respuesta | Muestra honestidad y control |
| Lo que ni sabemos que no sabemos | Reconocimiento de lo desconocido | Previene sorpresas que erosionen la confianza |

### Tool 3: Decision Journal para Decisiones en Incertidumbre

Cuando tomas decisiones con información incompleta, documéntalas:

| Campo | Contenido |
|---|---|
| Decisión | Qué decides |
| Contexto | Qué sabías cuando decidiste |
| Supuestos | En qué te basas que podría cambiar |
| Criterio de revisión | Qué señal haría que revisases esta decisión |
| Fecha de revisión | Cuándo lo revisas automáticamente |

Esto te protege de la revisión histórica ("¿por qué tomaste esa decisión?") y al equipo de la inconsistencia.

## Comunicación en Entornos de Ambigüedad

**La cadencia mínima de comunicación en crisis de incertidumbre:**
- **Semanal:** Update de 5-10 minutos al equipo con el "dashboard de certezas": qué nuevo sabemos, qué sigue sin resolverse, cuál es el foco de la semana
- **Mensual:** 1:1 individual con cada miembro del equipo con foco en cómo está gestionando personalmente la incertidumbre (no solo en el trabajo)
- **Inmediata:** Cualquier novedad significativa (positiva o negativa) se comunica el mismo día, no esperes a la siguiente reunión

**El error más caro en la comunicación en incertidumbre:**
Guardar información "para no preocupar al equipo". La falta de comunicación llena el vacío con rumores. Los rumores siempre son peores que la realidad.

## Gestión Personal del Líder en Incertidumbre

El líder que no gestiona su propia ansiedad la transmite al equipo.

**Prácticas de regulación:**
1. **Diferencia lo urgente de lo importante**: el caos amplifica la urgencia de todo. Vuelve a la matriz de Eisenhower regularmente.
2. **Busca tu propio apoyo**: peers del mismo nivel, coach ejecutivo, mentor. No proceses la incertidumbre solo.
3. **Limita el consumo de información incierta**: no estar en todos los Slack channels donde se especula no te hace menos informado, te hace más enfocado.
4. **Separa lo que puedes controlar de lo que no**: escríbelo literalmente. La lista de lo que puedes controlar es tu agenda.

## Entregables

Con el contexto que me des, produce:
1. North Star del equipo adaptado a vuestra situación actual
2. Guión para el próximo all-hands o reunión de equipo usando la Jerarquía de Certezas
3. Plan de comunicación semanal en período de incertidumbre (qué decir, cuándo, en qué formato)
4. 1:1 template para conversaciones de apoyo individual en período de cambio
5. Personal action plan para el líder: cómo gestionar tu propia energía y ansiedad en los próximos 30 días
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Liderar el equipo de forma efectiva durante períodos de incertidumbre organizacional con técnicas de comunicación, toma de decisiones y gestión emocional',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Impuesto de sociedades en España — optimización fiscal legal y deducciones clave',
                'description'      => 'Comprende el Impuesto sobre Sociedades español: tipo impositivo, deducciones clave, reserva de capitalización, I+D+i y estrategias de optimización fiscal dentro del marco legal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor fiscal especializado en el Impuesto sobre Sociedades en España con experiencia en pymes y startups tecnológicas. Necesito entender las principales palancas de optimización fiscal legal para reducir la carga tributaria de nuestra empresa.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es la forma jurídica de la empresa y cuándo se constituyó?
2. ¿Cuál es el resultado contable previsto para el ejercicio?
3. ¿Tiene la empresa actividad de I+D+i, inversión en tecnología o formación de empleados?
4. ¿Se han repartido dividendos o está previsto hacerlo?
5. ¿Opera en alguna comunidad autónoma con régimen foral? (País Vasco, Navarra)

## El Impuesto sobre Sociedades: Base y Tipos

**Del resultado contable a la base imponible:**
```
Resultado contable antes de impuestos
+ Ajustes positivos (gastos no deducibles)
- Ajustes negativos (ingresos no computables, amortizaciones aceleradas)
= Base imponible previa
- Bases imponibles negativas de ejercicios anteriores (BINs)
= Base imponible
× Tipo impositivo
= Cuota íntegra
- Deducciones
= Cuota líquida
- Retenciones y pagos fraccionados
= Cuota diferencial (a pagar o a devolver)
```

**Tipos impositivos (régimen general 2024):**
| Tipo de entidad | Tipo |
|---|---|
| Régimen general | 25% |
| Empresa de nueva creación (primeros 2 ejercicios con BI positiva) | 15% |
| Micropymes (CNAE y facturación < 1M€) — desde 2025 | 23% |
| Cooperativas | 20% |
| Entidades de la Ley 49/2002 (ONGs, fundaciones) | 10% |
| Empresas de reducida dimensión (ERD: facturación < 10M€) | 25% (con ventajas adicionales) |

## Las Principales Palancas de Optimización

### 1. Reserva de Capitalización (Art. 25 LIS)

Reduce la base imponible en un 10% del incremento de los fondos propios del ejercicio, siempre que:
- El incremento de fondos propios se mantenga durante 5 años
- La reducción no supere el 10% de la base imponible positiva

**Ejemplo:**
- Fondos propios inicio del ejercicio: 200.000€
- Fondos propios fin del ejercicio: 260.000€
- Incremento: 60.000€
- Reducción en base imponible: 6.000€ (10% de 60.000€)
- Ahorro fiscal al 25%: **1.500€**

Es una de las deducciones más sencillas de aplicar si la empresa retiene beneficios en lugar de repartirlos como dividendos.

### 2. Reserva de Nivelación (solo ERD, Art. 105 LIS)

Las empresas de reducida dimensión pueden reducir la base imponible hasta en un 10% (máximo 1M€) dotando una reserva que compensará pérdidas futuras.

Si en los próximos 5 años no hay pérdidas, esa base imponible "adelantada" tributa en el año 5. Es diferimiento de impuesto, no ahorro permanente.

### 3. Deducciones por I+D+i (Arts. 35 y 36 LIS)

Las deducciones por I+D+i son las más potentes del IS español y están infrautilizadas por desconocimiento.

| Concepto | Deducción |
|---|---|
| Investigación y Desarrollo (I+D): gastos del año | 25% |
| I+D: exceso sobre media de los 2 años anteriores | 42% |
| Innovación Tecnológica (IT): diseño, certificaciones, informes tecnológicos | 12% |
| Formación de empleados en tecnologías de la información | 1% del coste (reducido en 2024) |

**Monetización del I+D:** Si la cuota líquida no es suficiente para absorber toda la deducción, puedes solicitar el abono en efectivo con un descuento del 20% (opción "cash" de I+D+i). Ideal para startups con bases imponibles bajas o negativas.

**Informe motivado vinculante:** Solicita un informe al CDTI (Centro para el Desarrollo Tecnológico e Industrial) o a un organismo acreditado. Con este informe, Hacienda está vinculada a aceptar la calificación de la actividad como I+D o IT.

### 4. Libertad de Amortización (ERD)

Las empresas de reducida dimensión pueden amortizar libremente los activos nuevos (afectos a la actividad) en cualquier año, sin seguir los coeficientes máximos de la tabla. Esto permite adelantar gastos y reducir la base imponible en los años de mayor beneficio.

### 5. Bases Imponibles Negativas (BINs)

Las pérdidas fiscales de ejercicios anteriores se pueden compensar sin límite temporal. En la base imponible, el límite de compensación anual es el 70% de la base imponible positiva previa a la compensación (con un mínimo de 1M€ compensable siempre).

### 6. Operaciones Vinculadas: Retribución del Socio-Administrador

Si el socio-administrador presta servicios a la empresa, la retribución debe pactarse a valor de mercado. Una retribución bien estructurada (dentro de los límites y correctamente documentada) reduce el beneficio de la sociedad y tributa a tipo marginal de IRPF del socio.

**Cuidado:** Hacienda es especialmente vigilante en las operaciones vinculadas. Documentación y precio de mercado son fundamentales.

## Gastos Deducibles que Frecuentemente Se Olvidan

| Gasto | Condición de deducibilidad |
|---|---|
| Dietas y gastos de representación | Justificados, con factura, vinculados a la actividad |
| Cuotas de formación y suscripciones profesionales | Relación con la actividad |
| Seguros de responsabilidad civil | Vinculados a la actividad profesional |
| Gastos de vehículo | Solo si el vehículo está 100% afecto a la actividad (muy difícil de demostrar) |
| Home office del autónomo societario | % de gastos del inmueble según m² usados |
| Software y herramientas SaaS | 100% deducibles como gasto corriente |
| Marketing digital y publicidad | 100% deducibles |

## Calendario Fiscal del IS

| Fecha | Obligación |
|---|---|
| Abril-junio de cada año | Pago fraccionado (método de base o cuotas) |
| Julio (25 días después del cierre fiscal) | Presentación del IS (modelo 200) |
| Octubre | Pago fraccionado |
| Diciembre | Pago fraccionado |

## Entregables

Con el contexto que me des, produce:
1. Estimación del ahorro fiscal con las 3 deducciones más aplicables a tu empresa
2. Checklist de documentación necesaria para aplicar las deducciones de I+D+i
3. Cálculo de la reserva de capitalización para el ejercicio actual
4. Lista de gastos deducibles que probablemente no estás incluyendo
5. Calendario de obligaciones fiscales del IS para los próximos 12 meses
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Identificar y aplicar las deducciones y estrategias de optimización fiscal legal del Impuesto sobre Sociedades en España para reducir la carga tributaria',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Responsabilidad del administrador de sociedad — cuándo responde personalmente',
                'description'      => 'Entiende cuándo el administrador de una sociedad limitada o anónima responde con su patrimonio personal, cómo protegerse y qué deberes de diligencia debes cumplir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado mercantilista especializado en derecho de sociedades y responsabilidad de administradores con experiencia en España. Necesito entender cuándo puedo ser personalmente responsable como administrador de una sociedad, cómo protegerme y qué obligaciones legales tengo que cumplir sí o sí.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es tu cargo formal en la sociedad? (administrador único, solidario, mancomunado, consejero delegado, CEO sin cargo formal)
2. ¿Cuál es la forma jurídica? (SL, SA, SLU, SLP, cooperativa)
3. ¿Hay alguna situación de riesgo actual? (deudas con Hacienda, Seguridad Social, pérdidas acumuladas, litigio pendiente)
4. ¿La sociedad tiene más deudas que activos (causa de disolución)?
5. ¿Hay otros administradores o eres el único?

## El Principio de Responsabilidad Limitada y Sus Excepciones

La sociedad de capital (SL, SA) limita la responsabilidad del socio al capital aportado. Sin embargo, el **administrador** no es solo socio: tiene una posición de gestión que genera responsabilidades adicionales.

**Regla general:** Los administradores no responden de las deudas sociales con su patrimonio personal.

**Excepciones (cuando sí responden personalmente):**

## Los 3 Regímenes de Responsabilidad del Administrador

### 1. Responsabilidad por Daños (Art. 236-241 LSC)

El administrador responde personalmente de los daños que cause a la sociedad, a los socios o a terceros por actos contrarios a la ley, a los estatutos o por incumplimiento del deber de diligencia.

**Los deberes que debes cumplir:**

| Deber | Contenido | Infracción típica |
|---|---|---|
| Diligencia (art. 225 LSC) | Actuar como un empresario ordenado y representante leal | Decisiones sin información suficiente |
| Lealtad (art. 226-232 LSC) | Anteponerse el interés de la sociedad al propio | Competencia desleal, autocontratación sin autorización |
| No conflicto de intereses | Abstenerse en decisiones donde tienes interés personal | Aprobar contratos contigo mismo |
| Secreto (art. 228 LSC) | Guardar confidencialidad | Revelar información sensible a competidores |

**La acción social de responsabilidad:** La ejerce la sociedad (o los socios con > 5% del capital o los acreedores en insolvencia) contra el administrador.

**La acción individual de responsabilidad:** La ejerce directamente el tercero perjudicado (proveedor, banco, cliente) que ha sufrido un daño directo por un acto del administrador.

### 2. Responsabilidad por Causa de Disolución (Art. 367 LSC)

Esta es la más peligrosa y la que más casos genera en la práctica.

**Cuándo aplica:**
Cuando concurre una causa legal de disolución (principalmente pérdidas que dejan el patrimonio neto por debajo de la mitad del capital social) y el administrador no convoca la Junta en 2 meses para disolver o solicitar el concurso.

**Consecuencia:** El administrador responde **solidariamente** con la sociedad de todas las deudas sociales **posteriores** a la causa de disolución. No tiene límite.

**Señal de alarma:** Revisa el balance cada trimestre. Si el patrimonio neto cae por debajo del 50% del capital social, activa el protocolo legal inmediatamente.

**Protocolo cuando se detecta la causa de disolución:**
1. Convocatoria de Junta en los 2 meses siguientes
2. La Junta decide: ampliar capital, reducir capital, o disolver y liquidar
3. Si no hay acuerdo, solicitar la disolución judicial o el concurso de acreedores en 2 meses más

### 3. Responsabilidad Tributaria (Art. 43 LGT)

Hacienda puede declarar responsable subsidiario al administrador de las deudas tributarias de la sociedad cuando:
- La sociedad comete infracciones tributarias y el administrador no hizo lo necesario para impedirlas
- La sociedad cesa en su actividad dejando deudas pendientes (responsabilidad solidaria si es activa)
- El administrador ha colaborado activamente en el cese fraudulento de la actividad

**Deudas con Seguridad Social:** Régimen similar: el administrador puede ser declarado responsable subsidiario si hay ceses irregulares de actividad o conductas fraudulentas.

## Cómo Protegerse: Las Medidas Preventivas

**1. Seguro de Responsabilidad Civil de Administradores y Directivos (D&O)**

El seguro D&O cubre los gastos de defensa legal y las indemnizaciones derivadas de reclamaciones contra el administrador por actos de gestión.

| Cobertura | Qué protege |
|---|---|
| Defensa legal | Honorarios de abogado ante cualquier reclamación |
| Indemnizaciones | Daños a socios, terceros y a la propia sociedad (excluye multas e infracciones dolosas) |
| Fianzas penales | En procedimientos penales por delitos societarios |

**2. Documentar todas las decisiones relevantes**
Las actas del Consejo o de la Junta son la prueba de que el administrador actuó informado y con diligencia. Documenta:
- La información disponible en el momento de la decisión
- Los análisis o informes consultados
- Las alternativas consideradas
- El voto de cada administrador (importante si votas en contra de una decisión)

**3. Salvar el voto en decisiones con las que no estás de acuerdo**
Si eres uno de varios administradores y el Consejo toma una decisión que consideras incorrecta o ilegal, deja constancia expresa de tu voto en contra en el acta. Esto te exime de la responsabilidad derivada de esa decisión.

**4. Revisar el patrimonio neto trimestralmente**
Implementa un alert interno: si el patrimonio neto cae a un nivel del 55% del capital social, reunión extraordinaria del Consejo para analizar la situación y decidir medidas.

## Tabla de Responsabilidades Resumida

| Situación | Tipo de responsabilidad | Quién puede reclamar |
|---|---|---|
| Daño por mala gestión | Civil (acción social) | La sociedad o socios con > 5% |
| Daño directo a tercero | Civil (acción individual) | El tercero perjudicado |
| Pérdidas > 50% capital sin convocar Junta | Solidaria con sociedad (deudas posteriores) | Cualquier acreedor |
| Infracción tributaria de la sociedad | Responsabilidad subsidiaria tributaria | Hacienda |
| Concurso culpable | Responsabilidad concursal (cubrir déficit) | Administración concursal |

## Entregables

Con el contexto que me des, produce:
1. Diagnóstico de tus principales riesgos de responsabilidad como administrador
2. Checklist de cumplimiento de deberes del administrador (para revisar trimestralmente)
3. Protocolo de actuación si el patrimonio neto cae por debajo del 50% del capital
4. Brief para contratar el seguro D&O: qué coberturas pedir y qué exclusiones revisar
5. Modelo de acta de Consejo para documentar una decisión estratégica importante
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Entender los supuestos de responsabilidad personal del administrador de sociedad y las medidas para proteger el patrimonio personal',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Escalado de tickets al equipo de producto — cuándo y cómo hacerlo efectivamente',
                'description'      => 'Aprende a escalar problemas de cliente al equipo de producto de forma que se resuelvan realmente: cuándo escalar, cómo documentar el impacto y cómo hacer seguimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Customer Success Manager senior con experiencia en la interfaz entre equipos de soporte/CS y equipos de producto. Necesito un sistema para escalar problemas de clientes al equipo de producto de forma que realmente se atiendan, sin convertirme en un ruido más en el backlog.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cómo es la relación actual entre CS/soporte y producto? (¿hay un canal formal de feedback, una reunión periódica, o es informal?)
2. ¿Qué herramienta usa el equipo de producto para gestionar el backlog? (Jira, Linear, Productboard, Notion)
3. ¿Cuál es el problema más frecuente: que el equipo de producto no atiende los tickets escalados, o que los recibe pero no los prioriza?
4. ¿Tienes acceso a métricas de impacto de cliente? (MRR afectado, NPS del cliente, riesgo de churn)
5. ¿Cuántos tickets escalan al mes al equipo de producto actualmente?

## El Problema Real: Por Qué El Equipo de Producto No Atiende Tus Escalados

El equipo de producto recibe peticiones de todas partes: ventas, CS, soporte, marketing, dirección. Tu ticket compite con todos ellos.

**Por qué los escalados de CS/soporte pierden la batalla:**
1. **Falta de datos de impacto:** "El cliente está enfadado" no compite con "esta feature genera 50K€ de pipeline"
2. **Sin contexto de negocio:** El equipo de producto no sabe si el cliente es de 100€/mes o de 10.000€/mes
3. **Demasiado volumen sin filtrar:** Si todo se escala, nada es prioritario
4. **Sin seguimiento claro:** El ticket entra en Jira y nadie sabe si está en la agenda o en el olvido

## El Framework de Escalado: Los 3 Niveles

No todos los problemas de cliente merecen el mismo nivel de escalado:

| Nivel | Criterio | Proceso | Timeline |
|---|---|---|---|
| **L1 — Workaround disponible** | Hay una solución temporal que funciona | Documentar en KB, ticket interno de seguimiento | < 1 semana |
| **L2 — Impacto a varios clientes** | El mismo problema afecta a 3+ clientes en el último mes | Compilar evidencia y escalar con template | 2-4 semanas |
| **L3 — Impacto en MRR o churn crítico** | Riesgo de churn de cuenta > 5.000€ MRR o bloqueo de deal | Escalado urgente con impacto económico cuantificado | 24-72 horas |

## El Template de Escalado de Alta Calidad

Cuando escalas al equipo de producto, usa este formato:

```
ESCALADO DE CLIENTE → PRODUCTO
Fecha: [fecha]
Prioridad: L1 / L2 / L3
Reportado por: [nombre del CSM/agente]

--- RESUMEN EJECUTIVO (2 líneas) ---
[Qué falla + impacto en 2 líneas]

--- DESCRIPCIÓN DEL PROBLEMA ---
¿Qué está pasando exactamente? (comportamiento observado vs. esperado)
[Descripción técnica precisa]

--- IMPACTO EN CLIENTE ---
• Clientes afectados: [número]
• MRR afectado: [€]
• NPS/CSAT de los clientes afectados: [dato]
• Riesgo de churn: [sí/no, probabilidad, MRR en riesgo]
• Bloquea algún deal en pipeline: [sí/no, €]

--- EVIDENCIA ---
• Ticket IDs: [lista de tickets relacionados]
• Citas del cliente: "[textual del cliente sobre el impacto]"
• Capturas de pantalla: [adjuntas o enlace]
• Reproducción del error: [pasos para reproducir]

--- FRECUENCIA Y TENDENCIA ---
• Veces reportado este mes: [número]
• ¿Está aumentando o disminuyendo?

--- WORKAROUND ACTUAL ---
[Si existe: describirlo. Si no existe: indicarlo claramente]

--- IMPACTO SI NO SE RESUELVE EN 30 DÍAS ---
[Consecuencia concreta en negocio: churn, escalado a dirección, deal perdido]

--- PETICIÓN CONCRETA ---
[Qué necesitas exactamente: fix, fecha estimada, confirmación de que está en roadmap]
```

## Cuándo Escalar vs. Cuándo No Escalar

**Sí escalar:**
- Bug reproducible que afecta a múltiples clientes
- Funcionalidad que bloquea un caso de uso crítico del cliente
- Problema que genera churn o riesgo de churn
- Petición de feature que aparece en 5+ tickets en un trimestre
- Incidente de datos o seguridad (siempre, sin excepción)

**No escalar (o escalar distinto):**
- Petición de feature de un solo cliente sin más contexto (compilar en el proceso de feedback regular)
- Comportamiento documentado como funcional que el cliente no entiende → Knowledge Base
- Problema que ya tiene un workaround funcional y el cliente lo acepta

## El Canal de Feedback Estructurado: De Reactivo a Proactivo

El mejor escalado es el que se hace en un proceso estructurado, no en urgencias reactivas.

**Proceso mensual de feedback CS → Producto:**
1. El equipo de CS/soporte compila el Top 10 de problemas del mes (por frecuencia × impacto)
2. Se presenta en una reunión mensual de 30 minutos con el PM responsable
3. El PM da visibilidad de qué está en roadmap, qué no y por qué
4. Se define un SLA de respuesta para los L3 escalados

**El Customer Evidence Board:**
Crea en el tool de producto (Productboard, Notion, Jira) una sección de "Customer Evidence" donde cada feature request o bug crítico tiene una tarjeta con:
- Número de clientes que lo han pedido
- MRR combinado de esos clientes
- Citas textuales de clientes
- Enlace a los tickets de soporte

Cuando el PM ve que una feature tiene 15 clientes que la piden y representan 80K€ de MRR, ya no necesitas argumentar: los datos hablan.

## Seguimiento: El Error Más Común Después de Escalar

Escalar sin hacer seguimiento es tirar el ticket a un agujero negro. Implementa:

| Momento | Acción |
|---|---|
| Al escalar | Confirma recepción y fecha de primera revisión con el PM |
| 1 semana después | Revisa el estado del ticket en el tool de producto |
| 2 semanas sin respuesta | Ping al PM con contexto: "El cliente [X] sigue afectado" |
| 30 días | Escala a Head of Product si no hay fecha ni respuesta |
| Resolución | Comunica al cliente + actualiza el ticket de soporte + busca testimonio si aplica |

## Métricas del Proceso de Escalado

| Métrica | Definición | Objetivo |
|---|---|---|
| Time to acknowledge | Tiempo desde el escalado hasta primera respuesta del PM | < 48h |
| Time to resolution (L3) | Tiempo desde escalado urgente hasta fix | < 14 días |
| Escalados por mes | Volumen de tickets escalados | Estable o decreciente (señal de mejora del producto) |
| Escalados sin respuesta a 30 días | % de escalados sin respuesta | < 10% |

## Entregables

Con el contexto que me des, produce:
1. Template de escalado adaptado a tu tool de producto (Jira, Linear, Productboard)
2. Criterios de clasificación L1/L2/L3 para tu tipo de producto
3. Proceso mensual de feedback CS-Producto con agenda de la reunión
4. Email de follow-up para tickets sin respuesta a los 14 días
5. Plantilla de Customer Evidence Board para el backlog de producto
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear un sistema de escalado de tickets al equipo de producto que genere atención real y seguimiento medible',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Ingresos pasivos como freelance — productos digitales, cursos y templates',
                'description'      => 'Aprende a crear productos digitales, cursos y templates que generan ingresos mientras trabajas con clientes, reduciendo la dependencia del tiempo vendido por dinero.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio especializado en profesionales independientes que quieren crear fuentes de ingresos pasivos. Necesito ayuda para identificar, crear y lanzar al menos un producto digital que genere ingresos de forma recurrente sin requerir mi tiempo en cada venta.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es tu especialidad y qué conocimiento tienes que otros pagarían por obtener?
2. ¿Qué preguntas te hacen repetidamente tus clientes o en redes sociales?
3. ¿Cuánto tiempo puedes dedicar al mes a crear el producto? (sin dejar de atender clientes)
4. ¿Tienes ya una audiencia? (email list, seguidores en LinkedIn, Twitter/X, comunidad)
5. ¿Cuál es el rango de precio que te parece razonable para tu primer producto?

## Por Qué Los Freelancers Necesitan Ingresos Pasivos

El modelo de freelance puro tiene un límite: el tiempo. Hay un máximo de horas que puedes vender y un precio máximo que el mercado acepta. Los ingresos pasivos rompen esa ecuación.

**El techo del freelance puro:**
- 40 horas/semana × 52 semanas × 80€/h = 166.400€ brutos máximos
- En la práctica: 60-70% de facturabilidad → 100.000-116.000€
- Sin vacaciones, sin enfermar, sin nuevos clientes → siempre al límite

**La fórmula de los ingresos mixtos:**
```
Ingresos totales = (Horas cliente × Tarifa) + (Ventas de productos × Precio medio)
```
Cuando los productos digitales crecen, puedes trabajar menos horas con clientes sin reducir ingresos.

## Los 5 Tipos de Producto Digital para Freelancers

| Producto | Esfuerzo de creación | Precio típico | Pasividad | Mejor para |
|---|---|---|---|---|
| Template / plantilla | Bajo (1-5 días) | 15-99€ | Alta | Diseñadores, PMs, marketers |
| Guía / ebook / PDF | Bajo-Medio (1-2 semanas) | 15-49€ | Alta | Consultores, abogados, coaches |
| Curso en vídeo | Alto (1-3 meses) | 97-997€ | Alta una vez lanzado | Cualquier especialidad |
| Workshop grabado | Medio (1-3 días) | 47-197€ | Alta | Habilidades prácticas |
| Membresía / comunidad | Medio inicial + mantenimiento | 29-99€/mes | Media | Nichos con alta recurrencia |
| Pack de recursos | Bajo (compilar lo existente) | 29-79€ | Alta | Cualquier especialidad |

## Cómo Elegir Tu Primer Producto

Primer producto = el que puedes crear más rápido y vender más fácil.

**El test de las 3 preguntas:**
1. ¿Tengo ya este conocimiento o material (aunque no esté empaquetado)?
2. ¿Hay personas dispuestas a pagar por esto? (¿lo han pedido o preguntado?)
3. ¿Puedo crearlo en menos de 30 días con las horas que tengo disponibles?

**El producto de menor resistencia para empezar:**
Las plantillas (templates) son el mejor primer producto: las creas en 1-3 días a partir de herramientas que ya usas, el precio de entrada es bajo (15-49€) y la tasa de conversión es más alta porque el comprador ve exactamente qué obtiene.

**Ejemplos por profesión:**
- Diseñador UX: Kit de templates de Figma para design sprints
- PM: Plantilla de roadmap + OKRs en Notion
- Consultor de marketing: Plantilla de auditoría de marketing en Airtable
- Abogado: Pack de contratos tipo para freelancers
- Desarrollador: Boilerplate de proyecto Next.js + auth + pagos

## El Proceso de Creación en 4 Fases

**Fase 1: Validación (antes de crear) — 1 semana**
No crees el producto y luego vendas. Valida antes:
- Anuncia en LinkedIn que estás creando X. ¿Hay interés?
- Abre preventa a precio de early access con lista de espera
- Pregunta en DMs a 10 personas de tu audiencia: "¿Pagarías X€ por esto? ¿Por qué sí o no?"
Si nadie muestra interés, cambia el producto antes de invertir tiempo.

**Fase 2: Creación mínima — 2-4 semanas**
MVP del producto. No el perfecto, el que resuelve el problema:
- Empieza con lo que ya tienes (templates internas, notas de clientes, sistemas que usas)
- Graba en vídeo antes de escribir (más rápido, más personal)
- 80% de calidad entregado es mejor que 100% que nunca se lanza

**Fase 3: Lanzamiento — 1 semana**
- Precio de lanzamiento (20-30% descuento durante 72h)
- Email a tu lista (si tienes) + posts en LinkedIn/Twitter con el problema que resuelve
- Testimonios del beta group si hiciste preventa

**Fase 4: Distribución evergreen — continuo**
- SEO: landing page optimizada para búsquedas que hacen tus compradores potenciales
- Contenido orgánico: posts que enseñan algo relacionado con el producto → CTA al producto
- Afiliados: personas de tu red que lo recomiendan a cambio de comisión (20-30%)

## Plataformas de Venta

| Plataforma | Para qué | Comisión | Audiencia propia |
|---|---|---|---|
| Gumroad | Templates, ebooks, acceso a archivos | 10% + stripe | No, pero tiene descubrimiento |
| Lemon Squeezy | Templates, SaaS, cursos | 5-8% + stripe | No |
| Teachable / Thinkific | Cursos en vídeo | Fijo mensual | No |
| Podia | Todo-en-uno: curso + digital | Fijo mensual | No |
| Notion + Stripe | Plantillas de Notion | Solo Stripe (2-3%) | No (distribución manual) |
| Tu propia web | Todo | Solo pasarela de pago | Construyes la tuya |

**Recomendación:** Empieza en Gumroad o Lemon Squeezy para simplicidad. Cuando tengas tracción, mueve a tu propia web para controlar la relación con el comprador.

## Métricas de un Negocio de Productos Digitales

| Métrica | Definición | Objetivo primer año |
|---|---|---|
| MRR de productos | Ingresos mensuales recurrentes de productos | 500-2.000€/mes |
| Tasa de conversión de la landing page | Visitantes que compran | 1-3% |
| Email list growth | Nuevos suscriptores por mes | > 100/mes |
| Ingresos por email subscriber | MRR / tamaño de lista | > 1€/suscriptor |
| Reseñas o testimonios | Reviews públicas en plataforma | > 20 en el primer trimestre |

## Entregables

Con el contexto que me des, produce:
1. Identificación del mejor primer producto para tu especialidad con justificación
2. Outline del producto: estructura, apartados y tiempo estimado de creación
3. Plan de validación (preventa o lista de espera) para la próxima semana
4. Landing page copy: titular, descripción, beneficios, CTA y FAQs
5. Plan de contenido orgánico para los 30 días del lanzamiento (8 posts con enfoque)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Identificar, crear y lanzar el primer producto digital como freelance para generar ingresos que no dependan del tiempo vendido por dinero',
                'vote_score'       => 39,
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
