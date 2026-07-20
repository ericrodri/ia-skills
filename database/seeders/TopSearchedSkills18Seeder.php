<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills18Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Atomización de contenido: convierte un artículo en 20 piezas y multiplica tu presencia sin crear desde cero',
                'description'       => 'Aprende a extraer el máximo valor de cada pieza de contenido que produces distribuyéndola en múltiples formatos y canales. Con el sistema de atomización, la plantilla de reutilización y el calendario de distribución que mantiene la consistencia sin agotarte.',
                'prompt_content'    => <<<'PROMPT'
Eres un Content Strategist con experiencia ayudando a marcas y creadores a multiplicar su presencia digital produciendo menos y distribuyendo más inteligentemente.

Mi contexto:
- Tipo de contenido pilar que produzco: [artículo de blog / episodio de podcast / video de YouTube / newsletter / webinar / otro]
- Canales de distribución actuales: [LinkedIn / Twitter / Instagram / TikTok / newsletter / otro]
- Frecuencia de producción actual: [N piezas/semana o mes]
- Equipo: [solo yo / equipo pequeño / agencia]
- Mayor dolor: [no tengo tiempo para crear contenido en todos los canales / el contenido queda en un solo canal / repito mensajes sin sistema / otro]

## Sistema de Atomización de Contenido — [Tu marca/negocio]

### 🧩 La pirámide de contenido invertida

**El error más común:** crear contenido específico para cada canal desde cero.
**El sistema correcto:** crear una pieza "madre" larga y profunda → extraer piezas derivadas para cada canal.

```
PIEZA PILAR (1x/semana o mes)
├── Artículo largo (2.000-3.000 palabras)
├── Episodio de podcast (30-60 min)
├── Video de YouTube (10-30 min)
└── Newsletter profunda

↓ Se atomiza en

CONTENIDO DERIVADO (múltiples piezas)
├── LinkedIn: 3-5 posts (diferentes ángulos del mismo tema)
├── Twitter/X: 2-3 hilos
├── Instagram: carrusel + Reels/Stories
├── TikTok: clip destacado del video/podcast
├── Email: 2-3 emails de la secuencia de nurturing
└── Shorts: 3-5 clips de 60-90 segundos del video largo
```

### 🔬 Cómo atomizar una pieza: el proceso paso a paso

**Paso 1 — Identifica los bloques de valor:**
Lee o escucha tu pieza pilar e identifica:
- Las afirmaciones más sorprendentes o contraintuitivas
- Los datos o estadísticas más impactantes
- Las historias o casos que ilustran el punto principal
- Los pasos del proceso o framework que enseñas
- Las preguntas que responde la pieza

**Paso 2 — Clasifica por formato:**

| Bloque de valor | Formato óptimo | Canal |
|----------------|---------------|-------|
| Afirmación contraintuitiva | Post de texto corto (hook + desarrollado) | LinkedIn / Twitter |
| Dato o estadística | Imagen con dato + contexto | Instagram / LinkedIn |
| Historia o caso | Post narrativo largo | LinkedIn |
| Framework o proceso | Carrusel o hilo | Instagram / Twitter |
| Pregunta con respuesta | Poll + post de seguimiento | LinkedIn / Twitter |
| Cita memorable | Quote card visual | Instagram / LinkedIn |

**Paso 3 — Adapta el tono al canal (no copies y pegues):**
```
Pieza pilar: "El problema con el contenido de redes sociales es que la mayoría
de marcas lo trata como un altavoz en lugar de como una conversación, lo que
genera alcance pero no relación ni confianza con la audiencia."

LinkedIn (reflexivo, profesional):
"Las marcas que mejor convierten en LinkedIn hacen una cosa distinta:
tratan las redes como una conversación, no como un altavoz.
¿La diferencia? Comentan. Preguntan. Responden. Aparecen en los hilos de otros.
El alcance no es el objetivo — la relación lo es."

Twitter (directo, provocador):
"Las marcas que tratan las redes sociales como un altavoz confunden
alcance con influencia.
Diferencia: tu post puede llegar a 10k personas y no cambiar nada.
Una conversación con 10 personas puede cambiarlo todo."

Instagram (visual, más emocional):
[Slide 1]: "Estás publicando. Pero ¿estás conversando?"
[Slide 2-6]: los 5 signos de que tu estrategia de contenido es un monólogo
```

### 📅 El calendario de distribución (una pieza pilar → 30 días de contenido)

**Semana 1:** la pieza pilar + los 3 posts de LinkedIn de mayor impacto
**Semana 2:** el carrusel de Instagram + 2 hilos de Twitter
**Semana 3:** los clips de TikTok/Reels + email para la lista
**Semana 4:** el post de "preguntas frecuentes sobre este tema" (basado en los comentarios de las semanas 1-3)

### 🛠️ Herramientas que automatizan la distribución
Buffer, Publer, Metricool — y cuál elegir según el número de canales y el presupuesto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Atomización de contenido, repurposing, distribución, content strategy',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Docker para aplicaciones web: containeriza tu app, define el entorno y elimina el "en mi máquina funciona"',
                'description'       => 'Containeriza tu aplicación web con Docker para garantizar que el entorno de desarrollo es idéntico al de producción. Con el Dockerfile óptimo, el docker-compose para desarrollo local, la imagen mínima para producción y los patrones que evitan los errores más comunes.',
                'prompt_content'    => <<<'PROMPT'
Eres un DevOps Engineer con experiencia containerizando aplicaciones de Node.js, Python, PHP y Go para producción con Docker y Kubernetes.

Mi stack:
- Aplicación: [Node.js / Python Flask/Django / PHP Laravel / Go / Ruby on Rails / otro]
- Base de datos: [PostgreSQL / MySQL / MongoDB / Redis / combinación]
- Entorno actual: [sin Docker / docker run manual / quiero docker-compose / ya tengo Docker pero el Dockerfile es mejorable]
- Destino de producción: [VPS / AWS ECS / Kubernetes / Railway / Render / otro]

## Docker para Aplicaciones Web — [Tu stack]

### 🧠 Los conceptos que necesitas tener claros

**Imagen:** la plantilla inmutable. Como una clase en programación.
**Contenedor:** una instancia en ejecución de una imagen. Como un objeto de esa clase.
**Dockerfile:** las instrucciones para construir la imagen.
**docker-compose:** orquesta múltiples contenedores (app + base de datos + cache) en desarrollo.

### 📄 El Dockerfile óptimo por stack

**Node.js (con multi-stage build para imagen de producción mínima):**

```dockerfile
# Stage 1: dependencias y build
FROM node:20-alpine AS builder
WORKDIR /app

COPY package*.json ./
RUN npm ci --only=production

COPY . .
RUN npm run build  # si tienes build step (TypeScript, Next.js, etc.)

# Stage 2: imagen de producción mínima
FROM node:20-alpine AS runner
WORKDIR /app
ENV NODE_ENV=production

# Solo copiamos lo necesario del stage anterior
COPY --from=builder /app/node_modules ./node_modules
COPY --from=builder /app/dist ./dist
COPY --from=builder /app/package.json ./

# Nunca uses root en producción
USER node
EXPOSE 3000
CMD ["node", "dist/index.js"]
```

**PHP Laravel:**
```dockerfile
FROM php:8.3-fpm-alpine

# Extensiones PHP necesarias
RUN docker-php-ext-install pdo pdo_pgsql opcache && \
    apk add --no-cache nginx supervisor

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .
RUN composer install --no-dev --optimize-autoloader

# Permisos correctos
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 80
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
```

**Python FastAPI/Flask:**
```dockerfile
FROM python:3.12-slim

WORKDIR /app

# Dependencias primero (mejor caché)
COPY requirements.txt .
RUN pip install --no-cache-dir -r requirements.txt

COPY . .

USER 1000
EXPOSE 8000
CMD ["uvicorn", "main:app", "--host", "0.0.0.0", "--port", "8000"]
```

### 🔧 docker-compose para desarrollo local

```yaml
# docker-compose.yml
version: '3.9'

services:
  app:
    build:
      context: .
      target: builder  # usa el stage de desarrollo, no el de producción
    volumes:
      - .:/app  # monta el código local → hot reload
      - /app/node_modules  # excluye node_modules del montaje
    ports:
      - "3000:3000"
    environment:
      - NODE_ENV=development
      - DATABASE_URL=postgresql://user:password@db:5432/myapp
      - REDIS_URL=redis://cache:6379
    depends_on:
      db:
        condition: service_healthy
      cache:
        condition: service_started

  db:
    image: postgres:16-alpine
    environment:
      POSTGRES_USER: user
      POSTGRES_PASSWORD: password
      POSTGRES_DB: myapp
    volumes:
      - postgres_data:/var/lib/postgresql/data
    healthcheck:
      test: ["CMD-SHELL", "pg_isready -U user"]
      interval: 5s
      timeout: 5s
      retries: 5

  cache:
    image: redis:7-alpine
    volumes:
      - redis_data:/data

volumes:
  postgres_data:
  redis_data:
```

**Comandos esenciales:**
```bash
docker compose up -d          # arranca todo en background
docker compose logs -f app    # logs de la app en tiempo real
docker compose exec app sh    # shell dentro del contenedor
docker compose down -v        # para todo y borra los volúmenes
docker compose build --no-cache  # reconstruye la imagen desde cero
```

### ⚠️ Los errores más comunes (y cómo evitarlos)

**Error 1 — COPY . . antes que las dependencias:**
```dockerfile
# ❌ Cada cambio de código invalida el caché de las dependencias
COPY . .
RUN npm install

# ✅ Las dependencias se cachean si package.json no cambia
COPY package*.json ./
RUN npm install
COPY . .
```

**Error 2 — Imagen base no específica:**
```dockerfile
# ❌ node:latest cambia sin aviso y rompe builds
FROM node:latest

# ✅ Versión fija, alpine para imagen mínima
FROM node:20-alpine
```

**Error 3 — Credenciales en el Dockerfile:**
```dockerfile
# ❌ NUNCA
ENV API_KEY="sk-1234567890"

# ✅ Variables de entorno en tiempo de ejecución
ENV API_KEY=""  # vacía en la imagen, inyectada al arrancar
```
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Docker, containerización, DevOps, docker-compose, producción',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Microanimaciones y motion design en UX: el movimiento que guía al usuario sin distraerle',
                'description'       => 'Diseña las microanimaciones de tu producto digital que mejoran la percepción de calidad, guían la atención y dan feedback inmediato sin añadir ruido visual. Con los principios de motion design, los valores de timing correctos y los patrones más efectivos para cada tipo de interacción.',
                'prompt_content'    => <<<'PROMPT'
Eres un Motion Designer y UX Engineer con experiencia diseñando sistemas de animación para productos digitales que han mejorado la percepción de calidad y reducido la tasa de error del usuario.

Contexto:
- Tipo de producto: [web app / app móvil / landing page / dashboard / otro]
- Stack frontend: [React / Vue / CSS nativo / Framer Motion / GSAP / otro]
- Estado actual: [sin animaciones / animaciones ad hoc inconsistentes / quiero sistematizar / otro]
- Objetivo: [mejorar la calidad percibida / reducir la desorientación en transiciones / dar feedback de acciones / otro]

## Sistema de Microanimaciones — [Producto]

### 🧠 Los principios del motion design para UX

**Principio 1 — El movimiento tiene significado:**
Cada animación debe comunicar algo: un estado que cambia, una relación entre elementos, la dirección de la navegación. Si no comunica nada, es ruido.

**Principio 2 — Duración y easing correctos:**

| Tipo de animación | Duración | Easing | Ejemplo |
|------------------|---------|--------|---------|
| Micro feedback (tap, hover) | 100-200ms | ease-out | Botón que se presiona |
| Transición de UI | 200-300ms | ease-in-out | Modal que aparece |
| Transición de página | 300-400ms | ease-in-out | Cambio de ruta |
| Elementos decorativos | 400-600ms | spring/bounce | Ilustración de onboarding |

**Regla de duración:** si parece lento en desktop, está bien en móvil. Si parece rápido en móvil, es perfecto en desktop.

**Principio 3 — Ley de entrada y salida:**
Los elementos entran decelerando (ease-out) y salen acelerando (ease-in).
La naturaleza funciona así: los objetos que llegan pierden velocidad, los que se van la ganan.

### 📐 Los patrones de microanimación más valiosos

**1. Feedback de estado (el más importante):**
```css
/* Botón que confirma la acción */
button {
  transition: transform 150ms ease-out, background-color 150ms ease-out;
}
button:active {
  transform: scale(0.96);
}
button.loading {
  /* spinner inline, no transformación */
}
button.success {
  background-color: var(--color-success);
  /* icono de check que aparece */
}
```

**2. Aparición de elementos (enter/exit):**
```css
/* Modal */
.modal-overlay {
  animation: fadeIn 200ms ease-out;
}
.modal-content {
  animation: slideUp 250ms cubic-bezier(0.34, 1.56, 0.64, 1);
}

@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}

@keyframes slideUp {
  from { opacity: 0; transform: translateY(16px); }
  to { opacity: 1; transform: translateY(0); }
}
```

**3. Skeleton screens (mejor que spinners):**
```css
/* Placeholder animado mientras carga el contenido */
.skeleton {
  background: linear-gradient(
    90deg,
    var(--color-neutral-100) 25%,
    var(--color-neutral-200) 50%,
    var(--color-neutral-100) 75%
  );
  background-size: 200% 100%;
  animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
  0% { background-position: 200% 0; }
  100% { background-position: -200% 0; }
}
```

**4. Transiciones de lista (cuando se añaden/eliminan items):**
```javascript
// Con Framer Motion (React):
import { AnimatePresence, motion } from 'framer-motion'

<AnimatePresence>
  {items.map(item => (
    <motion.li
      key={item.id}
      initial={{ opacity: 0, height: 0 }}
      animate={{ opacity: 1, height: 'auto' }}
      exit={{ opacity: 0, height: 0 }}
      transition={{ duration: 0.2 }}
    >
      {item.content}
    </motion.li>
  ))}
</AnimatePresence>
```

### ♿ Motion y accesibilidad

**Usuarios con vestibular disorders o epilepsia:**
```css
/* Respeta la preferencia del usuario de reducir movimiento */
@media (prefers-reduced-motion: reduce) {
  *,
  *::before,
  *::after {
    animation-duration: 0.01ms !important;
    animation-iteration-count: 1 !important;
    transition-duration: 0.01ms !important;
  }
}
```

### 📊 Cómo medir si las animaciones mejoran la experiencia
Las métricas de percepción de calidad y los test A/B que revelan si el motion añade o resta valor.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Microanimaciones, motion design, UX, CSS animations, Framer Motion',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Cold email B2B de alta conversión: el sistema de prospección que genera reuniones sin parecer spam',
                'description'       => 'Diseña y ejecuta campañas de cold email B2B que consiguen tasas de respuesta del 8-15%. Con la estructura del email que convierte, la secuencia de seguimiento, la personalización que escala y las métricas que separan las campañas que funcionan de las que van a spam.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Development Representative (SDR) senior con experiencia ejecutando campañas de cold email que promedian 10-15% de tasa de respuesta positiva y generan 20-30 reuniones cualificadas por mes.

Contexto:
- Producto o servicio que vendes: [describe]
- Perfil del cliente ideal (ICP): [cargo / industria / tamaño de empresa]
- Ticket medio: [€]
- Herramienta de email: [Apollo / Lemlist / Instantly / Hunter / manual / otro]
- Problema actual: [nadie responde / los emails van a spam / no sé cómo personalizar a escala / las respuestas son "no gracias" / otro]

## Sistema de Cold Email B2B — [Tu negocio]

### 🧠 Por qué el 95% de los cold emails no funcionan

**Los errores que van directo a la papelera:**
- Empiezan hablando del remitente ("Soy Ana de [empresa], llevamos 10 años en el mercado...")
- El asunto parece publicidad ("Mejora tus ventas un 300%")
- El cuerpo es un folleto de ventas de 300 palabras
- No hay personalización real — solo el nombre del destinatario

**Lo que funciona:**
- El email parece escrito por una persona a otra persona
- Es corto (100-150 palabras máximo)
- El asunto es específico y personal
- La primera frase es sobre el destinatario, no sobre el remitente

### ✉️ La estructura del cold email que convierte

**Fórmula de 4 líneas:**

```
[Línea 1 — El gancho (sobre ELLOS)]:
Observación específica sobre su empresa, rol o situación reciente.

[Línea 2 — La conexión]:
Por qué esa observación es relevante para lo que haces.

[Línea 3 — La propuesta de valor]:
Qué resultado específico podrías ayudarles a conseguir.

[Línea 4 — El CTA (simple, sin presión)]:
Una pregunta con opción binaria fácil de responder.
```

**Ejemplo real:**

```
Asunto: Pregunta sobre vuestro proceso de [área específica]

Hola [nombre],

He visto que [empresa] acaba de [hecho reciente: lanzar producto / abrir nueva
oficina / publicar oferta de trabajo en el área X / anunciar financiación].

Suelo trabajar con empresas en ese momento de crecimiento para [beneficio
específico y medible] — el último cliente en una situación similar consiguió
[resultado concreto] en [tiempo].

¿Tendría sentido hablar 20 minutos para ver si podría ayudarte de la misma forma?

Si no es el momento, sin problema — ¿hay alguien en tu equipo que gestione
[área] y con quien tendría más sentido hablar?

[Nombre]
```

### 🔁 La secuencia de seguimiento (dónde está el dinero)

El 80% de las reuniones se consiguen en el 2.º-5.º contacto, no en el primero.

**Email 1 — Día 0:** el email inicial de la fórmula de 4 líneas
**Email 2 — Día 3:** "Quería asegurarme de que te llegó mi email anterior..." + una nueva perspectiva o caso de éxito
**Email 3 — Día 7:** "Recurso relevante" — un dato, artículo o insight útil para su contexto (no una venta)
**Email 4 — Día 14:** "Última vez que contacto por ahora" — el break-up email que paradójicamente tiene la tasa de respuesta más alta

**El break-up email:**
```
Asunto: ¿Cerramos el hilo?

Hola [nombre],

He intentado contactarte un par de veces sin suerte, así que asumo que
o no es el momento o no es relevante para ti ahora.

Cerraré el hilo por aquí — si en algún momento [problema que resuelves]
sube en la lista de prioridades, encantado de hablar.

Un saludo,
[Nombre]
```

### 📊 Las métricas que distinguen una campaña que funciona

| Métrica | Malo | Bien | Excelente |
|---------|------|------|-----------|
| Tasa de apertura | <40% | 40-60% | >60% |
| Tasa de respuesta | <2% | 5-8% | >10% |
| Tasa de positivos | <30% de respuestas | 40-50% | >60% |
| Tasa de reunión | <1% | 3-5% | >7% |

### 🛡️ Cómo evitar ir a spam (deliverability)
El warmup del dominio, los registros SPF/DKIM/DMARC y por qué debes usar un subdominio para prospección.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Cold email, prospección B2B, SDR, outbound sales',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'User story mapping: organiza el backlog que nadie entiende en una visión que el equipo puede ejecutar',
                'description'       => 'Aprende a crear el user story map que convierte una lista interminable de tickets en una narrativa de producto coherente. Con la técnica de Jeff Patton, la sesión de mapping facilitada, cómo identificar el MVP y cómo mantener el mapa vivo en el día a día del equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager y facilitador con experiencia usando User Story Mapping para alinear a equipos de 5 a 50 personas alrededor de una visión de producto compartida y ejecutable.

Contexto:
- Estado del producto: [idea / MVP en desarrollo / producto en producción con backlog desordenado]
- Tamaño del equipo: [N personas — diseño + desarrollo + producto]
- Problema actual: [el backlog es una lista de tickets sin contexto / no sabemos qué es el MVP / el equipo no entiende el "para qué" de cada historia / el roadmap no conecta con el usuario real]
- Herramienta: [Miro / FigJam / Mural / Notion / tarjetas físicas]

## User Story Mapping — [Producto]

### 🧠 Por qué el backlog plano no funciona

**El problema del backlog como lista:**
Un backlog de 200 historias de usuario tiene toda la información, pero ninguna narrativa.
Nadie puede ver si el conjunto completo sirve al usuario o si hay huecos.

**Lo que aporta el user story map:**
- El eje horizontal muestra el "viaje del usuario" de izquierda a derecha (el tiempo)
- El eje vertical muestra la prioridad: arriba lo más crítico, abajo lo que puede esperar
- La primera "rebanada" horizontal es el MVP

### 🏗️ Los 5 pasos para crear el user story map

**Paso 1 — El backbone (la columna vertebral):**
Las actividades principales que el usuario hace, de izquierda a derecha.
Ejemplo para un SaaS de gestión de facturas:
```
[Registrarse] → [Configurar empresa] → [Crear factura] → [Enviar a cliente] → [Registrar pago] → [Ver reportes]
```

Regla: entre 5 y 12 actividades. Si tienes más, estás bajando demasiado al detalle.

**Paso 2 — Las tareas de usuario (debajo de cada actividad):**
Para cada actividad, las tareas concretas que hace el usuario.
```
[Crear factura]
├── Añadir datos del cliente
├── Añadir líneas de servicio/producto
├── Aplicar impuestos y descuentos
├── Añadir términos de pago
└── Previsualizar la factura
```

**Paso 3 — Las historias de usuario (el detalle debajo de las tareas):**
Para cada tarea, las historias que cubren los detalles y variantes.
```
[Añadir líneas de servicio]
├── Como usuario, quiero buscar servicios guardados para no escribirlos de nuevo
├── Como usuario, quiero añadir servicios personalizados nuevos
└── Como usuario, quiero duplicar líneas similares
```

**Paso 4 — El corte del MVP (la primera rebanada horizontal):**
Dibuja una línea horizontal a través del mapa.
Por encima: todo lo que el MVP DEBE incluir para que el usuario pueda completar el viaje.
Por debajo: todo lo que puede esperar a iteraciones siguientes.

**El criterio del MVP:**
¿Puede el usuario completar el viaje del extremo izquierdo al extremo derecho con lo que está por encima de la línea?
Si sí → ese es el MVP.

**Paso 5 — Las releases sucesivas:**
Más líneas horizontales debajo de la primera → las features de la versión 1.1, 1.2, 2.0.

### 🎯 Cómo facilitar la sesión de story mapping (2-3 horas)

**Participantes:** todo el equipo de producto (PM, diseño, desarrollo) + 1-2 stakeholders de negocio.
**Material:** post-its de 3 colores (actividades, tareas, historias) + pared larga o Miro.

**Agenda de la sesión:**
- 20 min: definir el usuario principal y su objetivo (el "para qué" del producto)
- 30 min: escribir el backbone — actividades de izquierda a derecha
- 45 min: añadir tareas debajo de cada actividad
- 30 min: añadir historias de usuario debajo de las tareas
- 30 min: el corte del MVP — debate y alineación

### 📋 Cómo mantener el mapa vivo después de la sesión
La cadencia de actualización del story map y cómo conectarlo con el backlog del sprint.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'User story mapping, backlog, product management, MVP, facilitación',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión del absentismo: el proceso que reduce las bajas injustificadas sin deteriorar el clima laboral',
                'description'       => 'Diseña el proceso de gestión del absentismo que combina el seguimiento riguroso con el acompañamiento humano. Con el protocolo de ausencias, la entrevista de retorno, los indicadores de seguimiento y cómo distinguir el absentismo puntual del estructural.',
                'prompt_content'    => <<<'PROMPT'
Eres un HR Manager con experiencia implementando programas de gestión del absentismo en empresas de 50 a 500 empleados que han reducido la tasa de absentismo del 6-8% al 3-4% sin deteriorar el clima laboral.

Contexto:
- Número de empleados: [N]
- Tasa de absentismo actual: [X%] — si no la conoces: (días de baja / días laborables × empleados) × 100
- Tipo de absentismo principal: [bajas de corta duración frecuentes / bajas largas / absentismo presencial (el que viene pero no trabaja) / otro]
- Causa más frecuente conocida: [dolencias musculoesqueléticas / problemas de salud mental / conflictos laborales / causas desconocidas / otro]
- Marco legal: [España / otro]

## Programa de Gestión del Absentismo — [Empresa]

### 📊 El diagnóstico: qué medir antes de actuar

**Tasa de absentismo total:**
(Días de baja / Días laborables teóricos) × 100
Objetivo sector servicios: <3.5%. Por encima del 5%: problema estructural.

**Índice de frecuencia:**
(Número de bajas / Número de empleados) × 100
Un índice alto con duración baja = muchas bajas cortas = patrón diferente al de bajas largas.

**Curva Bradford:**
Penaliza más las bajas cortas frecuentes que las bajas largas.
Fórmula: B = S² × D (S = número de episodios, D = días totales)
Útil para identificar a los empleados con patrón de absentismo recurrente.

### 🏗️ El protocolo de gestión de ausencias (sin que parezca vigilancia)

**Nivel 1 — Ausencia puntual (<3 días):**
- El empleado comunica la ausencia antes del inicio de la jornada (por teléfono, no solo por WhatsApp)
- El manager anota la ausencia y la causa en el sistema
- Al regreso: entrevista de retorno de 5-10 minutos (ver abajo)

**Nivel 2 — Baja médica (IT de la Seguridad Social):**
- El empleado envía el parte de baja en 3 días hábiles
- HR registra la baja y activa el protocolo de seguimiento
- A partir del día 30: contacto de seguimiento y posibilidad de adaptación del puesto
- Gestión activa de la reincorporación

**Nivel 3 — Patrón de absentismo recurrente:**
- 3 o más episodios en 6 meses → conversación formal con HR y manager
- Investigar causa raíz (¿es el trabajo? ¿problemas personales? ¿conflicto de equipo?)
- Activar recursos de apoyo (EAP, servicio médico de empresa, ajuste de condiciones)

### 🤝 La entrevista de retorno (la herramienta más efectiva y menos usada)

**Qué es:** una conversación de 5-10 minutos entre el manager y el empleado el día de su regreso.
**Por qué funciona:** hace que la ausencia no pase desapercibida, demuestra que la empresa se preocupa y permite detectar problemas antes de que escalen.

**Estructura:**
1. Bienvenida: "Me alegra que estés de vuelta, ¿cómo estás?"
2. Continuidad: "¿Hay algo en lo que necesites que te ayudemos para reincorporarte?"
3. Causa (con cuidado): "Sin entrar en detalles médicos, ¿hay algo relacionado con el trabajo que podamos mejorar?"
4. Próximos pasos: si hay algo accionable, comprometerse a seguimiento

**Lo que no es la entrevista de retorno:**
No es un interrogatorio. No es una advertencia. No se documenta como una advertencia.
Es una conversación de cuidado genuino — y así se comunica al equipo desde el principio.

### ⚖️ El límite legal del absentismo en España (cuándo puedes despedir)

El art. 52.d del Estatuto de los Trabajadores permite el despido objetivo por absentismo cuando:
- Las faltas de asistencia alcanzan el 20% de las jornadas hábiles en 2 meses consecutivos
- O el 25% en 4 meses discontinuos dentro de un período de 12 meses

Pero siempre: consulta con asesoría laboral antes de cualquier despido por absentismo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Gestión del absentismo, bajas, entrevista de retorno, HR España',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de rentabilidad por producto y cliente: identifica dónde ganas y dónde pierdes de verdad',
                'description'       => 'Calcula la rentabilidad real de cada producto, línea de negocio y cliente para tomar decisiones estratégicas basadas en datos reales en lugar de intuición. Con la metodología de imputación de costes, el análisis de contribución marginal y las decisiones que emergen de los datos.',
                'prompt_content'    => <<<'PROMPT'
Eres un Controller y Financial Advisor con experiencia implementando análisis de rentabilidad en empresas de 1M a 20M€ que han descubierto que el 20% de sus clientes o productos generan el 80% de los beneficios reales.

Contexto:
- Tipo de empresa: [manufactura / distribución / servicios / SaaS / ecommerce / otro]
- Número de productos/servicios: [N]
- Número de clientes activos: [N]
- Facturación anual: [€]
- Software contable: [Sage / Holded / Excel / Odoo / otro]
- Problema: [no sé qué productos son realmente rentables / tengo clientes que ocupan mucho tiempo pero pagan poco / el margen bruto está bien pero el neto no / otro]

## Análisis de Rentabilidad por Producto y Cliente — [Empresa]

### 🧠 La diferencia entre margen bruto y rentabilidad real

**Margen bruto** = Ingresos - Coste directo de ventas (materiales, producción directa)
**Rentabilidad real** = Ingresos - Coste directo - Costes indirectos asignados

**El error:** comparar productos o clientes solo por margen bruto.
**El resultado:** creer que el cliente A es muy rentable (50% margen bruto) sin ver que consume el 30% del tiempo del equipo de soporte, tiene muchas devoluciones y paga tarde.

### 📐 El modelo de análisis de rentabilidad en 3 niveles

**Nivel 1 — Contribución marginal (margen variable):**
```
Ingresos del producto/cliente:         €100.000
- Coste directo de materiales:          -€30.000
- Comisiones de venta directas:          -€5.000
= Contribución Marginal:                €65.000 (65%)
```

**Nivel 2 — Margen de contribución neto (después de costes semi-directos):**
```
Contribución Marginal:                  €65.000
- Coste de soporte asignado:            -€8.000
- Coste de operaciones asignado:        -€5.000
- Marketing asignado:                   -€3.000
= Margen Neto de Contribución:          €49.000 (49%)
```

**Nivel 3 — Rentabilidad completa (después de estructura fija):**
```
Margen Neto de Contribución:            €49.000
- Parte proporcional de estructura:    -€20.000
= Rentabilidad Final:                   €29.000 (29%)
```

### 🔍 Cómo imputar los costes indirectos (el punto más difícil)

**Los costes que más se olvidan imputar:**
- Tiempo del equipo de soporte por cliente
- Tiempo del equipo de ventas en el ciclo de venta
- Coste de almacenamiento por línea de producto
- Coste de devoluciones y reclamaciones
- Coste de los días de pago (si un cliente paga a 90 días, ese crédito tiene coste)

**Metodología de imputación:**
1. **Driver de coste:** elige la métrica que mejor correlaciona el coste con el uso (tiempo dedicado, tickets de soporte, metros cuadrados, etc.)
2. **Tasa de coste:** coste total / unidades de driver (€/hora de soporte, €/m² de almacén)
3. **Asignación:** tasa × unidades consumidas por cada producto/cliente

**Ejemplo para soporte:**
- Coste total del equipo de soporte: €180.000/año
- Total de horas de soporte: 6.000h/año
- Tasa: €30/hora de soporte

| Cliente | Tickets/mes | Horas/ticket | Coste soporte asignado/año |
|---------|------------|--------------|---------------------------|
| Cliente A | 2 | 0.5h | €360/año |
| Cliente B | 20 | 2h | €14.400/año |

Si ambos pagan lo mismo, Cliente B es mucho menos rentable de lo que parece.

### 📊 Las 4 decisiones que emergen del análisis

1. **Productos/clientes a potenciar:** alta rentabilidad real → dónde enfocar ventas y marketing
2. **Productos/clientes a repriorizar:** margen bajo que consume recursos → renegociar precio o condiciones
3. **Productos/clientes a descontinuar:** rentabilidad negativa real → análisis de si hay razón estratégica para mantenerlos
4. **Costes a reducir:** los drivers de coste que más pesan en los márgenes → target de eficiencia

### 📋 La presentación de resultados al equipo directivo
El formato de heatmap de rentabilidad que comunica los hallazgos sin necesitar un MBA para interpretarlo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Rentabilidad, análisis de costes, margen de contribución, CFO, finanzas',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'RGPD y protección de datos de empleados: lo que la empresa puede y no puede monitorizar',
                'description'       => 'Conoce los límites legales de la monitorización de empleados bajo el RGPD y el ET en España: qué puedes controlar, cómo hacerlo legalmente y qué políticas necesitas para no exponerte a sanciones de la AEPD ni a demandas laborales.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en derecho laboral digital y protección de datos en el ámbito empresarial, con experiencia asesorando a empresas españolas sobre las obligaciones del RGPD respecto a sus empleados.

Contexto:
- Número de empleados: [N]
- Modalidad: [presencial / remoto / híbrido]
- Preocupación concreta: [control del ordenador del empleado / geolocalización / videovigilancia / acceso al email corporativo / monitorización de productividad / otro]
- Situación actual: [sin política de privacidad para empleados / usando herramientas de monitorización sin informar / quiero implementar control y no sé cómo / otro]

## RGPD y Privacidad de Empleados — [Empresa]

### ⚖️ El marco legal: qué dice el RGPD y el ET sobre los empleados

**La base legal del tratamiento de datos de empleados:**
El art. 6 del RGPD permite tratar datos de empleados basándose en:
- **Ejecución del contrato de trabajo** (para gestionar la relación laboral)
- **Obligación legal** (cotizaciones, prevención de riesgos)
- **Interés legítimo** del empleador (solo cuando no prevalezcan los derechos del empleado)

**El principio de proporcionalidad:**
La monitorización debe ser **necesaria**, **proporcional** al fin legítimo buscado y **no excesiva**. El mero interés de controlar no justifica cualquier medida.

### 📋 Lo que puedes monitorizar legalmente (con las condiciones correctas)

**1. Uso del ordenador corporativo:**
- ✅ Puedes registrar el uso de internet, aplicaciones y archivos en dispositivos de la empresa
- ⚠️ Condición: el empleado debe ser **informado previamente y por escrito** (política de uso de medios tecnológicos)
- ⚠️ Condición: la política debe prohibir expresamente el uso personal de los equipos, o permitirlo con límites claros
- ❌ No puedes acceder al email personal (Gmail, Hotmail) del empleado aunque lo use desde el ordenador de empresa

**2. Email corporativo:**
- ✅ Puedes acceder al email corporativo (@tuempresa.com) si el empleado fue informado de esta posibilidad
- ⚠️ El acceso debe ser proporcional — no revisar todos los emails de todos los empleados sistemáticamente
- ❌ No puedes leer emails de contenido personal aunque estén en el email corporativo (el ST señala que el empleado tiene expectativa de privacidad si la empresa permite uso personal)

**3. Videovigilancia en el lugar de trabajo:**
- ✅ Puedes instalar cámaras en zonas de trabajo (no en vestuarios, baños, ni zonas de descanso)
- ⚠️ Cartel informativo obligatorio en zona visible
- ⚠️ Las grabaciones se conservan máximo 30 días (salvo que haya un incidente que lo justifique)
- ❌ No puedes instalar cámaras en el domicilio del empleado en teletrabajo

**4. Geolocalización (para empleados con vehículo o en movilidad):**
- ✅ Legal para empleados que trabajan fuera de la oficina (comerciales, técnicos de campo)
- ⚠️ Requiere informar al empleado y al comité de empresa
- ⚠️ No puede activarse fuera del horario de trabajo (debe desactivarse automáticamente)
- ❌ No puedes geolocalizar a un empleado sedentario sin justificación

**5. Software de monitorización de productividad (screenshots, keyloggers):**
- ⚠️ En principio legal si el empleado es informado, pero con alto riesgo de ser considerado excesivo
- La AEPD ha señalado que las medidas más invasivas (capturas de pantalla frecuentes, seguimiento minuto a minuto) requieren una justificación muy sólida

### 📄 Los documentos que necesitas

**1. Política de uso de medios tecnológicos:**
Qué herramientas puede usar el empleado para qué fines, si permite uso personal y cómo se monitorizan.

**2. Cláusula de privacidad en el contrato de trabajo:**
Qué datos se tratan, con qué finalidad y cuáles son los derechos del empleado.

**3. Registro de actividades de tratamiento (RAT):**
Obligatorio para toda empresa — incluye el tratamiento de datos de empleados.

### 🚨 Las sanciones por incumplimiento
Las multas de la AEPD (hasta €20M o el 4% de la facturación global) y las consecuencias en el despido disciplinario apoyado en pruebas obtenidas de forma ilícita.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'RGPD empleados, privacidad laboral, monitorización, derecho laboral España',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Base de conocimiento de soporte: diseña la que los usuarios realmente consultan antes de abrir un ticket',
                'description'       => 'Diseña y mantiene la base de conocimiento de soporte que desvía el 30-40% de los tickets entrantes. Con la arquitectura de contenidos, el proceso de creación de artículos, el SEO interno que hace que los usuarios encuentren las respuestas y las métricas que revelan qué artículos faltan.',
                'prompt_content'    => <<<'PROMPT'
Eres un Knowledge Base Manager con experiencia construyendo centros de ayuda que han pasado de cero a desviar el 35% de los tickets en 90 días mediante contenido de calidad y búsqueda efectiva.

Contexto:
- Herramienta de KB: [Intercom Help Center / Zendesk Guide / Freshdesk / HelpScout Docs / Notion público / otra]
- Número de tickets/mes actuales: [N]
- Artículos de KB actuales: [0 / pocos / muchos pero desorganizados / actualizados / desactualizados]
- Mayor problema: [los usuarios no consultan la KB antes de abrir ticket / no encontramos los artículos que necesitamos / el contenido está desactualizado / no sabemos qué artículos crear]

## Base de Conocimiento de Soporte — [Producto]

### 🏗️ La arquitectura de contenidos (estructura antes de escribir)

**La jerarquía que funciona:**
```
Categorías (4-8 categorías principales)
└── Secciones (2-5 secciones por categoría)
    └── Artículos (el contenido específico)
```

**Las categorías típicas para un SaaS:**
1. Primeros pasos (lo que el nuevo usuario necesita primero)
2. Funcionalidades principales (cómo usar el producto)
3. Integraciones y conexiones
4. Cuenta y facturación
5. Solución de problemas (troubleshooting)
6. Preguntas frecuentes

**El test de la categoría correcta:**
Si un usuario describiera su problema con sus propias palabras, ¿en qué categoría buscaría primero? Si no lo sabes, pregúntale a un usuario real.

### ✍️ Cómo escribir artículos que los usuarios realmente leen

**La estructura del artículo perfecto:**

```markdown
# [Título orientado a la tarea — "Cómo conectar tu cuenta de Stripe"]

## ¿Qué necesitas antes de empezar?
- [Requisito 1]
- [Requisito 2]

## Pasos para [la tarea]

**Paso 1 — [Acción]:**
[Descripción concisa + screenshot si es necesario]

**Paso 2 — [Acción]:**
[Descripción concisa]

...

## Problemas frecuentes

**[Error común 1]:** [solución concisa]
**[Error común 2]:** [solución concisa]

---
¿Este artículo te ha ayudado? [Sí / No]
Si no: ¿Qué echas en falta? [caja de texto]
```

**Las reglas de escritura de KB:**
- Frases de <20 palabras
- Voz activa: "Haz clic en Guardar" no "El botón de guardar debe ser pulsado"
- Screenshots para cada paso no obvio
- Los títulos son tareas, no conceptos: "Cómo añadir un usuario" no "Gestión de usuarios"

### 🔍 El SEO interno (que los usuarios encuentren sin buscar en Google)

**La búsqueda de la KB debe funcionar con:**
- El vocabulario técnico del producto ("webhook", "workspace")
- El vocabulario del usuario ("compartir con el equipo", "invitar a alguien")
- Los mensajes de error exactos ("Error 422 - unprocessable entity")

**Cómo añadir sinónimos:**
En la mayoría de herramientas de KB, puedes añadir palabras clave o tags a cada artículo que se usan para la búsqueda pero no aparecen en el texto.

### 📊 Las métricas que revelan qué artículos faltan

**Búsquedas sin resultado:**
El informe más valioso de tu KB: las palabras que los usuarios buscan y no encuentran ningún artículo.
Cada búsqueda sin resultado = un artículo que falta.

**Artículos con "No fue útil":**
Los artículos con alta tasa de feedback negativo necesitan reescribirse o ampliar el troubleshooting.

**Deflection rate:**
(Usuarios que leyeron un artículo y NO abrieron ticket / Usuarios que leyeron un artículo) × 100
Objetivo: >60% de deflection en artículos de troubleshooting.

### 📅 El proceso de mantenimiento (para que no se desactualice)
La revisión trimestral + el proceso de actualización tras cada release del producto.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Base de conocimiento, self-service, ticket deflection, help center',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Cómo subir tarifas como freelance sin perder clientes: el proceso y la comunicación que funciona',
                'description'       => 'Implementa la subida de tarifas con los clientes actuales de forma que la mayoría la acepte y los que no quieran pagar más sean los que mejor te está bien dejar ir. Con el timing, la comunicación, la justificación que convence y cómo gestionar las reacciones negativas.',
                'prompt_content'    => <<<'PROMPT'
Eres un Business Coach para freelancers con experiencia acompañando a más de 200 profesionales independientes a subir sus tarifas entre un 20% y un 100% sin perder a sus mejores clientes.

Mi situación:
- Servicio que ofrezco: [describe]
- Tarifa actual: [€/hora o €/proyecto]
- Subida que quiero aplicar: [X%]
- Clientes actuales: [N clientes — antigüedad media, tipo de relación]
- Último momento en que subí tarifas: [nunca / hace X años / el año pasado]
- Mayor miedo: [que me digan que no / que pierda al cliente más grande / no saber cómo justificarlo / el momento es malo]

## Subida de Tarifas para Freelancers — [Tu negocio]

### 🧠 Por qué la mayoría de freelancers cobra de menos (y cómo salir de esa trampa)

**El síndrome del precio fijo:**
La mayoría de freelancers ponen una tarifa al empezar y no la tocan durante años, mientras que:
- Su experiencia y velocidad aumenta (el mismo trabajo lo haces mejor y más rápido)
- La inflación erosiona el poder adquisitivo de sus tarifas
- Los precios del mercado suben

**Una tarifa que no crece es una tarifa que baja en términos reales.**

**¿Cuándo subir?**
- Llevas más de 12 meses con la misma tarifa
- Tienes más trabajo del que puedes asumir (demanda supera la oferta)
- Has mejorado significativamente en el servicio que ofreces
- Quieres filtrar clientes y quedarte con los mejores

### 📅 El timing correcto

**El mejor momento para comunicar la subida:**
- Al menos 30-60 días antes de que entre en vigor
- Nunca en medio de un proyecto crítico para el cliente
- Idealmente al inicio de un nuevo año (enero) o al final de un buen proyecto

**No hay momento perfecto — pero hay momentos peores:**
- Cuando el cliente tiene un problema o está estresado
- Justo después de entregar trabajo que tuvo incidencias
- En agosto o diciembre (épocas de menor atención a estas decisiones)

### ✉️ La comunicación que funciona (el email que envías)

**Principios de la comunicación:**
1. Directa — no pides permiso, comunicas un cambio
2. Con antelación suficiente (mínimo 30 días)
3. Con agradecimiento genuino por la relación
4. Con la justificación justa (no te disculpes en exceso)

**El email modelo:**

```
Asunto: Actualización de tarifas para [año / mes de inicio]

Hola [nombre],

Quería escribirte con antelación para informarte de que a partir del
[fecha — mínimo 30 días] mis tarifas se actualizarán a [nueva tarifa].

Llevamos [tiempo] trabajando juntos en [tipo de proyectos], y ha sido
una colaboración que valoro mucho.

Esta actualización refleja [la evolución de mi servicio / el trabajo
que hemos construido juntos / el ajuste del mercado] — y mi objetivo
es seguir ofreciéndote el mismo nivel de calidad y dedicación.

Si quieres aprovechar las tarifas actuales para adelantar algún proyecto,
encantado de hablarlo antes del [fecha].

¿Tienes alguna pregunta? Aquí estoy.

Un saludo,
[Tu nombre]
```

### 💬 Cómo gestionar las reacciones negativas

**Si el cliente dice "es demasiado":**
No negocies inmediatamente. Pregunta: "¿Qué parte te resulta difícil de asumir — el importe en sí o el timing?"
La mayoría de veces es el timing — y puedes ofrecer un período de transición.

**Si el cliente dice que se lo piensa:**
Dale espacio. No presiones. En 7-10 días, un seguimiento: "¿Has podido pensarlo?"

**Si el cliente decide no seguir:**
Es posible que sea la decisión correcta para los dos. Los clientes que se van por una subida razonable son exactamente los que el mercado te está diciendo que dejes ir para dejar espacio a clientes mejores.

### 📊 La subida como filtro natural del cliente ideal
Cómo la subida de tarifas mejora la calidad media de tu cartera de clientes al cabo de 6-12 meses.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Subida de tarifas, freelance, pricing, negociación con clientes',
                'vote_score'        => 51,
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
