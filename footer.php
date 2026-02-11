<?php
$currentPage = basename($_SERVER['PHP_SELF']);
$isHome = $currentPage === 'index.php';
$linkPrefix = $isHome ? '' : 'index.php';
?>
<footer style="background:#eee; text-align:center; padding:1.5rem;">
  <nav style="margin-bottom: 1rem;">
    <div class="footer-links">
      <a href="https://rocketreception.ca/">Home</a>
      <a href="https://rocketreception.ca/#demos">Try the Demos</a>
      <a href="https://rocketreception.ca/#what-it-is">What it is</a>
      <a href="https://rocketreception.ca/pricing.php">Pricing</a>
      <a href="https://rocketreception.ca/#start-project">Contact</a>
    </div>
  </nav>
  <div class="footer-policies">
    <p class="footer-heading">Policies</p>
    <div class="footer-links">
      <a href="/privacy">Privacy Policy</a>
      <a href="/terms">Terms of Service</a>
      <a href="/acceptable-use">Acceptable Use Policy</a>
      <a href="/data-handling">Data Handling &amp; Use</a>
      <a href="/security">Security</a>
      <a href="/contact">Contact</a>
    </div>
  </div>
  <p style="font-size: 0.9rem;">&copy; <?php echo date('Y'); ?> Rocket Reception is operated by Rocket Science Designs.</p>

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

    .footer-heading {
      font-size: 0.95rem;
      font-weight: 700;
      margin: 0 0 0.5rem;
      color: #333;
    }

    .footer-policies {
      margin-bottom: 1rem;
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


<script src="/assets/scripts.js"></script>



<script
  src="https://widget.rocketreception.ca/widget.js"
  data-api-base="https://rocketagent.onrender.com"
  data-subscriber="rocketreception"
  data-auto="true"
></script>
</body>
</html>
