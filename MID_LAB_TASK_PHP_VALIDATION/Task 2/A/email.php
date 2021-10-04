<html>
<head>
	
	<title>Name Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend><b>EMAIL<b/></legend>
			
					
						<input type="email" name="Email" value="<?php 

	
	
	if(isset($_REQUEST['submit']))
	{
		$email = $_REQUEST['Email'];
		if($email == ""){
			echo "Null Value";
		}else{
			echo $email;
		}	
	}
	
?>
"><br/>
					
						<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>