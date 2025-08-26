<?php
session_start();
include "connection.php";
?>


<html>
<head>
    <title>RAMESH PAINTS - Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            text-align: center;
        }
        h1 {
            margin-top: 20px;
        }
        .box {
            background: white;
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        input {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
        }
        input[type="submit"] {
            background: #4CAF50;
            border: none;
            color: white;
        }
    </style>
</head>
<body>

<h1>RAMESH PAINTS</h1>

<div class="box">
    <h3>Admin Login</h3>
    <form method="POST">
        <input type="text" name="admin_user" placeholder="Username" required><br>
        <input type="text" name="admin_pass" placeholder="Password" required><br>
        <input type="submit" name="admin_login" value="Login as Admin">
    </form>
</div>

<div class="box">
    <h3>Employee Login</h3>
    <form method="POST">
        <input type="text" name="employee_user" placeholder="Username" required><br>
        <input type="text" name="employee_pass" placeholder="Password" required><br>
        <input type="submit" name="employee_login" value="Login as Employee">
    </form>
</div>

<?php
if (isset($_POST['admin_login'])) {
    $username = $_POST['admin_user'];
    $password = $_POST['admin_pass'];
    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "<p>Admin user not found</p>";
    }
}

if (isset($_POST['employee_login'])) {
    $name = $_POST['employee_user'];
    $password = $_POST['employee_pass'];
    $sql = "SELECT * FROM employees WHERE name='$name' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['name'] = $name;
        header("Location: emp_dashboard.php");
        exit();
    } else {
        echo "<p>Employee user not found</p>";
    }
}
?>

</body>
</html>
