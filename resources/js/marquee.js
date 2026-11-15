/**
 * Ali Dorhi — Logo marquee
 * Restructures each .logo-grid into marquee rows:
 *  - operational grid: 1 row, moving right → left
 *  - consulting grid: 3 rows, alternating direction (right, left, right movement)
 * Each row's cells are duplicated once for a seamless loop.
 * On desktop the tracks become display:contents so the original grid stays.
 */

export class LogoMarquee {
  init() {
    document.querySelectorAll('.logo-grid').forEach((grid) => {
      if (grid.dataset.marqueeReady === 'true') return;
      const cells = Array.from(grid.querySelectorAll(':scope > li'));
      const rowCount = grid.classList.contains('consulting') ? 3 : 1;
      const perRow = Math.ceil(cells.length / rowCount) || 1;

      grid.classList.add('marquee-grid');
      grid.textContent = '';

      for (let r = 0; r < rowCount; r += 1) {
        const slice = cells.slice(r * perRow, (r + 1) * perRow);
        if (!slice.length) continue;

        const track = document.createElement('li');
        track.className = 'marquee-track';
        // Movement direction: operational (single row) moves right→left ('rtl');
        // consulting rows alternate left→right, right→left, left→right
        track.dataset.dir = grid.classList.contains('operational')
          ? 'rtl'
          : (r % 2 === 0 ? 'ltr' : 'rtl');

        slice.forEach((cell) => track.appendChild(cell));
        slice.forEach((cell) => {
          const clone = cell.cloneNode(true);
          clone.classList.add('is-clone');
          clone.setAttribute('aria-hidden', 'true');
          clone.querySelectorAll('[data-i18n-attr]').forEach((el) => el.removeAttribute('data-i18n-attr'));
          track.appendChild(clone);
        });

        grid.appendChild(track);
      }

      grid.dataset.marqueeReady = 'true';
    });
  }
}
