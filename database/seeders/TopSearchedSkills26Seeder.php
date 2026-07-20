<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills26Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de PR y relaciones con medios: consigue cobertura mediática sin agencia de comunicación',
                'description'       => 'Diseña la estrategia de relaciones con medios que consigue cobertura en publicaciones relevantes de tu sector sin contratar una agencia de PR. Con la lista de medios objetivo, la nota de prensa perfecta, el pitch periodístico que consigue respuesta y el seguimiento que no molesta.',
                'prompt_content'    => <<<'PROMPT'
Eres un PR Strategist con experiencia consiguiendo cobertura para startups y PYME en medios como El País, El Español, Xataka, El Referente y publicaciones sectoriales B2B sin presupuesto de agencia de comunicación.

Contexto:
- Empresa y producto: [describe]
- La noticia que quieres comunicar: [lanzamiento / hito / dato / estudio / punto de vista / otro]
- Medios objetivo: [generales / tech / sector específico / regionales]
- Estado actual: [nunca hemos hecho PR / ya hemos enviado notas de prensa sin respuesta / quiero mejorar el proceso]

## Estrategia de PR y Medios — [Empresa]

### 🎯 La pregunta que los periodistas hacen siempre: "¿por qué ahora?"

El 90% de las notas de prensa que los periodistas reciben van directamente a la papelera.
No porque sean mal escritas — sino porque no son noticias.

**El test de noticia:**
¿Es nuevo? ¿Es relevante para los lectores del medio? ¿Tiene datos o evidencias? ¿Tiene un ángulo de interés humano?

**Los tipos de noticia que los periodistas publican:**
```
1. El dato o el estudio: "El X% de [audiencia] hace Y" (con datos propios o de mercado)
2. El hito: "hemos conseguido X [número concreto] de [métrica]"
3. El punto de vista de experto: "Por qué [tendencia/cambio] va a impactar a [sector]"
4. La historia: el cliente que consiguió [resultado] gracias a [tu producto]
5. El lanzamiento: cuando hay una funcionalidad realmente nueva (no "hemos mejorado el diseño")
```

**Lo que no es noticia:**
"Empresa X lanza nueva versión de su software."
"Empresa X anuncia su participación en el evento Y."
"Empresa X celebra su aniversario."

### 📝 La nota de prensa que consigue respuesta

**El formato que los periodistas prefieren:**

```
TITULAR: El ángulo de la noticia en 12 palabras máximo
(No el nombre de tu empresa — el ángulo que importa a los lectores del medio)

SUBTÍTULO: El contexto que amplía el titular (1 frase)

LA PIRÁMIDE INVERTIDA:
Párrafo 1 (lead): las 5W + la H en 2-3 frases
  - Who: quién
  - What: qué pasó/se lanzó/se descubrió
  - When: cuándo
  - Where: dónde
  - Why: por qué importa
  - How: cómo

Párrafo 2-3: el contexto y los datos que respaldan la noticia

Párrafo 4: la cita del portavoz (una cita real, no el mensaje de marketing)

Párrafo 5: contexto de la empresa (boilerplate)

Datos de contacto del portavoz PR:
- Nombre + email + móvil (para llamadas urgentes)
- Disponibilidad para entrevistas
```

**La cita que los periodistas usan (y la que nunca usan):**
```
❌ "Estamos muy orgullosos de lanzar este innovador producto que transformará el mercado."
✅ "En los últimos 6 meses hemos visto que el 70% de nuestros clientes [hacen X] — y eso es un problema que nadie había resuelto hasta ahora."
```

### 📧 El pitch periodístico (más poderoso que la nota de prensa)

**La nota de prensa es para información.**
**El pitch es para conseguir que el periodista escriba una historia.**

El pitch va directo al periodista por email o LinkedIn. Es personalizado para cada uno.

**La estructura del pitch en 5 líneas:**
```
Línea 1: [Su nombre], sigo [el artículo/la sección/la cobertura de X tema] que cubres.
Línea 2: Tengo una historia que creo que le puede interesar a tu audiencia:
          [La noticia en una frase — el ángulo que conecta con lo que cubren]
Línea 3: El dato/evidencia que hace la historia relevante:
          "[Dato concreto] que demuestra que [el ángulo de la historia]."
Línea 4: Por qué soy el ángulo correcto para esta historia:
          "[Empresa/fundador] ha [hecho X] en los últimos [Y meses]."
Línea 5: La pregunta de apertura:
          "¿Te interesaría hablar esta semana? Puedo aportarte [datos exclusivos / entrevista / demo]."
```

### 🤝 El proceso de seguimiento que no molesta al periodista
El timing y el tono del follow-up que mantiene la relación abierta sin convertirte en spam.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'PR, relaciones con medios, nota de prensa, pitch periodístico, comunicación',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'CI/CD con GitHub Actions: automatiza el pipeline de integración y despliegue de tu aplicación',
                'description'       => 'Configura el pipeline de CI/CD con GitHub Actions que automatiza los tests, el build y el despliegue de tu aplicación. Con los workflows para diferentes estrategias de despliegue, la gestión de secrets y variables de entorno, y los errores más frecuentes que rompen el pipeline.',
                'prompt_content'    => <<<'PROMPT'
Eres un DevOps Engineer con experiencia configurando pipelines de CI/CD con GitHub Actions para aplicaciones Node.js, Python, PHP y Go desplegadas en AWS, GCP, DigitalOcean y VPS con Nginx.

Contexto:
- Stack: [Node.js / Python / PHP / Go / otro]
- Plataforma de despliegue: [AWS / GCP / DigitalOcean / Heroku / VPS propio / Vercel / otro]
- Estado actual: [sin CI/CD / despliegue manual / GitHub Actions configurado pero con problemas]
- Tests existentes: [sí, tenemos / no tenemos / estamos implementando]
- Rama principal: [main / master]

## Pipeline CI/CD con GitHub Actions — [Proyecto]

### 🏗️ La arquitectura del workflow de CI/CD

**El flujo típico de CI/CD:**
```
Push/PR → Lint → Tests → Build → Deploy

Rama feature/* → Lint + Tests (sin deploy)
Rama main     → Lint + Tests + Build + Deploy a Staging
Tag v*.*.* → Lint + Tests + Build + Deploy a Producción
```

### ⚙️ El workflow de CI básico (tests en cada PR)

**`.github/workflows/ci.yml`:**
```yaml
name: CI

on:
  push:
    branches: [ main, develop ]
  pull_request:
    branches: [ main, develop ]

jobs:
  test:
    runs-on: ubuntu-latest

    strategy:
      matrix:
        node-version: [18.x, 20.x]  # test en múltiples versiones

    steps:
      - name: Checkout code
        uses: actions/checkout@v4

      - name: Setup Node.js ${{ matrix.node-version }}
        uses: actions/setup-node@v4
        with:
          node-version: ${{ matrix.node-version }}
          cache: 'npm'  # caché de dependencias

      - name: Install dependencies
        run: npm ci  # usa el lockfile — más determinístico que npm install

      - name: Run linter
        run: npm run lint

      - name: Run tests
        run: npm test -- --coverage

      - name: Upload coverage
        uses: codecov/codecov-action@v3
        with:
          token: ${{ secrets.CODECOV_TOKEN }}
```

### 🚀 El workflow de despliegue automático

**Deploy a VPS con SSH (el caso más frecuente en proyectos propios):**

```yaml
# .github/workflows/deploy.yml
name: Deploy to Production

on:
  push:
    branches: [ main ]  # solo al hacer merge a main

jobs:
  deploy:
    runs-on: ubuntu-latest
    needs: test  # primero tests, luego deploy

    steps:
      - name: Checkout code
        uses: actions/checkout@v4

      - name: Setup SSH
        uses: webfactory/ssh-agent@v0.8.0
        with:
          ssh-private-key: ${{ secrets.SSH_PRIVATE_KEY }}

      - name: Deploy via SSH
        run: |
          ssh -o StrictHostKeyChecking=no ${{ secrets.SERVER_USER }}@${{ secrets.SERVER_HOST }} << 'EOF'
            cd /var/www/mi-app
            git pull origin main
            npm ci --only=production
            npm run build
            pm2 reload ecosystem.config.js --env production
          EOF
```

**Deploy a Vercel (para Next.js):**
```yaml
      - name: Deploy to Vercel
        uses: amondnet/vercel-action@v25
        with:
          vercel-token: ${{ secrets.VERCEL_TOKEN }}
          vercel-org-id: ${{ secrets.VERCEL_ORG_ID }}
          vercel-project-id: ${{ secrets.VERCEL_PROJECT_ID }}
          vercel-args: '--prod'  # solo main va a producción
```

### 🔐 La gestión de secrets en GitHub Actions

**Cómo añadir secrets:**
Repository → Settings → Secrets and variables → Actions → New repository secret

**Los secrets más frecuentes que necesitarás:**
```
SSH_PRIVATE_KEY          → clave privada para despliegue vía SSH
SERVER_HOST              → IP o dominio del servidor
SERVER_USER              → usuario SSH (ubuntu, deploy, etc.)
DATABASE_URL             → string de conexión a la base de datos
JWT_SECRET               → secret para firma de tokens
VERCEL_TOKEN             → token de API de Vercel
AWS_ACCESS_KEY_ID        → credenciales AWS
AWS_SECRET_ACCESS_KEY    → credenciales AWS
CODECOV_TOKEN            → para reporting de cobertura
```

**Usar secrets en el workflow:**
```yaml
env:
  DATABASE_URL: ${{ secrets.DATABASE_URL }}
  JWT_SECRET: ${{ secrets.JWT_SECRET }}
```

### ⚡ El caché de dependencias que acelera el pipeline

Sin caché: instalar dependencias tarda 60-120 segundos en cada run.
Con caché: 2-5 segundos.

```yaml
- name: Cache dependencies
  uses: actions/cache@v3
  with:
    path: ~/.npm          # ~/.cache/pip para Python / vendor para PHP
    key: ${{ runner.os }}-node-${{ hashFiles('**/package-lock.json') }}
    restore-keys: |
      ${{ runner.os }}-node-
```

### 🚨 Los errores más frecuentes en GitHub Actions y cómo depurarlos
Los 5 fallos que rompen el pipeline el 80% de las veces y el proceso de debugging de workflows sin reinventar el workflow desde cero.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'CI/CD, GitHub Actions, despliegue automático, DevOps, pipeline, testing',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño para accesibilidad visual: contraste, tipografía y color para que tu producto sea usable por todos',
                'description'       => 'Diseña interfaces visuales que son usables para personas con baja visión, daltonismo y otras condiciones visuales. Con los estándares de contraste WCAG, la elección tipográfica accesible, las alternativas al color como único indicador y cómo testear la accesibilidad visual de tus diseños.',
                'prompt_content'    => <<<'PROMPT'
Eres un Accessible Design Specialist con experiencia auditando y rediseñando interfaces digitales para cumplir los estándares WCAG 2.1 AA de accesibilidad visual en aplicaciones con millones de usuarios.

Contexto:
- Tipo de producto: [web app / app móvil / e-commerce / otro]
- Estado actual: [estoy diseñando desde cero / tengo un diseño existente y quiero auditarlo / tenemos un problema específico de accesibilidad]
- El problema más frecuente: [contraste / tipografía / uso del color / iconos sin texto / otro]
- Herramienta de diseño: [Figma / Sketch / Adobe XD / otro]

## Diseño Accesible — [Producto]

### 🎨 El contraste: la regla más violada y la más importante

**Los estándares WCAG de contraste:**
```
Texto normal (<18px o <14px bold):
→ Mínimo (AA): ratio 4.5:1
→ Óptimo (AAA): ratio 7:1

Texto grande (≥18px o ≥14px bold):
→ Mínimo (AA): ratio 3:1

Elementos de UI (bordes de inputs, iconos funcionales):
→ Mínimo (AA): ratio 3:1 sobre el fondo adyacente
```

**Cómo calcular el ratio de contraste:**
Herramienta en Figma: Plugin "Contrast" o "Stark"
Herramienta web: contrast.tools / WebAIM Contrast Checker

**Los errores de contraste más frecuentes:**
```
❌ Texto gris claro sobre fondo blanco:
   Color #888 sobre #FFF → ratio 3.54:1 → falla AA para texto normal

✅ La corrección:
   Color #595959 sobre #FFF → ratio 7.0:1 → pasa AAA

❌ Placeholder text con el mismo tratamiento que los labels:
   Los placeholders suelen estar al 40-60% de opacidad → casi siempre fallan
   → El placeholder debe ser mínimo 4.5:1 sobre el fondo del input

❌ Texto sobre imagen o gradiente:
   El contraste varía según la parte de la imagen
   → Añade una capa sólida semitransparente debajo del texto
   → O usa texto con sombra oscura/clara para asegurar contraste
```

### 🔤 La tipografía accesible: más allá del tamaño

**El tamaño mínimo para legibilidad:**
```
Desktop: 16px para texto corrido (mínimo 14px para texto secundario)
Móvil:   16px para texto corrido (NUNCA menos — previene el zoom automático en iOS)
UI elements: mínimo 12px (ej: labels de inputs, badges)
```

**El espaciado que facilita la lectura:**
```
Interlineado (line-height): mínimo 1.5x el tamaño de la fuente
Espaciado entre letras (letter-spacing): +0.05em para el cuerpo de texto
Espaciado entre párrafos: mínimo 2x el tamaño de la fuente
Longitud de línea: 45-85 caracteres (usar max-width: 65ch)
```

**Los estilos que reducen la legibilidad:**
```
❌ Texto en mayúsculas para bloques de texto (OK para títulos de una línea)
❌ Texto en cursiva para bloques (la cursiva reduce la legibilidad en dislexia)
❌ Peso de fuente muy fino (Thin/ExtraLight) para texto de contenido
✅ Regular (400) o Medium (500) para texto corrido
✅ SemiBold (600) o Bold (700) para énfasis — nunca solo color
```

### 🌈 El color: cómo usarlo sin crear barreras

**El daltonismo en números:**
El 8% de los hombres y el 0.5% de las mujeres tienen algún tipo de daltonismo.
El tipo más frecuente: deuteranomalía (confunde rojo-verde).

**La regla fundamental:**
El color nunca debe ser el único indicador de información.

```
❌ Uso solo de color para estado:
   Campo con error → borde rojo
   [Un usuario daltónico no ve la diferencia]

✅ Color + otro indicador visual:
   Campo con error → borde rojo + icono de error + texto "Campo obligatorio"
   Estado activo → color + subrayado o peso de fuente
   Status de proceso → color + icono + texto
```

**Cómo testear para daltonismo en Figma:**
Plugin "Stark" → Color Blind Simulator → simula 8 tipos de daltonismo

**La paleta accesible:**
Usa el modo "only show accessible colors" en Figma o herramientas de paleta accesible como Accessible Color Palette Builder.

### 🧪 Cómo auditar la accesibilidad visual de tus diseños
El proceso de auditoría de 30 minutos que detecta el 80% de los problemas de accesibilidad visual antes del desarrollo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Accesibilidad visual, contraste WCAG, tipografía accesible, daltonismo, diseño inclusivo',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Reuniones de ventas más efectivas: el protocolo que cierra más deals en menos reuniones',
                'description'       => 'Diseña el protocolo de reuniones de ventas que maximiza la probabilidad de cierre en cada interacción con el cliente. Con la preparación previa, el guión de la reunión de discovery, la presentación que conecta con el dolor del cliente y el "siguiente paso" que mantiene el deal avanzando.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Coach con experiencia entrenando equipos de ventas B2B que han aumentado su tasa de conversión de demos a deals del 20% al 35% mediante la mejora del protocolo de reuniones de ventas.

Contexto:
- Tipo de venta: [inside sales / field / mixto]
- Ciclo de venta: [corto <2 semanas / medio 1-3 meses / largo >3 meses]
- Reunión a mejorar: [discovery call / demo / reunión de propuesta / follow-up]
- Problema actual: [las demos no convierten / los clientes "necesitan pensarlo" y no vuelven / no sé cómo avanzar deals bloqueados]

## Protocolo de Reuniones de Ventas — [Empresa]

### 🎯 El principio que cambia todo: vender no es presentar

**El error del vendedor promedio:**
Usa el 70% del tiempo presentando (el producto, las features, los casos de éxito).
El cliente habla el 30% del tiempo (hace preguntas básicas).

**El vendedor que convierte:**
El cliente habla el 60-70% del tiempo.
El vendedor hace preguntas, escucha, confirma entendimiento.
El vendedor presenta solo cuando entiende exactamente qué le duele al cliente.

**La razón:**
Las personas se convencen a sí mismas. Tu trabajo es hacer las preguntas que les ayudan a verbalizar por qué necesitan lo que vendes.

### 📋 El protocolo de la reunión de discovery

**La preparación (20 minutos antes):**
```
1. Revisa el LinkedIn del contacto: cargo, experiencia, contenido que comparte
2. Revisa el LinkedIn de la empresa: tamaño, crecimiento, noticias recientes
3. Busca en Google "[empresa] + [el problema que resuelves]"
4. Define el objetivo de la reunión: ¿qué necesito aprender? ¿qué quiero proponer como siguiente paso?
5. Prepara 5 preguntas de discovery específicas para este cliente
```

**La apertura (2-3 minutos):**
```
"Gracias por el tiempo, [nombre]. Tengo [N] minutos contigo — quiero
aprovecharlos bien.

Para que la conversación sea útil para ti, lo que me gustaría es
entender [el problema específico] que estáis enfrentando en [empresa].
Después te mostraré si lo que hacemos en [tu empresa] puede ayudar —
y si no, te lo digo claramente.

¿Te parece bien si empiezo con algunas preguntas?"
```

Esta apertura hace 3 cosas: establece el tiempo, da control al cliente y marca tus expectativas (no eres una presentación de marketing).

**Las 7 preguntas de discovery más poderosas:**
```
1. "¿Cómo gestionáis actualmente [el proceso que resuelves]?"
   → Entiende el status quo

2. "¿Qué es lo que no funciona de la forma en que lo hacéis ahora?"
   → El dolor explicitado por el propio cliente

3. "¿Cuánto os está costando ese problema?"
   → El impacto económico o en tiempo

4. "¿Habéis intentado resolverlo de otra forma? ¿Qué pasó?"
   → Las soluciones que ya han probado

5. "Si tuviérais este problema resuelto, ¿qué cambiaría?"
   → El estado de éxito

6. "¿Quién más se ve afectado por este problema en la empresa?"
   → Mapear los stakeholders

7. "Si encontráis la solución correcta, ¿cuándo os gustaría implementarla?"
   → El timing y la urgencia real
```

**La transición al pitch:**
Solo después de escuchar:
"Basándome en lo que me has contado — especialmente [repite sus palabras, no las tuyas] — creo que hay algo que podemos hacer. ¿Te importa si te muestro cómo lo resuelven algunos de nuestros clientes en una situación similar?"

**El cierre de la reunión (el momento que más impacta en el avance del deal):**
No termines con "te envío info y me dices".
Termina con un next step concreto:
"Lo que propongo como siguiente paso es [demo técnica / propuesta / presentación al CTO / prueba de concepto]. ¿La semana que viene a [hora] te va bien?"

### 🚦 Cómo manejar las objeciones más frecuentes en la reunión
Las 5 objeciones que aparecen en el 80% de las reuniones de ventas B2B y cómo responderlas sin ponerse a la defensiva.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Discovery call, reuniones ventas, protocolo ventas B2B, gestión objeciones, cierre',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de incidentes de producto: el proceso que minimiza el impacto cuando algo falla en producción',
                'description'       => 'Gestiona los incidentes de producto de forma que minimices el impacto en los usuarios, el equipo resuelva el problema rápidamente y la empresa aprenda para evitar que vuelva a ocurrir. Con el proceso de triage, la comunicación durante el incidente y el postmortem sin culpables.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP of Engineering con experiencia gestionando incidentes en productos SaaS con cientos de miles de usuarios donde la velocidad de resolución y la comunicación transparente son los factores que determinan el impacto en la retención.

Contexto:
- Tipo de producto: [SaaS / ecommerce / app / plataforma / otro]
- Severidad del incidente actual o esperado: [P0 total / P1 crítico / P2 significativo / P3 menor]
- Equipo técnico: [tamaño y estructura]
- Sistema de alertas: [PagerDuty / OpsGenie / Grafana alerts / sin monitorización / otro]
- Estado actual: [estamos en medio de un incidente / quiero tener el proceso listo antes de que ocurra]

## Gestión de Incidentes de Producto — [Empresa]

### 🚨 Los niveles de severidad (y qué activa cada uno)

**P0 — Caída total del servicio:**
El producto no está disponible para todos o la mayoría de los usuarios.
Ejemplos: el servidor está caído, la base de datos no responde, el login no funciona.
Tiempo objetivo de respuesta: <5 minutos.
Quién se activa: todo el equipo técnico + comunicación inmediata a clientes.

**P1 — Funcionalidad crítica rota:**
El servicio está disponible pero una funcionalidad core no funciona.
Ejemplos: los pagos fallan, los datos no se guardan, las notificaciones no llegan.
Tiempo objetivo de respuesta: <15 minutos.
Quién se activa: el equipo técnico responsable del área + lead técnico.

**P2 — Funcionalidad importante degradada:**
Una funcionalidad importante funciona pero con errores o lentitud.
Ejemplos: informes tardan 30 segundos en cargar (vs. 3 normales), algunas exportaciones fallan.
Tiempo objetivo de respuesta: <1 hora.
Quién se activa: 1-2 ingenieros del área + notificación al CTO.

**P3 — Funcionalidad menor con bug:**
Un bug que afecta a pocos usuarios o a funcionalidades secundarias.
Tiempo objetivo de respuesta: durante la jornada de trabajo.

### 📋 El proceso de gestión del incidente (los primeros 30 minutos son los más críticos)

**MINUTO 0-5 — Detectar y declarar:**
```
1. Alerta automática o reporte de un usuario → alguien del equipo valida que es real
2. Abre un canal de incidente (Slack: #incident-2025-01-15-login)
3. Escribe en el canal: "INCIDENTE DECLARADO: [descripción breve]. Severidad: P[N].
   Incident Commander: [nombre]. Investigando."
4. Notifica a los stakeholders relevantes (CEO, Customer Success si es P0/P1)
```

**MINUTO 5-20 — Triage y primeras hipótesis:**
```
Incident Commander: coordina — no ejecuta técnicamente
Ingenieros: investigan en paralelo (uno por área de posible causa)

Preguntas clave del triage:
- ¿Cuándo empezó exactamente? (revisa los logs)
- ¿Qué cambió justo antes? (últimos deploys, cambios de configuración, picos de tráfico)
- ¿Cuántos usuarios están afectados? (% del total)
- ¿Está progresando (empeorando) o es estable?
```

**MINUTO 20-30 — Mitigación vs. resolución:**
```
La primera prioridad es MITIGAR (reducir el impacto), no RESOLVER (encontrar la causa raíz).
La solución perfecta puede tardar horas — el parche de emergencia puede tardar minutos.

Opciones de mitigación rápida:
- Rollback del último deploy (si el problema empezó después de un deploy)
- Feature flag off (desactivar la funcionalidad rota)
- Escalar la infraestructura temporalmente (si es un problema de capacidad)
- Redirigir tráfico a una versión anterior del servicio
```

### 📣 La comunicación durante el incidente (lo que más impacta en la confianza)

**La actualización cada 15-30 minutos (aunque no haya novedades):**
```
"12:35 — ACTUALIZACIÓN: Seguimos investigando la causa del problema de pagos.
El 30% de las transacciones están fallando. Hemos identificado [área X] como
la probable causa y estamos trabajando en la resolución. Próxima actualización: 13:00."
```

**Lo que el cliente necesita saber:**
1. ¿Sois conscientes del problema? (sí, desde [hora])
2. ¿Cuántos clientes están afectados? (todos / una parte)
3. ¿Cuándo se resolverá? (estimación honesta)
4. ¿Qué pueden hacer mientras tanto? (workaround si existe)

### 📓 El postmortem sin culpables (la herramienta que aprende de los incidentes)
La estructura del postmortem que identifica causas raíz sin asignar culpas y produce acciones de mejora que realmente se implementan.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Gestión incidentes, on-call, postmortem, SRE, product incidents, status page',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Compensación ejecutiva y equity para líderes: diseña el paquete que atrae talento directivo',
                'description'       => 'Diseña el paquete de compensación para directivos y líderes senior que equilibra el salario fijo, el variable y el equity de forma que alinea los incentivos con el crecimiento de la empresa y atrae el talento que necesitas en cada etapa.',
                'prompt_content'    => <<<'PROMPT'
Eres un Executive Compensation Advisor con experiencia diseñando paquetes de compensación para C-level y directores en startups en fase de crecimiento (seed a Series B) y PYME en proceso de profesionalización del equipo directivo.

Contexto:
- Etapa de la empresa: [pre-seed / seed / Series A / PYME consolidada]
- Puesto a contratar: [CEO / CTO / CMO / CPO / Director de área]
- Facturación anual actual: [€]
- Estado del equity: [tenemos equity disponible / ya hemos distribuido mucho / somos empresa consolidada sin equity]
- Benchmarks disponibles: [sé lo que paga el mercado / no tengo datos / tengo acceso a informes salariales]

## Compensación Ejecutiva — [Empresa]

### 🧮 Los 3 componentes de la compensación ejecutiva

**Componente 1 — El salario base:**
El salario competitivo para el mercado y la etapa de la empresa.

Benchmarks por etapa (España, 2024-2025):
```
                Pre-seed/Seed  Series A      PYME ≥€5M ARR
CTO             €70-90k        €100-130k     €120-160k
CMO             €65-85k        €90-120k      €100-140k
CPO             €70-90k        €95-125k      €110-150k
VP of Sales     €70-100k       €100-140k     €120-170k
Head of HR      €55-75k        €80-110k      €90-120k
CFO             €80-110k       €110-150k     €130-180k
```

En etapas early (pre-seed/seed), el salario base suele ser inferior al mercado a cambio de equity.

**Componente 2 — El variable y bonus:**

```
El variable estructurado para directivos:

MBO (Management by Objectives):
→ 20-30% del salario base vinculado a objetivos trimestrales/anuales
→ Objetivos medibles y acordados al inicio del período
→ Pagado si se alcanzan: 100% del target = 100% del variable
→ Con acelerador: >110% de los objetivos = 120% del variable

Bonus discrecional del CEO:
→ 10-15% adicional a discreción del CEO para reconocer desempeño excepcional
→ No garantizado — no lo incluyas en el OTE del candidato
```

**Componente 3 — El equity (el diferenciador en early stage):**

Para startups con expectativa de exit:
```
Directivos de primer nivel:

CTO / COO / CMO: 1-3% del equity (en seed/Series A)
VP / Director:   0.25-1% del equity
Manager senior:  0.05-0.25%

Cómo se otorga:
→ Cliff de 1 año: no se vesta nada hasta el primer año
→ Vesting de 4 años: el 25% al año 1, el resto mensualmente en los 3 años siguientes
→ Aceleración en change of control (si la empresa se vende, el vesting se acelera)
```

### 📊 El total compensation package (cómo presentarlo al candidato)

```
OFERTA PARA [CARGO]:

Salario base:         €X/año
Variable objetivo:    €Y/año (si se alcanzan los objetivos)
OTE (On-Target):      €X+Y/año

Equity:              [N]% de opciones sobre acciones
  Cliff:             12 meses
  Vesting:           48 meses (monthly)
  Valoración actual: €Xk valor actual de las opciones
  Potencial de exit: €Xk en un escenario de exit de [€Xm] (sin garantías)

Beneficios adicionales:
- Seguro médico privado (empresa + familia): €X/año
- Presupuesto de formación: €X/año
- [Otros beneficios específicos]
```

### ⚖️ Cómo negociar con candidatos que piden más de lo que puedes ofrecer
Las 3 estrategias para negociar paquetes de compensación con directivos cuando la competencia ofrece más salario base.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Compensación ejecutiva, equity, stock options, C-level, paquete salarial directivos',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Planificación fiscal del autónomo y la PYME: reduce la carga fiscal legal antes de fin de año',
                'description'       => 'Planifica la carga fiscal de tu empresa o actividad como autónomo antes de que cierre el ejercicio fiscal. Con las estrategias de planificación fiscal legal más efectivas, los gastos deducibles que más impacto tienen, la diferencia entre IRPF y Sociedades y cuándo conviene hacer el cambio.',
                'prompt_content'    => <<<'PROMPT'
Eres un asesor fiscal con experiencia en planificación tributaria para autónomos y PYME en España que han reducido su carga fiscal entre un 15-30% mediante estrategias legales de planificación antes del cierre del ejercicio.

Contexto:
- Tipo de entidad: [autónomo / SL / SA]
- Facturación anual estimada: [€]
- Beneficio neto estimado antes de planificación: [€]
- Situación: [quiero planificar antes de fin de año / acabo de recibir la declaración y quiero mejorar / estoy pensando en constituir SL]
- Mayor coste fiscal: [IRPF alto / IVA a ingresar / Impuesto de Sociedades]

## Planificación Fiscal — [Empresa/Autónomo]

### 📅 El calendario fiscal de fin de ejercicio (octubre-diciembre son los meses clave)

**El error más frecuente:**
Esperar a enero para pensar en la fiscalidad. En enero ya es demasiado tarde — el ejercicio está cerrado.

**El momento de actuar:** octubre-noviembre, cuando todavía puedes:
- Adelantar gastos deducibles al ejercicio actual
- Aplazar ingresos al ejercicio siguiente (si es posible)
- Tomar decisiones sobre inversiones con impacto fiscal
- Ajustar retribuciones

### 🔧 Las estrategias de planificación fiscal más efectivas

**Para autónomos en estimación directa simplificada:**

**1. Anticipar gastos deducibles:**
Si vas a comprar equipos, contratar servicios o hacer formación → hazlo antes del 31 de diciembre.
El gasto reduce la base imponible del IRPF de este año.

```
Ejemplo:
Beneficio sin planificación:  €80.000
Compra de equipo en diciembre: -€5.000
Formación deducible:           -€2.000
Beneficio reducido:            €73.000

Ahorro en IRPF (tipo marginal ~45% en tramos altos): ~€3.150
```

**2. Las inversiones con deducción:**
Plan de pensiones: deducible en IRPF hasta el menor de €1.500 o el 30% del rendimiento neto.
Planes de pensiones de empresa (contributions del empleador): hasta €8.500 adicionales.

**3. Aplazar ingresos al año siguiente:**
Si tienes facturas pendientes de emitir → emítelas en enero en lugar de diciembre.
Esto retrasa el IRPF un año (sin evitarlo, pero el diferimiento tiene valor).
Solo para estimación directa — en módulos no aplica.

**Para PYME en Impuesto de Sociedades:**

**1. El tipo reducido para PYME:**
Tipo general IS: 25%
Para empresas con facturación <€1M: tipo reducido del 23% (desde 2023).
Para empresas de nueva creación (primer ejercicio con beneficios): 15% los primeros 2 años.

**2. Las reservas y amortizaciones aceleradas:**
Reserva de capitalización: puedes reducir la base imponible en el 10% del incremento de fondos propios.
Amortización acelerada: puedes amortizar elementos nuevos a doble tasa.

**3. Los créditos fiscales por I+D+i:**
Si tu empresa hace actividades de I+D, puedes deducir hasta el 25-42% del gasto en cuota.
Muchas empresas tech no aprovechan esta deducción porque creen que no aplica.

### ⚖️ Autónomo vs. SL: cuándo convierte cambiar la forma jurídica

**El umbral aproximado para considerar la SL:**
Como autónomo, cuando el beneficio supera los €50.000-60.000/año, la carga en IRPF suele ser mayor que en IS (25%).
A partir de ahí, una SL bien gestionada puede reducir la carga fiscal total.

**Los costes adicionales de la SL que debes contemplar:**
- Gestión contable y depósito de cuentas: €2.000-3.500/año
- Constitución de la SL: €500-1.000 (o gratuita con la SL rápida del CIRCE)
- Si eres socio-trabajador: cotización como autónomo corporativo (idéntica a la ordinaria)

**El cálculo que debes hacer:**
Total fiscal como autónomo (IRPF + cuota autónomos) vs.
Total fiscal como SL (IS + IRPF sobre salario retirado + dividendos si los hay)

### 📝 Las deducciones que más autónomos y PYME se olvidan de incluir
Los 8 gastos deducibles que aparecen en menos del 30% de las declaraciones aunque la mayoría de empresas los tienen.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Planificación fiscal, IRPF, Impuesto Sociedades, autónomo, deducciones, SL vs autónomo',
                'vote_score'        => 51,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión de deudas y procesos de cobro: recupera lo que te deben sin destruir la relación comercial',
                'description'       => 'Gestiona el cobro de facturas impagadas y diseña un proceso de reclamación de deudas que maximiza el porcentaje de cobro sin destruir la relación con el cliente. Con el protocolo de gestión desde el primer día de vencimiento, la comunicación escalada y cuándo acudir a la vía judicial.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en derecho mercantil y cobro de deudas con experiencia asesorando a PYME y autónomos en la recuperación de facturas impagadas en España con tasas de cobro del 75-85% antes de la vía judicial.

Contexto:
- Deuda a reclamar: [€]
- Antigüedad de la deuda: [días desde el vencimiento]
- Tipo de deudor: [empresa / particular / autónomo]
- Relación con el deudor: [cliente habitual con el que queremos seguir / cliente puntual / relación ya dañada]
- Estado de la reclamación: [acabo de empezar / ya he intentado cobrar sin éxito / estoy evaluando la vía judicial]

## Proceso de Cobro de Deudas — [Tu Empresa]

### 📅 El protocolo escalado de reclamación (semana por semana)

**DÍAS 1-5 desde el vencimiento:**
La llamada amistosa de confirmación.
"Hola [nombre], te llamo porque veo que la factura de [fecha] por [€] aún no ha llegado. ¿Hay algún problema con el pago? ¿Quieres que reenvíe la factura?"
Tono: colaborativo. El objetivo es entender si hay un problema técnico o un problema real.

**DÍAS 6-15:**
Email formal de recordatorio.
```
Asunto: Recordatorio de pago — Factura [número]

Estimado/a [nombre],

Como continuación de nuestra conversación del día [fecha], le recordamos
que la factura [número] de fecha [fecha] por importe de [€] sigue pendiente
de pago con vencimiento el [fecha].

Si hay alguna incidencia que explique el retraso, le agradeceríamos
que nos la comunicara para poder buscar una solución.

En caso contrario, le rogamos proceda al pago antes del [fecha + 5 días].

Quedamos a su disposición para cualquier aclaración.
```

**DÍAS 16-30:**
Carta de reclamación formal (burofax o correo certificado).
El burofax tiene plena validez jurídica como prueba de la reclamación.
Empieza a ser más firme: "Si no recibimos el pago antes del [fecha], nos veremos obligados a iniciar las acciones legales correspondientes."

**DÍAS 31-60:**
Carta de abogado o de empresa de recobros.
El 60-70% de las deudas se cobran en esta fase — la intervención de un abogado o empresa de recobros tiene un efecto psicológico poderoso.
El coste: €150-300 por carta de abogado, o comisión del 10-20% sobre la deuda para empresa de recobros.

**A partir de día 60:**
Evaluar la vía judicial.

### ⚖️ Las vías judiciales para el cobro de deudas en España

**El proceso monitorio (para deudas dinerarias documentadas):**
El proceso más rápido y económico para deudas líquidas y exigibles.

```
Requisitos:
- La deuda debe estar documentada (factura, contrato, albarán, etc.)
- El importe debe ser determinado (no "aproximadamente X")
- Sin límite de cuantía (pero para deudas >€250k, es preferible el juicio ordinario)

El proceso:
1. Presentas la petición en el Juzgado de 1ª Instancia (sin abogado para <€2.000,
   con abogado para >€2.000)
2. El juzgado notifica al deudor para que pague o se oponga en 20 días hábiles
3. Si no paga ni se opone → embargo automático sin necesidad de juicio

Coste: las tasas judiciales son mínimas para empresas pequeñas (exentas para PYME <€2M)
Duración: 3-6 meses si no hay oposición

El juicio verbal (deudas <€6.000) y el juicio ordinario (>€6.000) son alternativas cuando hay conflicto sobre el fondo de la deuda.
```

**La reserva de dominio y el derecho de retención:**
Si vendiste bienes (no servicios), la cláusula de reserva de dominio en el contrato te permite recuperar los bienes hasta que se pague la factura.

### 💡 Cómo documentar las deudas para maximizar las posibilidades de cobro
Los documentos que debes conservar desde el inicio de la relación comercial para poder reclamar eficazmente la deuda si llega el caso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Cobro deudas, proceso monitorio, facturas impagadas, reclamación judicial, derecho mercantil',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Estrategia de soporte en RRSS: convierte las menciones públicas en oportunidades de confianza',
                'description'       => 'Diseña el proceso de atención al cliente en redes sociales que responde rápido, resuelve en público y convierte las quejas virales en demostraciones de excelencia en el servicio. Con el protocolo de respuesta por tipo de mención, el escalado a canales privados y cómo gestionar los trolls.',
                'prompt_content'    => <<<'PROMPT'
Eres un Social Media Support Specialist con experiencia gestionando la atención al cliente en redes sociales para marcas con 50.000-500.000 seguidores donde una respuesta equivocada puede volverse viral y destruir la reputación.

Contexto:
- Canales de RRSS: [Twitter/X / Instagram / LinkedIn / Facebook / TikTok / otros]
- Tipo de negocio: [ecommerce / SaaS / servicios / hostelería / retail]
- Volumen de menciones: [N/día]
- Estado actual: [ignoramos las menciones / respondemos tarde / no tenemos protocolo / queremos mejorar]
- Recurso disponible: [1 persona part-time / community manager dedicado / equipo]

## Estrategia de Soporte en RRSS — [Empresa]

### ⏰ Los tiempos de respuesta que los usuarios esperan

El estudio de Sprout Social (2023):
El 79% de los usuarios espera una respuesta en menos de 24 horas en RRSS.
El 40% espera una respuesta en menos de 1 hora.

**Los SLAs de respuesta por red social:**
```
Twitter/X: máximo 1 hora en horario laboral (la red más exigente)
Instagram: máximo 4 horas
Facebook:  máximo 4 horas
LinkedIn:  máximo 24 horas
TikTok:    máximo 24 horas
```

**Solución para equipos pequeños:**
Herramienta de escucha social unificada (Hootsuite, Mention, Brand24) que reúne todas las menciones en un solo feed.
Sin herramienta → recibirás menciones con días de retraso → el momento ya pasó.

### 📋 El protocolo de respuesta por tipo de mención

**Tipo 1 — Queja pública (el caso más frecuente):**
```
La respuesta en público:
"Hola [nombre], sentimos mucho leer esto. Nos gustaría resolver tu situación cuanto antes.
¿Puedes enviarnos un DM con [número de pedido / email de cuenta] para atenderte
de forma personalizada?"

Por qué pasamos a privado:
→ Los datos del cliente son confidenciales
→ El intercambio público puede escalar innecesariamente
→ Pero SIEMPRE dejamos la respuesta inicial visible (demuestra que atendemos)
```

**Tipo 2 — Queja viral (más de 100 shares o menciones en pocas horas):**
```
No esperes al equipo de soporte normal.
Escala inmediatamente al responsable de comunicación/PR.
La respuesta pública debe ser más rápida, más empática y más visible:
"Somos conscientes de [el problema]. Esto no está a la altura de lo que
esperáis de [marca]. Estamos trabajando para resolverlo. Actualizamos en [tiempo]."

Si hay un error de la empresa: admítelo explícitamente.
No hay nada más viral que una empresa que no reconoce sus errores.
```

**Tipo 3 — Comentario positivo o mención entusiasta:**
```
Responde siempre. Los clientes que te elogian en público merecen reconocimiento.
No solo un "me gusta" — una respuesta genuina de 1-2 frases.
"¡Qué alegría leer esto! [Nombre], es exactamente el tipo de experiencia
que queremos que tengas. Gracias por compartirlo 💙"
Los elogios respondidos se comparten — los ignorados, no.
```

**Tipo 4 — El troll o la crítica malintencionada:**
```
El criterio de distinción:
¿Hay un problema real detrás o es solo hostilidad?

Si hay un problema real: responde con empatía y ofrece resolución.
Si es hostilidad pura: una sola respuesta educada y cierra la conversación.
"Lamentamos que tengas esta percepción. Estamos aquí si en algún momento
quieres que te atendamos."
Nunca te enzarces. Nunca elimines el comentario si no viola las normas de la plataforma
(eliminarlo lo hace viral).
```

**Tipo 5 — Pregunta de producto o soporte:**
```
Si la respuesta es corta → responde directamente en el comentario.
Si requiere pasos o datos sensibles → redirige a DM o al canal oficial de soporte.
Siempre responde en el mismo idioma en que te hablan.
```

### 📊 Las métricas del soporte en RRSS que le importan al negocio
Los 4 KPIs de soporte social y cómo conectarlos con el impacto en la reputación y la retención.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Soporte RRSS, community management, social media, quejas redes sociales, reputación',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Posicionamiento como experto freelance: el proceso para que los clientes te busquen a ti, no al revés',
                'description'       => 'Construye el posicionamiento de experto que hace que los clientes potenciales te encuentren y te contacten proactivamente. Con la definición del nicho de especialización, la estrategia de contenido de autoridad, las colaboraciones que aceleran la visibilidad y el sistema de captación inbound.',
                'prompt_content'    => <<<'PROMPT'
Eres un Personal Branding Coach especializado en profesionales independientes que han pasado de buscar clientes activamente a recibir 3-8 consultas entrantes al mes gracias al posicionamiento como experto en su nicho.

Perfil:
- Especialidad: [describe tu servicio]
- Experiencia: [años en el sector]
- Nicho actual: [genérico / tienes un nicho pero poco reconocido / quieres especializarte más]
- Canal principal actual: [boca a boca / LinkedIn / web / eventos / sin canal definido]
- Mayor bloqueo: [no sé en qué especializarme / sé en qué pero no sé cómo comunicarlo / ya tengo nicho pero poca visibilidad]

## Posicionamiento como Experto Freelance — [Tu Nombre]

### 🎯 El nicho: la decisión que más miedo da y más ROI produce

**El error más frecuente:**
"Si me especializo, perderé clientes que no son de ese nicho."

**La realidad:**
El experto en un nicho concreto cobra 2-3x más que el generalista.
El experto en un nicho recibe más consultas entrantes (la gente busca al especialista).
El generalista compite siempre por precio; el especialista compite por expertise.

**Cómo elegir el nicho correcto (el cruce de 3 círculos):**
```
Círculo 1: EXPERTISE — ¿en qué eres objetivamente mejor que la media del mercado?
Círculo 2: DEMANDA — ¿qué problemas tiene ese nicho que están dispuestos a pagar?
Círculo 3: MERCADO — ¿hay suficientes clientes en ese nicho con presupuesto?

Tu nicho ideal: el cruce de los 3 círculos
```

**La definición del nicho en una frase:**
"Ayudo a [tipo específico de cliente] a conseguir [resultado específico] mediante [tu metodología o solución específica]."

❌ "Soy consultor de marketing"
✅ "Ayudo a clínicas de fisioterapia a conseguir más pacientes nuevos cada mes con estrategias de Google Ads y SEO local."

### 📣 La estrategia de contenido que construye autoridad

**El principio: enseñar para vender.**
El experto que enseña lo que sabe antes de pedir dinero genera 10x más confianza que el que solo habla de sus servicios.

**El plan de contenido de autoridad:**
```
CANAL PRINCIPAL (1 solo al principio):
Elige el canal donde está tu cliente ideal:
- Clientes B2B corporativos → LinkedIn
- Clientes PYME/autónomos → LinkedIn + newsletter
- Clientes creativos → Instagram + newsletter
- Clientes tech → Twitter/X + newsletter

FRECUENCIA:
3 posts/semana en el canal principal es suficiente para empezar.
Más importante: 6 meses de consistencia que 2 semanas intensas.

LOS 4 TIPOS DE CONTENIDO DEL EXPERTO:
1. Enseñanza directa: "Cómo hacer [X] — guía paso a paso"
2. Perspectiva del experto: "Por qué [la creencia común] está equivocada"
3. Caso de éxito: "Cómo [cliente] consiguió [resultado] con [tu metodología]"
4. Desmitificación: "El mayor mito sobre [tu tema] que cuesta dinero a los clientes"
```

**El contenido que te posiciona como experto (no como proveedor):**
No hablas de tu servicio — hablas del problema de tu cliente y de tu perspectiva única sobre cómo resolverlo.

### 🤝 Las colaboraciones que aceleran la visibilidad

**El podcast de tu nicho:**
Aparecer como invitado en los 5-10 podcasts que escucha tu cliente ideal te posiciona ante miles de oyentes cualificados.
Cómo conseguir la invitación: email de pitch de 5 líneas con el tema específico que puedes aportar y por qué le interesa a su audiencia.

**El guest post:**
Artículo como invitado en publicaciones del sector donde lee tu cliente ideal.
Más credibilidad que publicar en tu propio blog (terceros te avalan).

**La colaboración con complementarios:**
Identifica 3-5 freelancers o agencias que sirven al mismo cliente pero con servicios distintos (no competidores).
El mutuo referido funciona mejor que cualquier canal de publicidad.

### 📊 El sistema de captación inbound que mantiene el pipeline lleno
El embudo de captación que convierte la visibilidad en consultas cualificadas sin depender del boca a boca ni de un esfuerzo continuo de outbound.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Posicionamiento freelance, nicho especialización, personal branding, inbound, captación clientes',
                'vote_score'        => 50,
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
