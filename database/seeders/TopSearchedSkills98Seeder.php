<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills98Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Branded content y native advertising',
                'description'      => 'Crea publicidad tan buena que el usuario quiere verla: formato, producción y distribución que funciona en medios digitales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director creativo especializado en branded content y native advertising con experiencia en campañas para marcas medianas y grandes en medios digitales. Mi objetivo es desarrollar una estrategia de branded content que integre la marca de forma orgánica en contenido que la audiencia realmente quiera consumir.

## La diferencia entre branded content y publicidad convencional

La publicidad convencional interrumpe. El branded content es el contenido que la audiencia elige consumir porque le aporta algo — entretenimiento, información, emoción — y en el que la marca aparece de forma coherente y no intrusiva.

El native advertising es el formato de distribución: un artículo patrocinado que sigue el estilo editorial del medio, un vídeo que parece contenido orgánico de la plataforma, un podcast patrocinado que suena como el resto del podcast.

La confusión entre ambos lleva a marcas que crean "branded content" que en realidad es publicidad de producto disfrazada de contenido. El resultado: baja retención, pocos compartidos y audiencia que aprende a ignorarlo.

## Bloque 1: Estrategia de branded content

**El triángulo de branded content exitoso:**
- **Relevante para la marca:** el contenido conecta con los valores, el propósito o el territorio de autoridad de la marca, no solo con el producto
- **Valioso para la audiencia:** el contenido tiene razón de existir independientemente de la marca — informa, entretiene o inspira
- **Coherente con el contexto:** el formato, el tono y la plataforma donde se distribuye encajan con cómo esa audiencia consume contenido

**Los 4 territorios de contenido más efectivos:**

**1. Educación y expertise:** la marca comparte conocimiento genuino sobre su área de especialización. Funciona especialmente en B2B y en productos complejos donde el proceso de consideración es largo. Ejemplo: una empresa de software de contabilidad que publica guías fiscales para autónomos.

**2. Entretenimiento y cultura:** la marca se asocia con el entretenimiento que consume su audiencia. Requiere valentía creativa porque el producto no puede ser el protagonista. Funciona cuando la marca tiene un territorio cultural claro.

**3. Propósito y valores:** contenido que muestra cómo la marca actúa en el mundo más allá de sus productos. Funciona cuando el propósito es genuino y verificable, destruye cuando es percibido como greenwashing o purpose-washing.

**4. Comunidad y reconocimiento:** contenido que celebra a los clientes, los usuarios o la comunidad alrededor del producto. Es el más auténtico porque las historias son reales.

## Bloque 2: Formatos de native advertising y dónde funcionan

**Newsletter patrocinada:**
El formato de crecimiento más rápido de los últimos 3 años. Las newsletters de nicho con audiencias cualificadas tienen tasas de apertura del 40-60% y tasas de clic del 5-15%, muy superiores a la publicidad display.

**Cómo estructurar un patrocinio de newsletter:**
- No es un banner: es un párrafo escrito por el newsletter en su propio tono
- El mensaje debe aportar valor a los lectores del newsletter, no solo mencionar el producto
- Incluye una URL con tracking específico para medir el resultado
- Negocia siempre un ensayo antes de comprometerte a múltiples ediciones

**Artículo nativo en medios digitales:**
Un artículo escrito al estilo editorial del medio, marcado como patrocinado pero que sigue las convenciones de ese medio. Los mejores son los que el lector no puede distinguir del contenido editorial excepto por el tag "patrocinado".

**Criterios de calidad de un artículo nativo:**
- El headline es editorial, no publicitario ("Cómo gestionar la deuda en tu primer año de negocio", no "X empresa te ayuda a gestionar la deuda")
- La marca aparece como fuente experta, no como protagonista
- El 70-80% del artículo es información genuinamente útil
- El 20-30% conecta con la solución que ofrece la marca

**Podcast patrocinado:**
Los host-read ads (el propio presentador del podcast lee el anuncio en su tono) tienen tasas de conversión 3-5 veces superiores a los ads pre-grabados porque la audiencia confía en el presentador.

**Script de host-read ad efectivo:**
```
[15 segundos] Transición natural desde el contenido del episodio
[30 segundos] Historia personal del presentador relacionada con el producto
[15 segundos] Oferta específica para la audiencia + código de descuento trackeable
[10 segundos] URL de destino repetida dos veces
```

Total: 60-90 segundos. Más que eso y la audiencia hace skip.

## Bloque 3: Producción de branded content

**El brief creativo que diferencia los buenos de los mediocres:**

Antes de producir cualquier pieza, responde estas preguntas:
1. ¿Qué emoción o estado mental quiero que el espectador/lector sienta al terminar?
2. ¿Qué va a hacer diferente el espectador/lector después de consumir este contenido?
3. ¿Cuál es la razón por la que va a compartirlo con alguien?
4. ¿Qué tiene esto que no puedo encontrar en otro sitio?

Si no puedes responder las 4 preguntas con claridad, el brief no está listo.

**Presupuesto y calidad:**
En branded content, la calidad de la producción comunica sobre la marca. Un artículo mal escrito, un vídeo con mala iluminación o un podcast con audio deficiente dañan la marca más de lo que ayudan. Mejor menos piezas con más calidad que muchas piezas mediocres.

**Distribución propia vs. distribución en medios:**
| Canal | Ventaja | Limitación |
|-------|---------|-----------|
| Blog propio | Control total, SEO | Audiencia limitada sin promoción |
| Redes sociales propias | Sin coste, feedback inmediato | Alcance orgánico reducido |
| Newsletter propia | Alta conversión si tienes lista | Requiere audiencia previa |
| Medios de terceros | Audiencia cualificada, credibilidad | Coste, menos control |
| Co-creación con creadores | Autenticidad, alcance | Dependencia del creador |

## Bloque 4: Métricas de branded content

**Las métricas que importan (y las que no):**

**Métricas de consumo (aportan valor):**
- Tiempo de lectura / visionado completado: indica si el contenido engancha
- Scroll depth en artículos: indica hasta dónde leen realmente
- Replays en vídeo: indica las secciones más interesantes
- Compartidos: el indicador más potente de contenido realmente valorado

**Métricas de vanidad (cuidado con confundirlas con resultados):**
- Impresiones: cuántos vieron el contenido, no cuántos lo consumieron
- Clicks: sin contexto de tiempo en página, no dicen nada
- Likes: bajo coste de expresión, baja correlación con intención de compra

**Métricas de conversión:**
Define el KPI de negocio que quieres mover: visitas a la web, registros, suscriptores, leads. Crea URLs con UTM parameters para cada pieza y mide el recorrido completo desde el contenido hasta la acción.

## Bloque 5: El calendario de branded content

**Planificación trimestral:**
Crea un calendario donde cada trimestre tiene un tema editorial central, 2-3 formatos diferentes y una mezcla de contenido propio y distribución en medios externos. La coherencia temática construye autoridad más rápido que el contenido disperso.

**Frecuencia recomendada para una marca pequeña/mediana:**
- 1 pieza de largo formato (artículo nativo, episodio de podcast, vídeo) al mes
- 2-4 piezas de formato corto (posts de redes sociales, fragmentos del contenido largo) por semana
- 1 patrocinio de newsletter o podcast por trimestre (para construir audiencia nueva)

Dame el sector de tu marca, el perfil de tu audiencia y los 2-3 temas donde tu marca tiene autoridad real. Construyo la estrategia de branded content del próximo trimestre con los formatos, los medios específicos donde distribuirlo y las métricas de éxito para cada pieza.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar una estrategia de branded content y native advertising que integre la marca en contenido que la audiencia quiera consumir y compartir.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Construir CLI tools profesionales',
                'description'      => 'Crea herramientas de línea de comandos con Node.js o Go que los developers adoptan y recomiendan: UX de terminal, distribución y documentación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un developer con experiencia construyendo y publicando CLI tools que son usadas por miles de developers. Voy a describir la herramienta que quiero crear y necesito orientación sobre el diseño de la experiencia de usuario en terminal, la implementación y la estrategia de distribución.

## Por qué las CLI tools son el producto más poderoso para developers

Una buena CLI tool tiene una ventaja que ningún otro tipo de software tiene: los developers la incorporan a sus flujos de trabajo diarios y la comparten activamente con otros developers. Cuando un CLI es buena, el boca a boca en comunidades técnicas es brutal.

El desafío es que los developers son los usuarios más exigentes del planeta. Una CLI mediocre con mala UX de terminal se abandona en la primera sesión, independientemente de la funcionalidad.

## Parte 1: Diseño de la UX de terminal

**Los principios de una buena UX de CLI:**

**1. Sigue las convenciones POSIX y Unix:**
Los developers tienen expectativas muy concretas sobre cómo deben comportarse los comandos. Violalas y perderás usuarios inmediatamente.

Convenciones que debes respetar:
- Flags cortos con `-` (un guion, una letra): `-v`, `-h`, `-f`
- Flags largos con `--` (dos guiones, palabra completa): `--verbose`, `--help`, `--file`
- `--help` o `-h` siempre disponible en todos los subcomandos
- `--version` o `-V` en el comando raíz
- Exit codes estándar: 0 para éxito, 1 para error general, 2 para uso incorrecto
- Los errores van a stderr, la salida normal va a stdout

**2. Output que respeta el terminal:**
- Usa colores para mejorar la legibilidad, no para decorar
- Detecta si el output va a un pipe o a un terminal y ajusta el formato
- En pipes (cuando hay `|`), no incluyas spinners ni formateo con colores
- Los spinners y progress bars solo cuando hay operaciones que tardan > 1 segundo

**3. Jerarquía de comandos bien pensada:**

```bash
# Buena jerarquía: verbo + sustantivo
mi-cli project create
mi-cli project list
mi-cli project delete

# Mala jerarquía: inconsistente, difícil de recordar
mi-cli create-project
mi-cli listprojects
mi-cli rm project
```

**4. Output estructurado para automatización:**
Siempre ofrece `--json` o `--output json` para que los developers puedan parsear tu output en scripts. El output bonito para humanos es incompatible con el parsing automático.

```bash
mi-cli list --json | jq '.[] | select(.status == "active")'
```

## Parte 2: Implementación en Node.js

**Stack recomendado para CLI en Node.js:**

```json
{
  "dependencies": {
    "commander": "^11.0.0",     // Parsing de comandos y flags
    "chalk": "^5.0.0",          // Colores en terminal
    "ora": "^7.0.0",            // Spinners
    "inquirer": "^9.0.0",       // Prompts interactivos
    "execa": "^8.0.0",          // Ejecutar procesos externos
    "conf": "^12.0.0",          // Configuración persistente del usuario
    "update-notifier": "^7.0.0" // Notificar nuevas versiones
  }
}
```

**Estructura de proyecto recomendada:**
```
mi-cli/
├── bin/
│   └── mi-cli.js        # Entry point ejecutable
├── src/
│   ├── commands/        # Un archivo por comando
│   │   ├── create.js
│   │   └── list.js
│   ├── utils/           # Funciones compartidas
│   │   ├── api.js
│   │   └── config.js
│   └── index.js         # Registro de comandos
├── package.json
└── README.md
```

**Template básico con Commander:**
```javascript
#!/usr/bin/env node
import { Command } from 'commander';
import { createCommand } from './commands/create.js';

const program = new Command();

program
  .name('mi-cli')
  .description('Descripción concisa de qué hace')
  .version('1.0.0');

program.addCommand(createCommand());

program.parse();
```

**Gestión de errores profesional:**
```javascript
// Siempre muestra mensajes de error claros y accionables
try {
  await operation();
} catch (error) {
  console.error(chalk.red('Error:'), error.message);
  // Si hay una solución obvia, dísela al usuario
  console.error(chalk.dim('Tip: ejecuta `mi-cli config --reset` si el problema persiste'));
  process.exit(1);
}
```

## Parte 3: Implementación en Go

**Go para CLIs de alto rendimiento o distribución como binario único:**

Go es la opción preferida cuando:
- Necesitas un binario único sin dependencias (para distribución más simple)
- El rendimiento es crítico
- Quieres distribución cross-platform sin requerir runtime

**Stack Go recomendado:**
```go
// cobra — el framework de CLI más usado en el ecosistema Go
// (kubectl, helm, gh CLI, hugo todos usan cobra)
import "github.com/spf13/cobra"
import "github.com/spf13/viper"  // Para configuración
```

**Estructura de proyecto Go para CLI:**
```
mi-cli/
├── cmd/
│   ├── root.go          // Comando raíz
│   ├── create.go        // Subcomando create
│   └── list.go          // Subcomando list
├── internal/
│   ├── api/             // Lógica de negocio
│   └── config/          // Gestión de configuración
├── main.go
└── go.mod
```

## Parte 4: Configuración y autenticación

**Gestión de configuración para el usuario:**
Las CLIs que requieren configuración (tokens de API, URLs de servidor, preferencias) deben guardar esa configuración en el directorio de usuario:

```
~/.config/mi-cli/config.json   # Linux/macOS
%APPDATA%\mi-cli\config.json   # Windows
```

**Patrón de autenticación recomendado:**
```bash
mi-cli auth login          # Abre el navegador con OAuth o pide credenciales
mi-cli auth logout         # Elimina las credenciales guardadas
mi-cli auth status         # Muestra el estado de autenticación actual
```

Nunca pidas credenciales como argumentos de comandos (quedan en el historial del terminal). Usa prompts interactivos o variables de entorno.

## Parte 5: Distribución y packaging

**Las 4 opciones de distribución:**

| Canal | Audiencia | Esfuerzo | Mejor para |
|-------|---------|---------|-----------|
| npm | Developers Node.js | Bajo | Tools que requieren Node.js |
| Homebrew | Developers macOS/Linux | Medio | Binarios independientes |
| Releases de GitHub | Todos | Bajo | Binarios Go/Rust |
| Scoop / Chocolatey | Developers Windows | Medio | Audiencia Windows |

**Publicación en npm:**
```json
{
  "bin": {
    "mi-cli": "./bin/mi-cli.js"
  },
  "engines": {
    "node": ">=18.0.0"
  }
}
```

**Instalación sin fricción:**
El comando de instalación debe caber en una línea y funcionar en el primer intento. Testea en una máquina limpia antes de publicar.

## Parte 6: Documentación que los developers realmente leen

**El README de una CLI exitosa tiene:**
1. Una frase que explica qué hace y por qué importa
2. El comando de instalación (una línea)
3. Un ejemplo de uso real con output esperado
4. La referencia completa de comandos y flags (autogenerada desde el código si es posible)

Dame la idea de tu CLI, el stack que prefieres (Node.js o Go) y los casos de uso principales. Diseño la arquitectura de comandos, el flujo de UX de terminal y el plan de distribución adaptados a tu herramienta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar e implementar una CLI tool profesional con buena UX de terminal, arquitectura limpia y estrategia de distribución que los developers adopten y recomienden.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño UX para usuarios mayores',
                'description'      => 'UX para la tercera edad: tipografía grande, alto contraste, simplificación y accesibilidad cognitiva en apps y webs.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en UX con experiencia en diseño inclusivo y accesibilidad para usuarios mayores de 60 años. Voy a describir el producto digital que estoy diseñando y necesito orientación para crear una experiencia que sea genuinamente usable para este segmento sin condescender ni infantilizar.

## Por qué el diseño para usuarios mayores beneficia a todos

El diseño para usuarios mayores aplica los mismos principios de claridad, simplicidad y accesibilidad que mejoran la experiencia para todos los usuarios. Un texto más legible, un contraste más alto y una jerarquía más clara no son concesiones: son simplemente mejor diseño.

El contexto de uso también importa: los usuarios mayores a menudo usan sus dispositivos con luz brillante (al aire libre), con dedos que tienen menos precisión táctil y con menos familiaridad con convenciones de interfaz que los diseñadores asumen como universales.

## Dimensión 1: Tipografía y legibilidad

**Tamaño de fuente mínimo:**
- Cuerpo de texto: 16px es el mínimo absoluto. 18-20px es el tamaño recomendado para el segmento mayor.
- Labels de formularios: 16px mínimo, idealmente 18px
- Texto de ayuda y notas al pie: no usar tipografía inferior a 14px; si el texto es importante, no lo pongas en 12px creyendo que como es "secundario" no importa

**Interlineado (line-height):**
El interlineado estándar de 1.4 se queda corto para texto de lectura. Usa 1.6-1.8 para textos que el usuario debe leer, especialmente instrucciones, formularios y mensajes importantes.

**Familias tipográficas:**
Usa fuentes humanistas con clara diferenciación entre caracteres similares:
- ✅ Atkinson Hyperlegible (diseñada específicamente para baja visión)
- ✅ Verdana, Georgia (alta legibilidad en pantalla)
- ✅ Plus Jakarta Sans, Inter (modernas y legibles)
- ❌ Fuentes decorativas, manuscritas o con mucha letra cursiva
- ❌ Fuentes con I (mayúscula), l (ele minúscula) y 1 (uno) idénticas

**Negrita y énfasis:**
El énfasis debe ser visible. Un peso 600-700 sobre texto regular 400 es claramente diferente. La cursiva es menos visible para usuarios con problemas de visión.

## Dimensión 2: Color y contraste

**Ratios de contraste mínimos (WCAG AA):**
- Texto normal (< 18pt): ratio 4.5:1
- Texto grande (≥ 18pt o 14pt bold): ratio 3:1
- Elementos de interfaz (botones, inputs, iconos funcionales): ratio 3:1

**Recomendación para usuarios mayores:**
Apunta a WCAG AAA siempre que sea posible: 7:1 para texto normal, 4.5:1 para texto grande. Los problemas de visión relacionados con la edad hacen que el contraste mínimo de AA sea insuficiente en muchas situaciones.

**Colores a evitar:**
- Rojo sobre verde o viceversa (daltonismo)
- Azul claro sobre blanco (bajo contraste, difícil para cataratas)
- Texto en color sobre fondo en color (siempre prefiere negro/blanco sobre color)
- Gradientes de color para comunicar información (usa también etiquetas de texto)

**Los colores no pueden ser el único indicador:**
Si usas rojo para indicar un error, añade también un icono y texto explicativo. El 8% de los hombres tienen algún tipo de daltonismo.

## Dimensión 3: Tamaño de los elementos táctiles

**Áreas de toque mínimas:**
- Apple Human Interface Guidelines: 44×44pt mínimo
- Google Material Design: 48×48dp mínimo
- Para usuarios mayores: 56×56px o más, con separación entre elementos táctiles de al menos 8-12px

**Errores frecuentes:**
- Botones demasiado pequeños o muy juntos (genera toques accidentales)
- Links dentro de texto con área de toque insuficiente
- Checkboxes y radio buttons de 16×16px (el target real debe ser mayor que el elemento visible)
- Sliders sin alternativa de input numérico

**Inputs de formulario:**
Los campos de formulario deben tener al menos 48px de altura y label claramente asociada (encima del campo, no como placeholder que desaparece al escribir).

## Dimensión 4: Jerarquía visual y simplicidad cognitiva

**Reduce la carga cognitiva:**
Los usuarios mayores no tienen menos inteligencia, pero procesan más lentamente la información nueva y tienen menos memoria de trabajo disponible para interfaces nuevas.

**Principios de simplificación:**
1. Una acción principal por pantalla (no 5 cosas que hacer a la vez)
2. Jerarquía visual clara: qué es lo más importante está visualmente destacado, no hay que buscarlo
3. Etiquetas en lugar de solo iconos: el icono de la casa puede ser intuitivo, el de configuración puede no serlo
4. Confirmaciones antes de acciones destructivas: "¿Seguro que quieres eliminar?" con un botón "Cancelar" que no sea difícil de encontrar
5. Estado del sistema visible: el usuario siempre sabe dónde está y qué ha pasado

**Navegación:**
- Breadcrumbs visibles para saber dónde están
- Botón "volver" siempre disponible y claramente visible
- No uses gestos ambiguos (pull-to-refresh, swipe to delete) sin alternativa visible
- El menú hamburguesa es especialmente confuso para este segmento; prefiere tabs visibles o menú expandido

## Dimensión 5: Formularios y entrada de datos

**Campos de formulario accesibles:**
| Elemento | Recomendación |
|---------|--------------|
| Label | Encima del campo, siempre visible (no como placeholder) |
| Placeholder | Solo como hint adicional, no como label |
| Mensajes de error | En rojo + icono + texto explicativo, debajo del campo |
| Autocompletado | Actívalo siempre que sea posible |
| Validación | En tiempo real, no solo al enviar |
| Formato de fecha | Usa campos separados día/mes/año, no date pickers complejos |
| Contraseñas | Ofrece siempre "mostrar contraseña" |

**Lo que más frustra a los usuarios mayores:**
- Timeout de sesión sin advertencia previa
- Formularios que se resetean al volver con el botón "atrás"
- Captchas complejos
- Scroll horizontal o contenido que se sale de la pantalla
- Actualizaciones automáticas de página mientras están leyendo

## Test con usuarios reales

Ninguna guía de diseño sustituye al test con usuarios reales del segmento objetivo. Si estás diseñando para personas de 65+, testa con personas de 65+, no con tus compañeros de 30.

**Protocolo de test específico para usuarios mayores:**
- Explica con más tiempo que tendrán el prototipo para explorar, no hay respuestas correctas
- No uses pantallas compartidas al inicio: que el usuario toque el dispositivo directamente
- Presta especial atención a momentos de duda o frustración, no solo a si completan la tarea
- Pregunta después: "¿Qué habrías hecho en este punto si no hubiera nadie mirando?"

Comparte el producto que estás diseñando y el flujo específico que quieres revisar. Hago un análisis de accesibilidad para usuarios mayores y propongo los cambios prioritarios con su justificación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar o revisar la experiencia de usuario de un producto digital para hacerla genuinamente accesible y usable para personas mayores de 60 años.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Construir el equipo de ventas desde cero',
                'description'      => 'El orden correcto para contratar: primero AE, SDR o CS manager, y cómo estructurar el equipo que va a escalar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Ventas con experiencia construyendo equipos comerciales desde cero en empresas B2B que pasan de 0 a 5M y de 5M a 20M ARR. Mi empresa está en una etapa temprana y necesito entender en qué orden contratar, qué perfiles buscar y cómo estructurar el equipo para que escale sin romperse.

## El error más frecuente al construir un equipo de ventas

La mayoría de los founders contratan SDRs (outbound) antes de entender qué funciona en su proceso de ventas. El resultado: SDRs generando leads que los AEs no saben cerrar, o AEs que generan su propio pipeline y no tienen tiempo para cerrarlo.

El orden correcto es: primero entiende cómo se cierra un deal, luego contrata quien lo cierra bien, luego contrata quien genera el pipeline para los AEs.

## Fase 1: El founder como primer vendedor (0-1M ARR)

**Por qué el founder debe cerrar los primeros 10-20 deals:**
- Aprende de primera mano qué objeciones existen y cómo resolverlas
- Construye el ICP real, no el teórico del business plan
- Entiende el ciclo de venta real y el perfil del comprador que cierra
- Crea los materiales de venta basados en lo que funciona de verdad

**Lo que el founder necesita documentar antes de contratar el primer AE:**
1. Proceso de ventas reproducible: 5-8 etapas con criterios claros de avance
2. Las 5 objeciones más frecuentes y las respuestas que funcionan
3. El ICP validado: atributos de los clientes que más rápido se cierran y mejores resultados tienen
4. El pitch que funciona: no el teórico, el que realmente cierra

Sin esto documentado, el primer AE tendrá que redescubrirlo todo y perderás 6-12 meses.

## Fase 2: Primera contratación comercial (1-3M ARR)

**¿Quién contratas primero: AE o SDR?**

**Contrata AE primero si:**
- El proceso de ventas ya está validado y documentado
- El pipeline actual (inbound + founder) excede la capacidad de cerrar
- El ciclo de venta es complejo (> 30 días) y requiere capacidad senior

**Contrata SDR primero si:**
- El pipeline es el cuello de botella, no el cierre
- El producto se vende con demos cortas (< 14 días de ciclo)
- El founder ya no tiene tiempo para prospectar Y para cerrar

**En la mayoría de los casos:** el primer AE viene antes que el primer SDR.

**Perfil del primer AE:**
- Ha vendido en un entorno similar (mismo tamaño de deal, mismo mercado)
- Es capaz de generar su propio pipeline en los primeros meses (no puede depender de que alguien se lo dé)
- No viene de una empresa grande donde tenía todo el proceso definido — necesita un perfil que construya, no que ejecute un proceso ya hecho
- Motivación intrínseca por la venta, no solo por el dinero

**Compensación del primer AE:**
El primer AE en una startup debe tener un OTE (On Target Earnings) mayor que el mercado para compensar el riesgo. Si el mercado paga 80K de base + 40K variable, tu primer AE debería ver 90-100K de base + 50-60K variable.

## Fase 3: Construcción del equipo (3-10M ARR)

**Orden de contratación recomendado:**

**3M ARR:**
- 1-2 AEs con track record probado
- Founder todavía involucrado en deals estratégicos

**5M ARR:**
- 3-4 AEs (empieza a ser necesario un Head of Sales)
- 1 SDR (si el inbound no es suficiente para cubrir el pipeline de todos los AEs)
- Head of Sales (tu primera contratación de liderazgo de ventas)

**7-10M ARR:**
- Head of Sales + 5-8 AEs + 2-3 SDRs
- 1 Sales Engineer o presales si el producto es técnico
- 1 Revenue Operations para los sistemas y datos

**Por qué el Head of Sales es crítico en esta fase:**
El founder no puede seguir siendo el VP de Ventas y el CEO al mismo tiempo a partir de cierto punto. El Head of Sales debe: gestionar el equipo, mejorar el proceso de ventas, ser el escalón para los deals complejos y reportar métricas al board. No debe: seguir cerrando deals propios como si fuera un AE senior.

## Fase 4: Estructuras de equipo y especialización (10M+ ARR)

**Dos modelos de especialización:**

**Modelo Pod (especialización por segmento):**
Cada pod atiende un segmento de mercado (SMB, Mid Market, Enterprise) con su propio SDR, AE y CSM. Los pods son más autónomos y desarrollan expertise de segmento.

**Modelo Funcional (especialización por función):**
Todos los SDRs en un equipo, todos los AEs en otro, todos los CSMs en otro. Más fácil de gestionar en cada función, menos coordinación cross-funcional.

**Para la mayoría de las empresas hasta 50M ARR:** el modelo pod por segmento es más eficiente.

## Proceso de entrevista para vendedores

**Las preguntas que realmente discriminan:**
1. "Cuéntame tu mayor deal. ¿Cómo lo encontraste, cómo lo trabajaste y qué papel tuviste tú vs. tu equipo?"
2. "¿Cuál fue el deal que más costó cerrar y qué aprendiste de él?"
3. "¿Cómo gestionas tu pipeline? Enséñame cómo funciona tu CRM actualmente."
4. "¿Cuándo fue la última vez que generaste tus propios leads? ¿Cómo lo hiciste?"
5. "¿Qué pregunta de un comprador te puso en dificultades la última vez?"

**El role play:**
Después de las preguntas teóricas, haz un role play de 15 minutos donde el candidato te vende tu propio producto (lo habrás explicado antes). Observa: ¿hace preguntas antes de hablar?, ¿escucha las objeciones o las ignora?, ¿cierra al final de la conversación?

## Estructura de compensación por etapa

| Etapa | Base | Variable | Ratio |
|-------|------|---------|-------|
| SDR junior | 28-35K | 10-15K | 70/30 |
| SDR senior | 35-45K | 15-20K | 70/30 |
| AE mid-market | 50-65K | 50-65K | 50/50 |
| AE enterprise | 65-80K | 65-80K | 50/50 |
| Head of Sales | 80-100K | 40-60K | 65/35 |

Adapta estas cifras al mercado local y al tamaño de deal de tu empresa.

## Entregable: Plan de contratación para mi caso

Comparte: ARR actual, modelo de negocio, ticket medio, ciclo de venta y cómo estás generando el pipeline ahora. Diseño el plan de contratación para los próximos 18 meses con el orden correcto, los perfiles específicos y la estructura de compensación para tu mercado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el plan de contratación del equipo de ventas en el orden correcto según la etapa de la empresa, con perfiles, compensaciones y estructura de equipo que escale.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'User research con IA',
                'description'      => 'Usa Claude para analizar entrevistas de usuario, extraer patrones e insights y generar síntesis en horas en vez de semanas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un UX researcher senior con experiencia usando IA para acelerar el análisis de research sin perder la profundidad cualitativa que hace el research útil para los equipos de producto. Voy a compartirte transcripciones de entrevistas de usuario y necesito que me ayudes a extraer insights accionables de forma eficiente.

## El problema del research que no llega al equipo

El research cualitativo tiene un problema de escala: una investigación bien hecha con 8-12 usuarios puede generar 10-15 horas de transcripciones. Analizarlas manualmente para extraer patrones, quotes relevantes y insights puede llevar semanas de trabajo. Para cuando el análisis está listo, el equipo de producto ya tomó decisiones sin los datos.

La IA no reemplaza al investigador: reemplaza el trabajo mecánico de lectura repetida, categorización de notas y síntesis inicial, liberando tiempo para el pensamiento crítico que solo el investigador puede aportar.

## Fase 1: Preparación del material

**Antes de empezar el análisis con IA, necesito:**

**Transcripciones de calidad:**
- Texto plano o markdown, no PDFs con formato complejo
- Speaker labels claros: "Usuario:" y "Entrevistador:" al inicio de cada intervención
- Timestamps opcionales pero útiles para volver a momentos específicos
- Si tienes notas de campo adicionales, inclúyelas como documento separado

**El brief del análisis:**
Claude necesita saber qué buscar para ser útil:
1. ¿Qué pregunta de investigación estás tratando de responder?
2. ¿Cuál es el contexto del producto y el usuario?
3. ¿Qué decisiones de producto se van a tomar con este research?
4. ¿Hay hipótesis específicas que quieres validar o refutar?

Sin este contexto, el análisis será genérico. Con él, será específico y accionable.

## Fase 2: Análisis de una sola entrevista

**Prompt para el análisis individual:**
```
Eres un UX researcher experto analizando una entrevista de usuario.

CONTEXTO:
[Descripción del producto y el usuario]
[Pregunta de investigación]
[Decisiones de producto que dependen de este research]

ENTREVISTA:
[Texto completo de la transcripción]

TAREA:
1. Identifica los 5-7 momentos más significativos de la entrevista con la cita exacta y por qué es significativa
2. Extrae los pain points mencionados o sugeridos, distinguiendo entre los explícitos (el usuario lo dice directamente) y los latentes (inferidos de comportamiento o lenguaje)
3. Identifica los trabajos que el usuario intenta hacer (Jobs to Be Done) en relación con [área de producto]
4. Nota cualquier comportamiento o quote inesperado que contradiga las hipótesis
5. Proporciona una síntesis de 3-4 oraciones de esta entrevista específica
```

## Fase 3: Síntesis cross-entrevistas

**Prompt para el análisis comparativo:**
```
Has analizado [N] entrevistas sobre [tema]. Ahora necesito una síntesis que identifique patrones across todas las entrevistas.

SÍNTESIS DE CADA ENTREVISTA:
[Pega las síntesis individuales de cada entrevista]

TAREA:
1. Identifica los 3-5 patrones que aparecen en al menos el 60% de las entrevistas, con la cita más representativa de cada patrón
2. Señala las variaciones importantes: ¿hay grupos de usuarios con perspectivas muy diferentes? ¿qué los diferencia?
3. Identifica los pain points ordenados por frecuencia e intensidad
4. Lista las oportunidades de mejora más evidentes que emergen del análisis
5. Señala qué hipótesis del equipo se han validado y cuáles se han refutado
6. Lista las preguntas que quedan abiertas y que justificarían research adicional
```

## Fase 4: Generación de entregables de research

**Informe ejecutivo (para el liderazgo):**
```
Crea un resumen ejecutivo de una página del research sobre [tema] para una audiencia de product manager y CEO que no van a leer el informe completo.

Incluye:
- La pregunta que respondemos
- Los 3 hallazgos más importantes con evidencia cuantificable cuando sea posible (X de Y usuarios mencionaron...)
- Las 2-3 recomendaciones más concretas para el producto
- Las decisiones que no podemos tomar todavía y por qué

Evita el jargón de UX, escribe para alguien que no sabe qué es "Jobs to Be Done".
```

**How Might We (para el equipo de diseño):**
```
Basándote en los pain points identificados, genera 10-15 preguntas "How Might We" que el equipo de diseño pueda usar como punto de partida para ideación.

Las preguntas deben:
- Empezar con "¿Cómo podríamos..."
- Ser suficientemente específicas para guiar el diseño pero lo bastante abiertas para dejar espacio a la creatividad
- Estar directamente ancladas en los hallazgos del research, no ser genéricas
```

**User stories validadas por research:**
```
A partir de los Jobs to Be Done y pain points identificados, genera user stories en formato "Como [usuario], quiero [acción], para [beneficio]" que estén directamente respaldadas por el research.

Para cada user story, indica:
- El quote o comportamiento observado que la respalda
- El nivel de evidencia (cuántos usuarios lo mencionaron)
- La prioridad sugerida (alta/media/baja) basada en frecuencia e intensidad
```

## Fase 5: Validación de las síntesis

**El paso que los investigadores no pueden saltarse:**

La IA puede extraer patrones que no existen (hallazgos inventados que suenan plausibles) o perder matices importantes del lenguaje no verbal o tonal que el investigador sí captó en la entrevista.

**Protocolo de validación:**
1. Lee las 3-5 quotes más importantes de cada síntesis en la transcripción original — verifica que el contexto en que se dijo coincide con cómo lo ha interpretado la IA
2. Compara los patrones identificados con tus notas de campo (lo que sentiste en el momento de la entrevista)
3. Cualquier insight que no puedas anclar en al menos 2 quotes diferentes de entrevistas distintas no es un patrón: es una anécdota
4. Añade tus observaciones sobre tono, lenguaje corporal y contexto que la IA no puede capturar

## Limitaciones importantes

- La IA no puede reemplazar la escucha activa de una entrevista en tiempo real
- No puede capturar señales no verbales, pausas, incomodidad o cambios de tono
- Puede sobre-representar lo que los usuarios dicen explícitamente vs. lo que hacen realmente
- Los sesgos de la IA pueden reforzar hipótesis ya existentes del equipo

El investigador sigue siendo responsable de la interpretación final y de comunicar la incertidumbre apropiada sobre los hallazgos.

Comparte las transcripciones o el brief del research y empezamos el análisis.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Analizar transcripciones de entrevistas de usuario con IA para extraer patrones, insights y entregables de research en horas en lugar de semanas, sin perder rigor cualitativo.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Trabajo en la era post-pandemia',
                'description'      => 'Políticas de presencia, gestión del espacio de oficina y la nueva relación empleado-empresa que ha llegado para quedarse.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en future of work y organizational design que ha asesorado a empresas en la transición post-pandemia hacia modelos híbridos y remotos. Ayúdame a diseñar la política de trabajo y el modelo organizativo que funcione para mi empresa en el contexto actual, donde las expectativas de los empleados han cambiado permanentemente.

## El nuevo contrato empleado-empresa

La pandemia no cambió lo que los empleados querían del trabajo: amplificó preferencias que ya existían y aceleró tendencias que habrían tardado 10-15 años en llegar. Los empleados siempre han querido autonomía, confianza y trabajo con propósito. Lo que cambió es que ahora saben que es posible.

Las empresas que ganan la guerra del talento en este contexto no son las que ofrecen ping-pong y snacks: son las que ofrecen autonomía real, trabajo con impacto claro y gestión por resultados, no por presencia.

## Bloque 1: Los modelos de trabajo disponibles

**Modelo 1: Presencial**
Todo el equipo en la oficina el mismo horario. Justificable cuando:
- La naturaleza del trabajo requiere colaboración física constante (laboratorio, manufactura, retail)
- La empresa está en etapa muy temprana y la densidad del equipo es una ventaja competitiva
- El equipo es pequeño y la cultura se construye más rápido en persona

**Modelo 2: Híbrido flexible**
Los empleados eligen cuándo vienen a la oficina (mínimo o sin mínimo). El modelo con más adopción y más variantes. Funciona bien cuando:
- El trabajo es mayoritariamente individual o se puede hacer en video
- La plantilla está distribuida geográficamente
- El employer brand se beneficia de la flexibilidad como diferenciador de talento

**Modelo 3: Híbrido estructurado**
Días específicos en la oficina (ej: martes y miércoles obligatorios para todo el equipo). Combina la colaboración in-person con la flexibilidad. Es el modelo que más grandes empresas están adoptando (Amazon, Meta, Google con 3 días).

**Modelo 4: Remote-first**
La oficina existe pero es opcional. Los procesos, la comunicación y la cultura están diseñados para funcionar sin presencia física. La decisión de venir a la oficina es siempre del empleado.

**Modelo 5: Full remote**
Sin oficina, equipo distribuido globalmente. Requiere procesos de comunicación asíncrona, contratación global y gestión de diferencias horarias.

**¿Cómo elegir el modelo correcto?**
No hay un modelo universalmente correcto. La decisión debe depender de: el tipo de trabajo (colaborativo vs. individual), la distribución geográfica del equipo, la etapa de la empresa (early stage vs. maduro), el perfil del talento que necesitas atraer y los competidores por ese talento.

## Bloque 2: Diseño de la política de trabajo

**Elementos de una política de trabajo remoto/híbrido que funciona:**

**1. Horas de superposición (overlap hours):**
Define las horas durante las cuales se espera que todos estén disponibles para reuniones y comunicación síncrona. Ejemplo: 10h-14h CET. Fuera de esas horas, la asincronía es la norma.

**2. Expectativas de comunicación:**
- Canal de urgente vs. no urgente: Slack/WhatsApp para urgente, email para no urgente
- Tiempo de respuesta esperado según el canal (email en 24h laborables, Slack en 2-4h en horas de overlap)
- Cuándo una reunión es necesaria vs. cuándo un documento escrito es suficiente

**3. Reuniones remotas: reglas básicas:**
- Si uno está remoto, todos están remotos (no hay ciudadanos de primera y segunda clase)
- Agenda con mínimo 24h de antelación
- Notas escritas y decisiones documentadas al final de cada reunión
- No meeting days (ej: Viernes sin reuniones) para trabajo profundo

**4. La oficina como herramienta, no como norma:**
En los modelos híbridos, la oficina debe justificarse por el tipo de trabajo que se hace en ella, no por la presencia en sí. ¿Para qué es mejor la oficina? Onboarding de nuevos empleados, trabajo creativo en equipo, decisiones estratégicas que se benefician de la sala, cultura y vínculos sociales.

## Bloque 3: Gestión del espacio de oficina

**El espacio de oficina en el modelo híbrido:**

Si el equipo viene 2-3 días a la semana, necesitas menos espacio pero diferente tipo de espacio:
- Menos puestos individuales asignados (hot desking o desk booking)
- Más salas de reunión y espacios de colaboración
- Más espacios informales para conexión espontánea
- Menos espacio "de trabajo silencioso" (para eso los empleados van a casa)

**Errores frecuentes al rediseñar la oficina:**
- Mantener el mismo número de puestos con la expectativa de que siempre estarán ocupados (desperdicio de espacio y coste)
- Transformar toda la oficina en open space eliminando las salas (el trabajo en equipo concentrado necesita privacidad)
- No tener suficiente tecnología de vídeo de calidad (la asimetría entre los que están en sala y los remotos es el mayor problema de las reuniones híbridas)

## Bloque 4: El nuevo rol del manager en equipos híbridos

**Gestión por resultados vs. gestión por presencia:**

El manager de equipos híbridos no puede seguir midiendo el rendimiento por las horas visibles. Debe:
1. Definir OKRs o metas claras para cada persona y revisarlos regularmente
2. Confiar en el criterio de los empleados para organizarse
3. Detectar bloqueos y resolverlos, no controlar el proceso
4. Mantener conversaciones 1:1 regulares (mínimo cada 2 semanas) para estar al tanto del progreso y el bienestar

**Las 3 trampas del manager remoto:**
- Micromanagement por inseguridad: pedir updates constantes que no son necesarios, programar más reuniones para "estar al tanto"
- Favoritismo hacia los presenciales: inconscientemente asignar los mejores proyectos y ascensos a los que están en la oficina más días
- Ignorar la desconexión social del equipo: no crear oportunidades de conexión no laboral para el equipo que no coincide en la oficina

## Bloque 5: Cultura en modelos distribuidos

**Los 5 rituales que construyen cultura en equipos híbridos:**
1. All-hands mensual con participación activa (no solo escucha) de todos
2. Onboarding con semana presencial en la oficina central para todos los nuevos
3. Team offsites semestrales (2-3 días fuera) para proyectos estratégicos y conexión
4. Canal de conversación informal en Slack/Teams donde la gente comparte cosas no laborales
5. Celebración explícita de logros del equipo, remota e in-person simultáneamente

Cuéntame el tamaño de tu empresa, el tipo de trabajo que hace tu equipo y el modelo que tienes ahora mismo. Diseño la política de trabajo híbrido y las recomendaciones de espacio adaptadas a tu situación específica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la política de trabajo híbrido o remoto que funcione para el equipo actual, con reglas de comunicación, uso de la oficina y modelo de gestión adaptado al contexto post-pandemia.',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Planificación fiscal a largo plazo',
                'description'      => 'Estructura la empresa y la retribución para minimizar legalmente la carga fiscal durante los próximos 5-10 años.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor fiscal estratégico especializado en planificación tributaria para empresarios y directivos en España, con enfoque en decisiones que optimizan la carga fiscal a largo plazo de forma completamente legal. Necesito entender las palancas fiscales más importantes para estructurar correctamente mi empresa y mis ingresos durante los próximos 5-10 años.

## Por qué la planificación fiscal a largo plazo es diferente a la optimización anual

La mayoría de las empresas optimizan la fiscalidad año a año: buscan deducciones antes de que cierre el ejercicio, deciden si aplazar o adelantar facturas, etc. Esta optimización táctica es útil pero limitada.

La planificación fiscal estratégica a 5-10 años trabaja sobre decisiones estructurales que crean ventajas fiscales acumuladas: cómo está constituida la empresa, cómo se retribuye a los socios, dónde se acumula el patrimonio y cómo se planifica la sucesión o salida. Estas decisiones valen mucho más que cualquier deducción puntual.

## Dimensión 1: Estructura societaria

**La elección del vehículo jurídico tiene consecuencias fiscales a 10 años:**

**Autónomo vs. SL:**
- El autónomo tributa toda la renta en IRPF (tipo marginal hasta 47% en rentas altas)
- La SL tributa en IS al 25% (15% en los dos primeros años si es nueva empresa)
- La diferencia se amplifica en rentas altas y cuando el beneficio reinvertido es significativo

**Cuándo es más eficiente la SL:**
Si generas más de lo que necesitas para vivir, la SL te permite "aparcar" el beneficio sobrante al 25% en lugar de tributarlo al 40-47% en IRPF. Esa diferencia de tipo se convierte en capital que puedes reinvertir con menos fricción fiscal.

**Holding personal:**
Si tienes varias actividades o participaciones en múltiples empresas, una holding personal puede:
- Recibir dividendos de las filiales con exención del 95% (régimen de participaciones art. 21 LIS)
- Centralizar la gestión de inversiones del patrimonio empresarial
- Facilitar la transmisión de participaciones con menor carga fiscal
- Separar el patrimonio empresarial activo del patrimonio de inversión

**Cuándo tiene sentido una holding:**
Cuando tienes varias empresas, cuando el flujo de dividendos entre ellas es significativo, o cuando estás pensando en vender participaciones en el futuro (la venta de participaciones de holding sobre filiales operativas puede tener un tratamiento más eficiente).

## Dimensión 2: Planificación de la retribución a largo plazo

**Las 5 formas de retribución y su eficiencia fiscal:**

| Forma | Tipo efectivo en receptor | Deducible en empresa | Cotización SS |
|-------|--------------------------|---------------------|--------------|
| Nómina | 19-47% IRPF progresivo | Sí | Sí (empresa paga ~30%) |
| Dividendos | 19-28% (ahorro) | No (sobre beneficio neto) | No |
| Retribución en especie (seguro médico, etc.) | Beneficio en especie | Sí | No |
| Plan de pensiones empresa | Diferimiento hasta cobro | Sí | No |
| Préstamo de empresa al socio | Tipo de interés de referencia | Intereses son ingreso de empresa | No |

**Estrategia de retribución 10 años:**
El objetivo no es minimizar los impuestos de este año, sino planificar cuándo y en qué forma vas a recibir el dinero a lo largo de 10 años para suavizar los picos de IRPF y aprovechar los períodos con menor tipo marginal.

**Ejemplo de planificación de retribución:**
Si esperas vender la empresa en 5 años y tener un período de alta liquidez en ese momento, puede ser mejor acumular beneficios en la SL ahora (25% IS) y planificar la salida con estructuras que minimicen la tributación de la plusvalía.

## Dimensión 3: Deducciones y créditos fiscales estructurales

**Las deducciones con mayor impacto a largo plazo en el IS:**

**I+D+i:**
Si tu empresa desarrolla software, productos o procesos nuevos, la deducción de I+D+i puede suponer entre el 25% y el 42% del gasto en deducciones en cuota del IS. El Ministerio de Ciencia tiene un programa de informes motivados que da seguridad jurídica sobre la aplicación.

**Reserva de capitalización:**
Permite reducir la base imponible del IS en un 15% del incremento de fondos propios. Si reinviertes beneficios en lugar de distribuirlos, el IS efectivo puede bajar del 25% al 21,25%.

**Reserva de nivelación (solo PYMES):**
Permite diferir hasta el 10% de la base imponible (límite de 1M€) para compensar posibles pérdidas futuras. Es un diferimiento de impuestos, no una exención.

## Dimensión 4: Planificación de la salida o sucesión

**Las decisiones de hoy afectan a la fiscalidad de la salida:**

**Empresa familiar y reducción del 95%:**
Si se cumplen ciertos requisitos (actividad económica, participación mínima, dirección efectiva del socio), las participaciones de empresa familiar pueden transmitirse con una reducción del 95% en la base del ISD (Impuesto de Sucesiones y Donaciones). Esta reducción puede representar un ahorro de cientos de miles de euros en la transmisión generacional.

**Plusvalía en la venta de participaciones:**
Si vendes tu participación en la empresa, tributas por la plusvalía en el IRPF a tipos del 19-28%. Existen varias estructuras para diferir o reducir esta tributación:
- Reinversión en otra empresa (con condiciones específicas)
- Estructuración de la venta como earn-out para diferir pagos (y la tributación)
- Transmisión previa a holding con exención de participaciones

## Dimensión 5: Patrimonio y planificación personal

**El impuesto sobre el Patrimonio y el Impuesto de Solidaridad:**
En comunidades autónomas donde aplica (Madrid tiene bonificación del 100%), el Impuesto de Patrimonio puede ser un factor relevante para decisiones de residencia y estructura del patrimonio.

**Planes de pensiones privados:**
Los límites de aportación a planes de pensiones individuales se redujeron significativamente. La vía más eficiente actualmente son los planes de pensiones de empleo con contribución de la empresa (que tiene su propio límite más alto).

## Advertencia sobre asesoramiento

Esta información es orientativa y educativa. La planificación fiscal estratégica requiere un asesor fiscal especializado que conozca tu situación completa y trabaje con la normativa vigente actualizada. Las leyes fiscales cambian frecuentemente y lo que es eficiente hoy puede no serlo en 3 años.

Comparte tu situación actual (estructura de empresa, nivel de beneficios, patrimonio aproximado, horizonte temporal) y te oriento sobre las áreas donde la planificación estratégica tendría mayor impacto en tu caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Entender las palancas de planificación fiscal estratégica a 5-10 años para estructurar empresa y retribución de forma legal y eficiente en España.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de publicidad con influencers',
                'description'      => 'El contrato que protege a la marca y al creador, con las cláusulas que más conflicto generan en las colaboraciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho de la publicidad digital y contratos de influencer marketing con experiencia redactando y revisando contratos para marcas y creadores de contenido en España y mercados hispanohablantes. Necesito entender qué debe incluir un contrato de colaboración publicitaria con un influencer para proteger tanto a la marca como al creador.

## Por qué los contratos de influencer marketing son más complejos de lo que parecen

A primera vista parece sencillo: la marca paga, el creador publica. Pero los conflictos más frecuentes en influencer marketing vienen de aspectos que nadie acordó por escrito: quién es propietario del contenido, qué pasa si el creador tiene un escándalo, cuántas veces puede usar el contenido la marca, si el creador puede trabajar con competidores al mismo tiempo.

Un contrato bien redactado no es una señal de desconfianza: es lo que permite que la colaboración funcione sin malentendidos y que ambas partes sepan exactamente qué se acordó.

## Bloque 1: Elementos esenciales del contrato

**Identificación de las partes:**
- Nombre legal completo, NIF/CIF y domicilio de ambas partes
- Si el influencer opera como autónomo o tiene empresa (cambia la facturación y las obligaciones tributarias)
- Si hay agencia representando al influencer: detallar si la agencia firma como parte o como representante

**Objeto del contrato — la descripción exacta de lo que se acuerda:**
Esta es la cláusula que más conflictos genera cuando no está bien definida. Debe especificar:
- Número exacto de publicaciones (posts, stories, reels, vídeos)
- Plataformas concretas donde se publicará
- Formato de cada pieza (vídeo de X segundos, post estático, carrusel, etc.)
- Fecha o período de publicación
- Si hay aprobación previa de la marca antes de publicar

**Ejemplo de descripción de objeto bien redactada:**
"El CREADOR publicará en su cuenta de Instagram (@cuenta) durante el período del [fecha] al [fecha]: (i) 2 publicaciones estáticas en el feed con mínimo 3 imágenes del producto en uso, (ii) 3 stories de 15 segundos con enlace swipe-up al landing page de la campaña, y (iii) 1 Reel de 30-60 segundos mostrando el producto en contexto. Todo el contenido estará sujeto a aprobación previa de la MARCA con 72h de antelación a la publicación."

## Bloque 2: La propiedad intelectual — la cláusula más importante

**¿Quién es dueño del contenido publicado?**

Por defecto legal (Ley de Propiedad Intelectual española), el creador de una obra es su propietario. Sin cláusula específica, la marca solo tiene derecho a que se publique el contenido, pero no puede reutilizarlo, usarlo en anuncios pagados o adaptarlo.

**Las 3 opciones de acuerdo sobre PI:**

**Opción A: Cesión limitada de derechos (la más frecuente)**
El creador conserva la autoría y la propiedad del contenido. La marca obtiene una licencia de uso para determinados fines, plataformas y período de tiempo.

```
"El CREADOR cede al CONTRATANTE una licencia no exclusiva para usar el Contenido
durante [X meses/años] en las siguientes plataformas: [lista], para los siguientes
fines: [publicidad en redes sociales, newsletter, web corporativa]. El CONTRATANTE
no podrá sublicenciar, modificar sustancialmente ni usar el Contenido fuera
de los fines indicados sin autorización expresa del CREADOR."
```

**Opción B: Cesión amplia (buyout)**
La marca adquiere todos los derechos de uso del contenido sin limitación de tiempo o plataforma. Requiere una compensación significativamente mayor que la cesión limitada.

**Opción C: Uso en paid media / dark posts**
La marca quiere usar el contenido como creatividad en anuncios pagados de Meta o Google. Este es un uso específico que debe acordarse y compensarse por separado, ya que amplía exponencialmente el alcance del contenido.

**Precio del contenido vs. precio de los derechos:**
El presupuesto de la campaña orgánica y el presupuesto de paid media con ese contenido son dos cosas diferentes. Si la marca quiere usar el contenido en anuncios, es habitual añadir un "amplification fee" o negociar un buyout completo.

## Bloque 3: Obligaciones de transparencia publicitaria

**La normativa española de publicidad encubierta:**

El Código de Conducta sobre el uso de influencers en la publicidad (AUTOCONTROL + IAB Spain) establece que cualquier contenido publicitario debe identificarse claramente:

- En España: etiquetas como "#Ad", "#Publi", "#colaboraciónconX" o "Publicidad" de forma visible al inicio del contenido
- El tamaño y la colocación de la etiqueta no puede oscurecer el contenido
- No es suficiente incluirla entre muchos otros hashtags

**El contrato debe incluir:**
Una cláusula que obliga al creador a cumplir con las normas de transparencia publicitaria vigentes y que establece quién asume la responsabilidad si hay una reclamación de AUTOCONTROL por publicidad encubierta. Normalmente, si la marca dictó el contenido, la responsabilidad es compartida; si el creador tenía libertad creativa, la responsabilidad recae más en él.

## Bloque 4: Cláusulas de protección para la marca

**Cláusula de exclusividad:**
Define si el creador puede colaborar con competidores durante el período de la campaña y durante cuánto tiempo después. Sin esta cláusula, nada impide que el creador publique para un competidor directo la semana siguiente.

```
"Durante el período de la campaña y los [30/60/90] días siguientes,
el CREADOR no publicará contenido publicitario de las siguientes categorías
de producto/servicios: [categorías]. Las colaboraciones que no sean de estas
categorías son libres."
```

**Cláusula de conducta o morals clause:**
Permite a la marca rescindir el contrato y recuperar la compensación si el creador realiza acciones que dañen significativamente su reputación (comentarios ofensivos, acciones ilegales, etc.).

Esta cláusula es la que más tensión genera porque su aplicación es subjetiva. Para hacerla funcional: define con la máxima precisión posible qué comportamientos activan la cláusula, establece un período de cure (tiempo para rectificar) antes de la rescisión, y define si la rescisión es con compensación parcial o total.

**Derecho de aprobación del contenido:**
La marca tiene derecho a revisar el contenido antes de su publicación. Define el plazo de revisión (normalmente 48-72h), el número de rondas de revisión incluidas, y qué ocurre si la marca no responde en el plazo (se entiende aprobado, o el creador puede publicar).

## Bloque 5: Protecciones para el creador

**Libertad creativa:**
El contrato debe equilibrar la aprobación de la marca con el respeto al tono y estilo del creador. El contenido que suena como comunicado corporativo en lugar de la voz del creador tiene menor rendimiento para ambas partes.

**Proceso de aprobación con límite de rondas:**
El creador debe protegerse de revisiones ilimitadas. Define un máximo de 2-3 rondas de cambios incluidas; las adicionales se cobran aparte.

**Propiedad de los comentarios y engagement:**
Cualquier comentario negativo sobre el producto en la publicación del creador puede gestionarse de formas distintas. Define si el creador está obligado a responder ciertos comentarios, si puede eliminar los negativos sobre el producto y cómo se coordina la gestión de crisis.

**Pago y condiciones:**
- Porcentaje por adelantado (30-50%) al firmar el contrato
- Porcentaje al entregar el contenido aprobado
- Porcentaje al publicar (si aplica)
- Plazo de pago del último tramo: no más de 30 días desde la publicación
- Moneda, forma de pago y proceso de facturación

Comparte el tipo de colaboración que quieres contratar (tamaño del influencer, plataforma, uso previsto del contenido, presupuesto) y te ayudo a redactar las cláusulas específicas más importantes para tu caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Entender y redactar los elementos clave del contrato de colaboración con influencers que proteja a la marca y al creador, especialmente en propiedad intelectual, exclusividad y transparencia publicitaria.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Modelos de atención diferenciada en soporte',
                'description'      => 'Diseña el modelo de soporte escalonado por plan, industria y comportamiento para maximizar impacto con recursos limitados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia diseñando modelos de atención diferenciada en empresas B2B SaaS que sirven a clientes de distintos tamaños, industrias y niveles de sofisticación. Necesito diseñar un modelo de soporte que asigne los recursos del equipo de forma estratégica según el valor y el potencial de cada cliente, maximizando el impacto sin crecer el equipo proporcionalmente.

## Por qué el modelo de atención uniforme no escala

Cuando una empresa tiene 50 clientes, puede dar atención personalizada a todos. Con 500 clientes, si intenta dar el mismo nivel de atención a todos, el equipo se quema o la calidad baja para todos. La solución no es dar peor servicio: es dar el servicio correcto a cada segmento.

Un modelo de atención diferenciada no significa ignorar a los clientes pequeños: significa definir conscientemente qué tipo de atención aporta más valor a cada segmento y diseñar los canales y los recursos en consecuencia.

## Bloque 1: Segmentación de clientes

**Los criterios de segmentación que importan:**

**Criterio 1: ARR (ingresos anuales del cliente)**
Es el criterio más directo para asignar recursos: a mayor ARR, mayor potencial de retención valiosa y expansión.

Segmentación típica:
- Enterprise: > 50.000€ ARR
- Mid Market: 10.000-50.000€ ARR
- SMB: 2.000-10.000€ ARR
- Self-Serve / Long Tail: < 2.000€ ARR

**Criterio 2: Potencial de expansión**
Un cliente de 5.000€ ARR con 200 empleados tiene más potencial que uno de 5.000€ ARR con 10 empleados. El tamaño, el sector y el uso actual del producto indican hasta dónde puede crecer la cuenta.

**Criterio 3: Complejidad del caso de uso**
Algunos clientes tienen casos de uso estándar que el producto resuelve out of the box. Otros tienen integraciones complejas, regulaciones específicas o flujos de trabajo no estándar que requieren más atención. La complejidad no siempre correlaciona con el ARR.

**Criterio 4: Comportamiento de uso y salud**
Un cliente de mid market con 90% de adoption rate y NPS alto necesita menos atención reactiva que uno con 40% de adoption y que nunca habla con el equipo. El health score permite segmentar por riesgo, no solo por valor.

## Bloque 2: Diseño del modelo de atención por segmento

**Framework de 4 segmentos:**

**Tier 1 — Enterprise (atención estratégica):**
| Elemento | Detalle |
|---------|--------|
| Asignación | CSM dedicado (máximo 10-15 cuentas por CSM) |
| Contacto proactivo | Quincenal (revisión de métricas + próximos pasos) |
| Reunión de negocio | Trimestral (QBR con sponsor ejecutivo) |
| Canal preferente | Teléfono + Slack compartido + email |
| Tiempo de respuesta | < 2 horas en horario laborable |
| Servicios adicionales | Implementation support, custom training, early access |

**Tier 2 — Mid Market (atención consultiva):**
| Elemento | Detalle |
|---------|--------|
| Asignación | CSM pool (30-50 cuentas por CSM) |
| Contacto proactivo | Mensual |
| Reunión de negocio | Semestral |
| Canal preferente | Email + chat |
| Tiempo de respuesta | < 4 horas en horario laborable |
| Servicios adicionales | Onboarding asistido, webinars mensuales |

**Tier 3 — SMB (atención escalada):**
| Elemento | Detalle |
|---------|--------|
| Asignación | CSM pool (100-200 cuentas por CSM) |
| Contacto proactivo | Por triggers de comportamiento (no por calendario) |
| Reunión de negocio | Anual o según necesidad |
| Canal preferente | Email + centro de ayuda |
| Tiempo de respuesta | < 8 horas laborables |
| Servicios adicionales | Onboarding en grupo, documentación extensa |

**Tier 4 — Self-Serve (atención digital):**
| Elemento | Detalle |
|---------|--------|
| Asignación | Sin CSM asignado (CS manager digital) |
| Contacto proactivo | Emails automatizados según comportamiento |
| Reunión de negocio | No incluida (upgrade para tener acceso) |
| Canal preferente | Centro de ayuda + email |
| Tiempo de respuesta | 24h laborables |
| Servicios adicionales | Documentación completa, comunidad de usuarios |

## Bloque 3: Atención por comportamiento y health score

**El health score como input de segmentación dinámica:**

La segmentación por ARR es estática. Complementarla con un health score permite identificar qué clientes necesitan atención urgente independientemente de su tier.

**Componentes típicos de un health score:**
| Señal | Peso | Rojo | Amarillo | Verde |
|-------|------|------|----------|-------|
| Login / DAU | 30% | < 20% del equipo | 20-60% | > 60% |
| Uso de features clave | 25% | < 1 feature | 1-2 features | 3+ features |
| Tiempo desde último contacto | 20% | > 60 días | 30-60 días | < 30 días |
| NPS más reciente | 15% | 0-6 | 7-8 | 9-10 |
| Tickets abiertos sin resolver | 10% | > 3 | 1-2 | 0 |

Un cliente en rojo, independientemente de su tier, recibe atención proactiva urgente del equipo de CS.

## Bloque 4: Atención por industria

**Por qué la industria importa para el modelo de soporte:**

Algunos sectores tienen particularidades que cambian la forma en que el equipo de CS debe atenderlos:

- **Sector legal/financiero/sanitario:** mayor sensibilidad a la seguridad de datos y cumplimiento normativo. El CSM debe tener conocimiento básico de las regulaciones relevantes (GDPR, ISO, SOC2).
- **Retail/ecommerce:** picos de demanda en fechas concretas (Black Friday, campañas). El modelo de soporte debe tener capacidad de respuesta reforzada en esas fechas.
- **Manufactura/industrial:** usuarios menos digitales, mayor necesidad de onboarding presencial o telefónico, menor uso de chat y email.
- **Startups:** alta rotación de personal, necesidad de reonboarding frecuente, presupuesto limitado pero alta receptividad a nuevas funcionalidades.

## Bloque 5: Métricas del modelo de atención diferenciada

**KPIs para evaluar el modelo:**

| Métrica | Enterprise | Mid Market | SMB | Self-Serve |
|---------|-----------|-----------|-----|-----------|
| GRR (Gross Revenue Retention) | > 95% | > 90% | > 85% | > 75% |
| NRR (Net Revenue Retention) | > 115% | > 105% | > 100% | > 90% |
| CSat por tier | > 4.5/5 | > 4.2/5 | > 4.0/5 | > 3.8/5 |
| Time to value (onboarding) | < 14 días | < 21 días | < 30 días | < 45 días |
| Cuentas por CSM | 10-15 | 30-50 | 100-200 | 300+ |

**Revisión del modelo:**
El modelo debe revisarse semestralmente. Las preguntas clave: ¿la retención por tier cumple los objetivos?, ¿hay clientes en el tier equivocado?, ¿el ratio de cuentas por CSM es sostenible?

## Entregable: Modelo para mi empresa

Comparte: número de clientes activos, distribución por ARR, tamaño del equipo de CS y los principales problemas del modelo actual (¿se pierden clientes?, ¿el equipo está quemado?, ¿hay clientes que consumen demasiados recursos?). Diseño el modelo de atención diferenciada específico para tu situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un modelo de atención al cliente diferenciado por segmento, industria y health score que asigne los recursos del equipo de CS de forma estratégica para maximizar retención y crecimiento.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Colaborar con otros freelancers',
                'description'      => 'Cómo trabajar en proyectos grandes con otros independientes sin que la coordinación se convierta en un caos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelancer senior con experiencia liderando proyectos en colaboración con otros profesionales independientes y como subcontratado en redes de freelancers. Necesito diseñar una forma de trabajar con otros freelancers en proyectos grandes que sea eficiente, justa para todos y que no convierta la coordinación en un trabajo mayor que el propio proyecto.

## Por qué la colaboración entre freelancers es diferente a trabajar en equipo

En un equipo de empresa, la coordinación se da por hecha: hay reuniones, hay herramientas compartidas, hay una cultura de trabajo común. Entre freelancers independientes, cada uno tiene sus propios ritmos, herramientas, formas de trabajar y otras obligaciones con otros clientes. La coordinación hay que diseñarla explícitamente desde el principio.

El mayor error en las colaboraciones entre freelancers es asumir que todo el mundo entiende lo mismo y trabajar sin acordar cómo, cuándo y en qué formato.

## Parte 1: Antes de empezar — definir la estructura de la colaboración

**Las 4 preguntas que debes responder antes de cualquier proyecto conjunto:**

**1. ¿Quién es el interlocutor con el cliente?**
En una colaboración entre freelancers, el cliente no puede tener 3 interlocutores diferentes. Alguien debe ser el account manager del proyecto — el que habla con el cliente, gestiona las expectativas y es responsable del resultado final.

Opciones:
- El freelancer que trajo el cliente actúa como lead (y recibe una parte del honorario por la gestión)
- Se designa un lead por tipo de proyecto
- Cada freelancer gestiona su parte con el cliente directamente (solo funciona en proyectos muy modulares)

**2. ¿Cómo se divide el trabajo y el honorario?**
Esta conversación es incómoda pero esencial. Las formas más frecuentes:
- Por horas: cada uno cobra por las horas invertidas a su tarifa propia
- Por entregables: se acuerda un precio fijo por cada parte del proyecto
- Revenue sharing: se divide el honorario total según el rol (lead 40%, especialistas 60% dividido entre ellos)

**3. ¿Cuáles son los plazos internos vs. los plazos con el cliente?**
Los plazos internos deben ser 2-3 días anteriores a los del cliente. Los retrasos internos no pueden convertirse automáticamente en retrasos al cliente.

**4. ¿Qué pasa si alguien no entrega?**
Define antes de empezar: si un colaborador no entrega en el plazo acordado, ¿el lead puede contratar a alguien más para cubrir esa parte?, ¿cómo se gestiona económicamente esa situación?

## Parte 2: El contrato entre freelancers

**Por qué un contrato entre freelancers es tan importante como el contrato con el cliente:**

Las disputas entre freelancers en proyectos conjuntos son frecuentes y muy dañinas para las relaciones profesionales. Un acuerdo escrito no es desconfianza: es profesionalidad.

**Elementos mínimos del acuerdo entre colaboradores:**
1. Descripción exacta de lo que entrega cada persona
2. Plazos internos y consecuencias de no cumplirlos
3. Honorarios: importe, forma de pago y calendario
4. Quién es el responsable de cara al cliente
5. Qué pasa con la propiedad intelectual del trabajo de cada uno
6. Confidencialidad: datos del cliente, precios, procesos de trabajo
7. Cómo se resuelven los desacuerdos

**Un email con estos puntos acordados y confirmado por ambas partes es suficiente para proyectos pequeños.** Para proyectos grandes o colaboradores nuevos, un contrato formal es más seguro.

## Parte 3: Herramientas y comunicación

**El stack mínimo para una colaboración eficiente:**

| Necesidad | Herramienta gratuita | Herramienta de pago |
|---------|---------------------|-------------------|
| Comunicación | WhatsApp (urgente) + email | Slack |
| Documentos compartidos | Google Drive / Docs | Notion |
| Gestión de tareas | Trello (free) | Linear, Asana |
| Videollamadas | Google Meet (free) | Zoom |
| Contratos | Email firmado | Contractual, PandaDoc |
| Facturas | Facturae (gratis) | Holded |

**La regla de comunicación más importante:**
Define desde el primer día cuál es el canal para urgente (WhatsApp o llamada) y cuál para no urgente (email o Slack). Sin esta distinción, todo parece urgente y nadie puede desconectar.

**Frecuencia de reuniones:**
Para proyectos de 2-4 semanas: una reunión de kick-off, una revisión a mitad y una entrega final. No más. Las reuniones excesivas en colaboraciones entre freelancers destrozan la rentabilidad del proyecto.

## Parte 4: Gestión del cliente compartido

**Cuando varios freelancers trabajan para el mismo cliente:**

**El principio de una sola voz:**
El cliente siempre habla con el lead del proyecto. Cualquier cambio de alcance, feedback o petición nueva llega al lead, que lo comunica al equipo. Si cada freelancer recibe instrucciones directas del cliente de forma independiente, el proyecto se fragmenta.

**Cómo gestionar los cambios de alcance en proyectos conjuntos:**
Un cambio de alcance que afecta a una parte del proyecto puede afectar al trabajo de los demás. El lead debe comunicarlo al equipo antes de aceptarlo con el cliente, para que todos puedan confirmar el impacto en sus plazos y honorarios.

**Presentación de trabajo al cliente:**
Decide de antemano si el trabajo se presenta de forma conjunta (más profesional, más coordinación necesaria) o si cada freelancer presenta su parte directamente (más simple, pero menos cohesionado).

## Parte 5: Modelos de red de freelancers

**Más allá del proyecto puntual: construir una red de colaboradores fiables**

Un freelancer que trabaja con el mismo grupo de 3-5 colaboradores de confianza puede aspirar a proyectos mucho mayores y tiene un diferenciador enorme: puede ofrecer capacidades que no tiene solo.

**Cómo construir la red:**
1. Empieza con 1-2 freelancers de disciplinas complementarias a la tuya
2. Haz un proyecto pequeño juntos antes de comprometerte en algo grande
3. Define desde el principio las reglas de la red: tarifas mínimas, cómo se distribuye el trabajo, quién trae los clientes
4. Mantén la red "en forma" aunque no haya proyecto activo: comparte oportunidades, haz referrals mutuos

**Formalización de la red (si el volumen lo justifica):**
Algunos grupos de freelancers crean una SL conjunta o una cooperativa de trabajo cuando el volumen de proyectos conjuntos es significativo. Permite facturar de forma más eficiente y tener una marca colectiva.

**Cuándo NO colaborar:**
- Con freelancers que no has visto trabajar antes en un proyecto grande sin haber hecho algo pequeño primero
- Cuando no hay acuerdo claro sobre quién habla con el cliente
- Cuando los estilos de trabajo son muy diferentes (uno muy estructurado, otro muy improvisado)
- Cuando la confianza personal no existe todavía

Cuéntame el tipo de proyecto conjunto que estás planificando y con qué perfil de colaborador. Diseño el acuerdo de colaboración específico y el sistema de coordinación que mejor funciona para ese caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar la estructura de coordinación, acuerdos y comunicación para colaborar con otros freelancers en proyectos grandes de forma eficiente y sin conflictos.',
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
