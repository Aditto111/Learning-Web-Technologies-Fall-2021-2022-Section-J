
<<html>

<head>
    <title>HTML Form Tag</title>
</head>

<body>
   <form  method="post" action="Blood Group.php">
        Blood Group
        <select name="bg">
							<option value="">A+</option>
							<option value="">B+</option>
							<option value="">AB+</option>
							<option value="">O+</option>
							<option value="">O-</option>
						</select> <br> <br>
        <input type="submit" name="btn" value="Submit">
    </form>
</body>

</html>
<?php
	
	$Blood Group = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Blood Group = $_REQUEST['Blood Group'];
        echo $Blood Group;
		
	}else{
		echo " ";
	}
?>