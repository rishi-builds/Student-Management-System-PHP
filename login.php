<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($query) == 1) {
        $_SESSION['rishi'] = $username;
        header("Location: index.php");
    } else {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="login-body">

<div class="login-card">
    <h2>🔐 Admin Login</h2>

    <form method="post">
        <input type="text" name="username" placeholder="👤 Username" required>
        <input type="password" name="password" placeholder="🔑 Password" required>

        <button type="submit" name="login">Login</butto>
    </form>
</div>

</body>
</html>