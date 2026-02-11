// Mark that JS is available (enables the .has-js CSS behavior)
document.body.classList.add('has-js');

const navToggle = document.querySelector('.nav-toggle');
const mainNav = document.querySelector('nav.main-nav');

if (navToggle && mainNav) {
  navToggle.addEventListener('click', () => {
    const isOpen = mainNav.classList.toggle('is-open');
    navToggle.classList.toggle('is-open', isOpen);
    navToggle.setAttribute('aria-expanded', String(isOpen));
  });
}

// Mobile submenu toggle (Integrations)
document.querySelectorAll('.nav-item.has-menu').forEach((item) => {
  const btn = item.querySelector('.submenu-toggle');
  const dropdown = item.querySelector('.dropdown');

  if (!btn || !dropdown) return;

  btn.addEventListener('click', () => {
    const isOpen = item.classList.toggle('open');
    btn.setAttribute('aria-expanded', String(isOpen));
  });
});

// Optional: close nav when a link is clicked (mobile)
document.querySelectorAll('nav.main-nav a').forEach((link) => {
  link.addEventListener('click', () => {
    if (!navToggle || !mainNav) return;

    // Only collapse if we're in mobile layout (hamburger visible)
    const toggleVisible = window.getComputedStyle(navToggle).display !== 'none';
    if (!toggleVisible) return;

    mainNav.classList.remove('is-open');
    navToggle.classList.remove('is-open');
    navToggle.setAttribute('aria-expanded', 'false');

    // Also collapse any open submenu
    document.querySelectorAll('.nav-item.has-menu.open').forEach((openItem) => {
      openItem.classList.remove('open');
      const b = openItem.querySelector('.submenu-toggle');
      if (b) b.setAttribute('aria-expanded', 'false');
    });
  });
});

const contactForm = document.getElementById('contact-form');
if (contactForm) {
  contactForm.addEventListener('submit', async function (e) {
    e.preventDefault();

    const form = e.currentTarget;
    const formData = new FormData(form);
    const responseEl = document.getElementById('form-response');
    const emailInput = form.querySelector('input[name="email"]');

    try {
      const res = await fetch(form.action, {
        method: 'POST',
        body: formData,
      });

      const text = await res.text();
      const contentType = res.headers.get('content-type') || '';
      const looksLikeHtml = contentType.includes('text/html') || /<!DOCTYPE|<html/i.test(text);

      if (!res.ok || looksLikeHtml) {
        responseEl.innerText = "Thanks — we received your request. If you don't hear back, please email support@rocketreception.ca.";
        if (emailInput) emailInput.value = '';
        if (!res.ok) {
          console.error('Contact form error:', res.status, text);
        }
        return;
      }

      responseEl.innerText = text || "Thanks — message sent.";
      if (emailInput) emailInput.value = '';
      form.reset();
    } catch (err) {
      responseEl.innerText = "Sorry, something went wrong. Please email me directly at support@rocketreception.ca.";
      if (emailInput) emailInput.value = '';
    }
  });
}
