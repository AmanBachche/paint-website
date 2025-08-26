<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
    $ID = $_POST['ID'];
    
    $sql = "DELETE FROM product WHERE ID = '$ID'";
    
    mysqli_query($conn, $sql);
    
    echo "<p>Product Deleted successfully! <a href='v_pro.php'>View Products</a></p>";
    
    mysqli_close($conn);
}
?>
<html>
<head>
    <title>Delete Product - Ramesh Paints</title>
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
            color: #c0392b; 
            margin-bottom: 30px;
        }
    
         .button {
            width: 400px;
            padding: 15px;
            background-color: #c0392b; 
            color: white;
            border-radius: 5px;
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 25px;
            font-size: 14px;
            text-decoration: none;
            color: #004a99;
            background-color: #e9f1f8;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 500;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="admin_dashboard.php"> Back to Dashboard</a>
    <h1>Delete Product</h1>  
    <p style="text-align:center; color: #555;">Enter the ID of the product you wish to permanently delete.</p>
    <center>
	<a href="v_pro.php">View Product for product id</a>
	<br>
	<br>
    <form method="POST">
        <div class="form-group">
            <label for="id">Product ID</label>
            <input type="text" id="ID" name="ID" class="form-control" required>
        </div>
		<br>
		<br>
        <input type="submit" name="submit" value="Delete Product" class="button">
    </form>
	</center>
</div>
</body>
</html>
