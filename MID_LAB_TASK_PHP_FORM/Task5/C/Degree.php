<?php
	
	$Degree = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Degree = $_REQUEST['Degree'];
        echo $Degree;
		
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
			<legend>Degree</legend>
			<form  method="post" action="Degree.php">
		
		 
			<input type="checkbox" name="" value="<?php echo $Degree"> SSC
			<input type="checkbox" name="" value="<?php echo $Degree"> HSC
			<input type="checkbox" name="" value="<?php echo $Degree"> Bsc
			<br>
			<input type="submit" name="submit" value="Submit">
		
		</fieldset>
	</form>
</body>
</html>