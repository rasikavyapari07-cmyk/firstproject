<?php
include 'connectionn.php'; // Ensure $conn is defined

// Fetch all campaign reports
$sql = "SELECT id, campaign_name, report_date, impressions, clicks, conversions, cost, notes FROM campaign_report ORDER BY report_date DESC";
$result = mysqli_query($conn, $sql);

// Check if query failed
if (!$result) {
    die("SQL Error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>View Campaign Reports</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

  <style>
    body {
      background-color: #f8f9fa;
    }
    h2 {
      text-align: center;
      margin-top: 30px;
      margin-bottom: 30px;
    }
  </style>
</head>
 <div class="d-flex justify-content-end mb-3">
  <a href="create_report.php" class="btn btn-primary">
    + report
  </a>
</div>

<body>

<div class="container">
  <h2>Campaign Report Records</h2>

  <table id="reportTable" class="table table-bordered table-hover">
    <thead class="table-primary text-center">
      <tr>
        <th>ID</th>
        <th>Campaign Name</th>
        <th>Report Date</th>
        <th>Impressions</th>
        <th>Clicks</th>
        <th>Conversions</th>
        <th>Cost ($)</th>
        <th>Notes</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $row['id']; ?></td>
          <td><?= htmlspecialchars($row['campaign_name']); ?></td>
          <td><?= $row['report_date']; ?></td>
          <td><?= $row['impressions']; ?></td>
          <td><?= $row['clicks']; ?></td>
          <td><?= $row['conversions']; ?></td>
          <td><?= number_format($row['cost'], 2); ?></td>
          <td><?= nl2br(htmlspecialchars($row['notes'])); ?></td>
          <td class="text-center">
            <button class="btn btn-success btn-sm">Save</button>
            <a href="edit_campaign.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
            <a href="delete_campaign.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this report?');">Delete</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<!-- DataTables Init -->
<script>
  $(document).ready(function () {
    $('#reportTable').DataTable();
  });
</script>

</body>
</html>
