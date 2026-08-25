<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills76Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de ciclo de vida B2B — nurturing, engagement y retención',
                'description'      => 'Diseña el programa de marketing de ciclo de vida para clientes empresariales: desde el primer contacto hasta la renovación, con nurturing, engagement y expansión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing de ciclo de vida B2B con experiencia en plataformas de automatización de marketing como HubSpot, Marketo o Salesforce Marketing Cloud. Necesito diseñar un programa completo de lifecycle marketing para nuestros clientes empresariales.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el ciclo de ventas promedio y el ACV de tus clientes?
2. ¿Qué herramientas de marketing automation y CRM tienes disponibles?
3. ¿Cuántos segmentos de cliente tienes definidos (por industria, tamaño, uso del producto)?
4. ¿Cuáles son los mayores problemas actuales: bajo engagement post-venta, alto churn, expansión insuficiente?
5. ¿Tienes ya secuencias de email o son manuales las comunicaciones?

## Las Etapas del Ciclo de Vida B2B

| Etapa | Descripción | Objetivo de marketing |
|---|---|---|
| Lead (MQL) | Ha mostrado interés pero no habla con ventas | Cualificar y calentar |
| SQL / Oportunidad | En conversación activa con ventas | Apoyar el cierre con contenido |
| Onboarding | Acaba de convertirse en cliente | Activar rápido, reducir time-to-value |
| Adoption | Usando el producto regularmente | Profundizar el uso, reducir el riesgo de churn |
| Expansion | Candidato a upsell o cross-sell | Identificar y activar la oportunidad |
| Renewal | Próximo a la renovación | Asegurar la renovación y el upsell |
| Advocacy | Cliente satisfecho y referenciable | Convertir en case study y referencia |

## Programa de Nurturing (Etapa Lead → SQL)

**Segmentos de nurturing:**
Nunca hagas nurturing genérico. Segmenta mínimo por:
- Industria / vertical
- Tamaño de empresa (SMB, mid-market, enterprise)
- Comportamiento: contenido consumido, páginas visitadas, eventos registrados

**Secuencia de email de nurturing (ejemplo: 8 semanas):**

| Semana | Tipo de email | Objetivo |
|---|---|---|
| 1 | Contenido educativo top-of-funnel | Reconocer el problema |
| 2 | Caso de éxito del sector del lead | Mostrar prueba social relevante |
| 3 | Invitación a webinar o demo | Avanzar en la consideración |
| 4 | Contenido comparativo (vs. alternativas) | Posicionarte en la decisión |
| 5 | Prueba gratuita / trial / assessment | Reducir la barrera de entrada |
| 6 | Testimonial video de cliente parecido | Validación final |
| 7 | Oferta de reunión directa con expert | Conversión a SQL |
| 8 | Breakup email (si no hay respuesta) | Último intento antes de pausar |

## Onboarding de Nuevos Clientes: Los Primeros 90 Días

Los primeros 90 días determinan si el cliente renueva. Marketing apoya al equipo de CS con:

**Semana 1-2 (Activación):**
- Email de bienvenida personalizado con nombre del CSM y recursos clave
- Serie de 3 emails de setup con checklist de configuración inicial
- Invitación al grupo de usuarios / community

**Semana 3-8 (Adoption temprana):**
- Email de "¿Has probado X?" basado en qué features no ha activado aún
- Webinar de formación avanzada segmentado por caso de uso
- NPS de onboarding a las 4 semanas

**Semana 9-12 (First value moment):**
- Email de felicitación cuando alcanza su primer KPI relevante (trigger de producto)
- Solicitud de testimonio temprano si el NPS es ≥ 8
- Introducción a la feature de expansión más relevante para su perfil

## Engagement y Retención (Etapa Adoption)

Señales de bajo engagement que indican riesgo de churn:

| Señal | Umbral de alerta | Acción automática |
|---|---|---|
| Logins por semana | < 1 login en 14 días | Email "Te echamos de menos" + oferta de sesión con CSM |
| Features activadas | < 40% de features del plan | Email de "¿Sabías que puedes...?" con la feature más usada por similares |
| NPS < 6 | Cualquier respuesta detractora | Alerta al CSM + llamada proactiva |
| Soporte: tickets repetitivos | > 3 tickets del mismo tipo | Artículo de KB + sesión de formación |

**Programa de engagement mensual:**
- Newsletter de producto: novedades, casos de uso, best practices
- Webinar mensual de usuarios avanzados (opcional, no forzado)
- Informe de uso mensual personalizado: "En el último mes has [hecho X], el promedio de empresas como la tuya hace [Y]"

## Expansion: Identificar y Activar Upsell

**Señales de oportunidad de expansión:**
1. Ha alcanzado el 80% del límite de su plan actual
2. Ha activado todas las features del plan básico
3. Ha añadido nuevos usuarios (si el pricing es por asiento)
4. Ha mencionado una necesidad en soporte que cubre el plan superior

**Secuencia de expansion marketing:**
1. Email de "Has alcanzado el 80% de [límite]" → presentación del plan superior
2. Caso de éxito de empresa que hizo el upgrade con resultados
3. Oferta de prueba del plan superior por 30 días sin coste

## Renovación: Los 90 Días Clave

Empieza el marketing de renovación 90 días antes del vencimiento:

| Tiempo antes del vencimiento | Acción |
|---|---|
| 90 días | Email de Business Review: resumen del valor generado en el año |
| 60 días | Propuesta de renovación del CSM (si hay oportunidad de upsell, incluirla) |
| 30 días | Email de marketing con novedades del roadmap y beneficios de renovar |
| 7 días | Alerta interna al CSM + último email recordatorio |

## Métricas del Programa de Lifecycle

| Métrica | Qué mide | Objetivo |
|---|---|---|
| MQL to SQL conversion | Efectividad del nurturing | > 15% |
| Time to first value | Velocidad de activación post-venta | < 30 días |
| Feature adoption rate | % de features activadas por cliente | > 60% |
| Net Revenue Retention (NRR) | Expansión + renovación - churn | > 110% |
| Advocacy rate | % de clientes que dan referencia activa | > 20% |

## Entregables

Con el contexto que me des, produce:
1. Mapa completo de lifecycle con touchpoints de marketing por etapa
2. Secuencia de emails de nurturing (8 semanas) adaptada a tu segmento principal
3. Plantilla de email de Business Review anual
4. Scoring de engagement para identificar cuentas en riesgo
5. Plan de advocacy: cómo convertir clientes satisfechos en caso de estudio y referencia
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar el programa de marketing de ciclo de vida B2B para mejorar la retención, expansión y advocacy de clientes empresariales',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'DevSecOps — integra seguridad en el pipeline de CI/CD desde el primer commit',
                'description'      => 'Aprende a integrar controles de seguridad en cada etapa del pipeline de CI/CD: SAST, DAST, análisis de dependencias, secrets scanning y gestión de vulnerabilidades.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de seguridad con especialización en DevSecOps y experiencia integrando controles de seguridad en pipelines de CI/CD modernos. Necesito convertir la seguridad en parte del flujo de desarrollo, no en una auditoría final.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué herramienta de CI/CD usáis? (GitHub Actions, GitLab CI, Jenkins, CircleCI, Azure DevOps)
2. ¿Cuál es el stack tecnológico principal? (lenguaje, framework, infraestructura)
3. ¿Tenéis ya alguna herramienta de seguridad integrada o empezamos desde cero?
4. ¿Cuántos entornos desplegáis? (dev, staging, producción)
5. ¿Hay algún requisito de compliance? (ISO 27001, SOC2, PCI-DSS, ENS)

## El Modelo Shift-Left

DevSecOps significa mover la seguridad hacia la izquierda del ciclo de desarrollo: detectar problemas cuanto antes, cuando el coste de corrección es mínimo.

| Momento de detección | Coste relativo de corrección |
|---|---|
| En el IDE (mientras se escribe el código) | 1x |
| En el commit / pre-commit hook | 5x |
| En el pipeline de CI | 10x |
| En QA / staging | 50x |
| En producción | 100x |

## Las 5 Capas de Seguridad en el Pipeline

### Capa 1: Pre-commit (en el equipo del desarrollador)

**Herramientas:**
- `git-secrets` o `detect-secrets`: detecta credenciales hardcodeadas antes del commit
- `pre-commit` framework con hooks de linting de seguridad
- IDE plugins: Snyk, SonarLint, Semgrep

**Hook de pre-commit ejemplo (.pre-commit-config.yaml):**
```yaml
repos:
  - repo: https://github.com/Yelp/detect-secrets
    rev: v1.4.0
    hooks:
      - id: detect-secrets
        args: ['--baseline', '.secrets.baseline']
  - repo: https://github.com/zricethezav/gitleaks
    rev: v8.18.0
    hooks:
      - id: gitleaks
```

### Capa 2: SAST (Static Application Security Testing)

Análisis del código fuente sin ejecutarlo. Detecta: inyecciones SQL, XSS, path traversal, uso inseguro de criptografía.

| Herramienta | Lenguajes | Licencia |
|---|---|---|
| Semgrep | Multi-lenguaje | Open source + SaaS |
| SonarQube | Java, Python, JS, PHP | Community edition gratis |
| Bandit | Python | Open source |
| Brakeman | Ruby on Rails | Open source |
| CodeQL | GitHub nativo | Gratis para open source |

**Integración en GitHub Actions:**
```yaml
- name: Run Semgrep SAST
  uses: semgrep/semgrep-action@v1
  with:
    config: p/owasp-top-ten
  env:
    SEMGREP_APP_TOKEN: ${{ secrets.SEMGREP_APP_TOKEN }}
```

### Capa 3: Análisis de Dependencias (SCA — Software Composition Analysis)

El 80% del código de una aplicación moderna son dependencias de terceros. Analiza sus vulnerabilidades conocidas (CVEs).

| Herramienta | Ecosistemas | Integración |
|---|---|---|
| Dependabot (GitHub) | npm, pip, composer, Maven | Native GitHub |
| Snyk | Multi-ecosistema | CI/CD + IDE |
| OWASP Dependency-Check | Java, .NET, Node, Python | Open source |
| Trivy | Containers + dependencias | Open source, rápido |

**Política de gestión de vulnerabilidades:**
| Severidad | SLA de corrección |
|---|---|
| Critical (CVSS ≥ 9.0) | 24 horas |
| High (CVSS 7.0-8.9) | 7 días |
| Medium (CVSS 4.0-6.9) | 30 días |
| Low (CVSS < 4.0) | Backlog priorizado |

### Capa 4: Seguridad de Contenedores e Infraestructura

**Escaneo de imágenes Docker:**
```yaml
- name: Scan container image with Trivy
  uses: aquasecurity/trivy-action@master
  with:
    image-ref: 'myapp:${{ github.sha }}'
    format: 'sarif'
    severity: 'CRITICAL,HIGH'
    exit-code: '1'
```

**IaC Security Scanning (Infraestructura como Código):**
- Checkov: Terraform, CloudFormation, Kubernetes, Helm
- tfsec: Terraform específico
- kube-bench: Hardening de Kubernetes (CIS Benchmark)

### Capa 5: DAST (Dynamic Application Security Testing)

Pruebas sobre la aplicación en ejecución. Detecta: configuraciones incorrectas, vulnerabilidades de runtime que el SAST no ve.

| Herramienta | Cuándo usarla | Licencia |
|---|---|---|
| OWASP ZAP | Staging, integración en CI | Open source |
| Burp Suite (Enterprise) | Auditorías periódicas | Comercial |
| Nuclei | Templates personalizados, rápido | Open source |

## Gestión de Secrets

Regla de oro: **nunca en el código ni en variables de entorno en texto plano en producción.**

| Solución | Cuándo | Ejemplo |
|---|---|---|
| GitHub/GitLab Secrets | Variables en CI/CD | `${{ secrets.DB_PASSWORD }}` |
| HashiCorp Vault | Secrets dinámicos, rotación automática | Producción |
| AWS Secrets Manager / Azure Key Vault | Cloud nativo | Cloud deployments |
| SOPS + Age | Secrets en repositorio cifrados | Infra-as-code |

## Métricas de Madurez DevSecOps

| Nivel | Características |
|---|---|
| Nivel 1 (Inicial) | Seguridad solo en producción, manual, sin herramientas integradas |
| Nivel 2 (Básico) | SAST y SCA en CI, secrets scanning, resultados visibles |
| Nivel 3 (Definido) | DAST en staging, políticas de SLA, gestión de vulnerabilidades formal |
| Nivel 4 (Gestionado) | Threat modeling por feature, bug bounty, pruebas de penetración regulares |
| Nivel 5 (Optimizado) | Security as Code, métricas DORA + MTTR de vulnerabilidades, cultura security-first |

## Entregables

Con el contexto que me des, produce:
1. Pipeline de CI/CD comentado con las 5 capas de seguridad integradas
2. Política de gestión de vulnerabilidades (SLAs y proceso de triage)
3. Lista de herramientas recomendadas para tu stack con configuración inicial
4. Plantilla de threat model para nuevas features (STRIDE simplificado)
5. Checklist de seguridad para pull requests (Security PR Checklist)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Integrar controles de seguridad automatizados en el pipeline de CI/CD para detectar vulnerabilidades antes de que lleguen a producción',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Atomic Design en la práctica — átomos, moléculas y organismos con React/Vue',
                'description'      => 'Implementa el sistema de Atomic Design en proyectos reales con React o Vue: cómo estructurar el design system, nombrar los componentes y mantener la consistencia a escala.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un lead frontend developer y design systems architect con experiencia implementando Atomic Design en equipos de producto a escala. Necesito implementar o reorganizar nuestra librería de componentes siguiendo los principios de Atomic Design de Brad Frost.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué framework usáis? (React, Vue, Svelte, Angular)
2. ¿Tenéis ya componentes existentes que reorganizar o empezamos desde cero?
3. ¿Usáis un design tool? (Figma, Sketch) ¿Está sincronizado con el código?
4. ¿Cuántas personas trabajan en frontend y cuántos diseñadores colaboran?
5. ¿Tenéis Storybook u otra herramienta de documentación de componentes?

## Los 5 Niveles de Atomic Design

| Nivel | Descripción | Ejemplos | Características |
|---|---|---|---|
| Átomos | Elementos UI indivisibles | Button, Input, Label, Icon, Badge | Sin dependencias de negocio, máxima reutilización |
| Moléculas | Combinación de átomos con una función | SearchBar (Input + Button), FormField (Label + Input + ErrorMessage) | Una responsabilidad clara |
| Organismos | Secciones complejas y autocontenidas | Header, ProductCard, DataTable, LoginForm | Pueden tener lógica de negocio |
| Templates | Layout sin datos reales | PageLayout, DashboardTemplate | Define estructura, no contenido |
| Páginas | Templates con datos reales | HomePage, ProductPage | Instancia final con datos |

## Estructura de Carpetas Recomendada

```
src/
├── components/
│   ├── atoms/
│   │   ├── Button/
│   │   │   ├── Button.tsx
│   │   │   ├── Button.stories.tsx
│   │   │   ├── Button.test.tsx
│   │   │   └── index.ts
│   │   ├── Input/
│   │   ├── Icon/
│   │   └── Badge/
│   ├── molecules/
│   │   ├── SearchBar/
│   │   ├── FormField/
│   │   └── Notification/
│   ├── organisms/
│   │   ├── Header/
│   │   ├── DataTable/
│   │   └── ProductCard/
│   └── templates/
│       ├── PageLayout/
│       └── DashboardLayout/
├── design-tokens/
│   ├── colors.ts
│   ├── typography.ts
│   ├── spacing.ts
│   └── index.ts
└── pages/
    ├── Home/
    └── Dashboard/
```

## Design Tokens: La Base del Sistema

Los tokens son las variables del design system. Son el contrato entre diseño y código.

**Categorías de tokens:**

| Categoría | Ejemplos | Valor |
|---|---|---|
| Color primitivos | `color-blue-500` | `#3B82F6` |
| Color semánticos | `color-primary`, `color-danger` | Referencia a primitivo |
| Tipografía | `font-size-sm`, `font-weight-bold` | `14px`, `700` |
| Espaciado | `spacing-4`, `spacing-8` | `16px`, `32px` |
| Radios | `radius-sm`, `radius-full` | `4px`, `9999px` |
| Sombras | `shadow-md`, `shadow-lg` | Box-shadow values |

**Implementación con CSS Custom Properties:**
```css
:root {
  /* Primitivos */
  --color-blue-500: #3B82F6;
  --color-red-500: #EF4444;

  /* Semánticos */
  --color-primary: var(--color-blue-500);
  --color-danger: var(--color-red-500);

  /* Espaciado (escala de 4px) */
  --spacing-1: 4px;
  --spacing-2: 8px;
  --spacing-4: 16px;
  --spacing-6: 24px;
  --spacing-8: 32px;
}
```

## Anatomía de un Átomo Bien Diseñado (Button)

```tsx
// Button.tsx
import { cva, type VariantProps } from 'class-variance-authority';

const buttonVariants = cva(
  'inline-flex items-center justify-center rounded font-medium transition-colors focus-visible:outline-none focus-visible:ring-2',
  {
    variants: {
      variant: {
        primary: 'bg-primary text-white hover:bg-primary-dark',
        secondary: 'bg-transparent border border-primary text-primary hover:bg-primary/10',
        danger: 'bg-danger text-white hover:bg-danger-dark',
        ghost: 'hover:bg-neutral-100 text-neutral-700',
      },
      size: {
        sm: 'h-8 px-3 text-sm',
        md: 'h-10 px-4 text-base',
        lg: 'h-12 px-6 text-lg',
      },
    },
    defaultVariants: {
      variant: 'primary',
      size: 'md',
    },
  }
);

export interface ButtonProps
  extends React.ButtonHTMLAttributes<HTMLButtonElement>,
    VariantProps<typeof buttonVariants> {
  isLoading?: boolean;
  leftIcon?: React.ReactNode;
  rightIcon?: React.ReactNode;
}

export const Button = ({ variant, size, isLoading, leftIcon, rightIcon, children, ...props }: ButtonProps) => (
  <button className={buttonVariants({ variant, size })} disabled={isLoading || props.disabled} {...props}>
    {isLoading ? <Spinner size="sm" /> : leftIcon}
    {children}
    {!isLoading && rightIcon}
  </button>
);
```

## Storybook: Documentar y Probar el Sistema

Cada componente debe tener su story:

```tsx
// Button.stories.tsx
import type { Meta, StoryObj } from '@storybook/react';
import { Button } from './Button';

const meta: Meta<typeof Button> = {
  component: Button,
  tags: ['autodocs'],
  argTypes: {
    variant: { control: 'select', options: ['primary', 'secondary', 'danger', 'ghost'] },
    size: { control: 'select', options: ['sm', 'md', 'lg'] },
  },
};
export default meta;

export const Primary: StoryObj<typeof Button> = {
  args: { children: 'Click me', variant: 'primary' },
};

export const AllVariants: StoryObj<typeof Button> = {
  render: () => (
    <div className="flex gap-4">
      <Button variant="primary">Primary</Button>
      <Button variant="secondary">Secondary</Button>
      <Button variant="danger">Danger</Button>
    </div>
  ),
};
```

## Errores Comunes al Implementar Atomic Design

| Error | Consecuencia | Solución |
|---|---|---|
| Organismos con lógica de negocio mezclada con UI | Difícil de reutilizar y testear | Separa el organismo de presentación del container con lógica |
| Tokens no usados en componentes (valores hardcodeados) | El design system pierde coherencia | Linting rule para prohibir colores/espaciados hardcoded |
| Moléculas que hacen demasiado | Complejidad creciente difícil de mantener | Si una molécula supera 150 líneas, reconsiderar si es un organismo |
| No tener árbol de decisión de "¿dónde va este componente?" | Inconsistencia entre desarrolladores | Documentar el árbol de decisión en la wiki del design system |

## Árbol de Decisión: ¿Dónde Pongo Este Componente?

```
¿Es un elemento HTML básico estilizado? → ÁTOMO
¿Combina 2+ átomos con una función clara? → MOLÉCULA
¿Es una sección de página autocontenida con estado propio? → ORGANISMO
¿Define solo layout sin datos? → TEMPLATE
¿Es una página completa con datos? → PÁGINA
```

## Entregables

Con el contexto que me des, produce:
1. Estructura de carpetas adaptada a tu proyecto
2. Inventario inicial de átomos, moléculas y organismos (basado en las pantallas que me describas)
3. Implementación del átomo Button con todas las variantes para tu stack
4. Configuración de Storybook con autodocs y theme del design system
5. Guía de contribución al design system (cómo añadir un nuevo componente en 5 pasos)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar Atomic Design en un proyecto React o Vue para construir un design system escalable y consistente',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Social proof y casos de éxito — construye el activo que cierra deals',
                'description'      => 'Aprende a construir un sistema de testimonios, case studies y referencias que cierra oportunidades de venta incluso cuando no estás presente en la conversación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en B2B de alto valor. Necesito construir el activo de social proof de mi empresa: testimonios, case studies y un programa de referencias que funcione como vendedor 24/7.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántos clientes activos tienes y en qué industrias están?
2. ¿Tienes ya algún caso de éxito documentado o testimonios en vídeo?
3. ¿Cuál es el perfil del comprador en tus deals? (CEO, VP Sales, CTO, CFO)
4. ¿En qué momento del proceso de venta el comprador busca referencias externas?
5. ¿Cuánto tiempo puede dedicar un cliente satisfecho a ayudarte (30 min, 1 hora, vídeo)?

## Los 4 Tipos de Social Proof en B2B

| Tipo | Impacto | Esfuerzo de producción | Cuándo usar |
|---|---|---|---|
| Testimonio escrito (quote) | Bajo | Muy bajo | En web, emails, decks |
| Testimonio en vídeo | Alto | Medio | En web, redes sociales, demos |
| Case study escrito | Muy alto | Alto | En propuestas, late stage |
| Referencia directa (llamada) | Altísimo | Bajo (si está organizado) | En deals enterprise bloqueados |

## Cómo Conseguir el Primer Testimonio o Case Study

**El momento correcto para pedir:**
Pide cuando el cliente ha experimentado el primer resultado concreto, no cuando llevan 1 semana usando el producto. Las métricas de activación de producto (primer valor alcanzado) son la señal perfecta.

**El script de petición:**
"[Nombre], hemos visto que habéis [resultado concreto con tu producto]. Me alegra mucho que esté funcionando. Estamos documentando los resultados de clientes como vosotros y me gustaría compartir vuestra historia con futuros clientes del sector. ¿Estarías dispuesto a dedicar 20 minutos para que te haga unas preguntas? Tú tendrás control total sobre lo que se publica."

**Por qué funciona:** Das control al cliente, respetas su tiempo, y anclas la petición a un resultado real.

## Estructura del Case Study Perfecto

Un buen case study responde a las tres preguntas que tiene el comprador:
1. ¿Son como nosotros?
2. ¿Tuvieron el mismo problema que nosotros?
3. ¿Qué resultados obtuvieron exactamente?

**Plantilla de case study (1-2 páginas):**

```
TÍTULO: Cómo [Cliente] [resultado medible] con [tu producto]
Ejemplo: "Cómo Empresa X redujo el tiempo de onboarding un 60% con [Producto]"

RESUMEN EJECUTIVO (3 líneas)
[Cliente]: quién son, tamaño, industria
Problema: el dolor concreto antes de tu solución
Resultado: el número más impactante obtenido

EL RETO (1 párrafo)
Describe el problema con detalle. Usa las palabras del cliente, no las tuyas.
¿Por qué este problema era importante para ellos?
¿Qué habían intentado antes y por qué no había funcionado?

LA SOLUCIÓN (1 párrafo)
¿Por qué eligieron tu producto? ¿Cómo fue el proceso de implementación?
¿Cuánto tiempo tardaron en empezar a ver valor?

LOS RESULTADOS (la sección más importante)
Usa datos concretos siempre que sea posible:
• [Métrica 1]: mejoró de X a Y en Z semanas
• [Métrica 2]: ahorro de X€/mes o X horas/semana
• [Métrica 3]: [resultado cualitativo si no hay más datos]

CITA DEL CLIENTE
"[Cita directa del decision-maker que habla del valor obtenido]"
— [Nombre], [Cargo], [Empresa]

PRÓXIMOS PASOS
[Opcional: qué planes tiene el cliente de expandir el uso]
```

## El Programa de Referencias: Clientes que Venden por Ti

Un programa de referencias formal convierte la satisfacción del cliente en pipeline. Componentes clave:

**1. El Reference Pool**
Crea y mantén una lista de clientes dispuestos a ser referencia, segmentados por:
- Industria
- Tamaño de empresa
- Caso de uso principal
- Nivel de disponibilidad (llamada 20 min / visita / vídeo)

**2. El Proceso de Referencia en el Deal**
| Etapa del deal | Cuándo activar la referencia |
|---|---|
| Propuesta enviada | Ofrece proactivamente un case study del mismo sector |
| Negociación avanzada | Propón una llamada con un cliente similar |
| Deal bloqueado por dudas | Referencia directa del mismo perfil de comprador (CTO habla con CTO) |

**3. El Protocolo de la Llamada de Referencia**
- Prepara al cliente referencia con un briefing de 5 min antes de la llamada
- No guiones la llamada (suena falso), pero sí sugiere los temas
- Crea una nota de agradecimiento y un regalo simbólico después de cada llamada de referencia

## Incentivos: Motivar Sin Comprar la Referencia

En B2B, los mejores clientes hacen de referencia porque confían en ti y les hace quedar bien, no por el regalo.

| Incentivo | Apropiado en B2B | Notas |
|---|---|---|
| Descuento en la renovación | ✅ Sí | Solo si el cliente lo solicita, no lo ofreces proactivo |
| Invitación a eventos exclusivos | ✅ Sí | Advisory board, cenas con expertos del sector |
| Acceso anticipado a nuevas features | ✅ Sí | Funciona muy bien con perfiles técnicos |
| Comisión en metálico | ⚠️ Con cuidado | Puede parecer que "compras" la recomendación |
| Nada más que el agradecimiento | ✅ Sí | Los mejores clientes no necesitan incentivo |

## Distribución del Social Proof en el Proceso de Venta

| Momento | Qué usar |
|---|---|
| Cold outreach | Quote de 1 línea del sector del prospecto |
| Primera demo | Case study del mismo perfil de comprador |
| Propuesta | 2-3 case studies del mismo sector + tabla de ROI |
| Follow-up post-propuesta | Vídeo testimonial de cliente similar |
| Late stage / deal bloqueado | Llamada de referencia directa |

## Entregables

Con el contexto que me des, produce:
1. Plantilla de preguntas para la entrevista de case study (12 preguntas)
2. Case study de ejemplo usando un cliente tipo que me describas
3. Plantilla de referencia pool (hoja de seguimiento de clientes disponibles)
4. Email de petición de testimonio para enviar a clientes con NPS ≥ 8
5. Protocolo de referencia para el equipo de ventas (cuándo y cómo activarla)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir el programa de social proof que incluye testimonios, case studies y referencias para acelerar el cierre de deals B2B',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de la experiencia del usuario en escala — calidad UX mientras el producto crece',
                'description'      => 'Aprende a mantener la calidad de la experiencia del usuario cuando el producto crece, los equipos se multiplican y los stakeholders tienen demandas contradictorias.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP of Product con experiencia en productos que han escalado de 0 a cientos de miles de usuarios. Necesito ayuda para mantener una experiencia de usuario coherente y de calidad mientras el producto crece y el equipo se multiplica.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿En qué etapa está el producto y cuántos usuarios activos tiene?
2. ¿Cuántos equipos o squads trabajan en el producto simultáneamente?
3. ¿Cuál es el mayor problema de UX que ves ahora mismo? (inconsistencia visual, flujos rotos, métricas de engagement bajas)
4. ¿Tienes un design system o guía de componentes?
5. ¿Cómo se toman actualmente las decisiones de UX? (centralizado en diseño, descentralizado por squad)

## El Problema de UX a Escala: La Fragmentación

Cuando el producto escala, aparece la "fragmentación de UX": cada equipo optimiza su parte sin ver el conjunto. El resultado es un producto donde los flujos no conectan, la terminología varía entre secciones, y el usuario siente que usa tres productos distintos.

**Señales de fragmentación:**
- Inconsistencia en patrones de interacción (un botón de confirmar en algunos flujos, en otros un link)
- Terminología diferente para el mismo concepto en distintas áreas
- NPS que baja aunque cada squad tiene buenas métricas individuales
- Los nuevos usuarios se pierden porque el onboarding no conecta con el producto real

## Framework de Gobernanza de UX

**El modelo Hub-and-Spoke para UX distribuido:**

| Rol | Dónde está | Responsabilidad |
|---|---|---|
| UX Lead / Design System Owner (Hub) | Equipo central | Estándares, componentes, principios, auditorías |
| Embedded Designer (Spoke) | Cada squad | Diseño de features, aplicar el design system |
| Product Manager del squad | Cada squad | Priorizar trabajo de UX dentro del sprint |
| Research centralizado | Equipo central o compartido | Estudios de usuario que informan a todos los squads |

**Cadencia de sincronización:**
- Semanal: Design critique con todos los diseñadores (30 min)
- Quincenal: UX review con los PMs de todos los squads
- Mensual: Auditoría de consistencia cross-producto
- Trimestral: User research compartido con los hallazgos más importantes

## El Design System como Sistema Operativo de UX

A escala, el design system es la herramienta más importante para mantener la calidad. Define qué está centralizado y qué está distribuido:

| Centralizado (design system) | Distribuido (por squad) |
|---|---|
| Componentes atómicos (botones, inputs) | Composición de flujos complejos |
| Tokens de diseño (colores, tipografía) | Adaptaciones al caso de uso específico |
| Patrones de interacción estándar | Innovaciones dentro del patrón |
| Principios de usabilidad y accesibilidad | Prioridades de UX del area |

**Proceso de contribución al design system:**
1. Un squad necesita un componente nuevo
2. Lo diseña localmente como "experimental"
3. Lo presenta en el design critique semanal
4. Si se valida, el UX Lead lo estandariza y documenta
5. Se añade al design system y se depreca la versión local

## Métricas de UX a Escala

Para gestionar la UX con datos, necesitas métricas en varios niveles:

| Nivel | Métrica | Herramienta |
|---|---|---|
| Global del producto | NPS, CSAT, SUS (System Usability Scale) | Encuestas, Delighted |
| Por flujo clave | Task completion rate, time-on-task | Hotjar, FullStory, tests de usabilidad |
| Por pantalla | Tasa de abandono, clicks en elementos no clicables | GA4, Mixpanel |
| Accesibilidad | Errores WCAG, Lighthouse score | axe, Lighthouse CI |
| Consistencia | % de pantallas que usan los componentes del design system | Auditoría manual o Figma stats |

## Investigación de Usuario Sistemática

A escala, la investigación no puede ser reactiva. Necesitas un programa continuo:

| Tipo de investigación | Frecuencia | Para qué |
|---|---|---|
| Entrevistas de descubrimiento | Mensual (5-8 usuarios) | Entender problemas y jobs-to-be-done |
| Tests de usabilidad | Por feature mayor (antes del launch) | Validar flujos antes de construir |
| Encuestas de satisfacción (NPS, CSAT) | Trimestral | Tendencia de experiencia global |
| Sesiones de co-diseño | Trimestral | Involucrar al usuario en la solución |
| Análisis de comportamiento (Heatmaps, recordings) | Continuo | Entender el comportamiento real |

## Gestión de la Deuda de UX

Como la deuda técnica, existe la deuda de UX: flujos temporales que nunca se revisaron, patrones legacy que nadie quiere defender pero nadie quiere tocar.

**Inventario de deuda de UX:**

| Elemento | Tipo de problema | Impacto en usuario | Esfuerzo de corrección |
|---|---|---|---|
| [Flujo de onboarding] | Pasos innecesarios | Alto (abandono) | Alto |
| [Mensajes de error] | Genéricos, no accionables | Medio | Bajo |
| [Buscador] | Resultados no relevantes | Alto | Alto |

Prioriza igual que la deuda técnica: impacto × esfuerzo inverso.

## Principios de UX que Escalan

Define 5-7 principios de experiencia del producto que todos los squads usen como criterio de decisión:

**Ejemplo de principios:**
1. **Claridad ante todo**: si tienes que explicarlo, simplifícalo
2. **Progresiva revelación**: muestra solo lo que el usuario necesita ahora
3. **Nunca un callejón sin salida**: siempre hay una próxima acción clara
4. **Consistencia sobre creatividad**: usa los patrones establecidos antes de inventar
5. **Mide antes de decidir**: toda decisión de UX relevante tiene una métrica de validación

## Entregables

Con el contexto que me des, produce:
1. Modelo de gobernanza de UX adaptado al tamaño de tu equipo
2. Plantilla de auditoría de consistencia cross-producto (checklist de 20 puntos)
3. Framework de priorización de deuda de UX
4. Plantilla de UX Review para presentar al equipo de liderazgo
5. Los 5 principios de experiencia de tu producto (draft basado en lo que me cuentes)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear el sistema de gobernanza de UX para mantener la calidad de experiencia del usuario cuando el producto y el equipo crecen',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de conflictos interpersonales — mediación antes de que escalen',
                'description'      => 'Aprende el protocolo para detectar, mediar y resolver conflictos entre miembros del equipo antes de que afecten al clima, la productividad y la retención del talento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de recursos humanos y desarrollo organizacional con especialización en gestión de conflictos y mediación laboral. Necesito ayuda para abordar un conflicto interpersonal en mi equipo de manera profesional y constructiva.

## Diagnóstico inicial

Antes de empezar, hazme estas preguntas:
1. ¿Cuál es la naturaleza del conflicto? (diferencia de trabajo, valores, comunicación, competencia por recursos, historia personal)
2. ¿Cuántas personas están involucradas y cuáles son sus roles?
3. ¿Desde cuándo existe el conflicto y cómo ha evolucionado?
4. ¿Has hablado ya con alguna de las partes? ¿Qué te han dicho?
5. ¿El conflicto está afectando al trabajo, al equipo o al cliente?

## Tipos de Conflicto y Cómo Gestionarlos

No todos los conflictos se gestionan igual:

| Tipo | Descripción | Estrategia | Urgencia |
|---|---|---|---|
| Conflicto de tarea | Desacuerdo sobre cómo hacer el trabajo | Facilitación del proceso de decisión | Baja-Media |
| Conflicto de proceso | Quién hace qué y cómo se coordinan | Clarificación de roles y responsabilidades | Media |
| Conflicto de relación | Tensión personal, falta de respeto | Mediación formal | Alta |
| Conflicto de valores | Diferencias éticas o de principios | Mediación + posible escalado a HRBP | Muy alta |

## El Protocolo de Mediación en 5 Fases

### Fase 1: Pre-mediación (reuniones individuales)

Antes de sentar a las dos partes juntas, habla con cada una por separado:

**Estructura de la conversación individual (30-40 min):**
1. Establece el propósito: "Quiero entender tu perspectiva para ayudaros a resolver esta situación"
2. Escucha activa: "Cuéntame qué está pasando desde tu punto de vista"
3. Profundiza en el impacto: "¿Cómo te está afectando esto?"
4. Explora intereses (no posiciones): "¿Qué necesitarías para que esto mejore?"
5. Verifica la voluntad de resolver: "¿Estarías dispuesto/a a buscar una solución conjunta?"

**Reglas de la pre-mediación:**
- Todo lo que se cuenta en la pre-mediación es confidencial a menos que se indique lo contrario
- No tomes partido ni hagas promesas
- Busca los intereses reales, no las posiciones declaradas

### Fase 2: Preparación de la sesión conjunta

Antes de la mediación:
- Elige un espacio neutro (no el despacho de ninguna de las partes)
- Define las reglas de la sesión y comunícalas antes
- Prepara el resumen de las dos perspectivas sin revelar detalles confidenciales

**Reglas de la sesión conjunta:**
1. Hablar en primera persona ("Yo siento", "Yo necesito")
2. No interrumpir mientras la otra persona habla
3. El objetivo es entenderse, no ganar
4. Confidencialidad de lo que se hable en la sala

### Fase 3: La sesión de mediación (60-90 min)

**Estructura:**
1. Apertura (5 min): explica el rol del mediador y las reglas
2. Exposición de perspectivas (15 min por persona): cada parte cuenta su versión sin interrupciones
3. Identificación de puntos comunes (10 min): "Parece que los dos queremos X"
4. Exploración de soluciones (30 min): brainstorming conjunto sin juzgar opciones
5. Acuerdo y compromisos (15 min): concretar qué va a cambiar y cómo se verificará

**Técnicas de mediación:**
- **Reencuadre:** Transforma acusaciones en necesidades. "No me ayuda nunca" → "Necesitas más apoyo en [área]"
- **Normalización:** "Es normal que dos personas con estilos de trabajo distintos tengan fricciones"
- **Pausa emocional:** Si la tensión sube, propón un descanso de 5 minutos
- **Preguntas futuro:** "¿Cómo os gustaría que fuera vuestra relación de trabajo en 3 meses?"

### Fase 4: Acuerdo de Resolución

Documenta el acuerdo con estos elementos:

| Elemento | Ejemplo |
|---|---|
| Comportamientos que cambiarán | "X se compromete a responder en menos de 24h a los mensajes de Y" |
| Forma de comunicación acordada | "Las discrepancias sobre el proyecto se plantean en la reunión semanal, no por escrito" |
| Mecanismo de seguimiento | "Check-in a las 4 semanas con el manager para revisar cómo va" |
| Qué hacer si hay recaída | "Si hay un nuevo incidente, cualquiera de los dos puede solicitar una nueva sesión" |

### Fase 5: Seguimiento

- Check-in individual a las 2 semanas con cada parte
- Reunión de seguimiento conjunta a las 4 semanas
- Observación del clima del equipo en las semanas posteriores

## Cuándo Escalar a RRHH o a Dirección

La mediación no siempre es suficiente. Escala cuando:

| Situación | Acción |
|---|---|
| Hay acusaciones de acoso o discriminación | Protocolo formal de RRHH inmediatamente |
| Una de las partes no quiere participar | Escalado a HRBP y comunicación de consecuencias |
| El conflicto afecta al cliente o a resultados críticos | Escalado urgente con plan de contingencia |
| Las partes llegan al acuerdo pero no lo cumplen | Proceso disciplinario formal |

## Prevención de Conflictos: El Sistema Proactivo

Los mejores conflictos son los que no escalan. Implementa:

**1. Team agreements:** Acuerdo escrito de cómo trabaja el equipo (comunicación, toma de decisiones, reuniones)
**2. 1:1 regulares:** Los problemas se detectan en conversaciones frecuentes antes de que exploten
**3. Retrospectivas de equipo:** Espacio seguro para hablar de lo que no funciona
**4. Feedback continuo:** Equipos donde se da feedback regularmente tienen menos conflictos acumulados

## Entregables

Con el contexto que me des, produce:
1. Plan de mediación paso a paso para el conflicto específico que me describas
2. Guión de las conversaciones de pre-mediación (preguntas clave por parte)
3. Plantilla de acuerdo de resolución firmable por ambas partes
4. Comunicación al equipo sobre la situación (sin revelar detalles personales)
5. Plan de prevención: team agreements adaptados a tu equipo
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar y mediar un conflicto interpersonal en el equipo siguiendo un protocolo estructurado de 5 fases',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de inversiones en activos fijos — CAPEX, ROI y comprar vs. arrendar',
                'description'      => 'Aprende a evaluar inversiones en maquinaria, inmuebles y equipamiento: cálculo del ROI, análisis de CAPEX vs. OPEX y el modelo de decisión comprar vs. arrendar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en análisis de inversiones y decisiones de activos fijos en empresas industriales y de servicios. Necesito evaluar una inversión en activos fijos de forma rigurosa.

## Diagnóstico inicial

Antes de empezar, hazme estas preguntas:
1. ¿Qué tipo de activo estás evaluando? (maquinaria, vehículos, inmuebles, tecnología, equipamiento)
2. ¿Cuál es el coste de adquisición estimado?
3. ¿Cuál es la vida útil esperada del activo?
4. ¿Tienes datos del impacto en ingresos o ahorro de costes que generará?
5. ¿Existe una alternativa de arrendamiento o leasing disponible?

## Marco de Análisis de Inversiones en Activos Fijos

Una inversión en activos fijos debe evaluarse siempre con al menos tres metodologías complementarias:

### 1. Período de Retorno (Payback Period)

El tiempo que tarda la inversión en recuperarse con los flujos de caja generados.

```
Payback = Inversión inicial / Flujo de caja anual promedio
```

**Limitaciones:** No tiene en cuenta el valor del dinero en el tiempo ni los flujos más allá del payback. Úsalo como primer filtro, no como criterio único.

**Referencia orientativa:**
| Tipo de activo | Payback aceptable |
|---|---|
| Maquinaria industrial | 3-5 años |
| Vehículos de flota | 2-4 años |
| Inmuebles productivos | 7-15 años |
| Tecnología y software | 1-3 años |

### 2. VAN (Valor Actual Neto)

Descuenta todos los flujos de caja futuros al presente usando la tasa de descuento de la empresa (WACC o coste de capital).

```
VAN = Σ [FCt / (1 + r)^t] - Inversión inicial
```

Donde:
- FCt = Flujo de caja en el período t
- r = Tasa de descuento (WACC de la empresa)
- t = Período (años)

**Interpretación:**
| VAN | Decisión |
|---|---|
| > 0 | La inversión crea valor → invertir |
| = 0 | La inversión cubre exactamente el coste de capital |
| < 0 | La inversión destruye valor → no invertir o replantear |

### 3. TIR (Tasa Interna de Retorno)

Es la tasa de descuento que hace que el VAN sea igual a cero. Compara con el WACC:

| Relación | Decisión |
|---|---|
| TIR > WACC | La inversión genera más que el coste del capital → invertir |
| TIR = WACC | Punto de indiferencia |
| TIR < WACC | La inversión no cubre el coste del capital → no invertir |

## Ejemplo de Análisis Completo

**Caso: Maquinaria industrial por 150.000€**

| Año | Flujo de caja | Factor descuento (8%) | FC descontado |
|---|---|---|---|
| 0 (inversión) | -150.000€ | 1,000 | -150.000€ |
| 1 | 45.000€ | 0,926 | 41.667€ |
| 2 | 45.000€ | 0,857 | 38.580€ |
| 3 | 45.000€ | 0,794 | 35.722€ |
| 4 | 45.000€ | 0,735 | 33.075€ |
| 5 | 45.000€ + 10.000€ (valor residual) | 0,681 | 37.432€ |
| **VAN** | | | **+36.476€** ✅ |

Payback: 150.000 / 45.000 = 3,3 años

## Decisión Comprar vs. Arrendar (Leasing)

Esta decisión no es solo financiera: involucra gestión de riesgo, flexibilidad y liquidez.

**Factores que favorecen COMPRAR:**
- El activo será usado intensivamente durante toda su vida útil
- Hay un mercado de segunda mano (valor residual real)
- La empresa tiene liquidez o acceso a crédito barato
- El activo es estratégico y diferenciador
- Hay beneficios fiscales en la amortización (acelerada)

**Factores que favorecen ARRENDAR:**
- El activo puede quedar obsoleto tecnológicamente
- La empresa prefiere preservar liquidez para inversión operativa
- Hay incertidumbre sobre el nivel de uso futuro
- El arrendador ofrece mantenimiento incluido
- Las cuotas de leasing son deducibles al 100% como gasto (vs. solo la amortización en compra)

**Modelo de comparación financiera:**

| Concepto | Compra | Leasing operativo |
|---|---|---|
| Desembolso inicial | Alto (precio total o entrada) | Bajo (primera cuota) |
| Impacto en balance | Activo + deuda | Depende de NIIF 16 |
| Deducción fiscal | Amortización anual | Cuota íntegra |
| Flexibilidad al final | Vender en mercado | Devolver, renovar o comprar |
| Riesgo de obsolescencia | Lo asume la empresa | Lo asume (parcialmente) el arrendador |

## CAPEX vs. OPEX: La Decisión de Clasificación

Cada vez más empresas prefieren OPEX a CAPEX por razones de flexibilidad y impacto en los estados financieros:

| Impacto | CAPEX | OPEX |
|---|---|---|
| Balance | ↑ Activos, ↑ Deuda | Sin impacto en activos |
| P&L | Solo amortización cada año | Gasto íntegro en el período |
| EBITDA | Mejor (no afecta) | Peor (gasto es sobre la línea) |
| Cash Flow | Salida concentrada en el año de compra | Salidas distribuidas |
| Aprobación presupuestaria | Requiere aprobación de board | Más fácil de aprobar |

## Análisis de Sensibilidad

Toda inversión debe testarse ante escenarios distintos:

| Escenario | Variable que cambia | Impacto en VAN |
|---|---|---|
| Optimista | +15% en flujos de caja | [calcular] |
| Base | Asunciones originales | [VAN base] |
| Pesimista | -20% en flujos + 1 año más de payback | [calcular] |
| Tasa de descuento sube 2% | WACC al 10% | [calcular] |

Si el VAN sigue siendo positivo en el escenario pesimista, la inversión es robusta.

## Entregables

Con el contexto que me des, produce:
1. Modelo financiero completo (payback, VAN, TIR) para la inversión que me describas
2. Comparativa financiera comprar vs. arrendar con los datos reales
3. Análisis de sensibilidad en 3 escenarios
4. Resumen ejecutivo de la decisión en media página para el Comité de Dirección
5. Checklist de due diligence antes de aprobar la inversión
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Evaluar una inversión en activos fijos con VAN, TIR y payback y decidir entre comprar o arrendar con datos financieros reales',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Resolución de disputas comerciales sin ir a juicio — mediación y arbitraje',
                'description'      => 'Aprende cuándo usar mediación, arbitraje o conciliación para resolver disputas comerciales, y cómo redactar las cláusulas que te permiten elegir el foro desde el contrato.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especialista en resolución alternativa de disputas (ADR) con experiencia en conflictos comerciales B2B. Necesito entender cómo resolver una disputa comercial sin recurrir a los tribunales ordinarios, y cómo preparar mis contratos para tener esta opción disponible.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es la naturaleza de la disputa? (impago, incumplimiento de contrato, defectos de producto, daños y perjuicios)
2. ¿Cuánto dinero está en juego y cuál es la urgencia de resolución?
3. ¿La contraparte está en el mismo país o es una disputa internacional?
4. ¿Existe ya una cláusula de resolución de disputas en el contrato?
5. ¿Qué relación comercial quieres mantener con la otra parte después de resolver?

## El Mapa de Mecanismos de Resolución

| Mecanismo | Quién decide | Carácter | Coste | Tiempo | Confidencialidad |
|---|---|---|---|---|---|
| Negociación directa | Las partes | Voluntario | Muy bajo | Días-semanas | Sí |
| Mediación | Mediador (facilita) | Voluntario | Bajo-Medio | Semanas-meses | Sí |
| Conciliación | Conciliador (propone) | Voluntario | Bajo | Semanas | Sí |
| Arbitraje | Árbitro/Tribunal arbitral | Vinculante | Medio-Alto | Meses-1 año | Sí |
| Tribunales ordinarios | Juez | Vinculante | Variable | 1-5 años | No (público) |

## Mediación: El Primer Recurso

La mediación es el proceso más flexible y preserva mejor la relación comercial.

**Cuándo es la mejor opción:**
- La relación comercial tiene valor y quieres preservarla
- Hay margen para una solución creativa que no sea "todo o nada"
- Ambas partes tienen voluntad de dialogar (aunque sea mínima)
- El asunto implica matices técnicos o comerciales que un juez no conocería

**El proceso de mediación:**

1. **Acuerdo de mediación:** Ambas partes firman el inicio del proceso y las reglas (confidencialidad, honorarios del mediador, plazos)
2. **Posiciones iniciales:** Cada parte presenta su visión por escrito al mediador
3. **Sesiones conjuntas y privadas (caucus):** El mediador alterna entre reuniones conjuntas y privadas con cada parte
4. **Búsqueda de intereses:** El mediador busca los intereses reales detrás de las posiciones declaradas
5. **Acuerdo:** Si se llega a un acuerdo, se documenta en un contrato vinculante entre las partes

**Instituciones de mediación en España:**
- Centro de Mediación de la Cámara de Comercio de Madrid
- SIGNUM (Sección de Mediación de la Corte Española de Arbitraje)
- CEDR España (Centre for Effective Dispute Resolution)

## Arbitraje: Cuando Necesitas una Decisión Definitiva

El arbitraje es el equivalente a un juicio privado: un árbitro (o panel) impone una decisión vinculante.

**Ventajas sobre los tribunales:**
- Confidencialidad total (las sentencias no son públicas)
- Árbitro especializado en la materia (tech, construcción, financiero)
- Plazos más predecibles (6-18 meses vs. 3-5 años en juzgado)
- En arbitraje internacional, el laudo es ejecutable en 150+ países (Convenio de Nueva York)

**Desventajas:**
- Más caro que la mediación (árbitros + institución arbitral)
- Sin posibilidad de apelación (el laudo es final salvo vicios muy graves)
- Para importes pequeños puede no ser rentable

**Árbitro único vs. tribunal de tres árbitros:**
| Cuantía de la disputa | Estructura recomendada |
|---|---|
| < 500.000€ | Árbitro único |
| 500.000€ - 5M€ | Árbitro único o panel de 3 según complejidad |
| > 5M€ | Panel de 3 árbitros |

**Principales instituciones arbitrales:**
- Corte Española de Arbitraje (CEA) — España
- Centro de Arbitraje de la Cámara de Madrid / Barcelona
- ICC (Cámara de Comercio Internacional) — internacional
- LCIA (London Court of International Arbitration) — internacional, common law
- CIMA (Centro Internacional de Mediación y Arbitraje) — Iberoamérica

## Las Cláusulas de Resolución de Disputas en los Contratos

La mejor gestión de conflictos empieza antes de que el conflicto exista.

**Cláusula escalonada (stepped dispute resolution):**
```
RESOLUCIÓN DE DISPUTAS

Las partes intentarán resolver cualquier controversia derivada del presente
contrato mediante negociación directa entre representantes con autoridad
de decisión, en un plazo de [30] días desde la notificación de la disputa.

Si en ese plazo no se alcanzara un acuerdo, cualquiera de las partes podrá
someter la controversia a mediación ante [institución] de acuerdo con su
reglamento vigente. La mediación tendrá una duración máxima de [60] días.

Si la mediación no resolviera la controversia, cualquiera de las partes
podrá someter la disputa a arbitraje administrado por [institución], de
acuerdo con su reglamento, por [un árbitro / tres árbitros]. El arbitraje
se celebrará en [ciudad], en lengua [idioma], y el laudo será definitivo
y vinculante para las partes.
```

**Consideraciones para contratos internacionales:**
| Elemento | Decisión clave |
|---|---|
| Ley aplicable | Elige la ley que mejor conoces o la más neutral |
| Sede del arbitraje | Determina el tribunal de apoyo (seat of arbitration) |
| Idioma | Impacto en costes de traducción y elección de árbitro |
| Institución | ICC para disputas de alta cuantía; CIMA para Iberoamérica |

## Medidas Cautelares Durante el Proceso ADR

El proceso de mediación o arbitraje puede durar meses. Mientras tanto:

**En mediación:** puedes negociar medidas de statu quo (no ejecutar garantías, no publicar información, mantener acceso a sistemas)

**En arbitraje:** los árbitros pueden dictar medidas cautelares con efecto inmediato. En urgencias, la mayoría de reglamentos tienen un procedimiento de árbitro de emergencia (24-48h).

**En paralelo:** puedes solicitar medidas cautelares a los tribunales ordinarios aunque el fondo del asunto sea arbitral.

## Entregables

Con el contexto que me des, produce:
1. Recomendación del mecanismo ADR más adecuado para tu disputa específica con justificación
2. Cláusula escalonada de resolución de disputas adaptada a tu tipo de contrato
3. Carta de notificación de disputa y propuesta de mediación a la contraparte
4. Checklist de preparación para la primera sesión de mediación o arbitraje
5. Evaluación coste-beneficio: ADR vs. tribunales ordinarios para tu caso concreto
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Elegir y ejecutar el mecanismo de resolución alternativa de disputas más adecuado para resolver un conflicto comercial sin juicio',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Reducción del tiempo de resolución (AHT) — técnicas y herramientas de soporte',
                'description'      => 'Aprende a reducir el Average Handle Time de los tickets de soporte sin sacrificar la calidad, usando macros, plantillas, knowledge base y flujos optimizados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en operaciones de Customer Support con experiencia en optimización de métricas de eficiencia en equipos de soporte B2B y B2C. Necesito reducir el tiempo promedio de resolución (AHT — Average Handle Time) sin bajar la calidad de la atención ni el CSAT.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es tu AHT actual y cuál es tu objetivo?
2. ¿Qué herramienta de ticketing usas? (Zendesk, Freshdesk, Intercom, Salesforce Service Cloud)
3. ¿Cuáles son los 5 tipos de ticket más frecuentes y cuánto tiempo llevan en promedio?
4. ¿Tienes ya macros o plantillas de respuesta? ¿Con qué frecuencia se usan?
5. ¿El equipo es mayoritariamente de chat en vivo, email o llamadas?

## Dónde Se Pierde el Tiempo: Diagnóstico de AHT

Antes de optimizar, identifica dónde se va el tiempo. En un ticket típico, el tiempo se distribuye así:

| Fase | % del AHT típico | Oportunidad de mejora |
|---|---|---|
| Lectura y comprensión del ticket | 15% | Knowledge del agente, contexto automático |
| Búsqueda de información (en documentos, KB, sistemas) | 25% | Knowledge base, acceso rápido a datos del cliente |
| Redacción de la respuesta | 30% | Macros, plantillas, sugerencias de IA |
| Verificación en el sistema (cuenta, configuración, historial) | 20% | Integración CRM-ticketing, contexto en sidebar |
| Envío y actualización del ticket | 10% | Automatizaciones, flujos post-resolución |

## Las 5 Palancas de Reducción de AHT

### Palanca 1: Macros y Plantillas de Respuesta

Las macros son el cambio más rápido de implementar con mayor impacto.

**Criterios para crear una macro:**
- El mismo tipo de respuesta se da 3+ veces por semana
- La respuesta tiene más de 100 palabras
- La búsqueda de información para la respuesta lleva más de 2 minutos

**Estructura de una macro efectiva:**
```
Asunto: [Auto] RE: {{ticket.subject}}

Hola {{customer.first_name}},

[Frase de acuse de recibo personalizable - 1 línea]

[Respuesta/solución - con variables de entorno del cliente]

Si tienes alguna duda adicional, estamos aquí para ayudarte.

Un saludo,
{{agent.name}}
{{company.support_signature}}
```

**Taxonomía de macros (organización por categorías):**
| Categoría | Ejemplos de macro |
|---|---|
| Facturación | Cambio de plan, solicitud de factura, proceso de cancelación |
| Técnico | Restablecer contraseña, limpiar caché, exportar datos |
| Onboarding | Cómo empezar, configuración inicial, primeros pasos |
| Escalado | Cómo escalar un bug, tiempos de respuesta del equipo técnico |
| Cierre | Resolución confirmada, sin respuesta (follow-up y cierre) |

### Palanca 2: Knowledge Base Integrada en el Flujo de Trabajo

El agente no debería salir del ticketing tool para buscar información.

**Integraciones que reducen el tiempo de búsqueda:**
- Sidebar con artículos de KB sugeridos automáticamente según el tema del ticket
- Botón "insertar artículo de KB" directamente en la respuesta
- Integración de Confluence/Notion en el sidebar para procedimientos internos

### Palanca 3: Contexto Automático del Cliente

El agente que llega a un ticket sin contexto pierde 3-5 minutos reconstruyendo la situación.

**Información que debe aparecer automáticamente en el sidebar:**
- Plan actual y fecha de renovación
- Historial de los últimos 5 tickets
- Última interacción (fecha y canal)
- Variables de salud del cliente (NPS, uso del producto, días sin login)
- CSM asignado (para cuentas enterprise)

### Palanca 4: IA para Sugerencias de Respuesta

Las plataformas modernas de ticketing integran IA que sugiere respuestas o responde automáticamente en casos simples.

| Herramienta | Capacidad | Nivel de autonomía |
|---|---|---|
| Zendesk AI (Intelligent Triage) | Clasifica y enruta automáticamente | Baja (apoyo al agente) |
| Intercom Fin | Resuelve tickets sencillos con IA generativa | Media (deflexión completa) |
| Freshdesk Freddy | Sugiere respuestas, auto-triage | Baja-Media |
| Helpdesk GPT custom | Respuestas con base en KB propia | Configurable |

**Regla de oro:** La IA no debe responder sola en casos complejos, de alto valor o con historial de frustración. El agente humano siempre tiene la última palabra.

### Palanca 5: Optimización del Flujo Post-Resolución

El tiempo después de resolver el ticket también cuenta: actualización de campos, tags, notas internas.

**Automatizaciones que ahorran tiempo:**
- Auto-tag basado en palabras clave del ticket
- Auto-cierre de tickets resueltos sin respuesta tras 72h
- Plantilla de nota interna estándar para escalados
- Webhook a CRM cuando el ticket involucra churn risk

## Métricas de Control: No Sacrifiques Calidad por Velocidad

| Métrica | Qué mide | Señal de alerta |
|---|---|---|
| AHT | Tiempo total de resolución | Comparar con CSAT: si AHT baja y CSAT también baja, hay problema |
| CSAT | Satisfacción del cliente con la resolución | < 85% en cualquier período de 2 semanas |
| FCR (First Contact Resolution) | % de tickets resueltos en el primer contacto | Si FCR baja al bajar AHT, las respuestas son incompletas |
| Reopen rate | % de tickets que vuelven a abrirse | > 5% indica resoluciones superficiales |
| Quality Score | Puntuación en revisión de calidad interna | Mantener estándar aunque AHT baje |

## Plan de Implementación en 4 Semanas

| Semana | Acción | Impacto esperado en AHT |
|---|---|---|
| 1 | Auditar los 10 tickets más frecuentes y crear macros para ellos | -10-15% |
| 2 | Integrar KB en el sidebar del ticketing tool | -5-8% |
| 3 | Configurar contexto automático del cliente en el sidebar | -5-10% |
| 4 | Formación del equipo en uso de macros y nuevas integraciones | Consolida mejoras |

## Entregables

Con el contexto que me des, produce:
1. Diagnóstico de dónde se pierde el tiempo en tu flujo actual (basado en los datos que me des)
2. Biblioteca inicial de 10 macros para los ticket types más frecuentes de tu empresa
3. Checklist de configuración del sidebar de contexto del cliente
4. Plan de implementación de 4 semanas con responsables y KPIs de control
5. Plantilla de quality scorecard para medir que la calidad no baje al reducir el AHT
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Reducir el AHT del equipo de soporte en un 20-30% implementando macros, contexto automático e integraciones sin bajar el CSAT',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Negociación de tarifas en renovaciones — sube el precio con clientes existentes',
                'description'      => 'Aprende a negociar la subida de tarifas con clientes existentes en la renovación: cuándo hacerlo, cómo comunicarlo y cómo gestionar la conversación sin perder al cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio especializado en freelancers y profesionales independientes con experiencia en negociación de tarifas y retención de clientes. Necesito ayuda para subir mis tarifas con clientes existentes en el momento de la renovación sin que sea una conversación incómoda ni arriesgue la relación.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuánto tiempo llevas trabajando con el cliente y cuál es el volumen de trabajo?
2. ¿Cuánto quieres subir la tarifa y en qué te basas? (inflación, valor de mercado, valor aportado)
3. ¿Cuándo es la próxima renovación o revisión natural del acuerdo?
4. ¿Cuál es tu nivel de dependencia de este cliente (% de tus ingresos totales)?
5. ¿Ha habido cambios en el alcance o responsabilidades desde el inicio del proyecto?

## Por Qué Cuesta Subir el Precio a Clientes Existentes

Los freelancers que no suben precios a clientes existentes enfrentan el "congelamiento de tarifa": cada año que pasa sin subir es un año de reducción real de ingresos (inflación) y un cliente que no reconoce el crecimiento de tu valor.

**La paradoja del cliente existente:**
- Los clientes nuevos aceptan tu tarifa actualizada sin problema
- Los clientes existentes son los más difíciles de subir… y los más rentables de conservar (sin coste de adquisición)

**La causa real del miedo:** No es el cliente, es la falta de preparación y de un marco de conversación claro.

## Cuándo Subir el Precio: Los Momentos de Renovación

Elige siempre un momento de transición natural:

| Momento | Por qué funciona |
|---|---|
| Fin de contrato / retainer | Es el momento "normal" de revisar condiciones |
| Inicio de nuevo proyecto | Nueva propuesta, nueva tarifa |
| Ampliación del alcance | Pides más = vale más |
| Aniversario (12 meses) | El cliente ya sabe cómo trabajáis juntos |
| Después de un gran éxito | Justo cuando el cliente siente el valor más |

**Cuándo NO subir el precio:**
- En mitad de un proyecto crítico con deadline próximo
- Justo después de un problema o queja del cliente
- Sin avisar con antelación suficiente (mínimo 30 días)

## La Preparación: Tu Argumento es el Valor Entregado

Antes de la conversación, construye tu caso:

**1. Inventario de valor entregado:**
Haz una lista de los resultados concretos que has generado desde el inicio del proyecto:
- Proyectos completados a tiempo y en scope
- Problemas que has resuelto que no estaban en el contrato original
- Habilidades nuevas que has desarrollado para este cliente
- Ahorro de tiempo o dinero que has generado
- Resultados de negocio en los que tu trabajo ha contribuido

**2. Benchmarking de mercado:**
¿Cuánto cobra alguien con tu perfil y experiencia actual por este tipo de trabajo?
- Plataformas de referencia: Malt, Toptal, LinkedIn salary insights
- Grupos de freelancers de tu sector (lo que cuentan compañeros)
- Tus propias propuestas a nuevos clientes (precio de mercado actual)

**3. El % de subida y cómo justificarlo:**

| Justificación | Rango de subida razonable |
|---|---|
| Inflación anual (IPC) | 3-5% |
| Aumento de experiencia y capacidades | 5-10% |
| Aumento de demanda del mercado | 10-15% |
| Cambio sustancial de scope o responsabilidades | 20-30% |
| No he subido en 2+ años | Ajuste acumulado + mercado |

## El Guión de la Conversación

**Estructura de la conversación:**

**1. Abre con el valor (no con el precio):**
"[Nombre], hemos llegado al momento de renovar nuestra colaboración y quería tener esta conversación contigo de forma transparente, que es como me gusta trabajar."

**2. Hace el inventario de valor (rápido, 2 minutos):**
"En los últimos [X meses], hemos conseguido juntos [resultados concretos]. Me alegra mucho cómo ha evolucionado el trabajo."

**3. Anuncia la subida con confianza (no pidas disculpas):**
"A partir de [fecha], voy a actualizar mis tarifas. Para nuestra colaboración, esto supone pasar de [X] a [Y], un ajuste del [%]. Esto refleja tanto la evolución del mercado como el nivel de trabajo y responsabilidad que hemos construido juntos."

**4. Silencio.** Deja que el cliente responda. No llenes el silencio con justificaciones adicionales.

**5. Gestiona la respuesta:**

| Respuesta del cliente | Tu respuesta |
|---|---|
| "De acuerdo, sin problema" | "Perfecto, te envío el acuerdo actualizado" |
| "Es mucho, ¿podemos negociar?" | "¿Qué rango te funciona? Trabajemos desde ahí" |
| "Necesito pensarlo" | "Claro, dime hasta cuándo lo necesitas. La fecha límite para confirmar es [fecha]" |
| "No podemos permitírnoslo" | "Entiendo. Si el presupuesto es el factor, podemos ver si ajustamos el scope" |

## Tácticas Específicas de Negociación

**Si el cliente negocia a la baja:**
1. Primero: reduce el scope (no el precio). "Podemos mantener la tarifa anterior si reducimos el trabajo a [menos horas / menos entregables]"
2. Segundo: ofrece un escalonado. "Podemos hacer la subida en dos fases: [X%] ahora y [Y%] en 6 meses"
3. Tercero: acepta un precio intermedio si el cliente tiene un argumento sólido (no solo "es mucho")

**El precio mínimo de no negociación:**
Antes de la conversación, define mentalmente el precio por debajo del cual no trabajarás. Si el cliente no llega a ese precio, déjalo ir. Un cliente que no valora tu trabajo adecuadamente ocupa el espacio que necesitas para un cliente que sí lo hace.

## Cómo Perder el Miedo a Perder al Cliente

El cliente que se va por una subida razonable probablemente:
- No era sostenible a largo plazo
- Te habría dado problemas en otra negociación
- Habría seguido consumiendo tu tiempo por debajo de tu valor real

El cliente que se queda después de la subida:
- Te valora de verdad
- Es más fácil de trabajar
- Referirá otros clientes que también valoran la calidad

**La regla del 20%:** Si subes los precios y pierdes el 20% de los clientes pero el 80% restante paga más, probablemente hayas mejorado tus ingresos netos y reducido tu carga de trabajo.

## Entregables

Con el contexto que me des, produce:
1. Inventario de valor entregado para el cliente que me describas (lista lista para usar en la conversación)
2. Guión completo de la conversación de renovación adaptado a tu situación
3. Tabla de respuestas a las 5 objeciones más comunes
4. Email de comunicación de subida de tarifa (si la conversación es por escrito)
5. Evaluación: ¿deberías subir el precio, reducir el scope o terminar la relación con este cliente?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Negociar la subida de tarifas con clientes existentes en la renovación usando un guión estructurado y técnicas de gestión de objeciones',
                'vote_score'       => 36,
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
