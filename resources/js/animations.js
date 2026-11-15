/**
 * Ali Dorhi — Motion system
 *
 * GSAP: hero entrance, scroll-triggered reveals, timeline scrub, nav progress.
 * Anime.js (selective): counters with locale digit formatting, small pops.
 *
 * Accessibility: initial hidden states are set from JS only — without JS the
 * page is fully visible. prefers-reduced-motion disables everything except
 * instant final states. All ScrollTriggers are killed on re-init (language
 * switch) to avoid duplicates.
 */

import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import { animate } from 'animejs';

gsap.registerPlugin(ScrollTrigger);

const prefersReduced = () =>
  window.matchMedia('(prefers-reduced-motion: reduce)').matches;

export class Motion {
  constructor() {
    this.ctx = null;
    this.counters = [];
  }

  /* ---------------------------------------------------------------- hero */
  heroEntrance() {
    if (prefersReduced()) return;

    const tl = gsap.timeline({
      defaults: { ease: 'power3.out' },
      delay: 0.1,
    });

    tl.fromTo(
      '.hero-hairlines span',
      { opacity: 0 },
      { opacity: 0.55, duration: 0.9, stagger: 0.06 },
      0
    )
      .fromTo(
        '.hero .eyebrow',
        { y: 14, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.55 },
        0.05
      )
      .fromTo(
        '.hero-title .line-inner',
        { yPercent: 110 },
        { yPercent: 0, duration: 0.85, stagger: 0.11 },
        0.15
      )
      .fromTo(
        '.hero-desc',
        { y: 18, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6 },
        0.55
      )
      .fromTo(
        '.hero-actions > *',
        { y: 14, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.5, stagger: 0.08 },
        0.7
      )
      .fromTo(
        '.hero-meta',
        { y: 16, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6 },
        0.85
      )
      .fromTo(
        '.hero-visual .portrait-card',
        { clipPath: 'inset(10% 8% 12% 8%)', opacity: 0, scale: 1.02 },
        { clipPath: 'inset(0% 0% 0% 0%)', opacity: 1, scale: 1, duration: 1, ease: 'power4.out' },
        0.25
      )
      .fromTo(
        '.portrait-frame, .portrait-caption',
        { opacity: 0 },
        { opacity: 1, duration: 0.6 },
        1.05
      )
      .fromTo(
        '.scroll-hint',
        { opacity: 0 },
        { opacity: 1, duration: 0.6 },
        1.2
      );
  }

  /* ------------------------------------------------------------- reveals */
  initScrollAnimations() {
    if (this.ctx) this.ctx.revert();
    this.counters.forEach((c) => c.pause?.());
    this.counters = [];

    if (prefersReduced()) {
      // ensure final states
      gsap.set('[data-reveal]', { clearProps: 'all' });
      this.runCounters(true);
      return;
    }

    this.ctx = gsap.context(() => {
      // Section heads
      gsap.utils.toArray('.section-head').forEach((head) => {
        gsap.from(head.children, {
          y: 26,
          opacity: 0,
          duration: 0.7,
          ease: 'power3.out',
          stagger: 0.1,
          scrollTrigger: { trigger: head, start: 'top 82%', once: true },
        });
      });

      // Generic staggered groups
      const groups = [
        { sel: '.expertise-grid .exp-card', qty: 0.07 },
        { sel: '.about-copy > *', qty: 0.08 },
        { sel: '.principles .principle', qty: 0.1 },
        { sel: '.photo-strip .photo-item', qty: 0.09 },
        { sel: '.contact-rows .info-row', qty: 0.07 },
        { sel: '.consult-card > *', qty: 0.07 },
      ];
      groups.forEach(({ sel, qty }) => {
        const items = gsap.utils.toArray(sel);
        if (!items.length) return;
        gsap.from(items, {
          y: 28,
          opacity: 0,
          duration: 0.65,
          ease: 'power3.out',
          stagger: qty,
          scrollTrigger: { trigger: items[0], start: 'top 86%', once: true },
        });
      });

      // Stat card
      gsap.from('.stat-card', {
        y: 24,
        opacity: 0,
        duration: 0.7,
        ease: 'power3.out',
        scrollTrigger: { trigger: '.stat-card', start: 'top 88%', once: true },
        onComplete: () => this.runCounters(),
      });

      // Journey — line scrub + phases
      const track = document.querySelector('.journey-track');
      if (track) {
        const origin = this.progressOrigin();
        gsap.fromTo(
          '.journey-progress',
          { scaleX: 0, scaleY: 0, transformOrigin: origin },
          {
            scaleX: 1,
            scaleY: 1,
            ease: 'none',
            scrollTrigger: {
              trigger: '#journey',
              start: 'top 70%',
              end: 'bottom 55%',
              scrub: 0.6,
            },
          }
        );

        gsap.utils.toArray('.phase').forEach((phase, i) => {
          gsap.from(phase.children, {
            y: 24,
            opacity: 0,
            duration: 0.6,
            ease: 'power3.out',
            stagger: 0.08,
            scrollTrigger: { trigger: phase, start: 'top 85%', once: true },
            onComplete: () => this.popDot(phase.querySelector('.phase-dot')),
          });
        });
      }

      // Collaborations — group heads + logo batches
      gsap.utils.toArray('.collab-group').forEach((group) => {
        gsap.from(group.querySelector('.group-head'), {
          y: 18,
          opacity: 0,
          duration: 0.6,
          ease: 'power3.out',
          scrollTrigger: { trigger: group, start: 'top 85%', once: true },
        });
        if (!group.querySelector('.marquee-grid')) {
          const cells = group.querySelectorAll('.logo-cell');
          gsap.from(cells, {
            y: 18,
            opacity: 0,
            duration: 0.5,
            ease: 'power2.out',
            stagger: { each: 0.03, grid: 'auto', from: 'start' },
            scrollTrigger: { trigger: group, start: 'top 80%', once: true },
          });
        }
      });

      // Insights
      gsap.from('.media-featured', {
        y: 30,
        opacity: 0,
        duration: 0.75,
        ease: 'power3.out',
        scrollTrigger: { trigger: '.insights-layout', start: 'top 82%', once: true },
      });
      gsap.from('.media-side', {
        y: 26,
        opacity: 0,
        duration: 0.6,
        ease: 'power3.out',
        stagger: 0.08,
        scrollTrigger: { trigger: '.insights-layout', start: 'top 78%', once: true },
      });
      gsap.from('.view-all-row', {
        y: 14,
        opacity: 0,
        duration: 0.5,
        scrollTrigger: { trigger: '.view-all-row', start: 'top 92%', once: true },
      });

      // Footer
      gsap.from('.site-footer', {
        opacity: 0,
        y: 20,
        duration: 0.6,
        scrollTrigger: { trigger: '.site-footer', start: 'top 96%', once: true },
      });

      // Subtle portrait parallax (desktop only)
      if (window.matchMedia('(min-width: 1024px)').matches) {
        gsap.fromTo(
          '.hero-visual .portrait-card',
          { y: -14 },
          {
            y: 22,
            ease: 'none',
            scrollTrigger: {
              trigger: '.hero',
              start: 'top top',
              end: 'bottom top',
              scrub: 0.8,
            },
          }
        );
      }
    });
  }

  /* ------------------------------------------------------------- details */
  /** Anime.js — the 20+ counter with locale-correct digits. */
  runCounters(instant = false) {
    const el = document.querySelector('.stat-number[data-count]');
    if (!el) return;
    const target = Number(el.dataset.count || 20);
    const fa = document.documentElement.lang === 'fa';
    const suffix = el.dataset.suffix || '';
    const fmt = (v) => (fa ? Math.round(v).toLocaleString('fa-IR') : String(Math.round(v))) + suffix;

    if (instant || prefersReduced()) {
      el.textContent = fmt(target);
      return;
    }
    const counterObj = { v: 0 };
    const counter = animate(counterObj, {
      v: target,
      duration: 1200,
      ease: 'easeOutExpo',
      onUpdate: () => {
        el.textContent = fmt(counterObj.v);
      },
    });
    this.counters.push(counter);
  }

  /** Anime.js — small pop when a timeline phase becomes active. */
  popDot(dot) {
    if (!dot || prefersReduced()) {
      dot?.classList.add('active');
      return;
    }
    dot.classList.add('active');
    animate(dot, {
      scale: [0.4, 1],
      duration: 380,
      ease: 'easeOutQuad',
    });
  }

  /** Called after a language switch — recalibrate scroll positions. */
  refresh() {
    // direction may have flipped: keep the timeline progress origin correct
    gsap.set('.journey-progress', { transformOrigin: this.progressOrigin() });
    ScrollTrigger.refresh();
  }

  /** Timeline fill origin: start edge of the line in the current direction. */
  progressOrigin() {
    const desktop = window.matchMedia('(min-width: 1024px)').matches;
    if (!desktop) return 'top center';
    return document.documentElement.dir === 'rtl' ? 'right center' : 'left center';
  }

  destroy() {
    if (this.ctx) this.ctx.revert();
    this.counters.forEach((c) => c.pause?.());
    this.counters = [];
  }
}
