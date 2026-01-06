<style>
/* START A PROJECT – FORM (Rocket Agent) */

#start-project #contact-form {
  margin-top: 28px;
  display: grid;
  gap: 14px;
}

/* Inputs + textarea + select */

#contact-form input,
#contact-form textarea,
#contact-form select {
  width: 100%;
  font-family: "Kameron", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
  font-size: 19px;
  line-height: 1.4;
  padding: 14px 16px;
  border-radius: 10px;
  border: 1px solid rgba(0, 0, 0, 0.12);
  background: #fafafa;
  color: var(--text-body);
  outline: none;
  transition:
    border-color 0.18s ease,
    background-color 0.18s ease,
    box-shadow 0.18s ease;
  resize: vertical;
}

#contact-form textarea {
  min-height: 160px;
}

/* Placeholder styling */

#contact-form input::placeholder,
#contact-form textarea::placeholder {
  color: #999999;
  opacity: 1;
}

/* Hover + focus states */

#contact-form input:hover,
#contact-form textarea:hover,
#contact-form select:hover {
  background: #ffffff;
}

#contact-form input:focus,
#contact-form textarea:focus,
#contact-form select:focus {
  background: #ffffff;
  border-color: var(--accent);
  box-shadow: 0 0 0 1px rgba(217, 23, 23, 0.12);
}

/* Submit button */

#contact-form button[type="submit"] {
  align-self: flex-start;
  border: none;
  border-radius: 10px;
  padding: 12px 24px;
  font-family: "Manrope", system-ui, sans-serif;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  background: var(--accent);
  color: #ffffff;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  transition:
    background-color 0.18s ease,
    transform 0.18s ease,
    box-shadow 0.18s ease;
  box-shadow: 0 12px 26px rgba(0, 0, 0, 0.18);
}

#contact-form button[type="submit"]:hover {
  background: #f03939;
  transform: translateY(-1px);
  box-shadow: 0 16px 32px rgba(0, 0, 0, 0.22);
}

#contact-form button[type="submit"]:active {
  transform: translateY(0);
  box-shadow: 0 10px 22px rgba(0, 0, 0, 0.18);
}

/* Response message */

#form-response {
  font-size: 14px;
  color: var(--text-muted);
}

/* Two-column layout on wider screens */

@media (min-width: 720px) {
  #start-project #contact-form {
    grid-template-columns: repeat(2, minmax(0, 1fr));
  }

  /* these appear as the 2-up fields */
  #contact-form input[name="name"],
  #contact-form input[name="email"],
  #contact-form input[name="topic"],
  #contact-form input[name="timeframe"] {
    grid-column: span 1;
  }

  /* full-width elements */
  #contact-form textarea,
  #contact-form button[type="submit"],
  #form-response {
    grid-column: 1 / -1;
  }
}

</style>

<section id="start-project">
  <div class="container max-width">
    <p class="eyebrow">START A PROJECT</p>
    <h2>Let’s see if Rocket Agent is a good fit.</h2>

    <p class="lead">
      Rocket Agent helps handle repetitive questions, scheduling, and follow-ups by connecting securely
      to the tools you already use. If you’re curious, want a demo, or just want to sanity-check an idea,
      send a note below.
    </p>

    <form id="contact-form" method="post" action="/submit">
      <!-- Keep these names to preserve your CSS grid behavior -->
      <input type="text" name="name" placeholder="Your Name" required>
      <input type="email" name="email" placeholder="Your Email" required>

      <input
        type="text"
        name="topic"
        placeholder="What do you want Rocket Agent to help with? (email, scheduling, voice, etc.)"
      >

      <input
        type="text"
        name="timeframe"
        placeholder="What’s your timeframe? (ASAP, this month, just exploring)"
      >

      <textarea
        name="message"
        placeholder="Tell me a bit about your business and the repetitive questions or workflows you want handled…"
        required
      ></textarea>

      <!-- Optional: helpful for filtering emails on your side -->
      <input type="hidden" name="source" value="rocket-agent-site">

      <button type="submit" name="submit">Start the conversation</button>

      <div id="form-response">
        No pressure — this goes straight to me.
      </div>
      <div style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;">
        <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
      </div>

    </form>
  </div>
</section>


