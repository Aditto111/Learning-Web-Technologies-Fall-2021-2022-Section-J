<?php

session_start();
require_once('usersModel.php');
    
    $name=$_REQUEST['name'];
    $buying=$_REQUEST['buying'];
    $selling=$_REQUEST['selling'];
    $id=$_REQUEST['id'];


    $user= ['id'=>$id , 'name'=>$name ,'buying'=>$buying ,'selling'=>$selling];

    $status=editProducts($user);

    if($status)
    {
       header('location:Display.php');
    }
    else
    {
        header('location:edit.php?id='.$id);
    }


?>