/**
 * Ali Dorhi — Language manager
 * Handles fa (default, RTL) / en (LTR) switching:
 *  - document lang + dir
 *  - all [data-i18n] text nodes and [data-i18n-attr] attributes
 *  - document title + meta description
 *  - localStorage persistence
 *  - an optional swap animation (Anime.js) with reduced-motion respect
 */

import { translations } from './translations.js';
import { animate } from 'animejs';

const STORAGE_KEY = 'dorhi-lang';
const SUPPORTED = ['fa', 'en'];
const FA_DIGITS = '۰۱۲۳۴۵۶۷۸۹';

const toFaDigits = (s) => String(s).replace(/[0-9]/g, (d) => FA_DIGITS[+d]);

/** Localizes elements like <span data-digits="01"> → ۰۱ / 01 */
function applyDigits(lang) {
  document.querySelectorAll('[data-digits]').forEach((el) => {
    const base = el.getAttribute('data-digits');
    el.textContent = lang === 'fa' ? toFaDigits(base) : base;
  });
}

/** Resolve a dotted key path inside a language dictionary. */
function get(dict, path) {
  return path.split('.').reduce((acc, part) => (acc == null ? acc : acc[part]), dict);
}

function applyTextNode(el, dict) {
  const key = el.getAttribute('data-i18n');
  const value = get(dict, key);
  if (value != null) el.textContent = value;
}

function applyAttrs(el, dict) {
  const pairs = el.getAttribute('data-i18n-attr').split(';');
  for (const pair of pairs) {
    const [attr, key] = pair.split(':').map((s) => s.trim());
    if (!attr || !key) continue;
    const value = get(dict, key);
    if (value != null) el.setAttribute(attr, value);
  }
}

class LanguageManager {
  constructor() {
    this.lang = 'fa';
    this.listeners = new Set();
  }

  init() {
    const stored = localStorage.getItem(STORAGE_KEY);
    this.lang = SUPPORTED.includes(stored) ? stored : 'fa';
    // Persian text already lives in the HTML; only sync when switching is needed
    if (this.lang !== 'fa') this.apply(this.lang, { silent: true });
    this.updateSwitchers();
    return this.lang;
  }

  onSwitch(fn) {
    this.listeners.add(fn);
  }

  get dir() {
    return this.lang === 'fa' ? 'rtl' : 'ltr';
  }

  t(key) {
    return get(translations[this.lang], key);
  }

  updateSwitchers() {
    document.querySelectorAll('.lang-btn').forEach((btn) => {
      const active = btn.dataset.lang === this.lang;
      btn.classList.toggle('active', active);
      btn.setAttribute('aria-pressed', String(active));
    });
  }

  apply(lang, { silent = false } = {}) {
    if (!SUPPORTED.includes(lang) || lang === this.lang) return;
    this.lang = lang;
    localStorage.setItem(STORAGE_KEY, lang);

    const dict = translations[lang];
    const html = document.documentElement;
    html.lang = lang;
    html.dir = lang === 'fa' ? 'rtl' : 'ltr';

    document.querySelectorAll('[data-i18n]').forEach((el) => applyTextNode(el, dict));
    document.querySelectorAll('[data-i18n-attr]').forEach((el) => applyAttrs(el, dict));
    applyDigits(lang);

    document.title = dict.meta.title;
    const desc = document.querySelector('meta[name="description"]');
    if (desc) desc.setAttribute('content', dict.meta.description);

    this.updateSwitchers();

    if (!silent) {
      this.listeners.forEach((fn) => fn(lang));
    }
  }

  /** Animated switch — fades content, swaps, fades back in. */
  async switchTo(lang) {
    if (lang === this.lang) return;
    const reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduced) {
      this.apply(lang);
      return;
    }
    const targets = document.querySelectorAll('main, #site-header, .site-footer');
    await animate(targets, {
      opacity: [1, 0],
      translateY: [0, -10],
      duration: 200,
      ease: 'easeInQuad',
    });
    this.apply(lang);
    await animate(targets, {
      opacity: [0, 1],
      translateY: [10, 0],
      duration: 320,
      ease: 'easeOutQuad',
    });
  }
}

export const language = new LanguageManager();
