<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills62Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing en comunidades online — cómo participar en Reddit, foros y Slack groups de tu sector sin parecer spam',
                'description'      => 'Estrategia de community marketing para marcas y profesionales: cómo identificar las comunidades donde está tu audiencia, participar de forma auténtica que genere confianza, y convertir esa presencia en tráfico, leads y reconocimiento de marca sin ser expulsado por hacer spam.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en community marketing con experiencia haciendo crecer marcas B2B y B2C a través de participación genuina en comunidades online. Ayúdame a construir una estrategia de community marketing para [mi producto/marca/servicio] que genere visibilidad y confianza sin activar los filtros anti-spam de ninguna comunidad.

---

## POR QUÉ EL COMMUNITY MARKETING ES DIFERENTE A LA PUBLICIDAD

En publicidad, tú controlas el mensaje. En las comunidades, la comunidad controla qué se acepta.

El community marketing funciona porque la gente confía más en las recomendaciones que encontra en un foro o comunidad que en un anuncio. Un post orgánico en una comunidad de nicho puede generar más leads cualificados que mil euros en ads. Pero hay una condición: tienes que aportar valor genuino antes (y durante) de promover cualquier cosa.

La regla no escrita de toda comunidad es:
> Toma tanto como das. Si solo tomas (vendes, promocionas), te expulsan.

---

## MÓDULO 1 — MAPA DE COMUNIDADES POR TIPO Y SECTOR

### Tipos de comunidades online y sus reglas implícitas

| Plataforma | Tipo de comunidad | Reglas generales | Mejor para |
|------------|-------------------|-----------------|------------|
| **Reddit** | Comunidades de subreddits muy reguladas | Reglas explícitas por subreddit. El karma importa. La autopromoción es típicamente < 10% del historial | B2C, SaaS, tech, gaming |
| **Slack groups** | Comunidades cerradas, más profesionales | Más tolerantes con menciones de producto si aportas valor | B2B, marketing, tech, startups |
| **Discord** | Comunidades mixtas | Varía mucho por servidor. Generalmente más informal | Gaming, crypto, comunidades de creadores |
| **Foros especializados** | Comunidad nicho muy comprometida | Alta credibilidad. Cero tolerancia al spam | Tech, hobbies, sectores verticales |
| **LinkedIn Groups** | Profesionales de un sector | Menor engagement pero contactos de calidad | B2B, RRHH, legal, finanzas |
| **Facebook Groups** | Amplio espectro | Variable. Muchos grupos con reglas laxas | B2C, emprendimiento, nichos locales |

### Cómo identificar las comunidades correctas para tu marca

```
Paso 1: Define a tu ICP (Ideal Customer Profile)
"Nuestro cliente ideal es [cargo] en [tipo de empresa] de [sector] con [problema]"

Paso 2: Pregúntate dónde buscan ayuda
"Cuando tienen el problema que nosotros resolvemos, ¿dónde van a preguntar?"

Paso 3: Busca con estos operadores
Reddit: site:reddit.com "[sector]" o "[problema]"
Google: "[sector] + slack community" o "[sector] + discord"
Product Hunt: busca productos de tu categoría y mira en qué comunidades los mencionan

Paso 4: Valida la comunidad antes de invertir tiempo
- Tiene miembros activos (no cuentas inactivas)?
- Los hilos reciben respuestas en < 24h?
- La ratio de posts de valor vs spam es > 5:1?
- Las reglas permiten algún tipo de mención de producto?
```

---

## MÓDULO 2 — LA REGLA DEL 9-1 Y CÓMO APLICARLA

La regla de oro: de cada 10 participaciones en una comunidad, máximo 1 debe estar relacionada con tu producto.

### Las 9 participaciones de valor

**Responder preguntas genuinamente**:
No des respuestas incompletas para que tengan que ir a tu web. Da la respuesta completa y útil, aunque no menciones tu producto.

```
Pregunta en Reddit r/marketing: "¿Cuál es la mejor forma de hacer seguimiento
del ROI de contenido?"

Respuesta de valor: "El método más práctico para equipos pequeños es el modelo
de atribución de primer toque: [explica el método completo con 3 pasos concretos].
Si usas GA4, aquí está la configuración paso a paso: [detalla]. Para equipos más
grandes con más de 5 canales, el modelo de atribución multitoque de Markov
es más preciso aunque requiere más setup..."

[No mencionas tu producto. Solo das valor. Eso construye tu reputación.]
```

**Compartir recursos externos** (que no son tuyos):
Artículos, herramientas gratuitas, investigaciones. Generosidad sin agenda aparente.

**Hacer preguntas de investigación genuina**:
"Estoy explorando cómo equipos de [X] resuelven [Y]. ¿Alguien ha tenido experiencia con esto?"

**Dar feedback honesto**:
Cuando alguien comparte su trabajo y pide feedback, da feedback real — incluyendo lo que no funciona.

### La 1 participación de producto

Cuándo está permitido mencionar tu producto:
1. Alguien pregunta directamente por soluciones a un problema que tú resuelves
2. Hay un hilo de "¿qué herramientas usáis?" o "¿qué recomendáis?"
3. Estás contando tu historia como fundador/creador (en contextos donde se permite)

**Cómo hacerlo sin parecer spam:**

```
MAL:
"¡Prueba [tu producto]! Resuelve exactamente este problema.
Link: [url]"

BIEN:
"Yo tuve exactamente este problema el año pasado. Lo resolví de dos formas:
primero probé [herramienta gratuita X] que funciona bien para volúmenes
pequeños. Cuando necesité más, construí/encontré [tu producto] que automatiza
el paso 3 que es el más tedioso. ¿El paso que más os cuesta es ese?"

[Das contexto, das alternativas gratis, introduces tu producto de forma
 natural, y terminas con una pregunta que invita al diálogo]
```

---

## MÓDULO 3 — ESTRATEGIA ESPECÍFICA POR PLATAFORMA

### Reddit — la plataforma más estricta

**Antes de publicar nada**:
- Lee las reglas del subreddit (sidebar)
- Revisa el historial de posts del último mes para entender el tono
- Observa durante 2 semanas antes de participar

**Karma building**:
Los subreddits con karma mínimo requerido son los más valiosos. Empieza en subreddits generales de tu sector para construir karma antes de entrar en los de nicho.

**Template de post de valor en Reddit:**

```
Título: "Después de [X] meses haciendo [actividad], aquí están los [N] errores
         que cometí y cómo los evitaría ahora"

Estructura del post:
1. Contexto breve (2-3 frases de quién eres, SIN mencionar tu empresa)
2. El aprendizaje principal
3. [3-5 puntos concretos con ejemplos reales]
4. Invitación a comentar: "¿Os habéis encontrado con algo similar?
   ¿Cómo lo resolvisteis?"

NO incluyas links a tu producto en el primer post. Deja que la conversación fluya.
Si alguien pregunta, respondes en los comentarios.
```

### Slack groups — la plataforma más directa para B2B

Los Slack groups de marketing, SaaS, startups y sectores verticales son comunidades de profesionales que valoran el tiempo. El tono es más directo.

**Cómo unirte al grupo correcto**:
- Busca "best [sector] slack groups" en Google
- Muchas comunidades de newsletters y podcasts de tu sector tienen su propio Slack
- Algunos grupos de pago tienen más calidad de miembros

**Rutina semanal en Slack:**
```
Lunes: Revisa los canales de #help, #questions, #feedback de tus comunidades
       Responde 2-3 preguntas donde puedas aportar algo específico

Miércoles: Comparte un recurso o insight que hayas encontrado útil esta semana
           en el canal apropiado (#resources, #learnings, etc.)

Viernes: Participa en hilos de conversación general (#random, #wins, etc.)
         Construye relaciones, no solo da valor de producto
```

---

## MÓDULO 4 — CONVERTIR PRESENCIA EN LEADS

### El perfil que hace el trabajo de venta por ti

En Reddit: el username no sirve para ventas. Pero en la bio puedes poner "Construyendo [tipo de producto] para [tipo de usuario]". La gente que tenga curiosidad buscará.

En Slack: tu nombre + avatar + status visible. Usa el status para comunicar tu propuesta de valor: "Ayudo a equipos de marketing a reducir el CAC con [especialidad]".

En tu perfil de Slack/Discord: escribe una bio de 3 líneas con el problema que resuelves, no con tu cargo.

### El momento de la conversación privada

Cuando alguien en la comunidad hace una pregunta que muestra claramente que tu producto puede ayudarle, puedes:

1. Responder en público con valor
2. Añadir al final: "Si quieres profundizar más en esto, puedo contarte cómo lo resolvemos en [empresa] en una llamada rápida"
3. Esperar que te contacten — nunca envíes DM no solicitado a alguien porque preguntó algo en un foro

---

## MÓDULO 5 — MÉTRICAS DE COMMUNITY MARKETING

| Métrica | Cómo medirla | Objetivo |
|---------|-------------|----------|
| Menciones orgánicas de tu marca | Alertas de Google + menciones en comunidades | Tendencia ascendente |
| Tráfico referral desde comunidades | UTM params en los links que compartes | > X% del tráfico total |
| Leads atribuidos a comunidades | Preguntar en el formulario "¿cómo nos conociste?" | Seguimiento mensual |
| Reputación (karma, votos, seguidores) | Nativo de cada plataforma | Tendencia ascendente |
| Invitaciones a contribuir | Que te pidan que escribas o hables en la comunidad | Señal de autoridad |

---

## ENTREGABLE

Para mi producto/marca [describe brevemente: qué es, para quién, en qué sector]:
1. Mapa de las 5 comunidades prioritarias con justificación de por qué cada una
2. Reglas de participación específicas para cada comunidad elegida
3. Plan de contenido de 4 semanas con tipo de participación y plataforma
4. Template de perfil para las 2 plataformas principales
5. Rutina semanal de 30-45 minutos para mantener presencia sin quemarte
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar una estrategia de community marketing en Reddit, Slack y foros sectoriales que genere visibilidad y leads sin hacer spam.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Seguridad en la cadena de dependencias — gestiona vulnerabilidades en paquetes npm/pip/composer y el riesgo de supply chain',
                'description'      => 'Guía práctica para developers sobre cómo gestionar el riesgo de seguridad que introduce cada paquete externo: auditar dependencias, entender los ataques de supply chain (typosquatting, dependency confusion, malware en paquetes), y automatizar los controles de seguridad en el pipeline de CI/CD.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un security engineer especializado en application security y software supply chain. Ayúdame a construir un proceso robusto para gestionar el riesgo de seguridad que introducen las dependencias externas en mi proyecto [especifica el stack: Node.js/npm, Python/pip, PHP/Composer, etc.].

---

## POR QUÉ LA SEGURIDAD DE DEPENDENCIAS ES CRÍTICA

Más del 80% del código de una aplicación moderna son dependencias de terceros. Cada paquete que instalas es una superficie de ataque:

- **Log4Shell (2021)**: una vulnerabilidad en una librería Java de logging afectó a millones de servidores en todo el mundo
- **event-stream (2018)**: un mantenedor malicioso introdujo código para robar bitcoins en un paquete con millones de descargas
- **ua-parser-js (2021)**: un atacante tomó control de la cuenta npm del mantenedor y publicó versiones con malware
- **colors y faker (2022)**: el propio mantenedor saboteó intencionalmente sus paquetes como protesta

El riesgo no es teórico. Es el vector de ataque con mayor crecimiento en los últimos 3 años.

---

## MÓDULO 1 — TIPOS DE ATAQUES DE SUPPLY CHAIN

### Typosquatting
Un atacante publica un paquete con nombre muy similar al legítimo:
- `lodahs` en vez de `lodash`
- `requesst` en vez de `request`
- `coolor` en vez de `color`

El desarrollador comete un error tipográfico y descarga código malicioso.

**Mitigación**: usar lockfiles (package-lock.json, yarn.lock, composer.lock), revisar el nombre exacto antes de instalar.

### Dependency Confusion (Sustitución de dependencias internas)
Si tu empresa usa paquetes privados en un registro interno (Artifactory, GitHub Packages, etc.) con nombres como `@miempresa/utils`, un atacante puede publicar un paquete con el mismo nombre en el registro público de npm. Muchos gestores de paquetes priorizan el registro público.

**Mitigación**: usar scope privado (`@empresa/`) y configurar el gestor de paquetes para que busque ese scope SOLO en el registro privado.

### Takeover de cuenta de mantenedor
Un atacante compromete la cuenta de npm/PyPI de un mantenedor (phishing, credenciales filtradas) y publica una versión maliciosa.

**Mitigación**: verificar integridad (checksums, firma GPG), no auto-actualizar a la última versión en producción sin revisión.

### Paquete abandonado con nuevo mantenedor malicioso
Un paquete popular con millones de descargas queda sin mantenimiento. Un atacante solicita la propiedad al registry y la obtiene.

**Mitigación**: revisar el estado de mantenimiento y la historia de cambios de propietario antes de añadir una dependencia nueva.

---

## MÓDULO 2 — AUDITORÍA DE DEPENDENCIAS

### npm (Node.js)

```bash
# Auditoría básica
npm audit

# Auditoría con reporte JSON (para CI/CD)
npm audit --json

# Fix automático de vulnerabilidades con solución disponible
npm audit fix

# Fix que permite cambios de versión mayor (más agresivo)
npm audit fix --force

# Ver árbol de dependencias completo
npm ls

# Ver por qué una dependencia está instalada (quién la importa)
npm why [nombre-paquete]
```

### pip (Python)

```bash
# Instala pip-audit (herramienta oficial de auditoría)
pip install pip-audit

# Auditoría del entorno actual
pip-audit

# Auditoría de un requirements.txt específico
pip-audit -r requirements.txt

# Salida en formato JSON para CI/CD
pip-audit --format json

# Safety (alternativa popular)
pip install safety
safety check
```

### Composer (PHP)

```bash
# Auditoría de seguridad
composer audit

# Update a versiones seguras disponibles
composer update --with-all-dependencies

# Ver árbol de dependencias
composer show --tree

# Verificar integridad del lockfile
composer validate
```

---

## MÓDULO 3 — SCORING DE RIESGO POR PAQUETE

Antes de añadir una nueva dependencia, evalúa:

### Checklist de evaluación pre-instalación

```markdown
## Evaluación de dependencia: [nombre-paquete]

### Popularidad y actividad
- [ ] Downloads semanales: [X] (> 100k es señal de adopción real)
- [ ] Última versión publicada: [fecha] (< 6 meses sin actividad = riesgo)
- [ ] Issues abiertos / cerrados: [ratio] (ratio alto de cerrados = buena salud)
- [ ] Contribuidores activos: [N] (1 solo mantenedor = riesgo de abandono)

### Seguridad
- [ ] Historial de vulnerabilidades conocidas: [busca en snyk.io o osv.dev]
- [ ] Tiene firma GPG o provenance: [sí/no]
- [ ] Cambio de propietario reciente: [busca en npm registry history]

### Alternativas evaluadas
- [ ] ¿Puedo implementar esta funcionalidad en < 50 líneas de código propio?
- [ ] ¿Hay una alternativa nativa de la plataforma / del framework?
- [ ] ¿La alternativa tiene mejor historial de seguridad?

### Permisos que solicita (para paquetes con scripts de instalación)
- [ ] Tiene postinstall script: [sí/no — revisar qué hace]
- [ ] Solicita acceso a red/filesystem en runtime: [sí/no]
```

**Herramientas de scoring automático:**
- **Snyk Open Source**: snyk.io — análisis de vulnerabilidades + contexto de explotabilidad
- **OSS Review Toolkit**: análisis de licencias + seguridad
- **deps.dev**: visualizador de dependencias transitivas de Google
- **Socket.dev**: análisis en tiempo real al instalar paquetes npm

---

## MÓDULO 4 — AUTOMATIZACIÓN EN CI/CD

### GitHub Actions — pipeline de seguridad de dependencias

```yaml
name: Dependency Security Audit

on:
  push:
    branches: [main, develop]
  pull_request:
    branches: [main]
  schedule:
    # Ejecuta todos los días a las 9:00 UTC para detectar nuevas vulnerabilidades
    - cron: '0 9 * * *'

jobs:
  audit:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v4

      - name: Setup Node.js
        uses: actions/setup-node@v4
        with:
          node-version: '20'
          cache: 'npm'

      - name: Install dependencies
        run: npm ci

      - name: Run security audit
        run: npm audit --audit-level=high
        # Falla el build si hay vulnerabilidades HIGH o CRITICAL

      - name: Check for outdated packages
        run: npx npm-check-updates --errorLevel 2
        continue-on-error: true  # No falla, solo avisa

      - name: Snyk security scan
        uses: snyk/actions/node@master
        env:
          SNYK_TOKEN: ${{ secrets.SNYK_TOKEN }}
        with:
          args: --severity-threshold=high
```

### Política de parches de dependencias

```
Vulnerabilidad CRÍTICA (CVSS ≥ 9.0):
→ Parche o workaround en < 24 horas
→ Notificación inmediata al equipo de seguridad

Vulnerabilidad ALTA (CVSS 7.0-8.9):
→ Parche en < 1 semana
→ Incluir en el próximo sprint si no hay workaround inmediato

Vulnerabilidad MEDIA (CVSS 4.0-6.9):
→ Parche en el siguiente ciclo de release (máximo 30 días)

Vulnerabilidad BAJA (CVSS < 4.0):
→ Trackear y resolver en mantenimiento mensual
```

---

## MÓDULO 5 — BUENAS PRÁCTICAS DE HIGIENE DE DEPENDENCIAS

### Lockfiles — obligatorios en producción

```bash
# npm — siempre commitear package-lock.json
# En CI siempre usar "ci" en vez de "install"
npm ci  # Instala EXACTAMENTE lo del lockfile, falla si hay diferencias

# pip — usar pip-compile para generar requirements.txt con hashes
pip-compile --generate-hashes requirements.in > requirements.txt

# Composer — commitear composer.lock siempre
```

### Política de actualización de dependencias

```
Actualización mayor (v1 → v2): Revisión manual + PR dedicado + testing completo
Actualización menor (v1.0 → v1.1): Review del changelog + PR con tests
Actualización de parche (v1.0.0 → v1.0.1): Auto-merge si pasan los tests (Dependabot)
```

### Configuración de Dependabot (GitHub)

```yaml
# .github/dependabot.yml
version: 2
updates:
  - package-ecosystem: "npm"
    directory: "/"
    schedule:
      interval: "weekly"
      day: "monday"
    open-pull-requests-limit: 5
    groups:
      # Agrupa las actualizaciones de patch para evitar ruido
      patch-updates:
        patterns:
          - "*"
        update-types:
          - "patch"
    ignore:
      # Ignora actualizaciones mayores de paquetes complejos
      - dependency-name: "react"
        update-types: ["version-update:semver-major"]
```

---

## ENTREGABLE

Para mi proyecto [describe el stack, el tamaño, si tiene CI/CD configurado]:
1. Auditoría de dependencias de alto riesgo en el proyecto actual con pasos de remediación
2. Configuración de pipeline CI/CD para auditoría automática adaptada a tu stack
3. Política de actualización de dependencias para tu equipo (SLAs por severidad)
4. Checklist de evaluación pre-instalación adaptado a tus gestores de paquetes
5. Las 3 dependencias de tu proyecto que más vale la pena revisar primero y por qué
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Auditar y gestionar el riesgo de seguridad en dependencias de proyectos Node.js, Python o PHP con automatización en CI/CD y políticas de parches.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para mercados emergentes — constraints de conectividad, dispositivos de gama baja y diversidad cultural en UX',
                'description'      => 'Framework de diseño UX para productos que llegan a usuarios en mercados emergentes (Latinoamérica, África, Sudeste Asiático): cómo diseñar para conectividad limitada, Android de gama baja, usuarios con menor alfabetización digital y contextos culturales que cambian los patrones de interacción.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un UX designer especializado en diseño para mercados emergentes con experiencia en proyectos en Latinoamérica, África subsahariana y el Sudeste Asiático. Ayúdame a adaptar o diseñar desde cero un producto digital para usuarios en estos contextos, considerando las restricciones técnicas, sociales y culturales que hacen que los patrones de diseño occidentales no funcionen.

---

## EL PROBLEMA CON EL DISEÑO "UNIVERSAL"

La mayoría del diseño digital se hace para usuarios que tienen:
- Smartphone de gama alta con 6-8GB de RAM
- Conexión 4G/5G estable o WiFi
- Alta alfabetización digital (saben qué es un menú hamburguesa, un carrusel, un formulario)
- Tarjeta de crédito o cuenta bancaria
- Un único dispositivo de uso personal

En los mercados emergentes que concentran el 5.000 millones de personas que aún no tienen acceso pleno a internet, muchos de estos supuestos no se cumplen. Diseñar para ellos requiere cuestionar cada patrón que das por sentado.

---

## MÓDULO 1 — RESTRICCIONES DE CONECTIVIDAD

### La realidad de la conectividad en mercados emergentes

| Escenario | Condiciones técnicas | % de usuarios en mercados emergentes |
|-----------|---------------------|-------------------------------------|
| Buena conectividad | 4G estable, < 50ms latencia | 20-30% |
| Conectividad intermitente | 2G/3G, pérdidas de señal frecuentes | 40-50% |
| Conectividad muy limitada | EDGE o sin señal durante horas | 20-30% |
| Sin conexión | Sin acceso a datos (depende de WiFi puntual) | 5-15% |

### Principios de diseño para baja conectividad

**1. Offline-first architecture**

El producto debe funcionar sin conexión y sincronizar cuando hay señal disponible.

```
Estrategia de sincronización:
- Contenido crítico: pre-descarga en WiFi (configuración del usuario,
  historial, datos que necesita en offline)
- Acciones del usuario: cola local (el usuario puede actuar y se sincroniza
  cuando hay señal)
- Feedback offline: mostrar siempre el estado de conexión y el estado de
  sincronización pendiente
```

**2. Diseño para 2G y conexiones lentas**

- Imágenes: WebP + lazy loading + placeholder de baja resolución (LQIP)
- Fuentes: no más de 2 custom fonts, considera usar fuentes del sistema
- JavaScript: code splitting agresivo, nada en el critical path que no sea esencial
- Progressive loading: el usuario ve y puede interactuar con la UI antes de que cargue todo

**3. Modo de datos reducidos**

Detecta si el usuario tiene Data Saver activado y responde:
```javascript
// Detectar preferencia de ahorro de datos
if ('connection' in navigator) {
  const connection = navigator.connection;
  if (connection.saveData) {
    // No auto-reproducir video
    // Servir imágenes más comprimidas
    // Desactivar animaciones no esenciales
  }
}
```

---

## MÓDULO 2 — DISPOSITIVOS DE GAMA BAJA

### Perfiles de dispositivo en mercados emergentes

| Perfil | RAM | Almacenamiento | CPU | Sistema |
|--------|-----|----------------|-----|---------|
| Low-end | 1-2 GB | 8-16 GB | Quad-core < 1.5GHz | Android 8-10 Go Edition |
| Mid-range | 2-4 GB | 32-64 GB | Quad-core 1.5-2GHz | Android 10-12 |
| High-end | 4+ GB | 64+ GB | Octa-core | Android 12+ |

En muchos mercados emergentes, el 60-70% de los usuarios activos están en el perfil low-end o mid-range.

### Optimizaciones de performance para dispositivos de gama baja

**Animaciones**:
```css
/* Prefiere reducir movimiento cuando el sistema lo indica */
@media (prefers-reduced-motion: reduce) {
  * {
    animation-duration: 0.01ms !important;
    transition-duration: 0.01ms !important;
  }
}

/* Usa transform y opacity en vez de propiedades que provocan layout recalc */
/* MAL: */ .elemento { left: 100px; top: 50px; }
/* BIEN: */ .elemento { transform: translate(100px, 50px); }
```

**JavaScript**:
- Evita librerías pesadas cuando hay alternativas nativas (Vanilla JS > jQuery > React para UI simple)
- Usa Web Workers para cálculos pesados que bloquean el hilo principal
- Implementa virtualización de listas largas (no renderices 500 items, renderiza los 20 visibles)

**Almacenamiento**:
- La app no puede exceder un tamaño razonable para dispositivos con 8GB de almacenamiento compartido
- Implementa limpieza automática de caché
- Avisa al usuario antes de descargar contenido pesado

---

## MÓDULO 3 — ALFABETIZACIÓN DIGITAL Y PATRONES DE INTERACCIÓN

### Patrones que los usuarios con menor alfabetización digital no conocen

| Patrón | Supuesto del diseñador | Realidad |
|--------|----------------------|----------|
| Menú hamburguesa | El usuario sabe que ≡ significa menú | No es intuitivo para usuarios nuevos en smartphones |
| Swipe lateral | El usuario sabe que hay contenido a los lados | No descubierto sin indicación visual |
| Pull to refresh | El usuario sabe que puede tirar hacia abajo | Patrón no conocido en primeras semanas de uso |
| Doble tap | El usuario sabe que el tap doble tiene función | No descubierto sin tutorial |
| Long press | El usuario sabe que mantener pulsado abre opciones | Descubrimiento accidental o con instrucción |

### Principios de diseño para usuarios con menor alfabetización digital

**Visibilidad extrema de las acciones posibles:**
En vez de patrones descubribles, usa botones visibles con etiquetas de texto. El usuario con menor alfabetización digital prefiere ver todas las opciones aunque ocupe más espacio en pantalla.

**Progresive disclosure adaptado:**
No escondas features en menús anidados. Muestra las funciones principales en la pantalla principal y deja las secundarias en un nivel de profundidad máximo.

**Iconos con texto siempre:**
Un icono sin etiqueta asume que el usuario sabe qué significa. En contextos de menor alfabetización digital, el icono + texto es obligatorio.

**Feedback explícito:**
Confirma cada acción del usuario con feedback visual y textual. "Tu pedido fue guardado" + animación + ícono de check. No asumas que el usuario infiere que la acción funcionó.

---

## MÓDULO 4 — CONSIDERACIONES CULTURALES

### Variables culturales que afectan el diseño

**Dirección de lectura:**
- LTR (izquierda a derecha): Europa, Latinoamérica, Sudeste Asiático
- RTL (derecha a izquierda): Árabe, Hebreo, Urdu → requiere mirroring completo del layout

**Colores y su significado cultural:**

| Color | Occidente | China | Latinoamérica | Oriente Medio |
|-------|-----------|-------|---------------|---------------|
| Rojo | Peligro/error | Buena suerte | Pasión/alerta | Peligro |
| Blanco | Pureza | Luto/muerte | Pureza | Pureza |
| Verde | Naturaleza/OK | Exofamilia (infidelidad) | Naturaleza/OK | Islam/sagrado |
| Negro | Elegancia | Luto | Luto/elegancia | Variable |

**Familias y toma de decisiones colectiva:**
En muchos mercados emergentes (especialmente África y Sudeste Asiático), los dispositivos son compartidos entre familia o comunidad. El patrón de "una cuenta por dispositivo" no aplica.

Consideraciones de diseño:
- Multi-usuario en el mismo dispositivo sin logout total
- Protección de información sensible dentro de la misma sesión
- Notificaciones que no expongan información privada en la pantalla de bloqueo

**Pagos y confianza:**
En mercados con baja bancarización, el pago en efectivo o mobile money (M-Pesa, etc.) puede superar al pago con tarjeta. El checkout no puede asumir que el usuario tiene tarjeta.

---

## MÓDULO 5 — INVESTIGACIÓN EN CONTEXTO

### Métodos de investigación adaptados

**Entrevistas contextuales:**
Visita al usuario en su entorno real. Observa cómo usa el teléfono, en qué contexto (de pie en el transporte, en casa compartida, con ruido), y qué otras personas están presentes.

**Test de usabilidad con protocolos adaptados:**
- No uses "think aloud" estándar — en algunas culturas pensar en voz alta mientras se hace algo es culturalmente inusual
- Usa observación + preguntas post-tarea
- Ten un facilitador local que entienda el idioma y los códigos culturales

**Simulación de condiciones reales:**
Antes de lanzar, testa en:
- Un dispositivo de gama baja real (no un emulador)
- Una conexión 2G simulada (Chrome DevTools → Network → Slow 3G)
- En condiciones de luz solar directa (el contraste importa)

---

## ENTREGABLE

Para mi producto [describe: qué hace, en qué mercado lo lanzas, dispositivos target, conectividad esperada]:
1. Audit de los 5 supuestos de diseño que más riesgo tienen en tu contexto de mercado emergente
2. Plan de optimización de performance para dispositivos de gama baja
3. Revisión del flujo principal con recomendaciones de accesibilidad para usuarios con menor alfabetización digital
4. Lista de variables culturales a investigar antes del lanzamiento
5. Protocolo de investigación de usuario adaptado al mercado objetivo
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Adaptar el diseño UX de un producto digital para mercados emergentes con restricciones de conectividad, dispositivos de gama baja y contextos culturales diversos.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Resiliencia comercial — cómo gestionar el rechazo sistemático y mantener la motivación en un rol de ventas',
                'description'      => 'Herramientas prácticas para desarrollar resiliencia emocional en ventas: cómo procesar el rechazo sin que afecte al rendimiento, sistemas para mantener la energía en ciclos de venta largos, y cómo construir hábitos mentales que separan a los comerciales de alto rendimiento del resto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de ventas con experiencia trabajando con equipos comerciales de alto rendimiento en sectores B2B y B2C. Ayúdame a desarrollar la resiliencia emocional necesaria para mantener un rendimiento consistente en ventas, donde el rechazo es la norma y no la excepción.

---

## LA REALIDAD ESTADÍSTICA DEL RECHAZO EN VENTAS

Antes de hablar de resiliencia, necesitamos hablar de matemáticas. El rechazo en ventas no es un fracaso personal — es la estructura del trabajo:

- En ventas outbound B2B, la tasa de respuesta a llamadas en frío es típicamente del 1-3%
- En enterprise sales, el 60-70% de los deals que entran en pipeline no cierran
- Un SDR de alto rendimiento escucha "no" o no recibe respuesta en el 97% de sus contactos
- Un Account Executive de SaaS necesita en promedio 8 contactos para conseguir una reunión de discovery

Esto significa que la resiliencia no es una cualidad "nice to have". Es la habilidad técnica fundamental del trabajo.

---

## MÓDULO 1 — EL MODELO COGNITIVO DEL RECHAZO

### Por qué el rechazo duele más de lo que debería

El cerebro humano no distingue entre rechazo social y dolor físico. Cuando alguien dice "no" a nuestra propuesta, se activan las mismas regiones cerebrales que con el dolor físico. Esto es biología, no debilidad.

Los vendedores que tienen bajo rendimiento después del rechazo cometen un error cognitivo específico: **la personalización**.

**Personalization Trap** (la trampa de personalización):
```
Lo que ocurrió: El prospect dijo "no tenemos presupuesto ahora mismo"
Lo que interpreta el cerebro: "Soy un mal vendedor / No valgo lo suficiente /
                               No soy convincente"
Lo que es real: El prospect tiene otras prioridades este trimestre
```

La herramienta más importante para la resiliencia no es la motivación. Es la **re-atribución cognitiva**: aprender a interpretar el rechazo correctamente.

### Framework de re-atribución en 3 pasos

Después de cada "no", pregúntate:

```
Paso 1 — ¿Es permanente o temporal?
"Este no" es permanente o en 3-6 meses la situación puede cambiar?
(La mayoría son temporales: presupuesto, timing, prioridades)

Paso 2 — ¿Es específico o general?
"Este no" me dice algo sobre esta venta específica o sobre mí como vendedor?
(Es siempre específico: esta empresa, este momento, esta necesidad)

Paso 3 — ¿Qué puedo controlar?
De todo lo que pasó, ¿qué estaba en mi control y qué no?
(Foco solo en lo controlable para la siguiente acción)
```

---

## MÓDULO 2 — SISTEMA DE PROCESAMIENTO DEL RECHAZO

### El ritual post-rechazo (5 minutos)

En lugar de ignorar el rechazo o rumiarlo, crea un ritual breve que procese la información y cierre el episodio:

```
RITUAL POST-RECHAZO (ejecutar inmediatamente después, no al final del día)

1. Anota el "no" con contexto neutral (2 min):
   "Llamada con [nombre], empresa [X]. Motivo del no: [exactamente lo que dijeron]"

2. Clasifica el no (1 min):
   □ No por timing → Seguimiento en [fecha]
   □ No por presupuesto → Seguimiento en Q[X]
   □ No por fit → Eliminar del pipeline
   □ No definitivo con explicación útil → Aprender y cerrar

3. Extrae una lección si la hay (1 min):
   "¿Hay algo que hubiese podido hacer diferente? [sí/no].
   Si sí: [qué]. Si no: era información que no controlaba."

4. Acción inmediata (1 min):
   "El siguiente contacto que voy a hacer ahora mismo es [nombre]"
   [No des tiempo al cerebro a rumiar — pasa directamente al siguiente]
```

### El contador de "no"

Los mejores vendedores reencuadran el rechazo como información estadística, no como fracaso personal. Una técnica de los equipos de ventas de Silicon Valley: el "no counter".

```
Mi objetivo esta semana:
[X] llamadas → [Y] rechazos → [Z] reuniones → [W] oportunidades
Ratio histórico: [calcula tus propios ratios]

Hoy ya llevo [N] rechazos → Estoy [N/Y × 100]% del camino a mi objetivo
```

Cuando el rechazo es un paso hacia la cuota, deja de doler tanto.

---

## MÓDULO 3 — GESTIÓN DE ENERGÍA EN CICLOS DE VENTA LARGOS

### El problema del ciclo largo

En ventas enterprise con ciclos de 6-18 meses, el riesgo no es el rechazo puntual — es la erosión gradual de la energía y la confianza cuando un deal que creíste cerrado se prolonga indefinidamente.

### Las 3 zonas de energía en ventas

**Zona verde (alto rendimiento)**:
- Tienes claros tus próximos pasos
- Tu pipeline tiene diversidad (deals en distintas fases)
- Tienes victorias recientes (cierres o avances significativos)

**Zona amarilla (riesgo)**:
- Tienes todos los huevos en pocos deals
- Llevas más de 3 semanas sin una victoria (aunque sea pequeña)
- Estás en modo "esperar a que el cliente decida"

**Zona roja (intervención necesaria)**:
- Tu forecast depende de un solo deal grande
- Llevas > 30 días sin hablar con un nuevo prospect
- Tu conversación interna sobre el trabajo es predominantemente negativa

### Plan de energía semanal para ciclos largos

```
LUNES — Planificación y revisión de pipeline:
Revisa cada deal: ¿cuál es el próximo paso concreto que yo controlo?
Agenda esas acciones en el calendario esta semana.

MARTES Y MIÉRCOLES — Prospección activa:
Aunque tengas un pipeline lleno, dedica 1 hora al día a generar nuevas
oportunidades. El pipeline de hoy es la cuota de dentro de 6 meses.

JUEVES — Advance calls y follow-ups:
Las reuniones de avance de deals en curso. Foco en avanzar el proceso,
no en esperar feedback.

VIERNES — Revisión y célébración:
¿Qué avancé esta semana? (no solo cierres — también: reunión conseguida,
propuesta enviada, champion identificado). Celebra el avance del proceso,
no solo el resultado final.
```

---

## MÓDULO 4 — HÁBITOS MENTALES DE VENDEDORES DE ALTO RENDIMIENTO

### Los 5 hábitos que separan a los top performers

**1. Separar la actividad del resultado a corto plazo**
Los top performers miden y controlan su actividad (llamadas, reuniones, propuestas). Los resultados son consecuencia de la actividad sostenida, no de cada interacción individual.

**2. El debriefing honesto**
Después de cada reunión, independientemente del resultado:
```
¿Cuál era mi objetivo para esta reunión? → ¿Lo conseguí? → ¿Por qué sí/no?
¿Cuál es el próximo paso acordado? → ¿Está en el calendario?
¿Qué haría diferente la próxima vez?
```

**3. El círculo de influencia**
Basado en el modelo de Covey: distinguir entre lo que puedes controlar (tus acciones, tu preparación, tu actitud) y lo que no (la decisión del cliente, el presupuesto, la competencia). Foco exclusivo en el círculo de influencia.

**4. Wins board**
Mantén un registro visible de tus victorias: no solo cierres, también "conseguí reunión con el CFO de empresa X", "avancé el deal Y de discovery a propuesta", "generé el mejor mes de pipeline de mi carrera". Esto contrarresta el sesgo de negatividad del rechazo constante.

**5. Comunidad entre pares**
El aislamiento amplifica el impacto del rechazo. Los vendedores de alto rendimiento suelen tener un peer group (dentro o fuera de la empresa) donde normalizan las dificultades y comparten estrategias.

---

## MÓDULO 5 — SEÑALES DE ALERTA Y CUÁNDO PEDIR AYUDA

### Burnout comercial — señales tempranas

Distingue entre el rechazo normal del trabajo y el burnout que requiere intervención:

| Señal normal | Señal de alerta |
|-------------|-----------------|
| Sentirte cansado al final de una semana de mucha prospección | Sentirte incapaz de hacer una llamada sin ansiedad anticipatoria |
| Que un no te moleste en el momento | Que el no del lunes te afecte el jueves |
| Tener días sin energía | Llevar > 2 semanas sin querer ir a trabajar |
| Cuestionar tu enfoque | Cuestionar si este trabajo es para ti |

Si identificas señales de alerta, las acciones prioritarias son:
1. Hablar con tu manager o coach (no ignorarlo)
2. Revisar la actividad reciente: ¿hay un problema sistémico de pipeline?
3. Evaluar si el producto / mercado / empresa tiene problemas reales (a veces el burnout es feedback de que algo está mal, no tú)

---

## ENTREGABLE

Para mi situación actual [describe: tipo de ventas, ciclo típico, el momento concreto que me está costando más]:
1. Diagnóstico de qué tipo de rechazo me está afectando más y por qué
2. Mi ritual post-rechazo personalizado (5 minutos)
3. Sistema de contador y ratio para reencuadrar el rechazo como estadística
4. Plan de gestión de energía para los próximos 30 días
5. Los 3 hábitos prioritarios que más impacto tendrían en mi rendimiento actual
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Desarrollar resiliencia emocional en ventas para gestionar el rechazo sistemático, mantener la energía en ciclos largos y construir hábitos mentales de alto rendimiento.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'APIs como producto — developer experience, documentación y cómo construir el ecosistema de integraciones',
                'description'      => 'Framework para product managers que gestionan una API como producto: cómo mejorar la developer experience (DX), qué hace una documentación que los developers realmente usan, cómo diseñar el go-to-market de una API pública y cómo construir el ecosistema de integraciones que genera moats.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un PM especializado en API products con experiencia en plataformas developer-facing. Ayúdame a gestionar y mejorar nuestra API como producto: desde la experiencia de los developers que la integran, hasta la estrategia para construir un ecosistema que sea difícil de reemplazar.

---

## POR QUÉ UNA API ES UN PRODUCTO

Una API no es solo infraestructura técnica — es un producto con sus propios usuarios (los developers), sus propias métricas de adopción, su funnel de conversión y sus competidores.

Los errores más comunes cuando no se trata la API como producto:
- Documentación generada automáticamente que nadie entiende
- Errores de API con mensajes crípticos que no ayudan al developer a resolver el problema
- Rate limits y precios opacos que sorprenden en producción
- Sin SDK en el lenguaje del developer objetivo
- Onboarding de API que tarda días en lugar de minutos

---

## MÓDULO 1 — EL DEVELOPER JOURNEY

Los developers tienen su propio funnel, tan definido como el funnel de ventas:

```
DESCUBRIMIENTO
¿Cómo encuentran nuestra API?
→ Búsqueda orgánica ("best [categoría] API")
→ Comparativas (RapidAPI, ProgrammableWeb)
→ Recomendaciones de peers (el canal más poderoso)
→ Ecosistema complementario (integraciones con herramientas que ya usan)

EVALUACIÓN (las primeras 24-48h son críticas)
→ Leen la homepage de la API (¿queda claro en 10 segundos qué hace y para quién?)
→ Revisan la documentación (¿tienen un getting started real?)
→ Buscan el pricing (¿es transparente o hay que hablar con ventas?)
→ Buscan en GitHub / Stack Overflow si hay problemas conocidos

PRIMERA INTEGRACIÓN (el momento de la verdad)
→ Registro y obtención de API key
→ Primera llamada exitosa
→ Comprensión de los patrones de autenticación, rate limiting y error handling

INTEGRACIÓN EN PRODUCCIÓN
→ Manejo de errores en producción
→ Monitorización y alertas
→ Gestión de versiones y migraciones

EXPANSIÓN
→ Uso de más endpoints
→ Recomendación a otros equipos o empresas
```

---

## MÓDULO 2 — DEVELOPER EXPERIENCE (DX)

### El time-to-first-hello-world

La métrica más importante de DX: cuánto tiempo tarda un developer nuevo en hacer su primera llamada exitosa a la API.

Benchmark:
- < 5 minutos: excelente DX (Stripe, Twilio)
- 5-30 minutos: DX aceptable
- 30-60 minutos: DX problemática, muchos abandonarán
- > 60 minutos: DX que destruye adopción

**Cómo medir el time-to-first-hello-world actual**:
Haz un usability test con 3-5 developers que no conozcan tu API. Pídeles que integren el caso de uso más común y cronométralo. No les ayudes. Solo observa.

### Los 5 elementos de una DX de 10/10

**1. Getting Started que funciona en 5 minutos**

```markdown
# Getting Started con [Nombre API]

## 1. Obtén tu API key (30 segundos)
Regístrate en [URL] → Dashboard → API Keys → Crea nueva key

## 2. Tu primera llamada (2 minutos)
```bash
curl -X POST https://api.[empresa].com/v1/[endpoint] \
  -H "Authorization: Bearer TU_API_KEY" \
  -H "Content-Type: application/json" \
  -d '{"campo1": "valor", "campo2": "valor"}'
```

Respuesta esperada:
```json
{
  "id": "obj_123abc",
  "status": "success",
  "resultado": "valor"
}
```

## 3. Integra en tu código (2 minutos)
[Tab con ejemplos en los lenguajes más usados por tu audiencia]
```

**2. Error messages que ayudan**

```json
// MAL
{"error": "400 Bad Request"}

// BIEN
{
  "error": {
    "code": "INVALID_PHONE_NUMBER",
    "message": "El número de teléfono '+34 91 234' no es válido.",
    "detail": "El formato esperado es E.164 (ej: +34912345678).
               Ver: https://docs.tuapi.com/phone-formats",
    "request_id": "req_abc123"
  }
}
```

Cada error debe tener: código semántico, mensaje legible, cómo solucionarlo, link a la documentación relevante, y un request_id para poder depurar con soporte.

**3. Sandbox con datos reales pre-cargados**

Un sandbox vacío obliga al developer a crear datos de prueba antes de poder probar nada. Proporciona un sandbox con:
- Datos de prueba pre-cargados que cubren los casos más comunes
- API keys de test con comportamientos predecibles (ej. ciertos inputs siempre devuelven error para testing)
- Modo verbose que muestra exactamente qué procesó la API

**4. SDKs en los lenguajes de tu audiencia**

Si tu audiencia usa Python, Node.js y PHP — tienes que tener SDKs oficiales en esos tres lenguajes. Un SDK bien hecho reduce el time-to-integration de horas a minutos.

Mínimo que debe incluir un SDK:
- Autenticación automática
- Retry logic con backoff exponencial
- Pagination automática
- Tipado (TypeScript types, Python type hints)
- Ejemplos en el README para los 5 casos de uso más comunes

**5. Status page y changelog público**

Los developers en producción necesitan saber:
- El estado actual de la API (incidents, degradaciones)
- Qué cambió en cada versión (changelog detallado, no "bug fixes y mejoras")
- Con cuánta antelación se notifican los cambios breaking

---

## MÓDULO 3 — DOCUMENTACIÓN QUE LOS DEVELOPERS USAN

### Los 4 tipos de documentación (Modelo Divio)

| Tipo | Orientado a | Formato | Ejemplo |
|------|-------------|---------|---------|
| **Tutorial** | Aprendizaje | Paso a paso guiado | "Construye tu primer chatbot en 15 minutos" |
| **How-to guide** | Problema concreto | Receta de cocina | "Cómo enviar SMS en masa con rate limiting" |
| **Reference** | Información | API reference exhaustiva | Documentación de todos los endpoints |
| **Explanation** | Comprensión | Conceptual | "Cómo funciona nuestra autenticación OAuth 2.0" |

La mayoría de las APIs solo tienen referencia. Las mejores APIs tienen los cuatro tipos.

### La estructura de un buen endpoint en la referencia

```
POST /v1/mensajes/enviar

Envía un SMS a uno o varios destinatarios.

## Parámetros

| Parámetro | Tipo | Requerido | Descripción |
|-----------|------|-----------|-------------|
| to | string o array | Sí | Número(s) E.164. Máximo 100 por request. |
| from | string | Sí | Tu número de remitente verificado |
| body | string | Sí | Texto del mensaje. Máximo 160 caracteres. |
| schedule_at | datetime | No | ISO 8601. Si no se indica, envío inmediato. |

## Ejemplo de request
[código en curl / Node / Python / PHP con tabs]

## Ejemplo de respuesta exitosa (200)
[JSON formateado con comentarios en cada campo]

## Errores comunes
| Código | Causa | Solución |
|--------|-------|---------|
| INVALID_PHONE | Formato de número incorrecto | [enlace] |
| RATE_LIMIT_EXCEEDED | Superado el límite de X/segundo | [enlace] |
```

---

## MÓDULO 4 — GO-TO-MARKET DE UNA API

### Estrategias de distribución

**Product-led growth para APIs**:
El developer prueba la API gratis (tier free o trial con créditos), experimenta valor, y luego escala o paga. Este modelo requiere:
- Registro sin fricción (sin formularios de ventas, sin esperar aprobación)
- Free tier que permita experimentar el valor real
- Pricing transparent y predecible
- Upgrade flow fácil cuando superan el free tier

**Developer advocacy**:
Los mejores canales de distribución de APIs son:
1. Los developers que ya la usan y la recomiendan (word of mouth)
2. Tutoriales y demos en YouTube y blogs técnicos
3. Presencia en comunidades de developers (Stack Overflow, Discord de frameworks)
4. Integraciones con plataformas que los developers ya usan

---

## ENTREGABLE

Para nuestra API [describe: qué hace, quiénes son los developers que la usan, estado actual de la DX y la documentación]:
1. Diagnóstico del developer journey actual con los 3 principales friction points
2. Plan de mejora de DX en 90 días con prioridades y métricas
3. Template de estructura de documentación para los 5 endpoints más usados
4. Propuesta de getting started que reduzca el time-to-first-hello-world a < 10 minutos
5. Métricas de DX a implementar esta semana para monitorizar la mejora
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar una API como producto: mejorar la developer experience, estructurar la documentación y diseñar el go-to-market para construir adopción y ecosistema.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de contractors y trabajadores temporales — diferencias legales y cómo integrarlos en el equipo sin crear dos clases',
                'description'      => 'Guía para RRHH sobre las diferencias legales entre empleados fijos, trabajadores temporales y contractors (autónomos / freelancers), cómo gestionar el riesgo de relación laboral encubierta, y cómo integrar a los trabajadores no permanentes en la cultura y los procesos del equipo de forma que contribuyan desde el primer día.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un HR manager con experiencia gestionando equipos mixtos de empleados fijos, trabajadores temporales y contractors en empresas en crecimiento. Ayúdame a estructurar una política clara para gestionar esta diversidad de tipos de relación laboral, cumpliendo la normativa española y creando una experiencia de integración que funcione para todos.

---

## AVISO LEGAL

Este prompt es una guía orientativa sobre práticas de RRHH. Para casos concretos de clasificación de trabajadores o gestión de riesgos legales, consulta siempre con un asesor laboral o abogado especializado en derecho del trabajo español.

---

## MÓDULO 1 — LAS TRES FIGURAS Y SUS DIFERENCIAS LEGALES

### Empleado fijo (contrato indefinido)

**Marco legal**: Estatuto de los Trabajadores (ET)
**Características**:
- Integración plena en la organización (horario, dirección, herramientas de la empresa)
- Cotización a la Seguridad Social a cargo del empresario
- Derechos: vacaciones, bajas, despido con indemnización
- Riesgo de impagos: la empresa asume todos los costes laborales

### Trabajador temporal (contrato de duración determinada)

**Marco legal**: ET + Reforma laboral 2022 (Ley 32/2021)
**Tipos válidos tras la reforma de 2022**:
- **Contrato por sustitución**: sustituye a un trabajador con reserva de puesto (baja, excedencia)
- **Contrato por circunstancias de la producción**: causal justificada, máximo 6 meses (ampliable a 12 meses por convenio) + un límite de 18 meses en la empresa en los últimos 24 meses
- **Contratos formativos**: en alternancia o para la obtención de práctica profesional

**Punto crítico post-reforma 2022**: el encadenamiento de contratos temporales sin causa justificada da lugar a la presunción de indefinición. La Inspección de Trabajo está especialmente atenta a este supuesto.

### Contractor / Autónomo (TRADE o autónomo regular)

**Marco legal**: Ley 20/2007 del Estatuto del Trabajo Autónomo + Código Civil
**Características**:
- Relación mercantil, no laboral
- Emite facturas, cotiza como autónomo por su cuenta
- No tiene integración organizativa formal (en teoría)
- No genera derechos laborales (vacaciones, indemnización, baja)

**El riesgo principal: la relación laboral encubierta (falso autónomo)**

Un contractor puede ser recalificado como empleado si de hecho concurren los criterios de laboralidad:
1. **Ajenidad**: trabaja con medios de la empresa y para la empresa (no para múltiples clientes)
2. **Dependencia**: está bajo las directivas y el control de la empresa
3. **Integración**: cumple horario fijo, usa email/herramientas de la empresa, está en el organigrama

Si los tribunales o la Inspección de Trabajo aprecian laboralidad, la empresa debe abonar retroactivamente las cotizaciones no realizadas + recargo + posibles sanciones.

---

## MÓDULO 2 — CÓMO GESTIONAR EL RIESGO DE FALSO AUTÓNOMO

### Señales de alerta (cada una suma riesgo)

| Factor | Riesgo bajo | Riesgo alto |
|--------|------------|-------------|
| Número de clientes del contractor | Múltiples clientes (> 3) | Solo trabaja para tu empresa |
| Medios de trabajo | Usa sus propios medios | Usa medios de la empresa |
| Horario | Flexible, él decide cuándo | Horario fijo impuesto |
| Dirección del trabajo | Define él su metodología | Instrucciones detalladas de la empresa |
| Integración en organigrama | No aparece internamente | Tiene email corporativo, aparece en Teams/Slack como miembro del equipo |
| Duración de la relación | Proyectos puntuales | Continuo durante años |

**Regla práctica**: si el contractor hace exactamente lo mismo que un empleado tuyo, el mismo horario, con los mismos medios y bajo las mismas instrucciones, es un empleado aunque emita facturas.

### Buenas prácticas para estructurar relaciones con contractors

```
EN EL CONTRATO MERCANTIL:
✓ Define el resultado a entregar (entregable), no las horas trabajadas
✓ Establece que el contractor puede subcontratar o delegar
✓ Especifica que usa sus propios medios
✓ Fija un precio por proyecto o por entregable, no por hora "de presencia"
✓ Permite que trabaje para otros clientes explícitamente

EN LA PRÁCTICA DIARIA:
✓ No le asignes horario fijo
✓ No le des email corporativo (o usa uno claramente diferenciado)
✓ Comunica por canal de proyecto (no Teams/Slack de empresa como si fuese empleado)
✓ Limita la duración de cada proyecto y renueva formalmente con nuevo contrato
✓ Asegúrate de que tiene otros clientes activos
```

---

## MÓDULO 3 — INTEGRACIÓN SIN CREAR DOS CLASES DE TRABAJADORES

El mayor riesgo cultural de los equipos mixtos es la creación de una ciudadanía de primera (empleados fijos) y una de segunda (temporales y contractors), lo que destruye la cohesión y el rendimiento.

### Los 4 principios de integración igualitaria

**Principio 1: Onboarding igual para todos**

Independientemente del tipo de contrato, el primer día debe incluir:
- Reunión con el manager directo (propósito, contexto del proyecto, expectativas)
- Acceso a las herramientas que necesitan para trabajar desde el primer día
- Presentación al equipo (en persona o virtual)
- Documentación de contexto (productos, procesos, cultura)

Lo que SÍ puede diferenciarse: el nivel de acceso a sistemas internos sensibles, la invitación a sesiones de all-hands estratégicas (depende del NDA).

**Principio 2: Comunicación clara de lo que no aplica**

En lugar de ignorar las diferencias, sé explícito. Al inicio:
```
"Como contractor/temporal, algunas cosas serán diferentes:
- No participas en el plan de bonus anual de la empresa
- Las políticas de vacaciones son las que acordamos contractualmente
- [Otras diferencias relevantes]

Pero en lo que se refiere a cómo trabajamos día a día, eres parte del equipo."
```

La transparencia elimina la ambigüedad y los resentimientos.

**Principio 3: Acceso a la información que necesitan para trabajar bien**

Los contractors y temporales suelen tener menos contexto porque "no son de la empresa". Esto los hace menos efectivos. Dales acceso a:
- Documentación de producto / roadmap relevante para su trabajo
- Reuniones de equipo donde se toman decisiones que les afectan
- Feedback regular (no solo al final del contrato)

**Principio 4: Inclusión cultural sin generar falsas expectativas**

Invita a contractors y temporales a:
- Team lunches y eventos de equipo (cuando la relación es significativa en duración)
- Retrospectivas del proyecto en el que participan

No los invites a:
- Sesiones de planificación estratégica a largo plazo si su contrato es de 3 meses
- Comunicaciones internas que crearían confusión sobre su rol

---

## MÓDULO 4 — OFFBOARDING DE CONTRACTORS Y TEMPORALES

El offboarding es tan importante como el onboarding, y suele ser lo más descuidado.

### Checklist de offboarding

```
30 días antes del fin:
□ Confirmar fecha de fin del contrato con el contractor y el manager
□ Evaluar si hay razones para extender o convertir a indefinido
□ Iniciar transferencia de conocimiento si tiene proyectos en curso

Semana del fin:
□ Revocar accesos a sistemas (el mismo día del último día, no antes)
□ Transferir ownership de documentos / repositorios
□ Reunión de feedback con el manager (qué fue bien, qué mejoraríamos)
□ Pago de la última factura o liquidación contractual
□ Carta de recomendación si ha habido buena relación (especialmente para contractors)

Post-offboarding:
□ Mantener el contacto en LinkedIn (los mejores contractors suelen volver)
□ Documentar internamente para facilitar futuras contrataciones similares
```

---

## ENTREGABLE

Para mi empresa [describe: sector, tamaño, tipos de trabajadores no permanentes que tienes o vas a incorporar, problemáticas actuales]:
1. Diagnóstico del riesgo legal de las relaciones con contractors actuales
2. Plantilla de contrato mercantil con las cláusulas que reducen el riesgo de laboralidad
3. Protocolo de onboarding diferenciado (empleado vs temporal vs contractor)
4. Política interna de gestión de workers no permanentes (1-2 páginas)
5. Checklist de offboarding adaptado a cada tipo de trabajador
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar equipos mixtos de empleados, temporales y contractors cumpliendo la normativa española y creando una integración que maximice la contribución de todos.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Métricas SaaS para inversores — MRR, ARR, churn, NRR, LTV/CAC ratio y cómo construir el dashboard que piden los VCs',
                'description'      => 'Aprende a calcular y presentar las métricas SaaS que los inversores de venture capital realmente revisan: MRR, ARR, churn mensual y anual, Net Revenue Retention (NRR), el ratio LTV/CAC y cómo construir un dashboard de investor updates que comunica la salud del negocio con claridad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO de startup SaaS con experiencia levantando rondas de inversión y preparando reportes mensuales para inversores. Ayúdame a calcular correctamente las métricas SaaS más importantes, entender qué significan para la salud de mi negocio, y construir el dashboard que los VCs esperan ver en cada investor update.

---

## LAS MÉTRICAS QUE DEFINEN UN NEGOCIO SAAS

Las métricas SaaS no son indicadores contables tradicionales. Son indicadores adelantados que predicen el futuro del negocio mucho mejor que los estados financieros clásicos.

---

## MÓDULO 1 — MRR Y ARR

### Monthly Recurring Revenue (MRR)

El MRR es la suma de todos los ingresos recurrentes normalizados a un mes.

```
MRR = Σ (ingresos recurrentes mensuales de todos los clientes activos)

Para clientes con plan anual:
MRR contribución = precio_anual / 12

Ejemplo:
- 50 clientes en plan 99€/mes = 4.950€
- 20 clientes en plan 249€/mes = 4.980€
- 5 clientes en plan anual de 2.400€ = 5 × (2.400/12) = 1.000€
MRR total = 4.950 + 4.980 + 1.000 = 10.930€
```

**Componentes del movimiento de MRR (MRR Movement):**

| Componente | Definición | Señal |
|-----------|------------|-------|
| New MRR | MRR de clientes nuevos este mes | Motor de crecimiento |
| Expansion MRR | MRR adicional de clientes existentes (upsell, seats) | Eficiencia de producto |
| Contraction MRR | MRR perdido por downgrades de clientes existentes | Señal de insatisfacción |
| Churned MRR | MRR de clientes que cancelaron | Señal de producto/fit |
| Reactivation MRR | MRR de clientes que volvieron | Señal de valor diferido |

```
MRR fin de mes = MRR inicio de mes
              + New MRR
              + Expansion MRR
              - Contraction MRR
              - Churned MRR
              + Reactivation MRR
```

### Annual Recurring Revenue (ARR)

```
ARR = MRR × 12

Nota: El ARR NO es la suma de los contratos anuales firmados.
Es el MRR × 12 — una proyección anualizada del estado actual.
```

---

## MÓDULO 2 — CHURN

### Logo Churn (churn de clientes)

```
Logo Churn Rate (mensual) = Clientes cancelados en el mes / Clientes al inicio del mes × 100

Ejemplo:
- Clientes al 1 de enero: 200
- Clientes que cancelaron en enero: 8
- Logo Churn = 8/200 × 100 = 4% mensual
```

**Benchmarks de logo churn:**
- < 2% mensual: excelente
- 2-5% mensual: aceptable en early stage
- > 5% mensual: problema crítico que hay que resolver antes de escalar

### Revenue Churn (churn de ingresos)

```
Gross Revenue Churn Rate = (Churned MRR + Contraction MRR) / MRR inicio de mes × 100

Net Revenue Churn = (Churned MRR + Contraction MRR - Expansion MRR) / MRR inicio de mes × 100
```

Cuando el Net Revenue Churn es negativo (Expansion MRR > Churned + Contraction), se llama **Negative Churn** — el mejor estado posible para un SaaS.

---

## MÓDULO 3 — NET REVENUE RETENTION (NRR)

El NRR es la métrica que mejor predice el potencial de crecimiento a largo plazo de un SaaS.

```
NRR = (MRR inicio de período + Expansion MRR - Contraction MRR - Churned MRR)
      / MRR inicio de período × 100

Interpretación:
NRR > 100%: Las cuentas existentes crecen solas (negative churn) → Escala eficientemente
NRR = 100%: Compensas el churn exactamente con expansión → Estable
NRR < 100%: Pierdes ingresos de las cuentas existentes → Problema de retención
```

**Benchmarks de NRR por tipo de SaaS:**

| Tipo de SaaS | NRR bueno | NRR excelente |
|-------------|-----------|---------------|
| SMB (clientes pequeños) | > 90% | > 100% |
| Mid-market | > 100% | > 110% |
| Enterprise | > 110% | > 120% |

Las empresas SaaS más valoradas (Snowflake, Datadog, Cloudflare) tienen NRR de 130-170%.

---

## MÓDULO 4 — LTV / CAC RATIO

### Customer Acquisition Cost (CAC)

```
CAC = (Coste total de ventas y marketing del período)
      / Nuevos clientes adquiridos en el período

Coste total de ventas y marketing incluye:
- Salarios del equipo de ventas y marketing (salario + SS)
- Herramientas (CRM, marketing automation, etc.)
- Publicidad pagada
- Eventos y ferias
- Agencias externas

Ejemplo:
- Coste S&M enero: 25.000€
- Nuevos clientes enero: 15
- CAC = 25.000 / 15 = 1.667€
```

### Customer Lifetime Value (LTV)

```
LTV = ARPU / Logo Churn Rate mensual × Margen bruto

ARPU (Average Revenue Per User) = MRR / número de clientes

Ejemplo:
- ARPU = 10.930€ / 75 clientes = 145,7€/mes
- Logo Churn Rate = 2% mensual
- Margen bruto = 75%

LTV = 145,7 / 0,02 × 0,75 = 5.464€
```

### LTV / CAC Ratio

```
LTV/CAC = LTV / CAC

Con los datos del ejemplo:
LTV/CAC = 5.464 / 1.667 = 3,3x
```

**Benchmarks:**
- < 1x: Destruyes valor al adquirir clientes — problema crítico
- 1-3x: Marginal — escalas con dificultad
- 3x: El estándar mínimo aceptado por inversores
- > 5x: Excelente — tienes margen para acelerar la inversión en growth
- > 10x: Probablemente estás sub-invirtiendo en growth

---

## MÓDULO 5 — EL DASHBOARD PARA INVERSORES

### Estructura del investor update mensual

```
INVESTOR UPDATE — [MES/AÑO] — [NOMBRE DE LA EMPRESA]

━━━━━━━━━━━━━━━━━━━━━━
 HEADLINE EN 3 BULLETS
━━━━━━━━━━━━━━━━━━━━━━
• MRR: X€ (+Y% vs mes anterior / +Z% YoY)
• [Hito clave del mes]: descripción concisa
• [Reto principal]: qué es y cómo lo estás abordando

━━━━━━━━━━━━━━━━━━━━━━
 MÉTRICAS CLAVE
━━━━━━━━━━━━━━━━━━━━━━
MRR:           [X€]    (+Y% MoM)
ARR:           [X€]
New MRR:       [X€]    ([N] nuevos clientes)
Churned MRR:   [X€]    ([N] clientes, [Y%] logo churn)
Net MRR Churn: [X€]    ([Y%])
NRR:           [X%]
CAC:           [X€]
LTV:           [X€]
LTV/CAC:       [Xx]
Runway:        [N] meses

━━━━━━━━━━━━━━━━━━━━━━
 PROGRESO VS HITOS
━━━━━━━━━━━━━━━━━━━━━━
Hito 1: [descripción] → [estado: ✓ / en progreso / retrasado]
Hito 2: [descripción] → [estado]
Hito 3: [descripción] → [estado]

━━━━━━━━━━━━━━━━━━━━━━
 DÓNDE NECESITO AYUDA
━━━━━━━━━━━━━━━━━━━━━━
[Máximo 2-3 peticiones concretas: intro a empresa X, candidato para Y,
 feedback sobre decisión Z]
```

**Principios del investor update:**
- Honestidad sobre los retos (los inversores saben que hay problemas — ocultar erosiona la confianza)
- Consistencia: envíalo siempre el mismo día del mes
- Brevedad: los mejores updates tienen < 500 palabras + la tabla de métricas
- Accionable: la sección "dónde necesito ayuda" convierte el update en una conversación

---

## ENTREGABLE

Para mi empresa SaaS [proporciona los datos que tengas: MRR, clientes, churn, costes de S&M]:
1. Cálculo de MRR movement con sus componentes
2. Logo churn rate y revenue churn rate con interpretación
3. NRR con comparación vs benchmark de tu tipo de SaaS
4. LTV, CAC y ratio LTV/CAC con diagnóstico
5. Template de investor update completo con tus datos y las 3 áreas de mejora prioritarias
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Calcular y presentar las métricas SaaS que los inversores revisan: MRR, ARR, churn, NRR y LTV/CAC, con el template de investor update mensual.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Term sheet y pacto de socios — los términos de inversión que más importan al founder antes de firmar cualquier acuerdo',
                'description'      => 'Guía para founders sobre los términos de un term sheet de inversión y un pacto de socios: qué son las liquidation preferences, los anti-dilution rights, el drag-along, el tag-along, el veto de inversores y cómo negociar cada término antes de firmar para no perder el control de tu empresa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado corporativo especializado en startups y venture capital en España, con experiencia asesorando a founders en rondas de inversión seed, Serie A y Serie B. Ayúdame a entender los términos de mi term sheet y del pacto de socios antes de firmar, identificando cuáles son los más importantes para proteger mis intereses como founder.

**AVISO LEGAL**: Este prompt es una guía orientativa. Antes de firmar cualquier term sheet o pacto de socios, contrata a un abogado especializado en capital riesgo para que revise los documentos específicos de tu operación.

---

## POR QUÉ EL TERM SHEET ES EL DOCUMENTO MÁS IMPORTANTE

El term sheet establece las condiciones económicas y de gobierno de la inversión. Una vez firmado (aunque no sea vinculante en su totalidad), es muy difícil renegociar sus términos. Un founder que no entiende el term sheet puede:
- Recibir mucho menos dinero de lo esperado en una venta
- Perder el control de decisiones estratégicas
- Ver cómo los inversores bloquean un exit favorable para los founders

---

## MÓDULO 1 — VALORACIÓN Y DILUCIÓN

### Pre-money vs post-money valuation

```
Ejemplo:
- Pre-money valuation: 4.000.000€
- Investment amount: 1.000.000€
- Post-money valuation: 5.000.000€
- % del inversor: 1.000.000 / 5.000.000 = 20%
- % de founders post-inversión: 80%

Cuidado con los SAFEs y convertible notes:
Si tienes 500.000€ en convertible notes que se van a convertir en la misma ronda,
la dilución real puede ser mayor de lo que parece a primera vista.
```

### Option pool (pool de opciones)

Muchos term sheets exigen crear un option pool ANTES de calcular la valoración pre-money. Esto significa que la dilución del pool la asumen los founders, no el inversor.

```
Trampa del option pool:
- Pre-money valuation acordada: 4.000.000€
- El inversor exige un option pool del 15% pre-money
- Acciones totales: 1.000.000
- Option pool (15%): 150.000 acciones reservadas
- Founders quedan con: 850.000 acciones (85%)
- Inversor recibe: 200.000 acciones por 1M€ (post-money = 5M€)
- Post-inversión: founders 68%, option pool 12%, inversor 20%

Si el option pool se crease post-money, los founders quedarían con 80% antes del pool.
```

---

## MÓDULO 2 — LIQUIDATION PREFERENCE

La liquidation preference determina quién cobra primero y cuánto en caso de venta o liquidación de la empresa.

### Tipos de liquidation preference

**Non-participating preferred (1x)**:
En un exit, el inversor elige entre:
- Recuperar su inversión (1x preferencia), O
- Convertir a común y recibir su % del exit

```
Ejemplo: Inversor invirtió 1M€ por 20% de la empresa
Venta por 3M€:
- Como preferencia: 1M€ (garantizado)
- Convertido a común: 3M€ × 20% = 600.000€
→ El inversor elige preferencia: cobra 1M€
→ Founders cobran: 2M€ (mejor que 1x participating)

Venta por 10M€:
- Como preferencia: 1M€
- Convertido a común: 10M€ × 20% = 2M€
→ El inversor convierte: cobra 2M€
→ Founders cobran: 8M€
```

**Participating preferred (1x participating)**:
El inversor cobra SU preferencia primero Y ADEMÁS participa en el resto como si fuese acción común.

```
Mismo ejemplo. Venta por 3M€:
- Preferencia: 1M€
- Participación sobre el resto (2M€ × 20%): 400.000€
→ Inversor cobra: 1.400.000€
→ Founders cobran: 1.600.000€ (peor para founders)
```

**Múltiplo de preferencia (2x, 3x)**:
El inversor recibe 2x o 3x su inversión antes de que los founders vean un euro. Evitar en la medida de lo posible.

**Regla del founder**: acepta 1x non-participating. Resiste cualquier múltiplo o participating.

---

## MÓDULO 3 — ANTI-DILUTION RIGHTS

Protegen al inversor si en la siguiente ronda la empresa se valoriza menos (down round).

### Tipos de anti-dilution

**Broad-based weighted average** (la más razonable para founders):
Ajusta el precio de conversión del inversor en función de un promedio ponderado que incluye todas las acciones outstanding. El ajuste es moderado.

**Narrow-based weighted average** (peor para founders):
Solo considera las acciones preferentes en el cálculo. El ajuste es mayor para el inversor.

**Full ratchet** (la peor para founders):
El precio de conversión del inversor se ajusta al precio exacto de la nueva ronda. En un down round severo, puede causar una dilución masiva de founders.

**Regla del founder**: acepta broad-based weighted average. Resiste full ratchet a toda costa.

---

## MÓDULO 4 — DERECHOS DE GOBIERNO

### Derecho de veto (Reserved Matters)

Los inversores suelen exigir veto sobre ciertas decisiones estratégicas. Los términos razonables incluyen:
- Nuevas rondas de financiación
- Venta de la empresa
- Cambios en el plan de negocio aprobado por el board
- Remuneración del C-suite por encima de X€

Los términos que dan demasiado poder:
- Veto sobre nuevas contrataciones de nivel senior
- Veto sobre cambios de producto
- Veto sobre el presupuesto anual sin mínimo material

### Drag-along right

El inversor (o una mayoría de accionistas) puede forzar a los demás accionistas (incluidos los founders) a vender sus acciones en las mismas condiciones si se aprueba una venta.

**Por qué es aceptable si está bien limitado**: el drag-along evita que un accionista minoritario bloquee una venta que conviene a todos.

**Límites que debes negociar**:
- El drag-along solo puede activarse con aprobación del board (no solo del inversor)
- Debe haber un precio mínimo (floor) por debajo del cual no aplica
- Las liquidation preferences deben respetarse en el precio de drag

### Tag-along right

El accionista minoritario tiene derecho a vender sus acciones si otro accionista vende las suyas. Protege a founders y a inversores minoritarios.

### Pre-emption right

El inversor tiene derecho a participar en las siguientes rondas para mantener su % de participación. Es razonable y standard.

---

## MÓDULO 5 — PROTECCIÓN DE FOUNDERS

### Vesting de founders

Si no habías implementado un vesting de founders antes de la inversión, el inversor puede exigirlo ahora. El estándar es:
- 4 años con cliff de 1 año
- Si eres cofundador y llevas ya 2 años, negocia un vesting acelerado que reconozca el tiempo ya invertido

### Good leaver / Bad leaver

Define qué pasa con las acciones de un founder que sale:

| Situación | Good leaver | Bad leaver |
|-----------|------------|------------|
| Sale voluntariamente antes del cliff | Pierde todo (o vende a precio nominal) | Pierde todo |
| Sale voluntariamente después del cliff | Mantiene las acciones vested, resto a precio de ejercicio | Acciones a precio nominal |
| Despedido sin causa | Good leaver | — |
| Despedido por causa grave (fraude, etc.) | — | Bad leaver |

Negocia que el despido unilateral por el board sin causa justificada te clasifique como good leaver con aceleración total.

---

## ENTREGABLE

Para mi situación [describe: ronda, valoración, monto, % al inversor, términos que te han propuesto]:
1. Análisis de los 3 términos más críticos de tu term sheet con la posición de negociación recomendada
2. Simulación de 3 escenarios de exit (pequeño, medio, grande) con lo que recibirías tú vs el inversor con los términos actuales
3. Lista de contra-propuestas priorizadas para la negociación
4. Las 2 cláusulas que no deberías firmar sin modificar y cómo renegociarlas
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Entender y negociar los términos de un term sheet de inversión y pacto de socios para proteger los intereses del founder antes de firmar.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Priorización de tickets y gestión de la urgencia — sistema para que nada crítico se pierda en el volumen diario de soporte',
                'description'      => 'Framework de priorización de tickets de soporte para equipos con alto volumen: cómo clasificar la urgencia e impacto de cada ticket, definir SLAs por categoría, gestionar las escalaciones sin que interrumpan el flujo del equipo, y asegurar que los clientes con problemas críticos reciben atención inmediata.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de operaciones de Customer Support con experiencia gestionando equipos de alto volumen. Ayúdame a construir un sistema de priorización de tickets que garantice que nada crítico se quede sin atención, mientras el equipo mantiene una cadencia sostenible de trabajo.

---

## EL PROBLEMA DE LA COLA DE TICKETS

Sin un sistema de priorización, los equipos de soporte caen en uno de estos dos patrones:
- **FIFO ciego** (First In, First Out): se atiende por orden de llegada, independientemente del impacto. Un ticket crítico puede esperar detrás de 20 preguntas de baja urgencia.
- **Urgencia percibida** (el que más grita primero): los clientes que escalan más reciben más atención, no los que tienen el problema más grave. Crea incentivos perversos.

Un buen sistema de priorización resuelve esto con criterios objetivos, no con intuición.

---

## MÓDULO 1 — MATRIZ DE IMPACTO / URGENCIA

La base de cualquier sistema de priorización es separar impacto y urgencia:

**Impacto**: ¿Cómo afecta este problema al cliente?
- **Alto**: el cliente no puede usar la funcionalidad principal / perdió datos / el problema afecta a muchos usuarios
- **Medio**: el cliente puede trabajar con dificultades o con workaround
- **Bajo**: problema cosmético, duda general, no afecta al uso del producto

**Urgencia**: ¿Cuánto tiempo tiene el cliente antes de que el problema cause daño adicional?
- **Alta**: el daño aumenta con cada minuto (sistema caído, datos en riesgo, deadline inminente)
- **Media**: el daño se materializa en horas o días
- **Baja**: sin consecuencias inmediatas si se resuelve en días

### Matriz resultante

| | Urgencia Alta | Urgencia Media | Urgencia Baja |
|---|---|---|---|
| **Impacto Alto** | P1 — Crítico | P2 — Alto | P2 — Alto |
| **Impacto Medio** | P2 — Alto | P3 — Medio | P4 — Bajo |
| **Impacto Bajo** | P3 — Medio | P4 — Bajo | P4 — Bajo |

---

## MÓDULO 2 — DEFINICIÓN DE PRIORIDADES CON EJEMPLOS

### P1 — Crítico (respuesta en < 15-30 minutos)

**Criterio**: El cliente tiene su negocio paralizado o hay riesgo de pérdida de datos.

**Ejemplos:**
- La plataforma devuelve error 500 para todos los usuarios de un cliente
- Un cliente perdió datos que no puede recuperar
- Un proceso de pago/cobro falla en producción con impacto económico directo
- Un bug de seguridad está exponiendo datos de clientes

**Proceso:**
```
1. El agente que recibe el ticket lo escala inmediatamente a un P1 handler
2. Se notifica al manager on-call
3. Primer contacto con el cliente en < 15 minutos
4. Actualizaciones cada 30 minutos hasta resolución
5. Post-mortem dentro de las 48h siguientes
```

### P2 — Alto (respuesta en < 2-4 horas)

**Criterio**: Funcionalidad importante degradada, hay workaround pero es costoso para el cliente.

**Ejemplos:**
- Una integración clave no sincroniza correctamente
- Los informes muestran datos incorrectos (no pérdida, pero datos erróneos)
- El proceso de onboarding falla en un paso específico
- Un feature de uso frecuente no responde correctamente

### P3 — Medio (respuesta en < 1 día laborable)

**Criterio**: El cliente puede trabajar normalmente pero algo no funciona como esperaba.

**Ejemplos:**
- Un elemento de la UI no se muestra correctamente en un navegador específico
- Una funcionalidad secundaria tiene un comportamiento inesperado
- El cliente no sabe cómo hacer algo (pregunta de uso, no bug)
- Solicitud de ajuste de configuración

### P4 — Bajo (respuesta en < 3-5 días laborables)

**Criterio**: Sin impacto en el trabajo del cliente. Mejoras, dudas generales, feedback.

**Ejemplos:**
- Sugerencia de mejora de producto
- Pregunta sobre facturación o planes
- Solicitud de funcionalidad no existente
- Error tipográfico en la interfaz

---

## MÓDULO 3 — EL SISTEMA DE CLASIFICACIÓN EN PRÁCTICA

### Quién clasifica y cuándo

El problema de la clasificación manual es que toma tiempo y es inconsistente entre agentes. Implementa estas prácticas:

**Auto-clasificación por canal de entrada:**
```
Canal de entrada → Prioridad inicial por defecto

Email desde formulario de contacto general → P3
Email desde formulario de "problema crítico" → P2 (revisar por agente)
Chat en el producto → P3
Teléfono de soporte (si existe) → P2
Email desde cliente enterprise (tier alto) → P2 mínimo
Email desde cliente con SLA específico → Según SLA acordado
```

**Clasificación automática por keywords en el subject/body:**
Configura reglas en tu helpdesk (Zendesk, Freshdesk, Intercom) que escalen automáticamente tickets con palabras como "down", "caído", "no funciona nada", "datos perdidos", "urgente", "bloqueado".

### El script de clasificación del agente (30 segundos)

Cuando un agente recibe un ticket y no está claro su prioridad:

```
1. ¿El cliente NO PUEDE usar el producto o ha perdido datos? → P1
2. ¿El cliente puede trabajar pero con dificultad significativa? → P2
3. ¿El cliente puede hacer su trabajo pero algo falla? → P3
4. ¿Es una pregunta, sugerencia o problema estético? → P4
```

---

## MÓDULO 4 — GESTIÓN DE LAS ESCALACIONES

### Los dos tipos de escalación

**Escalación por urgencia**: el cliente no puede esperar → el agente sube la prioridad y notifica al tier superior

**Escalación por complejidad**: el agente no puede resolver el problema → pasa el ticket a alguien con más expertise técnico o de producto

### Protocolo de escalación

```
ESCALACIÓN INTERNA (de Tier 1 a Tier 2):
1. El agente añade un internal note con:
   - Lo que intentó resolver
   - La información que ya recopiló del cliente
   - Su hipótesis sobre el problema
2. Cambia el owner del ticket al Tier 2
3. Informa al cliente: "He pasado tu caso a nuestro equipo especializado.
   Te contactarán antes de las [hora]."

ESCALACIÓN A INGENIERÍA / PRODUCTO:
Solo cuando es un bug confirmado o un problema de infraestructura.
El ticket de soporte NO va directamente a Jira/GitHub — el agente crea
el bug report con la información completa y mantiene la comunicación
con el cliente desde el ticket original.
```

### Evitar que las escalaciones interrumpan el flujo del equipo

```
SISTEMA DE SLOTS DE ESCALACIÓN:
- El equipo de ingeniería no recibe interrupciones en tiempo real de soporte
- Los P1 tienen un canal especial (ej. #p1-soporte en Slack) que SÍ interrumpe
- Los P2 se revisan en ventanas definidas: 10:00 y 15:00
- Los P3/P4 van al backlog técnico y se revisan en el sprint
```

---

## MÓDULO 5 — MÉTRICAS DE PRIORIZACIÓN

| Métrica | Definición | Objetivo |
|---------|-----------|---------|
| P1 response time | Tiempo desde que entra el P1 hasta primer contacto | < 15 minutos |
| P1 resolution time | Tiempo hasta resolución del P1 | < 4 horas |
| SLA compliance rate | % de tickets resueltos dentro del SLA | > 95% |
| Mis-classified rate | % de tickets re-clasificados tras la primera revisión | < 10% |
| Escalation rate | % de tickets que requieren escalación | Benchmark vs histórico |
| Reopen rate | % de tickets que el cliente reabre tras marcarlos como resueltos | < 5% |

---

## ENTREGABLE

Para mi equipo de soporte [describe: tamaño del equipo, volumen de tickets semanal, herramienta de ticketing, principales tipos de problemas que recibes]:
1. Definición de P1-P4 adaptada a tu producto y tipos de cliente
2. Configuración de reglas de auto-clasificación para tu herramienta de ticketing
3. Script de clasificación de 30 segundos para tu equipo
4. Protocolo de escalación interno con roles y canales específicos
5. Dashboard de métricas de priorización para revisar cada semana
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema de priorización de tickets de soporte con criterios objetivos, SLAs por prioridad y protocolos de escalación que garantizan que nada crítico se queda sin atención.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de la creatividad — cómo superar el bloqueo creativo y mantener la inspiración cuando trabajas solo y con deadlines',
                'description'      => 'Herramientas prácticas para freelancers creativos que trabajan solos: cómo superar el bloqueo creativo, mantener un sistema de inspiración sostenible, gestionar la ansiedad del deadline y construir hábitos que aseguren la producción creativa consistente sin depender de la musa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de creatividad con experiencia trabajando con freelancers creativos (diseñadores, escritores, fotógrafos, desarrolladores de producto creativo). Ayúdame a construir un sistema sostenible de gestión de mi energía creativa para producir trabajo de calidad de forma consistente, sin depender de la inspiración puntual y sin quemarme.

---

## EL MITO DE LA INSPIRACIÓN

La inspiración existe, pero no es confiable como motor de producción profesional. Los creadores que mantienen altos niveles de producción durante años no esperan la inspiración — tienen sistemas que la generan.

Austin Kleon lo resume: "La inspiración llega cuando estás trabajando, no cuando estás esperando trabajar."

El bloqueo creativo rara vez es falta de ideas. Casi siempre es una de estas cuatro cosas:
1. **Perfeccionismo**: el miedo a que lo que produces no sea suficientemente bueno
2. **Sobrecarga**: demasiados inputs o demasiadas opciones
3. **Agotamiento**: fatiga acumulada sin recarga suficiente
4. **Ambigüedad**: no sabes exactamente qué se espera del entregable

Cada uno tiene un antídoto diferente.

---

## MÓDULO 1 — DIAGNÓSTICO DE TU BLOQUEO

Antes de aplicar cualquier técnica, identifica qué tipo de bloqueo tienes hoy:

### Test de diagnóstico rápido (2 minutos)

```
Pregunta 1: ¿Tengo ideas pero no empiezo a ejecutarlas?
→ Probablemente: Perfeccionismo o ansiedad del blank page

Pregunta 2: ¿Empiezo pero todo me parece malo y lo borro?
→ Probablemente: Perfeccionismo + autocrítica excesiva en fase creativa

Pregunta 3: ¿No tengo ideas, la mente en blanco?
→ Probablemente: Agotamiento o necesitas más inputs (llenar el pozo)

Pregunta 4: ¿Tengo muchas ideas pero no sé cuál seguir?
→ Probablemente: Sobrecarga de opciones (paradoja de la elección)

Pregunta 5: ¿No sé exactamente qué se espera del trabajo?
→ Probablemente: Ambigüedad del brief (problema de proceso, no de creatividad)
```

---

## MÓDULO 2 — ANTÍDOTOS POR TIPO DE BLOQUEO

### Antídoto 1 — Para el perfeccionismo: el borrador horrible intencional

Cuando el blank page paraliza, comprométete a producir la versión más mala posible del entregable.

```
TÉCNICA DEL BORRADOR HORRIBLE:
"Voy a pasar los próximos 20 minutos produciendo la versión más rápida
y más imperfecta posible de este [diseño/texto/propuesta].
No voy a borrarlo. Solo voy a producir."

Por qué funciona: elimina la presión de que lo que produces ahora
es el producto final. El primer borrador nunca lo es.
La mente puede producir cuando no hay miedo al juicio inmediato.
```

### Antídoto 2 — Para la autocrítica en fase creativa: separar crear de editar

La creación y la edición son dos modos cognitivos opuestos. Cuando los mezclas, ninguno funciona bien.

```
PROTOCOLO DE SEPARACIÓN:

SESIÓN DE CREACIÓN (no juzgar):
- Temporizador: 45-90 minutos
- Regla: produce sin parar, no borres, no evalúes
- Si una idea es mala, ponla igualmente — puede llevar a algo bueno
- Modo: "generador"

[Pausa: mínimo 30 minutos, idealmente hasta el día siguiente]

SESIÓN DE EDICIÓN (no crear):
- Revisa lo producido con ojos frescos
- Selecciona, elimina, refina
- No añadas ideas nuevas en esta fase — solo edita lo que ya existe
- Modo: "curador"
```

### Antídoto 3 — Para el agotamiento: llenar el pozo

El agotamiento creativo no se resuelve con más esfuerzo. Se resuelve recargando el pozo de inspiración.

Julia Cameron, en "El camino del artista", habla del "pozo seco": cuando produces sin nutrir tu creatividad con inputs variados, el pozo se vacía.

```
SISTEMA DE LLENADO DEL POZO:

Inputs semanales obligatorios:
□ Una cosa hermosa que no esté relacionada con tu trabajo
  (museo, concierto, naturaleza, arquitectura)
□ Un libro o artículo de un campo completamente diferente al tuyo
□ Una conversación profunda con alguien que piense diferente a ti

Inputs diarios:
□ 15 minutos de "paseo mental" sin teléfono (el aburrimiento
  genera conexiones creativas que la estimulación constante mata)
□ Un cuaderno de capturas: anota todo lo que llama tu atención,
  sin filtro. No son ideas para proyectos — son material en bruto.
```

### Antídoto 4 — Para la sobrecarga de opciones: el marco de restricciones

La libertad total es el enemigo de la creatividad. Las restricciones generan soluciones creativas.

```
TÉCNICA DE LAS RESTRICCIONES INVENTADAS:

Si tienes demasiadas opciones, imponerte restricciones artificiales:
- "Solo puedo usar 3 colores"
- "El texto tiene que caber en 100 palabras"
- "Tengo que resolver esto en 2 horas"
- "Solo puedo usar elementos que ya tengo, no puedo buscar nada nuevo"

Las restricciones fuerzan al cerebro a trabajar dentro de un espacio
acotado, lo que paradójicamente genera más creatividad que la libertad total.
```

### Antídoto 5 — Para la ambigüedad: el brief personal

Si el cliente o el proyecto no tienen un brief claro, escríbelo tú.

```
BRIEF PERSONAL (antes de empezar cualquier proyecto):

Objetivo: ¿Para qué sirve este entregable? ¿Qué debe conseguir?
Audiencia: ¿Quién va a consumirlo y con qué contexto?
Éxito: ¿Cómo sabré que este trabajo es bueno? ¿Qué criterios usaré?
Restricciones: ¿Qué no puede ser? ¿Qué está fuera de alcance?
Formato: ¿Cuál es el entregable exacto? ¿Qué incluye y qué no?
```

---

## MÓDULO 3 — SISTEMA DE PRODUCCIÓN CREATIVA SOSTENIBLE

### La rutina creativa de alto rendimiento

Los creadores más productivos tienen rituales que crean las condiciones para el trabajo creativo, independientemente de la inspiración.

```
RITUAL DE INICIO (10-15 minutos):
1. Leer las notas del día anterior / revisar el cuaderno de capturas
2. Revisar el brief del proyecto actual
3. Definir: "Hoy termino de hacer [X concreto]" — no "trabajar en X"
4. Eliminar distracciones: modo no molestar, notificaciones off
5. 2 minutos de silencio o respiración antes de empezar

Este ritual le dice al cerebro: "Ahora empieza el trabajo creativo."
Con el tiempo, el ritual solo ya activa el modo creativo.
```

### La gestión del tiempo de calidad creativa

El trabajo creativo profundo requiere bloques de tiempo ininterrumpidos. La creatividad no se hace en ratos de 20 minutos entre reuniones.

```
ARQUITECTURA SEMANAL PARA FREELANCERS CREATIVOS:

MAÑANAS (mejor energía creativa para la mayoría):
→ Trabajo creativo profundo (el proyecto principal, el entregable que importa)
→ Sin reuniones, sin email, sin Slack/WhatsApp
→ Bloques de 90-120 minutos con descanso de 15-20 minutos entre bloques

TARDES (energía más baja, pero útil para tareas que requieren menos profundidad):
→ Revisiones y edición
→ Comunicación con clientes
→ Gestión (facturación, propuestas)
→ Reuniones si son necesarias

UN DÍA A LA SEMANA (el "día de recarga"):
→ Sin trabajo de producción
→ Input: leer, explorar, visitar lugares nuevos
→ Captura: anotar, dibujar, escribir sin objetivo
```

---

## MÓDULO 4 — GESTIÓN DE LA ANSIEDAD DEL DEADLINE

El deadline es la forma más efectiva de paralización creativa para un freelancer. La ansiedad por el deadline activa el sistema nervioso simpático (modo amenaza), que no es compatible con el pensamiento creativo.

### Técnica de descomposición radical

```
TOMAR UN DEADLINE LEJANO Y HACERLO CERCANO:

"Tengo que entregar un diseño completo en 10 días" →

Día 1-2: Brief personal + moodboard + referencias
Día 3-4: Primeros bocetos (borrador horrible intencional)
Día 5: Revisión y selección del concepto más prometedor
Día 6-7: Desarrollo del concepto elegido
Día 8: Primera versión terminada
Día 9: Edición y refinamiento
Día 10: Entrega
```

La descomposición convierte el entregable grande (aterrador) en tareas concretas (manejables). La ansiedad disminuye cuando la próxima acción está clara.

### La regla de las 48 horas de colchón

Nunca calcules el tiempo justo para terminar. Siempre incluye 48 horas de colchón al final para revisiones, imprevistos, o simplemente para poder mirar el trabajo con ojos frescos antes de entregar.

---

## ENTREGABLE

Para mi situación actual [describe: tipo de trabajo creativo, los deadlines que tienes ahora, en qué momento del bloqueo estás]:
1. Diagnóstico del tipo de bloqueo que estás experimentando y el antídoto específico para hoy
2. Tu ritual de inicio personalizado (10 minutos) para esta semana
3. Estructura semanal de bloques de producción creativa adaptada a tu carga de trabajo actual
4. Plan de 5 días para el proyecto o deadline más próximo que tienes (con entregables diarios)
5. Tu sistema de llenado del pozo semanal con inputs concretos para tu tipo de creatividad
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Superar el bloqueo creativo y construir un sistema sostenible de producción para freelancers creativos que trabajan solos con deadlines.',
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
