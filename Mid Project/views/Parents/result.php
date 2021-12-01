<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Student Result List</title>
</head>

<body>

    <center>
        <a href="home.php">Back </a> |
        <a href="../../controller/Parents/logout.php">logout </a>


        <br>
        <h1>Show Student Result List</h1>
        <table border="1" align="center">
            <tr>
                <th>Student ID</th>
                <th>NAME</th>
                <th>CGPA</th>
            </tr>

            <?php
            $myfile2 = fopen('../../model/Parents/result.txt', 'r');
            

            while (!feof($myfile2)) {
                $data = fgets($myfile2);
                if ($data != "") {
                    $user = explode('|', $data);

                    echo '<tr>
						    <td>' . $user[0] . '</td>
						    <td>' . $user[1] . '</td>
						    <td>' . $user[2] . '</td>
						    </td>
					     </tr>';
                }
            }
            fclose($myfile2);
            ?>

            </td>
            </tr>
        </table>
    </center>
</body>

</html>