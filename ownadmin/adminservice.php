<?php
require_once 'auth_check.php';
require_once 'header.php';
?>

<h4 class="mb-4">Add New Service</h4>

<div class="row">
  <div class="col-md-8">
    <form action="control.php" method="post">

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
      </div>

      <div class="mb-3">
        <label for="img_path" class="form-label">Image Path</label>
        <input type="text" class="form-control" id="img_path" placeholder="e.g. img/service-1.jpg" name="img_path">
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Short Description</label>
        <textarea class="form-control" id="description" rows="3" placeholder="Enter short description" name="description"></textarea>
      </div>

      <div class="mb-3">
        <label for="charges" class="form-label">Charges (₹)</label>
        <input type="number" class="form-control" id="charges" placeholder="Enter charges" name="charges">
      </div>

      <div class="mb-3">
        <label for="longdesc" class="form-label">Long Description</label>
        <textarea class="form-control" id="longdesc" rows="5" placeholder="Enter detailed description" name="longdesc"></textarea>
      </div>

      <button type="submit" class="btn admin-btn-primary">Submit Service</button>
    </form>
  </div>
</div>

<?php require_once 'footer.php'; ?>
