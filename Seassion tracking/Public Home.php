<?php 
    session_start();
    if(isset($_SESSION['flag'])){

?>

<html>
    <head>
        <body>
            <table align ="center"width="50%" height='400px' border="1" >
                <tr>
                 <td height='50px' width='50px' colspan="3" align="Center" style=font-size:40px bgcolor="grey"><b> Home Page</b></td>
                
             </tr>
             <tr hight="400px" allign='center'>
                 <td >
       <h1 >Welcome Home!!!</h1>
      
                </td>
            </tr>
            </table>
        </body>
    </head>
</html>

<?php
    }else{
        header('location: loggedin.html');
    }
?>