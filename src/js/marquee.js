/**
 * Ali Dorhi — Mobile logo marquee support
 * Duplicates each .logo-grid's cells once so the CSS marquee (mobile only)
 * loops seamlessly. Clones are hidden on desktop via CSS.
 */

export class LogoMarquee {
  init() {
    document.querySelectorAll('.logo-grid').forEach((grid) => {
      const cells = Array.from(grid.children);
      cells.forEach((cell) => {
        const clone = cell.cloneNode(true);
        clone.classList.add('is-clone');
        clone.setAttribute('aria-hidden', 'true');
        clone.querySelectorAll('[data-i18n-attr]').forEach((el) => el.removeAttribute('data-i18n-attr'));
        grid.appendChild(clone);
      });
      grid.dataset.marqueeReady = 'true';
    });
  }
}
