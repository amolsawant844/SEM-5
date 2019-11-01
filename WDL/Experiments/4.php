<!DOCTYPE html>
<html>
<head>
<title>
question5
</title>
</head>
<body>
	
	<form action=4.php method=POST>
	<p>enter your weight in kgs:
	<input type='text' name='weight' placeholder='enter your weight'></input><br>
	<p>enter distance:
	<input type='text' name='dist' placeholder='distance'></input><br>
	<br>
	<button type="submit" value="submit">convert </button>
	<br>
	<br>
	</form>


	<?php
	$wt=$_POST['weight'];
	$dis=$_POST['dist'];

	$wtp=$wt* 2.20462262185;
	$dism=$dis*0.621371;
	echo $wtp;
	echo "<br>";
	echo $dism;
	

	?>





</body>
</html>