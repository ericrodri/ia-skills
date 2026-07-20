<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills24Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de afiliados: construye un programa que convierte a tus clientes en tu equipo de ventas',
                'description'       => 'Diseña y lanza el programa de afiliados que convierte a clientes satisfechos, creadores de contenido e influencers del sector en una red de ventas que trabaja para ti. Con la estructura de comisiones, las herramientas, el proceso de onboarding de afiliados y las métricas clave.',
                'prompt_content'    => <<<'PROMPT'
Eres un Growth Manager con experiencia diseñando programas de afiliados para SaaS, infoproductos y ecommerce que han generado entre el 15-30% del revenue total a través del canal de afiliados.

Contexto:
- Tipo de producto/servicio: [SaaS / curso online / ecommerce / servicio / otro]
- Precio del producto: [€]
- Margen bruto del producto: [% — para saber cuánto puedes pagar de comisión]
- LTV del cliente: [€ — para calcular cuánto vale un cliente referido]
- Estado actual: [no tenemos programa / tenemos uno que no funciona / queremos escalar el que tenemos]
- Tipo de afiliado objetivo: [clientes actuales / creadores de contenido del sector / otras empresas complementarias]

## Programa de Afiliados — [Empresa]

### 🏗️ Los 3 tipos de programa de afiliados (y cuál elegir)

**Tipo 1 — Programa de referidos para clientes:**
Clientes actuales refieren a otros y reciben una recompensa.
Mejor para: SaaS B2B, servicios con comunidad de usuarios.
Comisión típica: descuento en la suscripción, créditos, o comisión en efectivo (€20-50 por referido).

**Tipo 2 — Programa de afiliados para creadores:**
Bloggers, YouTubers, creadores de contenido del nicho promueven a cambio de comisión.
Mejor para: infoproductos, SaaS con comunidad online, ecommerce con nicho definido.
Comisión típica: 20-40% del primer pago, o porcentaje recurrente en SaaS.

**Tipo 3 — Programa de partners tecnológicos:**
Otras empresas que tienen tu cliente ideal integran o recomiendan tu producto.
Mejor para: B2B con integraciones (ej: una agencia de marketing recomienda tu SaaS a sus clientes).
Comisión típica: 15-25% recurrente.

### 💰 Cómo calcular la comisión correcta

**El límite máximo:**
```
LTV del cliente: €1.200 (€100/mes × 12 meses promedio)
CAC actual por canal pagado: €300
Margen que puedes pagar por el canal de afiliados: €300 (para competir con otros canales)

Comisión máxima = €300 por referido convertido
(o el equivalente en % del primer año: 300/1200 = 25%)
```

**Lo que te diferencia de los competidores:**
- Comisión recurrente vs. one-time (en SaaS, la recurrente es más atractiva para afiliados)
- Cookie de seguimiento larga (90 días vs. 30 días estándar)
- Payouts rápidos (mensual vs. trimestral)
- Material de marketing listo para usar

### 🛠️ Las herramientas para gestionar el programa

**Para SaaS:**
- Rewardful (integración nativa con Stripe, muy fácil de configurar)
- PartnerStack (más completo, para programas grandes)
- FirstPromoter

**Para ecommerce:**
- Shopify + una app de afiliados (Refersion, Affiliatly)

**Para cualquier negocio:**
- Tapfiliate
- Impact.com (para programas grandes)

**El mínimo viable para lanzar:**
Si tienes Stripe, Rewardful se configura en 2 horas y cuesta $49/mes.
Para empezar, no necesitas nada más complejo.

### 📋 El onboarding del afiliado (los primeros 7 días son críticos)

**El kit del afiliado que tiene todo lo que necesitan:**
```
1. Email de bienvenida:
   - Link a su dashboard personal
   - Código/link de referido único
   - Cómo funciona la comisión
   - Cuándo y cómo se paga

2. El material de marketing listo:
   - 5 imágenes para RRSS (verticales y horizontales)
   - 3 emails de ejemplo que pueden usar/adaptar
   - 2 textos de post para LinkedIn
   - 1 video corto de producto (para embeber en sus canales)

3. Los argumentos de venta:
   - Las 3 razones principales por las que sus seguidores se beneficiarán
   - Las preguntas frecuentes con las respuestas
   - Los casos de éxito más relevantes para su audiencia

4. Cómo obtener ayuda:
   - Canal de Slack exclusivo para afiliados (o email dedicado)
   - Frecuencia de los emails de actualización (1 vez/mes: novedades + tips)
```

### 📊 Las métricas del programa de afiliados que debes monitorear mensualmente
Los 5 KPIs del programa de afiliados y cómo usarlos para identificar qué afiliados activar, cuáles motivar y cuáles descontinuar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Marketing afiliados, programa referidos, partners, comisiones, canal de ventas',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Monorepo con Turborepo o Nx: gestiona múltiples apps y paquetes compartidos sin volverte loco',
                'description'       => 'Configura y gestiona un monorepo con Turborepo o Nx que comparte código entre múltiples aplicaciones, optimiza los builds con caché inteligente y mantiene la estructura organizada a medida que el proyecto crece. Con la estructura de carpetas, la gestión de dependencias compartidas y la configuración de CI/CD.',
                'prompt_content'    => <<<'PROMPT'
Eres un Staff Engineer con experiencia migrando proyectos de repositorios separados a monorepos con Turborepo y Nx en stacks de TypeScript, React y Node.js con equipos de 5-30 ingenieros.

Contexto:
- Stack: [TypeScript + React / Node.js / Next.js / Vue / otro]
- Situación actual: [múltiples repos separados / un repo con todo mezclado / empezando desde cero]
- Apps que quieres gestionar: [web app / app móvil / API / scripts / packages de UI]
- Equipo: [N ingenieros]
- Herramienta elegida o a evaluar: [Turborepo / Nx / no sé cuál elegir]

## Monorepo con Turborepo — [Proyecto]

### 🤔 Turborepo vs. Nx: cuándo elegir cada uno

**Turborepo:**
- Más simple de configurar y entender
- Ideal para equipos que quieren monorepo sin overhead de configuración
- Mejor integración con el ecosistema npm/pnpm existente
- El turbo.json es muy legible

**Nx:**
- Más potente — generadores de código, grapho de dependencias visual, plugins por framework
- Ideal para proyectos grandes con muchas apps y librerías
- Mayor curva de aprendizaje inicial
- Mejor para equipos grandes que necesitan automatización de scaffolding

**La recomendación pragmática:**
Si tienes <5 apps y el equipo no supera 10 personas → Turborepo.
Si tienes >5 apps, múltiples frameworks o necesitas generadores → Nx.

### 🏗️ La estructura del monorepo con Turborepo

```
my-monorepo/
├── apps/
│   ├── web/                  # Next.js app principal
│   ├── api/                  # Node.js / Express API
│   └── docs/                 # Docusaurus o VitePress
│
├── packages/
│   ├── ui/                   # Componentes de UI compartidos
│   ├── config/               # Configuraciones compartidas
│   │   ├── eslint/
│   │   ├── tsconfig/
│   │   └── tailwind/
│   ├── database/             # Schema de Prisma + utilidades de DB
│   └── utils/                # Funciones de utilidad compartidas
│
├── turbo.json                # Configuración de Turborepo
├── package.json              # Root package.json
└── pnpm-workspace.yaml       # Configuración de workspace (con pnpm)
```

### ⚙️ La configuración básica de Turborepo

**turbo.json:**
```json
{
  "$schema": "https://turbo.build/schema.json",
  "globalDependencies": ["**/.env.*local"],
  "pipeline": {
    "build": {
      "dependsOn": ["^build"],  // "^" = primero build las dependencias
      "outputs": [".next/**", "!.next/cache/**", "dist/**"]
    },
    "test": {
      "dependsOn": ["^build"],
      "outputs": ["coverage/**"]
    },
    "lint": {
      "outputs": []
    },
    "dev": {
      "cache": false,        // dev no se cachea
      "persistent": true     // proceso persistente (no termina)
    }
  }
}
```

**Root package.json:**
```json
{
  "name": "my-monorepo",
  "private": true,
  "scripts": {
    "build": "turbo build",
    "dev": "turbo dev",
    "lint": "turbo lint",
    "test": "turbo test",
    "format": "prettier --write \"**/*.{ts,tsx,md}\""
  },
  "devDependencies": {
    "turbo": "latest",
    "prettier": "latest"
  }
}
```

**pnpm-workspace.yaml:**
```yaml
packages:
  - 'apps/*'
  - 'packages/*'
```

### 📦 Cómo usar un package compartido en una app

**En packages/ui/package.json:**
```json
{
  "name": "@myrepo/ui",
  "version": "0.0.1",
  "main": "./index.tsx",
  "exports": {
    ".": "./index.tsx"
  }
}
```

**En apps/web/package.json:**
```json
{
  "dependencies": {
    "@myrepo/ui": "workspace:*"  // pnpm resuelve al package local
  }
}
```

**En apps/web/app/page.tsx:**
```typescript
import { Button, Card } from '@myrepo/ui'
// Import directo del package del monorepo — hot reload funciona
```

### 🚀 El caché inteligente de Turborepo (la mayor ventaja)

Turborepo cachea los outputs de cada task. Si el código no ha cambiado, rehusa el resultado anterior.

```bash
turbo build
# Primera vez: compila todo — 45 segundos
# Segunda vez (sin cambios): "cache hit" — 0.5 segundos
# Después de cambiar solo web/: solo recompila web/ — 8 segundos
```

**El remote cache con Vercel:**
```bash
turbo login
turbo link
# Ahora el caché se comparte entre todos los desarrolladores y CI
```

### 🔧 La configuración de CI/CD para el monorepo
El pipeline de GitHub Actions que solo ejecuta los tests y builds de los packages afectados por el PR.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Monorepo, Turborepo, Nx, arquitectura frontend, packages compartidos, CI/CD',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de landing pages que convierten: la anatomía de la página que vende sin vender',
                'description'       => 'Diseña landing pages con tasas de conversión del 5-15% aplicando los principios de diseño persuasivo, la jerarquía visual correcta y la psicología del usuario que decide si sigue leyendo en los primeros 5 segundos. Con la estructura de bloques, las mejores prácticas de CTA y los errores que matan las conversiones.',
                'prompt_content'    => <<<'PROMPT'
Eres un Conversion Rate Optimization (CRO) Designer con experiencia diseñando landing pages que han pasado de tasas de conversión del 1-2% al 8-15% para SaaS, infoproductos y servicios profesionales B2B.

Contexto:
- Producto o servicio: [describe]
- Objetivo de la landing: [registro trial / compra directa / solicitar demo / descargar lead magnet]
- Precio del producto: [€]
- Audiencia: [cargo, sector, nivel de awareness del problema]
- Tráfico de entrada: [Google Ads / SEO / RRSS / email / otro]
- Problema actual: [tasa de conversión baja / no sé por qué no convierte / quiero mejorar una landing existente]

## Diseño de Landing Page de Alta Conversión — [Producto]

### 🧠 Los 5 segundos que deciden si el usuario se queda

El usuario llega a tu landing y en 5 segundos decide si se queda o se va.
En esos 5 segundos solo procesa:
- ¿Qué es esto?
- ¿Es para mí?
- ¿Me importa?

**Lo que debe estar visible SIN scroll (above the fold):**
1. **El titular:** qué haces en una frase. El beneficio principal, no el nombre del producto.
2. **El subtítulo:** para quién es y qué problema resuelve (1-2 frases).
3. **La CTA principal:** un solo botón, visible y con acción clara.
4. **La prueba social:** 3-5 logos de clientes conocidos o número de usuarios.

**Los titulares que convierten (y por qué):**
```
❌ "La solución para tu negocio" → demasiado genérico
❌ "Plataforma de gestión avanzada" → nadie entiende qué hace
✅ "[Resultado específico] en [plazo] sin [obstáculo]"
✅ "El [tipo de herramienta] para [audiencia específica] que [resultado concreto]"

Ejemplos reales:
"Envía 10.000 emails en 10 minutos sin que lleguen a spam" (email marketing)
"El software de facturación que los autónomos españoles realmente entienden"
```

### 📐 La estructura de bloques de una landing que convierte

**Bloque 1 — Hero (above the fold):**
Titular + subtítulo + CTA + prueba social básica (logos o número)

**Bloque 2 — El problema (agitación):**
Describe el dolor del usuario con sus propias palabras.
Si el usuario lee esto y piensa "exactamente, eso me pasa a mí" → vas bien.
No pongas soluciones aquí — solo el problema.

**Bloque 3 — La solución (transformación):**
Cómo tu producto transforma la situación del usuario.
No features — beneficios. No "tenemos API" — "conectas con tus herramientas en 2 minutos".

**Bloque 4 — Cómo funciona (el proceso):**
3-4 pasos simples que explican qué hace el usuario para obtener el resultado.
Reduce la ansiedad del usuario ante el cambio.

**Bloque 5 — Prueba social (confianza):**
- Testimonios reales con foto, nombre y empresa (no "Juan M., Madrid")
- Casos de éxito con resultados específicos
- Logos de empresas clientes conocidas
- Puntuaciones (Trustpilot, G2, Capterra)

**Bloque 6 — FAQ (objeciones):**
Las 5-7 preguntas que frenan al usuario antes de comprar.
Respóndelas antes de que las pregunten.

**Bloque 7 — CTA final:**
Repetir la oferta + el CTA + reducir la fricción ("sin tarjeta de crédito" / "cancela cuando quieras").

### 🎯 Las CTAs que convierten más (y por qué)

**Malos CTAs:**
- "Enviar" → sin contexto
- "Haga clic aquí" → sin beneficio
- "Más información" → sin compromiso

**Buenos CTAs (fórmula: verbo + beneficio + reducción de riesgo):**
```
"Empieza gratis — no necesitas tarjeta de crédito"
"Prueba 14 días gratis (cancela cuando quieras)"
"Consigue acceso ahora por €X/mes"
"Solicita tu demo — te respondemos en 24h"
```

**El botón perfecto:**
- Color que contraste con el fondo (no el mismo que el branding si el fondo ya es de ese color)
- Texto en primera persona: "Quiero empezar" en lugar de "Empezar"
- Tamaño mínimo: 44px de alto en móvil (el estándar de Apple para taps cómodos)

### 🚨 Los 7 errores de diseño que matan las conversiones
Los errores más frecuentes en landing pages que reducen la conversión a la mitad y cómo detectarlos en la tuya.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Landing page, CRO, conversión, diseño web, copywriting visual, above the fold',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Construcción del ICP (Ideal Customer Profile): define exactamente quién es tu cliente ideal y por qué',
                'description'       => 'Define el perfil del cliente ideal (ICP) de tu negocio con datos reales de tus mejores clientes actuales. Con el proceso de análisis de la base de clientes, los atributos que mejor predicen el éxito, la diferencia entre ICP y buyer persona y cómo usar el ICP para mejorar la captación y la retención.',
                'prompt_content'    => <<<'PROMPT'
Eres un Go-to-Market Strategist con experiencia definiendo ICPs para empresas B2B SaaS y de servicios que han conseguido reducir su ciclo de venta un 30-40% al enfocar el equipo de ventas en el perfil de cliente correcto.

Contexto:
- Tipo de producto/servicio: [SaaS / servicios profesionales / ecommerce B2B / otro]
- Base de clientes actual: [N clientes]
- Mayor problema: [captamos muchos leads que no convierten / los clientes que cerramos churnan rápido / no sabemos a quién vender / el equipo de ventas persigue cualquier lead]
- Datos disponibles: [tenemos datos de CRM / tenemos datos de uso del producto / solo tenemos intuición]

## Ideal Customer Profile (ICP) — [Empresa]

### 🧠 ICP vs. Buyer Persona: la diferencia que importa

**ICP (Ideal Customer Profile):**
Describe a la empresa/organización que es tu mejor cliente.
Usado para: targeting de campañas, prospección del equipo de ventas.
Nivel: organizacional (la empresa, no la persona).

**Buyer Persona:**
Describe a la persona dentro de esa empresa que toma la decisión de compra.
Usado para: creación de contenido, mensajes de marketing, scripts de ventas.
Nivel: individual (el decisor/influencer dentro de la empresa).

Necesitas ambos — empiezas por el ICP.

### 🔍 El proceso basado en datos para definir el ICP

**Paso 1 — Identifica a tus mejores clientes:**

Define "mejor cliente" con datos, no con intuición:
```
Criterios para seleccionar el top 20% de clientes:
- LTV más alto (lo que han pagado en total)
- Menor churn (llevan más tiempo contigo)
- NPS más alto (te recomiendan)
- Menor coste de soporte (no abren muchos tickets)
- Menor ciclo de venta (fue fácil cerrarlos)

Filtra tu base de clientes por estos criterios.
El resultado es tu lista de "mejores clientes" — serán la base de tu ICP.
```

**Paso 2 — Busca los patrones comunes:**

Para cada cliente del top 20%, documenta:
```
Atributos firmográficos:
- Sector / industria
- Tamaño de empresa (empleados)
- Facturación anual
- Modelo de negocio (B2B / B2C / marketplace)
- Geografía
- Etapa de madurez (startup / scale-up / empresa consolidada)

Atributos tecnológicos:
- Herramientas que usan (stack de tech)
- Nivel de digitalización
- Presencia online

Atributos de situación:
- ¿Qué les llevó a buscar tu solución? (trigger)
- ¿Qué alternativa usaban antes?
- ¿Qué dolor tenían que tu producto resuelve?
- ¿Qué tan urgente era el problema?
```

**Paso 3 — Identifica los patrones estadísticos:**

Si el 70% de tu top 20% de clientes tiene entre 50-200 empleados, es un atributo del ICP.
Si el 80% está en el sector SaaS, es un atributo del ICP.
Si el 90% usaba Excel antes de tu producto, es un trigger del ICP.

**Paso 4 — El ICP en documento:**

```
ICP — [Empresa]

EMPRESA IDEAL:
Sector: [industria específica]
Tamaño: [rango de empleados]
Facturación: [rango]
Modelo de negocio: [B2B / B2C]
Geografía: [países]
Stack tecnológico: [herramientas que ya usan y que se integran con tu producto]

SITUACIÓN QUE ACTIVA LA BÚSQUEDA (triggers):
- [Trigger 1: el evento que hace que busquen una solución como la tuya]
- [Trigger 2]

DOLOR QUE RESUELVES:
El cliente ideal tiene [el problema específico] que le cuesta [impacto cuantificado].

SEÑALES DE QUE NO ES TU CLIENTE IDEAL:
- [Disqualifier 1]
- [Disqualifier 2]
```

### 🎯 Cómo usar el ICP en ventas y marketing

**En la captación:**
Las campañas de Google Ads y LinkedIn se segmentan por los atributos del ICP (sector + tamaño).
Los SDRs hacen outbound solo a empresas que cumplen los criterios del ICP.

**En la calificación:**
Los leads que no cumplen el ICP se descartan rápido (o se referencian a otras soluciones).
El tiempo del equipo de ventas se libera para el perfil correcto.

**En el producto:**
Las decisiones de producto priorizan los casos de uso del ICP.

### 📊 Cómo actualizar el ICP cuando el negocio evoluciona
La cadencia de revisión del ICP y las señales que indican que el perfil del cliente ideal ha cambiado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'ICP, Ideal Customer Profile, buyer persona, segmentación, go-to-market, ventas B2B',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Diseño de la experiencia de onboarding: el flujo que convierte el registro en el primer "aha moment"',
                'description'       => 'Diseña el flujo de onboarding que lleva al usuario del registro al primer momento de valor en el menor tiempo posible. Con el mapa del flujo actual, los puntos de abandono, las mejoras de cada paso y cómo testear el onboarding con usuarios reales.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Designer especializado en onboarding de aplicaciones digitales con experiencia mejorando la tasa de activación del 25% al 55% en SaaS, apps de productividad y plataformas educativas.

Contexto:
- Tipo de producto: [SaaS B2B / app de consumo / marketplace / plataforma educativa]
- El "aha moment" de tu producto: [la acción que el usuario hace cuando "lo entiende"]
- Tasa de activación actual: [% de usuarios que llegan al aha moment en los primeros 7 días]
- Duración actual del onboarding: [N pasos / N minutos]
- Mayor abandono: [en qué paso se van la mayoría de usuarios]
- Herramienta: [Figma / Sketch / diseño directo en código]

## Diseño del Flujo de Onboarding — [Producto]

### 🗺️ El mapa del flujo de onboarding actual (antes de mejorar)

**Dibuja el flujo existente con estas preguntas:**
```
Paso 1: ¿Qué ve el usuario justo después del registro?
Paso 2: ¿Qué tiene que hacer obligatoriamente antes de usar el producto?
Paso 3: ¿Cuándo llega al "aha moment"?
Paso 4: ¿Qué pasa si se va sin llegar al aha moment?

Para cada paso:
- ¿Cuántos usuarios lo completan? (%)
- ¿Cuánto tiempo tarda el usuario medio? (segundos/minutos)
- ¿Qué preguntas tiene el usuario en este paso?
- ¿Qué puede salir mal aquí?
```

**La señal de alerta por paso:**
Si más del 20% de los usuarios abandona en cualquier paso → ese paso tiene un problema grave.
Si más del 10% abandona → merece atención.

### 🎯 Los 5 principios del onboarding que activa

**Principio 1 — Valor primero, configuración después:**
El error más frecuente: pedir al usuario que configure todo antes de que experimente el valor.
El onboarding correcto: muestra el valor primero con un ejemplo o template → luego pide la configuración.

Airbnb no te pide que completes tu perfil antes de ver las primeras propiedades.
Notion no te pide que configures el workspace antes de mostrarte qué puede hacer.

**Principio 2 — El onboarding más corto posible:**
Cada paso adicional = más abandono.
Pregúntate de cada paso: "¿El usuario puede usar el producto sin esto?"
Si la respuesta es sí → mueve ese paso a más adelante o elimínalo.

**Principio 3 — La barra de progreso (pero con trampa):**
La barra de progreso que empieza al 30-40% (no al 0%) tiene mayor tasa de completitud.
El efecto "ya casi estoy" motiva más que "acabo de empezar".

**Principio 4 — El primer éxito en <5 minutos:**
Si el usuario no consigue algo concreto en los primeros 5 minutos → muy probable que no vuelva.
Define qué puede conseguir en 5 minutos y diseña el flujo hacia ese objetivo.

**Principio 5 — El empty state como oportunidad:**
El estado vacío (la pantalla en blanco antes de que el usuario haya añadido datos) es la mayor causa de abandono.
La solución: templates, datos de ejemplo, o guías paso a paso que evitan la "página en blanco".

### 📱 Los patrones de onboarding que funcionan mejor según el tipo de producto

**Para SaaS B2B (setup inicial obligatorio):**
```
1. Registro simplificado (email + password o SSO)
2. Pregunta de personalización (1 sola): "¿Para qué usarás [producto]?"
3. Template o workspace prellenado según la respuesta
4. El primer "haz esto" guiado (tooltip/tour)
5. Invitación al equipo (si es colaborativo)
6. Configuración adicional opcional
```

**Para app de consumo (valor inmediato):**
```
1. Registro al final, no al principio (primero deja probar)
2. Personalización mínima (2-3 preguntas tipo quiz)
3. El contenido o función personalizada aparece inmediatamente
4. El registro aparece cuando el usuario quiere guardar/compartir
```

**Para marketplace:**
```
Onboarding dual — dos flujos diferentes para compradores y vendedores
Compradores: búsqueda + primera compra sin fricción
Vendedores: configuración del perfil + primer listing → primer ingreso
```

### 🧪 Cómo testear el onboarding con usuarios reales
El proceso de user testing del onboarding (5 usuarios bastan para detectar el 80% de los problemas) y cómo interpretar lo que ves para priorizar las mejoras.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Onboarding UX, activación, aha moment, diseño de flujos, product design',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employer branding: construye la reputación como empleador que atrae talento sin pagar reclutadores',
                'description'       => 'Diseña la estrategia de employer branding que hace que los candidatos quieran trabajar en tu empresa antes de que abras ninguna oferta. Con la propuesta de valor al empleado (EVP), los canales de comunicación, el contenido que convierte y cómo medir si tu marca empleadora está funcionando.',
                'prompt_content'    => <<<'PROMPT'
Eres un Talent Brand Manager con experiencia construyendo la reputación como empleador en empresas tech y startups de 20-300 empleados que han reducido el tiempo de contratación un 40% y mejorado la calidad de los candidatos al crear una marca empleadora reconocida en su nicho.

Contexto:
- Tamaño de la empresa: [N empleados]
- Sector: [tech / fintech / retail / servicios / otro]
- Perfil de talento que quieres atraer: [desarrolladores / diseñadores / ventas / otro]
- Estado actual: [nadie nos conoce como empleador / tenemos buena reputación pero no la comunicamos / tenemos Glassdoor con reviews negativas / queremos escalar la contratación]

## Estrategia de Employer Branding — [Empresa]

### 🎯 La EVP (Employee Value Proposition): por qué alguien trabajaría contigo

**La EVP es la respuesta honesta a esta pregunta:**
"¿Por qué debería trabajar en [tu empresa] en lugar de [tu competidor más conocido]?"

No es la respuesta de marketing — es la respuesta que tus empleados actuales darían.

**El proceso para definir la EVP:**
1. Encuesta interna: "¿Qué es lo que más valoras de trabajar aquí?"
2. Entrevistas de salida: "¿Por qué nos dejas? ¿Qué te llevas?"
3. Entrevistas a los mejores empleados: "¿Por qué te quedas?"

**Los 5 pilares de la EVP:**
```
1. MISIÓN Y PROPÓSITO: ¿qué impacto tiene el trabajo de tu equipo?
2. DESARROLLO PROFESIONAL: ¿cómo crecen las personas aquí?
3. CULTURA Y VALORES: ¿cómo es trabajar aquí en el día a día?
4. COMPENSACIÓN Y BENEFICIOS: ¿qué más allá del salario ofreces?
5. FLEXIBILIDAD Y AUTONOMÍA: ¿cómo se gestiona el trabajo?
```

**El error de la EVP genérica:**
"Equipo joven y dinámico, buen ambiente de trabajo, proyectos desafiantes."
Esto lo dice cualquier empresa. No te diferencia.

**La EVP honesta y diferenciadora:**
"Somos el equipo de backend que está construyendo la infraestructura de pagos de [número] empresas en España. Trabajamos en remoto-first, decisions técnicas tomadas por los ingenieros (no por managers), y cada trimestre el equipo elige en qué áreas se forma."

### 📣 Los canales de employer branding que funcionan

**LinkedIn de la empresa (no solo de los fundadores):**
- Posts del equipo: "un día en el equipo de X"
- Compartir los proyectos en los que trabaja el equipo
- Contenido sobre la cultura: cómo tomáis decisiones, cómo dais feedback
- Las ofertas de trabajo con contexto: por qué abrís el puesto, qué buscáis en realidad

**LinkedIn de los empleados (el canal más potente):**
Anima a los empleados a compartir su trabajo en su LinkedIn personal.
Cada empleado que comparte su trabajo es un embajador de la marca empleadora.
El alcance orgánico de los posts de persona es 3-5x mayor que el de la empresa.

**Glassdoor / Kununu:**
Las empresas con las mejores valoraciones en Glassdoor reciben hasta 3x más solicitudes.
Gestiona activamente las reviews: responde a todas (especialmente las negativas, con honestidad).

**GitHub (para equipos de desarrollo):**
Los desarrolladores revisan el GitHub de la empresa antes de aplicar.
Si tienes repos open source activos, proyectos técnicos interesantes → muéstralos.

**Comunidades específicas del sector:**
Participa en comunidades donde está el talento que buscas:
- Slack de desarrolladores del sector
- Meetups y conferencias técnicas
- Foros de diseño, producto, etc.

### 📸 El contenido que convierte en employer branding

**Los formatos que más funcionan:**
```
1. "Un día en el equipo de X": vídeo o post de 5-7 imágenes que muestra cómo es el trabajo real
2. "Cómo tomamos decisiones sobre [X]": muestra tu cultura de forma específica
3. "Lo que aprendí en 6 meses en [empresa]": escrito por un empleado real
4. "Por qué abrimos este puesto": contexto del equipo y del proyecto al que se une
5. "Nuestro stack técnico en 2026 y por qué": para perfiles técnicos
```

**La frecuencia:**
1-2 posts/semana en LinkedIn de empresa.
Menos importante que la consistencia — 1/semana durante 52 semanas bate 5/semana durante 2 meses.

### 📊 Cómo medir si el employer branding está funcionando
Los 5 indicadores que separan el employer branding que atrae talento del que no produce resultados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Employer branding, EVP, atracción de talento, marca empleadora, Glassdoor, reclutamiento',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Valoración de una startup para rondas de inversión: los métodos que los inversores realmente usan',
                'description'       => 'Entiende y aplica los métodos de valoración que los inversores usan para evaluar startups en fases seed y Series A. Con el método de los múltiplos comparables, el Berkus Method para pre-revenue, el DCF simplificado y cómo defender tu valoración en una negociación.',
                'prompt_content'    => <<<'PROMPT'
Eres un Venture Capital Analyst con experiencia evaluando más de 200 startups en fases pre-seed a Series B y asesorando a fundadores en cómo estructurar y defender su valoración frente a inversores.

Contexto del fundador:
- Etapa de la startup: [pre-seed / seed / Series A]
- Estado de ingresos: [pre-revenue / <€100k ARR / €100k-€1M ARR / >€1M ARR]
- Sector: [SaaS / marketplace / fintech / deeptech / consumer / otro]
- Inversores objetivo: [business angels / fondos micro-VC / fondos seed / CVC]
- Ronda que buscas cerrar: [€] con valoración pre-money de [€ — o no sé todavía]

## Valoración de Startup — [Empresa]

### 🧮 Los métodos de valoración por etapa

**Pre-revenue (pre-seed): el Berkus Method**

El Berkus Method asigna un valor a 5 factores de reducción de riesgo:

```
Factor                          Valor máximo asignado
Idea/concepto validado          €500k
Prototipo funcional             €500k
Equipo con experiencia sectorial €500k
Relaciones estratégicas o pilotos €500k
Ventas / primeros clientes      €500k

Valoración máxima (Berkus):     €2,5M pre-money
```

**Pre-revenue con tracción (pre-seed/seed): múltiplos de fundadores**

En el ecosistema europeo, el rango de valoración pre-money para startups seed en 2024-2025 es:
- Sin producto / solo idea: €500k - €1M
- Con MVP y primeros usuarios: €1M - €3M
- Con product-market fit incipiente y primeros clientes: €3M - €5M

Los factores que mueven el múltiplo:
- Experiencia del equipo (founders que ya han vendido una empresa valen mucho más)
- Tamaño del mercado (TAM >€1B es requisito para muchos fondos)
- Diferenciación técnica o de modelo de negocio
- Momentum (velocidad de crecimiento, aunque sea pequeño)

**Con ingresos (seed/Series A): múltiplos de ARR**

Si tienes ARR, el método más usado:

```
Valoración = ARR × múltiplo

Múltiplos actuales (2024-2025) para SaaS:
- Crecimiento <50% anual: 5-8x ARR
- Crecimiento 50-100% anual: 8-15x ARR
- Crecimiento >100% anual: 15-25x ARR

Ejemplo:
ARR: €500k, creciendo al 80% anual
Valoración = €500k × 12x = €6M pre-money
```

**Los factores que suben o bajan el múltiplo:**

```
Factores que SUBEN el múltiplo (+20-50% sobre el estándar):
- Churn <2% mensual (excelente retención)
- NRR >120% (expansión de revenue en clientes existentes)
- CAC payback <12 meses
- Márgenes brutos >70%
- Equipo con exits previos

Factores que BAJAN el múltiplo (-20-40%):
- Churn >5% mensual
- Dependencia de 1-2 clientes grandes (>30% del ARR)
- Mercado muy competitivo sin diferenciación clara
- Modelo de negocio con márgenes bajos
```

### 💬 Cómo defender tu valoración en la negociación

**El fundador que propone la valoración primero:**
Ventaja: anclas la negociación en tu número.
Riesgo: si propones demasiado bajo, estás dejando dinero sobre la mesa.

**La respuesta si el inversor dice "está cara":**
No defiendas el número — defiende los datos:
"Entiendo que puede parecer elevada comparada con X. Pero nuestro NRR es del 130%, lo que significa que sin captar un solo cliente nuevo este año, el ARR crecería un 30%. Eso justifica el múltiplo."

**La respuesta si el inversor propone una valoración muy baja:**
"Para llegar a esa valoración, ¿qué métrica o factor estás usando como referencia? Quiero entender la diferencia para ver si hay algo que podamos resolver."

### 📊 La dilución que debes aceptar (y la que debes rechazar)
La guía de dilución razonable por ronda para que a la Series A o Series B todavía tengas suficiente equity para estar motivado y atraer a tu próxima ronda.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Valoración startup, rondas inversión, múltiplos ARR, Berkus method, venture capital',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contrato de distribución y agencia comercial: protege tus intereses en la red de ventas indirecta',
                'description'       => 'Redacta y negocia contratos de distribución y agencia comercial que protegen a tu empresa en la red de ventas indirecta. Con las cláusulas esenciales del contrato de distribución, la diferencia legal entre distribuidor y agente, la exclusividad territorial, los objetivos mínimos y la terminación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en derecho mercantil con experiencia redactando contratos de distribución y agencia comercial para empresas fabricantes y distribuidoras en España y Europa que quieren crear o estructurar redes de ventas indirectas.

Contexto de la empresa:
- Rol en la relación: [fabricante/proveedor que quiere distribuir / distribuidor que quiere tener el contrato bien redactado]
- Tipo de relación: [distribuidor / agente comercial / representante]
- Territorio previsto: [España / UE / un país específico]
- Productos/servicios: [describe]
- Exclusividad prevista: [quiero dar exclusividad / quiero que no sea exclusivo / no lo he decidido]

## Contrato de Distribución y Agencia Comercial — [Empresa]

### ⚖️ La diferencia legal crítica: distribuidor vs. agente comercial

**El distribuidor:**
- Compra el producto al fabricante a precio de distribuidor
- Lo revende a sus clientes en su nombre y por su cuenta
- Asume el riesgo del stock y de los impagos de sus clientes
- El fabricante no tiene relación directa con el cliente final
- La comisión es el margen (diferencia entre precio de compra y precio de venta)

**El agente comercial:**
- Actúa en nombre y por cuenta del fabricante (o principal)
- No compra el producto — presenta y negocia en nombre del principal
- El contrato se firma entre el fabricante y el cliente final
- Cobra una comisión sobre las ventas conseguidas
- Tiene protección especial de la Ley 12/1992 de Contrato de Agencia → la indemnización por clientela es un derecho que no puedes contractualmente eliminar

**Por qué esta distinción es crucial:**
Si llamas "agente" a alguien que actúa como distribuidor, puedes crear problemas de registro mercantil, fiscales y laborales.
Si llamas "distribuidor" a alguien que actúa como agente, les niegas sus derechos legales como agentes.

### 📋 Las cláusulas esenciales del contrato de distribución

**1. El objeto y el territorio:**
```
ARTÍCULO 1 — OBJETO Y TERRITORIO

El fabricante otorga al distribuidor el derecho de distribución de los productos
[descripción específica de la gama de productos, con referencia a catálogo]
en el territorio de [geografía exacta — comunidad autónoma / país / lista de códigos postales].

Este territorio es [exclusivo / no exclusivo]. En caso de exclusividad, el distribuidor
tendrá derecho exclusivo de distribución en el territorio y el fabricante se compromete
a no vender directamente ni a través de terceros en el mismo territorio, salvo [excepciones
específicas: ventas directas a grandes cuentas nombradas, ventas online, etc.].
```

**2. Los objetivos mínimos de venta:**
```
ARTÍCULO 4 — OBJETIVOS DE VENTA

El distribuidor se compromete a alcanzar los siguientes objetivos mínimos de compra:

Año 1: €X (el primer año es normalmente más bajo — el distribuidor está construyendo el mercado)
Año 2: €Y
Año 3: €Z

En caso de no alcanzar el 80% del objetivo en dos años consecutivos, el fabricante
tendrá derecho a [revocar la exclusividad territorial / resolver el contrato con preaviso
de 3 meses / cualquiera de las dos opciones, a elección del fabricante].
```

**3. El precio y las condiciones de compra:**
```
El precio de compra es el precio de lista del fabricante con un descuento del [X]%.
El descuento puede modificarse con preaviso de [90] días.
El distribuidor no puede vender por debajo del [precio mínimo de venta al público
recomendado / precio mínimo de reventa — según las normas de competencia].
```

**4. La terminación y la indemnización:**
```
Para distribuidores (sin la protección de la Ley de Agencia):
El contrato puede resolverse con preaviso de [3-6 meses].
En caso de incumplimiento grave, con efecto inmediato.
No hay indemnización legal obligatoria — solo la pactada en el contrato.

Para agentes comerciales (con protección de la Ley 12/1992):
Indemnización por clientela: hasta 1 año de comisiones medias del último quinquenio.
Esta indemnización no puede eliminarse contractualmente.
```

### 🚨 Las cláusulas que protegen al fabricante y que muchos distribuidores intentan eliminar
La cláusula de no-competencia post-contractual, el derecho de auditoría y la propiedad de la lista de clientes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Contrato distribución, agencia comercial, derecho mercantil, red de ventas, exclusividad',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte self-service: construye el Help Center que reduce el 30% de los tickets sin reducir la satisfacción',
                'description'       => 'Diseña y construye el Help Center que permite a los usuarios resolver sus dudas sin abrir un ticket. Con la arquitectura de contenidos, la escritura de artículos que los usuarios realmente leen, la búsqueda efectiva y cómo medir si el self-service está funcionando.',
                'prompt_content'    => <<<'PROMPT'
Eres un Knowledge Management Specialist con experiencia construyendo bases de conocimiento para equipos de soporte que han reducido el volumen de tickets entre un 20-40% manteniendo o mejorando el CSAT.

Contexto:
- Tipo de producto: [SaaS / ecommerce / app / servicios / otro]
- Estado actual: [sin Help Center / Help Center desactualizado que nadie usa / queremos mejorar el existente]
- Herramienta: [Zendesk Guide / Intercom / Notion / GitBook / HelpScout Docs / otra]
- Volumen de tickets: [N/mes]
- % de tickets que crees que son "self-serviceable": [%]

## Help Center de Alta Eficacia — [Empresa]

### 📐 La arquitectura de contenidos que los usuarios navegan

**El error más frecuente:**
Organizar el Help Center por como está organizado el producto internamente.
Los usuarios no buscan por "módulo de facturación" — buscan por "cómo emitir una factura".

**La arquitectura orientada a tareas:**
```
Estructura incorrecta (orientada al producto):
├── Dashboard
├── Módulo de clientes
├── Módulo de facturación
├── Módulo de informes
└── Configuración

Estructura correcta (orientada a las tareas del usuario):
├── Primeros pasos (onboarding)
│   ├── Configurar tu cuenta en 10 minutos
│   ├── Añadir tu primer cliente
│   └── Emitir tu primera factura
├── Gestionar clientes
│   ├── Crear y editar clientes
│   ├── Importar clientes desde Excel
│   └── Eliminar un cliente
├── Facturación
│   ├── Crear una factura
│   ├── Enviar facturas por email
│   ├── Gestionar facturas vencidas
│   └── Emitir abonos y facturas rectificativas
└── Solucionar problemas
    ├── No puedo acceder a mi cuenta
    ├── El cliente no ha recibido la factura
    └── Error al importar datos
```

### ✍️ Cómo escribir artículos que los usuarios realmente leen

**El formato que funciona:**

```
TÍTULO: La tarea concreta en formato pregunta o infinitivo
✅ "Cómo crear y enviar una factura a un cliente"
❌ "Facturación"

INTRODUCCIÓN (2-3 frases):
Qué va a aprender el usuario al leer esto.
Cuándo necesita hacer esto.

PASOS (numerados):
1. Ve a [sección] → [acción concreta]
2. Rellena los campos de [X, Y, Z]
3. Haz clic en [botón — en negrita]

CAPTURAS DE PANTALLA:
Una captura por paso (o al menos en los pasos complejos)
Usa anotaciones para señalar exactamente dónde debe hacer clic

CONSEJOS (opcional):
💡 Si necesitas hacer X, también puedes Y.
⚠️ Atención: si haces Z antes de W, tendrás que...

ARTÍCULOS RELACIONADOS (al final):
- [Artículo 1 relacionado]
- [Artículo 2 relacionado]
```

**Las 5 reglas de escritura del Help Center:**
1. Una tarea por artículo (no combines "crear y editar facturas" en un mismo artículo)
2. Verbos de acción al principio de cada paso ("Ve a...", "Haz clic...", "Rellena...")
3. El nombre del botón o elemento de UI siempre en **negrita**
4. Capturas actualizadas — un artículo con capturas desactualizadas es peor que ningún artículo
5. Longitud: lo que requiere la tarea — ni más ni menos

### 🔍 La búsqueda que realmente funciona

**El problema de la búsqueda en Help Centers:**
El usuario busca "reembolso" y el artículo se llama "Gestión de devoluciones" → no encuentra nada.

**La solución — alias y sinónimos:**
La mayoría de herramientas de Help Center permiten añadir palabras clave/sinónimos a cada artículo.
Para el artículo "Gestión de devoluciones" añade: reembolso, devolver, recuperar el dinero, cancelar compra.

### 📊 Cómo medir si el self-service está funcionando
Las 4 métricas del Help Center que indican si los artículos están resolviendo el problema o si el usuario termina abriendo un ticket de todas formas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Help Center, self-service, base de conocimiento, documentación soporte, deflexión tickets',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Paquetes y productización del servicio freelance: deja de cobrar por hora y empieza a cobrar por resultado',
                'description'       => 'Transforma tu servicio freelance de venta de horas a venta de paquetes productizados con precio fijo que atraen mejor a los clientes, eliminan la negociación y permiten escalar los ingresos sin trabajar más horas. Con los 3 tipos de paquetes, el pricing y cómo presentarlos.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Strategist especializado en freelancers y consultores que has ayudado a más de 100 profesionales independientes a pasar de cobrar €50-80/hora a cerrar proyectos de €3.000-15.000 con paquetes productizados.

Perfil del freelance:
- Especialidad: [describe tu servicio]
- Tarifa actual: [€/hora o €/proyecto]
- Tipo de clientes: [startups / PYME / grandes empresas / particulares]
- Mayor problema con el modelo actual: [negociar precio cada vez / los clientes piden siempre más / no puedo escalar los ingresos sin trabajar más / no sé cómo empezar]

## Productización del Servicio Freelance — [Tu Especialidad]

### 🧠 Por qué el modelo de horas perjudica al freelance

**El problema del modelo por horas:**
1. El cliente siempre negocia el precio (cada proyecto = nueva negociación de tarifas)
2. Cuanto más eficiente eres, menos cobras (si tardas menos en hacer algo → cobras menos)
3. No puedes escalar sin trabajar más horas (tu ingreso tiene un techo físico)
4. El cliente te ve como recurso fungible, no como experto

**El problema del "proyecto a medida":**
Cada proyecto es diferente → imposible estandarizar → imposible escalar → siempre empiezas de cero.

**El beneficio de los paquetes productizados:**
- El cliente elige lo que necesita — sin negociación de precio
- El proceso está estandarizado — tú eres más eficiente
- El precio refleja el valor, no las horas
- Te posicionas como experto en una solución específica, no como recurso genérico

### 📦 Los 3 tipos de paquetes que funcionan

**Tipo 1 — El paquete de entrada (el "starter"):**
Objetivo: que el cliente pruebe tu trabajo con una inversión baja, sin riesgo.
Precio: el equivalente a 4-8 horas de tu tarifa actual.
Alcance: una tarea muy concreta con un entregable muy definido.

Ejemplo para un diseñador web:
"Auditoría de UX: análisis de tu web actual con 10 recomendaciones prioritarias de mejora. €500. Entrega en 5 días."

**Tipo 2 — El paquete principal (el "core"):**
Objetivo: el servicio que más valor aporta al cliente y donde más beneficio tienes.
Precio: €2.000-€10.000 según el sector.
Alcance: el proyecto completo con resultado definido.

Ejemplo para un diseñador web:
"Rediseño de landing page de alta conversión: wireframes, diseño en Figma y entrega de assets para desarrollo. €3.500. Entrega en 3 semanas."

**Tipo 3 — El paquete recurrente (el "retainer"):**
Objetivo: ingresos predecibles cada mes.
Precio: precio mensual fijo por un número definido de horas o entregables.

Ejemplo para un diseñador web:
"Plan de diseño mensual: hasta 15 peticiones de diseño/mes (assets, landing pages, posts), respuesta en 48h. €1.200/mes."

### 💰 El pricing de los paquetes (no basado en horas)

**La fórmula del precio basado en valor:**
No calcules precio = horas × tarifa.
Calcula: ¿cuánto vale el resultado para el cliente?

"Mi auditoría de UX tarda 6 horas. A €80/hora = €480.
Pero si las recomendaciones aumentan la conversión de la web un 10%, y la web genera €10.000/mes en leads → el valor para el cliente es €12.000/año.
El precio de €500 es irrisoriamente bajo en proporción al valor. Podría cobrar €1.500-2.000."

**Los 3 niveles de precio (la estrategia del ancla):**
```
BASIC (la opción low-cost para los que tienen poco presupuesto):  €X
PRO (la opción más popular — aquí está tu margen):               €XX
PREMIUM (la opción con máximos entregables o acceso a ti):       €XXX
```

El 70% de los clientes elige el nivel medio (PRO).
El nivel PREMIUM hace que el PRO parezca razonable.
El nivel BASIC te da ventas sin negociación de precio para proyectos pequeños.

### 🎤 Cómo presentar los paquetes en tu web y propuestas
La estructura de la página de servicios productizados que convierte visitantes en clientes sin necesidad de llamada de descubrimiento.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Productización freelance, paquetes de servicios, pricing por valor, retainer, escalar ingresos',
                'vote_score'        => 48,
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
