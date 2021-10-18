<?php
     session_start();

	if(isset($_POST['submit'])){

		if($_POST['username'] !=""){
            	if($_POST['password'] != ""){
            			if($_POST['password1'] != ""){
                            if($_POST['username1'] !=""){
						if($_Post['usertype']!=""){
									  
                     $user = ['username'=> $_POST['username'], 'password'=> $_POST['password']];
					$_SESSION['user'] = $user;
					header('location: Loginform.html');
				
			
		}else{
			echo "invalid usertype";
		}
		else{
			echo "invalid username";
		}
		else{
			echo "invalid Password";
		}
		else{
			echo "invalid Password";
		}
		else{
			echo "invalid username";
		}
		}
	}
?>