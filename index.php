<?php
session_start();
if (!isset($_SESSION['rishi'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Management System</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">
    Student Management System
</div>

<div class="nav">
    <a href="add_student.php">Add Student</a>
    <a href="view_students.php">View Students</a>
    <a href="logout.php">Logout</a>
</div>

<div class="container">
    <div class="card">
        <h2>Welcome 👋</h2>
        <p>Manage student records easily using this system.</p>
    </div>
    <div class="dash-buttons">
    <a href="add_student.php">➕ Add Student</a>
    <a href="view_students.php">📋 View Students</a>
</div>
</div>
<div class="footer">
    © 2025 Student Management System | Developed by Rishi Kumar (BCA)
</div>

</body>
</html>