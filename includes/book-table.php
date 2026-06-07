<?php
include('header.php');
include('navbar.php');
include('sidebar.php');
?>

<div class="body-wrapper" style="padding-top: 90px; padding-left: 20px; padding-right: 20px;">
  <h2 class="mb-4">🍽️ Booking Requests</h2>
  <table class="table table-bordered table-hover">
    <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>No. of People</th>
        <th>Date</th>
        <th>Time</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>John</td>
        <td>4</td>
        <td>2025-06-10</td>
        <td>7:00 PM</td>
        <td><span class="badge bg-warning">Pending</span></td>
        <td>
          <button class="btn btn-sm btn-primary">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Sarah</td>
        <td>2</td>
        <td>2025-06-12</td>
        <td>8:30 PM</td>
        <td><span class="badge bg-success">Confirmed</span></td>
        <td>
          <button class="btn btn-sm btn-primary">Edit</button>
          <button class="btn btn-sm btn-danger">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<?php include('footer.php'); ?>
