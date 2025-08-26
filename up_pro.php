<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
    $ID = $_POST['ID'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    
    $sql = "UPDATE product SET price='$price', stock='$stock' WHERE ID='$ID'";
    
    mysqli_query($conn, $sql);
    
    echo "<p style='text-align:center; color:green; font-weight:bold;'>Product updated successfully! <a href='v_pro.php'>View products</a></p>";

    mysqli_close($conn);
}
?>
<html>
<head>
    <title>Update Product - Ramesh Paints</title>
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
            margin-bottom: 20px;
		}


        .button {
            width: 400px	;
            padding: 15px;
            background-color: #004a99;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }
        
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
        <a href="admin_dashboard.php" class="back-link">Back to Dashboard</a>
        <h1>Update Product Details</h1>
        <center>
        <form method="POST">
                <label for="ID">Product ID</label>
                <input type="text" id="ID" name="ID" required>
			<br><br>
            
                <label for="price">New Price</label>
                <input type="number" step="0.01" id="price" name="price" required>
				<br><br>
            
                <label for="stock">New Stock</label>
                <input type="number" id="stock" name="stock" required>
			<br><br>
            <input type="submit" name="submit" value="Update Product" class="button">
        </form></center>
</body>
</html>
