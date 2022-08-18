<?php
include("../Control/log_process.php");


//setcookie("cookie", "welcome", time() + 360000);
//if (($_COOKIE["cookie"] == "welcome")) {

//  echo " we know you sir";
//} else {

//  echo " greetings!";
//}

?>
<html>

<link rel="stylesheet" type="text/css" href="../css/logStyle.css">

<body>

    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <br>

        <form action="" method="post" enctype="multipart/form-data" onsubmit=" return formcheck()">
            <table>
                <table align="center">

                    <div>
                        <br><br>
                        <th>
                            <font size="+3" align="left"> হিসাব মহানিয়ন্ত্রকের কার্যালয় </font>
                        </th>

                        <tr>

                            <th> <br><br>
                                <font size="+2"><img src="../img/bd.jpg" align="center" height="70" wight="50"> Ministry of Finance(অর্থ মন্ত্রণালয়)</font>
                            </th>
                        <tr>
                            <td align="right" class="headline">___where budget is calculated</td>
                        </tr>
                        </tr>
                </table>
                </div>
                <table align="center">


                    <tr align="center">
                        <td><br> Name</td>
                        <td align="center"><br><input type="text" name="loginName" placeholder="user name" id="loginName" onkeyup="checkName()">
                        <td>
                            <br>
                            <p id="usernameLoading"></p>
                        </td>

                    </tr>




                    </tr>

                    <tr align="center">
                        <td> Password</td>
                        <td align="center"> <input type="password" name="loginpass" placeholder="Password" id="loginPass" onkeyup="checkPass()"></td>
                        <td>
                            <br>
                            <p id="passwordLoading"></p>
                        </td>
                    </tr>





                </table>

                <table align="center">

                    <tr align="center">
                        <td><input type="checkbox" name="remember" value="c1"> Remember me</td>
                    </tr>
                    <tr align="center">

                        <td><br><input type="submit" name="login" value="Log In" placeholder="LogIn"></td>
                        <td><br><input type="submit" name="edit" value="Edit" placeholder="LogIn"></td>
                    </tr>
                    <tr align="right">
                </table>

                <table align="center">
                    <br><br>
                    <td> Do not have Account?
                        <a href="../View/regPage.php"> Create New Account</a>
                    </td>



                </table>
            </table>
    </head>

    </form>

</body>

</html>
<script src="../js/logJs.js"></script>