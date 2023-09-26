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
	<h1 align="center" class="welcome">Progams that we Offer</h1><hr>
	<h4 align="left" style='margin-left:20px;'>
		We offer the following programs<br>
		<?php
		$query=mysqli_query($conn,"SELECT * FROM `contents` WHERE `id`='3'");
		if ($row=mysqli_fetch_assoc($query)) {
			echo $row['full_contents'];
		}
		?>
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