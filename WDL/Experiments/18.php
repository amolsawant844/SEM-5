<!DOCTYPE html>
<html>
<head>
	<title>question 18</title>

	<script type="text/javascript">
		function validatedetails()
		{

			//user_id
			var user=document.getElementById("userid").value;
			var user_reg=/^([a-z A-z])([a-z A-Z 0-9 @ \. - # &]{5,12})$/;
			if(user.length== "")
			{
				document.getElementById('valid_userid').innerHTML = "lenght should be greater than 6";
        		document.getElementById('valid_userid').style.color = "red";	
			}
			else if(user_reg.test(user))
			{
				document.getElementById('valid_userid').innerHTML = "valid";
        		document.getElementById('valid_userid').style.color = "red";	
			}
			else
			{
				document.getElementById('valid_userid').innerHTML = "userid should contain only characters!";
        		document.getElementById('valid_userid').style.color = "red";	
			}



			//password
			var pass_word=document.getElementById("password").value;
			var pass_reg=/([a-z A-Z 0-9 @ \. # $ !]{7,12})$/;
			if(pass_word.length == "")
			{
				document.getElementById("valid_password").innerHTML="passowrd cannot be empty";
				document.getElementById("valid_password").style.color="red";
			}
			else if(pass_reg.test(pass_word)) 
			{
				document.getElementById("valid_password").innerHTML="valid";
				document.getElementById("valid_password").style.color="red";	
			}
			else
			{
				document.getElementById("valid_password").innerHTML="Invalid";
				document.getElementById("valid_password").style.color="red";	
			}



			//NAME
			var name = document.getElementById('name').value;
    		var name_reg = /^([a-z A-Z]+)$/;
    		if(name.length == "")
    		{
        		document.getElementById('valid_name').innerHTML = "Name cannot be empty!";
        		document.getElementById('valid_name').style.color = "red";
    		}
    		else if(name_reg.test(name))
    		{
        		document.getElementById('valid_name').innerHTML = "Valid!";
        		document.getElementById('valid_name').style.color = "red";
    		}
    		else 
    		{
        		document.getElementById('valid_name').innerHTML = "Name should contain only characters!";
        		document.getElementById('valid_name').style.color = "red";
    		}
    		

    		//Zip Code Validation
    		var zip = document.getElementById('zipcode').value;
		    var zip_reg = /^([0-9]\d+)$/;
		    if(zip.length == "") 
		    {
		        document.getElementById('valid_zipcode').innerHTML = "Zip Code cannot be empty!";
		        document.getElementById('valid_zipcode').style.color = "red";
		    }
		    else if(zip_reg.test(zip))
		    {
		        document.getElementById('valid_zipcode').innerHTML = "Valid!";
		        document.getElementById('valid_zipcode').style.color = "green";
		    } 
		    else
		    {
		        document.getElementById('valid_zipcode').innerHTML = "Zip Code should contain only numbers!";
		        document.getElementById('valid_zipcode').style.color = "red";
		    }


		    //email
		    var email=document.getElementById("emailid").value;
		    var reg_email=/^([a-z A-Z 0-9 \. -]+)@([a-z A-Z 0-9 -]+)\.([a-z]{2,5})(\.[a-z]{2,8})?$/;
		    if (email.length=="")
		    {
		    	document.getElementById("valid_email").innerHTML="email cannot be empty";
		    	document.getElementById('valid_email').style.color = "red";	
		    }
		    else if(reg_email.test(email))
		    {
		    	document.getElementById("valid_email").innerHTML="valid";
		    	document.getElementById('valid_email').style.color = "red";		
		    }
		    else
		    {
		    	document.getElementById("valid_email").innerHTML="Invalid";
		    	document.getElementById('valid_email').style.color = "red";	
		    }

		     //Gender Validation

		    var gender = document.getElementById('gender');
		    if(gender.checked)
		    {
		        document.getElementById('valid_gender').innerHTML = "Valid!";
		        document.getElementById('valid_gender').style.color = "green";
		    }
		    else 
		    {
		        document.getElementById('gender-text').innerHTML = "Gender cannot be empty!";
		        document.getElementById('gender-text').style.color = "red";
		    }

		    //Language Validation
			var lang = document.getElementById('language');
		    if(lang.checked)
		    {
		        document.getElementById('valid_language').innerHTML = "Valid!";
		        document.getElementById('valid_language').style.color = "green";
		    } 
		    else 
		    {
		        document.getElementById('valid_language').innerHTML = "Language cannot be empty!";
		        document.getElementById('valid_language').style.color = "red";
		    }



    		return false;
		
		}


		



	</script>




</head>
<body>

	<form action="" onsubmit="return validatedetails()">
		
		<label for="userid">User_id:</label>
		<input type="text" name="userid" id="userid" placeholder="enter user_id">
		<p id="valid_userid"></p>

		<label for="password">Password:</label>
		<input type="text" name="password" id="password" placeholder="enter password">
		<p id="valid_password"></p>

		<label for="name">Name:</label>
		<input type="text" name="name" id="name" placeholder="enter name">
		<p id="valid_name"></p>

		<label for="address">Address:</label>
		<input type="text" name="address" id="address" placeholder="enter address">
		<p id="valid_address"></p>

		<label for="country">country:</label>
		<select name="country" id="country">
			<option value="usa">USA</option>
			<option value="india">INDIA</option>
			
		</select>
		<p id="valid_country"></p>

		<label for="zipcode">Zipcode:</label>
		<input type="text" name="zipcode" id="zipcode" placeholder="enter zipcode">
		<p id="valid_zipcode"></p>

		<label for="emailid">Email_id:</label>
		<input type="text" name="emailid" id="emailid" placeholder="enter eamil_id">
		<p id="valid_email"></p>

		<label for="sex">Sex:</label>
		<input type="radio" name="gender" value="male" id="gender">Male
		<input type="radio" name="gender" value="female" id="gender">Female
		<input type="radio" name="gender" value="other" id="gender">Other
		<p id="valid_sex"></p>

		<label for="language">Language:</label>
		<input type="checkbox" name="english" value="english">English
		<input type="checkbox" name="hindi" value="hindi">Hindi
		<p id="valid_language"></p>

		<label for="about">about:</label>
		<textarea rows="4" cols="50" name="about" id="about"></textarea>
		<p id="valid_about"></p>	


		<input type="submit" class="submit" name="submit" id="submit" value="SUBMIT">


	</form>




</body>
</html>