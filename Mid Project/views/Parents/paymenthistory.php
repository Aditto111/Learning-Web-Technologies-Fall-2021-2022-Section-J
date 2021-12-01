<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>User List</title>
</head>

<body>

    <center>
        <a href="home.php">Back </a> |
        <a href="../../controller/Parents/logout.php">logout </a>


        <br>
        <h1>Show Student Payment Information </h1>
        <table border="1" align="center">
            <tr>
                <th>STUDENT ID</th>
                <th>NAME</th>
                <th>1ST SEMISTER</th>
                <th>2ND SEMISTER</th>
                <th>3RD SEMISTER</th>
                <th>PAYMENT STATUS</th>
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
						    <td>' . $user[5] . '</td>
                            <td>' . $user[6] . '</td>
                            <td>' . $user[7] . '</td>
                              <td>' . $user[8] . '</td>
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