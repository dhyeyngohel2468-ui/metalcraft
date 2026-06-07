<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WELDWORK Admin</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
</head>
<body>


<script>
  window.addEventListener('pageshow', function(e) {
    if (e.persisted) {
      window.location.replace('login.php');
    }
  });
</script>

<!-- ===== Top Navbar ===== -->
<nav class="navbar navbar-expand-lg admin-navbar">
  <div class="container-fluid px-4">
    <a class="navbar-brand admin-brand" href="index.php">WELDWORK</a>
    <div class="ms-auto d-flex align-items-center gap-3">
      <span class="text-white small">👤 <?= htmlspecialchars($_SESSION['username']) ?></span>
      <a href="logout.php" class="btn btn-sm btn-outline-light">Logout</a>
    </div>
  </div>
</nav>

<!-- ===== Page Layout ===== -->
<div class="container-fluid">
  <div class="row">

    <!-- ===== Sidebar ===== -->
    <?php $current = basename($_SERVER['PHP_SELF']); ?>
    <div class="col-md-2 p-0">
      <div class="admin-sidebar">
        <ul class="list-group list-group-flush">

          <li class="list-group-item admin-sidebar-item <?= ($current === 'index.php') ? 'active' : '' ?>">
            <a href="index.php"><span class="sidebar-icon">▸</span> Dashboard</a>
          </li>

          <li class="list-group-item admin-sidebar-item <?= ($current === 'adminappointment.php') ? 'active' : '' ?>">
            <a href="adminappointment.php"><span class="sidebar-icon">▸</span> Appointments</a>
          </li>

          <li class="list-group-item admin-sidebar-item <?= ($current === 'adminservice.php') ? 'active' : '' ?>">
            <a href="adminservice.php"><span class="sidebar-icon">▸</span> Services</a>
          </li>

        </ul>
      </div>
    </div>

    <!-- ===== Main Content Area (opened here, closed in footer.php) ===== -->
    <div class="col-md-10 p-4">