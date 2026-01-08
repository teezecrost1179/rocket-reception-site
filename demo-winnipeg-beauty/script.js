(function () {
  const demoModal = document.getElementById("demoModal");
  const demoDialog = document.getElementById("demoDialog");

  function openModal() {
    demoModal.hidden = false;
    demoDialog.hidden = false;
    document.body.style.overflow = "hidden";
  }
  function closeModal() {
    demoModal.hidden = true;
    demoDialog.hidden = true;
    document.body.style.overflow = "";
  }

  // Any nav/social/CTA click should open demo modal
  document.addEventListener("click", (e) => {
    const t = e.target;

    // Buttons/links that should not navigate
    const demoLink = t.closest?.("[data-demo-link]");
    if (demoLink) {
      e.preventDefault();
      openModal();
      return;
    }

    // Explicit modal open/close hooks
    const openBtn = t.closest?.("[data-demo-modal='open']");
    if (openBtn) {
      e.preventDefault();
      openModal();
      return;
    }

    const closeBtn = t.closest?.("[data-demo-modal='close']");
    if (closeBtn) {
      e.preventDefault();
      closeModal();
      return;
    }
  });

  demoModal?.addEventListener("click", closeModal);
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape" && !demoDialog.hidden) closeModal();
  });

  // Mobile nav toggle
  const hamburger = document.querySelector(".hamburger");
  const mobileNav = document.querySelector(".mobile-nav");

  hamburger?.addEventListener("click", () => {
    const isOpen = hamburger.getAttribute("aria-expanded") === "true";
    hamburger.setAttribute("aria-expanded", String(!isOpen));
    mobileNav.hidden = isOpen;
  });

  // Demo newsletter form: prevent submit
  const newsletter = document.getElementById("newsletter");
  newsletter?.addEventListener("submit", (e) => {
    e.preventDefault();
    openModal();
  });
})();
