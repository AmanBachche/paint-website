<?php
session_start();
include "connection.php";

$sql = "SELECT * FROM product ORDER BY ID ASC";  
$result = mysqli_query($conn, $sql);
?>
<html>
<head>
    <title>View Products - Ramesh Paints</title>
    <style>
        body {
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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

        td img {
            width: 100px;
            height: 100px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container">
<a href="emp_dashboard.php">Back to Dashboard</a>
    <h1>Product Information Table</h1>
	<center>
	<a href="del_pro1.php">Delete Product</a><br><br><a href="up_pro1.php">Update product</a>
	</center>
	<center>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Color</th>
                <th>Price</th>
                <th>Image</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['ID']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['P_name']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['color']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['price']) . "</td>";
                    echo "<td><img src='" . htmlspecialchars($row['image']) . "' alt='" . htmlspecialchars($row['P_name']) . "'></td>";
                    echo "<td>" . htmlspecialchars($row['stock']) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6' class='no-products-message'>No Products found</td></tr>";
            }
            ?>
        </tbody>
    </table>
	</center>
</div>

</body>
</html>
