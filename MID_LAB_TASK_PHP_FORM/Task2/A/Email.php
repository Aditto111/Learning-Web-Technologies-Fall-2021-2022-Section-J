<?php 

    
    
    if(isset($_REQUEST['submit']))
    {
        $email = $_REQUEST['Email'];
        if($email == ""){
            echo "Null Value";
        }else{
            echo $email;
        }   
    }
    
?>