<?php
    
	$dob= "";
	if(isset($_REQUEST['submit'])){
    
		$dob= $_REQUEST['dob'];

		
	}else{
		echo " ";
	}
?>


<html>
<head>
	<title> Date of Birth </title>
</head>
<body>
<fieldset>
    <legend> Date of Birth </legend>
    <form method= "post" action="dob.php">
    
        <input type="number" name="dob" value= "<?php echo $dob; ?>" size=5> / <input type="number" name="dob" value= "<?php echo $dob; ?>" size=5> / <input type="number" name="dob" value= "<?php echo $dob; ?>" size=5> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
        
    </form>
</fieldset>
</body>
</html>