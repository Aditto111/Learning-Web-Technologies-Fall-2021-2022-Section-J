 <?php
    $action = "";
    if (!empty($_POST["action"])) $action = $_POST["action"];
    $editId = "";
    if ($action == "edit") {


        $editId = $_POST["editId"];
        $fileName = "../model/student.txt";
        $readData = file("../model/student.txt", FILE_IGNORE_NEW_LINES);


        list($username, $password, $email, $usertype) = array_pad(explode("|", $readData[$editId], 4), 4, null);
        $action = "edit";
        $submit = "Update";
        $formTitle = "Edit Record";
    }
    ?>

 <html>

 <head>
     <title>Records</title>
 </head>

 <body>
     <center>
         <a href="home.php">Back </a> |
         <a href="../controller/logout.php">logout </a>
     </center>
     <center>
         <form action="userlist.php" method="post" name="recordForm" id="recordForm">
             <label><?= $formTitle ?></label>
             <table style="border:3px solid black;" width="550">


                 <tr>
                     <td>Username:</td>
                     <td><input type="text" name="username" value="<?= $username ?>" /></td>
                 </tr>
                 <tr>
                     <td>Password:</td>
                     <td><input type="text" name="password" value="<?= $password ?>" /></td>
                 </tr>
                 <tr>
                     <td>Email:</td>
                     <td><input type="email" name="email" value="<?= $email ?>" /></td>
                 </tr>
                 <tr>
                     <td>User Type:</td>

                     <td><input type="text" name="usertype" value="<?= $usertype ?>" /></td>
                     <td>(Example: Admin, Faculty,Student ,Perents)</td>
                 </tr>
                 <tr>
                     <td>&nbsp;</td>
                     <td>
                         <input type="hidden" name="editId" value="<?= $editId ?>" />
                         <input type="submit" name="btnSubmit" value="<?= $submit ?>" />
                         <input type="hidden" name="action" value="<?= $action ?>" />
                     </td>
                 </tr>
             </table>
         </form>
     </center>
 </body>

 </html>