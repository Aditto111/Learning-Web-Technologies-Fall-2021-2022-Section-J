<?php
session_start();

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$usertype = $_POST['usertype'];
	$_SESSION['u_name'] = $username;
	$_SESSION['type'] = $usertype;
	if ($username != "") {
		if ($password != "") {
			if ($usertype != "") {
				$myfile = fopen('../../model/Parents/user.txt', 'r');

				while (!feof($myfile)) {
					$data = fgets($myfile);
					$user = explode('|', $data);
					if (trim($user[0]) == $username && trim($user[1]) == $password && trim($user[3]) == $usertype) {
						$_SESSION['profile_pic'] = $user[4];
						setcookie('flag', 'true', time() + 3600, '/');
						header('location: ../views/home.php');
					}
				}
				echo "invalid username/password";
			} else {
				echo "Invalid usertype...";
			}
		} else {
			echo "Invalid password...";
		}
	} else {
		echo "Invalid username...";
	}
}
