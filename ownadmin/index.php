<?php
require_once 'auth_check.php';
require_once 'header.php';
?>

<h4 class="mb-1">Welcome, <?= htmlspecialchars($_SESSION['username']) ?></h4>
<p class="text-muted mb-4">Use the sidebar to manage your content.</p>

<div class="row mt-2">
  <div class="col-md-5 mb-4">
    <a href="adminappointment.php" class="text-decoration-none">
      <div class="admin-card p-4 rounded">
        <div class="admin-card-icon">📅</div>
        <div class="admin-card-label">Appointments</div>
        <div class="text-muted small">View all customer bookings</div>
      </div>
    </a>
  </div>
  <div class="col-md-5 mb-4">
    <a href="adminservice.php" class="text-decoration-none">
      <div class="admin-card p-4 rounded">
        <div class="admin-card-icon">🔧</div>
        <div class="admin-card-label">Services</div>
        <div class="text-muted small">Add or manage services</div>
      </div>
    </a>
  </div>
</div>

<?php require_once 'footer.php'; ?>
