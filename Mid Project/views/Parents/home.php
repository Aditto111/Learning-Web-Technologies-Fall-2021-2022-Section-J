<?php
session_start();
require_once('header.php');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Parents Home Page</title>
</head>

<body>
	<center>
		<br><br><br><br>


		<table width="70%" border="2">

			<tr>
				<td height="100px" width="100px">
					<img src="<?= $_SESSION['profile_pic'] ?>" width="100px" height="100px" />
				</td>

				<td style="text-align:center;">

					<h1> Welcome to <?php echo ($_SESSION['type']); ?> Portal</h1>
					<h2><?php echo ($_SESSION['type']); ?> Name " <?php echo ($_SESSION['u_name']); ?> "</h2>
				</td>

			</tr>
			<tr>

				<td colspan=" 2" align="right">
					<a href="home.php">Home</a> |
					<a href="create.php"> Refer Student</a> |
					<a href="../controller/logout.php"> logout</a>
				</td>
			</tr>
			<tr height="250px">
				<td>

				</td>

				<td>
					<ol>

						<li><a href="userlist.php"> Student List</a> <br></li>
						<li><a href="result.php"> Result List</a> <br></li>
						<li><a href="attendance.php"> Student Attendance List</a> <br></li>
						<li><a href="faculty.php"> Faculty Information List</a> <br></li>
						<li><a href="paymenthistory.php"> Student Payment History</a> <br></li>

					</ol>
				</td>

			</tr>
			<tr height="50px">
				<td colspan="3" align="center"> copyright by Addito @2021</td>
			</tr>
		</table>
	</center>
</body>

</html>