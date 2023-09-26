<?php
session_start();
if (!isset($_SESSION['name'])) {
	header('Location:login.php');
}
?>
<?php
?>
<html>
<head>
	<title>Administrator Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'after_header.php';
?>

<br>
		<div id="content">
			<div class="left" border="1" style="border-collapse:collapse;">
				<h4 align="center" class="heading">Change Contents</h4><hr>
				<table align="center">
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="home1.php" class="links_left" onclick>Home Page</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admission.php" class="links_left">Admission Page</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="programs.php" class="links_left">Program Page</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="exams.php" class="links_left">Exams Page</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="campus.php" class="links_left">Campus Page</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.php" class="links_left">About Page</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="contact.php" class="links_left">Contact Page</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="news.php" class="links_left">News & Events</a></td>
					</tr>
					
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="entry.php" class="links_left">Entry Requirement</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="form.php" class="links_left">Download Form</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="adreguration.php" class="links_left">Adm-Regulation</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="fees.php" class="links_left">Fees</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="exreguration.php" class="links_left">Exams Reguration</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="appealing.php" class="links_left">Appealing</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="prospectus.php" class="links_left">Prospectus</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="policy.php" class="links_left">Academic Policy</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="scholarship.php" class="links_left">Scholarship</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="laboratories.php" class="links_left">Laboratories</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="complab.php" class="links_left">Computer Lab</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="workshop.php" class="links_left">Workshop</a></td>
					</tr>
				</table>
			</div>
			<div class="space"></div>
			<div class="center">
				<center><h1 style='color:white'>ADD NEWS</h1></center><br>
				<center><form action='news.php' method='POST' >
					<input type='text' name='heading' style='height:40px; width:300px; text-align:center;' placeholder='Enter news heading'><br><br>
					<textarea style='height:160px; width:600px;' placeholder='Enter full news deatails here' name='full'></textarea><br>
					<input type='submit' value='ADD NEWS' name='add'>
					<?php
$conn = mysqli_connect("localhost","root","","fieldatc");
if (!$conn)
  {
  die('Could not connect: ' . mysqli_error());
  }


				if (isset($_POST['add'])&&!empty($_POST['heading'])&&!empty($_POST['full'])) {
					$heading=$_POST['heading'];
					$full=$_POST['full'];
					$query="INSERT INTO `news` VALUES ('','$heading','$full')";
					if ($query_run=mysqli_query($conn,$query)) {
					 	echo "<b style='color:white;'>This news is added..!</b>";
					 } 
					 else
					 {
					 	echo "<b style='color:white;'>News is not added..!</b>";
					 }
						
					
				}
				?>
				</form>
				
			</center>
			</div>
			<div class="space"></div>
			<div class="right">
				<h4 align="center" class="heading">Change Contents</h4><hr>
				<table align="center">
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="links_left" onclick>Library</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="links_left">Hostel</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="links_left">Canteen</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="links_left">Medical Facilities</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="links_left">TCU</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="links_left">Examination Result</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="links_left">Exam Timetable</a></td>
					</tr>
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="links_left">Graduation Day</a></td>
					</tr>
					
					<tr>
						<td><img src="img/news.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="users.php" class="links_left">users</a></td>
					</tr>
					
				</table>
			</div>
	</div></div>
	
	<?php
	include 'footer.php';
	?>
</body>
</html>