<html>
    <head> <title> Task 07 </title></head>
    <body>
        <table border= "1">
        <tr>
            <td>
                <?php
        
                      for($i=1; $i<=3; $i++)
                      {
                        for($j=1; $j<=$i; $j++)
                        {
                        echo "* ";
                        }
                        echo "<br>";
                      }
                      
                ?>
            </td>
            <td>
                <?php
        
                      for($i=3; $i>=1; $i--)
                      {
                        for($j=1; $j<=$i; $j++)
                        {
                        echo $j." ";
                        }
                        echo "<br>";
                      }
                      
                ?>
            </td>
            <td>
                <?php
                
                $alpha='A';
        
                      for($i=1; $i<=3; $i++)
                      {
                        for($j=1; $j<=$i; $j++)
                        {
                        echo $alpha++." ";
                        
                        }
                        echo "<br>";
                      }
                      
                ?>
            </td>
        </tr>
        </table>
    </body>
</html>