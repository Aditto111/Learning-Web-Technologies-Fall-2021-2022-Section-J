<html>

<head>
    <title>Blood Group</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Blood Group</legend>
           <select name="bloodGroup" >
            <option value=" "> </option>
            <option value="A+">A+</option>
            <option value="AB+">AB+</option>
            <option value="A-">A-</option>
            <option value="AB-">AB-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
                      
        </select>
        <br/>
        <hr>
        <input type="submit" name="submit" value="Submit"/>
<?php

  if(isset($_REQUEST['submit']))
    {
        $blood = $_REQUEST["bloodGroup"];
        if($blood == " "){
            echo "Must be selected ";
        }else{
            echo $blood;
        }   
    }
    
?>
        </fieldset>
    </form>
</body>

</html>