<?php
include("../Control/reg_process.php");
?>
<html>
<br>

<body>
    <link rel="stylesheet" href="../css/mycss.css">
    <table align="center">
        <th align="right"> অর্থ বিভাগ, অর্থ মন্ত্রণালয় </th>
    </table>

    <h1 align="center"> <img src="../img/bd.jpg" align="center" height="70" wight="50">
        <font size="+2">Register as a CGA</font>
    </h1>

    <h1 align="center">

        <form action="" method="post" enctype="multipart/form-data">

            <table align="center">
                <tr>
                    <td> Name </td>
                    <td><input type="text" name="fname" placeholder="Name" id="name" onkeyup="checkName()"></td>
                    <td>
                        <p id="fnameError"></p>
                    </td>

                </tr>

                <tr>
                    <td>User Name </td>
                    <td><input type="text" name="uname" placeholder="user name" id="uname" onkeyup="checkUserName()"></td>
                    <td>
                        <p id="userNameError"></p>
                    </td>

                </tr>

                <tr>
                    <td> Password </td>
                    <td><input type="password" name="pass" placeholder="password" id="pass" onkeyup="checkPass()"></td>
                    <td>
                        <p id="passError"></p>
                    </td>


                </tr>


                <tr>
                    <td>Department Head of</td>
                    <td>

                        <input type="checkbox" name="LIT" value="CAG" id="jp"> Comptroller And Audior General of Bangladesh
                        <input type="checkbox" name="MAT" value="DC" id="sp">Division Controller
                        <input type="checkbox" name="SC" value="AUD" id="pl">Auditor


                    </td>


                </tr>

                <tr>
                    <td> Mobile Number</td>
                    <td><select>
                            <option value="code"> +880
                                <input type="text" name="phone" placeholder="Mobile Number" id="mobile" onkeyup="checkPhone()"></td>
                    <td>
                        <p id="mobileError"></p>
                    </td>

                </tr>



                <tr>
                    <td> Email</td>
                    <td>
                        <input type="text" name="mail" placeholder="E-mail" id="mail" onkeyup="checkEmail()">
                    <td>
                        <p id="mailError"></p>
                    </td>
                    </td>

                </tr>

                <tr>
                    <td>Age </td>
                    <td><input type="text" name="age" placeholder="Age" id="age" onkeyup="checkAge()"></td>
                    <td>
                        <p id="ageError"></p>
                    </td>
                </tr>



                <tr>
                    <td> Gender </td>
                    <td>
                        <input type="radio" name="gender" value="Male" id="male" onkeyup="checkGender()">Male
                        <input type="radio" name="gender" value="Female" id="female">Female
                        <input type="radio" name="gender" value="other" id="other">Other
                    </td>
                    <td>
                        <p id="gndErr"></p>
                    </td>



                </tr>


             

                <tr>
                    <td>Date of Birth</td>

                    <td><input type="date" name="dob" value="Date of Birth" placeholder="Date of birth"></td>
                </tr>
                <tr>
                    <td>Please give your NID</td>
                    <td><input type="file" name="myfile"></td>
                    <td>

                    </td>
                </tr>



            </table>

            <br>
            <table align=center>
                <tr>
                    <td align="right"><input type="submit" name="Submit" value="Submit"></td>


                    <td align="right"><input type="submit" name="update" value="Update"></td>

                </tr>
            </table>
            <br>
            <div align="center" class="button">
                <input type="submit" class="button" name="showData" value="Information employee">

            </div>
            <br>

            <table>

                <td id="haveAcc"> Already Have an account?</td>
                <br>
                <td align="center"><a href="../View/logPage.php">Log In </td>
                </tr>
                </td>
                </tr>


            </table>
    </h1>
    </form>

</body>


</html>


<script src="../js/myjs.js"></script>