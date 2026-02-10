

<section id="start-project">
  <div class="container max-width">
    <p class="eyebrow">START A PROJECT</p>
    <h2>Let’s see if Rocket Reception is a good fit.</h2>

    <p class="lead">
      Rocket Reception helps handle repetitive questions, scheduling, and follow-ups by connecting securely
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
        placeholder="What do you want Rocket Reception to help with? (email, scheduling, voice, etc.)"
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
      <input type="hidden" name="source" value="rocket-reception-site">

      <button type="submit" name="submit">Start the conversation</button>

      <div id="form-response">
        No pressure — looking forward to hearing from you :)
      </div>
      <div style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;">
        <label>Website <input type="text" name="website" tabindex="-1" autocomplete="off"></label>
      </div>

    </form>
  </div>
</section>


