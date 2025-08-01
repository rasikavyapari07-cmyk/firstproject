<?php
include 'connect.php';

// Fetch data from the database
$sql = "SELECT id, fullname, emailaddress, username, registrationdate FROM enquiries ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Enquiry Records</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>

    
    <div class="d-flex justify-content-end mb-3">
  <a href="create_enquiry.php" class="btn btn-primary">
    + Create Enquiry
  </a>
</div>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Enquiry Records</h2>
    <table id="enquiryTable" class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Registration Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['fullname']) ?></td>
                    <td><?= htmlspecialchars($row['emailaddress']) ?></td>
                    <td><?= htmlspecialchars($row['username']) ?></td>
                    <td><?= htmlspecialchars($row['registrationdate']) ?></td>
                    <td>
                        <button class="btn btn-success btn-sm">Save</button>
                        <button class="btn btn-primary btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5" class="text-center">No enquiries found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- jQuery + DataTables JS -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#enquiryTable').DataTable();
});
</script>
</body>
</html>

<?php $conn->close(); ?>
