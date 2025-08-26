<?php
session_start();
include "connection.php";

$product = null;

if (isset($_POST['submit'])) {
    $id = $_POST['ID'];
    
    $sql = "SELECT * FROM product WHERE ID = '$id'";
    $result = mysqli_query($conn, $sql);
    
    $product = mysqli_fetch_assoc($result);
    
    mysqli_close($conn);
}
?>
<html>
<head>
    <title>View Product Details - Ramesh Paints</title>
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

        .form-container {
            text-align: center;
            margin-bottom: 30px;
        }
        
        table {
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 15px;
            text-align: left;
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
            object-fit: cover;
        }
    </style>
</head>

<body>

<div class="container">
    <a href="admin_dashboard.php">Back to Dashboard</a>
    <h1>View Specific Product</h1>
    
    <div class="form-container">
        <form method="POST" action="">
            Enter Product ID: <input type="text" name="ID" required>
            <input type="submit" name="submit" value="Fetch Product">
        </form>
    </div>

    <?php if ($product): ?>
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
                <tr>
                    <td><?php echo htmlspecialchars($product['ID']); ?></td>
                    <td><?php echo htmlspecialchars($product['P_name']); ?></td>
                    <td><?php echo htmlspecialchars($product['color']); ?></td>
                    <td>$<?php echo htmlspecialchars($product['price']); ?></td>
                    <td><img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['P_name']); ?>"></td>
                    <td><?php echo htmlspecialchars($product['stock']); ?></td>
                </tr>
            </tbody>
        </table>
    </center>
    <?php endif; ?>
</div>

</body>
</html>
