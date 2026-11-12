/**
 * Ali Dorhi — Application bootstrap
 * Load order: language (before paint of dynamic content) → nav → preloader →
 * hero entrance → scroll animations. Everything degrades gracefully.
 */

import { language } from './language.js';
import { Navigation } from './navigation.js';
import { Motion } from './animations.js';
import { Preloader } from './preloader.js';
import { LogoMarquee } from './marquee.js';

const boot = async () => {
  // 1) Language first (may switch document to en before animations start)
  language.init();

  // 2) Navigation behaviors
  const nav = new Navigation();
  nav.init();

  // 3) Language switcher bindings (header + footer + mobile menu)
  document.querySelectorAll('.lang-btn').forEach((btn) => {
    btn.addEventListener('click', () => language.switchTo(btn.dataset.lang));
  });

  // 4) Mobile logo marquee (clones cells once, hidden on desktop)
  const marquee = new LogoMarquee();
  marquee.init();

  // 5) Motion system
  const motion = new Motion();

  // After every language switch: recalibrate scroll triggers
  language.onSwitch(() => {
    requestAnimationFrame(() => motion.refresh());
  });

  // 6) Preloader → hero entrance
  const preloader = new Preloader();
  await preloader.run();

  motion.heroEntrance();
  motion.initScrollAnimations();

  // Recalculate once web fonts finish loading (metrics may shift)
  if (document.fonts?.ready) {
    document.fonts.ready.then(() => motion.refresh());
  }
};

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', boot);
} else {
  boot();
}
