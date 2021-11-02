<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>User List</title>
</head>

<body>

    <center>
        <a href="home.php">Back </a> |
        <a href="../controller/logout.php">logout </a>


        <br>
        <h1>Show All Faculty Information List</h1>
        <table border="1" align="center">
            <tr>
                <th>FACULTY ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>DEPARTMENT</th>
                <th>CONSULTING TIME</th>
            </tr>

            <?php

            $myfile2 = fopen('../model/faculty.txt', 'r');


            while (!feof($myfile2)) {
                $data = fgets($myfile2);
                if ($data != "") {
                    $user = explode('|', $data);

                    echo '<tr>
						    <td>' . $user[0] . '</td>
						    <td>' . $user[1] . '</td>
						    <td>' . $user[2] . '</td>
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