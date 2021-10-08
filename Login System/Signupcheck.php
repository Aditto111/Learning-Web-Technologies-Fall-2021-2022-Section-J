<?php
   
   session_start();

	if(isset($_POST['submit'])){

		if($_POST['username'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){
				
					$user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
					$_SESSION['user'] = $user;
					header('location: Loginform.html');
				}else{
					echo "Invalid username";
				}	
				}else{
					echo "Invalid password...";
				}	
			}else{
				echo "Invalid email...";
			}
		
?>