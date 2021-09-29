<?php
	
	$Gender = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Gender = $_REQUEST['Gender'];
        echo $Gender;
		
	}else{
		echo " ";
	}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Gender</legend>
			<form  method="post" action="Gender.php">
		
		 
			<input type="radio" name="gender" value="<?php echo $Gender"> Male
			<input type="radio" name="gender" value="<?php echo $Gender"> Female
			<input type="radio" name="gender" value="<?php echo $Gender"> Other
			<br>
			<input type="submit" name="submit" value="Submit">
		
		</fieldset>
	</form>
</body>
</html