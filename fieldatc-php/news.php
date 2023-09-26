<html>
<head>
	<title>News | Field 2nd Year</title>
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
	<h1 align="center" class="welcome">News</h1><hr>
	<h4 align="center">
		<?php 
				$id=$_GET['id'];
				$query=mysqli_query($conn,"SELECT * FROM `news` WHERE `id`='$id'");
				if ($row=mysqli_fetch_assoc($query)) {
					$heading=$row['heading'];
					$full_news=$row['full_news'];
					echo '&nbsp;&nbsp;&nbsp;'.$full_news;
					
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