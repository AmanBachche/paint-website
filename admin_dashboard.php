<?php
session_start();
if (!isset($_SESSION['username'])) {
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
	 <a href="vs.pto.php">View Specfic product</a>
	  <a href="add_pro.php">Add product</a>
	   <a href="v_pro.php">view products</a>
	    <a href="del_pro.php">Delete product</a>
		 <a href="up_pro.php">update product</a>
		  <a href="add_employee.php">Add Employees</a>
        <a href="manage_employees.php">View Employees</a>
		 <a href="del_emp.php">Delete Employees</a>
		  <a href="up_emp.php">Update Employees</a>
   
    </div>

    <div class="container">
        <h2>Welcome, Admin <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
		<img src="rm.jpg" width="1000" height="800">
    </div>
	
</body>
</html>
