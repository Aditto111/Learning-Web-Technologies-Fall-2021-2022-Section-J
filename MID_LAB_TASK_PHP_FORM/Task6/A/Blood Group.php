<?php
	
	$Blood Group = "";
	
	if(isset($_REQUEST['submit'])){
		
		$Blood Group = $_REQUEST['Blood Group'];
        echo $Blood Group;
		
	}else{
		echo " ";
	}
?>