<?php
include 'connection.php'; // DB connection file

// Fetch data
$sql = "SELECT * FROM selection ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Marketing Selections</title>
    <!-- Bootstrap & DataTables CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex justify-content-end mb-3">
  <a href="create_marketing.php" class="btn btn-primary">
    + select subject
  </a>
</div>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Marketing Selection Records</h2>

    <table id="selectionTable" class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Marketing Choice</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if ($result && mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['full_name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['marketing_choice']) ?></td>
                    <td>
                        <a href="edit_selection.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="delete_selection.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5" class="text-center">No records found.</td></tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- JS Scripts -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#selectionTable').DataTable();
});
</script>
</body>
</html>

<?php mysqli_close($conn); ?>
