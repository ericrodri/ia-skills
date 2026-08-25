<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills70Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Contenido evergreen — artículos y guías que generan tráfico durante años',
                'description'      => 'Cómo crear artículos, vídeos y guías que generan tráfico orgánico durante años sin actualizarse constantemente, con selección de temas, SEO estructural y estrategia de link building.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de contenido SEO especializado en contenido evergreen y posicionamiento orgánico a largo plazo. Necesito una guía completa para crear contenido que genere tráfico durante años, no solo durante la semana del lanzamiento.

## QUÉ ES EL CONTENIDO EVERGREEN Y POR QUÉ ES EL ACTIVO MÁS RENTABLE DEL MARKETING

El contenido evergreen es el que responde a preguntas que las personas seguirán haciendo dentro de 3-5 años. A diferencia del contenido de actualidad (que pica alto y muere rápido), el evergreen tiene una curva de crecimiento lenta al principio pero acumula valor con el tiempo.

**Matemática del contenido evergreen:**
Un artículo bien posicionado que recibe 500 visitas/mes acumula 6.000 visitas en el año 1, 12.000 en el año 2, 18.000 en el año 3 (si se mantiene la posición). Un artículo de tendencias recibe 5.000 visitas la primera semana y casi nada después.

**Características del contenido evergreen:**
- Responde a intenciones de búsqueda permanentes (qué es X, cómo hacer Y, diferencia entre A y B)
- No depende de fechas, eventos o versiones de software concretas
- Tiene alta autoridad temática (responde en profundidad, no superficialmente)
- Puede actualizarse periódicamente para mantenerse relevante

## SELECCIÓN DE TEMAS: CÓMO ENCONTRAR TEMAS EVERGREEN CON POTENCIAL

### El filtro de los 4 criterios

Para que un tema valga la pena, debe cumplir los 4 criterios:

| Criterio | Pregunta | Herramienta |
|----------|----------|-------------|
| Volumen de búsqueda | ¿Cuánta gente lo busca cada mes? | Ahrefs, SEMrush, Ubersuggest |
| Evergreen | ¿Seguirá buscándose en 3 años? | Google Trends (tendencia estable) |
| Dificultad | ¿Podemos posicionarnos? | KD en Ahrefs / Dificultad en SEMrush |
| Alineación | ¿Coincide con lo que vendemos? | Análisis manual |

**Proceso de selección en 4 pasos:**

**Paso 1 — Mapea las preguntas de tu buyer persona**
Escribe las 20 preguntas más frecuentes que te hacen tus clientes antes de comprar, durante el uso del producto y en soporte. Cada pregunta es un potencial artículo evergreen.

**Paso 2 — Verifica la estabilidad en Google Trends**
Introduce el tema en trends.google.com con rango de tiempo de 5 años. Busca:
- Línea plana o con ligero ascenso: tema evergreen
- Pico estacional repetido: evergreen estacional (actualiza cada año antes del pico)
- Pico y caída brusca: tendencia (no evergreen)

**Paso 3 — Evalúa el volumen y la dificultad**
Herramienta gratuita: Google Keyword Planner o Ubersuggest (versión gratis).
Herramienta de pago: Ahrefs (el más preciso para dificultad de keywords).

Objetivo: keywords con volumen > 500 búsquedas/mes y dificultad < 40 (para dominios nuevos o con poca autoridad).

**Paso 4 — Analiza el SERP (página de resultados)**
Busca en incógnito la keyword exacta. ¿Qué aparece en los 10 primeros resultados?
- Si hay artículos de Wikipedia, grandes medios y marcas muy conocidas: evita ese término exacto, busca una variante long tail
- Si hay blogs medianos y contenido de hace más de 3 años: hay oportunidad

## LA ESTRUCTURA DEL ARTÍCULO EVERGREEN QUE POSICIONA

Los artículos evergreen que dominan la primera página de Google comparten esta estructura:

### Estructura de artículo pilar (2.000-5.000 palabras)

```
H1: [Keyword principal] — [Promesa de valor específica]
Ejemplo: "Qué es el SEO técnico: guía completa para desarrolladores (2025)"

Introducción (150-200 palabras):
- El problema que resuelve el artículo
- A quién va dirigido
- Qué aprenderá el lector
- [No empieces con "En este artículo te voy a hablar de..."]

H2: ¿Qué es [tema]? (definición)
    → Responde la pregunta featured snippet

H2: Por qué importa [tema] / Beneficios de [tema]
    → Contexto y motivación

H2: Cómo funciona [tema]
    → Explicación del mecanismo

H2: Los [N] tipos de [tema] / Los [N] pasos para [tema]
    → Contenido más buscado; lista con H3 para cada elemento

H2: Ejemplos de [tema]
    → Ejemplos concretos, estudios de caso, capturas

H2: Herramientas para [tema]
    → Lista de recursos (generan backlinks si son mencionadas)

H2: Errores comunes en [tema]
    → Muy buscado; alta intención de aprendizaje

H2: [Tema] vs. [alternativa]
    → Captura búsquedas comparativas

H2: Preguntas frecuentes sobre [tema]
    → Captura las PAA (People Also Ask) de Google

Conclusión (100-150 palabras):
- Resumen en 3 puntos
- CTA suave: "Si quieres aplicar esto en tu empresa, descarga nuestra guía / habla con nosotros"
```

## SEO ON-PAGE: LO QUE NO PUEDE FALTAR

### Los elementos técnicos que Google valora en 2025

| Elemento | Requisito | Ejemplo |
|----------|-----------|---------|
| Título H1 | Contiene la keyword principal | "Qué es el marketing de contenidos: guía..." |
| Meta description | 150-160 caracteres con keyword y promesa | "Aprende qué es el marketing de contenidos, cómo funciona y cómo..." |
| URL | Corta, con keyword, sin fecha | /marketing-de-contenidos (no /2025/01/que-es-el-mkt...) |
| Velocidad de carga | < 2,5 segundos (LCP) | Comprime imágenes, usa CDN |
| Internal links | 3-5 links a artículos relacionados | Enlaza al artículo pilar desde artículos secundarios |
| Schema markup | FAQ schema para la sección de preguntas | JSON-LD en el código de la página |
| Imágenes | Alt text descriptivo con keyword | alt="ejemplo de marketing de contenidos B2B" |

## ACTUALIZACIÓN: CÓMO MANTENER EL ARTÍCULO EVERGREEN VIGENTE

El contenido evergreen no es "escríbelo y olvídalo". Para mantener la posición, necesita actualizaciones periódicas.

### Calendario de mantenimiento

| Frecuencia | Qué revisar |
|------------|-------------|
| Anual | Estadísticas y datos (actualiza los porcentajes y estudios citados) |
| Anual | Herramientas recomendadas (¿siguen siendo las mejores?) |
| Cuando cambia el sector | Secciones que dependen de regulación, tecnología o mejores prácticas |
| Trimestral | Posición en Google (si cae más de 5 posiciones, investiga por qué) |

**Señal de que un artículo evergreen necesita actualización urgente:**
- La posición cae de forma sostenida durante 3 meses
- Nuevos competidores con contenido más actualizado aparecen por encima
- El CTR baja aunque la posición se mantiene (el título/meta ya no resuena)

## LINK BUILDING PARA CONTENIDO EVERGREEN

El contenido evergreen es el mejor imán de backlinks porque:
- Otros creadores lo referencian como recurso autoritativo
- Permanece relevante para enlazar durante años

**Estrategias de link building pasivo:**
- Guías completas que los creadores del sector citan como referencia
- Investigaciones y estudios originales (datos propios que otros citan)
- Herramientas gratuitas integradas en el artículo (calculadoras, plantillas)
- Infografías descargables con la información visual del artículo

**Estrategias de link building activo:**
- **Broken link building:** Encuentra artículos del sector que enlazan a páginas ya inexistentes (usa Ahrefs → Broken backlinks de competidores). Contacta al webmaster y ofrece tu artículo como reemplazo.
- **Roundup de expertos:** Invita a 10-15 expertos del sector a contribuir con una cita para tu artículo. Cuando lo publiques, ellos lo comparten y en muchos casos lo enlazan desde sus propias webs.

## DISTRIBUCIÓN INICIAL: LOS PRIMEROS 90 DÍAS

El contenido evergreen también necesita distribución al lanzarse. Sin una primera inyección de tráfico y señales sociales, Google tarda más en indexarlo y posicionarlo.

**Plan de distribución en el lanzamiento:**

| Canal | Acción | Plazo |
|-------|--------|-------|
| Newsletter propia | Envía el artículo a tu lista | Día de publicación |
| LinkedIn / Twitter | Post con insight del artículo (no enlace directo) | Día de publicación |
| Comunidades del sector (Slack, Discord, foros) | Comparte en el contexto de una conversación relevante | Días 1-7 |
| Outreach a mencionados | Si citas a alguien en el artículo, avísales | Días 1-3 |
| Republica en Medium/Substack | Con canonical tag apuntando a tu web | Semana 2-4 |
| Internal linking | Añade el artículo como link interno desde tus artículos más antiguos | Días 1-7 |

¿Cuál es tu sector y qué tipo de buyer persona tienes? Con esa información te genero los 10 mejores temas evergreen para tu contenido junto con las keywords específicas y la estructura de cada artículo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear contenido evergreen con selección de temas estables, estructura SEO de artículo pilar, calendario de actualización y estrategias de link building pasivo y activo.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistema de permisos granular — RBAC y ABAC en SaaS multitenante',
                'description'      => 'Cómo diseñar e implementar un sistema de roles y permisos granular (RBAC/ABAC) en aplicaciones SaaS multitenante que escala sin convertirse en una pesadilla de mantenimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software senior especializado en seguridad y sistemas de autorización para aplicaciones SaaS. Necesito una guía completa para diseñar e implementar un sistema de permisos granular que cubra los casos de uso de multitenancy sin volverse imposible de mantener.

## EL PROBLEMA CON LOS SISTEMAS DE PERMISOS MAL DISEÑADOS

La mayoría de las aplicaciones SaaS empiezan con un sistema de permisos simple: "admin puede todo, usuario puede lo suyo". Funciona al principio. A medida que el producto crece, los clientes enterprise piden:
- Roles personalizados por organización
- Permisos a nivel de recurso individual (no solo de tipo de recurso)
- Delegación de permisos (el admin puede dar permisos a otros)
- Auditoría de qué hizo quién y cuándo

Si el sistema de autorización no está bien diseñado desde el principio, añadir estas capacidades requiere una refactorización enorme.

## LOS 3 MODELOS DE AUTORIZACIÓN

### RBAC (Role-Based Access Control)

**Principio:** Los permisos se asignan a roles, y los usuarios reciben roles.

```
Usuario → tiene → Rol → tiene → Permisos
```

**Ventajas:** Simple de entender y administrar. Auditable.
**Limitaciones:** No soporta permisos contextuales ("puede ver solo sus propios documentos").

**Cuándo usar RBAC puro:**
- Aplicaciones con pocos tipos de usuario y permisos bien definidos
- Cuando la granularidad requerida es a nivel de tipo de acción, no de recurso individual

### ABAC (Attribute-Based Access Control)

**Principio:** Las decisiones de acceso se basan en atributos del usuario, del recurso y del contexto.

```
¿Puede acceder? = f(atributos_usuario, atributos_recurso, atributos_contexto)
```

Ejemplo: "Un manager puede ver documentos de su departamento si el documento no está marcado como confidencial y el usuario está en horario laboral."

**Ventajas:** Máxima flexibilidad y granularidad.
**Limitaciones:** Complejo de implementar, depurar y auditar. Políticas difíciles de entender sin herramientas.

### ReBAC (Relationship-Based Access Control)

**Principio:** El acceso se basa en la relación entre el usuario y el recurso.

```
¿Puede el usuario X acceder al documento Y? → Sí, si X es propietario de Y o X es miembro del equipo propietario de Y
```

Popularizado por Google Zanzibar (la base de los permisos de Google Docs). Implementaciones open-source: OpenFGA, Permify, Ory Keto.

**Cuándo usar ReBAC:**
- Recursos con jerarquías (carpeta → subcarpeta → documento)
- Compartición a nivel de recurso individual ("comparte este documento con Juan")
- Herencia de permisos a través de relaciones

## DISEÑO PARA MULTITENANCY

En un SaaS multitenante, los permisos tienen una dimensión adicional: el tenant (organización del cliente).

### Niveles de aislamiento de permisos

```
NIVEL 1 — PLATFORM (tu empresa)
  SuperAdmin: acceso total a todos los tenants (solo para tu equipo)

NIVEL 2 — TENANT (organización del cliente)
  TenantAdmin: puede gestionar usuarios y roles de su organización
  Roles customizados: creados por el TenantAdmin para su equipo

NIVEL 3 — RECURSO (dentro del tenant)
  Owner: el que creó el recurso, control total
  Editor: puede modificar
  Viewer: solo lectura
  Commenter: puede comentar pero no modificar
```

### Modelo de datos para RBAC multitenante

```sql
-- Tabla de tenants (organizaciones cliente)
CREATE TABLE tenants (
  id UUID PRIMARY KEY,
  name VARCHAR(255),
  created_at TIMESTAMP
);

-- Tabla de roles (pueden ser globales o específicos de tenant)
CREATE TABLE roles (
  id UUID PRIMARY KEY,
  tenant_id UUID REFERENCES tenants(id) NULL, -- NULL = rol global del sistema
  name VARCHAR(100),
  description TEXT,
  is_system_role BOOLEAN DEFAULT FALSE -- roles que no se pueden eliminar
);

-- Tabla de permisos (acciones sobre recursos)
CREATE TABLE permissions (
  id UUID PRIMARY KEY,
  resource VARCHAR(100),   -- ej: 'document', 'project', 'invoice'
  action VARCHAR(100),     -- ej: 'create', 'read', 'update', 'delete', 'share'
  description TEXT
);

-- Relación rol-permiso
CREATE TABLE role_permissions (
  role_id UUID REFERENCES roles(id),
  permission_id UUID REFERENCES permissions(id),
  PRIMARY KEY (role_id, permission_id)
);

-- Relación usuario-rol (dentro de un tenant)
CREATE TABLE user_roles (
  user_id UUID REFERENCES users(id),
  role_id UUID REFERENCES roles(id),
  tenant_id UUID REFERENCES tenants(id),
  granted_by UUID REFERENCES users(id),
  granted_at TIMESTAMP DEFAULT NOW(),
  PRIMARY KEY (user_id, role_id, tenant_id)
);
```

## IMPLEMENTACIÓN EN LARAVEL / PHP

### Gate y Policy en Laravel

```php
// app/Policies/DocumentPolicy.php
class DocumentPolicy
{
    public function view(User $user, Document $document): bool
    {
        // El usuario puede ver el documento si:
        // 1. Es el propietario
        // 2. Tiene el permiso 'document.read' en el tenant del documento
        // 3. El documento ha sido compartido con él explícitamente

        return $user->id === $document->owner_id
            || $user->hasPermissionInTenant('document.read', $document->tenant_id)
            || $document->sharedWith->contains($user->id);
    }

    public function update(User $user, Document $document): bool
    {
        return $user->id === $document->owner_id
            || $user->hasPermissionInTenant('document.update', $document->tenant_id);
    }
}

// app/Models/User.php
class User extends Authenticatable
{
    public function hasPermissionInTenant(string $permission, string $tenantId): bool
    {
        [$resource, $action] = explode('.', $permission);

        return $this->roles()
            ->where('tenant_id', $tenantId)
            ->whereHas('permissions', function ($query) use ($resource, $action) {
                $query->where('resource', $resource)
                      ->where('action', $action);
            })
            ->exists();
    }

    public function hasRoleInTenant(string $roleName, string $tenantId): bool
    {
        return $this->roles()
            ->where('tenant_id', $tenantId)
            ->where('name', $roleName)
            ->exists();
    }
}
```

### Middleware de tenant y permisos

```php
// app/Http/Middleware/EnsureTenantPermission.php
class EnsureTenantPermission
{
    public function handle(Request $request, Closure $next, string $permission): Response
    {
        $tenantId = $request->route('tenant') ?? auth()->user()->current_tenant_id;

        if (!auth()->user()->hasPermissionInTenant($permission, $tenantId)) {
            abort(403, "No tienes permiso para realizar esta acción.");
        }

        return $next($request);
    }
}

// Uso en rutas:
Route::middleware(['auth', 'tenant.permission:document.delete'])
    ->delete('/documents/{document}', [DocumentController::class, 'destroy']);
```

## CACHÉ DE PERMISOS: RENDIMIENTO EN PRODUCCIÓN

El sistema de permisos se consulta en cada request. Sin caché, cada petición genera N queries a la base de datos.

```php
// Caché de permisos por usuario y tenant (TTL: 5 minutos)
public function hasPermissionInTenant(string $permission, string $tenantId): bool
{
    $cacheKey = "user:{$this->id}:tenant:{$tenantId}:permissions";

    $permissions = Cache::remember($cacheKey, 300, function () use ($tenantId) {
        return $this->roles()
            ->where('tenant_id', $tenantId)
            ->with('permissions')
            ->get()
            ->flatMap(fn ($role) => $role->permissions)
            ->map(fn ($perm) => "{$perm->resource}.{$perm->action}")
            ->unique()
            ->toArray();
    });

    return in_array($permission, $permissions);
}

// Al cambiar roles o permisos de un usuario, invalida el caché:
public function invalidatePermissionCache(string $tenantId): void
{
    Cache::forget("user:{$this->id}:tenant:{$tenantId}:permissions");
}
```

## AUDITORÍA: QUIÉN HIZO QUÉ Y CUÁNDO

Los clientes enterprise requieren logs de auditoría para cumplimiento (SOC2, ISO 27001, GDPR).

```php
// app/Models/AuditLog.php
class AuditLog extends Model
{
    protected $fillable = [
        'tenant_id', 'user_id', 'action', 'resource_type',
        'resource_id', 'old_values', 'new_values', 'ip_address', 'user_agent'
    ];

    protected $casts = [
        'old_values' => 'array',
        'new_values' => 'array',
    ];
}

// En el Observer del modelo:
class DocumentObserver
{
    public function updated(Document $document): void
    {
        AuditLog::create([
            'tenant_id'     => $document->tenant_id,
            'user_id'       => auth()->id(),
            'action'        => 'document.updated',
            'resource_type' => 'Document',
            'resource_id'   => $document->id,
            'old_values'    => $document->getOriginal(),
            'new_values'    => $document->getDirty(),
            'ip_address'    => request()->ip(),
        ]);
    }
}
```

## ROLES POR DEFECTO PARA UN SAAS TÍPICO

| Rol | Descripción | Permisos incluidos |
|-----|-------------|-------------------|
| Owner | Propietario de la cuenta tenant | Todo dentro del tenant + billing |
| Admin | Administrador técnico | Todo excepto billing |
| Manager | Gestiona equipos y proyectos | CRUD de recursos de su equipo |
| Member | Usuario estándar | Read + create propios recursos |
| Viewer | Solo lectura | Read de recursos compartidos con él |
| Billing | Solo gestiona la facturación | Acceso solo a la sección billing |

## PLAN DE IMPLEMENTACIÓN

**Fase 1 (semanas 1-2):** Modelo de datos RBAC con roles y permisos. Implementa sin multitenancy primero.
**Fase 2 (semanas 3-4):** Añade la dimensión de tenant. Gates y Policies en todos los recursos.
**Fase 3 (semanas 5-6):** Caché de permisos. Tests de autorización para todos los endpoints.
**Fase 4 (semanas 7-8):** Interfaz de administración de roles para TenantAdmins. Logs de auditoría.

¿Qué stack usas (Laravel, Node, Python) y cuál es la estructura de tenancy actual de tu aplicación?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar un sistema de permisos granular RBAC/ABAC para SaaS multitenante con modelo de datos, Laravel Policies, caché de permisos y auditoría.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Brand guidelines para equipos — el manual de marca que funciona sin el diseñador',
                'description'      => 'Cómo crear un manual de brand guidelines que el equipo no diseñador realmente usa para mantener la coherencia visual cuando el diseñador no está.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director creativo con experiencia en construcción de identidades de marca y documentación de sistemas visuales para equipos multidisciplinares. Necesito crear unas brand guidelines que el equipo de marketing, ventas y comunicación pueda usar de forma autónoma para mantener la coherencia de marca sin tener que consultarme por cada pieza.

## EL PROBLEMA CON LOS BRAND GUIDELINES ACTUALES

La mayoría de los brand guidelines existen en formato PDF de 80 páginas que nadie lee y nadie usa. El diseñador los hace con cariño, los sube a Google Drive y tres meses después el equipo está usando 4 azules distintos en las presentaciones de PowerPoint.

Los brand guidelines fallan por dos razones:
1. **Son demasiado prescriptivos sin ser suficientemente prácticos:** dicen "el espacio mínimo alrededor del logo es X" pero no muestran qué hacer cuando el logo va sobre una foto oscura.
2. **No están en el momento y lugar donde se necesitan:** el diseñador está de vacaciones y el vendedor necesita hacer una presentación ahora.

## LOS 7 MÓDULOS DE UNAS BRAND GUIDELINES EFECTIVAS

### Módulo 1 — Personalidad de marca (el por qué antes del qué)

Antes de los colores y la tipografía, define quién es la marca. Esto es lo que permite al equipo tomar decisiones visuales autónomas cuando se dan casos no cubiertos por las guías.

**Herramienta: los 4 descriptores de personalidad**

Elige 4 adjetivos que definen la marca y 4 que la contradicen:

```
SOMOS:                    NO SOMOS:
✓ Accesibles              ✗ Populistas
✓ Directos                ✗ Bruscos
✓ Expertos                ✗ Arrogantes
✓ Modernos                ✗ Fríos o deshumanizados
```

Estos 8 descriptores permiten que el equipo evalúe cualquier decisión visual: "¿esta imagen es moderna pero no fría? ¿Este titular es directo pero no brusco?"

### Módulo 2 — Logo: uso correcto y casos de uso reales

No basta con mostrar el logo. Muestra cómo usarlo en los contextos reales donde el equipo lo necesita:

**Los casos de uso que debes documentar:**

| Contexto | Versión del logo | Fondo mínimo |
|----------|-----------------|--------------|
| Sobre fondo blanco | Logo completo color | Espacio X alrededor |
| Sobre fondo oscuro (azul, negro) | Logo en blanco | Espacio X alrededor |
| Sobre fotografía clara | Logo oscuro o con protección | Fondo semiopaco |
| Sobre fotografía oscura | Logo en blanco | Sombra suave si necesario |
| Favicon / app icon | Versión simplificada (isotipo) | — |
| Social media (foto de perfil) | Isotipo centrado | Fondo de color de marca |
| Presentación PowerPoint | Logo completo, esquina superior derecha | Espacio de respiración |
| Firma de email | Logo horizontal reducido | Máximo 200px de ancho |

**Las 5 cosas que NO hacer con el logo (con ejemplos visuales):**
- No distorsionar proporcionalmente
- No añadir efectos (sombra, bisel, degradado)
- No usar sobre fondos que no tengan contraste suficiente
- No recortar ni modificar los elementos
- No usar versiones desactualizadas

### Módulo 3 — Paleta de color: sistema de uso, no solo los valores HEX

La paleta de color debe explicar cuándo usar qué color, no solo los valores.

**Estructura de paleta por función:**

```
COLOR PRIMARIO
HEX: #2B4EFF | RGB: 43, 78, 255 | CMYK: 83, 69, 0, 0 | Pantone: 2727 C
→ Para: CTAs, titulares de impacto, elementos de énfasis
→ No para: texto de cuerpo largo, iconos pequeños

COLOR SECUNDARIO
HEX: #1A1A2E | RGB: 26, 26, 46 | CMYK: 44, 44, 0, 82
→ Para: fondos oscuros, texto sobre fondos claros, cabeceras
→ No para: texto sobre fondo oscuro sin contraste suficiente

NEUTRALES
Blanco: #FFFFFF - Fondo de páginas, espacio en blanco
Gris claro: #F5F5F7 - Fondos de sección alternativa
Gris medio: #8E8E93 - Texto secundario, captions
Negro: #1A1A1A - Texto de cuerpo principal

COLORES DE ESTADO (sistema UI)
Verde: #34C759 - Éxito, confirmación
Rojo: #FF3B30 - Error, alerta crítica
Naranja: #FF9500 - Advertencia
Azul: #007AFF - Información, links
```

**Regla de proporción de colores:**
Para comunicaciones de marca, usa la regla 60-30-10:
- 60% color neutro (blanco, gris claro)
- 30% color secundario (oscuro)
- 10% color primario (énfasis)

### Módulo 4 — Tipografía: jerarquía clara con ejemplos reales

```
TIPOGRAFÍA PRINCIPAL (para titulares y cabeceras):
Fuente: [Nombre] — Bold y SemiBold
Descarga: [link al archivo o Google Fonts]
Alternativa cuando no está disponible: [fuente web-safe equivalente]

Uso:
- Título principal de página: 48-64px, Bold
- Subtítulo de sección: 32-40px, SemiBold
- Título de card: 20-24px, SemiBold

TIPOGRAFÍA SECUNDARIA (para cuerpo de texto):
Fuente: [Nombre] — Regular y Medium
Uso:
- Cuerpo de texto: 16-18px, Regular, line-height 1.6
- Caption / texto pequeño: 12-14px, Regular
- Label de formulario: 14px, Medium

TIPOGRAFÍA PARA DOCUMENTOS OFFICE (Word, PowerPoint):
Cuando la fuente principal no está disponible:
- Titular: Calibri Bold o Georgia Bold
- Cuerpo: Calibri Regular o Arial Regular
```

### Módulo 5 — Fotografía e ilustración: criterios de selección

Define qué tipo de imágenes representan a la marca y cuáles no, con ejemplos visuales de ambos lados:

**Criterios para selección de fotografía:**

| ✅ Sí | ❌ No |
|------|------|
| Personas reales en situaciones naturales | Fotos de stock genéricas y posadas |
| Diversidad de perfiles representada | Solo un perfil demográfico |
| Luz natural o artificial cálida | Flash duro o sobreexposición |
| Composición con espacio para texto | Imágenes llenas sin espacio negativo |
| Coherente con la paleta de color | Colores que contrastan con la paleta |

**Fuentes de imágenes aprobadas:**
- Fotos propias del equipo / producto: primera opción siempre
- Stock: Unsplash (gratis), [suscripción específica del equipo]
- Ilustraciones: [link a la librería o archivo de ilustraciones de marca]

### Módulo 6 — Templates: las piezas que más usa el equipo

Las brand guidelines sin templates son teoría. Los templates hacen la teoría práctica.

**Templates que debes crear y vincular:**

| Pieza | Formato | Herramienta |
|-------|---------|-------------|
| Presentación | .pptx / .key / Canva | PowerPoint, Keynote o Canva |
| Propuesta de servicios | .pdf | Canva o InDesign |
| Post de LinkedIn | 1080x1080 | Canva |
| Stories de Instagram | 1080x1920 | Canva |
| Firma de email | HTML o imagen | Tu herramienta de email |
| Documento Word / informe | .docx | Word |
| Plantilla de email de marketing | HTML | Tu plataforma de email |

### Módulo 7 — Tono de voz: coherencia más allá de lo visual

Las brand guidelines suelen olvidar el tono de voz. Incluye:

**Los 4 parámetros del tono de voz:**

```
FORMALIDAD
←────────────────────────────────→
Muy formal             Muy informal
              ▲
           [NUESTRA MARCA]
"Hola" no "Estimado/a". "Te ayudamos" no "Les ayudamos a Vd."

ENERGÍA
←────────────────────────────────→
Muy calmado              Muy energético
           ▲
      [NUESTRA MARCA]
Informamos con claridad. No con exclamaciones ni MAYÚSCULAS de énfasis.

VOCABULARIO
USAMOS:                          EVITAMOS:
- Palabras sencillas             - Jerga técnica sin explicar
- Verbos activos                 - Voz pasiva
- Ejemplos concretos             - Abstracciones genéricas
- Segunda persona (tú/vosotros)  - Primera persona plural corporativa ("en [Marca] creemos")
```

## CÓMO HACER QUE EL EQUIPO REALMENTE USE LAS GUIDELINES

### El formato importa más que el contenido

Un PDF de 80 páginas no se usa. Una Notion page con ejemplos visuales y templates enlazados sí.

**Formato recomendado:**
- Herramienta: Notion, Gitbook, o una página web interna simple
- Estructura: navegación lateral con los 7 módulos
- Para cada regla: ejemplo de BIEN y MAL visual (siempre)
- Templates descargables: en la misma página, no en un drive separado

### Sesión de formación de 45 minutos

Al lanzar las guidelines, haz una sesión con el equipo:
- 15 min: el por qué (personalidad de marca, por qué la coherencia importa)
- 15 min: los 3 errores más frecuentes que van a evitar
- 15 min: demo de cómo usar los templates

¿Qué tipo de empresa es y qué herramientas usa el equipo para crear contenido (Canva, PowerPoint, Figma)? Con esa información te diseño el kit mínimo de templates.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear brand guidelines efectivas con los 7 módulos que el equipo no diseñador realmente usa: personalidad de marca, logo, paleta, tipografía, fotografía, templates y tono de voz.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Experiencia de compra como diferenciador — el proceso de venta que fideliza',
                'description'      => 'Cómo diseñar el proceso de venta B2B para que la experiencia de compra en sí misma sea la razón por la que el cliente elige tu empresa sobre la competencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial con experiencia en ventas consultivas B2B y diseño de la experiencia de compra del cliente. Necesito un framework para convertir el proceso de venta en sí mismo en un diferenciador competitivo, cuando el producto o el precio no son suficientemente distintos de la competencia.

## EL PROBLEMA: CUANDO EL PRODUCTO YA NO ES SUFICIENTE

En mercados maduros donde los productos se parecen cada vez más, los compradores B2B no solo evalúan lo que compran, sino cómo es comprarlo. El 77% de los compradores B2B describe su última experiencia de compra como "extremadamente compleja o difícil" (Gartner, 2023). La empresa que hace la compra fácil tiene una ventaja competitiva real.

**La compra como señal del servicio:**
La forma en que una empresa te trata durante el proceso de venta es la mejor predicción de cómo te tratará después. Los compradores lo saben intuitivamente. Por eso la experiencia de compra afecta directamente a la decisión final.

## EL CUSTOMER BUYING JOURNEY: LO QUE VIVE EL COMPRADOR

El journey del comprador B2B tiene 6 fases, y en cada una hay una oportunidad de diferenciarse:

| Fase | Qué hace el comprador | Qué quiere de ti |
|------|----------------------|------------------|
| 1. Problema latente | Empieza a reconocer que tiene un problema | Contenido que nombra el problema mejor que él mismo |
| 2. Exploración | Busca información sobre posibles soluciones | Educación sin sesgo de venta |
| 3. Comparación | Evalúa alternativas en paralelo | Honestidad sobre para quién eres y para quién no |
| 4. Decisión | Construye el caso de negocio interno | Ayuda para vender internamente, no solo para convencerle a él |
| 5. Compra | Negocia y cierra | Proceso claro, sin sorpresas, sin presión artificial |
| 6. Post-compra | Implementa y empieza a usar | Onboarding que valida que tomó la decisión correcta |

La mayoría de los vendedores solo se preocupan por las fases 4 y 5. Los mejores vendedores diseñan la experiencia completa.

## LOS 5 ELEMENTOS DE UNA EXPERIENCIA DE COMPRA DIFERENCIADA

### 1. El primer contacto: la diferencia entre un pitch y una conversación de diagnóstico

La primera reunión determina el tono de toda la relación. La mayoría de los vendedores llegan a la primera reunión con un deck de empresa y empiezan a contar quiénes son. El comprador se aburre porque todavía no sabe si necesita lo que vendes.

**El enfoque alternativo: la primera reunión de diagnóstico**

```
ESTRUCTURA DE LA PRIMERA REUNIÓN (45-60 min)

Apertura (5 min):
"Antes de hablar de nosotros, me gustaría entender bien
vuestra situación. ¿Os parece bien si os hago unas preguntas
primero y luego, en función de lo que me contéis, os cuento
si podemos ser de ayuda y cómo?"

Diagnóstico (25-30 min):
- ¿Qué está generando el problema que os trajo a buscar una solución?
- ¿Qué habéis intentado hasta ahora? ¿Por qué no funcionó?
- ¿Qué impacto tiene este problema en el negocio? (cuantificado si es posible)
- ¿Qué os haría decir que habéis elegido bien?
- ¿Quién más está involucrado en la decisión?

Reflexión (5 min):
"Con lo que me habéis contado, puedo deciros que [fit / no fit / parcial fit]
porque [razón específica basada en lo que dijeron]."

Propuesta de siguiente paso (5-10 min):
Siguiente paso concreto, con responsable y fecha.
```

### 2. La propuesta: un documento de decisión, no un catálogo de servicios

La mayoría de las propuestas B2B son documentos egocéntricos: hablan de la empresa proveedora, de su metodología, de su equipo. El comprador tiene que hacer el esfuerzo de traducirlo a su contexto.

**Estructura de propuesta centrada en el comprador:**

```
1. TU SITUACIÓN (2 párrafos)
   Describe el problema del cliente con sus propias palabras.
   Demuestra que entendiste lo que contaron en la reunión.

2. POR QUÉ ESTO IMPORTA (1 párrafo)
   El impacto cuantificado de no resolver el problema.
   Usa sus números, no los tuyos.

3. LO QUE PROPONEMOS (la parte técnica)
   Alcance claro, entregables específicos, metodología.
   Sin jerga que el comprador no entienda.

4. POR QUÉ NOSOTROS (brevísimo, máximo 1 página)
   Solo los credenciales directamente relevantes para ESTE proyecto.
   No el listado completo de todos los clientes.

5. INVERSIÓN Y PLAZOS
   Precio claro, desglosado si aplica.
   Sin letra pequeña que sorprenda después.

6. SIGUIENTE PASO
   Un solo paso claro: "Si queréis seguir adelante, la siguiente
   acción es [acción específica]. Lo podemos hacer el [fecha]."
```

### 3. La honestidad sobre el fit: el diferenciador más contraintuitivo

Decirle a un cliente que NO eres la mejor opción para él genera más confianza que convencerle de que sí lo eres cuando no es verdad. Los compradores B2B tienen suficiente experiencia para detectar cuando alguien intenta venderles algo que no encaja.

**Cuándo decir "no somos la mejor opción":**
- Cuando el tamaño del cliente está muy lejos de tu cliente ideal (muy grande o muy pequeño)
- Cuando el caso de uso requiere funcionalidades que no tienes
- Cuando el presupuesto no encaja con la inversión necesaria para hacer el trabajo bien

**Cómo decirlo:**
"Siendo honesto, basándome en lo que me habéis contado, creo que [X] podría encajaros mejor porque [razón]. Nosotros somos mejores opción cuando [caso de uso ideal]. ¿Queréis que os ponga en contacto con alguien de [X] o preferís explorar si hay alguna parte del proyecto donde sí podemos ayudar?"

Esta conversación genera confianza inmediata y referencias a largo plazo.

### 4. La facilitación interna: ayuda a tu comprador a vender internamente

El 80% de las compras B2B fracasan no porque el comprador no quiera, sino porque no puede convencer internamente. El vendedor que ayuda al comprador a construir el caso de negocio interno cierra más y más rápido.

**Kit de facilitación interna (lo que le das al comprador para que venda por ti):**

- **Resumen ejecutivo de 1 página:** Todo lo que el decisor final necesita saber en 5 minutos
- **Calculadora de ROI:** Estimación del retorno con los números del propio cliente
- **Casos de uso comparables:** Ejemplos de empresas similares que tomaron la misma decisión
- **FAQ de objeciones:** Las 5 preguntas que el comité de compra hará y las respuestas

### 5. El proceso de negociación: sin presión artificial

La "urgencia artificial" (descuentos que expiran el viernes, últimas unidades) destruye la confianza y señala que el precio original no era real. Los compradores B2B lo saben.

**Alternativas a la urgencia artificial:**

| En vez de... | Di... |
|-------------|-------|
| "El descuento es solo hasta el viernes" | "Si empezamos esta semana, podéis tener resultados antes de [fecha importante para ellos]" |
| "Solo nos quedan 2 plazas" | "Nuestro calendario de arranque de nuevos clientes para Q3 está casi completo; si queréis ese slot, necesito saberlo esta semana" |
| "Es nuestro precio estándar, sin posibilidad de ajuste" | "Este es el precio para este alcance; si necesitáis ajustar el presupuesto, podemos explorar qué partes del proyecto tienen mayor prioridad para empezar" |

## MÉTRICAS DE LA EXPERIENCIA DE COMPRA

| Métrica | Qué mide | Cómo obtenerla |
|---------|----------|----------------|
| Duración del ciclo de venta | Tiempo desde primer contacto hasta cierre | CRM |
| Tasa de conversión de demo a propuesta | Calidad del diagnóstico | CRM |
| Tasa de propuesta a cierre | Calidad de la propuesta y del proceso | CRM |
| eNPS de nuevos clientes | ¿Recomendarían el proceso de compra? | Encuesta post-cierre |
| Razones de pérdida | Por qué perdemos (proceso vs. producto vs. precio) | CRM + llamada de win/loss |

## PLAN DE IMPLEMENTACIÓN EN 30 DÍAS

**Semana 1:** Rediseña la estructura de la primera reunión. Usa la plantilla de diagnóstico en las próximas 5 primeras reuniones. Recoge feedback.
**Semana 2:** Rediseña la propuesta siguiendo la estructura centrada en el comprador. Crea una plantilla base que el equipo pueda personalizar.
**Semana 3:** Crea el kit de facilitación interna básico: resumen ejecutivo de 1 página y FAQ de objeciones.
**Semana 4:** Define los criterios explícitos de "no es para nosotros" y forma al equipo para comunicarlos con confianza.

¿Cuál es tu ciclo de venta típico (en semanas) y cuántas personas suelen estar involucradas en la decisión de compra en tu cliente objetivo?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la experiencia de compra B2B como diferenciador con primera reunión de diagnóstico, propuesta centrada en el comprador y kit de facilitación interna.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Deuda de promesas de producto — gestionar features prometidas sin entregar',
                'description'      => 'Cómo gestionar el backlog de compromisos adquiridos con clientes durante el proceso de venta que todavía no se han entregado sin perder la confianza.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en SaaS B2B y gestión de compromisos de roadmap. Necesito un framework para gestionar la deuda de promesas de producto: las features que el equipo de ventas comprometió a clientes durante el proceso de compra y que siguen sin entregarse meses después, generando presión sobre el equipo de producto y erosionando la confianza del cliente.

## QUÉ ES LA DEUDA DE PROMESAS Y POR QUÉ ES TÓXICA

La deuda de promesas de producto (también llamada "sales-driven roadmap debt") ocurre cuando el equipo de ventas utiliza features del roadmap como argumentos de cierre sin coordinación con producto. El cliente compra esperando una funcionalidad que no existe todavía. Meses después, la feature no ha llegado y el cliente empieza a cuestionar la relación.

**Por qué se genera:**
- El ciclo de ventas tiene presión de cuota y el vendedor usa el roadmap para cerrar
- No hay un proceso claro de qué se puede y qué no se puede comprometer
- El equipo de producto no tiene visibilidad de los compromisos adquiridos

**Por qué es especialmente dañina:**
Una feature prometida y no entregada genera más daño en la relación que si nunca se hubiera mencionado. El cliente se siente engañado, aunque el retraso sea involuntario.

## FASE 1 — AUDITORÍA: ¿QUÉ HAS PROMETIDO?

El primer paso es hacer visible la deuda existente. Muchos equipos de producto no saben cuántas promesas están pendientes.

**Proceso de auditoría:**

```
1. Pide a los Account Executives y Account Managers que listen
   en una hoja de cálculo todas las features que han comprometido
   a clientes en los últimos 12 meses.

2. Para cada compromiso, recopila:
   - Cliente y contacto
   - Feature comprometida (descripción específica)
   - Cuándo se comprometió
   - Plazo prometido (si lo hubo)
   - Impacto en la venta: ¿fue determinante o "nice to have"?
   - Estado actual: ¿en roadmap? ¿en desarrollo? ¿sin planificar?

3. Clasifica cada compromiso:
   🔴 Crítico: el cliente compró basándose principalmente en esta feature
   🟡 Importante: fue un factor de decisión pero no el principal
   🟢 Baja prioridad: se mencionó pero no fue determinante
```

## FASE 2 — TRIAGE: QUÉ HACER CON CADA COMPROMISO

Una vez tienes el inventario, debes tomar una decisión para cada compromiso:

### Las 4 opciones disponibles

**Opción A — Cumplir: priorizar la feature en el roadmap**
Cuándo usar: el compromiso es crítico, múltiples clientes lo necesitan, tiene sentido estratégico para el producto.
Proceso: añadir al roadmap como prioridad, con fecha estimada de entrega realista.

**Opción B — Compensar: ofrecer una solución alternativa**
Cuándo usar: la feature tal como se prometió no tiene sentido para el producto, pero hay una forma alternativa de satisfacer la necesidad real del cliente.
Proceso: identificar el problema real detrás de la feature prometida. Proponer alternativa. Reunirse con el cliente para explicarlo.

**Opción C — Negociar: posponer con transparencia**
Cuándo usar: la feature tiene sentido pero no puede entregarse en el plazo esperado.
Proceso: proactive disclosure (ver más abajo). Nueva fecha realista. Compensación temporal si aplica.

**Opción D — Reconocer el error: admitir que no se puede entregar**
Cuándo usar: la feature no encaja con la visión del producto y nunca se va a hacer.
Proceso: conversación directa con el cliente, explicación honesta, posible crédito o descuento como compensación por la discrepancia.

## FASE 3 — PROACTIVE DISCLOSURE: HABLA TÚ ANTES DE QUE TE PREGUNTEN

La proactive disclosure (comunicación proactiva) es el principio más importante para gestionar compromisos retrasados. Esperar a que el cliente pregunte genera frustración doble: por el retraso y por la falta de comunicación.

**El protocolo de comunicación proactiva:**

```
¿Cuándo comunicar?
→ Cuando sabes que un compromiso va a retrasarse respecto a lo acordado.
→ No esperes al día que debería haber llegado. Comunica tan pronto como lo sabes.

¿Quién comunica?
→ El Account Manager o Customer Success Manager, no el equipo de producto.
→ El PM puede participar en reuniones técnicas, pero el mensaje principal lo da la persona que tiene la relación con el cliente.

¿Cómo comunicar?
→ Por teléfono o videoconferencia para compromisos críticos. No por email.
→ Por email para compromisos de baja prioridad, con seguimiento por teléfono si no hay respuesta.

Estructura de la comunicación:
1. "Quería llamarte porque quiero mantenerte informado sobre [feature X]."
2. "Lo que acordamos fue [descripción del compromiso]. La situación actual es [estado real]."
3. "Lo que ha pasado es [explicación honesta sin excusas corporativas]."
4. "El nuevo plan es [fecha y estado actualizado / alternativa propuesta]."
5. "¿Qué necesitas de nuestra parte mientras tanto?"
```

## FASE 4 — PREVENCIÓN: EL SISTEMA PARA NO VOLVER A ACUMULAR DEUDA

### El Contrato de Compromiso de Roadmap

Define qué puede y no puede comprometer el equipo de ventas:

```
LO QUE EL EQUIPO DE VENTAS PUEDE DECIR:

✅ "Esta feature está en nuestro roadmap para el próximo trimestre"
   (Solo si el PM ha confirmado que es así)

✅ "Trabajamos activamente en [funcionalidad] y está en nuestra hoja de ruta para H2"
   (Con confirmación de producto)

✅ "Puedo conectarte con nuestro equipo de producto para hablar de tus necesidades
   específicas y cómo encajan con nuestro roadmap"

LO QUE NO SE PUEDE DECIR SIN APROBACIÓN EXPLÍCITA DEL PM:

❌ "Lo tenemos en roadmap para [mes/trimestre específico]" — sin confirmación
❌ "Podemos añadirlo si firmáis" — promesa condicional de feature
❌ "Eso lo tenemos, aunque todavía no está disponible en vuestra versión" — engañoso
❌ Cualquier fecha específica de lanzamiento no confirmada por producto
```

### El Proceso de Sales-to-Product Handoff

Cuando un vendedor identifica una necesidad del cliente que podría requerir una nueva feature:

```
FORMULARIO DE SALES REQUEST A PRODUCTO

Cliente / Deal: [nombre]
Valor del deal: [importe]
Fecha de cierre esperada: [fecha]

Necesidad del cliente:
"El cliente necesita [descripción en términos de problema, no de feature]
porque [contexto de negocio]."

Feature solicitada:
[Descripción de la feature tal como la entiende el vendedor]

Impacto en la venta:
□ Crítico para cerrar (deal bloqueado sin esta feature)
□ Importante (aceleraría el cierre / aumentaría el importe)
□ Nice to have (no condiciona la venta)

¿Otros clientes han pedido esto?
[Lista de clientes que han mencionado necesidades similares]

Respuesta del PM (en 48 horas):
□ Sí, está en el roadmap para [trimestre] — puedes compartirlo con el cliente
□ Lo tenemos planificado pero sin fecha — NO comprometas fecha
□ No está en los planes actuales — NO lo comprometáis
□ Necesitamos más información — reunión con el cliente la próxima semana
```

## MÉTRICAS DE SALUD DE LOS COMPROMISOS DE ROADMAP

| Métrica | Objetivo | Señal de alarma |
|---------|----------|-----------------|
| Promesas cumplidas en la fecha acordada | > 80% | < 60% |
| Tiempo medio de retraso en compromisos | < 4 semanas | > 8 semanas |
| Clientes que cancelaron por incumplimiento de roadmap | 0 | > 1/trimestre |
| Features en backlog prometidas sin fecha | < 10% del backlog total | > 30% |

## PLAN DE IMPLEMENTACIÓN EN 60 DÍAS

**Semanas 1-2:** Realiza la auditoría completa. Crea el inventario de compromisos pendientes.
**Semanas 3-4:** Triage de cada compromiso. Comunicaciones proactivas a los clientes con compromisos críticos retrasados.
**Semanas 5-6:** Implementa el formulario de Sales Request a Producto. Alineación con el equipo de ventas sobre qué pueden y no pueden comprometer.
**Semanas 7-8:** Primera revisión mensual del inventario de compromisos. Ajusta el proceso según lo aprendido.

¿Cuántos clientes activos tienes y cuántos compromisos de roadmap aproximadamente están pendientes de entrega?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Auditar y gestionar la deuda de promesas de producto con inventario de compromisos, protocolo de comunicación proactiva y sistema de preención de nuevas promesas no controladas.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Transparencia salarial — implementar bandas salariales sin que el equipo colapse',
                'description'      => 'Cómo implementar bandas salariales públicas o semi-públicas sin que genere conflictos internos, con el proceso de comunicación, diseño de bandas y gestión de las conversaciones difíciles.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH con experiencia en el diseño e implementación de estructuras de compensación y transparencia salarial. Necesito un plan completo para implementar bandas salariales en la organización, gestionando el proceso de comunicación para que la transparencia genere equidad y confianza sin provocar crisis de retención o conflictos entre el equipo.

## POR QUÉ LA TRANSPARENCIA SALARIAL ESTÁ GANANDO TERRENO

La generación Z y millennial no tolera la opacidad salarial. El 70% de los trabajadores de menos de 35 años afirman que la transparencia salarial es importante para elegir un empleador (LinkedIn Workforce Trends, 2024). Además, la Directiva Europea de Transparencia Retributiva (2023/970) obliga a las empresas de más de 100 empleados a publicar información sobre las diferencias salariales entre géneros y a proporcionar información sobre bandas salariales a los candidatos antes de la entrevista.

**Las ventajas de la transparencia proactiva:**
- Reduce la percepción de inequidad (real o percibida) que destruye la motivación
- Facilita las conversaciones de compensación en el ciclo de desempeño
- Mejora la marca empleadora y la atracción de talento
- Elimina la brecha de género y diversidad en la compensación al hacer visible la estructura

## LOS 3 MODELOS DE TRANSPARENCIA SALARIAL

| Modelo | Descripción | Ventajas | Riesgos |
|--------|-------------|----------|---------|
| Completa | Todos saben el salario de todos | Máxima equidad percibida | Conflictos entre pares, pérdida de talento que descubre que vale más |
| Bandas públicas | Las bandas salariales por nivel son conocidas por todos, no el salario individual | Equidad de estructura sin fricción de comparación individual | El equipo puede inferir salarios aproximados |
| Bandas semi-públicas | Las bandas se comparten internamente pero no se publican externamente | Control sobre la información | Menos impacto en employer branding |

**Recomendación para la mayoría de las empresas:** Modelo de bandas públicas. Proporciona los beneficios de la equidad estructural sin los conflictos de la transparencia individual.

## FASE 1 — DISEÑO DE BANDAS SALARIALES

### Estructura de niveles y bandas

```
ESTRUCTURA DE NIVELES (ejemplo para empresa de tecnología)

NIVEL 1 — IC1 (Junior / Entry)
Banda: 28.000€ - 38.000€
Descripción: < 2 años de experiencia, trabajo supervisado

NIVEL 2 — IC2 (Mid-Level)
Banda: 36.000€ - 50.000€
Descripción: 2-4 años de experiencia, trabajo autónomo en tareas definidas

NIVEL 3 — IC3 (Senior)
Banda: 48.000€ - 68.000€
Descripción: 4-8 años, liderazgo técnico en proyectos, mentoring juniors

NIVEL 4 — IC4 (Staff / Principal)
Banda: 65.000€ - 90.000€
Descripción: > 8 años, impacto cross-equipo, referente técnico

NIVEL 5 — IC5 (Distinguished / Fellow)
Banda: 85.000€ - 130.000€+
Descripción: Impacto organizacional, reconocido externamente

GESTIÓN (Manager Track)
M1 — Team Lead: 55.000€ - 75.000€
M2 — Manager: 70.000€ - 95.000€
M3 — Senior Manager / Director: 90.000€ - 130.000€
M4 — VP: 120.000€ - 170.000€+
```

### Cómo fijar los rangos: benchmarking de mercado

Las bandas sin datos de mercado son arbitrarias. Fuentes de benchmarking:

| Fuente | Qué cubre | Coste |
|--------|-----------|-------|
| Glassdoor / LinkedIn Salary | Datos autodeclarados, buena muestra | Gratis |
| Mercer / Radford / Willis Towers Watson | Encuestas formales por sector | 5.000-20.000€/año |
| Infojobs / Tecnoempleo Salary Data | Mercado español específico | Gratis/bajo coste |
| Startups: Index Ventures, Levels.fyi | Tech, SaaS, startups | Gratis |

**Metodología de benchmarking:**
1. Define el percentil de mercado que quieres pagar (P50 = mediana del mercado, P75 = cuartil superior)
2. Recopila datos de al menos 3 fuentes para cada nivel y rol
3. Calcula el rango como: midpoint = percentil objetivo; mínimo = midpoint - 15-20%; máximo = midpoint + 15-20%

### El solapamiento entre bandas: lo que genera más preguntas

Es normal y deseable que las bandas de niveles adyacentes se solapen. Una persona senior de mucho tiempo puede estar cobrando más que un manager junior:

```
IC3 (Senior):    48.000 ─────────────────── 68.000
                              ↕ solapamiento
M1 (Team Lead):  55.000 ─────────────────── 75.000
```

El solapamiento refleja la realidad: hay Senior ICs que generan más valor que un Manager junior. Debes estar preparado para explicarlo.

## FASE 2 — ANÁLISIS INTERNO: DÓNDE ESTÁS HOY

Antes de publicar las bandas, audita la situación actual:

```
ANÁLISIS DE POSICIÓN EN BANDA

Para cada persona:
- Nivel asignado
- Salario actual
- Posición en la banda: (salario - mínimo de banda) / (máximo - mínimo) × 100

Resultados posibles:
< 0% = Por debajo del mínimo de la banda (acción urgente requerida)
0-33% = Cuarto inferior (nuevo en el nivel)
33-66% = Cuarto medio (desempeño esperado)
66-100% = Cuarto superior (alto desempeño, difícil de retener)
> 100% = Por encima del máximo (red circle / over-range)
```

### Qué hacer con cada situación:

**Por debajo del mínimo de la banda:**
Ajuste salarial inmediato en la próxima nómina. No puede haber nadie por debajo del mínimo cuando las bandas se publican.

**Por encima del máximo (red circle):**
No se reduce el salario. Se congela el incremento anual hasta que el mercado alcance al salario de la persona, o se promueve al siguiente nivel si está justificado.

**Brecha de género u otro criterio:**
Si dos personas del mismo nivel y desempeño similar tienen una diferencia salarial que no se explica por la posición en la banda o el desempeño, se corrige antes de publicar las bandas.

## FASE 3 — COMUNICACIÓN: EL PROCESO QUE DETERMINA EL ÉXITO

### Secuencia de comunicación recomendada

**Semana 1 — Managers first (sesión privada con managers):**
Explica el proceso, muestra las bandas, anticipa las preguntas que recibirán y cómo responderlas. Los managers son el primer punto de contacto cuando el equipo tenga preguntas.

**Semana 2 — 1:1 con cada persona:**
Antes de publicar las bandas, cada manager habla individualmente con cada miembro de su equipo: "Tu nivel es X, tu banda es Y-Z, y tú estás en la posición P de esa banda. Eso significa [interpretación]."

**Semana 3 — Publicación de las bandas:**
Publicación en el canal de empresa o la intranet. Documento FAQ disponible. Sesión de preguntas y respuestas con el equipo de RRHH.

### Guión para la conversación difícil más frecuente

**"Estoy en el cuarto inferior, ¿significa que soy un mal empleado?"**

"No, significa que llevas poco tiempo en este nivel o que estás aprendiendo las competencias de este nivel. La posición en la banda refleja la experiencia y la madurez en el rol, no el valor que aportas. El objetivo es que con el tiempo y el desarrollo de las competencias de este nivel, tu posición vaya avanzando hacia el cuarto medio y superior."

**"Vi que [compañero] gana más que yo." (si han deducido salarios)**

"Las bandas muestran el rango del nivel, no los salarios individuales. Las diferencias dentro de una banda reflejan distintos momentos de incorporación, niveles de experiencia específicos y desempeño. Si tienes dudas sobre tu posición específica, hablemos de ello en tu próxima conversación de compensación."

## MÉTRICAS DE ÉXITO DE LA IMPLEMENTACIÓN

| Métrica | Objetivo | Cómo medir |
|---------|----------|------------|
| % de empleados dentro de su banda | > 95% | Análisis de RRHH |
| Brecha salarial de género en mismo nivel | < 5% sin causa justificada | Análisis anual |
| Satisfacción con la compensación (encuesta) | Mejora en > 10 puntos | eNPS de compensación |
| Rotación voluntaria en los 6 meses post-implementación | Sin incremento | Datos de RRHH |

¿Cuántas personas tiene tu organización y tienes ya alguna estructura de niveles o partes de cero? Con esa información te diseño el proceso específico adaptado a tu contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar bandas salariales con benchmarking de mercado, auditoría interna de posicionamiento, plan de comunicación por fases y guión para las conversaciones difíciles.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Valoración de intangibles — valorar marca, patentes y software para operaciones corporativas',
                'description'      => 'Cómo valorar activos intangibles (marca, patentes, software, contratos) para operaciones de M&A, financiación o contabilidad, con los métodos aceptados y sus limitaciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en valoración de empresas y activos intangibles con experiencia en operaciones de fusiones y adquisiciones. Necesito entender cómo se valoran los activos intangibles (marca, patentes, software propio, contratos de cliente) y cuándo y por qué es necesario hacer este ejercicio.

## QUÉ SON LOS ACTIVOS INTANGIBLES Y POR QUÉ SON DIFÍCILES DE VALORAR

Los activos intangibles son recursos que no tienen existencia física pero generan valor económico. En la economía actual, representan más del 90% del valor de mercado de las empresas del S&P 500, frente al 17% en 1975 (Ocean Tomo, 2023).

**Tipos de activos intangibles:**

| Tipo | Ejemplos | Vida útil típica |
|------|---------|-----------------|
| Marca y reputación | Nombre comercial, logos, reconocimiento | Indefinida (si se mantiene) |
| Propiedad intelectual | Patentes, software, secretos comerciales | Limitada (patente: 20 años) |
| Relaciones con clientes | Contratos recurrentes, base de clientes | Duración del contrato + extensión esperada |
| Capital humano | Know-how del equipo, metodologías | Difícil de separar del negocio |
| Datos y bases de datos | Bases de datos propias, algoritmos | Variable |
| Canales de distribución | Red de distribuidores, partnerships | Variable |

La dificultad de valorarlos reside en que no se compran y venden en mercados líquidos como las acciones. Cada activo intangible es único y su valor depende de quién lo use y cómo.

## CUÁNDO NECESITAS VALORAR INTANGIBLES

| Situación | Por qué se necesita |
|-----------|---------------------|
| Venta de la empresa (M&A) | El comprador necesita saber qué parte del precio paga por intangibles |
| Adquisición de empresa | Asignación del precio de compra (Purchase Price Allocation - PPA) según IFRS 3 |
| Financiación con garantía de intangibles | Algunos bancos y fondos aceptan intangibles como garantía |
| Contabilidad post-adquisición | IFRS/NIIF obliga a registrar los intangibles adquiridos |
| Licenciamiento de marca o patente | Fijar el royalty justo para una licencia |
| Litigios de PI (propiedad intelectual) | Calcular el daño por infracción de patente o marca |
| Planificación de precios de transferencia | Valorar los intangibles transferidos entre filiales del grupo |

## LOS 3 MÉTODOS DE VALORACIÓN DE INTANGIBLES

### Método 1 — Enfoque de mercado (comparables)

**Principio:** El activo vale lo que pagaría un comprador en una transacción entre partes independientes. Se buscan transacciones comparables recientes.

**Cuándo usar:**
- Cuando existen transacciones comparables (marcas similares que se han licenciado o vendido)
- Para marcas de consumo con muchas transacciones de referencia

**Limitaciones:**
- Muy difícil encontrar verdaderos comparables para activos únicos
- Las condiciones de mercado en las transacciones de referencia pueden ser distintas

**Ejemplo de aplicación para marca:**
```
Se han vendido marcas en el sector X con un múltiplo de
0,5-1,5x las ventas anuales.

Ventas anuales de nuestra marca: 10M€
Múltiplo estimado (punto medio): 1,0x
Valoración de la marca: 10M€
```

### Método 2 — Enfoque de ingresos (DCF de intangibles)

**Principio:** El activo vale el valor presente de los flujos de caja futuros que genera específicamente ese activo.

**Las 3 variantes más usadas:**

**2a. Relief from Royalty (para marcas y patentes)**
Calcula cuánto pagarías en royalties si tuvieras que licenciar la marca o patente en lugar de poseerla.

```
Ventas anuales del negocio que usa la marca: 10M€
Royalty rate de mercado para el sector: 3-5% (dato de bases de datos de royalties)
Royalty anual equivalente: 10M€ × 4% = 400.000€
Duración estimada de la marca (indefinida): proyección 20 años
Tasa de descuento: 12%
PV (valor presente de royalties durante 20 años): ~3,0M€
```

**2b. Incremental Cash Flow (para contratos de cliente y software)**
Calcula el flujo de caja adicional que genera el activo respecto a no tenerlo.

```
Ingresos anuales de contratos recurrentes: 5M€
Margen de contribución: 65%
Flujo de caja incremental anual: 3,25M€
Tasa de renovación: 85%/año
Duración media del contrato: 3 años
Valor presente de los flujos durante el período de atribución: ~7,5M€
```

**2c. Multi-Period Excess Earnings Method (MEEM, para el activo intangible principal)**
El método más usado en PPA (Purchase Price Allocation) post-adquisición. Asigna al activo intangible los flujos de caja "en exceso" sobre el rendimiento normal de los otros activos del negocio.

### Método 3 — Enfoque de coste

**Principio:** El activo vale lo que costaría reproducirlo o reemplazarlo.

**Variantes:**
- **Coste histórico:** Lo que costó desarrollar el activo (no suele reflejar el valor real)
- **Coste de reproducción:** Lo que costaría crear un activo idéntico hoy
- **Coste de reposición:** Lo que costaría crear un activo con la misma utilidad económica (no necesariamente idéntico)

**Cuándo usar:**
- Software propietario (coste de reproducción en horas de desarrollo)
- Bases de datos propietarias
- Cuando el activo no genera flujos de caja separables

**Ejemplo para software:**
```
Líneas de código: 500.000
Tarifa media de desarrollo: 80€/hora
Productividad: 10 líneas/hora (estimación conservadora)
Horas de desarrollo equivalentes: 50.000 horas
Coste de reproducción bruto: 4M€
Ajuste por obsolescencia funcional (-20%): -800.000€
Valor de coste ajustado: 3,2M€
```

## TASAS DE ROYALTY DE REFERENCIA POR TIPO DE ACTIVO

Los royalties de mercado son el dato clave para el método Relief from Royalty. Fuentes: ktMINE, RoyaltyRange, Licensing International.

| Tipo de activo | Rango típico de royalty |
|----------------|------------------------|
| Marca de consumo (gran consumo) | 2-6% sobre ventas |
| Marca B2B de software | 3-8% sobre ingresos |
| Patente industrial (hardware) | 2-5% sobre ventas del producto patentado |
| Patente farmacéutica | 5-15% (muy variable por fase de desarrollo) |
| Know-how técnico | 1-4% sobre ventas |
| Software licenciado | 8-20% sobre ingresos del licenciatario |

## ERRORES FRECUENTES EN LA VALORACIÓN DE INTANGIBLES

| Error | Descripción | Impacto |
|-------|-------------|---------|
| Confundir valor contable con valor económico | El coste histórico registrado en la contabilidad no refleja el valor actual | Subvaloración severa |
| No ajustar por obsolescencia | Un activo envejece funcionalmente aunque funcione | Sobrevaloración |
| Tasa de descuento genérica | Los intangibles son más arriesgados que el negocio en general (requieren tasa mayor) | Sobrevaloración |
| No considerar la vida útil restante | Una patente con 18 años vale mucho más que una con 2 años | Error de cuantificación |
| Ignorar los costes de mantenimiento | Mantener una marca o un registro de patente tiene costes recurrentes | Sobrevaloración |

## CUÁNDO CONTRATAR UN EXPERTO Y CUÁNDO HACER UN ANÁLISIS INTERNO

| Situación | ¿Externo necesario? |
|-----------|---------------------|
| M&A o transacción relevante | Siempre. El comprador necesita opinión independiente. |
| Litigio de PI | Siempre. El tribunal exige informe pericial acreditado. |
| PPA post-adquisición (IFRS 3) | Siempre. El auditor lo requerirá de un tercero independiente. |
| Licenciamiento interno (precios de transferencia) | Generalmente sí, para soporte ante inspección fiscal. |
| Análisis estratégico interno | Puede hacerse internamente con los métodos descritos. |
| Financiación bancaria con garantía de intangibles | Depende del banco; algunos aceptan análisis internos para cantidades pequeñas. |

¿Para qué propósito específico necesitas la valoración y qué tipo de activo intangible es el principal (marca, software, contratos)? Con esa información te indico el método más apropiado y el nivel de detalle necesario.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Valorar activos intangibles (marca, patentes, software, contratos) con los 3 métodos principales, tasas de royalty de referencia y criterios para saber cuándo contratar un experto.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contrato de servicios profesionales B2B — cláusulas que protegen al proveedor',
                'description'      => 'Las cláusulas esenciales que debe incluir un contrato de servicios B2B para proteger al proveedor ante impagos, scope creep y terminación anticipada sin compensación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en contratos mercantiles B2B y derecho de los servicios profesionales en España. Necesito una guía práctica sobre las cláusulas esenciales que debe incluir un contrato de servicios profesionales B2B para proteger al proveedor ante los riesgos más frecuentes: impago, scope creep, terminación anticipada sin compensación y reclamaciones de responsabilidad desproporcionadas.

## POR QUÉ EL CONTRATO IMPORTA MÁS EN LAS RELACIONES QUE PARECEN BUENAS

El contrato no es para cuando todo va bien. Es para cuando algo sale mal. En relaciones de negocio donde hay confianza mutua, el contrato apenas se lee. Es cuando hay un impago, un desacuerdo sobre el alcance o una terminación anticipada cuando el contrato se convierte en el árbitro de la situación.

**Los 5 problemas más frecuentes en contratos de servicios B2B y cómo prevenirlos:**

1. Impago parcial o total
2. Scope creep no compensado
3. Terminación unilateral sin compensación
4. Reclamaciones de responsabilidad desproporcionadas
5. Retraso de entrega atribuido al proveedor pero causado por el cliente

## LAS 12 CLÁUSULAS ESENCIALES

### 1. Objeto del contrato: la descripción del servicio

Esta cláusula define exactamente qué vas a hacer (y, implícitamente, qué NO vas a hacer).

**Lo que debe incluir:**
- Descripción detallada de los servicios (puede ser en un Anexo)
- Lista explícita de entregables
- Lo que está expresamente EXCLUIDO del alcance

**Ejemplo de cláusula:**
"Los servicios objeto del presente contrato comprenden exclusivamente [descripción]. Quedan expresamente excluidos del alcance: [lista]. Cualquier servicio adicional requerirá la suscripción de un Pedido de Cambio conforme a lo establecido en la cláusula X."

### 2. Precio y forma de pago

**Lo que debe incluir:**
- Importe total o tarifa (fija, por hora, por éxito)
- Hitos de pago con fechas o condiciones precisas
- Método de pago
- Penalización por demora en el pago

**Cláusula de penalización por impago (basada en la Ley 3/2004 de morosidad):**
"El retraso en el pago devengará un interés de demora equivalente al tipo establecido en el artículo 7 de la Ley 3/2004, de 29 de diciembre, por la que se establecen medidas de lucha contra la morosidad en las operaciones comerciales, sin necesidad de requerimiento previo."

**Plazo de pago legal:** La Ley de Morosidad fija un máximo de 60 días en transacciones B2B. Si el contrato dice "90 días", esa cláusula es nula.

### 3. Condición suspensiva del pago del anticipo

"El inicio de la prestación de los servicios quedará condicionado a la recepción por parte del Proveedor del pago del anticipo previsto en la cláusula [X]. En caso de no recibirse dicho pago en el plazo acordado, el Proveedor podrá resolver el presente contrato sin responsabilidad ni obligación de indemnización."

### 4. Procedimiento de Change Order (gestión del scope creep)

Esta es la cláusula más valiosa para el proveedor de servicios.

"Cualquier modificación del alcance de los servicios descrito en el Anexo [X] deberá ser solicitada por escrito por el Cliente. El Proveedor elaborará una propuesta de modificación (Pedido de Cambio) que incluirá el coste adicional, el impacto en los plazos y los nuevos entregables. El Pedido de Cambio deberá ser aceptado expresamente por escrito por el Cliente antes de su ejecución. El trabajo realizado sin un Pedido de Cambio aceptado será voluntario y no generará obligación de pago."

### 5. Condición de aceptación tácita de entregables

"El Cliente dispondrá de [10] días hábiles desde la recepción de cada entregable para comunicar por escrito las objeciones concretas al mismo. Transcurrido dicho plazo sin comunicación escrita, el entregable se considerará aceptado a todos los efectos. Las revisiones solicitadas tras la aceptación tácita o expresa se considerarán trabajo adicional sujeto a Pedido de Cambio."

### 6. Obligaciones del cliente: la contraparte de tus plazos

Los retrasos de los proyectos son frecuentemente causados por el cliente: retrasos en la entrega de información, validaciones que tardan semanas, personas de referencia que no están disponibles. Sin esta cláusula, el retraso se puede atribuir al proveedor.

"El cumplimiento de los plazos de entrega previstos en el presente contrato está condicionado al cumplimiento por parte del Cliente de las siguientes obligaciones: [lista de obligaciones del cliente]. El incumplimiento de dichas obligaciones por el Cliente dará lugar a una prórroga automática e igual al período de retraso del Cliente en el cumplimiento de sus obligaciones, sin que ello suponga incumplimiento del Proveedor ni genere penalización alguna a su cargo."

### 7. Limitación de responsabilidad

Esta es la cláusula que más protege al proveedor en caso de reclamación.

"La responsabilidad total del Proveedor derivada del presente contrato, por cualquier causa y bajo cualquier teoría de responsabilidad, quedará limitada a un máximo equivalente a [el importe total de los honorarios pagados bajo este contrato en los 12 meses anteriores al hecho generador de responsabilidad / 2x el importe de los honorarios del proyecto]."

**Exclusiones específicas de responsabilidad:**
"En ningún caso el Proveedor será responsable de daños indirectos, lucros cesantes, pérdida de datos, daños a la reputación ni daños consiguientes, aunque hubiera sido informado de la posibilidad de los mismos."

### 8. Confidencialidad: simétrica y específica

A diferencia de los NDAs estudiados en otra skill, la confidencialidad en el contrato de servicios debe ser simétrica (ambas partes se obligan) y específica:

"Se considera Información Confidencial toda la información identificada como tal en el momento de su divulgación o que, por su naturaleza, sea razonablemente identificable como confidencial. No se considera Información Confidencial la que: (a) era ya de dominio público sin intervención de la parte receptora; (b) era ya conocida por la parte receptora antes de la divulgación; (c) fue recibida de un tercero sin restricciones; (d) es requerida por ley o resolución judicial."

### 9. Propiedad intelectual: cuándo se transfiere

"La propiedad intelectual de los entregables se transferirá al Cliente en el momento del pago íntegro de la contraprestación acordada. Hasta dicho momento, todos los derechos sobre los entregables corresponden al Proveedor. El Cliente reconoce que las metodologías, herramientas y know-how del Proveedor utilizados en la prestación de los servicios seguirán siendo propiedad exclusiva del Proveedor."

### 10. Terminación y compensación

Esta cláusula protege al proveedor cuando el cliente cancela unilateralmente:

"En caso de resolución anticipada del contrato por voluntad del Cliente, sin incumplimiento previo del Proveedor, el Cliente abonará: (a) los honorarios correspondientes al trabajo ya realizado hasta la fecha de la resolución; (b) una compensación por cancelación equivalente al [20-30%] de los honorarios pendientes de facturar según el calendario de pagos original."

### 11. Resolución de controversias

"Para la resolución de cualquier controversia derivada de la interpretación, ejecución o terminación del presente contrato, las partes, con renuncia a cualquier otro fuero que pudiera corresponderles, se someten a los Juzgados y Tribunales de [ciudad del proveedor]."

Incluir la ciudad del proveedor es una ventaja táctica: si hay litigio, el proveedor no tiene que desplazarse.

### 12. Integridad del contrato

"El presente contrato, junto con sus Anexos, constituye el acuerdo íntegro entre las partes respecto a su objeto y sustituye a todos los acuerdos, negociaciones, representaciones y entendimientos previos, ya sean verbales o escritos, relativos a dicho objeto."

Esta cláusula invalida cualquier promesa verbal o por email anterior que no esté recogida en el contrato.

## ESTRUCTURA RECOMENDADA DEL CONTRATO

```
CONTRATO DE SERVICIOS PROFESIONALES

1. Objeto del contrato y alcance
2. Entregables y plazos
3. Obligaciones del Cliente
4. Precio, forma de pago y penalización por demora
5. Proceso de gestión de cambios (Change Orders)
6. Aceptación de entregables
7. Propiedad intelectual
8. Confidencialidad
9. Limitación de responsabilidad
10. Duración y terminación anticipada
11. Independencia del contratista (si aplica)
12. Fuerza mayor
13. Resolución de controversias y legislación aplicable
14. Disposiciones generales (nulidad parcial, integridad del contrato)

ANEXOS:
A — Descripción detallada del alcance y entregables
B — Calendario de pagos e hitos
C — Personas de contacto de cada parte
```

¿Cuál es el tipo de servicio que prestas (consultoría, desarrollo, diseño, agencia) y cuál ha sido el problema contractual más frecuente que has experimentado? Con esa información te preparo las cláusulas más relevantes para tu caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Redactar un contrato de servicios B2B con las 12 cláusulas esenciales para proteger al proveedor: impago, scope creep, terminación anticipada y limitación de responsabilidad.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success en early stage — alto impacto con recursos mínimos',
                'description'      => 'Cómo hacer Customer Success de alto impacto cuando no puedes permitirte un equipo dedicado: las 5 palancas que retienen clientes en etapas tempranas con recursos mínimos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en startups B2B en etapas seed y Series A. Necesito un playbook de Customer Success para early stage que genere retención e impacto real cuando solo tengo 1-2 personas dedicadas (o ninguna, y el CS lo hacen el CEO y el equipo de producto).

## EL CONTEXTO ESPECIAL DEL CS EN EARLY STAGE

En una startup early stage, el Customer Success tiene una función doble que no existe en empresas más grandes:

1. **Retención (función clásica):** Asegurarse de que los clientes usan el producto, ven valor y renuevan
2. **Inteligencia de producto (función única del early stage):** Cada conversación con un cliente es una mina de información sobre qué funciona, qué falla y en qué dirección debe ir el producto

En early stage, un buen Customer Success puede acelerar el product-market fit. Un mal Customer Success (o su ausencia) puede hacer que pierdas clientes que podrían haberte enseñado cómo mejorar el producto.

## EL ERROR MÁS FRECUENTE: CS REACTIVO EN VEZ DE PROACTIVO

La mayoría de las startups en early stage hacen CS reactivo: responden tickets, atienden llamadas cuando el cliente llama y resuelven problemas cuando se reportan. El resultado: no saben que un cliente está en riesgo hasta que ya ha cancelado.

El CS proactivo invierte ese flujo: contacta al cliente antes de que tenga un problema, antes de que tenga una queja, antes de que esté buscando alternativas.

**La regla de oro:** No dejes pasar más de 14 días sin contacto con un cliente activo de pago en early stage.

## LAS 5 PALANCAS DE CS DE ALTO IMPACTO CON RECURSOS MÍNIMOS

### Palanca 1 — Onboarding estructurado: el momento más crítico

El 60-70% de los clientes que cancelan en el primer mes lo hacen porque nunca llegaron al "momento aha" (el primer momento donde ven el valor real del producto).

**El mínimo viable de onboarding:**

```
DÍA 0 — BIENVENIDA (email automático + call manual para clientes enterprise)
Objetivo: que el cliente entre al producto el primer día
Contenido:
- Link de acceso con setup inicial
- Video de 3 minutos: "Cómo conseguir X en menos de 15 minutos"
- Calendario para la llamada de kickoff (si aplica)

DÍA 1-3 — LLAMADA DE KICKOFF (30 minutos, manual)
Objetivo: entender el caso de uso específico del cliente y asegurar la configuración correcta
Preguntas clave:
- "¿Qué problema específico quieres resolver con [producto]?"
- "¿Cómo medirás si esto está funcionando?"
- "¿Quién más del equipo va a usarlo?"

DÍA 7 — CHECK-IN DE PROGRESO (email + llamada si no hay actividad)
Objetivo: detectar si el cliente está atascado
Trigger: si el cliente no ha completado el setup o no ha tenido actividad en 3 días, llamar.

DÍA 14 — PRIMER REVIEW DE VALOR
Objetivo: mostrar al cliente el valor que ya ha obtenido (aunque sea pequeño)
Contenido: "En los primeros 14 días, has [métrica de uso]. Esto equivale a [beneficio concreto]."

DÍA 30 — CIERRE DEL ONBOARDING
Objetivo: transición a la fase de adopción regular
Contenido: check de los objetivos iniciales vs. estado actual. Plan para los próximos 60 días.
```

### Palanca 2 — Health Score simplificado: saber quién está en riesgo

Con muchos clientes y pocos recursos, necesitas un sistema para saber en qué clientes poner el foco esta semana.

**Health Score mínimo viable (3 variables):**

| Variable | Peso | Verde | Amarillo | Rojo |
|----------|------|-------|----------|------|
| Frecuencia de uso | 50% | > 3 sesiones/semana | 1-3 sesiones/semana | < 1 sesión/semana o inactivo 14 días |
| Amplitud de uso | 30% | Usa ≥ 3 funciones core | Usa 2 funciones | Solo usa 1 función |
| Satisfacción (último contacto) | 20% | NPS 8-10 | NPS 6-7 | NPS < 6 o no ha respondido |

**Automatización con las herramientas mínimas:**
- Mixpanel o Amplitude para datos de uso → webhook o Zapier → Spreadsheet o Notion
- Si no tienes herramientas de analytics: datos de login del backend → revisión manual semanal

### Palanca 3 — Los 10 más importantes: foco deliberado

En early stage, con 20-50 clientes activos, no puedes atender a todos con la misma intensidad. Elige los 10 más importantes (combinando mayor MRR y mayor potencial de expansión) y dales un nivel de atención premium.

**Qué significa atención premium:**
- Llamada proactiva mensual (no solo cuando hay problema)
- Invitación a roadmap reviews privados
- Acceso a funcionalidades en beta
- Feedback que se convierte en feature (y les avisas cuando se lanza)

**El efecto volante:** Los clientes que se sienten parte del desarrollo del producto son los más leales, los que más expanden y los que más refieren.

### Palanca 4 — The Customer Intelligence Loop: CS como fuente de producto

En early stage, el CS tiene acceso a información de producto que vale más que cualquier análisis cuantitativo. El problema es que esa información se queda en la cabeza del CSM o en emails dispersos.

**Sistema de captura de inteligencia de cliente:**

```
Después de CADA conversación con un cliente, el CSM registra:

1. QUOTE DEL CLIENTE (sus palabras exactas)
   "Uso X para hacer Y porque Z"

2. JOB TO BE DONE (qué está intentando conseguir)
   El problema detrás de la petición

3. PAIN POINT (qué fricción mencionó)
   ¿Dónde el producto le está fallando?

4. FEATURE REQUEST (si la hubo)
   Descripción en términos del problema, no de la solución

5. RIESGO DETECTADO
   ¿Hay señales de que está evaluando alternativas o podría cancelar?

Frecuencia de revisión con producto: semanal (15 min)
```

### Palanca 5 — El Escalation Protocol: actuar antes del churn

Cuando un cliente está en rojo, el tiempo de reacción es crítico. Define el protocolo antes de que ocurra la primera crisis:

```
PROTOCOLO DE ESCALADA DE CLIENTES EN RIESGO

Trigger de activación:
□ 2 semanas sin actividad en el producto (si no es esperado)
□ NPS < 6 en la última encuesta
□ El cliente reduce el número de usuarios activos
□ El cliente contacta pidiendo información sobre cancelación
□ Señales en conversaciones: "estamos evaluando opciones", "no lo estamos usando tanto"

PASO 1 — Llamada de diagnóstico (24-48h tras el trigger)
El CSM llama (no email) para entender la situación.
Pregunta clave: "¿Qué tendría que cambiar para que [producto] fuera esencial para vosotros?"

PASO 2 — Plan de recuperación (72h)
- Si el problema es adopción: sesión de formación personalizada
- Si el problema es de producto: escalar a producto con propuesta concreta
- Si el problema es de valor: análisis de ROI y caso de éxito personalizado
- Si el problema es de precio: análisis de si vale la pena negociar o dejar ir al cliente

PASO 3 — Follow-up a las 2 semanas
¿Ha cambiado algo? ¿El cliente volvió a verde?

PASO 4 — Decisión final
Si el cliente no muestra señales de recuperación: entrevista de cancelación para aprender.
```

## MÉTRICAS DE CS EN EARLY STAGE (LAS QUE REALMENTE IMPORTAN)

| Métrica | Por qué importa en early stage | Objetivo |
|---------|-------------------------------|----------|
| Net Revenue Retention (NRR) | ¿Tu base de clientes crece sola? | > 100% (idealmente > 110%) |
| Churn mensual (MRR churn) | ¿Cuánto MRR pierdes cada mes? | < 2%/mes |
| Time to Value (TTV) | ¿Cuántos días hasta el primer momento de valor? | < 7 días para SaaS de bajo precio |
| Tasa de completión de onboarding | ¿Los clientes llegan al "momento aha"? | > 70% |
| Expansión MRR | ¿Los clientes compran más? | > 15% del MRR total |

## HERRAMIENTAS MÍNIMAS PARA EARLY STAGE CS

| Herramienta | Para qué | Coste |
|-------------|----------|-------|
| Intercom | Email de onboarding + chat de soporte | 90-300€/mes |
| Calendly | Agenda de llamadas de CS sin ir y venir de emails | 8€/mes |
| Notion / Airtable | CRM de clientes con health score manual | 10-20€/mes |
| Loom | Respuestas en vídeo a preguntas frecuentes | 15€/mes |
| Mixpanel (free) | Analytics de uso del producto | Gratis hasta cierto límite |

¿Cuántos clientes activos de pago tienes actualmente y cuál es tu MRR aproximado? Con esa información te diseño el playbook de CS adaptado a tu etapa y recursos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Implementar Customer Success en early stage con onboarding estructurado, health score simplificado, protocolo de escalada y sistema de inteligencia de producto con recursos mínimos.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Portafolio de clientes ideal — la mezcla correcta para estabilidad freelance',
                'description'      => 'La mezcla correcta de clientes ancla, proyectos de crecimiento y nuevas cuentas para tener estabilidad de ingresos sin perder potencial de crecimiento como freelance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocio especializado en estrategia para profesionales independientes. Necesito un framework completo para diseñar el portafolio ideal de clientes como freelance: qué tipos de clientes necesito, en qué proporción y cómo gestionar activamente la mezcla para tener estabilidad sin sacrificar el crecimiento.

## EL CONCEPTO DE PORTAFOLIO DE CLIENTES

Los inversores no ponen todo el dinero en un solo activo. Diversifican entre distintos tipos de inversión según su rentabilidad, liquidez y riesgo. Los freelances deberían aplicar la misma lógica a su base de clientes.

**La paradoja del freelance exitoso:**
Un freelance con un solo cliente grande que paga bien parece estar en una buena situación. En realidad está en una situación de alta vulnerabilidad: si ese cliente reduce el trabajo o cancela, el ingreso desaparece de golpe. Este escenario es el más frecuente detrás de las crisis agudas de freelances.

## LOS 4 TIPOS DE CLIENTE EN EL PORTAFOLIO FREELANCE

### Tipo 1 — El Cliente Ancla (25-40% de tus ingresos)

**Descripción:** Cliente con el que tienes una relación estable y predecible. Normalmente es un retainer mensual o proyectos recurrentes.

**Características:**
- Paga de forma consistente y puntual
- El volumen de trabajo es predecible mes a mes
- Buena relación de trabajo; comunicación fluida
- El precio es razonable (puede no ser tu tarifa más alta)

**Función en el portafolio:** La base de estabilidad. Cubre los gastos fijos y te da tranquilidad para ser exigente con otros clientes.

**Riesgo:** La dependencia excesiva. Si el cliente ancla representa > 40% de tus ingresos, deja de ser un ancla y se convierte en una vulnerabilidad.

**Señal de alarma en el cliente ancla:**
- El volumen de trabajo empieza a bajar sin explicación
- Los plazos de pago se alargan
- La frecuencia de comunicación disminuye
- Mencionan "reorganización" o "cambios de presupuesto"

### Tipo 2 — El Cliente de Crecimiento (30-40% de tus ingresos)

**Descripción:** Cliente con proyectos interesantes, bien pagados y que te permiten desarrollar skills nuevas o ampliar tu portfolio.

**Características:**
- Paga tu tarifa completa o superior
- Los proyectos son variados y te retan
- Potencial de convertirse en cliente ancla en el futuro
- No es predecible: puede haber meses sin trabajo y meses muy intensos

**Función en el portafolio:** El motor de crecimiento de ingresos y de skills. Es donde experimentas, donde cobras más y donde tu reputación crece.

**Cómo gestionar la variabilidad:**
Cuando hay proyecto → entrega excelente y captura el caso de éxito para el portfolio.
Cuando no hay proyecto → es normal; no generes dependencia económica de este tipo de cliente.

### Tipo 3 — El Cliente Nuevo (10-20% de tus ingresos)

**Descripción:** Clientes con los que acabas de empezar, donde todavía hay que demostrar valor. Son el futuro del portafolio.

**Características:**
- Relación nueva, aún sin historial
- Potencial de convertirse en Cliente de Crecimiento o Cliente Ancla
- Requiere más tiempo de gestión (expectativas, confianza)
- Riesgo más alto (no sabes todavía si pagan bien, si son buenos clientes)

**Función en el portafolio:** La renovación. Sin nuevos clientes, el portafolio envejece y la dependencia de los existentes aumenta.

**Estrategia:** Al iniciar con un cliente nuevo, empieza con un proyecto pequeño para evaluar si es un buen fit antes de comprometerte con algo mayor.

### Tipo 4 — El Cliente Estratégico (0-10% de tus ingresos, pero alto valor de otra naturaleza)

**Descripción:** Cliente que no necesariamente te paga más, pero cuyo nombre en tu portfolio o cuya red de contactos vale más que el dinero inmediato.

**Ejemplos:**
- Una marca reconocida que da credibilidad a tu portfolio
- Un cliente en un sector nuevo donde quieres expandirte
- Un cliente con conexión a una red de potenciales clientes ideales

**Cómo gestionarlo:** Sé consciente de que estás invirtiendo (en credibilidad o networking) no solo generando ingresos. Acota el tiempo que dedicas a este tipo de cliente para no sacrificar rentabilidad.

## LA DISTRIBUCIÓN IDEAL POR FASE DE CARRERA

| Fase | Cliente Ancla | Cliente Crecimiento | Cliente Nuevo | Cliente Estratégico |
|------|--------------|---------------------|---------------|---------------------|
| Año 1-2 (consolidación) | 40-50% | 20-30% | 20-30% | 0-10% |
| Año 3-5 (crecimiento) | 30-40% | 30-40% | 15-20% | 5-10% |
| Año 5+ (especialización) | 25-35% | 40-50% | 10-15% | 5-10% |

A medida que maduras como freelance, el peso debe desplazarse desde la estabilidad (ancla) hacia el crecimiento, porque ya tienes la red y la reputación para atraer mejores clientes.

## AUDITORÍA DE TU PORTAFOLIO ACTUAL

Antes de optimizar, entiende dónde estás:

```
AUDITORÍA DE PORTAFOLIO — [Fecha]

Cliente | Tipo | % ingresos | Meses de relación | Estabilidad | Potencial | ¿Acción?
--------|------|-----------|------------------|-------------|-----------|--------
[A]     | Ancla|    38%    |        18        |    Alta     |   Medio   | Mantener
[B]     | Crecim|   25%   |         6        |    Media    |   Alto    | Invertir
[C]     | Nuevo |   15%   |         2        |    Baja     |   Alto    | Evaluar
[D]     | Estratég| 8%   |         9        |    Baja     |   Bajo    | Salir en 3m
[E]     | Ancla|    14%   |        24        |    Alta     |   Bajo    | Planificar sustitución

ANÁLISIS:
- Concentración: [A] representa el 38%. Si cancela, pierdo el 38% de ingresos. Riesgo medio-alto.
- Tipo de crecimiento: Solo el 25% en clientes de crecimiento. Subir al 35% en 6 meses.
- Pipeline de nuevos: Solo el 15%. Necesito activar la búsqueda de 2-3 nuevos clientes potenciales.
- Cliente D: bajo potencial y poca estabilidad. Plan de salida planificada.
```

## GESTIÓN ACTIVA DEL PORTAFOLIO

El portafolio no se gestiona solo. Requiere revisión activa:

### Revisión trimestral del portafolio (90 minutos, solo)

1. ¿Cuál es la distribución actual de ingresos por tipo de cliente?
2. ¿Qué señales de cambio hay en cada cliente? (más trabajo, menos trabajo, relación más o menos fluida)
3. ¿Qué clientes actuales tienen potencial de moverse al siguiente tipo? (un nuevo que puede volverse ancla, un ancla que puede crecer)
4. ¿Hay algún cliente del que debería salir gradualmente? (baja tarifa, mala relación, sin crecimiento)
5. ¿Cuántos prospectos activos tengo para nuevas cuentas? ¿Es suficiente para mantener el pipeline?

### Plan de salida de clientes poco rentables

Salir de un cliente es tan importante como conseguir uno nuevo. Proceso:

```
Mes 1: Reduce el tiempo dedicado al cliente (acepta menos trabajo).
Mes 2-3: Introduce a otro profesional que pueda hacerse cargo.
Mes 4: Comunica la transición. Ofrece un período de entrega.
Mes 5: Cierre ordenado y con buena reputación.
```

Nunca abandones a un cliente de golpe aunque quieras salir. La comunidad de freelances es pequeña y la reputación es tu activo más valioso.

## MÉTRICAS DEL PORTAFOLIO

| Métrica | Objetivo | Señal de alarma |
|---------|----------|-----------------|
| Concentración máxima (cliente más grande) | < 35% de ingresos | > 50% |
| Número mínimo de clientes activos | ≥ 4 | < 3 |
| % de ingresos recurrentes (retainers) | > 40% | < 20% |
| Nuevos clientes cualificados contactados por trimestre | ≥ 5 | < 2 |
| Tarifa media por hora (tendencia) | Ascendente | Estancada o descendente |

¿Cuántos clientes tienes actualmente y cuál es la distribución aproximada de ingresos entre ellos? Con esa información te hago el diagnóstico del portafolio y las recomendaciones específicas de optimización.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar y gestionar el portafolio ideal de clientes freelance con los 4 tipos (ancla, crecimiento, nuevo, estratégico), distribución por fase de carrera y auditoría trimestral.',
                'vote_score'       => 42,
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
