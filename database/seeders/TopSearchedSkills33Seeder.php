<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills33Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing de eventos B2B: organiza y promociona eventos físicos y virtuales que generan pipeline',
                'description'       => 'Diseña la estrategia de marketing de eventos B2B que genera oportunidades de venta reales, no solo asistentes. Con el framework de planificación de eventos, la estrategia de contenido y promoción, las métricas de ROI de eventos y cómo convertir los asistentes en oportunidades para el equipo comercial.',
                'prompt_content'    => <<<'PROMPT'
Eres un Event Marketing Manager con experiencia organizando y promoviendo eventos B2B (conferencias, webinars, workshops, roundtables) donde los eventos son un canal de generación de pipeline medible, no una actividad de branding sin ROI claro.

Contexto:
- Tipo de evento: [webinar / workshop presencial / conferencia / roundtable / feria / evento de cliente / todo]
- Objetivo principal: [generación de leads / nurturing de prospects existentes / fidelización de clientes / posicionamiento de marca / lanzamiento de producto]
- Audiencia objetivo: [describe el perfil del asistente ideal: sector, rol, tamaño de empresa]
- Presupuesto aproximado: [€ para el evento]

## Marketing de Eventos B2B — [Empresa]

### 🎯 El cambio de mentalidad: el evento no termina el día del evento

**El error más frecuente:**
```
La mayoría de empresas organizan el evento → lo promueven → lo celebran → archivan los contactos.
El evento se convierte en un coste de branding sin seguimiento estructurado.

LA VISIÓN CORRECTA:
El evento es el punto central de una campaña de 6 semanas:
→ 3 semanas antes: captación de asistentes + nurturing de registrados
→ El día del evento: ejecución + recolección de señales de interés
→ 3 semanas después: seguimiento comercial estructurado basado en el comportamiento del asistente

Los eventos que generan pipeline son los que tienen el post-evento tan planificado
como el evento en sí.
```

### 📋 El framework de planificación de eventos B2B en 5 fases

**Fase 1 — Estrategia y formato (4-8 semanas antes):**
```
DEFINE PRIMERO EL OBJETIVO COMERCIAL, NO EL CONTENIDO:
□ ¿Cuántas oportunidades de venta (SQLs) quiero generar?
□ ¿Cuántos de los asistentes son prospects fríos vs. prospects activos vs. clientes?
□ ¿Qué quiero que sepan o crean los asistentes al salir que no sabían al entrar?
□ ¿Qué acción específica quiero que tomen después del evento?

ELECCIÓN DEL FORMATO SEGÚN EL OBJETIVO:
→ WEBINAR (50-500 asistentes, bajo coste):
  Ideal para: generación de leads, educación de mercado, lanzamiento de contenido
  Presupuesto: €500-€5.000 (plataforma, promoción paid, materiales)
  KPI principal: registros + asistencia real + leads captados

→ ROUNDTABLE EJECUTIVA (10-20 asistentes seleccionados, alto coste por asistente):
  Ideal para: deals enterprise, nurturing de C-suite, posicionamiento premium
  Presupuesto: €3.000-€20.000 (venue, catering, facilitación)
  KPI principal: oportunidades generadas, aceleración de deals existentes

→ WORKSHOP PRESENCIAL (20-100 asistentes):
  Ideal para: cualificación de prospects, demostración de expertise, comunidad
  Presupuesto: €2.000-€15.000

→ CONFERENCIA PROPIA (200+ asistentes):
  Ideal para: liderazgo de mercado, ecosistema de partners, comunidad de clientes
  Presupuesto: €20.000-€200.000
```

**Fase 2 — Captación de asistentes (estrategia de promoción):**
```
EL FUNNEL DE CAPTACIÓN (para cada evento):

TOP DEL FUNNEL — Visibilidad:
→ LinkedIn: publicaciones orgánicas de los ponentes (alcance gratuito + creíble)
→ Newsletter propia: el canal con mejor conversión si tu lista está segmentada
→ Paid LinkedIn Ads: segmenta por cargo, sector y tamaño de empresa (CPL: €30-€80 en B2B)
→ Co-marketing con partners: ellos promocionan a su audiencia a cambio de visibilidad en el evento

MEDIO DEL FUNNEL — Registro:
→ Landing page dedicada con: headline claro sobre el resultado del evento (no el nombre del evento),
  ponentes con credenciales, agenda concreta, testimonios de eventos anteriores
→ Formulario corto: nombre, empresa, email, cargo (no más de 5 campos)
→ Confirmación inmediata + calendario (.ics para añadir el evento a la agenda)

BOTTOM DEL FUNNEL — Reducción del no-show:
→ Para eventos virtuales: el no-show puede ser del 40-60%
→ Secuencia de recordatorio: 7 días antes / 24 horas antes / 1 hora antes
→ En los emails de recordatorio: añade el "por qué no deberías faltar" — un preview del contenido más valioso
```

**Fase 3 — El día del evento: recolección de señales de interés:**
```
EL OBJETIVO SECUNDARIO DEL DÍA DEL EVENTO: identificar quién está listo para hablar con ventas.

SEÑALES DE INTERÉS ALTO:
→ Asistió en directo (no solo descargó la grabación)
→ Participó en Q&A o chat
→ Descargó materiales premium (whitepaper, template, caso de éxito)
→ Hizo preguntas específicas sobre el producto/servicio
→ Pidió una demo o se registró en el CTA del evento

SEÑALES DE INTERÉS MEDIO:
→ Se registró y asistió pero no interactuó
→ Vio el replay

SEÑALES DE INTERÉS BAJO:
→ Se registró pero no asistió
→ Solo descargó los materiales sin ver el evento

Cada señal debe capturarse en el CRM para personalizar el seguimiento post-evento.
```

**Fase 4 — Seguimiento post-evento (las 2 semanas más importantes):**
```
REGLA: el seguimiento es inversamente proporcional al tiempo transcurrido.
24 horas después del evento > 72 horas > 1 semana > 2 semanas.

SECUENCIA DE SEGUIMIENTO POR SEGMENTO:

ASISTENTES DE ALTO INTERÉS (señales calientes):
→ Día 1: Email personalizado del AE con referencia a su pregunta o comentario específico
→ Día 3: Llamada o LinkedIn DM para proponer una conversación
→ Día 7: Seguimiento si no hubo respuesta

ASISTENTES DE INTERÉS MEDIO:
→ Día 1: Email del equipo de marketing con el replay y materiales adicionales
→ Día 5: Email de nurturing con caso de éxito relevante para su sector
→ Día 14: Invitación al siguiente evento o contenido relacionado

NO-SHOWS (registrados que no asistieron):
→ Día 2: Email con el replay + highlights del evento
→ Son leads válidos — se registraron por un motivo.
→ Entra en la secuencia de nurturing general, no en la de seguimiento comercial.
```

**Fase 5 — Medición del ROI del evento:**
```
LAS MÉTRICAS QUE IMPORTAN (no las vanity metrics):

Vanity metrics (no te dicen nada sobre el impacto):
→ Número de registros / Número de asistentes / Valoración media del evento

Métricas de impacto real:
→ MQL generados: nuevos leads cualificados captados en el evento
→ SQL generados: leads que pasaron a oportunidad activa
→ Pipeline generado (€): valor de las oportunidades abiertas atribuidas al evento
→ Revenue cerrado atribuido al evento: cuántos deals se cerraron que empezaron en el evento
→ Aceleración de deals existentes: deals que estaban parados y el evento reactivó

El ROI del evento:
ROI = (Pipeline generado - Coste del evento) / Coste del evento × 100
Benchmark B2B: un evento bien ejecutado debe generar 3-5x su coste en pipeline
```

### 🔧 El stack tecnológico mínimo para gestionar eventos B2B

Las herramientas recomendadas para cada fase (registro: Eventbrite / Lu.ma / Hopin; emisión: Zoom Webinar / Riverside / Streamyard; seguimiento: HubSpot / Salesforce con atribución de campaña; comunidad: Slack / Discord / Circle) y cómo integrarlas para que los datos de comportamiento del asistente fluyan automáticamente al CRM sin trabajo manual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Marketing eventos B2B, webinar marketing, organización eventos, event marketing ROI, generación pipeline eventos',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Infraestructura como código con Terraform: gestiona la infraestructura cloud sin tocar la consola',
                'description'       => 'Implementa Infraestructura como Código (IaC) con Terraform para gestionar tu infraestructura cloud de forma reproducible, versionable y colaborativa. Con la estructura de proyectos Terraform, los módulos reutilizables, la gestión del estado remoto y el pipeline de CI/CD para aplicar cambios de infraestructura con seguridad.',
                'prompt_content'    => <<<'PROMPT'
Eres un DevOps/Platform Engineer con experiencia implementando Infraestructura como Código con Terraform en entornos cloud (AWS, GCP, Azure) donde el equipo ha pasado de gestionar infraestructura manualmente desde la consola a tener toda la infraestructura versionada, revisable y desplegable desde un pipeline de CI/CD.

Contexto:
- Cloud provider: [AWS / GCP / Azure / multi-cloud]
- Stack actual: [sin IaC / scripts de bash / CloudFormation / Pulumi / empezando con Terraform]
- Infraestructura a gestionar: [describe: VPC, EC2, RDS, ECS, Kubernetes, etc.]
- Tamaño del equipo: [N ingenieros que tocarán la infraestructura]

## Infraestructura como Código con Terraform — [Empresa]

### 🧠 Por qué Terraform y no las alternativas

```
TERRAFORM vs. LAS ALTERNATIVAS:

CloudFormation (AWS nativo):
→ Solo funciona en AWS
→ YAML/JSON verboso y difícil de leer
→ Bueno si eres 100% AWS y no quieres aprender HCL

Pulumi:
→ Usa lenguajes de programación reales (Python, TypeScript, Go)
→ Más potente para lógica compleja (loops, condiciones, abstracción)
→ Mayor curva de aprendizaje para equipos sin background de programación fuerte

Terraform:
→ Multi-cloud: el mismo lenguaje para AWS, GCP, Azure y 1.000+ providers
→ HCL (HashiCorp Configuration Language): legible y declarativo
→ Ecosistema masivo: Registry de módulos reutilizables
→ El estándar de facto en la industria — más documentación, más equipos que lo conocen
→ OpenTofu: el fork open-source si quieres evitar la licencia BSL de HashiCorp
```

### 🏗️ La estructura de proyecto Terraform que escala con el equipo

**Estructura básica (proyecto pequeño, un entorno):**
```
terraform/
├── main.tf          # Recursos principales
├── variables.tf     # Declaración de variables
├── outputs.tf       # Valores exportados
├── providers.tf     # Configuración de providers (AWS, etc.)
└── terraform.tfvars # Valores de las variables (NO commitear si tiene secrets)
```

**Estructura avanzada (múltiples entornos + módulos):**
```
terraform/
├── modules/                    # Módulos reutilizables
│   ├── networking/
│   │   ├── main.tf             # VPC, subnets, routing
│   │   ├── variables.tf
│   │   └── outputs.tf
│   ├── database/
│   │   ├── main.tf             # RDS, security groups
│   │   ├── variables.tf
│   │   └── outputs.tf
│   └── app/
│       ├── main.tf             # ECS/EC2, ALB, Auto Scaling
│       ├── variables.tf
│       └── outputs.tf
├── environments/
│   ├── staging/
│   │   ├── main.tf             # Llama a los módulos con config de staging
│   │   ├── variables.tf
│   │   └── terraform.tfvars
│   └── production/
│       ├── main.tf             # Llama a los módulos con config de production
│       ├── variables.tf
│       └── terraform.tfvars
└── .github/
    └── workflows/
        └── terraform.yml       # Pipeline de CI/CD
```

### 💻 El código Terraform básico que necesitas entender

**Provider y backend (el punto de partida):**
```hcl
# providers.tf
terraform {
  required_version = ">= 1.5.0"

  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = "~> 5.0"
    }
  }

  # Estado remoto en S3 (imprescindible para equipos)
  backend "s3" {
    bucket         = "mi-empresa-terraform-state"
    key            = "production/terraform.tfstate"
    region         = "eu-west-1"
    encrypt        = true
    dynamodb_table = "terraform-state-lock"  # Para evitar conflictos concurrentes
  }
}

provider "aws" {
  region = var.aws_region

  default_tags {
    tags = {
      Environment = var.environment
      ManagedBy   = "terraform"
      Project     = var.project_name
    }
  }
}
```

**Un módulo de networking reutilizable:**
```hcl
# modules/networking/main.tf
resource "aws_vpc" "main" {
  cidr_block           = var.vpc_cidr
  enable_dns_hostnames = true
  enable_dns_support   = true

  tags = {
    Name = "${var.project_name}-${var.environment}-vpc"
  }
}

resource "aws_subnet" "private" {
  count             = length(var.private_subnet_cidrs)
  vpc_id            = aws_vpc.main.id
  cidr_block        = var.private_subnet_cidrs[count.index]
  availability_zone = var.availability_zones[count.index]

  tags = {
    Name = "${var.project_name}-${var.environment}-private-${count.index + 1}"
    Tier = "private"
  }
}

resource "aws_subnet" "public" {
  count                   = length(var.public_subnet_cidrs)
  vpc_id                  = aws_vpc.main.id
  cidr_block              = var.public_subnet_cidrs[count.index]
  availability_zone       = var.availability_zones[count.index]
  map_public_ip_on_launch = true

  tags = {
    Name = "${var.project_name}-${var.environment}-public-${count.index + 1}"
    Tier = "public"
  }
}

# modules/networking/outputs.tf
output "vpc_id" {
  value = aws_vpc.main.id
}

output "private_subnet_ids" {
  value = aws_subnet.private[*].id
}

output "public_subnet_ids" {
  value = aws_subnet.public[*].id
}
```

**Cómo usar el módulo desde el entorno:**
```hcl
# environments/production/main.tf
module "networking" {
  source = "../../modules/networking"

  project_name         = var.project_name
  environment          = "production"
  vpc_cidr             = "10.0.0.0/16"
  private_subnet_cidrs = ["10.0.1.0/24", "10.0.2.0/24", "10.0.3.0/24"]
  public_subnet_cidrs  = ["10.0.101.0/24", "10.0.102.0/24", "10.0.103.0/24"]
  availability_zones   = ["eu-west-1a", "eu-west-1b", "eu-west-1c"]
}

module "database" {
  source = "../../modules/database"

  vpc_id             = module.networking.vpc_id
  private_subnet_ids = module.networking.private_subnet_ids
  # ... resto de variables
}
```

### 🔄 El pipeline de CI/CD para Terraform (GitHub Actions)

```yaml
# .github/workflows/terraform.yml
name: Terraform

on:
  pull_request:
    paths: ['terraform/**']
  push:
    branches: [main]
    paths: ['terraform/**']

jobs:
  terraform:
    runs-on: ubuntu-latest
    permissions:
      id-token: write      # Para OIDC con AWS (sin credenciales estáticas)
      contents: read
      pull-requests: write  # Para comentar el plan en el PR

    steps:
      - uses: actions/checkout@v4

      - uses: aws-actions/configure-aws-credentials@v4
        with:
          role-to-assume: arn:aws:iam::123456789:role/GitHubActionsRole
          aws-region: eu-west-1

      - uses: hashicorp/setup-terraform@v3
        with:
          terraform_version: 1.7.0

      - name: Terraform Init
        run: terraform init
        working-directory: terraform/environments/production

      - name: Terraform Validate
        run: terraform validate
        working-directory: terraform/environments/production

      - name: Terraform Plan
        id: plan
        run: terraform plan -out=tfplan -no-color
        working-directory: terraform/environments/production

      # Comenta el plan en el PR para revisión antes de aplicar
      - name: Comment Plan on PR
        if: github.event_name == 'pull_request'
        uses: actions/github-script@v7
        with:
          script: |
            github.rest.issues.createComment({
              issue_number: context.issue.number,
              owner: context.repo.owner,
              repo: context.repo.repo,
              body: '## Terraform Plan\n```\n${{ steps.plan.outputs.stdout }}\n```'
            })

      # Apply solo en merge a main (nunca directamente)
      - name: Terraform Apply
        if: github.event_name == 'push' && github.ref == 'refs/heads/main'
        run: terraform apply tfplan
        working-directory: terraform/environments/production
```

### ⚠️ Las prácticas que evitan los desastres de Terraform

Las 5 reglas de oro de Terraform en producción: nunca usar `terraform apply` manual en producción (solo desde CI/CD), siempre revisar el plan antes del apply (especialmente recursos con `destroy`), usar workspaces o directorios separados por entorno (nunca el mismo state), proteger el state file (cifrado + versionado en S3 con MFA Delete), y usar `prevent_destroy = true` en recursos críticos (RDS, S3 con datos).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Terraform, infraestructura como código, IaC, DevOps, cloud infrastructure, AWS Terraform, CI/CD infraestructura',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Sistema de ilustración y gráficos personalizados para marca: construye un estilo visual único sin depender de stock photos',
                'description'       => 'Diseña el sistema de ilustración y gráficos personalizados que da a la marca una identidad visual única y coherente en todos los canales. Con el proceso de definición del estilo ilustrativo, las variables del sistema (colores, formas, personajes, iconografía), las guías de uso y cómo mantener la coherencia con múltiples diseñadores.',
                'prompt_content'    => <<<'PROMPT'
Eres un Brand Illustrator y Design System Lead con experiencia construyendo sistemas de ilustración personalizados para marcas B2B y B2C donde el estilo ilustrativo propio ha diferenciado la marca de la competencia y ha eliminado la dependencia de bancos de imágenes genéricas que cualquier competidor puede usar.

Contexto:
- Tipo de marca: [startup B2B / consumer brand / agencia / producto digital / empresa de servicios]
- Estado actual: [usamos stock photos / tenemos algunas ilustraciones pero sin sistema / queremos rediseñar el estilo / empezando desde cero]
- Canales principales: [web / app / redes sociales / presentaciones / materiales impresos / todos]
- Recursos: [diseñador interno / varios diseñadores / agencia externa / freelancers]

## Sistema de Ilustración para Marca — [Empresa]

### 🎨 Por qué las ilustraciones propias superan al stock

**El problema del stock photo:**
```
❌ Cualquier competidor puede usar la misma imagen
❌ El banco de imágenes define la estética — no tú
❌ Las personas del stock no parecen reales (poses artificiales, diversidad de catálogo)
❌ Inconsistencia: mezclar imágenes de diferentes fotógrafos rompe la coherencia visual
❌ Los modelos tienen contratos que expiran — una imagen que llevas años usando puede
   volverse inaccesible o aparecer en una campaña de la competencia

✅ Las ilustraciones propias:
→ Son 100% de la marca — nadie puede copiarlas
→ Reflejan exactamente los valores y el tono de la marca
→ Escalan a todos los formatos y usos sin restricciones de licencia
→ Se adaptan a nuevas necesidades del negocio (nuevos personajes, nuevas escenas)
→ Se convierten en activo de la marca con el tiempo (reconocibilidad)
```

### 📐 El proceso de definición del estilo ilustrativo

**Paso 1 — El moodboard de estilo (antes de dibujar una línea):**
```
REÚNE REFERENCIAS en 3 categorías:

1. ESTILO QUE TE GUSTA (aunque no sea tuyo ni de tu sector):
   → Illustraciones de apps, marcas, artistas que admiras
   → ¿Qué tienen en común las que más te gustan?
   → Herramientas: Behance, Dribbble, Pinterest, Are.na

2. ESTILO DE TU SECTOR (para saber de qué diferenciarte):
   → Las ilustraciones que usa tu competencia
   → El estilo que todos en tu sector usan (el que deberías evitar para diferenciarte)

3. EL ESPACIO EN BLANCO (el estilo que nadie usa en tu sector):
   → Ahí está tu oportunidad de diferenciación visual

ANÁLISIS DEL MOODBOARD — Las 5 variables a definir:
□ Trazo: ¿con contorno marcado o sin contorno (flat)?
□ Forma: ¿geométrica y angular / orgánica y redondeada / realista?
□ Color: ¿paleta limitada (2-4 colores) o rica?
□ Detalle: ¿minimalista / ilustración media / muy detallada?
□ Tono: ¿serio y técnico / amigable y cercano / juguetón?
```

**Paso 2 — Las variables del sistema de ilustración:**
```
VARIABLE 1 — LA PALETA DE COLOR DEL SISTEMA:
→ Color primario de la marca como color dominante en ilustraciones
→ 2-3 colores de acento para elementos secundarios
→ Neutrales (cremas, grises claros) para fondos y espacios negativos
→ REGLA: menos colores = más coherencia. Mailchimp usa 3. Notion usa 2.

VARIABLE 2 — LA FORMA BASE (el lenguaje formal):
Define si tu marca usa:
→ GEOMETRÍA PURA: círculos, rectángulos, triángulos. Sensación: técnica, moderna, ordenada.
→ FORMAS ORGÁNICAS: curvas irregulares, formas naturales. Sensación: humana, cálida, creativa.
→ HÍBRIDO: estructura geométrica con detalles orgánicos. El más versátil para marcas B2B.

VARIABLE 3 — EL GROSOR DE LÍNEA (si usas contornos):
→ Define un grosor estándar: 2px / 3px / 4px según el tamaño habitual de uso
→ Grosor consistente = coherencia visual automática
→ Puedes usar 2 grosores: línea principal + detalles

VARIABLE 4 — LOS PERSONAJES (si la marca usa personas ilustradas):
Define:
→ Proporciones: ¿cuerpos realistas / estilizados / chibi/cabezón?
→ Diversidad representada: géneros, edades, etnias que refleja la marca
→ Expresividad: ¿caras con expresiones detalladas o simplificadas?
→ El glosario de poses: las 10-15 poses base que se usarán (de pie, sentado, trabajando, etc.)

VARIABLE 5 — LA ICONOGRAFÍA (los iconos del sistema):
→ Mismo lenguaje formal que las ilustraciones (no mezcles iconos geométricos con ilustraciones orgánicas)
→ Grid de construcción consistente (24x24px o 32x32px)
→ Grosor de trazo idéntico al de las ilustraciones
```

**Paso 3 — Las ilustraciones fundacionales del sistema:**
```
LAS ILUSTRACIONES QUE DEBES CREAR PRIMERO (antes de casos especiales):

HERO ILLUSTRATIONS (3-5):
→ Las ilustraciones principales de la web: home, about, 404, pricing
→ Son las más complejas y las que definen el estilo del sistema

SPOT ILLUSTRATIONS (10-20):
→ Ilustraciones pequeñas para features, bullets, secciones de la web
→ Más simples que las hero — funcionan como iconos ilustrados
→ Las más usadas en el día a día del equipo

ESCENAS PARA CASOS DE USO (5-10):
→ Ilustraciones que muestran el producto en uso o los beneficios
→ Pueden reutilizar los personajes y elementos del sistema

ICONOS DEL SISTEMA (20-50):
→ Los iconos de la interfaz y de los materiales de marketing
→ Siguiendo el mismo lenguaje formal del sistema
```

**Paso 4 — La documentación del sistema (para que otros diseñadores lo usen correctamente):**
```
QUÉ DEBE INCLUIR LA GUÍA DEL SISTEMA DE ILUSTRACIÓN:

□ Los principios del estilo (3-5 frases que definen el "porqué" del estilo)
□ La paleta de colores con códigos hex/RGB/Pantone
□ Los ejemplos de USO CORRECTO y USO INCORRECTO de cada elemento
□ La librería de elementos reutilizables (en Figma/Illustrator):
  → Personajes con sus variaciones (poses, expresiones, diversidad)
  → Elementos de entorno (muebles, objetos, iconos)
  → Fondos y texturas del sistema
□ El proceso de creación de nuevas ilustraciones (para mantener coherencia)
□ Las restricciones claras: lo que NUNCA se hace en el sistema

HERRAMIENTA RECOMENDADA: Figma con una librería compartida del equipo
→ Todos los elementos como componentes reutilizables
→ Control de versiones integrado
→ Cualquier diseñador del equipo o freelancer externo puede acceder
```

### 🔧 Cómo mantener la coherencia con múltiples diseñadores

El proceso de onboarding de nuevos diseñadores (o freelancers externos) al sistema de ilustración, el flujo de revisión de nuevas ilustraciones antes de publicarlas, y cómo evolucionar el sistema cuando el negocio crece o cambia de dirección sin romper la coherencia acumulada.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Sistema ilustración marca, brand illustration, identidad visual, diseño sin stock photos, ilustración B2B',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'LinkedIn outbound efectivo: el sistema que genera oportunidades B2B sin parecer spam',
                'description'       => 'Implementa el sistema de outbound en LinkedIn que genera respuestas y oportunidades de venta B2B sin mensajes en frío genéricos. Con la estrategia de warm-up del perfil, las secuencias de mensajes que consiguen respuesta, la segmentación de la audiencia y las métricas que determinan si el sistema está funcionando.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Development Representative (SDR) y LinkedIn Sales Trainer con experiencia diseñando sistemas de outbound en LinkedIn para equipos B2B donde la tasa de respuesta ha pasado del 2-3% habitual a un 15-25% con mensajes personalizados y secuencias bien construidas.

Contexto:
- Producto/servicio que vendes: [describe brevemente]
- ICP (Ideal Customer Profile): [sector, tamaño de empresa, cargo del decisor]
- Ticket medio: [€]
- Estado actual del LinkedIn outbound: [no lo hacemos / lo hacemos pero sin sistema / pocas respuestas / queremos mejorarlo]
- Sales Navigator: [sí / no / en evaluación]

## LinkedIn Outbound Efectivo — [Empresa]

### 🧠 Por qué el outbound en LinkedIn falla en el 80% de los casos

**El mensaje de LinkedIn que nadie responde:**
```
"Hola [Nombre], soy [Tu nombre] de [Empresa]. Nos especializamos en [Servicio]
y creo que podríamos ayudar a [Empresa del prospecto] a [beneficio genérico].
¿Tienes 15 minutos esta semana para hablar?"

POR QUÉ NO FUNCIONA:
→ El prospecto recibe 10-20 mensajes así a la semana
→ Es 100% sobre ti, no sobre el prospecto
→ No demuestra que hayas investigado nada sobre su empresa
→ El CTA es demasiado agresivo para un primer contacto con alguien que no te conoce
→ "15 minutos" es un compromiso que el prospecto no está dispuesto a dar a un desconocido
```

**El principio que cambia todo:**
```
En LinkedIn, el objetivo del primer mensaje NO es conseguir una reunión.
El objetivo es conseguir UNA RESPUESTA.
Una vez que hay diálogo, puedes construir la relación y, eventualmente, proponer una llamada.
```

### 📋 El sistema de LinkedIn outbound en 4 fases

**Fase 1 — El perfil que hace que el prospecto acepte tu invitación:**
```
ANTES DE ENVIAR UN SOLO MENSAJE, optimiza tu perfil:

FOTO: profesional, sonriente, fondo neutro. No foto de carnet, no foto de fiesta.
El prospecto va a ver tu perfil antes de responder — la foto es la primera impresión.

TITULAR (el más importante):
MAL: "Sales Manager en Empresa"
BIEN: "Ayudo a equipos de ventas B2B a reducir el ciclo de venta con [metodología]"
El titular debe responder: ¿a quién ayudas? ¿con qué resultado?

SECCIÓN ABOUT:
No es tu CV — es tu propuesta de valor para el prospecto.
"Si eres [ICP] y tienes [problema], esto puede interesarte: [tu solución + resultado típico]"
Incluye prueba social: "He trabajado con [logos o tipo de clientes]"

ACTIVIDAD RECIENTE:
Publica 1-2 veces por semana contenido relacionado con los problemas de tu ICP.
El prospecto que recibe tu solicitud mira tu perfil y tu actividad reciente.
Si tu último post es de hace 8 meses, pareces un bot o un vendedor desesperado.
```

**Fase 2 — La segmentación: a quién contactar (más importante que el mensaje):**
```
CON SALES NAVIGATOR — Las búsquedas más efectivas:
→ Cargo: decision-maker + influencer (ej: "VP Sales" + "Revenue Operations Manager")
→ Tamaño de empresa: tu sweet spot (ej: 50-500 empleados)
→ Sector: tu ICP sector
→ Actividad reciente: "publicó en LinkedIn en los últimos 30 días" (están activos)
→ Cambio de trabajo reciente: los N-90 días post-cambio son los más receptivos a nuevas soluciones

SIN SALES NAVIGATOR — Las búsquedas gratuitas:
→ Búsqueda de personas por cargo + empresa + sector en LinkedIn básico
→ Grupos de LinkedIn de tu nicho: los miembros son tu ICP
→ Los comentarios en posts de líderes de opinión de tu sector: los que comentan están activos

SEÑALES DE COMPRA (prioriza estos prospectos):
→ Ha publicado sobre el problema que tú resuelves en los últimos 30 días
→ Su empresa está contratando en el área que tú mejoras (señal de inversión)
→ Ha cambiado de cargo recientemente (nuevo en el puesto = nuevas iniciativas)
→ Su empresa ha levantado una ronda de financiación (tienen presupuesto)
```

**Fase 3 — La secuencia de mensajes que consigue respuesta:**
```
LA SECUENCIA DE 4 PASOS:

PASO 1 — La solicitud de conexión (sin mensaje):
→ Envía la solicitud sin nota en la mayoría de casos
→ La nota de la solicitud no mejora la tasa de aceptación en LinkedIn (datos de 2023-2024)
→ Excepción: si tienes una conexión en común o una referencia directa

PASO 2 — El primer mensaje tras la conexión (el más importante):
Envía en las primeras 24-48 horas tras la aceptación.

ESTRUCTURA:
→ Línea 1: referencia específica a algo de ellos (post, empresa, noticia)
→ Línea 2: una observación o pregunta sobre el problema que resuelves
→ Línea 3: un recurso de valor (sin pedir nada)
→ Sin CTA agresivo — la única "acción" es leer algo o responder si quieren

EJEMPLO:
"Hola [Nombre], vi tu post sobre [tema específico del post] — muy acertado el punto sobre [detalle].
Trabajo con equipos de ventas B2B que tienen exactamente ese reto.
Escribí una guía sobre cómo [solución al problema que mencionaste] — si te es útil, te la comparto.
¿Te suena este escenario?"

POR QUÉ FUNCIONA:
→ Demuestra que leíste su post (no es un mensaje de plantilla masiva)
→ La pregunta final es de bajo compromiso ("¿te suena?" en lugar de "¿tienes 15 minutos?")
→ El recurso de valor aporta antes de pedir

PASO 3 — El mensaje de seguimiento (si no responde en 5 días):
→ NO: "Solo hago seguimiento de mi mensaje anterior..."
→ SÍ: un ángulo diferente con nuevo valor
"[Nombre], vi que [Empresa] está contratando [cargo X] — señal de que están escalando [área].
Precisamente tengo un caso de éxito de [empresa similar] que hizo lo mismo. ¿Te comparto?"

PASO 4 — El último mensaje (si no responde al seguimiento):
→ El "breakup message": honesto y sin presión
"[Nombre], entiendo que el timing no es el ideal ahora mismo.
Si en algún momento te enfrentes a [el problema], estaré por aquí.
Seguiré tu trabajo — publicas cosas interesantes."
→ Este mensaje tiene una tasa de respuesta sorprendentemente alta por su honestidad
```

**Fase 4 — Las métricas que determinan si el sistema funciona:**
```
BENCHMARKS POR ETAPA:

Tasa de aceptación de conexión:
→ Sin nota: 30-40% (benchmark saludable)
→ Con nota personalizada: 35-45% (solo si es muy relevante)
→ Si estás por debajo del 25%: tu perfil o tu segmentación tiene un problema

Tasa de respuesta al primer mensaje:
→ Benchmark malo (plantillas genéricas): 2-5%
→ Benchmark medio: 8-12%
→ Benchmark bueno (mensajes muy personalizados): 15-25%
→ Si estás por debajo del 5%: el mensaje no es relevante o no estás contactando a tu ICP

Tasa de conversión a llamada (de respuestas a reuniones):
→ Benchmark: 20-35% de los que responden aceptan una llamada
→ Si estás por debajo del 15%: el pitch de la llamada necesita trabajo

VOLUMEN MÍNIMO PARA MEDIR:
→ Necesitas al menos 50 contactos por semana durante 4 semanas para tener datos significativos
→ Con menos volumen, los números son demasiado ruidosos para sacar conclusiones
```

### 🔧 El stack de herramientas para LinkedIn outbound

Las herramientas de automatización que respetan los límites de LinkedIn (Lemlist, Expandi, Meet Alfred) vs. las que arriesgan la cuenta, cómo integrar las respuestas de LinkedIn con el CRM para no perder ningún hilo, y las mejores prácticas de personalización a escala cuando tienes más de 100 prospectos por semana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'LinkedIn outbound, LinkedIn ventas B2B, mensajes LinkedIn efectivos, social selling, SDR LinkedIn',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Visión de producto y north star: define y comunica adónde va el producto en los próximos 3 años',
                'description'       => 'Define la visión de producto y la north star metric que alinean a toda la organización con el destino del producto. Con el framework de construcción de la visión, cómo comunicarla a diferentes audiencias (equipo, inversores, clientes) y cómo conectar la visión con las decisiones del día a día del roadmap.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP of Product con experiencia definiendo y comunicando visiones de producto en startups y scale-ups donde la falta de visión clara ha generado roadmaps fragmentados, equipos desalineados y dificultad para atraer tanto talento como inversores.

Contexto:
- Etapa del producto: [pre-product market fit / post-PMF creciendo / scale-up maduro]
- Audiencia principal de la visión: [equipo de producto / toda la empresa / inversores / clientes / todos]
- El problema actual: [falta de dirección clara / el roadmap es una lista de peticiones de clientes / desalineación entre equipos / queremos preparar una ronda de inversión]
- Horizonte temporal: [visión a 1 año / 3 años / 5+ años]

## Visión de Producto y North Star — [Empresa]

### 🧠 La diferencia entre una visión y una lista de features

**Lo que NO es una visión de producto:**
```
❌ "Queremos ser el líder del mercado en gestión de proyectos para PYME"
   → Esto es un objetivo de negocio, no una visión de producto.

❌ "En Q3 lanzaremos el módulo de reportes, la integración con Slack y la app móvil"
   → Esto es un roadmap, no una visión.

❌ "Ser el mejor software de [categoría] del mercado"
   → Demasiado genérica para guiar ninguna decisión.
```

**Lo que SÍ es una visión de producto:**
```
Una visión de producto responde:
¿Qué mundo diferente existe gracias a nuestro producto en 3-5 años?
¿Qué puede hacer el usuario que hoy no puede, o qué deja de sufrir?

Ejemplos de visiones reales bien formuladas:
→ Slack (2013): "Sustituir el email interno para los equipos — hacer que el trabajo sea más simple,
  más agradable y más productivo."
→ Airbnb: "Un mundo donde cualquier persona puede sentirse en casa en cualquier lugar."
→ Notion: "Un espacio de trabajo todo-en-uno que reemplaza múltiples herramientas."

CARACTERÍSTICAS DE UNA BUENA VISIÓN:
✅ Inspiradora: ¿quieres trabajar en este futuro?
✅ Específica: ¿sabes lo que incluye y lo que excluye?
✅ Alcanzable pero ambiciosa: ni tan fácil que no motive ni tan imposible que no se crea
✅ Estable: no cambia cada trimestre con el roadmap
✅ Orientada al usuario: ¿qué cambia para el usuario, no para la empresa?
```

### 📋 El framework de construcción de la visión de producto

**Paso 1 — El análisis de puntos de partida (antes de escribir nada):**
```
PREGUNTA 1 — El trabajo por hacer (Jobs to Be Done):
"¿Qué trabajo intenta hacer el usuario cuando usa nuestro producto?"
No la feature — el resultado que busca.
"Uso Notion para mantener organizado el conocimiento de mi equipo" (no "para crear páginas")

PREGUNTA 2 — El futuro del usuario:
"¿Cómo sería el trabajo de nuestro usuario ideal en un mundo donde nuestro problema
no existiera? ¿Qué podría hacer?"
Esto es la visión desde la perspectiva del usuario.

PREGUNTA 3 — El mercado y la tendencia:
"¿Qué tendencias del mercado o de la tecnología van a cambiar el problema que resolvemos?"
La visión debe anticipar cómo el mundo cambia, no solo reflejar el mundo de hoy.

PREGUNTA 4 — La ventaja competitiva sostenible:
"¿Qué podemos hacer nosotros que nadie más puede hacer (o nadie más hará)?"
La visión que cualquier empresa podría ejecutar no es una ventaja.
```

**Paso 2 — La estructura de la declaración de visión:**
```
FORMATO: [Para [usuario objetivo]] que [tiene este problema o deseo],
[Producto] es [tipo de solución] que [beneficio clave].
A diferencia de [alternativa actual], [diferenciador clave].
En 3 años, [el estado del mundo que buscamos crear].

EJEMPLO APLICADO:
"Para los equipos de marketing B2B que pierden horas coordinando contenido en herramientas
dispersas (email, Slack, Google Docs, Asana), [Producto] es el único espacio de trabajo
que conecta estrategia, producción y distribución de contenido en un solo lugar.
A diferencia de los project managers genéricos, está diseñado específicamente para
los flujos de trabajo del equipo de contenido.
En 3 años, los equipos de marketing B2B tendrán visibilidad completa de su pipeline
de contenido en tiempo real y reducirán a la mitad el tiempo entre briefing y publicación."
```

**Paso 3 — La North Star Metric: la brújula del equipo de producto:**
```
QUÉ ES LA NORTH STAR METRIC:
Una métrica única que mide el valor que el producto entrega al usuario y predice
el crecimiento del negocio a largo plazo.

NO es una métrica de negocio (revenue, MRR) — es una métrica de valor entregado al usuario.

EJEMPLOS REALES:
→ Airbnb: Noches reservadas
→ Spotify: Tiempo escuchando música al día
→ Slack: Mensajes enviados por organización
→ WhatsApp: Mensajes enviados al día
→ Duolingo: Días activos consecutivos (streak)

LA NORTH STAR METRIC CORRECTA:
✅ Refleja el valor que el usuario obtiene (no solo que usa el producto)
✅ Es leading indicator del revenue (crece antes de que crezca el revenue)
✅ El equipo de producto puede influenciarla directamente
✅ Es una sola métrica — si tienes 3 north stars no tienes ninguna

CÓMO ENCONTRAR LA TUYA:
Pregunta: "¿Cuándo un usuario activo tiene claramente una experiencia valiosa en nuestro producto?"
Esa experiencia, cuantificada, es tu North Star.
```

**Paso 4 — Comunicar la visión a diferentes audiencias:**
```
A LA JUNTA Y A LOS INVERSORES (versión estratégica):
→ El tamaño del mercado al que va el producto en 3-5 años
→ La ventaja competitiva sostenible que la visión construye
→ Cómo la visión conecta con el modelo de negocio y el path to revenue
→ Los hitos anuales que muestran que el producto avanza hacia la visión

AL EQUIPO DE PRODUCTO Y ENGINEERING (versión operativa):
→ La visión completa + la north star metric
→ Cómo cada iniciativa del roadmap contribuye a la visión
→ Las preguntas que la visión ayuda a responder: "¿deberíamos construir esta feature?"
   La respuesta: "¿nos acerca a la visión? ¿sube la north star?"

A LOS CLIENTES (versión de marketing):
→ No se comparte la visión interna literalmente — se traduce a propuesta de valor
→ "¿Hacia dónde va el producto? Aquí está nuestro roadmap público"
→ Los clientes enterprise quieren saber que el producto va a seguir existiendo y mejorando
```

### 📊 Cómo mantener la visión viva en el día a día

El ritual trimestral de conexión visión-roadmap (cómo revisar si el roadmap del trimestre realmente avanza la visión o es un acumulador de peticiones de clientes), cómo manejar las peticiones de features que contradicen la visión sin desmotivar al equipo comercial, y el proceso de actualización de la visión cuando el mercado o el PMF cambian.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 20,
                'use_case'          => 'Visión producto, north star metric, product vision, estrategia producto, roadmap visión, product leadership',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Equipos de alto rendimiento: los ingredientes y el proceso para construir un high-performing team',
                'description'       => 'Construye y lidera equipos de alto rendimiento con el framework que identifica los elementos que diferencian a los equipos que superan sus objetivos de los que los cumplen por los pelos. Con el diagnóstico del estado actual del equipo, las palancas de intervención y las prácticas de los mejores líderes de equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un People & Leadership Consultant con experiencia transformando equipos de rendimiento medio en equipos de alto rendimiento en organizaciones de tecnología, consultoría y servicios profesionales donde la diferencia entre ambos no era el talento individual, sino cómo el equipo funcionaba como sistema.

Contexto:
- Tamaño del equipo: [N personas]
- Tipo de trabajo: [desarrollo / ventas / marketing / operaciones / otro]
- El mayor problema actual: [falta de resultados / conflictos internos / personas desmotivadas / dificultad para colaborar / falta de autonomía / todo]
- Tu rol: [líder del equipo / manager / director que quiere mejorar sus equipos / RRHH]

## Equipos de Alto Rendimiento — [Equipo]

### 🧠 Lo que la investigación dice sobre los equipos de alto rendimiento

**El proyecto Aristóteles de Google (el estudio más grande sobre equipos):**
```
Google estudió 180 equipos durante 2 años para entender qué hacía a los equipos exitosos.
La hipótesis inicial: los mejores equipos tienen a las mejores personas.
El resultado: FALSO.

El factor más importante: la seguridad psicológica.
"¿Puedo hablar en este equipo sin miedo a ser juzgado, ridiculizado o ignorado?"

Los 5 factores en orden de importancia (Proyecto Aristóteles):
1. Seguridad psicológica (el más importante por mucho)
2. Fiabilidad: las personas cumplen con sus compromisos
3. Estructura y claridad: objetivos, roles y procesos claros
4. Significado: el trabajo importa personalmente a cada miembro
5. Impacto: el equipo cree que su trabajo tiene efecto en el mundo

Lo que NO importaba (contra la intuición):
→ La colocación física del equipo (presencial vs. remoto)
→ El tamaño del equipo
→ La experiencia o el seniority individual de los miembros
```

### 📋 El framework de diagnóstico del equipo: ¿dónde está el tuyo?

**La evaluación en 5 dimensiones (basada en las 5 disfunciones de Lencioni + Aristóteles):**

```
DIMENSIÓN 1 — CONFIANZA (la base de todo):
Preguntas de diagnóstico:
□ ¿Los miembros del equipo se piden ayuda mutuamente sin problema?
□ ¿Admiten errores y debilidades abiertamente?
□ ¿Comparten información que podría hacer quedar mal a alguien?

SEÑALES DE CONFIANZA BAJA:
→ Las personas protegen información para no quedar vulnerables
→ Nadie pregunta "¿cómo lo hago?" porque parece señal de debilidad
→ Los one-on-ones son superficiales — nadie comparte lo que realmente piensa

CÓMO MEJORARLA:
→ El líder va primero: admite sus propias vulnerabilidades primero
→ Actividades de conocimiento mutuo (no las típicas del team building — preguntas personales reales)
→ Feedback estructurado positivo y de mejora (no solo cuando algo va mal)
```

```
DIMENSIÓN 2 — CONFLICTO PRODUCTIVO (sin conflicto no hay innovación):
Preguntas de diagnóstico:
□ ¿Los debates en el equipo son apasionados y abiertos?
□ ¿Las personas expresan desacuerdo sin miedo?
□ ¿Las reuniones terminan con decisiones reales o con "lo pensamos"?

SEÑALES DE CONFLICTO INSUFICIENTE:
→ Todo el mundo está de acuerdo demasiado rápido (pensamiento de grupo)
→ Los desacuerdos reales se procesan en los pasillos, no en las reuniones
→ Las decisiones se toman y luego se reabren porque no hubo debate real

CÓMO MEJORARLO:
→ Técnica del "abogado del diablo" en decisiones importantes: alguien tiene el rol de cuestionar
→ Preguntar explícitamente: "¿Alguien tiene una perspectiva diferente?"
→ El líder nunca enuncia su opinión primero — contamina el debate
```

```
DIMENSIÓN 3 — COMPROMISO (clarity + buy-in):
Preguntas de diagnóstico:
□ ¿Después de cada reunión importante todo el mundo sabe cuál es el siguiente paso?
□ ¿Los objetivos del equipo son conocidos por todos?
□ ¿Las personas ejecutan aunque no estén 100% de acuerdo con la decisión?

SEÑALES DE FALTA DE COMPROMISO:
→ Las decisiones se toman pero no se ejecutan
→ "No es mi responsabilidad" aparece cuando hay problemas
→ Las personas ejecutan su parte pero no el objetivo del equipo

CÓMO MEJORARLO:
→ Reuniones con decisions log: cada reunión termina con "¿quién hace qué para cuándo?"
→ OKRs del equipo visibles y revisados semanalmente
→ El equipo crea sus propios objetivos (en lugar de recibirlos de arriba) — el buy-in es mayor
```

```
DIMENSIÓN 4 — ACCOUNTABILITY (entre iguales, no solo de arriba abajo):
Preguntas de diagnóstico:
□ ¿Los miembros del equipo se señalan mutuamente cuando alguien no cumple?
□ ¿El líder es el único que hace seguimiento de los compromisos?
□ ¿Los estándares del equipo se aplican a todos, incluido el líder?

SEÑALES DE ACCOUNTABILITY INSUFICIENTE:
→ Solo el manager hace seguimiento — el equipo no se autogobierna
→ Hay diferente estándar para diferentes personas (personas "intocables")
→ Nadie dice nada cuando alguien llega tarde, entrega tarde o con baja calidad

CÓMO MEJORARLO:
→ Revisiones de sprint/semana donde el equipo valora el cumplimiento de sus propios compromisos
→ El líder pide feedback sobre su propio rendimiento (modela la accountability)
→ Celebración explícita de quien cumple (no solo penalización de quien no cumple)
```

```
DIMENSIÓN 5 — RESULTADOS (el output colectivo, no el individual):
Preguntas de diagnóstico:
□ ¿El equipo prioriza los resultados del equipo sobre los resultados individuales?
□ ¿Hay comportamientos que maximizan el lucimiento personal a costa del equipo?
□ ¿El equipo celebra victorias colectivas?

SEÑALES DE FALTA DE ORIENTACIÓN A RESULTADOS:
→ Las personas protegen "su" territorio en lugar de colaborar
→ Los KPIs individuales contradicen los objetivos del equipo
→ El éxito del equipo no se celebra — solo el éxito individual

CÓMO MEJORARLO:
→ Los KPIs del equipo pesan más que los KPIs individuales en la evaluación de desempeño
→ Rituales de celebración de victorias del equipo (no solo el individuo que las lideró)
→ Bonificaciones o reconocimientos colectivos, no solo individuales
```

### 🔧 El ritual semanal del equipo de alto rendimiento

El diseño de la semana del equipo de alto rendimiento: qué reuniones son imprescindibles (daily/standup, revisión semanal de objetivos, one-on-ones del líder), cuáles son pérdida de tiempo (las reuniones de status que se pueden hacer async), y los 3 rituales que los mejores líderes mantienen sin importar la carga de trabajo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Equipos alto rendimiento, high-performing teams, liderazgo equipos, seguridad psicológica, project Aristóteles, Lencioni',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Control presupuestario mensual: el análisis de budget vs. actual que convierte los números en decisiones',
                'description'       => 'Implementa el proceso de control presupuestario mensual que analiza las desviaciones entre lo presupuestado y lo real, identifica las causas y genera acciones correctoras antes de que los problemas se agraven. Con la estructura del informe, el análisis de variaciones y el proceso de revisión con la dirección.',
                'prompt_content'    => <<<'PROMPT'
Eres un Controller o CFO con experiencia implementando sistemas de control presupuestario en PYME y startups donde el seguimiento mensual del presupuesto ha evitado sorpresas de final de año, mejorado la predictibilidad del negocio y dado a la dirección información real para tomar decisiones.

Contexto:
- Tipo de empresa: [SaaS / servicios profesionales / ecommerce / manufactura / otro]
- Facturación anual: [€]
- Herramienta actual: [Excel / Google Sheets / Xero / Holded / SAP / QuickBooks / ninguna]
- El mayor problema actual: [no tenemos presupuesto / el presupuesto existe pero no lo revisamos / las desviaciones se detectan tarde / no sabemos qué causa las desviaciones]

## Control Presupuestario Mensual — [Empresa]

### 🧠 La diferencia entre tener un presupuesto y usarlo

**Por qué el 70% de los presupuestos son documentos muertos:**
```
EL CICLO HABITUAL:
→ En enero: se elabora el presupuesto anual (mucho esfuerzo)
→ En febrero: se archiva en una carpeta de Drive
→ En diciembre: se compara lo real con lo presupuestado y hay sorpresas
→ En enero del año siguiente: se repite el ciclo

EL CICLO QUE FUNCIONA:
→ El presupuesto es un documento vivo que se compara con la realidad cada mes
→ Las desviaciones se analizan antes de que se agraven
→ Las acciones correctoras se toman en el momento oportuno, no en la revisión anual
→ El presupuesto del año siguiente se basa en los aprendizajes de los datos reales
```

### 📋 El proceso de control presupuestario mensual en 5 pasos

**Paso 1 — La estructura del presupuesto mensual (la base):**
```
EL PRESUPUESTO MENSUAL DEBE TENER:

1. INGRESOS:
→ Desglosados por línea de negocio / producto / cliente / canal de venta
→ MRR/ARR para SaaS: nuevos clientes + expansión - churn
→ Proyectado hasta fin de año (no solo el mes en curso)

2. COGS (Coste de los Servicios / Ventas):
→ Los costes directamente atribuibles a generar los ingresos
→ Desglosados por componente (proveedores, mano de obra directa, hosting, etc.)

3. GASTOS OPERATIVOS (por departamento):
→ Marketing: paid ads, eventos, software, agencias
→ Ventas: salarios, comisiones, herramientas CRM, viajes
→ Producto y Tech: salarios, licencias, infraestructura
→ G&A (General y Administración): alquiler, RRHH, legal, contabilidad, seguros

4. EBITDA MENSUAL Y ACUMULADO
5. CAPEX (inversiones si las hay)
6. CASH FLOW (caja disponible al inicio y fin del mes)
```

**Paso 2 — El análisis de variaciones (el core del control):**
```
PARA CADA LÍNEA DEL PRESUPUESTO, CALCULA:

Variación absoluta: Real - Presupuesto
Variación relativa: (Real - Presupuesto) / Presupuesto × 100

CÓDIGO DE COLORES (semáforo):
🟢 Verde: variación < ±5% — dentro del rango esperado
🟡 Amarillo: variación entre ±5% y ±15% — necesita atención
🔴 Rojo: variación > ±15% — requiere análisis y acción inmediata

EJEMPLO DE TABLA DE VARIACIONES:
| Línea            | Presupuesto | Real     | Variación | %     | Estado |
|------------------|-------------|----------|-----------|-------|--------|
| Revenue          | €150.000    | €142.000 | -€8.000   | -5,3% | 🟡     |
| Marketing        | €25.000     | €31.000  | +€6.000   | +24%  | 🔴     |
| EBITDA           | €35.000     | €22.000  | -€13.000  | -37%  | 🔴     |
```

**Paso 3 — El análisis causal (¿por qué hay desviación?):**
```
PARA CADA DESVIACIÓN SIGNIFICATIVA (amarilla o roja), RESPONDE:

1. ¿Es una desviación de precio/volumen/mix?
   PRECIO: vendí el mismo número de unidades pero a menor precio
   VOLUMEN: vendí menos unidades de lo previsto
   MIX: vendí más del producto menos rentable y menos del más rentable

   Ejemplo: Revenue -5,3%
   → Análisis: el volumen de nuevos clientes cumple el objetivo (volume OK)
   → Pero el ticket medio fue €850 vs. €920 presupuestado (desviación de precio)
   → Causa: el equipo de ventas está dando más descuentos de lo autorizado
   → Acción: revisar la política de descuentos + conversación con el equipo de ventas

2. ¿Es temporal o estructural?
   TEMPORAL: un gasto extraordinario este mes que no se repetirá (coste de un evento)
   ESTRUCTURAL: un coste que es mayor de lo previsto de forma permanente (nueva contratación)
   La acción correctora es diferente según sea temporal o estructural.

3. ¿Es controlable o no controlable?
   CONTROLABLE: puedes hacer algo para corregirlo
   NO CONTROLABLE: tipo de cambio, normativa, fuerza mayor
   Solo merece la pena generar acciones sobre las desviaciones controlables.
```

**Paso 4 — El forecast actualizado (la proyección revisada):**
```
CON LOS DATOS REALES DEL MES Y EL ANÁLISIS CAUSAL:

Actualiza el forecast del resto del año:
→ Si el churn de enero fue 3% en lugar del 1,5% presupuestado: ajusta el revenue de feb-dic
→ Si la nueva contratación de feb es €5.000 mayor de lo previsto: ajusta el gasto de feb-dic
→ Si el CPC de paid ads subió un 20%: ajusta el coste de marketing del resto del año

EL FORECAST REVISADO VS. EL PRESUPUESTO ORIGINAL:
→ No sustituyas el presupuesto original — es el benchmark de referencia
→ El forecast se va actualizando mes a mes con la realidad
→ Al final del año tienes: Presupuesto original / Forecast actualizado mes a mes / Real
→ Esta comparación enseña mucho sobre la calidad de tu proceso de planificación
```

**Paso 5 — La reunión de revisión mensual con la dirección:**
```
FORMATO RECOMENDADO (45-60 minutos):

PRIMEROS 10 MIN — Dashboard ejecutivo:
→ Los 3 semáforos: Revenue / EBITDA / Cash
→ "El mes ha ido [bien/regular/mal] porque [2-3 razones clave]"

SIGUIENTES 20 MIN — Análisis de desviaciones:
→ Solo las desviaciones rojas y amarillas (no revises lo que va bien)
→ Para cada una: causa identificada + acción correctora + responsable + fecha

SIGUIENTES 15 MIN — Forecast actualizado:
→ ¿Cómo cierra el año si seguimos esta tendencia?
→ ¿Qué decisiones hay que tomar ahora para mejorar el cierre anual?

ÚLTIMOS 10 MIN — Decisiones:
→ Las 2-3 decisiones que salen de esta reunión con responsable y fecha

REGLA: la reunión de control presupuestario no es para presentar datos — es para tomar decisiones.
Si nadie toma ninguna decisión al final, la reunión no sirvió.
```

### 📊 La plantilla de Excel/Sheets para el control presupuestario mensual

La estructura exacta de la hoja de cálculo del control presupuestario mensual: las pestañas (Budget anual / Real mensual / Dashboard ejecutivo / Forecast actualizado), las fórmulas de variación, el formato condicional para el semáforo automático y cómo conectarla con los datos reales de la contabilidad para minimizar el tiempo de actualización mensual.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Control presupuestario, budget vs actual, análisis variaciones, forecast financiero, control de gestión mensual',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos internacionales: ley aplicable, jurisdicción y gestión del riesgo legal en ventas cross-border',
                'description'       => 'Gestiona los riesgos legales de las ventas y contratos internacionales con el conocimiento práctico sobre ley aplicable, jurisdicción, la Convención de Viena (CISG) y las cláusulas que protegen a la empresa española que vende o compra fuera de la UE. Con los errores más frecuentes y las cláusulas que no pueden faltar.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en contratación internacional y comercio exterior con experiencia asesorando a empresas españolas en sus operaciones internacionales, donde la elección incorrecta de ley aplicable y jurisdicción ha resultado en litigios costosos y difícilmente ejecutables.

NOTA: Este prompt es una guía educativa sobre los conceptos de derecho internacional privado aplicables a contratos comerciales. Los contratos definitivos deben ser revisados por un abogado colegiado especializado en la jurisdicción de cada parte.

Contexto:
- Tipo de operación: [venta de productos / prestación de servicios SaaS / licencia de software / distribución internacional / compra de proveedor extranjero]
- Contrapartes habituales: [Europa / LATAM / USA / Asia / todo]
- El mayor riesgo actual: [cobrar impagados de clientes extranjeros / reclamaciones de clientes / incumplimiento de proveedor / todos]

## Contratos Internacionales — [Empresa]

### 🧠 Por qué el derecho aplicable importa más de lo que parece

**El escenario que nadie quiere vivir:**
```
Una empresa española vende software a una empresa de México.
El contrato no especifica ley aplicable.
El cliente mexicano incumple y no paga €80.000.

PREGUNTAS SIN RESPONDER POR EL CONTRATO:
→ ¿Qué ley regula el contrato? ¿Derecho español? ¿Derecho mexicano?
→ ¿Dónde demandas? ¿En España? ¿En México?
→ Si ganas en España, ¿cómo ejecutas la sentencia en México?
→ ¿Se aplica la Convención de Viena (CISG)?

Sin una cláusula de ley aplicable y jurisdicción claras, la respuesta a todas estas
preguntas es "depende" — y "depende" cuesta dinero y años de litigio.
```

### 📋 Los 4 elementos críticos de los contratos internacionales

**Elemento 1 — Ley aplicable: las reglas del juego:**
```
DEFINICIÓN: la ley aplicable determina qué ordenamiento jurídico regula el contrato
(qué es válido, cómo se interpreta, qué consecuencias tienen los incumplimientos).

OPCIONES FRECUENTES PARA EMPRESAS ESPAÑOLAS:
→ Derecho español: familiar para ti, pero puede ser complicado de aceptar para contrapartes
   de otros países. La ley española tiene el TRLGDCU para B2C y el Código de Comercio para B2B.
→ Derecho inglés (English Law): el estándar en contratos comerciales internacionales.
   Es predecible, bien documentado y ampliamente aceptado internacionalmente.
   Desventaja post-Brexit: los laudos bajo derecho inglés son más complejos de ejecutar en la UE.
→ Derecho del estado de Nueva York: el estándar en contratos con contrapartes americanas.
→ Derecho de un tercer país neutral (ej: Suiza, Países Bajos): cuando ninguna de las partes
   quiere ceder a la ley de la otra.

CLÁUSULA ESTÁNDAR DE LEY APLICABLE:
"Este Contrato se regirá e interpretará de conformidad con la legislación española,
excluyendo sus normas de conflicto de leyes y la Convención de las Naciones Unidas
sobre los Contratos de Compraventa Internacional de Mercaderías (CISG)."

NOTA: es habitual excluir el CISG expresamente (ver más abajo por qué).
```

**Elemento 2 — La CISG (Convención de Viena): el comodín que nadie espera:**
```
QUÉ ES LA CISG:
La Convención de las Naciones Unidas sobre los Contratos de Compraventa Internacional
de Mercaderías (Viena, 1980) se aplica automáticamente a los contratos de compraventa
de mercaderías entre partes con establecimientos en países diferentes que sean estados
firmantes (España, México, USA, China y 94 países más).

POR QUÉ ES IMPORTANTE:
→ Se aplica automáticamente aunque el contrato no la mencione
→ Sustituye algunas normas del derecho nacional
→ Sus reglas sobre entrega, conformidad de la mercancía, remedios por incumplimiento
   pueden diferir de lo que esperabas bajo derecho español

LO QUE CAMBIA BAJO LA CISG vs. DERECHO ESPAÑOL:
→ El comprador tiene obligación de inspeccionar la mercancía "en el plazo más breve posible"
   y notificar defectos. Si no lo hace, pierde el derecho a reclamar.
→ Los remedios por incumplimiento son diferentes (no exactamente como el Código Civil español)
→ La formación del contrato tiene reglas propias sobre oferta y aceptación

CUÁNDO EXCLUIR LA CISG:
→ Si vendes servicios (la CISG solo aplica a mercaderías) — no aplica y no hace falta excluirla
→ Si vendes software como producto (zona gris — mejor excluirla para evitar ambigüedad)
→ Si tienes un contrato muy detallado y prefieres que se aplique íntegramente el derecho nacional
→ La exclusión: "Se excluye expresamente la aplicación de la Convención de las Naciones Unidas
   sobre los Contratos de Compraventa Internacional de Mercaderías (CISG)"
```

**Elemento 3 — Jurisdicción y resolución de conflictos:**
```
OPCIÓN A — TRIBUNALES ORDINARIOS (sumisión a fuero):
"Las partes se someten a la jurisdicción exclusiva de los Juzgados y Tribunales de Madrid,
renunciando a cualquier otro fuero que pudiera corresponderles."

PROBLEMA: una sentencia española puede ser difícil de ejecutar en ciertos países.
→ Dentro de la UE: el Reglamento (UE) 1215/2012 (Bruselas I bis) facilita la ejecución.
→ Fuera de la UE: depende del convenio bilateral entre España y el país de la contraparte.
   Con USA, México o China: no hay un convenio general — ejecutar una sentencia española
   puede ser un proceso largo y costoso.

OPCIÓN B — ARBITRAJE INTERNACIONAL (la mejor opción para contratos extraeuropeos):
"Las controversias derivadas del presente Contrato se resolverán mediante arbitraje
administrado por la Corte Internacional de Arbitraje de la CCI (París), de conformidad
con su Reglamento de Arbitraje, por un árbitro único designado según dicho Reglamento.
El lugar del arbitraje será [ciudad]. El idioma del arbitraje será [idioma]."

VENTAJAS DEL ARBITRAJE INTERNACIONAL:
→ El laudo arbitral es ejecutable en 170+ países (Convenio de Nueva York, 1958)
   Es el instrumento más efectivo para ejecutar en el extranjero.
→ Confidencialidad: el proceso no es público (a diferencia de los tribunales)
→ Expertos: puedes elegir árbitros con conocimiento técnico de tu sector
→ No politizado: especialmente relevante cuando la contraparte es de un país con
   baja independencia judicial

PRINCIPALES CORTES DE ARBITRAJE INTERNACIONAL:
→ CCI (Cámara de Comercio Internacional, París): la más usada mundialmente
→ LCIA (London Court of International Arbitration): muy usada en contratos con derecho inglés
→ ICDR (American Arbitration Association): para contratos con partes americanas
→ CAM (Corte Arbitral de Madrid): más accesible y económica para disputas de menor cuantía
```

**Elemento 4 — Las cláusulas de gestión del riesgo en contratos internacionales:**
```
CLÁUSULA DE FUERZA MAYOR (imprescindible):
Define qué eventos eximen del cumplimiento: conflictos armados, pandemias, desastres naturales,
huelgas generales, actos de gobierno. Sin definirla, la interpretación varía según la ley aplicable.

"Ninguna de las Partes incurrirá en responsabilidad por el incumplimiento de sus obligaciones
en caso de que dicho incumplimiento sea causado por circunstancias ajenas a su control razonable
incluyendo, sin carácter limitativo: actos de guerra, desastres naturales, pandemias declaradas
por la OMS, actos de autoridades gubernamentales, o huelgas generales..."

CLÁUSULA DE HARDSHIP (renegociación por cambio de circunstancias):
Para contratos de larga duración: si las circunstancias cambian radicalmente
(tipo de cambio, costes de materias primas), cualquier parte puede pedir la renegociación.
Sin esta cláusula, el contrato es rígido aunque las circunstancias lo hagan irrazonable.

TÉRMINOS INCOTERMS (para compraventa de mercaderías):
Incoterms 2020 (de la CCI) definen exactamente dónde se transfiere el riesgo y quién
paga el transporte y los seguros.
→ EXW (Ex Works): el comprador recoge en el almacén del vendedor. Máximo riesgo para el comprador.
→ DDP (Delivered Duty Paid): el vendedor entrega en destino pagando todos los costes y aranceles.
→ CIF/FOB: los más usados en transporte marítimo internacional.
REGLA: siempre especifica el Incoterm en el contrato de compraventa internacional de mercaderías.
```

### ⚠️ Los 5 errores más frecuentes en contratos internacionales de PYME

Las 5 cláusulas o ausencias de cláusulas que generan el mayor coste en litigios y disputas internacionales: contratos sin ley aplicable ni jurisdicción, contratos en español cuando la contraparte es de un país no hispanohablante (problema de interpretación), sin cláusula de hardship en contratos de larga duración, sin garantías de pago en ventas internacionales de alto valor (carta de crédito, aval bancario, seguro de crédito a la exportación del CESCE), y sin cláusula de confidencialidad que sea ejecutable en la jurisdicción de la contraparte.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Contratos internacionales, ley aplicable, jurisdicción arbitraje, CISG, comercio internacional legal, cross-border contracts',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Programa de fidelización de clientes: el loyalty program que aumenta el LTV sin destruir el margen',
                'description'       => 'Diseña e implementa el programa de fidelización de clientes que aumenta la frecuencia de compra, el ticket medio y el LTV sin caer en la trampa de los descuentos continuos que erosionan el margen. Con los modelos de loyalty (puntos, niveles, subscripción), las recompensas que funcionan y las métricas de éxito.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Loyalty & Retention Specialist con experiencia diseñando programas de fidelización en ecommerce, retail y SaaS donde los programas bien diseñados han aumentado el LTV un 25-40% y la frecuencia de compra un 30% sin depender de descuentos continuos que destruyen el margen.

Contexto:
- Tipo de negocio: [ecommerce B2C / retail físico + online / SaaS / servicios de suscripción / B2B con compras recurrentes]
- Frecuencia de compra actual: [N veces al año por cliente]
- LTV actual: [€]
- El mayor problema de retención: [clientes que compran una sola vez / alta tasa de churn / clientes que compran solo con descuento / competencia en precio]

## Programa de Fidelización de Clientes — [Empresa]

### 🧠 La trampa del programa de fidelización mal diseñado

**El programa que destruye el margen en lugar de aumentar el LTV:**
```
EL ERROR MÁS FRECUENTE — El programa de descuentos disfrazado de loyalty:
→ "Por cada €1 que gastas, ganas 1 punto. 100 puntos = €1 de descuento."
→ Resultado: los clientes que ya compraban siguen comprando, pero ahora más baratos.
→ Los nuevos clientes se acostumbran al descuento y no compran sin él.
→ El programa no retiene a nadie que no fuera a comprar de todas formas.

EL PROGRAMA QUE SÍ FUNCIONA:
→ Recompensa el comportamiento que quieres fomentar (no solo el gasto)
→ Ofrece recompensas que el cliente no puede conseguir de otra forma
→ Crea un sentido de pertenencia, no solo de ahorro
→ Tiene recompensas con alto valor percibido pero bajo coste real para la empresa
```

### 📋 Los 3 modelos de loyalty y cuándo usar cada uno

**MODELO 1 — Sistema de puntos (el más frecuente):**
```
CÓMO FUNCIONA:
→ El cliente acumula puntos por sus compras (y otras acciones)
→ Los puntos se canjean por recompensas (descuentos, productos, experiencias)

CUÁNDO TIENE SENTIDO:
✅ Frecuencia de compra media-alta (>4 veces al año)
✅ Ticket medio bajo-medio (€10-€200 por compra)
✅ Base de clientes grande (>5.000 clientes activos)
✅ Ecommerce y retail donde la mecánica es simple de implementar

LAS RECOMPENSAS QUE FUNCIONAN MEJOR (alto valor percibido, bajo coste real):
→ Acceso anticipado a nuevos productos (coste: 0)
→ Envío gratuito (coste: €3-€5, valor percibido: €5-€8)
→ Productos regalo de alto margen (coste: precio de coste del producto)
→ Contenido exclusivo o formación (coste: mínimo, valor: alto para el cliente correcto)
→ Descuentos reservados a miembros (solo para el segmento loyalty, no público)

EJEMPLO DE ESTRUCTURA:
Por cada €1 gastado: 10 puntos
Acciones extra: primera reseña (+50 puntos), referido (+200 puntos), cumpleaños (+100 puntos)
Canje: 1.000 puntos = €5 de descuento (ratio: 0,5% del gasto — mucho menor que un descuento del 5%)
El truco: el valor del punto en el canje parece generoso pero el ratio real es pequeño.
```

**MODELO 2 — Programa por niveles (tiers):**
```
CÓMO FUNCIONA:
→ Los clientes suben de nivel según su gasto o compromiso acumulado
→ Cada nivel tiene beneficios superiores al anterior
→ El cliente siente progreso y quiere mantener o subir su nivel

CUÁNDO TIENE SENTIDO:
✅ Negocio con amplia gama de clientes (desde ocasional hasta cliente VIP)
✅ Quieres diferenciar el trato de los clientes más valiosos
✅ El producto tiene una curva de valor (el cliente usa más features según su compromiso)

EJEMPLO DE ESTRUCTURA (3 niveles):
BRONCE (0-€499 gastados/año):
→ Envío gratuito en pedidos >€50, puntos x1
PLATA (€500-€1.999/año):
→ Envío gratuito en todos los pedidos, puntos x1.5, acceso anticipado a ventas
ORO (€2.000+/año):
→ Envío express gratuito, puntos x2, atención prioritaria, regalo de cumpleaños, invitación a eventos
```

**MODELO 3 — Membresía de pago (el más rentable si funciona):**
```
CÓMO FUNCIONA:
→ El cliente paga una cuota (mensual o anual) para acceder a beneficios exclusivos
→ Ejemplo: Amazon Prime, Costco, el Club de Corte Inglés
→ La cuota financia los beneficios Y genera revenue adicional

CUÁNDO TIENE SENTIDO:
✅ Los beneficios que ofreces tienen un valor real y tangible para el cliente
✅ Tienes suficiente frecuencia de uso para que el cliente sienta que amortiza la cuota
✅ La cuota es de bajo riesgo percibido (precio mensual, fácil de cancelar)

BENCHMARK:
→ Amazon Prime: €49.90/año → genera un incremento del 150% en el gasto anual de los miembros vs. no miembros
→ Rappi Prime, Glovo Prime, Just Eat Plus: cuota mensual €4.99-€9.99 → envíos gratuitos
→ En PYME: una membresía de €29-€99/año con beneficios reales puede ser transformadora
```

### 📐 El diseño del programa de loyalty: los elementos que determinan el éxito

```
ELEMENTO 1 — LA PROPUESTA DE VALOR CLARA:
"¿Por qué debería unirme a tu programa?"
Si no puedes responderla en 10 segundos, el programa no está bien diseñado.
"Únete y en tu primer año te devolvemos el 5% de todo lo que gastes en crédito" (claro)
vs. "Gana puntos y canjéalos por increíbles recompensas" (vago e inspira cero confianza)

ELEMENTO 2 — LA FRICCIÓN DEL REGISTRO:
→ El registro debe ser de 1 paso (solo email o número de teléfono)
→ Ofrece puntos de bienvenida por registrarse (primera recompensa inmediata)
→ Si el registro requiere más de 2 minutos: pierdes al 60% de los interesados

ELEMENTO 3 — LA VELOCIDAD A LA PRIMERA RECOMPENSA:
→ El cliente debe sentir que está "progresando" hacia una recompensa desde el primer día
→ Un punto de bienvenida que acerca al cliente a su primera recompensa es poderoso
→ Si la primera recompensa requiere 12 meses de compras: el programa es invisible para el cliente

ELEMENTO 4 — LA COMUNICACIÓN DEL SALDO:
→ El cliente debe saber en todo momento cuántos puntos tiene y qué puede canjear
→ En cada email transaccional: "[Nombre], tienes 1.234 puntos — equivalente a €12,34"
→ Push de activación cuando el cliente se acerca a un umbral: "¡Solo 50 puntos para tu próxima recompensa!"
```

### 📊 Las métricas del programa de loyalty que debes medir mensualmente

Los 6 KPIs del programa de loyalty (tasa de participación activa, frecuencia de compra de miembros vs. no miembros, ticket medio de miembros vs. no miembros, tasa de canje de puntos, coste del programa como % del revenue generado, y NPS de miembros del programa vs. clientes sin programa) y cómo usarlos para optimizar el programa de forma continua sin hacer cambios que penalicen a los clientes ya inscritos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Programa fidelización, loyalty program, LTV cliente, retención clientes, puntos y recompensas, customer loyalty',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Clientes difíciles como freelance: gestiona proyectos complicados sin perder rentabilidad ni salud mental',
                'description'       => 'Gestiona los proyectos con clientes difíciles como freelance con las estrategias que mantienen la rentabilidad, protegen tu tiempo y te permiten salir con gracia cuando el proyecto no tiene solución. Con los tipos de cliente difícil, las técnicas de gestión para cada perfil y cuándo y cómo salir de un proyecto sin quemar puentes.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Coach especializado en freelancers con experiencia ayudando a profesionales independientes a gestionar relaciones difíciles con clientes sin perder ingresos, reputación ni salud mental — y a diseñar sistemas que reduzcan la probabilidad de que estos clientes entren al portfolio en primer lugar.

Perfil:
- Especialidad freelance: [describe tu servicio]
- El tipo de cliente difícil que más te afecta: [el que no para de cambiar el scope / el que no paga / el que microgestiona / el que desaparece y vuelve con urgencias / el que cuestiona todo]
- El momento del problema: [antes de empezar (en la propuesta) / durante el proyecto / al cerrar y cobrar]

## Clientes Difíciles como Freelance — [Especialidad]

### 🧠 La primera verdad incómoda: tú eres parte de la ecuación

**La reflexión que nadie quiere hacer:**
```
Los clientes difíciles raramente aparecen de la nada.
En la mayoría de los casos hay señales previas que ignoraste:
→ Tardaron mucho en responder durante el proceso de venta (señal de desorganización)
→ Negociaron cada euro del presupuesto sin entender el valor (señal de que el precio importa más que el resultado)
→ Cambiaron de opinión sobre el alcance antes de empezar
→ Tenían un proceso de decisión opaco (no sabías quién decidía realmente)
→ Habían trabajado con otro freelance antes y el proyecto "no había funcionado" (¿por qué?)

Esto no significa que sea tu culpa — significa que puedes aprender a detectarlos antes y decidir conscientemente si aceptas el proyecto.
```

### 📋 Los 6 tipos de cliente difícil y cómo gestionarlos

**TIPO 1 — El que cambia el scope constantemente ("scope creep"):**
```
SEÑALES DE IDENTIFICACIÓN:
→ "Mientras estás en esto, ¿podrías también...?"
→ Las reuniones de revisión terminan con más trabajo del que empezaron
→ Las "pequeñas cosas" se acumulan semana a semana

SISTEMA DE PREVENCIÓN (en el contrato):
→ Define el alcance por escrito con detalle explícito: qué incluye Y qué NO incluye
→ Cláusula de cambios: "Cualquier trabajo fuera del alcance definido se cotiza
  y aprueba por escrito antes de ejecutarse. Tarifa para extras: €[X]/hora"
→ Una vez tienes esta cláusula, el scope creep se convierte en revenue adicional

GESTIÓN EN TIEMPO REAL:
"¡Claro, podemos incluir eso! Está fuera del alcance original, así que te envío
una propuesta para esa parte adicional. ¿Te parece bien?"
→ Sin dramatismo — solo información y opciones
→ Si no quieren pagar el extra: no se hace el extra (con amabilidad y firmeza)
```

**TIPO 2 — El que no paga o paga tarde:**
```
SISTEMA DE PREVENCIÓN:
→ 50% por adelantado antes de empezar cualquier proyecto (no negociable)
→ El 50% restante al entregar los archivos finales — ANTES de entregar, no después
→ Para proyectos largos: hitos de pago parciales (ej: 33% inicio, 33% mitad, 33% entrega final)
→ Términos de pago claros en el contrato: "Pago en [N] días desde la fecha de factura.
  A partir del vencimiento, se aplica un interés de demora del 8% anual (interés legal del dinero + 8 puntos — art. 7 Ley 3/2004)"

GESTIÓN DE FACTURAS VENCIDAS:
Día 0 (fecha de vencimiento, no pagada):
→ Email amable: "Te recuerdo que la factura #XXX venció hoy. ¿Todo OK?"

Día 5 (sin pago):
→ Email más directo: "La factura #XXX lleva 5 días vencida. Necesito el pago
  para poder continuar/entregar [siguiente entregable]."

Día 10 (sin pago):
→ Llama por teléfono. El email es fácil de ignorar.
→ "La factura lleva 10 días vencida. Necesito una confirmación de cuándo pagas
  para poder planificar mi trabajo. Si hay algún problema, cuéntame."

Día 15 (sin pago):
→ Pausa el trabajo. "Hemos pausado el proyecto hasta que regularicemos el pago pendiente."
→ Si el cliente necesita el trabajo, pagará.

HERRAMIENTA: Formaliza la reclamación de la deuda con un burofax antes de acudir
a la vía judicial. El burofax tiene valor probatorio de que el cliente recibió la reclamación.
```

**TIPO 3 — El que microgestiona:**
```
PERFIL: quiere saber exactamente qué estás haciendo en cada momento,
corrige cada decisión estética o técnica, no confía en tu criterio.

CAUSA HABITUAL: no confía en ti (todavía) o ha tenido malas experiencias pasadas.
También puede ser que el onboarding inicial no fue suficiente para alinear expectativas.

SISTEMA DE PREVENCIÓN:
→ Establece desde el inicio los canales y la frecuencia de comunicación:
  "Te haré una actualización cada [lunes / cada 2 días / tras cada hito]"
→ Ofrece proactivamente información antes de que te la pidan
→ Documenta las decisiones clave con justificación por escrito

GESTIÓN EN TIEMPO REAL:
"Entiendo que quieres estar al tanto del progreso. Propongo que hagamos
una llamada de 15 minutos cada [frecuencia] para revisarlo juntos.
Así tienes visibilidad y yo puedo avanzar entre reuniones."
→ La estructura reduce la necesidad de control ad-hoc
→ Si el problema persiste: "Trabajo mejor con autonomía en los periodos entre entregables.
  Si hay feedback, me lo consolidas en las revisiones que hemos acordado."
```

**TIPO 4 — El que desaparece y vuelve con urgencias:**
```
PERFIL: no contesta emails durante semanas → aparece el viernes a las 17h pidiendo
que entregues el lunes → y si no entregas a tiempo, el culpable eres tú.

SISTEMA DE PREVENCIÓN (en el contrato):
"Los plazos de entrega están condicionados a la recepción de feedback y materiales
del cliente en los plazos acordados. Los retrasos por parte del cliente pueden resultar
en un ajuste proporcional de las fechas de entrega."

GESTIÓN EN TIEMPO REAL:
→ Cuando desaparece: envía un email con fecha límite clara:
  "Necesito tu feedback sobre [entregable] antes del [fecha] para poder cumplir
  el plazo final de entrega del [fecha]. Si no recibo respuesta, asumiré que
  el proyecto está en pausa desde vuestra parte."
→ Si aparece con una urgencia: "Puedo priorizarlo pero tendrá un suplemento de
  [€X] por trabajo urgente. ¿Confirmamos?"
```

**TIPO 5 — El que cuestiona tu tarifa constantemente:**
```
PERFIL: negoció el precio en la propuesta, y sigue haciéndolo durante el proyecto.
"¿No podrías hacerlo un poco más barato?" / "Mi presupuesto no llega a tanto"

PREVENCIÓN: no des descuentos sin quitar algo del alcance.
"Podemos ajustar el presupuesto si reducimos el alcance. ¿Qué te parece si
quitamos [elemento] y así llegamos a [precio menor]?"
→ Esto enseña al cliente que el precio y el alcance van unidos.

DURANTE EL PROYECTO — Si vuelve a negociar:
"El precio que acordamos al inicio cubre exactamente lo que hemos definido.
Para cambiar el presupuesto necesitaría cambiar el alcance — si quieres exploramos opciones."
```

**TIPO 6 — El proyecto que no tiene solución (cuándo salir):**
```
SEÑALES DE QUE DEBES SALIR:
→ El cliente ha incumplido cláusulas del contrato repetidamente
→ El proyecto se ha convertido en una fuente de estrés desproporcionada vs. el revenue
→ La relación profesional está irrecuperablemente dañada
→ El cliente te pide cosas que van contra tu ética profesional

CÓMO SALIR SIN QUEMAR PUENTES:
1. Revisa el contrato: ¿qué dice sobre la terminación anticipada? Cúmplelo.
2. Ofrece entregar el trabajo completado hasta la fecha + los archivos
3. Devuelve la parte proporcional no trabajada (si hay anticipo) — es lo correcto
4. Comunícalo por escrito:
   "Tras valorarlo, creo que para este proyecto en particular no soy el profesional
   más adecuado para dar el resultado que buscas. Quiero entregarte [lo completado]
   y [lo que devuelvo] para que puedas continuar con otro profesional sin problemas.
   Quedo a disposición para facilitar la transición."
5. Nunca: hablar mal del cliente públicamente, retener archivos, actuar con agresividad.

La reputación del freelance vale más que el dinero de ese proyecto.
```

### 📊 El sistema de prevención: cómo reducir los clientes difíciles antes de que entren

El proceso de onboarding de cliente que detecta las señales de alarma (las 5 preguntas de discovery que revelan el perfil del cliente antes de firmar), la política de comunicación por escrito que evita malentendidos, y el sistema de contrato + facturación que protege al freelance sin necesitar un abogado para cada proyecto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Clientes difíciles freelance, scope creep, gestión conflictos freelance, cobrar facturas impagadas, salir proyecto freelance',
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
