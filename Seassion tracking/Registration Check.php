<?php
     session_start();

	if(isset($_POST['submit'])){

		if($_POST['username'] !=""){
			if($_POST['email'] !=""){
				if($_POST['gender'] !=""){
				  if($_POST['date'] !=""){
					if($_POST['username'] !=""){
						if($_POST['password'] != ""){
							 if($_POST['checkpassword'] != ""){
									  	
                     $user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
					$_SESSION['user'] = $user;
					header('location: Loggedin.html');		
		}else{
			echo "Invald username...";
		}
		
		}else{
			echo "Invalid date...";
		}
		}else{
			echo "Invalid gender...";
		}
		}else{
			echo "Invalid email...";
		}
		}else{
			echo "Invalid username...";
		}}else{
			echo "Invalid Password...";
		}
		}else{
			echo "Invalid Confrim Password...";
		}
	}
?>