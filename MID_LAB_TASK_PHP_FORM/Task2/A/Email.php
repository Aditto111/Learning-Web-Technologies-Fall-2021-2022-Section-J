<?php
	
	$Email = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Email = $_REQUEST['Email'];
        echo $Email;
		
	}else{
		echo " ";
	}
?>