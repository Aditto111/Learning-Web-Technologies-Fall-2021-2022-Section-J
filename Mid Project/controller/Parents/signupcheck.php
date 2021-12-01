<?php
session_start();

if (isset($_POST['submit'])) {
	$uname = $_POST['username'];
	$pass = $_POST['password'];
	$email = $_POST['email'];
	$type = $_POST['usertype'];


	if ($uname != "") {
		if ($pass != "") {
			if ($email != "") {
				if ($type != "") {

					$des = "../../Parents/img/" . $_FILES['myfile']['name'];
					$src = $_FILES['myfile']['tmp_name'];

					if (move_uploaded_file($src, $des)) {

						$dbfile = fopen("../../model/Parents/user.txt", "a");
						$user = $uname . "|" . $pass . "|" . $email . "|" . $type . "|" . $des . "\r\n";
						
						fwrite($dbfile, $user);

						fclose($dbfile);

						header('location: ../views/Parents/login.html');
					} else {
						echo "please insert a profile picture";
					}
				} else {
					echo "Invalid usertype...";
				}
			} else {
				echo "Invalid email...";
			}
		} else {
			echo "Invalid password...";
		}
	} else {
		echo "Invalid username...";
	}
}
