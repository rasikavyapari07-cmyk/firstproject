<?php
include 'connectionnn.php'; // make sure your DB connection file is named correctly

// Fetch records
$sql = "SELECT * FROM seo_campaign ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View SEO Campaigns</title>
    <!-- Bootstrap + DataTables CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>SEO Campaign Records</h2>
        <a href="create_seo.php" class="btn btn-primary">+ Create SEO Campaign</a>
    </div>

    <table id="seoTable" class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Campaign Name</th>
                <th>Keywords</th>
                <th>Goal</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result && mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['campaign_name']) ?></td>
                        <td><?= htmlspecialchars($row['keywords']) ?></td>
                        <td><?= htmlspecialchars($row['goal']) ?></td>
                        <td><?= $row['created_at'] ?></td>
                         <td>
                        <a href="edit_selection.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="delete_selection.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="5" class="text-center">No SEO campaigns found.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function () {
    $('#seoTable').DataTable();
});
</script>
</body>
</html>

<?php mysqli_close($conn); ?>
