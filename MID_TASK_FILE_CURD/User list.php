<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List</title>
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="log Out.php">logout </a> 
	</center>
	<br>
	<table border="1" align="center">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
		<?php
		    $myfile2 = fopen('userList.txt','a');
		    $count =0;
			
			while (!feof($myfile2)) {
				$data = fgets($myfile2);
				if($data!="")
				{
					$user = explode('|', $data);
		
					echo '<tr>
						    <td>' . ++$count . '</td>
						    <td>' . $user[0] . '</td>
						    <td>' . $user[1] . '</td>
						    <td>' . $user[2] . '</td>
						    <td>
							<a href="edit.php?id='.$count.'"> EDIT</a> |
							<a href="delete.php?id='.$count.'"> DELETE</a>
						    </td>
					     </tr>';
				}
			}
			fclose($myfile2);
		?>
			
				<a href="edit.php?id=2"> EDIT</a> | 
				<a href="delete.php?id=2"> DELETE</a> 
			</td>
		</tr>
	</table>
</body>
</html>