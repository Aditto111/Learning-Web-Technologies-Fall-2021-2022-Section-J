<?php
	
	$Degree = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Degree = $_REQUEST['Degree'];
        echo $Degree;
		
	}else{
		echo " ";
	}
?>