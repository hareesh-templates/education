<div id="right">
	<div class="one">
		<b class="title">NEWS AND EVENTS</b>
		<hr>
		<marquee direction="up" scrollamount="1" onmouseover="this.setAttribute('scrollamount', 0, 0);" onmouseout="this.setAttribute('scrollamount', 1, 0);">
		<table align="center" width="100%" class="news" border="1" style="border-collapse:collapse;>
			
			
				<?php 
				$query=mysqli_query($conn,"SELECT * FROM `news` ORDER BY `id` DESC");
				while ($row=mysqli_fetch_assoc($query)) {
					$id=$row['id'];
					$heading=$row['heading'];
					$full_news=$row['full_news'];
					echo '<tr border="">';
					echo '<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp;<a href="news.php?id='.$id.'  ">'.$row['heading']."</a></td>";
					echo '</tr>';
				}

				?>
			
			
			
		</table>
	</marquee>
	</div>
	<div class="two">
		<b class="title">QUICK LINKS</b>
		<hr>
		<table align="center" width="100%" class="news">
			<tr>
			   <td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="tcu.php" class="admissionlinks">Students List TCU</a></td>
			</tr>
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="result.php" class="admissionlinks">Examination Result</a></td>
			</tr>
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="timetable.php" class="admissionlinks">Exam Timetable</a></td>
			</tr>
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="graduation.php" class="admissionlinks">Graduation Day</a></td>
			</tr>
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="downloads.php" class="admissionlinks">Downloads </a></td>
			</tr>
			<tr>
				<td>&nbsp; <img src="img/news.png">&nbsp;&nbsp;&nbsp; <a href="scholarship.php" class="admissionlinks">Scholarship </a></td>
			</tr>
		</table>
	</div>
	
	
</div>