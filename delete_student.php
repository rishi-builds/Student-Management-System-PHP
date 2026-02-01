<?php
session_start();
if (!isset($_SESSION['rishi'])) {
    header("Location: login.php");
}
include 'db.php';
$id=$_GET['id'];
mysqli_query($conn,"DELETE FROM students WHERE id=$id");
header("Location: view_students.php");
?>