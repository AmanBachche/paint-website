<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
    $p_name =$_POST['P_name'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $img_path = mysqli_real_escape_string($conn, $target_file);
            
            $sql = "INSERT INTO product (P_name, color, price, image, stock) VALUES ('$p_name', '$color', $price, '$img_path', $stock)";
            
            if (mysqli_query($conn, $sql)) {
                echo "<p>Product added successfully! <a href='v_pro.php'>View Products</a></p>";
            }
        }
    }
    
    mysqli_close($conn);
}
?>

<html>
<head>
    <title>Add Product - Ramesh Paints</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f6f9;
            color: #343a40;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #004a99;
            margin-bottom: 30px;
        }

        .button{
            display: block;
            width: 400px;
            padding: 12px;
            background-color: #004a99;
            color: white;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
           
        }       
        .back-link {
            display: inline-block;
            margin-bottom: 25px;
            font-size: 14px;
            color: #004a99;
            background-color: #e9f1f8;
            padding: 8px 15px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="admin_dashboard.php">Back to Dashboard</a>
    <h1>Add New Product</h1>
    <center>
    <form method="POST" enctype="multipart/form-data">
   
            <label for="P_name">Product Name</label>
            <input type="text" id="P_name" name="P_name"  required>
			<br><br>
            <label for="color">Color</label>
            <input type="text" id="color" name="color" required>
			<br><br>
            <label for="price">Price</label>
            <input type="number" id="price" step="0.01" name="price" required>
			<br><br>
            <label for="image">Product Image</label>
            <input type="file" id="image" name="image" required>
			<br><br>
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" required>
			<br><br>
        <input type="submit" name="submit" value="Add Product" class="button">
    </form>
	</center>
</div>
</body>
</html>
