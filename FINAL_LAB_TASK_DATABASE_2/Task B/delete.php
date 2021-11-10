<?php
    session_start();
    require_once('usersModel.php');

    if(isset($_GET['delete']))
    {
        $id=$_GET['delete'];
        //print_r($id);

        $result=delete($id);

        if($result)
        {
            header('location:Display.php');
        }
        else
        {
            echo"error";
        }
        
    }

?>