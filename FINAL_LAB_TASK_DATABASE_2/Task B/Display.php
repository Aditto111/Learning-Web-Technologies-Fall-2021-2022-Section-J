<?php
     
     require_once('usersModel.php');


?>
<html>
<body>

<form method="post">
		<fieldset>
			<legend>DISPLAY</legend>
	<table border="2">
		<tr>
			<th>NAME</th>
			<th>Selling</th>
			<th>Buying</th>

			<th>Profit</th>
			<th>Action</th>
			<th colspan="2"></th>

			
		</tr>
		<?php

              $result = getAllProducts();
		      while($user= mysqli_fetch_assoc($result))
            {  ?>
                
             <tr>
				<td><?=$user['name']?></td>
				<td><?=$user['selling price']?></td>
				<td><?=$user['buying price']?></td>
				<td><?=($user['selling price']-$user['buying price'])?></td>
				<td>
				<a href="edit.php?id=<?=$user['id']?>"> EDIT</a> |
				<a href="delete.php?id=<?=$user['id']?>"> DELETE</a>
				</td>
			 </tr>

         <?php
            }
		?>
	</table>
    </fieldset>
	</form>
</body>
</html>