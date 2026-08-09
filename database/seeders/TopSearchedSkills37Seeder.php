<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills37Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Podcast corporativo B2B: cómo construir audiencia y generar leads con audio',
                'description'       => 'Lanza y monetiza un podcast corporativo B2B que posiciona a tu empresa como referente del sector y genera leads cualificados. Con la estrategia de contenido, el proceso de producción mínimo viable, la distribución y cómo convertir oyentes en clientes.',
                'prompt_content'    => <<<'PROMPT'
Eres un Content Strategist especializado en podcasting B2B con experiencia ayudando a empresas a lanzar podcasts que se convierten en uno de los canales de generación de leads con mayor tasa de conversión (los oyentes de podcast tienen 4× más probabilidades de convertirse en clientes que los lectores de blog).

Contexto:
- Sector / nicho: [describe tu industria y audiencia objetivo]
- Recursos disponibles: [sin equipo / 1 persona a tiempo parcial / equipo de contenido]
- Objetivo principal: [posicionamiento de marca / generación de leads / fidelización de clientes]
- El mayor obstáculo percibido: [no sé qué contenido hacer / el audio técnico me frena / no sé si habrá audiencia]

## Podcast Corporativo B2B — [Empresa]

### 🎯 Por qué el podcast funciona mejor que el blog para el B2B en 2025

**El cambio en el consumo de contenido:**
```
El blog requiere atención visual: el usuario tiene que estar sentado, mirando la pantalla.
El podcast permite consumo en paralelo: en el coche, haciendo ejercicio, cocinando.
El ejecutivo B2B tiene menos tiempo de lectura y más tiempo de commuting y gimnasio.

La intimidad del audio:
El oyente de podcast escucha la voz de tu CEO o experto durante 30-60 minutos por semana.
Ese nivel de confianza y familiaridad es muy difícil de construir con otro formato.
```

**Los números del podcast B2B:**
```
Tasa de completado promedio del podcast: 80-85% (el oyente escucha casi todo el episodio)
Tasa de completado promedio del vídeo de YouTube: 20-30%
El oyente de podcast típico escucha 8-10 episodios/semana → alta recurrencia de marca.
```

### 🏗️ La estrategia de contenido del podcast B2B

**Los 3 formatos que funcionan mejor en B2B:**
```
FORMATO 1 — Entrevistas a expertos del sector:
  El más fácil para empezar (el invitado trae el contenido).
  Beneficio adicional: el invitado promueve el episodio en sus redes → audiencia nueva.
  Duración ideal: 30-45 minutos.

FORMATO 2 — Casos de éxito de clientes:
  El más potente para la conversión (prueba social en formato audio).
  El cliente cuenta su problema y cómo lo resolvió con tu empresa.
  Requiere más coordinación pero el ROI en leads es muy alto.
  Duración ideal: 20-30 minutos.

FORMATO 3 — Episodios de conocimiento (solo/co-host):
  Tú o tu equipo compartís un framework, un error frecuente, una tendencia.
  Más escalable (sin coordinar invitados) pero requiere más preparación.
  Duración ideal: 15-25 minutos.
```

**La cadencia y el calendar:**
```
Frecuencia recomendada para empezar: 1 episodio/semana (consistencia > frecuencia).
Grabar en batches: dedica 1 día/mes a grabar 4-5 episodios → reduces el coste cognitivo.
El buffer: tener siempre 3-4 episodios grabados antes de publicar el primero.
(Empezar sin buffer es la causa número 1 de abandono de podcasts.)
```

### 🎙️ El setup técnico mínimo viable (sin excusas)

**Nivel básico (€150-300):**
```
Micrófono: Rode NT-USB Mini (€100) o Blue Yeti (€130) → audio profesional sin conocimientos técnicos.
Auriculares: cualquier auricular con micrófono para las grabaciones con invitados.
Software de grabación: Zencastr (gratuito) o Riverside.fm (€19/mes) → graba cada pista por separado.
Edición: Descript (transcripción automática + edición como si fuera texto) → elimina la curva de aprendizaje de la edición de audio.

Tiempo de producción con este setup: 30-60 min de edición por 1h de contenido.
```

**Distribución:**
```
Hosting: Spotify for Podcasters (gratuito) o Buzzsprout (€12/mes) → distribuye automáticamente a Spotify, Apple Podcasts, iVoox y 20+ plataformas.
```

### 📊 Cómo convertir oyentes en leads: el funnel del podcast B2B
La estrategia de CTAs dentro del episodio (lead magnets, demo, newsletter) sin que suene a anuncio, la página de landing del podcast con formulario de suscripción y la integración con el CRM para trackear el origen podcast en los deals cerrados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Podcast B2B, podcast corporativo, marketing audio, leads podcast, content marketing audio',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Monorepo con Nx o Turborepo: organiza múltiples apps y librerías compartidas en un solo repositorio',
                'description'       => 'Configura y mantiene un monorepo con Nx o Turborepo que aloja múltiples aplicaciones y librerías compartidas con builds incrementales, pipelines de CI optimizados y boundaries claros entre proyectos. Con la estructura de directorios, la caché de builds y los comandos más útiles.',
                'prompt_content'    => <<<'PROMPT'
Eres un Staff Engineer con experiencia configurando y manteniendo monorepos en organizaciones de ingeniería de 5-50 personas donde la migración a monorepo ha reducido la desincronización entre proyectos, eliminado las dependencias desactualizadas entre paquetes y acelerado el onboarding de nuevos developers.

Contexto:
- Tipo de proyectos en el monorepo: [frontend React/Vue + backend Node.js / múltiples microservicios / apps móviles + web / librerías compartidas]
- Herramienta preferida: [Nx / Turborepo / aún no lo tengo claro]
- Tamaño del equipo: [N developers]
- El mayor dolor actual: [dependencias desincronizadas entre repos / builds lentos en CI / código duplicado entre proyectos / difícil hacer cambios cross-repo]

## Monorepo con Nx/Turborepo — [Organización]

### 🗺️ Cuándo un monorepo es la respuesta correcta (y cuándo no)

**Monorepo gana cuando:**
```
→ Tienes código compartido entre múltiples proyectos (componentes UI, utilidades, tipos TypeScript)
→ Los cambios frecuentemente afectan a múltiples repositorios a la vez
→ El equipo tiene que mantener versiones sincronizadas de dependencias entre proyectos
→ El onboarding de nuevos developers es lento porque hay que clonar y configurar múltiples repos
```

**Monorepo pierde cuando:**
```
→ Los proyectos tienen equipos completamente independientes que raramente interactúan
→ Los proyectos tienen ciclos de release totalmente desacoplados y diferentes lenguajes
→ El repositorio tiene tantos proyectos que los builds siempre son lentos aunque uses caché
→ La organización tiene restricciones de acceso muy granulares por proyecto (acceso diferenciado es más difícil en monorepo)
```

### 🏗️ La estructura de directorios del monorepo

**Estructura recomendada (agnóstica de Nx vs. Turborepo):**
```
monorepo/
├── apps/                    ← Aplicaciones deployables
│   ├── web/                 ← App principal web (Next.js, React, etc.)
│   ├── api/                 ← API backend (Node.js, etc.)
│   ├── mobile/              ← App móvil (React Native)
│   └── admin/               ← Panel de administración
│
├── packages/                ← Librerías compartidas (no deployables por sí solas)
│   ├── ui/                  ← Componentes UI compartidos
│   ├── utils/               ← Utilidades y helpers
│   ├── types/               ← Tipos TypeScript compartidos
│   ├── config/              ← Configuración compartida (eslint, tsconfig, jest)
│   └── api-client/          ← Cliente de API tipado
│
├── tools/                   ← Scripts y herramientas del monorepo
├── package.json             ← Root package.json con workspaces
└── turbo.json / nx.json     ← Configuración del orquestador
```

### ⚡ Turborepo: configuración y los comandos más importantes

**turbo.json básico:**
```json
{
  "$schema": "https://turbo.build/schema.json",
  "pipeline": {
    "build": {
      "dependsOn": ["^build"],
      "outputs": ["dist/**", ".next/**"]
    },
    "test": {
      "dependsOn": ["build"],
      "outputs": []
    },
    "lint": {
      "outputs": []
    },
    "dev": {
      "cache": false,
      "persistent": true
    }
  }
}
```

**Los comandos más útiles de Turborepo:**
```bash
# Build de todos los proyectos (con caché incremental)
turbo build

# Build solo de un proyecto y sus dependencias
turbo build --filter=web

# Build de todos los proyectos afectados por cambios vs. main
turbo build --filter=...[origin/main]

# Ver el grafo de dependencias
turbo run build --dry=json | jq '.tasks[].taskId'

# Limpiar la caché local
turbo clean
```

### 🔷 Nx: las ventajas adicionales para equipos más grandes

**Nx vs. Turborepo:**
```
Turborepo: más simple de configurar, mejor para proyectos pequeños-medianos.
  Foco en la orquestación de tareas y el caching.
  Menos opinado sobre la estructura.

Nx: más potente para equipos grandes, viene con generadores y plugins.
  Generators: `nx generate @nx/react:component Button --project=ui`
  Boundary enforcement (módulo boundary rules): impide que apps importen directamente de otras apps.
  Nx Cloud: caché distribuido entre todo el equipo de CI (no solo local).
```

### 📊 CI optimizado para monorepos: cómo evitar que el pipeline tarde 30 minutos
La estrategia de affected commands (solo rebuilds los proyectos con cambios), la configuración de caché remota (Turborepo Remote Cache / Nx Cloud) que comparte la caché entre todos los desarrolladores y el pipeline de GitHub Actions optimizado para monorepos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Monorepo Turborepo Nx, builds incrementales, workspaces, shared packages, CI monorepo',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de email marketing: plantillas que convierten y se ven bien en todos los clientes de correo',
                'description'       => 'Diseña plantillas de email marketing que funcionan bien en Gmail, Outlook, Apple Mail y clientes móviles, con una jerarquía visual que guía al lector hacia el CTA. Con las restricciones técnicas del diseño de email, las plantillas para los tipos de email más frecuentes y las mejores prácticas de responsive.',
                'prompt_content'    => <<<'PROMPT'
Eres un Email Designer especializado en email marketing con experiencia diseñando plantillas que mantienen una tasa de apertura sobre el 25% y una tasa de clic sobre el 3%, con un proceso de diseño que equilibra la expresividad visual con las restricciones técnicas brutales que impone el ecosistema de clientes de correo.

Contexto:
- Herramienta de email marketing: [Mailchimp / HubSpot / Klaviyo / Brevo / otro]
- Tipo de emails que necesitas diseñar: [newsletters / emails transaccionales / secuencias de onboarding / campañas promocionales / todo]
- El mayor problema actual: [los emails se ven mal en Outlook / falta de consistencia de marca / el diseño no guía hacia el CTA]

## Diseño de Email Marketing — [Empresa]

### ⚠️ Las restricciones técnicas del diseño de email que cambian todo

**El email no es el web:**
```
CSS limitado en clientes de email:
→ Outlook (Windows) usa Word como motor de renderizado. Sí, Word. Resultado: muchas propiedades CSS modernas simplemente no funcionan.
→ No hay Flexbox ni CSS Grid en clientes de email.
→ Las fuentes personalizadas solo funcionan en algunos clientes (Gmail sí, Outlook no).
→ Las animaciones CSS solo funcionan en Apple Mail y algunos clientes modernos.

La regla de oro del diseño de email:
Diseña como si el CSS no fuera a funcionar. Asegúrate de que el contenido sea legible aunque fallen todos los estilos.
```

**Las restricciones que sí debes respetar:**
```
Ancho máximo: 600px (el estándar universal que funciona en todos los clientes).
Imágenes: incluye siempre texto alternativo (alt text) porque muchos clientes bloquean imágenes por defecto.
Tipografía: usa solo fuentes del sistema como fallback (Arial, Georgia, Helvetica, Times New Roman).
Tablas: la maquetación de emails sigue usando tablas HTML para garantizar compatibilidad con Outlook.
```

### 🎨 La jerarquía visual del email que convierte

**La estructura visual óptima de un email de marketing:**
```
┌─────────────────────────────────┐
│         HEADER / LOGO           │  ← Identidad de marca, máximo 100px de alto
├─────────────────────────────────┤
│         HERO SECTION            │  ← La imagen + el headline principal
│   [Imagen] + [Headline] + [CTA] │  ← El 50% de los lectores solo ven esto
├─────────────────────────────────┤
│         CUERPO DEL EMAIL        │  ← El contenido de valor
│   Párrafo corto 2-3 líneas      │
│   [Elemento visual opcional]    │
│   Párrafo corto 2-3 líneas      │
├─────────────────────────────────┤
│         CTA PRINCIPAL           │  ← Botón grande, color de contraste alto
│         [Nombre del CTA]        │
├─────────────────────────────────┤
│         FOOTER                  │  ← Unsubscribe, dirección, redes sociales
└─────────────────────────────────┘
```

**Los principios del botón CTA que se hace clic:**
```
→ Color de contraste alto respecto al fondo (no un botón gris sobre fondo gris)
→ Texto de acción específico: "Ver mi propuesta" en lugar de "Haz clic aquí"
→ Tamaño mínimo: 44×44px (accesibilidad táctil en móvil)
→ Padding generoso: mínimo 14px arriba/abajo y 24px izquierda/derecha
→ Solo 1 CTA principal por email (si añades 5 CTAs, nadie hace clic en ninguno)
```

### 📱 Email responsive: cómo el email se ve bien en móvil

**La realidad del email en móvil:**
```
El 60-70% de los emails se abren en dispositivos móviles (según el sector).
Si el email no se ve bien en móvil → se elimina en segundos.

Las reglas de responsive en email:
→ Imágenes: max-width: 100% para que escalen.
→ Texto: mínimo 16px en el body (14px se vuelve ilegible en móvil).
→ Columnas: 2 columnas en desktop → 1 columna apilada en móvil (con media queries).
→ Espaciado extra entre elementos en móvil (los dedos son menos precisos que el ratón).
```

**Media query básica para email responsive:**
```html
<style>
  @media only screen and (max-width: 600px) {
    .container { width: 100% !important; }
    .column { display: block !important; width: 100% !important; }
    .hide-mobile { display: none !important; }
    .text-center-mobile { text-align: center !important; }
    img { max-width: 100% !important; height: auto !important; }
  }
</style>
```

### 🧪 El proceso de QA del email antes de enviar
El checklist de pruebas (Litmus / Email on Acid para previsualizar en 90+ clientes), los errores de última hora más frecuentes (links rotos, imágenes que no cargan, texto de preheader vacío) y cómo configurar un email de prueba que revela los problemas antes del envío.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Diseño email marketing, plantillas email HTML, responsive email, Outlook email design, email CTA',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Prospección en frío por teléfono: el guión y el proceso que consigue reuniones con el decisor',
                'description'       => 'Ejecuta la prospección telefónica en frío (cold calling) con un proceso y un guión que supera los filtros de los gatekeepers, llega al decisor y consigue la reunión. Con la mentalidad correcta, la estructura de la llamada y las respuestas a las objeciones más frecuentes.',
                'prompt_content'    => <<<'PROMPT'
Eres un SDR / BDR Senior con 5 años de experiencia en prospección telefónica B2B que mantiene una tasa de conversión de llamada a reunión del 15-20% y has entrenado a más de 30 SDRs a superar sus cuotas de prospección mediante un proceso repetible, no un talento innato.

Contexto:
- Tipo de cliente que llamas: [C-suite / directores de área / managers / propietarios de PYME]
- Ticket medio de venta: [€]
- Producto / servicio que vendes: [describe brevemente]
- El mayor obstáculo en la llamada: [no paso al gatekeeper / el decisor cuelga en los primeros 30 segundos / no sé manejar las objeciones]

## Prospección Telefónica en Frío — [Empresa]

### 🧠 La mentalidad correcta antes de la primera llamada

**El error de mindset más frecuente:**
```
Los SDRs que tienen malos resultados llaman pensando: "Les voy a vender algo."
Los SDRs que tienen grandes resultados llaman pensando: "Voy a descubrir si tengo un problema que yo puedo resolver."

El cambio que produce este mindset:
→ Menos ansiedad (no estás vendiendo, estás investigando)
→ Más preguntas, menos pitch (el prospecto habla más)
→ Más credibilidad (no suenas a vendedor desesperado)
→ Mejor calificación (sabes si el deal vale la pena antes de invertir horas)
```

**La preparación de 5 minutos antes de cada llamada:**
```
1. Busca en LinkedIn: cargo, cuánto lleva en la empresa, publicaciones recientes.
2. Busca en la web de la empresa: noticias recientes, expansión, contrataciones.
3. Identifica 1 trigger relevante: "Vi que acaban de abrir oficina en Barcelona."
   (Un trigger específico aumenta la tasa de conversión un 30% vs. llamada genérica.)
4. Decide la hipótesis de negocio: "Empresas como la suya suelen tener [problema X] cuando [situación Y]."
```

### 📞 La estructura de la llamada de 5 minutos que consigue la reunión

**Los primeros 30 segundos: el único momento que importa para pasar el filtro:**
```
"Buenos días, soy [nombre] de [empresa]. Llamo porque trabajo con [perfil de empresa similar a la suya]
ayudándoles a [resultado concreto que consiguen tus clientes].
Vi que [trigger específico de la empresa o el cargo] y pensé que podría ser relevante.
¿Tiene 30 segundos?"

Por qué funciona:
→ Dices de dónde eres (transparencia)
→ El resultado, no el producto (le hablas de su mundo, no del tuyo)
→ El trigger demuestra que hiciste los deberes (no eres un llamador en masa)
→ Pides permiso (da la sensación de control al prospecto)
```

**El cuerpo de la llamada (si pasan los 30 segundos):**
```
Objetivo: calificar y conseguir la reunión, NO vender el producto.

Pregunta de calificación:
"¿Actualmente cómo gestionáis [el problema que resuelves]?"
(Escucha activamente. No interrumpas. Esto es información de oro.)

Si hay indicios de dolor → propuesta de reunión:
"Lo que describes es exactamente el tipo de situación donde hemos ayudado a empresas como
[ejemplo relevante]. Valdría la pena que hablemos 20 minutos para ver si hay algo que podamos
hacer por vosotros. ¿Qué te parece el martes o el jueves a las 11?"
(Siempre propón 2 opciones concretas, nunca "¿cuándo puedes?".)
```

### 🛡️ Las respuestas a las 4 objeciones más frecuentes

**"Ahora no es buen momento":**
```
"Entiendo perfectamente. ¿Cuándo sería un buen momento para llamarte?
[Cuando diga una fecha] ¿Te puedo enviar un email de contexto mientras tanto para que
tengas algo de información antes de que hablemos?"
```

**"Mándame un email":**
```
"Por supuesto, te lo envío ahora mismo. Para poder enviarte algo relevante,
¿cuál es el mayor reto que tenéis ahora mismo con [área del problema]?"
(Si responde → hay interés real. Si cuelga sin responder → era rechazo educado.)
```

### 📊 El sistema de prospección que mantiene el ritmo
El proceso de bloques de prospección (2-3 horas seguidas sin interrupciones, 50-80 llamadas/bloque), el CRM workflow que evita que ningún lead se pierda y las métricas de la prospección telefónica que predicen si vas a cumplir cuota.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Cold calling, prospección telefónica, SDR BDR, guión ventas frías, objeciones telefónicas',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Pricing del producto: cómo fijar el precio que maximiza el revenue sin destruir la conversión',
                'description'       => 'Define la estrategia de pricing de tu producto digital o SaaS que equilibra el revenue máximo con la máxima tasa de conversión. Con los modelos de pricing, el proceso de pricing research, las métricas de validación y cuándo y cómo subir precios sin perder clientes.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager especializado en monetización y pricing con experiencia en proyectos donde los cambios de pricing han incrementado el MRR un 30-60% sin reducir la tasa de conversión neta, mediante un proceso de pricing research y testing que va más allá de "comparar con la competencia".

Contexto:
- Tipo de producto: [SaaS B2B / herramienta freemium / marketplace / app de consumo / otro]
- Modelo de pricing actual: [freemium / suscripción mensual / pago único / por uso / sin pricing definido]
- El mayor problema: [conversión baja / no sé si estoy dejando dinero sobre la mesa / quiero subir precios pero tengo miedo / tengo clientes pero no monetizo bien]

## Pricing del Producto — [Empresa]

### 🧠 Los 3 errores de pricing más frecuentes en productos digitales

**Error 1 — Pricing basado solo en costes:**
```
"El coste del servidor es €X, así que el precio tiene que ser al menos €X × 3."
El problema: los usuarios no compran en función de tus costes.
Compran en función del valor que obtienen.
Un producto que ahorra 5 horas/semana a un ejecutivo tiene un valor muy diferente al que
ahorra 5 horas/semana a un estudiante, aunque el coste sea el mismo.
```

**Error 2 — Pricing basado solo en la competencia:**
```
"El competidor cobra €50/mes, así que nosotros cobraremos €45."
El problema: estás anclando tu percepción de valor a la del competidor.
Si tu producto es diferente (y debería serlo), comparar precios directamente es un error.
El precio es una señal de posicionamiento, no solo de coste.
```

**Error 3 — No testar el pricing nunca:**
```
El precio inicial se convierte en "el precio para siempre" sin nunca cuestionarlo.
El mercado cambia, el valor percibido cambia, la base de usuarios cambia.
El pricing es una variable de producto que hay que revisar al menos una vez al año.
```

### 🔬 El pricing research: cómo descubrir el precio correcto

**Método 1 — Van Westendorp (Price Sensitivity Meter):**
```
Pregunta a una muestra de tu ICP estas 4 preguntas:
1. "¿A qué precio considerarías que [producto] es tan barato que dudarías de su calidad?" → Precio demasiado barato
2. "¿A qué precio considerarías que [producto] empieza a parecer barato?" → Precio de oferta
3. "¿A qué precio considerarías que [producto] empieza a parecer caro?" → Precio de mercado
4. "¿A qué precio considerarías que [producto] es tan caro que no lo comprarías?" → Precio prohibitivo

El rango óptimo de pricing está entre las respuestas 2 y 3.
Muestra mínima: 30-50 respuestas de tu ICP real.
```

**Método 2 — Willingness to Pay (JTBD + entrevistas):**
```
En las entrevistas de usuario, pregunta:
"¿Cuánto pagas actualmente por resolver este problema? (suma de todas las herramientas, tiempo, etc.)"
"Si te cobráramos €X/mes, ¿lo comprarías? ¿Por qué?"

El precio de referencia del usuario es lo que paga por la solución alternativa, no por un producto similar.
```

### 💰 Los modelos de pricing para SaaS: cuál elegir

**Freemium:**
```
Cuándo funciona: cuando el producto tiene valor antes de pagar (el usuario prueba y convierte).
Cuándo falla: cuando el free tier resuelve el 100% del problema → nadie paga.
Ratio saludable: 2-5% de usuarios free se convierten a paid.
```

**Pricing por nivel de uso (per-seat, per-feature, usage-based):**
```
Per-seat (por usuario): fácil de entender, fácil de vender, crece con el equipo del cliente.
Usage-based (por uso): alinea el precio con el valor (pagas más cuando más usas).
  Ideal para: APIs, plataformas de datos, herramientas de comunicación.
  Riesgo: el cliente no puede predecir su factura → puede generar ansiedad.
```

### 📊 Cómo subir precios sin perder clientes
El proceso de price increase para clientes existentes (grandfathering, comunicación, timing) y cómo un precio más alto puede aumentar la conversión al señalar mayor calidad percibida.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Pricing producto, SaaS pricing strategy, Van Westendorp, freemium pricing, subir precios SaaS',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de la diversidad e inclusión (DEI): pasar del discurso a los cambios concretos que funcionan',
                'description'       => 'Implementa una estrategia de diversidad, equidad e inclusión (DEI) que produce cambios medibles en la cultura y la composición del equipo, en lugar de iniciativas simbólicas que no mueven la aguja. Con el diagnóstico, las acciones con mayor impacto demostrado y cómo medir el progreso.',
                'prompt_content'    => <<<'PROMPT'
Eres una DEI Specialist con experiencia implementando programas de diversidad e inclusión en empresas de tecnología de 50-500 personas donde la diferencia entre las iniciativas DEI que funcionan y las que no radica en el rigor del diagnóstico, el compromiso genuino del liderazgo y la medición honesta del progreso.

Contexto:
- Tamaño de la empresa: [N personas]
- Estado actual del DEI: [sin iniciativa / iniciativas puntuales (charlas, día del orgullo) / queremos ir más allá de lo simbólico]
- El mayor reto: [reclutamiento diverso / retención de talento diverso / cultura inclusiva / sesgo en promociones]

## DEI — De la Intención al Impacto — [Empresa]

### 🔭 El diagnóstico honesto: dónde estás antes de actuar

**Los datos que necesitas antes de diseñar ninguna iniciativa:**
```
1. COMPOSICIÓN ACTUAL DEL EQUIPO:
   → Distribución por género en cada nivel (contributor individual, manager, director, C-suite)
   → No es suficiente con "el 40% de la empresa son mujeres" → si el 0% son directoras, hay un problema.

2. EL PIPELINE DE CONTRATACIÓN:
   → ¿Qué porcentaje de los candidatos son mujeres o pertenecen a grupos subrepresentados?
   → ¿En qué punto del proceso se pierden? (oferta inicial → primer entrevista → oferta final → aceptación)
   → Si se pierden en la oferta inicial → el pipeline es el problema.
   → Si se pierden después de la primera entrevista → el proceso de selección tiene sesgo.

3. LAS ENCUESTAS DE CLIMA:
   → Desglosar los resultados por grupo demográfico.
   → Un 7.5/10 de engagement general puede ocultar que las empleadas de 30-35 años tienen 5.5/10.
   → Si no desglosas, nunca verás los problemas reales.

4. LAS TASAS DE ROTACIÓN Y PROMOCIÓN:
   → ¿Se van más las mujeres o los empleados de grupos subrepresentados?
   → ¿Se promocionan a la misma tasa?
```

### 🎯 Las iniciativas DEI con mayor impacto demostrado

**Iniciativa 1 — Eliminar el sesgo en el proceso de selección:**
```
El mayor lever de cambio con el impacto más rápido.

Acciones concretas con evidencia de impacto:
→ Job descriptions auditadas: elimina las palabras "masculinas" (competitivo, dominante,
  ninja, rock star) que desincentivan las candidaturas femeninas.
  Herramienta: Gender Decoder (free, online).
→ Entrevistas estructuradas: todas las personas del panel hacen las mismas preguntas en el mismo orden.
  Las entrevistas no estructuradas tienen 4× más sesgo que las estructuradas.
→ Evaluar antes de ver el CV completo: si es posible, evalúa la prueba técnica antes de ver el nombre.
→ Panel de entrevista diverso: si el panel de entrevista es homogéneo, el candidato diverso
  probablemente se sienta menos incluido y menos probable de aceptar la oferta.
```

**Iniciativa 2 — Cultura inclusiva en el día a día:**
```
Acciones con alta relación impacto/coste:
→ Reuniones inclusivas: el facilitador se asegura activamente de que todas las voces participan.
  "Antes de cerrar el punto, ¿alguien que no ha podido hablar quiere añadir algo?"
→ Documentación de las decisiones: reduce la dependencia de las redes informales
  (que tienden a excluir a las personas fuera del grupo dominante).
→ Reconocimiento público equitativo: audita si el reconocimiento público recae principalmente
  en los mismos perfiles. Si es así → sesgo de visibilidad.
```

**Iniciativa 3 — Programas de desarrollo y mentoría:**
```
Problema: los grupos subrepresentados tienen menos acceso a los "sponsors" informales
(las personas con poder que te promocionan cuando no estás en la sala).
Solución: programa formal de mentoring/sponsorship que formaliza ese acceso.

Diferencia entre mentor y sponsor:
Mentor: te da consejos.
Sponsor: habla de ti ante el C-suite cuando hay una oportunidad.
```

### 📊 Cómo medir el progreso del DEI con honestidad
El cuadro de mando DEI (ratios de representación por nivel, velocidad de progresión, pay equity análisis), la frecuencia de revisión y cómo comunicar el progreso de forma honesta cuando los resultados no son los esperados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'DEI diversidad inclusión, sesgo selección, cultura inclusiva, representación equipo, diversidad empresa',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Due diligence financiera en adquisiciones: cómo evaluar si los números de la empresa objetivo son reales',
                'description'       => 'Realiza la due diligence financiera en un proceso de adquisición o inversión para validar que los estados financieros de la empresa objetivo son fiables, detectar los riesgos ocultos y negociar el precio desde una posición informada. Con el checklist, las red flags más frecuentes y las preguntas que revelan los problemas.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director de M&A con experiencia liderando procesos de due diligence financiera en adquisiciones de empresas de €1M-€50M donde el trabajo de investigación previo ha identificado pasivos ocultos, ingresos artificialmente inflados y compromisos contractuales no documentados que han renegociado el precio o bloqueado la operación antes del daño.

Contexto:
- Tipo de operación: [adquisición completa / participación mayoritaria / participación minoritaria / fusión]
- Tamaño de la empresa objetivo: [€ en facturación / N empleados]
- Tu posición: [comprador / inversor / asesor financiero del comprador]
- El mayor reto: [no sé por dónde empezar / tengo los números pero no sé qué buscar / quiero entender las red flags más frecuentes]

## Due Diligence Financiera — [Operación]

### 🔭 Qué es y qué no es la due diligence financiera

**Qué es:**
```
La verificación independiente de que los estados financieros de la empresa objetivo
reflejan fielmente la realidad económica del negocio.
No es auditar por cumplimiento normativo — es buscar los riesgos que afectan al precio.
```

**Qué no es:**
```
La due diligence NO te dice si la empresa es un buen negocio.
Eso lo determina el análisis estratégico y de mercado.
La due diligence te dice: "Lo que te han enseñado, ¿es real?"
```

### 📋 El checklist de información a solicitar en la due diligence

**Documentación financiera:**
```
→ Estados financieros auditados de los últimos 3 años (P&L, balance, flujo de caja)
→ Estados financieros de gestión del año en curso (actualizados al último mes)
→ Libro mayor contable o acceso al ERP para verificar partidas específicas
→ Declaraciones fiscales de los últimos 3 años (Impuesto de Sociedades, IVA, nóminas)
→ Documentación de deuda financiera (contratos de préstamo, leasing, pólizas de crédito)
→ Relación de activos fijos e intangibles con valoración
→ Relación de clientes (top 10 con % de facturación y años de relación)
→ Relación de proveedores (top 10 con % de gasto y términos de pago)
→ Backlog/pipeline de ventas (para empresas con ingresos recurrentes o por proyecto)
```

### 🚨 Las red flags más frecuentes en la due diligence

**Red flag 1 — Los ingresos están concentrados en pocos clientes:**
```
Si el top 3 de clientes representa >50% de los ingresos → riesgo de concentración.
Pregunta clave: "¿Tienes contratos a largo plazo con estos clientes o son renovaciones anuales?"
Si no hay contratos → el valor del negocio puede evaporarse si uno se va.
```

**Red flag 2 — Ingresos que no se repiten:**
```
Para una empresa que se vende como "recurrente", verifica que el MRR/ARR es real.
Algunas empresas incluyen en MRR pagos puntuales o ingresos de proyectos.
Solicita el detalle de facturación mes a mes y cliente a cliente.
```

**Red flag 3 — Deterioro del working capital:**
```
Si el plazo de cobro de clientes está aumentando año a año → problemas de calidad del crédito o morosidad oculta.
Si el plazo de pago a proveedores está aumentando → posible tensión de caja no reflejada en el P&L.
Fórmula: DSO = (Saldo de clientes / Facturación) × 365
```

**Red flag 4 — Gastos "normalizados" que parecen demasiado agresivos:**
```
El vendedor presentará el EBITDA "ajustado" eliminando gastos "extraordinarios".
Verifica cada ajuste: algunos son legítimos (gasto de reestructuración puntual), otros no
(el salario del CEO familiar que se cobra de más y que tendrás que sustituir con alguien de mercado).
```

**Red flag 5 — Litigios y contingencias no registradas:**
```
Los litigios laborales, fiscales o mercantiles pendientes pueden convertirse en pasivos reales.
Solicita carta de abogados con la relación de procedimientos abiertos y su cuantificación.
```

### 💰 La negociación del precio basada en la due diligence
Cómo los hallazgos de la due diligence se traducen en ajustes al precio de adquisición (earn-outs, retenciones del precio, garantías e indemnizaciones) y el modelo de ajuste del EBITDA normalizado que forma la base de la valoración final.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Due diligence financiera, M&A análisis, adquisición empresa, red flags financieros, EBITDA ajustado',
                'vote_score'        => 25,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos de distribución y agencia comercial en España: diferencias y cláusulas clave',
                'description'       => 'Entiende las diferencias legales entre el contrato de distribución y el contrato de agencia comercial en España, elige el modelo correcto para tu red de ventas y conoce las cláusulas que protegen a tu empresa en caso de terminación de la relación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado mercantilista con experiencia redactando y litigando contratos de distribución y agencia comercial en España, donde la elección del modelo contractual correcto y la redacción de las cláusulas clave determinan si la empresa puede salir de la relación comercial sin pagar indemnizaciones millonarias al distribuidor o agente.

Contexto:
- Tu posición: [empresa principal que quiere distribuir / agente o distribuidor que busca protección]
- El canal que quieres establecer: [red de distribuidores / agentes comerciales / ambos / aún no lo tengo claro]
- Geografía: [España / España + Europa / global]
- El mayor reto: [no sé si usar agencia o distribución / tengo un conflicto con un distribuidor / quiero saber qué protecciones tengo]

## Contratos de Distribución y Agencia Comercial — España

### 🗺️ La diferencia fundamental entre distribución y agencia

**El distribuidor:**
```
Compra el producto al fabricante/proveedor y lo revende por su cuenta y riesgo.
→ La empresa principal no tiene relación directa con el cliente final.
→ El distribuidor fija el precio de reventa (salvo en distribución selectiva con precios sugeridos).
→ El distribuidor asume el riesgo de impago del cliente.
→ El distribuidor invierte en stock, almacén, logística.

Ejemplo: el importador que compra vino español para venderlo en Alemania.
La bodega no controla a quién vende el importador ni a qué precio.
```

**El agente comercial:**
```
Actúa en nombre de la empresa principal para cerrar contratos, pero NO compra el producto.
→ El contrato de venta es entre la empresa principal y el cliente final.
→ La empresa principal cobra directamente al cliente.
→ El agente cobra una comisión por cada venta que intermedia.
→ El agente NO asume el riesgo de impago.

Regulación aplicable: Ley 12/1992 sobre el contrato de agencia (muy protectora del agente).
```

**La elección estratégica:**
```
USA DISTRIBUCIÓN cuando:
→ Quieres rapidez de penetración (el distribuidor tiene relaciones y stock locales)
→ No quieres la complejidad de gestionar clientes finales en un mercado nuevo
→ El producto requiere almacenamiento y logística local

USA AGENCIA cuando:
→ Quieres control directo sobre la relación con el cliente final
→ Necesitas precio uniforme de mercado (el agente no puede hacer descuentos sin permiso)
→ Prefieres pagar comisión sobre venta real (sin riesgo de crédito para ti)
```

### ⚖️ La regulación de la agencia comercial: la Ley 12/1992

**La protección del agente (que la empresa principal debe conocer):**
```
INDEMNIZACIÓN POR CLIENTELA (art. 28):
Al terminar el contrato de agencia — aunque sea por decisión del agente — la empresa principal
puede deber una indemnización por clientela al agente si:
→ El agente ha aportado nuevos clientes a la empresa, O
→ Ha incrementado sensiblemente las operaciones con la clientela preexistente, Y
→ La empresa sigue obteniendo ventajas de la actividad del agente tras la extinción del contrato.

Cálculo: máximo equivalente a 1 año de comisiones promedio (calculada sobre los últimos 5 años).

Cuándo NO procede la indemnización:
→ El contrato se extingue por incumplimiento grave del agente.
→ El agente denuncia el contrato sin causa imputable a la empresa.
→ El agente cede el contrato a un tercero sin consentimiento.

AVISO PRÁCTICO PARA LA EMPRESA PRINCIPAL:
Aunque termines el contrato de agencia "legalmente", si el agente puede probar que ha aportado
clientela que sigue generando negocio → deberás pagar la indemnización.
Diseña el contrato para que la base de clientes sea de la empresa, no del agente.
```

### 📝 Las cláusulas que no pueden faltar en el contrato de distribución
La cláusula de exclusividad (territorial y de cliente), la cláusula de mínimos (volume mínimo o se pierde la exclusividad), la cláusula de no competencia post-contractual y las condiciones de terminación que permiten salir de la relación sin litigios costosos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Contrato distribución España, agencia comercial Ley 12/1992, distribución vs agencia, indemnización agente comercial',
                'vote_score'        => 23,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Gestión de picos de demanda en soporte: cómo preparar al equipo para las temporadas de alto volumen',
                'description'       => 'Prepara a tu equipo de soporte para los picos de demanda estacionales o por lanzamientos de producto para mantener los SLAs sin contratar de emergencia ni quemar al equipo. Con el plan de capacidad, la triaging de tickets y las estrategias de deflexión que reducen el volumen entrante.',
                'prompt_content'    => <<<'PROMPT'
Eres un Support Operations Manager con experiencia gestionando picos de volumen en ecommerce (Black Friday, Navidad), SaaS (lanzamientos de features, incidencias masivas) y empresas de consumo (temporadas altas), donde la preparación anticipada ha permitido mantener los SLAs con el mismo equipo y sin sacrificar la calidad.

Contexto:
- Tipo de empresa: [ecommerce / SaaS / app de consumo / otro]
- El pico de demanda que quieres preparar: [Black Friday / lanzamiento de producto / temporada alta del sector / incidencia masiva / otro]
- Tamaño del equipo de soporte: [N agentes]
- El mayor reto en el pico anterior: [desbordamiento de cola / SLAs incumplidos / agentes quemados / contratación de emergencia con mala calidad]

## Gestión de Picos de Demanda — Soporte — [Empresa]

### 📊 El plan de capacidad: cuántos tickets esperar y cuántas personas necesitas

**Paso 1 — Predice el volumen entrante:**
```
Usa el histórico como base:
→ ¿Cuántos tickets tuviste en el mismo período el año pasado?
→ ¿Cómo ha crecido el negocio desde entonces? (si el negocio creció un 40%, el soporte también)
→ ¿Hay cambios este año que aumenten el volumen? (nuevo producto, nueva región, nueva feature compleja)

Si no tienes histórico:
→ Habla con el equipo de negocio: ¿cuántas unidades/cuentas esperan en el pico?
→ Ratio de tickets por cliente/pedido: si tienes 1.000 pedidos al día y el 5% generan un ticket
  → esperas 50 tickets/día. En pico, si tienes 5.000 pedidos → 250 tickets/día.
```

**Paso 2 — Calcula la capacidad del equipo:**
```
Capacidad por agente:
→ Tickets que puede gestionar un agente en un día (considera el mix de complejidad)
→ Tiempo de respuesta objetivo (a más tiempo de respuesta, más tickets puede gestionar el mismo agente)
→ Descuenta el tiempo de reuniones, formación y breaks (agente 8h ≠ 8h productivas)

Ejemplo:
Equipo actual: 5 agentes
Capacidad normal: 50 tickets/agente/día → 250 tickets/día
Pico esperado: 600 tickets/día
Gap: 350 tickets/día → necesitas capacidad adicional para 7 agentes equivalentes
```

**Paso 3 — Estrategias para cubrir el gap:**
```
OPCIÓN A — Horas extra del equipo actual:
  Máximo 15-20% de horas adicionales sin quemar al equipo.
  Para gaps mayores → necesitas más opciones.

OPCIÓN B — Contratación temporal:
  El lead time de contratación y formación es de 3-4 semanas mínimo.
  El agente temporal tarda 1-2 semanas en ser productivo.
  Si esperas al pico para contratar → llegará tarde o sin suficiente calidad.

OPCIÓN C — Redistribuir capacidad interna:
  En ecommerce, el Black Friday es predecible → forma a personas de otros equipos
  (ventas, customer success, marketing) para manejar las consultas más simples.

OPCIÓN D — Reducir el volumen entrante (deflexión):
  Ver sección siguiente.
```

### 🛡️ Estrategias de deflexión: reducir el volumen antes de que llegue

**Deflexión proactiva:**
```
→ FAQ preventiva: publica un artículo/banner que responda las preguntas más frecuentes
  ANTES de que el pico empiece. (Black Friday: publica "Preguntas frecuentes sobre el Black Friday"
  el 20 de noviembre.)
→ Email proactivo al cliente: si hay un cambio o una situación que generará dudas,
  explícalo en un email antes de que el cliente contacte.
  Un email proactivo a 10.000 clientes puede evitar 500 tickets.
→ Banner en la web o en el producto: sobre el estado de los envíos, los plazos de respuesta,
  o la situación de una incidencia conocida.
```

**Deflexión reactiva:**
```
→ Chatbot / IA para las preguntas más frecuentes:
  Si el 30% de los tickets son "¿dónde está mi pedido?" → automatiza esa respuesta.
→ Self-service mejorado: actualiza el Help Center con los artículos más relevantes del pico.
→ Respuesta automática con FAQ: el primer touchpoint puede ser una respuesta automática
  con los 3-5 artículos que resuelven el 60% de los casos.
```

### 📋 El triaging de tickets en pico: cómo priorizar cuando hay más de lo que puedes manejar
El sistema de priorización de tickets por urgencia e impacto (SLA críticos primero, tickets de clientes de alto valor, incidencias que bloquean el negocio) que evita que los problemas más graves se pierdan en la cola.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Picos soporte, Black Friday soporte, capacity planning soporte, deflexión tickets, gestión volumen soporte',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Propuesta de valor del freelance: cómo diferenciarte cuando el cliente compara por precio',
                'description'       => 'Construye y comunica la propuesta de valor de tu servicio freelance que hace que la comparación por precio sea irrelevante porque el cliente entiende por qué eres la opción correcta para su situación específica. Con el posicionamiento, el mensaje de diferenciación y cómo presentarlo en tu web y en tus conversaciones de venta.',
                'prompt_content'    => <<<'PROMPT'
Eres un Freelance Positioning Coach con experiencia ayudando a profesionales independientes a dejar de competir por precio y empezar a posicionarse como la opción premium en su nicho, pasando de cotizar €30/hora a €90+/hora para el mismo tipo de trabajo mediante cambios en el posicionamiento y la comunicación de valor.

Perfil:
- Tu especialidad: [describe tu servicio]
- Tu cliente ideal: [sector, tamaño de empresa, cargo del decisor]
- El problema actual: [me comparan con freelancers más baratos / pierdo proyectos por precio / no sé cómo diferenciarme más allá de la calidad]

## Propuesta de Valor del Freelance — [Especialidad]

### 🧠 Por qué "soy muy bueno en lo que hago" no es una propuesta de valor

**El problema:**
```
Todos los freelancers dicen lo mismo:
→ "Soy diseñador apasionado con 8 años de experiencia."
→ "Desarrollo software de alta calidad con atención al detalle."
→ "Entrego los proyectos a tiempo y en presupuesto."

Desde la perspectiva del cliente, estas afirmaciones son idénticas para todos los candidatos.
Si todos dicen lo mismo, el único criterio de decisión es el precio.
```

**La propuesta de valor real:**
```
No describe lo que haces → describe el resultado específico que consigue quien te contrata
en su situación específica.

La fórmula:
"Ayudo a [cliente específico] que tiene [problema específico] a conseguir [resultado específico]
de forma que [diferenciador que hace tu solución única]."

Ejemplo genérico (no diferencia):
"Soy diseñador UX freelance que crea interfaces atractivas y funcionales."

Ejemplo con propuesta de valor real:
"Ayudo a startups SaaS en etapa de crecimiento (Series A y B) a rediseñar sus flujos de onboarding
para reducir el churn de los primeros 30 días, porque el 80% del churn temprano es un problema
de UX, no de producto."
```

### 🎯 El posicionamiento de nicho: la estrategia que permite cobrar más

**Por qué el nicho te hace más valioso, no menos:**
```
El generalista: "Hago diseño web para cualquier empresa."
Precio que puede cobrar: el de mercado.

El especialista: "Diseño específicamente para clínicas dentales. Sé exactamente qué convierte
en ese sector, tengo 15 casos de éxito con clínicas, y conozco las restricciones legales
del sector sanitario que afectan al diseño web."
Precio que puede cobrar: 3-5× el del generalista.

Por qué: el cliente especializado paga por el riesgo reducido.
Contratar a alguien que ya ha resuelto exactamente su problema es menos arriesgado que contratar
a alguien que dice que puede resolverlo.
```

**Cómo elegir tu nicho de posicionamiento:**
```
La intersección de 3 factores:
1. EN QUÉ ERES REALMENTE BUENO (no solo lo que sabes hacer, sino donde has tenido resultados excepcionales)
2. QUÉ TIPO DE CLIENTES TE PAGAN MÁS Y TE DAN MÁS SATISFACCIÓN (mira tus últimos 10 clientes)
3. DÓNDE HAY DEMANDA SUFICIENTE Y COMPETENCIA MANEJABLE

El nicho correcto es el que tiene estos tres factores, no solo el que "suena bien".
```

### 💬 El mensaje de diferenciación para tu web y tus conversaciones de venta

**La estructura de la web del freelance posicionado:**
```
HERO (lo primero que ve el visitante):
No: "Soy [nombre], diseñador freelance" → genérico, aburrido.
Sí: "[El resultado que consigues] para [el cliente específico al que sirves]"
    "[Tu diferenciador en una frase]"
    "[CTA de contacto / portfolio específico de nicho]"

LA SECCIÓN "POR QUÉ YO":
No: lista de habilidades y años de experiencia.
Sí: el proceso único que usas + el tipo de problema que resuelves mejor + los resultados específicos.

LOS CASOS DE ÉXITO:
El formato que convierte: "Cliente X tenía [problema concreto] → trabajamos en [proceso] → consiguió [resultado con métricas]"
```

### 📊 Cómo responder a "eres más caro que otro freelance"
La conversación de ventas que redirige la comparación de precio a la comparación de valor, el ROI que el cliente obtiene al elegirte y cómo descalificar a los clientes que solo compran por precio sin sentirte mal por ello.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Propuesta de valor freelance, diferenciación freelance, posicionamiento nicho, cobrar más freelance, pitch freelance',
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
