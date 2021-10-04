<html>
<head>
    
    <title>Name Field </title>
</head>
<body>  
    <form method="gets" action="#" >
        <fieldset border-width: 3px>
            <legend>NAME</legend>
            
                        <input type="text" name="myname" value="<?php 

    //print_r($_GET);
    
    if(isset($_REQUEST['submit']))
    {
        $str = $_REQUEST['myname'];
        if($str >chr(2))
            echo $str;
         elseif($str <chr(2) )
            echo "Not Fullfill";
            else
            echo "";
       
    }
    
?>
"><br/>
                    
                        <input type="submit" name="submit" value="Submit">
                    
        </fieldset>
    </form>
</body>
</html>