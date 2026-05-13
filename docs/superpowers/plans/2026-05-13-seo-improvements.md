# SEO Improvements Implementation Plan

> **For agentic workers:** REQUIRED SUB-SKILL: Use superpowers:subagent-driven-development (recommended) or superpowers:executing-plans to implement this plan task-by-task. Steps use checkbox (`- [ ]`) syntax for tracking.

**Goal:** Fix all critical SEO gaps across ia-skills: og:image, títulos de marca, JSON-LD correcto, canonicals, BreadcrumbList y HowItWorks meta.

**Architecture:** Cambios 100% en frontend (Vue pages + blade). Sin backend nuevo. Sin SSR (requiere Node separado — fuera de scope). og:image estática servida desde `/public/og-default.png`.

**Tech Stack:** Vue 3, Inertia.js `<Head>`, Tailwind, Laravel Blade

---

## Estado actual (diagnóstico)

| Página | title | description | canonical | og:image | JSON-LD |
|--------|-------|-------------|-----------|----------|---------|
| Welcome | ✅ | ✅ | ✅ | ❌ | ✅ WebSite |
| Skills/Index | ✅ | ✅ | ✅ | ❌ | ❌ |
| Skills/Show | ⚠️ sin sufijo marca | ✅ | ✅ | ❌ | ⚠️ author bug |
| Professions/Index | ✅ | ✅ | ❌ | ❌ | ❌ |
| Professions/Show | ✅ | ✅ | ✅ | ❌ | ❌ |
| HowItWorks | ❌ | ❌ | ❌ | ❌ | ❌ |

## File Map

- Modify: `resources/views/app.blade.php` — og:image default global
- Modify: `resources/js/Pages/Skills/Show.vue` — title, og:image, JSON-LD fix, BreadcrumbList
- Modify: `resources/js/Pages/Skills/Index.vue` — og:image, ItemList JSON-LD, canonical filtered
- Modify: `resources/js/Pages/Professions/Index.vue` — canonical, og:image
- Modify: `resources/js/Pages/Professions/Show.vue` — og:image, BreadcrumbList JSON-LD
- Modify: `resources/js/Pages/HowItWorks.vue` — Head completo
- Create: `public/og-default.svg` — imagen OG por defecto (800×420)

---

## Task 1: Crear og:image por defecto

**Files:**
- Create: `public/og-default.svg`
- Modify: `resources/views/app.blade.php`

- [ ] **Step 1: Crear imagen OG SVG**

```svg
<!-- public/og-default.svg -->
<svg xmlns="http://www.w3.org/2000/svg" width="1200" height="630" viewBox="0 0 1200 630">
  <rect width="1200" height="630" fill="#0f172a"/>
  <text x="600" y="260" font-family="system-ui,sans-serif" font-size="80" font-weight="bold" fill="white" text-anchor="middle">⚡ ia-skills</text>
  <text x="600" y="360" font-family="system-ui,sans-serif" font-size="36" fill="#94a3b8" text-anchor="middle">La biblioteca colaborativa de skills de IA</text>
  <text x="600" y="430" font-family="system-ui,sans-serif" font-size="28" fill="#6366f1" text-anchor="middle">ia-skills.com</text>
</svg>
```

- [ ] **Step 2: Añadir og:image global fallback en app.blade.php**

En `resources/views/app.blade.php`, añadir dentro de `<head>` tras el `<title>`:
```html
<meta property="og:image" content="{{ config('app.url') }}/og-default.svg">
<meta name="twitter:image" content="{{ config('app.url') }}/og-default.svg">
<meta name="twitter:card" content="summary_large_image">
```

- [ ] **Step 3: Commit**

```bash
git add public/og-default.svg resources/views/app.blade.php
git commit -m "seo: add default og:image and twitter card global"
git push
```

---

## Task 2: Corregir Skills/Show — título, og:image, JSON-LD

**Files:**
- Modify: `resources/js/Pages/Skills/Show.vue` (líneas 151-162 Head block, líneas 15-27 jsonLd computed)

- [ ] **Step 1: Corregir Head block en Show.vue**

Reemplazar el bloque `<Head>` actual (líneas 151-162) por:
```html
<Head>
    <title>{{ skill.title }} — ia-skills</title>
    <meta name="description" :content="skill.description" />
    <link rel="canonical" :href="route('skills.show', { skill: skill.slug })" />
    <meta property="og:type" content="article" />
    <meta property="og:url" :content="route('skills.show', { skill: skill.slug })" />
    <meta property="og:title" :content="`${skill.title} — ia-skills`" />
    <meta property="og:description" :content="skill.description" />
    <meta property="og:image" content="/og-default.svg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" :content="`${skill.title} — ia-skills`" />
    <meta name="twitter:description" :content="skill.description" />
    <meta name="twitter:image" content="/og-default.svg" />
</Head>
```

- [ ] **Step 2: Corregir JSON-LD — bug author undefined**

Reemplazar el computed `jsonLd` (líneas 15-27):
```javascript
const jsonLd = computed(() => JSON.stringify({
    '@context': 'https://schema.org',
    '@type': 'HowTo',
    'name': props.skill.title,
    'description': props.skill.description,
    'tool': [{ '@type': 'HowToTool', 'name': props.skill.tool_name }],
    ...(props.skill.author ? {
        'author': { '@type': 'Person', 'name': props.skill.author.name }
    } : {}),
    'datePublished': props.skill.created_at,
    'dateModified': props.skill.updated_at,
}))
```

- [ ] **Step 3: Añadir BreadcrumbList JSON-LD tras el HowTo script tag**

Busca en el template el `<component :is="'script'" type="application/ld+json"` de jsonLd y añade después:
```html
<component :is="'script'" type="application/ld+json" :innerHTML='JSON.stringify({
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Skills", "item": route("skills.index") },
        { "@type": "ListItem", "position": 2, "name": skill.profession?.name, "item": route("professions.show", { profession: skill.profession?.slug }) },
        { "@type": "ListItem", "position": 3, "name": skill.title }
    ]
})' />
```

- [ ] **Step 4: Commit**

```bash
git add resources/js/Pages/Skills/Show.vue
git commit -m "seo: fix skill page title brand, og:image, JSON-LD author bug, breadcrumb"
git push
```

---

## Task 3: Professions/Index — añadir canonical y og:image

**Files:**
- Modify: `resources/js/Pages/Professions/Index.vue`

- [ ] **Step 1: Actualizar Head block**

Reemplazar el `<Head>` actual (líneas 9-18) por:
```html
<Head>
    <title>Skills de IA por profesión — ia-skills</title>
    <meta name="description" content="Explora skills de IA organizadas por profesión: marketing, desarrollo, diseño, ventas, RRHH y más." />
    <link rel="canonical" :href="route('professions.index')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" :content="route('professions.index')" />
    <meta property="og:title" content="Skills de IA por profesión — ia-skills" />
    <meta property="og:description" content="Explora skills de IA organizadas por profesión: marketing, desarrollo, diseño, ventas, RRHH y más." />
    <meta property="og:image" content="/og-default.svg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="/og-default.svg" />
</Head>
```

- [ ] **Step 2: Commit**

```bash
git add resources/js/Pages/Professions/Index.vue
git commit -m "seo: add canonical and og:image to professions index"
git push
```

---

## Task 4: Professions/Show — og:image y BreadcrumbList

**Files:**
- Modify: `resources/js/Pages/Professions/Show.vue`

- [ ] **Step 1: Actualizar Head block**

Reemplazar el `<Head>` actual por:
```html
<Head>
    <title>Skills de IA para {{ profession.name }} — ia-skills</title>
    <meta name="description" :content="`Los mejores workflows y prompts de IA para ${profession.name}. ${profession.skills_count ?? ''} skills validadas por la comunidad.`" />
    <link rel="canonical" :href="route('professions.show', { profession: profession.slug })" />
    <meta property="og:type" content="website" />
    <meta property="og:url" :content="route('professions.show', { profession: profession.slug })" />
    <meta property="og:title" :content="`Skills de IA para ${profession.name} — ia-skills`" />
    <meta property="og:description" :content="`Los mejores workflows y prompts de IA para ${profession.name}. Validados por la comunidad.`" />
    <meta property="og:image" content="/og-default.svg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="/og-default.svg" />
</Head>
```

- [ ] **Step 2: Añadir BreadcrumbList JSON-LD en el template**

Justo después del `<Head>` y antes de `<AppLayout>`:
```html
<component :is="'script'" type="application/ld+json" :innerHTML='JSON.stringify({
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        { "@type": "ListItem", "position": 1, "name": "Profesiones", "item": route("professions.index") },
        { "@type": "ListItem", "position": 2, "name": profession.name }
    ]
})' />
```

- [ ] **Step 3: Commit**

```bash
git add resources/js/Pages/Professions/Show.vue
git commit -m "seo: add og:image and breadcrumb JSON-LD to profession page"
git push
```

---

## Task 5: HowItWorks — Head completo

**Files:**
- Modify: `resources/js/Pages/HowItWorks.vue`

- [ ] **Step 1: Verificar imports actuales**

```bash
grep -n "^import\|^<script" resources/js/Pages/HowItWorks.vue | head -10
```

- [ ] **Step 2: Añadir import Head si no existe**

En el `<script setup>`, añadir/actualizar import:
```javascript
import { Head } from '@inertiajs/vue3'
```

- [ ] **Step 3: Añadir Head block en el template**

Como primer hijo del `<template>`, antes del layout o primer div:
```html
<Head>
    <title>Cómo funciona ia-skills — Aprende a usar skills de IA</title>
    <meta name="description" content="Descubre cómo importar, usar y compartir skills de IA con ia-skills. Guía paso a paso para sacar el máximo partido a tus herramientas de IA." />
    <link rel="canonical" :href="route('how-it-works')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" :content="route('how-it-works')" />
    <meta property="og:title" content="Cómo funciona ia-skills — Aprende a usar skills de IA" />
    <meta property="og:description" content="Descubre cómo importar, usar y compartir skills de IA con ia-skills." />
    <meta property="og:image" content="/og-default.svg" />
    <meta name="twitter:card" content="summary_large_image" />
</Head>
```

- [ ] **Step 4: Commit**

```bash
git add resources/js/Pages/HowItWorks.vue
git commit -m "seo: add full meta tags to how-it-works page"
git push
```

---

## Task 6: Skills/Index — og:image y canonical con filtros

**Files:**
- Modify: `resources/js/Pages/Skills/Index.vue`

- [ ] **Step 1: Actualizar Head block (líneas 50-59)**

Reemplazar por:
```html
<Head>
    <title>Explorar Skills de IA para profesionales — ia-skills</title>
    <meta name="description" content="Explora la biblioteca de workflows, prompts y técnicas de IA para profesionales. Filtrados por profesión, herramienta y dificultad." />
    <link rel="canonical" :href="route('skills.index')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" :content="route('skills.index')" />
    <meta property="og:title" content="Explorar Skills de IA para profesionales — ia-skills" />
    <meta property="og:description" content="Explora la biblioteca de workflows, prompts y técnicas de IA para profesionales. Filtrados por profesión, herramienta y dificultad." />
    <meta property="og:image" content="/og-default.svg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="/og-default.svg" />
</Head>
```

- [ ] **Step 2: Commit**

```bash
git add resources/js/Pages/Skills/Index.vue
git commit -m "seo: add og:image and improved title to skills index"
git push
```

---

## Task 7: Verificar en producción

- [ ] **Step 1: Verificar meta tags con curl**

```bash
curl -s https://ia-skills.com | grep -E 'og:|twitter:|canonical|description'
curl -s https://ia-skills.com/skills/$(curl -s "https://ia-skills.com/skills" | grep -o 'href="/skills/[^"]*"' | head -1 | cut -d'"' -f2 | cut -d'/' -f3) | grep -E 'og:|title'
```

- [ ] **Step 2: Validar JSON-LD**

Abre en navegador: `https://search.google.com/test/rich-results?url=https://ia-skills.com`

- [ ] **Step 3: Verificar sitemap**

```bash
curl -s https://ia-skills.com/sitemap.xml | grep -c "<url>"
```

- [ ] **Step 4: Submit sitemap a Google Search Console**

En Google Search Console → Sitemaps → añadir `https://ia-skills.com/sitemap.xml`
