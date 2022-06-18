<?php
include("../Control/Process.php")
?>
<html>

<body>

    <head>
        <h1> Welcome to the registration form</h1>
        <form action="" method="post" enctype="multipart/form-data">

            <table>
                <tr>
                    <td> Name </td>
                    <td><input type="text" name="fname"></td>

                    <td>
                        <?php
                        if (isset($_REQUEST["submit"])) {
                            echo $firstName;
                        }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>User Name </td>
                    <td><input type="text" name="uname"></td>
                    <?php
                    if (isset($_REQUEST["submit"])) {
                    echo $firstName;
                    }
                    ?>
                </tr>

                <tr>
                    <td> Password </td>
                    <td><input type="password" name="pass"></td>

                    <td>
                        <?php

                        if (isset($_REQUEST["submit"])) {
                            echo $password;
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td> Email</td>
                    <td>
                        <input type="text" name="mail">
                    </td>
                    <td>
                        <?php

                        if (isset($_REQUEST["submit"])) {
                            echo $emailerr;
                        }
                        ?>
                </tr>

                <tr>
                    <td>Age </td>
                    <td><input type="text" name="age"></td>
                    <td>
                        <?php
                        if (isset($_REQUEST["submit"])) {
                            echo $var_age;
                        }
                        ?>
                    </td>
                </tr>



                <tr>
                    <td> Gender </td>
                    <td> <input type="radio" name="gender" value="Male">Male</td>
                    <td> <input type="radio" name="gender" value="Female">Female</td>
                    <td> <input type="radio" name="gender" value="other">Other</td>
                    <td>
                        <?php
                        if (isset($_REQUEST["submit"])) {
                            echo $var_gender;
                        }
                        ?>
                    </td>
                </tr>


                <tr>
                    <td><input type="Submit" name="submit"></td>
                </tr>

                <tr>
                    <td> <input type="Submit" name="next" value="Next"> </td>
                </tr>

            </table>
    </head>
</body>

</html>