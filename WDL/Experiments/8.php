<!DOCTYPE html>
<html>
<head>
	<title>question 8</title>
</head>
<body>

<script >

	var num1=prompt("enter no.1");
	var num2=prompt("enter no.2");
	var i=0;
	//document.write(num1);
	//document.write(num2);
	for(i=num1;i<=num2;i++)
	{
		t_f=test_prime(i);
		if(t_f==true)
		{
			document.write(i+"  ");
		}
	}	


	function test_prime(n)
	{

  		if (n===1)
  		{
   			return false;
  		}
  		else if(n === 2)
  		{
    		return true;
  		}
  		else
  		{
    		for(var x = 2; x < n; x++)
    		{
      			if(n % x === 0)
      			{
        			return false;
      			}
    		}
    		return true;  
  		}
	}	



</script>


</body>
</html>