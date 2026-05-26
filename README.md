# CreatiFriends

A modern WordPress block theme for **CreatiFriends**, a fictional remote-first creative studio designing brands, products, and the AI-powered stories around them.

Built from scratch using native WordPress Full Site Editing primitives — no page builders, no starter theme, no copied templates.

---

## Project overview

CreatiFriends is a portfolio-grade block theme that demonstrates a complete Site Editor workflow: a `theme.json`-driven design system, six section patterns composed into a front page, template parts for chrome, and slug-based templates for every standard view.

The visual direction is **premium editorial** — black, white, gray, and gold — with a single typographic pairing (Space Grotesk for display, Inter for body) and minimal but deliberate motion.

## Design philosophy

The theme is designed around three constraints:

1. **One source of truth.** All colors, fonts, spacing, shadows, and radii live in `theme.json`. Every pattern and template references presets (`var:preset|color|*`, `var:preset|font-size|*`) so a single value change cascades site-wide.
2. **Patterns over templates.** Templates are thin orchestrators that compose patterns. Section markup lives in `patterns/` so editors can rearrange, duplicate, or replace sections in Site Editor without ever touching template files.
3. **Editorial restraint.** Gold is the only chromatic accent on top of a black/white/gray base. Hover states use a single shared timing curve. Spacing follows a fluid `clamp()` scale that breathes from mobile to desktop without breakpoints.

## Features

- Full Site Editing compatible (`theme.json` v3)
- Six reusable section patterns: Hero, About Intro, Services Grid, Work Grid, Testimonials, CTA Banner
- Extended footer as a pattern (the footer template part is one line)
- Two header variants (transparent sticky, solid surface)
- Pattern-driven front page — every section is editable independently in Site Editor
- Fluid typography and spacing — no per-breakpoint overrides needed for most layouts
- Block style variations: `card`, `card-dark`, `glow-panel`, `outline-pill` button, `ghost` button, `gradient-text`, `gradient` separator, `check-list`, `tilted` image, `rounded-xl` image
- Custom block patterns categorized under "CreatiFriends · *" in the inserter
- Google Fonts (Inter + Space Grotesk) enqueued with `preconnect`
- Editor stylesheet mirrors the front-end so the WYSIWYG matches production
- Custom 404, search, archive, single, and page templates
- Two additional page templates: `Wide Page` and `Landing Page` (no chrome)
- Mobile-first responsive — fluid spacing scale + targeted media queries for hero CTA stacking

## Design system

| Token        | Value                                          |
| ------------ | ---------------------------------------------- |
| Base         | `#0A0A0A`                                      |
| Surface      | `#111111`                                      |
| Elevated     | `#1A1A1A`                                      |
| Contrast     | `#FFFFFF`                                      |
| Muted        | `#B3B3B3`                                      |
| Border       | `#2A2A2A`                                      |
| Accent       | `#D4AF37` (gold)                               |
| Accent Hover | `#E6C766`                                      |
| Display font | Space Grotesk (300–700)                        |
| Body font    | Inter (300–700)                                |
| Mono font    | JetBrains Mono                                 |
| Radius scale | 10 / 16 / 20 / 24 / pill                       |
| Spacing      | Fluid `clamp()` from `2X-Small` to `3X-Large`  |

## Pages supported

The theme ships with templates and patterns for the following pages. The homepage works out of the box; the other pages are created in Site Editor (see [Setup](#setup-instructions)).

| Page     | Template                              | Pattern(s) used                                                                                          |
| -------- | ------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| Home     | `front-page.html`                     | `hero-headline`, `about-intro`, `services-grid`, `work-grid`, `testimonials`, `cta-banner`               |
| About    | `page.html`                           | `about-intro`, `testimonials`, `cta-banner`                                                              |
| Services | `page.html`                           | `services-grid`, `cta-banner`                                                                            |
| Work     | `page.html`                           | `work-grid`, `cta-banner`                                                                                |
| Contact  | `page.html`                           | `cta-banner` + a contact form of your choice                                                             |
| Journal  | `home.html` / `index.html`            | (latest posts grid — no patterns)                                                                        |
| Post     | `single.html`                         | (single-post layout with comments)                                                                       |

## Pattern system

```
patterns/
├── hero-headline.php       — Full-bleed hero with replaceable Cover media, glass badge, gold CTA
├── about-intro.php          — Two-column studio intro with stat row and replaceable image
├── services-grid.php        — Six numbered service cards in a CSS grid
├── work-grid.php            — Four-project portfolio grid with category tags
├── testimonials.php         — Anchor pullquote + three supporting client cards
├── cta-banner.php           — Centered closing CTA wrapped in the glow-panel block style
└── footer-extended.php      — Four-column footer (newsletter + sitemap + social + legal)
```

Each pattern is a standalone PHP file with WordPress pattern headers (`Title`, `Slug`, `Categories`, `Description`, `Keywords`). They're auto-registered by WordPress on init and appear in the Site Editor inserter under their respective categories.

## File structure

```
creatifriends/
├── style.css                — Theme metadata
├── theme.json               — Design system (colors, fonts, spacing, shadows, block styles)
├── functions.php            — Theme supports, font enqueue, block styles, pattern categories
├── screenshot.svg           — Theme picker preview
├── assets/
│   └── css/
│       ├── app.css          — Front-end supplemental styles + block style variations
│       └── editor.css       — Editor parity for block styles
├── parts/
│   ├── header.html          — Transparent sticky header (default)
│   ├── header-dark.html     — Solid surface header (alternate)
│   ├── footer.html          — Thin wrapper that references footer-extended pattern
│   ├── sidebar.html         — Card-style sidebar (search, latest, categories, tags)
│   ├── post-meta.html       — Post byline + date + category
│   └── comments.html        — Threaded comments with card-styled comment template
├── patterns/                — Six section patterns + extended footer
└── templates/
    ├── front-page.html      — Composes the six section patterns
    ├── home.html            — Blog index (latest posts grid)
    ├── index.html           — Universal fallback
    ├── page.html            — Generic page template
    ├── single.html          — Single post layout with comments
    ├── archive.html         — Category/tag/author archives
    ├── search.html          — Search results
    ├── 404.html             — 404 with glow panel
    ├── page-wide.html       — Page with no sidebar, full-width content
    └── page-landing.html    — Page with no header/footer chrome
```

## Setup instructions

### Requirements

- WordPress 6.5+
- PHP 8.0+
- An internet connection (Google Fonts are loaded from CDN)

### Install

1. Drop the `creatifriends` folder into `wp-content/themes/`.
2. **Appearance → Themes → CreatiFriends → Activate.**
3. The homepage renders immediately with full demo content.

### Set static front page (optional)

If your site is set to show the latest posts as the homepage, WordPress will still render `front-page.html` first — no settings change required. To split blog and home cleanly:

- **Settings → Reading → Your homepage displays → A static page.**
- Create a page titled "Home", assign it as Homepage.
- Create a page titled "Journal", assign it as Posts page.

### Create About / Services / Work / Contact pages

1. **Pages → Add New.**
2. Title the page (e.g. "About"), give it a matching slug, and publish.
3. Open the page in Site Editor.
4. From the inserter, search **"CreatiFriends · "** and drop in the relevant section patterns (see the [Pages supported](#pages-supported) table for recommendations).
5. Save.

### Edit the navigation

The header navigation is hardcoded with six custom links (Services, Studio, Work, Journal, Careers, Contact) to ensure the menu is correct on first activation. To edit:

- **Site Editor → Patterns → Template Parts → Header.**
- Click any nav link to edit label or URL, or add new links via the navigation block toolbar.

### Replace the hero image

- **Site Editor → Templates → Home.**
- Click the hero background → **Replace** in the toolbar → upload your own image or paste a URL.

---

## Credits

### Free assets used as placeholders

- **Hero image** — *Workspace* by Annie Spratt — [Unsplash](https://unsplash.com/photos/MChSQHxGZrQ)
- **About image** — *Team meeting* by Akson — [Unsplash](https://unsplash.com/photos/_jt9pcWfONA)
- **Work grid images** — Various editorial photographs from [Unsplash](https://unsplash.com/)
- **Fonts** — [Inter](https://rsms.me/inter/) by Rasmus Andersson and [Space Grotesk](https://fonts.floriankarsten.com/space-grotesk) by Florian Karsten, both via [Google Fonts](https://fonts.google.com/)
- **Reference search terms for replacement media** — *creative agency dark office*, *luxury workspace*, *modern startup team*, *minimal workspace*, *cinematic office*

All Unsplash images are free to use under the [Unsplash License](https://unsplash.com/license). Fonts are OFL/SIL licensed via Google Fonts.

### Inspiration

The visual direction draws on editorial agency sites and the broader convention of premium dark/gold creative portfolios. No specific site was copied; the typography pairing, gold accent strategy, and card system are original to this theme.

## License

GPL-2.0-or-later. See `style.css` for the full header.
