<?php
	
	$Blood Group = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Blood Group = $_REQUEST['Blood Group'];
        echo $Blood Group;
		
	}else{
		echo " ";
	}
?>

<<html>

<head>
    <title>HTML Form Tag</title>
</head>

<body>
   <form  method="post" action="Blood Group.php">
        Blood Group
        <select name="bg">
							<option value="<?php echo $Blood Group">A+</option>
							<option value="<?php echo $Blood Group">B+</option>
							<option value="<?php echo $Blood Group">AB+</option>
							<option value="<?php echo $Blood Group">O+</option>
							<option value="<?php echo $Blood Group">O-</option>
						</select> <br> <br>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>

</html>