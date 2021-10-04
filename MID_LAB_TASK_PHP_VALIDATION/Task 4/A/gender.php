<html>
<head>
	
	<title>Name Field </title>
</head>
<body>	
	<form method="post" action="#">
		<fieldset>
			<legend>Gender</legend>
			
					
						<input type="radio" name="gender" value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
		if($gender == ""){
			echo "   ";
		}else{
			echo $gender;
		}	
	}
	
?>
">Male
        <input type="radio" name="gender" value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
		if($gender == ""){
			echo "  ";
		}else{
			echo $gender;
		}	
	}
	
?>
">Female
     <input type="radio" name="gender" value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$gender = $_REQUEST['gender'];
		if($gender == ""){
			echo "  ";
		}else{
			echo $gender;
		}	
	}
	
?>
">Other<br/>
					
						<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>