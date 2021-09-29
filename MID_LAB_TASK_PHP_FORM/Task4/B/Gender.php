<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Gender</legend>
			<form  method="post" action="Gender.php">
		
		 
			<input type="radio" name="gender" value=""> Male
			<input type="radio" name="gender" value=""> Female
			<input type="radio" name="gender" value=""> Other
			<br>
			<input type="submit" name="submit" value="Submit">
		
		</fieldset>
	</form>
</body>
</html
<?php
	
	$Gender = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Gender = $_REQUEST['Gender'];
        echo $Gender;
		
	}else{
		echo " ";
	}
?>