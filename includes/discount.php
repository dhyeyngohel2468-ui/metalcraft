<?php
include("header.php");
include("sidebar.php");
?>

<div class="page-wrapper" style="margin-top: 56px; margin-left: 250px;">
  <div class="page-content p-4">
    <h2 class="mb-4">💸 30% Discount Offer Requests</h2>

    <!-- Discount offer form -->
    <form action="discount-offer-process.php" method="post" class="bg-white p-4 rounded shadow-sm" style="max-width: 600px;">
      <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email Address</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required />
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label fw-semibold">Phone Number</label>
        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Enter phone number" />
      </div>

      <button type="submit" class="btn btn-primary">Claim Discount</button>
    </form>
  </div>
</div>

<?php
include("footer.php");
?>
