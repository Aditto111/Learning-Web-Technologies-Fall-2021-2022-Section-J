<?php
	session_start();
    require_once('../model/usersModel.php');

	if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $buying=$_POST['buying'];
    $selling=$_POST['selling'];

		if($name != ""){
			if($buying != ""){
				if($selling != ""){

					  $product =[
                               'name'=> $name,
                               'buying'=>$buying,
                               'selling'=>$selling
                              ];

                        $status= AddProduct($product);

                      if($status)
                      {
                        echo"DONE........";
                         // header('location:addProduct.php');
                      }
                      else
                      {
                          echo"Try Again........";
                      }
				}else{
					echo "Invalid selling...";
				}	
			}else{
				echo "Invalid Buying...";
			}
		}else{
			echo "Invalid Name...";
		}
	}
?>

<html>
<body>
<fieldset >
	<legend>Add product</legend>

  Name:</br><input type="text" name="username"></br>
  Buying Price</br><input type="text" name="buy"></br>
  Selling Price</br><input type="text" name="sell"></br>
  _________________________________________ <br/>
   
    <br/>  <input type="checkbox" name="" value="">Display</br>

  __________________________________________

</br><input type="submit" name="submit"value="SAVE"></br>






</fieldset>

</body>
</html>