<html>
<head>
    
    <title>Name Field </title>
</head>
<body>  
    <form method="POST" action="#" >
        <fieldset border-width: 3px>
            <legend>NAME</legend>
            
                        <input type="text" name="myname" value="<?php 

    
    if(isset($_REQUEST['submit']))
    {
        $str = $_REQUEST['myname'];
       if (strlen($_POST["myname"])<2)
            {
              echo " $str-atleast 2 or more";
            }
       
       
    }
    
?>
"><br/>
                    
                        <input type="submit" name="submit" value="Submit">
                    
        </fieldset>
    </form>
</body>
</html>