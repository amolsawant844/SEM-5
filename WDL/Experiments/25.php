<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="25_1.php" method="POST">
		<input type="submit" name="submit">
	</form>
	<?php
	session_start();
	if(empty($_SESSION['count']))
	{
		$_SESSION['count']=0;	
	}
	$counter = $_SESSION['count'];
    echo '<label for="">Counter: ' . $counter . '</label>';
	?>

</body>
</html>