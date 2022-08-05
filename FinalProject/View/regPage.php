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

        <form action="" method="post" enctype="multipart/form-data" onsubmit=" return formcheck()">

            <table align="center">
                <tr>
                    <td> Name </td>
                    <td><input type="text" name="fname"></td>


                </tr>

                <tr>
                    <td>User Name </td>
                    <td><input type="text" name="uname"></td>

                </tr>

                <tr>
                    <td> Password </td>
                    <td><input type="password" name="pass"></td>


                </tr>


                <tr>
                    <td> Field of interest</td>
                    <td>

                        <input type="checkbox" name="LIT" value="Literature"> Literature
                        <input type="checkbox" name="MAT" value="Mathematics">Mathematics
                        <input type="checkbox" name="SC" value="Science">Science


                    </td>


                </tr>

                <tr>
                    <td> Mobile Number</td>
                    <td><select>
                            <option value="code"> +880
                                <input type="text" name="phone"></td>
                </tr>



                <tr>
                    <td> Email</td>
                    <td>
                        <input type="text" name="mail">
                    </td>

                </tr>

                <tr>
                    <td>Age </td>
                    <td><input type="text" name="age"></td>

                </tr>



                <tr>
                    <td> Gender </td>
                    <td>
                        <input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="other">Other
                    </td>


                </tr>

                <tr>
                    <td>Date of Birth</td>

                    <td><input type="date" name="dob" value="Date of Birth"></td>
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
            
            <div align = "center" class="button">
                <input type="submit" class = "button" name = "showData" value = "Information employee">
                
            </div>
            <br>
            <table>

                <td id="haveAcc"> Already Have an account?</td>
                <td align="center"><a href="../View/logPage.php">Log In </td>
                </tr>
                </td>
                </tr>


            </table>
    </h1>
    </form>

</body>


</html>