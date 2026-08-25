<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills73Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de intención: SEO y SEM para captar usuarios que ya buscan tu solución',
                'description'      => 'Diseña una estrategia de SEO y SEM que capture a usuarios en el momento exacto en que están buscando activamente una solución como la tuya.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en marketing de búsqueda con 10 años de experiencia en estrategias SEO y SEM para empresas B2B y B2C. Tengo un producto o servicio y quiero captar usuarios que ya están buscando activamente una solución. Ayúdame a diseñar la estrategia completa de marketing de intención.

**Mi contexto:**
- Producto o servicio: [describe brevemente]
- Modelo de negocio: [B2B / B2C / marketplace]
- Mercado objetivo: [idioma y geografía]
- Presupuesto mensual: [solo SEO (€0 en SEM) / €X en SEM / combinado]
- Estado actual: [sin presencia / algo de tráfico orgánico / ya tenemos SEM]
- Competencia percibida: [alta / media / nicho]

---

## EL CONCEPTO: MARKETING DE INTENCIÓN VS. MARKETING DE INTERRUPCIÓN

| Tipo | Ejemplo | Momento del usuario | Conversión típica |
|------|---------|--------------------|--------------------|
| Interrupción | Anuncio en Instagram | No está buscando nada | 0.5-2% |
| Intención baja | Artículo de blog descubierto | Aprende sobre el tema | 1-3% |
| Intención media | Búsqueda informacional | Investiga opciones | 2-5% |
| Intención alta | Búsqueda transaccional | Listo para actuar | 5-15% |
| Intención máxima | Búsqueda de marca competencia | Quiere comprar ya | 10-25% |

El marketing de intención se centra en los últimos 3 niveles — donde el usuario ya quiere algo.

---

## PARTE 1: MAPA DE INTENCIÓN DE BÚSQUEDA

### Los 4 tipos de intención según Google:

**Informacional:** "¿Cómo funciona el cloud computing?"
→ Objetivo: educar, construir confianza → Contenido de blog, guías

**Navegacional:** "Salesforce CRM precio"
→ Objetivo: ser encontrado cuando buscan alternativas → Landing pages comparativas

**Comercial/Investigación:** "mejores herramientas de gestión de proyectos"
→ Objetivo: aparecer en la consideración → Reviews, comparativas, casos de uso

**Transaccional:** "software de gestión de proyectos para PYMEs precio"
→ Objetivo: conversión directa → Landing pages de producto, SEM

### Framework de mapeado de keywords por intención:

**Paso 1 — Seed keywords (tu categoría):**
[tu categoría de producto] + [solución], [herramienta], [software], [servicio], [alternativa a X]

**Paso 2 — Keywords de problema (intención alta):**
"cómo [resolver el problema que resuelves]", "[problema] solución", "[problema] sin [fricción]"

**Paso 3 — Keywords de alternativa y comparativa:**
"[competidor] alternativa", "[competidor] vs [tu marca o categoría]", "mejor [categoría] para [segmento]"

**Paso 4 — Keywords transaccionales:**
"[categoría] precio", "[categoría] contratar", "[categoría] España", "[categoría] demo", "comprar [categoría]"

---

## PARTE 2: ESTRATEGIA SEO DE INTENCIÓN

### Arquitectura de contenido por niveles de intención:

```
Nivel 1 (Intención alta) — Money Pages:
└── /precios → usuarios que buscan precio
└── /[característica-clave] → usuarios que buscan esa feature
└── /para-[segmento] → usuarios de ese vertical
└── /alternativa-a-[competidor] → usuarios que buscan alternativas

Nivel 2 (Intención media) — Comparison Pages:
└── /comparativa/[tu-marca]-vs-[competidor]
└── /mejores-[categoria]-para-[segmento]
└── /como-elegir-[categoria]

Nivel 3 (Intención baja) — Blog:
└── /blog/como-resolver-[problema]
└── /blog/guia-[tema-del-sector]
└── /blog/que-es-[concepto-que-resuelves]
```

### Optimización de una landing page de intención alta:

**Elementos obligatorios en el above-the-fold:**
1. H1 con la keyword transaccional principal
2. Propuesta de valor en 1 línea (beneficio, no feature)
3. CTA principal con verbo de acción específico
4. Prueba social inmediata (número de clientes, rating, logos)

**Velocidad de página:** Google penaliza páginas > 3 segundos de carga en móvil. Core Web Vitals objetivo: LCP < 2.5s, FID < 100ms, CLS < 0.1.

---

## PARTE 3: ESTRATEGIA SEM PARA MÁXIMA INTENCIÓN

### Estructura de campañas Google Ads por intención:

**Campaña 1 — Branded (protección de marca):**
Keywords: [tu marca], [tu marca + precio], [tu marca + alternativas]
Objetivo: Proteger tu tráfico de marca de la competencia. ROAS muy alto.

**Campaña 2 — Competencia (intención máxima):**
Keywords: [competidor A] alternativa, [competidor B] vs [tu categoría]
Objetivo: Capturar usuarios insatisfechos con la competencia. CPC alto pero conversión excelente.

**Campaña 3 — Categoría (intención alta):**
Keywords: [tu categoría] [modificadores: precio, contratar, demo, España]
Objetivo: Capturar demanda activa de la categoría.

**Campaña 4 — Problema (intención media-alta):**
Keywords: frases de problema que tu solución resuelve
Objetivo: Capturar usuarios en fase de investigación.

### Anatomía del anuncio de alta intención:

```
Título 1: [Palabra clave principal] — Incluir la búsqueda del usuario
Título 2: [Beneficio diferencial] — El "por qué nosotros"
Título 3: [CTA con urgencia o especificidad] — "Prueba gratis 14 días"

Descripción 1: [Problema que resuelves] + [Prueba social]
Descripción 2: [Feature clave] + [CTA secundario] + [Diferenciador]
```

### Extensiones de anuncio obligatorias:
- **Sitelinks:** /precios, /funcionalidades, /casos-de-exito, /prueba-gratis
- **Callouts:** "Sin contrato de permanencia", "Soporte en español", "Implementación en 24h"
- **Snippets estructurados:** Lista de funcionalidades o sectores
- **Extensión de precio:** Si tienes precios públicos, muéstralos

---

## PARTE 4: MEDIR EL MARKETING DE INTENCIÓN

### KPIs por tipo de canal:

| KPI | SEO | SEM | Benchmark |
|-----|-----|-----|-----------|
| Click-through rate | Posición 1-3: 15-35% | Sector B2B: 3-6% | Depende de posición |
| Tasa de conversión landing | Orgánico: 2-5% | SEM: 3-8% | Optimizable |
| Coste por lead | €0 variable | €X según sector | B2B: €50-500 |
| Tiempo hasta conversión | Semanas/meses | Inmediato | SEM más predecible |
| Valor de lifetime del lead | Alto (buscó activamente) | Alto | Mayor que social |

---

## TAREA PARA CLAUDE

Con mi producto y mercado:

1. **Mapa de keywords por intención:** Genera 20 keywords que debería atacar (5 por tipo de intención) para mi producto específico, con estimación de volumen y dificultad.

2. **Arquitectura de contenido:** Diseña la estructura de páginas que necesito para capturar los distintos niveles de intención, con el título SEO y la meta description de cada una.

3. **Estructura de campaña SEM:** Propón la estructura de campañas de Google Ads para empezar con un presupuesto de €[X]/mes, con las 10 keywords iniciales más importantes.

4. **Landing page de intención alta:** Dame el copy completo (headline, subheadline, bullets de beneficios, CTA, prueba social) para mi principal landing page transaccional.

5. **Plan de 90 días:** ¿Qué hago primero si tengo presupuesto para una sola cosa — SEO o SEM? Dame el plan de 90 días en orden de acciones con el impacto esperado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar estrategias de SEO y SEM orientadas a capturar usuarios con alta intención de compra o contratación',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Gestión de secretos en producción: Vault, AWS Secrets Manager y mejores prácticas',
                'description'      => 'Implementa una estrategia de gestión de secretos para no exponer credenciales en producción usando HashiCorp Vault, AWS Secrets Manager y controles de acceso.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de seguridad DevSecOps con experiencia en infraestructuras cloud y gestión de secretos en producción. Necesito implementar o mejorar la gestión de secretos en mi stack para eliminar credenciales hardcodeadas y gestionar de forma segura API keys, contraseñas de bases de datos y otros secretos sensibles.

**Mi contexto:**
- Infraestructura: [AWS / GCP / Azure / VPS propio / mixto]
- Stack tecnológico: [lenguaje, framework, contenedores]
- Orquestación: [Kubernetes / ECS / bare metal / serverless]
- Estado actual: [variables de entorno en .env / secretos en CI/CD / sin gestión formal]
- Número de secretos aproximado: [< 20 / 20-100 / > 100]
- Regulación aplicable: [PCI-DSS / HIPAA / SOC 2 / ninguna específica]

---

## POR QUÉ ESTO ES CRÍTICO: EL COSTE DE UN SECRETO EXPUESTO

**Estadísticas reales:**
- GitGuardian detecta un secreto expuesto en repositorios públicos cada 3 segundos
- El tiempo medio entre exposición de credencial y explotación: 4 minutos
- El coste medio de una brecha de seguridad por credenciales expuestas: $4.35M (IBM 2023)

**Los 5 errores más comunes:**
1. Credenciales hardcodeadas en el código fuente (commiteadas en Git)
2. Secretos en variables de entorno sin rotación
3. Misma credencial para desarrollo, staging y producción
4. Sin auditoría de quién ha accedido a qué secreto
5. Sin proceso de rotación automática cuando un empleado sale

---

## OPCIÓN 1: HASHICORP VAULT

### Cuándo elegir Vault:
- Multi-cloud o entorno híbrido
- Necesitas secrets dinámicos (credenciales que se generan y expiran automáticamente)
- Quieres control total de la infraestructura de secretos
- Equipo con capacidad técnica para operar Vault

### Conceptos clave de Vault:

**Secret Engines (tipos de secretos que Vault gestiona):**
```
kv (Key-Value)         → Secretos estáticos: API keys, contraseñas
database               → Credenciales de BD dinámicas (TTL configurable)
aws                    → Credenciales AWS temporales via STS
pki                    → Certificados TLS generados dinámicamente
ssh                    → Claves SSH de un solo uso
transit               → Cifrado como servicio (no almacena datos, solo cifra)
```

### Arquitectura de Vault en producción:

```
┌─────────────────────────────────────────┐
│  Aplicación / CI-CD / Kubernetes        │
│  │                                      │
│  │ (solicita secreto con token/role)    │
│  ▼                                      │
│  Vault Agent (sidecar o init container) │
│  │                                      │
│  │ (autenticación + caché local)        │
│  ▼                                      │
│  HashiCorp Vault Cluster                │
│  ├── Secret Engine: database            │
│  ├── Secret Engine: kv v2               │
│  └── Auth Methods: Kubernetes/AWS       │
└─────────────────────────────────────────┘
```

### Credenciales de BD dinámicas — el caso de uso más potente:

```bash
# Vault genera un usuario temporal en PostgreSQL con TTL de 1 hora
vault read database/creds/my-role
# Output:
# Key             Value
# lease_id        database/creds/my-role/abc123
# username        v-root-my-role-xyz
# password        A1b-Xyz-random-generated
# lease_duration  1h
```

El usuario expira automáticamente. Si un atacante obtiene las credenciales, solo tiene 1 hora.

### Vault Agent Sidecar en Kubernetes:
```yaml
# En el pod, Vault Agent actúa como sidecar y escribe secretos en archivos
annotations:
  vault.hashicorp.com/agent-inject: "true"
  vault.hashicorp.com/role: "my-app"
  vault.hashicorp.com/agent-inject-secret-config: "secret/data/myapp/config"
  vault.hashicorp.com/agent-inject-template-config: |
    {{- with secret "secret/data/myapp/config" -}}
    DB_PASSWORD={{ .Data.data.db_password }}
    API_KEY={{ .Data.data.api_key }}
    {{- end }}
```

---

## OPCIÓN 2: AWS SECRETS MANAGER

### Cuándo elegir AWS Secrets Manager:
- Stack 100% AWS
- Quieres menos operación (managed service)
- Necesitas rotación automática de RDS, Redshift, DocumentDB
- Integración nativa con IAM, Lambda, ECS, EKS

### Estructura de un secreto en AWS Secrets Manager:
```json
{
  "SecretName": "myapp/production/database",
  "SecretString": {
    "username": "admin",
    "password": "XXXXXXXX",
    "engine": "postgres",
    "host": "mydb.cluster.rds.amazonaws.com",
    "port": 5432,
    "dbname": "myapp_prod"
  }
}
```

### Acceso desde código (Node.js):
```javascript
const { SecretsManagerClient, GetSecretValueCommand } = require("@aws-sdk/client-secrets-manager");

const client = new SecretsManagerClient({ region: "eu-west-1" });

async function getSecret(secretName) {
    const response = await client.send(
        new GetSecretValueCommand({ SecretId: secretName })
    );
    return JSON.parse(response.SecretString);
}

// Uso en la app — carga una vez al arrancar, cachea en memoria
const dbCredentials = await getSecret("myapp/production/database");
```

### Rotación automática de RDS con Lambda:
```bash
# Activa la rotación automática — AWS hace todo el resto
aws secretsmanager rotate-secret \
    --secret-id myapp/production/database \
    --rotation-schedule-expression "rate(30 days)" \
    --rotation-lambda-arn arn:aws:lambda:...
```

---

## COMPARATIVA: ¿VAULT O AWS SECRETS MANAGER?

| Criterio | HashiCorp Vault | AWS Secrets Manager |
|----------|----------------|---------------------|
| Operación | Alta (tú gestionas el cluster) | Baja (managed) |
| Multi-cloud | ✅ Nativo | ❌ Solo AWS |
| Secretos dinámicos | ✅ Muy potente | ⚠️ Solo para algunos servicios AWS |
| Coste base | Open source gratis, Enterprise caro | $0.40/secreto/mes |
| Integración K8s | ✅ Excelente | ✅ Buena con ESO |
| Auditoría | ✅ Muy detallada | ✅ Via CloudTrail |
| Rotación automática | ✅ Cualquier sistema | ✅ Solo servicios AWS nativos |

---

## BUENAS PRÁCTICAS UNIVERSALES

### Principio de mínimo privilegio en secretos:
- Cada servicio solo accede a los secretos que necesita (nunca un token master)
- Scope por entorno: producción, staging y desarrollo tienen secretos distintos
- Scope por aplicación: cada microservicio tiene sus propias credenciales

### Detección de secretos en código (shift-left):
```bash
# Pre-commit hook con git-secrets
git secrets --install
git secrets --register-aws

# O usa trufflehog en CI/CD
trufflehog git https://github.com/tu-org/tu-repo --only-verified

# O detect-secrets (Python)
detect-secrets scan > .secrets.baseline
```

---

## TAREA PARA CLAUDE

Con mi infraestructura y contexto:

1. **Recomendación de herramienta:** ¿Vault, AWS Secrets Manager, GCP Secret Manager, Azure Key Vault o algo más simple? Justifica para mi caso específico.

2. **Mapa de secretos actual:** Ayúdame a hacer el inventario de todos los tipos de secretos que manejo y su clasificación por criticidad.

3. **Plan de migración en 4 fases:** Cómo pasar de mi estado actual (variables de entorno / .env) al sistema recomendado sin interrumpir producción.

4. **Integración con mi stack:** Dame el código de integración para mi lenguaje y framework para acceder a los secretos desde la aplicación de forma segura.

5. **Checklist de auditoría de seguridad:** ¿Qué 10 controles debo verificar para certificar que mi gestión de secretos cumple con los estándares de mi regulación aplicable?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar gestión segura de secretos y credenciales en producción eliminando credenciales hardcodeadas',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX para kioscos y señalética digital: interfaces táctiles de gran formato',
                'description'      => 'Diseña interfaces para pantallas táctiles de gran formato en entornos físicos como tiendas, aeropuertos u hospitales con los principios específicos de UX ambiental.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX especializado en interfaces ambientales y kioscos interactivos con experiencia en proyectos para retail, hospitales, aeropuertos y espacios públicos. Necesito diseñar la interfaz de un kiosco o pantalla digital interactiva para un entorno físico específico.

**Mi proyecto:**
- Tipo de dispositivo: [kiosco táctil de pie / pantalla de pared interactiva / totém / mesa táctil]
- Tamaño de pantalla aproximado: [X pulgadas]
- Entorno físico: [tienda / aeropuerto / hospital / hotel / restaurante / transporte público]
- Función principal: [información / autochekin / pedido / orientación / pago / todo lo anterior]
- Perfil de usuarios: [turistas / pacientes / clientes de retail / empleados / mixto]
- Contexto de uso: [supervisado / autónomo / zonas de paso / zonas de espera]

---

## LAS DIFERENCIAS CRÍTICAS ENTRE UX DIGITAL Y UX AMBIENTAL

El mayor error al diseñar para kioscos es aplicar los principios de diseño web o móvil sin adaptarlos. Son contextos radicalmente distintos.

### Comparativa de contextos:

| Dimensión | App móvil | Web desktop | Kiosco / Señalética |
|-----------|-----------|-------------|---------------------|
| Postura del usuario | Sentado/de pie, relajado | Sentado, concentrado | De pie, en movimiento |
| Tiempo de atención | 5-20 min | 5-30 min | 30 segundos - 3 min |
| Nivel de motivación | Alta (eligió abrir la app) | Media-alta | Baja-media (interrupción) |
| Distancia de visualización | 25-35 cm | 50-80 cm | 60-150 cm |
| Precisión táctil | Alta (un dedo) | Mouse muy preciso | Baja (ángulo, distancia, guantes) |
| Compartido | Raramente | Raramente | Frecuentemente |
| Contexto emocional | Neutro | Neutro | Estrés (aeropuerto), dolor (hospital), prisa (retail) |

---

## PARTE 1: PRINCIPIOS DE DISEÑO VISUAL PARA KIOSCOS

### Tipografía a distancia:

| Distancia de lectura | Tamaño mínimo de cuerpo | Tamaño mínimo de títulos |
|---------------------|------------------------|--------------------------|
| 60-80 cm | 24pt | 36pt |
| 80-120 cm | 32pt | 48pt |
| 120-200 cm | 40pt | 64pt |
| > 200 cm (señalética) | 60pt+ | 90pt+ |

**Regla de legibilidad:** Para textos de navegación principal, usa mayúsculas o Bold en typefaces de palo seco (sans-serif). Nunca texto decorativo o condensado en elementos interactivos.

### Targets táctiles a distancia:

La norma WCAG 2.5.5 recomienda 44x44px para pantallas de alta resolución móvil. Para kioscos, esto es insuficiente.

**Tamaño mínimo de targets en kioscos:**
| Contexto | Target mínimo | Target recomendado |
|----------|--------------|-------------------|
| Kiosco estándar (70-90cm de distancia) | 80x80px | 120x120px |
| Gran formato (>1m de distancia) | 120x120px | 180x180px |
| Usuarios con discapacidad motora | 140x140px | 200x200px |
| Con guantes (invierno, sanitarios) | 100x100px | 150x150px |

**Espaciado entre targets:** Mínimo 20px de margen entre botones para evitar taps erróneos.

### Contraste en entornos con luz ambiental variable:
- Contraste mínimo 7:1 (superior a WCAG AA 4.5:1) por la luz exterior y reflejos
- Evita fondos blancos puros — los reflejos los saturan
- Prefer fondos oscuros en entornos con mucha luz natural (tiendas con ventanales, aeropuertos)
- Pantallas con tratamiento anti-reflejo y brillo regulable son necesidades del hardware, no solo del software

---

## PARTE 2: ARQUITECTURA DE INFORMACIÓN Y FLUJOS

### La regla de los 3 toques máximos:
En un kiosco, el usuario debe llegar a su objetivo en máximo 3 interacciones desde la pantalla de inicio. Más de 3 toques genera frustración y abandono.

**Estructura de navegación para kioscos:**

```
Pantalla de Atracción (idle screen)
└── Pantalla de Inicio (selección de categoría)
    ├── Flujo A → Pantalla de resultado / acción (2 toques)
    ├── Flujo B → Selección intermedia → Resultado (3 toques)
    └── Flujo C → [máximo permitido] → Selección → Resultado (3 toques)
```

**Pantalla de Atracción (el estado idle):**
Cuando nadie usa el kiosco, muestra contenido atractivo y visible desde lejos:
- Movimiento suave (loop de vídeo o animación CSS)
- Call-to-action muy grande: "TOCA AQUÍ PARA EMPEZAR"
- Nada que parezca que ya tiene algo seleccionado

### Timeout y recuperación de sesión:
- Mostrar aviso visual a los 30-45 segundos de inactividad: "¿Sigues ahí?"
- Reset automático a pantalla de inicio a los 60-90 segundos de inactividad
- Nunca guardar datos personales entre sesiones (privacidad)
- Botón "Cancelar / Volver al inicio" siempre visible y accesible

---

## PARTE 3: CONSIDERACIONES POR ENTORNO

### Kioscos en hospitales y entornos de salud:
- **Accesibilidad obligatoria:** Pantalla a dos alturas (silla de ruedas y de pie) o pantalla inclinable
- **Audio** opcional con auriculares o altavoces para usuarios con discapacidad visual
- **Idiomas múltiples:** Siempre detección automática o selección fácil en portada
- **Modo de alto contraste:** Botón visible en la interfaz
- **Tiempo de sesión extendido:** Los usuarios mayores o con estrés necesitan más tiempo
- **Privacidad:** Pantalla con filtro de privacidad físico o vista limitada en entornos clínicos

### Kioscos en aeropuertos y transporte:
- **Velocidad sobre todo:** El usuario tiene estrés de tiempo — reduce texto, aumenta iconos
- **Multilingüe obligatorio:** Selector de idioma en pantalla de inicio, siempre visible
- **Localización:** Muestra información del entorno inmediato (puertas, tiempos, distancias)
- **Sincronización con sistemas de backend:** Si el vuelo cambia, el kiosco debe reflejarlo en tiempo real
- **Fallback offline:** ¿Qué muestra si el backend no responde? Define el estado de error claramente

### Kioscos en retail:
- **Integración de inventario en tiempo real:** El usuario no puede seleccionar algo que no está en stock
- **Imágenes de alta calidad:** El producto se "vende" visualmente — invierte en fotografía
- **Proceso de pago integrado:** Si hay pago, el tiempo máximo tolerable es 60 segundos
- **Conectar a móvil:** QR para continuar el pedido desde el teléfono personal

---

## PARTE 4: ACCESIBILIDAD EN KIOSCOS (NORMATIVA)

**Normativa aplicable en España/UE:**
- **Real Decreto 1112/2018:** Accesibilidad de sitios web y apps del sector público (incluye kioscos públicos)
- **EN 301 549:** Norma técnica europea de accesibilidad
- **ADA Compliance** (si opera en EEUU): altura de pantalla, alcance, operación con una mano

**Checklist de accesibilidad mínima:**
- [ ] Pantalla accesible desde silla de ruedas (altura 90-120cm para controles)
- [ ] Lector de pantalla compatible (ARIA labels si es web, accesibilidad nativa si es app)
- [ ] Audio o texto alternativo para todos los elementos visuales
- [ ] Contraste 7:1 para texto sobre fondo
- [ ] Opción de aumentar tamaño de texto (+A)
- [ ] Sin elementos que parpadeen más de 3 veces por segundo (convulsiones)
- [ ] Navegación completa sin audio si hay audio integrado

---

## TAREA PARA CLAUDE

Con mi proyecto descrito:

1. **Diagnóstico de requisitos:** ¿Qué características especiales tiene mi entorno y perfil de usuarios que debo tener en cuenta antes de diseñar? Dame los 5 factores más importantes.

2. **Arquitectura de navegación:** Diseña la estructura de pantallas completa (árbol de navegación) con máximo 3 niveles de profundidad para mi caso de uso.

3. **Especificaciones técnicas:** Dame las especificaciones de diseño concretas para mi pantalla: tamaño de targets, tipografía mínima, espaciados y paleta de colores adaptada a mi entorno.

4. **Flujo de accesibilidad:** ¿Qué elementos de accesibilidad son obligatorios para mi tipo de instalación y cuáles son "nice to have"?

5. **Protocolo de pruebas en entorno real:** ¿Cómo hago el test de usabilidad de un kiosco antes de la instalación definitiva? Dame el protocolo de pruebas con usuarios reales en el espacio físico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar interfaces táctiles para kioscos y señalética digital en entornos físicos públicos y comerciales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión y coaching de SDRs: forma el equipo de prospección que multiplica el pipeline',
                'description'      => 'Construye el sistema de gestión, formación y coaching que convierte a los SDRs júnior en máquinas de prospección con métricas claras y escuchas de llamadas estructuradas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia construyendo y gestionando equipos de SDRs (Sales Development Representatives) en empresas B2B SaaS. Necesito ayuda para establecer o mejorar el sistema de gestión de mi equipo de SDRs: métricas, formación, coaching de llamadas y los rituales semanales que generan rendimiento sostenido.

**Mi contexto:**
- Tamaño del equipo: [X SDRs]
- Antigüedad media del equipo: [X meses / mixto]
- Tipo de prospección: [outbound puro / inbound-led / mixto]
- Canal principal: [llamadas / email / LinkedIn / mixto]
- Cuota mensual por SDR: [X reuniones o X pipeline generado]
- Principal problema: [rendimiento desigual / alta rotación / sin proceso de coaching / métricas poco claras]

---

## EL ROL DEL SDR: LO QUE EL EQUIPO DEBE TENER CRISTALINO

El SDR no cierra ventas. Su único objetivo: generar conversaciones cualificadas para el equipo de Account Executives.

**Las 3 métricas que importan (y las que no):**

✅ **Métricas que importan:**
1. Reuniones cualificadas generadas (Qualified Meetings)
2. Tasa de muestra (show rate): % de reuniones que realmente ocurren
3. Ratio de conversión a oportunidad: % de reuniones que el AE convierte en deal activo

❌ **Métricas que engañan (lagging indicators que no controla el SDR):**
- Pipeline generado en valor (el AE lo determina)
- Revenue cerrado (no depende del SDR)

**Métricas de actividad (leading indicators — el SDR sí las controla):**
| Métrica | Benchmark inicial | Benchmark maduro |
|---------|-----------------|-----------------|
| Intentos de contacto/día | 50-80 | 80-120 |
| Secuencias activas | 50-100 cuentas | 100-200 cuentas |
| Emails personalizados/día | 20-40 | 30-60 |
| Llamadas conectadas/día | 5-10 | 10-20 |
| Reuniones agendadas/semana | 2-4 | 4-8 |

---

## PARTE 1: ONBOARDING DEL SDR EN 90 DÍAS

### El plan de rampa:

**Días 1-30 — Aprender:**
- Semana 1: Producto (demo completa, casos de uso, propuesta de valor)
- Semana 2: ICP y buyer personas (quién es el cliente ideal y por qué)
- Semana 3: El proceso de ventas completo (shadowing a AEs)
- Semana 4: Herramientas + primeras secuencias en frío (supervisadas)
- KPI del mes: 1-2 reuniones. El objetivo es aprender, no producir.

**Días 31-60 — Practicar:**
- Primeras secuencias autónomas con revisión diaria del manager
- 2-3 call reviews por semana
- Objetivo: 50% de la cuota mensual
- KPI del mes: 2-3 reuniones cualificadas

**Días 61-90 — Escalar:**
- Plena autonomía con revisiones semanales
- Empieza a especializarse en canales o verticales
- Objetivo: 75-100% de la cuota mensual
- KPI del mes: cuota completa

---

## PARTE 2: EL SISTEMA DE COACHING DE LLAMADAS

### Por qué el call review es el ritual más importante

Una sesión de call review bien hecha produce más mejora que 10 roleplays. El SDR aprende de sus propias palabras, no de instrucciones del manager.

### El framework de call review en 4 pasos:

**Paso 1 — El SDR evalúa primero (sin el manager):**
Antes de la sesión, el SDR escucha la grabación y responde:
- ¿Cuál era el objetivo de esta llamada?
- ¿Lo conseguiste? ¿Por qué sí o no?
- ¿En qué momento se torció la conversación?
- ¿Qué harías diferente?

**Paso 2 — El manager escucha la misma llamada:**
Identifica máximo 2-3 puntos de mejora (no más). Demasiado feedback en una sesión no se retiene.

**Paso 3 — La sesión de review (20-30 min):**
```
5 min:  El SDR comparte su autoevaluación
10 min: Escuchan juntos los momentos clave (no la llamada entera)
10 min: El manager añade máximo 2 observaciones + practica la alternativa en roleplay
5 min:  El SDR resume qué va a hacer diferente la próxima vez
```

**Paso 4 — Seguimiento:**
En la siguiente sesión de review, empieza verificando si aplicó lo del anterior.

### Rúbrica de evaluación de llamada:

| Dimensión | 1 — Necesita mejora | 3 — Cumple | 5 — Excelente |
|-----------|--------------------|-----------|--------------------|
| Apertura | Presentación genérica | Clara y directa | Personalizada con research |
| Calificación | No hace preguntas | Preguntas básicas | BANT/MEDDIC completo |
| Pitch | Habla del producto | Habla de beneficios | Habla del problema del cliente |
| Manejo de objeciones | Se rinde | Responde, no convence | Reencuadra y avanza |
| Próximo paso | No propone nada | Propone vaga | Fecha y hora concretas |

---

## PARTE 3: LOS RITUALES SEMANALES DEL EQUIPO SDR

### Calendario de rituales:

**Lunes — Kickoff semanal (15 min):**
- Revisión de la semana anterior: ¿cuántas reuniones? ¿cuántas ocurrieron?
- Top performer comparte un email o apertura de llamada que funcionó
- Objetivo de la semana por cada SDR

**Miércoles — Pipeline Review (30 min):**
- Revisión de las cuentas que están "calientes" en secuencia
- ¿Hay bloqueos que el manager puede desatascar?
- Ajuste de táctica para las cuentas prioritarias

**Viernes — Win/Loss Review (20 min):**
- ¿Qué reuniones agendamos esta semana y cómo?
- ¿Qué situaciones difíciles encontramos? ¿Cómo las resolvimos?
- Celebración pública de logros (nunca solo del top performer)

**Mensual — 1:1 de carrera (45-60 min):**
- ¿Cómo se siente el SDR con su progreso?
- ¿Qué quiere desarrollar los próximos 90 días?
- ¿Está en camino hacia AE u otro rol?

---

## PARTE 4: MANEJAR EL RENDIMIENTO DESIGUAL

### El diagnóstico antes del plan de acción:

| Síntoma | Causa probable | Intervención |
|---------|---------------|--------------|
| Pocas actividades | Gestión del tiempo / herramientas | Auditoría de proceso + bloques de tiempo |
| Muchas actividades, pocas conexiones | Lista/segmentación mala | Revisión de ICP y targeting |
| Conexiones pero no reuniones | Pitch / manejo de objeciones | Call review intensivo |
| Reuniones pero baja show rate | Confirmación de agenda / expectativas | Revisar proceso post-agenda |
| Reuniones pero AE no las convierte | Calificación insuficiente | Revisión de criterios de cualificación |

### PIP (Performance Improvement Plan) para SDRs:
- Duración: 30 días con revisión semanal
- Métricas diarias explícitas y acordadas
- Call review 3 veces por semana
- Criterio claro de éxito y de salida del PIP

---

## TAREA PARA CLAUDE

Con mi equipo y contexto:

1. **Diagnóstico del equipo:** Basándome en los síntomas que describes, ¿cuáles son las 3 causas raíz más probables del rendimiento actual?

2. **Sistema de métricas personalizado:** Define las métricas de actividad y resultado que debería seguir para mi tipo de producto y canal de prospección, con los benchmarks de referencia.

3. **Plan de onboarding de 90 días:** Adapta el plan de rampa a mi equipo: ¿cuánto tiempo dedico a qué y cómo mido si el onboarding está funcionando?

4. **Guión de call review semanal:** Dame el guión exacto de la sesión de call review de 25 minutos que haría con uno de mis SDRs esta semana, con las preguntas concretas que usaría.

5. **Playbook de objeciones:** ¿Cuáles son las 5 objeciones más comunes al hacer prospección en mi sector? Dame el reencuadre ideal para cada una que el SDR pueda practicar en roleplay.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el sistema de gestión, métricas y coaching para equipos de SDRs que generan pipeline consistente',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product operations: procesos y rituales que hacen eficiente al equipo de producto',
                'description'      => 'Diseña el sistema operativo del equipo de producto: plantillas, rituales, procesos de toma de decisiones y herramientas que eliminan la fricción y aumentan la velocidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Product Operations con experiencia implementando los sistemas operativos de equipos de producto en empresas de 50 a 500 empleados. Necesito ayuda para diseñar o mejorar los procesos internos, plantillas y rituales que hacen al equipo de producto más eficiente y predecible.

**Mi contexto:**
- Tamaño del equipo de producto: [X PMs, X diseñadores, X data analysts]
- Número de squads: [X]
- Metodología: [Scrum / Kanban / Shape Up / mixto]
- Principal problema de eficiencia: [demasiado tiempo en reuniones / falta de documentación / decisiones lentas / roadmap siempre desactualizado / stakeholders desalineados]
- Herramientas actuales: [Jira / Linear / Notion / Confluence / otro]

---

## ¿QUÉ ES PRODUCT OPERATIONS?

Product Operations (ProdOps o Product Ops) es la disciplina que gestiona los sistemas que permiten a los PMs hacer mejor su trabajo. No es product management — es el meta-trabajo que hace que el product management sea eficiente.

**Las 5 áreas de Product Operations:**
1. **Rituales y reuniones:** Qué reuniones existen, quién va, cuánto duran, qué produce cada una
2. **Documentación y plantillas:** Cómo se documenta el trabajo para que sea reproducible
3. **Datos y métricas:** Qué se mide, dónde está el dashboard, quién lo revisa
4. **Stakeholder management:** Cómo fluye la información entre producto y el resto de la empresa
5. **Tooling:** Qué herramientas se usan y cómo se usan de forma consistente

---

## PARTE 1: EL SISTEMA DE RITUALES

### Los rituales que todo equipo de producto necesita:

**Nivel de Squad:**
| Ritual | Frecuencia | Duración | Quiénes | Output |
|--------|-----------|---------|---------|--------|
| Sprint planning | Por sprint | 2h | PM + Eng + Design | Backlog del sprint comprometido |
| Daily standup | Diario | 15 min | Squad completo | Bloqueos identificados |
| Sprint review | Por sprint | 1h | Squad + stakeholders | Demos y feedback |
| Retrospectiva | Por sprint | 1h | Squad completo | Mejoras del proceso |
| Discovery sync | Semanal | 30 min | PM + Design + Data | Insights compartidos |

**Nivel de equipo de producto:**
| Ritual | Frecuencia | Duración | Quiénes | Output |
|--------|-----------|---------|---------|--------|
| Product all-hands | Mensual | 1.5h | Todo producto | Alineación de dirección |
| Metrics Monday | Semanal | 30 min | PMs + Data | Pulso de KPIs |
| Roadmap review | Trimestral | 2h | Producto + CEO + stakeholders | Roadmap actualizado y aprobado |
| Learning share | Mensual | 1h | Todo producto | User research y A/B results compartidos |

**Nivel empresa:**
| Ritual | Frecuencia | Duración | Output |
|--------|-----------|---------|--------|
| Executive product review | Mensual | 1h | Estado de los objetivos de producto vs. targets |
| Stakeholder newsletter | Semanal | — | Email de actualización para toda la empresa |

---

## PARTE 2: PLANTILLAS ESENCIALES

### Plantilla 1: Product Brief (para cualquier iniciativa)

```markdown
## [Nombre de la Iniciativa]

**Problema que resolvemos:**
¿Qué duele para quién y con qué evidencia? (datos, user research, tickets de soporte)

**Hipótesis:**
Creemos que [solución propuesta] para [segmento de usuarios] logrará [resultado]
porque [evidencia o razonamiento].

**Métricas de éxito:**
- Métrica primaria: [qué medimos, baseline actual, objetivo]
- Métrica secundaria: [guardrail que no debe empeorar]

**No in-scope:**
Lo que explícitamente no vamos a hacer en esta iniciativa.

**Timeline propuesto:**
Discovery: [fecha] → Decisión: [fecha] → Entrega: [fecha]

**Riesgos:**
1. [Riesgo principal y plan de mitigación]

**Aprobado por:** [PM] [fecha]
```

### Plantilla 2: Decision Log (registro de decisiones)

El registro de decisiones evita que el equipo rehaga debates ya cerrados.

```markdown
## Decisión: [Título breve]

**Fecha:** [fecha]
**Decidido por:** [persona o grupo]
**Estado:** [Decidido / En revisión / Descartado]

**Contexto:**
¿Por qué tuvimos que tomar esta decisión?

**Opciones consideradas:**
| Opción | Pros | Contras |
|--------|------|---------|
| A | ... | ... |
| B | ... | ... |

**Decisión tomada:** Opción [X]

**Razón:**
¿Por qué esta opción y no las otras?

**Condiciones para revisitar:**
¿Qué tendría que cambiar para que revisáramos esta decisión?
```

### Plantilla 3: Weekly Status Update (para stakeholders)

```markdown
## [Nombre del Squad/Producto] — Semana [N]

🟢 **En progreso:**
- [Item 1] — [% completado]
- [Item 2]

✅ **Completado esta semana:**
- [Lo que salió]

🔴 **Bloqueado / En riesgo:**
- [Bloqueo] — Necesito: [qué necesitas de quién]

📊 **Métricas de esta semana:**
- [Métrica 1]: [valor] vs. [objetivo]
- [Métrica 2]: [valor] vs. [objetivo]

📅 **Próxima semana:**
- [Plan principal]
```

---

## PARTE 3: GESTIÓN DEL ROADMAP

### El roadmap como herramienta de comunicación, no de contrato:

**El error más común:** Roadmaps de fechas exactas que se convierten en promesas incumplibles.

**El enfoque correcto:** Roadmaps por horizonte temporal con niveles de confianza:

```
Ahora (próximo mes): Detalle completo, comprometido, en el sprint
Siguiente (próximos 2-3 meses): Dirección clara, scope aproximado
Después (3-6+ meses): Intención estratégica, sujeto a cambios
```

### Cómo comunicar cambios al roadmap sin destruir la confianza:
1. Avisa con antelación (no en el día de la fecha prometida)
2. Explica el porqué (no solo el qué)
3. Ofrece la nueva estimación con fundamento
4. Muestra qué se priorizó en cambio y por qué

---

## PARTE 4: MÉTRICAS DE SALUD DEL EQUIPO DE PRODUCTO

| Métrica | Fórmula | Objetivo |
|---------|---------|---------|
| Ratio de reuniones vs. trabajo profundo | Horas reunión / horas totales | < 30% |
| Velocidad de decisión | Días entre "problema identificado" y "decisión tomada" | < 5 días para decisiones pequeñas |
| Deuda de documentación | % de iniciativas con brief actualizado | > 80% |
| Predictibilidad del sprint | Items completados / items comprometidos | > 80% |
| NPS de stakeholders internos | Encuesta trimestral a stakeholders | > 30 |

---

## TAREA PARA CLAUDE

Con mi equipo y contexto:

1. **Auditoría de rituales actuales:** Si me describes tus reuniones actuales, te digo cuáles sobran, cuáles faltan y cómo rediseñar el calendario semanal para recuperar tiempo de trabajo profundo.

2. **Kit de plantillas prioritarias:** Para mi problema principal de eficiencia, ¿qué 3 plantillas debería implementar primero? Entrégamelas completas y adaptadas a mi contexto.

3. **Sistema de decisiones:** Diseña el proceso que debería usar mi equipo para tomar las 3 tipos de decisiones más frecuentes: decisiones de scope, decisiones de priorización y decisiones de proceso.

4. **Onboarding de Product Ops:** Si soy el primer/a Product Ops de la empresa, ¿qué implemento en los primeros 90 días y en qué orden?

5. **Dashboard de salud del equipo:** ¿Qué métricas monitorizaría semanalmente para saber si el equipo de producto está siendo eficiente? Dame el formato del dashboard.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar el sistema operativo del equipo de producto con rituales, plantillas y procesos que aumentan la eficiencia',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Movilidad interna: sistema para promover talento antes de que se vaya a buscarlo fuera',
                'description'      => 'Diseña un sistema de movilidad interna que facilite movimientos laterales y promociones dentro de la empresa, reduciendo la rotación de talento clave.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH y desarrollo de talento con experiencia diseñando sistemas de movilidad interna en empresas de 100 a 2.000 empleados. Necesito implementar o mejorar el sistema de movilidad interna de mi empresa para reducir la rotación y aprovechar el talento interno antes de buscar fuera.

**Mi situación:**
- Tamaño de la empresa: [X empleados]
- Sectores o áreas principales: [lista brevemente]
- Rotación actual: [X% anual]
- ¿Existe algún proceso de movilidad interna?: [Sí, informal / No / Sí, formal pero poco usado]
- Principal obstáculo percibido: [los managers no sueltan a sus mejores personas / los empleados no saben qué oportunidades hay / el proceso es opaco]

---

## POR QUÉ LA MOVILIDAD INTERNA ES MEJOR QUE CONTRATAR FUERA

### El coste de ignorar la movilidad interna:

| Escenario | Coste estimado |
|-----------|---------------|
| Coste de sustitución de un empleado | 50-200% del salario anual |
| Tiempo hasta productividad de un nuevo empleado | 6-12 meses |
| Pérdida de conocimiento institucional | No cuantificable pero crítico |
| Daño al employer branding | Difícil de recuperar |

**El argumento de negocio:**
- Un empleado interno con 2 años en la empresa ya conoce la cultura, los procesos y el producto
- La curva de aprendizaje es 3-4x menor que un externo
- El riesgo de "fit" cultural ya está validado
- El coste de movilidad interna es una fracción del coste de adquisición externo

**Dato de referencia (LinkedIn 2023):** Las empresas con alta movilidad interna retienen a los empleados 2 veces más tiempo que las que tienen movilidad baja.

---

## PARTE 1: LOS 3 TIPOS DE MOVILIDAD INTERNA

### Tipo 1: Promoción Vertical
El empleado sube a un nivel superior dentro de su misma función.

**Criterios claros para la promoción (evitar el "cuando el manager decida"):**
```
Criterios de promoción de [Rol A] a [Rol B]:
1. Tiempo mínimo en el rol actual: X meses (no menos, salvo excepción documentada)
2. Evaluación de desempeño: Mínimo X en los últimos 2 ciclos
3. Competencias de nivel superior: Demuestra [lista de competencias] en proyectos reales
4. Disponibilidad de posición: Existe headcount aprobado en el nivel superior
```

**El problema del "manager gatekeeping":**
Sin un proceso formal, la promoción depende 100% de que el manager la proponga. Empleados con managers poco proactivos o con miedo a "perder" a su mejor persona quedan bloqueados.

**Solución:** Los empleados pueden auto-nominar al proceso de promoción. El manager tiene voz pero no veto absoluto.

### Tipo 2: Movimiento Lateral
El empleado cambia de equipo o área manteniéndose en el mismo nivel.

**Cuándo es valioso:**
- El empleado quiere desarrollar una nueva habilidad
- El área de destino necesita el perfil del empleado
- El empleado tiene síntomas de burnout en su área actual

**Desafío: El manager que "no suelta" al empleado:**
Es el obstáculo más frecuente. Solución sistémica: política que da al empleado el derecho a explorar internamente sin permiso del manager, aunque con plazos de transición razonables (60-90 días).

### Tipo 3: Proyectos y Rotaciones Temporales
El empleado participa en un proyecto de otra área sin cambiar de posición permanente.

**Formatos:**
- **Stretch assignment:** 20% del tiempo del empleado en otro equipo durante 3-6 meses
- **Task force:** Grupo temporal interfuncional para un proyecto específico
- **Job shadowing:** Acompañar a alguien de otra área durante 1-2 semanas
- **Intercambio de roles (job swap):** Dos empleados intercambian temporalmente sus funciones

---

## PARTE 2: EL SISTEMA DE MOVILIDAD INTERNA — COMPONENTES

### Componente 1: El Talent Marketplace (la bolsa de trabajo interna)

Una plataforma o proceso donde:
- Los managers publican sus vacantes internamente antes que externamente (ventana mínima: 2 semanas)
- Los empleados pueden ver todas las oportunidades abiertas
- Los empleados pueden postularse con visibilidad controlada

**Herramientas disponibles:**
| Herramienta | Tipo | Precio |
|-------------|------|--------|
| LinkedIn Talent Hub | Standalone | Enterprise |
| Workday Internal Mobility | Integrado con HRIS | Enterprise |
| Greenhouse Job Board | Interno | Medio |
| Notion o Confluence | Manual pero funciona | Incluido |
| Canal de Slack #oportunidades-internas | Muy simple, funciona | Gratuito |

### Componente 2: Talent Reviews Trimestrales

Cada manager categoriza a su equipo en 2 dimensiones:
- **Desempeño actual:** Alto / Medio / Bajo
- **Potencial de crecimiento:** Alto / Medio / Bajo

La matrix 3x3 resultante (9-box) permite a RRHH identificar:
- **Stars** (alto desempeño + alto potencial): candidatos para fast-track
- **Solid performers** (alto desempeño + potencial medio): candidatos para movimiento lateral
- **High potentials** (bajo desempeño actual + alto potencial): candidatos para coaching y nuevo entorno

### Componente 3: Conversaciones de Carrera Estructuradas

El manager debe tener al menos 2 conversaciones formales de carrera al año con cada empleado:

**Template de conversación de carrera (60 min):**
```
Parte 1 — Mirar atrás (15 min):
¿Qué te ha dado más energía este año? ¿Qué te ha drenado?

Parte 2 — El presente (15 min):
¿Estás utilizando tus mejores habilidades en tu rol actual?
¿Hay algo que quieras más o menos?

Parte 3 — El futuro (20 min):
¿Dónde quieres estar en 2-3 años? ¿Qué habilidades quieres desarrollar?
¿Hay algún área de la empresa que te llame la atención?

Parte 4 — Plan de acción (10 min):
¿Qué 2-3 cosas concretas podemos hacer en los próximos 6 meses para avanzar hacia ese objetivo?
```

### Componente 4: La Política de Movilidad (el documento que lo hace oficial)

Sin política escrita, la movilidad depende de la buena voluntad. Con política escrita, es un derecho.

**Elementos obligatorios de la política:**
- El derecho del empleado a aplicar a posiciones internas
- Confidencialidad durante el proceso de candidatura
- El papel del manager actual (puede opinar, no puede bloquear)
- El plazo de transición acordado (recomendado: 60-90 días)
- Qué pasa con el salario en un movimiento lateral

---

## PARTE 3: MEDIR EL SISTEMA

| Métrica | Cómo medirla | Objetivo |
|---------|-------------|---------|
| Tasa de movilidad interna | Movimientos internos / total vacantes cubiertas | > 20-30% |
| Tiempo para cubrir vacantes (interno vs. externo) | Días hasta oferta aceptada | Interno < Externo |
| Retención post-movimiento | % que sigue en la empresa 12m después del movimiento | > 85% |
| Satisfacción del proceso | Encuesta post-movimiento | > 4/5 |
| % de vacantes publicadas internamente primero | Vacantes con primer aviso interno / total | 100% |

---

## TAREA PARA CLAUDE

Con mi empresa y situación:

1. **Diagnóstico de obstáculos:** Basándome en mis problemas descritos, ¿cuáles son las 3 barreras reales a la movilidad interna en mi empresa y cómo atacarlas en orden?

2. **Diseño del proceso de 3 pasos:** Diseña el proceso mínimo viable de movilidad interna que puedo lanzar en 30 días: ¿qué canales, qué documentos, qué reglas básicas?

3. **Política de movilidad interna:** Escribe el borrador de la política que enviaré a managers y empleados, incluyendo los derechos de cada parte y el proceso de transición.

4. **Guión de conversación de carrera:** Dame el guión completo para la conversación de carrera de 60 minutos con un empleado que lleva 2 años en el mismo rol y no ha mencionado querer cambiar.

5. **Plan de comunicación del lanzamiento:** ¿Cómo comunico el nuevo sistema al equipo directivo, a los managers y a los empleados? Dame los 3 mensajes clave para cada audiencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar e implementar un sistema de movilidad interna que retenga talento y reduzca la rotación voluntaria',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis del estado de flujos de efectivo: detecta problemas que el P&L no muestra',
                'description'      => 'Aprende a interpretar el cash flow statement para identificar problemas de liquidez, calidad del beneficio y señales de alarma que el P&L oculta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero senior con experiencia en análisis de estados financieros para inversores y directivos. Necesito aprender a leer e interpretar el estado de flujos de efectivo (cash flow statement) de forma que pueda detectar problemas que el P&L no muestra y tomar mejores decisiones financieras.

**Mi contexto:**
- Mi rol: [CFO / CEO / analista / inversor / directivo no financiero]
- Tipo de empresa: [propia empresa / empresa analizada para inversión / empresa de cliente]
- Sector: [indica el sector, que afecta a los ratios de referencia]
- Objetivo principal: [detectar problemas de liquidez / evaluar calidad del beneficio / analizar para inversión / presentar al board]

---

## LA DIFERENCIA ENTRE BENEFICIO Y CASH: POR QUÉ IMPORTA

Una empresa puede tener beneficio en el P&L y estar al borde de la quiebra. Y viceversa: puede tener pérdidas y tener caja sana. Esto ocurre porque:

**El P&L registra en base de devengo:** Reconoce ingresos cuando se factura, no cuando se cobra. Reconoce gastos cuando se incurren, no cuando se pagan.

**El Cash Flow registra movimientos de dinero real:** Solo refleja cuando el dinero entra o sale de la cuenta bancaria.

### Ejemplo real de divergencia:

| Situación | P&L | Cash Flow |
|-----------|-----|-----------|
| Vendes €1M en diciembre, cobras en febrero | +€1M de ingresos | €0 de entrada |
| Compras maquinaria €500k, amortizas a 5 años | -€100k/año en P&L | -€500k en el año 1 |
| Capturas €2M de inversores | No aparece en P&L | +€2M de entrada |
| El cliente grande paga lento (PMC 120 días) | Ingresos normales | Caja tensa |

---

## ESTRUCTURA DEL ESTADO DE FLUJOS DE EFECTIVO

El cash flow statement tiene 3 secciones con significados muy distintos:

### Sección 1: Flujo de Operaciones (FCO)
El dinero que genera o consume el negocio principal. **La sección más importante.**

```
Beneficio neto (del P&L)
+ Amortizaciones y depreciaciones (non-cash)
+ Deterioros y provisiones (non-cash)
+/- Variación del capital circulante:
    - ▲ Cuentas a cobrar: si sube, consumió caja
    - ▲ Inventario: si sube, consumió caja
    + ▲ Cuentas a pagar: si sube, generó caja
= FLUJO DE OPERACIONES
```

**Señal verde:** FCO > Beneficio neto (el beneficio se convierte en caja)
**Señal roja:** FCO < Beneficio neto de forma consistente (el beneficio no genera caja — problema de circulante)

### Sección 2: Flujo de Inversión (FCI)
El dinero invertido en activos a largo plazo.

```
- Compras de inmovilizado (CAPEX)
+ Ventas de activos
- Adquisiciones de empresas
+ Desinversiones
= FLUJO DE INVERSIÓN (casi siempre negativo en empresas en crecimiento)
```

**Interpretación:** Negativo no es malo — es señal de inversión para el futuro. Muy negativo de forma consistente sin FCO positivo es una alerta.

### Sección 3: Flujo de Financiación (FCF)
El dinero de fuentes de financiación externas.

```
+ Captación de deuda
- Devolución de deuda
+ Ampliaciones de capital
- Dividendos
= FLUJO DE FINANCIACIÓN
```

**Señal de alerta:** Si el negocio solo sobrevive con financiación externa y el FCO es negativo, la empresa no es autosostenible.

---

## LOS 5 ANÁLISIS MÁS ÚTILES DEL CASH FLOW

### Análisis 1: Free Cash Flow (FCF) — La métrica que los inversores miran primero

```
FCF = Flujo de Operaciones - CAPEX de mantenimiento
```

**¿Por qué CAPEX de mantenimiento y no total?**
El CAPEX tiene dos componentes:
- **Mantenimiento:** Lo necesario para mantener el negocio funcionando (no es opcional)
- **Crecimiento:** Inversión para expandir el negocio (es discrecional)

Solo el CAPEX de mantenimiento es "obligatorio" — el de crecimiento es una elección estratégica.

**Interpretación del FCF:**
| FCF | Interpretación |
|-----|---------------|
| FCF > 0 creciente | Negocio sólido, genera caja del negocio |
| FCF > 0 pero decreciente | Revisar si CAPEX está subiendo o FCO bajando |
| FCF < 0 en empresa early-stage | Normal — invierte más de lo que genera |
| FCF < 0 en empresa madura | Señal de alarma grave |

### Análisis 2: Calidad del Beneficio

```
Ratio de calidad = FCO / Beneficio neto
```

**Interpretación:**
- > 1.0: El beneficio se convierte en caja con holgura (excelente)
- 0.8 - 1.0: Beneficio se convierte en caja razonablemente (normal)
- 0.5 - 0.8: El beneficio "no se cobra" bien (revisar cobros y stock)
- < 0.5: El beneficio es mayoritariamente "en papel" — alerta roja

### Análisis 3: Ciclo de Conversión de Caja (CCC)

```
CCC = DIO + DSO - DPO
DIO = (Inventario / Coste de ventas) × 365
DSO = (Cuentas a cobrar / Ventas) × 365
DPO = (Cuentas a pagar / Coste de ventas) × 365
```

**Ejemplo:**
```
DIO = 45 días (inventario)
DSO = 60 días (cobro a clientes)
DPO = 30 días (pago a proveedores)
CCC = 45 + 60 - 30 = 75 días

→ Cada €1 que inviertes en el negocio tarda 75 días en volver como cash
→ Si vendes más rápido, necesitas más capital de trabajo
```

---

## SEÑALES DE ALARMA EN EL CASH FLOW

| Señal | Qué puede significar |
|-------|---------------------|
| FCO negativo con beneficio positivo durante 2+ trimestres | El crecimiento consume más caja que la que genera |
| Flujo de financiación positivo en cada período | El negocio depende de financiación externa para sobrevivir |
| CAPEX muy alto sin crecimiento de ingresos | Sobreinversión o ineficiencia de capital |
| Cuentas a cobrar crecen más rápido que los ingresos | Los clientes pagan más lento — riesgo de cobro |
| Flujo de inversión positivo en empresa que debería invertir | Está vendiendo activos para pagar operaciones |
| Cash bajando 3 trimestres consecutivos | Revisión urgente de la estructura financiera |

---

## TAREA PARA CLAUDE

Con mi rol y objetivo:

1. **Análisis de mi cash flow:** Si me compartes los estados financieros de la empresa (o los datos clave), analizaré el FCO, FCF, calidad del beneficio y CCC con interpretación específica.

2. **Los 5 ratios prioritarios:** Para mi sector y tamaño de empresa, ¿cuáles son los 5 ratios del cash flow más relevantes y cuáles son los benchmarks de referencia?

3. **Detección de señales de alarma:** Describe las 3 señales de alarma más frecuentes en mi tipo de empresa y cómo las identificaría en el estado de flujos.

4. **Presentación al board:** ¿Cómo presento el análisis del cash flow al consejo de administración de forma que tenga impacto? Dame la estructura de la presentación con los 4-5 slides clave.

5. **Comparativa con el P&L:** Muéstrame cómo leer el P&L y el cash flow en paralelo para detectar inconsistencias que indiquen problemas de negocio o contables.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Analizar el estado de flujos de efectivo para detectar problemas de liquidez y evaluar la calidad del beneficio',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de distribución y reseller agreements: puntos críticos de protección',
                'description'      => 'Analiza y negocia contratos de distribución y acuerdos de canal identificando las cláusulas críticas que protegen al fabricante y al distribuidor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado mercantil especializado en contratos de distribución y acuerdos de canal con experiencia en el mercado español y europeo. Necesito entender los puntos críticos de los contratos de distribución y reseller agreements para proteger correctamente a mi empresa, ya sea como fabricante/proveedor o como distribuidor/reseller.

**Mi situación:**
- Mi rol en el acuerdo: [fabricante/proveedor que distribuye a través de canal / distribuidor o reseller que vende productos de terceros]
- Tipo de producto o servicio: [describe brevemente]
- Mercado geográfico: [España / UE / global]
- Tipo de distribución: [exclusiva / no exclusiva / selectiva]
- Estado actual: [negociando primer contrato / revisando contrato existente / añadiendo nuevos distribuidores]

---

## TIPOS DE ACUERDOS DE DISTRIBUCIÓN

### Distribución exclusiva
El proveedor se compromete a no vender a otros distribuidores en un territorio definido.

**Ventajas para el distribuidor:** Protección de inversión, sin competencia interna
**Riesgos para el proveedor:** Dependencia de un solo canal, posible bloqueo del mercado si el distribuidor no rinde

### Distribución no exclusiva
El proveedor puede tener múltiples distribuidores en el mismo territorio.

**Ventajas para el proveedor:** Flexibilidad, competencia interna sana
**Riesgos para el distribuidor:** El proveedor puede competir directamente o añadir distribuidores que destruyan el margen

### Distribución selectiva
El proveedor elige cuidadosamente a sus distribuidores según criterios objetivos (tamaño, capacidades, especialización).
Común en productos de lujo, tecnología B2B, sector salud.

---

## LAS 10 CLÁUSULAS MÁS CRÍTICAS

### Cláusula 1: Definición del Territorio y Exclusividad

**Perspectiva del DISTRIBUIDOR:**
Exige definición precisa del territorio (país, región, sector vertical). La vaguedad favorece al proveedor.

**Redacción problemática (para el distribuidor):**
"El distribuidor tendrá exclusividad en España, salvo ventas directas del proveedor a cuentas existentes."

**La "salvo" puede anular toda la exclusividad.** Pregunta: ¿qué cuentas considera "existentes" el proveedor? ¿Las que ya tiene al firmar el contrato o cualquiera que pueda contactar en el futuro?

**Redacción más protectora:**
"El proveedor no venderá directamente a clientes finales ubicados en el Territorio durante la vigencia del contrato, salvo [lista taxativa y limitada de excepciones con nombres propios si es posible]."

---

### Cláusula 2: Objetivos de Venta Mínimos (Minimum Purchase Requirements)

**El mayor punto de fricción en distribución exclusiva.**

**Perspectiva del PROVEEDOR:**
Necesita protegerse de un distribuidor que "aparca" el territorio con la exclusiva pero no vende.

**Perspectiva del DISTRIBUIDOR:**
Los objetivos deben ser realistas y ajustables según condiciones de mercado.

**Cláusulas protectoras para el distribuidor:**
1. Definir claramente cómo se calcula el objetivo (ventas netas, no brutas)
2. Incluir cláusula de ajuste por causas de fuerza mayor o cambios de mercado
3. El incumplimiento no debe permitir rescisión inmediata — dar oportunidad de cura (cure period de 90 días mínimo)
4. En año 1, los objetivos deben ser proporcionales al periodo real de actividad

---

### Cláusula 3: Precio de Reventa y Control de Precios

**Derecho de la UE:** El proveedor NO puede fijar el precio de reventa del distribuidor (Reglamento de Exención por Categorías 330/2010). Hacerlo es una infracción de competencia.

**Lo que SÍ puede hacer el proveedor:**
- Fijar un precio máximo de reventa (price ceiling)
- Fijar precios mínimos recomendados (no obligatorios)

**Cláusula de MAP (Minimum Advertised Price):**
Puede restringir el precio al que el distribuidor PUBLICITA el producto, aunque no el precio de venta real. Permitido bajo ciertas condiciones.

**Riesgo:** Las cláusulas de MAP están en zona gris en la UE. Consulta antes de incluirlas.

---

### Cláusula 4: Propiedad Intelectual y Uso de Marca

**Para el PROVEEDOR:**
- Licencia de uso de marca limitada, revocable y no transferible
- Prohibición de modificar materiales de marketing sin aprobación escrita
- Ownership expreso de todos los desarrollos realizados por el distribuidor sobre el producto
- Obligación de cesar el uso de la marca al terminar el contrato

**Para el DISTRIBUIDOR:**
- El proveedor garantiza ser titular de la PI que licencia (indemnización si hay litigio de terceros)
- Claridad sobre qué mejoras o adaptaciones puede hacer el distribuidor

---

### Cláusula 5: Término, Renovación y Terminación

**Las trampas más frecuentes:**

**Renovación automática sin aviso suficiente:**
"El contrato se renueva automáticamente por períodos anuales salvo aviso con 30 días de antelación."
→ Si olvidas el plazo, estás atrapado otro año.
→ Negocia: 90-120 días de preaviso, o que la terminación sea siempre posible con preaviso suficiente.

**Terminación sin causa (for convenience):**
El proveedor puede incluir cláusulas que le permiten terminar el contrato con 30 días sin causa.
Para el distribuidor, esto puede destruir la inversión realizada para entrar al mercado.
→ Negocia: mínimo 6-12 meses de preaviso si no hay incumplimiento, más compensación por el goodwill generado.

**Compensación al distribuidor por terminación:**
En España, el Agente Comercial tiene derecho legal a indemnización por clientela (art. 28 LCA). El distribuidor puro (no agente) no tiene este derecho legal automático — pero puede negociarlo contractualmente.

---

### Resumen de cláusulas críticas por rol:

| Cláusula | Prioridad para Proveedor | Prioridad para Distribuidor |
|----------|------------------------|----------------------------|
| Objetivos mínimos de venta | Imprescindible | Negociar ajuste y cure period |
| Exclusividad + territorio | Limitar excepciones | Exigir definición precisa |
| Terminación por incumplimiento | Preaviso corto | Preaviso largo + cure period |
| Control de precios | MAP limitada | Libertad de precio real |
| Compensación al terminar | Limitar o eliminar | Incluir goodwill |
| PI y marca | Control total y revocabilidad | Garantía de titularidad |

---

## TAREA PARA CLAUDE

Con mi rol y tipo de contrato:

1. **Análisis de mi situación:** Para mi rol (proveedor o distribuidor) y tipo de producto, ¿cuáles son las 5 cláusulas más importantes que debo blindar en mi favor?

2. **Red flags en el contrato recibido:** Si me compartes las cláusulas que te preocupan, te digo cuáles son abusivas, cuáles son estándar y cómo proponer alternativas equilibradas.

3. **Propuesta de contraofertas:** Para las 3 cláusulas más desfavorables en el borrador que has recibido, dame el texto alternativo que propondré y la argumentación para defenderlo.

4. **Checklist de due diligence del socio:** ¿Qué debo investigar del otro contratante antes de firmar? Dame la lista de verificaciones mínimas.

5. **Carta de intenciones (Letter of Intent):** Antes de entrar en el contrato formal, ¿qué debe incluir la LOI para proteger mi posición durante la negociación?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Analizar y negociar contratos de distribución para proteger los intereses del fabricante o del distribuidor en acuerdos de canal',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte en e-commerce: devoluciones, logística inversa y coordinación con fulfillment',
                'description'      => 'Gestiona eficientemente las devoluciones, reclamaciones de envío y la coordinación con el almacén para ofrecer una experiencia post-compra que fidelice al cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en customer experience para e-commerce con experiencia gestionando operaciones de soporte en tiendas online de 1.000 a 50.000 pedidos mensuales. Necesito profesionalizar el proceso de soporte post-compra de mi tienda: devoluciones, envíos con problemas, coordinación con el almacén y reclamaciones a transportistas.

**Mi contexto:**
- Volumen mensual de pedidos: [X pedidos/mes]
- Categoría de producto: [moda / electrónica / alimentación / hogar / otro]
- Modelo de fulfillment: [almacén propio / 3PL / dropshipping / mixto]
- Transportistas principales: [Correos / MRW / SEUR / DHL / otro]
- Principal problema: [muchas devoluciones / tiempo de resolución alto / clientes enfadados / sin proceso definido]

---

## LA POST-COMPRA: EL MOMENTO DE LA VERDAD EN E-COMMERCE

**Dato clave:** El 92% de los clientes de e-commerce volverán a comprar si el proceso de devolución es fácil. El 67% dejan de comprar en una tienda si tienen una mala experiencia de devolución.

La post-compra no es un coste — es una oportunidad de fidelización que la mayoría de las tiendas desperdicia.

---

## PARTE 1: DEVOLUCIONES — EL PROCESO ÓPTIMO

### Derecho de desistimiento en España (normativa):
- **Plazo legal mínimo:** 14 días naturales desde la recepción del pedido
- **Responsabilidad de costes de envío:** Depende de tu política — la ley no obliga a cubrir el coste de devolución al cliente, pero el cliente debe ser informado antes de comprar
- **Reembolso:** En un plazo máximo de 14 días desde recibir la devolución o justificante de envío
- **Excepciones al desistimiento:** Productos personalizados, perecederos, contenido digital descargado, higiene personal

### El proceso de devolución en 5 pasos:

**Paso 1 — Solicitud (cliente inicia):**
El cliente accede al portal de devoluciones (no tiene que escribir un email). Elige motivo de devolución.

**Paso 2 — Aprobación y etiqueta:**
Sistema evalúa si la devolución cumple la política. Si sí: etiqueta de envío generada automáticamente.
Si necesita revisión manual: el agente la revisa en < 4 horas.

**Paso 3 — Recogida o entrega:**
El cliente lleva el paquete al punto de recogida o espera la recogida en casa.

**Paso 4 — Recepción en almacén:**
El almacén recibe, inspecciona y clasifica:
- ✅ En perfectas condiciones → Restock
- ⚠️ Abierto pero funcionando → Segunda vida / outlet
- ❌ Dañado / no devolvible → Baja de inventario

**Paso 5 — Reembolso o cambio:**
Una vez confirmada la recepción en el almacén, el reembolso se procesa en < 48 horas (no esperes los 14 días legales — hacerlo en 48h es ventaja competitiva).

### Tabla de motivos de devolución y acciones:

| Motivo | Frecuencia | Acción del agente | Prevención |
|--------|-----------|------------------|-----------|
| Talla / medida incorrecta | 30-40% (moda) | Cambio gratuito + guía de tallas mejorada | Mejorar fichas de producto |
| Producto diferente a imagen | 15-20% | Reembolso + revisión de foto | Actualizar fotografía |
| Llegó dañado | 10-15% | Reembolso o reenvío inmediato + reclamación al transportista | Mejorar embalaje |
| Ya no lo necesito | 15-20% | Proceso estándar | Reducir tiempo de entrega |
| Calidad inferior a lo esperado | 10-15% | Reembolso + escalación a producto | Mejorar descripciones |
| Error en el pedido (tuyo) | 5-10% | Reembolso total + envío de corrección | Mejorar operaciones |

---

## PARTE 2: ENVÍOS CON PROBLEMAS

### Los 4 tipos de incidencia de envío más frecuentes:

#### 1. Pedido no entregado (pérdida o extravío)
**Proceso:**
1. Verificar tracking — ¿en qué estado está?
2. Si han pasado más de 5 días laborables sin movimiento: abrir investigación con el transportista
3. Plazo del transportista para investigar: 15-30 días
4. No esperes a que acabe la investigación para ayudar al cliente: reenvía o reembolsa a los 7-10 días del primer contacto del cliente. El transportista te pagará la reclamación si la pierden.

**Template de respuesta al cliente:**
```
Hola [NOMBRE],

He revisado el seguimiento de tu pedido [NÚMERO] y veo que el último movimiento
fue el [FECHA]. He abierto una investigación urgente con [TRANSPORTISTA].

Para no hacerte esperar más, he organizado el reenvío de tu pedido que saldrá mañana.
Recibirás el nuevo número de seguimiento en las próximas 2 horas.

Lamentamos sinceramente el retraso.

[NOMBRE AGENTE]
```

#### 2. Paquete dañado en el transporte
**Proceso:**
1. Pedir fotografías al cliente (obligatorio para la reclamación al transportista)
2. Procesar reenvío o reembolso inmediatamente — no esperar a la resolución del transportista
3. Abrir reclamación al transportista con las fotos del cliente como evidencia
4. Plazo de reclamación a transportistas: generalmente 7 días naturales desde entrega

#### 3. Entrega en dirección incorrecta
**Proceso:**
1. Verificar si el error fue del cliente (dirección incorrecta en el pedido) o del transportista
2. Si fue error del cliente: según tu política, puede ser con coste para el cliente
3. Si fue error del transportista: reenvío sin coste, reclamación al transportista

#### 4. Cliente ausente en entrega — paquete en punto de recogida sin recoger
**Proceso:**
1. Notificación proactiva por email y SMS cuando el paquete llega al punto de recogida
2. Recordatorio a los 3 días
3. Si el plazo expira (generalmente 14 días en puntos de recogida): el paquete vuelve al almacén
4. Preguntar al cliente si quiere reenvío (posible coste) o devolución del dinero

---

## PARTE 3: COORDINACIÓN CON FULFILLMENT

### Los 5 problemas más frecuentes en la coordinación con el almacén:

| Problema | Señal | Solución |
|----------|-------|---------|
| Stock desactualizado | Cliente compra algo que no hay | Sincronización en tiempo real o reserva de stock en el momento del pedido |
| Pedido enviado incorrecto | Cliente recibe producto equivocado | Proceso de verificación de empaquetado (picking + foto) |
| Demoras en expedición | Pedido tarda más de lo prometido | SLA documentado con el 3PL y alertas automáticas de retraso |
| Falta de trazabilidad de devolución | No sabes si la devolución llegó al almacén | Proceso de confirmación de recepción en el 3PL (webhook o email automático) |
| Errores de etiquetado | Paquete entregado al destinatario equivocado | Control de calidad en la estación de packing |

### SLA mínimo que debes tener documentado con tu 3PL:
| Métrica | SLA recomendado |
|---------|----------------|
| Procesamiento de pedido (de recibido a enviado) | < 24h laborables |
| Procesamiento de devolución (de recibida a confirmada) | < 48h laborables |
| Respuesta a consultas de soporte del almacén | < 4h laborables |
| Inventario actualizado en tu sistema | Tiempo real o < 1h |

---

## TAREA PARA CLAUDE

Con mi contexto de e-commerce:

1. **Diseño del proceso de devoluciones:** Crea el proceso completo de devoluciones para mi tipo de producto y modelo de fulfillment, con los pasos, tiempos y responsables de cada etapa.

2. **Plantillas de respuesta por tipo de incidencia:** Escribe 4 plantillas de email para los casos más frecuentes en mi categoría de producto: (a) pedido no entregado, (b) producto dañado, (c) solicitud de cambio de talla, (d) reembolso procesado.

3. **Política de devoluciones para mi web:** Escribe el texto de la política de devoluciones que debe aparecer en mi tienda, conforme a la normativa española y que maximice la conversión.

4. **SLA con mi 3PL:** Dame la estructura de los SLA que debo negociar con mi almacén/3PL para garantizar una experiencia post-compra de calidad.

5. **Métricas de soporte post-compra:** ¿Qué 5 métricas debo monitorizar para saber si mi proceso post-compra está funcionando bien? Dame los benchmarks de referencia para mi sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar eficientemente devoluciones, incidencias de envío y coordinación con fulfillment en e-commerce',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Protección social del autónomo en España: mutualidades, cese de actividad y coberturas',
                'description'      => 'Entiende qué coberturas necesitas como autónomo en España, cómo funcionan las mutualidades alternativas, el cese de actividad y cómo construir tu red de seguridad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor especializado en protección social para trabajadores autónomos y freelancers en España. Necesito entender qué coberturas tiene un autónomo en España, cómo funcionan las alternativas a la Seguridad Social, qué es el cese de actividad y cómo construir una red de seguridad adecuada para mi situación.

**Mi situación:**
- Forma jurídica: [autónomo persona física / SL unipersonal / todavía no me he dado de alta]
- Años como autónomo: [acabo de empezar / X años]
- Facturación aproximada: [< €30k / €30k-€60k / > €60k]
- CNAE o sector: [indica tu actividad]
- Situación familiar: [soltero-sin dependientes / pareja con ingresos / con hijos / hipoteca]
- Principal preocupación: [¿qué pasa si me pongo enfermo? / ¿qué pasa si pierdo un cliente clave? / ¿cómo ahorrar en cotizaciones? / todo]

---

## EL SISTEMA DE PROTECCIÓN SOCIAL DEL AUTÓNOMO EN ESPAÑA

### Obligatorio: La Seguridad Social (RETA)

Al darte de alta como autónomo, cotizas al Régimen Especial de Trabajadores Autónomos (RETA). La cotización mínima en 2024 depende de tus ingresos netos reales (sistema de cotización por ingresos reales desde 2023).

**Tabla de cuotas por tramos de ingresos netos (2024):**

| Ingresos netos mensuales | Cuota mensual mínima 2024 |
|--------------------------|--------------------------|
| < €670 | €230 |
| €670 - €900 | €260 |
| €900 - €1.125 | €275 |
| €1.125 - €1.300 | €291 |
| €1.300 - €1.500 | €294 |
| €1.500 - €1.700 | €294 |
| €1.700 - €1.900 | €350 |
| €1.900 - €2.330 | €370 |
| > €6.000 | Hasta €590 |

**Nota:** Puedes cambiar de tramo hasta 6 veces al año. Si tus ingresos varían mucho, ajusta la base cada 2 meses.

### Qué cubre la Seguridad Social del autónomo:

| Contingencia | Cobertura | Comentario |
|-------------|-----------|-----------|
| Asistencia sanitaria | ✅ Completa | Igual que un empleado |
| Incapacidad temporal (baja médica) | ✅ Desde el 4º día (o 1º si cotizas IT) | Ver más abajo |
| Incapacidad permanente | ✅ | Requiere periodo de cotización |
| Jubilación | ✅ | Proporcional a lo cotizado |
| Maternidad/Paternidad | ✅ | 16 semanas |
| Cese de actividad (paro del autónomo) | ✅ Si cotizas (es opcional en algunos casos) | Ver más abajo |
| Accidente de trabajo y enfermedad profesional | ✅ Si cotizas contingencias AT/EP | Muy recomendable |

---

## INCAPACIDAD TEMPORAL (BAJA MÉDICA) PARA AUTÓNOMOS

### Cómo funciona:
- **Días de carencia:** La prestación empieza el 4º día de baja (los primeros 3 días, sin cobro)
- **Si cotizas contingencias comunes (IT):** Cobras el 60% de tu base de cotización del día 4 al 20, y el 75% desde el día 21
- **Duración máxima:** 12 meses (prorrogable 6 más)

### La cotización IT es obligatoria:
Desde enero 2019, la cotización por incapacidad temporal es obligatoria para todos los autónomos. No es opcional eliminarla.

**Problema real:** Con la base mínima de cotización, el 60% resulta en una prestación de ~€138/mes. Para muchos autónomos, esto no cubre ni la mitad de sus gastos fijos.

**Solución:** Elevar la base de cotización hasta una cifra que permita cubrir tus gastos fijos en caso de baja.

**Cálculo recomendado:**
```
Gastos fijos mensuales (alquiler + suministros + vida mínima): €X
Base de cotización necesaria = €X ÷ 0.60 (para los primeros 20 días)
```

---

## LAS MUTUALIDADES ALTERNATIVAS A LA SEGURIDAD SOCIAL

Para ciertas profesiones colegiadas, existe la posibilidad de sustituir (total o parcialmente) la cotización al RETA por una mutualidad de previsión social alternativa.

### ¿Quién puede usar mutualidades?
Profesionales colegiados cuyo colegio tiene mutualidad propia: abogados (Mutualidad de la Abogacía), médicos (Asisa), ingenieros, arquitectos, psicólogos, farmacéuticos, etc.

### Ventajas potenciales de la mutualidad:

| Criterio | RETA | Mutualidad |
|----------|------|-----------|
| Cuota | Fija según ingresos | Más flexible, puede ser menor |
| Coberturas base | Amplias (paro, jubilación, IT) | Varía — pueden ser más limitadas |
| Fiscalidad | Deducción en IRPF | Deducción en IRPF |
| Jubilación mínima garantizada | Sistema público (solidario) | Según lo cotizado + rentabilidad del fondo |
| Apto para | Todos los autónomos | Solo profesiones colegiadas |

**Advertencia importante:** Optar por la mutualidad puede ser irreversible o costoso de revertir. Compara las coberturas exactas antes de decidir, especialmente en incapacidad permanente y jubilación.

---

## EL CESE DE ACTIVIDAD: EL PARO DEL AUTÓNOMO

El cese de actividad es la prestación equivalente al paro para autónomos. Funciona de forma muy diferente al desempleo de asalariados.

### Requisitos para acceder:
1. Cotizar a cese de actividad durante al menos 12 meses continuos (24 meses para la prestación completa)
2. Causar baja en el RETA
3. No tener deudas con la Seguridad Social
4. Estar activo buscando empleo o dispuesto a emprender

### Causas que dan derecho al cese:
- Pérdida de ingresos del 75% en un año completo respecto al año anterior
- Ejecución judicial o administrativa sobre el patrimonio del negocio
- Causas de fuerza mayor
- Divorcio o separación cuando el cónyuge era socio del negocio

**Lo que NO da derecho al cese:** Simplemente decidir dejar de ser autónomo porque quieres. Debe haber una causa económica demostrable.

### Cuantía y duración:
| Meses cotizados a cese | Duración de la prestación |
|------------------------|--------------------------|
| 12-17 meses | 2 meses |
| 18-23 meses | 3 meses |
| 24-29 meses | 4 meses |
| 30-35 meses | 5 meses |
| 36-42 meses | 6 meses |
| 43-47 meses | 8 meses |
| ≥ 48 meses | 12 meses |

**Cuantía:** 70% de la base reguladora de cotización

---

## LA RED DE SEGURIDAD COMPLEMENTARIA QUE DEBERÍAS TENER

### Seguro de salud privado:
- El autónomo tiene acceso a la sanidad pública, pero un seguro privado reduce tiempos de espera y permite elegir especialista
- Coste: €50-€120/mes para una persona
- Deducible en IRPF como gasto de empresa (desde ley de startups 2022, límite €500/año por persona asegurada)

### Seguro de vida y accidentes:
- Si tienes dependientes (pareja, hijos, hipoteca), es esencial
- El autónomo no tiene seguro de vida vinculado a la empresa como el empleado
- Coste orientativo: €20-€60/mes para cobertura de €300k

### Fondo de emergencia:
- Regla para autónomos: mínimo 6 meses de gastos fijos (vs. 3 meses para empleados)
- El autónomo tiene más volatilidad de ingresos y la prestación de cese no siempre cubre
- Objetivo: mantenerlo en cuenta separada, nunca mezclado con la operativa del negocio

---

## TAREA PARA CLAUDE

Con mi situación:

1. **Diagnóstico de coberturas:** Con mi base de cotización actual y situación personal, ¿qué lagunas de protección social tengo que son más urgentes de cubrir?

2. **Optimización de la base de cotización:** ¿Qué base de cotización debería tener según mis gastos fijos y el nivel de prestación que necesitaría en caso de baja?

3. **Mutualidad vs RETA:** ¿Soy de una profesión que puede optar a mutualidad? Si sí, ¿me conviene hacer el análisis comparativo?

4. **Plan de cese de actividad:** ¿Cuánto cobro si cierro mi negocio por razones económicas ahora mismo? ¿Qué tengo que acreditar y cómo?

5. **Presupuesto de protección social anual:** Diseña el presupuesto completo de protección social para mi perfil: cuota RETA + seguro médico + seguro de vida + fondo de emergencia, con el coste total mensual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Entender y optimizar la protección social como autónomo en España: cotizaciones, mutualidades, cese de actividad y coberturas complementarias',
                'vote_score'       => 46,
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
