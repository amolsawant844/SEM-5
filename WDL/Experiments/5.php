<!DOCTYPE html>
<html>
<head>
<title>
question5
</title>
</head>
<body>
	
	<form action=5.php method=POST>
	<p>enter your weight in kgs:</p>
	<input type='text' name='weight' placeholder='enter your weight'></input><br>
	<p>enter your height</p>
	<p>feet:
	<input type='text' name='heightf' placeholder='feet'></input><br>
	<p>inches:
	<input type='text' name='heighti' placeholder='inches'></input><br><br>
	<button type="submit" value="submit">calculate BMI </button>
	<br>
	<br>
	</form>


	<?php
	$wt=$_POST['weight'];
	$htf=$_POST['heightf'];
	$hti=$_POST['heighti'];
	$htfm1=$htf*0.305;
	$htfm2=($hti*2.54)/100;
	$ht=$htfm1+$htfm2;



	$bmi=$wt/($ht*$ht);
	echo $bmi;


	?>





</body>
</html>