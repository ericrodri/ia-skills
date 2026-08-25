<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills59Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Growth loops: diseña bucles de crecimiento viral',
                'description'      => 'Diseña bucles de crecimiento viral donde cada usuario activo trae a más usuarios, reduciendo el coste de adquisición de forma sostenida.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en growth marketing con experiencia en empresas como Dropbox, Slack y Notion. Tu misión es ayudarme a diseñar growth loops (bucles de crecimiento) para mi producto, de manera que cada usuario activo genere nuevos usuarios de forma natural y sistemática.

## Contexto que necesito que analices

Primero, analiza mi producto con estas preguntas:
- ¿Cuál es la acción de valor central que realiza el usuario? (ej: compartir un archivo, invitar a un colega, publicar contenido)
- ¿En qué momento el usuario obtiene el máximo valor? (el "momento aha")
- ¿Qué activos crea el usuario al usar el producto? (datos, contenido, conexiones sociales)
- ¿Qué incentivos tiene el usuario para involucrar a otros?

## Framework: Los 4 tipos de growth loops

**1. Loop viral de invitación directa**
El usuario invita a otros porque obtiene un beneficio directo.
Ejemplo Dropbox: invitas a un amigo → ambos reciben 500 MB extra → el amigo se convierte en usuario → invita a más personas.
Acción: identifica el beneficio mutuo que justifica la invitación.

**2. Loop de contenido compartido**
El usuario genera contenido que atrae a nuevos usuarios desde fuera del producto.
Ejemplo Notion: usuario crea una plantilla pública → la comparte en Twitter → nuevos usuarios la descubren y se registran para usarla.
Acción: facilita el compartir externo y asegura que el contenido tenga valor para quien lo recibe sin estar registrado.

**3. Loop de efectos de red**
El producto es más valioso cuantos más usuarios tiene en la misma red o equipo.
Ejemplo Slack: un miembro del equipo lo adopta → invita al equipo → el equipo invita a proveedores externos → los proveedores lo adoptan en sus empresas.
Acción: identifica la unidad natural de grupo en tu mercado (equipo, empresa, comunidad, sector).

**4. Loop de marketplace o UGC**
Los usuarios producen el inventario o contenido que atrae a otros usuarios.
Ejemplo Airbnb: el anfitrión publica su casa → los huéspedes reservan → huéspedes satisfechos se convierten en anfitriones.
Acción: reduce la fricción para que el consumidor pase a ser productor.

## Proceso paso a paso para diseñar tu loop

**Paso 1 – Mapea el loop actual (si existe)**
Describe el flujo: usuario activo → acción → activo creado → canal de distribución → nuevo usuario potencial → conversión → usuario activo. ¿Dónde se rompe el loop hoy?

**Paso 2 – Calcula el coeficiente viral (K)**
K = invitaciones enviadas por usuario × tasa de conversión de invitaciones.
Si K > 1, el loop es viral puro. Si K < 1, necesitas combinar el loop viral con adquisición pagada o SEO.
Ejemplo: si cada usuario invita a 3 personas y el 20 % se registra → K = 0,6. Necesitas multiplicar por 2 el volumen de invitaciones o mejorar la conversión.

**Paso 3 – Identifica el punto de fricción más alto**
Usa datos o hipótesis para localizar dónde se pierde más gente en el loop. ¿Es en el momento de la invitación? ¿En la activación del invitado? ¿En que el invitado repita la acción?

**Paso 4 – Diseña el incentivo correcto**
Los incentivos pueden ser: funcionales (más capacidad, más funciones), sociales (estatus, reconocimiento), económicos (descuento, crédito) o altruistas (ayuda a tu equipo). El mejor incentivo es el que está alineado con el valor central del producto, no un regalo genérico.

**Paso 5 – Crea el mensaje de activación del loop**
Escríbeme el mensaje exacto (email, notificación push o in-app) que se enviará al usuario en el momento óptimo para activar el loop. Debe incluir: qué acción hacer, qué beneficio obtendrá el usuario y qué beneficio obtendrá el invitado.

**Paso 6 – Define las métricas del loop**
- Tasa de activación del loop: % de usuarios que realizan la acción clave
- K-factor: coeficiente viral
- Tiempo de ciclo: cuántos días tarda el loop en completarse
- CAC orgánico: coste de adquisición generado por el loop

## Entregables que quiero

1. Diagrama textual del loop principal (formato: A → B → C → A)
2. K-factor estimado con los datos que tengo
3. Top 3 fricciones a eliminar para acelerar el loop
4. Mensaje de activación del loop para el canal más relevante
5. Plan de experimentos a 30 días para validar el loop

Describe mi producto aquí: [DESCRIPCIÓN DE TU PRODUCTO Y MODELO DE NEGOCIO]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar bucles de crecimiento viral para reducir el CAC y escalar usuarios orgánicamente',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Infraestructura como código con Terraform',
                'description'      => 'Gestiona y versiona tu infraestructura cloud como si fuera código: módulos reutilizables, state remoto y pipelines de despliegue automatizados.',
                'prompt_content'   => <<<'PROMPT'
Eres un ingeniero de infraestructura senior especializado en Terraform y plataformas cloud (AWS, GCP, Azure). Tu objetivo es guiarme para adoptar Infrastructure as Code (IaC) con Terraform de forma profesional, desde los conceptos fundamentales hasta las prácticas avanzadas de equipos que gestionan infraestructuras críticas.

## Por qué Terraform y no alternativas

Antes de empezar, quiero entender el ecosistema:
- **Terraform vs CloudFormation**: Terraform es agnóstico al proveedor, HCL es más legible y tiene un ecosistema de módulos comunitario masivo (Terraform Registry). CloudFormation está limitado a AWS.
- **Terraform vs Pulumi**: Pulumi usa lenguajes de propósito general (Python, TypeScript), ideal si el equipo prefiere no aprender HCL. Terraform tiene más madurez y documentación.
- **Terraform vs CDK**: AWS CDK genera CloudFormation bajo el capó; útil si ya usas AWS y quieres programabilidad, pero te ata al proveedor.

## Conceptos fundamentales que necesito dominar

**Providers**: son los plugins que conectan Terraform con la API del proveedor. Ejemplo: `provider "aws" { region = "eu-west-1" }`. Siempre fija la versión del provider para evitar cambios inesperados.

**Resources**: la unidad básica de infraestructura. Ejemplo: `resource "aws_s3_bucket" "mi_bucket" { bucket = "mi-empresa-datos" }`.

**Variables y outputs**: parametriza tus configuraciones con `variable` y expón valores con `output` para que otros módulos los consuman.

**State**: Terraform mantiene un fichero de estado (`terraform.tfstate`) que mapea el código con la infraestructura real. Nunca guardes el estado en local en un equipo: usa un backend remoto (S3 + DynamoDB para locking en AWS, GCS en GCP, Terraform Cloud).

**Plan y Apply**: `terraform plan` muestra los cambios sin aplicarlos (revisión obligatoria antes de `terraform apply` en producción).

## Estructura de proyecto recomendada para equipos

```
infra/
├── modules/
│   ├── vpc/
│   ├── ecs-cluster/
│   └── rds-postgres/
├── environments/
│   ├── dev/
│   │   ├── main.tf
│   │   ├── variables.tf
│   │   └── terraform.tfvars
│   ├── staging/
│   └── production/
└── .github/workflows/
    └── terraform.yml
```

Los módulos son bloques reutilizables. Un módulo `vpc` define la red; los entornos lo llaman con distintos parámetros (CIDR, número de AZs, etc.).

## Pipeline de CI/CD para Terraform

**En cada Pull Request**: ejecuta `terraform fmt -check`, `terraform validate` y `terraform plan`. Publica el plan como comentario en el PR para revisión del equipo. Herramientas: Atlantis (self-hosted), Terraform Cloud, o GitHub Actions con el action oficial de HashiCorp.

**En merge a main**: ejecuta `terraform apply -auto-approve` solo en entornos no productivos. Producción requiere aprobación manual o un segundo PR de promoción.

## Prácticas avanzadas

**Workspaces vs directorios separados por entorno**: los workspaces de Terraform son útiles para entornos muy similares (múltiples regiones), pero para dev/staging/prod con configuraciones distintas es más claro usar directorios separados.

**Terragrunt**: wrapper sobre Terraform que elimina la repetición de configuración de backend y providers entre entornos. Útil en organizaciones con muchos entornos y cuentas AWS.

**Checkov y tfsec**: herramientas de análisis estático de seguridad para Terraform. Detectan buckets S3 sin cifrado, grupos de seguridad permisivos, etc. Intégralos en el pipeline de CI.

**Drift detection**: la infraestructura real puede diferir del estado de Terraform si alguien hizo cambios manuales en la consola. Ejecuta `terraform plan` periódicamente (job nocturno) para detectar drift y alertar al equipo.

## Lo que quiero que hagas

1. Genera la estructura inicial de módulo Terraform para [TIPO DE INFRAESTRUCTURA: ej. cluster ECS con RDS en AWS].
2. Escribe el backend remoto en S3 con locking DynamoDB.
3. Muéstrame el workflow de GitHub Actions completo para el pipeline de plan/apply.
4. Lista las 5 variables obligatorias que debe parametrizar cualquier módulo de producción.
5. Explica cómo gestionar los secretos (contraseñas de BD, API keys) sin exponerlos en el estado de Terraform.

Mi proveedor cloud es: [AWS / GCP / Azure]
Mi caso de uso es: [DESCRIPCIÓN DE LA INFRAESTRUCTURA]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Adoptar IaC con Terraform: módulos, state remoto, pipelines CI/CD y seguridad',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de iconografía personalizada',
                'description'      => 'Crea un sistema de iconos propio coherente con la marca: estilo, grid, trazos, variantes y proceso de exportación para producto digital.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador de UI con especialización en sistemas de diseño e iconografía. Tu objetivo es ayudarme a crear un sistema de iconos personalizado para mi marca que sea coherente, escalable y técnicamente impecable para su uso en productos digitales.

## Por qué crear iconos propios en lugar de usar librerías genéricas

Los iconos de librerías como Material Icons, Feather o Font Awesome son excelentes puntos de partida, pero tienen limitaciones: reflejan la personalidad de otra marca, tienen restricciones de estilo que a veces chocan con tu identidad visual, y cuando necesitas iconos específicos de tu sector o producto, simplemente no existen. Un sistema propio te da control total y coherencia visual.

## Paso 1: Define el estilo visual antes de dibujar

Las decisiones de estilo determinan todo lo demás. Respóndete estas preguntas:

**Personalidad de la marca**: ¿es técnica y precisa (trazos finos, esquinas afiladas), amigable y accesible (trazos más gruesos, esquinas redondeadas), o expresiva y creativa (formas irregulares, asimetría)?

**Estilo de trazo**: ¿outlined (solo trazos, sin relleno), filled (relleno sólido), duotone (dos colores o niveles de opacidad), o thin line (trazos muy finos, estilo minimalista)?

**Nivel de detalle**: ¿iconos abstractos con pocas formas, o iconos más descriptivos con más detalles? A menor tamaño de uso, menos detalle es posible.

Ejemplos de referencia: Phosphor Icons (sistema flexible con 6 variantes), Heroicons (outlined y solid), Streamline (ultra-detallados).

## Paso 2: Establece el grid y las restricciones técnicas

**Grid base**: trabaja en un canvas de 24×24 px con un área activa de 20×20 px y 2 px de margen en cada lado. Este estándar es compatible con la mayoría de implementaciones en SVG y fuentes de iconos.

**Grosor de trazo**: elige un grosor y mantenlo constante. Valores comunes: 1,5 px para estilo thin, 2 px para estilo regular, 3 px para estilo bold. El grosor debe verse igual visualmente en todas las formas (los trazos diagonales necesitan compensación óptica).

**Esquinas**: si usas esquinas redondeadas, define el radio una vez: 1 px para look técnico, 2 px para look amigable, 3+ px para look suave. Aplícalo consistentemente, incluso en los extremos de los trazos (strokeLinecap: round).

**Alineación al pixel**: todos los vértices deben estar en coordenadas enteras o en múltiplos de 0,5 para evitar suavizado antialiasing que emborrone los iconos a tamaños pequeños.

## Paso 3: Define las categorías y el inventario

Antes de diseñar, lista los iconos que necesitas por categorías. Ejemplo para una app SaaS:
- Navegación: home, menú, atrás, cerrar, buscar
- Acciones: editar, borrar, guardar, compartir, descargar, subir
- Estado: check, error, warning, info, cargando
- Contenido: archivo, carpeta, imagen, vídeo, documento
- Comunicación: email, notificación, chat, usuario, equipo
- Específicos del producto: [tus iconos únicos]

## Paso 4: Proceso de diseño en Figma

1. Crea un frame 24×24 por icono con el grid activado.
2. Usa componentes para los elementos repetidos (flechas, cruces, puntos).
3. Nombra cada icono con una convención clara: `icon/[categoría]/[nombre]`. Ejemplo: `icon/action/edit`.
4. Crea variantes dentro del mismo componente: outlined y filled, o tamaños 16/24/32.
5. Usa Auto Layout en el componente padre para facilitar el uso en diseños.

## Paso 5: Exportación y entrega al equipo de desarrollo

**SVG optimizado**: exporta cada icono como SVG. Usa SVGO o el plugin Figma "SVG Export" para eliminar metadatos innecesarios. El SVG final debe tener solo los paths necesarios, sin grupos vacíos ni estilos inline redundantes.

**Sprite SVG**: para web, combina todos los iconos en un sprite SVG con `<symbol id="icon-nombre">`. Esto permite usarlos con `<use href="#icon-nombre">` sin cargar archivos individuales.

**Fuente de iconos**: si necesitas usar los iconos en contextos donde SVG no es práctico (emails, apps nativas), genera una fuente con IcoMoon o Fontello.

**Storybook / Figma Library**: publica los iconos como librería compartida en Figma y documenta cada icono con su nombre técnico para que diseño y desarrollo usen la misma nomenclatura.

## Lo que quiero que hagas

1. Define el estilo visual de mi sistema de iconos basándote en: [DESCRIBE TU MARCA: colores, tipografía, personalidad].
2. Genera el inventario de los 30 iconos prioritarios organizados por categoría.
3. Escribe las reglas de estilo en formato de design tokens (grosor, radio de esquinas, tamaño del canvas).
4. Proporciona el código SVG base de 3 iconos de ejemplo siguiendo las reglas definidas.
5. Explica el proceso de QA para revisar coherencia antes de entregar al equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 90,
                'use_case'         => 'Crear un sistema de iconos personalizado coherente con la marca para producto digital',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Outbound multicanal: email, LinkedIn y teléfono',
                'description'      => 'Diseña secuencias de prospección outbound que combinan email, LinkedIn y teléfono para maximizar la tasa de respuesta en ventas B2B.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ventas B2B con experiencia en equipos de SDR (Sales Development Representatives) de empresas SaaS y de servicios. Tu misión es ayudarme a diseñar una secuencia de prospección outbound multicanal que combine email, LinkedIn y teléfono para conseguir reuniones con mi perfil de cliente ideal (ICP).

## Por qué el outbound multicanal supera al monocanal

Los compradores B2B actuales reciben decenas de emails fríos al día. La tasa de apertura media de un email frío ha caído al 20-25 % y la tasa de respuesta al 1-3 %. Sin embargo, combinar canales multiplica la probabilidad de que el prospecto vea tu mensaje: el email llega a la bandeja, LinkedIn refuerza el reconocimiento de tu nombre y cara, y el teléfono añade el componente humano que diferencia. Según Salesforce, los SDRs que usan 3 o más canales generan un 287 % más de oportunidades que los que usan uno solo.

## Framework: La secuencia de 12 touchpoints en 21 días

**Semana 1: Calentamiento y primer contacto**
- Día 1: Conecta en LinkedIn con nota personalizada (no vendas, muestra interés genuino).
- Día 2: Email 1 – El email de investigación. Menciona algo específico de la empresa o del prospecto (financiación reciente, post publicado, noticia del sector). Sin propuesta de valor todavía.
- Día 4: Interactúa con un post reciente del prospecto en LinkedIn (comenta con valor, no un emoji).
- Día 5: Llamada de descubrimiento. Si no responde, deja un voicemail de 20 segundos máximo.

**Semana 2: Propuesta de valor**
- Día 8: Email 2 – La propuesta de valor. Un párrafo. Problema que resuelves + resultado que consigues + prueba social (cliente similar). CTA: ¿tendría sentido hablar 15 minutos?
- Día 9: Mensaje directo en LinkedIn que hace referencia al email enviado.
- Día 11: Segunda llamada. Diferente hora del día que la primera.
- Día 12: Email 3 – El caso de éxito. Comparte un resultado concreto de un cliente del mismo sector o tamaño. No pidas reunión todavía, añade valor.

**Semana 3: Cierre y breakup**
- Día 15: Email 4 – La pregunta directa. ¿Es esto un problema que estás tratando de resolver este trimestre?
- Día 17: Tercera llamada o segundo mensaje de LinkedIn.
- Día 19: Email 5 – El "breakup email". "Entiendo que quizás no sea el momento o no sea relevante. Voy a dejar de contactarte, pero si en el futuro [problema] es una prioridad, aquí estaré."
- Día 21: Último mensaje de LinkedIn con un recurso gratuito (artículo, herramienta, plantilla) sin pedir nada.

## Cómo personalizar cada touchpoint

**Nivel 1 – Personalización básica** (escala, usar para listas grandes): nombre, empresa, cargo, sector.
**Nivel 2 – Personalización media** (50-200 prospectos): noticia reciente de la empresa, tecnología que usan (detectada con BuiltWith o Clearbit), tamaño del equipo de ventas o marketing.
**Nivel 3 – Personalización profunda** (cuentas estratégicas, ABM): menciona un post específico del prospecto, cita su informe anual, referencia a una conexión en común.

## La fórmula del email frío que convierte

Estructura PAS adaptada a outbound B2B:
1. **Asunto** (máx. 6 palabras): específico, no genérico. Ejemplo: "pregunta sobre el equipo de CS de [Empresa]".
2. **Primera línea** (1 frase): por qué contactas a esta persona concreta hoy.
3. **Problema** (1-2 frases): el dolor que intuyes que tiene.
4. **Solución** (1 frase): cómo lo resuelves, sin tecnicismos.
5. **Prueba** (1 frase): resultado de un cliente similar.
6. **CTA** (1 frase): fácil de responder con un sí/no. "¿Tiene sentido hablar esta semana?"

## Métricas que debes medir

- Tasa de apertura de email: objetivo >40 % (indica que el asunto funciona)
- Tasa de respuesta: objetivo >5 % en secuencia multicanal
- Tasa de conversión a reunión: objetivo >2 % del total de prospectos contactados
- Tasa de aceptación de LinkedIn: objetivo >30 %
- Conexión en llamada: objetivo >10 % de intentos (varía mucho por sector)

## Lo que quiero que generes

1. La secuencia completa de 12 touchpoints con el texto exacto de cada email, mensaje de LinkedIn y script de llamada/voicemail, adaptada a mi producto y sector.
2. 5 asuntos de email alternativos para el Email 1 y el Email 2.
3. El breakup email con la variante más efectiva para B2B SaaS.
4. Una plantilla de CRM para registrar el avance de cada prospecto en la secuencia.

Mi producto/servicio es: [DESCRIPCIÓN]
Mi ICP (perfil de cliente ideal) es: [CARGO, SECTOR, TAMAÑO DE EMPRESA]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear secuencias de prospección outbound multicanal para generar reuniones B2B',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'North Star Metric: define la métrica que guía al equipo',
                'description'      => 'Define la North Star Metric de tu producto: el único número que captura el valor entregado a los usuarios y guía todas las decisiones del equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en product management con experiencia en empresas que han adoptado el modelo de North Star Metric (NSM), como Amplitude, Airbnb y Spotify. Tu objetivo es ayudarme a identificar y definir la NSM de mi producto, conectarla con los inputs que la mueven, y usarla para alinear a todo el equipo.

## Qué es la North Star Metric y por qué importa

La North Star Metric es el único número que mejor refleja el valor que tu producto entrega a los usuarios y que, si crece de forma sostenida, predice el crecimiento del negocio a largo plazo. No es una métrica de negocio (ingresos, beneficio) ni una métrica de vanidad (descargas, visitas). Es una métrica de valor para el usuario.

Ejemplos canónicos:
- **Airbnb**: noches reservadas
- **Spotify**: tiempo de escucha
- **Slack**: mensajes enviados entre miembros activos del equipo
- **Facebook**: DAU (usuarios activos diarios)
- **HubSpot**: número de leads gestionados en el CRM

Lo que distingue una buena NSM: (1) refleja el valor real entregado al usuario, (2) predice la retención y el crecimiento, (3) es medible en tiempo real, (4) todo el equipo puede influir en ella con su trabajo.

## Los 6 arquetipos de North Star Metric

Según el framework de Amplitude, los productos suelen caer en uno de estos arquetipos:

**1. Amplitud de uso** (número de usuarios activos): ideal para redes sociales y plataformas de comunicación. Ejemplo: DAU de Twitter.

**2. Profundidad de uso** (cuánto usa cada usuario el producto): ideal para herramientas de productividad. Ejemplo: documentos creados por usuario en Notion.

**3. Frecuencia de uso** (con qué frecuencia vuelven): ideal para apps de hábito. Ejemplo: sesiones por semana en Duolingo.

**4. Eficiencia** (velocidad o facilidad para completar la tarea clave): ideal para herramientas de negocio. Ejemplo: tiempo para publicar un anuncio en Indeed.

**5. Transacciones** (número de intercambios de valor): ideal para marketplaces y e-commerce. Ejemplo: pedidos completados en Glovo.

**6. Calidad** (satisfacción o resultado del usuario): ideal para servicios donde el outcome importa más que el volumen. Ejemplo: % de usuarios que consiguieron empleo en LinkedIn Jobs.

## Proceso para elegir tu NSM

**Paso 1 – Define el "momento de valor"**
¿Cuándo exactamente el usuario obtiene el valor que prometiste? Describe ese momento en una frase: "El usuario obtiene valor cuando [ACCIÓN CONCRETA]."

**Paso 2 – Identifica candidatos a NSM**
Lista 3-5 métricas que ocurren en o después del momento de valor. Para cada una pregúntate: ¿si esta métrica sube, el usuario está obteniendo más valor?

**Paso 3 – Test de correlación**
La NSM debe correlacionar con retención. Analiza: los usuarios con valores altos en esta métrica, ¿retienen mejor? ¿Renuevan más? Si no tienes datos, usa la lógica del producto para argumentarlo.

**Paso 4 – Test de accionabilidad**
¿Puede el equipo de producto, marketing, éxito del cliente y engineering influir en esta métrica con su trabajo? Si solo la puede mover un equipo, no es una buena NSM.

## Los input metrics: los conductores de la NSM

La NSM por sí sola no dice qué hacer. Los input metrics son las palancas que la mueven, y cada equipo o squad es responsable de uno o dos inputs.

Ejemplo con Spotify (NSM = tiempo de escucha):
- Activación: % de nuevos usuarios que escuchan su primera playlist en el día 1
- Descubrimiento: número de nuevas canciones añadidas a playlists por semana
- Social: playlists compartidas que generan nuevas escuchas
- Retención: usuarios que vuelven a escuchar en la semana 2 tras el registro

## Cómo comunicar la NSM al equipo

1. Crea un dashboard visible para todos con la NSM en tiempo real.
2. En cada sprint planning, cada equipo presenta cómo su trabajo moverá los inputs.
3. En la retrospectiva, analiza si los inputs se movieron y si la NSM respondió.
4. Revisa la NSM anualmente: a medida que el producto madura, puede cambiar el arquetipo óptimo.

## Lo que quiero que hagas

1. Basándote en la descripción de mi producto, propón 3 candidatos a NSM con sus pros y contras.
2. Recomienda la NSM más adecuada y justifícala con el test de correlación y accionabilidad.
3. Define 4-6 input metrics conectadas a la NSM y asígnalas a los equipos tipo (producto, growth, CS, engineering).
4. Diseña el dashboard mínimo: qué números mostrar, con qué frecuencia actualizarlos y cómo presentarlos en el all-hands.
5. Escribe el enunciado oficial de la NSM en una frase que el CEO pueda usar en la presentación del equipo.

Mi producto es: [DESCRIPCIÓN DEL PRODUCTO, MODELO DE NEGOCIO Y MÉTRICAS ACTUALES QUE YA MIDES]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Definir la North Star Metric y sus inputs para alinear decisiones de producto y negocio',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Evaluación 360 grados: diseña e implementa el proceso',
                'description'      => 'Diseña e implementa un proceso de feedback 360 grados: criterios, formularios, calibración y conversaciones de desarrollo sin sesgos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en recursos humanos y desarrollo organizacional con experiencia en el diseño e implementación de procesos de evaluación del desempeño en empresas de 50 a 2.000 empleados. Tu misión es ayudarme a diseñar un proceso de evaluación 360 grados que sea percibido como justo, que genere feedback accionable y que impulse el desarrollo real de las personas.

## Qué es una evaluación 360 y cuándo usarla

Una evaluación 360 recopila feedback sobre el desempeño de una persona desde múltiples perspectivas: autoevaluación, su manager (evaluación descendente), sus colaboradores directos si tiene equipo (evaluación ascendente), y sus pares o compañeros con quienes trabaja habitualmente. El nombre "360" refleja que el feedback viene de todas las direcciones.

**Cuándo sí usarla**: desarrollo profesional, identificación de puntos ciegos, planes de carrera, calibración de potencial.
**Cuándo no usarla**: como único input para decisiones de compensación o despido (introduce demasiado sesgo político), o cuando la cultura de la empresa no tiene la madurez para dar feedback honesto sin miedo a represalias.

## Paso 1: Define las competencias a evaluar

El error más común es evaluar demasiados criterios. Limita la evaluación a 6-8 competencias organizadas en dos bloques:

**Bloque A – Competencias universales** (para todos los roles):
- Comunicación efectiva
- Colaboración y trabajo en equipo
- Adaptabilidad y aprendizaje continuo
- Orientación a resultados

**Bloque B – Competencias por nivel** (ajusta según el nivel del evaluado):
- Para individual contributors: autonomía técnica, gestión del tiempo, calidad del trabajo.
- Para managers: desarrollo del equipo, toma de decisiones, gestión del rendimiento.
- Para directivos: visión estratégica, liderazgo inspiracional, gestión del cambio.

## Paso 2: Diseña los formularios

Para cada competencia, usa preguntas de escala + preguntas abiertas.

**Escala**: 1 a 5, donde 1 = "raramente o nunca demuestra esta competencia" y 5 = "modelo a seguir para el resto del equipo". Evita escalas pares (sin punto neutro) o demasiado amplias (1 a 10 introduce ambigüedad).

**Preguntas abiertas** (1-2 por competencia): "¿Puedes dar un ejemplo concreto de una situación en la que [nombre] demostró esta competencia?" y "¿Qué podría hacer [nombre] de manera diferente para ser más efectivo/a en esta área?"

**Reglas para las preguntas abiertas**: deben pedir ejemplos específicos (el método STAR: Situación, Tarea, Acción, Resultado), no opiniones generales. "Es muy buen comunicador" no es útil; "en la reunión del Q3 con el cliente X, [nombre] consiguió reconducir la situación explicando el plan de contingencia de forma clara" sí lo es.

## Paso 3: Selección de evaluadores y anonimato

**Número de evaluadores por persona**: entre 4 y 8. Menos de 4 rompe el anonimato; más de 8 genera fatiga evaluadora.

**Criterios de selección**: el evaluado propone a sus evaluadores (dentro de un pool definido) y el manager valida la lista para evitar que solo se seleccione a personas afines (sesgo de conveniencia).

**Anonimato**: los comentarios cualitativos son siempre anónimos para el evaluado. Los resultados numéricos se agrupan por categoría (pares, colaboradores, manager) y solo se muestran medias si hay 3 o más evaluadores en el grupo.

## Paso 4: Calibración antes de las conversaciones

Antes de compartir el feedback con el evaluado, el manager y RRHH deben revisar los resultados para:
- Detectar outliers (una puntuación de 1 o 5 aislada puede ser un dato o un sesgo).
- Identificar patrones: si 3 pares mencionan el mismo punto de mejora, es una señal fuerte.
- Preparar el relato: el feedback debe presentarse como una oportunidad de desarrollo, no como un juicio.

## Paso 5: La conversación de desarrollo

La conversación de feedback no es una reunión de evaluación; es una conversación de desarrollo. Estructura recomendada (60 minutos):
1. Apertura (5 min): contexto y objetivo de la conversación.
2. Autoevaluación primero (10 min): pregunta al evaluado cómo cree que le ha ido antes de compartir el feedback externo.
3. Fortalezas (15 min): comparte los puntos fuertes con ejemplos concretos de los evaluadores.
4. Áreas de desarrollo (15 min): presenta los patrones de mejora, sin leer los comentarios literales.
5. Plan de acción (15 min): define 2-3 acciones concretas con fechas y métricas de seguimiento.

## Lo que quiero que hagas

1. Diseña el formulario completo de evaluación 360 para [CARGO/NIVEL] con las competencias, la escala y las preguntas abiertas.
2. Crea el calendario del proceso (desde comunicación interna hasta conversaciones de desarrollo) para un ciclo de evaluación de 6 semanas.
3. Escribe el email de comunicación interna que explica el proceso a toda la empresa.
4. Define los criterios de calibración para detectar sesgos en los resultados.
5. Proporciona el guión de la conversación de desarrollo para el manager.

Mi empresa tiene [NÚMERO] empleados y el proceso es para [NIVEL/TIPO DE ROL].
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar un proceso de evaluación 360 justo y que genere desarrollo real',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Valoración de startups: pre-money, DCF y múltiplos',
                'description'      => 'Aprende los métodos de valoración de startups más usados en inversión: pre-money, DCF simplificado y múltiplos de mercado con casos reales.',
                'prompt_content'   => <<<'PROMPT'
Eres un analista de inversión con experiencia en venture capital y corporate finance. Tu objetivo es enseñarme los métodos de valoración de startups más utilizados, cuándo aplicar cada uno, y cómo preparar una valoración defendible para una ronda de inversión o una negociación con compradores estratégicos.

## Por qué valorar una startup es diferente a valorar una empresa madura

Las empresas maduras tienen flujos de caja estables, historial de beneficios y comparables de mercado claros. Las startups, en cambio, tienen flujos de caja negativos, alta incertidumbre sobre el futuro y múltiplos que varían enormemente según el momento del mercado y el sector. Por eso, la valoración de una startup no es un cálculo exacto: es una negociación fundamentada en supuestos y narrativa.

## Método 1: Pre-money y post-money (el más usado en seed y Serie A)

La valoración pre-money es el valor de la empresa antes de recibir la inversión. La post-money es el valor después.

**Fórmula**: Post-money = Pre-money + inversión recibida. Porcentaje del inversor = inversión / post-money.

**Ejemplo**: la empresa tiene una valoración pre-money de 4 M€. El inversor pone 1 M€. Post-money = 5 M€. El inversor tiene el 20 % (1/5).

¿Cómo se llega al pre-money? En fases tempranas (pre-revenue o seed), la valoración pre-money no se calcula: se negocia. Los factores que la determinan son: el equipo (founder-market fit, experiencia previa, exits), el mercado total disponible (TAM), la tracción inicial (usuarios, MRR, cartas de intención), la tecnología o ventaja competitiva, y las condiciones del mercado de VC en ese momento.

**Benchmarks orientativos en España y Europa (2024)**: startups pre-revenue seed, 1-3 M€ pre-money; startups con 10-50 K€ MRR en Serie A, 8-20× ARR; startups en mercados hot (IA, fintech), múltiplos pueden duplicarse.

## Método 2: Múltiplos de mercado (ARR múltiple para SaaS)

Es el método más usado para startups con ingresos recurrentes. Se basa en comparar la empresa con transacciones recientes de empresas similares.

**Fórmula**: Valoración = ARR × múltiplo de mercado.

**Cómo encontrar el múltiplo**: consulta bases de datos como Carta, PitchBook, Dealroom o los informes anuales de SaaStr para múltiplos de ARR por sector y tasa de crecimiento. En 2024, los múltiplos SaaS en Europa oscilan entre 4× y 12× ARR para startups B2B en crecimiento, dependiendo del NRR (Net Revenue Retention), el margen bruto y la tasa de crecimiento YoY.

**Rule of 40**: una startup SaaS saludable tiene tasa de crecimiento YoY + margen EBITDA ≥ 40. Las que superan el 40 % sostienen múltiplos más altos. Ejemplo: crecimiento del 80 % + margen del −20 % = 60 %, excelente. Crecimiento del 20 % + margen del 10 % = 30 %, múltiplo más conservador.

## Método 3: DCF simplificado (para startups en Serie B+ con forecasts)

El DCF (Discounted Cash Flow) proyecta los flujos de caja futuros y los descuenta a valor presente usando una tasa de descuento alta para reflejar el riesgo.

**Pasos**:
1. Proyecta los flujos de caja libres para los próximos 5 años (el plan financiero que ya tienes).
2. Estima el valor terminal: aplica un múltiplo de salida sobre el EBITDA del año 5 (ej: 8× EBITDA).
3. Descuenta todos los flujos con una tasa de descuento (WACC): para startups de alto riesgo, usa 25-35 %.
4. Suma los valores descontados: ese es el valor actual de la empresa.

**Limitación**: el DCF es muy sensible a los supuestos de crecimiento y a la tasa de descuento. Pequeños cambios en los inputs generan valoraciones muy distintas. Úsalo como comprobación, no como única referencia.

## Método 4: Venture Capital Method

Permite al inversor calcular cuánto puede pagar hoy para obtener su retorno objetivo en el exit.

**Fórmula**: Valoración pre-money = (Valoración de salida esperada / múltiplo objetivo del inversor) − inversión.

**Ejemplo**: el inversor espera un exit de 50 M€ en 5 años con un 10× de retorno. Inversión de 2 M€. Pre-money máximo que pagaría = (50/10) − 2 = 3 M€.

## Lo que quiero que hagas

1. Calcula la valoración de mi startup usando los 3 métodos principales (múltiplos, DCF básico y VC method) con mis datos actuales.
2. Identifica cuál es el método más favorable para mi situación y cómo argumentarlo ante un inversor.
3. Explica qué ajustes mejorarían mi valoración en los próximos 6 meses (métricas a optimizar).
4. Crea un resumen ejecutivo de valoración de una página para incluir en el data room.

Mis datos: ARR = [X €], crecimiento YoY = [X %], MRR = [X €], margen bruto = [X %], sector = [X], país = [X].
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Calcular y presentar la valoración de una startup para una ronda de inversión o M&A',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Registro de marca en España y la UE',
                'description'      => 'Guía completa para registrar tu marca en España (OEPM) y en la Unión Europea (EUIPO): clases de Niza, costes, plazos y gestión de oposiciones.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en propiedad intelectual e industrial con experiencia en registros de marcas ante la OEPM (Oficina Española de Patentes y Marcas) y la EUIPO (Oficina de Propiedad Intelectual de la Unión Europea). Tu objetivo es explicarme el proceso completo de registro de marca, cómo elegir las clases de Niza correctas, los costes reales, los plazos y cómo gestionar las oposiciones si las hubiera.

## Por qué registrar tu marca antes de empezar a comercializar

Muchos emprendedores empiezan a usar un nombre comercial sin registrarlo y descubren años después que otra empresa tiene derechos anteriores sobre el mismo signo o uno similar. En ese momento, el coste en tiempo, dinero y daño reputacional es enorme. El registro de marca te da el derecho exclusivo a usar el signo en las clases y el territorio registrado, y es la base para actuar contra imitadores.

## El sistema de clasificación de Niza

La Clasificación Internacional de Niza organiza los productos y servicios en 45 clases (1-34 para productos, 35-45 para servicios). Al registrar una marca, debes indicar en qué clases quieres protección.

**Clases más relevantes para negocios digitales**:
- Clase 35: publicidad, gestión de negocios, marketing, servicios de intermediación comercial online.
- Clase 38: telecomunicaciones, plataformas de comunicación online.
- Clase 42: servicios tecnológicos, desarrollo de software, SaaS, diseño web.
- Clase 41: educación, formación, entretenimiento, publicación online.
- Clase 9: software, aplicaciones informáticas, dispositivos electrónicos.

**Error común**: registrar solo la clase que parece más obvia y olvidar la que cubre los servicios auxiliares. Si tienes un SaaS (clase 42) que también hace marketing de contenidos (clase 35), registra ambas.

## Proceso de registro en la OEPM (marca española)

**Paso 1 – Búsqueda de anterioridades**: antes de solicitar, busca si existen marcas iguales o similares en las clases que te interesan. Usa el buscador gratuito SITADEX de la OEPM o TMview (que incluye todas las oficinas europeas). Una búsqueda profesional por un agente de la propiedad industrial es recomendable para signos con riesgo de confusión.

**Paso 2 – Presentación de la solicitud**: puedes hacerlo online en la web de la OEPM. Necesitas: el signo (nombre, logo o combinación), las clases elegidas y el listado de productos/servicios dentro de cada clase. La especificación de los servicios debe ser precisa: "desarrollo de software a medida" es mejor que "software" a secas.

**Paso 3 – Examen formal y publicación**: la OEPM examina que la solicitud cumple los requisitos formales y que el signo no sea descriptivo, genérico o contrario al orden público. Si pasa el examen, se publica en el BOPI (Boletín Oficial de la Propiedad Industrial) durante 2 meses para que terceros puedan oponerse.

**Paso 4 – Período de oposición**: cualquier titular de una marca anterior similar puede presentar oposición en ese plazo. Si hay oposición, se abre un período de negociación entre las partes. Si no se resuelve, la OEPM resuelve con una resolución motivada.

**Paso 5 – Concesión**: si no hay oposición o si la oposición se rechaza, la marca se concede. Tendrás un título de registro con validez de 10 años, renovable indefinidamente.

**Costes OEPM (2024)**: tasa de solicitud 1 clase = 142,48 €; cada clase adicional = 80 €. Total para 3 clases = aprox. 303 €. Con agente de la propiedad industrial, añade 300-700 € de honorarios.

**Plazos**: de la solicitud al registro, entre 6 y 12 meses si no hay incidencias.

## Proceso de registro en la EUIPO (marca de la UE)

La Marca de la Unión Europea (MUE) protege en los 27 estados miembro con una sola solicitud.

**Cuándo elegir MUE vs marca española**: si tu mercado es principalmente España y no hay planes de expansión europea a corto plazo, la marca española es más barata y más rápida. Si vas a operar en varios países de la UE o si un competidor podría registrar antes en otro país, la MUE es mejor inversión.

**Costes EUIPO (2024)**: 850 € para 1 clase online; 50 € la segunda clase; 150 € la tercera clase y siguientes. Total para 3 clases = 1.050 €.

**Plazos**: 4-6 meses si no hay oposición (más rápido que la OEPM).

**Plataforma Fast Track**: la EUIPO ofrece un procedimiento acelerado si el listado de productos/servicios se toma íntegramente de su base de datos de términos aceptados. Reduce los plazos a 4 semanas en algunos casos.

## Gestión de oposiciones

Si recibes una oposición, tienes opciones antes de litigar: (1) solicitar un período de reflexión (cooling-off period) de 24 meses para negociar, (2) llegar a un acuerdo de coexistencia con el oponente (definiendo territorios, clases o sectores distintos), (3) impugnar la validez de la marca anterior si no ha sido usada en 5 años (la marca debe acreditar uso efectivo en el período relevante).

## Lo que quiero que hagas

1. Analiza mi nombre de marca y sugiere las clases de Niza más adecuadas para mi negocio, justificando cada una.
2. Guíame en la redacción del listado de productos/servicios para minimizar el riesgo de rechazo.
3. Calcula el coste total (tasas + agente) para registro en España y en la UE.
4. Explica qué hacer si aparece una oposición y cuáles son mis opciones realistas.

Mi nombre de marca es: [NOMBRE O DESCRIPCIÓN DEL SIGNO]
Mi negocio es: [DESCRIPCIÓN DEL PRODUCTO/SERVICIO Y MERCADO OBJETIVO]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Registrar una marca en España y la UE: clases de Niza, costes, plazos y oposiciones',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de usuarios en una crisis de producto',
                'description'      => 'Comunicación y soporte de cliente cuando hay un fallo grave: protocolos, mensajes por canal y recuperación de la confianza tras el incidente.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en Customer Success y gestión de crisis con experiencia en startups SaaS que han superado incidentes graves (caídas de servicio, pérdidas de datos, brechas de seguridad). Tu objetivo es ayudarme a gestionar la comunicación con los usuarios y el soporte durante y después de un fallo grave de producto, minimizando la pérdida de clientes y recuperando la confianza de la base de usuarios.

## Por qué la gestión de la comunicación es tan importante como arreglar el bug

En una crisis de producto, la mayoría de los clientes que se pierden no se van porque el fallo ocurrió: se van porque sintieron que la empresa no fue transparente, no comunicó a tiempo o no les dio soluciones concretas. Estudios de gestión de crisis de Zendesk muestran que el 52 % de los clientes que reciben una respuesta proactiva y clara durante un incidente aumentan su confianza en la empresa. La comunicación bien gestionada convierte una crisis en una oportunidad de demostrar la calidad del equipo.

## Fase 1: Los primeros 30 minutos (detección y activación del protocolo)

**Minuto 0-10 – Confirma el incidente**:
Antes de comunicar nada externamente, confirma que el problema es real y tiene impacto en usuarios (no solo en un entorno de pruebas). Establece: ¿qué está fallando exactamente?, ¿cuántos usuarios están afectados?, ¿desde cuándo?, ¿hay pérdida de datos?

**Minuto 10-20 – Activa el equipo de crisis**:
Designa roles: Incident Commander (quien coordina la respuesta técnica), Communications Lead (quien redacta y aprueba las comunicaciones), Customer-Facing Lead (quien responde en redes, email y soporte). En startups pequeñas, una persona puede asumir varios roles, pero deben estar definidos para evitar caos.

**Minuto 20-30 – Primera comunicación externa**:
Publica el primer mensaje en la página de estado (statuspage.io o equivalente). No esperes a tener la solución: comunica que estás investigando. El silencio en los primeros 30 minutos es el mayor error.

Plantilla de primera comunicación: "Estamos investigando un problema que afecta a [funcionalidad]. Nuestro equipo está trabajando en ello. Actualizaremos en 30 minutos. Disculpa los inconvenientes."

## Fase 2: Durante el incidente (comunicación cada 30 minutos)

**Regla de oro**: actualiza aunque no tengas novedades. "Seguimos trabajando en la solución, sin ETA confirmado todavía" es mejor que el silencio.

**Canales a gestionar en paralelo**:
- **Página de estado**: actualizaciones técnicas precisas para usuarios técnicos.
- **Email a usuarios afectados**: lenguaje claro, no técnico, con impacto en su flujo de trabajo.
- **In-app banner o notificación**: si el producto está parcialmente operativo, informa dentro de la app.
- **Redes sociales** (Twitter/X, LinkedIn): responde a las menciones públicas individualmente; no ignores los tweets negativos.
- **Canal de soporte** (chat, tickets): gestiona el volumen con una respuesta automática que reconoce el problema y enlaza a la página de estado para evitar que los agentes respondan lo mismo 100 veces.

**Qué decir y qué no decir**:
Sí: "Identificamos la causa raíz y estamos aplicando la solución." "El servicio estará restaurado aproximadamente a las [hora]."
No: "Ha sido un ataque externo" (sin confirmarlo), "Fue culpa del proveedor de nube" (no externalices la culpa públicamente en caliente), promesas de ETA que no puedes cumplir.

## Fase 3: Resolución y comunicación de cierre

Cuando el servicio se restaura, comunica:
1. Que el servicio está restaurado.
2. Qué ocurrió (explicación técnica en lenguaje accesible).
3. Qué impacto tuvo (usuarios afectados, duración, si hubo pérdida de datos).
4. Qué medidas tomas para que no vuelva a ocurrir (sin prometer el 100 % de disponibilidad).

Esta comunicación de cierre debe enviarse por email a todos los usuarios afectados, no solo publicarse en la página de estado.

## Fase 4: Recuperación de la confianza (los 7 días siguientes)

**Post-mortem público**: publica un documento de post-mortem (o "retrospectiva del incidente") en tu blog o centro de ayuda. Explica la cronología, la causa raíz, el impacto y las acciones de mejora. Las empresas más admiradas por sus usuarios son las que publican post-mortems honestos. Ejemplos de referencia: los post-mortems de GitLab, Cloudflare y Notion.

**Compensación**: valora si una compensación es adecuada (crédito en la cuenta, extensión de la suscripción, mes gratuito). No siempre es necesaria, pero en incidentes de más de 4 horas o con pérdida de datos es muy recomendable.

**Seguimiento individual**: los clientes enterprise o de alto valor deben recibir una llamada personal del Customer Success Manager o del CEO si el incidente fue grave. El contacto humano diferencia.

## Lo que quiero que hagas

1. Crea el protocolo completo de gestión de crisis para mi equipo: roles, canales y decisiones en cada fase.
2. Redacta los 4 mensajes clave: primera comunicación, actualización a los 60 minutos, comunicación de resolución y email de seguimiento post-incidente.
3. Escribe la plantilla de post-mortem público adaptada a mi tipo de producto.
4. Define los criterios para decidir si hay compensación económica y qué forma debe tomar.

Descripción de mi producto y base de usuarios: [TIPO DE PRODUCTO, NÚMERO DE USUARIOS, SEGMENTO (B2B/B2C)]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar la comunicación y el soporte durante y después de un fallo grave de producto',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Marca personal online para freelancers',
                'description'      => 'Construye la presencia digital que te convierte en la opción obvia para tu cliente ideal: posicionamiento, contenidos y canales para freelancers.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor de marca personal con experiencia en ayudar a freelancers y profesionales independientes a construir una presencia digital que atrae clientes de forma consistente, sin depender de plataformas de intermediación ni de la tarifa más baja. Tu objetivo es ayudarme a definir mi posicionamiento, elegir los canales correctos, crear contenido que demuestre mi expertise y convertir mi presencia online en mi principal fuente de captación de clientes.

## Por qué la marca personal es el activo más valioso de un freelance

Un freelance sin marca personal compite por precio en plataformas como Upwork o Fiverr, donde el cliente elige al más barato entre diez personas con perfiles similares. Un freelance con marca personal construida recibe solicitudes de entrada de clientes que ya confían en su trabajo antes de la primera llamada, puede cobrar 3-10 veces más por el mismo servicio y tiene el poder de elegir con quién trabaja.

La marca personal no es tener muchos seguidores: es ser conocido por la persona correcta (tu cliente ideal) como la solución al problema que tienen.

## Paso 1: Define tu posicionamiento en una frase

El error más común es presentarse con el cargo genérico: "diseñadora gráfica", "desarrollador web", "consultor de marketing". Eso no diferencia.

El posicionamiento efectivo responde a tres preguntas: ¿para quién trabajas específicamente?, ¿qué problema concreto resuelves?, ¿qué resultado obtiene el cliente?

**Fórmula**: Ayudo a [TIPO DE CLIENTE] a [RESOLVER PROBLEMA O CONSEGUIR RESULTADO] sin/con [DIFERENCIADOR O CONDICIÓN].

Ejemplos:
- "Diseño webs de alto rendimiento para clínicas dentales que quieren llenar su agenda sin depender de SEO lento."
- "Soy copywriter para fundadores de SaaS que lanzan un producto nuevo y necesitan que su web convenza antes de que el usuario baje al scroll."
- "Desarrollo automatizaciones de Make y n8n para equipos de ventas que quieren dejar de hacer tareas repetitivas manualmente."

La especialización asusta a los freelancers porque parece que limita el mercado. En realidad, lo amplía: el especialista siempre cobra más y recibe referidos más calificados que el generalista.

## Paso 2: Elige uno o dos canales donde está tu cliente ideal

No necesitas estar en todos lados. Un freelance con 500 seguidores muy calificados en LinkedIn genera más ingresos que otro con 5.000 seguidores dispersos en cuatro redes.

**LinkedIn**: el canal con mayor ROI para freelancers B2B. Publica 2-3 veces por semana con contenido de expertise. Interactúa en los posts de tus clientes potenciales. Optimiza el perfil: foto profesional, headline con la fórmula de posicionamiento, sección "Acerca de" orientada al cliente, no a tu CV.

**Twitter/X**: útil en sectores tech, marketing, diseño y startups. El formato conversacional permite construir relaciones rápido. Un hilo bien escrito puede traer decenas de solicitudes de contacto.

**YouTube o podcast**: el contenido de largo formato posiciona como experto de forma muy potente, pero requiere más inversión de tiempo. Ideal si tu servicio tiene un ciclo de venta largo y los clientes necesitan tiempo para confiar.

**Newsletter**: el canal de mayor conversión a largo plazo porque llegas directamente al email del suscriptor sin depender del algoritmo. Una newsletter de 500 suscriptores cualificados vale más que 5.000 seguidores en redes.

**Web con SEO**: fundamental si tu cliente busca en Google ("diseñador web para restaurantes Madrid", "copywriter email marketing"). Un blog con artículos bien posicionados genera leads pasivos durante años.

## Paso 3: El tipo de contenido que atrae clientes (no solo likes)

Los clientes no contratan al que tiene más likes: contratan al que demuestra que entiende su problema mejor que nadie.

**Tipos de contenido que convierten**:
- **Casos de éxito** (antes/después): "Ayudé a [tipo de cliente] a pasar de [situación inicial] a [resultado] en [tiempo]." Sin revelar nombres si es confidencial; describe el perfil.
- **Errores frecuentes de tu cliente ideal**: "El error que cometen la mayoría de clínicas dentales al hacer publicidad en Meta Ads." Demuestra que conoces su mundo mejor que ellos.
- **Proceso detallado de tu trabajo**: explica paso a paso cómo trabajas. Genera confianza y filtra clientes que no encajan con tu método.
- **Opinión sobre tendencias del sector**: posiciónate en el debate relevante de tu industria. Tener una postura clara atrae a quien comparte tu visión.
- **Testimonios y resultados concretos**: el contenido generado por los clientes satisfechos es el más persuasivo.

## Paso 4: Convierte la visibilidad en clientes

La marca personal no sirve si no tiene un sistema de captación claro. Define:
- **CTA único**: todo tu contenido dirige a una sola acción (reservar una llamada de diagnóstico, suscribirse a la newsletter, descargar un recurso gratuito que inicia la relación).
- **Página de contacto optimizada**: describe claramente qué tipo de proyectos aceptas, para quién trabajas y cuánto cuesta aproximadamente. Esto filtra clientes no cualificados antes de la llamada.
- **Sistema de seguimiento**: cuando un lead entra, ¿cuánto tardas en responder? ¿Tienes un proceso para la llamada de descubrimiento? ¿Sigues el contacto si no responde al primer email?

## Lo que quiero que hagas

1. Aplica la fórmula de posicionamiento a mi perfil y genera 3 versiones del headline de LinkedIn, de menor a mayor especificidad.
2. Recomienda los 2 canales más adecuados para mi tipo de cliente y explica con qué frecuencia y formato publicar en cada uno.
3. Crea un plan de contenido para las próximas 4 semanas: 12 ideas de posts con el ángulo, el formato y el objetivo de cada uno.
4. Diseña la página de contacto ideal para mi web: estructura, copywriting y el CTA principal.
5. Escribe la sección "Acerca de" de mi perfil de LinkedIn (200-250 palabras) orientada a mi cliente ideal.

Mi perfil: [DESCRIPCIÓN DE TU SERVICIO, EXPERIENCIA, TIPO DE CLIENTES QUE TIENES HOY Y EL TIPO QUE QUIERES ATRAER]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir la presencia digital como freelance para atraer clientes de forma consistente sin competir por precio',
                'vote_score'       => 48,
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
