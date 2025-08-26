<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}
?>

<html>
<head>
    <title>Admin Dashboard - Ramesh Paints</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            background: #f4f6f9; 
        }
        .header {
            background-color: #004a99; 
            color: white;
            padding: 15px 30px;
            display: flex;
            align-items: center;
        }
        .header h1 {
            margin: 0;
            font-size: 26px;
            flex-grow: 1;
            text-align: center;
        }
        .logout {
            color: #004a99; 
            background: white;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s ease;
        }
        .logout:hover {
            background: #e9f1f8;
        }
        .nav {
            display: flex;
            justify-content: center;
            background-color: #0056b3; 
        }
        .nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            font-weight: bold;
        }
        .nav a:hover {
            background-color: #004a99; 
        }
        .container {
            padding: 40px;
            text-align: center;
        }
        .container h2 {
            color: #004a99; 
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>RAMESH PAINTS</h1>
        <a href="logout.php" class="logout">Logout</a>
    </div>

    <div class="nav">
	 <a href="vs.pto1.php">View Specfic product</a>
	  <a href="add_pro1.php">Add product</a>
	   <a href="v_pro1.php">view products</a>
	    <a href="del_pro1.php">Delete product</a>
		 <a href="up_pro1.php">update product</a>
   
    </div>

    <div class="container">
        <h2>Welcome, Employee <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>
		<img src="rm.jpg" width="1000" height="800">
    </div>
	
</body>
</html>
