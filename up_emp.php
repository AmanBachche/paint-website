<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $salary = $_POST['salary'];
    $sql = "UPDATE employees SET salary='$salary' WHERE id='$id'";
    mysqli_query($conn, $sql);
    echo "<p style='text-align:center; color:green; font-weight:bold;'>Employee updated successfully! <a href='manage_employees.php'>View Employees</a></p>";
}
?>
<html>
<head>
    <title>Update Employee - Ramesh Paints</title>
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
            width: 400px;
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
        <h1>Update Employee Salary</h1>
        
        <form method="POST" action="">
            <center>
                <label for="id">Employee ID</label>
                <input type="text" id="id" name="id" required>
				<br><br>
                <label for="salary">New Salary</label>
                <input type="number" step="0.01" id="salary" name="salary" >
				<br><br>
            <input type="submit" name="submit" value="Update Employee" class="button">
			</center>
        </form>
    
</body>
</html>
