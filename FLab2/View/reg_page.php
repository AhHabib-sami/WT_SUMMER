<?php
include("../Control/reg_process.php");
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
    <title> Registration Form with CSS</title>
    <div class="header1">
        <h1> ABC Management System</h1>
    </div>

    <div class="header2">
        <h3>We create Future</h3>
    </div>
</head>
<div class="sticky">
    <div class="topnav">
        <a href="#">Home</a>
        <a href="#">About US</a>
        <a href="#">Shop</a>
    </div>
</div>


<div class="registrationBox">
    <h1 align="left">Registration form </h1>
</div>

<body>

    <form action="" method="post" enctype="multipart/form-data">




        <div class="form">
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="fname"></td>
                </tr>

                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname"></td>
                </tr>

                <tr>
                    <td> Age</td>
                    <td><input type="text" name="age"></td>
                </tr>



                <tr>
                    <td>Designation</td>
                    <td>
                        <input type="radio" name="designation" value="junior programmer"> Junior Programmer
                        <input type="radio" name="designation" value="senior programmer"> Senior Programmer
                        <input type="radio" name="designation" value="project lead"> Project Lead

                    </td>
                </tr>


                <tr>
                    <td> Field of interest</td>
                    <td>
                        <input type="checkbox" name="java" value="JAVA">JAVA
                        <input type="checkbox" name="php" value="PHP">PHP
                        <input type="checkbox" name="cpp" value="C++">C++
                    </td>
                </tr>



                <tr>
                    <td> Email</td>
                    <td><input type="text" name="email"></td>
                </tr>


                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pass"></td>
                </tr>



                <tr>
                    <td>Please Choose a file</td>
                    <td><input type="file" name="myfile"></td>
                    <td>

                    </td>
                </tr>

        </div>


       <tr>
            <td><input class = "button" type="submit" name="submit" value="Submit">
        

       
            <input class = "button" type="submit" name="reset" value="Reset"></td>
       

       </tr>


        </div>
        </table>

        </div>
    </form>
</body>

</html>