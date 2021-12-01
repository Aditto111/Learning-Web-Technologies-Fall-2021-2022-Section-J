<?php
session_start();
include('header.php');

if (isset($_POST['submit'])) {
	$uname = $_POST['username'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$refertype = $_POST['refertype'];

	if ($uname != "") {
		if ($phone != "") {
			if ($email != "") {
				if ($refertype != "") {

					$myfile = fopen("refer_../../model/Parents/student.txt", "a");
					$user = $uname . "|" . $phone . "|" . $email . "|" . $refertype . "|" . "Student" . "\r\n";
					
					fwrite($myfile, $user);

					fclose($myfile);

					header('location: ../../views/Parents/home.php');
				} else {
					echo "Invalid refertype...";
				}
			} else {
				echo "Invalid email...";
			}
		} else {
			echo "Invalid phone...";
		}
	} else {
		echo "Invalid username...";
	}
}
?>
<html>

<head>
	<title>Create New User</title>
</head>

<body>
	<center>
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php">logout </a>
	</center>

	<form method="post" action="">
		<fieldset>
			<legend>Refer Student to Admin</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>phone:</td>
					<td><input type="phone" name="phone" value=""></td>
				</tr>
				<tr>
					<td>email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>Refer:</td>
					<td>
						<input type="radio" name="refertype" value="Admin" />Admin
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Create"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>

</html>