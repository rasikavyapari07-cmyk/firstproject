<?php
include 'connectionnn.php'; // Adjust to your DB connection file

// Fetch campaigns from DB
$sql = "SELECT * FROM camp ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Campaigns</title>
    <!-- Bootstrap & DataTables CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <!-- Button to Add Campaign -->
    <div class="d-flex justify-content-end mb-3">
        <a href="create_campaigns.php" class="btn btn-primary">+ Create Campaign</a>
    </div>

    <h2 class="mb-4 text-center">Campaign Records</h2>

    <table id="campaignTable" class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>Campaign Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Budget</th>
                <th>Description</th>
                
            </tr>
        </thead>
        <tbody>
            <?php if ($result && mysqli_num_rows($result) > 0): ?>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['campaign_name']) ?></td>
                        <td><?= $row['start_date'] ?></td>
                        <td><?= $row['end_date'] ?></td>
                        <td>$<?= number_format($row['budget'], 2) ?></td>
                        <td><?= nl2br(htmlspecialchars($row['description'])) ?></td>
                        <td>
                            <a href="edit_campaign.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary">Edit</a>
                            <a href="delete_campaign.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this campaign?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="7" class="text-center">No campaigns found.</td></tr>
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
        $('#campaignTable').DataTable();
    });
</script>

</body>
</html>

<?php mysqli_close($conn); ?>
