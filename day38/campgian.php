<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Digital Marketing Campaign Manager</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ddd;
      text-align: left;
    }
    button {
      padding: 5px 10px;
      margin-right: 5px;
      cursor: pointer;
    }
    input, select {
      padding: 6px;
      margin-right: 10px;
    }
  </style>
</head>
<body>

<h2>Digital Marketing Campaign Manager</h2>

<!-- Form to Add New Campaign -->
<div>
  <input type="text" id="campaignName" placeholder="Campaign Name" required>
  <select id="platform">
    <option value="Facebook">Facebook</option>
    <option value="Google">Google</option>
    <option value="Instagram">Instagram</option>
    <option value="LinkedIn">LinkedIn</option>
  </select>
  <input type="text" id="status" placeholder="Status (Active, Paused)" required>
  <input type="number" id="budget" placeholder="Budget ($)" required>
  <button onclick="addCampaign()">Add Campaign</button>
  <button onclick="deleteAllRows()">Delete All</button>
</div>

<!-- Campaign Table -->
<table id="campaignTable">
  <thead>
    <tr>
      <th>Campaign Name</th>
      <th>Platform</th>
      <th>Status</th>
      <th>Budget ($)</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <!-- Campaigns go here -->
  </tbody>
</table>

<script>
  function addCampaign() {
    const name = document.getElementById('campaignName').value.trim();
    const platform = document.getElementById('platform').value;
    const status = document.getElementById('status').value.trim();
    const budget = document.getElementById('budget').value.trim();

    if (!name || !status || !budget) {
      alert("Please fill out all fields.");
      return;
    }

    const table = document.getElementById('campaignTable').getElementsByTagName('tbody')[0];
    const row = table.insertRow();

    row.innerHTML = `
      <td>${name}</td>
      <td>${platform}</td>
      <td>${status}</td>
      <td>${budget}</td>
      <td>
        <button onclick="editRow(this)">Edit</button>
        <button onclick="deleteRow(this)">Delete</button>
      </td>
    `;

    // Clear form
    document.getElementById('campaignName').value = '';
    document.getElementById('status').value = '';
    document.getElementById('budget').value = '';
  }

  function deleteRow(button) {
    const row = button.closest('tr');
    row.remove();
  }

  function deleteAllRows() {
    const table = document.getElementById('campaignTable').getElementsByTagName('tbody')[0];
    table.innerHTML = '';
  }

  function editRow(button) {
    const row = button.closest('tr');
    const cells = row.querySelectorAll('td');

    const newName = prompt("Edit Campaign Name:", cells[0].innerText);
    const newPlatform = prompt("Edit Platform:", cells[1].innerText);
    const newStatus = prompt("Edit Status:", cells[2].innerText);
    const newBudget = prompt("Edit Budget ($):", cells[3].innerText);

    if (newName) cells[0].innerText = newName;
    if (newPlatform) cells[1].innerText = newPlatform;
    if (newStatus) cells[2].innerText = newStatus;
    if (newBudget) cells[3].innerText = newBudget;
  }
</script>

</body>
</html>
