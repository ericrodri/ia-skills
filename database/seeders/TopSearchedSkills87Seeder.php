<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills87Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing para B2B de nicho — cómo llegar a audiencias muy específicas',
                'description'      => 'Diseña una estrategia de marketing para mercados B2B de nicho donde el universo de clientes potenciales es pequeño pero el ticket es alto: posicionamiento, canales y tácticas de visibilidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marketing B2B especializado en mercados de nicho con experiencia en sectores donde el universo de clientes potenciales no supera los pocos miles de empresas pero el ticket medio es alto. Necesito diseñar una estrategia de marketing que sea efectiva sin necesitar presupuestos de marca masivos.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el mercado total addressable (TAM) estimado en número de empresas potenciales?
2. ¿Cuál es el ticket medio y el ciclo de venta típico?
3. ¿Cuál es tu diferenciación real frente a alternativas o al status quo del cliente?
4. ¿Tienes ya clientes? Si es así, ¿qué tienen en común los que mejor funcionan?
5. ¿Qué canales has probado y cuáles han generado aunque sea un lead de calidad?

## Por Qué el Marketing B2B de Nicho es Diferente

En mercados de nicho, las reglas del marketing de volumen no aplican. No puedes escalar campañas de paid con audiencias amplias ni esperar que el SEO genérico te lleve clientes. Las claves del nicho son otras:

**Lo que cambia en el nicho:**
- El buyer conoce a sus pares: la reputación y las referencias pesan más que los anuncios
- El universo es tan pequeño que puedes conocer a cada empresa potencial por nombre
- El contenido genérico no funciona: el buyer espera que entiendas su mundo en profundidad
- La confianza se construye despacio pero es mucho más duradera que en mercados commodity

**Las ventajas del nicho que debes explotar:**
- Puedes hacer marketing extremadamente personalizado sin coste prohibitivo
- Un solo cliente satisfecho conoce a muchos otros clientes potenciales
- Puedes convertirte en referencia de sector con menos esfuerzo que en un mercado amplio
- El CAC puede ser alto en valor absoluto pero bajo en relación al LTV

## La Estrategia en 4 Pilares

### Pilar 1: Posicionamiento de Nicho Radical

El error más común en B2B de nicho es intentar ser relevante para todos. La estrategia contraria es más efectiva: ser el único proveedor que habla exactamente el idioma de tu segmento.

**Ejercicio de posicionamiento:**
Completa esta frase: "Somos la única empresa que [qué haces] para [quién exactamente] que [en qué contexto o con qué condición]. A diferencia de [alternativa], nosotros [diferenciador real]."

**Señales de un posicionamiento de nicho correcto:**
- Tu ICP (ideal customer profile) se reconoce inmediatamente al ver tu web
- Los que no encajan en tu nicho no contactan (menos ruido)
- Los que sí encajan sienten que los entiendes mejor que nadie

### Pilar 2: Visibilidad donde el Nicho se Reúne

En lugar de ir a buscar al cliente en canales genéricos, ve donde él ya está.

**Mapeo de los puntos de concentración del nicho:**

| Canal de concentración | Ejemplos | Táctica |
|---|---|---|
| Asociaciones y gremios | Colegio profesional, patronal sectorial | Colaborar como ponente o patrocinador |
| Eventos especializados | Feria del sector, congreso anual | Stand, charla, networking estructurado |
| Publicaciones de sector | Revista especializada, newsletter del gremio | Artículo de opinión, estudio de caso |
| Comunidades online | Grupo de LinkedIn del sector, foro privado | Participación activa, no comercial |
| Podcasts de nicho | Podcast que escucha tu ICP | Entrevista como experto del sector |

**La regla del 70/30 en canales de nicho:**
70% de tu energía en los 2-3 canales donde tu ICP se concentra más. 30% en experimentar un canal nuevo cada trimestre.

### Pilar 3: Contenido de Autoridad Sectorial

En B2B de nicho, el contenido que posiciona no es el que explica tu producto: es el que demuestra que entiendes mejor que nadie el problema del sector.

**Los formatos de contenido con mayor ROI en nicho:**

**Estudio de datos del sector:**
Crea el informe anual del estado de tu industria. Encuesta a 50-100 profesionales del sector, publica los resultados. Los medios del sector lo citarán, los compradores lo descargarán y te verán como referencia.

**Casos de uso detallados:**
No el típico "cliente X mejoró un 20%". El análisis exhaustivo de cómo un cliente típico resolvió un problema específico del sector con tu solución. Cuanto más específico y técnico, más creíble.

**Guías de referencia para el sector:**
Un documento que se convierte en recurso permanente: "La guía del [proceso clave] para empresas de [tu nicho]". Si es lo suficientemente bueno, se comparte entre pares y genera tráfico orgánico cualificado durante años.

### Pilar 4: Marketing Basado en Relaciones y Referidos

En un universo pequeño, cada cliente satisfecho tiene acceso a múltiples clientes potenciales. Este canal es el más poderoso y el más infrautilizado.

**Programa de referidos estructurado:**
1. Identifica a tus 5-10 clientes más satisfechos
2. Pídeles explícitamente 2-3 nombres de empresas similares que podrían beneficiarse
3. Ofrece un incentivo (descuento en renovación, acceso a feature beta, invitación a evento exclusivo)
4. Haz el warm intro tú mismo: "Mi cliente X me habló de ti, ¿te parece bien que te explique brevemente qué hacemos?"

**El cliente como embajador activo:**
Involucra a tus mejores clientes como co-creadores de contenido: entrevistas, charlas conjuntas en eventos, citas en materiales. Esto les da visibilidad a ellos y a ti credibilidad.

## Métricas de Marketing en Nicho B2B

| Métrica | Definición | Objetivo |
|---|---|---|
| TAM penetration | % del universo addressable con el que has tenido contacto | > 20% en 12 meses |
| Brand awareness en nicho | % de ICP que te conoce (encuesta semestral) | > 40% en 18 meses |
| Leads de calidad por mes | Leads que cumplen el ICP exacto | Calidad > cantidad |
| Tasa de referidos | % de nuevos clientes que vienen de referencia | > 30% |
| Coste por lead de nicho | CAC ajustado al perfil ICP | Comparar vs. LTV |

## Entregables

Con el contexto que me des, produce:
1. ICP de nicho detallado: criterios firmográficos, tecnográficos y de comportamiento del perfil ideal
2. Posicionamiento de nicho en formato "solo nosotros": frase de posicionamiento y argumentario de diferenciación
3. Mapa de canales de concentración del nicho priorizados por potencial y facilidad de entrada
4. Plan de contenido de autoridad para 90 días: formatos, temas y canales de distribución
5. Programa de referidos: proceso, incentivos y scripts de solicitud para tus mejores clientes
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar una estrategia de marketing B2B para mercados de nicho de ticket alto donde el volumen es pequeño pero la personalización y la reputación son decisivas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Dark mode y theming con tokens de diseño — CSS custom properties en React y Vue',
                'description'      => 'Implementa un sistema de theming robusto con design tokens, CSS custom properties y soporte de dark mode en React o Vue que escale sin caos de estilos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero frontend senior especializado en sistemas de diseño y theming con experiencia implementando dark mode y sistemas de tokens en aplicaciones React y Vue a escala. Necesito construir un sistema de theming que sea mantenible, escalable y que soporte dark mode de forma nativa.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el framework principal? (React, Vue 3, Next.js, Nuxt)
2. ¿Estás partiendo de cero o migrando un sistema de estilos existente?
3. ¿Tienes ya un sistema de diseño o design system en Figma o similar?
4. ¿Usas alguna librería de componentes? (MUI, Shadcn, Radix, Vuetify, PrimeVue)
5. ¿Necesitas soporte de más de 2 temas o solo light/dark?

## El Problema de Theming Sin Sistema

El theming ad-hoc genera deuda técnica acumulada: colores hardcodeados en cada componente, inconsistencias entre pantallas, dark mode que se implementa con overrides cada vez más complejos y refactorizaciones dolorosas cada vez que el diseño evoluciona.

**Los síntomas del theming sin sistema:**
- `color: #1a1a1a` en 47 componentes distintos
- `dark:text-gray-200` en Tailwind que no corresponde a la jerarquía semántica del diseño
- Cambiar el color principal requiere tocar 30 archivos
- El dark mode tiene inconsistencias que nadie sabe cómo resolver sin romper el light mode

## Los Design Tokens: El Vocabulario Compartido

Los design tokens son las variables atómicas del diseño: colores, tipografía, espaciado, sombras, radios de borde. Son el puente entre Figma y el código.

**Jerarquía de tokens:**

```
Tokens Primitivos (la paleta bruta)
    └── Tokens Semánticos (el significado)
            └── Tokens de Componente (uso específico)
```

**Ejemplo concreto:**

```css
/* Primitivos: la paleta completa */
--color-blue-500: #3b82f6;
--color-blue-600: #2563eb;
--color-gray-50: #f9fafb;
--color-gray-900: #111827;

/* Semánticos: qué significa cada color */
--color-bg-primary: var(--color-gray-50);        /* fondo principal */
--color-bg-elevated: #ffffff;                    /* superficies elevadas */
--color-text-primary: var(--color-gray-900);     /* texto principal */
--color-text-secondary: #6b7280;                 /* texto secundario */
--color-action-primary: var(--color-blue-500);   /* botones, links */
--color-action-primary-hover: var(--color-blue-600);
--color-border-default: #e5e7eb;

/* En dark mode: solo redefinimos los semánticos */
[data-theme="dark"] {
    --color-bg-primary: #0f172a;
    --color-bg-elevated: #1e293b;
    --color-text-primary: #f1f5f9;
    --color-text-secondary: #94a3b8;
    --color-action-primary: #60a5fa;
    --color-border-default: #334155;
}
```

La clave: el componente usa siempre `var(--color-text-primary)`, nunca el valor primitivo. Cuando cambias el tema, solo cambias los tokens semánticos.

## Implementación en React con Context + CSS Variables

```tsx
// src/theme/ThemeProvider.tsx
import { createContext, useContext, useEffect, useState } from 'react';

type Theme = 'light' | 'dark' | 'system';

interface ThemeContextType {
    theme: Theme;
    resolvedTheme: 'light' | 'dark';
    setTheme: (theme: Theme) => void;
}

const ThemeContext = createContext<ThemeContextType | undefined>(undefined);

export function ThemeProvider({ children }: { children: React.ReactNode }) {
    const [theme, setThemeState] = useState<Theme>(() => {
        return (localStorage.getItem('theme') as Theme) || 'system';
    });

    const resolvedTheme = theme === 'system'
        ? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light')
        : theme;

    useEffect(() => {
        const root = document.documentElement;
        root.setAttribute('data-theme', resolvedTheme);
        localStorage.setItem('theme', theme);
    }, [theme, resolvedTheme]);

    const setTheme = (newTheme: Theme) => setThemeState(newTheme);

    return (
        <ThemeContext.Provider value={{ theme, resolvedTheme, setTheme }}>
            {children}
        </ThemeContext.Provider>
    );
}

export const useTheme = () => {
    const ctx = useContext(ThemeContext);
    if (!ctx) throw new Error('useTheme must be used within ThemeProvider');
    return ctx;
};
```

## Implementación en Vue 3 con Composable

```ts
// src/composables/useTheme.ts
import { ref, watch, computed } from 'vue';

type Theme = 'light' | 'dark' | 'system';

const theme = ref<Theme>((localStorage.getItem('theme') as Theme) || 'system');

const systemPreference = window.matchMedia('(prefers-color-scheme: dark)');

const resolvedTheme = computed(() => {
    if (theme.value === 'system') {
        return systemPreference.matches ? 'dark' : 'light';
    }
    return theme.value;
});

watch(resolvedTheme, (val) => {
    document.documentElement.setAttribute('data-theme', val);
}, { immediate: true });

export function useTheme() {
    const setTheme = (newTheme: Theme) => {
        theme.value = newTheme;
        localStorage.setItem('theme', newTheme);
    };

    return { theme, resolvedTheme, setTheme };
}
```

## Organización de los Archivos de Tokens

```
src/
├── styles/
│   ├── tokens/
│   │   ├── primitives.css      # Paleta completa de colores, escalas
│   │   ├── semantic.css        # Tokens semánticos (light mode por defecto)
│   │   ├── dark.css            # Override semánticos para dark mode
│   │   ├── typography.css      # Fuentes, tamaños, pesos, line-heights
│   │   └── spacing.css         # Escala de espaciado (4px base)
│   └── index.css               # Importa todos los tokens
```

## Tokens de Tipografía y Espaciado

```css
/* typography.css */
--font-family-sans: 'Inter', system-ui, -apple-system, sans-serif;
--font-size-xs: 0.75rem;    /* 12px */
--font-size-sm: 0.875rem;   /* 14px */
--font-size-base: 1rem;     /* 16px */
--font-size-lg: 1.125rem;   /* 18px */
--font-size-xl: 1.25rem;    /* 20px */
--font-size-2xl: 1.5rem;    /* 24px */
--font-weight-normal: 400;
--font-weight-medium: 500;
--font-weight-semibold: 600;
--font-weight-bold: 700;
--line-height-tight: 1.25;
--line-height-normal: 1.5;
--line-height-relaxed: 1.75;

/* spacing.css — escala de 4px */
--space-1: 0.25rem;   /* 4px */
--space-2: 0.5rem;    /* 8px */
--space-3: 0.75rem;   /* 12px */
--space-4: 1rem;      /* 16px */
--space-6: 1.5rem;    /* 24px */
--space-8: 2rem;      /* 32px */
--space-12: 3rem;     /* 48px */
--space-16: 4rem;     /* 64px */
```

## Integración con Tailwind CSS

Si usas Tailwind, mapea los tokens a la configuración:

```js
// tailwind.config.js
module.exports = {
    theme: {
        extend: {
            colors: {
                bg: {
                    primary: 'var(--color-bg-primary)',
                    elevated: 'var(--color-bg-elevated)',
                },
                text: {
                    primary: 'var(--color-text-primary)',
                    secondary: 'var(--color-text-secondary)',
                },
                action: {
                    primary: 'var(--color-action-primary)',
                },
            },
        },
    },
};
```

Ahora puedes usar `text-text-primary` en lugar de `text-gray-900` y el dark mode funciona automáticamente vía CSS variables.

## Entregables

Con el contexto que me des, produce:
1. Archivo completo de tokens primitivos y semánticos para tu paleta de colores
2. ThemeProvider completo (React o Vue) con soporte de system preference y persistencia en localStorage
3. Componente ThemeToggle accesible con los tres estados (light, dark, system)
4. Guía de migración de estilos hardcodeados a tokens para el equipo
5. Configuración de Tailwind o equivalente para usar los tokens como clases utilitarias
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar un sistema de theming con design tokens y CSS custom properties que soporte dark mode de forma escalable en React o Vue',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de formularios complejos — wizards, validación inline y UX de múltiples pasos',
                'description'      => 'Aprende a diseñar formularios de múltiples pasos, wizards y flujos de entrada de datos complejos con validación inline, feedback de error y UX que reduce el abandono.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador UX especializado en formularios y flujos de entrada de datos con experiencia en productos SaaS, aplicaciones de gestión y e-commerce con procesos de registro o compra complejos. Necesito diseñar un formulario o flujo multistep que minimice el abandono y maximice la tasa de completado.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué tipo de formulario es? (registro, onboarding, checkout, solicitud, configuración de producto)
2. ¿Cuántos campos necesita recoger en total y cuál es la tasa de abandono actual si tienes datos?
3. ¿En qué dispositivos se usa principalmente? (desktop, móvil, ambos)
4. ¿Qué información es obligatoria y cuál puede recogerse en un momento posterior?
5. ¿Existe ya una versión del formulario o estamos diseñando desde cero?

## Por Qué los Formularios Fallan: Los 7 Errores Más Comunes

Los formularios son la interfaz más crítica de cualquier producto digital: son el punto donde el usuario pasa de consumir a comprometerse. Un formulario mal diseñado destruye conversión incluso si el resto del producto es excelente.

**Los errores más frecuentes:**
1. Pedir demasiados campos de golpe sin justificación
2. Mensajes de error que aparecen solo al enviar, no en tiempo real
3. Errores que no dicen qué hacer para corregirlos
4. Progress indicator que no refleja el esfuerzo real restante
5. No guardar el progreso: el usuario pierde todo si se va a mitad
6. Campos de fecha, teléfono o tarjeta con formatos que rechazan entradas válidas
7. CTA final que genera ansiedad ("Enviar" en lugar de "Crear mi cuenta")

## Cuándo Usar un Wizard (Formulario Multistep)

Un wizard está justificado cuando:
- El formulario tiene más de 7-8 campos en total
- Los campos tienen dependencias lógicas (respuesta A condiciona las opciones de B)
- El proceso tiene pasos naturales que el usuario ya reconoce (datos personales → dirección → pago)
- El contexto del campo cambia significativamente entre secciones

Un wizard NO está justificado cuando:
- El formulario tiene 4-5 campos simples: mejor en una sola página
- Dividir los campos no reduce la carga cognitiva perceptiblemente
- El usuario necesita ver todos los campos a la vez para tomar decisiones

## Arquitectura del Wizard: Cómo Dividir los Pasos

**Principio de agrupación:**
Agrupa los campos por contexto mental, no por cantidad. El usuario no debería necesitar saltar entre pasos para completar una información relacionada.

**Ejemplo: Wizard de onboarding SaaS B2B**

| Paso | Nombre | Campos | Ratio de abandono típico |
|---|---|---|---|
| 1 | Tu cuenta | Email, contraseña | Muy bajo (motivación alta) |
| 2 | Tu empresa | Nombre empresa, sector, tamaño | Bajo |
| 3 | Tu rol | Cargo, equipo, uso principal | Medio |
| 4 | Configuración inicial | Nombre del workspace, zona horaria | Bajo |
| 5 | Invita a tu equipo | Emails de compañeros (opcional) | Variable |

**Regla del paso opcional:**
Si un paso recoge información que puede completarse después, marcarlo como opcional y permitir saltarlo. La tasa de completado sube cuando el usuario siente que no está atascado.

## El Progress Indicator: Honestidad sobre el Esfuerzo

El progress indicator no es decoración: es gestión de expectativas. Un indicador que miente (dice que llevas el 80% pero quedan los pasos más largos) destruye la confianza.

**Tipos de indicadores y cuándo usarlos:**

| Tipo | Cuándo usar | Consideración |
|---|---|---|
| Barra de progreso porcentual | Pasos de duración similar | Ponderar si los pasos varían en longitud |
| Stepper numerado (1/5) | Pasos bien definidos y equivalentes | El más honesto para procesos lineales |
| Breadcrumb de pasos | Cuando los nombres de paso ayudan a orientar | Mejor que el número solo |
| Estimación de tiempo | Formularios largos con tiempo variable | "Este paso: ~2 minutos" |

**Lo que el indicador debe mostrar:**
- En qué paso estás ahora
- Cuántos quedan
- Qué pasos ya completaste (con posibilidad de volver a ellos)

## Validación Inline: El Estándar Moderno

La validación que solo aparece al enviar es UX de los años 90. La validación inline reduce los errores percibidos y acelera el completado.

**Reglas de la validación inline:**

| Situación | Comportamiento correcto |
|---|---|
| Campo con formato específico (email, tel) | Valida al salir del campo (onBlur), no mientras escribe |
| Campo de contraseña | Muestra requisitos en tiempo real mientras escribe |
| Campo de confirmación de email/contraseña | Valida al salir del segundo campo |
| Campo obligatorio vacío | Muestra error solo si el usuario ha interactuado y salido, nunca al cargar |
| Validación asíncrona (comprobar si email existe) | Indicador de carga, luego resultado |

**Anatomía de un mensaje de error perfecto:**
- Icono de error (no solo color, accesibilidad)
- Texto que describe QUÉ está mal: "El email no tiene un formato válido"
- Texto que dice QUÉ HACER: "Comprueba que incluye @ y un dominio (ejemplo@tuempresa.com)"
- Posición: justo debajo del campo, siempre visible sin hacer scroll

## Diseño de Campos Especiales

**Campo de contraseña:**
- Botón de mostrar/ocultar contraseña (el ojo)
- Indicador de fortaleza visual (barra de color: rojo → amarillo → verde)
- Lista de requisitos con checkmarks en tiempo real

**Campo de teléfono:**
- Selector de prefijo de país antes del número
- Formato automático mientras escribe si el país está seleccionado
- No rechazar espacios ni guiones: normalizarlos internamente

**Campo de fecha:**
- En móvil: usar el date picker nativo del sistema operativo
- En desktop: date picker con teclado funcional (escribir la fecha, no solo hacer clic)
- Mostrar el formato esperado como placeholder: "DD/MM/AAAA"

**Selector de archivo:**
- Zona de drag & drop visible con instrucciones claras
- Formatos aceptados explícitos antes de subir ("JPG, PNG o PDF, máx. 5 MB")
- Preview inmediato del archivo subido con opción de eliminar

## Guardado Automático y Recuperación de Progreso

En formularios largos, el abandono temporal no debería significar perder el trabajo.

**Estrategias de persistencia:**
- Guardar en localStorage con debounce al cambiar cualquier campo
- Si hay autenticación, guardar en servidor para recuperar desde otro dispositivo
- Al volver al formulario: mostrar mensaje "Continuamos donde lo dejaste" con opción de empezar de nuevo
- Si el formulario tiene fecha de caducidad, mostrar un aviso claro

## Entregables

Con el contexto que me des, produce:
1. Arquitectura del wizard: división de pasos, agrupación de campos y lógica de campos condicionales
2. Especificación de validación por campo: tipo, cuándo valida, mensaje de error exacto
3. Diseño del progress indicator más adecuado para tu flujo
4. Copy de todos los CTAs del wizard (botones de avanzar, retroceder, enviar, saltar)
5. Checklist de accesibilidad del formulario: teclado, lectores de pantalla, contraste y etiquetas
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar wizards y formularios de múltiples pasos con validación inline y UX que reduzcan el abandono y mejoren la tasa de completado',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas en entornos de alta competencia — diferenciación táctica cuando el producto es similar',
                'description'      => 'Aprende a vender cuando el mercado está saturado y el producto es percibido como similar al de la competencia: diferenciación táctica, posicionamiento y estrategias de cierre frente a competidores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en mercados altamente competitivos donde los productos son difíciles de diferenciar a nivel de features. Necesito estrategias y tácticas concretas para ganar deals cuando el cliente percibe que mi solución y la de la competencia son esencialmente iguales.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el producto o servicio y cuántos competidores directos tienes en el proceso de venta?
2. ¿En qué fase de la evaluación aparecen los competidores habitualmente?
3. ¿Cuáles son las razones más frecuentes por las que pierdes deals frente a la competencia?
4. ¿Cuál es el perfil del decisor de compra y qué valora más: precio, servicio, integración, marca?
5. ¿Tienes acceso a información sobre las ofertas de la competencia (precios, propuestas)?

## El Problema de la Commoditización

Cuando el cliente dice "todos sois iguales", no siempre está siendo racional. Muchas veces significa una de estas cosas:

- No ha visto todavía la diferencia real porque no sabe dónde mirarla
- La diferencia real existe pero no es relevante para sus prioridades
- No hay suficiente confianza para justificar el riesgo de elegirte a ti

El trabajo del vendedor en un mercado competitivo no es inventarse diferencias: es hacer visibles las diferencias que ya existen y conectarlas con lo que le importa al comprador.

## La Matriz de Diferenciación: Dónde Buscar Ventajas Reales

Cuando el producto parece igual, la diferencia está en otra capa:

| Capa | Qué evaluar | Ejemplos |
|---|---|---|
| Producto core | Features, rendimiento, fiabilidad | API más rápida, menos downtime, mejor UX |
| Onboarding y time-to-value | Cuánto tarda el cliente en obtener valor | Implementación en días vs. semanas |
| Servicio y soporte | Calidad, velocidad, acceso al equipo | CSM dedicado, SLA 4h, soporte en tu idioma |
| Integración y ecosistema | Con qué conecta, qué no requiere cambiar | Nativo con el stack que ya usa el cliente |
| Flexibilidad comercial | Modelo de precios, contratos, escalabilidad | Sin lock-in anual, precio por uso |
| Relación y confianza | Conocimiento del sector del cliente | Experiencia probada en su industria |
| Roadmap y visión | Hacia dónde va el producto | Alineación con la dirección estratégica del cliente |

**El ejercicio clave:** Para cada capa, puntúa de 1 a 5 tu posición frente al competidor principal. Los puntos donde puntúas 4-5 y el cliente los valora son tu argumento de venta real.

## Estrategias de Posicionamiento Frente al Competidor

### Estrategia 1: Reencuadrar los Criterios de Evaluación

Si el cliente evalúa en función de un criterio donde no ganas, tu trabajo es expandir los criterios de decisión a los que sí ganas.

Ejemplo: el competidor tiene más features. Tu respuesta: "Las features son importantes. Pero igual de importante es cuánto tiempo llevan los equipos como el vuestro en estar operativos. ¿Habéis considerado el tiempo de implementación en vuestra evaluación?"

### Estrategia 2: El Coste Total de Propiedad (TCO)

Si pierdes en precio inicial pero ganas en otros factores, lleva la conversación al coste total.

```
TCO = Precio de licencia
    + Coste de implementación (horas de IT + consultoría)
    + Coste de formación del equipo
    + Coste de integraciones adicionales necesarias
    + Coste de oportunidad del tiempo de adopción
    + Coste del soporte durante el primer año
```

Muchos clientes que eligen la opción "más barata" descubren que el TCO es mayor. Si puedes cuantificar esto con datos reales de clientes similares, es un argumento poderoso.

### Estrategia 3: El Riesgo de Cambio

En muchos mercados B2B, el mayor miedo del comprador no es elegir el producto equivocado: es elegir el proveedor equivocado y tener que cambiar de nuevo en 18 meses.

Posiciónate como la opción de menor riesgo:
- Referencias del mismo sector o perfil de empresa
- Garantías de resultado o SLAs contractuales
- Plan de salida claro (exportación de datos, portabilidad)
- Solidez y trayectoria del proveedor

### Estrategia 4: El Diferencial de Equipo y Relación

El software lo compran personas a personas. Cuando el producto es similar, el equipo con el que trabajarás es parte del producto.

"¿Habéis tenido la oportunidad de conocer al equipo que os va a implementar y acompañar? En nuestra propuesta, el equipo de customer success que trabaja con empresas de vuestro sector está disponible para una llamada antes de que decidáis."

## Cómo Manejar las Comparaciones Directas con la Competencia

Cuando el cliente menciona a la competencia:

| Lo que dice el cliente | Lo que NO decir | Lo que SÍ decir |
|---|---|---|
| "El competidor X tiene esta feature que vosotros no" | Atacar al competidor | "Cuéntame más sobre cómo usaríais esa feature. ¿Es un requisito bloqueante?" |
| "El competidor X es más barato" | Bajar el precio automáticamente | "¿Están comparando exactamente los mismos módulos? ¿Incluyen el onboarding y el soporte?" |
| "El competidor X tiene más clientes" | Minimizarlo | "¿Tienes acceso a referencias de clientes de tu sector o tamaño en concreto?" |
| "Todos sois iguales, lo que importa es el precio" | Ceder en precio | "Entiendo. Si el precio fuera idéntico, ¿qué otros factores influirían en vuestra decisión?" |

## El Battlecard: Tu Herramienta de Referencia Rápida

Para cada competidor principal, prepara una tarjeta de referencia:

- **Sus puntos fuertes** (di la verdad, el cliente ya los sabe)
- **Sus puntos débiles** (con evidencia, no con opiniones)
- **Tu ventaja en cada punto débil del competidor**
- **Preguntas que revelan sus debilidades sin atacarles**
- **Clientes que han migrado de ellos a ti** (y por qué)

## Entregables

Con el contexto que me des, produce:
1. Matriz de diferenciación completa vs. el competidor principal: 7 capas puntuadas con argumentos
2. Battlecard del competidor más frecuente con preguntas de descubrimiento de debilidades
3. Cálculo de TCO comparativo adaptado a tu producto y modelo de precios
4. Scripts para las 5 objeciones comparativas más frecuentes que recibes
5. Plan de referenciación: cómo usar clientes existentes para ganar deals en competencia
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Ganar deals en mercados saturados donde el producto es percibido como similar al de la competencia mediante diferenciación táctica y posicionamiento de valor',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de productos de datos (data products) — cómo productizar los datos internos',
                'description'      => 'Aprende a tratar los datos internos como productos: definir usuarios, métricas de calidad, SLAs y el proceso de descubrimiento y entrega de data products para uso interno o externo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager especializado en data products con experiencia en organizaciones que están transformando su gestión de datos de un modelo de proyectos ad-hoc a un modelo de productos de datos mantenibles y escalables. Necesito entender cómo productizar los datos internos de forma que sean consumibles, confiables y valiosos para los equipos que los necesitan.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el caso de uso principal del data product que quieres crear? (reporting, ML features, API externa, dataset compartido)
2. ¿Quiénes son los consumidores del dato? (equipos internos, clientes externos, sistemas automatizados)
3. ¿Cuál es el estado actual del dato? (existe en producción pero sin SLA, hay múltiples versiones inconsistentes, es nuevo)
4. ¿Tienes un equipo de datos estructurado o es una persona haciendo de todo?
5. ¿Qué stack de datos usáis? (dbt, Snowflake, BigQuery, Databricks, Redshift, etc.)

## Qué es un Data Product y Por Qué Importa

Un data product es un conjunto de datos, sus transformaciones, su documentación y sus contratos de calidad, tratados como un producto de software: con usuarios, con SLAs, con versiones y con ownership claro.

**La diferencia entre un pipeline de datos y un data product:**

| Pipeline de datos | Data product |
|---|---|
| Creado para un caso de uso específico | Diseñado para múltiples consumidores |
| Sin documentación formal | Documentado como una API pública |
| Sin SLA de calidad | SLA definido: frescura, completitud, precisión |
| Sin owner claro | Owner que responde por la calidad |
| Se rompe silenciosamente | Monitorizado con alertas |
| Difícil de descubrir | Catalogado y buscable |

**Por qué las organizaciones necesitan data products:**
- Los análisis ad-hoc se multiplican hasta que nadie sabe qué número es el correcto
- Los equipos de negocio no confían en los datos porque han visto demasiadas inconsistencias
- El equipo de datos no da abasto resolviendo la misma pregunta para distintos equipos
- Los modelos de ML se entrenan con datos que no tienen contrato de estabilidad

## El Framework de Descubrimiento de Data Products

Antes de construir, valida que el data product merece ser construido.

**Paso 1: Identificar el dominio y los consumidores**

Los data products se organizan por dominios de negocio, no por fuentes de datos. Ejemplos:
- Dominio de cliente: perfil unificado de cliente, historial de interacciones, segmentación
- Dominio de ventas: pipeline, tasa de conversión, ARR por cuenta
- Dominio de producto: eventos de uso, activación, retención por cohorte

Para cada data product potencial, mapea:
- ¿Quién lo consumirá? (personas, equipos, sistemas)
- ¿Con qué frecuencia lo necesitan?
- ¿Cuál es el coste de no tenerlo o de tenerlo mal?

**Paso 2: Definir los contratos de calidad**

Un data product sin SLA no es un producto, es un pipeline con nombre bonito.

| Dimensión de calidad | Definición | Ejemplo de SLA |
|---|---|---|
| Frescura (freshness) | Tiempo máximo desde que ocurre el evento hasta que está en el producto | < 4 horas para datos de ventas |
| Completitud | % de registros esperados que están presentes | > 99.5% de registros completos |
| Precisión | Tasa de errores en campos clave | < 0.1% de errores en IDs de cliente |
| Consistencia | Misma definición en todos los consumers | La métrica "revenue" es la misma para finanzas y para el dashboard de CEO |
| Disponibilidad | Uptime del data product | > 99.9% en horario laboral |

**Paso 3: El Data Product Canvas**

Antes de construir, documenta:

```
DATA PRODUCT CANVAS
Nombre: [Nombre del data product]
Dominio: [Dominio de negocio al que pertenece]
Owner: [Equipo o persona responsible]
Versión: [v1.0]

USUARIOS
- Consumidores internos: [Lista de equipos]
- Sistemas consumidores: [APIs, dashboards, modelos ML]

DESCRIPCIÓN DEL DATO
- ¿Qué representa? [Descripción en lenguaje de negocio]
- Granularidad: [1 fila por cliente por día / 1 fila por transacción]
- Período cubierto: [Histórico desde X / rolling 90 días]

FUENTES
- [Sistema fuente 1]: [qué tablas/eventos consume]
- [Sistema fuente 2]: [qué tablas/eventos consume]

TRANSFORMACIONES CLAVE
- [Descripción de la lógica de negocio principal]

SLA DE CALIDAD
- Frescura: [X horas]
- Completitud: [X%]
- Disponibilidad: [X%]

INTERFAZ DE ACCESO
- Tabla en warehouse: [nombre.esquema.tabla]
- API: [endpoint si aplica]
- Dashboard: [enlace si aplica]

CASOS DE USO DOCUMENTADOS
1. [Caso de uso 1]
2. [Caso de uso 2]
```

## Data Mesh: El Modelo Organizativo

El Data Mesh es el modelo arquitectónico que formaliza los data products como responsabilidad de los dominios de negocio, no del equipo central de datos.

**Los 4 principios del Data Mesh:**
1. **Ownership descentralizado por dominio:** El equipo de ventas es owner de los data products de ventas
2. **Datos como producto:** Cada data product tiene un owner, SLA y documentación
3. **Plataforma de datos self-serve:** El equipo central proporciona la infraestructura, no el dato
4. **Gobernanza federada:** Estándares comunes (nombres, formatos, calidad) definidos centralmente pero aplicados por los dominios

## Descubrimiento y Catalogación

Un data product no sirve si nadie sabe que existe.

**El catálogo de datos mínimo viable:**
- Nombre y descripción en lenguaje de negocio
- Owner y canal de contacto
- SLA de calidad y fecha del último check
- Casos de uso documentados
- Cómo acceder (tabla, API, dashboard)
- Changelog de cambios recientes

Herramientas: DataHub, Atlan, Alation, o una página de Notion bien mantenida si estás en fase temprana.

## Entregables

Con el contexto que me des, produce:
1. Data Product Canvas completo para el primer data product que quieres crear
2. Definición de los SLAs de calidad con las métricas de monitoring correspondientes
3. Estructura de carpetas y convención de nombres para organizar los data products en dbt o tu herramienta de transformación
4. Proceso de discovery de nuevos data products: cómo recibir, priorizar y validar peticiones de los equipos consumidores
5. Plan de adopción: cómo comunicar el nuevo data product a los equipos internos y asegurar que lo usen
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Transformar pipelines de datos ad-hoc en data products formales con SLAs, ownership claro y documentación que los equipos consumidores puedan confiar',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Diseño organizacional — estructurar equipos, reporting lines y gestionar reorganizaciones',
                'description'      => 'Aprende a diseñar la estructura organizativa de tu empresa: modelos funcional, matricial y tribal, definición de reporting lines y cómo gestionar una reorganización sin perder talento ni velocidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de diseño organizacional con experiencia en empresas de tecnología de diferentes etapas de crecimiento, desde startups de 20 personas hasta scaleups de 500 empleados. Necesito ayuda para diseñar o rediseñar la estructura de mi organización de forma que sea efectiva, escalable y alineada con la estrategia.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántas personas tiene la organización actualmente y cuál es el crecimiento previsto en los próximos 12 meses?
2. ¿Cuál es el principal problema que quieres resolver con el nuevo diseño? (velocidad de decisión, silos, duplicidades, crecimiento desordenado)
3. ¿Cuál es el modelo de negocio y cuántas líneas de producto o mercados distintos tienes?
4. ¿Ha habido reorganizaciones recientes? ¿Con qué resultado?
5. ¿Cuáles son los roles o equipos que generan más fricción actualmente?

## Los Principios del Diseño Organizacional

Una organización no se diseña de arriba abajo en un PowerPoint: se diseña a partir de la estrategia y de los flujos de trabajo que necesitan coordinación frecuente.

**La pregunta clave antes de diseñar la estructura:**
¿Quién necesita coordinarse con quién, con qué frecuencia y sobre qué decisiones? Las personas que necesitan coordinación frecuente deben estar en la misma unidad. Las que raramente necesitan coordinarse pueden estar en unidades separadas.

**Los 5 atributos de una estructura efectiva:**
1. Claridad de ownership: cada decisión tiene un propietario claro
2. Minimización de dependencias: los equipos pueden trabajar con autonomía
3. Escala predecible: la estructura funciona con el doble de personas
4. Alineación estratégica: la estructura refuerza la estrategia, no la complica
5. Acceso al talento: las personas de alto rendimiento tienen rutas de crecimiento

## Los Modelos Organizativos y Cuándo Usar Cada Uno

### Modelo Funcional

Los equipos se agrupan por función: Marketing, Ventas, Tecnología, Producto, Operaciones.

**Cuándo funciona:**
- Empresas con un solo producto o mercado
- Fase temprana (< 50 personas) donde la especialización importa más que la autonomía
- Cuando la eficiencia y el expertise funcional son más críticos que la velocidad de iteración

**Cuándo deja de funcionar:**
- Cuando hay múltiples productos o mercados que requieren estrategias distintas
- Cuando los proyectos cross-funcionales se convierten en la norma y no en la excepción
- Cuando la coordinación entre funciones se vuelve el cuello de botella

### Modelo Divisional (por producto, mercado o geografía)

Cada división tiene sus propias funciones bajo un P&L o accountability separado.

**Cuándo funciona:**
- Múltiples productos o mercados con poca sinergia operativa entre ellos
- Empresas > 100-150 personas con estrategias distintas por línea de negocio
- Cuando la velocidad de cada unidad importa más que la eficiencia compartida

**Cuándo deja de funcionar:**
- Genera duplicación de recursos (cada división tiene su propio equipo de datos, su propio equipo legal, etc.)
- Puede crear silos que dificultan el aprendizaje compartido

### Modelo Matricial

Combina las dimensiones funcional y divisional: las personas reportan a un manager funcional y a un lead de proyecto o producto.

**Cuándo funciona:**
- Empresas grandes con múltiples productos que comparten recursos
- Cuando necesitas tanto expertise funcional como velocidad de entrega de producto

**Los riesgos:**
- Conflicto de prioridades y "quién es mi jefe" constante
- Requiere managers muy maduros y procesos de priorización muy claros
- En empresas < 100 personas suele ser más overhead que beneficio

### Modelo Tribal (Squads, Chapters, Guilds — el modelo Spotify)

Los equipos se organizan en squads multifuncionales autónomos (con su propio backend, frontend, diseño y producto) agrupados en tribus por área de producto.

**Cuándo funciona:**
- Empresas de producto tecnológico > 80-100 personas en tecnología
- Cuando la velocidad de entrega y la autonomía de equipo son la prioridad
- Cultura de ownership fuerte

**Los riesgos:**
- La coordinación entre squads es costosa si no hay buenas prácticas de API y plataforma
- El desarrollo de carrera es más complejo sin una línea jerárquica funcional clara

## Cómo Diseñar los Reporting Lines

Los reporting lines determinan quién toma decisiones sobre el trabajo de quién y quién es responsable del desarrollo de las personas.

**Principios para definir el reporting:**

1. **El manager debe poder evaluar el trabajo:** Un VP de Marketing no puede ser el manager de un ingeniero de software aunque estén en el mismo equipo de producto.

2. **El span of control apropiado:**
   - Manager de personas (1:1s, desarrollo, performance): máximo 7-8 reportes directos
   - Manager de contribuidores individuales senior (poco coaching necesario): hasta 10-12
   - En organizaciones planas donde el manager también hace trabajo individual: máximo 5-6

3. **Separar el reporting funcional del reporting de proyecto:**
   En modelos matriciales, define explícitamente quién hace la evaluación de desempeño (suele ser el manager funcional) y quién prioriza el trabajo día a día (suele ser el lead de producto o proyecto).

## Gestionar la Reorganización: El Proceso

Una reorganización mal gestionada puede costar más en talento y productividad de lo que ahorra en eficiencia.

**Protocolo de reorganización:**

**Fase 1 — Diseño en silencio (2-4 semanas):**
Define la nueva estructura con el equipo directivo antes de comunicar nada. El ruido de una reorganización en proceso destruye la productividad.

**Fase 2 — Comunicación en cascada (1-2 días):**
Comunica primero a los managers afectados (1-2 días antes que al resto), luego a todos simultáneamente. Nunca por pasos que generen filtros de información.

**Fase 3 — El mensaje de la comunicación:**
- Por qué: la razón estratégica, no solo operativa
- Qué cambia: estructura, reporting lines, responsabilidades
- Qué no cambia: misión, equipo, compensación (si es el caso)
- Qué pasa ahora: timeline de transición, próximos pasos

**Fase 4 — Período de transición (4-8 semanas):**
Reuniones de alineación con los nuevos equipos, documentación de responsabilidades, resolución de ambigüedades. Define una fecha clara en la que la nueva estructura está operativa.

## Entregables

Con el contexto que me des, produce:
1. Propuesta de estructura organizativa con diagrama y justificación estratégica
2. Definición de reporting lines con span of control y criterios de asignación
3. Matriz RACI para las 10 decisiones más críticas de la organización
4. Plan de comunicación de la reorganización: mensajes, timing y canales
5. Protocolo de las primeras 90 días post-reorganización: reuniones, métricas de éxito y puntos de revisión
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar o rediseñar la estructura organizativa eligiendo el modelo adecuado, definiendo reporting lines y gestionando la reorganización con el mínimo impacto en el equipo',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Consolidación financiera de grupos empresariales — intercompany, minoritarios y divisas',
                'description'      => 'Aprende el proceso de consolidación contable de grupos empresariales: eliminación de operaciones intercompany, tratamiento de intereses minoritarios y conversión de divisas para las cuentas anuales consolidadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en la preparación de cuentas consolidadas de grupos empresariales bajo NIIF (IFRS) y PGC de grupos. Necesito entender el proceso completo de consolidación: desde la agregación de balances hasta la eliminación de operaciones intercompany, el tratamiento de minoritarios y la conversión de moneda extranjera.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántas sociedades integra el grupo y cuáles son los porcentajes de participación?
2. ¿Cuál es el marco contable aplicable? (NIIF/IFRS, PGC de grupos español, US GAAP)
3. ¿Hay sociedades con moneda funcional distinta al euro?
4. ¿Cuál es el volumen de operaciones intercompany más relevante? (préstamos, ventas de bienes, dividendos, servicios)
5. ¿Se realizan los estados financieros consolidados internamente o con apoyo de auditoría externa?

## Los Métodos de Consolidación

No todas las participaciones en otras sociedades se consolidan de la misma manera. El método depende del nivel de control o influencia:

| Método | Cuándo aplica | Cómo funciona |
|---|---|---|
| Integración global | Control (> 50% + gestión efectiva) | Se suman 100% de activos, pasivos y resultados; se reconoce la parte de minoritarios |
| Integración proporcional | Control conjunto (joint venture, NIIF obsoleto) | Se consolida solo el % de participación de cada línea |
| Puesta en equivalencia | Influencia significativa (20-50%) | Solo aparece en el balance como "Inversión en asociadas" por el valor del patrimonio proporcional |
| No consolidación | Participaciones < 20% sin influencia | Activo financiero a valor razonable |

## El Proceso de Consolidación Paso a Paso

### Paso 1: Homogeneización de Políticas Contables

Antes de sumar ningún número, todos los estados financieros individuales deben seguir las mismas políticas contables. Si la filial amortiza en 5 años y la matriz en 10 años el mismo tipo de activo, hay que ajustar.

**Ajustes de homogeneización más frecuentes:**
- Criterios de amortización y deterioro
- Reconocimiento de ingresos (especialmente en contratos a largo plazo)
- Valoración de existencias (FIFO vs. coste medio)
- Capitalización vs. gasto de I+D

### Paso 2: Conversión de Divisas (si hay filiales en moneda extranjera)

Si alguna sociedad tiene moneda funcional distinta al euro (USD, GBP, BRL, etc.), hay que convertir sus estados financieros antes de consolidar.

**Método de conversión de cierre (NIIF IAS 21):**

| Partida | Tipo de cambio |
|---|---|
| Activos y pasivos del balance | Tipo de cambio de cierre del ejercicio |
| Ingresos y gastos de la cuenta de resultados | Tipo de cambio medio del ejercicio |
| Patrimonio neto (capital + reservas) | Tipo de cambio histórico (del momento de cada aportación) |
| Diferencia de conversión | Registrada en "Otro resultado global" (OCI), no en resultados |

**La diferencia de conversión:**
La diferencia entre convertir el balance a tipo de cierre y la cuenta de resultados a tipo medio genera una diferencia que no pasa por la cuenta de resultados sino que va directamente al patrimonio neto (reservas de conversión). En la consolidación, esta diferencia se recoge en el "Estado de otro resultado global".

### Paso 3: Eliminación de la Inversión y los Fondos Propios (Primera Consolidación)

En la primera consolidación (o al calcular el goodwill):

```
Precio pagado por la participación
- Valor razonable del % de activos netos adquiridos
= Fondo de comercio (goodwill) o badwill
```

El goodwill se registra en el activo consolidado y se testa anualmente por deterioro (no se amortiza bajo NIIF).

En consolidaciones posteriores, se eliminan la inversión en la filial contra los fondos propios de la filial en la proporción de participación.

### Paso 4: Eliminación de Operaciones Intercompany

Toda operación económica entre sociedades del grupo debe eliminarse en la consolidación, porque desde la perspectiva del grupo, son operaciones con uno mismo.

**Las 4 eliminaciones más frecuentes:**

**4.1 — Eliminación de ventas y compras intercompany:**
Si la matriz vende 1.000.000€ a la filial y la filial los ha vendido a terceros, en el consolidado se elimina:
- La venta de la matriz (ingreso -1.000.000€)
- La compra de la filial (coste -1.000.000€)
El margen ya realizado con terceros permanece.

Si la filial aún tiene en inventario parte de la mercancía comprada, hay que eliminar también el beneficio no realizado en existencias.

**4.2 — Eliminación de préstamos intercompany:**
Si la matriz prestó 500.000€ a la filial:
- Activo de la matriz (crédito): -500.000€
- Pasivo de la filial (deuda): -500.000€
- Ingresos financieros de la matriz y gastos financieros de la filial: -intereses del período

**4.3 — Eliminación de dividendos intercompany:**
Si la filial pagó dividendos a la matriz:
- Ingreso financiero de la matriz: -importe del dividendo
- Reducción de reservas de la filial: ajuste correlativo

**4.4 — Eliminación de resultados en transmisiones intercompany de activos:**
Si la filial vendió un activo a la matriz con beneficio, ese beneficio no realizado desde la perspectiva del grupo debe diferirse hasta que el activo salga del grupo.

### Paso 5: Intereses Minoritarios (Participaciones No Controladoras)

Cuando la participación es inferior al 100%, hay una parte del patrimonio neto y del resultado de la filial que pertenece a los socios externos.

**En el balance consolidado:**
Los intereses minoritarios aparecen en el patrimonio neto del grupo, separados del patrimonio atribuible a la dominante.

**En la cuenta de resultados consolidada:**
El resultado se desglosa entre:
- Resultado atribuible a la sociedad dominante
- Resultado atribuible a intereses minoritarios (socios externos)

## Entregables

Con el contexto que me des, produce:
1. Estructura de consolidación del grupo: árbol de participaciones con método aplicable a cada filial
2. Tabla de ajustes de conversión de divisas para las filiales en moneda extranjera
3. Plantilla de eliminaciones intercompany con las operaciones más frecuentes del grupo
4. Cálculo del fondo de comercio (goodwill) para la última adquisición realizada
5. Checklist de cierre consolidado: todos los pasos por orden con responsable y plazo
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Preparar los estados financieros consolidados de un grupo empresarial con eliminaciones intercompany, conversión de divisas y tratamiento de intereses minoritarios',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Propiedad intelectual en contratos de desarrollo de software a medida — a quién pertenece el código',
                'description'      => 'Entiende a quién pertenece el código fuente en los contratos de desarrollo de software por encargo: cesión de derechos, licencias, código preexistente y cómo redactar la cláusula de PI correctamente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en propiedad intelectual y contratos de tecnología con experiencia en la negociación y redacción de contratos de desarrollo de software a medida. Necesito entender y gestionar correctamente la propiedad intelectual en los proyectos de desarrollo: quién es el propietario del código, qué se puede ceder y cómo proteger tanto al cliente como al proveedor.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es tu posición en la relación contractual? (empresa cliente que encarga el desarrollo, empresa proveedora que desarrolla, freelance desarrollador)
2. ¿El desarrollo es completamente a medida o incluye código preexistente del proveedor (frameworks propios, librerías, código base)?
3. ¿Se han firmado ya contratos o estamos en fase de negociación/redacción?
4. ¿Hay alguna situación de conflicto actual sobre la propiedad del código desarrollado?
5. ¿El desarrollo involucra subcontratistas o desarrolladores autónomos además del equipo principal?

## La Regla General en el Derecho Español: El Empleado y el Autónomo

**Código desarrollado por empleados:**
En España, el artículo 97 del Texto Refundido de la Ley de Propiedad Intelectual (TRLPI) establece que los derechos de explotación de los programas de ordenador creados por un trabajador en el ejercicio de sus funciones corresponden exclusivamente a la empresa empleadora.

Esta regla aplica automáticamente sin necesidad de cláusula contractual específica para el empleado.

**Código desarrollado por autónomo o empresa proveedora:**
Aquí la regla es la contraria: salvo pacto en contrario, el autor (el autónomo o la empresa proveedora) conserva los derechos de propiedad intelectual sobre el código que crea, aunque el cliente lo haya pagado.

**La conclusión crítica:** Si un cliente encarga desarrollo a una empresa o autónomo sin una cláusula explícita de cesión de derechos, puede encontrarse con que ha pagado el desarrollo pero no es propietario del código.

## Los Tres Regímenes Contractuales Posibles

### Régimen 1: Cesión Total de Derechos al Cliente

El proveedor cede todos los derechos de explotación del código desarrollado al cliente. El cliente pasa a ser el único propietario.

**Cuándo usar este régimen:**
- Desarrollo a medida 100%, sin reutilización de código preexistente del proveedor
- El cliente necesita exclusividad total: no quiere que el proveedor use el código para otros clientes
- Proyectos con alto componente de secreto empresarial o ventaja competitiva

**Cláusula tipo de cesión:**

```
"El PROVEEDOR cede al CLIENTE, con carácter exclusivo, en exclusiva y con plena facultad
de transmisión a terceros, todos los derechos de explotación —incluyendo reproducción,
distribución, comunicación pública y transformación— sobre los Desarrollos realizados
específicamente para el CLIENTE en el marco del presente contrato, sin límite de tiempo
ni de ámbito territorial. Esta cesión incluye el código fuente, la documentación técnica
y cualquier obra derivada de los Desarrollos."
```

### Régimen 2: Licencia de Uso al Cliente

El proveedor conserva la propiedad del código pero otorga al cliente una licencia de uso, más o menos amplia.

**Cuándo usar este régimen:**
- El proveedor usa un framework o código base propio que aplica a múltiples clientes
- El proveedor quiere poder reutilizar soluciones similares en el futuro
- El cliente no necesita el código fuente sino solo la solución funcionando

**Tipos de licencia que se pueden otorgar:**

| Tipo de licencia | Qué permite al cliente | Qué retiene el proveedor |
|---|---|---|
| Licencia de uso estándar | Usar el software, no modificarlo ni acceder al fuente | Todo lo demás |
| Licencia de uso + acceso a fuente | Usar y leer el código fuente, no redistribuirlo | Propiedad y derecho a usarlo en otros proyectos |
| Licencia perpetua irrevocable | Usar el software indefinidamente aunque el contrato termine | Propiedad intelectual formal |

### Régimen 3: El Modelo Híbrido (el más común en la práctica)

Se distingue entre el código preexistente del proveedor (frameworks, librerías, módulos reutilizables) y el código desarrollado específicamente para el cliente.

**La estructura del contrato híbrido:**
- Sobre el código preexistente: el proveedor concede una licencia de uso al cliente
- Sobre el código nuevo desarrollado específicamente: se cede al cliente

Este modelo protege los activos intelectuales del proveedor (su framework o módulos) mientras da al cliente la propiedad del valor específico que ha pagado.

## El Código Preexistente: El Gran Riesgo Legal

El código preexistente es el que el proveedor tenía antes del proyecto o ha desarrollado en paralelo para múltiples clientes. El riesgo:

**Para el cliente:** Si el contrato no es claro, puede que el código entregado tenga componentes cuya licencia no ha adquirido correctamente.

**Para el proveedor:** Si cedió todos los derechos sin excluir el código preexistente, puede haber cedido activos estratégicos sin valorarlos correctamente.

**Solución contractual: el Anexo de Código Preexistente**
Un anexo que lista explícitamente qué librerías, frameworks y módulos preexistentes se incorporan al proyecto, junto con las condiciones de licencia de cada uno.

## Las Cláusulas que No Pueden Faltar

**1. Garantía de originalidad:**
El proveedor garantiza que el código entregado no infringe derechos de terceros y que está libre de cargas o limitaciones que impidan la cesión o el uso.

**2. Acceso al código fuente:**
Si el cliente solo recibe el binario compilado, debe tener mecanismo de acceso al código fuente en caso de quiebra del proveedor o fin de la relación (escrow de código).

**3. Cesión de derechos morales (en lo legalmente posible):**
En España, los derechos morales son inalienables. Pero el autor puede comprometerse a no ejercerlos (no reclamar la autoría frente al cliente, por ejemplo).

**4. Tratamiento de las mejoras post-entrega:**
¿Quién es propietario de las mejoras que el proveedor realice en el futuro sobre el código entregado? Si no se pacta, puede generar conflictos.

## Entregables

Con el contexto que me des, produce:
1. Diagnóstico del régimen de PI más adecuado para tu situación (cesión total, licencia o híbrido)
2. Cláusula de propiedad intelectual completa para el contrato de desarrollo (adaptada a tu posición)
3. Anexo de código preexistente: plantilla para inventariar y definir la licencia de cada componente
4. Checklist de PI para revisar antes de firmar cualquier contrato de desarrollo
5. Protocolo de gestión del código fuente: repositorios, acceso post-proyecto y escrow de código
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir la propiedad intelectual del código en contratos de desarrollo a medida, protegiendo los intereses tanto del cliente como del proveedor con cláusulas correctamente redactadas',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Retención de clientes en riesgo de churn — el playbook de intervención temprana',
                'description'      => 'Diseña el sistema de detección y respuesta ante clientes en riesgo de churn: health score, señales de alerta, playbooks de intervención y métricas de éxito del equipo de customer success.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia en SaaS B2B con ciclos de renovación anuales y clientes de ticket medio-alto. Necesito diseñar o mejorar el sistema de detección y retención de clientes en riesgo de churn, pasando de una gestión reactiva a una intervención temprana sistemática.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es la tasa de churn actual (anual o mensual) y cuál es el objetivo?
2. ¿Tienes ya un health score de cliente o empezamos desde cero?
3. ¿Cuántos CSMs hay en el equipo y cuántas cuentas gestiona cada uno?
4. ¿Cuáles son las señales de alerta que ya identificas como precursoras de churn?
5. ¿Cuál es el plazo habitual entre la primera señal de riesgo y el aviso formal de no renovación?

## Los 3 Tipos de Churn y Por Qué Importa la Distinción

No todo el churn es igual ni tiene el mismo playbook:

| Tipo de churn | Causa | Señal | Intervención |
|---|---|---|---|
| Churn por falta de valor | El cliente no obtiene el ROI esperado | Baja adopción, bajo uso, tickets de soporte de frustración | Intervención de CS con sesión de valor |
| Churn por cambio de contexto | Cambio de dirección, M&A, recorte de presupuesto | Silencio del champion, cambio de interlocutor | Reposicionamiento y nuevo mapping de stakeholders |
| Churn por competencia | El cliente se va a una alternativa | Preguntas sobre exportación de datos, comparativas | Retención comercial + demostración de diferencial |

## El Health Score: El Motor de la Intervención Temprana

El health score es el indicador sintético que predice la probabilidad de renovación de cada cuenta. Sin él, el equipo de CS actúa a ciegas.

**Construcción de un health score básico:**

| Dimensión | Señales positivas | Señales negativas | Peso |
|---|---|---|---|
| Adopción del producto | Usuarios activos / licencias contratadas > 70%, uso de features clave | < 30% de usuarios activos, sin uso en > 14 días | 35% |
| Engagement con el proveedor | Asiste a QBRs, responde emails, participa en comunidad | Sin respuesta en > 30 días, rechaza reuniones | 20% |
| ROI percibido | Menciona resultados positivos, solicita expansión | Nunca menciona resultados, solicita downsell | 25% |
| Soporte y satisfacción | NPS alto, tickets resueltos, satisfacción con respuestas | NPS bajo, tickets de alta frustración, escalados | 15% |
| Estabilidad del contacto | Mismo champion activo | Cambio de champion, restructuración del equipo | 5% |

**Clasificación de health:**
- Verde (80-100): Sin riesgo. Candidato a expansión.
- Amarillo (50-79): Riesgo latente. Intervención proactiva en 2-4 semanas.
- Rojo (0-49): Alto riesgo. Intervención urgente en < 5 días hábiles.

## El Playbook de Intervención por Nivel de Riesgo

### Cuenta Amarilla: Intervención Proactiva

**Trigger:** Health score cae a zona amarilla o se detectan 2+ señales de alerta.

**Secuencia de acciones:**

| Día | Acción | Responsable |
|---|---|---|
| 1 | Revisión interna: análisis del historial de la cuenta, uso del producto, tickets recientes | CSM |
| 2 | Email de "check-in de valor" (no de alerta, de apoyo) | CSM |
| 5 | Llamada de 30 minutos para identificar retos del cliente y reforzar el valor percibido | CSM |
| 7 | Sesión de formación o best practices si la adopción es baja | CSM + Success Engineer |
| 14 | Revisión interna: ¿ha mejorado el health score? ¿escalamos? | CSM + Manager |

**Template de email de check-in de valor:**
```
Asunto: [Empresa] — ¿Cómo va el uso de [producto] en el equipo?

Hola [Nombre],

Llevo unas semanas revisando cómo va el uso de [producto] en [empresa] y quería
conectar contigo para ver cómo está yendo.

Especialmente me gustaría entender cómo está usando el equipo [feature principal]
y si hay algo en lo que podamos apoyaros para sacarle más partido.

¿Tienes 20-30 minutos esta semana o la próxima para una llamada rápida?

Un saludo,
[Nombre CSM]
```

### Cuenta Roja: Intervención de Retención

**Trigger:** Health score en rojo, aviso de no renovación, silencio prolongado.

**Secuencia de acciones:**

| Día | Acción | Responsable |
|---|---|---|
| 1 | Escalado interno: informar a Manager de CS y, si el ARR > umbral, al VP | CSM |
| 1 | Llamada urgente al champion: "He visto que [señal]. ¿Qué está pasando?" | CSM |
| 2 | Si no hay respuesta: buscar contacto alternativo en la cuenta (otro usuario, otro manager) | CSM |
| 3 | Preparar "propuesta de retención": qué ofrecer (descuento, feature anticipada, servicio adicional) | CSM + Sales |
| 5 | Executive outreach si el ARR lo justifica: email o llamada del VP de CS o CEO | VP CS |
| 7 | Reunión de retención: presentar el análisis de valor obtenido + propuesta | CSM + ejecutivo |
| 14 | Decisión: si no hay señal de retención, preparar offboarding ordenado | CSM |

## Las Señales de Alerta Tempranas: Tu Sistema de Radar

No esperes a que el cliente diga "no renovamos". Estas señales aparecen semanas o meses antes:

**Señales de comportamiento en el producto:**
- Reducción del 30%+ en el uso semanal durante 2 semanas consecutivas
- Número de usuarios activos / licencias cae por debajo del 40%
- El champion deja de ser el usuario más activo
- Aumentan los exports masivos de datos (posible migración)

**Señales de relación:**
- No responde emails en > 10 días hábiles
- Cancela la QBR sin reprogramar
- Solicita reunión con "temas importantes a tratar" sin agenda previa
- El champion cambia de cargo o sale de la empresa

**Señales comerciales:**
- Preguntas sobre la política de exportación de datos o cancelación
- Solicitud de downsell del plan
- Petición de reunión con el equipo legal o de compras sin contexto previo

## Las Métricas del Programa de Retención

| Métrica | Definición | Objetivo |
|---|---|---|
| Net Revenue Retention (NRR) | (MRR inicio + expansión - churn - downsell) / MRR inicio | > 100% |
| Churn Rate | MRR perdido por cancelaciones / MRR inicio del período | < 5% anual (SaaS B2B) |
| At-risk accounts saved | % de cuentas rojas que se retuvieron | > 50% |
| Time to detect churn risk | Días desde primera señal hasta apertura de playbook | < 14 días |
| QBR completion rate | % de cuentas con QBR realizada en el trimestre | > 80% en cuentas tier 1 |

## Entregables

Con el contexto que me des, produce:
1. Modelo de health score completo: dimensiones, señales, pesos y clasificación para tu producto
2. Playbook de intervención amarilla y roja en formato de checklist ejecutable
3. Templates de emails y scripts de llamada para cada tipo de intervención
4. Dashboard de churn risk: qué métricas monitorizar, con qué frecuencia y en qué herramienta
5. Protocolo de escalado interno: cuándo involucrar al manager, al VP y al CEO en la retención
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un sistema de detección y retención de clientes en riesgo de churn con health score, señales de alerta y playbooks de intervención temprana',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de varios clientes simultáneos como freelance — priorización y comunicación',
                'description'      => 'Aprende a gestionar múltiples clientes al mismo tiempo como freelance sin mezclar proyectos, decepcionar a nadie ni perder la calidad: sistemas de priorización, comunicación y gestión del tiempo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de productividad especializado en profesionales independientes y freelancers con experiencia en la gestión simultánea de múltiples proyectos de cliente. Necesito sistemas y estrategias para gestionar varios clientes al mismo tiempo sin perder calidad, sin decepcionar a nadie y sin acabar cada semana agotado.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántos clientes activos tienes ahora y cuántos es el máximo que puedes gestionar bien?
2. ¿Cuál es el tipo de trabajo? (proyectos con entregables, servicios continuos de mantenimiento, consultoría por horas)
3. ¿Cuál es el problema principal ahora: gestión del tiempo, comunicación con clientes, calidad del trabajo o gestión mental?
4. ¿Qué herramientas usas actualmente para gestionar los proyectos? (Notion, Trello, ClickUp, papel)
5. ¿Tienes ya días o bloques de tiempo dedicados a cada cliente o todo está mezclado?

## El Error Fundamental: Tratar a Todos los Clientes Como Urgentes

El mayor problema de los freelancers con múltiples clientes no es falta de tiempo: es la gestión de la atención. Cuando todo parece urgente y cualquier mensaje de cualquier cliente puede llegar en cualquier momento, el resultado es:
- Cambios de contexto constantes que destruyen la concentración
- Trabajo superficial en todo porque nunca hay tiempo de profundidad en nada
- Errores por mezclar contextos de proyectos distintos
- Estrés permanente aunque el volumen de trabajo sea manejable

## El Sistema de Bloques: La Base de Todo

El principio fundamental es asignar bloques de tiempo dedicados a cada cliente, no mezclar clientes en el mismo bloque. El trabajo en profundidad requiere contexto, y el contexto tarda entre 15 y 20 minutos en cargarse tras cada interrupción.

**Modelo de semana con 3 clientes:**

```
LUNES        MARTES       MIÉRCOLES    JUEVES       VIERNES
┌──────────┐ ┌──────────┐ ┌──────────┐ ┌──────────┐ ┌──────────┐
│ Cliente A│ │ Cliente B│ │ Cliente C│ │ Cliente A│ │ Admin +  │
│ 9-13h    │ │ 9-13h    │ │ 9-13h    │ │ 9-13h    │ │ Revisión │
├──────────┤ ├──────────┤ ├──────────┤ ├──────────┤ │ 9-11h    │
│ Cliente B│ │ Cliente C│ │ Cliente A│ │ Cliente B│ ├──────────┤
│ 14-17h   │ │ 14-17h   │ │ 14-17h   │ │ 14-17h   │ │ Buffer   │
└──────────┘ └──────────┘ └──────────┘ └──────────┘ │ urgencias│
                                                      │ 11-13h   │
                                                      └──────────┘
```

**Reglas del sistema de bloques:**
1. Durante el bloque de un cliente, solo existe ese cliente
2. Los emails de otros clientes se responden al final del día o en su propio bloque, no en tiempo real
3. El viernes es el día de admin, revisión y buffer: no se programa trabajo de cliente
4. El buffer del viernes absorbe los imprevistos de la semana sin romper los bloques

## Cómo Establecer los Límites de Comunicación con los Clientes

La mayoría de freelancers reciben mensajes 7 días a la semana y responden casi en tiempo real. Esto crea la expectativa de disponibilidad permanente, que es insostenible y destruye la productividad.

**El protocolo de comunicación que funciona:**

En el primer onboarding de cada cliente, comunica explícitamente:
- Horario de respuesta a emails: "Respondo emails de lunes a viernes en horario de mañana"
- Canal preferente: "Para temas urgentes, WhatsApp. Para el resto, email"
- Definición de urgente: "Urgente es algo que impide continuar el trabajo. Las dudas no urgentes esperan a la próxima reunión"
- Cadencia de reuniones: "Nuestra reunión semanal/quincenal es el espacio para alinear. Lo que no sea urgente lo guardamos para ahí"

**Lo que no dicen los clientes pero piensan:**
La mayoría de clientes no necesitan respuesta inmediata. Agradecen saber que su mensaje ha sido recibido y cuándo tendrán respuesta. Un acuse de recibo automático o un mensaje rápido de "lo reviso esta tarde" elimina la ansiedad sin requerir una respuesta completa inmediata.

## Sistema de Gestión de Proyectos por Cliente

Cada cliente necesita su propio espacio de gestión, separado de los demás. Mezclarlos es la receta para los errores.

**Estructura mínima por cliente:**
```
CLIENTE: [Nombre]
├── 📋 Tareas activas (con fecha de entrega)
├── 📅 Próxima reunión y agenda
├── 📁 Entregables (en progreso / entregados / aprobados)
├── 💬 Log de comunicaciones importantes
├── 📝 Briefings y contexto del proyecto
└── 💰 Facturación (horas, entregables, estado de pago)
```

**Herramienta por tipo de freelancer:**
- Trabajo visual o de diseño: Notion + Figma separados por cliente
- Desarrollo: GitHub + Notion por cliente
- Consultoría: Notion o Obsidian por cliente con templates reutilizables
- Marketing: ClickUp o Notion con vistas de calendario compartidas con el cliente

## El Ritual Semanal: La Revisión de Lunes

Antes de empezar la semana, dedica 30-45 minutos a:

1. **Revisar el estado de cada cliente:** ¿qué está pendiente, qué se entrega esta semana, qué está bloqueado?
2. **Asignar los bloques de tiempo:** distribuye las tareas en los bloques del horario semanal
3. **Identificar riesgos:** ¿alguna entrega esta semana que requiera más tiempo del previsto?
4. **Comunicación proactiva:** si algún cliente tiene una entrega esta semana, envía un update antes de que pregunte

**La regla de la comunicación proactiva:**
El cliente que más interrumpe es el que menos información recibe. Un update proactivo de 3 líneas ("Esta semana trabajo en X, el martes te mando Y, cualquier duda estoy disponible el jueves") elimina el 80% de los mensajes de seguimiento.

## Cómo Decir No a Trabajo Extra Sin Perder al Cliente

El problema de los freelancers con varios clientes: cuando uno pide algo fuera del alcance, la presión de no decepcionar lleva a aceptar y comprometer el tiempo de los demás.

**El script para gestionar el trabajo extra:**
"Esto me parece interesante y lo quiero hacer bien. Mi agenda actual está planificada hasta [fecha]. Puedo empezar esto el [fecha real] o, si necesitas que sea antes, podemos ver qué desplazamos del alcance actual."

## Entregables

Con el contexto que me des, produce:
1. Diseño de tu semana ideal: bloques de tiempo por cliente con horario de comunicación
2. Template de gestión por cliente adaptado a tu herramienta actual
3. Protocolo de comunicación para enviar en el onboarding de cada nuevo cliente
4. Ritual semanal de revisión: agenda y checklist de los 30 minutos del lunes
5. Scripts para las situaciones más frecuentes: petición de trabajo urgente, trabajo fuera de alcance, retraso en entrega
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el sistema de gestión de múltiples clientes simultáneos como freelance con bloques de tiempo, protocolos de comunicación y herramientas de seguimiento',
                'vote_score'       => 40,
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
