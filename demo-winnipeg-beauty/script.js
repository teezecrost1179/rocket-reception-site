(function () {
  const demoModal = document.getElementById("demoModal");
  const demoDialog = document.getElementById("demoDialog");
  let scrollY = 0;

  function openModal() {
    demoModal.hidden = false;
    demoDialog.hidden = false;
    scrollY = window.scrollY || window.pageYOffset || 0;
    document.body.classList.add("modal-open");
    document.body.style.top = `-${scrollY}px`;
  }
  function closeModal() {
    demoModal.hidden = true;
    demoDialog.hidden = true;
    document.body.classList.remove("modal-open");
    document.body.style.top = "";
    window.scrollTo(0, scrollY);
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

  // Call-me form submission
  const callMeForm = document.getElementById("rr-callme-form");
  if (callMeForm) {
    const apiBase = "https://rocketagent.onrender.com";
    const subscriber = "winnipegbeauty";
    const status = callMeForm.querySelector(".rr-form-status");

    callMeForm.addEventListener("submit", async (e) => {
      e.preventDefault();
      const phoneInput = callMeForm.querySelector('input[name="phone"]');
      const phone = phoneInput?.value.trim() ?? "";

      if (!phone) {
        if (status) status.textContent = "Please enter a phone number.";
        return;
      }

      if (status) status.textContent = "Calling you now…";

      const resp = await fetch(apiBase + "/call", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({
          phone,
          subscriber,
          transferPreselect: "beauty"
        })
      });

      const data = await resp.json().catch(() => ({}));
      if (!resp.ok) {
        if (status) status.textContent = data.error || "Could not start the call.";
        return;
      }

      if (status) status.textContent = "Call started — please answer your phone.";
    });
  }
})();
