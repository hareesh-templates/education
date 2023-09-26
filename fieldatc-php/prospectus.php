<html>
<head>
	<title>College Website | Field 2nd Year</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php
include 'header.php';
?>
		<div id="content">
		<?php
		include 'left.php';
		?>
		<!--progams content inaanzia hapa-->
		<div id="center">
	<h1 align="center" class="welcome">Prospectus</h1><hr>
	<h4 align="center">
		<h4 align="center" style="font-family:Lucida Bright;">
		 <?php
		 $query=mysqli_query($conn,"SELECT * FROM `contents` WHERE `id`='16'");
		 if ($row=mysqli_fetch_assoc($query)) {
		 	echo $row['full_contents'];

		 }
		 ?>
</h4>
</div></h4>
        <!--programs inaishia hapa-->
		<?php
		include 'right.php';
		?>
	</div>
</div>
	
	<?php
	include 'footer.php';
	?>
</body>
</html>