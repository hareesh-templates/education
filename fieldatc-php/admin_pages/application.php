<?php
session_start();
if (!isset($_SESSION['name'])) {
	header('Location:login.php');
}
?>
<html>
<head>
	<title>Administrator Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'after_header.php';
?>
<br>
		<div id="content">
			
			<div class="right1" style="width: 100%;overflow: auto">
				

	<?php
		$conn=mysqli_connect('localhost','root','','fieldatc');
			if (!$conn) {
				echo mysqli_error();
			}
			echo "<table align='center' height='auto' class='table_app'>
			<tr>
				<th>ID</th>
				<th>FIRST NAME</th>
				<th>MIDDLE NAME</th>
				<th>SUR NAME</th>
				<th>PHONE NO</th>
				<th>EMAIL</th>
				<th>PROGRAMME</th>
				<th>EDUCATION</th>
				<th>MATHEMATICS</th>
				<th>PHYSICS</th>
				<th>CHEMISTRY</th>
				<th>BIOLOGY</th>
				<th>ENGLISH</th>
				<th>CERTIFICATE</th>
				<th>RELATIONSHIP</th>
				<th>DELETE</th>
			</tr>
			";

			
			$query="SELECT * FROM `application`";
			$query_run=mysqli_query($conn,$query);
				while ($row=mysqli_fetch_assoc($query_run)) {
					$id=$row['id'];
					$firstname=$row['firstname'];
					$middlename=$row['middlename'];
					$surname=$row['surname'];
					$phone=$row['phone'];
					$email=$row['email'];
					$programme=$row['programme'];
					$education=$row['education'];
					$mathematics=$row['mathematics'];
					$physics=$row['physics'];
					$chemistry=$row['chemistry'];
					$biology=$row['biology'];
					$english=$row['english'];
					$certificate=$row['certificate'];
					$relationship=$row['relationship'];
					echo "<br>";
					echo "
					<tr>
							<td>$id</td>
							<td>$firstname</td>
							<td>$middlename</td>
							<td>$surname</td>
							<td>$phone</td>
							<td>$email</td>
							<td>$programme</td>
							<td>$education</td>
							<td>$mathematics</td>
							<td>$physics</td>
							<td>$chemistry</td>
							<td>$biology</td>
							<td>$english</td>
							<td>$certificate</td>
							<td>$relationship</td>
							<td><a href='#'>D</a></td>
							</tr>
						
						
					
					";
				}
			
					echo "</table>";
			
		?>




			</div>
	</div></div>
	
	<?php
	include 'footer.php';
	?>
</body>
</html>