<?php

include("../Control/editProfileProcess.php");
//echo "hi". $_SESSION["fname"];
$uid = $_REQUEST['id'];

$mydb = new mydb();
$connobj = $mydb->opencon();

$result = $mydb->getUser($connobj,$uid);


    
?>

<head>
    <title>CGA Profile</title>
</head>

<body style="background:lightsteelblue">

    <br><br>

    <form method="POST" action="" enctype="multipart/form-data">
       

        <center>
            <fieldset style="width:400px">

                <legend>CGA PROFILE</legend>
                <table style="font-family:Times New Roman">
                
                <tr>
                        <td>ID</td>
                        <td><input type = "text" name = "id" value = <?php echo $uid; ?> ></td>
                    </tr>

                    <tr>
                        <td>Name</td>
                        <td><input type = "text" name = "name" value = <?php echo $result["Name"]; ?> ></td>
                    </tr>
                    <tr>
                        <td>User Name</td>
                        <td><input type = "text" name = "uname" value = <?php echo $result["username"]; ?> ></td>
                    </tr>
                   
                    <tr>
                        <td>Password</td>
                        <td><input type = "text" name = "pass" value = <?php echo $result["Password"] ?> ></td>
                    </tr>

                    <tr>
                        <td>Mobile Number</td>
                        <td><input type = "text" name = "mobile" value = <?php echo $result["MobileNumber"] ?> ></td>
                    </tr>

                    <tr>
                        <td>E-mail</td>
                        <td><input type = "text" name = "mail" value = <?php echo $result["Email"]  ?> ></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td><input type = "text" name = "dob" value = <?php echo $result["Date_Of_Birth"]  ?> ></td>
                    </tr>

                    <tr>
                        <td>Age</td>
                        <td><input type = "text" name = "age" value = <?php echo  $result["Age"]?> ></td>
                    </tr>

                    <tr>
                        
                        <td align="right"><input type = "submit" name = "update" value = "update" ></td>
                        <td></td>
                    </tr>
                    <tr>
                        
                        <td align="right"><input type = "submit" name = "back" value = "<<back" ></td>
                        <td></td>
                    </tr>
                </table>

            </fieldset>
        </center>
    </form>