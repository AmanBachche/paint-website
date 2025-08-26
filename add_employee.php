<?php
session_start();
include "connection.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $salary = $_POST['salary'];
    $password = $_POST['password'];
   $sql="INSERT INTO employees(name, dob, address, contact, salary,password) VALUES ('$name', '$dob', '$address', '$contact', '$salary','$password')";
    mysqli_query($conn, $sql);
    echo "<p>Employee added successfully! <a href='manage_employees.php'>View Employees</a></p>";
}
?>
<html>
<head>
    <title>Add Employee - Ramesh Paints</title>
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

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
    
        .button {
            display: block;
            width: 400px;
            padding: 12px;
            background-color: #004a99;
            color: white;
            font-size: 16px;
            font-weight: bold;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 25px;
            font-size: 14px;
            text-decoration: none;
            color: #004a99;
            background-color: #e9f1f8;
            padding: 8px 15px;
            font-weight: 500;
 
        }
        
    </style>
</head>
<body>
<div class="container">
    <a href="admin_dashboard.php">Back to Dashboard</a>
    <h1>Add New Employee</h1>
	<center>
	<a href="manage_employees.php">View all Employee</a>
    <form method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <textarea id="address" name="address" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="text" id="contact" name="contact" class="form-control">
        </div>
        <div class="form-group">
            <label for="salary">Salary</label>
            <input type="number" id="salary" step="0.01" name="salary" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <input type="submit" name="submit" value="Add Employee" class="button">
    </form>
	</center>
</div>
</body>
</html>
