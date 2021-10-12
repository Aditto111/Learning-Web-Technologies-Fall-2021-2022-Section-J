<?php
     session_start();

	if(isset($_POST['submit'])){

		if($_POST['username'] !=""){
				if($_POST['email'] !=""){
					if($_POST['gender'] !=""){
						if($_POST['date'] !=""){
									if($_POST['file'] !=""){
									
                     $user = ['username'=> $_POST['username']];
					$_SESSION['user'] = $user;
					header('location: Loggedin.html');
					
			}else{
				echo "Invalid file..";
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
		}
	}
?>