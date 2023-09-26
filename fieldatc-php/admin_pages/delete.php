<?php
$id=$_GET['id'];
$query=mysqli_query($conn,"DELETE * FROM `users` WHERE `id`='$id'");
if (!$query) {
	echo "Delete Error";
}
else
{
	header("Location: users.php");
}
?>