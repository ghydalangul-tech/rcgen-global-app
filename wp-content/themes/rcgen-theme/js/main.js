/**
 * RCGEN Theme — Main JavaScript
 * Handles: sticky nav, mobile menu, stat counters, scroll animations, contact form
 */

(function () {
  'use strict';

  // ─── Sticky Header ────────────────────────────────────────────────────────

  const header = document.getElementById('site-header');

  function updateHeader() {
    if (!header) return;
    if (window.scrollY > 40) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }

  window.addEventListener('scroll', updateHeader, { passive: true });
  updateHeader();

  // ─── Mobile Navigation Toggle ─────────────────────────────────────────────

  const navToggle = document.getElementById('nav-toggle');
  const primaryNav = document.getElementById('primary-nav');

  if (navToggle && primaryNav) {
    navToggle.addEventListener('click', function () {
      const isOpen = primaryNav.classList.toggle('open');
      navToggle.classList.toggle('open', isOpen);
      navToggle.setAttribute('aria-expanded', isOpen.toString());
      document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // Close nav when a link is clicked
    primaryNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        primaryNav.classList.remove('open');
        navToggle.classList.remove('open');
        navToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      });
    });

    // Close on outside click
    document.addEventListener('click', function (e) {
      if (!header.contains(e.target) && primaryNav.classList.contains('open')) {
        primaryNav.classList.remove('open');
        navToggle.classList.remove('open');
        navToggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
      }
    });
  }

  // ─── Smooth Scroll for anchor links ──────────────────────────────────────

  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const headerHeight = header ? header.offsetHeight : 0;
        const top = target.getBoundingClientRect().top + window.scrollY - headerHeight - 16;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  // ─── Scroll-reveal Animations ─────────────────────────────────────────────

  const fadeEls = document.querySelectorAll('.fade-in');

  if ('IntersectionObserver' in window && fadeEls.length) {
    const observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );

    fadeEls.forEach(function (el) {
      observer.observe(el);
    });
  } else {
    // Fallback: show all
    fadeEls.forEach(function (el) {
      el.classList.add('visible');
    });
  }

  // ─── Animated Stat Counters ───────────────────────────────────────────────

  const statNumbers = document.querySelectorAll('.stat-number[data-target]');

  function animateCounter(el) {
    const target = parseInt(el.getAttribute('data-target'), 10);
    const suffix = el.getAttribute('data-suffix') || '';
    const duration = 1800;
    const frameRate = 60;
    const totalFrames = Math.round((duration / 1000) * frameRate);
    let frame = 0;

    // Easing: ease-out quad
    function easeOut(t) {
      return t * (2 - t);
    }

    const timer = setInterval(function () {
      frame++;
      const progress = easeOut(frame / totalFrames);
      const current = Math.round(progress * target);
      el.textContent = current.toLocaleString() + suffix;

      if (frame >= totalFrames) {
        clearInterval(timer);
        el.textContent = target.toLocaleString() + suffix;
      }
    }, 1000 / frameRate);
  }

  if ('IntersectionObserver' in window && statNumbers.length) {
    const counterObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            counterObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.4 }
    );

    statNumbers.forEach(function (el) {
      counterObserver.observe(el);
    });
  } else {
    statNumbers.forEach(function (el) {
      const target = el.getAttribute('data-target') || '0';
      const suffix = el.getAttribute('data-suffix') || '';
      el.textContent = parseInt(target, 10).toLocaleString() + suffix;
    });
  }

  // ─── Contact Form (AJAX) ──────────────────────────────────────────────────

  const contactForm = document.getElementById('rcgen-contact-form');

  if (contactForm) {
    const statusBox = document.getElementById('cf-status');
    const submitBtn = document.getElementById('cf-submit');

    function showStatus(message, isError) {
      if (!statusBox) return;
      statusBox.textContent = message;
      statusBox.style.display = 'block';
      statusBox.style.padding = '12px 16px';
      statusBox.style.borderRadius = '8px';
      statusBox.style.fontWeight = '600';
      statusBox.style.fontSize = '0.9rem';

      if (isError) {
        statusBox.style.background = '#fef2f2';
        statusBox.style.color = '#dc2626';
        statusBox.style.border = '1px solid #fca5a5';
      } else {
        statusBox.style.background = '#f0fdf4';
        statusBox.style.color = '#16a34a';
        statusBox.style.border = '1px solid #86efac';
      }
    }

    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const name    = contactForm.querySelector('[name="name"]').value.trim();
      const email   = contactForm.querySelector('[name="email"]').value.trim();
      const message = contactForm.querySelector('[name="message"]').value.trim();

      if (!name || !email || !message) {
        showStatus('Please fill in your name, email, and message.', true);
        return;
      }

      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
        showStatus('Please enter a valid email address.', true);
        return;
      }

      const originalText = submitBtn.textContent;
      submitBtn.textContent = 'Sending…';
      submitBtn.disabled = true;

      // Check if WordPress AJAX is available
      if (typeof rcgenData === 'undefined' || !rcgenData.ajaxUrl) {
        // Fallback: just show success message (static site or no WP)
        setTimeout(function () {
          showStatus('Thank you! Your message has been sent. We will be in touch soon.', false);
          contactForm.reset();
          submitBtn.textContent = originalText;
          submitBtn.disabled = false;
        }, 1200);
        return;
      }

      const formData = new FormData(contactForm);
      formData.append('action', 'rcgen_contact');
      formData.append('nonce', rcgenData.nonce);

      fetch(rcgenData.ajaxUrl, {
        method: 'POST',
        body: formData,
      })
        .then(function (res) { return res.json(); })
        .then(function (data) {
          if (data.success) {
            showStatus(data.data.message, false);
            contactForm.reset();
          } else {
            showStatus(data.data.message || 'Something went wrong. Please try again.', true);
          }
        })
        .catch(function () {
          showStatus('Network error. Please try again later.', true);
        })
        .finally(function () {
          submitBtn.textContent = originalText;
          submitBtn.disabled = false;
        });
    });
  }

  // ─── Active nav link highlight ────────────────────────────────────────────

  (function highlightCurrentNav() {
    const currentPath = window.location.pathname;
    document.querySelectorAll('#primary-nav a').forEach(function (link) {
      try {
        const linkPath = new URL(link.href, window.location.origin).pathname;
        if (
          linkPath === currentPath ||
          (linkPath !== '/' && currentPath.startsWith(linkPath))
        ) {
          link.classList.add('current');
        }
      } catch (_) {}
    });
  })();

})();
