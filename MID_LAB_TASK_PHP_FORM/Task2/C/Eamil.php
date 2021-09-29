<?php
	
	$Email = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Email = $_REQUEST['Email'];
        
		
	}else{
		echo " ";
	}
?>

<html>
<head>
	<title> EMAIL </title>
</head>
<body>

<fieldset>
    <legend> EMAIL </legend>

    <form  method="post">
        <input type="text" name="email" value="<?php echo $Email; ?>"> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>

</fieldset>

</body>

</html>