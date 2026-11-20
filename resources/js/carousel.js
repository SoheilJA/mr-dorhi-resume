/** کاروسل افقی بر پایه‌ی scroll-snap؛ بدون کتابخانه و سازگار با RTL */
export function initCarousel() {
    document.querySelectorAll('[data-carousel]').forEach((root) => {
        const track = root.querySelector('[data-carousel-track]');
        const nav = root.querySelector('[data-carousel-nav]');
        const prev = root.querySelector('[data-carousel-prev]');
        const next = root.querySelector('[data-carousel-next]');
        if (!track || !nav || !prev || !next) return;

        const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        const update = () => {
            const max = track.scrollWidth - track.clientWidth;
            const pos = Math.abs(track.scrollLeft);
            nav.hidden = max <= 4;
            prev.disabled = pos <= 4;
            next.disabled = pos >= max - 4;
        };

        const go = (dir) => {
            const sign = getComputedStyle(track).direction === 'rtl' ? -1 : 1;
            track.scrollBy({
                left: sign * dir * track.clientWidth * 0.9,
                behavior: reduced ? 'auto' : 'smooth',
            });
        };

        prev.addEventListener('click', () => go(-1));
        next.addEventListener('click', () => go(1));
        track.addEventListener('scroll', () => requestAnimationFrame(update), { passive: true });
        window.addEventListener('resize', update);
        window.addEventListener('load', update);
        update();
    });
}
