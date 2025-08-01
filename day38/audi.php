<!DOCTYPE html>
<html>
<head>
    <title>MySQL Data in DataTable</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables CSS and JS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <th>digital marketing</th>
    <?php
require('connect.php');

$sql = "SELECT  name, email FROM audience";
 $result = mysqli_query($conn, $sql);

?>

<table id="userTable" class="display">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>interest</th>
        </tr>
    </thead>
   <tbody>
    <?php
    if ($result->num_rows > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>". $row["name"] ."</td>
                    <td>". $row["email"] ."</td>
                     <td>". $row["interest"] ."</td>
                    <td>
                        <button onclick='editRow(this)'>Edit</button>
                        <button onclick='deleteRow(this)'>Delete</button>
                    </td>
                  </tr>";
              }
    }
    ?>
</tbody>


    <script>
        $(document).ready(function() {
            $('#userTable').DataTable(
            {

            paging: false,
            scrollY: 200,
            ordering : false
            }    

                );
            
        });


    </script>

</body>
</html>