/* Homepage behaviour — tabs, carousels, scroll-synced sections, lazy video, video popup */
(function () {
  'use strict';

  var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var hasSwiper = typeof Swiper !== 'undefined';
  var swipers = {};

  function $(sel, ctx) { return (ctx || document).querySelector(sel); }
  function $$(sel, ctx) { return Array.prototype.slice.call((ctx || document).querySelectorAll(sel)); }
  function playSafe(v) { var p = v.play(); if (p && p.catch) p.catch(function () {}); }

  /* ---------------- lazy muted videos: load & play only while visible ---------------- */
  function loadVideo(v) {
    if (v.dataset.loaded) return;
    v.src = v.dataset.src + (reduceMotion ? '#t=0.1' : '');
    v.dataset.loaded = '1';
    v.load();
  }
  var lazyIO = 'IntersectionObserver' in window ? new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      var v = e.target;
      if (e.isIntersecting) {
        loadVideo(v);
        // the hands-on screen only plays the active clip
        if (!reduceMotion && (!v.hasAttribute('data-impact-video') || v.classList.contains('is-active'))) playSafe(v);
      } else if (!v.paused) v.pause();
    });
  }, { rootMargin: '250px 0px' }) : null;
  $$('video.lazy-video[data-src]').forEach(function (v) {
    if (lazyIO) lazyIO.observe(v); else { loadVideo(v); if (!reduceMotion) playSafe(v); }
  });

  var heroVideo = $('.mu-hero-video');
  if (heroVideo && reduceMotion) heroVideo.pause();

  /* ---------------- video popup ---------------- */
  var modal = $('#videoModal');
  var player = modal && $('.video-modal-player', modal);
  var lastFocus = null;
  function openModal(src) {
    if (!modal) return;
    lastFocus = document.activeElement;
    player.src = src;
    modal.hidden = false;
    document.body.classList.add('modal-open');
    $('.video-modal-close', modal).focus();
    playSafe(player);
  }
  function closeModal() {
    if (!modal || modal.hidden) return;
    player.pause(); player.removeAttribute('src'); player.load();
    modal.hidden = true;
    document.body.classList.remove('modal-open');
    if (lastFocus && lastFocus.focus) lastFocus.focus();
  }
  document.addEventListener('click', function (e) {
    var t = e.target.closest('[data-video-modal]');
    if (t) { e.preventDefault(); openModal(t.getAttribute('data-video-modal')); return; }
    if (e.target.closest('[data-close]')) closeModal();
  });
  document.addEventListener('keydown', function (e) {
    if (!modal || modal.hidden) return;
    if (e.key === 'Escape') closeModal();
    if (e.key === 'Tab') {
      var f = [$('.video-modal-close', modal), player];
      var i = f.indexOf(document.activeElement);
      e.preventDefault();
      f[(i + (e.shiftKey ? -1 : 1) + f.length) % f.length].focus();
    }
  });

  /* ---------------- tabs + one carousel per tab, shared prev/next arrows ---------------- */
  function initTabbedCarousels(scope, selector, prefix, opts) {
    var root = $(scope);
    if (!root) return;
    var btns = $$('[data-tab-target]', root);
    var prev = $('.' + prefix + '-prev', root);
    var next = $('.' + prefix + '-next', root);
    var active = null;

    function syncArrows() {
      if (!prev || !next) return;
      var sw = active && swipers[active];
      prev.classList.toggle('swiper-button-disabled', !sw || sw.isBeginning);
      next.classList.toggle('swiper-button-disabled', !sw || sw.isEnd);
    }

    if (hasSwiper) {
      $$('.mu-tabpane', root).forEach(function (pane) {
        var el = $(selector, pane);
        if (!el) return;
        var o = Object.assign({ slidesPerView: 'auto', spaceBetween: 16, grabCursor: true, watchOverflow: true }, opts || {});
        if (o.pagination) o.pagination = { el: $('.swiper-pagination', el), clickable: true };
        swipers[pane.id] = new Swiper(el, o);
        swipers[pane.id].on('slideChange reachEnd reachBeginning fromEdge resize', syncArrows);
      });
    }

    function show(id) {
      active = id;
      btns.forEach(function (b) { var on = b.dataset.tabTarget === id; b.classList.toggle('is-active', on); b.setAttribute('aria-selected', on ? 'true' : 'false'); });
      $$('.mu-tabpane', root).forEach(function (p) { p.classList.toggle('is-active', p.id === id); });
      var sw = swipers[id];
      if (sw) { sw.update(); sw.slideTo(0, 0); }
      syncArrows();
    }

    btns.forEach(function (b) { b.addEventListener('click', function () { show(b.dataset.tabTarget); }); });
    if (prev) prev.addEventListener('click', function () { var s = swipers[active]; if (s) s.slidePrev(); });
    if (next) next.addEventListener('click', function () { var s = swipers[active]; if (s) s.slideNext(); });
    if (btns[0]) show(btns[0].dataset.tabTarget);
  }

  /* ---------------- hero: round-1 admission countdown ---------------- */
  function initCountdown() {
    $$('.mu-countdown').forEach(function (box) {
      var end = new Date(box.dataset.deadline).getTime();
      if (isNaN(end)) return;
      var el = {}; ['d', 'h', 'm', 's'].forEach(function (k) { el[k] = $('[data-cd="' + k + '"]', box); });
      var pad = function (n) { return (n < 10 ? '0' : '') + n; };
      var timer;
      function tick() {
        var left = Math.max(0, end - Date.now());
        var s = Math.floor(left / 1000);
        el.d.textContent = pad(Math.floor(s / 86400));
        el.h.textContent = pad(Math.floor(s % 86400 / 3600));
        el.m.textContent = pad(Math.floor(s % 3600 / 60));
        el.s.textContent = pad(s % 60);
        if (!left) {
          clearInterval(timer);
          box.classList.add('is-closed');
          $('.mu-cd-title', box).textContent = 'Round 1 applications are now closed';
        }
      }
      tick();
      timer = setInterval(tick, 1000);
    });
  }


  /* ---------------- hero: corner campus video grows to fill the hero on scroll (mastersunion.org style) ---------------- */
  function initCampusVideo() {
    var pin = $('[data-hero-pin]');
    var hero = pin && $('.mu-hero', pin);
    var card = hero && $('[data-campus]', hero);
    var slot = card && card.parentNode;
    if (!card) return;
    var vid = $('video', card);
    var bg = $('.mu-hero-video', hero);
    var nav = $('#navbar');
    var desk = window.matchMedia('(min-width: 1181px)');
    var EXTRA = 1.1;          // extra scroll (× viewport height) the hero stays pinned for
    var on = false, ticking = false, navH = 0;

    function clamp(v) { return v < 0 ? 0 : v > 1 ? 1 : v; }
    function ease(t) { return t < .5 ? 4 * t * t * t : 1 - Math.pow(-2 * t + 2, 3) / 2; }
    function reset() {
      card.style.left = card.style.top = card.style.width = card.style.height = '';
      card.classList.remove('is-moving');
      hero.style.setProperty('--hp', 0);
      hero.classList.remove('is-expanded');
    }
    function layout() {
      on = desk.matches && !reduceMotion;
      navH = nav ? nav.offsetHeight : 0;
      // space above the hero that isn't the sticky navbar (the ticker bar) — CSS keeps content above the fold
      var pageTop = pin.getBoundingClientRect().top + (window.pageYOffset || document.documentElement.scrollTop);
      pin.style.setProperty('--mu-nav', navH + 'px');
      pin.style.setProperty('--mu-ticker', Math.max(0, Math.round(pageTop - navH)) + 'px');
      pin.classList.toggle('is-pinned', on);
      if (!on) { pin.style.height = ''; reset(); return; }
      pin.style.height = (hero.offsetHeight + window.innerHeight * EXTRA) + 'px';
      update();
    }
    function update() {
      ticking = false;
      if (!on) return;
      var travel = pin.offsetHeight - hero.offsetHeight;
      var raw = clamp((navH - pin.getBoundingClientRect().top) / (travel * .85)); // finish early, then hold full-size
      var e = ease(raw);
      var h = hero.getBoundingClientRect(), s = slot.getBoundingClientRect();
      // end size = mastersunion.org: 16:9, 72% of width (max 1240px), with room above/below
      var topPad = 24, bottomPad = 80;
      var endW = Math.min(h.width * .72, 1240);
      var endH = Math.min(endW / (16 / 9), window.innerHeight - navH - topPad - bottomPad);
      endW = endH * (16 / 9);
      var endL = h.left + (h.width - endW) / 2, endT = h.top + topPad;
      card.style.left = (endL - s.left) * e + 'px';
      card.style.top = (endT - s.top) * e + 'px';
      card.style.width = s.width + (endW - s.width) * e + 'px';
      card.style.height = s.height + (endH - s.height) * e + 'px';
      card.classList.toggle('is-moving', raw > 0 && raw < 1);
      hero.style.setProperty('--hp', e.toFixed(4));
      hero.classList.toggle('is-expanded', e > .98);
      // background clip is hidden once the reel covers the hero
      if (bg && !reduceMotion) { if (e > .98) { if (!bg.paused) bg.pause(); } else if (bg.paused) playSafe(bg); }
    }
    function onScroll() { if (on && !ticking) { ticking = true; requestAnimationFrame(update); } }

    if (vid && reduceMotion) vid.pause();

    // volume button: mute / unmute; auto-mutes again once the video scrolls out of view
    var muteBtn = $('[data-campus-mute]', card);
    function setSound(on) {
      if (!vid || !muteBtn) return;
      vid.muted = !on;
      if (on) playSafe(vid);
      muteBtn.classList.toggle('is-on', on);
      muteBtn.setAttribute('aria-pressed', on ? 'true' : 'false');
      muteBtn.setAttribute('aria-label', on ? 'Mute video' : 'Unmute video');
    }
    if (muteBtn) muteBtn.addEventListener('click', function (e) { e.stopPropagation(); setSound(vid.muted); });
    if (vid && 'IntersectionObserver' in window) new IntersectionObserver(function (en) {
      if (!en[0].isIntersecting && !vid.muted) setSound(false);
    }, { threshold: 0 }).observe(card);
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', layout);
    if (desk.addEventListener) desk.addEventListener('change', layout); else desk.addListener(layout);
    window.addEventListener('load', layout);
    layout();
  }

  /* ---------------- faculty: chevron reveals the 4th faculty member ---------------- */
  function setFacMore(panel, on) {
    var btn = panel.querySelector('.mu-fac-more');
    if (!btn) return;
    panel.classList.toggle('is-more', on);
    btn.setAttribute('aria-expanded', on ? 'true' : 'false');
    btn.setAttribute('aria-label', btn.getAttribute('aria-label').replace(/^Show (more|first)/, on ? 'Show first' : 'Show more'));
  }
  function initFacultyMore() {
    $$('.mu-fac-more').forEach(function (btn) {
      btn.addEventListener('click', function () {
        var panel = btn.closest('.mu-fac-panel');
        setFacMore(panel, !panel.classList.contains('is-more'));
      });
    });
  }

  /* ---------------- learning model: scroll position drives the active step ---------------- */
  function initModel() { $$('.mu-model').forEach(initModelSection); }
  function initModelSection(sec) {
    var items = $$('.mu-model-item', sec);
    var panels = $$('.mu-model-panel', sec);
    var line = $('.mu-model-line', sec);
    var desktop = window.matchMedia('(min-width: 901px)');
    var current = -1;

    function setStep(i) {
      if (i === current) return;
      current = i;
      items.forEach(function (it, n) { it.classList.toggle('is-active', n === i); });
      panels.forEach(function (p, n) { p.classList.toggle('is-active', n === i); });
      panels.forEach(function (p, n) { if (n !== i) setFacMore(p, false); }); // new step starts on its first 3 faculty
    }
    function onScroll() {
      if (!desktop.matches) return;
      var r = sec.getBoundingClientRect();
      var total = sec.offsetHeight - window.innerHeight;
      var prog = Math.min(1, Math.max(0, -r.top / Math.max(1, total)));
      line.style.setProperty('--progress', (prog * 100).toFixed(1) + '%');
      setStep(Math.min(items.length - 1, Math.floor(prog * items.length)));
    }
    items.forEach(function (it, i) {
      it.addEventListener('click', function () {
        if (desktop.matches) {
          var total = sec.offsetHeight - window.innerHeight;
          var top = sec.getBoundingClientRect().top + window.scrollY + total * ((i + 0.5) / items.length);
          window.scrollTo({ top: top, behavior: 'smooth' });
        } else setStep(i);
      });
    });
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);
    setStep(0); onScroll();
  }

  /* ---------------- hands-on: the block in the middle of the screen picks the video ---------------- */
  function initImpact() {
    var boxes = $$('.mu-impact-box');
    var vids = $$('.mu-impact-screen video');
    if (!boxes.length || !vids.length) return;
    var label = $('.mu-impact-label'), count = $('.mu-impact-count b'), bars = $$('.mu-impact-bars i');
    function activate(i) {
      boxes.forEach(function (b, n) { b.classList.toggle('is-active', n === i); });
      if (label) label.textContent = boxes[i].dataset.tag || '';
      if (count) count.textContent = ('0' + (i + 1)).slice(-2);
      bars.forEach(function (b, n) { b.classList.toggle('is-active', n === i); });
      vids.forEach(function (v, n) {
        var on = n === i;
        v.classList.toggle('is-active', on);
        if (on) { loadVideo(v); if (!reduceMotion) playSafe(v); } else if (!v.paused) v.pause();
      });
    }
    if (!('IntersectionObserver' in window)) return;
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) { if (e.isIntersecting) activate(+e.target.dataset.impact); });
    }, { rootMargin: '-45% 0px -45% 0px' });
    boxes.forEach(function (b) { io.observe(b); });
  }

  /* ---------------- stat counters ---------------- */
  function initCounters() {
    var els = $$('[data-mu-count]');
    if (!els.length || !('IntersectionObserver' in window) || reduceMotion) return;
    var io = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        var el = e.target, target = +el.dataset.muCount, start = performance.now();
        (function step(t) {
          var p = Math.min(1, (t - start) / 1600);
          el.textContent = Math.round(target * (1 - Math.pow(1 - p, 3)));
          if (p < 1) requestAnimationFrame(step);
        })(start);
        obs.unobserve(el);
      });
    }, { threshold: 0.5 });
    els.forEach(function (el) { io.observe(el); });
  }

  /* ---------------- stacked track cards: dim/shrink the covered card, sync the year rail ---------------- */
  function initTracks() {
    var cards = $$('.mu-learn-card');
    var rail = $$('.mu-learn-rail a');
    if (!cards.length) return;
    var ticking = false;
    function update() {
      ticking = false;
      var vh = window.innerHeight, current = 0;
      cards.forEach(function (card, i) {
        var next = cards[i + 1], cover = 0;
        if (next) {
          var top = parseFloat(getComputedStyle(next).top) || 0;
          var r = card.getBoundingClientRect(), nr = next.getBoundingClientRect();
          var start = r.top + card.offsetHeight; // next card starts covering here
          cover = Math.min(1, Math.max(0, (start - nr.top) / Math.max(1, start - top)));
        }
        card.style.setProperty('--cover', cover.toFixed(3));
        if (card.getBoundingClientRect().top < vh * 0.55) current = i;
      });
      if (current !== activeRail) {
        activeRail = current;
        rail.forEach(function (a, n) { a.classList.toggle('is-active', n === current); });
        // keep the active pill in view when the rail scrolls sideways (phones)
        var box = rail[0] && rail[0].parentElement, pill = rail[current];
        if (box && pill && box.scrollWidth > box.clientWidth) {
          box.scrollTo({ left: pill.offsetLeft - (box.clientWidth - pill.offsetWidth) / 2, behavior: 'smooth' });
        }
      }
    }
    var activeRail = -1;
    function onScroll() { if (!ticking) { ticking = true; requestAnimationFrame(update); } }
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);
    update();
  }

  /* ---------------- fade-up reveal for headings & cards ---------------- */
  function initReveal() {
    if (reduceMotion || !('IntersectionObserver' in window)) return;
    document.documentElement.classList.add('mu-js');
    var groups = [
      '.mu-headblock', '.mu-h2:not(.mu-learn-head .mu-h2)', '.mu-stat', '.mu-ev-card', '.mu-talk', '.mu-impact-box h3',
      '.mu-template-media', '.mu-convo-media', '.mu-hub-left', '.mu-hub-center', '.mu-hub-links', '.mu-hub-map', '.mu-journey-box', '.mu-startup-right'
    ];
    var els = $$(groups.join(',')).filter(function (el) { return !el.closest('.mu-hero') && !el.closest('.mu-reveal'); });
    els.forEach(function (el) {
      el.classList.add('mu-reveal');
      var sibs = Array.prototype.indexOf.call(el.parentElement.children, el);
      if (el.matches('.mu-stat, .mu-ev-card, .mu-talk')) el.style.setProperty('--d', Math.min(sibs, 6) * 0.07 + 's');
    });
    var io = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('is-in'); obs.unobserve(e.target); } });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });
    els.forEach(function (el) { io.observe(el); });
  }

  /* ---------------- phone: sticky Apply bar after the hero, hidden at the form ---------------- */
  function initMobileCta() {
    var bar = $('#muMobileCta'), hero = $('.mu-hero'), form = $('#contact');
    if (!bar || !hero || !('IntersectionObserver' in window)) return;
    var pastHero = false, atForm = false;
    function sync() {
      var on = pastHero && !atForm;
      bar.classList.toggle('is-visible', on);
      bar.setAttribute('aria-hidden', on ? 'false' : 'true');
      $$('a', bar).forEach(function (a) { a.tabIndex = on ? 0 : -1; });
    }
    new IntersectionObserver(function (e) { pastHero = !e[0].isIntersecting; sync(); }, { rootMargin: '-40% 0px 0px 0px' }).observe(hero);
    if (form) new IntersectionObserver(function (e) { atForm = e[0].isIntersecting; sync(); }).observe(form);
  }

  /* ---------------- campus directions QR code ---------------- */
  function initQr() {
    var el = $('#muQr');
    if (!el) return;
    if (typeof QRCode === 'undefined') { el.textContent = 'Open in Google Maps'; el.className = 'is-fallback'; return; }
    new QRCode(el, { text: el.dataset.qr, width: 112, height: 112, colorDark: '#07111f', colorLight: '#ffffff', correctLevel: QRCode.CorrectLevel.M });
    el.removeAttribute('title');
  }

  function init() {
    initQr();
    initTabbedCarousels('.mu-events', '.mu-ev-swiper', 'ev');

    if (hasSwiper) {
      var st = $('.mu-startup-swiper');
      if (st) new Swiper(st, {
        slidesPerView: 1.2, centeredSlides: true, loop: true, spaceBetween: 0, grabCursor: true,
        autoplay: reduceMotion ? false : { delay: 3500, disableOnInteraction: false, pauseOnMouseEnter: true },
        pagination: { el: $('.swiper-pagination', st), clickable: true, dynamicBullets: true },
      });

      var al = $('.mu-alumni-swiper');
      if (al) new Swiper(al, {
        effect: 'coverflow', slidesPerView: 'auto', centeredSlides: true, loop: true, grabCursor: true,
        coverflowEffect: { rotate: 0, stretch: 0, depth: 100, modifier: 3, slideShadows: true },
        navigation: { nextEl: '.al-next', prevEl: '.al-prev' },
        autoplay: reduceMotion ? false : { delay: 4000, disableOnInteraction: false, pauseOnMouseEnter: true },
      });
    }
    initModel();
    initFacultyMore();
    initCountdown();
    initCampusVideo();
    initImpact();
    initCounters();
    initTracks();
    initReveal();
    initMobileCta();
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init); else init();
})();
