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
	<h1 align="center" class="welcome">Online Application</h1>
	<center>
		<img src="img/print.png" title="Print the whole Addmission Form">&nbsp;&nbsp;&nbsp;<b>step 1</b>
	</center>
	<hr>
	<center>
		<h4 align="center">
		<form action="#" method="POST">
			<table class="jisajiri">
				<tr>
					Please tick ( v ) the entry scheme you applying for: 
				</tr>
				<tr>
					<th>TRAINING PROGRAME</th>
					<th>ENTRY SCHEME</th>
					<th>CHOICE</th>
				</tr>
				<tr>
					<td>Ordinary Diploma (OD)</td>
					<td>
						<table width="100%" class="table_two">
							<tr>
								<td>Direct Entry Scheme</td>
							</tr>
							<tr>
								<td>Mature Age entry Scheme</td>
							</tr>
							<tr>
								<td>Pre. Entry (Access Course) Scheme</td>
							</tr>
						</table>
					</td>
					<td>
						<table width="100%" class="table_two">
							<tr>
								<td><input type="checkbox"></td>
							</tr>
							<tr>
								<td><input type="checkbox"></td>
							</tr>
							<tr>
								<td><input type="checkbox"></td>
							</tr>
						</table>
					</td>
				</tr>
				

			</table>

			<!--table namba mbili inaanza-->

			<table class="jisajiri" id="jisa">
				<tr>
					Please number your preferences (Only three choices) 
				</tr>
				<tr>
					<th>S/No</th>
					<th>TRAINING COURSES</th>
					<th>CHOICE</th>
				</tr>
				<tr>
					<td class="kati">1</td>
					<td>Auto-Electric & Electronics Engineering</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">2</td>
					<td>Automotive Engineering</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">3</td>
					<td>Civil Engineering</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">4</td>
					<td>CIvil & Irrigation Engineering</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">5</td>
					<td>Transportation Engineering</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">6</td>
					<td>Information Technology</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">7</td>
					<td>Laboratory science & Technology</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">8</td>
					<td>Computer Science</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">9</td>
					<td>Electrical Engineering</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">10</td>
					<td>Telecommunication Engineering</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati">11</td>
					<td>Mechanical Engineering</td>
					<td><input type="checkbox"></td>
				</tr>
				<tr>
					<td class="kati"></td>
					<td><input type="submit" value="Next >>>" style="color:red; height:30px; width:50%;"></td>
					<td></td>
				</tr>
				<!--table namba mbili inaanza-->
				
			</table>
		</form>
</div></h4>
	</center>
	
        <!--programs inaishia hapa-->
		<?php
		include 'right.php';
		?>
	</div>
</div>
	
	<?php
	include 'footer.php';
	?>
</html>
