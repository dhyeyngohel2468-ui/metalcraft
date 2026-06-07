<?php
// contact.php
include("header.php");
include("sidebar.php");
?>

<div class="page-wrapper">
  <div class="page-content p-4">
    <h2>Contact Us</h2>
    <!-- Contact form -->
    <form action="contact-process.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" id="name" name="name" class="form-control" required />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" id="email" name="email" class="form-control" required />
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">Message</label>
        <textarea id="message" name="message" rows="4" class="form-control" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
  </div>
</div>

<?php
include("footer.php");
?>
