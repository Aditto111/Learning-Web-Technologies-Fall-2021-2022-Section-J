<?php
	
	$name = "";
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
		
	}else{
		echo " ";
	}
?>

<html>
<head>
	<title> NAME </title>
</head>
<body>

<fieldset>
    <legend> NAME </legend>

    <form  method="post" >
        <input type="text" name="name" value="<?php echo $name; ?>"> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>

</fieldset>

</body>

</html>