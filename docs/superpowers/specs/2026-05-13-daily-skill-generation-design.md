# Daily Skill Generation Design

**Date:** 2026-05-13
**Status:** Approved

## Goal

Enable on-demand generation of 5-20 new published skills per day by fetching trending AI content from the web, generating high-quality skill content, and inserting directly into production DB — triggered manually from a Claude Code session.

## Architecture

Claude Code session acts as the orchestrator:
1. Fetches web content via WebSearch/WebFetch (no API keys required)
2. Generates skill JSON using Claude's own intelligence (zero API cost)
3. Writes JSON to temp file
4. Executes `php artisan skills:import {file}` on the VPS to insert records

No cron, no automation, no external API keys needed beyond what already exists.

## Data Sources

| Source | Endpoint | Filter |
|--------|----------|--------|
| Hacker News | `https://hacker-news.firebaseio.com/v0/topstories.json` + item API | keywords: prompt, workflow, Claude, GPT, AI tool, automation |
| Reddit | `https://www.reddit.com/r/ChatGPT+ClaudeAI+PromptEngineering/new.json` | top posts last 24h |
| Anthropic Blog | `https://www.anthropic.com/blog` | new posts |
| HuggingFace Blog | `https://huggingface.co/blog` | new model/tool announcements |

## Skill Generation Format

Claude generates an array of skill objects:

```json
[
  {
    "title": "string — descriptive, action-oriented, in Spanish",
    "description": "string — 1-3 sentences, what the skill does, max 500 chars",
    "prompt_content": "string — full markdown prompt/workflow, min 200 chars",
    "tool_name": "Claude|ChatGPT|Gemini|Perplexity|Midjourney|Zapier|Make|Otro",
    "difficulty": "beginner|intermediate|advanced",
    "use_case": "string — one line context, max 200 chars",
    "profession_slug": "string — must match existing profession slug in DB",
    "resource_type": "prompt|claude_skill|claude_plugin"
  }
]
```

### Content rules
- All text in **Spanish**
- `prompt_content` includes concrete instructions, not vague descriptions
- `profession_slug` balanced across available professions (no single profession > 40% of batch)
- Derived from real web content found that session (not hallucinated)

## Import Command

New Artisan command: `php artisan skills:import {file}`

**Responsibilities:**
- Read and validate JSON file
- Map `profession_slug` → `profession_id` (abort skill if profession not found)
- Generate unique slug from title (append `-2`, `-3` on collision)
- Insert with: `user_id=1`, `status=published`, `version=1`, `vote_score=0`
- Create matching `SkillVersion` record (version=1, changelog="Generado automáticamente")
- Output summary: inserted count, skipped count, any errors
- Max 20 skills per invocation (hard limit, reject file if > 20 items)

## Workflow (per session)

```
User: "genera X skills"
Claude:
  1. WebSearch/WebFetch → HN + Reddit + RSS (2-4 sources)
  2. Filter 10-30 relevant items
  3. Generate N skill objects in JSON
  4. Write to /tmp/ia_skills_import_YYYYMMDD.json
  5. Run: php artisan skills:import /tmp/ia_skills_import_YYYYMMDD.json
  6. Verify: query DB for newly inserted slugs
  7. Report: "Insertadas N skills: [title list with URLs]"
```

## Deduplication

- Slug collision → append counter suffix (`mi-skill`, `mi-skill-2`)
- Title similarity check: skip if a skill with identical title already exists (case-insensitive)

## Files to Create/Modify

| File | Action |
|------|--------|
| `app/Console/Commands/SkillImportCommand.php` | Create — Artisan command |
| `app/Console/Kernel.php` or `routes/console.php` | Modify — register command |

## Out of Scope

- Automated cron/scheduling (manual trigger only)
- Image generation per skill
- Translation (Spanish only)
- Quality scoring / auto-rejection
- SSR for SEO of new skills (existing sitemap covers them)
