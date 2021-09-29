<html>
<head>
	<title> NAME </title>
</head>
<body>

<fieldset>
    <legend> NAME </legend>

    <form  method="post" action="name.php">
        <input type="text" name="name" value=""> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>

</fieldset>

</body>

</html>

<?php
	
	$name = "";
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['name'];
        echo $name;
		
	}else{
		echo " ";
	}
?>