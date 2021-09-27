<html>
    <head> <title> Task 07 </title></head>
    <body>
        <table border= "1">
        
        <th> The array to declare </th>
        <th colspan=2 > Shapes to print </th>
        <tr>
            <td>
                <?php
                    
                    $arr= [
                                [1,2,3,'A'],
                                [1,2,'B','C'],
                                [1,'D','E','F'],
                          ];
        
                      for($i=0; $i<count($arr); $i++)
                      {
                            
                        for ($j=0; $j < count($arr[$i]) ; $j++) 
                        { 
                             echo $arr[$i][$j]." ";
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