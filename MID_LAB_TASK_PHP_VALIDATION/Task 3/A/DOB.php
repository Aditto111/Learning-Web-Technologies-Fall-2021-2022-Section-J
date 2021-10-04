<html>
<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>
<body>	
	<form method="get" action="#">
		<fieldset>
			<legend>Date</legend>
			
					
						<input type="date" name="date" value="<?php 

    
    
    if(isset($_REQUEST['submit']))
    {
        $date = $_REQUEST['date'];
        if($date == ""){
            echo "  ";
        }else{
            echo $date;
        }   
    }
    
?>"><br/>
					
		<input type="submit" name="submit" value="Submit">
				
			
		</fieldset>
	</form>
</body>
</html>