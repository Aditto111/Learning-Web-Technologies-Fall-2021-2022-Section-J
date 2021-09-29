<html>
<head>
	<title> EMAIL </title>
</head>
<body>

<fieldset>
    <legend> EMAIL </legend>

    <form  method="post">
        <input type="text" name="email" value=""> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>

</fieldset>

</body>

</html>

<?php
	
	$Email = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Email = $_REQUEST['Email'];
        echo $Email;
		
	}else{
		echo " ";
	}
?>