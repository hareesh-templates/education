<html>
<head>
	<title>Administrator Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'header.php';
?>
		<div id="content">
			<br><br>
			<div class="kati">
				<?php
				require("connect.php");
				?>
				<form action="login.php" method="post">
				<table align="center">
					<tr>
						<td>
							<h1 align="center" style="color:#FC3838; font-family:Chiller;">Administrator Login</h1><hr>
						</td>
					</tr>
					<tr>
						<td>
							<?php
				if (isset($_POST['login'])) {
					if (!$_POST['name']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter your name</h4>";
					}
					elseif (!$_POST['password']) {
						echo "<h4 style='color:#FF4300;' class='alert'>Please enter password</h4>";
					}
					else
					{
						session_start();
						$_SESSION['name']=$_POST['name'];
						$name=$_POST['name'];
						$password=$_POST['password'];
						$result=mysqli_query($conn,"SELECT * FROM users WHERE name='$name' AND Password='$password'");
						if ($row=mysqli_fetch_array($result)) {
							header('Location:home.php');
						}
						else
						{
							echo "<h4 style='color:#FF4300;' class='alert' >Wrong name or password</h4>";
						}
					}
				}
				?>
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<input type="text" name="name" placeholder="Enter Username" class="input">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<input type="password" name="password" placeholder="Enter Password" class="input">
						</td>
					</tr>
					<tr>
						<td>
							<br>
							<center>
							<input type="submit" value="Login" class="login_btn" name="login">
							</center>
						</td>
					</tr>
				</table>
				</form>
				
			</div>
		</div>
	</div>
	
	<?php
	include 'footer.php';
	?>
</body>
</html>