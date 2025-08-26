<?php
session_start();
include "connection.php";
$sql = "SELECT * FROM employees ORDER BY id ASC";
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
    <title>View Employees - Ramesh Paints</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f6f9;
            color: #343a40;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #004a99;
            margin-bottom: 30px;
        }
        
         table {
            width: 1000px;
			align:center;
            border-collapse: collapse;
            margin-top: 20px;
			border:2px;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid black;
			border: 2px solid black;
        }

        th {
            background-color: #e9f1f8; 
            font-weight: 600;
            color: #004a99; 
            text-transform: uppercase;
            font-size: 12px;
        }
    </style>
</head>

<body>

<div class="container">
	<a href="admin_dashboard.php"> Back to Dashboard</a>
    <h1>Employee Information Table</h1>
	<center>
	
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php
      
            if ($result && mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['ID']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['dob']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['contact']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['salary']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6' class='no-records-message'>No employees found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
</center>
</body>
</html>
