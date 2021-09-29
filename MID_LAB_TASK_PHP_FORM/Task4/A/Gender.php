<?php
	
	$Gender = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Gender = $_REQUEST['Gender'];
        echo $Gender;
		
	}else{
		echo " ";
	}
?>