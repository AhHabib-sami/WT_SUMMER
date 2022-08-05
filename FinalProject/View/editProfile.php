<?php
include("../Control/editProfileProcess.php");

$mydb = new mydb();
$conobj = $mydb->openCon();

$sql = "select * from user";
$result = $conobj->query($sql);
$row = mysqli_fetch_assoc($result);
$idNumber = $_GET['id'];

?>

<head>
    <title>Profile</title>
</head>

<body style="background:lightsteelblue">

    <br><br>

    <form method="POST" action="" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $idNumber ?>" />

        <center>
            <fieldset style="width:400px">

                <legend>CGA PROFILE</legend>
                <table style="font-family:Times New Roman">

                    <tr>
                        <td>Name</td>
                        <td><input id="Name" type="text" name="name" value="<?= $row['Name'] ?>"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input id="username" type="text" name="username" value="<?= $row['username'] ?>"></td>>
                    </tr>
                    <tr>
                        <td>Mobile Number</td>
                        <td><input id="pass" type="text" name="password" value="<?= $row["Password"] ?>"></td>
                    </tr>


                    <tr>
                        <td>Email</td>
                        <td><input id="emaill" type="text" name="email" value="<?= $row["Email"] ?>"></td>
                    </tr>


                    <tr>
                        <td>Gnder</td>
                        <td><input id="pass" type="text" name="gender" value="<?= $row["Gender"] ?>"></td>
                    </tr>

                    <tr>
                        <td>Date of Birth</td>
                        <td><input id="pass" type="date" name="password" value="<?= $row["Date_Of_Birth"] ?>"></td>
                    </tr>

                    <tr>
                        <td>Interest</td>
                        <td><input id="interest" type="text" name="interest" value="<?= $row["Interest"] ?>"></td>

                    </tr>

                    </td>
                    </tr>
                    <tr>
                        <td>NID</td>
                        <td><input id="file" type="file" name="myfile" value="<?= $row["File"] ?>">
                    </tr>

                    <tr>

                        <td><input type="submit" name="update" value="Update" onblur="checknull()"></td>
                        <td><input type="submit" name="back" value="Back"></td>

                    </tr>
                    <tr>
                        <td></td>
                        <td align="right">
                            <a href="../view/logPage.php"> logout </a>
                        </td>
                    </tr>

                    <tr align="right">

                        <td>
                            <input type="file" name="myfile">
                        </td>

                        <td>
                            <image src="../../assests/<?= $row['picture'] ?>" width="200px" height="240px"> </br>
                        </td>
                    </tr>

                    <tr>



                    </tr>



                </table>
            </fieldset>
        </center>
    </form>