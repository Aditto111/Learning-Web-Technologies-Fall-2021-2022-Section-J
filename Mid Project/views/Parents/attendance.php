<!DOCTYPE html>
<html>

<head>
    
    <title>User List</title>
</head>

<body>

    <center>
        <a href="home.php">Back </a> |
        <a href="../../controller/Parents/logout.php">logout </a>


        <br>
        <h1>Show Student Attendance List</h1>
        <table border="1" align="center">
            <tr>
                <th>STUDENT ID</th>
                <th>NAME</th>
                <th>STATUS</th>
                <th>ATTENDANCE Percentage</th>
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
						    <td>' . $user[3] . '</td>
                            <td>' . $user[4] . '</td>
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