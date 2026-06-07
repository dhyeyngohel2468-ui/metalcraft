<?php
include("header.php");
include("sidebar.php");
?>

<div class="page-wrapper">
  <div class="page-content p-4">
    <h2 class="mb-4">Dashboard Overview</h2>

    <!-- Summary Cards -->
    <div class="row mb-4">
      <div class="col-md-3">
        <div class="card text-white bg-primary mb-3">
          <div class="card-body">
            <h5 class="card-title">Orders Today</h5>
            <p class="card-text display-5">45</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-warning mb-3">
          <div class="card-body">
            <h5 class="card-title">Pending Bookings</h5>
            <p class="card-text display-5">12</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-success mb-3">
          <div class="card-body">
            <h5 class="card-title">New Reviews</h5>
            <p class="card-text display-5">7</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card text-white bg-danger mb-3">
          <div class="card-body">
            <h5 class="card-title">Inventory Alerts</h5>
            <p class="card-text display-5">3</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Latest Booking Requests Table -->
    <h3 class="mb-3">Latest Booking Requests</h3>
    <div class="table-responsive mb-5">
      <table class="table table-striped table-bordered align-middle">
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
            <td>101</td>
            <td>John Doe</td>
            <td>4</td>
            <td>2025-06-10</td>
            <td>7:00 PM</td>
            <td><span class="badge bg-warning">Pending</span></td>
            <td>
              <button class="btn btn-sm btn-success me-1">Confirm</button>
              <button class="btn btn-sm btn-danger">Cancel</button>
            </td>
          </tr>
          <tr>
            <td>102</td>
            <td>Sarah Lee</td>
            <td>2</td>
            <td>2025-06-12</td>
            <td>8:30 PM</td>
            <td><span class="badge bg-success">Confirmed</span></td>
            <td>
              <button class="btn btn-sm btn-primary me-1">Edit</button>
              <button class="btn btn-sm btn-danger">Delete</button>
            </td>
          </tr>
          <!-- Add more rows dynamically -->
        </tbody>
      </table>
    </div>

    <!-- Quick Action Buttons -->
    <h3 class="mb-3">Quick Actions</h3>
    <div>
      <button class="btn btn-primary me-2">Add New Menu Item</button>
      <button class="btn btn-secondary me-2">Manage Orders</button>
      <button class="btn btn-info me-2">View Reviews</button>
      <button class="btn btn-warning">Check Inventory</button>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
