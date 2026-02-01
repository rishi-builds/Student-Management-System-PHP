<?php
session_start();
if (!isset($_SESSION['rishi'])) {
    header("Location: login.php");
}
include 'db.php';
$id = $_GET['id'];

if(isset($_POST['update'])){
$name=$_POST['name'];
$roll=$_POST['roll'];
$course=$_POST['course'];
$email=$_POST['email'];

mysqli_query($conn,"UPDATE students SET 
name='$name', roll='$roll', course='$course', email='$email' 
WHERE id=$id");

header("Location: view_students.php");
}

$data = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM students WHERE id=$id"));
?>

<form method="post">
<input name="name" value="<?php echo $data['name']; ?>"><br><br>
<input name="roll" value="<?php echo $data['roll']; ?>"><br><br>
<input name="course" value="<?php echo $data['course']; ?>"><br><br>
<input name="email" value="<?php echo $data['email']; ?>"><br><br>
<button name="update">Update</button>
</form>