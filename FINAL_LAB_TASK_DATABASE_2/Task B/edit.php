<?php
	session_start();
    require_once('usersModel.php');

    $id= $_REQUEST['id'];

   $user = getProductsById($id);
    // print_r($user);


?>

<html>
<body>
	
	<form method="post" action="editcheck.php">
		<fieldset>
			<legend>EDIT PRODUCT</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?=$user['name']?>"></td>
				</tr>
				<tr>
					<td>Buying Price:</td>
					<td><input type="number" name="buying" value="<?=$user['buying price']?>"></td>
				</tr>
				<tr>
					<td>Selling Price:</td>
					<td><input type="number" name="selling" value="<?=$user['selling price']?>"></td>
				</tr>
                <tr>
					<td><input type="checkbox"name="dis" value="dis">Display</td>
					<td></td>
				</tr>
                <tr>
					<td colspan="2"><hr/></td>
					
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="SAVE">|<a href="Display.php">Back</a></td>
					<td><input type="hidden"name="id" value="<?=$user['id']?>"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>