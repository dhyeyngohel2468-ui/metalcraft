<?php
require_once 'auth_check.php';
require_once 'header.php';
include_once 'db.php';

$y = mysqli_query($oo, 'SELECT * FROM appointment');
?>

<h4 class="mb-4">Appointments</h4>
<div class="table-responsive">
    <table class="table table-bordered table-hover text-center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Service</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            <?php while($x = mysqli_fetch_array($y)) { ?>
                <tr>
                    <td><?= htmlspecialchars($x['name']) ?></td>
                    <td><?= htmlspecialchars($x['email']) ?></td>
                    <td><?= htmlspecialchars($x['mobile']) ?></td>
                    <td><?= htmlspecialchars($x['service']) ?></td>
                    <td><?= htmlspecialchars($x['message']) ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php require_once 'footer.php'; ?>
