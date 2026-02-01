<?php
session_start();
if (!isset($_SESSION['rishi'])) {
    header("Location: login.php");
}

include 'db.php';
if(isset($_POST['add'])){
$n=$_POST['name'];
$r=$_POST['roll'];
$c=$_POST['course'];
$e=$_POST['email'];

mysqli_query($conn,"INSERT INTO students VALUES(NULL,'$n','$r','$c','$e')");
echo "<script>alert('Student Added Successfully')</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Student</h2>
<form method="post" onsubmit="return validate()">
<input id="name" name="name" placeholder="Name"><br>
<input id="roll" name="roll" placeholder="Roll No"><br>
<input id="course" name="course" placeholder="Course"><br>
<input id="email" name="email" placeholder="Email"><br>
<button name="add">Add Student</button>
</form>

<script src="script.js"></script>
</body>
</html>
