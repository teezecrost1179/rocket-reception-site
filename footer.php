<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$isHome = $currentPage === 'index.php';
$linkPrefix = $isHome ? '' : 'index.php';
?>
<footer style="background:#eee; text-align:center; padding:1.5rem;">
  <nav style="margin-bottom: 1rem;">
    <div class="footer-links">
      <a href="/">Home</a>
      <a href="/how-it-works">How it works</a>
      <a href="/integrations">Integrations</a>
      <a href="/pricing">Pricing</a>
      <a href="/contact">Contact</a>
      <a href="/support">Support</a>
      <a href="/privacy">Privacy</a>
      <a href="/terms">Terms</a>
      <a href="/security">Security</a>
      <a href="/data-deletion">Data deletion</a>
</div>
  </nav>
  <p style="font-size: 0.9rem;">&copy; 2025 Rocket Agent — A service by Rocket Science Designs.</p>

  <style>
    .footer-links {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1rem;
      margin-bottom: 1rem;
    }

    .footer-links a {
      color: #333;
      text-decoration: none;
      font-weight: 500;
      font-size: 0.95rem;
    }

    @media (max-width: 600px) {
      footer {
        padding: 2rem 1rem;
      }

      .footer-links {
        flex-direction: column;
        gap: 0.75rem;
      }

      .footer-links a {
        font-size: 1rem;
      }
    }
  </style>
</footer>


<script>
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

      try {
        const res = await fetch(form.action, {   // ✅ uses action="/submit"
          method: 'POST',
          body: formData,
        });

        const text = await res.text();

        if (!res.ok) {
          responseEl.innerText = text || "Hmm — couldn’t submit right now. Please try again.";
          return;
        }

        responseEl.innerText = text || "Thanks — message sent.";
        form.reset();
      } catch (err) {
        responseEl.innerText = "Sorry, something went wrong. Please email me directly.";
      }
    });
  }

</script>
</body>
</html>
