/**
 * Ali Dorhi — Preloader
 * A brief brand moment: wordmark + progress line, then a soft exit.
 * Rules honored:
 *  - appears only when needed, never blocks indefinitely (hard timeout)
 *  - respects prefers-reduced-motion (quick fade)
 *  - graceful if images/fonts fail (window load still fires / timeout)
 */

const MIN_DISPLAY = 900; // ms — long enough to register the brand mark
const MAX_WAIT = 2600; // ms — never hold the page hostage

export class Preloader {
  constructor() {
    this.el = document.getElementById('preloader');
    this.fill = this.el?.querySelector('.preloader-fill');
    this.resolved = false;
  }

  /** Returns a promise that resolves when the preloader has exited. */
  run() {
    return new Promise((resolve) => {
      if (!this.el) return resolve();
      const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      const started = performance.now();

      const exit = () => {
        if (this.resolved) return;
        this.resolved = true;
        const wait = Math.max(0, MIN_DISPLAY - (performance.now() - started));
        setTimeout(() => {
          this.el.classList.add('done');
          // resolve as the curtain starts lifting, so the hero entrance
          // overlaps the fade and feels immediate
          resolve();
          setTimeout(() => this.el.remove(), reduced ? 0 : 650);
        }, reduced ? 0 : wait);
      };

      // progress fill (visual only, CSS-transform driven)
      if (this.fill) {
        const d = reduced ? 0 : MIN_DISPLAY;
        this.fill.style.transition = `transform ${d}ms cubic-bezier(0.65, 0, 0.35, 1)`;
        requestAnimationFrame(() => {
          this.fill.style.transform = 'scaleX(0.72)';
        });
      }

      if (document.readyState === 'complete') {
        exit();
      } else {
        window.addEventListener('load', exit, { once: true });
        setTimeout(exit, MAX_WAIT); // failsafe
      }
    });
  }
}
