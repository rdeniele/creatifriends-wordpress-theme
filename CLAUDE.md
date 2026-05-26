# CLAUDE.md

A reflection on building the **CreatiFriends** WordPress block theme with Claude Code as the primary development tool.

This document is meant for the evaluator. It explains *how* the theme was built, not just *what* was built. The README covers usage; this one covers reasoning, tradeoffs, and the parts that didn't go cleanly the first time.

---

## How Claude Code was used

Claude Code (Sonnet/Opus class, in a CLI harness with file-system + shell tools) was the primary surface for every line of code in this theme. The workflow was conversational and incremental: I described what I wanted, Claude wrote a first pass, I read the diff and either accepted, redirected, or asked for a refinement.

Concretely, the tools that mattered most were:

- **`Read` / `Edit` / `Write`** — direct file manipulation, with Edit preferred for surgical changes so I could review diffs rather than full rewrites.
- **`Bash` / `PowerShell`** — running the WordPress Studio CLI (`studio wp eval`, `studio site status`), poking the live site over HTTP to verify rendering, and validating `theme.json` with `ConvertFrom-Json` since PHP wasn't on the PATH.
- **`TaskCreate` / `TaskUpdate`** — keeping a visible to-do list across the long build. Important because some sessions were paused and resumed across days; the task list was a faithful pointer to where I'd left off.
- **`Glob` / `Grep`** — not used heavily here (small codebase), but useful for confirming "what does my `theme.json` actually export as preset CSS variables" by grepping `var(--wp--preset--`.

What Claude Code is *not* good at, and what I had to handle: trusting that a generated pattern actually rendered. WordPress patterns silently fail when the registry is stale (more on that below). I learned to fetch the live page over HTTP and grep for canary strings after every meaningful change.

## Prompting strategy

The build followed an iterative, section-based approach. I deliberately avoided giving Claude a single mega-prompt of "build a whole agency theme" because:

1. Large monolithic prompts produce plausible but unverifiable output. I want to read each section before the next one is built on top of it.
2. The visual direction was going to shift during the build — and it did, twice. Smaller chunks meant the pivots were cheap.
3. I wanted to keep a clean audit trail of *why* each piece looks the way it does.

The pattern I converged on:

```
1. Describe the goal in one paragraph (what the section does + why).
2. Specify constraints (tokens to use, what to avoid, where to keep things editable).
3. Ask for a first pass.
4. Read the diff. Run the page. Look at it in a browser.
5. Refine with a tight follow-up ("the scroll cue overlaps the meta strip; fix the spacing").
```

The build broke into roughly six phases:

| Phase                       | Prompt focus                                      | What was produced                            |
| --------------------------- | ------------------------------------------------- | -------------------------------------------- |
| 1. Scaffold                 | Theme metadata, `theme.json`, `functions.php`     | Bootstrapped block theme                     |
| 2. Template parts           | header (2 variants), footer, sidebar, comments    | Reusable chrome                              |
| 3. Templates                | All standard views + custom page templates        | Pattern-driven, thin                         |
| 4. Hero pattern             | One section, refined heavily                      | Full-bleed cinematic hero with glass badge   |
| 5. Design system pivots     | Color + typography + radius direction changes     | Three distinct iterations of the same theme  |
| 6. Section patterns + docs  | About, services, work, testimonials, CTA, footer  | Complete pattern library + README + CLAUDE   |

What I noticed: the most productive prompts were the ones that quoted exact hex values, exact pixel radii, exact font names. Phrases like "premium feel" or "cinematic" alone produced fine-but-generic output. Phrases like "premium feel — base #0A0A0A, accent #D4AF37, hairline borders #2A2A2A, Space Grotesk + Inter only" produced output I could ship.

## Architecture decisions

### Block theme, not classic

Non-negotiable. The brief required Full Site Editing compatibility, so everything is `theme.json` + HTML templates + PHP patterns. No `functions.php` doing template rendering, no enqueued JS framework, no compiled CSS pipeline.

### Templates orchestrate, patterns hold content

The single architectural decision that paid off the most was treating templates as *thin orchestrators*. `front-page.html` is six `<!-- wp:pattern -->` references inside a `<main>`. It contains no section markup of its own. This matters because:

- Editors can rearrange, duplicate, or remove sections in Site Editor without ever opening a template file.
- A change to the about section only edits `patterns/about-intro.php` — no template diff.
- Patterns can be inserted into any page (About page can reuse `about-intro` and `cta-banner`).

The footer is the cleanest example of this. `parts/footer.html` is *one line*:

```html
<!-- wp:pattern {"slug":"creatifriends/footer-extended"} /-->
```

All the actual footer markup lives in `patterns/footer-extended.php`. The template part exists to satisfy the WordPress template-part contract; the content lives in the pattern system where it can be edited, duplicated, or replaced.

### Header navigation is hardcoded (not page-list)

I started with `<!-- wp:page-list /-->` which auto-generates from published pages. I swapped it for explicit `<!-- wp:navigation-link -->` children with the four primary items (Services, Studio, Work, Contact). Reason: on a fresh activation with no pages created, `page-list` renders an empty menu. Hardcoding the items guarantees the navigation is correct out of the box, and Site Editor still lets the user edit each link.

### Two header variants, one footer

`header.html` (transparent sticky, blurs the content behind it) is the default. `header-dark.html` (solid surface bar) is registered as a second template part for pages where the transparent approach doesn't read well. The footer has only one variant because the extended pattern is flexible enough to cover all surfaces.

### Custom templates for page variants

Two custom page templates are registered in `theme.json`:

- `page-wide` — no sidebar, content goes full-width
- `page-landing` — no header or footer chrome, for promotional landing pages

These are real templates the user can assign from the page-edit sidebar, not pattern variants. Tradeoff: more templates to maintain, but the user gets a true "no chrome" option that pattern composition can't provide.

## Design system decisions

### Why dark by default

The brief specified `#0A0A0A` as the background and `#FFFFFF` as primary text. Rather than build a light theme and invert it for sections, the entire `theme.json` is dark-first:

```json
"styles": {
  "color": {
    "background": "var(--wp--preset--color--base)",
    "text": "var(--wp--preset--color--contrast)"
  }
}
```

This makes section backgrounds alternate cleanly between `base` (#0A0A0A) and `surface` (#111111) for rhythm, and means every block style variation (card, glow-panel, etc.) is designed for dark from the start — no "remember to invert on dark sections" trap.

### Why gold is the *only* accent

The palette has eight slugs but only one is chromatic: `accent` (#D4AF37). Everything else is a tone of black, white, or gray. This was deliberate — when there's exactly one accent color, restraint becomes the design language. Gold gets used for:

- Eyebrows ("— What We Do") and `<h6>`
- Active/hover navigation underlines
- Pulsing dot on the hero status badge
- The accent word inside select headings (`<span class="cf-accent">`)
- Primary button fill
- Separator gradient (`linear-gradient(90deg, transparent, gold, transparent)`)
- Focus rings

Nothing else gets color. Borders are `#2A2A2A`, body text is white, secondary text is `#B3B3B3`. The restraint is the brand.

### Why Space Grotesk + Inter (after pivoting from Cormorant Garamond)

The theme went through three typography iterations:

1. **Inter + Space Grotesk** (initial scaffold) — modern but didn't feel "luxury".
2. **Inter + Cormorant Garamond serif** — felt editorial-luxury, but the brief later specified Space Grotesk for headings.
3. **Inter + Space Grotesk** (final) — geometric headings, neutral body, single tight pairing.

The Cormorant pass introduced features I had to undo: italic affordances (`em` inside headings was styled as gold italic accent), serif quote styling, italic site title. When the family changed to Space Grotesk (which has no italic worth using), I had to walk back through `theme.json` and `app.css` and remove those italic-era styles. Tradeoff lesson: when I make a design system bet, I shouldn't paint italic-specific behavior into the base layer; better to keep accents in opt-in classes.

### Why 16–24px radii, not zero

The Cormorant phase used 0px radii everywhere — squared edges read as editorial-luxury. The final brief asked for 16–24px radii. The change ripples through:

- Cards: 20px
- Glow panel: 24px
- Glass utility / hero badge: 24px / pill
- Images: 16px default, 20px for `.is-style-rounded-xl`
- Buttons: 12px
- Inputs: 16px

I kept hairlines and underlines sharp (no radius) so the soft surfaces feel intentional, not generic.

### Fluid spacing scale

All spacing is `clamp()`:

```json
{ "slug": "70", "name": "X-Large",  "size": "clamp(3.5rem, 7vw, 6rem)" },
{ "slug": "80", "name": "2X-Large", "size": "clamp(5rem, 10vw, 8.5rem)" }
```

This means I write `var:preset|spacing|80` once and the value adapts from 5rem on mobile to 8.5rem on a wide desktop, with a 10vw curve in between. Almost no per-breakpoint overrides were needed for spacing — only the hero CTA stacking and the scroll-cue hide use media queries.

### Editor parity

`assets/css/editor.css` mirrors the front-end for block style variations and the gold gradient text helper. When you preview a card or a glow panel inside Site Editor, it looks the same as on the front end. This is small but important — it removes the "design looks different in the editor" gripe that's the most common WordPress complaint I've seen.

## Debugging approach

Three issues came up repeatedly. Each is worth documenting because the failure mode is non-obvious.

### 1. The pattern cache that bit at the end

After writing the last five patterns, I composed `front-page.html` to reference them and refreshed the homepage. Only the hero rendered. The other five `<!-- wp:pattern -->` blocks resolved to *empty whitespace*.

The cause: WordPress caches the theme's pattern registry inside `WP_Theme::get_block_patterns()`. The cache key includes the theme version. Since I hadn't bumped the version, the cache served the stale list (which contained only `hero-headline` from earlier in the session). Newly added patterns were on disk but invisible.

The fix:

```php
wp_clean_themes_cache();
```

Verified by `wp eval` listing `WP_Block_Patterns_Registry::get_instance()->get_all_registered()`. After the cache clear, all six patterns appeared. Lesson: in development, either bump the theme version on every pattern add, or enable theme dev mode, or `wp_clean_themes_cache()` explicitly.

### 2. Hero scroll-cue overlapping the meta strip

The first hero pattern absolute-positioned the scroll cue at `bottom: 2rem` while the meta strip sat at the end of the centered content. On viewports between 720–900px tall, the two overlapped.

Diagnosis: spacing was being applied in *two* places — `blockGap` on the outer Group plus inline `margin-top: var:preset|spacing|60` on the meta-strip HTML block. The two stacked, pushing the meta strip lower into the reserved scroll lane.

Fix layers:

1. Remove all inline `margin-top` from hero children; rely solely on `blockGap` as the single source of vertical rhythm.
2. Increase cover `padding-bottom` (to `spacing|90`) so the absolute scroll cue has a reserved zone.
3. Add a `@media (max-height: 740px)` rule to hide the scroll cue on short viewports where overlap would be unavoidable.
4. Switch `min-height: 100vh` to `min-height: 100svh` so mobile browser chrome doesn't push the cover out of view.

Lesson: when spacing fights itself, find the duplication and pick one source. Never let two systems contribute to the same gap.

### 3. `theme.json` italics that didn't fit the family change

When I pivoted from Cormorant to Space Grotesk, the existing `core/pullquote`, `core/quote`, and `core/site-title` styles in `theme.json` still had `"fontStyle": "italic"`. Space Grotesk's italic is its regular roman slightly slanted by the browser — it looks terrible. Caught by visual inspection in the editor, not by any validator.

Fixed by walking the `styles.blocks.*` tree in `theme.json` and removing `fontStyle: italic` from every block-level rule. Lesson: schema validators ensure the file parses; they don't catch design regressions when you change a font family that doesn't share the previous family's affordances.

### General debugging loop

After a meaningful change, the loop was:

```powershell
# 1. Validate JSON
Get-Content 'theme.json' -Raw | ConvertFrom-Json

# 2. Fetch the live page
$h = (Invoke-WebRequest -Uri 'http://localhost:8881/' -UseBasicParsing).Content

# 3. Grep for canary strings
$h -match 'Creative Power'   # hero
$h -match 'A small studio'   # about-intro
# ...

# 4. If something missing, inspect the rendered HTML at the failure point
$h.Substring($h.IndexOf('cf-hero__meta'), 2000)
```

This is the workflow I'd recommend for any AI-assisted block theme work — *never trust* that a pattern rendered just because the file exists.

## Tradeoffs

Honest list of decisions that have a cost:

- **Google Fonts over self-hosted.** Inter and Space Grotesk are loaded from `fonts.googleapis.com`. Faster to ship, but adds a third-party request and a privacy footprint. For production, self-hosting with `font-display: swap` and a `preload` hint would be the right move. I documented this in the README.
- **External Unsplash URLs for hero/about/work images.** Editable in Site Editor but not in the media library until the user re-uploads. Acceptable for a demo, not for production content.
- **No JavaScript beyond what WordPress ships.** No prefetching, no scroll-triggered animations, no theme-specific JS module. The theme uses pure CSS animations (`@keyframes`) and the browser's native sticky-positioning. This keeps the bundle tiny but means motion is limited to what CSS can express.
- **No saved navigation menu.** The header uses inline `<!-- wp:navigation-link -->` children, not a saved `wp_navigation` post. Tradeoff: the user can't edit one menu and have it propagate to header + footer + mobile overlay. To get that, save the navigation block once and reference it via `ref`.
- **Demo content is hardcoded in patterns.** Project names ("Orbital Studio", "Atlas AI") and testimonial quotes are embedded. A more sophisticated approach would be a CPT or ACF block, but that's outside the scope of a block theme submission.
- **No contact form.** The CTA pattern points to `/contact` but there's no form. WordPress doesn't have a native form block, and bundling Contact Form 7 or similar felt like scope creep.
- **`home.html` and `index.html` are near-duplicates.** They both list latest posts. I considered factoring a `blog-listing` pattern, but the duplication is a single Query block — the cleanup felt like over-engineering for two files.

## Reusability

The pattern library is designed for composition. Each pattern is **self-contained, edge-to-edge, and tokenless** — meaning it takes no parameters and doesn't depend on its container.

That allows the following compositions, none of which required new templates:

| Page              | Patterns composed                                              |
| ----------------- | -------------------------------------------------------------- |
| Home (front-page) | hero → about-intro → services-grid → work-grid → testimonials → cta-banner |
| About             | about-intro → studio-story → studio-values → testimonials → cta-banner |
| Services          | services-grid → testimonials → cta-banner                      |
| Work              | work-grid → testimonials → cta-banner                          |
| Contact           | contact-form                                                   |

Block style variations (`is-style-card`, `is-style-glow-panel`, `is-style-outline-pill`) are the second reusability layer. Used inside patterns, they let any group or button reach into the design system without duplicating CSS.

Utility classes (`.cf-eyebrow`, `.cf-accent`, `.cf-glass`) are the third layer — for use cases where a block style variation would be overkill (single span of gold gradient text inside a heading, for example).

## What I would improve with more time

In rough priority order:

1. **Self-host the fonts** with `font-display: swap`, `preload`, and a `local()` declaration in `@font-face`. Drop the Google Fonts request entirely.
2. **Build slug-based page templates** for `page-about.html`, `page-services.html`, `page-work.html`, `page-contact.html` so those pages render correctly on first visit, before any manual Site Editor work. Currently the user has to create the page and insert patterns; I'd rather they create the page and get the layout free.
3. **Save the navigation as a `wp_navigation` post** and reference it by `ref:` across header, footer, and mobile overlay. Currently each location holds its own links.
4. **A real contact form pattern** built around a third-party form block (Contact Form 7 / WPForms / Gravity), with form-step styling baked into the design system.
5. **A proper CPT for "Work"** — the work grid currently hardcodes four projects. A `cf_project` custom post type with title, summary, hero image, and category taxonomy would make the portfolio editorially editable.
6. **Image optimization** — currently the Unsplash URLs are `w=2400&q=80`. A `picture` source set with smaller variants for mobile + `srcset` would cut hero LCP significantly.
7. **Accessibility audit** — the theme is built with semantic landmarks (`<header>`, `<main>`, `<footer>`, `<section>`), focus rings, and reduced-motion guards. I'd want to run axe + manual keyboard nav + screen reader passes before calling it production-ready.
8. **Light-mode variant** as a style variation in `theme.json` (`styles/variations/light.json`). The design system is dark-first; a clean light variant would prove the token discipline.
9. **A pattern for the journal post layout** so single-post pages get the same editorial treatment as the front page.
10. **Tests** — visual regression via Playwright snapshots of every template, plus a `theme.json` JSON Schema check in CI.

## Closing note

The point of this build wasn't to ship a feature-complete agency website. It was to demonstrate that a single developer, working with Claude Code as a primary tool, can produce a coherent, opinionated, system-driven WordPress block theme — with the design judgment, debugging instincts, and tradeoff discipline that a human developer brings.

Claude Code didn't replace the judgment. It replaced the typing.
