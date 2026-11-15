# Ali Dorhi — Personal Brand Website

A premium, bilingual (Persian / English), single-page personal brand website for **Ali Dorhi (علی درحی)** — business consultant, trainer, and CEO of Chabok Sazan Arka (چابک‌سازان آرکا).

This is a ground-up redesign of [dorhi.ir](https://dorhi.ir/) as a light, editorial, executive-grade digital identity. All professional facts, the brand blue, the portrait, and all 35 collaboration logos were extracted from the original website.

---

## Stack

- **Vite** — dev server & production build
- **Vanilla JavaScript** (ES modules) — no frameworks, no React/Vue/Next
- **Tailwind CSS 4** (CSS-first config) + custom CSS
- **GSAP + ScrollTrigger** — hero entrance, scroll reveals, timeline scrub
- **Anime.js v4** — counters, language-switch transition, micro-interactions
- Self-hosted variable fonts: **Vazirmatn** (fa) & **Inter** (en) — no external font CDN, reliably reachable from Iran

## Commands

```bash
npm install     # install dependencies
npm run dev     # start dev server (http://localhost:5173)
npm run build   # production build → dist/
npm run preview # preview the production build
```

## Project structure

```
ali-dorhi/
├── public/                 # copied as-is into dist/
│   ├── images/             # portrait + documentary photos (webp/jpg)
│   ├── logos/              # 35 partner logos (6 operational + 29 consulting)
│   ├── media/              # video/article thumbnails
│   ├── fonts/              # Vazirmatn + Inter variable woff2
│   └── favicon/            # favicon set (from original DorhiIco.ico)
├── src/
│   ├── styles/
│   │   ├── main.css        # design tokens (Tailwind @theme), components
│   │   ├── animations.css  # preloader + reduced-motion rules
│   │   └── responsive.css  # mobile/tablet/print refinements
│   └── js/
│       ├── main.js         # bootstrap: language → nav → preloader → motion
│       ├── translations.js # ALL fa/en strings + links + media data
│       ├── language.js     # fa⇄en switching, RTL/LTR, localStorage, digits
│       ├── navigation.js   # sticky header, mobile menu, scroll-spy, anchors
│       ├── animations.js   # GSAP/Anime.js motion system
│       └── preloader.js    # brand preloader
├── index.html              # full page (Persian content inline = SEO default)
├── vite.config.js
└── README.md
```

## Updating content (fa / en)

1. **Texts** — every visible string lives in `src/js/translations.js` under
   `fa` / `en`. Persian values are also written inline in `index.html`
   (matching `data-i18n` keys), so update **both** places when editing.
   Key convention: `section.item.property`, e.g. `expertise.items.2.title`.
2. **Numbers** — elements like `<span data-digits="01">۰۱</span>` localize
   automatically (۰۱ ⇄ 01). Keep the Latin value in the attribute.
3. **Links** — phone, email, booking, academy, toolbox and content URLs are
   in the `SITE`, `MEDIA` exports of `translations.js`.
4. **Logos** — drop new files into `public/logos/`, then add `<li class="logo-cell">`
   entries in the correct group (operational vs consulting) in `index.html`.
   The original distinction from dorhi.ir is preserved:
   `operational: 15, 17, 23, 32, 33, 10` · `consulting: all others`.

## Language system

- Persian (RTL) is the default on first visit.
- Preference persists in `localStorage` (`dorhi-lang`).
- `<html lang dir>` switches; fonts, digit forms, arrows and layout direction
  follow. A tiny inline script in `<head>` restores the direction before
  first paint to avoid a flash.
- English is a professional localization, not a machine translation.

## Design system

| Role | Token | Value |
| --- | --- | --- |
| Background (60%) | `--color-canvas` | `#F8F8F6` |
| Background alt | `--color-canvas-alt` | `#F0F1EF` |
| Cards | `--color-card` | `#FFFFFF` |
| Headings / navy (30%) | `--color-navy` | `#172B45` |
| Body text | `--color-charcoal` | `#24282D` |
| Muted text | `--color-muted` | `#737A83` |
| Hairlines | `--color-line` | `#E3E5E6` |
| **Brand accent (10%)** | `--color-accent` | `#2300B2` — original dorhi.ir blue |
| Dark bands | `--color-deep` | `#050036` — original site primary navy |

The accent blue `#2300B2` was verified against both the original site's CSS
(Elementor global secondary color) and the header logo pixels.

## Accessibility & performance

- Semantic HTML, skip-link, ARIA labels, keyboard-friendly focus states
- `prefers-reduced-motion` disables all animation (content is never hidden
  without JS either — initial states are set by JS only)
- Lazy loading below the fold; hero portrait preloaded with `fetchpriority`
- Self-hosted fonts, no third-party requests at runtime
- `width/height` on every image to prevent layout shift

## Deploy

`npm run build` produces a fully static `dist/` — upload it to the web root
of dorhi.ir (or any static host). No server-side runtime is required.
