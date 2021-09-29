<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Degree</legend>
			<form  method="post" action="Degree.php">
		
		 
			<input type="checkbox" name="" value=""> SSC
			<input type="checkbox" name="" value=""> HSC
			<input type="checkbox" name="" value=""> Bsc
			<br>
			<input type="submit" name="submit" value="Submit">
		
		</fieldset>
	</form>
</body>
</html>
<?php
	
	$Degree = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Degree = $_REQUEST['Degree'];
        echo $Degree;
		
	}else{
		echo " ";
	}
?>