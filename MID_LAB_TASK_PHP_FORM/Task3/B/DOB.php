<<html>
<head>
	
	<title>Name Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend><b>DATE<b/></legend>
			
					
						<input type="date" name="Date" value=""><br/>
					
						<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>

<?php
    
	$dob= "";
	if(isset($_REQUEST['submit'])){
    
		$dob= $_REQUEST['dob'];
        echo $dob;
		
	}else{
		echo " ";
	}
?>