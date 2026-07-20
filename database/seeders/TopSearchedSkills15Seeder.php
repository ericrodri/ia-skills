<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills15Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Estrategia de contenido en LinkedIn B2B: de 0 a 10.000 seguidores con contenido que genera reuniones',
                'description'       => 'Construye la presencia de LinkedIn de tu empresa o marca personal que genera pipeline real. Con el sistema de contenido semanal, los formatos que funcionan para B2B, el proceso para convertir seguidores en leads y las métricas que importan.',
                'prompt_content'    => <<<'PROMPT'
Eres un LinkedIn B2B Strategist con experiencia construyendo audiencias de 10k-100k seguidores para fundadores, directivos y empresas B2B que han generado millones en pipeline desde LinkedIn.

Mi contexto:
- Perfil a crecer: [personal de fundador/directivo / página de empresa / ambos]
- Industria/nicho: [describe]
- Objetivo principal: [brand awareness / lead generation / talent attraction / thought leadership]
- Contenido actual: [nada / posts ocasionales / activo pero sin estrategia]
- Recursos disponibles: [solo yo / equipo de marketing / agencia]

## Estrategia de LinkedIn B2B — [Tu empresa/persona]

### 🧠 La diferencia entre LinkedIn personal y de empresa

**Perfil personal:** 5-10x más alcance orgánico. Las personas conectan con personas, no con logos.
**Página de empresa:** necesaria para credibilidad, anuncios y LinkedIn Sales Navigator.

**La estrategia óptima:** el fundador o directivo construye la audiencia personal. La empresa amplifica con reposts y contenido de producto.

### 📝 Los 6 formatos de contenido B2B que funcionan en LinkedIn

**1. Post de texto largo (1.300 caracteres):**
La primera línea lo es todo — debe crear curiosidad o tensión sin completar la frase.
```
❌ "Hoy quiero hablaros de cómo generamos 50k€ con LinkedIn."
✅ "Hace 6 meses teníamos 200 seguidores y nadie nos conocía.
    Hoy cerramos el 40% de nuestros clientes desde LinkedIn.
    Lo que cambió:"
```

**2. Carrusel (PDF subido como documento):**
Ideal para listas, frameworks, procesos paso a paso. La primera slide es el hook. La última es el CTA.
Longitud óptima: 8-12 slides.

**3. Poll (encuesta):**
Alcance altísimo porque LinkedIn prioriza la interactividad.
Usa para validar hipótesis, generar debate o conocer a tu audiencia.
"¿Cuál es tu mayor reto en [área]?" → los comentarios son oro para crear más contenido.

**4. Video corto (60-90 segundos):**
Menor producción, mayor confianza. La cámara mirando a cámara bate a cualquier producción.
Subtítulos obligatorios: el 80% ve sin sonido.

**5. Artículo de LinkedIn:**
Para contenido evergreen y largo. Posiciona en Google. Menor alcance inmediato, más permanencia.

**6. Newsletter de LinkedIn:**
Los suscriptores reciben notificación cuando publicas. Canal propio dentro de LinkedIn.

### 📅 Cadencia de publicación semanal (mínimo viable)

**Lunes:** Post educativo — enseña algo útil y accionable
**Miércoles:** Post de perspectiva — tu opinión sobre una tendencia del sector
**Viernes:** Post de historia — caso real, lección aprendida, detrás de escenas

**La regla del 80/20:**
80% valor puro (sin mencionar el producto)
20% contenido relacionado con el negocio (casos de éxito, novedades, ofertas)

### 💬 Cómo convertir el algoritmo en tu aliado

El algoritmo de LinkedIn amplifica el contenido que recibe interacciones en la primera hora.

**Tu protocolo de las primeras 48h:**
1. Publica a las 8h-9h o 12h-13h (cuando tu audiencia está en LinkedIn)
2. Los primeros 10 comentarios los respondes en <30 minutos (cada respuesta = señal de engagement)
3. Etiqueta a 1-2 personas relevantes solo si añade contexto (no para que compartan)
4. No edites el post las primeras 2h (LinkedIn penaliza las ediciones tempranas)

### 📊 Las métricas que indican que va bien

- Impresiones: visibilidad bruta
- Tasa de engagement: objetivo >2% (likes + comentarios / impresiones)
- Nuevos seguidores por post: indica si el contenido atrae a nuevas personas
- **DMs entrantes con interés comercial:** la métrica que realmente importa
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'LinkedIn B2B, contenido, personal branding, social selling',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Gestión de secretos y variables de entorno: arquitectura segura para aplicaciones en producción',
                'description'       => 'Implementa la arquitectura correcta para gestionar API keys, contraseñas y secretos en tu aplicación: desde el .env local hasta el secrets manager en producción, sin hardcodear nunca credenciales en el código.',
                'prompt_content'    => <<<'PROMPT'
Eres un Security Engineer con experiencia auditando y corrigiendo vulnerabilidades de exposición de secretos en aplicaciones web y APIs en producción.

Mi stack:
- Backend: [Node.js / Python / PHP Laravel / Go / Ruby / otro]
- Entorno de producción: [AWS / GCP / Azure / Hetzner VPS / Kubernetes / Railway / Render / otro]
- CI/CD: [GitHub Actions / GitLab CI / CircleCI / Jenkins / otro]
- Problema actual: [credenciales en el .env que se sube al repo / sin sistema de rotación / no sé si hay secrets expuestos / migrando a un sistema más robusto]

## Arquitectura de Gestión de Secretos — [Aplicación]

### 🚨 Los errores más comunes (y más peligrosos)

**Error #1 — El .env commiteado al repo:**
```bash
# Comprueba si hay secretos en tu historial de git:
git log --all --full-history -- .env
git log --all -p | grep -i "api_key\|password\|secret\|token"
```
Si hay resultados, el secreto está comprometido aunque hayas borrado el archivo después.

**Error #2 — Credenciales hardcodeadas:**
```javascript
// ❌ NUNCA:
const apiKey = "sk-1234567890abcdef"

// ✅ SIEMPRE:
const apiKey = process.env.STRIPE_API_KEY
```

**Error #3 — El mismo secreto en todos los entornos:**
Development, staging y production deben tener credenciales distintas. Si se compromete dev, no se compromete prod.

### 🏗️ La arquitectura por entorno

**Local (desarrollo):**
- `.env` file con valores de desarrollo (nunca producción)
- `.env` en `.gitignore` desde el primer commit
- `.env.example` commiteado con las variables necesarias pero sin valores

```bash
# .env.example (sí va al repo)
DATABASE_URL=
STRIPE_SECRET_KEY=
SENDGRID_API_KEY=

# .env (NO va al repo)
DATABASE_URL=postgres://localhost:5432/myapp_dev
STRIPE_SECRET_KEY=sk_test_xxx
SENDGRID_API_KEY=SG.xxx
```

**CI/CD (GitHub Actions / GitLab):**
Usar los secrets nativos de la plataforma — nunca en el YAML del workflow:
```yaml
# GitHub Actions:
env:
  STRIPE_SECRET_KEY: ${{ secrets.STRIPE_SECRET_KEY }}
  DATABASE_URL: ${{ secrets.DATABASE_URL }}
```

**Producción — el tier correcto según tu escala:**

| Escala | Solución | Coste |
|--------|---------|-------|
| VPS simple (1-5 servidores) | Variables de entorno del servidor (.env en /etc/app/) | Gratis |
| Docker/Kubernetes | Kubernetes Secrets + External Secrets Operator | Gratis |
| AWS | AWS Secrets Manager o Parameter Store | ~$0.40/secret/mes |
| GCP | Secret Manager | ~$0.06/10k accesos |
| Multi-cloud / alta escala | HashiCorp Vault (self-hosted o HCP) | Variable |

### 🔑 Implementación con AWS Secrets Manager (ejemplo práctico)

```javascript
// Node.js — leer el secreto al arrancar la app
import { SecretsManagerClient, GetSecretValueCommand } from "@aws-sdk/client-secrets-manager"

const client = new SecretsManagerClient({ region: "eu-west-1" })

async function getSecret(secretName) {
  const response = await client.send(
    new GetSecretValueCommand({ SecretId: secretName })
  )
  return JSON.parse(response.SecretString)
}

// Al inicializar la app:
const dbSecrets = await getSecret("myapp/production/database")
// { host: "...", password: "...", username: "..." }
```

### 🔄 Rotación de secretos (lo que siempre se deja para mañana)

**Política mínima:**
- API keys de servicios externos: rotación anual o al cambiar de proveedor
- Contraseñas de base de datos: rotación semestral
- JWT signing keys: rotación anual con período de solapamiento
- Inmediata: cuando un empleado con acceso sale de la empresa

**Cómo rotar sin downtime:**
1. Genera el nuevo secreto en paralelo
2. Actualiza la app para aceptar ambos (período de transición)
3. Invalida el secreto anterior
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Seguridad, secrets management, variables de entorno, DevSecOps',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Sistema de diseño: cómo construir y mantener el que el equipo de desarrollo realmente usa',
                'description'       => 'Crea el sistema de diseño que sobrevive al paso del tiempo y que desarrollo adopta sin resistencia. Con la arquitectura de componentes, la documentación que funciona, el proceso de contribución y cómo evitar los errores que hacen que los sistemas de diseño queden abandonados.',
                'prompt_content'    => <<<'PROMPT'
Eres un Design Systems Lead con experiencia construyendo y escalando sistemas de diseño en equipos de 5 a 50 personas en entornos de producto digital.

Contexto:
- Tamaño del equipo: [N diseñadores / N desarrolladores]
- Stack frontend: [React / Vue / Angular / Svelte / otro]
- Herramienta de diseño: [Figma / Sketch / otro]
- Estado actual: [sin sistema / UI Kit en Figma desconectado del código / librería de componentes sin documentación / otro]
- Problemas actuales: [inconsistencias visuales / los componentes del diseño no coinciden con los del código / desarrollo ignora el kit de diseño / todo hay que explicarlo cada vez / otro]

## Sistema de Diseño — [Empresa/Producto]

### 🧱 La arquitectura correcta (tokens → componentes → patterns)

**Nivel 1 — Design Tokens (la base de todo):**
Los valores primitivos del sistema: colores, tipografía, espaciado, sombras, radios de borde.
```json
{
  "color": {
    "brand": {
      "primary": { "value": "#2563EB" },
      "secondary": { "value": "#7C3AED" }
    },
    "neutral": {
      "100": { "value": "#F3F4F6" },
      "900": { "value": "#111827" }
    }
  },
  "spacing": {
    "xs": { "value": "4px" },
    "sm": { "value": "8px" },
    "md": { "value": "16px" },
    "lg": { "value": "24px" }
  }
}
```

**Nivel 2 — Componentes base (atómicos):**
Button, Input, Badge, Avatar, Icon, Checkbox, Radio, Toggle, Select.
Cada componente tiene: variantes, estados, props documentadas.

**Nivel 3 — Componentes compuestos:**
Modal, Dropdown, Toast, DataTable, Form, Card.
Usan componentes base internamente.

**Nivel 4 — Patterns y templates:**
Combinaciones frecuentes: formularios de login, tablas con filtros, dashboards.

### 📐 Cómo estructurar los componentes para que desarrollo los adopte

**El criterio de inclusión en el sistema:**
Un componente entra en el sistema cuando aparece en 3+ lugares del producto.
Si solo aparece una vez, es un componente de la feature, no del sistema.

**La documentación que funciona (y la que no):**

```
❌ Lo que no funciona:
- Capturas de pantalla de cómo se ve el componente
- Solo Figma sin código de ejemplo
- Reglas sin ejemplos de cuándo aplicarlas

✅ Lo que sí funciona:
- Storybook con el componente interactive en el navegador
- Código de uso listo para copiar
- Ejemplos de cuándo usarlo y cuándo NO usarlo
- Las variantes cubiertas con ejemplos visuales
```

**Storybook como single source of truth:**
```javascript
// Button.stories.js
export default {
  title: 'Components/Button',
  component: Button,
  argTypes: {
    variant: { control: 'select', options: ['primary', 'secondary', 'ghost'] },
    size: { control: 'select', options: ['sm', 'md', 'lg'] },
    disabled: { control: 'boolean' },
  },
}

export const Primary = { args: { variant: 'primary', children: 'Guardar cambios' } }
export const Loading = { args: { variant: 'primary', loading: true, children: 'Guardando...' } }
export const Destructive = { args: { variant: 'danger', children: 'Eliminar cuenta' } }
```

### 🔄 El proceso de contribución que evita el caos

**Quién puede añadir componentes al sistema:**
No todo el mundo. Define roles:
- **Consumer:** usa los componentes existentes
- **Contributor:** propone nuevos componentes con justificación
- **Maintainer:** aprueba, refactoriza y garantiza la coherencia

**El proceso RFC (Request for Component):**
Cuando alguien necesita un componente que no existe:
1. Verifica que no existe ya (o que no puede adaptarse uno existente)
2. Crea un issue con: screenshot del caso de uso + propuesta de API del componente
3. Revisión del maintainer en 1-2 días
4. Si se aprueba: desarrollo + documentación en Storybook
5. Release con semantic versioning

### 📊 Cómo medir la salud del sistema de diseño
El coverage rate (% de la UI construida con componentes del sistema) como KPI principal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Design system, componentes, Figma, Storybook, frontend',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Upsell y cross-sell en B2B: cómo expandir la cuenta sin parecer que solo piensas en comisiones',
                'description'       => 'Diseña la estrategia de expansión de cuentas que aumenta el LTV de tus clientes existentes. Con los triggers de expansión, las conversaciones de upsell que no generan rechazo, el timing correcto y cómo alinear ventas y customer success para que el cliente sienta que le estás ayudando.',
                'prompt_content'    => <<<'PROMPT'
Eres un Account Executive B2B especializado en expansión de cuentas con experiencia llevando el NRR (Net Revenue Retention) de 100% a 130%+ en productos SaaS y servicios profesionales.

Contexto:
- Tipo de producto: [SaaS / servicios profesionales / plataforma / otro]
- Ticket inicial medio: [€/año]
- Opciones de expansión disponibles: [más licencias / plan superior / módulos adicionales / servicios / otro]
- NRR actual: [X%]
- Mayor fricción al intentar expandir: [el cliente dice "no hay presupuesto" / "ya hablaremos" / el timing siempre es malo / no sabemos cuándo proponer / otro]

## Estrategia de Expansión de Cuentas — [Empresa]

### 🎯 La diferencia entre upsell que funciona y upsell que molesta

**Upsell que molesta:** "Hemos lanzado nuestro plan Enterprise, ¿te interesa?"
**Upsell que funciona:** "Hemos visto que usáis mucho [feature X]. Con el plan Y, podrías [beneficio específico]. ¿Tiene sentido que lo revisemos?"

La diferencia: el que funciona parte del uso real del cliente y conecta con un problema que el cliente ya reconoce.

### 🔭 Los triggers de expansión (el momento correcto)

**Señales de uso que indican preparación para upsell:**

| Señal | Qué significa | Acción |
|-------|---------------|--------|
| Han llegado al 80% del límite de [usuarios/llamadas/proyectos] | Necesitan más capacidad | Upsell a plan superior |
| Usan daily una feature del plan superior | Ya experimentaron el valor | Conversión a plan que ya usan |
| Han añadido [N] nuevos usuarios en 30 días | El equipo crece | Upsell por asientos |
| Usan 5/6 módulos del plan actual | Alta adopción, listo para expandir | Cross-sell módulo 6 |
| CSAT >9 en las últimas 2 semanas | Momento de buena voluntad | El mejor momento para proponer |

**Señales de evento de negocio:**
- El cliente anuncia financiación → presupuesto disponible, expansión en mente
- El cliente abre nuevas oficinas o mercados → necesidad de escalar
- El cliente publica una oferta de trabajo en un área relacionada con tu producto → inversión en esa área

### 💬 El framework de la conversación de expansión

**El error más frecuente:** pedir permiso para hacer el pitch.
"¿Estarías interesado en conocer nuestro plan Enterprise?" → casi siempre dice no sin pensarlo.

**El framework alternativo — partir del impacto:**

1. **Observación:** "He revisado vuestro uso de [X] y he visto que [dato específico]."
2. **Hipótesis:** "Imagino que eso significa que [implicación para su negocio]."
3. **Propuesta:** "Si fuera así, [solución específica] podría [beneficio cuantificable]."
4. **Pregunta abierta:** "¿Eso conecta con algo en lo que estéis trabajando?"

**Ejemplo práctico:**
"He visto que vuestro equipo de ventas ha pasado de 5 a 12 usuarios en 3 meses. Imagino que con ese crecimiento la gestión del CRM se está volviendo más compleja. Nuestro módulo de automatización de secuencias reduce el tiempo de setup por rep en un 60%. ¿Eso tiene sentido en este momento?"

### 💰 Cómo construir la propuesta de expansión

**Lo que debe incluir:**
- El coste de la expansión
- El beneficio esperado (ROI calculado con datos del cliente)
- La inversión adicional vs. el impacto estimado
- El riesgo de no hacerlo (el coste de oportunidad)

**El modelo del "coste de quedarse quieto":**
A veces la conversación más poderosa no es "mira lo que ganas" sino "mira lo que pierdes por no hacerlo."

### 📋 Coordinación ventas-CS para expansión fluida
El protocolo de handoff entre CS (que ve las señales) y AE (que cierra la expansión) sin que el cliente se sienta pasado de uno a otro.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Upsell, cross-sell, expansión de cuentas, NRR, account management',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Feature flags: implementación, gestión y el proceso de rollout que reduce el riesgo de cada lanzamiento',
                'description'       => 'Implementa feature flags en tu producto para desacoplar el despliegue del lanzamiento. Con la arquitectura técnica, el proceso de rollout progresivo, la limpieza de flags obsoletos y cómo usarlos para A/B testing y dark launches.',
                'prompt_content'    => <<<'PROMPT'
Eres un Staff Engineer con experiencia implementando sistemas de feature flags en productos digitales de 100k a 10M usuarios, donde cada lanzamiento debe ser reversible en <5 minutos.

Contexto:
- Stack: [React + Node.js / Next.js / Vue + Laravel / otro]
- Escala actual: [N usuarios activos / N deployments por semana]
- Problema actual: [miedo a los lanzamientos / no podemos hacer rollback rápido / queremos hacer A/B pero no sabemos cómo / otro]
- Herramienta de feature flags: [ninguna / LaunchDarkly / GrowthBook / Unleash / Flagsmith / implementación propia]

## Sistema de Feature Flags — [Producto]

### 🧠 Por qué feature flags cambian cómo lanzas software

**Antes de feature flags:**
deploy = lanzamiento. Si algo va mal, necesitas reverting el código → 30-60 minutos para recuperarte.

**Con feature flags:**
deploy ≠ lanzamiento. El código llega a producción apagado. Enciendes la feature cuando estás listo. Si algo va mal, un click y en <1 minuto vuelves al estado anterior.

**Los 4 usos de feature flags:**
1. **Release flags:** encender/apagar una feature en producción
2. **Rollout progresivo:** lanzar al 1%, 10%, 50%, 100% de usuarios
3. **A/B testing:** mitad de usuarios ve A, mitad ve B — mides el impacto
4. **Dark launch:** la feature está activa en backend (loggeando) sin mostrarse en frontend

### 🏗️ Arquitectura mínima viable (sin herramienta externa)

```javascript
// feature-flags.js — configuración centralizada
const flags = {
  newDashboard: {
    enabled: process.env.FLAG_NEW_DASHBOARD === 'true',
    rolloutPercentage: parseInt(process.env.FLAG_NEW_DASHBOARD_PCT || '0'),
  },
  aiSuggestions: {
    enabled: false,
    allowlist: ['user_123', 'user_456'], // beta testers
  },
}

// Evaluación del flag para un usuario
function isEnabled(flagName, userId) {
  const flag = flags[flagName]
  if (!flag?.enabled) return false
  if (flag.allowlist?.includes(userId)) return true
  if (flag.rolloutPercentage > 0) {
    // Hash determinista: el mismo usuario siempre ve lo mismo
    const hash = userId.split('').reduce((acc, c) => acc + c.charCodeAt(0), 0)
    return (hash % 100) < flag.rolloutPercentage
  }
  return flag.enabled
}
```

```jsx
// Uso en componente React
function Dashboard({ user }) {
  const showNewDashboard = isEnabled('newDashboard', user.id)
  return showNewDashboard ? <NewDashboard /> : <OldDashboard />
}
```

### 🚀 El proceso de rollout progresivo

**El patrón de lanzamiento en 4 fases:**

| Fase | % usuarios | Duración | Qué monitorizas |
|------|-----------|---------|----------------|
| Internal | Solo el equipo (allowlist) | 1-3 días | QA básico, flujos críticos |
| Beta | 1-5% usuarios reales | 3-7 días | Error rate, performance, comportamiento |
| Gradual | 10% → 25% → 50% | 1-2 semanas | Métricas de negocio vs. control group |
| Full | 100% | — | Monitoriza durante 2 semanas más |

**Gate criteria para pasar de fase:**
- Error rate < 0.1% (no aumentó respecto a baseline)
- P95 de latencia no empeoró >10%
- Métrica de negocio objetivo ≥ igual al control group

### 🧹 La deuda técnica de los feature flags

El error más frecuente: los flags nunca se limpian.
Después de un lanzamiento completo al 100%, el flag es deuda técnica.

**Proceso de limpieza:**
1. Tras 2 semanas al 100%: el flag se marca como "deprecated" en el código
2. Un sprint después: se elimina el código del flag y la rama "falsa"
3. Se documenta la decisión tomada (para no repetir la investigación en el futuro)
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Feature flags, rollout progresivo, A/B testing, release management',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del desempeño de bajo rendimiento: el proceso que documenta, acompaña y, si es necesario, desvincula',
                'description'       => 'Diseña el proceso de performance improvement que da al empleado una oportunidad real de mejorar, protege a la empresa legalmente y permite tomar la decisión difícil si el proceso no funciona. Con el PIP documentado, los check-ins de seguimiento y la comunicación que minimiza el impacto en el equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un HR Director con experiencia gestionando procesos de performance improvement en empresas de 50 a 500 empleados, con historial de resoluciones exitosas (mejora real) y de desvinculaciones correctamente documentadas.

Contexto:
- Situación: [empleado con bajo rendimiento claro / empleado con problemas de actitud o cultura / empleado con buen rendimiento pasado que ha bajado / otro]
- Tiempo en la empresa: [N meses/años]
- Conversaciones previas: [ninguna / feedback informal / advertencia verbal / ya hay un PIP / otro]
- Objetivo: [dar oportunidad real de mejora / documentar para una posible desvinculación / los dos]
- País: [España / México / Argentina / otro — el marco legal cambia]

## Proceso de Gestión del Bajo Rendimiento — [Empresa]

### 🎯 Lo que nunca debe ser un PIP (y lo que sí debe ser)

**Un PIP NO es:**
- La primera notificación de que hay un problema (eso es demasiado tarde para el empleado)
- Un trámite para justificar el despido que ya has decidido
- Una lista de reproches del pasado

**Un PIP SÍ es:**
- Un plan de mejora estructurado con objetivos claros, métricas y plazo
- Una herramienta de soporte genuino para que el empleado mejore
- Un documento legal que protege a la empresa si la mejora no se produce

**El error más frecuente:**
No tener conversaciones de feedback previas documentadas.
Un PIP que llega de sorpresa al empleado no funciona ni como herramienta de mejora ni como documentación.

### 📋 Estructura del PIP (Performance Improvement Plan)

**Sección 1 — Contexto del problema:**
```
Empleado: [Nombre]
Cargo: [Cargo]
Manager: [Nombre]
Periodo de mejora: [Fecha inicio] → [Fecha fin]
Fecha de inicio del proceso: [fecha]

Descripción de los problemas identificados:
[Describir con datos específicos, fechas y ejemplos concretos]
- Incumplimiento de [objetivo X]: se esperaba Y, se obtuvo Z en el período [fecha-fecha]
- [Conducta/situación específica del DD/MM/AAAA]
```

**Sección 2 — Objetivos de mejora (SMART):**
Para cada problema identificado, un objetivo medible:
- **Específico:** qué debe mejorar exactamente
- **Medible:** cómo se medirá el progreso
- **Alcanzable:** que sea realista en el plazo dado
- **Relevante:** conectado con los requisitos del puesto
- **Temporal:** con una fecha límite clara

**Sección 3 — Recursos y soporte:**
¿Qué le proporcionará la empresa para ayudarle a mejorar?
- Formación específica
- Mentoring o acompañamiento
- Reuniones de seguimiento más frecuentes
- Ajuste de carga de trabajo si hay factores externos

**Sección 4 — Consecuencias:**
"Si los objetivos del período de mejora no se alcanzan, la empresa podrá iniciar el proceso de desvinculación."

### 📅 Los check-ins de seguimiento (la parte que más se descuida)

**Cada 1-2 semanas durante el PIP:**
Reunión de 30 minutos con agenda fija:
1. Revisión del progreso en cada objetivo (con datos)
2. Obstáculos encontrados por el empleado
3. Ajustes al plan si hay circunstancias cambiantes
4. Acta de la reunión firmada por ambas partes

### ⚖️ El marco legal en España (consulta siempre con abogado laboralista)

**Tipos de despido por bajo rendimiento:**
- Despido disciplinario por incumplimiento contractual (art. 54 ET)
- Despido objetivo por ineptitud sobrevenida o por no adaptación a cambios (art. 52 ET)

**Lo que protege a la empresa:**
Documentación del proceso completo: comunicaciones previas, PIP, check-ins firmados, resultado del proceso.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Performance management, PIP, bajo rendimiento, gestión de personas',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Optimización del capital de trabajo: reduce el ciclo de conversión de caja de tu PYME',
                'description'       => 'Aprende a liberar el efectivo atrapado en tu negocio optimizando los plazos de cobro, pago e inventario. Con el cálculo del ciclo de conversión de caja, las estrategias para cada palanca y el plan de implementación que funciona en PYMEs reales.',
                'prompt_content'    => <<<'PROMPT'
Eres un CFO advisor especializado en gestión del capital de trabajo para PYMEs de 1M a 20M€ de facturación que han conseguido liberar entre 200k y 2M€ de efectivo optimizando su ciclo de caja.

Contexto de la empresa:
- Facturación anual: [€]
- Sector: [manufactura / distribución / servicios / tecnología / retail / otro]
- DSO (días de cobro a clientes): [N días] — si no lo sabes: (Cuentas a cobrar / Facturación) × 365
- DPO (días de pago a proveedores): [N días] — si no lo sabes: (Cuentas a pagar / Coste de ventas) × 365
- DIO (días de inventario): [N días o N/A] — si no lo sabes: (Inventario / Coste de ventas) × 365
- Problema principal: [cobro lento / pago muy rápido a proveedores / inventario elevado / otro]

## Optimización del Capital de Trabajo — [Empresa]

### 📐 El ciclo de conversión de caja (CCC)

**Fórmula:**
CCC = DSO + DIO - DPO

**Interpretación:**
- CCC positivo (ej: 60 días): la empresa financia a sus clientes. Necesita capital de trabajo.
- CCC negativo (ej: -10 días): el negocio es financiado por sus proveedores. El efectivo llega antes de gastarse (Amazón, supermercados).

**Tu CCC actual:**
[DSO] + [DIO] - [DPO] = [resultado] días

**Si tu CCC es 60 días y facturas 5M€/año:**
Tienes 5.000.000 × 60/365 = ~820.000€ "atrapados" en capital de trabajo.
Reducir el CCC a 45 días libera ~205.000€ de efectivo sin vender más.

### 💰 Palanca 1: Cobro más rápido (reducir DSO)

**El diagnóstico:**
- ¿Cuántas facturas están vencidas? (>30 días, >60 días, >90 días)
- ¿Cuál es la causa del cobro lento? ¿El proceso de facturación, los plazos acordados, o la gestión del impago?

**Acciones de mayor impacto:**

**Facturación inmediata (no "a final de mes"):**
Si tu cliente tiene 30 días desde la factura, facturar el día 1 vs. el día 30 te da 30 días de diferencia.

**Descuento por pronto pago:**
"2/10 net 30": si pagan en 10 días tienen 2% de descuento, si no, pagan en 30.
El coste del descuento (2%) es ~26% TAE anual — barato comparado con factoring.

**Anticipo del 30-50% en proyectos:**
Reduce el DSO efectivo a la mitad en servicios y proyectos.

**Proceso sistemático de seguimiento:**
```
Día 0: factura enviada + confirmación de recepción
Día -5 (5 días antes del vencimiento): recordatorio amigable por email
Día 0 (día del vencimiento): recordatorio de vencimiento
Día +5: llamada del responsable de cuentas
Día +15: comunicación formal de impago
Día +30: inicio del procedimiento de reclamación
```

### 🏦 Palanca 2: Pagar más tarde (aumentar DPO)

**Sin dañar la relación con el proveedor:**
- Renegociar plazos de pago: de 30 a 60 días a cambio de mayor volumen o compromiso de pedido
- Extended payment terms: común en distribución — proveedor financia el inventario
- Confirming: el banco paga al proveedor al vencimiento, tú pagas al banco más tarde

### 📦 Palanca 3: Inventario justo (reducir DIO)

Para empresas con inventario físico:
- Identificar el SKU lento y aplicar descuentos para rotar
- Pedidos más frecuentes y más pequeños (reduce el stock medio aunque el precio unitario suba levemente)
- Just-in-time con proveedores clave

### 📊 El plan de implementación en 90 días
Las 3 acciones con mayor impacto en las primeras 4 semanas, el seguimiento semanal y las métricas de control.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Capital de trabajo, flujo de caja, DSO, PYME, finanzas operativas',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Due diligence legal en fusiones y adquisiciones: el checklist que protege al comprador',
                'description'       => 'Ejecuta la due diligence legal en una operación de M&A de forma estructurada. Con el checklist completo de áreas a revisar, las red flags que pueden tumbar la operación o reducir el precio, y cómo presentar los hallazgos al comprador para que tome una decisión informada.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en M&A y due diligence corporativa con experiencia en transacciones de 500k a 50M€ en el mercado español y europeo.

Contexto de la operación:
- Tipo de operación: [compraventa de empresa / fusión / adquisición de activos / MBO / otro]
- Sector del target: [tecnología / manufactura / servicios / retail / healthtech / otro]
- Tamaño estimado del target: [€ de facturación / N empleados]
- Posición: [comprador / asesor del comprador]
- Estado de la operación: [LOI firmada / en negociación / fase de due diligence activa]

## Due Diligence Legal — [Nombre de la operación]

### 🗂️ Las 8 áreas de la due diligence legal

#### 1. Estructura corporativa y accionarial
**Documentos a solicitar:**
- Escritura de constitución y estatutos sociales actualizados
- Libro de actas del consejo y junta de accionistas (últimos 5 años)
- Registro de socios y tabla de capitalización (cap table)
- Pactos de socios vigentes
- Poderes notariales vigentes — ¿quién puede obligar a la empresa?

**Red flags:**
- Socios con derecho de veto o tag-along no conocidos
- Compromisos de futura emisión de participaciones (opciones, warrants) que diluyen al comprador
- Falta de unanimidad o litigios entre socios actuales

#### 2. Contratos materiales
**Documentos a solicitar:**
- Contratos con los 10 principales clientes (>X% de la facturación)
- Contratos con proveedores críticos (single-source o >€X)
- Contratos de arrendamiento de inmuebles
- Contratos de financiación bancaria

**Red flags:**
- Cláusulas de change of control que dan derecho a terminar o renegociar al cliente si cambia el propietario
- Contratos de clientes sin preaviso mínimo de cancelación
- Garantías personales del vendedor que no se pueden transferir

#### 3. Propiedad intelectual y tecnología
**Crítico para empresas tech:**
- ¿Quién es titular del código? ¿La empresa o los desarrolladores que lo escribieron?
- Cesión de derechos de autor firmada por todos los empleados y freelancers que han contribuido
- Licencias de software de terceros (open source con licencias restrictivas como GPL)
- Marcas registradas: ¿en todos los países donde opera?
- Dominios: ¿están a nombre de la empresa o del fundador?

**Red flag crítica:** código desarrollado por terceros sin cesión expresa de derechos.

#### 4. Laboral y RRHH
**Documentos a solicitar:**
- Listado de todos los empleados con categoría, antigüedad, salario y tipo de contrato
- Contratos de los empleados clave + cláusulas de no-competencia
- Convenio colectivo aplicable y deuda con la Seguridad Social
- Listado de freelancers y autónomos habituales

**Red flags:**
- Falsos autónomos: si la Seguridad Social los reclasifica, el comprador asume la deuda
- Empleados clave sin pacto de no-competencia post-contractual
- ERTEs o compromisos de readmisión pendientes

#### 5. Fiscal
**Documentos:** declaraciones de impuestos últimos 4 años, actas de inspección, aplazamientos.
**Red flags:** deuda fiscal no declarada, deducciones agresivas en I+D+i, precios de transferencia en grupos.

#### 6. Litigios y contingencias
Todos los procedimientos judiciales, arbitrajes o administrativos activos o amenazados.

#### 7. Inmuebles y activos
Títulos de propiedad, cargas registrales, seguros vigentes.

#### 8. Autorizaciones y licencias regulatorias
¿El negocio requiere licencias que deben renovarse o transferirse tras el cambio de titular?

### 📊 El informe de hallazgos para el comprador
Clasificación de los hallazgos por impacto: deal-breaker / price adjustment / representation & warranty / informational.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'M&A, due diligence, fusiones y adquisiciones, derecho mercantil',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Escalado de tickets de soporte: el protocolo para no perder a un cliente en sus peores momentos',
                'description'       => 'Define los criterios de escalado, el proceso de handoff entre niveles y la comunicación con el cliente durante una escalada que transforma una crisis en una demostración de compromiso. Con las plantillas de comunicación y el proceso de retrospectiva.',
                'prompt_content'    => <<<'PROMPT'
Eres un Director of Customer Support con experiencia diseñando procesos de escalado en equipos de soporte de 5 a 50 agentes en productos SaaS y plataformas digitales.

Contexto:
- Canales de soporte: [chat en vivo / email / teléfono / todos]
- Herramienta de soporte: [Intercom / Zendesk / Freshdesk / Help Scout / otra]
- Tamaño del equipo: [N agentes de L1 / N agentes de L2 / N técnicos L3]
- Mayor problema actual: [los escalados tardan demasiado / el cliente tiene que explicar el problema de nuevo / no hay criterios claros para escalar / todo se escala sin criterio / otro]

## Protocolo de Escalado de Tickets — [Empresa]

### 🏗️ Los niveles de soporte y qué resuelve cada uno

**L1 — Soporte general:**
- Responde el 70-80% de los tickets
- Problemas: configuración básica, preguntas sobre features, contraseña olvidada, errores conocidos con solución documentada
- Criterio para escalar: no puede resolver en <[N] minutos o el ticket requiere acceso técnico al backend

**L2 — Soporte especializado:**
- Problemas más complejos que requieren conocimiento profundo del producto
- Diagnóstico de bugs, integraciones, configuraciones avanzadas
- Criterio para escalar: necesita cambio en el código o involucra pérdida de datos

**L3 — Ingeniería:**
- Bugs confirmados, pérdida de datos, problemas de infraestructura
- Solo recibe tickets que L2 no puede resolver con las herramientas disponibles
- Criterio para escalar: incidente de severidad alta que afecta a múltiples clientes

### ⚡ Los criterios de escalado inmediato (sin esperar)

Estos tickets se escalan a L2 en <15 minutos sin importar la cola:
- Pérdida de datos reportada
- Acceso a la cuenta bloqueado para un cliente de alto valor
- Fallo de pagos o transacciones
- Posible brecha de seguridad (datos visibles, acceso no autorizado)
- Cliente que menciona explícitamente que va a cancelar

### 🔄 El handoff que no frustra al cliente

**El mayor error en los escalados:** el cliente tiene que explicar el problema de nuevo.

**El handoff correcto:**

```
[L1 al L2, en notas internas del ticket]:

RESUMEN DEL PROBLEMA:
El cliente [nombre] reporta [descripción exacta del problema] desde [fecha/hora].
Ha intentado: [pasos ya probados].
Ya verificado: [lo que se ha descartado].

CONTEXTO DEL CLIENTE:
Plan: [plan] | Desde: [fecha] | CSAT histórico: [X]
Nivel de urgencia percibido: [alto / medio / bajo]
Tono de la conversación: [frustrado / tranquilo / urgente]

SIGUIENTE PASO ESPERADO:
El cliente espera que [expectativa concreta].
```

**Comunicación con el cliente durante el escalado:**
```
Asunto: Tu consulta ha sido asignada a nuestro equipo especializado

Hola [nombre],

He escalado tu caso a [nombre del agente L2], quien es especialista en [área].
Te contactará en [plazo comprometido] con las primeras novedades.

No necesitarás explicar el problema de nuevo — le he pasado todos los detalles.

Si mientras tanto el problema empeora o hay algún cambio, escríbeme directamente.

[Nombre del agente L1]
```

### 📊 Métricas de los escalados

| Métrica | Objetivo | Cómo calcular |
|---------|---------|---------------|
| Tasa de escalado | <20% de tickets totales | Tickets escalados / total |
| First-contact resolution de L1 | >75% | Tickets resueltos por L1 / total L1 |
| Tiempo de primer contacto post-escalado | <2h (L2), <4h (L3) | Promedio del tiempo entre escalado y primera respuesta |
| CSAT en tickets escalados | >4.0/5.0 | Encuesta post-cierre |

### 🔍 La retrospectiva post-escalado
El proceso de 10 minutos que convierte cada escalado en conocimiento para reducir el siguiente.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Escalado de tickets, proceso de soporte, handoff, customer support',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Contrato de servicios freelance robusto: las cláusulas que te protegen y las que ahuyentan clientes',
                'description'       => 'Redacta el contrato de servicios freelance que protege tu trabajo, establece expectativas claras y cierra antes de empezar cualquier proyecto. Con las cláusulas esenciales, las que son negociables y las señales de alarma en los contratos que te piden firmar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en contratos de servicios profesionales freelance en España, con experiencia protegiendo a diseñadores, desarrolladores, consultores y otros profesionales independientes.

Mi contexto:
- Tipo de servicio: [desarrollo web / diseño / consultoría / marketing / redacción / foto/vídeo / otro]
- Ticket típico del proyecto: [€]
- Modalidad: [proyecto cerrado a precio fijo / tiempo y materiales por horas / retainer mensual]
- Problema más frecuente: [clientes que no pagan / scope creep sin límite / cambios infinitos / cliente que quiere los derechos de todo / otro]

## Contrato de Servicios Freelance — [Tu servicio]

### 📄 Las cláusulas esenciales (no trabajes sin ellas)

#### 1. Objeto del contrato y alcance del trabajo

**Lo que debes incluir:**
Una descripción específica de lo que harás Y de lo que no incluye.

```
"El presente contrato tiene por objeto [descripción exacta del servicio].
Quedan expresamente excluidos del alcance: [lista de lo que no incluye].
Cualquier trabajo adicional fuera de este alcance requerirá presupuesto separado y
aceptación por escrito por ambas partes."
```

**Por qué importa:** el scope creep comienza cuando el alcance es vago.

#### 2. Precio, forma de pago y condiciones

**La estructura de pagos recomendada:**
- Proyectos <€500: 100% por adelantado o 50/50 (inicio y entrega)
- Proyectos €500-5.000: 30-50% antes de empezar, resto en entrega o por hitos
- Proyectos >€5.000: pagos por hitos definidos (no entrega total al final)

```
"El importe total es de [€] + IVA correspondiente.
Forma de pago: [50%] a la firma del presente contrato como señal y condición
para el inicio de los trabajos. El [50%] restante a la entrega del trabajo final.
El impago de cualquier hito suspende automáticamente la obligación de continuar
los trabajos sin que ello constituya incumplimiento por parte del prestador."
```

#### 3. Revisiones incluidas y límite de cambios

```
"El servicio incluye hasta [N] rondas de revisión sobre el trabajo entregado.
Las revisiones se entienden como ajustes menores sobre la dirección aprobada,
no como cambios de concepto o de alcance.
Revisiones adicionales se facturarán a [€/hora]."
```

#### 4. Propiedad intelectual y cesión de derechos

**La posición de partida (lo que proteges sin cláusula):**
El autor retiene los derechos de autor salvo cesión expresa.

**Si el cliente quiere los derechos completos:**
```
"A la recepción del pago completo, el prestador cede al cliente los derechos
de explotación de los materiales originales entregados para los usos acordados
[especificar: comercial / web / impreso / global / territorio limitado].
El prestador conserva el derecho de incluir el trabajo en su portfolio."
```

**Si es solo una licencia de uso (tú retienes los derechos):**
Especifícalo explícitamente y el precio refleja la diferencia.

#### 5. Plazos y condiciones de entrega

```
"El plazo de entrega es de [N] días laborables desde la firma del contrato
Y la recepción del pago inicial. Los plazos se extienden proporcionalmente
por cada día de retraso en las respuestas o materiales del cliente
(más de [48/72] horas sin respuesta)."
```

#### 6. Terminación del contrato

```
"Cualquiera de las partes puede rescindir este contrato con [7/14] días de
preaviso por escrito. En caso de rescisión por parte del cliente, el prestador
facturará el trabajo completado hasta la fecha de rescisión, más [X%]
del total pendiente como compensación por la planificación realizada."
```

### 🚩 Las cláusulas de alarma en contratos que te piden firmar

- "Todos los derechos sobre los materiales pertenecen al cliente desde el inicio" → peligroso antes del pago
- "El freelance garantiza que el trabajo cumplirá los objetivos de negocio del cliente" → nadie puede garantizar resultados
- "El cliente puede solicitar cambios ilimitados" → scope creep garantizado
- Penalizaciones por retraso sin límite máximo → riesgo ilimitado

### 📋 El proceso de firma y arranque del proyecto
Por qué el proyecto no empieza hasta tener el contrato firmado y el pago inicial recibido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Contrato freelance, servicios, propiedad intelectual, protección legal',
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
