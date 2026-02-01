<?php
session_start();
if (!isset($_SESSION['rishi'])) {
    header("Location: login.php");
}

include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Student List</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="header">Student Management System</div>

<div class="nav">
<a href="add_student.php">Add Student</a>
<a href="view_students.php">View Students</a>
</div>

<div class="container">
<div class="card">

<h2>Student List</h2>

<input type="text" id="search" placeholder="Search student">

<table>
<tr>
<th>ID</th><th>Name</th><th>Roll</th><th>Course</th><th>Email</th><th>Action</th>
</tr>

<?php
$res = mysqli_query($conn,"SELECT * FROM students");
while($row=mysqli_fetch_assoc($res)){
?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['roll'] ?></td>
<td><?= $row['course'] ?></td>
<td><?= $row['email'] ?></td>
<td class="action">
<a class="edit" href="edit_student.php?id=<?= $row['id'] ?>">Edit</a>
<a class="delete" href="delete_student.php?id=<?= $row['id'] ?>">Delete</a>
</td>
</tr>
<?php } ?>

</table>

</div>
</div>

<script src="script.js"></script>
</body>
</html>