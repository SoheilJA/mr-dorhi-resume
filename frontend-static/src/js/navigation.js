/**
 * Ali Dorhi — Navigation
 * Sticky header state, mobile menu, smooth anchors, active section indicator.
 */

const SELECTORS = {
  header: '#site-header',
  toggle: '#menu-toggle',
  mobileMenu: '#mobile-menu',
  mobileLinks: '#mobile-menu a[href^="#"]',
  navLinks: '.nav-link',
  sections: 'main section[id]',
};

export class Navigation {
  constructor() {
    this.header = document.querySelector(SELECTORS.header);
    this.toggle = document.querySelector(SELECTORS.toggle);
    this.mobileMenu = document.querySelector(SELECTORS.mobileMenu);
    this.sections = [...document.querySelectorAll(SELECTORS.sections)];
    this.sectionObserver = null;
    this.onScroll = this.onScroll.bind(this);
    this.onKeydown = this.onKeydown.bind(this);
  }

  init() {
    if (!this.header) return;

    // Sticky state
    window.addEventListener('scroll', this.onScroll, { passive: true });
    this.onScroll();

    // Mobile menu
    if (this.toggle && this.mobileMenu) {
      this.toggle.addEventListener('click', () => {
        this.toggle.getAttribute('aria-expanded') === 'true'
          ? this.closeMenu()
          : this.openMenu();
      });
      document.querySelectorAll(SELECTORS.mobileLinks).forEach((a) =>
        a.addEventListener('click', (e) => {
          this.handleAnchor(e);
          this.closeMenu();
        })
      );
      document.addEventListener('keydown', this.onKeydown);
    }

    // Desktop smooth anchors (native scroll-behavior handles it; we only
    // close overlays & keep focus logic tidy)
    document.querySelectorAll('a[href^="#"]').forEach((a) =>
      a.addEventListener('click', this.handleAnchor)
    );

    this.initScrollSpy();
  }

  onScroll() {
    this.header.classList.toggle('scrolled', window.scrollY > 24);
  }

  openMenu() {
    this.mobileMenu.classList.add('open');
    this.toggle.setAttribute('aria-expanded', 'true');
    this.toggle.setAttribute('aria-label', this.toggle.dataset.labelClose || 'Close menu');
    document.documentElement.classList.add('no-scroll');
  }

  closeMenu() {
    this.mobileMenu.classList.remove('open');
    this.toggle.setAttribute('aria-expanded', 'false');
    this.toggle.setAttribute('aria-label', this.toggle.dataset.labelOpen || 'Open menu');
    document.documentElement.classList.remove('no-scroll');
  }

  onKeydown(e) {
    if (e.key === 'Escape' && this.mobileMenu.classList.contains('open')) {
      this.closeMenu();
      this.toggle.focus();
    }
  }

  handleAnchor(e) {
    const id = e.currentTarget.getAttribute('href');
    if (!id || id === '#') return;
    const target = document.querySelector(id);
    if (!target) return;
    e.preventDefault();
    target.scrollIntoView({ behavior: this.reducedMotion() ? 'auto' : 'smooth' });
    // move focus for keyboard users
    target.setAttribute('tabindex', '-1');
    target.focus({ preventScroll: true });
    history.replaceState(null, '', id);
  }

  reducedMotion() {
    return window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  }

  /** Highlights the nav link of the section currently in view. */
  initScrollSpy() {
    const links = [...document.querySelectorAll(SELECTORS.navLinks)];
    if (!links.length || !('IntersectionObserver' in window)) return;

    const setVisible = (id) => {
      links.forEach((l) => {
        const active = l.getAttribute('href') === `#${id}`;
        l.classList.toggle('active', active);
        if (active) l.setAttribute('aria-current', 'true');
        else l.removeAttribute('aria-current');
      });
    };

    this.sectionObserver = new IntersectionObserver(
      (entries) => {
        // choose the most visible entry
        const visible = entries
          .filter((en) => en.isIntersecting)
          .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
        if (visible) setVisible(visible.target.id);
      },
      { rootMargin: '-35% 0px -55% 0px', threshold: [0, 0.2, 0.5, 1] }
    );
    this.sections.forEach((s) => this.sectionObserver.observe(s));
  }

  destroy() {
    window.removeEventListener('scroll', this.onScroll);
    document.removeEventListener('keydown', this.onKeydown);
    if (this.sectionObserver) this.sectionObserver.disconnect();
  }
}
