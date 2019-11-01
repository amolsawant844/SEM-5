
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="21.php" method="POST">
		<p>enter a number:
	<input type="text" name="arm" placeholder="enter a number"><br>
	<button type="submit" value="submit">click the button</button><br>		
	</form>
	<?php  
$num=$_POST['arm'];  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes it is an Armstrong number";  
}  
else  
{  
echo "No it is not an armstrong number";  
}  
?>  


</body>
</html>