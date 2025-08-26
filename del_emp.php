<?php
session_start();
include "connection.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM employees WHERE id='$id'";
    mysqli_query($conn, $sql);
    echo "<p style='text-align:center; color:green; font-weight:bold;'>Employee Deleted successfully! <a href='manage_employees.php'>View Employees</a></p>";
}
?>
<html>
<head>
    <title>Delete Employee - Ramesh Paints</title>
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
            color: #c0392b; 
            margin-bottom: 20px;
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
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
       <center> <a href="admin_dashboard.php" class="back-link">Back to Dashboard</a>
        <h1>Delete Employee</h1>
        <p style="text-align:center; color: #555;">Enter the ID of the employee to permanently remove them from the system.</p>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="id">Employee ID</label>
                <input type="text" id="id" name="id" required>
            <br><br>
            <input type="submit" name="submit" value="Delete Employee" class="button">
        </form>
	</center>
</body>
</html>
